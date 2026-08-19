<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\GoogleFeedController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Front Website Routes
|--------------------------------------------------------------------------
|
| Les routes du site sont enregistrées une fois par langue. La langue par
| défaut (config/locales.default, soit 'pt') n'est pas préfixée afin de
| préserver les URLs déjà indexées et le flux Merchant Center :
|
|   PT  /loja        /quem-somos   /aviso-legal
|   DE  /de/shop     /de/ueber-uns /de/impressum
|
| Chaque route est nommée « {locale}.{nom} » (ex. « de.shop »). Les vues
| continuent d'appeler route('shop') sans préfixe : LocalizedUrlGenerator
| (voir app/Providers/AppServiceProvider) résout le nom vers la langue
| active. Aucun appel route() existant n'a eu besoin d'être modifié.
|
| Les segments traduits vivent dans config/route_slugs.php.
|
*/

// Bascule de langue — hors groupes localisés, valable pour toutes les langues.
Route::get('/lang/{locale}', [HomeController::class, 'switchLangue'])
    ->name('lang.switch')
    ->where('locale', implode('|', array_keys(config('locales.available'))));

// Flux Google Merchant — un flux par langue.
// Merchant Center attend un flux distinct par couple langue/pays : les liens
// produits doivent pointer vers la version linguistique correspondante.
//   /feed/google-merchant.xml       -> portugais (rétrocompatible)
//   /feed/google-merchant-de.xml    -> allemand
$feedLocales = implode("|", array_keys(config("locales.available")));

Route::get("/feed/google-merchant.xml", [GoogleFeedController::class, "download"])
    ->name("feed.google-merchant");

Route::get("/feed/google-merchant-{locale}.xml", [GoogleFeedController::class, "download"])
    ->where("locale", $feedLocales)
    ->name("feed.google-merchant.locale");

Route::get("/feed/google-merchant-view", [GoogleFeedController::class, "generate"])
    ->name("feed.google-merchant.view");

Route::get("/feed/google-merchant-view/{locale}", [GoogleFeedController::class, "generate"])
    ->where("locale", $feedLocales)
    ->name("feed.google-merchant.view.locale");

$defaultLocale = config('locales.default');

// Le tableau est lu en une fois plutôt que via config('route_slugs.legal.notice.pt') :
// les noms de route contiennent des points, que la notation pointée de config()
// interpréterait comme des niveaux imbriqués et qui renverraient null.
$routeSlugs = config('route_slugs');

foreach (array_keys(config('locales.available')) as $locale) {
    $slug = function (string $route) use ($routeSlugs, $locale): string {
        $value = $routeSlugs[$route][$locale] ?? null;

        if (!is_string($value) || $value === '') {
            throw new \RuntimeException(
                "Slug d'URL manquant pour la route « {$route} » en « {$locale} » (config/route_slugs.php)."
            );
        }

        return $value;
    };

    Route::prefix($locale === $defaultLocale ? '' : $locale)
        ->name($locale . '.')
        ->group(function () use ($slug) {

            // Home
            Route::get('/', [HomeController::class, 'index'])->name('home');

            // Produits
            Route::get($slug('product.show') . '/{slug}', [HomeController::class, 'showProduct'])
                ->name('product.show');
            Route::post($slug('product.show') . '/{id}/solicitar', [HomeController::class, 'sendInquiry'])
                ->name('product.inquiry');
            Route::get($slug('category.show') . '/{category}', [HomeController::class, 'showShop'])
                ->name('category.show');

            // Panier et commande
            Route::get($slug('cart'), [OrderController::class, 'cart'])->name('cart');
            Route::get($slug('checkout'), [OrderController::class, 'checkout'])->name('checkout');
            Route::post($slug('checkout'), [OrderController::class, 'store'])->name('checkout.store');
            Route::get($slug('order.confirmation') . '/{orderNumber}', [OrderController::class, 'confirmation'])
                ->name('order.confirmation');

            // Pages
            Route::get($slug('about'), [HomeController::class, 'about'])->name('about');
            Route::get($slug('shop'), [HomeController::class, 'showShop'])->name('shop');
            Route::get($slug('faq'), [HomeController::class, 'faq'])->name('faq');
            Route::get($slug('contato'), [HomeController::class, 'contato'])->name('contato');

            // Pages légales
            Route::get($slug('legal.notice'), [HomeController::class, 'legalNotice'])->name('legal.notice');
            Route::get($slug('privacy.policy'), [HomeController::class, 'privacyPolicy'])->name('privacy.policy');
            Route::get($slug('terms.conditions'), [HomeController::class, 'termsConditions'])->name('terms.conditions');
            Route::get($slug('delivery.policy'), [HomeController::class, 'deliveryPolicy'])->name('delivery.policy');
            Route::get($slug('refund.policy'), [HomeController::class, 'refundPolicy'])->name('refund.policy');
            Route::get($slug('payment.policy'), [HomeController::class, 'paymentPolicy'])->name('payment.policy');
        });
}
