@extends('public.layout')

@section('title')
    {{ trans('storefront::products.shop') }}
@endsection
@push('css')
    <style>
      </style>
@endpush
@section('content')
    <div class="bread">
        <div class="containerx">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="listproduct" style="min-height: 500px; padding: 40px 0px;">
        <div class="containerx d-md-flex d-block justify-content-between">
            <div class="hotnews px-2 col-md-7 col-12 h-100 row">
               {!! $post->body !!}
            </div>
            <div class="hotnews col-md-4 col-12 mt-2">
                <a href="{{ route('home') }}"><img src="{{ asset('frontend/images/sptriso-4342.jpg') }}" width="100%"></a>
                @if($postNews->count() > 0)
                    <div class="boxnews">
                        <h3 class="py-2">TIN TỨC MỚI</h3>
                        <div class="main">
                            <ul>
                                @foreach($postNews->filter(fn($pNew) => !empty($pNew->slug)) as $postNew)
                                    <li>
                                        <a href="{{ route('posts.show', $postNew->slug) }}">
                                            <div class="thum"><img src="{{ optional($postNew->base_image)->path }}" width="100%"></div>
                                            <p>{{ $postNew->title }}</p>
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
