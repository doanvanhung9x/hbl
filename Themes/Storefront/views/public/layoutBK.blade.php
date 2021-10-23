<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-mobile nivo-lightbox-notouch">
<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="{{ trans('storefront::custom.description') }}"/>
    <meta name="keywords" content="{{ trans('storefront::custom.keyword') }}"/>
    <meta name="author" content="{{ setting('store_name') }}"/>
    <title>
        @hasSection('title')
            @yield('title') - {{ setting('store_name') }}
        @else
            {{ setting('store_name') }}
        @endif
    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('meta')
    <link rel="stylesheet" href="{{ asset('frontend/style/swiper-bundle.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('frontend/style/fancybox.css')}}"/>
    <link href="{{ asset('frontend/style/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/style/fontawesome.css')}}" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('frontend/style/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/owlcarousel/assets/owl.theme.default.min.css') }}">
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <link rel="shortcut icon" href="{{ $favicon }}" />
    @stack('css')
</head>
<body class="tm-container-1300px has-side-panel side-panel-right">
    <div class="side-panel-body-overlay"></div>
    <div id="side-panel-container" class="dark" data-tm-bg-img="images/side-push-bg.jpg">
        <div class="side-panel-wrap">
            <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="{{ route('home') }}"><i class="fa fa-times side-panel-trigger-icon"></i></a></div>
            <img class="logo mb-50" src="{{ $headerLogo }}" alt="Logo">
            <p>{{ setting('store_name') }}</p>
            <div class="widget">
                <h5 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">{{ trans('storefront::custom.home.contact_info') }}</h5>
                <div class="tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
                    <ul>
                        <li class="contact-phone">
                            <div class="icon"><i class="flaticon-contact-042-phone-1"></i></div>
                            <div class="text"><a href="tel:+510-455-6735">{{ setting('store_phone') }}</a></div>
                        </li>
                        <li class="contact-email">
                            <div class="icon"><i class="flaticon-contact-043-email-1"></i></div>
                            <div class="text"><a href="mailto:info@yourdomain.com">{{ setting('store_email') }}</a></div>
                        </li>
                        <li class="contact-address">
                            <div class="icon"><i class="flaticon-contact-047-location"></i></div>
                            <div class="text">{{ setting('storefront_footer_address') }}</div>
                        </li>
                    </ul>
                </div>
                <h5 class="widget-title widget-title-line-bottom line-bottom-theme-colored1 mt-3">{{ trans('storefront::custom.home.common') }}</h5>
                @if (count(setting('supported_currencies')) > 1)
                    <select class="top-nav-select custom-select-white mb-3" onchange="location = this.value">
                        @foreach (setting('supported_currencies') as $currency)
                            <option value="{{ route('current_currency.store', ['currency' => $currency]) }}" {{ currency() === $currency ? 'selected' : '' }}>
                                {{ $currency }}
                            </option>
                        @endforeach
                    </select>
                @endif

                @if (count(supported_locales()) > 1)
                    <select class="top-nav-select custom-select-white" onchange="location = this.value">
                        @foreach (supported_locales() as $locale => $language)
                            <option value="{{ localized_url($locale) }}" {{ locale() === $locale ? 'selected' : '' }}>
                                {{ $language['name'] }}
                            </option>
                        @endforeach
                    </select>
                @endif
            </div>
        </div>
    </div>
    <div id="wrapper" class="clearfix">
        @include('public.partials.header')
        @yield('content')
        @include('public.partials.footer')
    </div>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/js.js') }}" type="text/javascript"></script>
    @stack('js')
</body>
</html>
