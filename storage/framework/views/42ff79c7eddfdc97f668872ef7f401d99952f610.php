<tr>
    <?php echo $__env->make('admin::partials.table.select_all', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <th><?php echo e(trans('contact::contacts.fullname')); ?></th>
    <th><?php echo e(trans('contact::contacts.phone')); ?></th>
    <th><?php echo e(trans('contact::contacts.email')); ?></th>
    <th><?php echo e(trans('contact::contacts.address')); ?></th>
    <th><?php echo e(trans('contact::contacts.content')); ?></th>
    <th data-sort><?php echo e(trans('admin::admin.table.created')); ?></th>
</tr>
