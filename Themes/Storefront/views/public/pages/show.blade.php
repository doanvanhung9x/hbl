@extends('public.layout')

@section('title', $page->name)

@push('meta')
    <meta name="title" content="{{ $page->meta->meta_title }}">
    <meta name="keywords" content="{{ implode(',', $page->meta->meta_keywords) }}">
    <meta name="description" content="{{ $page->meta->meta_description }}">
    <meta property="og:title" content="{{ $page->meta->meta_title }}">
    <meta property="og:description" content="{{ $page->meta->meta_description }}">
@endpush

@section('content')
    <div class="bread">
        <div class="containerx">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $page->name }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="post" style="min-height: 500px; padding: 40px 0px;">
        <div class="containerx">
            {!! $page->body !!}
        </div>
    </div>
@endsection

@push('js')

@endpush
