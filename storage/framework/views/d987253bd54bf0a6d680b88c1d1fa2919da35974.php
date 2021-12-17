<?php $__env->startSection('title'); ?>
    <?php if(request()->has('query')): ?>
        Kết quả cho từ khóa : "<?php echo e(request('q')); ?>"
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="bread">
        <div class="containerx">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kết quả cho từ khóa : "<?php echo e(request('q')); ?>"</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="listproduct" style="min-height: 500px;">
        <div class="containerx d-block" style="padding: 40px 0px;">
            <?php if(!$products->count() > 0 && !$posts->count() > 0): ?>
                <h4>Không tìm thấy nôi dung với từ khóa : "<?php echo e(request('q')); ?>"</h4>
            <?php endif; ?>
            <?php if($products->count() > 0): ?>
                <h4>Sản phẩm</h4>
                <div class="product mx-1 h-100 mb-3 row">
                    <?php $__currentLoopData = $products->filter(fn($p) => !empty($p->slug)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-6">
                            <div class="card">
                                <a href="<?php echo e(route('products.show', $product->slug)); ?>">
                                    <img class="card-img-top" src="<?php echo e(optional($product->base_image)->path); ?>" alt="<?php echo e($product->name); ?>">
                                    <div class="card-body">
                                        <h5><?php echo e($product->name); ?></h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

            <?php if($posts->count() > 0): ?>
                <h4>Bài viết</h4>
                <div class="product mx-1 h-100 row">
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-6">
                            <div class="card">

                                    <img class="card-img-top" src="<?php echo e(optional($post->base_image)->path); ?>" alt="<?php echo e($post->title); ?>">
                                    <div class="card-body">
                                        <h5><?php echo e($post->title); ?></h5>
                                    </div>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>