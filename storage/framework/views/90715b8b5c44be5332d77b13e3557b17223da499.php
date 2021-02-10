<a-form-item
    <?php if($errors->has('first_name')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('first_name')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::system.admin-user.first_name')); ?>"
>
    <a-input
        :auto-focus="true"
        name="first_name"
        v-decorator="[
        'first_name',
        {initialValue: '<?php echo e(($adminUser->first_name) ?? ''); ?>' },
        {rules: 
            [
                {   required: true, 
                    message: '<?php echo e(__('avored::validation.required', ['attribute' => 'First Name'])); ?>' 
                }
            ]
        }
        ]"
    ></a-input>
</a-form-item>

<a-form-item
    <?php if($errors->has('last_name')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('last_name')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::system.admin-user.last_name')); ?>"
>
    <a-input
        name="last_name"
        v-decorator="[
        'last_name',
        {initialValue: '<?php echo e(($adminUser->last_name) ?? ''); ?>' },
        {rules: 
            [
                {   required: true, 
                    message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Last Name'])); ?>' 
                }
            ]
        }
        ]"
    ></a-input>
</a-form-item>

<a-form-item
    <?php if($errors->has('is_super_admin')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('is_super_admin')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::system.admin-user.is_super_admin')); ?>"
>
    <a-switch
        <?php echo e((isset($adminUser) && $adminUser->is_super_admin) ? 'default-checked' : ''); ?>

        v-on:change="isLanguageDefaultSwitchChange"
    ></a-switch>
</a-form-item>
<input type="hidden" v-model="is_super_admin" name="is_super_admin"  />

<a-form-item
    <?php if($errors->has('email')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('email')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::system.admin-user.email')); ?>"
>
    <a-input
        name="email"
        <?php if(isset($adminUser)): ?>
            disabled
        <?php endif; ?>
        v-decorator="[
        'email',
        {initialValue: '<?php echo e(($adminUser->email) ?? ''); ?>' },
        {rules: 
            [
                {   required: true, 
                    message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Email'])); ?>' 
                }
            ]
        }
        ]"
    ></a-input>
</a-form-item>

<!-- <a-form-item
    <?php if($errors->has('image_file')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('image_file')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::system.admin-user.image_file')); ?>"
>
    <a-upload 
        name="image_file"
        :default-file-list="userImageList"
        :multiple="false"
        list-type="picture"
        action="<?php echo e(route('admin.admin-user-image-upload')); ?>" 
        :headers="headers"
        v-on:change="handleUploadImageChange">
        <a-button>
        <a-icon type="upload"></a-icon> Click to Upload
        </a-button>
    </a-upload>
</a-form-item>
<input type="hidden" name="image_path" v-model="image_path" /> -->

<?php if(!isset($adminUser)): ?>
    <a-form-item
        <?php if($errors->has('password')): ?>
            validate-status="error"
            help="<?php echo e($errors->first('password')); ?>"
        <?php endif; ?>
        label="<?php echo e(__('avored::system.admin-user.password')); ?>"
    >
        <a-input
            name="password"
            type="password"
            v-decorator="[
            'password',
            {rules: 
                [
                    {   required: true, 
                        message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Password'])); ?>' 
                    }
                ]
            }
            ]"
        ></a-input>
    </a-form-item>

    <a-form-item
        <?php if($errors->has('password_confirmation')): ?>
            validate-status="error"
            help="<?php echo e($errors->first('password_confirmation')); ?>"
        <?php endif; ?>
        label="<?php echo e(__('avored::system.admin-user.password_confirmation')); ?>"
    >
        <a-input
            name="password_confirmation"
            type="password"
            v-decorator="[
            'password_confirmation',
            {rules: 
                [
                    {   required: true, 
                        message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Confirm Password'])); ?>' 
                    }
                ]
            }
            ]"
        ></a-input>
    </a-form-item>
<?php endif; ?>

<!-- <a-form-item
    <?php if($errors->has('language')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('language')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::system.admin-user.language')); ?>"
>
    <a-select
        v-on:change="handleLanguageChange"
        v-decorator="[
        'language',
        {initialValue: '<?php echo e(($adminUser->language) ?? ''); ?>' },
        {rules: 
            [
                {   required: true, 
                    message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Language'])); ?>' 
                }
            ]
        }
        ]"
    >
        <a-select-option value="en">English</a-select-option>
    </a-select>
</a-form-item>
<input type="hidden" v-model="language" name="language"  /> -->

<a-form-item
    <?php if($errors->has('role_id')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('role_id')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::system.admin-user.role_id')); ?>"
>
    <a-select
        name="role_id"
        v-on:change="handleRoleChange"
        v-decorator="[
        'role_id',
        {initialValue: '<?php echo e(($adminUser->role_id) ?? ''); ?>' },
        {rules: 
            [
                {   required: true, 
                    message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Role'])); ?>' 
                }
            ]
        }
        ]"
    >   
        <?php $__currentLoopData = $roleOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $roleId => $roleName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a-select-option value="<?php echo e($roleId); ?>"><?php echo e($roleName); ?></a-select-option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </a-select>
</a-form-item>
<input type="hidden" v-model="role_id" name="role_id"  />
<?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/user/admin-user/_fields.blade.php ENDPATH**/ ?>