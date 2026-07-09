@extends('layouts.app')

@section('title', $article->name)

@push('styles')
    <style>
        /* Product Inquiry Form Styles */
        .product-inquiry-section {
            margin-top: 60px;
            padding: 40px 0;
            background-color: #f9f9f9;
            border-radius: 8px;
        }

        .inquiry-form-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .inquiry-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: 600;
            color: #333;
        }

        .inquiry-form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px 20px;
        }

        .form-group {

            width: 100%;
        }

        .form-group.full-width {
            flex: 0 0 100%;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 15px;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #007bff;
        }

        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }

        .inquiry-submit-btn {
            display: inline-block;
            padding: 14px 35px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
            width: 100%;
        }

        .inquiry-submit-btn:hover {
            background: #0056b3;
        }

        .inquiry-submit-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
        }

        .alert {
            padding: 15px 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            display: none;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* Hide add to cart buttons */
        .cart,
        .single_add_to_cart_button,
        .ts-buy-now-button,
        .loop-add-to-cart,
        .add_to_cart_button,
        .ajax_add_to_cart {
            display: none !important;
        }

        /* Remove quantity selector if needed */
        .quantity {
            display: none !important;
        }

        /* Style product info */
        .summary .price {
            font-size: 24px;
            font-weight: 600;
            color: #007bff;
            margin: 20px 0;
        }

        .summary .price del {
            color: #999;
            font-size: 18px;
            margin-right: 10px;
        }

        .product_meta {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        /* Loading spinner */
        .spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, .3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
            margin-right: 10px;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        /* Image Modal Styles */
        /* Image Modal Styles */
        .image-modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.95);
            align-items: center;
            justify-content: center;
            overflow: hidden;
            /* Empêche tout scroll dans le modal */
        }

        .modal-content {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            /* Empêche tout scroll dans le contenu */
        }

        .modal-close {
            position: fixed;
            top: 20px;
            right: 20px;
            color: #fff;
            font-size: 44px;
            font-weight: bold;
            cursor: pointer;
            z-index: 10001;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 50%;
            line-height: 1;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s;
        }

        .modal-close:hover {
            background-color: rgba(255, 255, 255, 0.3);
            color: #fff;
        }

        /* Version mobile */
        @media (max-width: 768px) {
            .modal-close {
                top: 15px;
                right: 15px;
                font-size: 36px;
                width: 42px;
                height: 42px;
            }
        }

        @media (max-width: 480px) {
            .modal-close {
                top: 10px;
                right: 10px;
                font-size: 32px;
                width: 38px;
                height: 38px;
            }
        }

        .modal-body {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 70px 40px 60px 40px;
            /* haut droite bas gauche */
            overflow: hidden;
            /* Empêche tout scroll */
            box-sizing: border-box;
            /* Inclut le padding dans la largeur/hauteur */
        }

        /* Ajustements pour mobile */
        @media (max-width: 768px) {
            .modal-body {
                padding: 70px 35px 60px 35px;
            }
        }

        @media (max-width: 480px) {
            .modal-body {
                padding: 75px 30px 65px 30px;
            }
        }

        @media (max-width: 360px) {
            .modal-body {
                padding: 80px 25px 70px 25px;
            }
        }

        #modal-image {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            cursor: pointer;
        }

        .modal-navigation {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            padding: 0;
            pointer-events: none;
            z-index: 10000;
            width: 100%;
            /* S'assure que la navigation prend toute la largeur */
            box-sizing: border-box;
        }

        .modal-prev,
        .modal-next {
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
            font-size: 30px;
            padding: 0;
            cursor: pointer;
            border-radius: 50%;
            transition: all 0.3s;
            pointer-events: auto;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            flex-shrink: 0;
            /* Empêche les boutons de rétrécir */
            margin: 0;
            /* Supprime toutes les marges */
        }

        /* Positionnement des boutons dans les limites de l'écran */
        .modal-prev {
            margin-left: 20px;
            /* Marge à l'intérieur du conteneur */
        }

        .modal-next {
            margin-right: 20px;
            /* Marge à l'intérieur du conteneur */
        }

        /* Version mobile - avec marges réduites mais toujours dans l'écran */
        @media (max-width: 768px) {
            .modal-prev {
                margin-left: 15px;
            }

            .modal-next {
                margin-right: 15px;
            }

            .modal-prev,
            .modal-next {
                width: 42px;
                height: 42px;
                font-size: 24px;
            }
        }

        @media (max-width: 480px) {
            .modal-prev {
                margin-left: 10px;
            }

            .modal-next {
                margin-right: 10px;
            }

            .modal-prev,
            .modal-next {
                width: 38px;
                height: 38px;
                font-size: 22px;
            }
        }

        @media (max-width: 360px) {
            .modal-prev {
                margin-left: 8px;
            }

            .modal-next {
                margin-right: 8px;
            }

            .modal-prev,
            .modal-next {
                width: 34px;
                height: 34px;
                font-size: 20px;
                border-width: 1.5px;
            }
        }

        .modal-prev:hover,
        .modal-next:hover {
            background-color: rgba(255, 255, 255, 0.4);
            border-color: rgba(255, 255, 255, 0.8);
        }

        .modal-counter {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 16px;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 8px 20px;
            border-radius: 30px;
            z-index: 10001;
            border: 1px solid rgba(255, 255, 255, 0.3);
            font-weight: 500;
            letter-spacing: 0.5px;
            white-space: nowrap;
            max-width: 90%;
            /* Empêche le compteur de dépasser */
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Version mobile */
        @media (max-width: 768px) {
            .modal-counter {
                bottom: 15px;
                padding: 6px 16px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .modal-counter {
                bottom: 10px;
                padding: 5px 12px;
                font-size: 12px;
            }
        }

        @media (max-width: 360px) {
            .modal-counter {
                bottom: 8px;
                padding: 4px 10px;
                font-size: 11px;
            }
        }

        /* Ensure main images are clickable */
        .woocommerce-product-gallery__image img {
            cursor: pointer;
        }
    </style>

    {{-- Styles pour le formulaire urgent --}}
    <style>
        /* Styles spécifiques pour le formulaire urgent */
        .inquiry-form-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
        }

        /* Flash badge */
        .flash-badge {
            background: linear-gradient(135deg, #ff4d4d, #ff0000);
            color: white;
            padding: 12px 25px;
            border-radius: 50px;
            display: inline-block;
            margin-bottom: 20px;
            font-weight: 700;
            font-size: 1.2rem;
            box-shadow: 0 5px 20px rgba(255, 0, 0, 0.3);
            animation: pulse 2s infinite;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .flash-icon {
            margin-right: 10px;
            font-size: 1.5rem;
        }

        /* Live counter */
        .live-counter {
            background: #fff3cd;
            border: 2px solid #ffc107;
            border-radius: 50px;
            padding: 12px 20px;
            margin-bottom: 30px;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-weight: 600;
            color: #856404;
        }

        .pulse-dot {
            width: 12px;
            height: 12px;
            background-color: #ff0000;
            border-radius: 50%;
            display: inline-block;
            animation: pulse-dot 1.5s infinite;
        }

        @keyframes pulse-dot {
            0% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.5;
                transform: scale(1.2);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Titres */
        .inquiry-title {
            text-align: center;
            margin-bottom: 10px;
            font-size: 32px;
            font-weight: 800;
            color: #333;
            text-transform: uppercase;
            letter-spacing: -0.5px;
        }

        .inquiry-subtitle {
            text-align: center;
            margin-bottom: 30px;
            font-size: 18px;
            color: #666;
            font-weight: 400;
        }

        /* Bandeaux de livraison */
        .delivery-banners {
            margin-bottom: 30px;
        }

        .delivery-banner.urgent {
            background: linear-gradient(135deg, #ff6b6b, #ff4757);
            color: white;
            padding: 20px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
            box-shadow: 0 10px 30px rgba(255, 71, 87, 0.3);
        }

        .delivery-banner .banner-icon {
            font-size: 3rem;
            background: rgba(255, 255, 255, 0.2);
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .delivery-banner .banner-title {
            display: block;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .delivery-banner .banner-subtitle {
            display: block;
            font-size: 1.1rem;
            opacity: 0.95;
        }

        .delivery-features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            background: #f8f9fa;
            padding: 15px;
            border-radius: 12px;
            border: 1px solid #e9ecef;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 10px;
            justify-content: center;
        }

        .feature-icon {
            font-size: 1.5rem;
        }

        .feature-text {
            font-size: 0.9rem;
            font-weight: 500;
            color: #495057;
        }

        /* Formulaire avec bordures rouges */
        .urgent-form {
            background: #fff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(255, 0, 0, 0.15);
            border: 2px solid #ff4444;
            position: relative;
        }

        .urgent-form::before {
            content: " LIVRAISON EXPRESS ";
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: #ff4444;
            color: white;
            padding: 5px 25px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.9rem;
            letter-spacing: 2px;
            white-space: nowrap;
            box-shadow: 0 5px 15px rgba(255, 68, 68, 0.4);
        }

        .form-section-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 3px solid #ff4444;
            text-transform: uppercase;
        }

        /* Champs de formulaire avec bordures rouges */
        .urgent-form .form-group input,
        .urgent-form .form-group textarea {
            border: 2px solid #ffcccc;
            transition: all 0.3s;
            background-color: #fff;
        }

        .urgent-form .form-group input:focus,
        .urgent-form .form-group textarea:focus {
            border-color: #ff4444;
            box-shadow: 0 0 0 4px rgba(255, 68, 68, 0.1);
            outline: none;
        }

        .urgent-form .form-group label {
            font-weight: 700;
            color: #333;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .urgent-form .required {
            color: #ff4444;
            font-size: 1.2rem;
            margin-left: 3px;
        }

        /* Contrôles de quantité urgents */
        .urgent-quantity {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .urgent-btn {
            background: #ff4444 !important;
            color: white !important;
            border: none !important;
            width: 44px;
            height: 44px;
            font-size: 20px;
            border-radius: 8px !important;
            transition: all 0.3s;
        }

        .urgent-btn:hover {
            background: #cc0000 !important;
            transform: scale(1.05);
        }

        .urgent-btn:disabled {
            background: #ffaaaa !important;
        }

        .urgent-input {
            border: 2px solid #ff4444 !important;
            border-radius: 8px !important;
            font-weight: 700;
            text-align: center;
        }

        /* Trust badges */
        .trust-badges {
            display: flex;
            justify-content: space-between;
            margin: 25px 0;
            padding: 15px;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 12px;
        }

        .trust-badge {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .badge-icon {
            font-size: 1.3rem;
        }

        .badge-text {
            font-size: 0.9rem;
            font-weight: 600;
            color: #495057;
        }

        /* Bouton de soumission urgent */
        .urgent-submit {
            background: linear-gradient(135deg, #ff4444, #cc0000) !important;
            border: none !important;
            padding: 18px !important;
            font-size: 1.3rem !important;
            font-weight: 800 !important;
            text-transform: uppercase !important;
            letter-spacing: 1px !important;
            border-radius: 12px !important;
            box-shadow: 0 10px 25px rgba(255, 68, 68, 0.4) !important;
            transition: all 0.3s !important;
        }

        .urgent-submit:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 15px 35px rgba(255, 68, 68, 0.6) !important;
        }

        .urgent-submit:active {
            transform: translateY(0);
        }

        .form-footnote {
            text-align: center;
            margin-top: 15px;
            font-size: 0.85rem;
            color: #666;
            font-style: italic;
        }

        /* Animations */
        @keyframes pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 5px 20px rgba(255, 0, 0, 0.3);
            }

            50% {
                transform: scale(1.02);
                box-shadow: 0 10px 30px rgba(255, 0, 0, 0.5);
            }

            100% {
                transform: scale(1);
                box-shadow: 0 5px 20px rgba(255, 0, 0, 0.3);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .delivery-features {
                grid-template-columns: 1fr;
                gap: 10px;
            }

            .feature-item {
                justify-content: flex-start;
            }

            .trust-badges {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }

            .urgent-form::before {
                font-size: 0.7rem;
                padding: 5px 15px;
                white-space: normal;
                width: 90%;
                text-align: center;
            }

            .flash-badge {
                font-size: 1rem;
                padding: 10px 20px;
            }
        }

        @media (max-width: 480px) {
            .delivery-banner.urgent {
                flex-direction: column;
                text-align: center;
            }

            .inquiry-title {
                font-size: 24px;
            }

            .inquiry-subtitle {
                font-size: 16px;
            }
        }
    </style>

    <style>
        /* Style pour les sélecteurs */
        .country-select,
        .region-select,
        .region-manual {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #e2e8f0;
            border-radius: 5px;
            font-size: 14px;
            background-color: white;
        }

        .region-manual {
            border: 1px solid #dc2626;
            background-color: #fff8f8;
        }

        .country-select:focus,
        .region-select:focus,
        .phone-number:focus,
        .region-manual:focus {
            outline: none;
            border-color: #dc2626;
            box-shadow: 0 0 0 2px rgba(220, 38, 38, 0.1);
        }

        .region-select:disabled {
            background-color: #f3f4f6;
            cursor: not-allowed;
        }

        /* Style pour les options requises */
        .required {
            color: #dc2626;
            margin-left: 3px;
        }

        /* Loader */
        .loading-spinner {
            display: inline-block;
            width: 16px;
            height: 16px;
            border: 2px solid #f3f3f3;
            border-top: 2px solid #dc2626;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-left: 10px;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Nouveaux styles pour la mise en page */
        .location-row {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .location-group {
            flex: 1;
            min-width: 0;
            /* Évite le débordement */
        }

        .region-container {
            position: relative;
            width: 100%;
        }

        .region-info {
            display: block;
            margin-top: 5px;
            font-size: 12px;
            color: #666;
            font-style: italic;
        }

        /* Media query pour mobile */
        @media (max-width: 768px) {
            .location-row {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
@endpush

@section('body_class',
    'wp-singular product-template-default single single-product postid-11363 wp-theme-merto
    theme-merto woocommerce woocommerce-page woocommerce-js wide header-v1 product-label-rectangle product-hover-style-v2
    product-border-radius vertical-menu-fixed ts_desktop elementor-default elementor-kit-10348 e--ua-blink e--ua-chrome
    e--ua-webkit cht-in-desktop cht-landscape')

@section('content')
    <div id="main" class="wrapper">
        <div class="breadcrumb-title-wrapper breadcrumb-v3 no-title">
            <div class="container">
                <div class="breadcrumb-title">
                    <div class="ts-breadcrumbs breadcrumbs">
                        <div class="breadcrumbs-container">
                            <a href="{{ url('/') }}">{{ __('product.breadcrumb.home') }}</a>
                            <span class="brn_arrow">/</span>
                            <a href="{{ route('category.show', $article->category->slug ?? '#') }}">
                                {{ $article->category->name ?? __('product.breadcrumb.category') }}
                            </a>
                            <span class="brn_arrow">/</span>
                            {{ $article->name }}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="page-container show_breadcrumb_v3 no-sidebar">
            <div id="main-content">
                <div id="primary" class="site-content">
                    <div class="woocommerce-notices-wrapper"></div>

                    <div id="product-{{ $article->id }}"
                        class="gallery-layout-vertical has-gallery color-variation-thumbnail product type-product">

                        {{-- Product Gallery --}}
                        <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                            data-columns="4">
                            <div class="woocommerce-product-gallery__wrapper" style="max-height: 900px;">
                                @if ($article->images->count() > 0)
                                    @foreach ($article->images as $index => $image)
                                        <div data-thumb="{{ asset($image->image_path) }}"
                                            data-thumb-alt="{{ $article->name }}"
                                            class="testpourgrand {{ $index == 0 ? 'flex-active-slide' : '' }}"
                                            style="{{ $index == 0 ? 'display: block;' : 'display: none;' }}">
                                            <a href="{{ asset($image->image_path) }}">
                                                <img fetchpriority="high" width="700" height="586"
                                                    src="{{ asset($image->image_path) }}" class="wp-post-image"
                                                    alt="{{ $article->name }}" data-caption=""
                                                    data-src="{{ asset($image->image_path) }}"
                                                    data-large_image="{{ asset($image->image_path) }}"
                                                    data-large_image_width="1643" data-large_image_height="1375"
                                                    decoding="async">
                                            </a>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="testpourgrand flex-active-slide">
                                        <a href="#">
                                            <img src="https://via.placeholder.com/700x586" alt="Placeholder">
                                        </a>
                                    </div>
                                @endif

                                @if ($article->old_price && $article->old_price > $article->price)
                                    @php
                                        $discount = round(
                                            (($article->old_price - $article->price) / $article->old_price) * 100,
                                        );
                                    @endphp
                                    <div class="product-label">
                                        <span class="onsale percent"><span>-{{ $discount }}%</span></span>
                                    </div>
                                @endif
                            </div>

                            {{-- Gallery Thumbnails --}}
                            @if ($article->images->count() > 1)
                                <ol class="flex-control-nav flex-control-thumbs"
                                    style="max-height: 900px;overflow: auto; display: block;}">
                                    @foreach ($article->images as $index => $image)
                                        <li>
                                            <img src="{{ asset($image->image_path) }}"
                                                alt="{{ $article->name }} {{ $index + 1 }}"
                                                class="{{ $index == 0 ? 'flex-active' : '' }}" draggable="false"
                                                width="300" height="300">
                                        </li>
                                    @endforeach
                                </ol>
                            @endif
                        </div>

                        {{-- Product Summary --}}
                        <div class="summary entry-summary">
                            <h1 class="product_title entry-title">{{ $article->name }}</h1>

                            @if ($article->short_description)
                                <div class="woocommerce-product-details__short-description">
                                    <p>{{ $article->short_description }}</p>
                                </div>
                            @endif

                            <p class="price">
                                @if ($article->old_price && $article->old_price > $article->price)
                                    <del aria-hidden="true">
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>{{ number_format($article->old_price, 2) }}&nbsp;<span
                                                    class="woocommerce-Price-currencySymbol">€</span></bdi>
                                        </span>
                                    </del>
                                    <span
                                        class="screen-reader-text">{{ __('product.price.original', ['price' => number_format($article->old_price, 2)]) }}</span>
                                    <ins aria-hidden="true">
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>{{ number_format($article->price, 2) }}&nbsp;<span
                                                    class="woocommerce-Price-currencySymbol">€</span></bdi>
                                        </span>
                                    </ins>
                                    <span
                                        class="screen-reader-text">{{ __('product.price.current', ['price' => number_format($article->price, 2)]) }}</span>
                                @else
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi>{{ number_format($article->price, 2) }}&nbsp;<span
                                                class="woocommerce-Price-currencySymbol">€</span></bdi>
                                    </span>
                                @endif
                                <small class="woocommerce-price-suffix">{{ __('product.price.suffix') }}</small>
                            </p>

                            @if ($article->old_price && $article->old_price > $article->price)
                                <span class="ts-discount-number">
                                    ({{ __('product.price.save') }} <span class="number">
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>{{ number_format($article->old_price - $article->price, 2) }}&nbsp;<span
                                                    class="woocommerce-Price-currencySymbol">€</span></bdi>
                                        </span>
                                    </span>)
                                </span>
                            @endif

                            <div class="availability stock in-stock" data-original="In stock" data-class="in-stock">
                                <span class="availability-text">
                                    @if ($article->stock > 0)
                                        {{ __('product.stock.in_stock', ['stock' => $article->stock]) }}
                                    @else
                                        {{ __('product.stock.on_request') }}
                                    @endif
                                </span>
                            </div>

                            {{-- Ajouter au panier (panier localStorage) --}}
                            @php
                                $mainImg = $article->images->where('is_primary', true)->first() ?? $article->images->first();
                                $mainImgUrl = $mainImg ? asset($mainImg->image_path) : 'https://via.placeholder.com/300x300?text=No+Image';
                            @endphp
                            <div class="pbs-product-add">
                                <div class="pbs-product-qty">
                                    <button type="button" class="pbs-qty-btn" onclick="pbsAdjustQty(-1)"><i class="fas fa-minus"></i></button>
                                    <input type="number" id="pbs-product-qty-input" value="1" min="1" class="pbs-qty-input">
                                    <button type="button" class="pbs-qty-btn" onclick="pbsAdjustQty(1)"><i class="fas fa-plus"></i></button>
                                </div>
                        @include('front.partials.cart-button', ['item' => $article])

                            </div>

                            <style>
                                .pbs-product-add {
                                    display: flex;
                                    align-items: stretch;
                                    gap: 14px;
                                    margin: 24px 0;
                                    flex-wrap: wrap;
                                }
                                .pbs-product-qty {
                                    display: inline-flex;
                                    align-items: center;
                                    border: 2px solid #e2e8f0;
                                    border-radius: 10px;
                                    overflow: hidden;
                                }
                                .pbs-product-qty .pbs-qty-btn {
                                    width: 46px;
                                    height: 100%;
                                    min-height: 52px;
                                    border: none;
                                    background: #f8fafc;
                                    cursor: pointer;
                                    font-size: 20px;
                                    color: #333;
                                    transition: background 0.2s;
                                }
                                .pbs-product-qty .pbs-qty-btn:hover {
                                    background: #c6213b;
                                    color: #fff;
                                }
                                .pbs-qty-input {
                                    width: 64px;
                                    height: 52px;
                                    border: none;
                                    text-align: center;
                                    font-size: 16px;
                                    font-weight: 700;
                                    -moz-appearance: textfield;
                                }
                                .pbs-qty-input::-webkit-outer-spin-button,
                                .pbs-qty-input::-webkit-inner-spin-button {
                                    -webkit-appearance: none;
                                    margin: 0;
                                }
                            </style>
                            <script>
                                function pbsAdjustQty(delta) {
                                    var input = document.getElementById('pbs-product-qty-input');
                                    var val = (parseInt(input.value, 10) || 1) + delta;
                                    if (val < 1) val = 1;
                                    input.value = val;
                                }
                            </script>

                            {{-- Add to cart form (hidden) --}}
                            <form class="cart" style="display: none;" method="post">
                                <div class="quantity">
                                    <div class="number-button">
                                        <input type="button" value="-" class="minus">
                                        <label
                                            class="screen-reader-text">{{ __('product.quantity.screen_reader') }}</label>
                                        <input type="number" class="input-text qty text" name="quantity" value="1"
                                            min="1" step="1">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                </div>
                                <button type="submit"
                                    class="single_add_to_cart_button button alt">{{ __('product.add_to_cart') }}</button>
                                <a href="#" class="button ts-buy-now-button">{{ __('product.buy_now') }}</a>
                            </form>

                            <div class="meta-content">
                                @if ($article->sku)
                                    <div class="sku-wrapper product_meta">
                                        <span>{{ __('product.meta.sku') }} </span>
                                        <span class="sku">{{ $article->sku }}</span>
                                    </div>
                                @endif

                                @if ($article->category)
                                    <div class="cats-link">
                                        <span>{{ __('product.meta.categories') }} </span>
                                        <span class="cat-links">
                                            <a href="{{ route('category.show', $article->category->slug) }}"
                                                rel="tag">
                                                {{ $article->category->name }}
                                            </a>
                                        </span>
                                    </div>
                                @endif
                            </div>
                        </div>

                        {{-- Product Description --}}
                        @if ($article->description)
                            <div class="woocommerce-tabs wc-tabs-wrapper">
                                <div class="woocommerce-Tabs-panel panel entry-content wc-tab" id="tab-description">
                                    <h2>{{ __('product.description.title') }}</h2>
                                    <div class="product-description">
                                        {!! nl2br(e($article->description)) !!}
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Product Inquiry Form avec bordures rouges et messages excitants --}}
                        <!-- <div class="product-inquiry-section">
                            <div class="inquiry-form-container">

                                {{-- Titre du formulaire avec emphase --}}
                                <h2 class="inquiry-title">{{ __('Prêt à finaliser votre commande ?') }}</h2>
                                <p class="inquiry-subtitle">
                                    {{ __('Remplissez le formulaire ci-dessous pour recevoir votre devis personnalisé') }}
                                </p>

                                {{-- Alertes de succès/erreur --}}
                                <div id="inquiry-alert-success" class="alert alert-success">
                                    {{ __('product.inquiry.success') }}</div>
                                <div id="inquiry-alert-error" class="alert alert-error">{{ __('product.inquiry.error') }}
                                </div>

                                {{-- Bandeau promo livraison gratuite --}}
                                <div class="delivery-banners">
                                    <div class="delivery-banner urgent">
                                        <div class="banner-icon"></div>
                                        <div class="banner-content">
                                            <span class="banner-title">{{ __('Livraison gratuite') }}</span>
                                            <span
                                                class="banner-subtitle">{{ __('Profiter de l\'offre dès maintenant') }}</span>
                                        </div>
                                    </div>

                                    <div class="delivery-features">
                                        <div class="feature-item">
                                            <span class="feature-icon">✈️</span>
                                            <span class="feature-text">{{ __('Expédition rapide') }}</span>
                                        </div>
                                        <div class="feature-item">
                                            <span class="feature-icon">🏠</span>
                                            <span class="feature-text">{{ __('Livraison à domicile') }}</span>
                                        </div>
                                        <div class="feature-item">
                                            <span class="feature-icon"></span>
                                            <span class="feature-text">{{ __('Suivi en temps réel') }}</span>
                                        </div>
                                    </div>
                                </div>

                                {{-- Formulaire avec bordures rouges --}}
                                <form id="product-inquiry-form"
                                    action="{{ route('product.inquiry', ['id' => $article->id]) }}"
                                    class="inquiry-form urgent-form" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $article->id }}">

                                    <div class="form-section-title">{{ __('Vos coordonnées') }}</div>

                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="name">{{ __('Nom complet') }} <span
                                                    class="required">*</span></label>
                                            <input type="text" id="name" name="name" required
                                                placeholder="{{ __('Votre nom') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="email">{{ __('Email') }} <span
                                                    class="required">*</span></label>
                                            <input type="email" id="email" name="email" required
                                                placeholder="{{ __('votre@email.com') }}">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        {{-- Champ Téléphone simple sans intlTelInput --}}
                                        <div class="form-group">
                                            <label for="phone">{{ __('Téléphone') }} (WhatsApp <i
                                                    class='fab fa-whatsapp'></i>) <span class="required">*</span></label>
                                            <div class="phone-input-container">
                                                <input type="tel" id="phone" name="phone" class="phone-number"
                                                    placeholder="{{ __('Votre numéro avec indicatif (ex: +33612345678)') }}"
                                                    required>
                                                <small
                                                    class="form-text text-muted">{{ __('Format: +33612345678') }}</small>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="quantity">{{ __('Quantité') }} <span
                                                    class="required">*</span></label>
                                            <div class="quantity-controls urgent-quantity">
                                                <button type="button" class="quantity-btn quantity-minus urgent-btn"
                                                    onclick="decrementQuantity()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <input type="number" id="quantity" name="quantity" min="1"
                                                    max="{{ $article->stock }}" value="1" placeholder="1"
                                                    oninput="validateQuantity(this)" onkeydown="return false"
                                                    data-stock="{{ $article->stock }}"
                                                    class="quantity-input urgent-input">

                                                <button type="button" class="quantity-btn quantity-plus urgent-btn"
                                                    onclick="incrementQuantity()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <small id="quantityError" class="text-danger" style="display: none;"></small>
                                            <small id="maxStockMessage" class="text-warning"
                                                style="display: none;"></small>
                                        </div>
                                    </div>

                                    {{-- Pays et Région sur la même ligne --}}
                                    <div class="form-row location-row">
                                        <div class="form-group location-group">
                                            <label for="country">{{ __('Pays') }} <span
                                                    class="required">*</span></label>
                                            <select id="country" name="country" class="country-select" required>
                                                <option value="">{{ __('Sélectionnez un pays') }}</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country['name'] }}">{{ $country['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group location-group">
                                            <label for="region">{{ __('Région') }} <span
                                                    class="required">*</span></label>
                                            <div class="region-container">
                                                <select id="region" name="region" class="region-select" required
                                                    disabled>
                                                    <option value="">{{ __('Sélectionnez d\'abord un pays') }}
                                                    </option>
                                                </select>
                                                <input type="text" id="region_manual" name="region_manual"
                                                    class="region-manual" placeholder="{{ __('Entrez votre région') }}"
                                                    style="display: none;">
                                                <small class="region-info" style="display: none; color: #666;">
                                                    {{ __('Saisie manuelle activée') }}
                                                </small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group full-width">
                                            <label for="message">{{ __('Message') }} <span
                                                    class="required">*</span></label>
                                            <textarea id="message" name="message" required placeholder="{{ __('Votre message') }}"></textarea>
                                        </div>
                                    </div>

                                    {{-- Badges de confiance --}}
                                    <div class="trust-badges">
                                        <div class="trust-badge">
                                            <span class="badge-icon"></span>
                                            <span class="badge-text">{{ __('Paiement 100% sécurisé') }}</span>
                                        </div>
                                        <div class="trust-badge">
                                            <span class="badge-icon"></span>
                                            <span class="badge-text">{{ __('Assistance téléphonique') }}</span>
                                        </div>
                                        <div class="trust-badge">
                                            <span class="badge-icon">⭐</span>
                                            <span class="badge-text">{{ __('4.8/5 - 1500+ avis') }}</span>
                                        </div>
                                    </div>

                                    {{-- Bouton d'envoi --}}
                                    <div class="form-row">
                                        <div class="form-group full-width">
                                            <button type="submit" id="inquiry-submit"
                                                class="inquiry-submit-btn urgent-submit">
                                                <span class="btn-text">{{ __('Demander un devis maintenant') }}</span>
                                                <span class="spinner" style="display: none;"></span>
                                            </button>
                                            <p class="form-footnote">
                                                {{ __('En cliquant sur ce bouton, vous acceptez d\'être contatoé par nos conseillers') }}
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> -->



                        {{-- Related Products --}}
                        @if ($relatedArticles->count() > 0)
                            <section class="related products">
                                <h2>{{ __('product.related.title') }}</h2>
                                <div class="products swiper swiper-theme-4554-0">
                                    <div class="swiper-wrapper">
                                        @foreach ($relatedArticles as $related)
                                            <section class="product type-product swiper-slide"
                                                data-product_id="{{ $related->id }}">
                                                <div class="product-wrapper">
                                                    <div class="thumbnail-wrapper">
                                                        <a href="{{ route('product.show', $related->slug) }}">
                                                            <figure class="no-back-image">
                                                                @if ($related->images->where('is_primary', true)->first())
                                                                    <img loading="lazy" width="300" height="300"
                                                                        src="{{ asset($related->images->where('is_primary', true)->first()->image_path) }}"
                                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                        alt="{{ $related->name }}" decoding="async">
                                                                @elseif($related->images->first())
                                                                    <img loading="lazy" width="300" height="300"
                                                                        src="{{ asset($related->images->first()->image_path) }}"
                                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                        alt="{{ $related->name }}" decoding="async">
                                                                @else
                                                                    <img loading="lazy" width="300" height="300"
                                                                        src="https://via.placeholder.com/300x300"
                                                                        alt="Placeholder">
                                                                @endif
                                                            </figure>
                                                        </a>

                                                        @if ($related->old_price && $related->old_price > $related->price)
                                                            @php
                                                                $discount = round(
                                                                    (($related->old_price - $related->price) /
                                                                        $related->old_price) *
                                                                        100,
                                                                );
                                                            @endphp
                                                            <div class="product-label">
                                                                <span
                                                                    class="onsale percent"><span>-{{ $discount }}%</span></span>
                                                            </div>
                                                        @endif
                                                    </div>

                                                    <div class="meta-wrapper">
                                                        <h3 class="heading-title product-name">
                                                            <a href="{{ route('product.show', $related->slug) }}">
                                                                {{ $related->name }}
                                                            </a>
                                                        </h3>

                                                        <span class="price">
                                                            @if ($related->old_price && $related->old_price > $related->price)
                                                                <del aria-hidden="true">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <bdi>{{ number_format($related->old_price, 2) }}&nbsp;€</bdi>
                                                                    </span>
                                                                </del>
                                                                <ins aria-hidden="true">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <bdi>{{ number_format($related->price, 2) }}&nbsp;€</bdi>
                                                                    </span>
                                                                </ins>
                                                            @else
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <bdi>{{ number_format($related->price, 2) }}&nbsp;€</bdi>
                                                                </span>
                                                            @endif
                                                            <small
                                                                class="woocommerce-price-suffix">{{ __('product.price.suffix') }}</small>
                                                        </span>

                                                        @include('front.partials.cart-button', ['item' => $related])
                                                    </div>
                                                </div>
                                            </section>
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@php
    // Vérification de l'ID du produit
    $productId = $article->id ?? 0;
    $inquiryUrl = route('product.inquiry', ['id' => $article->id]);
@endphp


@push('scripts')
    <!-- Scripts tiers -->
    <script src="{{ asset('assets/js/sweetalert2@11.js') }}"></script>

    <!-- Modules JavaScript (à charger AVANT l'initialisation) -->
    <script src="{{ asset('assets/js/product/quantity-manager.js') }}"></script>
    <script src="{{ asset('assets/js/product/image-gallery.js') }}"></script>
    <script src="{{ asset('assets/js/product/region-manager.js') }}"></script>
    <script src="{{ asset('assets/js/product/inquiry-form.js') }}"></script>

    <!-- Configuration et initialisation -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Données partagées
            const productConfig = {
                productId: '{{ $productId }}',
                inquiryUrl: '{{ $inquiryUrl }}',
                maxStock: {{ $article->stock ?? 0 }},
                minStock: 1,
                translations: {
                    error: '{{ __('Erreur') }}',
                    success: '{{ __('Succès!') }}',
                    phoneRequired: '{{ __('Veuillez entrer votre numéro de téléphone') }}',
                    phoneInvalid: '{{ __('Format de téléphone invalide. Utilisez le format international ex: +33612345678') }}',
                    regionRequired: '{{ __('Veuillez entrer votre région') }}',
                    quantityExceedsStock: '{{ __('product.inquiry.quantity_exceeds_stock') }}',
                    maxStockReached: '{{ __('product.inquiry.max_stock_reached') }}',
                    productOutOfStock: '{{ __('product.inquiry.product_out_of_stock') }}',
                    selectRegion: '{{ __("Sélectionnez une région") }}',
                    selectCountryFirst: '{{ __("Sélectionnez d\'abord un pays") }}',
                    loadingRegions: '{{ __("Chargement des régions...") }}'
                }
            };

            // Rendre la configuration disponible globalement
            window.productConfig = productConfig;

            // Initialiser les modules (vérifier qu'ils existent)
            if (typeof QuantityManager !== 'undefined') {
                QuantityManager.init(productConfig);
            } else {
                console.error('QuantityManager non chargé');
            }

            if (typeof ImageGallery !== 'undefined') {
                ImageGallery.init();
            } else {
                console.error('ImageGallery non chargé');
            }

            if (typeof RegionManager !== 'undefined') {
                RegionManager.init(productConfig);
            } else {
                console.error('RegionManager non chargé');
            }

            if (typeof InquiryForm !== 'undefined') {
                InquiryForm.init(productConfig);
            } else {
                console.error('InquiryForm non chargé');
            }
        });
    </script>
@endpush
