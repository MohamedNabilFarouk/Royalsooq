<?php $__env->startSection('content'); ?>

<ul class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li><a href="#">account</a>
                    </li>
                    <li class="active">Orders</li>
</ul>

<div class="container">
   <div class="row">
      
        <div class='col-md-9' style="  background-color: #f5f5f5;
                    padding: 2%;
                    margin-top: 0px;
                    border: #e2e2e2 1px solid;">
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
                </div>
    </div>
</div>                   

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\resources\views/account/order/index.blade.php ENDPATH**/ ?>