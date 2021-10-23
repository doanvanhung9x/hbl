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
    <div class="main-content-area">
        <!-- Section: page title -->
        <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="<?php echo e(asset('frontend/images/bg/bg1.jpg')); ?>">
            <div class="container pt-50 pb-50">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title"><?php if(!empty($category)): ?>  <?php echo e($category->name); ?> <?php elseif(request('query')): ?> <?php echo e(request('query')); ?> <?php endif; ?></h2>
                            <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                                <div class="breadcrumbs">
                                    <span><a href="<?php echo e(route('home')); ?>" rel="<?php echo e(trans('storefront::custom.home.home')); ?>"><?php echo e(trans('storefront::custom.home.home')); ?></a></span>
                                    <?php if(!empty($category)): ?>
                                        <span><i class="fa fa-angle-right"></i></span>
                                        <span><a href="javascript:void(0)"><?php echo e($category->name); ?></a></span>
                                    <?php elseif(request('query')): ?>
                                        <span><i class="fa fa-angle-right"></i></span>
                                        <span><a href="javascript:void(0)"><?php echo e(request('query')); ?></a></span>
                                    <?php endif; ?>
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
                    <div class="col-md-9 sm-pull-none">
                        <div class="blog-posts">
                            <?php if($posts->count() > 0): ?>
                                <?php $__currentLoopData = $posts->filter(fn($p) => !empty($p->slug)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <article class="post clearfix mb-30 border-1px">
                                        <div class="row">
                                            <div class="col">
                                                <div class="entry-header">
                                                    <div class="post-thumb thumb">
                                                        <img src="<?php echo e(optional($post->base_image)->path); ?>" alt="<?php echo e($post->title); ?>" class="img-responsive img-fullwidth">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="entry-content p-10">
                                                    <h4 class="entry-title mb-0"><a href="<?php echo e(route('posts.show', $post->slug)); ?>"><?php echo e($post->title); ?></a></h4>
                                                    <p class="mt-10"><?php echo e($post->short_description); ?></p>
                                                    <a href="<?php echo e(route('posts.show', $post->slug)); ?>" class="btn btn-plain-text-with-arrow"><?php echo e(trans('storefront::custom.multi.read_more')); ?></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <nav>
                                <?php echo $posts->links(); ?>

                            </nav>
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

                            <div class="widget">
                                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1"><?php echo e(trans('storefront::custom.multi.post_new')); ?></h4>
                                <div class="latest-posts">
                                    <?php $__currentLoopData = $postNews->filter(fn($pNew) => !empty($pNew->slug)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postNew): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                            <div class="widget widget_text">
                                <div class="textwidget">
                                    <div class="section-typo-light bg-theme-colored1 text-center mb-md-40 p-30 pt-40 pb-40"> <img class="size-full wp-image-800 aligncenter" src="<?php echo e(asset('frontend/images/headphone-128.png')); ?>" width="128" height="128" />
                                        <h4 style="text-align: center;"><?php echo e(trans('storefront::custom.multi.help')); ?></h4>
                                        <h5 style="text-align: center;">+<?php echo e(setting('store_phone')); ?></h5>
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