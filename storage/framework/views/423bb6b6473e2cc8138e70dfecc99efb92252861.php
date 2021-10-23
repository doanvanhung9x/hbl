<?php $__env->startSection('title', setting('store_tagline')); ?>

<?php $__env->startPush('css'); ?>
    <style>
        .tm-sc-blog.blog-style1-current-theme article{
            margin-bottom: 15px;
        }

        .post-thumb-inner{
            min-height: 226px;
            max-height: 226px;
            overflow: hidden;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="main-content-area">
        <!-- Section: home Start -->
        <?php if (! (is_null($slider))): ?>
            <?php if(storefront_layout() === 'default'): ?>
                <section id="home">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col">
                                <!-- START Industrivo Rev Slider 2 REVOLUTION SLIDER 6.1.7 -->
                                <p class="rs-p-wp-fix"></p>
                                <rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="industrivo-rev-slider-2" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                    <rs-module id="rev_slider_1_1" style="display:none;" data-version="6.1.7">
                                        <rs-slides>
                                            <?php echo $__env->make('public.home.sections.slider', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        </rs-slides>
                                        <rs-static-layers>
                                        </rs-static-layers>
                                        <rs-progress class="rs-bottom" style="height: 5px; background: rgba(199,199,199,0.5);"></rs-progress>
                                    </rs-module>
                                </rs-module-wrap>
                                <!-- END REVOLUTION SLIDER -->
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        <?php endif; ?>
        <!-- Section: About -->
        <section class="bg-no-repeat bg-img-right" data-tm-bg-img="<?php echo e(asset('frontend/images/photos/map.png')); ?>">
            <div class="container pt-lg-90 pb-60 pb-lg-30">
                <div class="section-content mb-100 mb-md-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tm-sc tm-sc-animated-layer-advanced pt-0 mb-md-100 mb-sm-80">
                                <div class="animated-layer-advanced-inner clearfix">
                                    <div class="tm-about-box">
                                        <div class="layer-image-wrapper tm-animation move-up z-index-1 text-center">
                                            <div class="layer-image img-one"> <img class="" src="<?php echo e(asset('frontend/images/about/1.jpg')); ?>" alt="Image"></div>
                                        </div>
                                        <div class="layer-image-wrapper tm-animation move-left d-none d-sm-block z-index-1" data-tm-left="-5%" data-tm-top="auto" data-tm-bottom="-9%">
                                            <div class="layer-image img-two"> <img class="" src="<?php echo e(asset('frontend/images/about/2.jpg')); ?>" alt="Image"></div>
                                        </div>
                                        <div class="layer-image-wrapper tm-animation move-right d-none d-sm-block z-index-1" data-tm-right="-2%" data-tm-top="40%">
                                            <div class="layer-image-three">
                                                <div class="icon bg-theme-colored1"><img src="<?php echo e(asset('frontend/images/icon/1.png')); ?>" alt="Image"></div>
                                                <div class="layer-shape-round"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="pl-30 pl-lg--0">
                                <h2 class="mt-0 mb-30 tm-item-appear-clip-path"><?php echo e(trans('storefront::custom.home.key_text_1')); ?></h2>
                                <p class="paragraph mb-30"><?php echo e(trans('storefront::custom.home.key_text_content_1')); ?></p>
                                <div class="tm-sc-unordered-list mb-40">
                                    <ul class="list-style-none">
                                        <li><i class="fa fa-check-circle icon mr-10 text-theme-colored1"></i> <?php echo e(trans('storefront::custom.home.key_text_content_2')); ?></li>
                                        <li><i class="fa fa-check-circle icon mr-10 text-theme-colored1"></i> <?php echo e(trans('storefront::custom.home.key_text_content_3')); ?></li>
                                        <li><i class="fa fa-check-circle icon mr-10 text-theme-colored1"></i> <?php echo e(trans('storefront::custom.home.key_text_content_4')); ?></li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 class="font-weight-400"><?php echo e(trans('storefront::custom.home.key_text_content_5')); ?></h5>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="tm-about-box mt-1">
                                            <div class="box-hover-effect play-video-button tm-sc tm-sc-video-popup">
                                                <div class="effect-wrapper">
                                                    <div class="thumb"> <img src="<?php echo e(asset('frontend/images/about/3.jpg')); ?>" alt="Image"></div>
                                                    <div class="video-button bg-theme-colored1 tex
                                                    t-center"><span class="fas fa-play"></span></div>
                                                    <a class="hover-link" data-lightbox-gallery="youtube-video" href="https://www.youtube.com/watch?time_continue=2&amp;v=XJgNuWtCEAI" title=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Services -->
        <section class="bg-theme-colored2 pb-200 pb-sm--0">
            <div class="container pb-sm-50">
                <div class="section-title">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="tm-sc-section-title section-title text-center mb-60">
                                <div class="title-wrapper">
                                    <h6 class="subtitle text-theme-colored1 text-uppercase"><?php echo e(trans('storefront::custom.home.welcome')); ?></h6>
                                    <h2 class="title text-white"><?php echo e(trans('storefront::custom.home.service_good')); ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-floating-objects d-none d-xl-block">
                <span class="floating-object-1 tm-animation-floating" data-tm-bg-img="<?php echo e(asset('frontend/images/photos/shape1.png')); ?>" data-tm-width="224" data-tm-height="244" data-tm-top="30%"></span>
                <span class="floating-object-2 tm-animation-scaling" data-tm-bg-img="<?php echo e(asset('frontend/images/photos/shape2.png')); ?>" data-tm-width="460" data-tm-height="427" data-tm-top="-12%" data-tm-left="12%"></span>
                <span class="floating-object-3 tm-animation-flicker" data-tm-bg-img="<?php echo e(asset('frontend/images/photos/shape3.png')); ?>" data-tm-width="460" data-tm-height="427" data-tm-top="-12%" data-tm-right="1%"></span>
                <span class="floating-object-4 tm-animation-slide-horizontal" data-tm-bg-img="<?php echo e(asset('frontend/images/photos/shape4.png')); ?>" data-tm-width="460" data-tm-height="427" data-tm-top="30%" data-tm-right="-10%"></span>
            </div>
        </section>

        <section class="">
            <div class="container pt-0 pb-lg-90">
                <div class="section-content">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 tm-animation move-up">
                            <div class="tm-sc-services services-style-current-theme mediku-service-img-iconbox mt-sm-30" data-tm-margin-top="-308px">
                                <div class="tm-service">
                                    <div class="thumb">
                                        <img src="<?php echo e(asset('frontend/images/service/1.jpg')); ?>" alt="service">
                                        <div class="icon-box">
                                            <img class="icon-img" src="<?php echo e(asset('frontend/images/icon/2.png')); ?>" alt="icon">
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h4 class="title"><a href="<?php echo e(route('home')); ?>"><?php echo e(trans('storefront::custom.home.who_are_we')); ?></a></h4>
                                        <p><?php echo e(trans('storefront::custom.home.key_text_content_6')); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 tm-animation move-up2">
                            <div class="tm-sc-services services-style-current-theme mediku-service-img-iconbox mt-sm-30" data-tm-margin-top="-308px">
                                <div class="tm-service">
                                    <div class="thumb">
                                        <img src="<?php echo e(asset('frontend/images/service/2.jpg')); ?>" alt="service">
                                        <div class="icon-box">
                                            <img class="icon-img" src="<?php echo e(asset('frontend/images/icon/3.png')); ?>" alt="icon">
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h4 class="title"><a href="<?php echo e(route('products.index')); ?>"><?php echo e(trans('storefront::custom.home.what_do_we_do')); ?></a></h4>
                                        <p><?php echo e(trans('storefront::custom.home.key_text_content_7')); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 tm-animation move-up3">
                            <div class="tm-sc-services services-style-current-theme mediku-service-img-iconbox mt-sm-30 mt-lg-30" data-tm-margin-top="-308px">
                                <div class="tm-service">
                                    <div class="thumb">
                                        <img src="<?php echo e(asset('frontend/images/service/3.jpg')); ?>" alt="service">
                                        <div class="icon-box">
                                            <img class="icon-img" src="<?php echo e(asset('frontend/images/icon/4.png')); ?>" alt="icon">
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h4 class="title"><a href="<?php echo e(route('home')); ?>/dich-vu"><?php echo e(trans('storefront::custom.home.how_we_do_it')); ?></a></h4>
                                        <p><?php echo e(trans('storefront::custom.home.key_text_content_8')); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services -->

        <!-- Section: Divider -->
        <section class="bg-img overflow-hidden" data-tm-bg-img="<?php echo e(asset('frontend/images/photos/divider-bg.jpg')); ?>">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tm-sc-section-title section-title section-title-light mb-60 mt-20 pr-50">
                                <div class="title-wrapper">
                                    <h5 class="subtitle text-white">+ <?php echo e(setting('store_phone')); ?></h5>
                                    <h2 class="title text-white"><?php echo e(trans('storefront::custom.home.need_urgent_help')); ?><span class="text-theme-colored3"></span></h2>
                                    <div class="tm-sc-button">
                                        <a href="<?php echo e(route('home')); ?>/lien-he" class="btn btn-theme-colored1 btn-flat"><?php echo e(trans('storefront::custom.home.about_us')); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="divider-current-theme-style1 position-relative">
                                <div class="layer-image-wrapper">
                                    <div class="layer-image">
                                        <img src="<?php echo e(asset('frontend/images/divider/1.png')); ?>" alt="Image">
                                    </div>
                                    <div class="experience-iconbox">
                                        <h4 class="title"><?php echo e(trans('storefront::custom.home.key_text_content_10')); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Divider -->

        <!-- Section: Appointment -->
        <section class="">
            <div class="container p-0 pt-md-100 pl-sm-15 pr-sm-15">
                <div class="section-content">
                    <div class="row justify-content-end">
                        <div class="col-lg-8 col-xl-7">
                            <div class="appointment-current-theme-style">
                                <div class="tm-sc-section-title section-title mb-0">
                                    <div class="title-wrapper">
                                        <h2 class="title mb-40"><?php echo e(trans('storefront::custom.home.see_you_day')); ?></h2>
                                    </div>
                                </div>
                                <!-- Contact Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layer-image-wrapper layer-image-divider2">
                <div class="layer-image-left" data-tm-bg-img="<?php echo e(asset('frontend/images/photos/feature-bg.jpg')); ?>" style="background-image: url(&quot;images/photos/feature-bg.jpg&quot;);">
                    <div class="projects-count bg-theme-colored2">
                        <div class="wrapper">
                            <div class="details">
                                <h4 class="text-white"><?php echo e(trans('storefront::custom.home.most_are_satisfied')); ?></h4>
                                <div class="icon"><img src="<?php echo e(asset('frontend/images/icon/11.png')); ?>" alt="ImageIcon"></div>
                            </div>
                            <div class="video-icon">
                                <div class="box-hover-effect play-video-button tm-sc tm-sc-video-popup">
                                    <div class="effect-wrapper text-center ml-30 ml-md-20 mt-10">
                                        <div class="video-button text-white font-size-60"><span class="far fa-play-circle"></span></div>
                                        <a class="hover-link" data-lightbox-gallery="youtube-video" href="https://www.youtube.com/watch?time_continue=2&amp;v=XJgNuWtCEAI" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Appointment -->

        <!-- Section: Service -->
        <section class="z-index-1" data-tm-bg-color="#f0f3f5">
            <div class="container pb-90 pb-lg-60">
                <div class="section-title">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="tm-sc-section-title section-title text-center mb-60">
                                <div class="title-wrapper">
                                    <h2 class="title"><?php echo e(trans('storefront::custom.home.product')); ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <?php if($categories->count() > 0): ?>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-6 col-lg-4 tm-animation move-up">
                                    <div class="tm-sc-iconbox iconbox-style-current-theme mediku-department icon-box animate-icon-on-hover mb-30">
                                        <div class="icon-wrapper">
                                            <div class="icon">
                                                <img class="icon-img" src="<?php echo e(optional($category->base_image)->path); ?>" alt="Image">
                                            </div>
                                        </div>
                                        <div class="content text-center">
                                            <a class="btn-plain-text-with-arrow" href="<?php echo e($category->url()); ?>"><?php echo e($category->name); ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- End Divider -->

        <?php if($posts->count() >0 ): ?>
            <section data-tm-bg-color="#f7f7f7">
                <div class="container pt-lg-90 pb-lg-60">
                    <div class="section-title">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="tm-sc tm-sc-section-title section-title">
                                    <div class="title-wrapper mb-0">
                                        <h2 class="mt-0 mb-0"><?php echo e(trans('storefront::custom.home.post')); ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="tm-sc-button text-right mt-10 d-none d-md-block d-sm-none mt-md-15">
                                    <a href="<?php echo e(route('posts.index')); ?>" target="_self" class="btn tm-mediku-btn text-white btn-theme-colored1"><?php echo e(trans('storefront::custom.home.view_all')); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="row">
                            <?php $__currentLoopData = $posts->filter(fn($p) => !empty($p->slug)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-6 col-lg-6 tm-animation move-up">
                                <div class="tm-sc-blog tm-mediku tm-sc-blog-masonry blog-style1-current-theme mb-lg-30">
                                    <article class="post type-post status-publish format-standard has-post-thumbnail">
                                        <div class="entry-header">
                                            <div class="post-thumb lightgallery-lightbox">
                                                <div class="post-thumb-inner">
                                                    <div class="thumb border-radius-0">
                                                        <img class="img-fullwidth" src="<?php echo e(optional($post->base_image)->path); ?>" alt="Image">
                                                        <div class="date bg-theme-colored1 text-white text-center text-uppercase font-size-12 letter-space-1"><?php echo e($post->created_at); ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <h4 class="entry-title"><a href="<?php echo e(route('posts.show', $post->slug)); ?>" rel="bookmark"><?php echo e($post->title); ?></a></h4>
                                            <p class="mb-0"><?php echo e($post->short_description); ?></p>
                                            <div class="clearfix"></div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- End News -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>