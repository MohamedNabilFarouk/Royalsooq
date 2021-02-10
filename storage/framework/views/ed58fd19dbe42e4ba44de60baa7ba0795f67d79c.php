<a-divider><h4 class="mt-1"><?php echo e(__('User Shipping Address')); ?></h4></a-divider>

<div v-if="shippingAddresses.length <= 0">

<a-row :gutter="15">
    <a-col :span="12">
        <a-form-item
                <?php if($errors->has('shipping.first_name')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('shipping.first_name')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('First Name')); ?>">
            <a-input
                
                name="shipping[first_name]"
                v-decorator="[
                'shipping.first_name',
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
                <?php if($errors->has('shipping.last_name')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('shipping.last_name')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('Last Name')); ?>">
            <a-input
                
                name="shipping[last_name]"
                v-decorator="[
                'shipping.last_name',
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
                <?php if($errors->has('shipping.company_name')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('shipping.company_name')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('Company Name')); ?>">
            <a-input
                
                name="shipping[company_name]"
                v-decorator="[
                'shipping.company_name',
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
                <?php if($errors->has('shipping.phone')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('shipping.phone')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('Phone')); ?>">
            <a-input
                
                name="shipping[phone]"
                v-decorator="[
                'shipping.phone',
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
                <?php if($errors->has('shipping.address1')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('shipping.address1')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('Address1')); ?>">
            <a-input
                
                name="shipping[address1]"
                v-decorator="[
                'shipping.address1',
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
                <?php if($errors->has('shipping.address2')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('shipping.address2')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('Address2')); ?>">
            <a-input
                
                name="shipping[address2]"
                v-decorator="[
                'shipping.address2',
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
                <?php if($errors->has('shipping.country_id')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('shipping.country_id')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('Country')); ?>">
                <a-select
                    autocomplete="off"
                    @change="shippingCountryOptionChange"
                    v-decorator="[
                    'shipping.country_id',
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
        <input type="hidden" name="shipping[country_id]" v-model="shippingCountry" />
    </a-col>
    <a-col :span="12">
        <a-form-item
                <?php if($errors->has('shipping.state')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('shipping.state')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('State')); ?>">
            <a-input
                
                name="shipping[state]"
                v-decorator="[
                'shipping.state',
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
                <?php if($errors->has('shipping.postcode')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('shipping.postcode')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('Postcode')); ?>">
            <a-input
                
                name="shipping[postcode]"
                v-decorator="[
                'shipping.postcode',
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
                <?php if($errors->has('shipping.city')): ?>
                    validate-status="error"
                    help="<?php echo e($errors->first('shipping.city')); ?>"
                <?php endif; ?>
                label="<?php echo e(__('City')); ?>">
            <a-input
                
                name="shipping[city]"
                v-decorator="[
                'shipping.city',
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

<div v-if="shippingAddresses.length > 0">

<a-row :gutter="15">
    <a-col :span="24">
        <a-form-item label="<?php echo e(__('Shipping Addresses')); ?>">

            <a-select :default-value='0' @change="changeSelectedShippingAddress">
                <a-select-option v-for="(address, index) in shippingAddresses"
                    :key="'shipping-address-' + address.id"
                    :value="index">
                    {{ address.address1 }} {{ address.address2 }}
                    {{ address.city }}
                    {{ address.state }}
                    {{ address.country }} {{ address.postcode }}
                </a-select-option>
            </a-select>
            <input type="hidden" name="shipping[address_id]" :value="selectedShippingAddress.id" />
        </a-form-item>
        
        
        <a-card title="Selected Shipping Address">
            <div>
                {{ selectedShippingAddress.id }}<br/>
                {{ selectedShippingAddress.company_name }}<br/>
                {{ selectedShippingAddress.first_name }} {{ selectedShippingAddress.last_name }} <br/>
                {{ selectedShippingAddress.address1 }} {{ selectedShippingAddress.address2 }} <br/>
                {{ selectedShippingAddress.city }} <br/>
                {{ selectedShippingAddress.state }} <br/>
                {{ selectedShippingAddress.country }} {{ selectedShippingAddress.postcode }}<br/>
            </div>
        </a-card>
    </a-col>
</a-row>
</div>


<a-switch class="mt-1" @change="useDifferentBillingAddressSwitchChange" default-checked></a-switch>
<?php echo e(__('User Different Billing Address')); ?>

<input type="hidden" name="use_different_address" v-model="useDifferentBillingAddress" />
<?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\resources\views/checkout/cards/shipping-address.blade.php ENDPATH**/ ?>