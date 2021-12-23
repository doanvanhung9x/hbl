<header>
    <div class="containerx">
        <div class="row justify-content-between align-items-center">
            <div class="logo col-2 col-md-3" >
                <a href="{{ route('home') }}">
                    @if (is_null($headerLogo))
                        <h2>{{ setting('store_name') }}</h2>
                    @else
                        <img src="{{ $headerLogo }}" width="145px" alt="{{ setting('store_name') }}"/>
                    @endif
                </a>
            </div>
            <div class="search col-6 align-items-center justify-content-center mobile-hide">
                <div class="home-search">
                    <form method="get" action="{{ route('search') }}">
                        <div class="autocomplete">
                            <input id="search" type="text" name="q" placeholder="Tìm kiếm....">
                            <button type="submit" class="btn background-red btn-search"><i class="fa fa-search"></i> Tìm kiếm</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="contact d-flex col-4 align-items-center justify-content-center col-md-3">
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
        <div class="row">
            <div class="search col-10 align-items-center justify-content-center desktop-hide">
                <div class="home-search">
                    <form method="get" action="{{ route('search') }}">
                        <div class="autocomplete">
                            <input id="search" type="text" name="q" placeholder="Tìm kiếm....">
                            <button type="submit" class="btn background-red btn-search"><i class="fa fa-search"></i> Tìm kiếm</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-2">
                <div id="showmenu" class="desktop-hide btn-sidebar">
                    <i class="fas fa-bars" style="font-size: 20px;"></i>
                </div>
            </div>
        </div>
    </div>
    @include('public.partials.navbar')
</header>
