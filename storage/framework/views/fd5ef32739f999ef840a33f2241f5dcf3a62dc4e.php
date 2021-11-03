<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-mobile nivo-lightbox-notouch">
<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="<?php echo e(trans('storefront::custom.description')); ?>"/>
    <meta name="keywords" content="<?php echo e(trans('storefront::custom.keyword')); ?>"/>
    <meta name="author" content="<?php echo e(setting('store_name')); ?>"/>
    <title>
        <?php if (! empty(trim($__env->yieldContent('title')))): ?>
            <?php echo $__env->yieldContent('title'); ?> - <?php echo e(setting('store_name')); ?>

        <?php else: ?>
            <?php echo e(setting('store_name')); ?>

        <?php endif; ?>
    </title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php echo $__env->yieldPushContent('meta'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('frontend/style/swiper-bundle.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('frontend/style/fancybox.css')); ?>"/>
    <link href="<?php echo e(asset('frontend/style/bootstrap.min.css')); ?>" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/style/fontawesome.css')); ?>" crossorigin="anonymous"/>
    <link rel="stylesheet" href="<?php echo e(asset('frontend/style/style.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/owlcarousel/assets/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/owlcarousel/assets/owl.theme.default.min.css')); ?>">
    <script type="text/javascript" src="<?php echo e(asset('frontend/js/jquery-3.6.0.min.js')); ?>"></script>
    <link rel="shortcut icon" href="<?php echo e($favicon); ?>" />
    <?php echo $__env->yieldPushContent('css'); ?>
</head>
<body>
    <?php echo $__env->make('public.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('public.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <script src="<?php echo e(asset('frontend/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/fancybox.umd.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('frontend/js/jquery-3.2.1.slim.min.js')); ?>" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('frontend/js/popper.min.js')); ?>" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('frontend/js/popper.min.js')); ?>" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('frontend/owlcarousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/js.js')); ?>" type="text/javascript"></script>
    <?php echo $__env->yieldPushContent('js'); ?>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>
</html>
