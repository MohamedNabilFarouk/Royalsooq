<?php $__env->startSection('meta_title'); ?>
    <?php echo e(__('avored::catalog.product.create.title')); ?>: AvoRed E commerce Admin Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    <?php echo e(__('avored::catalog.product.create.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a-row type="flex" justify="center">
    <a-col :span="24">
        <product-save base-url="<?php echo e(asset(config('avored.admin_url'))); ?>" inline-template>
        <div>
            <a-form 
                :form="productForm"
                method="post"
                action="<?php echo e(route('admin.product.store')); ?>"                    
                @submit="handleSubmit"
            >
                <?php echo csrf_field(); ?>

                <a-row :gutter="15" type="flex">
                    <a-col :span="12">
                        <a-form-item
                            <?php if($errors->has('name')): ?>
                                validate-status="error"
                                help="<?php echo e($errors->first('name')); ?>"
                            <?php endif; ?>
                            label="<?php echo e(__('avored::catalog.product.name')); ?>">
                            <a-input
                                :auto-focus="true"
                                name="name"
                                v-decorator="[
                                'name',
                                {rules: 
                                    [
                                        {   required: true, 
                                            message: '<?php echo e(__('avored::validation.required', ['attribute' => 'name'])); ?>' 
                                        }
                                    ]
                                }
                                ]"
                            ></a-input>
                        </a-form-item>
                    </a-col>


                    <a-col :span="12">
                        <a-form-item
                            <?php if($errors->has('slug')): ?>
                                validate-status="error"
                                help="<?php echo e($errors->first('slug')); ?>"
                            <?php endif; ?>
                            label="<?php echo e(__('avored::catalog.product.slug')); ?>">
                            <a-input
                                :auto-focus="true"
                                name="slug"
                                v-decorator="[
                                'slug',
                                {rules: 
                                    [
                                        {   required: true, 
                                            message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Slug'])); ?>' 
                                        }
                                    ]
                                }
                                ]"
                            ></a-input>

                        </a-form-item>
                    </a-col>

                </a-row>

                <a-row>
                    <a-col :span="24">
                        <a-form-item
                            <?php if($errors->has('type')): ?>
                                validate-status="error"
                                help="<?php echo e($errors->first('type')); ?>"
                            <?php endif; ?>
                            label="<?php echo e(__('avored::catalog.product.type')); ?>">

                            <a-select
                                @change="handleTypeChange"
                                v-decorator="[
                                'type',
                                {rules: 
                                    [
                                        {   required: true, 
                                            message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Type'])); ?>' 
                                        }
                                    ]
                                }
                                ]">
                                <?php $__currentLoopData = $typeOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typeVal => $typeLabel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a-select-option value="<?php echo e($typeVal); ?>"><?php echo e($typeLabel); ?></a-select-option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </a-select>
                        </a-form-item>
                        <input name="type" v-model="type" type="hidden" />
                    
                    </a-col>
                </a-row>





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

<?php echo $__env->make('avored::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/catalog/product/create.blade.php ENDPATH**/ ?>