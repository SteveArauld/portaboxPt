@extends('layouts.app')

@push('styles')
    <style>
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .slider-container {
            position: relative;
            min-height: 600px;
            width: 100%;
            background: #f5f5f5;
        }

        .slider-loader {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f5f5f5;
            z-index: 10;
            transition: opacity 0.5s ease;
        }

        .slider-loader.fade-out {
            opacity: 0;
            pointer-events: none;
        }

        .revslider-wrapper {
            opacity: 0;
            transition: opacity 0.5s ease;
            width: 100%;
            height: 100%;
        }

        .revslider-wrapper.show {
            opacity: 1;
        }

        /* S'assurer que le slider prend toute la hauteur */
        sr7-module {
            min-height: 600px !important;
            display: block !important;
        }
    </style>
@endpush

@section('title', 'PORTA BOX SOLUTIONS')
@section('content')

    <div id="main" class="wrapper ">

        <div class="page-container  no-sidebar">
            <div id="main-content">
                <div id="primary" class="site-content">
                    <article id="post-8171" class="post-8171 page type-page status-publish hentry">
                        <div data-elementor-type="wp-page" data-elementor-id="8171" class="elementor elementor-8171">
                            <div class="elementor-element elementor-element-c4ad18f e-flex e-con-boxed e-con e-parent"
                                 data-id="c4ad18f" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-widget-slider_revolution" data-id="cfe5836"
                                         data-element_type="widget" data-widget_type="slider_revolution.default">

                                        <div class="slider-container" style="position: relative; min-height: 600px; width: 100%;">

                                            <div class="slider-loader" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; background: #f5f5f5; z-index: 10;">
                                                <div style="text-align: center;">
                                                    <div class="spinner" style="width: 50px; height: 50px; border: 5px solid #f3f3f3; border-top: 5px solid #3498db; border-radius: 50%; animation: spin 1s linear infinite; margin: 0 auto 20px;"></div>
                                                    <p style="color: #333; font-family: Arial, sans-serif;">{{ __('home.slider.loading') }}</p>
                                                </div>
                                            </div>

                                            <div class="revslider-wrapper" style="opacity: 0; transition: opacity 0.5s ease;">
                                                <div class="wp-block-themepunch-revslider">
                                                    <p class="rs-p-wp-fix"></p>
                                                    <sr7-module data-alias="demo-06" data-id="7" id="SR7_7_1"
                                                                class="rs-ov-hidden" data-version="6.7.38">
                                                        <sr7-adjuster></sr7-adjuster>
                                                        <sr7-content>
                                                            <sr7-slide id="SR7_7_1-17" data-key="17">
                                                                <sr7-bg id="SR7_7_1-17-11" class="sr7-layer">
                                                                    <noscript><img decoding="async"
                                                                                   src="assets/uploads/2026/02/Image_m.png"
                                                                                   alt=""
                                                                                   title="WhatsApp Image 2025-12-03 at 15.33.52"></noscript>
                                                                </sr7-bg>
                                                                <sr7-txt id="SR7_7_1-17-1" class="sr7-layer">{{ __('home.slider.slide1.title') }}</sr7-txt>
                                                                <a id="SR7_7_1-17-10" class="sr7-layer"
                                                                   href="{{ route('shop') }}" target="_blank" rel="noopener">{{ __('home.slider.button') }}</a>
                                                            </sr7-slide>
                                                            <sr7-slide id="SR7_7_1-18" data-key="18">
                                                                <sr7-bg id="SR7_7_1-18-11" class="sr7-layer">
                                                                    <noscript><img decoding="async"
                                                                                   src="assets/uploads/2026/02/81.png"
                                                                                   alt="" title="81"></noscript>
                                                                </sr7-bg>
                                                                <sr7-txt id="SR7_7_1-18-1" class="sr7-layer">{{ __('home.slider.slide2.title') }}</sr7-txt>
                                                                <a id="SR7_7_1-18-10" class="sr7-layer"
                                                                   href="{{ route('shop') }}" target="_blank" rel="noopener">{{ __('home.slider.button') }}</a>
                                                            </sr7-slide>
                                                            <sr7-slide id="SR7_7_1-19" data-key="19">
                                                                <sr7-bg id="SR7_7_1-19-11" class="sr7-layer">
                                                                    <noscript><img decoding="async"
                                                                                   src="assets/uploads/2026/02/47.png"
                                                                                   alt="" title="47"></noscript>
                                                                </sr7-bg>
                                                                <sr7-txt id="SR7_7_1-19-1" class="sr7-layer">{{ __('home.slider.slide3.title') }}</sr7-txt>
                                                                <a id="SR7_7_1-19-10" class="sr7-layer"
                                                                   href="{{ route('shop') }}" target="_blank" rel="noopener">{{ __('home.slider.button') }}</a>
                                                            </sr7-slide>
                                                            <sr7-slide id="SR7_7_1-34" data-key="34">
                                                            </sr7-slide>
                                                        </sr7-content>
                                                        <image_lists style="display:none">
                                                            <img data-src="/assets/uploads/2026/02/WhatsApp-Image-2025-12-03-at-15.33.52.jpeg"
                                                                 data-libid="12737" data-lib="medialibrary"
                                                                 title="WhatsApp Image 2025-12-03 at 15.33.52" width="0" height="0"
                                                                 data-dbsrc="Ly9jb250YWluZXJib3hpdGFsaWEuY29tL3dwLWNvbnRlbnQvdXBsb2Fkcy8yMDI2LzAyL1doYXRzQXBwLUltYWdlLTIwMjUtMTItMDMtYXQtMTUuMzMuNTIuanBlZw=="/>
                                                            <img data-src="/assets/uploads/2026/02/81.png"
                                                                 data-libid="12738" data-lib="medialibrary" title="81" width="0" height="0"
                                                                 data-dbsrc="Ly9jb250YWluZXJib3hpdGFsaWEuY29tL3dwLWNvbnRlbnQvdXBsb2Fkcy8yMDI2LzAyLzgxLmpwZw=="/>
                                                            <img data-src="/assets/uploads/2026/02/47.png"
                                                                 data-libid="12739" data-lib="medialibrary" title="47" width="0" height="0"
                                                                 data-dbsrc="Ly9jb250YWluZXJib3hpdGFsaWEuY29tL3dwLWNvbnRlbnQvdXBsb2Fkcy8yMDI2LzAyLzQ3LmpwZw=="/>
                                                        </image_lists>
                                                    </sr7-module>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Container Refrigerados -->
                            <div class="elementor-element elementor-element-7fe59cb1 e-flex e-con-boxed e-con e-parent"
                                 data-id="7fe59cb1" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-6488a7da elementor-widget elementor-widget-ts-products"
                                         data-id="6488a7da" data-element_type="widget"
                                         data-widget_type="ts-products.default">
                                        <div class="elementor-widget-container">
                                            <div class="ts-product-wrapper ts-shortcode ts-product woocommerce columns-5 recent grid has-shop-more-button"
                                                 style="--ts-columns: 5">

                                                <header class="shortcode-heading-wrapper">
                                                    <h3 class="shortcode-title">{{ __('header.category.refrigerados') }}</h3>

                                                    <div class="shop-more">
                                                        <a class="shop-more-button"
                                                           href="{{ route('category.show', ['category' => 'contentores-refrigerados']) }}"
                                                           target="_blank" rel="nofollow">{{ __('home.products.view_all') }}</a>
                                                    </div>
                                                </header>

                                                <div class="content-wrapper ">
                                                    <div class="products">
                                                        @forelse($containerRefrigerati as $article)
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
                                                                    </div>

                                                                    <div class="meta-wrapper">
                                                                        <h3 class="heading-title product-name">
                                                                            <a href="{{ route('product.show', $article->slug) }}">{{ $article->name }}</a>
                                                                        </h3>

                                                                        <span class="price">
                                                                            @if($article->old_price && $article->old_price > $article->price)
                                                                                <del aria-hidden="true">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <bdi>{{ number_format($article->old_price, 2, '.', ',') }}&nbsp;<span
                                                                                                class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                                </span>
                                                                            </del>
                                                                                <ins aria-hidden="true">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <bdi>{{ number_format($article->price, 2, '.', ',') }}&nbsp;<span
                                                                                                class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                                </span>
                                                                            </ins>
                                                                            @else
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                <bdi>{{ number_format($article->price, 2, '.', ',') }}&nbsp;<span
                                                                                            class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                            </span>
                                                                            @endif
                                                                            <small class="woocommerce-price-suffix">{{ __('home.products.price_suffix') }}</small>
                                                                        </span>
                                                                    </div>

                                                                    @include('front.partials.cart-button', ['item' => $article])

                                                                    <div class="meta-wrapper meta-wrapper-2">
                                                                        <div class="product-group-button-meta">
                                                                            <div class="button-in quickshop">
                                                                                <a class="quickshop" href="#"
                                                                                   data-product_id="{{ $article->id }}"
                                                                                >
                                                                                    <span class="ts-tooltip button-tooltip">{{ __('home.products.quickshop') }}</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        @empty
                                                            <div class="no-products-found"
                                                                 style="grid-column: 1/-1; text-align: center; padding: 50px;">
                                                                <h3>{{ __('home.products.no_products.title') }}</h3>
                                                                <p>{{ __('home.products.no_products.text') }}</p>
                                                                <a href="{{ route('shop') }}" class="button"
                                                                   style="display: inline-block; padding: 12px 30px; background: #495057; color: #fff; text-decoration: none; border-radius: 8px; margin-top: 20px;">{{ __('home.products.no_products.clear_filters') }}</a>
                                                            </div>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Contentores Modulares -->
                            <div class="elementor-element elementor-element-3880d06 e-flex e-con-boxed e-con e-parent"
                                 data-id="3880d06" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-824866c elementor-widget elementor-widget-ts-products"
                                         data-id="824866c" data-element_type="widget"
                                         data-widget_type="ts-products.default">
                                        <div class="elementor-widget-container">
                                            <div class="ts-product-wrapper ts-shortcode ts-product woocommerce columns-5 recent grid has-shop-more-button"
                                                 style="--ts-columns: 5">

                                                <header class="shortcode-heading-wrapper">
                                                    <h3 class="shortcode-title">{{ __('header.category.modulares') }}</h3>

                                                    <div class="shop-more">
                                                        <a class="shop-more-button"
                                                           href="{{ route('category.show', ['category' => 'contentores-modulares']) }}"
                                                           target="_blank" rel="nofollow">{{ __('home.products.view_all') }}</a>
                                                    </div>
                                                </header>

                                                <div class="content-wrapper ">
                                                    <div class="products">
                                                        @forelse($container_modulari as $article)
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
                                                                    </div>

                                                                    <div class="meta-wrapper">
                                                                        <h3 class="heading-title product-name">
                                                                            <a href="{{ route('product.show', $article->slug) }}">{{ $article->name }}</a>
                                                                        </h3>

                                                                        <span class="price">
                                                                            @if($article->old_price && $article->old_price > $article->price)
                                                                                <del aria-hidden="true">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <bdi>{{ number_format($article->old_price, 2, '.', ',') }}&nbsp;<span
                                                                                                class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                                </span>
                                                                            </del>
                                                                                <ins aria-hidden="true">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <bdi>{{ number_format($article->price, 2, '.', ',') }}&nbsp;<span
                                                                                                class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                                </span>
                                                                            </ins>
                                                                            @else
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                <bdi>{{ number_format($article->price, 2, '.', ',') }}&nbsp;<span
                                                                                            class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                            </span>
                                                                            @endif
                                                                            <small class="woocommerce-price-suffix">{{ __('home.products.price_suffix') }}</small>
                                                                        </span>
                                                                    </div>

                                                                    @include('front.partials.cart-button', ['item' => $article])

                                                                    <div class="meta-wrapper meta-wrapper-2">
                                                                        <div class="product-group-button-meta">
                                                                            <div class="button-in quickshop">
                                                                                <a class="quickshop" href="#"
                                                                                   data-product_id="{{ $article->id }}"
                                                                                >
                                                                                    <span class="ts-tooltip button-tooltip">{{ __('home.products.quickshop') }}</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        @empty
                                                            <div class="no-products-found"
                                                                 style="grid-column: 1/-1; text-align: center; padding: 50px;">
                                                                <h3>{{ __('home.products.no_products.title') }}</h3>
                                                                <p>{{ __('home.products.no_products.text') }}</p>
                                                                <a href="{{ route('shop') }}" class="button"
                                                                   style="display: inline-block; padding: 12px 30px; background: #495057; color: #fff; text-decoration: none; border-radius: 8px; margin-top: 20px;">{{ __('home.products.no_products.clear_filters') }}</a>
                                                            </div>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Banner section -->
                            <div class="elementor-element elementor-element-459f055b e-flex e-con-boxed e-con e-parent"
                                 data-id="459f055b" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-6c7ce297 e-con-full e-flex e-con e-child"
                                         data-id="6c7ce297" data-element_type="container">
                                        <div class="elementor-element elementor-element-3162e4dc elementor-widget elementor-widget-ts-banner"
                                             data-id="3162e4dc" data-element_type="widget"
                                             data-widget_type="ts-banner.default">
                                            <div class="elementor-widget-container">
                                                <div class="ts-banner eff-zoom-in button-default img-mobile-tablet">
                                                    <div class="banner-wrapper">
                                                        <div class="background-overlay"></div>

                                                        <div class="banner-bg">
                                                            <img loading="lazy" decoding="async" width="2048"
                                                                 height="1536"
                                                                 src="assets/uploads/2026/02/487213817_654904667295100_6377728539844489717_n.png"
                                                                 class="bg-image mobile-banner" alt=""
                                                                 srcset="/assets/uploads/2026/02/487213817_654904667295100_6377728539844489717_n.png 2048w, /assets/uploads/2026/02/487213817_654904667295100_6377728539844489717_n.png 300w, /assets/uploads/2026/02/487213817_654904667295100_6377728539844489717_n.png 1024w, /assets/uploads/2026/02/487213817_654904667295100_6377728539844489717_n.png 768w, /assets/uploads/2026/02/487213817_654904667295100_6377728539844489717_n.png 1536w, /assets/uploads/2026/02/487213817_654904667295100_6377728539844489717_n.png 700w, /assets/uploads/2026/02/487213817_654904667295100_6377728539844489717_n.png 1300w"
                                                                 sizes="(max-width: 2048px) 100vw, 2048px"/>
                                                            <img
                                                                    loading="lazy" decoding="async" width="2048"
                                                                    height="1536"
                                                                    src="assets/uploads/2026/02/487213817_654904667295100_6377728539844489717_n.png"
                                                                    class="bg-image bg-image main-banner" alt=""
                                                                    srcset="/assets/uploads/2026/02/487213817_654904667295100_6377728539844489717_n.png 2048w, /assets/uploads/2026/02/487213817_654904667295100_6377728539844489717_n.png 300w, /assets/uploads/2026/02/487213817_654904667295100_6377728539844489717_n.png 1024w, /assets/uploads/2026/02/487213817_654904667295100_6377728539844489717_n.png 768w, /assets/uploads/2026/02/487213817_654904667295100_6377728539844489717_n.png 1536w, /assets/uploads/2026/02/487213817_654904667295100_6377728539844489717_n.png 700w, /assets/uploads/2026/02/487213817_654904667295100_6377728539844489717_n.png 1300w"
                                                                    sizes="(max-width: 2048px) 100vw, 2048px"/>
                                                        </div>

                                                        <div class="box-content">
                                                            <div class="content-text">
                                                                <div class="top-description">{{ __('home.banner.top_description') }}</div>
                                                                <h2>{{ __('home.banner.title') }}</h2>
                                                                <div class="ts-banner-button">
                                                                    <a class="button" href="{{ route('shop') }}"
                                                                       target="_blank" rel="nofollow">
                                                                        {{ __('home.banner.button') }}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Contentores 20 Pés -->
                            <div class="elementor-element elementor-element-7a2dda0 e-flex e-con-boxed e-con e-parent"
                                 data-id="7a2dda0" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-89c92ed elementor-widget elementor-widget-ts-products"
                                         data-id="89c92ed" data-element_type="widget"
                                         data-widget_type="ts-products.default">
                                        <div class="elementor-widget-container">
                                            <div class="ts-product-wrapper ts-shortcode ts-product woocommerce columns-5 recent grid has-shop-more-button"
                                                 style="--ts-columns: 5">

                                                <header class="shortcode-heading-wrapper">
                                                    <h3 class="shortcode-title">{{ __('header.category.contentores_20') }}</h3>

                                                    <div class="shop-more">
                                                        <a class="shop-more-button"
                                                           href="{{ route('category.show', ['category' => 'contentores-20-pes']) }}"
                                                           target="_blank" rel="nofollow">{{ __('home.products.view_all') }}</a>
                                                    </div>
                                                </header>

                                                <div class="content-wrapper ">
                                                    <div class="products">
                                                        @forelse($contenitori_20_piedi as $article)
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
                                                                    </div>

                                                                    <div class="meta-wrapper">
                                                                        <h3 class="heading-title product-name">
                                                                            <a href="{{ route('product.show', $article->slug) }}">{{ $article->name }}</a>
                                                                        </h3>

                                                                        <span class="price">
                                                                            @if($article->old_price && $article->old_price > $article->price)
                                                                                <del aria-hidden="true">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <bdi>{{ number_format($article->old_price, 2, '.', ',') }}&nbsp;<span
                                                                                                class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                                </span>
                                                                            </del>
                                                                                <ins aria-hidden="true">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <bdi>{{ number_format($article->price, 2, '.', ',') }}&nbsp;<span
                                                                                                class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                                </span>
                                                                            </ins>
                                                                            @else
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                <bdi>{{ number_format($article->price, 2, '.', ',') }}&nbsp;<span
                                                                                            class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                            </span>
                                                                            @endif
                                                                            <small class="woocommerce-price-suffix">{{ __('home.products.price_suffix') }}</small>
                                                                        </span>
                                                                    </div>

                                                                    @include('front.partials.cart-button', ['item' => $article])

                                                                    <div class="meta-wrapper meta-wrapper-2">
                                                                        <div class="product-group-button-meta">
                                                                            <div class="button-in quickshop">
                                                                                <a class="quickshop" href="#"
                                                                                   data-product_id="{{ $article->id }}"
                                                                                >
                                                                                    <span class="ts-tooltip button-tooltip">{{ __('home.products.quickshop') }}</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        @empty
                                                            <div class="no-products-found"
                                                                 style="grid-column: 1/-1; text-align: center; padding: 50px;">
                                                                <h3>{{ __('home.products.no_products.title') }}</h3>
                                                                <p>{{ __('home.products.no_products.text') }}</p>
                                                                <a href="{{ route('shop') }}" class="button"
                                                                   style="display: inline-block; padding: 12px 30px; background: #495057; color: #fff; text-decoration: none; border-radius: 8px; margin-top: 20px;">{{ __('home.products.no_products.clear_filters') }}</a>
                                                            </div>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Contentores 40 Pés -->
                            <div class="elementor-element elementor-element-0e484dd e-flex e-con-boxed e-con e-parent"
                                 data-id="0e484dd" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-4a47677 elementor-widget elementor-widget-ts-products"
                                         data-id="4a47677" data-element_type="widget"
                                         data-widget_type="ts-products.default">
                                        <div class="elementor-widget-container">
                                            <div class="ts-product-wrapper ts-shortcode ts-product woocommerce columns-5 recent grid has-shop-more-button"
                                                 style="--ts-columns: 5">

                                                <header class="shortcode-heading-wrapper">
                                                    <h3 class="shortcode-title">{{ __('header.category.contentores_40') }}</h3>

                                                    <div class="shop-more">
                                                        <a class="shop-more-button"
                                                           href="{{ route('category.show', ['category' => 'contentores-40-pes']) }}"
                                                           target="_blank" rel="nofollow">{{ __('home.products.view_all') }}</a>
                                                    </div>
                                                </header>

                                                <div class="content-wrapper ">
                                                    <div class="products">
                                                        @forelse($contenitori_40_piedi as $article)
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
                                                                    </div>

                                                                    <div class="meta-wrapper">
                                                                        <h3 class="heading-title product-name">
                                                                            <a href="{{ route('product.show', $article->slug) }}">{{ $article->name }}</a>
                                                                        </h3>

                                                                        <span class="price">
                                                                            @if($article->old_price && $article->old_price > $article->price)
                                                                                <del aria-hidden="true">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <bdi>{{ number_format($article->old_price, 2, '.', ',') }}&nbsp;<span
                                                                                                class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                                </span>
                                                                            </del>
                                                                                <ins aria-hidden="true">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <bdi>{{ number_format($article->price, 2, '.', ',') }}&nbsp;<span
                                                                                                class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                                </span>
                                                                            </ins>
                                                                            @else
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                <bdi>{{ number_format($article->price, 2, '.', ',') }}&nbsp;<span
                                                                                            class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                            </span>
                                                                            @endif
                                                                            <small class="woocommerce-price-suffix">{{ __('home.products.price_suffix') }}</small>
                                                                        </span>
                                                                    </div>

                                                                    @include('front.partials.cart-button', ['item' => $article])

                                                                    <div class="meta-wrapper meta-wrapper-2">
                                                                        <div class="product-group-button-meta">
                                                                            <div class="button-in quickshop">
                                                                                <a class="quickshop" href="#"
                                                                                   data-product_id="{{ $article->id }}"
                                                                                >
                                                                                    <span class="ts-tooltip button-tooltip">{{ __('home.products.quickshop') }}</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        @empty
                                                            <div class="no-products-found"
                                                                 style="grid-column: 1/-1; text-align: center; padding: 50px;">
                                                                <h3>{{ __('home.products.no_products.title') }}</h3>
                                                                <p>{{ __('home.products.no_products.text') }}</p>
                                                                <a href="{{ route('shop') }}" class="button"
                                                                   style="display: inline-block; padding: 12px 30px; background: #495057; color: #fff; text-decoration: none; border-radius: 8px; margin-top: 20px;">{{ __('home.products.no_products.clear_filters') }}</a>
                                                            </div>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Contentores Casa -->
                            <div class="elementor-element elementor-element-9ca49a1 e-flex e-con-boxed e-con e-parent"
                                 data-id="9ca49a1" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-b59152b elementor-widget elementor-widget-ts-products"
                                         data-id="b59152b" data-element_type="widget"
                                         data-widget_type="ts-products.default">
                                        <div class="elementor-widget-container">
                                            <div class="ts-product-wrapper ts-shortcode ts-product woocommerce columns-5 recent grid has-shop-more-button"
                                                 style="--ts-columns: 5">

                                                <header class="shortcode-heading-wrapper">
                                                    <h3 class="shortcode-title">{{ __('header.category.contentores_casa') }}</h3>

                                                    <div class="shop-more">
                                                        <a class="shop-more-button"
                                                           href="{{ route('category.show', ['category' => 'contentores-casa']) }}"
                                                           target="_blank" rel="nofollow">{{ __('home.products.view_all') }}</a>
                                                    </div>
                                                </header>

                                                <div class="content-wrapper ">
                                                    <div class="products">
                                                        @forelse($contenitori_casa as $article)
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
                                                                    </div>

                                                                    <div class="meta-wrapper">
                                                                        <h3 class="heading-title product-name">
                                                                            <a href="{{ route('product.show', $article->slug) }}">{{ $article->name }}</a>
                                                                        </h3>

                                                                        <span class="price">
                                                                            @if($article->old_price && $article->old_price > $article->price)
                                                                                <del aria-hidden="true">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <bdi>{{ number_format($article->old_price, 2, '.', ',') }}&nbsp;<span
                                                                                                class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                                </span>
                                                                            </del>
                                                                                <ins aria-hidden="true">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <bdi>{{ number_format($article->price, 2, '.', ',') }}&nbsp;<span
                                                                                                class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                                </span>
                                                                            </ins>
                                                                            @else
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                <bdi>{{ number_format($article->price, 2, '.', ',') }}&nbsp;<span
                                                                                            class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                            </span>
                                                                            @endif
                                                                            <small class="woocommerce-price-suffix">{{ __('home.products.price_suffix') }}</small>
                                                                        </span>
                                                                    </div>

                                                                    @include('front.partials.cart-button', ['item' => $article])

                                                                    <div class="meta-wrapper meta-wrapper-2">
                                                                        <div class="product-group-button-meta">
                                                                            <div class="button-in quickshop">
                                                                                <a class="quickshop" href="#"
                                                                                   data-product_id="{{ $article->id }}"
                                                                                >
                                                                                    <span class="ts-tooltip button-tooltip">{{ __('home.products.quickshop') }}</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        @empty
                                                            <div class="no-products-found"
                                                                 style="grid-column: 1/-1; text-align: center; padding: 50px;">
                                                                <h3>{{ __('home.products.no_products.title') }}</h3>
                                                                <p>{{ __('home.products.no_products.text') }}</p>
                                                                <a href="{{ route('shop') }}" class="button"
                                                                   style="display: inline-block; padding: 12px 30px; background: #495057; color: #fff; text-decoration: none; border-radius: 8px; margin-top: 20px;">{{ __('home.products.no_products.clear_filters') }}</a>
                                                            </div>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Piscinas -->
                            <div class="elementor-element elementor-element-42fc19a e-flex e-con-boxed e-con e-parent"
                                 data-id="42fc19a" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-4b332c0 elementor-widget elementor-widget-ts-products"
                                         data-id="4b332c0" data-element_type="widget"
                                         data-widget_type="ts-products.default">
                                        <div class="elementor-widget-container">
                                            <div class="ts-product-wrapper ts-shortcode ts-product woocommerce columns-5 mixed_order grid has-shop-more-button"
                                                 style="--ts-columns: 5">

                                                <header class="shortcode-heading-wrapper">
                                                    <h3 class="shortcode-title">{{ __('header.category.piscinas') }}</h3>

                                                    <div class="shop-more">
                                                        <a class="shop-more-button"
                                                           href="{{ route('category.show', ['category' => 'piscinas']) }}"
                                                           target="_blank" rel="nofollow">{{ __('home.products.view_all') }}</a>
                                                    </div>
                                                </header>

                                                <div class="content-wrapper ">
                                                    <div class="products">
                                                        @forelse($piscina as $article)
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
                                                                    </div>

                                                                    <div class="meta-wrapper">
                                                                        <h3 class="heading-title product-name">
                                                                            <a href="{{ route('product.show', $article->slug) }}">{{ $article->name }}</a>
                                                                        </h3>

                                                                        <span class="price">
                                                                            @if($article->old_price && $article->old_price > $article->price)
                                                                                <del aria-hidden="true">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <bdi>{{ number_format($article->old_price, 2, '.', ',') }}&nbsp;<span
                                                                                                class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                                </span>
                                                                            </del>
                                                                                <ins aria-hidden="true">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <bdi>{{ number_format($article->price, 2, '.', ',') }}&nbsp;<span
                                                                                                class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                                </span>
                                                                            </ins>
                                                                            @else
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                <bdi>{{ number_format($article->price, 2, '.', ',') }}&nbsp;<span
                                                                                            class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                            </span>
                                                                            @endif
                                                                            <small class="woocommerce-price-suffix">{{ __('home.products.price_suffix') }}</small>
                                                                        </span>
                                                                    </div>

                                                                    @include('front.partials.cart-button', ['item' => $article])

                                                                    <div class="meta-wrapper meta-wrapper-2">
                                                                        <div class="product-group-button-meta">
                                                                            <div class="button-in quickshop">
                                                                                <a class="quickshop" href="#"
                                                                                   data-product_id="{{ $article->id }}"
                                                                                >
                                                                                    <span class="ts-tooltip button-tooltip">{{ __('home.products.quickshop') }}</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        @empty
                                                            <div class="no-products-found"
                                                                 style="grid-column: 1/-1; text-align: center; padding: 50px;">
                                                                <h3>{{ __('home.products.no_products.title') }}</h3>
                                                                <p>{{ __('home.products.no_products.text') }}</p>
                                                                <a href="{{ route('shop') }}" class="button"
                                                                   style="display: inline-block; padding: 12px 30px; background: #495057; color: #fff; text-decoration: none; border-radius: 8px; margin-top: 20px;">{{ __('home.products.no_products.clear_filters') }}</a>
                                                            </div>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Contentores 10 Pés -->
                            <div class="elementor-element elementor-element-42fc19a e-flex e-con-boxed e-con e-parent"
                                 data-id="42fc19a" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-4b332c0 elementor-widget elementor-widget-ts-products"
                                         data-id="4b332c0" data-element_type="widget"
                                         data-widget_type="ts-products.default">
                                        <div class="elementor-widget-container">
                                            <div class="ts-product-wrapper ts-shortcode ts-product woocommerce columns-5 mixed_order grid has-shop-more-button"
                                                 style="--ts-columns: 5">

                                                <header class="shortcode-heading-wrapper">
                                                    <h3 class="shortcode-title">{{ __('header.category.contentores_10') }}</h3>

                                                    <div class="shop-more">
                                                        <a class="shop-more-button"
                                                           href="{{ route('category.show', ['category' => 'contentores-10-pes']) }}"
                                                           target="_blank" rel="nofollow">{{ __('home.products.view_all') }}</a>
                                                    </div>
                                                </header>

                                                <div class="content-wrapper ">
                                                    <div class="products">
                                                        @forelse($contenitori_10_piedi as $article)
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
                                                                    </div>

                                                                    <div class="meta-wrapper">
                                                                        <h3 class="heading-title product-name">
                                                                            <a href="{{ route('product.show', $article->slug) }}">{{ $article->name }}</a>
                                                                        </h3>

                                                                        <span class="price">
                                                                            @if($article->old_price && $article->old_price > $article->price)
                                                                                <del aria-hidden="true">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <bdi>{{ number_format($article->old_price, 2, '.', ',') }}&nbsp;<span
                                                                                                class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                                </span>
                                                                            </del>
                                                                                <ins aria-hidden="true">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <bdi>{{ number_format($article->price, 2, '.', ',') }}&nbsp;<span
                                                                                                class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                                </span>
                                                                            </ins>
                                                                            @else
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                <bdi>{{ number_format($article->price, 2, '.', ',') }}&nbsp;<span
                                                                                            class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                            </span>
                                                                            @endif
                                                                            <small class="woocommerce-price-suffix">{{ __('home.products.price_suffix') }}</small>
                                                                        </span>
                                                                    </div>

                                                                    @include('front.partials.cart-button', ['item' => $article])

                                                                    <div class="meta-wrapper meta-wrapper-2">
                                                                        <div class="product-group-button-meta">
                                                                            <div class="button-in quickshop">
                                                                                <a class="quickshop" href="#"
                                                                                   data-product_id="{{ $article->id }}"
                                                                                >
                                                                                    <span class="ts-tooltip button-tooltip">{{ __('home.products.quickshop') }}</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        @empty
                                                            <div class="no-products-found"
                                                                 style="grid-column: 1/-1; text-align: center; padding: 50px;">
                                                                <h3>{{ __('home.products.no_products.title') }}</h3>
                                                                <p>{{ __('home.products.no_products.text') }}</p>
                                                                <a href="{{ route('shop') }}" class="button"
                                                                   style="display: inline-block; padding: 12px 30px; background: #495057; color: #fff; text-decoration: none; border-radius: 8px; margin-top: 20px;">{{ __('home.products.no_products.clear_filters') }}</a>
                                                            </div>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Cafetaria / Bar / Restaurante -->
                            <div class="elementor-element elementor-element-42fc19a e-flex e-con-boxed e-con e-parent"
                                 data-id="42fc19a" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-4b332c0 elementor-widget elementor-widget-ts-products"
                                         data-id="4b332c0" data-element_type="widget"
                                         data-widget_type="ts-products.default">
                                        <div class="elementor-widget-container">
                                            <div class="ts-product-wrapper ts-shortcode ts-product woocommerce columns-5 mixed_order grid has-shop-more-button"
                                                 style="--ts-columns: 5">

                                                <header class="shortcode-heading-wrapper">
                                                    <h3 class="shortcode-title">{{ __('header.category.cafetaria') }}</h3>

                                                    <div class="shop-more">
                                                        <a class="shop-more-button"
                                                           href="{{ route('category.show', ['category' => 'cafetaria-bar-restaurante']) }}"
                                                           target="_blank" rel="nofollow">{{ __('home.products.view_all') }}</a>
                                                    </div>
                                                </header>

                                                <div class="content-wrapper ">
                                                    <div class="products">
                                                        @forelse($caffetteria_bar_ristorante as $article)
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
                                                                    </div>

                                                                    <div class="meta-wrapper">
                                                                        <h3 class="heading-title product-name">
                                                                            <a href="{{ route('product.show', $article->slug) }}">{{ $article->name }}</a>
                                                                        </h3>

                                                                        <span class="price">
                                                                            @if($article->old_price && $article->old_price > $article->price)
                                                                                <del aria-hidden="true">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <bdi>{{ number_format($article->old_price, 2, '.', ',') }}&nbsp;<span
                                                                                                class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                                </span>
                                                                            </del>
                                                                                <ins aria-hidden="true">
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <bdi>{{ number_format($article->price, 2, '.', ',') }}&nbsp;<span
                                                                                                class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                                </span>
                                                                            </ins>
                                                                            @else
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                <bdi>{{ number_format($article->price, 2, '.', ',') }}&nbsp;<span
                                                                                            class="woocommerce-Price-currencySymbol">€</span></bdi>
                                                                            </span>
                                                                            @endif
                                                                            <small class="woocommerce-price-suffix">{{ __('home.products.price_suffix') }}</small>
                                                                        </span>
                                                                    </div>

                                                                    @include('front.partials.cart-button', ['item' => $article])

                                                                    <div class="meta-wrapper meta-wrapper-2">
                                                                        <div class="product-group-button-meta">
                                                                            <div class="button-in quickshop">
                                                                                <a class="quickshop" href="#"
                                                                                   data-product_id="{{ $article->id }}"
                                                                                >
                                                                                    <span class="ts-tooltip button-tooltip">{{ __('home.products.quickshop') }}</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        @empty
                                                            <div class="no-products-found"
                                                                 style="grid-column: 1/-1; text-align: center; padding: 50px;">
                                                                <h3>{{ __('home.products.no_products.title') }}</h3>
                                                                <p>{{ __('home.products.no_products.text') }}</p>
                                                                <a href="{{ route('shop') }}" class="button"
                                                                   style="display: inline-block; padding: 12px 30px; background: #495057; color: #fff; text-decoration: none; border-radius: 8px; margin-top: 20px;">{{ __('home.products.no_products.clear_filters') }}</a>
                                                            </div>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonials section -->
                            <div class="elementor-element elementor-element-bfd003c e-flex e-con-boxed e-con e-parent"
                                 data-id="bfd003c" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-b4f9c1d elementor-widget elementor-widget-heading"
                                         data-id="b4f9c1d" data-element_type="widget"
                                         data-widget_type="heading.default">
                                        <h2 class="elementor-heading-title elementor-size-default">{{ __('home.testimonials.title') }}</h2>
                                    </div>
                                    <div class="elementor-element elementor-element-4156399 elementor-widget elementor-widget-ts-testimonial"
                                         data-id="4156399" data-element_type="widget"
                                         data-widget_type="ts-testimonial.default">
                                        <div class="elementor-widget-container">
                                            <div class="ts-testimonial-wrapper ts-shortcode columns-2"
                                                 style="--ts-columns: 2">

                                                <div class="items ">
                                                    <div class="item">
                                                        <blockquote>
                                                            <div class="content">
                                                                {{ __('home.testimonials.text1') }}
                                                            </div>
                                                            <div class="rating" title="{{ __('home.testimonials.rating_5') }}">
                                                                <span style="width: 100%">{{ __('home.testimonials.rating_5') }}</span>
                                                            </div>
                                                            <div class="author-image-meta">
                                                                <div class="author-meta">
                                                                    <span class="author">
                                                                        <a href="#" target="_blank">{{ __('home.testimonials.author1') }}</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                    <div class="item">
                                                        <blockquote>
                                                            <div class="content">
                                                                {{ __('home.testimonials.text2') }}
                                                            </div>
                                                            <div class="rating" title="{{ __('home.testimonials.rating_5') }}">
                                                                <span style="width: 100%">{{ __('home.testimonials.rating_5') }}</span>
                                                            </div>
                                                            <div class="author-image-meta">
                                                                <div class="author-meta">
                                                                    <span class="author">
                                                                        <a href="#" target="_blank">{{ __('home.testimonials.author2') }}</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                    <div class="item">
                                                        <blockquote>
                                                            <div class="content">
                                                                {{ __('home.testimonials.text3') }}
                                                            </div>
                                                            <div class="rating" title="{{ __('home.testimonials.rating_4.5') }}">
                                                                <span style="width: 90%">{{ __('home.testimonials.rating_4.5') }}</span>
                                                            </div>
                                                            <div class="author-image-meta">
                                                                <div class="author-meta">
                                                                    <span class="author">
                                                                        <a href="#" target="_blank">{{ __('home.testimonials.author3') }}</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                    <div class="item">
                                                        <blockquote>
                                                            <div class="content">
                                                                {{ __('home.testimonials.text4') }}
                                                            </div>
                                                            <div class="rating" title="{{ __('home.testimonials.rating_5') }}">
                                                                <span style="width: 100%">{{ __('home.testimonials.rating_5') }}</span>
                                                            </div>
                                                            <div class="author-image-meta">
                                                                <div class="author-meta">
                                                                    <span class="author">
                                                                        <a href="#" target="_blank">{{ __('home.testimonials.author4') }}</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Corriger l'URL du plugin
            if (window.SR7 && window.SR7.E) {
                SR7.E.plugin_url = '/assets/plugins/revslider/';
            }

            const sliderContainer = document.querySelector('.slider-container');
            const loader = document.querySelector('.slider-loader');
            const revsliderWrapper = document.querySelector('.revslider-wrapper');
            const revsliderModule = document.querySelector('sr7-module');

            // Fonction pour vérifier si le slider est chargé
            function isSliderLoaded() {
                // Vérifier si les images sont chargées ou si le slider est initialisé
                const images = revsliderModule?.querySelectorAll('img[src]');
                if (images && images.length > 0) {
                    return Array.from(images).every(img => img.complete);
                }
                return false;
            }

            // Fonction pour cacher le loader et montrer le slider
            function showSlider() {
                loader.classList.add('fade-out');
                revsliderWrapper.classList.add('show');

                // Supprimer le loader du DOM après l'animation
                setTimeout(() => {
                    if (loader && loader.parentNode) {
                        loader.style.display = 'none';
                    }
                }, 500);
            }

            // Vérifier si le slider est déjà chargé
            if (isSliderLoaded()) {
                showSlider();
            } else {
                // Attendre que le slider soit chargé
                const checkInterval = setInterval(() => {
                    if (isSliderLoaded()) {
                        clearInterval(checkInterval);
                        showSlider();
                    }
                }, 100);

                // Timeout de sécurité (10 secondes)
                setTimeout(() => {
                    clearInterval(checkInterval);
                    showSlider(); // Forcer l'affichage même si pas complètement chargé
                }, 10000);
            }

            // Écouter les événements de chargement des images
            const images = revsliderModule?.querySelectorAll('img');
            if (images) {
                let imagesLoaded = 0;
                images.forEach(img => {
                    if (img.complete) {
                        imagesLoaded++;
                    } else {
                        img.addEventListener('load', () => {
                            imagesLoaded++;
                            if (imagesLoaded === images.length) {
                                showSlider();
                            }
                        });
                        img.addEventListener('error', () => {
                            imagesLoaded++;
                            if (imagesLoaded === images.length) {
                                showSlider();
                            }
                        });
                    }
                });

                if (imagesLoaded === images.length) {
                    showSlider();
                }
            }

            // Initialisation manuelle du slider si nécessaire
            if (window.revslider_public && revsliderModule) {
                try {
                    // Forcer l'initialisation du slider
                    setTimeout(() => {
                        if (revsliderModule.classList.contains('rs-ov-hidden')) {
                            showSlider();
                        }
                    }, 2000);
                } catch (e) {
                    console.log('Erreur slider:', e);
                }
            }
        });

        // Fallback pour s'assurer que le slider s'affiche
        window.addEventListener('load', function() {
            const loader = document.querySelector('.slider-loader');
            const revsliderWrapper = document.querySelector('.revslider-wrapper');

            if (loader && !loader.classList.contains('fade-out')) {
                loader.classList.add('fade-out');
                revsliderWrapper.classList.add('show');

                setTimeout(() => {
                    if (loader && loader.parentNode) {
                        loader.style.display = 'none';
                    }
                }, 500);
            }
        });
    </script>
@endpush