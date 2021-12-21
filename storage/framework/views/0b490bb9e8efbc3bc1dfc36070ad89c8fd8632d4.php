<?php if($type == 1): ?>
    <li><a href="<?php echo e($menu->url()); ?>"><?php echo e($menu->name()); ?></a>
        <?php if($menu->hasSubMenus()): ?>
            <div class="dropdown">
                <ul >
                    <?php $__currentLoopData = $menu->subMenus(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childrenMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e($childrenMenu->url()); ?>"><?php echo e($childrenMenu->name()); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
    </li>
<?php else: ?>
    <li><a <?php if($menu->hasSubMenus()): ?> data-toggle="collapse" href="#collapseExample156<?php echo e($menu->id()); ?>" role="button" aria-expanded="false" aria-controls="collapseExample" <?php else: ?> href="<?php echo e($menu->url()); ?>" <?php endif; ?> ><?php echo e($menu->name()); ?> <?php if($menu->hasSubMenus()): ?><i class="fas fa-caret-down"></i> <?php endif; ?></a>
        <?php if($menu->subMenus()): ?>
            <div class="collapse" id="collapseExample156<?php echo e($menu->id()); ?>">
                <div class="card card-body">
                    <ul class="d-block dropdown-sidebar">
                        <?php $__currentLoopData = $menu->subMenus(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childrenMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e($childrenMenu->url()); ?>"><?php echo e($childrenMenu->name()); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    </li>
<?php endif; ?>
