<?php $__env->startSection('meta_title'); ?>
    <?php echo e(__('avored::catalog.product.edit.title')); ?>: AvoRed E commerce Admin Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    <?php echo e(__('avored::catalog.product.edit.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a-row type="flex" justify="center">
    <a-col :span="24">
        <product-save
            base-url="<?php echo e(asset(config('avored.admin_url'))); ?>"
            :product="<?php echo e($product); ?>"
            :product-properties="<?php echo e($product->getProperties()); ?>"
            :product-attributes="<?php echo e($product->attributes); ?>"
            :product-variations="<?php echo e($product->getVariations()->flatten()); ?>"
            inline-template>
        <div>
            <a-form 
                :form="productForm"
                method="post"
                action="<?php echo e(route('admin.product.update', $product->id)); ?>"                    
                @submit="handleSubmit"
            >
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>

                <a-tabs tabbar-gutter="15" tab-position="left" default-active-key="catalog.product.basic">
                    <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a-tab-pane :force-render="true" tab="<?php echo e($tab->label()); ?>" key="<?php echo e($tab->key()); ?>">
                            <?php
                                $path = $tab->view();
                            ?>
                            <?php echo $__env->make($path, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </a-tab-pane>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </a-tabs>
                
                
                <a-form-item class="mt-1">
                    <a-button
                        type="primary"
                        html-type="submit"
                    >
                        <?php echo e(__('avored::system.btn.save')); ?>

                    </a-button>
                    
                    <a-button
                        class="ml-1"
                        type="default"
                        v-on:click.prevent="cancelProduct"
                    >
                        <?php echo e(__('avored::system.btn.cancel')); ?>

                    </a-button>
                </a-form-item>
            </a-form>
            </div>
        </product-save>
    </a-col>
</a-row>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('avored::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/catalog/product/edit.blade.php ENDPATH**/ ?>