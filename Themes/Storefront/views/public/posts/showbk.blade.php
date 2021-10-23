@extends('public.layout')

@section('title')
    {{ trans('storefront::products.shop') }}
@endsection
@push('css')
    <style>
        .post p{
            margin-bottom: 10px;
        }

        .post strong{
            font-weight: bold;
        }
    </style>
@endpush
@section('content')
    <div class="main-content-area">
        <!-- Section: page title -->
        <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="{{ asset('frontend/images/bg/bg1.jpg') }}">
            <div class="container pt-50 pb-50">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title">{{ $post->title }}</h2>
                            <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                                <div class="breadcrumbs">
                                    <span><a href="{{ route('home') }}" rel="{{ trans('storefront::custom.home.home') }}">{{ trans('storefront::custom.home.home') }}</a></span>
                                    <span><i class="fa fa-angle-right"></i></span>
                                    <span><a href="javascript:void(0)">{{ $post->title }}</a></span>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container mt-30 mb-30 pt-30 pb-30">
                <div class="row">
                    <div class="col-md-9">
                        <div class="blog-posts single-post">
                            <article class="post clearfix mb-0">
                                {!! $post->body !!}
                            </article>
                            <div class="tagline style">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="share flip">
                                            <p><i class="fa fa-share-alt text-theme-colored1"></i>
                                                {{ trans('storefront::custom.multi.share') }}:
                                                <a class="social-link" href="https://www.facebook.com/sharer/sharer.php?u={{ route('posts.show', $post->slug) }}" ><i class="fab fa-facebook"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar sidebar-right mt-sm-30">
                            <div class="widget widget_categories">
                                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">{{ trans('storefront::custom.multi.category') }}</h4>
                                @if($categories->count() > 0)
                                    <ul>
                                        @foreach($categories as $category)
                                            <li><a href="{{ $category->url() }}">{{ $category->name }}</a>
{{--                                                @if($category->count() > 0)--}}
{{--                                                    <ul>--}}
{{--                                                        @foreach($category->children as $childrenCategory)--}}
{{--                                                            <li><a href="{{ $childrenCategory->url() }}" class="link">{{ $childrenCategory->name }}</a></li>--}}
{{--                                                        @endforeach--}}
{{--                                                    </ul>--}}
{{--                                                @endif--}}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        @if($postNews)
                            <div class="widget">
                                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">{{ trans('storefront::custom.multi.post_new') }}</h4>
                                <div class="latest-posts">
                                    @foreach($postNews->filter(fn($p) => !empty($p->slug)) as $postNew)
                                        <article class="post clearfix pb-0 mb-20">
                                            <a class="post-thumb" href="{{ route('posts.show', $postNew->slug) }}"><img src="{{ optional($postNew->base_image)->path }}" alt="{{ $postNew->title }}"></a>
                                            <div class="post-right">
                                                <h5 class="post-title mt-0"><a href="{{ route('posts.show', $postNew->slug) }}">{{ $postNew->title }}</a></h5>
                                                <span class="post-date">
                                                <time class="entry-date" datetime="{{ $postNew->created_at }}">{{ $postNew->created_at }}</time>
                                              </span>
                                            </div>
                                        </article>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                            <div class="widget widget_text">
                                <div class="textwidget">
                                    <div class="section-typo-light bg-theme-colored1 text-center mb-md-40 p-30 pt-40 pb-40"> <img class="size-full wp-image-800 aligncenter" src="{{ asset('frontend/images/headphone-128.png') }}" width="128" height="128" />
                                        <h4 style="text-align: center;">{{ trans('storefront::custom.multi.help') }}</h4>
                                        <h5 style="text-align: center;">{{ setting('store_phone') }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
