<?php $__env->startSection('header'); ?>
<!-- Header  -->
<nav class="navbar navbar-expand-lg bg-header">
    <div class="container-fluid justify-content-start">
        <a href="<?php echo e(route('allCategories')); ?>" class="btn">
            <i class="material-icons">arrow_back</i>
        </a>
        <div class="navbar-heading m-l-10">
            <h4><?php echo e($sub[0]->category->name); ?></h4>
        </div>
    </div>
</nav>
<!-- .Header  -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Content  -->
<div id="content">

    <!-- Content Wrap  -->
    <div class="content-wrap">
        <ul class="list-group">
            <?php $__currentLoopData = $sub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item col-text">
                <a href="<?php echo e(route('sub.products', $s->slug)); ?>" class=" d-flex align-items-center">
                    <img src="<?php echo e(asset('storage/'. $s->image)); ?>" width="24">
                    <span class="m-l-10"><?php echo e($s->name); ?></span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<!-- .Content  -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts_mobile.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/blades_mobile/subcategory-category_mobile.blade.php ENDPATH**/ ?>