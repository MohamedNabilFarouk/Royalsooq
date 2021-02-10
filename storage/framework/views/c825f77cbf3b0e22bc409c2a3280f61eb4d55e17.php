<a-row :gutter="15"> 
    <a-col :span="24">
        <a-form-item
            <?php if($errors->has('type')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('type')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('Please Select Type')); ?>">
            <a-select
                @change="handleTypeChange"
                v-decorator="[
                    'type',
                    <?php echo e((isset($address)) ? "{'initialValue': '". $address->type ."'}," : ""); ?>

                    {rules: 
                        [
                            {   required: true, 
                                message: '<?php echo e(__('validation.required', ['attribute' => 'type'])); ?>' 
                            }
                        ]
                    }
                    ]">
                <?php $__currentLoopData = $typeOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a-select-option key="<?php echo e($val); ?>" value="<?php echo e($val); ?>" ><?php echo e($label); ?></a-select-option>            
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </a-select>
        </a-form-item>
        <input type="hidden" name="type" v-model="type" />
    </a-col>
</a-row>
<a-row :gutter="15"> 
    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('first_name')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('first_name')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('First Name')); ?>"
        >
            <a-input
                :auto-focus="true"
                name="first_name"
                v-decorator="[
                'first_name',
                <?php echo e((isset($address)) ? "{'initialValue': '". $address->first_name ."'}," : ""); ?>

                {rules: 
                    [
                        {   required: true, 
                            message: '<?php echo e(__('validation.required', ['attribute' => 'first_name'])); ?>' 
                        }
                    ]
                }
                ]"
            ></a-input>
        </a-form-item>
    </a-col>
    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('last_name')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('last_name')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('Last Name')); ?>"
        >
            <a-input
                :auto-focus="true"
                name="last_name"
                v-decorator="[
                'last_name',
                <?php echo e((isset($address)) ? "{'initialValue': '". $address->last_name ."'}," : ""); ?>

                {rules: 
                    [
                        {   required: true, 
                            message: '<?php echo e(__('validation.required', ['attribute' => 'last_name'])); ?>' 
                        }
                    ]
                }
                ]"
            ></a-input>
        </a-form-item>
    </a-col>
</a-row>


<a-row :gutter="15"> 
    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('company_name')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('company_name')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('Company Name')); ?>"
        >
            <a-input
                :auto-focus="true"
                name="company_name"
                v-decorator="[
                'company_name',
                <?php echo e((isset($address)) ? "{'initialValue': '". $address->company_name ."'}," : ""); ?>

                {rules: 
                    [
                        {   required: false, 
                            message: '<?php echo e(__('validation.required', ['attribute' => 'company_name'])); ?>' 
                        }
                    ]
                }
                ]"
            ></a-input>
        </a-form-item>
    </a-col>
    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('phone')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('phone')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('Phone')); ?>"
        >
            <a-input
                :auto-focus="true"
                name="phone"
                v-decorator="[
                'phone',
                <?php echo e((isset($address)) ? "{'initialValue': '". $address->phone ."'}," : ""); ?>

                {rules: 
                    [
                        {   required: true, 
                            message: '<?php echo e(__('validation.required', ['attribute' => 'phone'])); ?>' 
                        }
                    ]
                }
                ]"
            ></a-input>
        </a-form-item>
    </a-col>
    
</a-row>


<a-row :gutter="15"> 
    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('address1')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('address1')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('Address1')); ?>"
        >
            <a-input
                :auto-focus="true"
                name="address1"
                v-decorator="[
                'address1',
                <?php echo e((isset($address)) ? "{'initialValue': '". $address->address1 ."'}," : ""); ?>

                {rules: 
                    [
                        {   required: true, 
                            message: '<?php echo e(__('validation.required', ['attribute' => 'address1'])); ?>' 
                        }
                    ]
                }
                ]"
            ></a-input>
        </a-form-item>
    </a-col>
    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('address2')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('address2')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('Address2')); ?>"
        >
            <a-input
                :auto-focus="true"
                name="address2"
                v-decorator="[
                'address2',
                <?php echo e((isset($address)) ? "{'initialValue': '". $address->address2 ."'}," : ""); ?>

                {rules: 
                    [
                        {   required: false, 
                            message: '<?php echo e(__('validation.required', ['attribute' => 'address2'])); ?>' 
                        }
                    ]
                }
                ]"
            ></a-input>
        </a-form-item>
    </a-col>
</a-row>

<a-row :gutter="15"> 
    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('postcode')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('postcode')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('Postcode')); ?>"
        >
            <a-input
                :auto-focus="true"
                name="postcode"
                v-decorator="[
                'postcode',
                <?php echo e((isset($address)) ? "{'initialValue': '". $address->postcode ."'}," : ""); ?>

                {rules: 
                    [
                        {   required: true, 
                            message: '<?php echo e(__('validation.required', ['attribute' => 'postcode'])); ?>' 
                        }
                    ]
                }
                ]"
            ></a-input>
        </a-form-item>
    </a-col>
    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('country_id')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('country_id')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('Country')); ?>"
        >
                <a-select
                    @change="handleCountryChange"
                    v-decorator="[
                        'country_id',
                        <?php echo e((isset($address)) ? "{'initialValue': '". $address->country_id ."'}," : ""); ?>

                        {rules: 
                            [
                                {   required: true, 
                                    message: '<?php echo e(__('validation.required', ['attribute' => 'country_id'])); ?>' 
                                }
                            ]
                        }
                        ]">
                <?php $__currentLoopData = $countryOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a-select-option key="country-<?php echo e($val); ?>" value="<?php echo e($val); ?>" ><?php echo e($label); ?></a-select-option>            
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </a-select>
        </a-form-item>
        <input type="hidden" name="country_id" v-model="country_id" />
    </a-col>
</a-row>

<a-row :gutter="15"> 
    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('state')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('state')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('State')); ?>"
        >
            <a-input
                :auto-focus="true"
                name="state"
                v-decorator="[
                'state',
                <?php echo e((isset($address)) ? "{'initialValue': '". $address->state ."'}," : ""); ?>

                {rules: 
                    [
                        {   required: true, 
                            message: '<?php echo e(__('validation.required', ['attribute' => 'state'])); ?>' 
                        }
                    ]
                }
                ]"
            ></a-input>
        </a-form-item>
    </a-col>
    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('city')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('city')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('City')); ?>"
        >
            <a-input
                :auto-focus="true"
                name="city"
                v-decorator="[
                'city',
                <?php echo e((isset($address)) ? "{'initialValue': '". $address->city ."'}," : ""); ?>

                {rules: 
                    [
                        {   required: false, 
                            message: '<?php echo e(__('validation.required', ['attribute' => 'city'])); ?>' 
                        }
                    ]
                }
                ]"
            ></a-input>
        </a-form-item>
    </a-col>
</a-row>

<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\resources\views/account/address/_fields.blade.php ENDPATH**/ ?>