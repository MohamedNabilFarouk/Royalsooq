<?php
use Jenssegers\Agent\Agent;
$agent = new Agent();
?>

<?php if( $agent->isMobile()): ?>


<!DOCTYPE HTML>

<html>



<head>

 <?php echo $__env->make('layouts_mobile.inc-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->yieldContent('social'); ?>
</head>

<body class="default">
    <!-- Preloading -->
    <div class="preloading">
        <div class="wrap-preload">
            <div class="cssload-loader"></div>
        </div>
    </div>
    <!-- .Preloading -->
    <div class="welcome-wrapper d-flex align-items-center justify-content-center text-center">

<!-- Content  -->
<div class="container login">

    <div class="login-text">
        <h3> ! <?php echo e(__('index.welcome')); ?> </h3>
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
            <?php echo csrf_field(); ?>
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
        <a href="<?php echo e(route('social.login', 'facebook')); ?>" class="btn btn-circle facebook"><i class="fa fa-facebook"></i></a>
        <a href="<?php echo e(route('social.login', 'google')); ?>" class="btn btn-circle google"><i class="fa fa-google "></i></a>
        
    </div>
    <span class="text-muted"><?php echo e(__('index.reg_slogan')); ?> <a href="<?php echo e(url('register')); ?>" class="col-text font-weight-bold"><?php echo e(__('index.sign_up')); ?></a> </span>
</div>

<!-- .Content  -->


</div>

<div class="overlay"></div>



    <?php echo $__env->make('layouts_mobile.inc-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <!-- Facebook Pixel Code -->

<script>

!function(f,b,e,v,n,t,s)

{if(f.fbq)return;n=f.fbq=function(){n.callMethod?

n.callMethod.apply(n,arguments):n.queue.push(arguments)};

if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

n.queue=[];t=b.createElement(e);t.async=!0;

t.src=v;s=b.getElementsByTagName(e)[0];

s.parentNode.insertBefore(t,s)}(window, document,'script',

'https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '317508739302171');

fbq('track', 'PageView');

</script>

<noscript><img height="1" width="1" style="display:none"

src="https://www.facebook.com/tr?id=317508739302171&ev=PageView&noscript=1"

/></noscript>

<!-- End Facebook Pixel Code -->
<script>
setTimeout(function() {
    $('#successMessage').fadeOut('fast');
}, 3000); // <-- time in milliseconds
</script>



</body>





</html>

<?php
exit();
?>

<?php else: ?>








<style>

        #login {

    padding-top: 50px

}

#login .form-wrap {

    width: 30%;

    margin: 0 auto;

}

#login h1 {

    color: #1fa67b;

    font-size: 18px;

    text-align: center;

    font-weight: bold;

    padding-bottom: 20px;

}

#login .form-group {

    margin-bottom: 25px;

}

#login .checkbox {

    margin-bottom: 20px;

    position: relative;

    -webkit-user-select: none;

    -moz-user-select: none;

    -ms-user-select: none;

    -o-user-select: none;

    user-select: none;

}

#login .checkbox.show:before {

    content: '\e013';

    color: #1fa67b;

    font-size: 17px;

    margin: 1px 0 0 3px;

    position: absolute;

    pointer-events: none;

    font-family: 'Glyphicons Halflings';

}

#login .checkbox .character-checkbox {

    width: 25px;

    height: 25px;

    cursor: pointer;

    border-radius: 3px;

    border: 1px solid #ccc;

    vertical-align: middle;

    display: inline-block;

}

#login .checkbox .label {

    color: #6d6d6d;

    font-size: 13px;

    font-weight: normal;

}

#login .btn.btn-custom {

    font-size: 14px;

	margin-bottom: 20px;

}

#login .forget {

    font-size: 13px;

	text-align: center;

	display: block;

}



/*    --------------------------------------------------

	:: Inputs & Buttons

	-------------------------------------------------- */

.form-control {

    color: #212121;

}

.btn-custom {

    color: #fff;

	background-color: #1fa67b;

}

.btn-custom:hover,

.btn-custom:focus {

    color: #fff;

}

.login span {

    float: left;

    display: none;

}

input[type="email"], input[type="password"] {

    width: 100%;

    padding: 10px;

    margin-bottom: 9px;

   border-radius: 3px;

    border: none;

       background-color: #ffffff !important;

    border: 1px solid #d9d9d9 !important;

}





input[type="text"] {

    background-color: #ffffff !important;

    border: 1px solid #d9d9d9 !important;

    width: 100%;

    padding: 10px;

}



</style>

<?php $__env->startSection('content'); ?>

<ul class="breadcrumb">

                    <li><a href="/"><?php echo e(__('index.home')); ?></a>

                    </li>

                    <li><a href="#"><?php echo e(__('index.log_in')); ?></a>

                    </li>

                </ul>

<div class="container">

      <div class="login">

         <div class="container">

              <h1><?php echo e(__('index.log_in')); ?></h1>

              <?php if($errors->any()): ?>

                <div class="alert alert-danger">

                    <ul>

                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <li><?php echo e($error); ?></li>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>

                </div>

            <?php endif; ?>

              <form role="form" action="<?php echo e(route('login')); ?>" method="post" id="login-form" autocomplete="off">

                <?php echo csrf_field(); ?>

              <input type="email" name="email" placeholder="<?php echo e(__('index.email')); ?>">

              <br>

                 <div class="input-group" id="show_hide_password" style="

    background: #2a8fbd00;

    position: inherit;

">

    <input type="password" name="password" placeholder="<?php echo e(__('index.password')); ?>"style="

    margin-bottom: 0px;

">

      <div class="input-group-addon">

        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>

      </div>

    </div>

    <a class="btn btn-link px-0" href="<?php echo e(url('/password/reset')); ?>">
                                        <?php echo e(__('index.forget')); ?>

                                    </a>

              <!-- <input type="checkbox"><span>Remember me</span> -->

              <!-- <a href="#">Forgot password?</a> -->

              <button><?php echo e(__('index.log_in')); ?></button>

</form>



              <ul>

                 <li> <p><?php echo e(__('index.connect_with')); ?></p></li>

                  <li><a href="<?php echo e(route('social.login', 'facebook')); ?>"><i class="fa fa-facebook"></i></a></li>

                  <li><a href="<?php echo e(route('social.login', 'google')); ?>"><i class="fa fa-google "></i></a></li>



              </ul>

              <div class="clearfix"></div>



         </div>

      </div>

      <div class="register">

          <div class="container">

              <i class="fa fa-user-plus"style="

    font-size: xxx-large;

"></i>



              <h2 style="

    color: white;

"><?php echo e(__('index.hello')); ?></h2>

              <p><?php echo e(__('index.reg_slogan')); ?></p>

              <a href="<?php echo e(url('register')); ?>"><button><?php echo e(__('index.sign_up')); ?> <i class="fa fa-arrow-circle-right"></i></button></a>

          </div>

      </div>

    </div>



    <style>



       /*Start Global Style*/



body{

    background-image{}



}

.container{

    width: 80%;



}



.login ,.register{width: 50%}



/*Start Login Style*/

.login{

    float:left;

    background-color: #fafafa;

    height: 100%;

    border-radius: 10px 0 0 10px;

    text-align: center;

    padding-top: 100px;

}

.login h1{

    margin-bottom: 40px;

    font-size: 2.5em;

}



input[type="email"] , input[type="password"]{

    width: 100%;

    padding: 10px;

    margin-bottom: 30px;

    border: none;

    background-color: #eeeeef;

}

input[type="checkbox"]{

    float: left;

    margin-right: 5px;

}

.login span{

    float: left

}

.login a{

    float: right;

    text-decoration: none;

    color: #000;

    transition: 0.3s all ease-in-out;

}

.login a:hover{color: #9526a9;font-weight: bold}

.login button{

    width: 100%;

    margin: 30px 0;

    padding: 10px;

    border: none;

   background-image: linear-gradient(135deg, #2a8fbd 5%, #005277 95%);

    color: #fff;

    font-size: 20px;

    cursor: pointer;

    transition: 0.3s all ease-in-out;

}

.login button:hover{

    width:97%;

    font-size: 22px;

    border-radius: 5px;



}

.login hr{

    width: 30%;

    display: inline-block

}



.login p{

    display: inline-block;

    margin: 0px 10px 30px;

}

.login ul{

    list-style: none;

    margin-bottom:40px;

}

.login ul li{

    display: inline-block;

    margin-right: 30px;

    cursor: pointer;

}

.login ul li:hover{opacity: 0.6}

.login ul li:last-child{margin-right: 0}

.login .copyright{

    display: inline-block;

    float: none;

}

/*Start Register Style*/

.register{

    float: right;

background-image: linear-gradient(135deg, #2a8fbd 5%, #005277 95%);

    height: 100%;

    color:#fff;

    border-radius:  0 10px 10px  0;

    text-align: center;

    padding: 100px 0;

}

.register h2{

    margin: 30px 0;

    font-size: 50px;

    letter-spacing: 3px

}

.register p{

    font-size: 18px;

    margin-bottom: 30px;

}

.register button{

    background-color: transparent;

    border: 1px solid #FFF;

    border-radius: 20px;

    padding: 10px 20px;

    color: #fff;

    font-size: 20px;

    text-transform: uppercase;

    transition:0.2s all  ease-in-out;

}

.register button:hover{

    color: #9526a9;

    background-color: #fff;

    cursor: pointer;

}

@media  screen and (max-width: 600px) {

.login, .register {

    width: 100%;

}

    .register {

    display: none;}

}

    </style>



<!--<section id="login">-->

<!--    <div class="container">-->

<!--    	<div class="row">-->

<!--    	    <div class="col-xs-12">-->

<!--        	    <div class="form-wrap">-->

<!--                <h1><?php echo e(__('index.log_in')); ?></h1>-->

<!--                    <form role="form" action="<?php echo e(route('login')); ?>" method="post" id="login-form" autocomplete="off">-->

<!--                       <?php echo csrf_field(); ?>-->

<!--                        <div class="form-group">-->

<!--                            <label for="email" class="sr-only"><?php echo e(__('index.email')); ?></label>-->

<!--                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">-->

<!--                        </div>-->

<!--                        <div class="form-group">-->

<!--                            <label for="key" class="sr-only"><?php echo e(__('index.password')); ?></label>-->

<!--                            <input type="password" name="password" id="key" class="form-control" placeholder="<?php echo e(__('index.password')); ?>">-->

<!--                        </div>-->

<!--                        <div class="checkbox">-->

<!--                            <span class="character-checkbox" onclick="showPassword()"></span>-->

<!--                            <span class="label"><?php echo e(__('index.show_pass')); ?></span>-->

<!--                        </div>-->

<!--                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="<?php echo e(__('index.log_in')); ?>">-->

<!--                    </form>-->

                    <!-- <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a> -->

<!--                    <hr>-->

<!--        	    </div>-->

<!--    		</div> </.col-xs-12 -->

<!--    	</div> </.row -->

<!--    </div>  /.container -->

<!--</section>-->



<!--<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">-->

<!--	<div class="modal-dialog modal-sm">-->

<!--		<div class="modal-content">-->

<!--			<div class="modal-header">-->

<!--				<button type="button" class="close" data-dismiss="modal">-->

<!--					<span aria-hidden="true">×</span>-->

<!--					<span class="sr-only">Close</span>-->

<!--				</button>-->

<!--				<h4 class="modal-title">Recovery password</h4>-->

<!--			</div>-->

<!--			<div class="modal-body">-->

<!--				<p>Type your email account</p>-->

<!--				<input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">-->

<!--			</div>-->

<!--			<div class="modal-footer">-->

<!--				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>-->

<!--				<button type="button" class="btn btn-custom">Recovery</button>-->

<!--			</div>-->

<!--		</div> </.modal-content

</div> < /.modal-dialog -->

<!--</div> </.modal -->





<!--<script>-->

<!--function showPassword() {-->



<!--    var key_attr = $('#key').attr('type');-->



<!--    if(key_attr != 'text') {-->



<!--        $('.checkbox').addClass('show');-->

<!--        $('#key').attr('type', 'text');-->



<!--    } else {-->



<!--        $('.checkbox').removeClass('show');-->

<!--        $('#key').attr('type', 'password');-->



<!--    }-->



<!--}-->



<!--</script>-->

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

<?php endif; ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/auth/login.blade.php ENDPATH**/ ?>