<header>
    <div class="containerx">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo col-5 col-md-5" >
                <a href="{{ route('home') }}">
                    @if (is_null($headerLogo))
                        <h2>{{ setting('store_name') }}</h2>
                    @else
                        <img src="{{ $headerLogo }}" width="145px" alt="{{ setting('store_name') }}"/>
                    @endif
                </a>
            </div>
            <div class="contact d-flex col-7 align-items-center justify-content-center col-md-3">
                <div class="icon-phone">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <a href="{{ route('home') }}">
                    <div class="hotline1">
                        Hotline
                    </div>
                    <div class="hotline2">
                        {{ setting('store_phone') }}
                    </div>
                </a>
            </div>
        </div>
    </div>
    @include('public.partials.navbar')
</header>
