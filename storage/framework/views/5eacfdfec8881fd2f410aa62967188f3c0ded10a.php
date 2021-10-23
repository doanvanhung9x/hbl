<footer id="footer" class="footer mediku-footer bg-theme-colored2" data-tm-bg-img="<?php echo e(asset('frontend/images/footer-bg.png')); ?>">
    <div class="footer-widget-area">
        <div class="container pt-90 pb-20">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-3 pl-0 pl-lg-15">
                    <div class="widget tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
                        <h4 class="widget-title"><?php echo e(trans('storefront::custom.home.about_us')); ?></h4>
                        <div class="description"><?php echo e(trans('storefront::custom.home.description')); ?></div>
                        <ul class="styled-icons icon-dark icon-md icon-theme-colored1 icon-circled clearfix">
                            <li><a class="social-link" href="https://www.facebook.com/giayphepyte" ><i class="fab fa-facebook"></i></a></li>
                            <li><a class="social-link" href="<?php echo e(route('home')); ?>" ><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="widget widget_nav_menu split-nav-menu clearfix">
                        <h4 class="widget-title"><?php echo e(trans('storefront::custom.home.more_information')); ?></h4>
                        <ul class="menu">
                            <li><a href="<?php echo e(route('home')); ?>"><?php echo e(trans('storefront::custom.home.home')); ?></a></li>
                            <li><a href="<?php echo e(route('home')); ?>/lien-he"><?php echo e(trans('storefront::custom.home.contact')); ?></a></li>
                            <li><a href="<?php echo e(route('home')); ?>/gioi-thieu"><?php echo e(trans('storefront::custom.home.introduce')); ?></a></li>
                        </ul>
                    </div>
                </div>
                <?php if($footerMenu->isNotEmpty()): ?>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="widget widget_nav_menu split-nav-menu clearfix">
                            <h4 class="widget-title">Dịch vụ</h4>
                            <ul class="menu">
                                <?php $__currentLoopData = $footerMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e($menuItem->url()); ?>"><?php echo e($menuItem->name); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="widget widget-contact clearfix mb-0 mt-lg-40">
                        <h4 class="widget-title"><?php echo e(trans('storefront::custom.home.contact')); ?></h4>
                        <div class="tm-widget tm-widget-contact">
                            <ul class="contact-info">
                                <li class="contact-address"><i class="fas fa-map-marked-alt font-icon sm-display-block text-theme-colored1 mr-10"></i> <?php echo e(setting('storefront_footer_address')); ?></li>
                                <li class="contact-email"><i class="fas fa-envelope font-icon sm-display-block text-theme-colored1 mr-10"></i> <?php echo e(setting('store_email')); ?></li>
                                <li class="contact-phone"><i class="fas fa-phone font-icon sm-display-block text-theme-colored1 mr-10"></i> <?php echo e(setting('store_phone')); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container footer-bottom-border-top">
                <div class="row justify-content-center pt-20 pb-20">
                    <div class="col-lg-8">
                        <div class="footer-paragraph text-center">
                            <?php echo $copyrightText; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
