<div class="row">
    <div class="col-md-8">
        <?php echo e(Form::select('supported_countries', trans('setting::attributes.supported_countries'), $errors, $countries, $settings, ['class' => 'selectize prevent-creation', 'required' => true, 'multiple' => true])); ?>

        <?php echo e(Form::select('default_country', trans('setting::attributes.default_country'), $errors, $countries, $settings, ['required' => true])); ?>

        <?php echo e(Form::select('supported_locales', trans('setting::attributes.supported_locales'), $errors, $locales, $settings, ['class' => 'selectize prevent-creation', 'required' => true, 'multiple' => true])); ?>

        <?php echo e(Form::select('default_locale', trans('setting::attributes.default_locale'), $errors, $locales, $settings, ['required' => true])); ?>

        <?php echo e(Form::select('default_timezone', trans('setting::attributes.default_timezone'), $errors, $timeZones, $settings, ['required' => true])); ?>

        <?php echo e(Form::select('customer_role', trans('setting::attributes.customer_role'), $errors, $roles, $settings, ['required' => true])); ?>

        <?php echo e(Form::checkbox('reviews_enabled', trans('setting::attributes.reviews_enabled'), trans('setting::settings.form.allow_reviews'), $errors, $settings)); ?>

        <?php echo e(Form::checkbox('auto_approve_reviews', trans('setting::attributes.auto_approve_reviews'), trans('setting::settings.form.approve_reviews_automatically'), $errors, $settings)); ?>

        <?php echo e(Form::checkbox('welcome_email', trans('setting::attributes.welcome_email'), trans('setting::settings.form.send_welcome_email_after_registration'), $errors, $settings)); ?>

        <?php echo e(Form::checkbox('admin_order_email', trans('setting::attributes.admin_order_email'), trans('setting::settings.form.send_order_notification_to_admin'), $errors, $settings)); ?>

        <?php echo e(Form::checkbox('order_status_email', trans('setting::attributes.order_status_email'), trans('setting::settings.form.send_email_after_order_status_changed'), $errors, $settings)); ?>

        <?php echo e(Form::checkbox('invoice_email', trans('setting::attributes.invoice_email'), trans('setting::settings.form.send_invoice_email'), $errors, $settings)); ?>

    </div>
</div>
