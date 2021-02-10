<?php $__env->startSection('header'); ?>

<!-- Header  -->
<nav class="navbar navbar-expand-lg bg-header">
    <div class="container-fluid justify-content-start">
        <a href="<?php echo e(url('/account')); ?>" class="btn">
            <i class="material-icons">arrow_back</i>
        </a>
        <div class="navbar-heading m-l-10">
            <h4><?php echo e(__('index.saved_search')); ?></h4>
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
        <?php $__currentLoopData = $search; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ad-section">
            <div class="ad-section-item">
                <div class="ad-box list">

                    
                    <div class="ad-content">
                        <a href="#" class="ad-title"><?php echo e($s->search); ?></a>
                        
                        
                        <div class="ad-location col-text"><i class="material-icons">schedule</i><?php echo e($s->created_at->diffForHumans()); ?></div>
                        <div class="d-flex flex-wrap align-items-center m-t-5">
                            <div class="ad-time pt-0">
                                <i class="material-icons pr-1"></i></div>
                            <div class="ml-auto">
                                <form action="<?php echo e(url('/Search')); ?>" method="get" id='searchForm'>
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="name" value="<?php echo e($s->search); ?>">
                                    <input type="hidden" name="category" value="null">
                                    <a href="#" onclick="document.getElementById('searchForm').submit()" slot="extra">  <button class="btn btn-icon"><i data-feather="search"></i></button></a>
                                    </form>

                                <form action="<?php echo e(route('delete.search',$s->id)); ?>" method="POST" id='delForm'>
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


<?php echo $__env->make('layouts_mobile.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/blades_mobile/savedSearch_mobile.blade.php ENDPATH**/ ?>