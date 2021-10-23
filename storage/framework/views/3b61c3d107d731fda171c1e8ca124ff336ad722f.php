<?php $__env->startSection('title'); ?>
    <?php if(request()->has('query')): ?>
        <?php echo e(trans('storefront::products.search_results_for')); ?>: "<?php echo e(request('query')); ?>"
    <?php else: ?>
        <?php echo e(trans('storefront::products.shop')); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendor/range-price.css')); ?>"/>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="main-content-area">
        <!-- Section: page title -->
        <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="<?php echo e(asset('frontend/images/bg/bg1.jpg')); ?>">
            <div class="container pt-50 pb-50">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title"><?php if(!empty($category)): ?>  <?php echo e($category->name); ?> <?php elseif(request('query')): ?> <?php echo e(request('query')); ?> <?php endif; ?></h2>
                            <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                                <div class="breadcrumbs">
                                    <span><a href="<?php echo e(route('home')); ?>" rel="<?php echo e(trans('storefront::custom.home.home')); ?>"><?php echo e(trans('storefront::custom.home.home')); ?></a></span>
                                    <span><i class="fa fa-angle-right"></i></span>
                                    <span><a href="javascript:void(0)"><?php if(!empty($category)): ?>  <?php echo e($category->name); ?> <?php elseif(request('query')): ?> <?php echo e(request('query')); ?> <?php endif; ?></a></span>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-9">
                            <div id="gallery-holder-618422" class="isotope-layout grid-3 gutter-15 clearfix lightgallery-lightbox">
                                <div class="isotope-layout-inner">
                                    <?php if($products->count() > 0): ?>
                                        <?php $__currentLoopData = $products->filter(fn($p) => !empty($p->slug)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="isotope-item">
                                                <div class="isotope-item-inner">
                                                    <div class="product">
                                                        <div class="product-header">

                                                            <div class="thumb image-swap">
                                                                <a href="<?php echo e(route('products.show', $product->slug)); ?>"><img src="<?php echo e(optional($product->base_image)->path); ?>" class="product-main-image img-responsive img-fullwidth" width="300" height="300" alt="product"></a>
                                                                <a href="<?php echo e(route('products.show', $product->slug)); ?>"><img src="<?php echo e(optional($product->base_image)->path); ?>" class="product-hover-image img-responsive img-fullwidth" alt="product"></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-details">
                                                            <h5 class="product-title"><a href="<?php echo e(route('products.show', $product->slug)); ?>"><?php echo e($product->name); ?></a></h5>



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php echo $__env->make('public.products.partials.filter', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo e($products->links()); ?>

                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>