<?php

declare(strict_types=1);

namespace App\Routing;

use Illuminate\Routing\UrlGenerator;

/**
 * Résout les noms de route non préfixés vers la langue active.
 *
 * Les routes du site sont enregistrées sous « {locale}.{nom} » (pt.shop,
 * de.shop, ...). Sans cette classe, il faudrait réécrire chaque appel
 * route('shop') des vues en route(app()->getLocale().'.shop').
 *
 * Ici, route('shop') tente d'abord « {locale active}.shop » et retombe sur
 * le nom d'origine si cette route n'existe pas (lang.switch, feed.*, etc.).
 */
class LocalizedUrlGenerator extends UrlGenerator
{
    /**
     * Noms de route qui ne sont jamais localisés.
     */
    private const GLOBAL_ROUTES = [
        'lang.switch',
        'feed.google-merchant',
        'feed.google-merchant.view',
        'feed.google-merchant.locale',
        'feed.google-merchant.view.locale',
    ];

    public function route($name, $parameters = [], $absolute = true)
    {
        return parent::route($this->localizeName($name), $parameters, $absolute);
    }

    /**
     * Préfixe le nom par la langue active lorsqu'une telle route existe.
     */
    private function localizeName(mixed $name): mixed
    {
        if (!is_string($name) || in_array($name, self::GLOBAL_ROUTES, true)) {
            return $name;
        }

        // Déjà préfixé par un code de langue connu : on ne touche à rien.
        $prefix = strtok($name, '.');
        if (array_key_exists($prefix, config('locales.available', []))) {
            return $name;
        }

        $localized = app()->getLocale() . '.' . $name;

        return $this->routes->hasNamedRoute($localized) ? $localized : $name;
    }
}
