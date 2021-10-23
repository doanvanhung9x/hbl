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
            <div class="product mx-1 col-md-8 col-12 h-100 row">
                <?php if($products->count() > 0): ?>
                    <?php $__currentLoopData = $products->filter(fn($p) => !empty($p->slug)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card">
                            <a href="<?php echo e(route('products.show', $product->slug)); ?>" class="">
                                <img class="card-img-top" src="<?php echo e(optional($product->base_image)->path); ?>" alt="<?php echo e($product->name); ?>">
                                <div class="card-body">
                                    <h5><?php echo e($product->name); ?></h5>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <?php echo e($products->links()); ?>

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
<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>