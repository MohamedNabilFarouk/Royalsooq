<?php $__env->startSection('content'); ?>

<ul class="breadcrumb">

                    <li><a href="/"><?php echo e(__('index.home')); ?></a>

                    </li>

                    <li><a href="<?php echo e(route('account.dashboard')); ?>"><?php echo e(__('index.account')); ?></a>

                    </li>

                    <li class="active"><?php echo e(__('index.orders')); ?></li>

</ul>



    <style>

        .list-group-item {

    height:auto;

    min-height:220px;

}

.list-group-item.active small {

    color:#fff;

}

.stars {

    margin:20px auto 1px;    

}

    </style>






<div class="container">
   <div class="row">


                <div class="col-md-3" >

                        <div id="app">



                    

                        <avored-layout inline-template>

                                    <div>



                                    <a-layout id="components-layout-demo-top" class="layout">



                                        <!-- <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->







                                        <a-layout-content style="padding: 0 10px">



                                            <?php echo $__env->make('partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



                                            <a-layout style="padding: 24px 0">



                                                <?php if(auth()->guard()->check()): ?>



                                                <a-layout-sider width="100%">



                                                <?php echo $__env->make('partials.account-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



                                                </a-layout-sider>



                                                <?php endif; ?>



                                            

                                            </a-layout>



                                            </a-layout-content>



                                        



                                        <!-- <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->



                                            </a-layout>



                                    </div>            

                    

                    </avored-layout>

                    </div>

                </div>
               
                            <div class='col-md-9' style="  background-color: #f5f5f5; padding: 2%;margin-top: 0px;border: #e2e2e2 1px solid;">
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

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/royal2.royalsooq.com/resources/views/account/order/index.blade.php ENDPATH**/ ?>