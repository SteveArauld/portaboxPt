<?php

declare(strict_types=1);

namespace App\Translation;

use Illuminate\Translation\Translator;

/**
 * Ajoute une chaîne de repli aux traductions JSON.
 *
 * Laravel replie les fichiers PHP (validation.php…) sur la langue de repli,
 * mais PAS les clés JSON : une clé absente de en.json est rendue telle
 * quelle, ce qui affiche « legal.section2_title » en clair sur la page.
 *
 * Le repli ne se déclenche que si la clé est RÉELLEMENT absente du fichier
 * de la langue active. On ne peut pas se fier à « la valeur rendue est
 * égale à la clé » : c'est le cas normal de la langue source, dont les clés
 * sont des phrases portugaises traduites par elles-mêmes
 * ("Carrinho" => "Carrinho"). Cette confusion renvoyait le panier
 * portugais en anglais.
 */
class FallbackTranslator extends Translator
{
    public function get($key, array $replace = [], $locale = null, $fallback = true)
    {
        $value = parent::get($key, $replace, $locale, $fallback);

        $locale ??= $this->locale;

        // La clé existe dans la langue demandée : sa valeur fait foi, même si
        // elle est identique à la clé ("Carrinho" => "Carrinho") ou vide.
        // Laravel renvoyant la clé pour une valeur vide, on lit la ligne
        // déclarée plutôt que la sortie de parent::get().
        $declared = $this->jsonValue($key, $locale);

        if ($declared !== null) {
            return trim($declared) === '' ? '' : $value;
        }

        // Clé résolue par un fichier PHP (validation.attr, auth.failed…)
        // ou par le repli natif de Laravel.
        if ($value !== $key) {
            return $value;
        }

        foreach (config('locales.fallback_chain', []) as $candidate) {
            if ($candidate === $locale) {
                continue;
            }

            $attempt = parent::get($key, $replace, $candidate, false);

            if ($attempt !== $key) {
                return $attempt;
            }
        }

        return $value;
    }

    /**
     * Valeur déclarée dans le fichier JSON de cette langue,
     * ou null si la clé n'y figure pas du tout.
     */
    private function jsonValue(string $key, string $locale): ?string
    {
        $lines = $this->loader->load($locale, '*', '*');

        return array_key_exists($key, $lines) ? (string) $lines[$key] : null;
    }
}
