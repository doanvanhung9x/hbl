@extends('public.layout')

@section('title')
    @if (request()->has('query'))
        Kết quả cho từ khóa : "{{ request('q') }}"
    @endif
@endsection
@push('css')
@endpush
@section('content')
    <div class="bread">
        <div class="containerx">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kết quả cho từ khóa : "{{ request('q') }}"</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="listproduct" style="min-height: 500px;">
        <div class="containerx d-block" style="padding: 40px 0px;">
            @if(!$products->count() > 0 && !$posts->count() > 0)
                <h4>Không tìm thấy nôi dung với từ khóa : "{{ request('q') }}"</h4>
            @endif
            @if($products->count() > 0)
                <h4>Sản phẩm</h4>
                <div class="product mx-1 h-100 mb-3 row">
                    @foreach($products->filter(fn($p) => !empty($p->slug)) as $product)
                        <div class="col-lg-3 col-6">
                            <div class="card">
                                <a href="{{ route('products.show', $product->slug) }}">
                                    <img class="card-img-top" src="{{ optional($product->base_image)->path }}" alt="{{ $product->name }}">
                                    <div class="card-body">
                                        <h5>{{ $product->name }}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            @if($posts->count() > 0)
                <h4>Bài viết</h4>
                <div class="product mx-1 h-100 row">
                    @foreach($posts->filter(fn($post) => !empty($post->slug)) as $post)
                        <div class="col-lg-3 col-6">
                            <div class="card">
                                <a href="{{ route('posts.show', $post->slug) }}">
                                    <img class="card-img-top" src="{{ optional($post->base_image)->path }}" alt="{{ $post->title }}">
                                    <div class="card-body">
                                        <h5>{{ $post->title }}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
@push('js')

@endpush
