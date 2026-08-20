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

    /*
    |--------------------------------------------------------------------------
    | Moyens de paiement affichés par langue
    |--------------------------------------------------------------------------
    |
    | Chaque entrée : 'icon' = fichier de public/assets/images/payments/,
    | 'label' = nom affiché dans la langue du marché. 'label' sert d'attribut
    | alt et d'infobulle.
    |
    | ATTENTION : cette liste est un engagement commercial. N'y ajouter un
    | moyen que s'il est effectivement encaissable, sous peine de tomber sous
    | la politique « Misrepresentation » de Google Merchant Center.
    |
    | AUCUNE langue n'affiche Visa ni Mastercard : le site n'encaisse rien à
    | la commande. Le client reçoit une référence Multibanco, un numéro
    | MB WAY ou un IBAN par e-mail sous 24 h ouvrées. Afficher des logos de
    | carte annoncerait un encaissement qui n'existe pas.
    |
    | Multibanco et MB WAY sont des systèmes portugais, mais ils restent
    | utilisables depuis l'étranger (référence payable en homebanking,
    | MB WAY par numéro portugais) : ils sont donc proposés partout, à côté
    | du virement nommé selon l'usage local.
    |
    */

    'payment_methods' => [
        'pt' => [
            ['icon' => 'multibanco', 'label' => 'Multibanco'],
            ['icon' => 'mbway', 'label' => 'MB WAY'],
            ['icon' => 'transferencia-bancaria', 'label' => 'Transferência bancária'],
        ],
        'en' => [
            ['icon' => 'multibanco', 'label' => 'Multibanco'],
            ['icon' => 'mbway', 'label' => 'MB WAY'],
            ['icon' => 'transferencia-bancaria', 'label' => 'SEPA bank transfer'],
        ],
        'es' => [
            ['icon' => 'multibanco', 'label' => 'Multibanco'],
            ['icon' => 'mbway', 'label' => 'MB WAY'],
            ['icon' => 'transferencia-bancaria', 'label' => 'Transferencia SEPA'],
        ],
        'fr' => [
            ['icon' => 'multibanco', 'label' => 'Multibanco'],
            ['icon' => 'mbway', 'label' => 'MB WAY'],
            ['icon' => 'transferencia-bancaria', 'label' => 'Virement SEPA'],
        ],
        'it' => [
            ['icon' => 'multibanco', 'label' => 'Multibanco'],
            ['icon' => 'mbway', 'label' => 'MB WAY'],
            ['icon' => 'transferencia-bancaria', 'label' => 'Bonifico SEPA'],
        ],
        'de' => [
            ['icon' => 'multibanco', 'label' => 'Multibanco'],
            ['icon' => 'mbway', 'label' => 'MB WAY'],
            ['icon' => 'transferencia-bancaria', 'label' => 'Banküberweisung'],
        ],
    ],

];
