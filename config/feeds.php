<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Base des URLs du flux
    |--------------------------------------------------------------------------
    |
    | Les flux sont servis hors du middleware web : ForceHttps ne s'applique
    | pas et APP_URL vaut souvent http://localhost en développement. On fixe
    | donc explicitement l'origine canonique, en HTTPS, sans barre finale.
    |
    */

    'base_url' => env('FEED_BASE_URL', 'https://azinheiracontentores.com'),

    /*
    |--------------------------------------------------------------------------
    | Flux publiés
    |--------------------------------------------------------------------------
    |
    | 'locale'  : langue des textes ET de l'URL de destination
    | 'country' : pays cible, code ISO 3166-1 alpha-2 (attribut g:shipping)
    | 'channel' : titre et description du canal, dans la langue du flux
    |
    | Un flux par langue servie par le site. Le pays cible détermine la
    | valeur de g:shipping et le marché Merchant Center visé.
    |
    | 'en' vise l'Irlande : c'est le seul marché anglophone de la zone euro,
    | donc le seul cohérent avec des prix en EUR. Pour cibler le Royaume-Uni
    | il faudrait un flux distinct en GBP.
    |
    */

    'feeds' => [
        'pt' => [
            'locale'  => 'pt',
            'country' => 'PT',
            'channel' => [
                'title'       => 'Azinheira Contentores',
                'description' => 'Catálogo de contentores marítimos, modulares e refrigerados',
            ],
        ],
        'en' => [
            'locale'  => 'en',
            'country' => 'IE',
            'channel' => [
                'title'       => 'Azinheira Contentores',
                'description' => 'Catalogue of shipping, modular and refrigerated containers',
            ],
        ],
        'es' => [
            'locale'  => 'es',
            'country' => 'ES',
            'channel' => [
                'title'       => 'Azinheira Contentores',
                'description' => 'Catálogo de contenedores marítimos, modulares y refrigerados',
            ],
        ],
        'fr' => [
            'locale'  => 'fr',
            'country' => 'FR',
            'channel' => [
                'title'       => 'Azinheira Contentores',
                'description' => 'Catalogue de conteneurs maritimes, modulaires et réfrigérés',
            ],
        ],
        'it' => [
            'locale'  => 'it',
            'country' => 'IT',
            'channel' => [
                'title'       => 'Azinheira Contentores',
                'description' => 'Catalogo di container marittimi, modulari e refrigerati',
            ],
        ],
        'de' => [
            'locale'  => 'de',
            'country' => 'DE',
            'channel' => [
                'title'       => 'Azinheira Contentores',
                'description' => 'Katalog für See-, Modul- und Kühlcontainer',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Marque et devise
    |--------------------------------------------------------------------------
    */

    'brand'    => 'Azinheira',
    'currency' => 'EUR',

    /*
    |--------------------------------------------------------------------------
    | Catégorie Google
    |--------------------------------------------------------------------------
    |
    | Taxonomie officielle Google. 5647 = « Business & Industrial > Material
    | Handling > Shipping Containers ». À réviser si le catalogue s'élargit
    | au-delà des contenants (les maisons préfabriquées relèvent plutôt de
    | « Business & Industrial > Construction »).
    |
    */

    'google_product_category' => '5647',

    /*
    |--------------------------------------------------------------------------
    | Frais de livraison annoncés dans le flux
    |--------------------------------------------------------------------------
    |
    | ATTENTION : laisser à null tant que le tarif réel n'est pas arrêté.
    | Un montant inventé ici est une déclaration commerciale opposable, et
    | un écart avec la page de destination est un motif de suspension.
    | Tant que la valeur est null, l'attribut g:shipping est omis et Google
    | applique les règles de livraison définies dans Merchant Center.
    |
    | Format attendu : montant décimal, par exemple 250.00
    |
    */

    'shipping' => [
        'PT' => env('FEED_SHIPPING_PT'),
        'IE' => env('FEED_SHIPPING_IE'),
        'ES' => env('FEED_SHIPPING_ES'),
        'FR' => env('FEED_SHIPPING_FR'),
        'IT' => env('FEED_SHIPPING_IT'),
        'DE' => env('FEED_SHIPPING_DE'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Durée de cache HTTP (secondes)
    |--------------------------------------------------------------------------
    */

    'cache_ttl' => 3600,

];
