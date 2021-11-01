<?php echo $__env->make('media::admin.image_picker.single', [
    'title' => trans('storefront::storefront.form.favicon'),
    'inputName' => 'storefront_favicon',
    'file' => $favicon,
], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="media-picker-divider"></div>

<?php echo $__env->make('media::admin.image_picker.single', [
    'title' => trans('storefront::storefront.form.header_logo'),
    'inputName' => 'translatable[storefront_header_logo]',
    'file' => $headerLogo,
], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="media-picker-divider"></div>

<?php echo $__env->make('media::admin.image_picker.single', [
    'title' => trans('storefront::storefront.form.footer_logo'),
    'inputName' => 'translatable[storefront_footer_logo]',
    'file' => $footerLogo,
], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="media-picker-divider"></div>

<?php echo $__env->make('media::admin.image_picker.single', [
    'title' => trans('storefront::storefront.form.mail_logo'),
    'inputName' => 'translatable[storefront_mail_logo]',
    'file' => $mailLogo,
], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
