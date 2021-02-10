@extends('layouts.app')
<style>
#dvPreview > img {
    width:50% !important;
    /* margin:.5px; */
}

.image-upload > input

{

    display: none;

}



.image-upload img

{

    width: 80px;

    cursor: pointer;

}
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
   
	background-color: #efc718;
}
.btn-custom:hover,
.btn-custom:focus {
    color: #1fa67b;
}


</style>
@section('content')


<ul class="breadcrumb">

                    <li><a href="/"> <i aria-hidden="true" class="fa fa-home"></i>{{__("index.home")}}</a>

                    </li>

                    <li><a href="{{route('account.dashboard')}}">{{__("index.account")}}</a>

                    </li>

                    <li class="active">{{__("index.shop_info")}}</li>

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



                                               

                                              </a-layout>



                                              </a-layout-content>



                                          



                                          <!-- @include('partials.footer') -->



                                            </a-layout>



                                      </div>            

                      

                      </avored-layout>

                </div>

        </div>


        <div class='col-md-9' style=" 

padding: 2%;

margin-top: 0px;

border: #e2e2e2 1px solid;">


                <section id="login">
                
                            <div class="col-xs-12">
                                <div class="form-wrap">
                                <h1>{{__('index.shop_info')}}</h1>
                                    <form role="form" action="{{route('shops.data.add')}}" method="post" id="login-form" autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                    
                                    
                                        <div class="form-group">
                                            <label for="key" class="sr-only">{{__('index.shop_about')}}</label>
                                            <textarea name="about" class="form-control" placeholder="{{__('index.shop_about')}}"></textarea>
                                        </div>

                                    <!-- images -->



                                    <div class="row row-wrap" style="display: flex;justify-content: center;">

                                            

                <div class="col-md-12  col-12 text-center ">

                    <label style="display: block;">{{__('index.photos')}}</label>



                    <small> {{__('index.more_image')}}</small>

                </div>



                <div class="col-md-12 col-12 text-center ">

                    <div style="width: 50%;display: flex;justify-content: center;align-items: center;flex-wrap: wrap;">

                        <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">

                            <label for="file-input">

                            <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>



                            </label>

                                    <input type="file" name="image[]" id="file-input"   style="display: none;" multiple>
                                   
                        </div>
                        <!-- <p><label for="file-input" style="cursor: pointer;">Upload Image</label></p> -->
                        <!-- <p><img id="output" width="200" /></p> -->
                      
                    
                    </div>

                </div>
                














</div>

<div id="dvPreview" style="width:200px;"></div>

<!-- end images -->

                       
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="{{__('index.save')}}">
                    </form>
                    <!-- <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a> -->
                    <hr>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


</div>

</div>

</div>
<br>
<!-- <script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script> -->




<!-- <script language="javascript" type="text/javascript">
window.onload = function () {
    var fileUpload = document.getElementById("file-input");
    fileUpload.onchange = function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreview = document.getElementById("dvPreview");
            dvPreview.innerHTML = "";
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            for (var i = 0; i < fileUpload.files.length; i++) {
                var file = fileUpload.files[i];
                if (regex.test(file.name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = document.createElement("IMG");
                        img.height = "100";
                        img.width = "100";
                        img.src = e.target.result;
                        dvPreview.appendChild(img);
                    }
                    reader.readAsDataURL(file);
                } else {
                    alert(file.name + " is not a valid image file.");
                    dvPreview.innerHTML = "";
                    return false;
                }
            }
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    }
};
</script> -->



@endsection 