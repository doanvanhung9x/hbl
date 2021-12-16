@extends('public.layout')

@section('title', $product->name)

@push('meta')
    <meta name="title" content="{{ $product->meta->meta_title }}">
    <meta name="keywords" content="{{ implode(',', $product->meta->meta_keywords) }}">
    <meta name="description" content="{{ $product->meta->meta_description }}">
    <meta property="og:title" content="{{ $product->meta->meta_title }}">
    <meta property="og:description" content="{{ $product->meta->meta_description }}">
    <meta property="og:image" content="{{ $product->baseImage->path }}">
@endpush

@section('content')
    <div class="bread">
        <div class="containerx">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="listproduct" style="min-height: 500px; padding: 40px 0px;">
        <div class="containerx d-md-flex d-block justify-content-between">
            <div class="detailproduct px-2 col-md-9 col-12 h-100 row">
                <h4 style="padding-bottom: 15px;">{{ $product->name }}</h4>
                <img src="{{ optional($product->base_image)->path }}"/>
                <div class="py-4">
                    {!! $product->description !!}
                </div>
            </div>
            <div class="hotnews col-md-3 col-12 mt-2">
                @if($posts->count() >0 )
                <div class="boxnews" style="border: none;">
                    <h4 class="py-2">TIN TỨC CẬP NHẬT</h4>
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
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
