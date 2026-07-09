<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\GoogleFeedController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Front Website Routes
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/lang/{locale}', [HomeController::class, 'switchLAngue'])->name('lang.switch')->where('locale', 'pt');


// Products
Route::get('/product/{slug}', [HomeController::class, 'showProduct'])->name('product.show');
Route::post('/product/{id}/richiedi', [HomeController::class, 'sendInquiry'])->name('product.inquiry');
Route::get('/product-category/{category}', [HomeController::class, 'showShop'])->name('category.show');

// Cart & Checkout
Route::get('/carrello', [OrderController::class, 'cart'])->name('cart');
Route::get('/cassa', [OrderController::class, 'checkout'])->name('checkout');
Route::post('/cassa', [OrderController::class, 'store'])->name('checkout.store');
Route::get('/ordine-confermato/{orderNumber}', [OrderController::class, 'confirmation'])->name('order.confirmation');

// Pages
Route::get('/chi-siamo', [HomeController::class, 'about'])->name('about');
Route::get('/negozio', [HomeController::class, 'showShop'])->name('shop');
Route::get('/domande-frequenti-faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contatto', [HomeController::class, 'contato'])->name('contato');

// Legal Pages
Route::get('/menzioni-legali', [HomeController::class, 'legalNotice'])->name('legal.notice');
Route::get('/informativa-sulla-privacy', [HomeController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/condizioni-generali-di-vendita-cgv', [HomeController::class, 'termsConditions'])->name('terms.conditions');
Route::get('/politica-di-consegna', [HomeController::class, 'deliveryPolicy'])->name('delivery.policy');
Route::get('/politica-di-reso-e-rimborso', [HomeController::class, 'refundPolicy'])->name('refund.policy');
Route::get('/politica-di-pagamento', [HomeController::class, 'paymentPolicy'])->name('payment.policy');

Route::get('/feed/google-mderchant.xml', [GoogleFeedController::class, 'generate'])
    ->name('feed.google-merchant');


