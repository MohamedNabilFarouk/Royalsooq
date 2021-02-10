<?php $__env->startSection('header'); ?>

<!-- Header  -->
<nav class="navbar navbar-expand-lg bg-header">
    <div class="container-fluid justify-content-start">
        <a href="<?php echo e(url()->previous()); ?>" class="btn">
            <i class="material-icons">arrow_back</i>
        </a>
        <div class="navbar-heading m-l-10">
            <h4><?php echo e(__('index.my_ads')); ?></h4>
        </div>
    </div>
</nav>
<!-- .Header  -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<!-- Content  -->
<div id="content" style="margin-top:80px;">
    <!-- Content Wrap  -->
    <div class="content-wrap">
        <?php $__currentLoopData = $userFreeAds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ad-section">
            <div class="ad-section-item">
                <div class="ad-box list">

                    <div class="ad-image">
                        <button type="button" class="btn favourite-icon">
                            <i class="material-icons">favorite_border</i>
                        </button>
                        <img src="<?php echo e($p->main_image_url); ?>" alt="<?php echo e(__('index.no_image')); ?>" title="<?php echo e($p->name); ?>">
                    </div>
                    <div class="ad-content">
                        <a href="<?php echo e(route('product.details', $p->slug)); ?>" class="ad-title"><?php echo e($p->name); ?></a>
                        <div class="ad-price"><i class="material-icons"></i><?php echo e($p->country->currency); ?>   <?php echo e($p->price); ?></div>
                        <div class="ad-location"><i class="material-icons-outlined">location_on</i><?php if($p->city): ?><?php echo e($p->city->city); ?> <?php endif; ?></div>
                        <div class="ad-location col-text"><i class="material-icons">schedule</i><?php echo e(date_format($p->created_at,'d M Y')); ?></div>
                        <div class="d-flex flex-wrap align-items-center m-t-5">
                            <div class="ad-time pt-0">
                                <i class="material-icons pr-1"></i></div>
                            <div class="ml-auto">
                                <a href="<?php echo e(route('free.ads.edit',$p->id)); ?>" slot="extra">  <button class="btn btn-icon"><i data-feather="edit"></i></button></a>
                                <form action="<?php echo e(route('user.deleteProduct',$p->id)); ?>" method="POST" id='delForm'>
                                    <?php echo e(method_field('DELETE')); ?>

                                    <?php echo csrf_field(); ?>
                                    <a href="#" onclick="document.getElementById('delForm').submit()"><button class="btn btn-icon"><i data-feather="trash-2"></i></button></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php  // echo $userFreeAds->render(); ?>

</div>
<!-- .Content  -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts_mobile.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/blades_mobile/userFreeAds_mobile.blade.php ENDPATH**/ ?>