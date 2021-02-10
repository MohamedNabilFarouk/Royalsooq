<?php $__env->startSection('meta_title'); ?>
    AvoRed E commerce Admin Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    Configuration
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a-row type="flex" justify="center">
    <a-col :span="24">
        <a-card :bordered="false" :style="{ padding: '16px 0', height: '100%' }" :style="{ height: '100%' }">
            <configuration-save base-url="<?php echo e(asset(config('avored.admin_url'))); ?>"  inline-template>
            <a-form
                    :form="configurationForm"
                    method="post"
                    v-on:submit="handleSubmit"
                    action="<?php echo e(route('admin.configuration.store')); ?>">

                    <?php echo csrf_field(); ?>
                  
                    <a-tabs
                        default-active-key="system.configuration.basic"
                        tab-position="left">
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
                        <a-button type="primary" html-type="submit">
                            <?php echo e(__('avored::system.btn.save')); ?>

                        </a-button>
                        
                        <a-button class="ml-1" type="default"v-on:click.prevent="cancelConfiguration">
                            <?php echo e(__('avored::system.btn.cancel')); ?>

                        </a-button>
                    </a-form-item>
                        
            </a-form>
            </configuration-save>
        </a-card>
    </a-col>
</a-row>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('avored::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/system/configuration/index.blade.php ENDPATH**/ ?>