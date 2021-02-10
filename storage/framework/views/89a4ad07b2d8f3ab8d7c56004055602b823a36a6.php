<?php $__env->startSection('breadcrumb'); ?>
<a-breadcrumb style="margin: 16px 0">
    <a-breadcrumb-item>
      <a href="<?php echo e(route('home')); ?>" title="home">
        <?php echo e(__('Home')); ?>

      </a>
    </a-breadcrumb-item>
    <a-breadcrumb-item>
        <?php echo e(__('Register')); ?>

    </a-breadcrumb-item>
</a-breadcrumb>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<register-fields inline-template>
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
                            :form="form"
                            method="post"
                            action="<?php echo e(route('register')); ?>"
                            @submit="handleSubmit"
                        >
                            <?php echo csrf_field(); ?>
                            <a-form-item
                                <?php if($errors->has('name')): ?>
                                    validate-status="error"
                                    help="<?php echo e($errors->first('name')); ?>"
                                <?php endif; ?>
                                label="Name">
                            <a-input
                                :auto-focus="true"
                                name="name"
                                v-decorator="[
                                'name',
                                {
                                    rules: [
                                        {   required: true, 
                                            message: 'The Name field is required' 
                                        }
                                    ]
                                }
                                ]"
                            />
                            </a-form-item>
                            <a-form-item
                                <?php if($errors->has('email')): ?>
                                    validate-status="error"
                                    help="<?php echo e($errors->first('email')); ?>"
                                <?php endif; ?>
                                label="Email Address">
                            <a-input
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
                                <?php if($errors->has('password')): ?>
                                    validate-status="error"
                                    help="<?php echo e($errors->first('password')); ?>"
                                <?php endif; ?>
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

                            <a-form-item 
                                <?php if($errors->has('password_confirmation')): ?>
                                    validate-status="error"
                                    help="<?php echo e($errors->first('password_confirmation')); ?>"
                                <?php endif; ?>
                                label="Password Confirmation">
                                <a-input
                                    name="password_confirmation"
                                    type="password"
                                    v-decorator="[
                                    'password_confirmation',
                                    {rules: [{ required: true, message: 'The password confirmation field is required' }]}
                                    ]"
                                />
                            </a-form-item>
                            
                            <a-form-item>
                                <a-button
                                    type="primary"
                                    :loading="loadingSubmitBtn"
                                    html-type="submit"
                                >
                                    Register
                                </a-button>
                            </a-form-item>
                        </a-form>
                    </a-card>
                </a-col>
                </a-row>
            </a-col>
        
            
        </a-row>
    </div>
</register-fields>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##

<script>
$(function () {
    $('#register-dialog').submit(function (e) {
        e.preventDefault();
        let formData = $(this).serializeArray();
        $(".invalid-feedback").children("strong").text("");
        $("#register-dialog input").removeClass("is-invalid");
        $.ajax({
            method: "POST",
            headers: {
                Accept: "application/json"
            },
            url: "<?php echo e(route('register')); ?>",
            data: formData,
            success: () => window.location.assign("<?php echo e(route('home')); ?>"),
            error: (response) => {
                if(response.status === 422) {
                    let errors = response.responseJSON.errors;
                    Object.keys(errors).forEach(function (key) {
                        $("#" + key + "Input").addClass("is-invalid");
                        $("#" + key + "Error").children("strong").text(errors[key][0]);
                    });
                } else {
                    window.location.reload();
                }
            }
        })
    });
})
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\resources\views/auth/register.blade.php ENDPATH**/ ?>