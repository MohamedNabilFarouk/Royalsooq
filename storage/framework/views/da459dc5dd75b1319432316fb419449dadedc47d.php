<!-- Content  -->
<div class="container login">
    <div class="login-text">
        <h3><?php echo e(__('index.log_in')); ?></h3>
    </div>
    <img src="https://royalsooq.com/img/logos/Royal Sooq.png" alt="login quickad">

    <?php if($errors->any()): ?>

    <div class="alert alert-danger">

        <ul>

            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <li><?php echo e($error); ?></li>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>

    </div>

<?php endif; ?>

    <div class="login-form mt-3">
        <form role="form" action="<?php echo e(route('login')); ?>" method="post" id="login-form" autocomplete="off">
            <div class="form-group">
                <span class="material-icons-outlined icon-label">email</span>

                <div class="form-line">
                    <input type="email" class="form-control" name="email" placeholder="<?php echo e(__('index.email')); ?>">
                </div>
                <span class="material-icons icon-label-right">check_circle</span>
            </div>
            <div class="form-group mb-3">
                <span class="material-icons icon-label">lock_open</span>

                <div class="form-line">
                    <input type="password" class="form-control" name="password" placeholder="<?php echo e(__('index.password')); ?>">
                </div>
                <span class="material-icons-outlined icon-label-right">visibility_off</span>
            </div>
            <a href="<?php echo e(url('/password/reset')); ?>" class="col-primary font-medium float-right"><?php echo e(__('index.forget')); ?></a>
            <div class="clear"></div>
            <button href="login.html" type="submit" class="theme-button large xl btn-primary"><?php echo e(__('index.log_in')); ?></button>
        </form>
    </div>
    <div class="otp-login mb-2">
        <a href="login_otp.html" class="col-primary font-medium mb-2"><?php echo e(__('index.connect_with')); ?></a>
    </div>

    <div class="social-button">
        <a href="<?php echo e(route('social.login', 'facebook')); ?>"><i class="fa fa-facebook"></i></a>
        <a href="<?php echo e(route('social.login', 'google')); ?>"><i class="fa fa-google "></i></a>
        
    </div>
    <span class="text-muted"><?php echo e(__('index.reg_slogan')); ?> <a href="<?php echo e(url('register')); ?>" class="col-text font-weight-bold"><?php echo e(__('index.sign_up')); ?></a> </span>
</div>

<!-- .Content  -->

<script>



    $(document).ready(function() {

    $("#show_hide_password a").on('click', function(event) {

        event.preventDefault();

        if($('#show_hide_password input').attr("type") == "text"){

            $('#show_hide_password input').attr('type', 'password');

            $('#show_hide_password i').addClass( "fa-eye-slash" );

            $('#show_hide_password i').removeClass( "fa-eye" );

        }else if($('#show_hide_password input').attr("type") == "password"){

            $('#show_hide_password input').attr('type', 'text');

            $('#show_hide_password i').removeClass( "fa-eye-slash" );

            $('#show_hide_password i').addClass( "fa-eye" );

        }

    });

});

</script>

<br>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts_mobile.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/blades_mobile/login.blade.php ENDPATH**/ ?>