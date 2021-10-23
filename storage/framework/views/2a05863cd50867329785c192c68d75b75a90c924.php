<?php $__env->startSection('title', $product->name); ?>

<?php $__env->startPush('meta'); ?>
    <meta name="title" content="<?php echo e($product->meta->meta_title); ?>">
    <meta name="keywords" content="<?php echo e(implode(',', $product->meta->meta_keywords)); ?>">
    <meta name="description" content="<?php echo e($product->meta->meta_description); ?>">
    <meta property="og:title" content="<?php echo e($product->meta->meta_title); ?>">
    <meta property="og:description" content="<?php echo e($product->meta->meta_description); ?>">
    <meta property="og:image" content="<?php echo e($product->baseImage->path); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="bread">
        <div class="containerx">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e($product->name); ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="listproduct" style="min-height: 500px; padding: 40px 0px;">
        <div class="containerx d-md-flex d-block justify-content-between">
            <div class="detailproduct px-2 col-md-7 col-12 h-100 row">
                <h4><?php echo e($product->name); ?></h4>
                <img src="<?php echo e(optional($product->base_image)->path); ?>"/>
                <div class="py-4">
                    <?php echo $product->description; ?>

                </div>
            </div>
            <div class="hotnews col-md-4 col-12 mt-2">
                <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('frontend/images/sptriso-4342.jpg')); ?>" width="100%"></a>
                <?php if($posts->count() >0 ): ?>
                <div class="boxnews">
                    <h3 class="py-2">TIN TỨC CẬP NHẬT</h3>
                    <div class="main">
                        <ul>
                            <?php $__currentLoopData = $posts->filter(fn($p) => !empty($p->slug)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e(route('posts.show', $post->slug)); ?>">
                                        <div class="thum"><img src="<?php echo e(optional($post->base_image)->path); ?>" width="100%"></div>
                                        <p><?php echo e($post->title); ?></p>
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