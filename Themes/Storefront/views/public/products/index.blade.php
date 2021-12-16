@extends('public.layout')

@section('title')
    @if (request()->has('query'))
        {{ trans('storefront::products.search_results_for') }}: "{{ request('query') }}"
    @else
        {{ trans('storefront::products.shop') }}
    @endif
@endsection
@push('css')
    <style>
        @media screen and (max-width: 992px){
            .card {
                width: 100%;
            }
        }
    </style>
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
            <div class="product mx-1 h-100 row">
                @if($products->count() > 0)
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
                @endif
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
@push('js')

@endpush
