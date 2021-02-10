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


</style>
@section('content')

<section id="login">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1>{{__('index.sign_up')}}</h1>

                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
                    <form role="form" action="{{ route('register') }}" method="post" id="login-form" autocomplete="off" onsubmit="return termsFunction()">
                       @csrf
                       <div class="form-group">
                            <label for="Name" class="sr-only">{{__('index.name')}}</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="{{__('index.name')}}" required>
                        </div>

                        <div class="form-group">
                            <label for="email" class="sr-only">{{__('index.email')}}</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com" required>
                        </div>

                        <div class="form-group">
                            <label for="Name" class="sr-only">{{__('index.phone')}}</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="{{__('index.phone')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">{{__('index.password')}}</label>
                            <label class="text-center" style="color:red" id="pass_err"></label>
                            <input type="password" name="password" id="pass" class="form-control" placeholder="{{__('index.password')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">{{__('index.pass_confirmation')}}</label>
                            <label class="text-center" style="color:red" id="passConf_err"></label>
                            <input type="password" placeholder="{{__('index.pass_confirmition')}}" name="password_confirmation" id="conf_pass" class="form-control" required>
                        </div>

                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">{{__('index.show_pass')}}</span>
                        </div>

                        <div class="form-group" >
                            <input type="checkbox" name='agree' id="terms" >
                            <label>{{__('index.agree')}}</label><br>
                            <label class="text-center" style="color:red" id="err"></label>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="{{__('index.sign_up')}}">
                    </form>
                  
           <a class="btn btn-success" href="{{route('seller.register')}}">{{__('index.register_seller')}}</a>
                  
            <a  href="{{url('login')}}" >{{__('index.already_member')}}</a>
              

                
          
                    <!-- <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a> -->
                    <hr>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Recovery password</h4>
			</div>
			<div class="modal-body">
				<p>Type your email account</p>
				<input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-custom">Recovery</button>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->
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


</script>
@endsection 