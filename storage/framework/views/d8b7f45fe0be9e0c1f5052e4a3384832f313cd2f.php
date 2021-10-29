<?php $__env->startSection('title', setting('store_tagline')); ?>

<?php $__env->startPush('css'); ?>
    <style>
        .listmember li img{
            height: 105px;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <?php if (! (is_null($slider))): ?>
        <?php if(storefront_layout() === 'default'): ?>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php echo $__env->make('public.home.sections.slider', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <?php endif; ?>
    <?php endif; ?>
    <!--end_slide-->
    <!--content-->
    <div class="content">
        <div class="containerx d-md-flex d-block py-5">
            <div class="left col-md-6 col-12 px-md-5 px-0">Dec
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div> <h5>HBL GROUP</h5>
                                <p>CÔNG TY CỔ PHẦN TẬP ĐOÀN Y TẾ HBL ( Gọi tắt là HBL GROUP) chính thức đi vào hoạt động từ T4.2021, theo giấy phép kinh doanh số 0109604698 - sở kế hoạch đầu tư hà nội. HBL Group  là một trong những đơn vị có uy tín, đã và đang ngày càng khẳng định  được vị thế của mình trong lĩnh vực y tế, chăm sóc sức khỏe cộng đồng.</p>
                                <div class="d-flex justify-content-center"><a href="http://" style="color: #F15A24;text-decoration: none;font-weight: bold;"> <i>Xem thêm</i></a></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div>
                                <h5>HBL GROUP</h5>
                                <p>HBL Group là công ty tiên phong phát triển theo định hướng chuyển đổi số lĩnh vực y tế, , chăm sóc sức khỏe cộng đồng.  Tuy mới thành lập năm 2021 đã trở thành thương hiệu quen thuộc, và là đối tác tin cậy của nhiều bạn hàng khắp các tỉnh thành trong cả nước.
                                </p>
                                <div class="d-flex justify-content-center"><a href="http://" style="color: #F15A24;text-decoration: none;font-weight: bold;"> <i>Xem thêm</i></a></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div> <h5>HBL GROUP</h5>
                                <p>Tiền thân của  HBL Group gồm các đơn vị: Công ty cổ phẩn Dược & y tế cộng đồng, Công ty cổ phần đầu tư sức khỏe cộng đồng, Công ty cổ phần công nghệ sức khỏe Sao Đại Việt. Chủ tịch HDQT là doanh nhân trẻ luôn tâm huyết với lĩnh vực sức khỏe cộng đồng : Ông Trần Mạnh Đức. </p>
                                <div class="d-flex justify-content-center"><a href="http://" style="color: #F15A24;text-decoration: none;font-weight: bold;"> <i>Xem thêm</i></a></div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-pagination"></div>
                </div>

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
            </div>

            <div class="right col-12 col-md-6 px-2">
                <iframe width="100%" height="300px" src="https://www.youtube.com/embed/1CH53CM84TU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!--end_content-->

    <!--banner-->
    <div class="banner">
        <img src ="frontend/images/trisogroup-3395.jpg" width="100%">
    </div>
    <!--banner-->

    <!--prize-->
    <div class="prize py-5">
        <div class="containerx d-block  d-md-flex">
            <div class="col-12 col-md-7 px-2">
                <h3>GIẢI THƯỞNG</h3>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="frontend/images/3-1547.jpg" width="100%">
                        </div>

                        <div class="swiper-slide">
                            <img src="frontend/images/giaithuongtriso-5-1501.jpg" width="100%">
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
                            <img  src="frontend/images/user3.jpg" width="110px">
                            <p>
                                <b>Phạm Hòa Lan</b>
                                <p>Đại tá thầy thuốc ưu tú</p>
                            </p>
                        </li>
                        <li>
                            <img  src="frontend/images/user4.jpg" width="110px">
                            <p>
                            <b>Ths Phạm Phương Liên</b>
                            <p>Nguyên Giảng viên Trường đại học y tế công cộng.</p>
                            </p>
                        </li>
                        <li>
                            <img  src="frontend/images/user5.jpg" width="110px">
                            <p>
                                <b>Bs.Đỗ Nam Khánh</b>
                                <p>Tổng GĐ công ty truyền thông sức khỏe sao đại việt</p>
                            </p>
                        </li>
                        <li>
                            <img  src="frontend/images/user1.jpg" width="110px">
                            <p>
                                <b>Ths, Bs Nguyễn Thanh Tùng</b>
                                <p>Nguyên cán bộ Cục khám chữa bệnh - Bộ y tế.</p>
                            </p>
                        </li>

                        <li>
                            <img  src="frontend/images/user2.jpg" width="110px">
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
    <?php if($products->count() >0 ): ?>
    <div class="product py-5">
        <div class="containerx">
            <h3>SẢN PHẨM</h3>
            <div class="owl-carousel owl-theme">
                <?php $__currentLoopData = $products->filter(fn($p) => !empty($p->slug)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item text-center">
                        <img src="<?php echo e(optional($product->base_image)->path); ?>">
                        <a href="<?php echo e(route('products.show', $product->slug)); ?>"><?php echo e($product->name); ?></a>
                        <div><?php echo $product->short_description; ?></div>
                        <div><b><?php echo e(product_price($product)); ?></b></div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!--end_product-->
    <?php if($posts->count() >0 ): ?>
    <!--news-->
    <div class="news py-5">
        <div class="containerx">
            <h3 class="text-center">TIN TỨC SỰ KIỆN</h3>











            <div class="containerx">
                <div class="owl-carousel owl-theme">
                    <?php $__currentLoopData = $posts->filter(fn($p) => !empty($p->slug)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="newsitem">
                            <img src ="<?php echo e(optional($post->base_image)->path); ?>">
                            <a href="<?php echo e(route('posts.show', $post->slug)); ?>"><?php echo e($post->title); ?></a>
                            <p><?php echo e($post->short_description); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <!--end_news-->
    <?php endif; ?>
    <!---video-->
    <div class="video py-5">
        <div class="containerx">
            <h3>VIDEO</h3>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <iframe width="100%" height="200px"  src="https://www.youtube.com/embed/X-mN_-dvEbQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <a href="https://www.youtube.com/embed">Triso sôi động ngày hè 2018 tại hạ long</a>
                </div>
                <div class="item">
                    <iframe width="100%" height="200px" src="https://www.youtube.com/embed/X-mN_-dvEbQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <a href="https://www.youtube.com/embed">Triso sôi động ngày hè 2018 tại hạ long</a>
                </div>
                <div class="item">
                    <iframe  width="100%" height="200px" src="https://www.youtube.com/embed/X-mN_-dvEbQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <a href="https://www.youtube.com/embed">Triso sôi động ngày hè 2018 tại hạ long</a>
                </div>
                <div class="item">
                    <iframe width="100%" height="200px" src="https://www.youtube.com/embed/X-mN_-dvEbQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <a href="https://www.youtube.com/embed">Triso sôi động ngày hè 2018 tại hạ long</a>
                </div>
                <div class="item">
                    <iframe width="100%" height="200px" src="https://www.youtube.com/embed/X-mN_-dvEbQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <a href="https://www.youtube.com/embed">Triso sôi động ngày hè 2018 tại hạ long</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>