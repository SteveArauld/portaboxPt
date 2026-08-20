<?php

declare(strict_types=1);

namespace App\Support;

/**
 * Formatage monétaire dépendant de la langue affichée.
 *
 * L'allemand impose le point comme séparateur de milliers et la virgule
 * comme séparateur décimal : 7.840,00 €. Le format anglo-saxon
 * « 7,840.00 € » est illisible, voire trompeur, pour un acheteur allemand.
 *
 * Toutes les autres langues conservent EXACTEMENT le format en place
 * (point décimal, virgule pour les milliers) : ce helper ne doit rien
 * changer en dehors de l'allemand.
 */
final class Price
{
    /**
     * Séparateurs par langue : [décimal, milliers].
     *
     * L'Europe continentale utilise la virgule décimale ; le français
     * sépare les milliers par une espace insécable étroite (U+202F), comme
     * le prescrit la typographie officielle. Seul l'anglais conserve la
     * convention anglo-saxonne.
     */
    private const SEPARATORS = [
        'pt' => [',', '.'],
        'de' => [',', '.'],
        'es' => [',', '.'],
        'it' => [',', '.'],
        'fr' => [',', "\u{202F}"],
        'en' => ['.', ','],
    ];

    private const DEFAULT_SEPARATORS = ['.', ','];

    public static function format(float|int|string|null $value): string
    {
        [$decimal, $thousands] = self::SEPARATORS[app()->getLocale()] ?? self::DEFAULT_SEPARATORS;

        return number_format((float) $value, 2, $decimal, $thousands);
    }

    /**
     * Séparateurs exposés au JavaScript du panier, qui formate les montants
     * côté client et doit suivre la même règle que le rendu serveur.
     */
    public static function separators(): array
    {
        [$decimal, $thousands] = self::SEPARATORS[app()->getLocale()] ?? self::DEFAULT_SEPARATORS;

        return ['decimal' => $decimal, 'thousands' => $thousands];
    }
}
