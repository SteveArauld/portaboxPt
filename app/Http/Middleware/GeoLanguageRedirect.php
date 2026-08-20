<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Support\GeoLocale;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

/**
 * Oriente le visiteur vers la version linguistique de son pays.
 *
 * La redirection est volontairement étroite. Elle ne se déclenche QUE sur
 * la racine « / », en GET, pour un visiteur humain qui n'a pas encore de
 * préférence enregistrée. Partout ailleurs, l'URL demandée fait autorité.
 *
 * Cette restriction n'est pas de la prudence excessive : rediriger selon
 * l'adresse IP sur l'ensemble du site ferait servir des contenus différents
 * sous une même URL. Google appelle cela du cloaking, les balises hreflang
 * deviendraient mensongères, et le robot — qui crawle depuis les États-Unis —
 * indexerait la mauvaise version de chaque page. Les liens des flux Merchant,
 * eux, doivent atteindre directement la bonne langue sans rebond.
 *
 * Un visiteur allemand arrivant sur https://azinheiracontentores.com est
 * donc envoyé une fois vers /de, puis navigue normalement. S'il choisit
 * ensuite une autre langue, le cookie posé par le sélecteur prend le relais
 * et la détection ne se redéclenche plus.
 */
class GeoLanguageRedirect
{
    public function __construct(private readonly GeoLocale $geo)
    {
    }

    public function handle(Request $request, Closure $next)
    {
        if (!$this->shouldRun($request)) {
            return $next($request);
        }

        $default = config('locales.default');

        // Un choix déjà exprimé prime sur la détection : le visiteur revenu
        // sur la racine retrouve sa langue, sans nouvel appel au service.
        $remembered = $this->rememberedLocale($request);

        $locale = $remembered ?? $this->geo->resolve($request);

        // Aucun pays reconnu, ou langue déjà celle de la racine : on sert
        // la page telle quelle, sans redirection.
        if ($locale === null || $locale === $default) {
            return $next($request);
        }

        $response = redirect()->route($locale . '.home');

        // Le cookie n'est (re)posé que sur une détection : un choix explicite
        // a déjà le sien, émis par le sélecteur de langue.
        return $remembered === null
            ? $response->withCookie(Cookie::make('locale', $locale, 60 * 24 * 365))
            : $response;
    }

    /**
     * Langue mémorisée par un choix précédent, si elle est encore publiée.
     */
    private function rememberedLocale(Request $request): ?string
    {
        $cookie = $request->cookie('locale');

        if (!is_string($cookie)) {
            return null;
        }

        $published = config('locales.switcher', array_keys(config('locales.available')));

        return in_array($cookie, $published, true) ? $cookie : null;
    }

    /**
     * La détection ne s'applique qu'à la racine, en GET, et jamais aux robots.
     */
    private function shouldRun(Request $request): bool
    {
        if (!config('geolocation.enabled')) {
            return false;
        }

        // Uniquement « / » : jamais une page profonde, jamais une URL déjà
        // préfixée par une langue.
        if (!$request->isMethod('GET') || $request->path() !== '/') {
            return false;
        }

        return !$this->isBot($request);
    }

    private function isBot(Request $request): bool
    {
        $agent = (string) $request->userAgent();

        return $agent === ''
            || preg_match(config('geolocation.bot_pattern'), $agent) === 1;
    }
}
