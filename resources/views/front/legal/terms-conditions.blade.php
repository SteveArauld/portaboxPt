@extends('layouts.app')

@section('title', __('terms.page_title'))

@push('styles')

@endpush
@section('body_class', 'wp-singular page-template-default page page-id-12301 wp-theme-merto theme-merto woocommerce-js wide header-v1 product-label-rectangle product-hover-style-v2 product-border-radius vertical-menu-fixed ts_desktop elementor-default elementor-kit-10348 e--ua-blink e--ua-chrome e--ua-webkit cht-in-desktop cht-landscape')

@section('content')
    <div id="main" class="wrapper ">
        <div class="breadcrumb-title-wrapper breadcrumb-v3">
            <div class="container">
                <div class="breadcrumb-title">
                    <h1 class="heading-title page-title entry-title ">{{ __('terms.page_title') }}</h1>
                    <div class="ts-breadcrumbs breadcrumbs">
                        <div class="breadcrumbs-container">
                            <a href="{{ route('home') }}">{{ __('terms.breadcrumb_home') }}</a>
                            <span class="brn_arrow">/</span>
                            <span class="current">{{ __('terms.breadcrumb_current') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-container show_breadcrumb_v3 no-sidebar">

            <div id="main-content">
                <div id="primary" class="site-content">
                    <article id="post-2" class="post-2 page type-page status-publish hentry">

                        <h2 class="wp-block-heading"><strong>{{ __('terms.title') }}</strong></h2>

                        <p>
                            <strong>{{ __('terms.company_name') }}</strong><br>
                            <a href="{{ route('home') }}">{{ route('home') }}</a>
                        </p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('terms.section1.title') }}</h2>

                        <p>
                            {{ __('terms.section1.text1') }}
                            <strong>{{ __('terms.company_name') }}</strong>,
                            {{ __('terms.section1.text2') }}
                        </p>

                        <p>{{ __('terms.section1.text3') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('terms.section2.title') }}</h2>

                        <p>
                            <strong>{{ __('terms.company_name') }}</strong><br>
                            <strong>{{ __('terms.section2.legal_address') }}</strong> {{ __('terms.address') }}<br>
                            <strong>{{ __('terms.section2.phone') }}</strong> {{ __('terms.phone') }}<br>
                            <strong>{{ __('terms.section2.email') }}</strong> <a href="mailto:{{ __('terms.email') }}">{{ __('terms.email') }}</a><br>
                            <strong>{{ __('terms.section2.website') }}</strong> <a href="{{ route('home') }}">{{ route('home') }}</a>
                        </p>

                        <p>
                            <strong>{{ __('terms.section2.vat') }}</strong> {{ __('terms.vat') }}<br>
                            <strong>{{ __('terms.section2.european_vat') }}</strong> {{ __('terms.european_vat') }}
                        </p>

                        <p>
                            <strong>{{ __('terms.section2.activity') }}</strong> {{ __('terms.activity') }}
                        </p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('terms.section3.title') }}</h2>

                        <p><strong>{{ __('terms.company_name') }}</strong> {{ __('terms.section3.text1') }}</p>

                        <p>{{ __('terms.section3.text2') }}</p>

                        <p>{{ __('terms.section3.text3') }}</p>

                        <p>{{ __('terms.section3.text4') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('terms.section3.option1') }}</li>
                            <li>{{ __('terms.section3.option2') }}</li>
                        </ul>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('terms.section4.title') }}</h2>

                        <h3 class="wp-block-heading">{{ __('terms.section4.subtitle1') }}</h3>

                        <p>{{ __('terms.section4.text1') }}</p>

                        <p><strong>{{ __('terms.company_name') }}</strong> {{ __('terms.section4.text2') }}</p>

                        <h3 class="wp-block-heading">{{ __('terms.section4.subtitle2') }}</h3>

                        <ul class="wp-block-list">
                            <li>{{ __('terms.section4.payment1') }}</li>
                            <li>{{ __('terms.section4.payment2') }}</li>
                            <li>{{ __('terms.section4.payment3') }}</li>
                        </ul>

                        <p>{{ __('terms.section4.text3') }}<br>{{ __('terms.section4.text4') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('terms.section5.title') }}</h2>

                        <p>{{ __('terms.section5.text1') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('terms.section5.confirmation1') }}</li>
                            <li>{{ __('terms.section5.confirmation2') }}</li>
                        </ul>

                        <p><strong>{{ __('terms.company_name') }}</strong> {{ __('terms.section5.text2') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('terms.section5.refusal1') }}</li>
                            <li>{{ __('terms.section5.refusal2') }}</li>
                            <li>{{ __('terms.section5.refusal3') }}</li>
                            <li>{{ __('terms.section5.refusal4') }}</li>
                            <li>{{ __('terms.section5.refusal5') }}</li>
                        </ul>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('terms.section6.title') }}</h2>

                        <h3 class="wp-block-heading">{{ __('terms.section6.subtitle1') }}</h3>

                        <ul class="wp-block-list">
                            <li>{{ __('terms.section6.zone1') }}</li>
                            <li>{{ __('terms.section6.zone2') }}</li>
                        </ul>

                        <h3 class="wp-block-heading">{{ __('terms.section6.subtitle2') }}</h3>

                        <p>{{ __('terms.section6.text1') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('terms.section6.cost1') }}</li>
                            <li>{{ __('terms.section6.cost2') }}</li>
                            <li>{{ __('terms.section6.cost3') }}</li>
                        </ul>

                        <p>{{ __('terms.section6.text2') }}</p>

                        <h3 class="wp-block-heading">{{ __('terms.section6.subtitle3') }}</h3>

                        <p>{{ __('terms.section6.text3') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('terms.section6.delay1') }}</li>
                            <li>{{ __('terms.section6.delay2') }}</li>
                        </ul>

                        <h3 class="wp-block-heading">{{ __('terms.section6.subtitle4') }}</h3>

                        <p>{{ __('terms.section6.text4') }}</p>

                        <h3 class="wp-block-heading">{{ __('terms.section6.subtitle5') }}</h3>

                        <p>{{ __('terms.section6.text5') }}</p>

                        <p>{{ __('terms.section6.text6') }}</p>

                        <p>{{ __('terms.section6.text7') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('terms.section7.title') }}</h2>

                        <h3 class="wp-block-heading">{{ __('terms.section7.subtitle1') }}</h3>

                        <p>{{ __('terms.section7.text1') }}</p>

                        <p>{{ __('terms.section7.text2') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('terms.section7.exception1') }}</li>
                            <li>{{ __('terms.section7.exception2') }}</li>
                            <li>{{ __('terms.section7.exception3') }}</li>
                        </ul>

                        <h3 class="wp-block-heading">{{ __('terms.section7.subtitle2') }}</h3>

                        <p>{{ __('terms.section7.text3') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('terms.section7.condition1') }}</li>
                            <li>{{ __('terms.section7.condition2') }}</li>
                            <li>{{ __('terms.section7.condition3') }}</li>
                        </ul>

                        <h3 class="wp-block-heading">{{ __('terms.section7.subtitle3') }}</h3>

                        <p>{{ __('terms.section7.text4') }}<br>{{ __('terms.section7.text5') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('terms.section8.title') }}</h2>

                        <h3 class="wp-block-heading">{{ __('terms.section8.subtitle1') }}</h3>

                        <p>{{ __('terms.section8.text1') }}</p>

                        <p>{{ __('terms.section8.text2') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('terms.section8.exclusion1') }}</li>
                            <li>{{ __('terms.section8.exclusion2') }}</li>
                            <li>{{ __('terms.section8.exclusion3') }}</li>
                            <li>{{ __('terms.section8.exclusion4') }}</li>
                        </ul>

                        <h3 class="wp-block-heading">{{ __('terms.section8.subtitle2') }}</h3>

                        <p>{{ __('terms.section8.text3') }}<br>{{ __('terms.section8.text4') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('terms.section9.title') }}</h2>

                        <p>{{ __('terms.section9.text1') }}</p>

                        <p>
                            <a href="mailto:{{ __('terms.email') }}">{{ __('terms.email') }}</a><br>
                            WhatsApp: {{ __('terms.phone') }}<br>
                            {{ __('terms.section9.hours') }} {{ __('terms.section9.hours_text') }}
                        </p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('terms.section10.title') }}</h2>

                        <p>{{ __('terms.section10.text1') }}<br><strong>{{ __('terms.company_name') }}</strong> {{ __('terms.section10.text2') }}</p>

                        <p>{{ __('terms.section10.text3') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('terms.section10.right1') }}</li>
                            <li>{{ __('terms.section10.right2') }}</li>
                            <li>{{ __('terms.section10.right3') }}</li>
                            <li>{{ __('terms.section10.right4') }}</li>
                            <li>{{ __('terms.section10.right5') }}</li>
                        </ul>

                        <p>{{ __('terms.section10.text4') }} <strong><a href="mailto:{{ __('terms.email') }}">{{ __('terms.email') }}</a></strong></p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('terms.section11.title') }}</h2>

                        <p><strong>{{ __('terms.company_name') }}</strong> {{ __('terms.section11.text1') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('terms.section11.point1') }}</li>
                            <li>{{ __('terms.section11.point2') }}</li>
                            <li>{{ __('terms.section11.point3') }}</li>
                            <li>{{ __('terms.section11.point4') }}</li>
                            <li>{{ __('terms.section11.point5') }}</li>
                        </ul>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('terms.section12.title') }}</h2>

                        <p>{{ __('terms.section12.text1') }}<br>{{ __('terms.section12.text2') }}<br> <strong>{{ __('terms.city') }}</strong>.</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('terms.section13.title') }}</h2>

                        <p>
                            <strong>{{ __('terms.company_name') }}</strong><br>
                            {{ __('terms.address') }}<br>
                            <a href="mailto:{{ __('terms.email') }}">{{ __('terms.email') }}</a><br>
                            {{ __('terms.phone') }}<br>
                            <a href="{{ route('home') }}">{{ route('home') }}</a>
                        </p>

                        <p>
                            <strong>{{ __('terms.last_update') }}</strong> {{ __('terms.date') }}<br>
                            © <strong>{{ __('terms.company_name') }}</strong> – {{ __('terms.copyright') }}
                        </p>

                        <figure class="wp-block-image size-full is-resized">
                            <img fetchpriority="high" decoding="async"
                                 width="512" height="512"
                                 src="/assets/uploads/2026/02/cropped-Porto-Contentores-scaled-1.png"
                                 alt="{{ __('terms.company_name') }}" class="wp-image-12724"
                                 style="width:483px;height:auto"
                                 sizes="(max-width: 512px) 100vw, 512px">
                        </figure>

                        <p></p>
                    </article>
                </div>
            </div>

        </div>

    </div>

@endsection

@push('scripts')

@endpush