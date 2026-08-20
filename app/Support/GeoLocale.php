<?php

declare(strict_types=1);

namespace App\Support;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * Déduit une langue du pays de l'internaute, à partir de son adresse IP.
 *
 * Trois sources, de la plus fiable à la moins fiable :
 *   1. l'en-tête CF-IPCountry, posé par Cloudflare — instantané, gratuit ;
 *   2. l'en-tête X-AppEngine-Country, posé par Google Cloud ;
 *   3. ipwho.is, service gratuit et sans clé d'API, appelé en dernier recours.
 *
 * Le résultat est mis en cache par adresse IP : le service n'est donc
 * interrogé qu'une fois par visiteur et par jour. En cas d'indisponibilité,
 * de délai dépassé ou de pays inconnu, on retombe silencieusement sur la
 * langue par défaut du site : la détection ne doit jamais bloquer une visite.
 */
final class GeoLocale
{
    /**
     * Langue à servir à ce visiteur, ou null si rien ne permet de trancher.
     */
    public function resolve(Request $request): ?string
    {
        if (!config('geolocation.enabled')) {
            return null;
        }

        $country = $this->country($request);

        if ($country === null) {
            return null;
        }

        $locale = config('geolocation.countries')[$country] ?? null;

        // Une langue non publiée dans le sélecteur n'est pas proposée
        // automatiquement : le visiteur verrait une version incomplète.
        $published = config('locales.switcher', array_keys(config('locales.available')));

        return in_array($locale, $published, true) ? $locale : null;
    }

    /**
     * Code pays ISO à deux lettres, ou null.
     */
    private function country(Request $request): ?string
    {
        foreach (['CF-IPCountry', 'X-AppEngine-Country'] as $header) {
            $value = $request->header($header);

            if (is_string($value) && preg_match('/^[A-Z]{2}$/', $value)) {
                return $value;
            }
        }

        $ip = $request->ip();

        if ($ip === null || $this->isPrivate($ip)) {
            return null;
        }

        return Cache::remember(
            'geo:country:' . $ip,
            now()->addHours((int) config('geolocation.cache_hours')),
            fn () => $this->lookup($ip)
        );
    }

    /**
     * Interroge le service externe. Toute erreur renvoie null.
     */
    private function lookup(string $ip): ?string
    {
        try {
            $response = Http::timeout((int) config('geolocation.timeout'))
                ->get(rtrim(config('geolocation.endpoint'), '/') . '/' . $ip);

            if (!$response->successful()) {
                return null;
            }

            $code = $response->json('country_code');

            return is_string($code) && preg_match('/^[A-Z]{2}$/', $code) ? $code : null;
        } catch (\Throwable $e) {
            // Le service est indisponible : on n'interrompt pas la visite.
            Log::debug('Géolocalisation indisponible : ' . $e->getMessage());

            return null;
        }
    }

    /**
     * Adresses locales et réseaux privés : aucune géolocalisation possible.
     */
    private function isPrivate(string $ip): bool
    {
        return filter_var(
            $ip,
            FILTER_VALIDATE_IP,
            FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE
        ) === false;
    }
}
