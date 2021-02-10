
<div class="price">
    <?php echo e(session()->get('default_currency')->symbol); ?><?php echo e($product->getPrice()); ?>

</div>
<div class="availability">
    <?php echo e(__('Availability')); ?>: <?php echo e($product->getQty()); ?>

</div>

<form method="post" action="<?php echo e(route('add.to.cart')); ?>">
    <?php echo csrf_field(); ?>

    <a-input-number :min="1" :default-value="1" @change="changeQty" name="qty"></a-input-number>
    <a-button html-type="submit" type="primary">
        <a-icon type="shopping_cart"></a-icon>
        Add To Cart
    </a-button>
    <input type="hidden" name="slug" value="<?php echo e($product->slug); ?>" />
    <input type="hidden" name="qty" v-model="qty" />
</form>
<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\resources\views/product/type/basic.blade.php ENDPATH**/ ?>