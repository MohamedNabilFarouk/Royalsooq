<?php $__env->startSection('breadcrumb'); ?>
<a-breadcrumb style="margin: 16px 0">
    <a-breadcrumb-item>
      <a href="<?php echo e(route('home')); ?>" title="home">
        <?php echo e(__('Home')); ?>

      </a>
    </a-breadcrumb-item>
    <a-breadcrumb-item>
      <a href="<?php echo e(route('account.dashboard')); ?>" title="user dashboard">
        <?php echo e(__('User Dashboard')); ?>

      </a>
    </a-breadcrumb-item>

    <a-breadcrumb-item>
        <?php echo e(__('Address')); ?>

    </a-breadcrumb-item>
</a-breadcrumb>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a-row type="flex" class="mb-1">
    <a-col :span="24">
        <h2 class="float-left"><?php echo e(__('User Addressses')); ?></h2>
        <a 
            href="<?php echo e(route('account.address.create')); ?>"
            class="ant-btn ant-btn-primary float-right">
            <a-icon type="plus"></a-icon>
            <?php echo e(__('Create')); ?>

        </a>
    </a-col>
</a-row>
<a-row type="flex" :gutter="15" style="margin-top: 1rem">
        <?php $__currentLoopData = $userAddresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a-col class="mt-1" :span="12">
            <a-card title="<?php echo e($address->type); ?>">
                <a-dropdown slot="extra">
                <a class="ant-dropdown-link"  href="">
                    <?php echo e(__('Options')); ?> <a-icon type="down" />
                </a>
                    <a-menu slot="overlay">
                        <a-menu-item>
                            <a href="<?php echo e(route('account.address.edit', $address->id)); ?>"><?php echo e(__('Edit')); ?></a>
                        </a-menu-item>
                        <a-menu-item>
                            <a onClick="event.preventDefault();document.getElementById('address-destory-<?php echo e($address->id); ?>').submit()"
                                href="#"><?php echo e(__('Delete')); ?></a>
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
                <p><?php echo e($address->state); ?>: <?php echo e($address->country->name); ?></p>
            </a-card>
            </a-col>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</a-row>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\resources\views/account/address/index.blade.php ENDPATH**/ ?>