<footer class="py-4 px-2">
    <div class="containerx d-sm-flex d-block">
        <div class="col-sm-3 col-12 info px-2">
            <h6><b><?php echo e(setting('store_name')); ?></b></h6>
            <span><b>Hotline:</b> <?php echo e(setting('store_phone')); ?> </span><br>
            <span><b>Email:</b> <?php echo e(setting('store_email')); ?></span><br>
            <span><?php echo e(trans('storefront::custom.home.about_us')); ?></span><br>
            <span><?php echo e(trans('storefront::custom.home.description')); ?></span><br>
        </div>
        <div class="col-12 col-sm-3 fbox px-2">
            <h6><b><?php echo e(trans('storefront::custom.home.more_information')); ?></b></h6>
            <ul>
                <li><a href="<?php echo e(route('home')); ?>"><?php echo e(trans('storefront::custom.home.home')); ?></a></li>
                <li><a href="<?php echo e(route('home')); ?>/lien-he"><?php echo e(trans('storefront::custom.home.contact')); ?></a></li>
                <li><a href="<?php echo e(route('home')); ?>/gioi-thieu"><?php echo e(trans('storefront::custom.home.introduce')); ?></a></li>
            </ul>
        </div>
        <div class="col-12 col-sm-3 fbox px-2">
            <h6><b>Dịch vụ</b></h6>
            <ul>
                <?php if($footerMenu->isNotEmpty()): ?>
                    <?php $__currentLoopData = $footerMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e($menuItem->url()); ?>"><?php echo e($menuItem->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </ul>
        </div>
        <div class=" col-12 col-sm-3 connect px-2">
            <div>
                <?php if(!empty($headerLogo)): ?>
                    <img src="<?php echo e($headerLogo); ?>" width="100%" alt="<?php echo e(setting('store_name')); ?>"/>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>

<div class="copyright py-2 text-center">
    <?php echo $copyrightText; ?>.<br/>
    <i>Thực phẩm này không phải là thuốc và không có tác dụng thay thế thuốc chữa bệnh.</i>
</div>
