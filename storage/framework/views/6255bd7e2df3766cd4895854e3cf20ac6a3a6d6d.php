
<a-divider><h4 class="mt-1"><?php echo e(__('Shipping Options')); ?></h4></a-divider>


<?php $__currentLoopData = $shippingOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shipping): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a-switch @change="handleShippingChange($event, '<?php echo e($shipping->identifier()); ?>')"></a-switch>
    <?php echo e($shipping->name()); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<input type="hidden" name="shipping_option" v-model="shippingOption" />
<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\resources\views/checkout/cards/shipping-option.blade.php ENDPATH**/ ?>