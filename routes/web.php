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

// Langue
Route::get('/lang/{locale}', [HomeController::class, 'switchLAngue'])->name('lang.switch')->where('locale', 'pt');

// Products
Route::get('/produto/{slug}', [HomeController::class, 'showProduct'])->name('product.show');
Route::post('/produto/{id}/solicitar', [HomeController::class, 'sendInquiry'])->name('product.inquiry');
Route::get('/categoria-produto/{category}', [HomeController::class, 'showShop'])->name('category.show');

// Cart & Checkout
Route::get('/carrinho', [OrderController::class, 'cart'])->name('cart');
Route::get('/finalizar-compra', [OrderController::class, 'checkout'])->name('checkout');
Route::post('/finalizar-compra', [OrderController::class, 'store'])->name('checkout.store');
Route::get('/pedido-confirmado/{orderNumber}', [OrderController::class, 'confirmation'])->name('order.confirmation');

// Pages
Route::get('/quem-somos', [HomeController::class, 'about'])->name('about');
Route::get('/loja', [HomeController::class, 'showShop'])->name('shop');
Route::get('/perguntas-frequentes-faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contato', [HomeController::class, 'contato'])->name('contato');

// Legal Pages
Route::get('/aviso-legal', [HomeController::class, 'legalNotice'])->name('legal.notice');
Route::get('/politica-de-privacidade', [HomeController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/condicoes-gerais-de-venda-cgv', [HomeController::class, 'termsConditions'])->name('terms.conditions');
Route::get('/politica-de-entrega', [HomeController::class, 'deliveryPolicy'])->name('delivery.policy');
Route::get('/politica-de-devolucao-e-reembolso', [HomeController::class, 'refundPolicy'])->name('refund.policy');
Route::get('/politica-de-pagamento', [HomeController::class, 'paymentPolicy'])->name('payment.policy');

// Feed
Route::get('/feed/google-merchant.xml', [GoogleFeedController::class, 'generate'])
    ->name('feed.google-merchant');