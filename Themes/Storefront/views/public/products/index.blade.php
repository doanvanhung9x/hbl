@extends('public.layout')

@section('title')
    @if (request()->has('query'))
        {{ trans('storefront::products.search_results_for') }}: "{{ request('query') }}"
    @else
        {{ trans('storefront::products.shop') }}
    @endif
@endsection
@push('css')
@endpush
@section('content')
    <div class="bread">
        <div class="containerx">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@if(!empty($category))  {{ $category->name }} @elseif(request('query')) {{ request('query') }} @endif</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="listproduct" style="min-height: 500px;">
        <div class="containerx d-md-flex d-block" style="padding: 40px 0px;">
            <div class="product mx-1 col-md-8 col-12 h-100 row">
                @if($products->count() > 0)
                    @foreach($products->filter(fn($p) => !empty($p->slug)) as $product)
                        <div class="card">
                            <a href="{{ route('products.show', $product->slug) }}" class="">
                                <img class="card-img-top" src="{{ optional($product->base_image)->path }}" alt="{{ $product->name }}">
                                <div class="card-body">
                                    <h5>{{ $product->name }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
                {{ $products->links() }}
            </div>
            <div class="hotnews col-md-4 col-12 mt-2">
                <a href="{{ route('home') }}"><img src="{{ asset('frontend/images/sptriso-4342.jpg') }}" width="100%"></a>
                @if($posts->count() >0 )
                    <div class="boxnews">
                        <h3 class="py-2">TIN TỨC CẬP NHẬT</h3>
                        <div class="main">
                            <ul>
                                @foreach($posts->filter(fn($p) => !empty($p->slug)) as $post)
                                    <li>
                                        <a href="{{ route('posts.show', $post->slug) }}">
                                            <div class="thum"><img src="{{ optional($post->base_image)->path }}" width="100%"></div>
                                            <p>{{ $post->title }}</p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="videohot mt-5">
                                <iframe width="100%" height="250px" src="https://www.youtube.com/embed/9vFOYOVQAO0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div>
                                    <h5 class="name font-weight-bold;">Giới thiệu về sàn TMĐT Alosuckhoe.vn</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
@push('js')

@endpush
