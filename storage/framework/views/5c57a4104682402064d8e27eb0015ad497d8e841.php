<?php $__env->startSection('header'); ?>

    <!-- Header  -->
<nav class="navbar navbar-expand-lg bg-header">
    <div class="container-fluid justify-content-start">
        <a href="<?php echo e(url()->previous()); ?>" class="btn">
            <i class="material-icons">arrow_back</i>
        </a>
        <div class="navbar-heading m-l-10">
            <h4><?php echo e(__("index.shop_info")); ?></h4>
        </div>
    </div>
</nav>
<!-- .Header  -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div id="content" class="noFooter">
    <!-- Content Wrap  -->
    <div class="content-wrap">
        <div class="heading-section mt-0">
            <div class="title col-secondary font-weight-normal">Ad Details</div>
        </div>








        <div class="ad-section" style='margin-top: 31px;'>
            <div class="ad-section-item">


<form role="form" action="<?php echo e(route('shops.data.add')); ?>" method="post" id="login-form" autocomplete="off" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

<div class="form-group">
    <div class="form-line">
        <label class="font-medium"><?php echo e(__('index.shop_about')); ?><span class="text-danger">*</span></label>
        <textarea name="about"  class="form-control" placeholder="<?php echo e(__('index.shop_about')); ?>"></textarea>
    </div>
</div>




 <!-- images -->




 <label class="font-medium"><?php echo e(__('index.photos')); ?><span class="text-danger">*</span></label>
 <small> <?php echo e(__('index.more_image')); ?></small>


 <div class="row row-wrap" style="display: flex;justify-content: center;">





       <div style="width: 50%;display: flex;justify-content: center;align-items: center;flex-wrap: wrap;">



           <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">



               <label for="file-input">



               <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>


               </label>



                       <input type="file" name="image[]" id="file-input"  style="display: none;" multiple>

                       <!-- <input type='file' id="imgInp" /> -->

           </div>

       </div>

       <div id="dvPreview" style="width:200px;"></div>




</div>





<!-- end images -->
</div>
        </div>
    </div>
    <div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts_mobile.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/blades_mobile/shop_data_mobile.blade.php ENDPATH**/ ?>