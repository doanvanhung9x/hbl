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
    <link rel="stylesheet" href="{{ asset('frontend/style/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/style/fontawesome.css')}}" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('frontend/style/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/owlcarousel/assets/owl.theme.default.min.css') }}">
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <meta property="og:image"
          content="{{ asset('frontend/images/des.png') }}">
    <link rel="shortcut icon" href="{{ $favicon }}" />
    @stack('css')
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PQ8QWZ7');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQ8QWZ7"
                      height="0" width="0" style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('public.partials.header')
    @yield('content')
    @include('public.partials.footer')
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/fancybox.umd.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/jquery-3.2.1.slim.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/js.js') }}" type="text/javascript"></script>
    @stack('js')

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>
</html>
