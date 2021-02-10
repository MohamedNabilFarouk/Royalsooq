<link href="<?php echo e(asset('avored-admin/css/app.css')); ?>" rel="stylesheet">
<?php $__env->startSection('title'); ?>
Create Roles
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="app">
        <avored-layout inline-template>
            <a-layout id="avored-admin-layout" style="min-height: 100vh">
            <a-layout-content class="mh-1 ph-1 pt-1 ">
                        <a-row type="flex" justify="center">
                            <a-col :span="24">
                                <system-role-save base-url="<?php echo e(asset(config('avored.admin_url'))); ?>" inline-template>
                                <div>
                                    <a-form 
                                        :form="roleForm"
                                        method="post"
                                        action="<?php echo e(route('admin.role.store')); ?>"                    
                                        @submit="handleSubmit"
                                    >
                                        <?php echo csrf_field(); ?>

                                        <a-tabs tabbar-gutter="15" tab-position="left" default-active-key="system.role.info">
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
                                                html-type="submit">
                                                <?php echo e(__('avored::system.btn.save')); ?>

                                            </a-button>
                                            
                                            <a-button
                                                class="ml-1"
                                                type="default"
                                                v-on:click.prevent="cancelRole"
                                            >
                                                <?php echo e(__('avored::system.btn.cancel')); ?>

                                            </a-button>

                                        </a-form-item>
                                    </a-form>
                                    </div>
                                </system-role-save>
                            </a-col>
                        </a-row>
            </a-layout-content>        
            </a-layout>
        </avored-layout>
</div>
<script src="<?php echo e(asset('avored-admin/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('avored::mylayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/system/role/create.blade.php ENDPATH**/ ?>