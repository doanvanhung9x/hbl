<footer class="py-4 px-2">
    <div class="containerx d-sm-flex d-block">
        <div class="col-sm-3 col-12 info px-2">
            <h6><b>{{ setting('store_name') }}</b></h6>
            <span><b>Hotline:</b> {{ setting('store_phone') }} </span><br>
            <span><b>Email:</b> {{ setting('store_email') }}</span><br>
            <span>{{ trans('storefront::custom.home.about_us') }}</span><br>
            <span>{{ trans('storefront::custom.home.description') }}</span><br>
        </div>
        <div class="col-12 col-sm-3 fbox px-2">
            <h6><b>{{ trans('storefront::custom.home.more_information') }}</b></h6>
            <ul>
                <li><a href="{{ route('home') }}">{{ trans('storefront::custom.home.home') }}</a></li>
                <li><a href="{{ route('home') }}/lien-he">{{ trans('storefront::custom.home.contact') }}</a></li>
                <li><a href="{{ route('home') }}/gioi-thieu">{{ trans('storefront::custom.home.introduce') }}</a></li>
            </ul>
        </div>
        <div class="col-12 col-sm-3 fbox px-2">
            <h6><b>Dịch vụ</b></h6>
            <ul>
                @if ($footerMenu->isNotEmpty())
                    @foreach ($footerMenu as $menuItem)
                        <li><a href="{{ $menuItem->url() }}">{{ $menuItem->name }}</a></li>
                    @endforeach
                @endif
            </ul>
        </div>
        <div class=" col-12 col-sm-3 connect px-2">
            <div>
                @if (!empty($headerLogo))
                    <img src="{{ $headerLogo }}" width="100%" alt="{{ setting('store_name') }}"/>
                @endif
            </div>
        </div>
    </div>
</footer>

<div class="copyright py-2 text-center">
    {!! $copyrightText !!}.<br/>
    <i>Thực phẩm này không phải là thuốc và không có tác dụng thay thế thuốc chữa bệnh.</i>
</div>
