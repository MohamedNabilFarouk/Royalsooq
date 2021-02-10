<?php $__env->startSection('header'); ?>
    <!-- Header  -->
<nav class="navbar navbar-expand-lg bg-header dark">
    <div class="container-fluid justify-content-start">
        <a href="<?php echo e(url('/account')); ?>" class="btn">
            <i class="material-icons">clear</i>
        </a>
        <div class="navbar-heading m-l-10">
            <h4><?php echo e(__('index.setting')); ?></h4>
        </div>
        
    </div>
</nav>
<!-- .Header  -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content  -->
<div id="content" style="margin-bottom:50px; margin-top:90px;>
    <!-- Content Wrap  -->
    <div class="content-wrap">
        

        <form id="file-upload-form" class="uploader" method='post' action="<?php echo e(route('account.upload.image')); ?>" enctype="multipart/form-data" >

            <?php echo csrf_field(); ?>

            <?php if(empty(Auth::user()->image)): ?>

            <img id="userImg" class="userImg big" src="<?php echo e(asset('img/user_avatar.jpg')); ?>" alt="No Image" style='width:50%'>&nbsp;



                    <?php else: ?>

            <img id="userImg" class="userImg big" src="<?php echo e(asset('/storage/' . Auth::user()->image)); ?>" alt="No Image" style='width:20%'>

            <?php endif; ?>

            <input type="hidden" name="name" value="<?php echo e(Auth::user()->name); ?>" />

            <input type="hidden" name="email" value="<?php echo e(Auth::user()->email); ?>" />

            <input id="file-upload" type="file" name="file" accept="image/*" />

            <input type="submit" name="Upload" value="<?php echo e(__('index.save')); ?>" class="btn btn-primary">
            <a href="<?php echo e(route('account.image.delete')); ?>" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i><?php echo e(__('index.delete_image')); ?></a>

        </form>



        <form action="<?php echo e(route('account.save')); ?>" method="post" >
            <?php echo csrf_field(); ?>
            <?php if($errors->all()): ?>

            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <h6 style="color:red">*<?php echo e($err); ?></h6>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php endif; ?>
        <!--Basic Info-->
        <div class="heading-section">
            <div class="title"><?php echo e(__('index.contact_info')); ?></div>
        </div>
        <div class="ad-section">
            <div class="ad-section-item">

                <div class="form-group">
                    <div class="form-line">
                        <label><?php echo e(__('index.name')); ?></label>
                        <input type="text" class="form-control" name="name" value="<?php echo e(Auth::user()->name); ?>" placeholder="name" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <label><?php echo e(__('index.email')); ?></label>
                        <input type="email" class="form-control" name="email" value="<?php echo e(Auth::user()->email); ?>"  placeholder="demo@mail.com" >
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-line">
                        <label><?php echo e(__('index.phone')); ?></label>
                        <input type="text" class="form-control" name="phone" value="<?php echo e(Auth::user()->phone); ?>" placeholder="Phone" >
                    </div>
                </div>

                <div class="form-group">

                    <div class="col-md-6 col-md-offset-4">

                        <button type="submit" class="btn btn-primary">

                        <?php echo e(__('index.save')); ?>


                        </button>

                    </div>

                </div>
            </div>
        </div>
        <!--Basic Info-->
    </form>
    <?php if((Auth::user()->password) == null ): ?> <!-- create password -->



    <form class="form-horizontal" method="POST" action="<?php echo e(route('account.CreatePassword')); ?>">

    <?php echo e(csrf_field()); ?>


        <!--Change Password-->
        <div class="heading-section">
            <div class="title"><?php echo e(__('index.change_pass')); ?></div>
        </div>
        <div class="ad-section">
            <div class="ad-section-item">
                <div class="form-group">
                    <div class="form-line">
                        <label><?php echo e(__('index.new_pass')); ?></label>
                        <input type="password" class="form-control" name="new-password" required='' placeholder="password" >
                        <?php if($errors->has('new-password')): ?>

                                    <span class="help-block">

                                        <strong><?php echo e($errors->first('new-password')); ?></strong>

                                    </span>

                                <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <label><?php echo e(__('index.confirm_new_pass')); ?></label>
                        <input type="password" class="form-control" name="new-password_confirmation" placeholder="password" required="">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-md-6 col-md-offset-4">

                        <button type="submit" class="btn btn-primary">

                       <i class="fa fa-eye-slash" aria-hidden="true"></i> <?php echo e(__('index.change_pass')); ?>


                        </button>

                    </div>

                </div>
            </div>
        </div>
        <!--Contact Info-->
    </form>


    <?php else: ?>  <!-- change password -->

    <form class="form-horizontal" method="POST" action="<?php echo e(route('account.changePassword')); ?>">

<?php echo e(csrf_field()); ?>


<div class="heading-section">
    <div class="title"><?php echo e(__('index.change_pass')); ?></div>
</div>
<div class="ad-section">
    <div class="ad-section-item">
        <div class="form-group">
            <div class="form-line">
                <label><?php echo e(__('index.current_pass')); ?></label>
                <input type="password" class="form-control" name="current-password" required='' placeholder="password" >
                <?php if($errors->has('current-password')): ?>

                            <span class="help-block">

                                <strong><?php echo e($errors->first('current-password')); ?></strong>

                            </span>

                        <?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <div class="form-line">
                <label><?php echo e(__('index.new_pass')); ?></label>
                <input type="password" class="form-control" name="new-password" required='' placeholder="password" >
                <?php if($errors->has('new-password')): ?>

                            <span class="help-block">

                                <strong><?php echo e($errors->first('new-password')); ?></strong>

                            </span>

                        <?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <div class="form-line">
                <label><?php echo e(__('index.confirm_new_pass')); ?></label>
                <input type="password" class="form-control" name="new-password_confirmation" placeholder="password" required="">
            </div>
        </div>

        <div class="form-group">

            <div class="col-md-6 col-md-offset-4">

                <button type="submit" class="btn btn-primary save">

                <?php echo e(__('index.change_pass')); ?>


                </button>

            </div>

        </div>

    </div>
</div>
</form>
<?php endif; ?> <!-- password change or create-->
<!-- Content  -->

<div class="overlay"></div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts_mobile.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/blades_mobile/account_settings_mobile.blade.php ENDPATH**/ ?>