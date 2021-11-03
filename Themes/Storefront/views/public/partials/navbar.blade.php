<div class="menu">
    <div class="containerx">
        <div class="d-flex px-2 justify-content-between align-items-center flex-wrap p-xl-0 py-lg-2">
            <ul class="menuhome justify-content-between">
                <li><a href="{{ route('home') }}">Trang chủ</a></li>
                <li><a href="/gioi-thieu">Giới thiệu</a>
                    <div class="dropdown">
                        <ul>
                            <li><a href="/lich-su-hinh-thanh-va-phat-trien">Lịch sử hình thành và phát triển</a></li>
                            <li><a href="/tam-nhin-su-menh-gia-tri-cot-loi">Tầm nhìn sứ mệnh, giá trị cốt lõi</a></li>
                            <li><a href="/hoi-dong-chuyen-gia">Hội đồng chuyên gia</a></li>
                            <li><a href="/giai-thuong">Giải thưởng</a></li>
                            <li><a href="/cac-doi-tac-cua-hbl-group">Các đối tác của HBL Group </a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="javascript:void(0);">HBL GROUP</a>
                    <div class="dropdown">
                        <ul>
                            <li class="sub"><a href="javascript:void(0);">Nhà máy sản xuất</a>
                                <div class="dropdown">
                                    <ul class="submenu">
                                        <li><a href="/cong-ty-co-phan-nutrihealth">CTCP NUTRIHEALTH</a></li>
                                        <li><a href="/cong-ty-co-phan-d2pharm-viet-nam">CTCP D2Pharm Việt Nam</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sub"><a href="javascript:void(0);">Công ty công nghệ</a>
                                <div class="dropdown">
                                    <ul class="submenu">
                                        <li><a href="/cong-ty-tnhh-phan-mem-va-truyen-thong-boxlink">CT TNHN PHẦN MỀM VÀ TRUYỀN THÔNG BOXLINK</a></li>
                                        <li><a href="/cong-ty-co-phan-cong-nghe-suc-khoe-sao-dai-viet">CTCP CÔNG NGHỆ SỨC KHỎE SAO ĐẠI VIỆT</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sub"><a href="javascript:void(0);">Công ty phân phối OTC/ETC</a>
                                <div class="dropdown">
                                    <ul class="submenu">
                                        <li><a href="/cong-ty-co-phan-duoc-dich-vu-y-te-cong-dong">CTCP Dược & dịch vụ y- tế cộng đồng</a></li>
                                        <li><a href="/cong-ty-co-phan-y-te-hbl-hai-duong">CTCP Y TẾ HBL HẢI DƯƠNG</a></li>
                                        <li><a href="/cong-ty-co-phan-y-te-hbl-hai-phong">CTCP Y TẾ HBL HẢI PHÒNG</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sub"><a href="javascript:void(0);">Công ty truyền thông</a>
                                <div class="dropdown">
                                    <ul class="submenu">
                                        <li><a href="/cong-ty-co-phan-truyen-thong-cham-soc-suc-khoe-sao-dai-viet">CTCP TRUYỀN THÔNG CHĂM SÓC SỨC KHỎE SAO ĐẠI VIỆT</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sub"><a href="javascript:void(0);">Công ty xuất nhập khẩu</a>
                                <div class="dropdown">
                                    <ul class="submenu">
                                        <li><a href="/cong-ty-co-phan-duoc-pham-va-cong-nghe-y-te-anpharco">CTCP DƯỢC PHẨM VÀ CÔNG NGHỆ Y TẾ ANPHARCO</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a href="/san-pham">Sản phẩm</a></li>
{{--                <li><a href="/he-thong-phan-phoi">HỆ THỐNG PHÂN PHỐI</a>--}}
{{--                    <div class="dropdown">--}}
{{--                        <ul>--}}
{{--                            <li><a href="/danh-sach-quay-thuoc">Danh sách quầy thuốc</a></li>--}}
{{--                            <li><a href="/chuoi-cua-hang-alosuckhoe">Chuỗi cửa hàng Alosuckhoe</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                @if($primaryMenu->menus()->isNotEmpty())--}}
{{--                <li>--}}
{{--                    @include('public.partials.primary_menu')--}}
{{--                </li>--}}
{{--                @endif--}}
{{--                @if ($categoryMenu->menus()->isNotEmpty())--}}
{{--                    @foreach($categoryMenu->menus() as $menu)--}}
{{--                    <li><a href="{{ $menu->url() }}">{{ $menu->name() }}</a>--}}
{{--                        @if (optional($menu->subMenus())->count() > 0)--}}
{{--                            <div class="dropdown">--}}
{{--                                <ul >--}}
{{--                                    @foreach($menu->subMenus() as $category)--}}
{{--                                        <li><a href="{{$category->url() }}">{{ $category->name() }}</a></li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                    </li>--}}
{{--                    @endforeach--}}
{{--                @endif--}}
                @foreach($categoryProducts as $categoryProduct)
                    <li><a href="{{ $categoryProduct->url() }}">{{ $categoryProduct->name }}</a>
                        @if (optional($categoryProduct->children)->count() > 0)
                            <div class="dropdown">
                                <ul >
                                    @foreach($categoryProduct->children as $childrenPost)
                                        <li><a href="{{ $childrenPost->url() }}">{{ $childrenPost->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </li>
                @endforeach
                @foreach($categoryPosts as $categoryPost)
                    <li><a href="{{ $categoryPost->url() }}">{{ $categoryPost->name }}</a>
                        @if (optional($categoryPost->children)->count() > 0)
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
{{--            <div class="btn-sidebar d-block d-lg-none">--}}
{{--                <button type="button" class="btn-sidebar"><i class="fas fa-bars"></i></button>--}}
{{--            </div>--}}
{{--            <form class="nav-search">--}}
{{--                <input type="text" name="search" class="p-2" placeholder="Tìm kiếm ...">--}}
{{--                <button class="btn-search"><i class="fas fa-search"></i></button>--}}
{{--            </form>--}}
        </div>
    </div>
</div>
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
