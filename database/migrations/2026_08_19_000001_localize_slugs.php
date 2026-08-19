<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

/**
 * Rend les slugs traduisibles : /de/produkt/2-buero-monobloecke-mit-bad
 * au lieu de /de/produkt/2-monoblocos-escritorio-com-banheiro.
 *
 * Le slug portugais est conservé à l'identique : c'est la seule langue déjà
 * indexée par Google et présente dans le flux Merchant. Les autres langues
 * n'ont jamais été exposées publiquement, aucune redirection n'est donc
 * nécessaire pour elles.
 */
return new class extends Migration
{
    private array $locales = ['pt', 'en', 'es', 'fr', 'it', 'de'];

    public function up(): void
    {
        foreach (['articles', 'categories'] as $table) {
            $this->localize($table);
        }
    }

    private function localize(string $table): void
    {
        // Colonne de travail : MySQL ne convertit pas varchar -> json en place.
        Schema::table($table, function (Blueprint $t) {
            $t->json('slug_i18n')->nullable()->after('slug');
        });

        $used = array_fill_keys($this->locales, []);

        DB::table($table)->orderBy('id')->chunkById(200, function ($rows) use ($table, &$used) {
            foreach ($rows as $row) {
                $names = json_decode($row->name ?? '', true);
                $names = is_array($names) ? $names : [];

                $slugs = [];

                foreach ($this->locales as $locale) {
                    // Le portugais garde son slug actuel, tel quel.
                    if ($locale === 'pt') {
                        $candidate = $row->slug;
                    } else {
                        $source = $names[$locale] ?? $names['pt'] ?? $row->slug;
                        $candidate = Str::slug($source) ?: $row->slug;
                    }

                    $base = $candidate;
                    $n = 1;
                    while (in_array($candidate, $used[$locale], true)) {
                        $candidate = $base . '-' . (++$n);
                    }

                    $used[$locale][] = $candidate;
                    $slugs[$locale] = $candidate;
                }

                DB::table($table)->where('id', $row->id)->update([
                    'slug_i18n' => json_encode($slugs, JSON_UNESCAPED_UNICODE),
                ]);
            }
        });

        // Bascule : l'index unique doit sauter avant de supprimer la colonne.
        Schema::table($table, function (Blueprint $t) use ($table) {
            $t->dropUnique($table . '_slug_unique');
            $t->dropColumn('slug');
        });

        Schema::table($table, function (Blueprint $t) {
            $t->renameColumn('slug_i18n', 'slug');
        });
    }

    public function down(): void
    {
        foreach (['articles', 'categories'] as $table) {
            Schema::table($table, function (Blueprint $t) {
                $t->string('slug_single')->nullable()->after('slug');
            });

            DB::table($table)->orderBy('id')->chunkById(200, function ($rows) use ($table) {
                foreach ($rows as $row) {
                    $slugs = json_decode($row->slug ?? '', true);
                    DB::table($table)->where('id', $row->id)->update([
                        'slug_single' => is_array($slugs) ? ($slugs['pt'] ?? reset($slugs)) : $row->slug,
                    ]);
                }
            });

            Schema::table($table, function (Blueprint $t) {
                $t->dropColumn('slug');
            });

            Schema::table($table, function (Blueprint $t) use ($table) {
                $t->renameColumn('slug_single', 'slug');
            });

            Schema::table($table, function (Blueprint $t) {
                $t->unique('slug');
            });
        }
    }
};
