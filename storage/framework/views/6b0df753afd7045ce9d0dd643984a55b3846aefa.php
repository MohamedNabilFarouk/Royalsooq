
<a-divider><h4 class="mt-1"><?php echo e(__('Payment Options')); ?></h4></a-divider>

<?php $__currentLoopData = $paymentOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p>
        <?php echo e($payment->render()); ?>

    </p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<input type="hidden" name="payment_option" v-model="paymentOption" />
<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\resources\views/checkout/cards/payment-option.blade.php ENDPATH**/ ?>