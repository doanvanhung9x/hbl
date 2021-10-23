<div class="sidebar sidebar-right mt-sm-30">
    <div class="widget widget_categories">
        <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1"><?php echo e(trans('storefront::custom.multi.category')); ?></h4>
        <ul>
            <?php if($categories->isNotEmpty()): ?>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="cat-item"><a href="<?php echo e(request()->fullUrlWithQuery(['category' => $category->slug, 'page' => 1])); ?>"><?php echo e($category->name); ?></a> </li>






                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>
    </div>
</div>
