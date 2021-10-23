<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('contact::contacts.contacts')); ?>

    <li class="active"><?php echo e(trans('contact::contacts.contacts')); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('admin::components.page.index_table'); ?>
    <?php $__env->slot('resource', 'contacts'); ?>
    <?php $__env->slot('name', trans('contact::contacts.contact')); ?>

    <?php $__env->slot('thead'); ?>
        <?php echo $__env->make('contact::admin.contacts.partials.thead', ['name' => 'contacts-index'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        new DataTable('#contacts-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                { data: 'fullname', name: 'fullname', orderable: false, defaultContent: '', width: '10%'  },
                { data: 'phone', name: 'phone', orderable: false, defaultContent: '', width: '10%'  },
                { data: 'email', name: 'email', searchable: false, width: '10%'  },
                { data: 'town', name: 'town', searchable: false, width: '20%'  },
                { data: 'body', name: 'body', searchable: false, width: '20%'  },
                { data: 'created', name: 'created_at', width: '10%'  },
            ],
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>