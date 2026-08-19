<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

/**
 * Détermine la langue de la requête à partir de l'URL, et d'elle seule.
 *
 *   /loja      -> pt   (langue par défaut, non préfixée)
 *   /de/shop   -> de
 *
 * L'URL fait autorité de manière absolue : la session n'intervient jamais
 * dans le rendu. Sans cela, un visiteur ayant choisi l'allemand verrait
 * /loja s'afficher en allemand — une même URL rendrait alors un contenu
 * différent selon le visiteur, ce que Google traite comme du cloaking et
 * qui rend les balises hreflang mensongères.
 *
 * La session ne sert qu'à mémoriser la préférence pour le sélecteur.
 */
class LanguageMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $available = array_keys(config('locales.available'));

        $segment = $request->segment(1);

        $locale = in_array($segment, $available, true)
            ? $segment
            : config('locales.default');

        App::setLocale($locale);
        Session::put('locale', $locale);

        return $next($request);
    }
}
