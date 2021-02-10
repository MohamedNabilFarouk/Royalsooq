<a-form-item
    <?php if($errors->has('name')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('name')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::system.role.name')); ?>">
    <a-input
        :auto-focus="true"
        name="name"
        v-decorator="[
        'name',
        {initialValue: '<?php echo e(($role->name) ?? ''); ?>' },
        {rules: 
            [
                {   required: true, 
                    message: '<?php echo e(__('avored::validation.required', ['attribute' => 'name'])); ?>' 
                }
            ]
        }
        ]"></a-input>
</a-form-item>

<a-form-item
    <?php if($errors->has('description')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('description')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::system.role.description')); ?>">

    <a-input
        name="description"
        default-value="<?php echo e($role->description ?? ''); ?>"
       ></a-input>
</a-form-item>

<a-row type="flex" :gutter="16">
    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a-col class="mt-1"  :span="6">
            <a-card title="<?php echo e($group->label()); ?>">
                <?php $__currentLoopData = $group->permissionList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="<?php echo e(($loop->index > 0) ? 'mt-1' : ''); ?> ">
                        <a-switch
                            <?php echo e((isset($role) && $role->hasPermission($permission->routes())) ? 'default-checked' : ''); ?>

                            key="<?php echo e($permission->key()); ?>"
                            v-on:change="onUserPermissionSwitchChange($event, '<?php echo e($permission->key()); ?>')"
                        >
                        </a-switch>
                        
                        <input
                            id="permissions-<?php echo e($permission->key()); ?>"
                            type="hidden"
                            value="<?php echo e((isset($role)) ? $role->hasPermission($permission->routes()) : 0); ?>"
                            name="permissions[<?php echo e($permission->routes()); ?>]"  />
                        <?php echo e($permission->label()); ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </a-card>
        </a-col>
            
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</a-row>
<?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/system/role/_fields.blade.php ENDPATH**/ ?>