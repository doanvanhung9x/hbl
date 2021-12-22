@extends('public.layout')

@section('title', setting('store_tagline'))

@push('css')
    <style>
        .listmember li img{
            height: 105px;
        }
    </style>
@endpush
@section('content')
    @unless (is_null($slider))
        @if (storefront_layout() === 'default')
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @include('public.home.sections.slider')
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        @endif
    @endunless
    <!--end_slide-->
    <!--content-->
    <div class="content">
        <div class="container d-block py-5">
            <div class="row">
                <div class="left col-md-6 col-12 px-md-5 px-0">
                    <div class="swiper mySwiper1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div style="padding: 0px 50px;"> <h5>LỊCH SỬ HÌNH THÀNH VÀ PHÁT TRIỂN</h5>
                                    <p>CÔNG TY CỔ PHẦN TẬP ĐOÀN Y TẾ HBL ( Gọi tắt là HBL GROUP) chính thức đi vào hoạt động từ T4.2021, theo giấy phép kinh doanh số 0109604698 - sở kế hoạch đầu tư hà nội. HBL Group  là một trong những đơn vị có uy tín, đã và đang ngày càng khẳng định  được vị thế của mình trong lĩnh vực y tế, chăm sóc sức khỏe cộng đồng.</p>
                                    <div class="d-flex justify-content-center"><a href="/lich-su-hinh-thanh-va-phat-trien" style="color: #F15A24;text-decoration: none;font-weight: bold;"> <i>Xem thêm</i></a></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div style="padding: 0px 50px;">
                                    <h5>Công Ty Cổ Phần Nutrihealth</h5>
                                    <p>Trong quá trình phát triển của mình, NutriHealth luôn tôn trọng “quốc tế” hóa và “đổi mới”. Tập trung vào các nguyên tắc cơ bản của “chất lượng” và “trách nhiệm"</p>
                                    <div class="d-flex justify-content-center"><a href="/cong-ty-co-phan-nutrihealth" style="color: #F15A24;text-decoration: none;font-weight: bold;"> <i>Xem thêm</i></a></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div style="padding: 0px 50px;">
                                    <h5>Công Ty Cổ Phần Công Nghệ Sức Khỏe Sao Đại Việt</h5>
                                    <p>Sao Đại Việt là công ty đa lĩnh vực: Chuỗi phòng khám đông y, kênh phân phối thuốc và thực phẩm chức năng và đơn vị tổ chức hoạt động cộng đồng. Triết lý kinh doanh của chúng tôi là: Sinh ra vì cộng đồng, phụng sự cho cộng đồng, thành công nhờ cộng đồng và báo đáp lại cộng đồng!</p>
                                    <div class="d-flex justify-content-center"><a href="/cong-ty-co-phan-cong-nghe-suc-khoe-sao-dai-viet" style="color: #F15A24;text-decoration: none;font-weight: bold;"> <i>Xem thêm</i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
{{--                        <div class="swiper-pagination"></div>--}}
                    </div>
                </div>

                <div class="right col-12 col-md-6 px-2">
                    <iframe width="100%" height="300px" src="https://www.youtube.com/embed/9vFOYOVQAO0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--end_content-->

    <!--banner-->
    <div class="banner">
        <img src ="frontend/images/hbl-banner.jpg" width="100%">
    </div>
    <!--banner-->

    <!--prize-->
    <div class="prize py-5">
        <div class="containerx d-block  d-md-flex">
            <div class="col-12 col-md-7 px-2">
                <h3>GIẢI THƯỞNG</h3>
                <div class="swiper mySwiper2">
                    <div class="swiper-wrapper">
{{--                        <div class="swiper-slide">--}}
{{--                            <img src="frontend/images/hc1.jpg" class="img-gt" width="100%">--}}
{{--                        </div>--}}

{{--                        <div class="swiper-slide">--}}
{{--                            <img src="frontend/images/hc2.jpg" class="img-gt" width="100%">--}}
{{--                        </div>--}}

{{--                        <div class="swiper-slide">--}}
{{--                            <img src="frontend/images/hc3.jpg" class="img-gt" width="100%">--}}
{{--                        </div>--}}

{{--                        <div class="swiper-slide">--}}
{{--                            <img src="frontend/images/hc4.jpg" class="img-gt" width="100%">--}}
{{--                        </div>--}}
                        <div class="swiper-slide">
                            <img src="frontend/images/hc5.jpg" class="img-gt" width="100%">
                        </div>
                    </div>


                    <div class="swiper-pagination"></div>
                </div>



            </div>
            <div class="col-12 col-md-5 mt-3 m-md-0 px-2">
                <div class="boxteam">
                    <h3>Hội đồng khoa học</h3>
                    <ul class="listmember">
                        <li>
                            <img  src="frontend/images/user3.jpg" width="110px" style="border-radius: 4px;">
                            <p>
                                <b>Phạm Hòa Lan</b>
                                <p>Đại tá thầy thuốc ưu tú</p>
                            </p>
                        </li>
                        <li>
                            <img  src="frontend/images/user4.jpg" width="110px" style="border-radius: 4px;">
                            <p>
                            <b>Ths Phạm Phương Liên</b>
                            <p>Nguyên Giảng viên Trường đại học y tế công cộng.</p>
                            </p>
                        </li>
                        <li>
                            <img  src="frontend/images/user5.jpg" width="110px" style="border-radius: 4px;">
                            <p>
                                <b>Bs.Đỗ Nam Khánh</b>
                                <p>Tổng GĐ công ty truyền thông sức khỏe sao đại việt</p>
                            </p>
                        </li>
                        <li>
                            <img  src="frontend/images/user1.jpg" width="110px" style="border-radius: 4px;">
                            <p>
                                <b>Ths, Bs Nguyễn Thanh Tùng</b>
                                <p>Nguyên cán bộ Cục khám chữa bệnh - Bộ y tế.</p>
                            </p>
                        </li>

                        <li>
                            <img  src="frontend/images/user2.jpg" width="110px" style="border-radius: 4px;">
                            <p>
                                <b>Bs Nguyễn Ngọc An</b>
                            <p>Khoa ngoại bệnh viện E.</p>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--prize-->

    <!--product-->
    @if($productSupplements->count() >0 )
    <div class="product py-5" style="background: #f1f1f1;">
        <div class="containerx">
            <h3>Thực phẩm bổ sung</h3>
            <div class="owl-carousel owl-theme">
                @foreach($productSupplements->filter(fn($p) => !empty($p->slug)) as $productSupplement)
                    <div class="item text-center" style="background: #fff; min-height: 385px; padding: 10px;">
                        <img src="{{ optional($productSupplement->base_image)->path }}">
                        <a href="{{ route('products.show', $productSupplement->slug) }}" class="text-overflow-2-lines">{{ $productSupplement->name }}</a>
                        <div>{!! $productSupplement->short_description !!}</div>
                        <div><b>{{ product_price($productSupplement) }}</b></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    <!--end_product-->

    @if($productMedicals->count() >0 )
        <div class="product py-5" style="background: #ebebeb;">
            <div class="containerx">
                <h3>Thực phẩm dinh dưỡng</h3>
                <div class="owl-carousel owl-theme">
                    @foreach($productMedicals->filter(fn($p) => !empty($p->slug)) as $productMedical)
                        <div class="item text-center" style="background: #fff; min-height: 385px; padding: 10px;">
                            <a href="{{ route('products.show', $productMedical->slug) }}">
                                <img src="{{ optional($productMedical->base_image)->path }}">
                            </a>
                            <a href="{{ route('products.show', $productMedical->slug) }}" class="text-overflow-2-lines">{{ $productMedical->name }}</a>
                            <div>{!! $productMedical->short_description !!}</div>
                            <div><b>{{ product_price($productMedical) }}</b></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    @if($productFoods->count() >0 )
        <div class="product py-5" style="background: #f1f1f1;">
            <div class="containerx">
                <h3>Thiết bị y tế</h3>
                <div class="owl-carousel owl-theme">
                    @foreach($productFoods->filter(fn($p) => !empty($p->slug)) as $productFood)
                        <div class="item text-center" style="background: #fff; min-height: 385px; padding: 10px;">
                            <a href="{{ route('products.show', $productFood->slug) }}">
                                <img src="{{ optional($productFood->base_image)->path }}">
                            </a>
                            <a href="{{ route('products.show', $productFood->slug) }}" class="text-overflow-2-lines">{{ $productFood->name }}</a>
                            <div>{!! $productFood->short_description !!}</div>
                            <div><b>{{ product_price($productFood) }}</b></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    @if($posts->count() >0 )
    <!--news-->
    <div class="news py-5">
        <div class="containerx">
            <h3 class="text-center">TIN TỨC SỰ KIỆN</h3>
{{--            <div class="nav-tab d-block d-md-flex justify-content-center">--}}
{{--                <div class="items">--}}
{{--                    <a href="http://">TIN NỔI BẬT</a>--}}
{{--                </div>--}}
{{--                <div class="items">--}}
{{--                    <a href="http://">HOẠT ĐỘNG CỘNG ĐỒNG</a>--}}
{{--                </div>--}}
{{--                <div class="items">--}}
{{--                    <a href="http://">BÁO CHÍ</a>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="containerx">
                <div class="owl-carousel owl-theme">
                    @foreach($posts->filter(fn($p) => !empty($p->slug)) as $post)
                        <div class="newsitem">
                            <img src ="{{ optional($post->base_image)->path }}">
                            <a href="{{ route('posts.show', $post->slug) }}" class="text-overflow-2-lines">{{ $post->title }}</a>
                            <p>{{ $post->short_description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--end_news-->
    @endif
    <!---video-->
    <div class="video py-5">
        <div class="containerx">
            <h3>VIDEO</h3>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <iframe width="100%" height="200px"  src="https://www.youtube.com/embed/ZiXhamS85BM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <a href="https://www.youtube.com/watch?v=ZiXhamS85BM">Hướng dẫn sử dụng máy Vật Lý Trị Liệu Wonder MF 5 08 New 0966 755 995</a>
                </div>
                <div class="item">
                    <iframe  width="100%" height="200px" src="https://www.youtube.com/embed/dfFVxtooPhM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <a href="https://www.youtube.com/watch?v=dfFVxtooPhM">HOẠT HUYẾT NATTOKINASE PLUS</a>
                </div>
                <div class="item">
                    <iframe width="100%" height="200px" src="https://www.youtube.com/embed/gYV9kzR_WcA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <a href="https://www.youtube.com/watch?v=gYV9kzR_WcA">Bổ sung sữa MILK CODOCA HI CANXI - Sống khỏe mỗi ngày</a>
                </div>
                <div class="item">
                    <iframe width="100%" height="200px" src="https://www.youtube.com/embed/00HrAYZWfQM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <a href="https://www.youtube.com/watch?v=00HrAYZWfQM">HBL BẢO VỆ SỨC KHỎE CỦA BẠN</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        keyboard: {
            enabled: true,
        },
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        // },
        // navigation: {
        //     nextEl: ".swiper-button-next",
        //     prevEl: ".swiper-button-prev",
        // },
    });

    var swiper1 = new Swiper(".mySwiper1", {
        slidesPerView: 1,
        spaceBetween: 30,
        keyboard: {
            enabled: true,
        },
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        // },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    var swiper2 = new Swiper(".mySwiper2", {
        slidesPerView: 1,
        spaceBetween: 30,
        keyboard: {
            enabled: true,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    var swiper3 = new Swiper(".mySwiper3", {
        slidesPerView: 1,
        spaceBetween: 30,
        keyboard: {
            enabled: true,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
@endpush
