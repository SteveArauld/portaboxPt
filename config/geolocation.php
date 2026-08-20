<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Détection automatique de la langue
    |--------------------------------------------------------------------------
    |
    | Interrupteur général. À false, aucune requête sortante n'est faite et
    | le site se comporte comme avant : l'URL seule décide de la langue.
    |
    */

    'enabled' => env('GEO_DETECTION_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | Service de géolocalisation
    |--------------------------------------------------------------------------
    |
    | ipwho.is : gratuit, sans inscription ni clé d'API, HTTPS, sans quota
    | annoncé pour un usage raisonnable. Renvoie du JSON contenant
    | country_code.
    |
    | Deux sources plus fiables sont interrogées AVANT lui, quand elles
    | existent, car elles sont instantanées et sans appel réseau :
    |   - CF-IPCountry, ajouté par Cloudflare ;
    |   - X-AppEngine-Country, ajouté par Google Cloud.
    |
    | Alternatives équivalentes si ipwho.is venait à fermer :
    |   https://ipapi.co/{ip}/country/     (1 000 requêtes/jour)
    |   http://ip-api.com/json/{ip}        (45/min, mais HTTP seulement)
    |
    */

    'endpoint' => env('GEO_ENDPOINT', 'https://ipwho.is/'),
    'timeout'  => 2,

    /*
    |--------------------------------------------------------------------------
    | Cache
    |--------------------------------------------------------------------------
    |
    | Le pays d'une adresse IP ne change pas d'une minute à l'autre : on
    | mémorise le résultat pour éviter d'appeler le service à chaque visite,
    | et de dépendre de sa disponibilité.
    |
    */

    'cache_hours' => 24,

    /*
    |--------------------------------------------------------------------------
    | Correspondance pays -> langue
    |--------------------------------------------------------------------------
    |
    | Seules les langues publiées dans locales.switcher sont proposées.
    | Un pays absent de cette table, ou dont la langue n'est pas publiée,
    | reçoit la langue par défaut du site (portugais).
    |
    */

    'countries' => [
        // Portugais
        'PT' => 'pt', 'BR' => 'pt', 'AO' => 'pt', 'MZ' => 'pt',
        'CV' => 'pt', 'GW' => 'pt', 'ST' => 'pt', 'TL' => 'pt',

        // Allemand
        'DE' => 'de', 'AT' => 'de', 'CH' => 'de', 'LI' => 'de',

        // Italien
        'IT' => 'it', 'SM' => 'it', 'VA' => 'it',

        // Langues prêtes mais non publiées : décommenter en même temps que
        // l'entrée correspondante dans locales.switcher.
        // 'ES' => 'es', 'MX' => 'es', 'AR' => 'es', 'CO' => 'es', 'CL' => 'es',
        // 'FR' => 'fr', 'BE' => 'fr', 'LU' => 'fr', 'MC' => 'fr',
        // 'GB' => 'en', 'IE' => 'en', 'US' => 'en', 'CA' => 'en', 'AU' => 'en',
    ],

    /*
    |--------------------------------------------------------------------------
    | Robots exclus de la redirection
    |--------------------------------------------------------------------------
    |
    | Googlebot crawle depuis les États-Unis. Le rediriger vers une version
    | linguistique selon son IP lui ferait indexer la mauvaise page sous la
    | mauvaise URL, invaliderait les balises hreflang et s'apparenterait à
    | du cloaking. Les robots reçoivent toujours la page demandée.
    |
    */

    'bot_pattern' => '/(bot|crawl|spider|slurp|bingpreview|facebookexternalhit|'
        . 'embedly|quora link preview|showyoubot|outbrain|pinterest|'
        . 'developers\.google\.com\/\+\/web\/snippet|www\.google\.com\/webmasters\/tools\/richsnippets|'
        . 'lighthouse|headlesschrome|python-requests|curl|wget|postman)/i',

];
