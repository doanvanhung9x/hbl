@extends('public.layout')

@section('title')
    {{ trans('storefront::products.shop') }}
@endsection
@push('css')
    <style>
        .post-detail img{
            width: 100%;
            height: auto;
        }
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
            <div class="hotnews px-2 col-md-9 col-12 h-100 row">
                <div class="post-detail">
                    {!! $post->body !!}
                </div>
                <div class="news-social">
                    Chia sẻ với:
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('posts.show', $post->slug) }}"><i class="fab fa-facebook-square"></i></a>
                </div>
            </div>
            <div class="hotnews col-md-3 col-12 mt-2">
                @if($postNews->count() > 0)
                    <div class="boxnews" style="border: none;">
                        <h4 class="py-2">TIN TỨC MỚI</h4>
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
{{--                            <div class="videohot mt-5">--}}
{{--                                <iframe width="100%" height="250px" src="https://www.youtube.com/embed/9vFOYOVQAO0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                                <div>--}}
{{--                                    <h5 class="name font-weight-bold;">Giới thiệu về sàn TMĐT Alosuckhoe.vn</h5>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
