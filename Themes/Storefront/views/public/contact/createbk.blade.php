@extends('public.layout')

@section('title', trans('storefront::contact.contact'))

@push('css')
    <style>
        .required, .error-message{
            color: red;
        }

        .form-group{
            margin-bottom: 5px;
        }
    </style>
@endpush()
@section('content')
    <div class="main-content-area">
        <!-- Section: page title -->
        <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="{{ asset('frontend/images/bg/bg1.jpg') }}">
            <div class="container pt-50 pb-50">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title">{{ trans('storefront::custom.home.contact') }}</h2>
                            <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                                <div class="breadcrumbs">
                                    <span><a href="{{ route('home') }}" rel="{{ trans('storefront::custom.home.home') }}">{{ trans('storefront::custom.home.home') }}</a></span>
                                    <span><i class="fa fa-angle-right"></i></span>
                                    <span><a href="javascript:void(0)">{{ trans('storefront::custom.home.contact') }}</a></span>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container pt-lg-90 pb-60 pb-lg-30">
                <div class="row">
                    @if(session('success'))
                    <div class="alert alert-success" role="alert" style="margin: 0px 17px;">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="col-md-8">
                        <div class="box-wrapper contact-left clearfix">
                            <div class="col-md-12">
                                <div class="box-header">
                                    <h4>{{ trans('storefront::contact.send_us_a_message') }}</h4>
                                </div>
                                <form method="POST" action="{{ route('contacts.store') }}" class="clearfix">
                                    @csrf

                                    <div class="form-group {{ $errors->has('fullname') ? 'has-error': '' }}">
                                        <label for="fullname">{{ trans('contact::attributes.fullname') }}<span class="required">*</span></label>
                                        <input type="text" name="fullname" class="form-control" id="fullname" value="{{ old('fullname') }}">

                                        {!! $errors->first('fullname', '<span class="error-message">:message</span>') !!}
                                    </div>

                                    <div class="form-group {{ $errors->has('phone') ? 'has-error': '' }}">
                                        <label for="phone">{{ trans('contact::attributes.phone') }}<span class="required">*</span></label>
                                        <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone') }}">

                                        {!! $errors->first('phone', '<span class="error-message">:message</span>') !!}
                                    </div>

                                    <div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
                                        <label for="email">{{ trans('contact::attributes.email') }}<span class="required">*</span></label>
                                        <input type="text" name="email" class="form-control" id="email" value="{{ old('email') }}">

                                        {!! $errors->first('email', '<span class="error-message">:message</span>') !!}
                                    </div>

                                    <div class="form-group {{ $errors->has('town') ? 'has-error': '' }}">
                                        <label for="town">{{ trans('contact::attributes.town') }}</label>
                                        <select name="town" id="town" class="form-control">
                                            @foreach($countries as $key => $value)
                                                <option value="{{ $value }}" @if(old('town') == $value) selected @endif>{{ $value }}</option>
                                            @endforeach
                                        </select>
                                        {!! $errors->first('town', '<span class="error-message">:message</span>') !!}
                                    </div>

                                    <div class="form-group {{ $errors->has('you_are_a') ? 'has-error': '' }}">
                                        <label for="you_are_a">{{ trans('contact::attributes.you_are_a') }}</label>
                                        <select name="you_are_a" id="you_are_a" class="form-control">
                                            <option value="{{ trans('contact::attributes.one') }}" @if(old('you_are_a') == trans('contact::attributes.one')) selected @endif>{{ trans('contact::attributes.one') }}</option>
                                            <option value="{{ trans('contact::attributes.two') }}" @if(old('you_are_a') == trans('contact::attributes.two')) selected @endif>{{ trans('contact::attributes.two') }}</option>
                                            <option value="{{ trans('contact::attributes.other') }}" @if(old('you_are_a') == trans('contact::attributes.other')) selected @endif>{{ trans('contact::attributes.other') }}</option>
                                        </select>
                                        {!! $errors->first('you_are_a', '<span class="error-message">:message</span>') !!}
                                    </div>

                                    <div class="form-group {{ $errors->has('body') ? 'has-error': '' }}">
                                        <label for="body" style="display: block;">{{ trans('contact::attributes.body') }}<span class="required">*</span></label>
                                        <textarea name="body" cols="91%" rows="5" id="body">{{ old('body') }}</textarea>

                                        {!! $errors->first('body', '<span class="error-message">:message</span>') !!}
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-submit pull-right" data-loading>
                                        {{ trans('storefront::contact.submit') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-right clearfix">
                            <div class="contact-info">
                                <div class="contact-text">
                                    <h4>{{ trans('storefront::contact.phone') }}</h4>
                                    <span>{{ setting('store_phone') }}</span>
                                </div>
                            </div>

                            <div class="contact-info">
                                <div class="contact-text">
                                    <h4>{{ trans('storefront::contact.email') }}</h4>
                                    <span>{{ setting('store_email') }}</span>
                                </div>
                            </div>

                            <div class="contact-info">
                                <div class="contact-text">
                                    <h4>{{ trans('contact::attributes.address') }}</h4>
                                    <span>{{ setting('storefront_footer_address') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
