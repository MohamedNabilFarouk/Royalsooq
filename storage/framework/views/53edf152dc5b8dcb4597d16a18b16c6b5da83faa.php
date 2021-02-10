<?php $__env->startSection('breadcrumb'); ?>
<a-breadcrumb style="margin: 16px 0">
    <a-breadcrumb-item>
      <a href="<?php echo e(route('home')); ?>" title="home">
        <?php echo e(__('Home')); ?>

      </a>
    </a-breadcrumb-item>
    <a-breadcrumb-item>
        <?php echo e(__('User Dashboard')); ?>

    </a-breadcrumb-item>
</a-breadcrumb>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
     <a-card title="User Dashboard Page">
      <a href="<?php echo e(route('account.edit')); ?>" slot="extra">
        <a-icon type="edit"></a-icon>
      </a>
      <p>Name: <?php echo e($user->name); ?> </p>
      <p>Email: <?php echo e($user->email); ?> </p>
    </a-card>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\royal_git\resources\views/account/dashboard.blade.php ENDPATH**/ ?>