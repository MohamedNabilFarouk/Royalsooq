<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" style="margin:50px;">
            <div class="card">
                <div class="card-header"><?php echo e(__('index.verify')); ?></div>

                <div class="card-body">
                    <?php if(session('resent')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(__('index.check_mail')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('index.message')); ?>

                   <a href="<?php echo e(route('verification.resend')); ?>"><?php echo e(__('index.click')); ?></a>.
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/auth/verify.blade.php ENDPATH**/ ?>