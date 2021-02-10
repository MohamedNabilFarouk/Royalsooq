<?php
    $data = collect();
    $data->put('a_cash_on_delivery_status', $repository->getValueByCode('a_cash_on_delivery_status'))
?>

<cash-on-delivery-config :data="<?php echo e($data); ?>"></cash-on-delivery-config>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('avored-admin/js/cash-on-delivery.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\modules\avored\cash-on-delivery\src/../resources/views/system/configuration/payment-card.blade.php ENDPATH**/ ?>