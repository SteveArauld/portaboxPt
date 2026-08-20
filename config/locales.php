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
    | Langues proposées dans le sélecteur
    |--------------------------------------------------------------------------
    |
    | Sous-ensemble de 'available' affiché à l'utilisateur. Les langues
    | absentes d'ici restent pleinement fonctionnelles — routes, balises
    | hreflang, flux Merchant — mais ne sont pas mises en avant tant que
    | leurs traductions ne sont pas validées.
    |
    | Décommenter une ligne suffit à publier la langue dans le menu.
    |
    */

    'switcher' => [
        'pt',
        'it',
        'de',
        // 'en',
        // 'es',
        // 'fr',
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
    | Multibanco et MB WAY ne sont proposés QU'AU PORTUGAL. Ce sont des
    | instruments nationaux : une référence Multibanco se règle dans un
    | homebanking portugais, et MB WAY exige un numéro de téléphone associé
    | à une banque portugaise. Les afficher à un client italien ou allemand
    | lui promettrait un moyen de paiement qu'il ne peut pas utiliser.
    |
    | Hors du Portugal, le virement SEPA est le seul moyen réellement
    | disponible ; il est nommé selon l'usage de chaque marché.
    |
    */

    'payment_methods' => [
        'pt' => [
            ['icon' => 'multibanco', 'label' => 'Multibanco'],
            ['icon' => 'mbway', 'label' => 'MB WAY'],
            ['icon' => 'transferencia-bancaria', 'label' => 'Transferência bancária'],
        ],
        'en' => [
            ['icon' => 'transferencia-bancaria', 'label' => 'SEPA bank transfer'],
        ],
        'es' => [
            ['icon' => 'transferencia-bancaria', 'label' => 'Transferencia SEPA'],
        ],
        'fr' => [
            ['icon' => 'transferencia-bancaria', 'label' => 'Virement SEPA'],
        ],
        'it' => [
            ['icon' => 'transferencia-bancaria', 'label' => 'Bonifico SEPA'],
        ],
        'de' => [
            ['icon' => 'transferencia-bancaria', 'label' => 'SEPA-Überweisung'],
        ],
    ],

];
