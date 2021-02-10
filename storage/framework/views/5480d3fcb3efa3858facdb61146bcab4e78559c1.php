<a-row :gutter="20">
    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('name')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('name')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('avored::promotion.promotion-code.name')); ?>">
            <a-input
                :auto-focus="true"
                name="name"
                v-decorator="[
                'name',
                {initialValue: '<?php echo e(($promotionCode->name) ?? ''); ?>' },
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
    </a-col>

    <a-col :span="12">    
        <a-form-item
                <?php if($errors->has('description')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('description')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('avored::promotion.promotion-code.description')); ?>"
            >
                <a-input
                    name="description"
                    v-decorator="[
                    'description',
                    {initialValue: '<?php echo e(($promotionCode->description) ?? ''); ?>' },
                    {rules: 
                        [
                            {   required: true, 
                                message: '<?php echo e(__('avored::validation.required', ['attribute' => 'description'])); ?>' 
                            }
                        ]
                    }
                    ]"
                ></a-input>
            </a-form-item>
    </a-col>
</a-row>

<a-row :gutter="20">
    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('code')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('code')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('avored::promotion.promotion-code.code')); ?>">
            <a-input
                name="code"
                v-decorator="[
                'code',
                {initialValue: '<?php echo e(($promotionCode->code) ?? ''); ?>' },
                {rules: 
                    [
                        {   required: true, 
                            message: '<?php echo e(__('avored::validation.required', ['attribute' => 'code'])); ?>' 
                        }
                    ]
                }
                ]"
            ></a-input>
        </a-form-item>
    </a-col>
    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('status')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('status')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('avored::promotion.promotion-code.status')); ?>"
        >
            <a-switch 
                <?php echo e((isset($promotionCode) && $promotionCode->status) ? 'default-checked' : ''); ?>

                @change="changeStatus"></a-switch>
        </a-form-item>

        <input type="hidden" name="status" v-model="status" />
    </a-col>
</a-row>


<a-row :gutter="20">
    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('type')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('language')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('avored::promotion.promotion-code.type')); ?>"
        >
            <a-select
                v-on:change="handleTypeChange"
                v-decorator="[
                'type',
                {initialValue: '<?php echo e(($promotionCode->type) ?? ''); ?>' },
                {rules: 
                    [
                        {   required: true, 
                            message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Promotion Code Type'])); ?>' 
                        }
                    ]
                }
                ]"
            >
                <?php $__currentLoopData = $typeOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typeOptionVal => $typeOptionLabel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        
                    <a-select-option value="<?php echo e($typeOptionVal); ?>"><?php echo e($typeOptionLabel); ?></a-select-option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </a-select>
        </a-form-item>
        <input type="hidden" v-model="type" name="type"  />
    </a-col>

    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('amount')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('amount')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('avored::promotion.promotion-code.amount')); ?>"
        >
            <a-input
                name="amount"
                v-decorator="[
                'amount',
                {initialValue: '<?php echo e(($promotionCode->amount) ?? ''); ?>' },
                {rules: 
                    [
                        {   required: true, 
                            message: '<?php echo e(__('avored::validation.required', ['attribute' => 'amount'])); ?>' 
                        }
                    ]
                }
                ]"
            ></a-input>
        </a-form-item>
    </a-col>
</a-row>


<a-row>
    <a-col :span="12">
        <a-form-item
        <?php if($errors->has('active_from')): ?>
            validate-status="error"
            help="<?php echo e($errors->first('active_from')); ?>"
        <?php endif; ?>
        label="<?php echo e(__('avored::promotion.promotion-code.active_from')); ?>">
            <a-date-picker :default-value="activeFromDefault" :format="dateFormat" @change="onActiveFromChange"></a-date-picker>
    </a-form-item>
    <input type="hidden" v-model="activeFrom" name="active_from"  />
    </a-col>
    <a-col :span="12">
        <a-form-item
        <?php if($errors->has('active_till')): ?>
            validate-status="error"
            help="<?php echo e($errors->first('active_till')); ?>"
        <?php endif; ?>
        label="<?php echo e(__('avored::promotion.promotion-code.active_till')); ?>">
            <a-date-picker :default-value="activeTillDefault" :format="dateFormat" @change="onActiveTillChange"></a-date-picker>
    </a-form-item>
    <input type="hidden" v-model="activeTill" name="active_till"  />
    </a-col>
</a-row>
<?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/promotion/promotion-code/_fields.blade.php ENDPATH**/ ?>