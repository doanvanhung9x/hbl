<?php $__env->startSection('title'); ?>
    <?php if(request()->has('query')): ?>
        <?php echo e(trans('storefront::products.search_results_for')); ?>: "<?php echo e(request('query')); ?>"
    <?php else: ?>
        <?php echo e(trans('storefront::products.shop')); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="bread">
        <div class="containerx">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php if(!empty($category)): ?>  <?php echo e($category->name); ?> <?php elseif(request('query')): ?> <?php echo e(request('query')); ?> <?php endif; ?></li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="listproduct" style="min-height: 500px;">
        <div class="containerx d-md-flex d-block" style="padding: 40px 0px;">
            <div class="product mx-1 col-12 h-100 row">
                <?php if($products->count() > 0): ?>
                    <?php $__currentLoopData = $products->filter(fn($p) => !empty($p->slug)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-3">
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
                <?php endif; ?>
                <?php echo e($products->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>