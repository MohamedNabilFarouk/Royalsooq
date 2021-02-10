

<?php $__env->startSection('breadcrumb'); ?>
<a-breadcrumb style="margin: 16px 0">
    <a-breadcrumb-item>
      <a href="<?php echo e(route('home')); ?>" title="home">
        <?php echo e(__('Home')); ?>

      </a>
    </a-breadcrumb-item>
    <a-breadcrumb-item>
        <?php echo e(__('Cart')); ?>

    </a-breadcrumb-item>
</a-breadcrumb>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if(($cartProducts)=='[]'){

echo '<h2 class="text-center"> No Items </h2>';
}else{
    ?>
    <cart-page 
        :items="<?php echo e(Cart::toArray()); ?>"
        cart-update-url="<?php echo e(route('cart.update')); ?>"
        cart-delete-url="<?php echo e(route('cart.destroy')); ?>" inline-template>
        <div>
        <?php
            $currencySymbol = session()->get('default_currency')->symbol;
        ?>
            <a-row>
                <a-col :span="2"></a-col>
                <a-col :span="4">Image</a-col>
                <a-col :span="4">Name</a-col>
                <a-col :span="3">Qty</a-col>
                <a-col :span="3">Price</a-col>
                <a-col :span="4">Tax</a-col>
                <a-col :span="4">Line Total</a-col>
            </a-row>
            <a-row class="mt-1" :key="item.slug" v-for="item in items">
                <a-col :span="2">
                    <a-checkbox @change="clickOnCheckBox($event, item)"></a-checkbox>
                </a-col>
                <a-col :span="4">
                    <a-avatar :style="{width:'75px', height: '75px'}" :src="item.image"></a-avatar>
                </a-col>
                <a-col :span="4">
                    <a :href="'/product/' + item.slug">
                        {{item.name}}
                    </a>
                    <p v-for="attributeInfo in item.attributes">
                        {{ attributeInfo['attribute_name'] }}: {{ attributeInfo['attribute_dropdown_text'] }}
                    </p>
                </a-col>
                <a-col :span="3">{{ parseFloat(item.qty).toFixed(2) }}</a-col>
                <a-col :span="3"><?php echo e($currencySymbol); ?>{{ parseFloat(item.price).toFixed(2) }}</a-col>
                <a-col :span="4"><?php echo e($currencySymbol); ?>{{ parseFloat(item.tax).toFixed(2) }}</a-col>
                <a-col :span="4"><?php echo e($currencySymbol); ?>{{ parseFloat((item.qty * item.price) + item.tax).toFixed(2) }}</a-col>
                
            </a-row>
            <a-row class="mt-1">
                <a-col :span="2"></a-col>
                <a-col :span="4"></a-col>
                <a-col :span="4"></a-col>
                <a-col :span="3"></a-col>
                <a-col :span="3"></a-col>
                <a-col :span="4"><?php echo e(__('Discount:')); ?></a-col>
                <a-col :span="4">
                    <?php echo e($currencySymbol); ?><?php echo e(Cart::discount()); ?>

                </a-col>
            </a-row>
            <a-row class="mt-1">
                <a-col :span="2"></a-col>
                <a-col :span="4"></a-col>
                <a-col :span="4"></a-col>
                <a-col :span="3"></a-col>
                <a-col :span="3"></a-col>
                <a-col :span="4"><?php echo e(__('Grand Total:')); ?></a-col>
                <a-col :span="4">
                    <?php echo e($currencySymbol); ?><?php echo e(Cart::total()); ?>

                   
                </a-col>
            </a-row>
            <a-row class="mt-1">
                <a-col v-if="showCartActionBtn" :span="24">
                    <a-button v-on:click="updateCartProductClick" type="primary">Update</a-button>
                    <a-button v-on:click="delteCartProductClick" type="dashed">Delete</a-button>
                </a-col>
            </a-row>
            <a-divider></a-divider>
            <a-row :gutter="20" class="mt-1">
                <a-col :span="12" :push="4">
                    <a-card title="Apply Promotion Code">
                        <?php if(Cart::discount(false) <= 0): ?>
                        <div>
                            <form method="get" :form="form" @submit="handleCouponSubmit" action="">
                                <a-form-item label="<?php echo e(__('Enter your promotion code:')); ?>">
                                    <a-input :auto-focus="true" name="promotion_code"></a-input>
                                </a-form-item>
                                <a-form-item>
                                    <a-button html-type="submit" type="primary" style="background-color:#2A8FBD;"><?php echo e(__('Apply')); ?></a-button>
                                </a-form-item>
                            </form>
                        </div>
                        <?php else: ?>
                            <?php echo e(__('You have used one coupon already')); ?>

                        <?php endif; ?>
                    </a-card>
                </a-col>
                <a-col :span="8" :push="4">
              
               

                    
                    <a class="btn-checkout" href="<?php echo e(route('checkout.show')); ?>">
                        <a-button type="primary" style="background-color:#2A8FBD;"><?php echo e(__('Checkout')); ?></a-button>
                    </a>

                      
                </a-col>
            </a-row>
            <a-modal
                title="Cart Update"
                :visible="cartUpdateModalVisibility"
                @ok="clickOnCartUpdateOk"
                ok-text="Update"
                @cancel="clickOnCartUpdateCancel">
                <p v-if="cartActionProducts.length">
                    <a-row :gutter="5">
                        <a-col :span="4">Image</a-col>
                        <a-col :span="6">Name</a-col>
                        <a-col :span="5">Qty</a-col>
                        <a-col :span="3">Price</a-col>
                        <a-col :span="3">Tax</a-col>
                        <a-col :span="3">Total</a-col>
                    </a-row>
                   
                    <a-row :gutter="5" class="mt-1" key="index" v-for="(cartProduct, index) in cartActionProducts">
                        <a-col :span="4">
                            <a-avatar :style="{width:'50px', height: '50px'}" :src="cartProduct.image">
                            </a-avatar>
                        </a-col>
                        <a-col :span="6">
                            <a :href="'/product/' + cartProduct.slug">
                                {{cartProduct.name}}
                            </a>
                        </a-col>
                        <a-col :span="5">
                            <a-input-number :style="'width:50px;'" :min="1" v-model="cartProduct.qty">
                            </a-input-number>
                        </a-col>
                        <a-col :span="3">
                            {{ parseFloat(cartProduct.price).toFixed(2) }}
                        </a-col>
                        <a-col :span="3">
                            {{ parseFloat(cartProduct.tax).toFixed(2) }}
                        </a-col>
                        <a-col :span="3">
                            {{ parseFloat((cartProduct.qty * cartProduct.price) + cartProduct.tax).toFixed(2) }}
                        </a-col>      
                    </a-row>
                </p>
            </a-modal>
        </div>
    </cart-page>
<?php } ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/cart/show.blade.php ENDPATH**/ ?>