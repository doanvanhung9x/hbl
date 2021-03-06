<div class="row">
    <div class="col-md-8">
        <?php echo e(Form::checkbox('storefront_product_carousel_section_enabled', trans('storefront::attributes.section_status'), trans('storefront::storefront.form.enable_product_carousel_section'), $errors, $settings)); ?>

        <?php echo e(Form::text('translatable[storefront_product_carousel_section_title]', trans('storefront::attributes.section_title'), $errors, $settings)); ?>


        <?php if ($currentUser->hasAccess('admin.products.index')) : ?>
            <?php echo e(Form::select('storefront_product_carousel_section_products', trans('storefront::attributes.products'), $errors, $products, $settings, ['class' => 'selectize prevent-creation', 'data-url' => route('admin.products.index'), 'multiple' => true])); ?>

        <?php endif; ?>
    </div>
</div>

<?php echo $__env->make('admin::partials.selectize_remote', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
