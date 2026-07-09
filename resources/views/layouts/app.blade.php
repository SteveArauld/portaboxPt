<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1"/>

    <title>
        {{ trim(View::yieldContent('title') . ' | ' . config('app.name')) }}
    </title>


    <meta name='robots' content='max-image-preview:large'/>
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/'/>
    <link rel='preconnect' href='https://fonts.gstatic.com/' crossorigin/>

{{--    <link rel='stylesheet' id='chaty-css-css'
          href='{{ asset("assets/plugins/chaty-pro/css/chaty-front.minb5e3.css") }}'
          type='text/css' media='all'/>--}}
    <link rel='stylesheet' id='contato-form-7-css'
          href='{{ asset("assets/plugins/contato-form-7/includes/css/styles1b46.css") }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='sr7css-css'
          href='{{ asset("assets/plugins/revslider/public/css/sr7659f.css") }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='ts-style-css'
          href='{{ asset("assets/plugins/themesky/css/themeskyc358.css") }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='swiper-css'
          href='{{ asset("assets/plugins/themesky/css/swiper-bundle.minc358.css") }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='woocommerce-layout-css'
          href='{{ asset("assets/plugins/woocommerce/assets/css/woocommerce-layoutf607.css") }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
          href='{{ asset("assets/plugins/woocommerce/assets/css/woocommerce-smallscreenf607.css") }}'
          type='text/css' media='only screen and (max-width: 768px)'/>
    <link rel='stylesheet' id='woocommerce-general-css'
          href='{{ asset("assets/plugins/woocommerce/assets/css/woocommercef607.css") }}' type='text/css'
          media='all'/>

    <link rel='stylesheet' id='elementor-frontend-css'
          href='{{ asset("assets/uploads/elementor/css/custom-frontend.minaec1.css") }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='elementor-post-10348-css'
          href='{{ asset("assets/uploads/elementor/css/post-10348aec1.css") }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='widget-heading-css'
          href='{{ asset("assets/plugins/elementor/assets/css/widget-heading.min1504.css") }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='elementor-post-8171-css'
          href='{{ asset("assets/uploads/elementor/css/post-8171840d.css") }}' type='text/css'
          media='all'/>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link href="http://fonts.googleapis.com/css2?family=Poppins:wght@600;700&amp;display=swap" rel="stylesheet"
          property="stylesheet" media="all" type="text/css">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    </noscript>
    <link rel='stylesheet' id='font-awesome-5-css'
          href='{{ asset("assets/themes/merto/css/fontawesome.min.css") }}' type='text/css'
          media='all'/>
    <link rel="stylesheet" id="font-awesome-cdn-css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
          type="text/css" media="all" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel='stylesheet' id='font-icomoon-css' href='{{ asset("assets/themes/merto/css/icomoon-icon.css") }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='merto-reset-css' href='{{ asset("assets/themes/merto/css/reset6f3e.css") }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='merto-style-css' href='{{ asset("assets/themes/merto/style6f3e.css") }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='merto-responsive-css'
          href='{{ asset("assets/themes/merto/css/responsive6f3e.css") }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='merto-dynamic-css-css'
          href='{{ asset("assets/uploads/mertobdf7.css") }}' type='text/css' media='all'/>

    <link rel='stylesheet' id='pbs-cart-css'
          href='{{ asset("assets/css/cart.css") }}' type='text/css' media='all'/>



    <script type="text/javascript" src="{{ asset('assets/js/jquery/jquery.minf43b.js') }}"
            id="jquery-core-js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery/jquery-migrate.min5589.js') }}"
            id="jquery-migrate-js"></script>
    <script type="text/javascript"
            src="{{ asset('assets/plugins/revslider/public/js/libs/tptools659f.js') }}" id="tp-tools-js"
            async="async" data-wp-strategy="async"></script>
    <script type="text/javascript"
            src="{{ asset('assets/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.minae83.js') }}"
            id="wc-jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
            src="{{ asset('assets/plugins/woocommerce/assets/js/js-cookie/js.cookie.minf503.js') }}"
            id="wc-js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
            src="{{ asset('assets/plugins/woocommerce/assets/js/frontend/woocommerce.minf607.js') }}"
            id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
            src="{{ asset('assets/plugins/woocommerce/assets/js/frontend/cart-fragments.minf607.js') }}"
            id="wc-cart-fragments-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
            src="{{ asset('assets/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.minb871.js') }}"
            id="wc-flexslider-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="{{ asset('assets/js/underscore.min3ab8.js') }}"
            id="underscore-js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/wp-util.min4d80.js') }}"
            id="wp-util-js"></script>
    <script type="text/javascript"
            src="{{ asset('assets/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.minf607.js') }}"
            id="wc-add-to-cart-variation-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
            src="{{ asset('assets/plugins/woocommerce/assets/js/zoom/jquery.zoom.minc932.js') }}"
            id="wc-zoom-js" defer="defer" data-wp-strategy="defer"></script>


    <meta name="generator"
          content="Powered by Slider Revolution 6.7.38 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface."/>
    <link rel="icon" href="{{ asset('assets/uploads/2026/02/cropped-PORTABOX-SOLUTION-scaled-1-32x32.png') }}"
          sizes="32x32"/>
    <link rel="icon" href="{{ asset('assets/uploads/2026/02/cropped-PORTABOX-SOLUTION-scaled-1-192x192.png') }}"
          sizes="192x192"/>
    <link rel="apple-touch-icon"
          href="{{ asset('assets/uploads/2026/02/cropped-PORTABOX-SOLUTION-scaled-1-180x180.png') }}"/>
    <meta name="msapplication-TileImage"
          content="{{ asset('assets/uploads/2026/02/cropped-PORTABOX-SOLUTION-scaled-1-270x270.png') }}"/>

          <meta name="google-site-verification" content="5S0R9M998FMcss3SDaLUDAqxhFYcroIcWZ8tsKUykqY" />

    <style>
        .fullwidth-slider {
            position: relative;
            width: 100%;
            height: 600px;
            overflow: hidden;
        }

        .simple-slider {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .slide.active {
            opacity: 1;
            z-index: 1;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .slide-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            width: 90%;
            max-width: 1200px;
            z-index: 2;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.8);
        }

        .slide.active .animated-text {
            animation: fadeInUp 1s ease-out forwards;
        }

        .slide.active .animated-text-delay {
            animation: fadeInUp 1s ease-out 0.3s forwards;
            opacity: 0;
            animation-fill-mode: forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .slide h2 {
            font-size: 72px !important;
            margin-bottom: 30px !important;
            font-weight: 800 !important;
            line-height: 1.2 !important;
            letter-spacing: 1px !important;
            color: white !important;
            text-transform: uppercase !important;
        }

        @media (max-width: 768px) {
            .slide h2 {
                font-size: 42px !important;
            }
        }

        .slide-button {
            background: #c6213b;
            color: white !important;
            padding: 18px 50px !important;
            text-decoration: none;
            border-radius: 8px;
            display: inline-block;
            font-size: 20px !important;
            font-weight: 700 !important;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            letter-spacing: 1px;
        }

        .slide-button:hover {
            background: #a01b2f;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
        }

        /* Pagination */
        .slider-pagination {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 12px;
            z-index: 10;
        }

        .slider-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            border: 2px solid white;
            background: transparent;
            cursor: pointer;
            padding: 0;
            transition: all 0.3s ease;
        }

        .slider-dot:hover {
            background: rgba(255, 255, 255, 0.5);
        }

        .slider-dot.active {
            background: white;
            transform: scale(1.2);
        }

        .slide::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        body .elementor-widget-slider_revolution {
            width: 100vw !important;
            margin-left: calc(-50vw + 50%) !important;
            position: relative !important;
            left: 0 !important;
            right: 0 !important;
        }

        #to-top a {
            width: 36px;
            height: 36px;
            position: absolute;

            right: 0;
        }

        /* .menu {
            list-style: none;
            display: flex;
            gap: 25px;
        } */

        .menu-item a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: 0.3s;
        }

        .menu-item a:hover {
            color: #e91e63;
        }

        .active-menu a {
            color: #e91e63;
            font-weight: 700;
            border-bottom: 2px solid #e91e63;
        }
    </style>

    <style>
        .chaty-channels {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .chaty-channel-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 10px;
        }

        .chaty-channel {
            position: relative;
            display: inline-block;
        }

        .chaty-channel a, .chaty-cta-button button {
            display: block;
            transition: transform 0.3s ease;
        }

        .chaty-channel a:hover, .chaty-cta-button button:hover {
            transform: scale(1.1);
        }

        .chaty-svg {
            display: block;
            width: 54px;
            height: 54px;
        }

        .chaty-svg svg {
            width: 100%;
            height: 100%;
        }

        /* Tooltip styles */
        .chaty-tooltip {
            position: relative;
        }

        .on-hover-text {
            position: absolute;
            right: 70px;
            top: 50%;
            transform: translateY(-50%);
            background: #333;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease;
            pointer-events: none;
        }

        .on-hover-text::after {
            content: '';
            position: absolute;
            right: -5px;
            top: 50%;
            transform: translateY(-50%);
            border-width: 5px 0 5px 5px;
            border-style: solid;
            border-color: transparent transparent transparent #333;
        }

        .chaty-tooltip:hover .on-hover-text {
            opacity: 1;
            visibility: visible;
        }


        .chaty-i-trigger {
            position: relative;
        }

        .chaty-cta-main {
            margin-bottom: 10px;
        }

        .chaty-cta-close {
            position: absolute;
            bottom: 0;
            right: 0;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease;
        }

        .chaty-i-trigger.active .chaty-cta-close {
            opacity: 1;
            visibility: visible;
        }

        .chaty-i-trigger.active .chaty-cta-main {
            opacity: 0;
            visibility: hidden;
        }

        /* Animation pour l'ouverture/fermeture */
        .chaty-channel-list {
            opacity: 1;
            visibility: visible;
            transition: opacity 0.3s ease;
        }

        .chaty-i-trigger.active .chaty-channel-list {
            opacity: 0;
            visibility: hidden;
        }

        /* Styles pour le bouton open-chaty-channel (caché par défaut) */
        .open-chaty-channel {
            display: none;
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
        }
    </style>
    <style>
        .is-invalid {
            border-color: #dc3545 !important;
        }
        .is-valid {
            border-color: #28a745 !important;
        }
        .text-danger {
            color: #dc3545 !important;
            font-size: 80%;
            margin-top: 0.25rem;
        }
    </style>
    <!-- JavaScript pur -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Corriger d'abord l'URL du plugin
            if (window.SR7 && window.SR7.E) {
                SR7.E.plugin_url = '{{ asset("assets/plugins/revslider/") }}';
            }

            // Attendre un peu
            setTimeout(function () {
                var sliderContainer = document.querySelector('.elementor-widget-slider_revolution');
                if (sliderContainer) {
                    var slider = sliderContainer.querySelector('sr7-module');
                    if (slider) {
                        // Cacher le slider défectueux
                        slider.style.display = 'none';

                        // Créer un slider de remplacement avec animations
                        var images = [
                            '{{ asset("assets/uploads/2026/02/WhatsApp-Image-2025-12-03-at-15.33.52.jpg") }}',
                            '{{ asset("assets/uploads/2026/02/81.jpg") }}',
                            '{{ asset("assets/uploads/2026/02/47.jpg") }}'
                        ];

                        // Construction du HTML (sans les styles)
                        var html = '<div class="fullwidth-slider"><div class="simple-slider">';

                        // Ajouter chaque slide
                        images.forEach(function (src, index) {
                            var title = index === 0 ? '{{ __("home.slider.slide1.title")}}' :
                                index === 1 ? '{{ __("home.slider.slide2.title") }}' :
                                    '{{ __("home.slider.slide3.title")}}';

                            html += `
                        <div class="slide ${index === 0 ? 'active' : ''}" data-index="${index}">
                            <img src="${src}" alt="${title.replace(/<br>/g, ' ')}">
                            <div class="slide-content">
                                <h2 class="animated-text">${title}</h2>
                                <a href="{{ route('shop') }}" class="slide-button animated-text-delay">{{ __("home.slider.button_fallback") }}</a>
                            </div>
                        </div>
                    `;
                        });

                        html += `
                        </div>
                        <div class="slider-pagination">
                            <button class="slider-dot ${0 === 0 ? 'active' : ''}" data-index="0"></button>
                            <button class="slider-dot" data-index="1"></button>
                            <button class="slider-dot" data-index="2"></button>
                        </div>
                    </div>
                `;

                        sliderContainer.innerHTML = html;

                        // Ajouter l'interactivité
                        var currentSlide = 0;
                        var slides = sliderContainer.querySelectorAll('.slide');
                        var dots = sliderContainer.querySelectorAll('.slider-dot');
                        var slideInterval;

                        function showSlide(index) {
                            slides.forEach(function (slide, i) {
                                slide.classList.toggle('active', i === index);
                            });

                            dots.forEach(function (dot, i) {
                                dot.classList.toggle('active', i === index);
                            });

                            currentSlide = index;
                        }

                        dots.forEach(function (dot) {
                            dot.addEventListener('click', function () {
                                var index = parseInt(this.getAttribute('data-index'));
                                showSlide(index);
                                clearInterval(slideInterval);
                                slideInterval = setInterval(nextSlide, 5000);
                            });
                        });

                        function nextSlide() {
                            showSlide((currentSlide + 1) % slides.length);
                        }

                        slideInterval = setInterval(nextSlide, 5000);

                        sliderContainer.addEventListener('mouseenter', function () {
                            clearInterval(slideInterval);
                        });

                        sliderContainer.addEventListener('mouseleave', function () {
                            slideInterval = setInterval(nextSlide, 5000);
                        });
                    }
                }
            }, 100);
        });
    </script>

    @stack('styles')

</head>

<body class="@yield('body_class', 'home wp-singular page-template-default page page-id-8171 wp-theme-merto theme-merto woocommerce-no-js wide header-v1 product-label-rectangle product-hover-style-v2 product-border-radius vertical-menu-fixed ts_desktop elementor-default elementor-kit-10348 elementor-page elementor-page-8171')">
<div id="page" class="hfeed site">
    @include('layouts.partials.navbar.public')

    <div id="main" class="wrapper">
        @yield('content')
    </div>

    @include('layouts.partials.footer.public')
</div>

{{-- Panier : configuration + tiroir latéral --}}
<div id="pbs-cart-root"
     data-cart-url="{{ route('cart') }}"
     data-checkout-url="{{ route('checkout') }}"
     data-currency="€"
     data-empty-text="{{ __('Votre panier est vide.') }}"
     data-added-text="{{ __('Produit ajouté au panier') }}"></div>

<div id="pbs-drawer-overlay" class="pbs-drawer-overlay"></div>
<aside id="pbs-drawer" class="pbs-drawer" aria-label="{{ __('Panier') }}">
    <div class="pbs-drawer-header">
        <h3><i class="fas fa-shopping-cart"></i> {{ __('Mon panier') }}</h3>
        <button type="button" class="pbs-drawer-close" data-cart-close aria-label="{{ __('Fermer') }}"><i class="fas fa-times"></i></button>
    </div>
    <div class="pbs-drawer-body">
        <div id="pbs-drawer-items"></div>
    </div>
    <div class="pbs-drawer-footer" id="pbs-drawer-footer" style="display:none;">
        <div class="pbs-drawer-total-row">
            <span>{{ __('Sous-total') }}</span>
            <strong id="pbs-drawer-total">0,00 €</strong>
        </div>
        <a href="{{ route('cart') }}" class="pbs-btn pbs-btn-primary">{{ __('Voir le panier') }}</a>
        <a href="{{ route('checkout') }}" class="pbs-btn pbs-btn-outline">{{ __('Commander') }}</a>
    </div>
</aside>

<link href="{{ asset('assets/plugins/revslider/public/css/fonts/revicons/css/revicons.css') }}" rel="stylesheet"
      property="stylesheet" media="all" type="text/css"/>


<link rel='stylesheet' id='wc-blocks-style-css'
      href='{{ asset("assets/plugins/woocommerce/assets/client/blocks/wc-blocks5210.css") }}'
      type='text/css' media='all'/>
<link rel='stylesheet' id='elementor-post-9597-css'
      href='{{ asset("assets/uploads/elementor/css/post-9597c8c9.css") }}' type='text/css'
      media='all'/>
<link rel='stylesheet' id='widget-spacer-css'
      href='{{ asset("assets/plugins/elementor/assets/css/widget-spacer.min1504.css") }}' type='text/css'
      media='all'/>
<link rel='stylesheet' id='widget-icon-box-css'
      href='{{ asset("assets/uploads/elementor/css/custom-widget-icon-box.minaec1.css") }}'
      type='text/css' media='all'/>
<link rel='stylesheet' id='widget-image-css'
      href='{{ asset("assets/plugins/elementor/assets/css/widget-image.min1504.css") }}' type='text/css'
      media='all'/>
<link rel='stylesheet' id='e-swiper-css'
      href='{{ asset("assets/plugins/elementor/assets/css/conditionals/e-swiper.min1504.css") }}'
      type='text/css' media='all'/>

{{--<script type="text/javascript"
        src="{{ asset('assets/plugins/chaty-pro/js/cht-front-script.minb5e3.js') }}"
        id="chaty-js" defer="defer" data-wp-strategy="defer"></script>--}}
<script type="text/javascript" src="{{ asset('assets/js/dist/hooks.minaf5f.js') }}"
        id="wp-hooks-js"></script>
<script type="text/javascript" src="{{ asset('assets/js/dist/i18n.min1cde.js') }}"
        id="wp-i18n-js"></script>

<script type="text/javascript"
        src="{{ asset('assets/plugins/contato-form-7/includes/js/index1b46.html') }}"
        id="contato-form-7-js"></script>

<script type="text/javascript" src="{{ asset('assets/plugins/themesky/js/themeskyc358.html') }}"
        id="ts-script-js"></script>
<script type="text/javascript"
        src="{{ asset('assets/plugins/elementor/assets/lib/swiper/v8/swiper.min94a4.html') }}"
        id="swiper-js"></script>
<script type="text/javascript"
        src="{{ asset('assets/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.minf607.html') }}"
        id="sourcebuster-js-js"></script>

<script type="text/javascript"
        src="{{ asset('assets/plugins/woocommerce/assets/js/frontend/order-attribution.minf607.html') }}"
        id="wc-order-attribution-js"></script>
<script type="text/javascript"
        src="{{ asset('assets/plugins/elementor/assets/js/webpack.runtime.min1504.html') }}"
        id="elementor-webpack-runtime-js"></script>
<script type="text/javascript"
        src="{{ asset('assets/plugins/elementor/assets/js/frontend-modules.min1504.html') }}"
        id="elementor-frontend-modules-js"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery/ui/core.minb37e.html') }}"
        id="jquery-ui-core-js"></script>

<script type="text/javascript"
        src="{{ asset('assets/plugins/elementor/assets/js/frontend.min1504.html') }}"
        id="elementor-frontend-js"></script>

<script type="text/javascript" src="{{ asset('assets/themes/merto/js/main6f3e.js') }}"
        id="merto-script-js"></script>
<script type="text/javascript" src="{{ asset('assets/themes/merto/js/jquery.sticky6f3e.js') }}"
        id="jquery-sticky-js"></script>

<script type="text/javascript"
        src="{{ asset('assets/plugins/google-listings-and-ads/js/build/gtag-events6841.html') }}"
        id="gla-gtag-events-js"></script>



@stack('scripts')

<div id="ts-quickshop-modal" class="ts-popup-modal">
    <div class="overlay"></div>
    <div class="quickshop-container popup-container">
        <span class="close"></span>
        <div class="quickshop-content"></div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('assets/js/cart.js') }}" id="pbs-cart-js"></script>
</body>


</html>
