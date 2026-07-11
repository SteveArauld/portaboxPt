@extends('layouts.app')

@section('title', __('refund.page_title'))

@push('styles')

@endpush
@section('body_class', 'wp-singular page-template-default page page-id-12301 wp-theme-merto theme-merto woocommerce-js wide header-v1 product-label-rectangle product-hover-style-v2 product-border-radius vertical-menu-fixed ts_desktop elementor-default elementor-kit-10348 e--ua-blink e--ua-chrome e--ua-webkit cht-in-desktop cht-landscape')

@section('content')

    <div id="main" class="wrapper ">
        <div class="breadcrumb-title-wrapper breadcrumb-v3">
            <div class="container">
                <div class="breadcrumb-title">
                    <h1 class="heading-title page-title entry-title ">{{ __('refund.page_title') }}</h1>
                    <div class="ts-breadcrumbs breadcrumbs">
                        <div class="breadcrumbs-container">
                            <a href="{{ route('home') }}">{{ __('refund.breadcrumb_home') }}</a>
                            <span class="brn_arrow">/</span>
                            <span class="current">{{ __('refund.breadcrumb_current') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-container show_breadcrumb_v3 no-sidebar">

            <div id="main-content">
                <div id="primary" class="site-content">
                    <article id="post-13" class="post-13 page type-page status-publish hentry">

                        <h2 class="wp-block-heading">{{ __('refund.section1.title') }}</h2>

                        <p>
                            {{ __('refund.section1.text1') }} <strong>{{ __('refund.company_name') }}</strong>,
                            {{ __('refund.section1.text2') }}<br>
                            {{ __('refund.section1.text3') }}
                        </p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('refund.section2.title') }}</h2>

                        <h3 class="wp-block-heading">{{ __('refund.section2.subtitle1') }}</h3>

                        <p>{{ __('refund.section2.text1') }}</p>

                        <p>{{ __('refund.section2.text2') }}</p>

                        <p>{{ __('refund.section2.text3') }}<br>{{ __('refund.section2.text4') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h3 class="wp-block-heading">{{ __('refund.section2.subtitle2') }}</h3>

                        <p>{{ __('refund.section1.text1') }} <strong>{{ __('refund.company_name') }}</strong> {{ __('refund.section2.text5') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('refund.section2.list1_item1') }}</li>
                            <li>{{ __('refund.section2.list1_item2') }}</li>
                        </ul>

                        <p>{{ __('refund.section2.text6') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h3 class="wp-block-heading">{{ __('refund.section2.subtitle3') }}</h3>

                        <p>{{ __('refund.section2.text7') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('refund.section2.list2_item1') }}</li>
                            <li>{{ __('refund.section2.list2_item2') }}</li>
                            <li>{{ __('refund.section2.list2_item3') }}</li>
                        </ul>

                        <p>{{ __('refund.section2.text8') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('refund.section2.list3_item1') }}</li>
                            <li>{{ __('refund.section2.list3_item2') }}</li>
                        </ul>

                        <p>{{ __('refund.section2.text9') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('refund.section3.title') }}</h2>

                        <p>{{ __('refund.section3.text1') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('refund.section3.list1_item1') }}</li>
                            <li>{{ __('refund.section3.list1_item2') }}</li>
                            <li>{{ __('refund.section3.list1_item3') }}</li>
                            <li>{{ __('refund.section3.list1_item4') }}</li>
                        </ul>

                        <p>{{ __('refund.section3.text2') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('refund.section4.title') }}</h2>

                        <h3 class="wp-block-heading">{{ __('refund.section4.subtitle1') }}</h3>

                        <p>{{ __('refund.section4.text1') }}</p>
                        <p>{{ __('refund.section4.text2') }}</p>

                        <h3 class="wp-block-heading">{{ __('refund.section4.subtitle2') }}</h3>

                        <p>{{ __('refund.section4.text3') }}</p>
                        <ul class="wp-block-list">
                            <li>{{ __('refund.section4.text4') }} <strong>14</strong> {{ __('refund.section4.text5') }}</li>
                        </ul>

                        <h3 class="wp-block-heading">{{ __('refund.section4.subtitle3') }}</h3>

                        <ul class="wp-block-list">
                            <li><strong>{{ __('refund.section4.list1_item1') }}</strong> {{ __('refund.section4.list1_item1_text') }} <strong>{{ __('refund.company_name') }}</strong></li>
                            <li><strong>{{ __('refund.section4.list1_item2') }}</strong> {{ __('refund.section4.list1_item2_text') }}</li>
                        </ul>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('refund.section5.title') }}</h2>

                        <p><strong>{{ __('refund.company_name') }}</strong> {{ __('refund.section5.text1') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('refund.section5.list1_item1') }}</li>
                            <li>{{ __('refund.section5.list1_item2') }}</li>
                            <li>{{ __('refund.section5.list1_item3') }}</li>
                            <li>{{ __('refund.section5.list1_item4') }}</li>
                            <li>{{ __('refund.section5.list1_item5') }}</li>
                            <li>{{ __('refund.section5.list1_item6') }}</li>
                        </ul>

                        <p>{{ __('refund.section5.text2') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('refund.section6.title') }}</h2>

                        <h3 class="wp-block-heading">{{ __('refund.section6.subtitle1') }}</h3>

                        <p>{{ __('refund.section6.text1') }}<br> <strong><a href="mailto:{{ __('contato.email_address') }}">{{ __('contato.email_address') }}</a></strong></p>

                        <p>{{ __('refund.section6.text2') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('refund.section6.list1_item1') }}</li>
                            <li>{{ __('refund.section6.list1_item2') }}</li>
                            <li>{{ __('refund.section6.list1_item3') }}</li>
                            <li>{{ __('refund.section6.list1_item4') }}</li>
                        </ul>

                        <p>{{ __('refund.section6.text3') }} <strong>48</strong> {{ __('refund.section6.text4') }} {{ __('refund.section6.text5') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h3 class="wp-block-heading">{{ __('refund.section6.subtitle2') }}</h3>

                        <p>{{ __('refund.section6.text6') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('refund.section6.list2_item1') }}</li>
                            <li>{{ __('refund.section6.list2_item2') }}</li>
                        </ul>

                        <p><strong>{{ __('refund.section6.text7') }}</strong></p>
                        <p><strong>{{ __('refund.company_name') }}</strong><br> {{ __('contato.address_without_prefix') }}</p>

                        <p>{{ __('refund.section6.text8') }} <strong>14</strong> {{ __('refund.section6.text9') }} {{ __('refund.section6.text10') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h3 class="wp-block-heading">{{ __('refund.section6.subtitle3') }}</h3>

                        <p>{{ __('refund.section6.text11') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('refund.section6.list3_item1') }}</li>
                            <li>{{ __('refund.section6.list3_item2') }} <strong>7</strong> {{ __('refund.section6.text12') }}</li>
                        </ul>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('refund.section7.title') }}</h2>

                        <p>{{ __('refund.section1.text1') }} <strong>{{ __('refund.company_name') }}</strong>:</p>

                        <ul class="wp-block-list">
                            <li>{{ __('refund.section7.list1_item1') }}</li>
                            <li>{{ __('refund.section7.list1_item2') }}</li>
                            <li>{{ __('refund.section7.list1_item3') }}</li>
                        </ul>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('refund.section8.title') }}</h2>

                        <p>{{ __('refund.section8.text1') }}</p>

                        <p>
                            <strong><a href="mailto:{{ __('contato.email_address') }}">{{ __('contato.email_address') }}</a></strong><br>
                            <strong>{{ __('refund.section8.whatsapp') }}</strong> {{ __('contato.phone_number') }}<br>
                            <strong>{{ __('refund.section8.address') }}</strong> {{ __('contato.address_without_prefix') }}<br>
                            <strong>{{ __('refund.section8.hours') }}</strong> {{ __('refund.section8.hours_text') }}
                        </p>

                        <p>{{ __('refund.section8.text2') }}</p>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <h2 class="wp-block-heading">{{ __('refund.section9.title') }}</h2>

                        <p>{{ __('refund.section9.text1') }}</p>

                        <ul class="wp-block-list">
                            <li>{{ __('refund.section9.list1_item1') }}</li>
                            <li>{{ __('refund.section9.list1_item2') }}</li>
                            <li>{{ __('refund.section9.list1_item3') }}</li>
                            <li>{{ __('refund.section9.list1_item4') }}</li>
                            <li>{{ __('refund.section9.list1_item5') }}</li>
                            <li>{{ __('refund.section9.list1_item6') }}</li>
                        </ul>

                        <hr class="wp-block-separator has-alpha-channel-opacity">

                        <p>
                            <strong>{{ __('refund.last_update') }}</strong> {{ __('refund.date') }}<br>
                            © <strong>{{ __('refund.company_name') }}</strong> – {{ __('refund.copyright') }}
                        </p>

                        <figure class="wp-block-image size-full is-resized">
                            <img fetchpriority="high" decoding="async"
                                 width="512" height="512"
                                 src="/assets/uploads/2026/02/cropped-Porto-Contentores-scaled-1.png"
                                 alt="{{ __('refund.company_name') }}" class="wp-image-12724"
                                 style="width:251px;height:auto"
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