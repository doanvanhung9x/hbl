<footer class="py-4 px-2">
    <div class="containerx d-sm-flex d-block">
        <div class="col-sm-3 col-12 info px-2">
            <h6><b><?php echo e(setting('store_name')); ?></b></h6>
            <span><b>Hotline:</b> <?php echo e(setting('store_phone')); ?> </span><br>
            <span><b>Email:</b> <?php echo e(setting('store_email')); ?></span><br>
            <span><b>Địa Chỉ:</b> C3 Lô 18 KĐT Định Công, Phường Định Công, Quận Hoàng Mai, Thành phố Hà Nội, Việt Nam</span><br>
        </div>
        <div class="col-12 col-sm-3 fbox px-2">
            <h6><b>Liên kết nhanh</b></h6>
            <ul>
                <?php if($footerMenu->isNotEmpty()): ?>
                    <?php $__currentLoopData = $footerMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e($menuItem->url()); ?>"><?php echo e($menuItem->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </ul>
        </div>
        <div class="col-12 col-sm-3 fbox px-2">
            <h6><b><?php echo e(trans('storefront::custom.home.more_information')); ?></b></h6>
            <ul>
                <li><a href="<?php echo e(route('home')); ?>"><?php echo e(trans('storefront::custom.home.home')); ?></a></li>
                <li><a href="<?php echo e(route('home')); ?>/lien-he"><?php echo e(trans('storefront::custom.home.contact')); ?></a></li>
                <li><a href="<?php echo e(route('home')); ?>/gioi-thieu"><?php echo e(trans('storefront::custom.home.introduce')); ?></a></li>
            </ul>
        </div>
        <div class=" col-12 col-sm-3 connect px-2">
            <ul class="ft-social">
                <li>
                    <a target="_blank" class="text-orange" href="https://www.youtube.com/channel/UCsNCWsOdIP7-FSu0TjIHUAw">
                        <i class="fab fa-youtube-square"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" class="text-orange" href="https://www.facebook.com/HBL-Group-100932422247451">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<hr>
<div class="py-2 text-left mb-2">
    <div class="containerx">
        <h6>Công ty tập đoàn HBL</h6>
        <span>GPKD: Giấy phép kinh doanh số 0109604698</span><br>
        <span>Sở kế hoạch và đầu tư thành phố Hà Nội cấp giấy phép: 20/04/2021</span><br>
    </div>
</div>
<div class="copyright py-2 text-center" style="color: #fff;">
    <?php echo $copyrightText; ?>.<br/>
    <i>Thực phẩm này không phải là thuốc và không có tác dụng thay thế thuốc chữa bệnh.</i>
</div>
