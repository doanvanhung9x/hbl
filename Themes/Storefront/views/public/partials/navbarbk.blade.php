@if ($categoryMenu->menus()->isNotEmpty() || $primaryMenu->menus()->isNotEmpty())
    <div class="col-sm-auto ms-auto pr-0 align-self-center">
        <nav id="top-primary-nav" class="menuzord theme-color2" data-effect="slide" data-animation="none" data-align="right">
            <ul id="main-nav" class="menuzord-menu">
                <li class="menu-item">
                    <a href="{{ route('home') }}">{{ trans('storefront::custom.home.home') }}</a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0)">{{ trans('storefront::custom.home.information') }}</a>
                    @include('public.partials.primary_menu')
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0)">{{ trans('storefront::custom.home.product') }}</a>
                    <div class="megamenu megamenu-fullwidth megamenu-position-left">
                        <div class="megamenu-row">
                            @foreach($categoryMenu->menus() as $menu)
                                <div  class="col3">
                                    <ul class="list-unstyled list-dashed text-center">
                                        <li class="menu-item">
                                            <ul class="list-unstyled">
                                                <li class=""><a class=" tm-submenu-title" href="{{ $menu->url() }}"><span>{{ $menu->name() }}</span> </a></li>
                                                @if (optional($menu->subMenus())->count() > 0)
                                                    @foreach($menu->subMenus() as $category)
                                                        <li><a href="{{$category->url() }}">{{ $category->name() }}</a></li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </li>

                <li class="menu-item">
                    <a href="javascript:void(0)">{{ trans('storefront::custom.home.post') }}</a>
                    @if($categoryPosts->count() > 0)
                        <div class="megamenu megamenu-fullwidth megamenu-position-left">
                            <div class="megamenu-row">
                                @foreach($categoryPosts as $categoryPost)
                                    @if (optional($categoryPost)->count() > 0)
                                        <div  class="col3">
                                            <ul class="list-unstyled list-dashed text-center">
                                                <li class="menu-item">
                                                    <ul class="list-unstyled">
                                                        <li class=""><a class=" tm-submenu-title" href="{{ $categoryPost->url() }}"><span>{{ $categoryPost->name }}</span> </a></li>
                                                        @foreach($categoryPost->children as $childrenPost)
                                                            <li><a href="{{ $childrenPost->url() }}">{{ $childrenPost->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                </li>

                <li class="menu-item">
                    <a href="{{ route('contacts.create') }}">{{ trans('storefront::custom.home.contact') }}</a>
                </li>
            </ul>
        </nav>
    </div>
@endif
