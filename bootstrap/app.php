<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        // Les flux Merchant sont enregistrés hors du groupe « web » : pas de
        // session, pas de CSRF, pas de négociation de langue. Le robot Google
        // reçoit ainsi exactement le même document qu'un visiteur anonyme.
        then: function (): void {
            Route::middleware([])->group(__DIR__.'/../routes/feeds.php');
        },
    )
    ->withMiddleware(function (Middleware $middleware): void {
    $middleware->web(append: [
        \App\Http\Middleware\LanguageMiddleware::class,
        \App\Http\Middleware\ForceHttps::class,
    ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
