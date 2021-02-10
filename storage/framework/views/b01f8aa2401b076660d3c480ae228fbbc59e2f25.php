
<a-divider><h4 class="mt-1"><?php echo e(__('Payment Options')); ?></h4></a-divider>

<?php $__currentLoopData = $paymentOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p>
        <?php echo e($payment->render()); ?>

    </p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<input type="hidden" name="payment_option" v-model="paymentOption" />
<?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/checkout/cards/payment-option.blade.php ENDPATH**/ ?>