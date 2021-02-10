

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
      <a href="<?php echo e(route('account.address.index')); ?>" title="user dashboard">
        <?php echo e(__('Address')); ?>

      </a>
    </a-breadcrumb-item>

    <a-breadcrumb-item>
        <?php echo e(__('Create')); ?>

    </a-breadcrumb-item>
</a-breadcrumb>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a-row type="flex" justify="center">
    <a-col :span="24">
        <h1><?php echo e(__('Create Address')); ?></h1>
        <address-save inline-template>
        <div>
            <a-form 
                :form="form"
                method="post"
                action="<?php echo e(route('account.address.store')); ?>"                    
                @submit="handleSubmit"
            >
                <?php echo csrf_field(); ?>
                <?php echo $__env->make('account.address._fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                
                <a-form-item>
                    <a-button
                        type="primary"
                        html-type="submit"
                    >
                        <?php echo e(__('Save')); ?>

                    </a-button>
                    
                    <a-button
                        class="ml-1"
                        type="default"
                        v-on:click.prevent="cancelAddress"
                    >
                        <?php echo e(__('Cancel')); ?>

                    </a-button>
                </a-form-item>
            </a-form>
            </div>
        </address-save>
    </a-col>
</a-row>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/account/address/create.blade.php ENDPATH**/ ?>