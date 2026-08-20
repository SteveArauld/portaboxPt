<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Flux produits Google Merchant Center, un par couple langue/pays.
 *
 *   /feed/google-pt.xml   portugais, Portugal
 *   /feed/google-de.xml   allemand,  Allemagne
 *
 * Deux propriétés gouvernent ce contrôleur :
 *
 * 1. PURETÉ LINGUISTIQUE — un produit dont le titre ou la description
 *    manque dans la langue du flux en est exclu, jamais remplacé par la
 *    langue par défaut. Google compare la langue du flux à celle de la page
 *    d'atterrissage et déclasse les produits incohérents.
 *
 * 2. STABILITÉ OCTET POUR OCTET — deux appels successifs produisent le même
 *    XML : tri par clé primaire, identifiants tirés de l'id, aucune date de
 *    génération, aucune valeur aléatoire, prix à décimales fixes.
 *
 * Les routes sont déclarées hors du groupe « web » (voir routes/feeds.php) :
 * ni session, ni CSRF, ni négociation de langue. Le robot Google, qui crawle
 * depuis les États-Unis, reçoit donc exactement le même document que
 * n'importe quel visiteur anonyme.
 */
class ProductFeedController extends Controller
{
    public function __invoke(string $feed): StreamedResponse
    {
        $config = config("feeds.feeds.{$feed}");

        abort_if($config === null, 404);

        $signature = $this->signature($config['locale']);

        $response = new StreamedResponse(
            fn () => $this->stream($config),
            200,
            [
                'Content-Type'  => 'application/xml; charset=UTF-8',
                'Cache-Control' => 'public, max-age=' . config('feeds.cache_ttl'),
                // L'empreinte change dès qu'un produit est modifié, créé ou
                // supprimé : le cache se périme de lui-même, sans purge.
                'ETag'          => '"' . $signature . '"',
            ]
        );

        return $response;
    }

    /**
     * Empreinte du catalogue : nombre de fiches + dernière modification.
     * Deux appels sans changement en base produisent la même valeur.
     */
    private function signature(string $locale): string
    {
        $row = DB::table('articles')
            ->selectRaw('COUNT(*) AS total, COALESCE(MAX(updated_at), 0) AS touched')
            ->first();

        return substr(hash('sha256', $locale . '|' . $row->total . '|' . $row->touched), 0, 32);
    }

    /**
     * Écrit le XML au fil de l'eau. Les fiches sont lues par curseur : la
     * mémoire reste plate quel que soit le volume du catalogue.
     */
    private function stream(array $config): void
    {
        $locale  = $config['locale'];
        $country = $config['country'];

        echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        echo '<rss version="2.0" xmlns:g="http://base.google.com/ns/1.0">' . "\n";
        echo '  <channel>' . "\n";
        echo '    <title>' . $this->escape($config['channel']['title']) . '</title>' . "\n";
        echo '    <link>' . $this->escape($this->homeUrl($locale)) . '</link>' . "\n";
        echo '    <description>' . $this->escape($config['channel']['description']) . '</description>' . "\n";

        $query = Article::query()
            ->with(['category', 'images' => fn ($q) => $q->orderBy('position')->orderBy('id')])
            ->whereNotNull('price')
            ->where('price', '>', 0)
            ->orderBy('id');

        foreach ($query->cursor() as $article) {
            $item = $this->buildItem($article, $locale, $country);

            if ($item !== null) {
                echo $item;
                flush();
            }
        }

        echo '  </channel>' . "\n";
        echo '</rss>' . "\n";
    }

    /**
     * Construit un <item>, ou null si la fiche doit être écartée.
     */
    private function buildItem(Article $article, string $locale, string $country): ?string
    {
        $title       = $this->translated($article, 'name', $locale);
        $description = $this->translated($article, 'description', $locale)
            ?: $this->translated($article, 'short_description', $locale);
        $slug        = $this->translated($article, 'slug', $locale);

        // Exclusions : traduction absente, pas de slug dans cette langue,
        // ou aucune image. Aucun repli sur une autre langue.
        if ($title === null || $description === null || $slug === null) {
            return null;
        }

        $images = $article->images;

        if ($images->isEmpty()) {
            return null;
        }

        $out = '    <item>' . "\n";
        $out .= $this->tag('g:id', (string) $article->id);
        $out .= $this->tag('title', $this->clamp($title, 150));
        $out .= $this->tag('description', $this->clamp($this->plain($description), 5000));
        $out .= $this->tag('link', $this->productUrl($locale, $slug));
        $out .= $this->tag('g:image_link', $this->imageUrl($images->first()->image_path));

        foreach ($images->skip(1)->take(10) as $image) {
            $out .= $this->tag('g:additional_image_link', $this->imageUrl($image->image_path));
        }

        $out .= $this->tag('g:availability', ((int) $article->stock) > 0 ? 'in_stock' : 'out_of_stock');
        $out .= $this->tag('g:condition', 'new');
        $out .= $this->tag('g:price', number_format((float) $article->price, 2, '.', '') . ' ' . config('feeds.currency'));
        $out .= $this->tag('g:brand', config('feeds.brand'));
        $out .= $this->tag('g:mpn', (string) $article->sku);
        $out .= $this->tag('g:identifier_exists', 'no');
        $out .= $this->tag('g:google_product_category', config('feeds.google_product_category'));

        // product_type omis plutôt que servi dans une autre langue.
        $productType = $article->category
            ? $this->translatedValue($article->category->getTranslation('name', $locale, false))
            : null;

        if ($productType !== null) {
            $out .= $this->tag('g:product_type', $productType);
        }

        $shipping = config("feeds.shipping.{$country}");

        if ($shipping !== null) {
            $out .= '      <g:shipping>' . "\n";
            $out .= '  ' . $this->tag('g:country', $country);
            $out .= '  ' . $this->tag('g:price', number_format((float) $shipping, 2, '.', '') . ' ' . config('feeds.currency'));
            $out .= '      </g:shipping>' . "\n";
        }

        $out .= '    </item>' . "\n";

        return $out;
    }

    /**
     * Traduction d'un champ dans la langue demandée, sans repli.
     */
    private function translated(Article $article, string $field, string $locale): ?string
    {
        return $this->translatedValue($article->getTranslation($field, $locale, false));
    }

    private function translatedValue(mixed $value): ?string
    {
        $value = trim((string) $value);

        return $value === '' ? null : $value;
    }

    /**
     * URL absolue de la fiche produit dans la langue du flux.
     * Construite à la main : le générateur d'URL de l'application dépend de
     * la locale active de la requête, que ces routes n'établissent pas.
     */
    private function productUrl(string $locale, string $slug): string
    {
        $prefix = $locale === config('locales.default') ? '' : '/' . $locale;

        // Lecture directe du tableau : le nom de route « product.show »
        // contient un point, que la notation pointée de config() prendrait
        // pour un niveau imbriqué.
        $segment = config('route_slugs')['product.show'][$locale];

        return rtrim(config('feeds.base_url'), '/') . $prefix . '/' . $segment . '/' . $slug;
    }

    private function homeUrl(string $locale): string
    {
        $prefix = $locale === config('locales.default') ? '' : '/' . $locale;

        return rtrim(config('feeds.base_url'), '/') . $prefix;
    }

    private function imageUrl(?string $path): string
    {
        $path = (string) $path;

        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            // Aucun paramètre de cache-busting : l'URL doit rester stable.
            return strtok($path, '?') ?: $path;
        }

        return rtrim(config('feeds.base_url'), '/') . '/' . ltrim(strtok($path, '?') ?: $path, '/');
    }

    private function tag(string $name, string $value): string
    {
        return '      <' . $name . '>' . $this->escape($value) . '</' . $name . '>' . "\n";
    }

    private function escape(string $value): string
    {
        return htmlspecialchars($value, ENT_XML1 | ENT_QUOTES, 'UTF-8');
    }

    /**
     * Texte brut : ni balises, ni entités, ni espaces superflus.
     */
    private function plain(string $html): string
    {
        $text = html_entity_decode(strip_tags($html), ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $text = preg_replace('/[ \t]+/u', ' ', $text);
        $text = preg_replace('/\n{2,}/u', "\n", $text);

        return trim($text);
    }

    private function clamp(string $value, int $max): string
    {
        return mb_strlen($value) <= $max ? $value : rtrim(mb_substr($value, 0, $max - 1)) . '…';
    }
}
