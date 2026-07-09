@extends('layouts.app')

@php
    $categoryName = $categories->firstWhere('slug', $category)?->name ?? __('shop.page_title', ['name' => '']);
@endphp

@section('title', __('shop.page_title', ['name' => $categoryName]))


@push('styles')
    <style>
        /* Stili base per il paginatore */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            margin: 30px 0;
            padding: 0;
            list-style: none;
        }

        /* Elementi della paginazione */
        .page-item {
            display: inline-block;
        }

        .page-item .page-link {
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 40px;
            height: 40px;
            padding: 0 12px;
            background: #fff;
            border: 2px solid #eef2f6;
            border-radius: 10px;
            color: #666;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        /* Hover effect per tutti i link */
        .page-item .page-link:hover {
            background: #f8fafc;
            border-color: #4CAF50;
            color: #4CAF50;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(76, 175, 80, 0.15);
        }

        /* STILE PER L'ELEMENTO ATTIVO */
        .page-item.active .page-link {
            background: linear-gradient(135deg, #4CAF50 0%, #45a049 100%);
            border-color: #4CAF50;
            color: white;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
            transform: scale(1.05);
            cursor: default;
        }

        /* Effetto pulse per l'elemento attivo (opzionale) */
        .page-item.active .page-link {
            animation: activePulse 2s infinite;
        }

        @keyframes activePulse {
            0% {
                box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
            }
            50% {
                box-shadow: 0 6px 20px rgba(76, 175, 80, 0.5);
            }
            100% {
                box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
            }
        }

        /* Stile per i pulsanti precedente/successivo */
        .page-item:first-child .page-link,
        .page-item:last-child .page-link {
            font-size: 18px;
            padding: 0 16px;
        }

        .page-item:first-child .page-link:hover,
        .page-item:last-child .page-link:hover {
            background: linear-gradient(135deg, #4CAF50 0%, #45a049 100%);
            border-color: #4CAF50;
            color: white;
        }

        /* Stile per elementi disabilitati */
        .page-item.disabled .page-link {
            opacity: 0.5;
            cursor: not-allowed;
            pointer-events: none;
            background: #f8fafc;
            border-color: #eef2f6;
            color: #999;
        }

        .page-item.disabled .page-link:hover {
            transform: none;
            box-shadow: none;
            border-color: #eef2f6;
            color: #999;
        }

        /* Variante con badge per l'elemento attivo */
        .page-item.active .page-link::after {
            display: none; /* Rimuovi se non vuoi il badge */
        }

        /* Se vuoi un badge sotto l'elemento attivo */
        .page-item.active {
            position: relative;
        }

        .page-item.active::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 3px;
            background: linear-gradient(135deg, #4CAF50 0%, #45a049 100%);
            border-radius: 10px;
            animation: slideIn 0.3s ease;
        }

        @keyframes slideIn {
            from {
                width: 0;
                opacity: 0;
            }
            to {
                width: 30px;
                opacity: 1;
            }
        }

        /* Versione compatta per mobile */
        @media (max-width: 768px) {
            .pagination {
                gap: 4px;
            }

            .page-item .page-link {
                min-width: 35px;
                height: 35px;
                padding: 0 8px;
                font-size: 13px;
                border-radius: 8px;
            }

            .page-item.active .page-link {
                transform: scale(1.03);
            }

            .page-item.active::after {
                width: 20px;
                height: 2px;
                bottom: -5px;
            }
        }

        /* Stile alternativo più minimal (opzionale) */
        .page-item.active-minimal .page-link {
            background: transparent;
            border-color: #4CAF50;
            color: #4CAF50;
            font-weight: 600;
            box-shadow: none;
        }

        /* Stile per quando ci sono molti elementi */
        .pagination-lg .page-item .page-link {
            min-width: 45px;
            height: 45px;
            font-size: 16px;
        }

        .pagination-sm .page-item .page-link {
            min-width: 32px;
            height: 32px;
            font-size: 12px;
            border-radius: 6px;
        }

        /* Effetto di transizione per il cambio pagina */
        .page-item {
            transition: transform 0.2s ease;
        }

        .page-item:not(.active):hover {
            transform: translateY(-2px);
        }

        /* Stile per il testo "Pagina X di Y" */
        .pagination-info {
            text-align: center;
            color: #999;
            font-size: 13px;
            margin-top: 10px;
        }

        /* Bordi arrotondati per il primo e ultimo elemento */
        .page-item:first-child .page-link {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .page-item:last-child .page-link {
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }
    </style>
    <style>
        /* Stile per il checkbox "in vendita" coerente con gli altri */
        .product-on-sale-form {
            background: #fff;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }

        .onsale-checkbox-label {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            position: relative;
            padding: 8px 0;
            transition: all 0.2s ease;
            width: 100%;
        }

        .product-on-sale-form label{
            flex-wrap: nowrap;
        }

        .onsale-checkbox-label:hover {
            transform: translateX(5px);
        }

        .onsale-checkbox-label input[type="checkbox"] {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .onsale-checkmark {
            position: relative;
            display: inline-block;
            width: 22px;
            height: 22px;
            background: #fff;
            border: 2px solid #ddd;
            border-radius: 6px;
            transition: all 0.2s ease;
            flex-shrink: 0;
        }

        .onsale-checkbox-label:hover .onsale-checkmark {
            border-color: #ff6b6b; /* Rosso per le promozioni */
        }

        .onsale-checkbox-label input:checked ~ .onsale-checkmark {
            background-color: #ff6b6b;
            border-color: #ff6b6b;
        }

        .onsale-checkmark:after {
            content: "";
            position: absolute;
            display: none;
            left: 7px;
            top: 3px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .onsale-checkbox-label input:checked ~ .onsale-checkmark:after {
            display: block;
        }

        .onsale-text {
            font-size: 14px;
            color: #444;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 5px;
            flex-wrap: wrap;
        }

        .onsale-count {
            background: #ff6b6b;
            color: white;
            padding: 2px 8px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            display: inline-block;
            box-shadow: 0 2px 5px rgba(255, 107, 107, 0.2);
        }

        /* Badge promozione animato (opzionale) */
        .onsale-checkbox-label input:checked ~ .onsale-text .onsale-count {
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
                background: #ff5252;
                box-shadow: 0 4px 10px rgba(255, 82, 82, 0.3);
            }
            100% {
                transform: scale(1);
            }
        }

        /* Versione compatta per mobile */
        @media (max-width: 768px) {
            .product-on-sale-form {
                padding: 15px;
            }

            .onsale-checkbox-label:hover {
                transform: none;
            }

            .onsale-text {
                font-size: 13px;
            }
        }
    </style>
    <style>
        /* Stili unificati per entrambi i filtri */
        .widget-container {
            background: #fff;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }

        .widget-title-wrapper {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f0f0f0;
        }

        .widget-title {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin: 0;
            letter-spacing: -0.3px;
        }

        /* Sezioni comuni */
        .price-ranges-section,
        .custom-price-section {
            margin-bottom: 25px;
        }

        .section-title {
            font-size: 15px;
            font-weight: 500;
            color: #666;
            margin: 0 0 15px 0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Checkbox personalizzati universali */
        .checkbox-label {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            position: relative;
            padding: 4px 0;
            transition: all 0.2s ease;
            width: 100%;
        }

        .checkbox-label:hover {
            transform: translateX(5px);
        }

        .checkbox-label input[type="checkbox"] {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .checkmark {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            background: #fff;
            border: 2px solid #ddd;
            border-radius: 6px;
            transition: all 0.2s ease;
            flex-shrink: 0;
        }

        .checkbox-label:hover .checkmark {
            border-color: #4CAF50;
        }

        .checkbox-label input:checked ~ .checkmark {
            background-color: #4CAF50;
            border-color: #4CAF50;
        }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
            left: 6px;
            top: 2px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .checkbox-label input:checked ~ .checkmark:after {
            display: block;
        }

        /* Stili specifici categorie */
        .search-wrapper {
            position: relative;
            margin-bottom: 20px;
        }

        .search-input {
            width: 100%;
            padding: 12px 15px 12px 40px;
            border: 2px solid #eef2f6;
            border-radius: 10px;
            font-size: 14px;
            transition: all 0.3s ease;
            background: #f8fafc;
            color: #333;
        }

        .search-input:focus {
            outline: none;
            border-color: #4CAF50;
            background: #fff;
            box-shadow: 0 4px 10px rgba(76, 175, 80, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 16px;
            opacity: 0.6;
        }

        .categories-list {
            max-height: 300px;
            overflow-y: auto;
            border: 1px solid #eef2f6;
            border-radius: 10px;
            padding: 5px;
            background: #fafbfc;
        }

        .category-item {
            margin-bottom: 2px;
            border-bottom: 1px solid #f0f0f0;
        }

        .category-item:last-child {
            border-bottom: none;
        }

        .category-name {
            font-size: 14px;
            color: #444;
            font-weight: 400;
            flex: 1;
        }

        .category-count {
            font-size: 12px;
            color: #999;
            background: #eef2f6;
            padding: 2px 6px;
            border-radius: 12px;
            min-width: 30px;
            text-align: center;
        }

        /* Stili specifici prezzi */
        .price-presets {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .price-presets li {
            margin-bottom: 12px;
        }

        .range-text {
            font-size: 14px;
            color: #444;
            font-weight: 400;
        }

        /* Input prezzo */
        .price-inputs {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
        }

        .input-wrapper {
            flex: 1;
        }

        .price-input {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #eef2f6;
            border-radius: 10px;
            font-size: 14px;
            transition: all 0.3s ease;
            background: #f8fafc;
            color: #333;
        }

        .price-input:focus {
            outline: none;
            border-color: #4CAF50;
            background: #fff;
            box-shadow: 0 4px 10px rgba(76, 175, 80, 0.1);
        }

        .price-input::placeholder {
            color: #aaa;
            font-size: 13px;
        }

        .separator-line {
            color: #999;
            font-weight: 600;
            font-size: 18px;
        }

        /* Pulsante filtro unificato */
        .filter-button {
            width: 100%;
            padding: 14px 20px;
            background: linear-gradient(135deg, #4CAF50 0%, #45a049 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.2);
            margin-top: 10px;
        }

        .filter-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(76, 175, 80, 0.3);
            background: linear-gradient(135deg, #45a049 0%, #3d8b40 100%);
        }

        /* Reset filtri */
        .reset-filters {
            margin-top: 20px;
            text-align: center;
            padding-top: 15px;
            border-top: 1px dashed #eef2f6;
        }

        .reset-link {
            color: #999;
            font-size: 13px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s ease;
            padding: 6px 12px;
            border-radius: 20px;
            background: #f8fafc;
        }

        .reset-link:hover {
            color: #4CAF50;
            background: #f0f7f0;
            transform: scale(1.05);
        }

        .reset-icon {
            font-size: 16px;
            font-weight: 600;
        }

        /* Scrollbar personalizzata */
        .categories-list::-webkit-scrollbar {
            width: 6px;
        }

        .categories-list::-webkit-scrollbar-track {
            background: #eef2f6;
            border-radius: 10px;
        }

        .categories-list::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 10px;
        }

        .categories-list::-webkit-scrollbar-thumb:hover {
            background: #999;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .widget-container {
                padding: 15px;
            }

            .price-inputs {
                flex-direction: column;
                gap: 8px;
            }

            .separator-line {
                display: none;
            }

            .checkbox-label:hover {
                transform: none;
            }
        }

        /* Messaggio vuoto */
        .empty-message {
            padding: 30px 20px;
            text-align: center;
            color: #999;
            font-size: 14px;
            background: #f8fafc;
            border-radius: 8px;
        }
    </style>
@endpush

@section('body_class', 'archive post-type-archive post-type-archive-product wp-theme-merto theme-merto woocommerce-shop woocommerce woocommerce-page woocommerce-js wide header-v1 product-label-rectangle product-hover-style-v2 product-border-radius ajax-pagination vertical-menu-fixed ts_desktop')

@section('content')
    <div id="main" class="wrapper">
        <div class="breadcrumb-title-wrapper breadcrumb-v3">
            <div class="container">
                <div class="breadcrumb-title">
                    <h1 class="heading-title page-title entry-title">
                        {{ $categoryName}}
                    </h1>
                    <div class="ts-breadcrumbs breadcrumbs">
                        <div class="breadcrumbs-container">
                            <a href="{{ url('/') }}">{{ __('shop.breadcrumb_home') }}</a>
                            <span class="brn_arrow">/</span>
                            <span>
                              {{ $categoryName}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-container show_breadcrumb_v3 has-1-sidebar">
            
            <div id="left-sidebar" class="ts-sidebar">
                <span class="close"></span>
                <aside>
                    <!-- FORM UNICO PER TUTTI I FILTRI -->
                    <form method="GET" action="{{ route('shop') }}" id="master-filter-form">
                        <!-- Campi nascosti per parametri aggiuntivi -->
                        @if(isset($perPage) && $perPage != 28)
                            <input type="hidden" name="per_page" value="{{ $perPage }}">
                        @endif
                        @if(isset($sort) && $sort)
                            <input type="hidden" name="sort" value="{{ $sort }}">
                        @endif

                    <!-- FILTRO CATEGORIE -->
                        <section id="ts_product_filter_by_brand-1" class="widget-container product-filter-by-brand">
                            <div class="widget-title-wrapper">
                                <a class="block-control" href="javascript:void(0)"></a>
                                <h3 class="widget-title heading-title">{{ __('shop.filters.categories') }}</h3>                            </div>

                            <div class="product-filter-by-brand-wrapper">
                                <!-- Barra di ricerca categorie -->
                                <div class="search-wrapper">
                                    <input type="text"
                                           class="search-input"
                                           id="search-category"
                                           placeholder="{{ __('shop.filters.search_categories') }}"
                                           autocomplete="off">

                                </div>

                                <!-- Lista categorie con checkbox -->
                                <div class="categories-list">
                                    @forelse($categories as $cat)
                                        <div class="category-item">
                                            <label class="checkbox-label">
                                                <input type="checkbox"
                                                       name="categories[]"
                                                       value="{{ $cat->slug }}"
                                                       {{ in_array($cat->slug, $selectedCategories ?? []) ? 'checked' : '' }}
                                                       onchange="document.getElementById('master-filter-form').submit()">
                                                <span class="checkmark"></span>
                                                <span class="category-name">{{ $cat->name }}</span>
                                                @if(isset($cat->products_count))
                                                    <span class="category-count">({{ $cat->products_count }})</span>
                                                @endif
                                            </label>
                                        </div>
                                    @empty
                                        <div class="empty-message">
                                            <p>{{ __('shop.filters.no_categories') }}</p>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </section>

                        <!-- FILTRO PREZZO -->
                        <section id="ts_product_filter_by_price-1" class="widget-container product-filter-by-price">
                            <div class="widget-title-wrapper">
                                <a class="block-control" href="javascript:void(0)"></a>
                                <h3 class="widget-title heading-title">{{ __('shop.filters.price') }}</h3>
                            </div>

                            <div class="product-filter-by-price-wrapper">
                                <!-- Fasce prezzo predefinite -->
                                <div class="price-ranges-section">
                                    <h4 class="section-title">{{ __('shop.filters.price_ranges') }}</h4>
                                    <ul class="price-presets">
                                        <li>
                                            <label class="checkbox-label">
                                                <input type="checkbox"
                                                       name="price_ranges[]"
                                                       value="0-100"
                                                       {{ in_array('0-100', $selectedPriceRanges ?? []) ? 'checked' : '' }}
                                                       onchange="document.getElementById('master-filter-form').submit()">
                                                <span class="checkmark"></span>
                                                <span class="range-text">0 - 100 €</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-label">
                                                <input type="checkbox"
                                                       name="price_ranges[]"
                                                       value="100-200"
                                                       {{ in_array('100-200', $selectedPriceRanges ?? []) ? 'checked' : '' }}
                                                       onchange="document.getElementById('master-filter-form').submit()">
                                                <span class="checkmark"></span>
                                                <span class="range-text">100 € - 200 €</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-label">
                                                <input type="checkbox"
                                                       name="price_ranges[]"
                                                       value="200-500"
                                                       {{ in_array('200-500', $selectedPriceRanges ?? []) ? 'checked' : '' }}
                                                       onchange="document.getElementById('master-filter-form').submit()">
                                                <span class="checkmark"></span>
                                                <span class="range-text">200 € - 500 €</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-label">
                                                <input type="checkbox"
                                                       name="price_ranges[]"
                                                       value="500+"
                                                       {{ in_array('500+', $selectedPriceRanges ?? []) ? 'checked' : '' }}
                                                       onchange="document.getElementById('master-filter-form').submit()">
                                                <span class="checkmark"></span>
                                                <span class="range-text">500 € +</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>

                                <div class="custom-price-section">
                                    <h4 class="section-title">{{ __('shop.filters.custom_price') }}</h4>
                                    <div class="price-inputs">
                                        <div class="input-wrapper">
                                            <input type="number"
                                                   class="price-input"
                                                   name="min_price"
                                                   value="{{ $minPrice ?? '' }}"
                                                   placeholder="{{ __('shop.filters.min') }}"
                                                   step="0.01"
                                                   min="0"
                                                   id="min-price-input">
                                        </div>

                                        <span class="separator-line">—</span>

                                        <div class="input-wrapper">
                                            <input type="number"
                                                   class="price-input"
                                                   name="max_price"
                                                   value="{{ $maxPrice ?? '' }}"
                                                   placeholder="{{ __('shop.filters.max') }}"
                                                   step="0.01"
                                                   min="0"
                                                   id="max-price-input">
                                        </div>
                                    </div>

                                    <button type="submit" class="filter-button">
                                        {{ __('shop.filters.apply_filters') }}
                                    </button>
                                </div>
                            </div>
                        </section>

                        <!-- Reset Filtri -->
                        @if(isset($minPrice) || isset($maxPrice) || !empty($selectedPriceRanges) || !empty($selectedCategories))
                            <div class="reset-filters">
                                <a href="{{ route('shop') }}" class="reset-link">
                                    <span class="reset-icon">⨯</span>
                                    {{ __('shop.filters.reset_filters') }}
                                </a>
                            </div>
                        @endif
                    </form>




                </aside>
            </div>

            <div id="main-content">
                <div id="primary" class="site-content">
                    <div class="before-loop-wrapper">
                        <div class="woocommerce-notices-wrapper"></div>

                        <div class="filter-widget-area-button" style="margin-top: 20px">
                            <a href="#">{{ __('shop.filters.apply_filters') }}</a>
                        </div>

                        <div class="overlay"></div>

                        <p class="woocommerce-result-count">
                            {{ __('shop.results_count', [
                                'first' => $articles->firstItem(),
                                'last' => $articles->lastItem(),
                                'total' => $articles->total()
                            ]) }}
                        </p>

                        <form method="GET" action="{{ route('shop') }}" class="product-on-sale-form"
                              style="margin-top: 20px; ">
                            <!-- Campi nascosti per mantenere gli altri filtri -->
                            @if(isset($category) && $category)
                                <input type="hidden" name="category" value="{{ $category }}">
                            @endif
                            @if(isset($minPrice) && $minPrice)
                                <input type="hidden" name="min_price" value="{{ $minPrice }}">
                            @endif
                            @if(isset($maxPrice) && $maxPrice)
                                <input type="hidden" name="max_price" value="{{ $maxPrice }}">
                            @endif
                            @if(isset($perPage) && $perPage != 28)
                                <input type="hidden" name="per_page" value="{{ $perPage }}">
                            @endif
                            @if(isset($sort) && $sort)
                                <input type="hidden" name="sort" value="{{ $sort }}">
                            @endif
                            @if(isset($selectedCategories) && !empty($selectedCategories))
                                @foreach($selectedCategories as $cat)
                                    <input type="hidden" name="categories[]" value="{{ $cat }}">
                                @endforeach
                            @endif
                            @if(isset($selectedPriceRanges) && !empty($selectedPriceRanges))
                                @foreach($selectedPriceRanges as $range)
                                    <input type="hidden" name="price_ranges[]" value="{{ $range }}">
                                @endforeach
                            @endif

                            <label class="onsale-checkbox-label">
                                <input type="checkbox"
                                       name="onsale"
                                       value="yes"
                                       {{ isset($onsale) && $onsale == 'yes' ? 'checked' : '' }}
                                       onchange="this.form.submit()">
                                <span class="onsale-checkmark"></span>
                                <span class="onsale-text">
                                    {{ __('shop.filters.show_only_sale', ['count' => $onsaleCount ?? 0]) }}
                                </span>
                            </label>
                        </form>



                        <form method="GET" action="{{ route('shop') }}" class="product-per-page-form">
                            @if($category)<input type="hidden" name="category" value="{{ $category }}">@endif
                            @if($minPrice)<input type="hidden" name="min_price" value="{{ $minPrice }}">@endif
                            @if($maxPrice)<input type="hidden" name="max_price" value="{{ $maxPrice }}">@endif
                            @if($onsale)<input type="hidden" name="onsale" value="{{ $onsale }}">@endif

                            <span>{{ __('shop.filters.show') }}</span>
                            <select name="per_page" class="perpage" onchange="this.form.submit()">
                                <option value="28" {{ $perPage == 28 ? 'selected' : '' }}>28</option>
                                <option value="56" {{ $perPage == 56 ? 'selected' : '' }}>56</option>
                                <option value="84" {{ $perPage == 84 ? 'selected' : '' }}>84</option>
                            </select>
                        </form>

                        <div class="gridlist-toggle">
                            <span class="grid active" data-style="grid" onclick="toggleView('grid')"></span>
                            <span class="list" data-style="list" onclick="toggleView('list')"></span>
                        </div>
                    </div>

                    <div class="woocommerce main-products grid" style="--ts-columns: 4;">
                        <div class="products grid" id="products-container">
                            @forelse($articles as $article)
                                @php
                                    $primaryImage = $article->images->where('is_primary', true)->first() ?? $article->images->first();
                                    $discount = null;
                                    if($article->old_price && $article->old_price > $article->price) {
                                        $discount = round((($article->old_price - $article->price) / $article->old_price) * 100);
                                    }
                                @endphp
                                <section
                                        class="product type-product status-publish first instock {{ $article->category ? 'product_cat-' . $article->category->slug : '' }} has-post-thumbnail {{ $discount ? 'sale' : '' }} taxable shipping-taxable purchasable product-type-simple"
                                        data-product_id="{{ $article->id }}">
                                    <div class="product-wrapper">
                                        <div class="thumbnail-wrapper">
                                            <a href="{{ route('product.show', $article->slug) }}">
                                                <figure class="no-back-image">
                                                    @if($primaryImage)
                                                        <img width="300" height="300"
                                                             src="{{ $primaryImage->image_path }}"
                                                             class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                             alt="{{ $article->name }}"
                                                             loading="lazy"
                                                             onerror="this.src='https://via.placeholder.com/300x300?text=No+Image'">
                                                    @else
                                                        <img width="300" height="300"
                                                             src="https://via.placeholder.com/300x300?text=No+Image"
                                                             class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                             alt="{{ $article->name }}">
                                                    @endif
                                                </figure>
                                            </a>

                                            @if($discount)
                                                <div class="product-label">
                                                    <span class="onsale percent"><span>-{{ $discount }}%</span></span>
                                                </div>
                                            @endif

                                            <div class="product-group-button">
                                                <div class="button-in quickshop">
                                                    <a class="quickshop" href="#" data-product_id="{{ $article->id }}"
                                                       onclick="quickView({{ $article->id }}); return false;">
                                                        <span class="ts-tooltip button-tooltip">{{ __('shop.products.quickshop') }}</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="meta-wrapper">
                                            <h3 class="heading-title product-name">
                                                <a href="{{ route('product.show', $article->slug) }}">{{ $article->name }}</a>
                                            </h3>

                                            <span class="price">
                                                @if($article->old_price && $article->old_price > $article->price)
                                                    <del aria-hidden="true">
                                                        <span class="woocommerce-Price-amount amount">
                                                            <bdi>{{ number_format($article->old_price, 2, '.', ',') }}&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                        </span>
                                                    </del>
                                                    <ins aria-hidden="true">
                                                        <span class="woocommerce-Price-amount amount">
                                                            <bdi>{{ number_format($article->price, 2, '.', ',') }}&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                        </span>
                                                    </ins>
                                                @else
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>{{ number_format($article->price, 2, '.', ',') }}&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                    </span>
                                                @endif
                                                <small class="woocommerce-price-suffix">{{ __('shop.products.price_suffix') }}</small>
                                            </span>

                                            <div class="short-description list">
                                                {!! nl2br(e(Str::limit($article->short_description, 300))) !!}
                                            </div>
                                        </div>

                                        @include('front.partials.cart-button', ['item' => $article])

                                        <div class="meta-wrapper meta-wrapper-2">
                                            <div class="product-group-button-meta">
                                                <div class="button-in quickshop">
                                                    <a href="{{ route('product.show', $article->slug) }}">
                                                        <span class="ts-tooltip button-tooltip">{{ __('shop.products.quickshop') }}</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            @empty
                                <div class="no-products-found"
                                     style="grid-column: 1/-1; text-align: center; padding: 50px;">
                                    <h3>{{ __('shop.products.no_products.title') }}</h3>
                                    <p>{{ __('shop.products.no_products.text') }}</p>
                                    <a href="{{ route('shop') }}" class="button"
                                       style="display: inline-block; padding: 12px 30px; background: #495057; color: #fff; text-decoration: none; border-radius: 8px; margin-top: 20px;">{{ __('shop.products.no_products.clear_filters') }}</a>
                                </div>
                            @endforelse
                        </div>
                    </div>


                    <div class="after-loop-wrapper">
                        <nav class="woocommerce-pagination" aria-label="{{ __('shop.pagination.previous') }} / {{ __('shop.pagination.next') }}">
                            {{ $articles->appends(request()->query())->links('pagination::bootstrap-4') }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Filtro live delle categorie
            const searchInput = document.getElementById('search-category');
            const categoryItems = document.querySelectorAll('.category-item');

            if (searchInput) {
                searchInput.addEventListener('input', function () {
                    const searchTerm = this.value.toLowerCase().trim();

                    categoryItems.forEach(item => {
                        const categoryName = item.querySelector('.category-name').textContent.toLowerCase();
                        const shouldShow = searchTerm === '' || categoryName.includes(searchTerm);
                        item.style.display = shouldShow ? 'block' : 'none';
                    });
                });
            }

            // Gestione conflitto tra checkbox fasce e input personalizzati
            const priceCheckboxes = document.querySelectorAll('input[name="price_ranges[]"]');
            const minPriceInput = document.getElementById('min-price-input');
            const maxPriceInput = document.getElementById('max-price-input');

            function uncheckPriceRanges() {
                priceCheckboxes.forEach(cb => cb.checked = false);
            }

            function clearCustomPrice() {
                if (minPriceInput) minPriceInput.value = '';
                if (maxPriceInput) maxPriceInput.value = '';
            }

            if (minPriceInput && maxPriceInput) {
                minPriceInput.addEventListener('input', uncheckPriceRanges);
                maxPriceInput.addEventListener('input', uncheckPriceRanges);
            }

            priceCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    if (this.checked) {
                        clearCustomPrice();
                    }
                });
            });
        });
    </script>
    <script>
        // Fonction pour changer l'affichage (grille/liste)
        function toggleView(view) {
            const container = document.querySelector('.products');
            const gridBtn = document.querySelector('.gridlist-toggle .grid');
            const listBtn = document.querySelector('.gridlist-toggle .list');

            if (view === 'list') {
                container.classList.remove('grid');
                container.classList.add('list');
                gridBtn.classList.remove('active');
                listBtn.classList.add('active');
                localStorage.setItem('shopView', 'list');
            } else {
                container.classList.remove('list');
                container.classList.add('grid');
                listBtn.classList.remove('active');
                gridBtn.classList.add('active');
                localStorage.setItem('shopView', 'grid');
            }
        }

        // Charger la préférence d'affichage
        document.addEventListener('DOMContentLoaded', function () {
            const savedView = localStorage.getItem('shopView');
            if (savedView) {
                toggleView(savedView);
            }

            // Gestionnaire pour les filtres de prix prédéfinis
            document.querySelectorAll('.price-presets li').forEach(item => {
                item.addEventListener('click', function () {
                    const min = this.dataset.min;
                    const max = this.dataset.max;

                    document.querySelector('input[name="min_price"]').value = min;
                    document.querySelector('input[name="max_price"]').value = max;
                    document.getElementById('price-filter-form').submit();
                });
            });

            // Gestionnaire pour la recherche de catégories
            const searchInput = document.getElementById('search-category');
            if (searchInput) {
                searchInput.addEventListener('keyup', function () {
                    const searchTerm = this.value.toLowerCase();
                    document.querySelectorAll('.category-list li').forEach(li => {
                        const text = li.textContent.toLowerCase();
                        if (text.includes(searchTerm)) {
                            li.style.display = 'block';
                        } else {
                            li.style.display = 'none';
                        }
                    });
                });
            }

            // Gestionnaire pour les radios de catégorie
            document.querySelectorAll('input[name="category"]').forEach(radio => {
                radio.addEventListener('change', function () {
                    document.getElementById('selected-category').value = this.value;
                    document.getElementById('category-form').submit();
                });
            });
        });

        // Fonction pour l'aperçu rapide (à implémenter)
        function quickView(productId) {
            // Vous pouvez implémenter une modale avec les détails du produit
            alert('Quick view pour le produit ' + productId + ' (à implémenter)');
        }

        // Gestionnaire pour les filtres (soumission automatique)
        document.querySelectorAll('.perpage, .product-on-sale-form input').forEach(element => {
            element.addEventListener('change', function () {
                this.form.submit();
            });
        });
    </script>
@endpush