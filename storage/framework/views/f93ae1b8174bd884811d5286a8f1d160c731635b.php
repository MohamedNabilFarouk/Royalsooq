<div v-if="useDifferentBillingAddress">

<a-divider><h4 class="mt-1"><?php echo e(__('User Billing Address')); ?></h4></a-divider>

<div v-if="billingAddresses.length <= 0">

<a-row :gutter="15">
    <a-col :span="12">
        <a-form-item
                <?php if($errors->has('billing.first_name')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('billing.first_name')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('First Name')); ?>">
            <a-input
                name="billing[first_name]"
                v-decorator="[
                'billing.first_name',
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
                <?php if($errors->has('billing.last_name')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('billing.last_name')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('Last Name')); ?>">
            <a-input
                
                name="billing[last_name]"
                v-decorator="[
                'billing.last_name',
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
    <a-col :span="12">
        <a-form-item
                <?php if($errors->has('billing.company_name')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('billing.company_name')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('Company Name')); ?>">
            <a-input
                
                name="billing[company_name]"
                v-decorator="[
                'billing.company_name',
                {
                    rules: [
                        {   required: false, 
                            message: 'The <?php echo e(__('Company Name')); ?> field is required' 
                        }
                    ]
                }
                ]"
            />
        </a-form-item>
    </a-col>
    <a-col :span="12">
        <a-form-item
                <?php if($errors->has('billing.phone')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('billing.phone')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('Phone')); ?>">
            <a-input
                
                name="billing[phone]"
                v-decorator="[
                'billing.phone',
                {
                    rules: [
                        {   required: true, 
                            message: 'The <?php echo e(__('Phone')); ?> field is required' 
                        }
                    ]
                }
                ]"
            />
        </a-form-item>
    </a-col>
</a-row>

<a-row :gutter="15">
    <a-col :span="12">
        <a-form-item
                <?php if($errors->has('billing.address1')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('billing.address1')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('Address1')); ?>">
            <a-input
                
                name="billing[address1]"
                v-decorator="[
                'billing.address1',
                {
                    rules: [
                        {   required: true, 
                            message: 'The <?php echo e(__('Address1')); ?> field is required' 
                        }
                    ]
                }
                ]"
            />
        </a-form-item>
    </a-col>
    <a-col :span="12">
        <a-form-item
                <?php if($errors->has('billing.address2')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('billing.address2')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('Address2')); ?>">
            <a-input
                
                name="billing[address2]"
                v-decorator="[
                'billing.address2',
                {
                    rules: [
                        {   required: true, 
                            message: 'The <?php echo e(__('Address2')); ?> field is required' 
                        }
                    ]
                }
                ]"
            />
        </a-form-item>
    </a-col>
</a-row>

<a-row :gutter="15">
    <a-col :span="12">
        <a-form-item
                <?php if($errors->has('billing.country_id')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('billing.country_id')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('Country')); ?>">
            <a-select
                    autocomplete="off"
                    @change="billingCountryOptionChange"
                    v-decorator="[
                    'billing.country_id',
                    {
                        rules: [
                            {   required: true, 
                                message: 'The <?php echo e(__('Country')); ?> field is required' 
                            }
                        ]
                    }
                    ]"
                >
                    <?php $__currentLoopData = $countryOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $countryVal => $countryLabel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a-select-option value="<?php echo e($countryVal); ?>"><?php echo e($countryLabel); ?></a-select-option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </a-select> 
        </a-form-item>
        <input type="hidden" name="billing[country_id]" v-model="billingCountry" />
    </a-col>
    <a-col :span="12">
        <a-form-item
                <?php if($errors->has('billing.state')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('billing.state')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('State')); ?>">
            <a-input
                
                name="billing[state]"
                v-decorator="[
                'billing.state',
                {
                    rules: [
                        {   required: true, 
                            message: 'The <?php echo e(__('State')); ?> field is required' 
                        }
                    ]
                }
                ]"
            />
        </a-form-item>
    </a-col>
</a-row>

<a-row :gutter="15">
    <a-col :span="12">
        <a-form-item
                <?php if($errors->has('billing.postcode')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('billing.postcode')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('Postcode')); ?>">
            <a-input
                
                name="billing[postcode]"
                v-decorator="[
                'billing.postcode',
                {
                    rules: [
                        {   required: true, 
                            message: 'The <?php echo e(__('Postcode')); ?> field is required' 
                        }
                    ]
                }
                ]"
            />
        </a-form-item>
    </a-col>
    <a-col :span="12">
        <a-form-item
                <?php if($errors->has('billing.city')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('billing.city')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('City')); ?>">
            <a-input
                
                name="billing[city]"
                v-decorator="[
                'billing.city',
                {
                    rules: [
                        {   required: true, 
                            message: 'The <?php echo e(__('City')); ?> field is required' 
                        }
                    ]
                }
                ]"
            />
        </a-form-item>
    </a-col>
</a-row>

</div>


<div v-if="billingAddresses.length > 0">

<a-row :gutter="15">
    <a-col :span="24">
        <a-form-item label="<?php echo e(__('Billing Addresses')); ?>">

            <a-select :default-value='0' @change="changeSelectedBillingAddress">
                <a-select-option v-for="(address, index) in billingAddresses" :key="'billing-address-' + address.id" :value="index">
                    {{ address.address1 }} {{ address.address2 }}
                    {{ address.city }}
                    {{ address.state }}
                    {{ address.country }} {{ address.postcode }}
                </a-select-option>
            </a-select>
            <input type="hidden" name="billing[address_id]" :value="selectedBillingAddress.id" />
        </a-form-item>
        
        
        <a-card title="Selected Billing Address">
            <div>
                {{ selectedBillingAddress.id }}<br/>
                {{ selectedBillingAddress.company_name }}<br/>
                {{ selectedBillingAddress.first_name }} {{ selectedBillingAddress.last_name }} <br/>
                {{ selectedBillingAddress.address1 }} {{ selectedBillingAddress.address2 }} <br/>
                {{ selectedBillingAddress.city }} <br/>
                {{ selectedBillingAddress.state }} <br/>
                {{ selectedBillingAddress.country }} {{ selectedBillingAddress.postcode }}<br/>
            </div>
        </a-card>
    </a-col>
</a-row>
</div>

</div>
<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\resources\views/checkout/cards/billing-address.blade.php ENDPATH**/ ?>