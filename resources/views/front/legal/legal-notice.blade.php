@extends('layouts.app')

@section('title', __('legal.title'))

@section('body_class', 'wp-singular page-template-default page page-id-12301 wp-theme-merto theme-merto woocommerce-js wide header-v1 product-label-rectangle product-hover-style-v2 product-border-radius vertical-menu-fixed ts_desktop elementor-default elementor-kit-10348 e--ua-blink e--ua-chrome e--ua-webkit cht-in-desktop cht-landscape')

@section('content')
    <div id="main" class="wrapper ">
        <div class="breadcrumb-title-wrapper breadcrumb-v3">
            <div class="container">
                <div class="breadcrumb-title">
                    <h1 class="heading-title page-title entry-title">{{ __('legal.heading_title') }}</h1>
                    <div class="ts-breadcrumbs breadcrumbs">
                        <div class="breadcrumbs-container">
                            <a href="{{ route('home') }}">{{ __('legal.breadcrumb_home') }}</a>
                            <span class="brn_arrow">/</span>
                            <span class="current">{{ __('legal.breadcrumb_current') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-container show_breadcrumb_v3 no-sidebar">

            <div id="main-content">
                <div id="primary" class="site-content">
                    <article id="post-12301" class="post-12301 page type-page status-publish hentry">

                        <h2 class="wp-block-heading">{{ __('legal.section1_title') }}</h2>

                        <ul class="wp-block-list">
                            <li>{{ __('legal.section1_item1') }}</li>
                            <li>{{ __('legal.section1_item2') }}</li>
                            <li>{{ __('legal.section1_item3') }}</li>
                            <li>{{ __('legal.section1_item4') }}</li>
                        </ul>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('legal.section2_title') }}</h2>

                        <p>{!! __('legal.section2_text', ['url' => route('home')]) !!}</p>

                        <p>
                            <strong>{{ __('legal.company_name') }}</strong><br>
                            <strong>{{ __('legal.nif') }}</strong><br>
                            <strong>{{ __('legal.registration') }}</strong><br>
                            <strong>{{ __('legal.share_capital') }}</strong>
                        </p>

                        <p>
                            <strong>{{ __('legal.phone') }}</strong><br>
                            <strong>{{ __('legal.email') }}</strong> <a href="mailto:{{ __('legal.email_address') }}">{{ __('legal.email_address') }}</a><br>
                            <strong>{{ __('legal.website') }}</strong> <a href="{{ route('home') }}">{{ route('home') }}</a>
                        </p>

                        <p>{{ __('legal.section2_description') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('legal.section3_title') }}</h2>

                        <p>{!! __('legal.section3_text', ['company' => __('legal.company_name')]) !!}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('legal.section4_title') }}</h2>

                        <p>{!! __('legal.section4_text', ['url' => route('home')]) !!}</p>

                        <p>{{ __('legal.section4_provider_guarantees') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('legal.section4_guarantee1') }}</li>
                            <li>{{ __('legal.section4_guarantee2') }}</li>
                            <li>{{ __('legal.section4_guarantee3') }}</li>
                        </ul>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('legal.section5_title') }}</h2>

                        <p>{!! __('legal.section5_text', ['company' => __('legal.company_name')]) !!}</p>

                        <p>{{ __('legal.section5_restriction') }}</p>

                        <p>{!! __('legal.section5_citation', ['company' => __('legal.company_name'), 'url' => route('home')]) !!}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('legal.section6_title') }}</h2>

                        <p>{!! __('legal.section6_intro', ['company' => __('legal.company_name')]) !!}</p>

                        <h3 class="wp-block-heading">{{ __('legal.section6_subtitle1') }}</h3>

                        <p>{{ __('legal.section6_data_purpose_intro') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('legal.section6_purpose1') }}</li>
                            <li>{{ __('legal.section6_purpose2') }}</li>
                            <li>{{ __('legal.section6_purpose3') }}</li>
                            <li>{{ __('legal.section6_purpose4') }}</li>
                        </ul>

                        <h3 class="wp-block-heading">{{ __('legal.section6_subtitle2') }}</h3>

                        <p>{{ __('legal.section6_rights_intro') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('legal.section6_right1') }}</li>
                            <li>{{ __('legal.section6_right2') }}</li>
                            <li>{{ __('legal.section6_right3') }}</li>
                            <li>{{ __('legal.section6_right4') }}</li>
                        </ul>

                        <p>{!! __('legal.section6_requests', ['email' => __('legal.email_address')]) !!}</p>

                        <p>{{ __('legal.section6_more_info') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('legal.section7_title') }}</h2>

                        <p>{{ __('legal.section7_intro') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('legal.section7_purpose1') }}</li>
                            <li>{{ __('legal.section7_purpose2') }}</li>
                            <li>{{ __('legal.section7_purpose3') }}</li>
                            <li>{{ __('legal.section7_purpose4') }}</li>
                        </ul>

                        <p>{!! __('legal.section7_configuration') !!}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('legal.section8_title') }}</h2>

                        <p>{!! __('legal.section8_intro', ['company' => __('legal.company_name')]) !!}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('legal.section8_liability1') }}</li>
                            <li>{{ __('legal.section8_liability2') }}</li>
                            <li>{{ __('legal.section8_liability3') }}</li>
                            <li>{{ __('legal.section8_liability4') }}</li>
                        </ul>

                        <p>{!! __('legal.section8_correction') !!}</p>

                        <p>{{ __('legal.section8_user_responsibility') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('legal.section9_title') }}</h2>

                        <p>{!! __('legal.section9_text', ['company' => __('legal.company_name'), 'url' => route('home')]) !!}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('legal.section10_title') }}</h2>

                        <p>{{ __('legal.section10_applicable_law') }}</p>

                        <p>{{ __('legal.section10_amicable') }}</p>

                        <p>{!! __('legal.section10_odr') !!}</p>

                        <p>{!! __('legal.section10_jurisdiction', ['city' => __('legal.city')]) !!}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('legal.section11_title') }}</h2>

                        <p>{!! __('legal.section11_modifications', ['company' => __('legal.company_name')]) !!}</p>

                        <p>{{ __('legal.section11_recommendation') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('legal.section12_title') }}</h2>

                        <p>
                            <strong>{{ __('legal.company_name') }}</strong><br>
                            {{ __('legal.address') }}<br>
                            <strong>{{ __('legal.phone') }}</strong><br>
                            <a href="mailto:{{ __('legal.email_address') }}">{{ __('legal.email_address') }}</a><br>
                            <a href="{{ route('home') }}">{{ route('home') }}</a>
                        </p>

                        <p>
                            <strong>{{ __('legal.last_update') }}</strong><br>
                            © <strong>{{ __('legal.company_name') }}</strong> – {{ __('legal.all_rights_reserved') }}
                        </p>

                        <figure class="wp-block-image size-full is-resized">
                            <img fetchpriority="high" decoding="async"
                                width="512" height="512"
                                src="/assets/uploads/2026/02/cropped-Porto-Contentores-scaled-1.png"
                                alt="{{ __('legal.company_name') }}"
                                class="wp-image-12724"
                                style="width:401px;height:auto"
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