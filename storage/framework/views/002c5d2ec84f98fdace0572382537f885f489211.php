<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('admin::resource.detail', ['resource' => trans('contact::contacts.contact')])); ?>
    <?php $__env->slot('subtitle', ''); ?>

    <li><a href="<?php echo e(route('admin.contacts.index')); ?>"><?php echo e(trans('contact::contacts.contact')); ?></a></li>
    <li class="active"><?php echo e(trans('admin::resource.detail', ['resource' => trans('contact::contacts.contact')])); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="order clearfix">

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                    <tr>
                        <td style="width: 30%">Họ tên</td>
                        <td><?php echo e($contact->fullname); ?></td>
                    </tr>

                    <tr>
                        <td>Số điện thoại</td>
                        <td>
                            <?php echo e($contact->phone); ?>

                        </td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td><?php echo e($contact->email); ?></td>
                    </tr>

                    <tr>
                        <td>Quốc gia</td>
                        <td><?php echo e($contact->town); ?></td>
                    </tr>

                    <tr>
                        <td>Nội dung</td>
                        <td><?php echo e($contact->body); ?> </td>
                    </tr>

                    <tr>
                        <td>Thời gian</td>
                        <td><?php echo e($contact->created_at); ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('product::admin.products.partials.shortcuts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>