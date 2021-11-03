@extends('public.layout')

@section('title', trans('storefront::contact.contact'))

@push('css')
    <style>
        .error-message{
            color: red;
        }
    </style>
@endpush()
@section('content')
    <div class="bread">
        <div class="containerx">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">TIN NỔI BẬT</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--endbreadcrumb-->

    <!---contact-->
    <div class="contactshop">
        <div class="py-5">
            <h3 class="py-2">LIÊN HỆ VỚI CHÚNG TÔI</h3>
        </div>
        <div class="address d-md-flex d-block">
            <div class="col-md-6 col-12 left">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14900.88530349872!2d105.8317826!3d20.9837634!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeae8932e8c866b12!2zQWxvc3Vja2hvZS52biAtIFPDoG4gdGjGsMahbmcgbeG6oWkgxJFp4buHbiB04butIGNodXnDqm4gY3VuZyBj4bqlcCBz4bqjbiBwaOG6qW0gJiBk4buLY2ggduG7pSBz4bupYyBraOG7j2UgY-G7p2EgSOG7mWkgR2nDoW8gZOG7pWMgY2jEg20gc8OzYyBz4bupYyBraOG7j2UgY-G7mW5nIMSR4buTbmcgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1635915778560!5m2!1svi!2s" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-md-6 col-12 right my-md-0 my-5">
                <div class="company p-5">
                    <h4><b>{{ setting('store_name') }}</b></h4>
                    <span>{{ trans('storefront::custom.home.about_us') }}</span><br>
                    <span><b>Hotline:</b> {{ setting('store_phone') }}</span><br>
                    <span>Email: {{ setting('store_email') }}</span><br>
                    <span>{{ trans('storefront::custom.home.description') }}</span><br>
                </div>
            </div>
        </div>
    </div>

    <div class="containerx my-5">
        <div class="form  d-flex justify-content-center">
            <div class="col-md-6 col-12 px-md-0 px-2" >
                <h4>{{ trans('storefront::contact.send_us_a_message') }}</h4>
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('contacts.store') }}">
                    @csrf
                    <div class="form-group {{ $errors->has('fullname') ? 'has-error': '' }} mb-3 col-md-12">
                        <label for="fullname">{{ trans('contact::attributes.fullname') }}<span class="required">*</span></label>
                        <input type="text" name="fullname" class="form-control" id="fullname" value="{{ old('fullname') }}">

                        {!! $errors->first('fullname', '<span class="error-message">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('phone') ? 'has-error': '' }} mb-3 col-md-12">
                        <label for="phone">{{ trans('contact::attributes.phone') }}<span class="required">*</span></label>
                        <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone') }}">

                        {!! $errors->first('phone', '<span class="error-message">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('email') ? 'has-error': '' }} mb-3 col-md-12">
                        <label for="email">{{ trans('contact::attributes.email') }}<span class="required">*</span></label>
                        <input type="text" name="email" class="form-control" id="email" value="{{ old('email') }}">

                        {!! $errors->first('email', '<span class="error-message">:message</span>') !!}
                    </div>

{{--                    <div class="form-group {{ $errors->has('town') ? 'has-error': '' }} mb-3 col-md-12">--}}
{{--                        <label for="town">{{ trans('contact::attributes.town') }}</label>--}}
{{--                        <select name="town" id="town" class="form-control">--}}
{{--                            @foreach($countries as $key => $value)--}}
{{--                                <option value="{{ $value }}" @if(old('town') == $value) selected @endif>{{ $value }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                        {!! $errors->first('town', '<span class="error-message">:message</span>') !!}--}}
{{--                    </div>--}}

{{--                    <div class="form-group {{ $errors->has('you_are_a') ? 'has-error': '' }} mb-3 col-md-12">--}}
{{--                        <label for="you_are_a">{{ trans('contact::attributes.you_are_a') }}</label>--}}
{{--                        <select name="you_are_a" id="you_are_a" class="form-control">--}}
{{--                            <option value="{{ trans('contact::attributes.one') }}" @if(old('you_are_a') == trans('contact::attributes.one')) selected @endif>{{ trans('contact::attributes.one') }}</option>--}}
{{--                            <option value="{{ trans('contact::attributes.two') }}" @if(old('you_are_a') == trans('contact::attributes.two')) selected @endif>{{ trans('contact::attributes.two') }}</option>--}}
{{--                            <option value="{{ trans('contact::attributes.other') }}" @if(old('you_are_a') == trans('contact::attributes.other')) selected @endif>{{ trans('contact::attributes.other') }}</option>--}}
{{--                        </select>--}}
{{--                        {!! $errors->first('you_are_a', '<span class="error-message">:message</span>') !!}--}}
{{--                    </div>--}}

                    <div class="form-group {{ $errors->has('body') ? 'has-error': '' }} mb-3 col-md-12">
                        <label for="body" style="display: block;">{{ trans('contact::attributes.body') }}<span class="required">*</span></label>
                        <textarea name="body" cols="91%" rows="5" id="body">{{ old('body') }}</textarea>

                        {!! $errors->first('body', '<span class="error-message">:message</span>') !!}
                    </div>

                    <button  type="submit" class="btn btn-feedback">Gửi đi</button>
                </form>
            </div>
        </div>
    </div>

@endsection
