@extends('public.layout')

@section('title')
    {{ trans('storefront::products.shop') }}
@endsection

@push('css')
    <style>
        .entry-header{
            min-height: 226px;
            max-height: 226px;
            overflow: hidden;
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
                            <h2 class="title">@if(!empty($category))  {{ $category->name }} @elseif(request('query')) {{ request('query') }} @endif</h2>
                            <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                                <div class="breadcrumbs">
                                    <span><a href="{{ route('home') }}" rel="{{ trans('storefront::custom.home.home') }}">{{ trans('storefront::custom.home.home') }}</a></span>
                                    @if(!empty($category))
                                        <span><i class="fa fa-angle-right"></i></span>
                                        <span><a href="javascript:void(0)">{{ $category->name }}</a></span>
                                    @elseif(request('query'))
                                        <span><i class="fa fa-angle-right"></i></span>
                                        <span><a href="javascript:void(0)">{{ request('query') }}</a></span>
                                    @endif
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
                    <div class="col-md-9 sm-pull-none">
                        <div class="blog-posts">
                            @if($posts->count() > 0)
                                @foreach($posts->filter(fn($p) => !empty($p->slug)) as $post)
                                    <article class="post clearfix mb-30 border-1px">
                                        <div class="row">
                                            <div class="col">
                                                <div class="entry-header">
                                                    <div class="post-thumb thumb">
                                                        <img src="{{ optional($post->base_image)->path }}" alt="{{ $post->title }}" class="img-responsive img-fullwidth">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="entry-content p-10">
                                                    <h4 class="entry-title mb-0"><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h4>
                                                    <p class="mt-10">{{ $post->short_description }}</p>
                                                    <a href="{{ route('posts.show', $post->slug) }}" class="btn btn-plain-text-with-arrow">{{ trans('storefront::custom.multi.read_more') }}</a>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            @endif
                            <nav>
                                {!! $posts->links() !!}
                            </nav>
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

                            <div class="widget">
                                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">{{ trans('storefront::custom.multi.post_new') }}</h4>
                                <div class="latest-posts">
                                    @foreach($postNews->filter(fn($pNew) => !empty($pNew->slug)) as $postNew)
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
                            <div class="widget widget_text">
                                <div class="textwidget">
                                    <div class="section-typo-light bg-theme-colored1 text-center mb-md-40 p-30 pt-40 pb-40"> <img class="size-full wp-image-800 aligncenter" src="{{ asset('frontend/images/headphone-128.png') }}" width="128" height="128" />
                                        <h4 style="text-align: center;">{{ trans('storefront::custom.multi.help') }}</h4>
                                        <h5 style="text-align: center;">+{{ setting('store_phone') }}</h5>
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
