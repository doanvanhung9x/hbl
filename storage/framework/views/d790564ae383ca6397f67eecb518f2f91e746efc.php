<?php $__env->startSection('title', $page->name); ?>

<?php $__env->startPush('meta'); ?>
    <meta name="title" content="<?php echo e($page->meta->meta_title); ?>">
    <meta name="keywords" content="<?php echo e(implode(',', $page->meta->meta_keywords)); ?>">
    <meta name="description" content="<?php echo e($page->meta->meta_description); ?>">
    <meta property="og:title" content="<?php echo e($page->meta->meta_title); ?>">
    <meta property="og:description" content="<?php echo e($page->meta->meta_description); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="bread">
        <div class="containerx">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e($page->name); ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="post" style="min-height: 500px; padding: 40px 0px;">
        <div class="containerx">
            <?php echo $page->body; ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>