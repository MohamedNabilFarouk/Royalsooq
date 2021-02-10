 <a-form-item
    <?php if($errors->has('site_name')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('site_name')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::system.configuration.payment.payment_name')); ?>">
    <a-input
        :auto-focus="true"
        name="site_name"
        v-decorator="[
        'site_name',
        {initialValue: '<?php echo e(($repository->getValueByCode('site_name')) ?? ''); ?>'},
        {rules: 
            [
                {   required: true, 
                    message: '<?php echo e(__('avored::validation.required', ['attribute' => __('avored::system.configuration.basic.site_name')])); ?>' 
                }
            ]
        }
        ]"
    ></a-input>
</a-form-item>
<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/system/configuration/cards/payment.blade.php ENDPATH**/ ?>