<?php $__env->startSection('breadcrumb'); ?>
<a-breadcrumb style="margin: 16px 0">
    <a-breadcrumb-item>
      <a href="<?php echo e(route('home')); ?>" title="home">
        <?php echo e(__('Home')); ?>

      </a>
    </a-breadcrumb-item>
    <a-breadcrumb-item>
        <?php echo e(__('Login')); ?>

    </a-breadcrumb-item>
</a-breadcrumb>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<login-fields loginpost="<?php echo e(route('login')); ?>" inline-template>
    <div>
        <a-row type="flex" align="middle">
            <a-col :span="12">
                <a-row type="flex" align="middle" class="h-100 text-center">
                <a-col :span="24">
                    
                </a-col>
                </a-row>
            </a-col>
            <a-col :span="12">
                <a-row type="flex">
                    <a-col :span="20" :offset="2">
                        <a-card title="Account Management">
                            <a-form
                                :form="loginForm"
                                method="post"
                                action="<?php echo e(route('login')); ?>"
                                @submit="handleSubmit"
                            >
                                <?php echo csrf_field(); ?>
                                <a-form-item
                                <?php if ($errors->has('email')){
                                        echo "error in email" .  $errors->first('email');
                                     }?>
                                    label="Email Address">
                                <a-input
                                    :auto-focus="true"
                                    name="email"
                                    v-decorator="[
                                    'email',
                                    {
                                        rules: [
                                            {   required: true, 
                                                message: 'The Email field is required' 
                                            }
                                        ]
                                    }
                                    ]"
                                />
                                </a-form-item>
                                
                                <a-form-item 
                                    <?php if ($errors->has('password')){
                                        echo "error" .  $errors->first('password');
                                     }?>
                                    label="Password">
                                    <a-input
                                        name="password"
                                        type="password"
                                        v-decorator="[
                                        'password',
                                        {rules: [{ required: true, message: 'The password field is required' }]}
                                        ]"
                                    />
                                </a-form-item>
                                
                                <a-form-item>
                                    <a-button
                                        type="primary"
                                        :loading="loadingSubmitBtn"
                                        html-type="submit"
                                    >
                                        Login
                                    </a-button>
                                </a-form-item>
                            </a-form>
                        </a-card>
                    </a-col>
                </a-row>
            </a-col>
        
            
        </a-row>
    </div>
</login-fields>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##

<?php if($errors->has('email') || $errors->has('password')): ?>
    <script>
    $(function() {
        $('#loginModal').modal({
            show: true
        });
    });
    </script>
<?php endif; ?>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\resources\views/auth/login.blade.php ENDPATH**/ ?>