
<?php $__env->startSection('breadcrumb'); ?>
<a-breadcrumb style="margin: 16px 0">
    <a-breadcrumb-item>
      <a href="<?php echo e(route('home')); ?>" title="home">
        Home
      </a>
    </a-breadcrumb-item>
    <a-breadcrumb-item>
      <a href="<?php echo e(route('account.dashboard')); ?>" title="user dashboard">
        Seller Dashboard
      </a>
    </a-breadcrumb-item>

    <a-breadcrumb-item>
        Ads 
    </a-breadcrumb-item>
</a-breadcrumb>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<h4> Ads  </h4>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/seller/adsPosition.blade.php ENDPATH**/ ?>