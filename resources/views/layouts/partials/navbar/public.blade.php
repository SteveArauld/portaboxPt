<header class="ts-header has-hotline has-search-category header-fullwidth">
    <div class="overlay"></div>
    <div class="header-top visible-md hidden-xs">
        <div class="container">
            <div class="header-right">
                <div class="hotline">
                    <a href="mailto:{{ __('contato.email_address') }}">
                        <span>{{ __('header.email') }}</span>
                        <span>{{ __('contato.email_address') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Reste du header (votre code existant) -->
    <div class="header-template header-sticky">
        <div class="header-middle">
            <div class="container">

                <div class="ts-mobile-icon-toggle visible-xs">
                    <span class="icon"></span>
                </div>

                <!-- Recherche mobile -->
                <div class="mobile-search-wrapper visible-xs">
                    <button class="mobile-search-toggle" aria-label="Rechercher">
                        <i class="fas fa-search"></i>
                    </button>
                    <div class="mobile-search-form">
                        <form action="{{ route('shop') }}" method="get">
                            <select name="category" class="select-category">
                                @php
                                    if(!isset($category)){
                                        $category = "";
                                    }
                                @endphp
                                <option value="">{{ __('header.all_categories') }}</option>
                                <option {{ $category == 'cafeteria-bar-restaurante' ? 'selected' : '' }} value="cafeteria-bar-restaurante">
                                    {{ __('header.category.caffetteria') }}
                                </option>
                                <option {{ $category == 'contentores-de-armazenamento' ? 'selected' : '' }} value="contentores-de-armazenamento">
                                    {{ __('header.category.stoccaggio') }}
                                </option>
                                <option {{ $category == 'conteiner-com-abertura-lateral' ? 'selected' : '' }} value="conteiner-com-abertura-lateral">
                                    {{ __('header.category.laterale_aperto') }}
                                </option>
                                <option {{ $category == 'contentores-modulares' ? 'selected' : '' }} value="contentores-modulares">
                                    {{ __('header.category.modulari') }}
                                </option>
                                <option {{ $category == 'contentores-refrigerados' ? 'selected' : '' }} value="contentores-refrigerados">
                                    {{ __('header.category.refrigerati') }}
                                </option>
                                <option {{ $category == 'contentores-padrao-usados' ? 'selected' : '' }} value="contentores-padrao-usados">
                                    {{ __('header.category.standard_usati') }}
                                </option>
                                <option {{ $category == 'contentores-10-pes' ? 'selected' : '' }} value="contentores-10-pes">
                                    {{ __('header.category.contenitori_10') }}
                                </option>
                                <option {{ $category == 'contentores-20-pes' ? 'selected' : '' }} value="contentores-20-pes">
                                    {{ __('header.category.contenitori_20') }}
                                </option>
                                <option {{ $category == 'contentores-40-pes' ? 'selected' : '' }} value="contentores-40-pes">
                                    {{ __('header.category.contenitori_40') }}
                                </option>
                                <option {{ $category == 'contentores-casa' ? 'selected' : '' }} value="contentores-casa">
                                    {{ __('header.category.contenitori_casa') }}
                                </option>
                                <option {{ $category == 'nao-categorizado' ? 'selected' : '' }} value="nao-categorizado">
                                    {{ __('header.category.non_categorizzato') }}
                                </option>
                                <option {{ $category == 'piscina' ? 'selected' : '' }} value="piscina">{{ __('header.category.piscina') }}</option>
                                <option {{ $category == 'sanitario' ? 'selected' : '' }} value="sanitario">{{ __('header.category.sanitario') }}</option>
                                <option {{ $category == 'escritorio' ? 'selected' : '' }} value="escritorio">{{ __('header.category.ufficio') }}</option>
                            </select>
                            <div class="search-field">
                                <input type="text" name="search_Prin" placeholder="{{ __('header.search.placeholder') }}" autocomplete="off" />
                                <button type="submit" class="search-submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="logo-wrapper">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="../assets/uploads/2026/02/cropped-Porto-Contentores-scaled-1.png"
                                alt="Porto Contentores" title="Porto Contentores" class="normal-logo" />

                            <img src="../assets/uploads/2026/02/cropped-Porto-Contentores-scaled-1.png"
                                alt="Porto Contentores" title="Porto Contentores" class="mobile-logo" />

                            <img src="../assets/uploads/2026/02/cropped-Porto-Contentores-scaled-1.png"
                                alt="Porto Contentores" title="Porto Contentores" class="sticky-logo" />
                        </a>
                    </div>
                </div>

                <div class="header-center">
                    <div class="hotline">
                        <a href="mailto:{{ __('contato.email_address') }}">
                            <span>{{ __('header.email') }}</span>
                            <span>{{ __('contato.email_address') }}</span>
                        </a>
                    </div>

                    <div class="ts-search-by-category ">
                        <form action="{{ route('shop') }}" method="get">
                            <select name="category" class="select-category">
                                @php
                                if(!isset($category)){
                                $category = "";
                                }
                                @endphp
                                <option value="">{{ __('header.all_categories') }}</option>
                                <option {{ $category == 'cafeteria-bar-restaurante' ? 'selected' : '' }} value="cafeteria-bar-restaurante">
                                    {{ __('header.category.caffetteria') }}
                                </option>
                                <option {{ $category == 'contentores-de-armazenamento' ? 'selected' : '' }} value="contentores-de-armazenamento">
                                    {{ __('header.category.stoccaggio') }}
                                </option>
                                <option {{ $category == 'conteiner-com-abertura-lateral' ? 'selected' : '' }} value="conteiner-com-abertura-lateral">
                                    {{ __('header.category.laterale_aperto') }}
                                </option>
                                <option {{ $category == 'contentores-modulares' ? 'selected' : '' }} value="contentores-modulares">
                                    {{ __('header.category.modulari') }}
                                </option>
                                <option {{ $category == 'contentores-refrigerados' ? 'selected' : '' }} value="contentores-refrigerados">
                                    {{ __('header.category.refrigerati') }}
                                </option>
                                <option {{ $category == 'contentores-padrao-usados' ? 'selected' : '' }} value="contentores-padrao-usados">
                                    {{ __('header.category.standard_usati') }}
                                </option>
                                <option {{ $category == 'contentores-10-pes' ? 'selected' : '' }} value="contentores-10-pes">
                                    {{ __('header.category.contenitori_10') }}
                                </option>
                                <option {{ $category == 'contentores-20-pes' ? 'selected' : '' }} value="contentores-20-pes">
                                    {{ __('header.category.contenitori_20') }}
                                </option>
                                <option {{ $category == 'contentores-40-pes' ? 'selected' : '' }} value="contentores-40-pes">
                                    {{ __('header.category.contenitori_40') }}
                                </option>
                                <option {{ $category == 'contentores-casa' ? 'selected' : '' }} value="contentores-casa">
                                    {{ __('header.category.contenitori_casa') }}
                                </option>
                                <option {{ $category == 'nao-categorizado' ? 'selected' : '' }} value="nao-categorizado">
                                    {{ __('header.category.non_categorizzato') }}
                                </option>
                                <option {{ $category == 'piscina' ? 'selected' : '' }} value="piscina">{{ __('header.category.piscina') }}</option>
                                <option {{ $category == 'sanitario' ? 'selected' : '' }} value="sanitario">{{ __('header.category.sanitario') }}
                                </option>
                                <option {{ $category == 'escritorio' ? 'selected' : '' }} value="escritorio">{{ __('header.category.ufficio') }}</option>
                            </select>
                            <div class="search-table">
                                <div class="search-field search-content">
                                    <input type="text" value="{{ $search2 ?? '' }}" name="search_Prin"
                                        placeholder="{{ __('header.search.placeholder') }}" autocomplete="off" />

                                    <div class="search-button">
                                        <input type="submit" title="{{ __('header.search.button') }}" value="{{ __('header.search.button') }}" />
                                    </div>

                                </div>
                            </div>
                        </form>

                        <div class="search-dropdown">
                            <div class="ts-search-result-container woocommerce"></div>
                        </div>
                    </div>
                </div>

                <div class="header-left">
                    <!-- Bouton panier -->
                    <button type="button" class="pbs-cart-toggle" data-cart-toggle aria-label="{{ __('Carrinho') }}">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="pbs-cart-count">0</span>
                    </button>
                </div>

            </div>
        </div>
        
        <div class="header-bottom hidden-xs">
            <div class="container">
                <div class="menu-wrapper">
                    <div class="vertical-menu-wrapper">
                        <div class="vertical-menu-heading">
                            <span>{{ __('header.menu.buy_by_category') }}</span>
                        </div>
                    </div>

                    <div class="ts-menu">
                        <nav class="main-menu pc-menu ts-mega-menu-wrapper">
                            <ul id="menu-cosmetic" class="menu">
                                <li class="menu-item {{ request()->routeIs('home') ? 'active-menu' : '' }}">
                                    <a href="{{ route('home') }}">
                                        <span class="menu-label">{{ __('header.menu.home') }}</span>
                                    </a>
                                </li>
                                <li class="menu-item {{ request()->routeIs('about') ? 'active-menu' : '' }}">
                                    <a href="{{ route('about') }}">
                                        <span class="menu-label">{{ __('header.menu.about') }}</span>
                                    </a>
                                </li>
                                <li class="menu-item {{ request()->routeIs('shop') ? 'active-menu' : '' }}">
                                    <a href="{{ route('shop') }}">
                                        <span class="menu-label">{{ __('header.menu.shop') }}</span>
                                    </a>
                                </li>
                                <li class="menu-item {{ request()->routeIs('faq') ? 'active-menu' : '' }}">
                                    <a href="{{ route('faq') }}">
                                        <span class="menu-label">{{ __('header.menu.faq') }}</span>
                                    </a>
                                </li>
                                <li class="menu-item {{ request()->routeIs('contato') ? 'active-menu' : '' }}">
                                    <a href="{{ route('contato') }}">
                                        <span class="menu-label">{{ __('header.menu.contato') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    /* ========== HEADER FIXED ========== */
    .header-middle {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        background-color: #fff;
    }

    body {
        padding-top: 120px;
    }

    .header-top {
        background-color: #f8f9fa;
        padding: 8px 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .header-template.header-sticky {
        position: relative;
        top: auto;
    }

    @media (max-width: 768px) {
        body {
            padding-top: 70px;
        }
    }

    /* ========== RECHERCHE MOBILE ========== */
    .mobile-search-wrapper {
        display: none;
    }

    @media (max-width: 767px) {
        .mobile-search-wrapper.visible-xs {
            display: flex;
            align-items: center;
            order: 2;
            z-index: 2;
        }

        .mobile-search-toggle {
            background: none;
            border: none;
            font-size: 20px;
            color: #333;
            cursor: pointer;
            padding: 8px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .mobile-search-toggle:hover {
            color: black;
            background-color: transparent;
        }

        .mobile-search-form {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            padding: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-10px);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1001;
        }

        .mobile-search-wrapper.active .mobile-search-form {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }

        .mobile-search-form form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .mobile-search-form .select-category {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            background: white;
        }

        .mobile-search-form .search-field {
            display: flex;
            gap: 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }

        .mobile-search-form .search-field input {
            flex: 1;
            padding: 12px 15px;
            border: none;
            font-size: 14px;
            outline: none;
        }

        .mobile-search-form .search-submit {
         
            color: white;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .mobile-search-form .search-submit:hover {
            background: #0056b3;
        }

        /* Organisation mobile */
        .header-middle .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
            padding: 10px 15px;
            gap: 10px;
        }

        .ts-mobile-icon-toggle {
            order: 1;
            flex: 0 0 auto;
        }

        .logo-wrapper {
            order: 3;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .header-left {
            order: 4;
            flex: 0 0 auto;
        }

        .logo-wrapper .logo img {
            max-height: 35px;
            width: auto;
        }

        .header-center {
            display: none !important;
        }

        .header-top {
            display: none !important;
        }
    }

    @media (min-width: 768px) and (max-width: 1200px) {
        .mobile-search-wrapper.visible-xs {
            display: none;
        }
        
        .header-center {
            display: none;
        }
    }

    /* ========== STYLES GÉNÉRAUX ========== */
    .header-top .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .header-left {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .header-right {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .hotline a {
        display: flex;
        flex-direction: column;
        text-decoration: none;
        color: #333;
        font-size: 13px;
        line-height: 1.4;
    }

    .hotline span:first-child {
        font-size: 11px;
        opacity: 0.7;
    }

    .hotline span:last-child {
        font-weight: 600;
        font-size: 14px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ========== RECHERCHE MOBILE ==========
        const mobileSearchWrapper = document.querySelector('.mobile-search-wrapper');
        const mobileSearchToggle = document.querySelector('.mobile-search-toggle');
        
        if (mobileSearchToggle && mobileSearchWrapper) {
            mobileSearchToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                mobileSearchWrapper.classList.toggle('active');
                
                if (mobileSearchWrapper.classList.contains('active')) {
                    const searchInput = mobileSearchWrapper.querySelector('input[type="text"]');
                    if (searchInput) {
                        setTimeout(() => {
                            searchInput.focus();
                        }, 300);
                    }
                }
            });
            
            document.addEventListener('click', function(e) {
                if (!mobileSearchWrapper.contains(e.target)) {
                    mobileSearchWrapper.classList.remove('active');
                }
            });
            
            const mobileSearchForm = mobileSearchWrapper.querySelector('.mobile-search-form');
            if (mobileSearchForm) {
                mobileSearchForm.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            }
            
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    mobileSearchWrapper.classList.remove('active');
                }
            });
        }

        // ========== SÉLECTEUR DE LANGUES ==========
        const languageSelector = document.querySelector('.language-selector');
        const dropdownToggle = document.querySelector('.language-dropdown-toggle');

        if (languageSelector && dropdownToggle) {
            dropdownToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                languageSelector.classList.toggle('active');
            });

            document.addEventListener('click', function(e) {
                if (!languageSelector.contains(e.target)) {
                    languageSelector.classList.remove('active');
                }
            });

            const dropdownMenu = document.querySelector('.language-dropdown-menu');
            if (dropdownMenu) {
                dropdownMenu.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            }
        }
    });
</script>