<header>
    <div class="containerx">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo col-5 col-md-5" >
                <a href="<?php echo e(route('home')); ?>">
                    <?php if(is_null($headerLogo)): ?>
                        <h2><?php echo e(setting('store_name')); ?></h2>
                    <?php else: ?>
                        <img src="<?php echo e($headerLogo); ?>" width="145px" alt="<?php echo e(setting('store_name')); ?>"/>
                    <?php endif; ?>
                </a>
            </div>
            <div class="contact d-flex col-7 align-items-center justify-content-center col-md-3">
                <div class="icon-phone">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <a href="<?php echo e(route('home')); ?>">
                    <div class="hotline1">
                        Hotline
                    </div>
                    <div class="hotline2">
                        <?php echo e(setting('store_phone')); ?>

                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php echo $__env->make('public.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</header>
