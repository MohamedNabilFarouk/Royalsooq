<?php $__env->startSection('content'); ?>

<ul class="breadcrumb">

                    <li><a href="/"><?php echo e(__('index.home')); ?></a>

                    </li>

                    <li><a href="<?php echo e(route('account.dashboard')); ?>"><?php echo e(__('index.account')); ?></a>

                    </li>

                    <li class="active"><?php echo e(__('index.addresses')); ?></li>

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

                    <a-row type="flex" class="mb-1">
                        <a-col :span="24">
                            <h2 class="float-left"><?php echo e(__('index.addresses')); ?></h2>
                            <a 
                                href="<?php echo e(route('account.address.create')); ?>"
                                class="ant-btn ant-btn-primary float-right">
                                <a-icon type="plus"></a-icon>
                                <?php echo e(__('index.add')); ?>

                            </a>
                        </a-col>
                    </a-row>
                    <a-row type="flex" :gutter="15" style="margin-top: 1rem">
                            <?php $__currentLoopData = $userAddresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a-col class="mt-1" :span="12">
                                <a-card title="<?php echo e($address->type); ?>">
                                    <a-dropdown slot="extra">
                                    <a class="ant-dropdown-link"  href="">
                                    <?php echo e(__('index.options')); ?> <a-icon type="down" />
                                    </a>
                                        <a-menu slot="overlay">
                                            <a-menu-item>
                                                <a href="<?php echo e(route('account.address.edit', $address->id)); ?>"><?php echo e(__('index.edit')); ?></a>
                                            </a-menu-item>
                                            <a-menu-item>
                                                <a onClick="event.preventDefault();document.getElementById('address-destory-<?php echo e($address->id); ?>').submit()"
                                                    href="#"><?php echo e(__('index.delete')); ?></a>
                                            </a-menu-item>
                                        </a-menu>
                                    </a-dropdown>
                                        <form style="display:none"
                                            id="address-destory-<?php echo e($address->id); ?>"
                                            method="post"
                                            action="<?php echo e(route('account.address.destroy', $address->id)); ?>"
                                        >
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                        </form>
                                    <p><?php echo e($address->first_name); ?> <?php echo e($address->last_name); ?></p>
                                    <p><?php echo e($address->company_name); ?></p>
                                    <p><?php echo e($address->phone); ?></p>
                                    <p><?php echo e($address->address1); ?>, <?php echo e($address->address2); ?></p>
                                    <p><?php echo e($address->city); ?>, <?php echo e($address->postcode); ?></p>
                                    <p><?php echo e($address->state); ?>: <?php echo e($address->country->name ?? ''); ?></p>
                                </a-card>
                                </a-col>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </a-row>
        </div>

    </div>
</div>                
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/account/address/index.blade.php ENDPATH**/ ?>