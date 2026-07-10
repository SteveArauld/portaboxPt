@extends('layouts.app')

@section('title', __('delivery.page_title'))

@section('body_class', 'wp-singular page-template-default page page-id-12301 wp-theme-merto theme-merto woocommerce-js wide header-v1 product-label-rectangle product-hover-style-v2 product-border-radius vertical-menu-fixed ts_desktop elementor-default elementor-kit-10348 e--ua-blink e--ua-chrome e--ua-webkit cht-in-desktop cht-landscape')

@section('content')

    <div id="main" class="wrapper ">
        <div class="breadcrumb-title-wrapper breadcrumb-v3">
            <div class="container">
                <div class="breadcrumb-title">
                    <h1 class="heading-title page-title entry-title ">{{ __('delivery.page_title') }}</h1>
                    <div class="ts-breadcrumbs breadcrumbs">
                        <div class="breadcrumbs-container">
                            <a href="{{ route('home') }}">{{ __('delivery.breadcrumb_home') }}</a>
                            <span class="brn_arrow">/</span>
                            <span class="current">{{ __('delivery.breadcrumb_current') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-container show_breadcrumb_v3 no-sidebar">

            <div id="main-content">
                <div id="primary" class="site-content">
                    <article id="post-12217" class="post-12217 page type-page status-publish hentry">

                        <h2 class="wp-block-heading">
                            <strong>{{ __('delivery.company_name') }}</strong><br>
                            <a href="{{ route('home') }}">{{ __('delivery.company_url') }}</a>
                        </h2>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('delivery.section1.title') }}</h2>

                        <p>
                            <strong>{{ __('delivery.company_name') }}</strong> {{ __('delivery.section1.text1') }}
                        </p>

                        <p>{{ __('delivery.section1.text2') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('delivery.section2.title') }}</h2>

                        <p>{{ __('delivery.section2.text1') }}</p>

                        <p>
                           
                            <strong>{{ __('delivery.section2.portugal') }}</strong>
                        </p>

                     <ul class="wp-block-list">
                        <li>{{ __('delivery.section2.portugal_items.continente') }}</li>
                        <li>{{ __('delivery.section2.portugal_items.acores') }}</li>
                        <li>{{ __('delivery.section2.portugal_items.madeira') }}</li>
                        <li>{{ __('delivery.section2.portugal_items.portuarias') }}</li>
                    </ul>

                        <p> <strong>{{ __('delivery.section2.international') }}</strong></p>

                        <p>{{ __('delivery.section2.international_text') }}<br>
                             <strong><a>contato@portocontentores.pt</a></strong>
                        </p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('delivery.section3.title') }}</h2>

                        <p>{{ __('delivery.section3.text1') }}</p>

                        <p>
                            
                            <strong>{{ __('delivery.section3.portugal') }}</strong>
                        </p>

                        <ul class="wp-block-list">
                            <li>
                                <strong>{{ __('delivery.section3.order_deadline') }}</strong>
                                {{ __('delivery.section3.order_deadline_text') }}
                            </li>
                            <li>
                                <strong>{{ __('delivery.section3.preparation') }}</strong>
                                {{ __('delivery.section3.preparation_text') }}
                            </li>
                            <li>
                                <strong>{{ __('delivery.section3.transport') }}</strong>
                                {{ __('delivery.section3.transport_text') }}
                            </li>
                            <li>
                                <strong>{{ __('delivery.section3.total') }}</strong>
                                {{ __('delivery.section3.total_text') }}
                            </li>
                        </ul>

                        <p> <strong>{{ __('delivery.section3.international') }}</strong></p>

                        <ul class="wp-block-list">
                            <li>
                                <strong>{{ __('delivery.section3.transport') }}</strong>
                                {{ __('delivery.section3.international_text') }}
                            </li>
                        </ul>

                        <p><strong>{{ __('delivery.section3.important') }}</strong>
                            {{ __('delivery.section3.important_text') }}
                        </p>

                        <p><strong>{{ __('delivery.section3.unavailable') }}</strong></p>

                        <p>{{ __('delivery.section3.unavailable_text1') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('delivery.section3.unavailable_text2') }}</li>
                            <li>{{ __('delivery.section3.unavailable_text3') }}
                                <ul class="wp-block-list">
                                    <li>{{ __('delivery.section3.unavailable_option1') }}</li>
                                    <li>{{ __('delivery.section3.unavailable_option2') }}</li>
                                    <li>{{ __('delivery.section3.unavailable_option3') }}</li>
                                </ul>
                            </li>
                        </ul>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('delivery.section4.title') }}</h2>

                        <p>{{ __('delivery.section4.text1') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('delivery.section4.item1') }}</li>
                            <li>{{ __('delivery.section4.item2') }}</li>
                            <li>{{ __('delivery.section4.item3') }}</li>
                            <li>{{ __('delivery.section4.item4') }}</li>
                        </ul>

                        <p>{{ __('delivery.section4.text2') }}<br>
                            <strong>DB Schenker, MSC Transport, DHL Freight</strong>, operatori locali certificati.
                        </p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('delivery.section5.title') }}</h2>

                        <p>{{ __('delivery.section5.text1') }}</p>

                        <ul class="wp-block-list">
                            <li><strong>{{ __('delivery.section5.portugal') }}</strong> 230 €</li>
                            <li><strong>{{ __('delivery.section5.eu') }}</strong> 310 €</li>
                        </ul>

                        <p>{{ __('delivery.section5.text2') }}</p>

                        <p>{{ __('delivery.section5.text3') }}<br>
                             <strong><a>contato@portocontentores.pt</a></strong>
                        </p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('delivery.section6.title') }}</h2>

                        <p>{{ __('delivery.section6.text1') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('delivery.section6.item1') }}</li>
                            <li>{{ __('delivery.section6.item2') }}</li>
                        </ul>

                        <p>{{ __('delivery.section6.text2') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('delivery.section6.item3') }}</li>
                            <li>{{ __('delivery.section6.item4') }}</li>
                        </ul>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('delivery.section7.title') }}</h2>

                        <p>{{ __('delivery.section7.text1') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('delivery.section7.item1') }}</li>
                            <li>{{ __('delivery.section7.item2') }}</li>
                            <li>{{ __('delivery.section7.item3') }}</li>
                            <li>{{ __('delivery.section7.item4') }}</li>
                            <li>{{ __('delivery.section7.item5') }}</li>
                        </ul>

                        <p>{{ __('delivery.section7.text2') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('delivery.section8.title') }}</h2>

                        <p>{{ __('delivery.section8.text1') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('delivery.section8.item1') }}</li>
                            <li>{{ __('delivery.section8.item2') }}</li>
                            <li>{{ __('delivery.section8.item3') }}</li>
                            <li>{{ __('delivery.section8.item4') }}<br>
                                 <strong><a>contato@portocontentores.pt</a></strong>
                            </li>
                        </ul>

                        <p>{{ __('delivery.section8.text2') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('delivery.section8.item5') }}</li>
                            <li>{{ __('delivery.section8.item6') }}</li>
                        </ul>

                        <p>{{ __('delivery.section8.text3') }}</p>

                        <p>{{ __('delivery.section8.text4') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('delivery.section8.item7') }}</li>
                            <li>{{ __('delivery.section8.item8') }}</li>
                            <li>{{ __('delivery.section8.item9') }}</li>
                        </ul>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('delivery.section9.title') }}</h2>

                        <p>{{ __('delivery.section9.text1') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('delivery.section9.item1') }}</li>
                            <li>{{ __('delivery.section9.item2') }}</li>
                        </ul>

                        <h3 class="wp-block-heading">{{ __('delivery.section9.subtitle') }}</h3>

                        <p>{{ __('delivery.section9.text2') }}<br>
                             <strong><a>contato@portocontentores.pt</a></strong>
                        </p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('delivery.section10.title') }}</h2>

                        <p>{{ __('delivery.section10.text1') }}</p>

                        <p>
                            <strong>{{ __('delivery.section10.whatsapp') }}</strong> +39 350 872 4295<br>
                             <strong>{{ __('delivery.section10.email') }}</strong>
                            <a>contato@portocontentores.pt</a><br>
                             <strong>{{ __('delivery.section10.address') }}</strong> Via Case Rosse, 19/B – 84131
                            Salerno (SA), Italia<br>
                            
                            <strong>{{ __('delivery.section10.hours') }}</strong> {{ __('delivery.section10.hours_text') }}
                        </p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('delivery.section11.title') }}</h2>

                        <p>{{ __('delivery.section11.text1') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('delivery.section11.item1') }}</li>
                            <li>{{ __('delivery.section11.item2') }}</li>
                            <li>{{ __('delivery.section11.item3') }}</li>
                            <li>{{ __('delivery.section11.item4') }}</li>
                            <li>{{ __('delivery.section11.item5') }}</li>
                        </ul>
                        <hr class="wp-block-separator has-alpha-channel-opacity">
                        <p>
                            <strong>{{ __('delivery.last_update') }}</strong> {{ __('delivery.date') }}<br>
                            © <strong>{{ __('delivery.company_name') }}</strong> – {{ __('delivery.copyright') }}
                        </p>
                        <figure class="wp-block-image size-full is-resized">
                            <img fetchpriority="high" decoding="async"
                                 width="512" height="512"
                                 src="/assets/uploads/2026/02/cropped-Porto-Contentores-scaled-1.png"
                                 alt="" class="wp-image-12724"
                                 style="width:318px;height:auto"
                                 sizes="(max-width: 512px) 100vw, 512px">
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </div>

@endsection
