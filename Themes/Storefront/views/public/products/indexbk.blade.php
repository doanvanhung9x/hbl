@extends('public.layout')

@section('title')
    @if (request()->has('query'))
        {{ trans('storefront::products.search_results_for') }}: "{{ request('query') }}"
    @else
        {{ trans('storefront::products.shop') }}
    @endif
@endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/range-price.css') }}"/>
@endpush
@section('content')
    <div class="main-content-area">
        <!-- Section: page title -->
        <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="{{ asset('frontend/images/bg/bg1.jpg') }}">
            <div class="container pt-50 pb-50">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title">@if(!empty($category))  {{ $category->name }} @elseif(request('query')) {{ request('query') }} @endif</h2>
                            <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                                <div class="breadcrumbs">
                                    <span><a href="{{ route('home') }}" rel="{{ trans('storefront::custom.home.home') }}">{{ trans('storefront::custom.home.home') }}</a></span>
                                    <span><i class="fa fa-angle-right"></i></span>
                                    <span><a href="javascript:void(0)">@if(!empty($category))  {{ $category->name }} @elseif(request('query')) {{ request('query') }} @endif</a></span>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-9">
                            <div id="gallery-holder-618422" class="isotope-layout grid-3 gutter-15 clearfix lightgallery-lightbox">
                                <div class="isotope-layout-inner">
                                    @if($products->count() > 0)
                                        @foreach($products->filter(fn($p) => !empty($p->slug)) as $product)
                                            <div class="isotope-item">
                                                <div class="isotope-item-inner">
                                                    <div class="product">
                                                        <div class="product-header">
{{--                                                            <span class="onsale">{{ trans('storefront::custom.multi.sale') }} !</span>--}}
                                                            <div class="thumb image-swap">
                                                                <a href="{{ route('products.show', $product->slug) }}"><img src="{{ optional($product->base_image)->path }}" class="product-main-image img-responsive img-fullwidth" width="300" height="300" alt="product"></a>
                                                                <a href="{{ route('products.show', $product->slug) }}"><img src="{{ optional($product->base_image)->path }}" class="product-hover-image img-responsive img-fullwidth" alt="product"></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-details">
                                                            <h5 class="product-title"><a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a></h5>
{{--                                                            <span class="price">--}}
{{--                                                                {{ product_price($product) }}--}}
{{--                                                            </span>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        @include('public.products.partials.filter')
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('js')

@endpush
