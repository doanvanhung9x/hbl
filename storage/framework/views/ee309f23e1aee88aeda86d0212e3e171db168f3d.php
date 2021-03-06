<div class="row">
    <div class="col-md-8">
        <?php echo e(Form::checkbox('storefront_landscape_products_section_enabled', trans('storefront::attributes.section_status'), trans('storefront::storefront.form.enable_landscape_products_section'), $errors, $settings)); ?>

        <?php echo e(Form::text('translatable[storefront_landscape_products_section_title]', trans('storefront::attributes.section_title'), $errors, $settings)); ?>


        <?php if ($currentUser->hasAccess('admin.products.index')) : ?>
            <?php echo e(Form::select('storefront_landscape_products_section_products', trans('storefront::attributes.products'), $errors, $products, $settings, ['class' => 'selectize prevent-creation', 'data-url' => route('admin.products.index'), 'multiple' => true])); ?>

        <?php endif; ?>
    </div>
</div>
