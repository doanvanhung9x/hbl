<div class="menu">
    <div class="containerx">
        <div class="d-flex px-2 justify-content-between align-items-center flex-wrap p-xl-0 py-lg-2">
            <ul class="menuhome justify-content-between">
                <li><a href="<?php echo e(route('home')); ?>" style="border-left: none;">Trang chủ</a></li>
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
                <li><a href="javascript:void(0);">HBL GROUP</a>
                    <div class="dropdown">
                        <ul>
                            <li class="sub"><a href="javascript:void(0);">Nhà máy sản xuất</a>
                                <div class="dropdown">
                                    <ul class="submenu">
                                        <li><a href="/cong-ty-co-phan-nutrihealth">CTCP NUTRIHEALTH</a></li>
                                        <li><a href="/cong-ty-co-phan-d2pharm-viet-nam">CTCP D2Pharm Việt Nam</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sub"><a href="javascript:void(0);">Công ty công nghệ</a>
                                <div class="dropdown">
                                    <ul class="submenu">
                                        <li><a href="/cong-ty-tnhh-phan-mem-va-truyen-thong-boxlink">CT TNHN PHẦN MỀM VÀ TRUYỀN THÔNG BOXLINK</a></li>
                                        <li><a href="/cong-ty-co-phan-cong-nghe-suc-khoe-sao-dai-viet">CTCP CÔNG NGHỆ SỨC KHỎE SAO ĐẠI VIỆT</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sub"><a href="javascript:void(0);">Công ty phân phối OTC/ETC</a>
                                <div class="dropdown">
                                    <ul class="submenu">
                                        <li><a href="/cong-ty-co-phan-duoc-dich-vu-y-te-cong-dong">CTCP Dược & dịch vụ y- tế cộng đồng</a></li>
                                        <li><a href="/cong-ty-co-phan-y-te-hbl-hai-duong">CTCP Y TẾ HBL HẢI DƯƠNG</a></li>
                                        <li><a href="/cong-ty-co-phan-y-te-hbl-hai-phong">CTCP Y TẾ HBL HẢI PHÒNG</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sub"><a href="javascript:void(0);">Công ty truyền thông</a>
                                <div class="dropdown">
                                    <ul class="submenu">
                                        <li><a href="/cong-ty-co-phan-truyen-thong-cham-soc-suc-khoe-sao-dai-viet">CTCP TRUYỀN THÔNG CHĂM SÓC SỨC KHỎE SAO ĐẠI VIỆT</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sub"><a href="javascript:void(0);">Công ty xuất nhập khẩu</a>
                                <div class="dropdown">
                                    <ul class="submenu">
                                        <li><a href="/cong-ty-co-phan-duoc-pham-va-cong-nghe-y-te-anpharco">CTCP DƯỢC PHẨM VÀ CÔNG NGHỆ Y TẾ ANPHARCO</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li><a href="/he-thong-phan-phoi">HỆ THỐNG PHÂN PHỐI</a>
                    <div class="dropdown">
                        <ul>
                            <li><a href="/danh-sach-quay-thuoc">Danh sách quầy thuốc</a></li>
                            <li><a href="/chuoi-cua-hang-alosuckhoe">Chuỗi cửa hàng Alosuckhoe</a></li>
                        </ul>
                    </div>
                </li>




















                <?php $__currentLoopData = $categoryProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e($categoryProduct->url()); ?>"><?php echo e($categoryProduct->name); ?></a>
                        <?php if(optional($categoryProduct->children)->count() > 0): ?>
                            <div class="dropdown">
                                <ul >
                                    <?php $__currentLoopData = $categoryProduct->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childrenPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e($childrenPost->url()); ?>"><?php echo e($childrenPost->name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        <?php if(is_null($headerLogo)): ?>
            <h2><?php echo e(setting('store_name')); ?></h2>
        <?php else: ?>
            <img src="<?php echo e($headerLogo); ?>" width="145px" alt="<?php echo e(setting('store_name')); ?>"/>
        <?php endif; ?>
    </div>
    <div class="close-sidebar">
        <button type="button" class="btn-exit"><i class="fas fa-window-close"></i></button>
    </div>
    <ul class="menu-sidebar">
        <li><a href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
        <li><a class="/gioi-thieu" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Giới thiệu&nbsp;<i class="fas fa-caret-down"></i>
            </a>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <ul class="d-block dropdown-sidebar">
                        <li><a href="/lich-su-hinh-thanh-va-phat-trien">Lịch sử hình thành và phát triển</a></li>
                        <li><a href="/tam-nhin-su-menh-gia-tri-cot-loi">Tầm nhìn sứ mệnh, giá trị cốt lõi</a></li>
                        <li><a href="/hoi-dong-chuyen-gia">Hội đồng chuyên gia</a></li>
                        <li><a href="/giai-thuong">Giải thưởng</a></li>
                        <li><a href="/cac-doi-tac-cua-hbl-group">Các đối tác của HBL Group </a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li><a href="javascript:void(0);"></a>
        <li><a data-toggle="collapse" href="#collapseExample10" role="button" aria-expanded="false" aria-controls="collapseExample">
                HBL GROUP <i class="fas fa-caret-down"></i>
            </a>
            <div class="collapse" id="collapseExample10">
                <div class="card card-body">
                    <ul class="d-block dropdown-sidebar">
                        <li><a data-toggle="collapse" href="#collapseExample11" role="button" aria-expanded="false" aria-controls="collapseExample">Nhà máy sản xuất <i class="fas fa-caret-down"></i></a>
                            <div class="collapse" id="collapseExample11">
                                <div class="card card-body">
                                    <ul class="d-block dropdown-sidebar">
                                        <li><a href="/cong-ty-co-phan-nutrihealth">CTCP NUTRIHEALTH</a></li>
                                        <li><a href="/cong-ty-co-phan-d2pharm-viet-nam">CTCP D2Pharm Việt Nam</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a data-toggle="collapse" href="#collapseExample12" role="button" aria-expanded="false" aria-controls="collapseExample">Công ty công nghệ <i class="fas fa-caret-down"></i></a>
                            <div class="collapse" id="collapseExample12">
                                <div class="card card-body">
                                    <ul class="d-block dropdown-sidebar">
                                        <li><a href="/cong-ty-tnhh-phan-mem-va-truyen-thong-boxlink">CT TNHN PHẦN MỀM VÀ TRUYỀN THÔNG BOXLINK</a></li>
                                        <li><a href="/cong-ty-co-phan-cong-nghe-suc-khoe-sao-dai-viet">CTCP CÔNG NGHỆ SỨC KHỎE SAO ĐẠI VIỆT</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a data-toggle="collapse" href="#collapseExample15" role="button" aria-expanded="false" aria-controls="collapseExample">Công ty phân phối OTC/ETC <i class="fas fa-caret-down"></i></a>
                            <div class="collapse" id="collapseExample15">
                                <div class="card card-body">
                                    <ul class="d-block dropdown-sidebar">
                                        <li><a href="/cong-ty-co-phan-duoc-dich-vu-y-te-cong-dong">CTCP Dược & dịch vụ y- tế cộng đồng</a></li>
                                        <li><a href="/cong-ty-co-phan-y-te-hbl-hai-duong">CTCP Y TẾ HBL HẢI DƯƠNG</a></li>
                                        <li><a href="/cong-ty-co-phan-y-te-hbl-hai-phong">CTCP Y TẾ HBL HẢI PHÒNG</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a data-toggle="collapse" href="#collapseExample13" role="button" aria-expanded="false" aria-controls="collapseExample">Công ty truyền thông <i class="fas fa-caret-down"></i></a>
                            <div class="collapse" id="collapseExample13">
                                <div class="card card-body">
                                    <ul class="d-block dropdown-sidebar">
                                        <li><a href="/cong-ty-co-phan-truyen-thong-cham-soc-suc-khoe-sao-dai-viet">CTCP TRUYỀN THÔNG CHĂM SÓC SỨC KHỎE SAO ĐẠI VIỆT</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a data-toggle="collapse" href="#collapseExample14" role="button" aria-expanded="false" aria-controls="collapseExample">Công ty xuất nhập khẩu <i class="fas fa-caret-down"></i></a>
                            <div class="collapse" id="collapseExample14">
                                <div class="card card-body">
                                    <ul class="d-block dropdown-sidebar">
                                        <li><a href="/cong-ty-co-phan-truyen-thong-cham-soc-suc-khoe-sao-dai-viet">CTCP DƯỢC PHẨM VÀ CÔNG NGHỆ Y TẾ ANPHARCO</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <?php $__currentLoopData = $categoryProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a <?php if(optional($categoryProduct->children)->count() > 0): ?> data-toggle="collapse" href="#collapseExample15<?php echo e($categoryProduct->id); ?>" role="button" aria-expanded="false" aria-controls="collapseExample" <?php else: ?> href="<?php echo e($categoryProduct->url()); ?>" <?php endif; ?> ><?php echo e($categoryProduct->name); ?> <?php if(optional($categoryProduct->children)->count() > 0): ?><i class="fas fa-caret-down"></i> <?php endif; ?></a>
                <?php if(optional($categoryProduct->children)->count() > 0): ?>
                    <div class="collapse" id="collapseExample15<?php echo e($categoryProduct->id); ?>">
                        <div class="card card-body">
                            <ul class="d-block dropdown-sidebar">
                            <?php $__currentLoopData = $categoryProduct->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childrenPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e($childrenPost->url()); ?>"><?php echo e($childrenPost->name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = $categoryPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a <?php if(optional($categoryPost->children)->count() > 0): ?> data-toggle="collapse" href="#collapseExample16<?php echo e($categoryPost->id); ?>" role="button" aria-expanded="false" aria-controls="collapseExample" <?php else: ?> href="<?php echo e($categoryPost->url()); ?>" <?php endif; ?> ><?php echo e($categoryPost->name); ?> <?php if(optional($categoryPost->children)->count() > 0): ?><i class="fas fa-caret-down"></i> <?php endif; ?></a>
                <?php if(optional($categoryPost->children)->count() > 0): ?>
                    <div class="collapse" id="collapseExample16<?php echo e($categoryPost->id); ?>">
                        <div class="card card-body">
                            <ul class="d-block dropdown-sidebar">
                            <?php $__currentLoopData = $categoryPost->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childrenPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e($childrenPost->url()); ?>"><?php echo e($childrenPost->name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <li><a href="<?php echo e(route('contacts.create')); ?>"><?php echo e(trans('storefront::custom.home.contact')); ?></a></li>
    </ul>
</div>
