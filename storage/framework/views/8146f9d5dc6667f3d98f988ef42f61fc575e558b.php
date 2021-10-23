<?php $__env->startSection('title'); ?>
    <?php echo e(trans('storefront::products.shop')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <style>
        .entry-header{
            min-height: 226px;
            max-height: 226px;
            overflow: hidden;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="bread">
        <div class="containerx">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <?php if(!empty($category)): ?>
                            <span><i class="fa fa-angle-right"></i></span>
                            <span><a href="javascript:void(0)"><?php echo e($category->name); ?></a></span>
                        <?php elseif(request('query')): ?>
                            <span><i class="fa fa-angle-right"></i></span>
                            <span><a href="javascript:void(0)"><?php echo e(request('query')); ?></a></span>
                        <?php endif; ?>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="listproduct" style="min-height: 500px; padding: 40px 0px;">
        <div class="containerx d-md-flex d-block justify-content-between">
            <div class="hotnews px-2 col-md-7 col-12 h-100 row">
                <h4 >TIN NỔI BẬT</h4>
                <!--boxnews-->
                <?php if($posts->count() > 0): ?>
                    <?php $__currentLoopData = $posts->filter(fn($p) => !empty($p->slug)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="boxnews py-4">
                        <img src="<?php echo e(optional($post->base_image)->path); ?>" width="250px">
                        <div>
                            <h6><a href="<?php echo e(route('posts.show', $post->slug)); ?>"><?php echo e($post->title); ?></a></h6>
                            <?php echo e($post->short_description); ?>

                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <?php echo $posts->links(); ?>

            </div>
            <div class="hotnews col-md-4 col-12 mt-2">
                <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('frontend/images/sptriso-4342.jpg')); ?>" width="100%"></a>
                <?php if($postNews->count() > 0): ?>
                <div class="boxnews">
                    <h3 class="py-2">TIN TỨC MỚI</h3>
                    <div class="main">
                        <ul>
                            <?php $__currentLoopData = $postNews->filter(fn($pNew) => !empty($pNew->slug)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postNew): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(route('posts.show', $postNew->slug)); ?>">
                                    <div class="thum"><img src="<?php echo e(optional($postNew->base_image)->path); ?>" width="100%"></div>
                                    <p><?php echo e($postNew->title); ?></p>
                                </a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <div class="videohot mt-5">
                            <iframe width="100%" height="250px" src="https://www.youtube.com/embed/1CH53CM84TU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div>
                                <h5 class="name font-weight-bold;">Những khoảnh khắc đáng nhớ - Lễ Khánh thành Văn phòng mới Triso Group</h5>
                                Ngày 19/05/2020, Triso Group tổ chức Lễ Khánh thành văn phòng mới tại địa chỉ Lô U16-L12, Khu đô thị mới Dương Nội, Phường Yên Nghĩa, Quận Hà Đông, Hà Nội.
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>