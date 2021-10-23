<?php $__env->startSection('title', $product->name); ?>

<?php $__env->startPush('meta'); ?>
    <meta name="title" content="<?php echo e($product->meta->meta_title); ?>">
    <meta name="keywords" content="<?php echo e(implode(',', $product->meta->meta_keywords)); ?>">
    <meta name="description" content="<?php echo e($product->meta->meta_description); ?>">
    <meta property="og:title" content="<?php echo e($product->meta->meta_title); ?>">
    <meta property="og:description" content="<?php echo e($product->meta->meta_description); ?>">
    <meta property="og:image" content="<?php echo e($product->baseImage->path); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="main-content-area">
        <!-- Section: page title -->
        <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="<?php echo e(asset('frontend/images/bg/bg1.jpg')); ?>">
            <div class="container pt-50 pb-50">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title"><?php echo e($product->name); ?></h2>
                            <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                                <div class="breadcrumbs">
                                    <span><a href="<?php echo e(route('home')); ?>" rel="<?php echo e(trans('storefront::custom.home.home')); ?>"><?php echo e(trans('storefront::custom.home.home')); ?></a></span>
                                    <span><i class="fa fa-angle-right"></i></span>
                                    <span><a href="javascript:void(0)"><?php echo e($product->name); ?></a></span>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="section-content">
                    <div class="product-single">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-image-slider lightgallery-lightbox">
                                    <div class="tm-owl-thumb-carousel" data-nav="true" data-slider-id="1">
                                        <?php $__currentLoopData = $product->additional_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $additionalImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($additionalImage->exists): ?>
                                                <div data-thumb="<?php echo e($additionalImage->path); ?>">
                                                    <a class="lightgallery-trigger" data-exthumbimage="<?php echo e($additionalImage->path); ?>" data-src="<?php echo e($additionalImage->path); ?>" title="<?php echo e($product->name); ?>" href="<?php echo e($additionalImage->path); ?>"><img class="img-fullwidth" src="<?php echo e($additionalImage->path); ?>" alt="images"></a>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <ul class="tm-owl-thumbs" data-slider-id="1">
                                        <?php $__currentLoopData = $product->additional_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $additionalImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($additionalImage->exists): ?>
                                                <li class="tm-owl-thumb-item"><img src="<?php echo e($additionalImage->path); ?>" alt="<?php echo e($product->name); ?>"></li>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-summary">
                                    <h2 class="product-title mt-0"><?php echo e($product->name); ?></h2>

                                    
                                    <div class="short-description">
                                        <p><?php echo $product->short_description; ?></p>
                                    </div>
                                    <div>
                                        <p><?php echo e(trans('storefront::custom.multi.share')); ?>: </p>
                                        <ul class="styled-icons icon-dark icon-md icon-theme-colored1 icon-circled clearfix">
                                            <li><a class="social-link" href="https://www.facebook.com/giayphepyte"><i class="fab fa-facebook"></i></a></li>
                                            <li><a class="social-link" href="<?php echo e(route('home')); ?>"><i class="fab fa-twitter"></i></a></li>
                                            <li><a class="social-link" href="<?php echo e(route('home')); ?>"><i class="fab fa-youtube"></i></a></li>
                                            <li><a class="social-link" href="<?php echo e(route('home')); ?>"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-60">
                                <div class="horizontal-tab product-tab">
                                    <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <li class="nav-item">
                                            <button class="nav-link active" id="desc-tab" data-bs-toggle="tab" data-bs-target="#desc-content" role="tab" aria-controls="desc-content" aria-selected="true"><strong>Mô tả</strong></button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active p-20" id="desc-content" role="tabpanel" aria-labelledby="desc-tab">
                                            <?php echo $product->description; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if($relatedProducts->count() > 0): ?>
                            <div class="col-md-12 mt-60">
                                <h4 class="mb-30">Sản phẩm khác</h4>
                                <div class="tm-sc-gallery tm-sc-gallery-grid">

                                    <!-- Isotope Gallery Grid -->
                                    <div id="gallery-holder-618422" class="isotope-layout grid-4 gutter-15 clearfix lightgallery-lightbox">
                                        <div class="isotope-layout-inner">
                                            <!-- Isotope Item Start -->
                                            <?php $__currentLoopData = $relatedProducts->filter(fn($p) => !empty($p->slug)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="isotope-item cat1 cat3">
                                                    <div class="isotope-item-inner">
                                                        <div class="product">
                                                            <div class="product-header">
                                                                <div class="thumb image-swap">
                                                                    <a href="<?php echo e(route('products.show', $product->slug)); ?>"><img src="<?php echo e(optional($product->base_image)->path); ?>" class="product-main-image img-responsive img-fullwidth" width="300" height="300" alt="<?php echo e($product->name); ?>"></a>
                                                                    <a href="<?php echo e(route('products.show', $product->slug)); ?>"><img src="<?php echo e(optional($product->base_image)->path); ?>" class="product-hover-image img-responsive img-fullwidth" alt="<?php echo e($product->name); ?>"></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-details">
                                                                <h5 class="product-title"><a href="<?php echo e(route('products.show', $product->slug)); ?>"><?php echo e($product->name); ?></a></h5>
                                                                <p class="product-price"><?php echo e(product_price($product)); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <!-- Isotope Item End -->
                                        </div>
                                    </div>
                                    <!-- End Isotope Gallery Grid -->
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>