<?php

namespace App\Console\Commands;

use App\Models\Article;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * Met le catalogue en conformité Google Merchant Center :
 *  - régénère les slugs italiens à partir du nom portugais (avec redirection 301 de l'ancienne URL) ;
 *  - vide les prix barrés (old_price) qui ne correspondent à aucun prix réellement pratiqué.
 *
 * Idempotent : relancer la commande sur une base déjà traitée ne change rien.
 */
class FixCatalogForMerchantCenter extends Command
{
    protected $signature = 'gmc:fix-catalog
                            {--dry-run : Affiche les changements sans rien écrire}
                            {--skip-slugs : Ne pas toucher aux slugs}
                            {--skip-prices : Ne pas toucher aux prix barrés}';

    protected $description = 'Corrige les slugs italiens et retire les prix barrés injustifiables (Google Merchant Center)';

    public function handle(): int
    {
        $dry = (bool) $this->option('dry-run');

        if ($dry) {
            $this->warn('MODE DRY-RUN : aucune écriture en base.');
        }

        $articles = Article::all();
        $this->info($articles->count() . ' articles chargés.');

        $slugsChanged = 0;
        $pricesCleared = 0;

        DB::beginTransaction();

        try {
            foreach ($articles as $article) {
                if (! $this->option('skip-slugs')) {
                    $slugsChanged += $this->fixSlug($article, $dry);
                }

                if (! $this->option('skip-prices')) {
                    $pricesCleared += $this->clearStalePrice($article, $dry);
                }
            }

            if ($dry) {
                DB::rollBack();
            } else {
                DB::commit();
            }
        } catch (\Throwable $e) {
            DB::rollBack();
            $this->error('Échec : ' . $e->getMessage());

            return self::FAILURE;
        }

        $this->newLine();
        $this->info("Slugs régénérés    : {$slugsChanged}");
        $this->info("Prix barrés retirés : {$pricesCleared}");

        if ($dry) {
            $this->warn('Dry-run : relancer sans --dry-run pour appliquer.');
        }

        return self::SUCCESS;
    }

    /**
     * Régénère le slug à partir du nom portugais et conserve l'ancien pour la redirection 301.
     */
    private function fixSlug(Article $article, bool $dry): int
    {
        $namePt = $article->getTranslation('name', 'pt', false);

        if (blank($namePt)) {
            $this->line("  #{$article->id} : pas de nom portugais, slug inchangé.");

            return 0;
        }

        $base = Str::slug($namePt);

        if (blank($base)) {
            return 0;
        }

        // Noms portugais en doublon : le slug est suffixé par l'id pour rester unique.
        // Les deux formes sont acceptables, sinon deux articles homonymes se les échangent
        // à chaque exécution et la commande n'est plus idempotente.
        if ($article->slug === $base || $article->slug === $base . '-' . $article->id) {
            return 0;
        }

        $taken = Article::where('slug', $base)->where('id', '!=', $article->id)->exists();
        $target = $taken ? $base . '-' . $article->id : $base;

        $old = $article->slug;
        $this->line("  #{$article->id}  {$old}\n        -> {$target}");

        if (! $dry) {
            DB::table('article_slug_redirects')->updateOrInsert(
                ['old_slug' => $old],
                ['article_id' => $article->id, 'updated_at' => now(), 'created_at' => now()]
            );

            // Une ancienne URL qui redirigeait vers cet article reprend sa route :
            // si le nouveau slug était lui-même une ancienne URL, la redirection devient inutile.
            DB::table('article_slug_redirects')->where('old_slug', $target)->delete();

            $article->slug = $target;
            $article->save();
        }

        return 1;
    }

    /**
     * Retire le prix barré : aucun historique de prix n'existe pour le justifier.
     */
    private function clearStalePrice(Article $article, bool $dry): int
    {
        if ($article->old_price === null && blank($article->discount_percentage)) {
            return 0;
        }

        if (! $dry) {
            $article->old_price = null;
            $article->discount_percentage = null;
            $article->save();
        }

        return 1;
    }
}
