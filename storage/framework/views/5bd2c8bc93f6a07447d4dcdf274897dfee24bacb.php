<a-form-item
    <?php if($errors->has('name')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('name')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::catalog.attribute.name')); ?>"
>
    <a-input
        :auto-focus="true"
        name="name"
        v-decorator="[
        'name',
        {'initialValue': '<?php echo e($attribute->name ?? ''); ?>'},
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
    label="<?php echo e(__('avored::catalog.attribute.slug')); ?>"
>
    <a-input
        name="slug"
        v-decorator="[
        'slug',
        {'initialValue': '<?php echo e($attribute->slug ?? ''); ?>'},
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
    <?php if($errors->has('display_as')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('display_as')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::catalog.attribute.display_as')); ?>"
>
    <a-select
        @change="displayAsChange"
        v-decorator="[
        'display_as',
        {'initialValue': '<?php echo e($attribute->display_as ?? ''); ?>'},
        {rules: 
            [
                {   required: true, 
                    message: '<?php echo e(__('avored::validation.required', ['attribute' => __('avored::catalog.attribute.display_as')])); ?>' 
                }
            ]
        }
        ]"
    >   
        <?php $__currentLoopData = $displayAsOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a-select-option value="<?php echo e($val); ?>"><?php echo e($label); ?></a-select-option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
    </a-select>
</a-form-item>
<input type="hidden" name="display_as" v-model="display_as" />
<a-card class="mt-1" v-for="(k, index) in dropdownOptions"
    :key="k"
    >
    <a-row :gutter="20">
        <a-col :span="12">
            <a-form-item label="<?php echo e(__('avored::catalog.attribute.image')); ?>">
             <a-upload
                name="dropdown_options_image"
                :default-file-list="getDefaultFile(index)"
                :multiple="false"
                :headers="headers"
                v-on:change="handleUploadImageChange($event, k)"
                action="<?php echo e(route('admin.attribute.upload')); ?>" 
                >
                <a-button>
                <a-icon type="upload"></a-icon> <?php echo e(__('avored::catalog.attribute.upload')); ?>

                </a-button>
            </a-upload>
            </a-form-item>
        </a-col>
        <a-col :span="12">
            <a-form-item
                <?php if($errors->has('dropdown_options')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('dropdown_options')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('avored::catalog.attribute.dropdown_options')); ?>"
            >
                <a-input
                    :name="dropdownOptionDisplayTextName(k)"
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

            <input type="hidden" v-for="path in image_path_lists" :name="imagePathName(path)" :value="imagePathValue(path)" />
        </a-col>
    </a-row>
</a-card>

<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/catalog/attribute/_fields.blade.php ENDPATH**/ ?>