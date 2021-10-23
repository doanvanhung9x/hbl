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
    <link href="{{ asset('frontend/style/bootstrap.min.css')}}" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/style/fontawesome.css')}}" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('frontend/style/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/owlcarousel/assets/owl.theme.default.min.css') }}">
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <link rel="shortcut icon" href="{{ $favicon }}" />
    @stack('css')
</head>
<body>
    @include('public.partials.header')
    @yield('content')
    @include('public.partials.footer')
    <script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/fancybox.umd.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/jquery-3.2.1.slim.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/js.js') }}" type="text/javascript"></script>
    @stack('js')
</body>
</html>
