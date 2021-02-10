<?php $__env->startSection('meta_title'); ?>
    AvoRed E commerce Admin Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a-row type="flex" :gutter="20" justify="center">
    <?php echo e($orderWidget->render()); ?>

    <?php echo e($customerWidget->render()); ?>

    <?php echo e($revenueWidget->render()); ?>

</a-row>
<a-row type="flex" class="mt-1" justify="center">
    <a-col :span="24">
        <a-card  title="Admin Dashboard">
            <div>
                <p>We will really appriciate if you give us any feedback about the project.
                It helps us to developed more better.</p>
                <p>You can help us in my ways like helping in our 
                    <a href="https://github.com/avored/documentation" title="AvoRed Documantation Repository">docs</a>, 
                    <a href="https://github.com/avored/framework" title="AvoRed Framework Repository">framework</a>, or create an
                    <a href="https://github.com/avored/laravel-ecommerce/issues" title="Avored laravel repository">issue</a>.
                </p>
                
            </div>
        </a-card>
    </a-col>
</a-row>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('avored::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/admin.blade.php ENDPATH**/ ?>