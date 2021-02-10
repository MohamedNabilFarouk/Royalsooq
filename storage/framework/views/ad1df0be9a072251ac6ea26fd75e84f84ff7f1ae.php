<a-divider>
<h4 class="mt-1"><?php echo e(__('User Personal Information')); ?></h4>
</a-divider>
<?php if(auth()->guard()->guest()): ?>
<a-row :gutter="15">
    <a-col :span="12">
        <a-form-item
                <?php if($errors->has('first_name')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('first_name')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('First Name')); ?>">
            <a-input
                :auto-focus="true"
                name="first_name"
                v-decorator="[
                'first_name',
                {
                    rules: [
                        {   required: true, 
                            message: 'The <?php echo e(__('First Name')); ?> field is required' 
                        }
                    ]
                }
                ]"
            />
        </a-form-item>
    </a-col>
    <a-col :span="12">
        <a-form-item
                <?php if($errors->has('last_name')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('last_name')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('Last Name')); ?>">
            <a-input
                name="last_name"
                v-decorator="[
                'last_name',
                {
                    rules: [
                        {   required: true, 
                            message: 'The <?php echo e(__('Last Name')); ?> field is required' 
                        }
                    ]
                }
                ]"
            />
        </a-form-item>
    </a-col>
</a-row>

<a-row :gutter="15">
    <a-col :span="24">
        <a-form-item
                <?php if($errors->has('email')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('email')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('Email Address')); ?>">
            <a-input
                name="email"
                v-decorator="[
                'email',
                {
                    rules: [
                        {   required: true, 
                            message: 'The <?php echo e(__('Email Address')); ?> field is required' 
                        }
                    ]
                }
                ]"
            />
        </a-form-item>
    </a-col>
</a-row>
<!--
<a-row :gutter="15">
    <a-col :span="24">
        <a-switch @change="newAccountSwitchChange"></a-switch> Create New Account?
    </a-col>
</a-row>
-->


<a-row v-if="newAccount" :gutter="15">
    <a-col :span="12">
        <a-form-item
                <?php if($errors->has('password')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('password')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('Password')); ?>">
            <a-input
                name="password"
                v-decorator="[
                'password',
                {
                    rules: [
                        {   required: true, 
                            message: 'The <?php echo e(__('Password')); ?> field is required' 
                        }
                    ]
                }
                ]"
            />
        </a-form-item>
    </a-col>
    <a-col :span="12">
        <a-form-item
                <?php if($errors->has('password_confirmation')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('password_confirmation')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('Confirm Password')); ?>">
            <a-input
                name="password_confirmation"
                v-decorator="[
                'password_confirmation',
                {
                    rules: [
                        {   required: true, 
                            message: 'The <?php echo e(__('Confirm Password')); ?> field is required' 
                        }
                    ]
                }
                ]"
            />
        </a-form-item>
    </a-col>
</a-row>
<?php else: ?>

<a-row :gutter="15">
    <a-col :span="24">
        <a-card title="<?php echo e(Auth()->user()->name); ?>">
        </a-card>
    </a-col>
</a-row>
<?php endif; ?>
<?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\resources\views/checkout/cards/personal.blade.php ENDPATH**/ ?>