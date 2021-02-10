<?php $__env->startSection('header'); ?>

<!-- Header  -->
<nav class="navbar navbar-expand-lg bg-header">
    <div class="container-fluid justify-content-start">
        <a href="<?php echo e(url('/account')); ?>" class="btn">
            <i class="material-icons">arrow_back</i>
        </a>
        <div class="navbar-heading m-l-10">
            <h4><?php echo e($reply->subject); ?></h4>
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
        <div class="chat-wrapper">

            <div class="inlineContainer">
                <div class="otherChat other">
                    <a class="image-zoom" href="asset<?php echo e(('/storage/'.$reply->product->main_image_url)); ?>"><img alt="chat image" src="asset<?php echo e(('/storage/'.$reply->product->main_image_url)); ?>"></a>
                    <span><?php echo e(__('index.s_from')); ?> : <?php echo e($reply->user->name); ?></span>
                    <span><?php echo e(__('index.email')); ?> : <?php echo e($reply->user->email); ?></span><br>
                    <span><?php echo e(__('index.item')); ?> : <a href='<?php echo e(url("Product-details",$reply->product->slug)); ?>'><?php echo e($reply->product->name); ?></a></span>

                </div>
                
            </div>
            <div class="inlineContainer">
                <div class="otherChat other">
                    <span><?php echo e(__('index.message')); ?> :  <?php echo e($reply->message); ?></span>
                </div>
                
            </div>
        </div>

    </div>
</div>
<!-- .Content  -->


<!-- Bottom Panel  -->
<div class="footer footer-trans" style="margin-bottom:150px;">
    <div class="clearfix"></div>
    <div class="chat-form">
        <form role="form" action="<?php echo e(route('send.chat.message')); ?>" method="post" id="message-form" autocomplete="off">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="seller_id" value="<?php echo e($reply->user->id); ?>">
            <input type="hidden" name="item_id" value="<?php echo e($reply->product->id); ?>">
            <input type="hidden"  name="subject" class="form-control chat-input" value='Reply to <?php echo e($reply->message); ?>' >

        <div class="position-relative">
            <div class="chat-input-links p-l-10">
                
            </div>
            <input type="text" name="message" class="form-control chat-input" placeholder="<?php echo e(__('index.message')); ?>" value="">
            <div class="chat-input-links right">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        
                    </li>
                    <li class="list-inline-item">
                        <a href="#" onclick="document.getElementById('message-form').submit()"><i class="material-icons col-primary">send</i></a>
                    </li>
                </ul>
            </div>
        </div>
         </form>
    </div>
</div>
<!-- Bottom Panel  -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts_mobile.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/blades_mobile/showAndReply_mobile.blade.php ENDPATH**/ ?>