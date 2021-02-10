@extends('layouts_mobile.app')
@section('header')

    <!-- Header  -->
<nav class="navbar navbar-expand-lg bg-header">
    <div class="container-fluid justify-content-start">
        <a href="{{ url('/account') }}" class="btn">
            <i class="material-icons">arrow_back</i>
        </a>
        <div class="navbar-heading m-l-10">
            <h4>{{__("index.shop_info")}}</h4>
        </div>
    </div>
</nav>
<!-- .Header  -->
@endsection

@section('content')

<div id="content" class="noFooter">
    <!-- Content Wrap  -->
    <div class="content-wrap">
        <div class="heading-section mt-0">
            <div class="title col-secondary font-weight-normal">Ad Details</div>
        </div>








        <div class="ad-section" style='margin-top: 31px;'>
            <div class="ad-section-item">


<form role="form" action="{{route('shops.data.add')}}" method="post" id="login-form" autocomplete="off" enctype="multipart/form-data">
    @csrf

<div class="form-group">
    <div class="form-line">
        <label class="font-medium">{{__('index.shop_about')}}<span class="text-danger">*</span></label>
        <textarea name="about"  class="form-control" placeholder="{{__('index.shop_about')}}"></textarea>
    </div>
</div>




 <!-- images -->




 <label class="font-medium">{{__('index.photos')}}<span class="text-danger">*</span></label>
 <small> {{__('index.more_image')}}</small>


 <div class="row row-wrap" style="display: flex;justify-content: center;">





       <div style="width: 50%;display: flex;justify-content: center;align-items: center;flex-wrap: wrap;">



           <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">



               <label for="file-input">



               <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>


               </label>



                       <input type="file" name="image[]" id="file-input"  style="display: none;" multiple>

                       <!-- <input type='file' id="imgInp" /> -->

           </div>

       </div>

       <div id="dvPreview" style="width:200px;"></div>




</div>





<!-- end images -->
</div>
        </div>
    </div>
    <div>


@stop
