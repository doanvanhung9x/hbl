<?php $__currentLoopData = $slider->slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="swiper-slide">
        <img src="<?php echo e($slide->file->path); ?>" width="100%">
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

