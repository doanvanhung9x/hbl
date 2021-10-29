@if ($categoryMenu->menus()->isNotEmpty() || $primaryMenu->menus()->isNotEmpty())
    <div class="menu">
    <div class="containerx">
        <div class="d-flex px-2 justify-content-between align-items-center flex-wrap p-xl-0 py-lg-2">
            <ul class="menuhome justify-content-between">
                <li><a href="{{ route('home') }}">Trang chủ</a></li>
                <li>
                    @include('public.partials.primary_menu')
                </li>
                @foreach($categoryMenu->menus() as $menu)
                <li><a href="{{ $menu->url() }}">{{ $menu->name() }}<i class="fas fa-caret-down"></i></a>
                    @if (optional($menu->subMenus())->count() > 0)
                        <div class="dropdown">
                            <ul >
                                @foreach($menu->subMenus() as $category)
                                    <li><a href="{{$category->url() }}">{{ $category->name() }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </li>
                @endforeach
                @foreach($categoryPosts as $categoryPost)
                    <li><a href="{{ $categoryPost->url() }}">{{ $categoryPost->name }}<i class="fas fa-caret-down"></i></a>
                        @if (optional($categoryPost)->count() > 0)
                            <div class="dropdown">
                                <ul >
                                    @foreach($categoryPost->children as $childrenPost)
                                        <li><a href="{{ $childrenPost->url() }}">{{ $childrenPost->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </li>
                @endforeach
                <li><a href="{{ route('contacts.create') }}">{{ trans('storefront::custom.home.contact') }}</a></li>
            </ul>
            <div class="btn-sidebar d-block d-lg-none">
                <button type="button" class="btn-sidebar"><i class="fas fa-bars"></i></button>
            </div>
            <form class="nav-search">
                <input type="text" name="search" class="p-2" placeholder="Tìm kiếm ...">
                <button class="btn-search"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
</div>
@endif
<div class="sidebar">
    <div>
        <img src="/frontend/images/logo-7411.png">
    </div>
    <div class="close-sidebar">
        <button type="button" class="btn-exit"><i class="fas fa-window-close"></i></button>
    </div>
    <ul class="menu-sidebar">
        <li><a href="http://">Trang chủ</a></li>
        <li><a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Giới thiệu&nbsp;<i class="fas fa-caret-down"></i>
            </a>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <ul class="d-block dropdown-sidebar">
                        <li><a href="">menu1</a></li>
                        <li><a href="">menu1</a></li>
                        <li><a href="">menu1</a></li>

                    </ul>
                </div>
            </div>
        </li>

        <li><a class="" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                TRISO GROUP&nbsp;<i class="fas fa-caret-down"></i>
            </a>
            <div class="collapse" id="collapseExample1">
                <div class="card card-body">
                    <ul class="d-block dropdown-sidebar">
                        <li><a href="">menu1</a></li>
                        <li><a href="">menu1</a></li>
                        <li><a href="">menu1</a></li>

                    </ul>
                </div>
            </div>
        </li>
        <li><a href="http://">Sản phẩm</a></li>
        <li><a class="" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Tin tức sự kiện&nbsp;<i class="fas fa-caret-down"></i>
            </a>
            <div class="collapse" id="collapseExample2">
                <div class="card card-body">
                    <ul class="d-block dropdown-sidebar">
                        <li><a href="">menu1</a></li>
                        <li><a href="">menu1</a></li>
                        <li><a href="">menu1</a></li>

                    </ul>
                </div>
            </div>
        </li>
        <li><a href="http://">Tin nội bộ</a></li>
        <li><a href="http://">Tuyển dụng</a></li>
        <li><a href="http://">Liên hệ</a></li>
    </ul>
</div>
