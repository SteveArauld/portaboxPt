<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Langue par défaut
    |--------------------------------------------------------------------------
    |
    | Cette langue n'est PAS préfixée dans l'URL : /loja, /contato.
    | Toutes les autres le sont : /de/laden, /fr/boutique.
    | Conserver 'pt' ici préserve les URLs déjà indexées et le flux Merchant.
    |
    */

    'default' => 'pt',

    /*
    |--------------------------------------------------------------------------
    | Langues disponibles
    |--------------------------------------------------------------------------
    |
    | 'name'    : libellé affiché dans le sélecteur (dans sa propre langue)
    | 'flag'    : fichier SVG dans public/assets/images/flags/
    | 'hreflang': code envoyé à Google dans les balises alternate
    |
    */

    'available' => [
        'pt' => ['name' => 'Português', 'flag' => 'pt.svg', 'hreflang' => 'pt-PT'],
        'en' => ['name' => 'English',    'flag' => 'uk.svg', 'hreflang' => 'en'],
        'es' => ['name' => 'Español',    'flag' => 'es.svg', 'hreflang' => 'es-ES'],
        'fr' => ['name' => 'Français',   'flag' => 'fr.svg', 'hreflang' => 'fr-FR'],
        'it' => ['name' => 'Italiano',   'flag' => 'it.svg', 'hreflang' => 'it-IT'],
        'de' => ['name' => 'Deutsch',    'flag' => 'de.svg', 'hreflang' => 'de-DE'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Chaîne de repli des traductions produits
    |--------------------------------------------------------------------------
    |
    | Utilisée quand une fiche produit n'a pas encore de traduction dans la
    | langue demandée : on affiche la première disponible plutôt qu'un vide.
    |
    */

    'fallback_chain' => ['pt', 'en', 'it'],

];
