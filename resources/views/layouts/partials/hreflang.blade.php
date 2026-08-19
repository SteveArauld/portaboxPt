@php
    /**
     * Construit l'URL de la page courante dans chaque langue.
     *
     * On repart du nom de la route active (« pt.delivery.policy »), on retire
     * le préfixe de langue, puis on reconstruit la route dans chaque langue
     * avec les mêmes paramètres. Une page sans route nommée (erreur 404,
     * flux) ne reçoit aucune balise : mieux vaut rien qu'un lien faux.
     */
    $pbsRoute = request()->route();
    $pbsName  = $pbsRoute?->getName();
    $pbsAlternates = [];

    if ($pbsName) {
        $pbsBare   = preg_replace('/^[a-z]{2}\./', '', $pbsName, 1);
        $pbsParams = $pbsRoute->parameters();
        $pbsRoutes = app('router')->getRoutes();

        foreach (config('locales.available') as $pbsCode => $pbsMeta) {
            $pbsTarget = $pbsCode . '.' . $pbsBare;

            if (!$pbsRoutes->hasNamedRoute($pbsTarget)) {
                continue;
            }

            // Les slugs produit et catégorie sont traduits : réutiliser tels
            // quels les paramètres de la page courante générerait des liens
            // faux (slug portugais sous une URL allemande).
            $pbsLocalParams = $pbsParams;

            if (isset($pbsParams['slug']) && $pbsModel = \App\Models\Article::whereSlug($pbsParams['slug'])->first()) {
                $pbsLocalParams['slug'] = $pbsModel->getTranslation('slug', $pbsCode);
            }

            if (isset($pbsParams['category']) && $pbsCat = \App\Models\Category::whereSlug($pbsParams['category'])->first()) {
                $pbsLocalParams['category'] = $pbsCat->getTranslation('slug', $pbsCode);
            }

            $pbsAlternates[$pbsCode] = [
                'url'      => route($pbsTarget, $pbsLocalParams),
                'hreflang' => $pbsMeta['hreflang'],
            ];
        }
    }
@endphp

@if (count($pbsAlternates) > 1)
    @foreach ($pbsAlternates as $pbsCode => $pbsAlt)
        <link rel="alternate" hreflang="{{ $pbsAlt['hreflang'] }}" href="{{ $pbsAlt['url'] }}"/>
    @endforeach

    {{-- Version servie aux visiteurs dont la langue ne correspond à aucune des nôtres. --}}
    <link rel="alternate" hreflang="x-default"
          href="{{ $pbsAlternates[config('locales.default')]['url'] ?? reset($pbsAlternates)['url'] }}"/>

    <link rel="canonical" href="{{ $pbsAlternates[app()->getLocale()]['url'] ?? url()->current() }}"/>
@endif
