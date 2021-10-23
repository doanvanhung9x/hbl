<?php if($categoryMenu->menus()->isNotEmpty() || $primaryMenu->menus()->isNotEmpty()): ?>
    <div class="menu">
    <div class="containerx">
        <div class="d-flex px-2 justify-content-between align-items-center flex-wrap p-xl-0 py-lg-2">
            <ul class="menuhome justify-content-between">
                <li><a href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
                <li>
                    <a href="javascript:void(0)"><?php echo e(trans('storefront::custom.home.information')); ?></a>
                    <?php echo $__env->make('public.partials.primary_menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </li>
                <?php $__currentLoopData = $categoryMenu->menus(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e($menu->url()); ?>"><?php echo e($menu->name()); ?><i class="fas fa-caret-down"></i></a>
                    <?php if(optional($menu->subMenus())->count() > 0): ?>
                        <div class="dropdown">
                            <ul >
                                <?php $__currentLoopData = $menu->subMenus(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e($category->url()); ?>"><?php echo e($category->name()); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $categoryPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e($categoryPost->url()); ?>"><?php echo e($categoryPost->name); ?><i class="fas fa-caret-down"></i></a>
                        <?php if(optional($categoryPost)->count() > 0): ?>
                            <div class="dropdown">
                                <ul >
                                    <?php $__currentLoopData = $categoryPost->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childrenPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e($childrenPost->url()); ?>"><?php echo e($childrenPost->name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e(route('contacts.create')); ?>"><?php echo e(trans('storefront::custom.home.contact')); ?></a></li>
            </ul>
            <div class="btn-sidebar d-block d-lg-none">
                <button type="button" class="btn-sidebar"><i class="fas fa-bars"></i></button>
            </div>
            <form class="nav-search">
                <input type="text" name="search" class="p-2" placeholder="Tìm kiếm ...">
                <button class="btn-search"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
</div>
<?php endif; ?>
<div class="sidebar">
    <div>
        <img src="/frontend/images/logo-7411.png">
    </div>
    <div class="close-sidebar">
        <button type="button" class="btn-exit"><i class="fas fa-window-close"></i></button>
    </div>
    <ul class="menu-sidebar">
        <li><a href="http://">Trang chủ</a></li>
        <li><a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Giới thiệu&nbsp;<i class="fas fa-caret-down"></i>
            </a>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <ul class="d-block dropdown-sidebar">
                        <li><a href="">menu1</a></li>
                        <li><a href="">menu1</a></li>
                        <li><a href="">menu1</a></li>

                    </ul>
                </div>
            </div>
        </li>

        <li><a class="" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                TRISO GROUP&nbsp;<i class="fas fa-caret-down"></i>
            </a>
            <div class="collapse" id="collapseExample1">
                <div class="card card-body">
                    <ul class="d-block dropdown-sidebar">
                        <li><a href="">menu1</a></li>
                        <li><a href="">menu1</a></li>
                        <li><a href="">menu1</a></li>

                    </ul>
                </div>
            </div>
        </li>
        <li><a href="http://">Sản phẩm</a></li>
        <li><a class="" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Tin tức sự kiện&nbsp;<i class="fas fa-caret-down"></i>
            </a>
            <div class="collapse" id="collapseExample2">
                <div class="card card-body">
                    <ul class="d-block dropdown-sidebar">
                        <li><a href="">menu1</a></li>
                        <li><a href="">menu1</a></li>
                        <li><a href="">menu1</a></li>

                    </ul>
                </div>
            </div>
        </li>
        <li><a href="http://">Tin nội bộ</a></li>
        <li><a href="http://">Tuyển dụng</a></li>
        <li><a href="http://">Liên hệ</a></li>
    </ul>
</div>
