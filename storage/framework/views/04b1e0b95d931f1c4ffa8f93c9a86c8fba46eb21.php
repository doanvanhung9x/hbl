<?php $__env->startSection('title'); ?>
    <?php echo e(trans('storefront::products.shop')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <style>
        .hotnews img{
            width: 100%;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="bread">
        <div class="containerx">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e($post->title); ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="listproduct" style="min-height: 500px; padding: 40px 0px;">
        <div class="containerx d-md-flex d-block justify-content-between">
            <div class="hotnews px-2 col-md-9 col-12 h-100 row">
               <?php echo $post->body; ?>


                <div class="news-social">
                    Chia sẻ với:
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(route('posts.show', $post->slug)); ?>"><i class="fab fa-facebook-square"></i></a>
                </div>
            </div>
            <div class="hotnews col-md-3 col-12 mt-2">
                <?php if($postNews->count() > 0): ?>
                    <div class="boxnews" style="border: none;">
                        <h4 class="py-2">TIN TỨC MỚI</h4>
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






                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>