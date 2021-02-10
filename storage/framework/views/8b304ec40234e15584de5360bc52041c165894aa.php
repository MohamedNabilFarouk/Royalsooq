<link href="<?php echo e(asset('avored-admin/css/app.css')); ?>" rel="stylesheet">
<?php $__env->startSection('title'); ?>
Edit Admin
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="app">
        <avored-layout inline-template>
            <a-layout id="avored-admin-layout" style="min-height: 100vh">
            <a-layout-content class="mh-1 ph-1 pt-1 ">

<a-row type="flex" justify="center">
    <a-col :span="24">
        <admin-user-save base-url="<?php echo e(asset(config('avored.admin_url'))); ?>" :admin-user="<?php echo e($adminUser); ?>" inline-template>
        <div>
            <a-form 
                :form="adminUserForm"
                method="post"
                action="<?php echo e(route('admin.admin-user.update', $adminUser->id)); ?>"                    
                @submit="handleSubmit"
            >
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <a-tabs tabbar-gutter="15" tab-position="left" default-active-key="user.admin-user.info">
                <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a-tab-pane :force-render="true" tab="<?php echo e($tab->label()); ?>" key="<?php echo e($tab->key()); ?>">
                        <?php
                            $path = $tab->view();
                        ?>
                        <?php echo $__env->make($path, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </a-tab-pane>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </a-tabs>

                
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
                        v-on:click.prevent="cancelAdminUser"
                    >
                        <?php echo e(__('avored::system.btn.cancel')); ?>

                    </a-button>
                </a-form-item>
            </a-form>
            </div>
        </admin-user-save>
    </a-col>
</a-row>
  </a-layout-content>        
            </a-layout>
        </avored-layout>
</div>
<script src="<?php echo e(asset('avored-admin/js/app.js')); ?>"></script>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('avored::mylayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/user/admin-user/edit.blade.php ENDPATH**/ ?>