<a-form-item
    <?php if($errors->has('name')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('name')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::catalog.category.name')); ?>"
>
    <a-input
        :auto-focus="true"
        name="name"
        v-decorator="[
        'name',
        {'initialValue': '<?php echo e($category->name ?? ''); ?>'},
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
<a-form-item
    <?php if($errors->has('slug')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('slug')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::catalog.category.slug')); ?>"
>
    <a-input
        :auto-focus="true"
        name="slug"
        v-decorator="[
        'code',
        {'initialValue': '<?php echo e($category->slug ?? ''); ?>'},
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


<a-form-item
    <?php if($errors->has('meta_title')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('meta_title')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::catalog.category.meta_title')); ?>"
>
    <a-input
        :auto-focus="true"
        name="meta_title"
        v-decorator="[
        'meta_title',
        {'initialValue': '<?php echo e($category->meta_title ?? ''); ?>'},
        {rules: 
            [
                {   required: false, 
                    message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Meta Title'])); ?>' 
                }
            ]
        }
        ]"
    ></a-input>
</a-form-item>
<a-form-item
    <?php if($errors->has('meta_description')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('meta_description')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::catalog.category.meta_description')); ?>"
>
    <a-input
        :auto-focus="true"
        name="meta_description"
        v-decorator="[
        'meta_description',
        {'initialValue': '<?php echo e($category->meta_description ?? ''); ?>'},
        {rules: 
            [
                {   required: false, 
                    message: '<?php echo e(__('avored::validation.required', ['attribute' => 'meta_description'])); ?>' 
                }
            ]
        }
        ]"
    ></a-input>
</a-form-item>
<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/catalog/category/_fields.blade.php ENDPATH**/ ?>