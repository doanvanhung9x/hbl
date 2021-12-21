<?php $__currentLoopData = $primaryMenu->menus(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $primaryMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo $__env->make('public.partials.mega_menu.menu', ['menu' => $primaryMenu, 'type' => $type], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
