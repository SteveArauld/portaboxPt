@extends('layouts.app')

@section('title', __('privacy.page_title'))

@push('styles')

@endpush
@section('body_class', 'wp-singular page-template-default page page-id-12301 wp-theme-merto theme-merto woocommerce-js wide header-v1 product-label-rectangle product-hover-style-v2 product-border-radius vertical-menu-fixed ts_desktop elementor-default elementor-kit-10348 e--ua-blink e--ua-chrome e--ua-webkit cht-in-desktop cht-landscape')

@section('content')

    <div id="main" class="wrapper ">
        <div class="breadcrumb-title-wrapper breadcrumb-v3">
            <div class="container">
                <div class="breadcrumb-title">
                    <h1 class="heading-title page-title entry-title ">{{ __('privacy.page_title') }}</h1>
                    <div class="ts-breadcrumbs breadcrumbs">
                        <div class="breadcrumbs-container">
                            <a href="{{ route('home') }}">{{ __('privacy.breadcrumb_home') }}</a>
                            <span class="brn_arrow">/</span>
                            <span class="current">{{ __('privacy.breadcrumb_current') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-container show_breadcrumb_v3 no-sidebar">

            <div id="main-content">
                <div id="primary" class="site-content">
                    <article id="post-3" class="post-3 page type-page status-publish hentry">

                        <h2 class="wp-block-heading">{{ __('privacy.section1.title') }}</h2>

                        <p>
                            {{ __('privacy.section1.text1') }}
                            <strong><a href="{{ route('home') }}">{{ route('home') }}</a></strong>,
                            {{ __('privacy.section1.text2') }}
                        </p>

                        <p>
                            <strong>{{ __('privacy.company_name') }}</strong><br>
                            <strong>{{ __('privacy.section1.address') }}</strong> {{ __('privacy.address') }}<br>
                            <strong>{{ __('privacy.section1.phone') }}</strong> {{ __('privacy.phone') }}<br>
                            <strong>{{ __('privacy.section1.email') }}</strong> <a href="mailto:{{ __('privacy.email') }}">{{ __('privacy.email') }}</a><br>
                            <strong>{{ __('privacy.section1.website') }}</strong> <a href="{{ route('home') }}">{{ route('home') }}</a>
                        </p>

                        <p>
                            <strong>{{ __('privacy.section1.vat') }}</strong> {{ __('privacy.vat') }}<br>
                            <strong>{{ __('privacy.section1.european_vat') }}</strong> {{ __('privacy.european_vat') }}<br>
                            <strong>{{ __('privacy.section1.legal_address') }}</strong> {{ __('privacy.address') }}<br>
                            <strong>{{ __('privacy.section1.activity') }}</strong> {{ __('privacy.activity') }}
                        </p>

                        <p>
                            <strong>{{ __('privacy.company_name') }}</strong> {{ __('privacy.section1.text3') }}
                        </p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('privacy.section2.title') }}</h2>

                        <p>{{ __('privacy.section2.text1') }}</p>

                        <ul class="wp-block-list">
                            <li><strong>{{ __('privacy.section2.identity') }}</strong> {{ __('privacy.section2.identity_text') }}</li>
                            <li><strong>{{ __('privacy.section2.contato') }}</strong> {{ __('privacy.section2.contato_text') }}</li>
                            <li><strong>{{ __('privacy.section2.billing') }}</strong> {{ __('privacy.section2.billing_text') }}</li>
                            <li><strong>{{ __('privacy.section2.order') }}</strong> {{ __('privacy.section2.order_text') }}</li>
                            <li><strong>{{ __('privacy.section2.technical') }}</strong> {{ __('privacy.section2.technical_text') }}</li>
                            <li><strong>{{ __('privacy.section2.cookies') }}</strong> {{ __('privacy.section2.cookies_text') }}</li>
                            <li><strong>{{ __('privacy.section2.payment') }}</strong> {{ __('privacy.section2.payment_text') }}<br>{{ __('privacy.section2.payment_note') }}</li>
                        </ul>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('privacy.section3.title') }}</h2>

                        <p>{{ __('privacy.section3.text1') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('privacy.section3.purpose1') }}</li>
                            <li>{{ __('privacy.section3.purpose2') }}</li>
                            <li>{{ __('privacy.section3.purpose3') }}</li>
                            <li>{{ __('privacy.section3.purpose4') }}</li>
                            <li>{{ __('privacy.section3.purpose5') }}</li>
                            <li>{{ __('privacy.section3.purpose6') }}</li>
                        </ul>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('privacy.section4.title') }}</h2>

                        <p>{{ __('privacy.section4.text1') }}</p>

                        <ul class="wp-block-list">
                            <li><strong>Art. 6(b):</strong> {{ __('privacy.section4.art6b') }}</li>
                            <li><strong>Art. 6(c):</strong> {{ __('privacy.section4.art6c') }}</li>
                            <li><strong>Art. 6(a):</strong> {{ __('privacy.section4.art6a') }}</li>
                            <li><strong>Art. 6(f):</strong> {{ __('privacy.section4.art6f') }}</li>
                        </ul>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('privacy.section5.title') }}</h2>

                        <p>{{ __('privacy.section5.text1') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('privacy.section5.recipient1') }}</li>
                            <li>{{ __('privacy.section5.recipient2') }}</li>
                            <li>{{ __('privacy.section5.recipient3') }}</li>
                            <li>{{ __('privacy.section5.recipient4') }}</li>
                            <li>{{ __('privacy.section5.recipient5') }}</li>
                        </ul>

                        <p>{{ __('privacy.section5.text2') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('privacy.section6.title') }}</h2>

                        <p>{{ __('privacy.section6.text1') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('privacy.section6.condition1') }}</li>
                            <li>{{ __('privacy.section6.condition2') }}</li>
                        </ul>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('privacy.section7.title') }}</h2>

                        <p>{{ __('privacy.section7.text1') }}</p>

                        <ul class="wp-block-list">
                            <li><strong>{{ __('privacy.section7.orders') }}</strong> {{ __('privacy.section7.orders_text') }}</li>
                            <li><strong>{{ __('privacy.section7.marketing') }}</strong> {{ __('privacy.section7.marketing_text') }}</li>
                            <li><strong>{{ __('privacy.section7.technical') }}</strong> {{ __('privacy.section7.technical_text') }}</li>
                        </ul>

                        <p>{{ __('privacy.section7.text2') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('privacy.section8.title') }}</h2>

                        <p><strong>{{ __('privacy.company_name') }}</strong> {{ __('privacy.section8.text1') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('privacy.section8.measure1') }}</li>
                            <li>{{ __('privacy.section8.measure2') }}</li>
                            <li>{{ __('privacy.section8.measure3') }}</li>
                            <li>{{ __('privacy.section8.measure4') }}</li>
                            <li>{{ __('privacy.section8.measure5') }}</li>
                        </ul>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('privacy.section9.title') }}</h2>

                        <p>{{ __('privacy.section9.text1') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('privacy.section9.right1') }}</li>
                            <li>{{ __('privacy.section9.right2') }}</li>
                            <li>{{ __('privacy.section9.right3') }}</li>
                            <li>{{ __('privacy.section9.right4') }}</li>
                            <li>{{ __('privacy.section9.right5') }}</li>
                            <li>{{ __('privacy.section9.right6') }}</li>
                        </ul>

                        <p>
                            {{ __('privacy.section9.text2') }}<br>
                            <strong><a href="mailto:{{ __('privacy.email') }}">{{ __('privacy.email') }}</a></strong>
                        </p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('privacy.section10.title') }}</h2>

                        <p>{{ __('privacy.section10.text1') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('privacy.section10.cookie1') }}</li>
                            <li>{{ __('privacy.section10.cookie2') }}</li>
                            <li>{{ __('privacy.section10.cookie3') }}</li>
                        </ul>

                        <p>{{ __('privacy.section10.text2') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('privacy.section11.title') }}</h2>

                        <p>{{ __('privacy.section11.text1') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('privacy.section11.point1') }}</li>
                            <li>{{ __('privacy.section11.point2') }}</li>
                            <li>{{ __('privacy.section11.point3') }}</li>
                            <li>{{ __('privacy.section11.point4') }}</li>
                            <li>{{ __('privacy.section11.point5') }}</li>
                        </ul>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('privacy.section12.title') }}</h2>

                        <p>
                            <strong>{{ __('privacy.company_name') }}</strong> {{ __('privacy.section12.text1') }}<br>
                            {{ __('privacy.section12.text2') }}
                        </p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('privacy.section13.title') }}</h2>

                        <p>{{ __('privacy.section13.text1') }}</p>

                        <p>
                            <strong>{{ __('privacy.company_name') }}</strong><br>
                            {{ __('privacy.address') }}<br>
                            <a href="mailto:{{ __('privacy.email') }}">{{ __('privacy.email') }}</a><br>
                            WhatsApp: <strong>{{ __('privacy.phone') }}</strong>
                        </p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <p>
                            <strong>{{ __('privacy.last_update') }}</strong> {{ __('privacy.date') }}<br>
                            © <strong>{{ __('privacy.company_name') }}</strong> – {{ __('privacy.copyright') }}
                        </p>

                        <figure class="wp-block-image size-full is-resized">
                            <img fetchpriority="high" decoding="async" width="512" height="512"
                                 src="/assets/uploads/2026/02/cropped-Porto-Contentores-scaled-1.png"
                                 alt="{{ __('privacy.company_name') }}" class="wp-image-12724" style="width:299px;height:auto"
                                 sizes="(max-width: 512px) 100vw, 512px">
                        </figure>
                    </article>
                </div>
            </div>

        </div>

    </div>

@endsection

@push('scripts')

@endpush