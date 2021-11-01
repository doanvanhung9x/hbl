<div class="menu">
    <div class="containerx">
        <div class="d-flex px-2 justify-content-between align-items-center flex-wrap p-xl-0 py-lg-2">
            <ul class="menuhome justify-content-between">
                <li><a href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
                <li><a href="/gioi-thieu">Giới thiệu</a>
                    <div class="dropdown">
                        <ul>
                            <li><a href="/lich-su-hinh-thanh-va-phat-trien">Lịch sử hình thành và phát triển</a></li>
                            <li><a href="/tam-nhin-su-menh-gia-tri-cot-loi">Tầm nhìn sứ mệnh, giá trị cốt lõi</a></li>
                            <li><a href="/hoi-dong-chuyen-gia">Hội đồng chuyên gia</a></li>
                            <li><a href="/giai-thuong">Giải thưởng</a></li>
                            <li><a href="/cac-doi-tac-cua-hbl-group">Các đối tác của HBL Group </a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="/hbl-group">HBL GROUP</a>
                    <div class="dropdown">
                        <ul>
                            <li><a href="/factory">Factory</a></li>
                            <li><a href="/media">Media</a></li>
                            <li><a href="/technology">Technology</a></li>
                            <li><a href="/educate">Educate</a></li>
                            <li><a href="/anpharco">Anpharco</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="/san-pham">Sản phẩm</a></li>




























                <?php $__currentLoopData = $categoryPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e($categoryPost->url()); ?>"><?php echo e($categoryPost->name); ?></a>
                        <?php if(optional($categoryPost->children)->count() > 0): ?>
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







        </div>
    </div>
</div>
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
