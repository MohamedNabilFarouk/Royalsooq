@extends('layouts_mobile.app')

<!-- Content  -->
<div class="container login">
    <div class="login-text">
        <h3>{{__('index.log_in')}}</h3>
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
        <form role="form" action="{{ route('login') }}" method="post" id="login-form" autocomplete="off">
            <div class="form-group">
                <span class="material-icons-outlined icon-label">email</span>

                <div class="form-line">
                    <input type="email" class="form-control" name="email" placeholder="{{__('index.email')}}">
                </div>
                <span class="material-icons icon-label-right">check_circle</span>
            </div>
            <div class="form-group mb-3">
                <span class="material-icons icon-label">lock_open</span>

                <div class="form-line">
                    <input type="password" class="form-control" name="password" placeholder="{{__('index.password')}}">
                </div>
                <span class="material-icons-outlined icon-label-right">visibility_off</span>
            </div>
            <a href="{{ url('/password/reset') }}" class="col-primary font-medium float-right">{{__('index.forget')}}</a>
            <div class="clear"></div>
            <button href="login.html" type="submit" class="theme-button large xl btn-primary">{{__('index.log_in')}}</button>
        </form>
    </div>
    <div class="otp-login mb-2">
        <a href="login_otp.html" class="col-primary font-medium mb-2">{{__('index.connect_with')}}</a>
    </div>

    <div class="social-button">
        <a href="{{route('social.login', 'facebook')}}"><i class="fa fa-facebook"></i></a>
        <a href="{{route('social.login', 'google')}}"><i class="fa fa-google "></i></a>
        {{-- <button type="submit" class="btn-circle facebook"><img src="img/fb.svg" alt=""></button>
        <button type="submit" class="btn-circle google"><img src="img/google.svg" alt=""></button> --}}
    </div>
    <span class="text-muted">{{__('index.reg_slogan')}} <a href="{{url('register')}}" class="col-text font-weight-bold">{{__('index.sign_up')}}</a> </span>
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

@endsection
