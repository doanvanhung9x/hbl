<?php $__env->startSection('title'); ?>
    <?php echo e(trans('storefront::products.shop')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <style>
        .post p{
            margin-bottom: 10px;
        }

        .post strong{
            font-weight: bold;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="main-content-area">
        <!-- Section: page title -->
        <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="<?php echo e(asset('frontend/images/bg/bg1.jpg')); ?>">
            <div class="container pt-50 pb-50">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title"><?php echo e($post->title); ?></h2>
                            <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                                <div class="breadcrumbs">
                                    <span><a href="<?php echo e(route('home')); ?>" rel="<?php echo e(trans('storefront::custom.home.home')); ?>"><?php echo e(trans('storefront::custom.home.home')); ?></a></span>
                                    <span><i class="fa fa-angle-right"></i></span>
                                    <span><a href="javascript:void(0)"><?php echo e($post->title); ?></a></span>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container mt-30 mb-30 pt-30 pb-30">
                <div class="row">
                    <div class="col-md-9">
                        <div class="blog-posts single-post">
                            <article class="post clearfix mb-0">
                                <?php echo $post->body; ?>

                            </article>
                            <div class="tagline style">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="share flip">
                                            <p><i class="fa fa-share-alt text-theme-colored1"></i>
                                                <?php echo e(trans('storefront::custom.multi.share')); ?>:
                                                <a class="social-link" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(route('posts.show', $post->slug)); ?>" ><i class="fab fa-facebook"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar sidebar-right mt-sm-30">
                            <div class="widget widget_categories">
                                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1"><?php echo e(trans('storefront::custom.multi.category')); ?></h4>
                                <?php if($categories->count() > 0): ?>
                                    <ul>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e($category->url()); ?>"><?php echo e($category->name); ?></a>







                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        <?php if($postNews): ?>
                            <div class="widget">
                                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1"><?php echo e(trans('storefront::custom.multi.post_new')); ?></h4>
                                <div class="latest-posts">
                                    <?php $__currentLoopData = $postNews->filter(fn($p) => !empty($p->slug)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postNew): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <article class="post clearfix pb-0 mb-20">
                                            <a class="post-thumb" href="<?php echo e(route('posts.show', $postNew->slug)); ?>"><img src="<?php echo e(optional($postNew->base_image)->path); ?>" alt="<?php echo e($postNew->title); ?>"></a>
                                            <div class="post-right">
                                                <h5 class="post-title mt-0"><a href="<?php echo e(route('posts.show', $postNew->slug)); ?>"><?php echo e($postNew->title); ?></a></h5>
                                                <span class="post-date">
                                                <time class="entry-date" datetime="<?php echo e($postNew->created_at); ?>"><?php echo e($postNew->created_at); ?></time>
                                              </span>
                                            </div>
                                        </article>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                            <div class="widget widget_text">
                                <div class="textwidget">
                                    <div class="section-typo-light bg-theme-colored1 text-center mb-md-40 p-30 pt-40 pb-40"> <img class="size-full wp-image-800 aligncenter" src="<?php echo e(asset('frontend/images/headphone-128.png')); ?>" width="128" height="128" />
                                        <h4 style="text-align: center;"><?php echo e(trans('storefront::custom.multi.help')); ?></h4>
                                        <h5 style="text-align: center;"><?php echo e(setting('store_phone')); ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>