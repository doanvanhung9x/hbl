<div class="form-group">
    <label for="from"><?php echo e(trans('report::admin.filters.date_start')); ?></label>
    <input type="text" name="from" class="form-control datetime-picker" id="from" data-default-date="<?php echo e($request->from); ?>">
</div>
