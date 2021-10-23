<?php $__env->startSection('title', trans('storefront::contact.contact')); ?>

<?php $__env->startPush('css'); ?>
    <style>
        .error-message{
            color: red;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="bread">
        <div class="containerx">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">TIN NỔI BẬT</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--endbreadcrumb-->

    <!---contact-->
    <div class="contactshop">
        <div class="py-5">
            <h3 class="py-2">LIÊN HỆ VỚI CHÚNG TÔI</h3>
        </div>
        <div class="address d-md-flex d-block">
            <div class="col-md-6 col-12 left">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.8860612653875!2d105.73260071540159!3d20.957090295595883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acafe26b042d%3A0x3948ffadfa00eee6!2zQ8O0bmcgVHkgQ-G7lSBQaOG6p24gVHJp4buHdSBTxqFu!5e0!3m2!1svi!2s!4v1633967258365!5m2!1svi!2s" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-md-6 col-12 right my-md-0 my-5">
                <div class="company p-5">
                    <h4><b><?php echo e(setting('store_name')); ?></b></h4>
                    <span><?php echo e(trans('storefront::custom.home.about_us')); ?></span><br>
                    <span><b>Hotline:</b> <?php echo e(setting('store_phone')); ?></span><br>
                    <span>Email: <?php echo e(setting('store_email')); ?></span><br>
                    <span><?php echo e(trans('storefront::custom.home.description')); ?></span><br>
                </div>
            </div>
        </div>
    </div>

    <div class="containerx my-5">
        <div class="form  d-flex justify-content-center">
            <div class="col-md-6 col-12 px-md-0 px-2" >
                <h4><?php echo e(trans('storefront::contact.send_us_a_message')); ?></h4>
                <?php if(session('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>
                <form method="POST" action="<?php echo e(route('contacts.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group <?php echo e($errors->has('fullname') ? 'has-error': ''); ?> mb-3 col-md-12">
                        <label for="fullname"><?php echo e(trans('contact::attributes.fullname')); ?><span class="required">*</span></label>
                        <input type="text" name="fullname" class="form-control" id="fullname" value="<?php echo e(old('fullname')); ?>">

                        <?php echo $errors->first('fullname', '<span class="error-message">:message</span>'); ?>

                    </div>

                    <div class="form-group <?php echo e($errors->has('phone') ? 'has-error': ''); ?> mb-3 col-md-12">
                        <label for="phone"><?php echo e(trans('contact::attributes.phone')); ?><span class="required">*</span></label>
                        <input type="text" name="phone" class="form-control" id="phone" value="<?php echo e(old('phone')); ?>">

                        <?php echo $errors->first('phone', '<span class="error-message">:message</span>'); ?>

                    </div>

                    <div class="form-group <?php echo e($errors->has('email') ? 'has-error': ''); ?> mb-3 col-md-12">
                        <label for="email"><?php echo e(trans('contact::attributes.email')); ?><span class="required">*</span></label>
                        <input type="text" name="email" class="form-control" id="email" value="<?php echo e(old('email')); ?>">

                        <?php echo $errors->first('email', '<span class="error-message">:message</span>'); ?>

                    </div>





















                    <div class="form-group <?php echo e($errors->has('body') ? 'has-error': ''); ?> mb-3 col-md-12">
                        <label for="body" style="display: block;"><?php echo e(trans('contact::attributes.body')); ?><span class="required">*</span></label>
                        <textarea name="body" cols="91%" rows="5" id="body"><?php echo e(old('body')); ?></textarea>

                        <?php echo $errors->first('body', '<span class="error-message">:message</span>'); ?>

                    </div>

                    <button  type="submit" class="btn btn-feedback">Gửi đi</button>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>