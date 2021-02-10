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

   

    border: none;

       background-color: #ffffff !important;

    border: 1px solid #d9d9d9 !important;

}





}



</style>

<?php $__env->startSection('content'); ?>



<ul class="breadcrumb">

                    <li><a href="/"><?php echo e(__('index.home')); ?></a>

                    </li>

                    <li><a href="#"><?php echo e(__('index.sign_up')); ?></a>

                    </li>

                </ul>





                <?php echo NoCaptcha::renderJs(); ?>


                <div class="container">

      <div class="login" style="margin-bottom:160px;">

         <div class="container">

              <h1><?php echo e(__('index.sign_up')); ?></h1>

              <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>  
                <?php endif; ?>


            <form role="form" action="<?php echo e(route('register')); ?>" method="post" id="login-form" autocomplete="off" onsubmit="return termsFunction()">

                <?php echo csrf_field(); ?>

                <input type="text" name="name" id="name" class="form-control" placeholder="<?php echo e(__('index.name')); ?>" required>

                <br>

                <input type="email" name="email" id="email" class="form-control" placeholder="<?php echo e(__('index.email')); ?>" required>

                

                <input type="text" name="phone" id="phone" class="form-control" placeholder="<?php echo e(__('index.phone')); ?>" required>

                

                

                 

                

                

                <label class="text-center" style="color:red; font-size:10px" id="pass_err"></label>

                

                 <div class="input-group" id="show_hide_password" style="

    background: #2a8fbd00;

    position: inherit;

">

     <input type="password" name="password" id="pass" class="form-control" placeholder="<?php echo e(__('index.password')); ?>" required>

      <div class="input-group-addon">

        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>

      </div>

    </div>

    

              

                <label class="text-center" style="color:red; font-size:10px" id="passConf_err"></label>

                  <input type="password" placeholder="<?php echo e(__('index.pass_confirmition')); ?>" name="password_confirmation" id="conf_pass" class="form-control" required>

                  <div class="checkbox">

                            <span class="character-checkbox" onclick="showPassword()"></span>

                            <span class="label"><?php echo e(__('index.show_pass')); ?></span>

                        </div>

                        <input type="checkbox" name='agree' id="terms" >

                            <label><a href="<?php echo e(route('terms')); ?>"><?php echo e(__('index.agree')); ?></a></label><br>

                            <label class="text-center"style="color:red; font-size:10px" id="err"></label>


   <!-- capetcha -->

   <?php echo NoCaptcha::display(); ?>


<!-- end captcha -->
              

              <!-- <input type="checkbox"><span>Remember me</span> -->

              <!-- <a href="#">Forgot password?</a> -->

              <button><?php echo e(__('index.sign_up')); ?></button>

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

              <p><?php echo e(__('index.login_slogan')); ?></p>

              <a href="<?php echo e(url('login')); ?>"><button><?php echo e(__('index.log_in')); ?> <i class="fa fa-arrow-circle-right"></i></button></a><br><br>

              <a  href="<?php echo e(route('seller.register')); ?>"><button><?php echo e(__('index.register_seller')); ?> <i class="fa fa-arrow-circle-right"></i></button></a>

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

.register button:hover {

    color: #333333;

    background-color: #fff;

    cursor: pointer;

}

    </style>





<!-- olllldddddd -->









<script>

function showPassword() {

    

    var key_attr = $('#key').attr('type');

    

    if(key_attr != 'text') {

        

        $('.checkbox').addClass('show');

        $('#key').attr('type', 'text');

        

    } else {

        

        $('.checkbox').removeClass('show');

        $('#key').attr('type', 'password');

        

    }

    

}



function termsFunction(){

   var pass = document.getElementById('pass').value;

   var conf_pass = document.getElementById('conf_pass').value;



    // console.log( terms);

    if( ! document.getElementById('terms').checked){

        document.getElementById('err').innerHTML= '*you must Agree to terms of use';

        event.preventDefault();

    return false;

    }



    if(pass.length < 8){

            document.getElementById('pass_err').innerHTML = '*your password must be more than 7 characters';

            event.preventDefault();

    return false;

    }



    if(pass != conf_pass){

        document.getElementById('passConf_err').innerHTML = '*your password Confirmition not match with your password';

            event.preventDefault();

    return false;

    }

}

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

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/auth/register.blade.php ENDPATH**/ ?>