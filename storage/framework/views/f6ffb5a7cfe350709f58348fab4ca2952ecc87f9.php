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
        <?php echo e(__('Upload')); ?>

    </a-breadcrumb-item>
</a-breadcrumb>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<a-row type="flex" justify="center">
    <a-col :span="24">
        <account-upload inline-template>
        <div>
            <a-form 
                :form="form"
                method="post"
                action="<?php echo e(route('account.save')); ?>"                    
                @submit="handleSubmit">

                <?php echo csrf_field(); ?>
                
                <a-form-item
                  <?php if($errors->has('file')): ?>
                      validate-status="error"
                      help="<?php echo e($errors->first('file')); ?>"
                  <?php endif; ?>
                  label="<?php echo e(__('Image')); ?>"
                >
                    <a-upload action="<?php echo e(route('account.upload.image')); ?>" name="file" :headers="headers" @change="handleChange" >
                        <a-button>      
                            <a-icon type="upload"></a-icon> Click to Upload
                        </a-button>
                    </a-uploa> 
                </a-form-item>
                <input type="hidden" name="image" v-model="image_path" />
                <input type="hidden" name="name" value="<?php echo e($user->name); ?>" />
                
                </a-form-item>
                <a-form-item>
                <a-button
                    type="primary"
                    html-type="submit"
                >
                    <?php echo e(__('avored::system.btn.save')); ?>

                </a-button>
                
                <a-button
                    class="ml-1"
                    type="default"
                    v-on:click.prevent="cancelBtnClick"
                >
                    <?php echo e(__('avored::system.btn.cancel')); ?>

                </a-button>
            </a-form-item>
            </a-form>
            </div>
        </address-save>
    </a-col>
</a-row>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/account/upload.blade.php ENDPATH**/ ?>