<?php $__env->startSection('breadcrumb'); ?>
<a-breadcrumb style="margin: 16px 0">
    <a-breadcrumb-item>
      <a href="<?php echo e(route('home')); ?>" title="home">
        Home
      </a>
    </a-breadcrumb-item>
    <a-breadcrumb-item>
      <a href="<?php echo e(route('account.dashboard')); ?>" title="user dashboard">
        User Dashboard
      </a>
    </a-breadcrumb-item>

    <a-breadcrumb-item>
        Orders
    </a-breadcrumb-item>
</a-breadcrumb>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a-row type="flex" class="mb-1" justify="start">
    <a-col>
        <h1><?php echo e(__('Orders')); ?></h1>
    </a-col>
</a-row>
<a-row type="flex" :gutter="15" class="mt-1">
    <a-col :span="24">
        <user-order-table inline-template>
            <a-table :columns="columns" row-key="id" :data-source="<?php echo e($userOrders); ?>">
                <span slot="action" slot-scope="text, record">
                    <a :href="getShowUrl(record)">
                        <a-icon type="eye"></a-icon>
                    </a>
                </span>
            </a-table>
        </user-order-table>
    </a-col>
</a-row>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\resources\views/account/order/index.blade.php ENDPATH**/ ?>