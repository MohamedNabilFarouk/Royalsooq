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



@section('content')


<ul class="breadcrumb">
                    <li><a href="/">{{__('index.home')}}</a>
                    </li>
                    <li><a href="#">{{ __('index.Reset_Password') }}</a>
                    </li>
                </ul>
<div class="container">
      <div class="login">
            <div class="container">
              <h1>{{ __('index.Reset_Password') }}</h1>
              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>  
                @endif

                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              <form role="form" action="{{ route('password.email') }}" method="post" id="login-form" autocomplete="off">
                @csrf
              <input type="email" name="email" @error('email') is-invalid @enderror value="{{ old('email') }}"  placeholder="{{__('index.email')}}">
              <!-- <input type="email" name="email" placeholder="{{__('index.email')}}"> -->
              <br>
                 
            
    

              <!-- <input type="checkbox"><span>Remember me</span> -->
              <!-- <a href="#">Forgot password?</a> -->
              <button>{{ __('index.send_link') }}</button>
    </form>
             
            
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
              <p>{{__('index.reg_slogan')}}</p>
              <a href="{{url('register')}}"><button>{{__('index.sign_up')}} <i class="fa fa-arrow-circle-right"></i></button></a>
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
     </style>







<!-- **************************************************************** -->















            <!--  -->












    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection
