<?php

use App\Http\Controllers\ProductFeedController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Flux produits Google Merchant Center
|--------------------------------------------------------------------------
|
| Un flux par langue servie par le site :
|
|   /feed/google-pt.xml   portugais  -> Portugal
|   /feed/google-en.xml   anglais    -> Irlande
|   /feed/google-es.xml   espagnol   -> Espagne
|   /feed/google-fr.xml   français   -> France
|   /feed/google-it.xml   italien    -> Italie
|   /feed/google-de.xml   allemand   -> Allemagne
|
| Ces routes sont enregistrées SANS le groupe « web » (voir bootstrap/app.php) :
| ni session, ni cookie, ni CSRF, ni LanguageMiddleware. Trois raisons :
|
|   - le robot Google crawle en anonyme : il ne doit rien y avoir à négocier ;
|   - aucune détection de langue ne doit s'interposer, la langue du flux
|     étant fixée par l'URL demandée ;
|   - pas de cookie de session émis, donc pas de variation de cache.
|
| Les langues sont lues depuis config/feeds.php : y ajouter une entrée suffit
| à publier un nouveau flux.
|
*/

foreach (array_keys(config('feeds.feeds')) as $feed) {
    Route::get("/feed/google-{$feed}.xml", ProductFeedController::class)
        ->defaults('feed', $feed)
        ->name("feed.{$feed}");
}
