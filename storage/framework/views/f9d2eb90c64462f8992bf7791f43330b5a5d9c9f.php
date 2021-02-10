<?php $__env->startSection('header'); ?>

<!-- Header  -->

<!-- .Header  -->

<div class="section profile">
    <div class="left">
        <div class="user-image"> <img src="<?php echo e(asset('/storage/' . Auth::user()->image)); ?>" alt="profile" width="50"></div>
     </div>
    <div class="right p-l-10 line-h1">
        <div class="user-name"><?php echo e(Auth::user()->name); ?></div>
        <small>Active since : <span>Oct '16</span></small>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Content  -->
<div id="content">
    <!-- Content Wrap  -->
    <div class="content-wrap">
        

        <ul class="list-group">
            <li class="list-group-item col-text">
                <a href="<?php echo e(route('user.freeAds')); ?>" class=" d-flex align-items-center">
                    <i class="material-icons-outlined">library_add</i>
                    <span class="m-l-10"><?php echo e(__('index.my_ads')); ?></span> &nbsp;<span class="badge badge-pill"><?php echo e(count(Auth::user()->products)); ?></span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>
            <li class="list-group-item col-text">
                <a href="<?php echo e(route('favorites')); ?>" class=" d-flex align-items-center">
                    <i class="material-icons">favorite_border</i>
                    <span class="m-l-10"><?php echo e(__('index.favorite_ads')); ?>&nbsp;</span> <span class="badge badge-pill"><?php echo e(count(Auth::user()->wish)); ?></span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>
            <li class="list-group-item col-text">
                <a href="<?php echo e(route('shops.data')); ?>" class=" d-flex align-items-center">
                    <i class="material-icons-outlined">shop</i>
                    <span class="m-l-10"><?php echo e(__('index.shop_info')); ?></span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>
            <li class="list-group-item col-text">
                <a href="<?php echo e(route('shops2', auth()->user()->slug)); ?>" class=" d-flex align-items-center">
                    <i class="material-icons-outlined">shop</i>
                    <span class="m-l-10"> <?php echo e(__('index.your_shops')); ?></span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>
            <li class="list-group-item col-text">
                <a href="<?php echo e(route('search.saved')); ?>" class=" d-flex align-items-center">
                    <i class="material-icons-outlined">search</i>
                    <span class="m-l-10"><?php echo e(__('index.saved_search')); ?></span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>
            


            <li class="list-group-item col-text">
                <a href=" <?php echo e(route('chat.inbox')); ?>" class=" d-flex align-items-center">
                    <i class="material-icons-outlined">message</i>
                    <span class="m-l-10"> <?php echo e(__('index.inbox')); ?></span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>
            <li class="list-group-item col-text">
                <a href="<?php echo e(route('complaint')); ?>" class=" d-flex align-items-center">
                    <i class="material-icons-outlined">message</i>
                    <span class="m-l-10"><?php echo e(__('index.complaint')); ?></span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>

            <li class="list-group-item col-text">
                <a href="<?php echo e(route('settings')); ?>" class=" d-flex align-items-center">
                    <i class="material-icons-outlined">settings</i>
                    <span class="m-l-10"><?php echo e(__('index.setting')); ?></span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>
            <li class="list-group-item col-text">
                <a href="<?php echo e(route('logout')); ?>" class=" d-flex align-items-center">
                    <i data-feather="log-out"></i>
                    <span class="m-l-10"><?php echo e(__('index.logout')); ?></span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- .Content  -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts_mobile.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/blades_mobile/dashboard_mobile.blade.php ENDPATH**/ ?>