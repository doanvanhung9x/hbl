<header id="header" class="header header-layout-type-header-2rows">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-auto header-top-left align-self-center text-center text-xl-start">
                    <ul class="element contact-info">
                        <li class="contact-phone"><i class="fa fa-phone font-icon sm-display-block"></i> <?php echo e(setting('store_phone')); ?></li>
                        <li class="contact-email"><i class="fa fa-envelope font-icon sm-display-block"></i> <?php echo e(setting('store_email')); ?></li>
                        <li class="contact-address"><i class="fa fa-map font-icon sm-display-block"></i> <?php echo e(setting('storefront_footer_address')); ?></li>
                    </ul>
                </div>
                <div class="col-xl-auto ms-xl-auto header-top-right align-self-center text-center text-xl-end">
                    <div class="element pt-0 pb-0">
                        <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled clearfix">
                            <li><a class="social-link" href="https://www.facebook.com/giayphepyte" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            <li><a class="social-link" href="<?php echo e(route('home')); ?>" ><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav tm-enable-navbar-hide-on-scroll">
        <div class="header-nav-wrapper navbar-scrolltofixed">
            <div class="menuzord-container header-nav-container">
                <div class="container position-relative">
                    <div class="row header-nav-col-row">
                        <div class="col-sm-auto align-self-center">
                            <a class="menuzord-brand site-brand" href="<?php echo e(route('home')); ?>">
                                <?php if(is_null($headerLogo)): ?>
                                    <h2><?php echo e(setting('store_name')); ?></h2>
                                <?php else: ?>
                                    <img class="logo-default logo-1x" src="<?php echo e($headerLogo); ?>" alt="<?php echo e(setting('store_name')); ?>">
                                    <img class="logo-default logo-2x retina" src="<?php echo e($headerLogo); ?>" alt="<?php echo e(setting('store_name')); ?>">
                                <?php endif; ?>
                            </a>
                        </div>
                        <?php echo $__env->make('public.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <div class="col-sm-auto align-self-center nav-side-icon-parent">
                            <ul class="list-inline nav-side-icon-list">
                                <li class="hidden-mobile-mode">
                                    <div id="side-panel-trigger" class="side-panel-trigger">
                                        <a href="#">
                                            <div class="hamburger-box">
                                                <div class="hamburger-inner"></div>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row d-block d-xl-none">
                        <div class="col-12">
                            <nav id="top-primary-nav-clone" class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive" data-effect="slide" data-animation="none" data-align="right">
                                <ul id="main-nav-clone" class="menuzord-menu menuzord-right menuzord-indented scrollable">
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
