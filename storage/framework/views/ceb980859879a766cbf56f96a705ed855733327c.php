 <a-form-item
    <?php if($errors->has('tax_percentage')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('tax_percentage')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::system.configuration.tax.tax_percentage')); ?>">
    <a-input
        :auto-focus="true"
        name="tax_percentage"
        v-decorator="[
        'tax_percentage',
        {initialValue: '<?php echo e(($repository->getValueByCode('tax_percentage')) ?? ''); ?>'},
        {rules: 
            [
                {   required: true, 
                    message: '<?php echo e(__('avored::validation.required', ['attribute' => __('avored::system.configuration.basic.tax_percentage')])); ?>' 
                }
            ]
        }
        ]"
    ></a-input>
</a-form-item>
<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/system/configuration/cards/tax.blade.php ENDPATH**/ ?>