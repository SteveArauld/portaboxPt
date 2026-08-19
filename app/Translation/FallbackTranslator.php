<?php

declare(strict_types=1);

namespace App\Translation;

use Illuminate\Translation\Translator;

/**
 * Ajoute une chaîne de repli aux traductions JSON.
 *
 * Laravel replie les fichiers PHP (validation.php…) sur la langue de repli,
 * mais PAS les clés JSON : une clé absente de en.json est rendue telle quelle,
 * ce qui affiche « legal.section2_title » en clair sur la page.
 *
 * Ici, si la clé n'existe pas dans la langue active, on parcourt
 * config('locales.fallback_chain') avant d'abandonner. L'utilisateur voit
 * alors du portugais — imparfait, mais lisible — plutôt qu'un identifiant.
 */
class FallbackTranslator extends Translator
{
    public function get($key, array $replace = [], $locale = null, $fallback = true)
    {
        $value = parent::get($key, $replace, $locale, $fallback);

        // Traduction trouvée : parent::get() renvoie autre chose que la clé.
        if ($value !== $key) {
            return $value;
        }

        foreach (config('locales.fallback_chain', []) as $candidate) {
            if ($candidate === ($locale ?? $this->locale)) {
                continue;
            }

            $attempt = parent::get($key, $replace, $candidate, false);

            if ($attempt !== $key) {
                return $attempt;
            }
        }

        return $value;
    }
}
