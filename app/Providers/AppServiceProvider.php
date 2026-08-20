<?php

namespace App\Providers;

use App\Routing\LocalizedUrlGenerator;
use App\Translation\FallbackTranslator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->registerFallbackTranslator();
    }

    /**
     * Laravel ne replie pas les traductions JSON sur une autre langue : une
     * clé absente s'affiche telle quelle à l'écran. On substitue un Translator
     * qui parcourt config('locales.fallback_chain') avant d'abandonner.
     */
    private function registerFallbackTranslator(): void
    {
        $this->app->extend('translator', function ($original, $app) {
            $translator = new FallbackTranslator(
                $original->getLoader(),
                $original->getLocale()
            );

            $translator->setFallback($original->getFallback());

            return $translator;
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->useLocalizedUrlGenerator();

        // @categoryUrl('contentores-20-pes') -> /categoria-produto/contentores-20-pes
        // en portugais, /de/produktkategorie/20-fuss-container en allemand.
        // Les menus référencent la catégorie par son slug portugais, stable,
        // et la directive résout vers la langue affichée.
        Blade::directive(
            'categoryUrl',
            fn (string $expression) => "<?php echo \\App\\Models\\Category::urlFor({$expression}); ?>"
        );

        // @price($article->price) -> « 7,840.00 » partout, « 7.840,00 » en
        // allemand. Le format des autres langues est inchangé.
        Blade::directive(
            'price',
            fn (string $expression) => "<?php echo \\App\\Support\\Price::format({$expression}); ?>"
        );
    }

    /**
     * Remplace le générateur d'URL par une version consciente de la langue,
     * afin que route('shop') pointe vers /loja en portugais et /de/shop en
     * allemand sans modifier les appels existants dans les vues.
     */
    private function useLocalizedUrlGenerator(): void
    {
        $this->app->extend('url', function ($original, $app) {
            $generator = new LocalizedUrlGenerator(
                $app['router']->getRoutes(),
                $app->rebinding('request', fn ($app, $request) => $app['url']->setRequest($request)),
                $app['config']->get('app.asset_url')
            );

            $generator->setSessionResolver(fn () => $app['session'] ?? null);
            $generator->setKeyResolver(fn () => $app->make('config')->get('app.key'));

            // Garde les routes à jour lorsqu'elles sont rechargées (cache de routes).
            $app['router']->getRoutes()->refreshNameLookups();

            return $generator;
        });
    }
}
