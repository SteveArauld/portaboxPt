<?php

/*
|--------------------------------------------------------------------------
| Segments d'URL traduits
|--------------------------------------------------------------------------
|
| Clé = nom de route Laravel. Valeur = segment d'URL par langue.
| Le portugais n'est pas préfixé (langue par défaut), les autres le sont :
|
|   PT  /loja                DE  /de/shop
|   PT  /quem-somos          DE  /de/ueber-uns
|
| Ajouter une langue = ajouter sa colonne ici + dans config/locales.php.
| Les {parametres} sont ajoutés à l'enregistrement des routes, pas ici.
|
*/

return [

    'shop' => [
        'pt' => 'loja',
        'en' => 'shop',
        'es' => 'tienda',
        'fr' => 'boutique',
        'it' => 'negozio',
        'de' => 'shop',
    ],

    'about' => [
        'pt' => 'quem-somos',
        'en' => 'about-us',
        'es' => 'quienes-somos',
        'fr' => 'qui-sommes-nous',
        'it' => 'chi-siamo',
        'de' => 'ueber-uns',
    ],

    'contato' => [
        'pt' => 'contato',
        'en' => 'contact',
        'es' => 'contacto',
        'fr' => 'contact',
        'it' => 'contatti',
        'de' => 'kontakt',
    ],

    'faq' => [
        'pt' => 'perguntas-frequentes-faq',
        'en' => 'frequently-asked-questions',
        'es' => 'preguntas-frecuentes',
        'fr' => 'questions-frequentes',
        'it' => 'domande-frequenti',
        'de' => 'haeufige-fragen',
    ],

    'product.show' => [
        'pt' => 'produto',
        'en' => 'product',
        'es' => 'producto',
        'fr' => 'produit',
        'it' => 'prodotto',
        'de' => 'produkt',
    ],

    'category.show' => [
        'pt' => 'categoria-produto',
        'en' => 'product-category',
        'es' => 'categoria-producto',
        'fr' => 'categorie-produit',
        'it' => 'categoria-prodotto',
        'de' => 'produktkategorie',
    ],

    'cart' => [
        'pt' => 'carrinho',
        'en' => 'cart',
        'es' => 'carrito',
        'fr' => 'panier',
        'it' => 'carrello',
        'de' => 'warenkorb',
    ],

    'checkout' => [
        'pt' => 'finalizar-compra',
        'en' => 'checkout',
        'es' => 'finalizar-compra',
        'fr' => 'commander',
        'it' => 'checkout',
        'de' => 'kasse',
    ],

    'order.confirmation' => [
        'pt' => 'pedido-confirmado',
        'en' => 'order-confirmed',
        'es' => 'pedido-confirmado',
        'fr' => 'commande-confirmee',
        'it' => 'ordine-confermato',
        'de' => 'bestellung-bestaetigt',
    ],

    'legal.notice' => [
        'pt' => 'aviso-legal',
        'en' => 'legal-notice',
        'es' => 'aviso-legal',
        'fr' => 'mentions-legales',
        'it' => 'note-legali',
        'de' => 'impressum',
    ],

    'privacy.policy' => [
        'pt' => 'politica-de-privacidade',
        'en' => 'privacy-policy',
        'es' => 'politica-de-privacidad',
        'fr' => 'politique-de-confidentialite',
        'it' => 'informativa-sulla-privacy',
        'de' => 'datenschutzerklaerung',
    ],

    'terms.conditions' => [
        'pt' => 'condicoes-gerais-de-venda-cgv',
        'en' => 'terms-and-conditions',
        'es' => 'condiciones-generales-de-venta',
        'fr' => 'conditions-generales-de-vente',
        'it' => 'condizioni-generali-di-vendita',
        'de' => 'agb',
    ],

    'delivery.policy' => [
        'pt' => 'politica-de-entrega',
        'en' => 'delivery-policy',
        'es' => 'politica-de-entrega',
        'fr' => 'politique-de-livraison',
        'it' => 'politica-di-consegna',
        'de' => 'lieferbedingungen',
    ],

    'refund.policy' => [
        'pt' => 'politica-de-devolucao-e-reembolso',
        'en' => 'return-and-refund-policy',
        'es' => 'politica-de-devolucion-y-reembolso',
        'fr' => 'politique-de-retour-et-remboursement',
        'it' => 'politica-di-reso-e-rimborso',
        'de' => 'widerrufsbelehrung',
    ],

    'payment.policy' => [
        'pt' => 'politica-de-pagamento',
        'en' => 'payment-policy',
        'es' => 'politica-de-pago',
        'fr' => 'politique-de-paiement',
        'it' => 'politica-di-pagamento',
        'de' => 'zahlungsbedingungen',
    ],

];
