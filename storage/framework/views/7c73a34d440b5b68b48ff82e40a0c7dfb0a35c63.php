<div class="row">
    <div class="col-md-8">
        <?php echo e(Form::checkbox('storefront_recently_viewed_section_enabled', trans('storefront::attributes.section_status'), trans('storefront::storefront.form.enable_recently_viewed_section'), $errors, $settings)); ?>

        <?php echo e(Form::text('translatable[storefront_recently_viewed_section_title]', trans('storefront::attributes.section_title'), $errors, $settings)); ?>

        <?php echo e(Form::number('storefront_recently_viewed_section_total_products', trans('storefront::attributes.total_products'), $errors, $settings, ['min' => 0])); ?>

    </div>
</div>
