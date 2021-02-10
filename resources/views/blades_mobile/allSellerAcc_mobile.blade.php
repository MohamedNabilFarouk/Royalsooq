@extends('layouts_mobile.app')
@section('header')

<!-- Header  -->
<nav class="navbar navbar-expand-lg bg-header">
    <div class="container-fluid justify-content-start">
        <a href="{{ url('/account') }}" class="btn">
            <i class="material-icons">arrow_back</i>
        </a>
        <div class="navbar-heading m-l-10">
            <h4>{{__('index.shops')}}</h4>
        </div>
    </div>
</nav>
<!-- .Header  -->

@stop
@section('content')

<!-- Content  -->
<div id="content" style="margin-top:80px;">
    <!-- Content Wrap  -->
    <div class="content-wrap">
        @foreach($users as $u)
        @if(count($u->products) > 0)
        <div class="ad-section">
            <div class="ad-section-item">
                <div class="ad-box list">

                    <div class="ad-image">
                        
                        @if(empty($u->image))
                        <img src="{{asset('img/user_avatar.jpg') }}" alt="{{__('index.no_image')}}" >
                        @else
                        <img src="{{asset('/storage/'. $u->image)}}" alt="{{$u->name}}" alt="{{__('index.no_image')}}" >
                        @endif
                    </div>
                    <div class="ad-content">
                        <a href="{{route('shops2', $u->slug)}}" class="ad-title">{{$u->name}}</a>


                        <div class="d-flex flex-wrap align-items-center m-t-5">
                            <div class="ad-time pt-0">
                                <i class="material-icons pr-1"></i></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
      @endforeach
      <?php  // echo $userFreeAds->render(); ?>

</div>
<!-- .Content  -->
@stop

