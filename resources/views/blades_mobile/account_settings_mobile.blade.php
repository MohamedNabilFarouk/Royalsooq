
@extends('layouts_mobile.app')
@section('header')
    <!-- Header  -->
<nav class="navbar navbar-expand-lg bg-header dark">
    <div class="container-fluid justify-content-start">
        <a href="{{url('/account')}}" class="btn">
            <i class="material-icons">clear</i>
        </a>
        <div class="navbar-heading m-l-10">
            <h4>{{__('index.setting')}}</h4>
        </div>
        {{-- <a href="myaccount.html" class="btn ml-auto">Save</a> --}}
    </div>
</nav>
<!-- .Header  -->
@endsection

@section('content')
    <!-- Content  -->
<div id="content" style="margin-bottom:50px; margin-top:90px;>
    <!-- Content Wrap  -->
    <div class="content-wrap">
        {{-- <div class="section profile">
            <div class="left">
                <div class="user-image thumb-50"><img src="img/user/profile4.jpg" alt="profile"></div>
            </div>
            <div class="right p-l-10 line-h1">
                <div class="user-name">{{Auth::user()->name}}</div>
                <small><span>{{__('index.last_login')}} {{ Carbon\Carbon::parse(Auth::user()->login_at)->format('d M Y')}}</span></small>
            </div>
        </div> --}}

        <form id="file-upload-form" class="uploader" method='post' action="{{ route('account.upload.image')}}" enctype="multipart/form-data" >

            @csrf

            @if(empty(Auth::user()->image))

            <img id="userImg" class="userImg big" src="{{asset('img/user_avatar.jpg') }}" alt="No Image" style='width:50%'>&nbsp;



                    @else

            <img id="userImg" class="userImg big" src="{{asset('/storage/' . Auth::user()->image) }}" alt="No Image" style='width:20%'>

            @endif

            <input type="hidden" name="name" value="{{ Auth::user()->name }}" />

            <input type="hidden" name="email" value="{{ Auth::user()->email }}" />

            <input id="file-upload" type="file" name="file" accept="image/*" />

            <input type="submit" name="Upload" value="{{__('index.save')}}" class="btn btn-primary">
            <a href="{{route('account.image.delete')}}" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i>{{__('index.delete_image')}}</a>

        </form>



        <form action="{{ route('account.save') }}" method="post" >
            @csrf
            @if($errors->all())

            @foreach($errors->all() as $err)

            <h6 style="color:red">*{{$err}}</h6>

            @endforeach

            @endif
        <!--Basic Info-->
        <div class="heading-section">
            <div class="title">{{__('index.contact_info')}}</div>
        </div>
        <div class="ad-section">
            <div class="ad-section-item">

                <div class="form-group">
                    <div class="form-line">
                        <label>{{__('index.name')}}</label>
                        <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" placeholder="name" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <label>{{__('index.email')}}</label>
                        <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}"  placeholder="demo@mail.com" >
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-line">
                        <label>{{__('index.phone')}}</label>
                        <input type="text" class="form-control" name="phone" value="{{Auth::user()->phone}}" placeholder="Phone" >
                    </div>
                </div>

                <div class="form-group">

                    <div class="col-md-6 col-md-offset-4">

                        <button type="submit" class="btn btn-primary">

                        {{__('index.save')}}

                        </button>

                    </div>

                </div>
            </div>
        </div>
        <!--Basic Info-->
    </form>
    @if((Auth::user()->password) == null ) <!-- create password -->



    <form class="form-horizontal" method="POST" action="{{ route('account.CreatePassword') }}">

    {{ csrf_field() }}

        <!--Change Password-->
        <div class="heading-section">
            <div class="title">{{__('index.change_pass')}}</div>
        </div>
        <div class="ad-section">
            <div class="ad-section-item">
                <div class="form-group">
                    <div class="form-line">
                        <label>{{__('index.new_pass')}}</label>
                        <input type="password" class="form-control" name="new-password" required='' placeholder="password" >
                        @if ($errors->has('new-password'))

                                    <span class="help-block">

                                        <strong>{{ $errors->first('new-password') }}</strong>

                                    </span>

                                @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <label>{{__('index.confirm_new_pass')}}</label>
                        <input type="password" class="form-control" name="new-password_confirmation" placeholder="password" required="">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-md-6 col-md-offset-4">

                        <button type="submit" class="btn btn-primary">

                       <i class="fa fa-eye-slash" aria-hidden="true"></i> {{__('index.change_pass')}}

                        </button>

                    </div>

                </div>
            </div>
        </div>
        <!--Contact Info-->
    </form>


    @else  <!-- change password -->

    <form class="form-horizontal" method="POST" action="{{ route('account.changePassword') }}">

{{ csrf_field() }}

<div class="heading-section">
    <div class="title">{{__('index.change_pass')}}</div>
</div>
<div class="ad-section">
    <div class="ad-section-item">
        <div class="form-group">
            <div class="form-line">
                <label>{{__('index.current_pass')}}</label>
                <input type="password" class="form-control" name="current-password" required='' placeholder="password" >
                @if ($errors->has('current-password'))

                            <span class="help-block">

                                <strong>{{ $errors->first('current-password') }}</strong>

                            </span>

                        @endif
            </div>
        </div>
        <div class="form-group">
            <div class="form-line">
                <label>{{__('index.new_pass')}}</label>
                <input type="password" class="form-control" name="new-password" required='' placeholder="password" >
                @if ($errors->has('new-password'))

                            <span class="help-block">

                                <strong>{{ $errors->first('new-password') }}</strong>

                            </span>

                        @endif
            </div>
        </div>
        <div class="form-group">
            <div class="form-line">
                <label>{{__('index.confirm_new_pass')}}</label>
                <input type="password" class="form-control" name="new-password_confirmation" placeholder="password" required="">
            </div>
        </div>

        <div class="form-group">

            <div class="col-md-6 col-md-offset-4">

                <button type="submit" class="btn btn-primary save">

                {{__('index.change_pass')}}

                </button>

            </div>

        </div>

    </div>
</div>
</form>
@endif <!-- password change or create-->
<!-- Content  -->

<div class="overlay"></div>
@endsection

