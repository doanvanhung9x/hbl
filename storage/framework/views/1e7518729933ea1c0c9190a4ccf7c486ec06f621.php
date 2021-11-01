<div class="single-banner">
    <div class="banner-header">
        <h5><?php echo e($label); ?></h5>
    </div>

    <div class="banner-body">
        <div class="banner-image">
            <?php if(is_null($banner->image->path)): ?>
                <i class="fa fa-picture-o" aria-hidden="true"></i>
                <img class="hide">
            <?php else: ?>
                <img src="<?php echo e($banner->image->path); ?>">
            <?php endif; ?>

            <input type="hidden" name="translatable[<?php echo e($name); ?>_file_id]" value="<?php echo e($banner->image->id); ?>" class="banner-file-id">
        </div>

        <div class="banner-content clearfix">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-6">
                    <div class="form-group">
                        <label for="<?php echo e($name); ?>-caption-1"><?php echo e(trans("storefront::attributes.caption_1")); ?></label>
                        <input type="text" name="translatable[<?php echo e($name); ?>_caption_1]" value="<?php echo e($banner->caption_1); ?>" class="form-control" id="<?php echo e($name); ?>-caption-1">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-6">
                    <div class="form-group">
                        <label for="<?php echo e($name); ?>-caption-2"><?php echo e(trans("storefront::attributes.caption_2")); ?></label>
                        <input type="text" name="translatable[<?php echo e($name); ?>_caption_2]" value="<?php echo e($banner->caption_2); ?>" class="form-control" id="<?php echo e($name); ?>-caption-2">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-6 clearfix">
                    <div class="form-group">
                        <label for="<?php echo e($name); ?>-call-to-action-text"><?php echo e(trans("storefront::attributes.call_to_action_text")); ?></label>
                        <input type="text" name="translatable[<?php echo e($name); ?>_call_to_action_text]" value="<?php echo e($banner->call_to_action_text); ?>" class="form-control" id="<?php echo e($name); ?>-call-to-action-text">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-6 clearfix">
                    <div class="form-group">
                        <label for="<?php echo e($name); ?>-call-to-action-url"><?php echo e(trans("storefront::attributes.call_to_action_url")); ?></label>
                        <input type="text" name="<?php echo e($name); ?>_call_to_action_url" value="<?php echo e($banner->call_to_action_url); ?>" class="form-control" id="<?php echo e($name); ?>-call-to-action-url">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-6">
                    <div class="checkbox">
                        <input type="hidden" name="<?php echo e($name); ?>_open_in_new_window" value="0">
                        <input type="checkbox" name="<?php echo e($name); ?>_open_in_new_window" value="1" id="<?php echo e($name); ?>-open-in-new-window" <?php echo e($banner->open_in_new_window ? 'checked' : ''); ?>>
                        <label for="<?php echo e($name); ?>-open-in-new-window">
                            <?php echo e(trans("storefront::attributes.open_in_new_window")); ?>

                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
