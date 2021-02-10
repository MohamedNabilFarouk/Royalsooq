<?php $__env->startSection('content'); ?>
<!-- Content  -->
<div id="content">

    <!-- Content Wrap  -->
    <div class="content-wrap">
        <ul class="list-group">
            <?php $__currentLoopData = $allcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item col-text">
                <a href="<?php echo e(route('category.sub', $c->id)); ?>" class=" d-flex align-items-center">
                    <img src="<?php echo e(asset('storage/'. $c->image)); ?>" width="24">
                    <span class="m-l-10"><?php echo e($c->name); ?></span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<!-- .Content  -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts_mobile.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/blades_mobile/allCategories_mobile.blade.php ENDPATH**/ ?>