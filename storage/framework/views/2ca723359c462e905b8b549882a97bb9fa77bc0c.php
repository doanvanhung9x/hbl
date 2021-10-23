<?php if($categoryMenu->menus()->isNotEmpty() || $primaryMenu->menus()->isNotEmpty()): ?>
    <div class="col-sm-auto ms-auto pr-0 align-self-center">
        <nav id="top-primary-nav" class="menuzord theme-color2" data-effect="slide" data-animation="none" data-align="right">
            <ul id="main-nav" class="menuzord-menu">
                <li class="menu-item">
                    <a href="<?php echo e(route('home')); ?>"><?php echo e(trans('storefront::custom.home.home')); ?></a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0)"><?php echo e(trans('storefront::custom.home.information')); ?></a>
                    <?php echo $__env->make('public.partials.primary_menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0)"><?php echo e(trans('storefront::custom.home.product')); ?></a>
                    <div class="megamenu megamenu-fullwidth megamenu-position-left">
                        <div class="megamenu-row">
                            <?php $__currentLoopData = $categoryMenu->menus(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div  class="col3">
                                    <ul class="list-unstyled list-dashed text-center">
                                        <li class="menu-item">
                                            <ul class="list-unstyled">
                                                <li class=""><a class=" tm-submenu-title" href="<?php echo e($menu->url()); ?>"><span><?php echo e($menu->name()); ?></span> </a></li>
                                                <?php if(optional($menu->subMenus())->count() > 0): ?>
                                                    <?php $__currentLoopData = $menu->subMenus(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li><a href="<?php echo e($category->url()); ?>"><?php echo e($category->name()); ?></a></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </li>

                <li class="menu-item">
                    <a href="javascript:void(0)"><?php echo e(trans('storefront::custom.home.post')); ?></a>
                    <?php if($categoryPosts->count() > 0): ?>
                        <div class="megamenu megamenu-fullwidth megamenu-position-left">
                            <div class="megamenu-row">
                                <?php $__currentLoopData = $categoryPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(optional($categoryPost)->count() > 0): ?>
                                        <div  class="col3">
                                            <ul class="list-unstyled list-dashed text-center">
                                                <li class="menu-item">
                                                    <ul class="list-unstyled">
                                                        <li class=""><a class=" tm-submenu-title" href="<?php echo e($categoryPost->url()); ?>"><span><?php echo e($categoryPost->name); ?></span> </a></li>
                                                        <?php $__currentLoopData = $categoryPost->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childrenPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li><a href="<?php echo e($childrenPost->url()); ?>"><?php echo e($childrenPost->name); ?></a></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </li>

                <li class="menu-item">
                    <a href="<?php echo e(route('contacts.create')); ?>"><?php echo e(trans('storefront::custom.home.contact')); ?></a>
                </li>
            </ul>
        </nav>
    </div>
<?php endif; ?>
