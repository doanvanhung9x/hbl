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
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/animate.min.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/javascript-plugins-bundle.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/js/menuzord/css/menuzord.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/style-main.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/menuzord-skins/menuzord-rounded-boxed.css')); ?>" id="menuzord-menu-skins"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/responsive.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/colors/theme-skin-color-set2.css')); ?>"/>

    <link rel="shortcut icon" href="<?php echo e($favicon); ?>" />
    <script src="<?php echo e(asset('frontend/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/javascript-plugins-bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/menuzord/js/menuzord.js')); ?>"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/js/revolution-slider/css/rs6.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/js/revolution-slider/extra-rev-slider1.css')); ?>"/>

    <script src="<?php echo e(asset('frontend/js/revolution-slider/js/revolution.tools.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/revolution-slider/js/rs6.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/revolution-slider/extra-rev-slider1.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('css'); ?>
</head>
<body class="tm-container-1300px has-side-panel side-panel-right">
    <div class="side-panel-body-overlay"></div>
    <div id="side-panel-container" class="dark" data-tm-bg-img="images/side-push-bg.jpg">
        <div class="side-panel-wrap">
            <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="<?php echo e(route('home')); ?>"><i class="fa fa-times side-panel-trigger-icon"></i></a></div>
            <img class="logo mb-50" src="<?php echo e($headerLogo); ?>" alt="Logo">
            <p><?php echo e(setting('store_name')); ?></p>
            <div class="widget">
                <h5 class="widget-title widget-title-line-bottom line-bottom-theme-colored1"><?php echo e(trans('storefront::custom.home.contact_info')); ?></h5>
                <div class="tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
                    <ul>
                        <li class="contact-phone">
                            <div class="icon"><i class="flaticon-contact-042-phone-1"></i></div>
                            <div class="text"><a href="tel:+510-455-6735"><?php echo e(setting('store_phone')); ?></a></div>
                        </li>
                        <li class="contact-email">
                            <div class="icon"><i class="flaticon-contact-043-email-1"></i></div>
                            <div class="text"><a href="mailto:info@yourdomain.com"><?php echo e(setting('store_email')); ?></a></div>
                        </li>
                        <li class="contact-address">
                            <div class="icon"><i class="flaticon-contact-047-location"></i></div>
                            <div class="text"><?php echo e(setting('storefront_footer_address')); ?></div>
                        </li>
                    </ul>
                </div>
                <h5 class="widget-title widget-title-line-bottom line-bottom-theme-colored1 mt-3"><?php echo e(trans('storefront::custom.home.common')); ?></h5>
                <?php if(count(setting('supported_currencies')) > 1): ?>
                    <select class="top-nav-select custom-select-white mb-3" onchange="location = this.value">
                        <?php $__currentLoopData = setting('supported_currencies'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e(route('current_currency.store', ['currency' => $currency])); ?>" <?php echo e(currency() === $currency ? 'selected' : ''); ?>>
                                <?php echo e($currency); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                <?php endif; ?>

                <?php if(count(supported_locales()) > 1): ?>
                    <select class="top-nav-select custom-select-white" onchange="location = this.value">
                        <?php $__currentLoopData = supported_locales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e(localized_url($locale)); ?>" <?php echo e(locale() === $locale ? 'selected' : ''); ?>>
                                <?php echo e($language['name']); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div id="wrapper" class="clearfix">
        <?php echo $__env->make('public.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('public.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <script type="text/javascript" src="<?php echo e(asset('frontend/js/custom.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('js'); ?>
</body>
</html>
