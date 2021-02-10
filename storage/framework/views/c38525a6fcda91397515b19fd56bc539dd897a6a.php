<a-form-item
    <?php if($errors->has('name')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('name')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::catalog.property.name')); ?>"
>
    <a-input
        :auto-focus="true"
        name="name"
        v-decorator="[
        'name',
        {'initialValue': '<?php echo e($property->name ?? ''); ?>'},
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
    label="<?php echo e(__('avored::catalog.property.slug')); ?>"
>
    <a-input
        name="slug"
        v-decorator="[
        'slug',
        {'initialValue': '<?php echo e($property->slug ?? ''); ?>'},
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
    <?php if($errors->has('data_type')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('data_type')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::catalog.property.data_type')); ?>"
>
    <a-select default-value="<?php echo e($property->data_type ?? ''); ?>" v-on:change="dataTypeChange">
        <?php $__currentLoopData = $dataTypeOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataType => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a-select-option value="<?php echo e($dataType); ?>"><?php echo e($label); ?></a-select-option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </a-select>
</a-form-item>
<input type="hidden" name="data_type" v-model="data_type" />

<a-form-item
    <?php if($errors->has('field_type')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('field_type')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::catalog.property.field_type')); ?>"
>
    <a-select default-value="<?php echo e($property->field_type ?? ''); ?>" v-on:change="fieldTypeChange">
        <?php $__currentLoopData = $fieldTypeOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fieldType => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a-select-option value="<?php echo e($fieldType); ?>"><?php echo e($label); ?></a-select-option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </a-select>
</a-form-item>
<input type="hidden" name="field_type" v-model="field_type" />

<a-form-item
    <?php if($errors->has('use_for_all_products')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('use_for_all_products')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::catalog.property.use_for_all_products')); ?>">
    <a-switch
        <?php echo e((isset($property) && $property->use_for_all_products) ? 'default-checked' : ''); ?>

        v-on:change="useForAllProductSwitchChange"
    ></a-switch>
</a-form-item>
<input type="hidden" name="use_for_all_products" v-model="use_for_all_products" />

<a-form-item
    <?php if($errors->has('use_for_category_filter')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('use_for_category_filter')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::catalog.property.use_for_category_filter')); ?>">
    <a-switch
        <?php echo e((isset($property) && $property->use_for_category_filter) ? 'default-checked' : ''); ?>

        v-on:change="useForCategoryFilterSwitchChange"
    ></a-switch>
</a-form-item>
<input type="hidden" name="use_for_category_filter" v-model="use_for_category_filter" />

<a-form-item
    <?php if($errors->has('is_visible_frontend')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('is_visible_frontend')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::catalog.property.is_visible_frontend')); ?>"
>
    <a-switch
        <?php echo e((isset($property) && $property->is_visible_frontend) ? 'default-checked' : ''); ?>

        v-on:change="isVisibleInFrontendSwitchChange"
    ></a-switch>
</a-form-item>
<input type="hidden" name="is_visible_frontend" v-model="is_visible_frontend" />

<a-form-item
    <?php if($errors->has('sort_order')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('sort_order')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::catalog.property.sort_order')); ?>"
>
    <a-input
        name="sort_order"
        v-decorator="[
        'sort_order',
        {'initialValue': '<?php echo e($property->sort_order ?? ''); ?>'},
        {rules: 
            [
                {   required: true, 
                    message: '<?php echo e(__('avored::validation.required', ['attribute' => 'SortOrder'])); ?>' 
                }
            ]
        }
        ]"
    ></a-input>
</a-form-item>



<a-form-item
    v-for="(k, index) in dropdownOptions"
    :key="k"
    <?php if($errors->has('dropdown_options')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('dropdown_options')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::catalog.property.dropdown_options')); ?>"
>
    <a-input
        :name="dropdown_options(k)"
        v-decorator="[
        `dropdown_options[${k}]`,
        {rules: 
            [
                {   required: true, 
                    message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Dropdown Options'])); ?>' 
                }
            ]
        }
        ]"
    >
    <a-icon slot="addonAfter"
        v-on:click="dropdownOptionChange(index)"
        :type="(index == dropdownOptions.length - 1) ? 'plus' : 'minus'"
    ></a-icon>
    </a-input>
</a-form-item>

<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/catalog/property/_fields.blade.php ENDPATH**/ ?>