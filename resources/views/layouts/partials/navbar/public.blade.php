<header class="ts-header has-hotline has-search-category header-fullwidth">
    <div class="overlay"></div>
    <div class="header-top visible-md hidden-xs">
        <div class="container">

            <div class="header-right">
                <div class="hotline">
                    <a href="tel:contato@portocontentores.com">
                        <span>{{ __('header.email') }}</span>
                        <span>contato@portocontentores.com</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Reste du header (votre code existant) -->
    <div class="header-template header-sticky" >
        <div class="header-middle">
            <div class="container">

                <div class="ts-mobile-icon-toggle visible-xs">
                    <span class="icon"></span>
                </div>

                <div class="logo-wrapper">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="../assets/uploads/2026/02/cropped-Porto-Contentores-scaled-1.png"
                                 alt="PORTA-BOX-SOLUTION" title="PORTA-BOX-SOLUTION" class="normal-logo"/>

                            <img src="../assets/uploads/2026/02/cropped-Porto-Contentores-scaled-1.png"
                                 alt="PORTA-BOX-SOLUTION" title="PORTA-BOX-SOLUTION" class="mobile-logo"/>

                            <img src="../assets/uploads/2026/02/cropped-Porto-Contentores-scaled-1.png"
                                 alt="PORTA-BOX-SOLUTION" title="PORTA-BOX-SOLUTION" class="sticky-logo"/>

                        </a>
                    </div>
                </div>

                <div class="header-center">
                    <div class="hotline">
                        <a href="tel:contato@portocontentores.com">
                            <span>{{ __('header.email') }}</span>
                            <span>contato@portocontentores.com</span>
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
        <option {{ $category == 'conteineres-de-armazenamento' ? 'selected' : '' }} value="conteineres-de-armazenamento">
            {{ __('header.category.stoccaggio') }}
        </option>
        <option {{ $category == 'conteiner-com-abertura-lateral' ? 'selected' : '' }} value="conteiner-com-abertura-lateral">
            {{ __('header.category.laterale_aperto') }}
        </option>
        <option {{ $category == 'conteineres-modulares' ? 'selected' : '' }} value="conteineres-modulares">
            {{ __('header.category.modulari') }}
        </option>
        <option {{ $category == 'conteineres-refrigerados' ? 'selected' : '' }} value="conteineres-refrigerados">
            {{ __('header.category.refrigerati') }}
        </option>
        <option {{ $category == 'conteineres-padrao-usados' ? 'selected' : '' }} value="conteineres-padrao-usados">
            {{ __('header.category.standard_usati') }}
        </option>
        <option {{ $category == 'conteineres-10-pes' ? 'selected' : '' }} value="conteineres-10-pes">
            {{ __('header.category.contenitori_10') }}
        </option>
        <option {{ $category == 'conteineres-20-pes' ? 'selected' : '' }} value="conteineres-20-pes">
            {{ __('header.category.contenitori_20') }}
        </option>
        <option {{ $category == 'conteineres-40-pes' ? 'selected' : '' }} value="conteineres-40-pes">
            {{ __('header.category.contenitori_40') }}
        </option>
        <option {{ $category == 'conteineres-casa' ? 'selected' : '' }} value="conteineres-casa">
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
                   placeholder="{{ __('header.search.placeholder') }}" autocomplete="off"/>

            <div class="search-button">
                <input type="submit" title="{{ __('header.search.button') }}" value="{{ __('header.search.button') }}"/>
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
                    <button type="button" class="pbs-cart-toggle" data-cart-toggle aria-label="{{ __('Panier') }}">
                        <i class="fas fa-shopping-cart"></i>
                        <!-- <span class="pbs-cart-label">{{ __('Panier') }}</span> -->
                        <span class="pbs-cart-count">0</span>
                    </button>

                    <!-- Sélecteur de langues personnalisé sans Bootstrap -->
                    <!-- <div class="language-selector-wrapper">
                        <div class="language-selector">
                            <button class="language-dropdown-toggle" id="languageDropdown" aria-expanded="false">
                                @if (app()->getLocale() === 'fr')
                                    <img class="flag-icon" src="{{ asset('assets/images/flags/fr.svg') }}" alt="Français">
                                    <span>{{ __('header.language.french') }}</span>
                                @elseif (app()->getLocale() === 'en')
                                    <img class="flag-icon" src="{{ asset('assets/images/flags/uk.svg') }}" alt="English">
                                    <span>{{ __('header.language.english') }}</span>
                                @elseif (app()->getLocale() === 'it')
                                    <img class="flag-icon" src="{{ asset('assets/images/flags/it.svg') }}" alt="Italiano">
                                    <span>{{ __('header.language.italian') }}</span>
                                @elseif (app()->getLocale() === 'pt')
                                    <img class="flag-icon" src="{{ asset('assets/images/flags/pt.svg') }}" alt="Português">
                                    <span>{{ __('header.language.portuguese') }}</span>
                                @elseif (app()->getLocale() === 'es')
                                    <img class="flag-icon" src="{{ asset('assets/images/flags/es.svg') }}" alt="Español">
                                    <span>{{ __('header.language.spanish') }}</span>
                                @endif
                                <svg class="dropdown-arrow" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 4L6 8L10 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <ul class="language-dropdown-menu" id="languageDropdownMenu">
                                <li>
                                    <a class="language-dropdown-item {{ app()->getLocale() == 'fr' ? 'active' : '' }}"
                                       href="{{ route('lang.switch', 'fr') }}">
                                        <div class="language-item-content">
                                            <img class="flag-icon" src="{{ asset('assets/images/flags/fr.svg') }}" alt="Français">
                                            <span>{{ __('header.language.french') }}</span>
                                        </div>
                                        @if (app()->getLocale() == 'fr')
                                            <svg class="check-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.6667 3.5L5.25 9.91667L2.33333 7" stroke="#2c3e50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        @endif
                                    </a>
                                </li>
                                <li>
                                    <a class="language-dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}"
                                       href="{{ route('lang.switch', 'en') }}">
                                        <div class="language-item-content">
                                            <img class="flag-icon" src="{{ asset('assets/images/flags/uk.svg') }}" alt="English">
                                            <span>{{ __('header.language.english') }}</span>
                                        </div>
                                        @if (app()->getLocale() == 'en')
                                            <svg class="check-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.6667 3.5L5.25 9.91667L2.33333 7" stroke="#2c3e50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        @endif
                                    </a>
                                </li>
                                <li>
                                    <a class="language-dropdown-item {{ app()->getLocale() == 'it' ? 'active' : '' }}"
                                       href="{{ route('lang.switch', 'it') }}">
                                        <div class="language-item-content">
                                            <img class="flag-icon" src="{{ asset('assets/images/flags/it.svg') }}" alt="Italiano">
                                            <span>{{ __('header.language.italian') }}</span>
                                        </div>
                                        @if (app()->getLocale() == 'it')
                                            <svg class="check-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.6667 3.5L5.25 9.91667L2.33333 7" stroke="#2c3e50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        @endif
                                    </a>
                                </li>
                                <li>
                                    <a class="language-dropdown-item {{ app()->getLocale() == 'pt' ? 'active' : '' }}"
                                       href="{{ route('lang.switch', 'pt') }}">
                                        <div class="language-item-content">
                                            <img class="flag-icon" src="{{ asset('assets/images/flags/pt.svg') }}" alt="Português">
                                            <span>{{ __('header.language.portuguese') }}</span>
                                        </div>
                                        @if (app()->getLocale() == 'pt')
                                            <svg class="check-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.6667 3.5L5.25 9.91667L2.33333 7" stroke="#2c3e50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        @endif
                                    </a>
                                </li>
                                <li>
                                    <a class="language-dropdown-item {{ app()->getLocale() == 'es' ? 'active' : '' }}"
                                       href="{{ route('lang.switch', 'es') }}">
                                        <div class="language-item-content">
                                            <img class="flag-icon" src="{{ asset('assets/images/flags/es.svg') }}" alt="Español">
                                            <span>{{ __('header.language.spanish') }}</span>
                                        </div>
                                        @if (app()->getLocale() == 'es')
                                            <svg class="check-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.6667 3.5L5.25 9.91667L2.33333 7" stroke="#2c3e50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        @endif
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
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

    .language-selector-wrapper {
        position: relative;
        display: inline-block;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    }


    .language-dropdown-toggle {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 8px 15px;
        background: transparent;
        border: 1px solid rgba(0,0,0,0.1);
        border-radius: 30px;
        cursor: pointer;
        font-size: 14px;
        color: #333;
        transition: all 0.3s ease;
        min-width: 120px;
        background-color: white;
    }

    .language-dropdown-toggle:hover {
        background-color: #f8f9fa;
        border-color: rgba(0,0,0,0.2);
    }


    .flag-icon {
        width: 20px;
        height: 15px;
        object-fit: cover;
        border-radius: 2px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }


    .dropdown-arrow {
        margin-left: auto;
        transition: transform 0.3s ease;
    }

    .language-selector.active .dropdown-arrow {
        transform: rotate(180deg);
    }


    .language-dropdown-menu {
        position: absolute;
        top: calc(100% + 5px);
        left: 0;

        background: white;
        border-radius: 8px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        padding: 8px 0;
        margin: 0;
        list-style: none;
        z-index: 1000;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.3s ease;
    }

    .language-selector.active .language-dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }


    .language-dropdown-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 8px 15px;
        text-decoration: none;
        color: #333;
        font-size: 14px;
        transition: all 0.2s ease;
        cursor: pointer;
        gap: 30px;
    }

    .language-dropdown-item:hover {
        background-color: #f5f5f5;
    }

    .language-dropdown-item.active {
        background-color: #f0f0f0;
        font-weight: 500;
    }

    .language-item-content {
        display: flex;
        align-items: center;
        gap: 10px;
    }


    .check-icon {
        width: 14px;
        height: 14px;
    }


    .language-dropdown-item:hover .flag-icon {
        transform: scale(1.1);
        transition: transform 0.2s ease;
    }


    @media (max-width: 768px) {
        .language-dropdown-toggle {
            padding: 6px 12px;
            font-size: 13px;
            min-width: 100px;
        }


        .flag-icon {
            width: 18px;
            height: 13px;
        }
    }


    .header-top {
        background-color: #f8f9fa;
        padding: 8px 0;
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }

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


    .language-dropdown-menu {
        position: absolute;
        top: calc(100% + 5px);
        left: 0;

        background: white;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15), 0 5px 15px rgba(0, 0, 0, 0.1);
        padding: 8px 0;
        margin: 0;
        list-style: none;
        z-index: 1000;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border: 1px solid rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        background-color: rgba(255, 255, 255, 0.98);
    }


    .language-dropdown-menu li {
        margin: 0;
        padding: 0;
        list-style: none;
        border: none;
    }


    .language-dropdown-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 18px;
        text-decoration: none;
        color: #2c3e50;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.3s ease;
        cursor: pointer;
        position: relative;
        border-left: 3px solid transparent;
    }

    .language-dropdown-item:hover {
        background: linear-gradient(90deg, rgba(52, 152, 219, 0.08) 0%, rgba(52, 152, 219, 0.02) 100%);
        border-left-color: #3498db;
        padding-left: 22px;
    }


    .language-dropdown-item.active {
        background: linear-gradient(90deg, rgba(46, 204, 113, 0.1) 0%, rgba(46, 204, 113, 0.02) 100%);
        border-left-color: #2ecc71;
        font-weight: 600;
        color: #27ae60;
    }


    .language-item-content {
        display: flex;
        align-items: center;
        gap: 12px;
        flex: 1;
    }


    .language-item-content .flag-icon {
        width: 24px;
        height: 18px;
        object-fit: cover;
        border-radius: 4px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
    }


    .language-dropdown-item:hover .flag-icon {
        transform: scale(1.15) rotate(2deg);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }


    .language-item-content span {
        font-size: 14px;
        letter-spacing: 0.3px;
        transition: all 0.3s ease;
    }

    .language-dropdown-item:hover .language-item-content span {
        transform: translateX(3px);
    }


    .check-icon {
        width: 16px;
        height: 16px;
        opacity: 0;
        transform: scale(0);
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .language-dropdown-item.active .check-icon {
        opacity: 1;
        transform: scale(1);
    }


    .language-selector.active .language-dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }


    .language-dropdown-menu li:not(:last-child) {
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .language-dropdown-item:active {
        background-color: rgba(52, 152, 219, 0.2);
        transform: scale(0.98);
    }

    @media (max-width: 768px) {
        .language-dropdown-menu {

            border-radius: 10px;
        }

        .language-dropdown-item {
            padding: 8px 15px;
        }

        .language-item-content .flag-icon {
            width: 22px;
            height: 16px;
        }

        .language-item-content span {
            font-size: 13px;
        }
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-10px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .language-selector.active .language-dropdown-menu li {
        animation: slideIn 0.3s ease forwards;
        animation-delay: calc(0.05s * var(--i, 1));
    }

    .language-selector.active .language-dropdown-menu li:nth-child(1) { --i: 1; }
    .language-selector.active .language-dropdown-menu li:nth-child(2) { --i: 2; }
    .language-selector.active .language-dropdown-menu li:nth-child(3) { --i: 3; }
    .language-selector.active .language-dropdown-menu li:nth-child(4) { --i: 4; }
    .language-selector.active .language-dropdown-menu li:nth-child(5) { --i: 5; }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
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