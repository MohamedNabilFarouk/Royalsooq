<?php
$page_title=Auth::user()->name;
?>
@extends('layouts.app')





@section('content')

<!-- //////////////////////////////////

	//////////////PAGE CONTENT///////////// 

	////////////////////////////////////-->



<ul class="breadcrumb">

                    <li><a href="index-2.html"><i aria-hidden="true" class="fa fa-home"></i>{{__('index.home')}}</a>

                    </li>

                    <li><a href="#">{{__('index.account')}}</a>

                    </li>

                    <li class="active">{{__('index.profile')}}</li>

                </ul>



  <div class="container">

            <div class="row">

                <div class="col-md-3" >





                <div id="app">



<avored-layout inline-template>



    <div>



        <a-layout id="components-layout-demo-top" class="layout">



            <!-- @include('partials.nav') -->







            <a-layout-content style="padding: 0 10px">



                @include('partials.breadcrumb')



                <a-layout style="padding: 24px 0">



                   @auth



                    <a-layout-sider width="100%">



                    @include('partials.account-nav')



                    </a-layout-sider>



                    @endauth



                    <a-layout-content :style="{ padding: '0 24px', minHeight: '280px' }">



                    @yield('content')



                    </a-layout-content>



                </a-layout>



                </a-layout-content>



            



            <!-- @include('partials.footer') -->



        </a-layout>



    </div>



</avored-layout>



</div>





                </div>

                <div class='col-md-9' style="  background-color: #f5f5f5;

    padding: 1%;

    margin-top: 0px;

    border: #e2e2e2 1px solid;">

                    <div class="inner-box default-inner-box">

						<div class="row">

							<div class="col-md-5 col-xs-4 col-xxs-12">

								<h3 class="no-padding text-center-480 useradmin">

                

                <a href="">

                @if(empty(Auth::user()->image))

                <img id="userImg" class="userImg" src="{{asset('img/user_avatar.jpg') }}" alt="user">&nbsp;

        @else

            

        <img id="userImg" class="userImg" src="{{asset('/storage/' . Auth::user()->image) }}" alt="user">&nbsp;



        @endif

        																			{{Auth::user()->name}}

                

									</a>

								</h3>

							</div>

							<div class="col-md-7 col-xs-8 col-xxs-12">

								<div class="header-data text-center-xs">

									<!-- Conversations Stats -->

									<div class="hdata">

										<div class="mcol-left">

											<i class="fa fa-envelope ln-shadow"></i></div>

										<div class="mcol-right">

											<!-- Number of messages -->

											<p>

												<a href="">

                        {{count(Auth::user()->chat)}}

													<em>{{__('index.mails')}}</em>

												</a>

											</p>

										</div>

										<div class="clearfix"></div>

									</div>

									

									<!-- Traffic Stats -->

									<div class="hdata">

										<div class="mcol-left">

											<i class="fa fa-eye ln-shadow"></i>

										</div>

										<div class="mcol-right">

											<p>

												<a href="">

																									{{$item}}

													<em>{{__('index.visit')}}</em>

												</a>

											</p>

										</div>

										<div class="clearfix"></div>

									</div>



                 

							



									<!-- Ads Stats -->

									<div class="hdata">

										<div class="mcol-left">

											<i class="fa fa-clipboard ln-shadow" aria-hidden="true"></i>

										</div>

										<div class="mcol-right">

											<!-- Number of ads -->

											<p>

												<a href="{{route('user.freeAds') }}">

												{{count($userAds)}}

													<em> {{__('index.ads')}}</em>

												</a>

											</p>

										</div>

										<div class="clearfix"></div>

									</div>



									<!-- Favorites Stats -->

									<div class="hdata">

										<div class="mcol-left">

											<i class="fa fa-user ln-shadow"></i>

										</div>

										<div class="mcol-right">

											<!-- Number of favorites -->

											<p>

												<a href="{{ route('favorites') }}">

													{{count($userFavorites)}}

													<em> {{__('index.fav')}} </em>

												</a>

											</p>

										</div>

										<div class="clearfix"></div>

									</div>

								</div>

							</div>

						</div>

					</div>

                </div>

                

                 <div class="col-md-9" style="

    background-color: white;

    padding: 0%;

    margin-top:30px;

    border: #e2e2e2 1px solid;

    /* text-align:  center; */

">

                       <div class="card-header">

                           <div style="

    text-align: center;

">

                               <h4 class="card-title">

										<a href="#photoPanel" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" class="">{{__('index.hello')}}  {{Auth::user()->name}}</a>

									</h4>

									<span>{{__('index.last_login')}} {{ Carbon\Carbon::parse($user->login_at)->format('d M Y')}} </span>

                           </div>

                           

								</div>

                    <div class="row" style="display: flex;

    align-items: center;

    justify-content: center;">

                      

                      <style>

                        .card-header:first-child {

    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;

}

.card-header {

    font-family: Roboto,Helvetica,Arial,sans-serif;

    font-size: 1rem;

    text-transform: none;

}

.card-header {

    font-family: "Roboto Condensed",Helvetica,Arial,sans-serif;

    font-size: 1rem;

    text-transform: uppercase;

}

.card-header {

    padding: .75rem 1.25rem;

    margin-bottom: 0;

    background-color: rgba(0,0,0,.03);

    border-bottom: 1px solid rgba(0,0,0,.125);

}

                        .uploader {

  display: block;

  clear: both;

  margin: 0 auto;

  width: 100%;

  max-width: 600px;

}

.uploader label {

  float: left;

  clear: both;

  width: 100%;

  padding: 2rem 1.5rem;

  text-align: center;

  background: #fff;

  /*border-radius: 7px;*/

  /*border: 3px solid #eee;*/

  transition: all 0.2s ease;

  user-select: none;

}

.uploader label:hover {

  border-color: #2a8fbd;

}

.uploader label.hover {

  border: 3px solid #454cad;

  box-shadow: inset 0 0 0 6px #eee;

}

.uploader label.hover #start i.fa {

  transform: scale(0.8);

  opacity: 0.3;

}

.uploader #start {

  float: left;

  clear: both;

  width: 100%;

}

.uploader #start.hidden {

  display: none;

}

.uploader #start i.fa {

  font-size: 50px;

  margin-bottom: 1rem;

  transition: all 0.2s ease-in-out;

}

.uploader #response {

  float: left;

  clear: both;

  width: 100%;

}

.uploader #response.hidden {

  display: none;

}

.uploader #response #messages {

  margin-bottom: 0.5rem;

}

.uploader #file-image {

  display: inline;

  margin: 0 auto 0.5rem auto;

  width: auto;

  height: auto;

  max-width: 180px;

}

.uploader #file-image.hidden {

  display: none;

}

.uploader #notimage {

  display: block;

  float: left;

  clear: both;

  width: 100%;

}

.uploader #notimage.hidden {

  display: none;

}

.uploader progress,

.uploader .progress {

  display: inline;

  clear: both;

  margin: 0 auto;

  width: 100%;

  max-width: 180px;

  height: 8px;

  border: 0;

  border-radius: 4px;

  background-color: #eee;

  overflow: hidden;

}

.uploader .progress[value]::-webkit-progress-bar {

  border-radius: 4px;

  background-color: #eee;

}

.uploader .progress[value]::-webkit-progress-value {

  background: linear-gradient(to right, #393f90 0%, #454cad 50%);

  border-radius: 4px;

}

.uploader .progress[value]::-moz-progress-bar {

  background: linear-gradient(to right, #393f90 0%, #454cad 50%);

  border-radius: 4px;

}

.uploader input[type=file] {

  display: none;

}

.uploader div {

  margin: 0 0 0.5rem 0;

  color: #5f6982;

}

.uploader .btn {

  display: inline-block;

  margin: 0.5rem 0.5rem 1rem 0.5rem;

  clear: both;

  font-family: inherit;

  font-weight: 700;

  font-size: 14px;

  text-decoration: none;

  text-transform: initial;

  border: none;

  border-radius: 0.2rem;

  outline: none;

  padding: 0 1rem;

  height: 36px;

  line-height: 36px;

  color: #fff;

  transition: all 0.2s ease-in-out;

  box-sizing: border-box;



  cursor: pointer;

}

a.btn.btn-danger {

    background-image: linear-gradient(to right, #EB3349 0%, #F45C43 51%, #EB3349 100%);

}

div#components-layout-demo-top {

    border: #e2e2e2 1px solid;

}

a.btn.btn-danger:hover {

    background-position: right center;



i.ss {

    font-size: x-large;

    padding: 4px;

    border: 1px solid #d9d9d9;

    background: #2a8fbd;

    color: #fff;

}

.dropdown-menu li a{

color: #000;

    padding:0px 0;

    text-align: left;

    font-weight: 700;}

    }

input[type="email"], input[type="password"] {

  

    margin-bottom: 0px !important;

  

}

                        </style>

                        <script>

                        function ekUpload(){

  function Init() {

color: #000;

    padding: 5px 0;

    text-align: left;

    font-weight: 700;

    console.log("Upload Initialised");



    var fileSelect    = document.getElementById('file-upload'),

        fileDrag      = document.getElementById('file-drag'),

        submitButton  = document.getElementById('submit-button');



    fileSelect.addEventListener('change', fileSelectHandler, false);



    // Is XHR2 available?

    var xhr = new XMLHttpRequest();

    if (xhr.upload) {

      // File Drop

      fileDrag.addEventListener('dragover', fileDragHover, false);

      fileDrag.addEventListener('dragleave', fileDragHover, false);

      fileDrag.addEventListener('drop', fileSelectHandler, false);

    }

  }



  function fileDragHover(e) {

    var fileDrag = document.getElementById('file-drag');



    e.stopPropagation();

    e.preventDefault();



    fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');

  }



  function fileSelectHandler(e) {

    // Fetch FileList object

    var files = e.target.files || e.dataTransfer.files;



    // Cancel event and hover styling

    fileDragHover(e);



    // Process all File objects

    for (var i = 0, f; f = files[i]; i++) {

      parseFile(f);

      uploadFile(f);

    }

  }



  // Output

  function output(msg) {

    // Response

    var m = document.getElementById('messages');

    m.innerHTML = msg;

  }



  function parseFile(file) {



    console.log(file.name);

    output(

      '<strong>' + encodeURI(file.name) + '</strong>'

    );

    

    // var fileType = file.type;

    // console.log(fileType);

    var imageName = file.name;



    var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);

    if (isGood) {

      document.getElementById('start').classList.add("hidden");

      document.getElementById('response').classList.remove("hidden");

      document.getElementById('notimage').classList.add("hidden");

      // Thumbnail Preview

      document.getElementById('file-image').classList.remove("hidden");

      document.getElementById('file-image').src = URL.createObjectURL(file);

    }

    else {

      document.getElementById('file-image').classList.add("hidden");

      document.getElementById('notimage').classList.remove("hidden");

      document.getElementById('start').classList.remove("hidden");

      document.getElementById('response').classList.add("hidden");

      document.getElementById("file-upload-form").reset();

    }

  }



  function setProgressMaxValue(e) {

    var pBar = document.getElementById('file-progress');



    if (e.lengthComputable) {

      pBar.max = e.total;

    }

  }



  function updateFileProgress(e) {

    var pBar = document.getElementById('file-progress');



    if (e.lengthComputable) {

      pBar.value = e.loaded;

    }

  }



  function uploadFile(file) {



    var xhr = new XMLHttpRequest(),

      fileInput = document.getElementById('class-roster-file'),

      pBar = document.getElementById('file-progress'),

      fileSizeLimit = 1024; // In MB

    if (xhr.upload) {

      // Check if file is less than x MB

      if (file.size <= fileSizeLimit * 1024 * 1024) {

        // Progress bar

        pBar.style.display = 'inline';

        xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);

        xhr.upload.addEventListener('progress', updateFileProgress, false);



        // File received / failed

        xhr.onreadystatechange = function(e) {

          if (xhr.readyState == 4) {

            // Everything is good!



            // progress.className = (xhr.status == 200 ? "success" : "failure");

            // document.location.reload(true);

          }

        };



        // Start upload

        xhr.open('POST', document.getElementById('file-upload-form').action, true);

        xhr.setRequestHeader('X-File-Name', file.name);

        xhr.setRequestHeader('X-File-Size', file.size);

        xhr.setRequestHeader('Content-Type', 'multipart/form-data');

        xhr.send(file);

      } else {

        output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');

      }

    }

  }



  // Check for the various File API support.

  if (window.File && window.FileList && window.FileReader) {

    Init();

  } else {

    document.getElementById('file-drag').style.display = 'none';

  }

}

ekUpload();

                        </script>

                       

                        <div class="col-md-6" >

                            

                            <h2 style="

    text-align: center;

">{{__('index.file_upload')}}</h2>



<!-- Upload  -->

<form id="file-upload-form" class="uploader" method='post' action="{{ route('account.upload.image')}}" enctype="multipart/form-data" >

@csrf

  



                        <input id="file-upload" type="file" name="file" accept="image/*" />

   

 



  <label for="file-upload" id="file-drag">

  @if(empty(Auth::user()->image))

  <img id="userImg" class="userImg big" src="{{asset('img/user_avatar.jpg') }}" alt="user">&nbsp;



        @else

  <img id="userImg" class="userImg big" src="{{asset('/storage/' . Auth::user()->image) }}" alt="user"

">

@endif

    <div id="start">

      <div>{{__('index.select_drag')}}</div>

      <div id="notimage" class="hidden">Please select an image</div>

      <span id="file-upload-btn" class="btn btn-primary">{{__('index.select_file')}}</span>

    </div>

    <div id="response" class="hidden">

      <div id="messages"></div>

      <progress class="progress" id="file-progress" value="0">

        <span>0</span>%

      </progress>

    </div>

  </label>

  <input type="hidden" name="image" v-model="image_path" />

                <input type="hidden" name="name" value="{{ $user->name }}" />

                <input type="hidden" name="email" value="{{ $user->email }}" />

                <!-- <input type="submit" name="Upload" value="Upload Image" class="btn btn-primary"> -->

                <button class="btn btn-primary" type="submit"> <i class="fa fa-floppy-o" aria-hidden="true"></i> {{__('index.save')}} </button>

                <a href="{{route('account.image.delete')}}" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i>{{__('index.delete_image')}}</a>





</form>

















                        </div>

                    </div>

                    <div class="gap"></div>

                </div>

                 <div class="col-md-3">

                  

                </div>

               

                <div class="col-md-9" style="

                                             margin-top: 10px;

    background-color: white;

    padding: 0%;

 border: #e2e2e2 1px solid;

    /* text-align:  center; */

">

                        <div class="card-header" style="

    margin-bottom: 10px;

    text-align: center;

">

									<h4 class="card-title">

										<a href="#photoPanel" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" class="">{{__('index.setting')}}</a>

									</h4>

								</div>

                  

                <div class="row" style="

    display: flex;

    align-items: center;

    justify-content: center;";

>

                      

                        <div class="col-md-6" >

                            <form action="{{ route('account.save') }}" method="post" >

                            @csrf

                            <?php //var_dump($errors)?>

                            @if($errors->all())

                            @foreach($errors->all() as $err)

                            <h6 style="color:red">*{{$err}}</h6>

                            @endforeach

                            @endif



                                <div class="form-group"style="display: inline-flex;    width: 80%;">

                                    <label  style=" width: 7%;padding: 6px;background: #fde221;/* font-size: 15px; */"for=""><i class="fa fa-user" aria-hidden="true"></i></label>

                                    <input type="text" name="name" value="{{$user->name}}" class="form-control">

                                </div>

                                

                                <div class="form-group" style="display: inline-flex;    width: 80%;">

                                    <label style="width: 7%;padding: 6px;background: #fde221;    max-height: 34px;/* font-size: 15px; */" for=""><i class="fa fa-envelope" aria-hidden="true" style="

    font-size: 15px;

"></i></label>

                                    <input name="email"  style="width: 100%;" type="email" value="{{$user->email}}" class="form-control" style="display: inline-flex;    width: 80%;">

                                </div>

                                <div class="form-group"style="display: inline-flex;    width: 80%;">

                                                                          <label style="

                                        width: 7%;padding: 6px;background: #fde221;/* font-size: 15px; */

                                      " for=""><i class="fa fa-mobile" aria-hidden="true"style="

    font-size: 21px;

"></i></label>

                                                                          <input name="phone" style="

                                          width: 100%;

                                      " type="text" value="{{$user->phone}}" class="form-control" style="

                                          display: inline-flex;    width: 80%;

                                      ">

                                </div>



                                <div class="col-md-6 col-md-offset-4" style="margin-bottom:30px;">

                                

                                <input type="submit" value="{{__('index.save')}}" class="btn btn-primary">

                            

                                

</div>

                            </form>

                          @if(($user->password) == null ) <!-- create password -->

                          

                            <form class="form-horizontal" method="POST" action="{{ route('account.CreatePassword') }}">

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">

                            <label for="new-password" class="col-md-4 control-label">{{__('index.new_pass')}}</label>



                            <div class="col-md-6">

                                <input id="new-password" type="password" class="form-control" name="new-password" required>



                                @if ($errors->has('new-password'))

                                    <span class="help-block">

                                        <strong>{{ $errors->first('new-password') }}</strong>

                                    </span>

                                @endif

                            </div>

                        </div>



                        <div class="form-group">

                            <label for="new-password-confirm" class="col-md-4 control-label">{{__('index.confirm_new_pass')}}</label>



                            <div class="col-md-6">

                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>

                            </div>

                        </div>



                        <div class="form-group">

                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-primary">

                               <i class="fa fa-eye-slash" aria-hidden="true"></i> {{__('index.change_pass')}}

                                </button>

                            </div>

                        </div>

                    </form>

                    <!-- ********************* -->

                          @else  <!-- change password -->

                            <form class="form-horizontal" method="POST" action="{{ route('account.changePassword') }}">

                        {{ csrf_field() }}

                        <div id="show_hide_password">

                        <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">

                            <label for="new-password" class="col-md-4 control-label">{{__('index.current_pass')}}  </label>

    

                            <div class="col-md-6" >

                           

                              <input  type="password" id="password-field" class="form-control" aria-describedby="basic-addon1" name="current-password" required >

 

                                @if ($errors->has('current-password'))

                                    <span class="help-block">

                                        <strong>{{ $errors->first('current-password') }}</strong>

                                    </span>

                                @endif

                            </div>

                        </div>



                        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">

                            <label for="new-password" class="col-md-4 control-label">{{__('index.new_pass')}}</label>



                            <div class="col-md-6">

                                <input id="new-password" type="password" class="form-control" name="new-password" required>



                                @if ($errors->has('new-password'))

                                    <span class="help-block">

                                        <strong>{{ $errors->first('new-password') }}</strong>

                                    </span>

                                @endif

                            </div>

                        </div>



                        <div class="form-group">

                            <label for="new-password-confirm" class="col-md-4 control-label">{{__('index.confirm_new_pass')}}</label>



                            <div class="col-md-6">

                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>

                            </div>

                        </div>

                        <div class="form-group">

                        <a href="" style="color:gray; "><i class="fa fa-eye-slash" aria-hidden="true"></i> {{__('index.show_pass')}}</a>

</div>



                        <div class="form-group">

                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-primary save">

                                {{__('index.change_pass')}}

                                </button>

                            </div>

                        </div>

                        </div>



                    </form>

@endif <!-- password change or create-->





                        </div>

                    </div>

                    <div class="gap"></div>

                </div>

            </div>



        </div>

<br>



        <!-- //////////////////////////////////

	//////////////END PAGE CONTENT///////// 

	////////////////////////////////////-->







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

@endsection

