<?php $__env->startSection('title', $page->name); ?>

<?php $__env->startPush('meta'); ?>
    <meta name="title" content="<?php echo e($page->meta->meta_title); ?>">
    <meta name="keywords" content="<?php echo e(implode(',', $page->meta->meta_keywords)); ?>">
    <meta name="description" content="<?php echo e($page->meta->meta_description); ?>">
    <meta property="og:title" content="<?php echo e($page->meta->meta_title); ?>">
    <meta property="og:description" content="<?php echo e($page->meta->meta_description); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="main-content-area">
        <!-- Section: page title -->
        <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="<?php echo e(asset('frontend/images/bg/bg1.jpg')); ?>">
            <div class="container pt-50 pb-50">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title"><?php echo e($page->name); ?></h2>
                            <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                                <div class="breadcrumbs">
                                    <span><a href="<?php echo e(route('home')); ?>" rel="<?php echo e(trans('storefront::custom.home.home')); ?>"><?php echo e(trans('storefront::custom.home.home')); ?></a></span>
                                    <span><i class="fa fa-angle-right"></i></span>
                                    <span><a href="javascript:void(0)"><?php echo e($page->name); ?></a></span>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container pt-lg-90 pb-60 pb-lg-30">
                <?php echo $page->body; ?>

            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>