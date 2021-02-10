
<div class="mt-1 ml-1">
    <a-breadcrumb>
        <?php if(isset($breadcrumb->parents) && $breadcrumb->parents->count() >0): ?>
            <?php $__currentLoopData = $breadcrumb->parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parentBreadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                <a-breadcrumb-item>
                    <a href="<?php echo e(route($parentBreadcrumb->route)); ?>">
                        <?php echo e(__($parentBreadcrumb->label)); ?>

                    </a>
                </a-breadcrumb-item>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        
        <a-breadcrumb-item><?php echo e(__($breadcrumb->label)); ?></a-breadcrumb-item>
    </a-breadcrumb>
</div>
<?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/breadcrumb/index.blade.php ENDPATH**/ ?>