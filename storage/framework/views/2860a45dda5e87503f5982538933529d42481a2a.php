<?php $__env->startSection('title', trans('storefront::contact.contact')); ?>

<?php $__env->startPush('css'); ?>
    <style>
        .required, .error-message{
            color: red;
        }

        .form-group{
            margin-bottom: 5px;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="main-content-area">
        <!-- Section: page title -->
        <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="<?php echo e(asset('frontend/images/bg/bg1.jpg')); ?>">
            <div class="container pt-50 pb-50">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title"><?php echo e(trans('storefront::custom.home.contact')); ?></h2>
                            <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                                <div class="breadcrumbs">
                                    <span><a href="<?php echo e(route('home')); ?>" rel="<?php echo e(trans('storefront::custom.home.home')); ?>"><?php echo e(trans('storefront::custom.home.home')); ?></a></span>
                                    <span><i class="fa fa-angle-right"></i></span>
                                    <span><a href="javascript:void(0)"><?php echo e(trans('storefront::custom.home.contact')); ?></a></span>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container pt-lg-90 pb-60 pb-lg-30">
                <div class="row">
                    <?php if(session('success')): ?>
                    <div class="alert alert-success" role="alert" style="margin: 0px 17px;">
                        <?php echo e(session('success')); ?>

                    </div>
                    <?php endif; ?>
                    <div class="col-md-8">
                        <div class="box-wrapper contact-left clearfix">
                            <div class="col-md-12">
                                <div class="box-header">
                                    <h4><?php echo e(trans('storefront::contact.send_us_a_message')); ?></h4>
                                </div>
                                <form method="POST" action="<?php echo e(route('contacts.store')); ?>" class="clearfix">
                                    <?php echo csrf_field(); ?>

                                    <div class="form-group <?php echo e($errors->has('fullname') ? 'has-error': ''); ?>">
                                        <label for="fullname"><?php echo e(trans('contact::attributes.fullname')); ?><span class="required">*</span></label>
                                        <input type="text" name="fullname" class="form-control" id="fullname" value="<?php echo e(old('fullname')); ?>">

                                        <?php echo $errors->first('fullname', '<span class="error-message">:message</span>'); ?>

                                    </div>

                                    <div class="form-group <?php echo e($errors->has('phone') ? 'has-error': ''); ?>">
                                        <label for="phone"><?php echo e(trans('contact::attributes.phone')); ?><span class="required">*</span></label>
                                        <input type="text" name="phone" class="form-control" id="phone" value="<?php echo e(old('phone')); ?>">

                                        <?php echo $errors->first('phone', '<span class="error-message">:message</span>'); ?>

                                    </div>

                                    <div class="form-group <?php echo e($errors->has('email') ? 'has-error': ''); ?>">
                                        <label for="email"><?php echo e(trans('contact::attributes.email')); ?><span class="required">*</span></label>
                                        <input type="text" name="email" class="form-control" id="email" value="<?php echo e(old('email')); ?>">

                                        <?php echo $errors->first('email', '<span class="error-message">:message</span>'); ?>

                                    </div>

                                    <div class="form-group <?php echo e($errors->has('town') ? 'has-error': ''); ?>">
                                        <label for="town"><?php echo e(trans('contact::attributes.town')); ?></label>
                                        <select name="town" id="town" class="form-control">
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($value); ?>" <?php if(old('town') == $value): ?> selected <?php endif; ?>><?php echo e($value); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php echo $errors->first('town', '<span class="error-message">:message</span>'); ?>

                                    </div>

                                    <div class="form-group <?php echo e($errors->has('you_are_a') ? 'has-error': ''); ?>">
                                        <label for="you_are_a"><?php echo e(trans('contact::attributes.you_are_a')); ?></label>
                                        <select name="you_are_a" id="you_are_a" class="form-control">
                                            <option value="<?php echo e(trans('contact::attributes.one')); ?>" <?php if(old('you_are_a') == trans('contact::attributes.one')): ?> selected <?php endif; ?>><?php echo e(trans('contact::attributes.one')); ?></option>
                                            <option value="<?php echo e(trans('contact::attributes.two')); ?>" <?php if(old('you_are_a') == trans('contact::attributes.two')): ?> selected <?php endif; ?>><?php echo e(trans('contact::attributes.two')); ?></option>
                                            <option value="<?php echo e(trans('contact::attributes.other')); ?>" <?php if(old('you_are_a') == trans('contact::attributes.other')): ?> selected <?php endif; ?>><?php echo e(trans('contact::attributes.other')); ?></option>
                                        </select>
                                        <?php echo $errors->first('you_are_a', '<span class="error-message">:message</span>'); ?>

                                    </div>

                                    <div class="form-group <?php echo e($errors->has('body') ? 'has-error': ''); ?>">
                                        <label for="body" style="display: block;"><?php echo e(trans('contact::attributes.body')); ?><span class="required">*</span></label>
                                        <textarea name="body" cols="91%" rows="5" id="body"><?php echo e(old('body')); ?></textarea>

                                        <?php echo $errors->first('body', '<span class="error-message">:message</span>'); ?>

                                    </div>

                                    <button type="submit" class="btn btn-primary btn-submit pull-right" data-loading>
                                        <?php echo e(trans('storefront::contact.submit')); ?>

                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-right clearfix">
                            <div class="contact-info">
                                <div class="contact-text">
                                    <h4><?php echo e(trans('storefront::contact.phone')); ?></h4>
                                    <span><?php echo e(setting('store_phone')); ?></span>
                                </div>
                            </div>

                            <div class="contact-info">
                                <div class="contact-text">
                                    <h4><?php echo e(trans('storefront::contact.email')); ?></h4>
                                    <span><?php echo e(setting('store_email')); ?></span>
                                </div>
                            </div>

                            <div class="contact-info">
                                <div class="contact-text">
                                    <h4><?php echo e(trans('contact::attributes.address')); ?></h4>
                                    <span><?php echo e(setting('storefront_footer_address')); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>