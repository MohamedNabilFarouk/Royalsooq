<?php $__env->startSection('breadcrumb'); ?>
<a-breadcrumb style="margin: 16px 0">
    <a-breadcrumb-item>
      <a href="<?php echo e(route('home')); ?>" title="home">
        <?php echo e(__('Home')); ?>

      </a>
    </a-breadcrumb-item>
    <a-breadcrumb-item>
      <a href="<?php echo e(route('account.dashboard')); ?>" title="user dashboard">
        <?php echo e(__('User Dashboard')); ?>

      </a>
    </a-breadcrumb-item>
    
    <a-breadcrumb-item>
        <?php echo e(__('Account Edit')); ?>

    </a-breadcrumb-item>
</a-breadcrumb>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<a-row type="flex" justify="center">
    <a-col :span="24">
        <account-save inline-template>
        <div>
            <a-form 
                :form="form"
                method="post"
                action="<?php echo e(route('account.save')); ?>"                    
                @submit="handleSubmit">

                <?php echo csrf_field(); ?>
                
                <a-form-item
                  <?php if($errors->has('name')): ?>
                      validate-status="error"
                      help="<?php echo e($errors->first('name')); ?>"
                  <?php endif; ?>
                  label="<?php echo e(__('Name')); ?>"
              >
                  <a-input
                      :auto-focus="true"
                      name="name"
                      v-decorator="[
                      'name',
                      <?php echo e((isset($user)) ? "{'initialValue': '". $user->name ."'}," : ""); ?>

                      {rules: 
                          [
                              {   required: true, 
                                  message: '<?php echo e(__('validation.required', ['attribute' => 'name'])); ?>' 
                              }
                          ]
                      }
                      ]"
                  ></a-input>
                  </a-form-item>
                  <a-form-item  label="<?php echo e(__('Email Address')); ?>">
                    <a-input
                        disabled
                        name="email"
                        v-decorator="[
                        'email',
                        <?php echo e((isset($user)) ? "{'initialValue': '". $user->email ."'}," : ""); ?>

                        {rules: 
                            [
                                {   required: true, 
                                    message: '<?php echo e(__('validation.required', ['attribute' => 'email'])); ?>' 
                                }
                            ]
                        }
                        ]"
                    ></a-input>
                </a-form-item>
                  
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
                    v-on:click.prevent="cancelBtnClick"
                >
                    <?php echo e(__('avored::system.btn.cancel')); ?>

                </a-button>
            </a-form-item>
            </a-form>
            </div>
        </address-save>
    </a-col>
</a-row>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\resources\views/account/edit.blade.php ENDPATH**/ ?>