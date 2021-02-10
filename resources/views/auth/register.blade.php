<?php
use Jenssegers\Agent\Agent;
$agent = new Agent();
?>

@if( $agent->isMobile())


<!DOCTYPE HTML>

<html>



<head>

 @include('layouts_mobile.inc-head')
 @yield('social')
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
        {!! NoCaptcha::renderJs() !!}
<!-- Content  -->
<div class="container login">

    <div class="login-text">
        <h3> ! {{__('index.welcome')}} </h3>
    </div>
    <img src="https://royalsooq.com/img/logos/Royal Sooq.png" alt="login quickad">

    @if ($errors->any())

    <div class="alert alert-danger">

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

    <div class="login-form mt-3">
        <form role="form" action="{{route('register')}}" method="post" id="login-form" autocomplete="off" onsubmit="return termsFunction()">
            @csrf
            <div class="form-group">
                <span class="material-icons-outlined icon-label">name</span>

                <div class="form-line">
                    <input type="text" id='name' class="form-control" name="name" placeholder="{{__('index.name')}}">
                </div>
            </div>

            <div class="form-group">
                <span class="material-icons-outlined icon-label">email</span>

                <div class="form-line">
                    <input type="email" class="form-control" id='email' name="email" placeholder="{{__('index.email')}}">
                </div>
            </div>

            <div class="form-group">
                <span class="material-icons-outlined icon-label">call</span>

                <div class="form-line">
                    <input type="number" class="form-control" id='phone' name="phone" placeholder="{{__('index.phone')}}">
                </div>
            </div>


            <label class="text-center" style="color:red; font-size:10px" id="pass_err"></label>


            <div class="form-group mb-3">
                <span class="material-icons icon-label">lock_open</span>

                <div class="form-line">
                    <input type="password" class="form-control" id="pass" name="password" placeholder="{{__('index.password')}}">
                </div>
                <span class="material-icons-outlined icon-label-right">visibility_off</span>
            </div>

            <label class="text-center" style="color:red; font-size:10px" id="passConf_err"></label>
            <div class="form-group mb-3">
                <span class="material-icons icon-label">lock_open</span>

                <div class="form-line">
                    <input type="password" class="form-control" id="conf_pass" name="password_confirmation" placeholder="{{__('index.pass_confirmition')}}">
                </div>
                <span class="material-icons-outlined icon-label-right">visibility_off</span>
            </div>

            <input type="checkbox" name='agree' id="terms" >

                            <label><a href="{{route('terms')}}">{{__('index.agree')}}</a></label><br>

                            <label class="text-center"style="color:red; font-size:10px" id="err"></label>


   <!-- capetcha -->

   {!! NoCaptcha::display() !!}

<!-- end captcha -->



            {{-- <a href="{{ url('/password/reset') }}" class="col-primary font-medium float-right">{{__('index.forget')}}</a> --}}
            <div class="clear"></div>
            <button href="login.html" type="submit" class="theme-button large xl btn-primary">{{__('index.sign_up')}}</button>
        </form>
    </div>
    <div class="otp-login mb-2">
        <a href="login_otp.html" class="col-primary font-medium mb-2">{{__('index.connect_with')}}</a>
    </div>

    <div class="social-button">
        <a href="{{route('social.login', 'facebook')}}" class="btn btn-circle facebook"><i class="fa fa-facebook"></i></a>
        <a href="{{route('social.login', 'google')}}" class="btn btn-circle google"><i class="fa fa-google "></i></a>
        {{-- <button type="submit" class="btn-circle facebook"><img src="img/fb.svg" alt=""></button>
        <button type="submit" class="btn-circle google"><img src="img/google.svg" alt=""></button> --}}
    </div>
    <span class="text-muted">{{__('index.reg_slogan')}} <a href="{{url('login')}}" class="col-text font-weight-bold">{{__('index.log_in')}}</a> </span>
</div>

<!-- .Content  -->


</div>

<div class="overlay"></div>



    @include('layouts_mobile.inc-scripts')



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

<Script>

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
</script>

</body>





</html>

<?php
exit();
?>

@else
{{-- @dd($agent) --}}

{{-- // ************************************************************************************************************************ --}}





@extends('layouts.app')

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

@section('content')



<ul class="breadcrumb">

                    <li><a href="/">{{__('index.home')}}</a>

                    </li>

                    <li><a href="#">{{__('index.sign_up')}}</a>

                    </li>

                </ul>





                {!! NoCaptcha::renderJs() !!}

                <div class="container">

      <div class="login" style="margin-bottom:160px;">

         <div class="container">

              <h1>{{__('index.sign_up')}}</h1>

              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif


            <form role="form" action="{{route('register')}}" method="post" id="login-form" autocomplete="off" onsubmit="return termsFunction()">

                @csrf

                <input type="text" name="name" id="name" class="form-control" placeholder="{{__('index.name')}}" required>

                <br>

                <input type="email" name="email" id="email" class="form-control" placeholder="{{__('index.email')}}" required>



                <input type="text" name="phone" id="phone" class="form-control" placeholder="{{__('index.phone')}}" required>











                <label class="text-center" style="color:red; font-size:10px" id="pass_err"></label>



                 <div class="input-group" id="show_hide_password" style="

    background: #2a8fbd00;

    position: inherit;

">

     <input type="password" name="password" id="pass" class="form-control" placeholder="{{__('index.password')}}" required>

      <div class="input-group-addon">

        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>

      </div>

    </div>





                <label class="text-center" style="color:red; font-size:10px" id="passConf_err"></label>

                  <input type="password" placeholder="{{__('index.pass_confirmition')}}" name="password_confirmation" id="conf_pass" class="form-control" required>

                  <div class="checkbox">

                            <span class="character-checkbox" onclick="showPassword()"></span>

                            <span class="label">{{__('index.show_pass')}}</span>

                        </div>

                        <input type="checkbox" name='agree' id="terms" >

                            <label><a href="{{route('terms')}}">{{__('index.agree')}}</a></label><br>

                            <label class="text-center"style="color:red; font-size:10px" id="err"></label>


   <!-- capetcha -->

   {!! NoCaptcha::display() !!}

<!-- end captcha -->


              <!-- <input type="checkbox"><span>Remember me</span> -->

              <!-- <a href="#">Forgot password?</a> -->

              <button>{{__('index.sign_up')}}</button>

            </form>



              <ul>

                   <li> <p>{{__('index.connect_with')}}</p></li>

              <li><a href="{{route('social.login', 'facebook')}}"><i class="fa fa-facebook"></i></a></li>

                  <li><a href="{{route('social.login', 'google')}}"><i class="fa fa-google "></i></a></li>



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

">{{__('index.hello')}}</h2>

              <p>{{__('index.login_slogan')}}</p>

              <a href="{{url('login')}}"><button>{{__('index.log_in')}} <i class="fa fa-arrow-circle-right"></i></button></a><br><br>

              <a  href="{{route('seller.register')}}"><button>{{__('index.register_seller')}} <i class="fa fa-arrow-circle-right"></i></button></a>

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

@media screen and (max-width: 600px) {

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

@endsection
@endif
