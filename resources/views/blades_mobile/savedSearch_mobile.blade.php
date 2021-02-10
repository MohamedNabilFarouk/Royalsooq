@extends('layouts_mobile.app')
@section('header')

<!-- Header  -->
<nav class="navbar navbar-expand-lg bg-header">
    <div class="container-fluid justify-content-start">
        <a href="{{ url('/account')}}" class="btn">
            <i class="material-icons">arrow_back</i>
        </a>
        <div class="navbar-heading m-l-10">
            <h4>{{__('index.saved_search')}}</h4>
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
        @foreach($search as $s)
        <div class="ad-section">
            <div class="ad-section-item">
                <div class="ad-box list">

                    {{-- <div class="ad-image">

                        <img src="{{$p->main_image_url}}" alt="{{__('index.no_image')}}" title="{{$p->name}}">
                    </div> --}}
                    <div class="ad-content">
                        <a href="#" class="ad-title">{{$s->search}}</a>
                        {{-- <div class="ad-price"><i class="material-icons"></i>{{$p->country->currency ?? ''}}   {{$p->price}}</div> --}}
                        {{-- <div class="ad-location"><i class="material-icons-outlined">location_on</i>@if($p->city){{$p->city->city}} @endif</div> --}}
                        <div class="ad-location col-text"><i class="material-icons">schedule</i>{{$s->created_at->diffForHumans()}}</div>
                        <div class="d-flex flex-wrap align-items-center m-t-5">
                            <div class="ad-time pt-0">
                                <i class="material-icons pr-1"></i></div>
                            <div class="ml-auto">
                                <form action="{{url('/Search')}}" method="get" id='searchForm'>
                                    @csrf
                                    <input type="hidden" name="name" value="{{$s->search}}">
                                    <input type="hidden" name="category" value="null">
                                    <a href="#" onclick="document.getElementById('searchForm').submit()" slot="extra">  <button class="btn btn-icon"><i data-feather="search"></i></button></a>
                                    </form>

                                <form action="{{route('delete.search',$s->id)}}" method="POST" id='delForm'>
                                    {{ method_field('DELETE') }}
                                    @csrf
                                    <a href="#" onclick="document.getElementById('delForm').submit()"><button class="btn btn-icon"><i data-feather="trash-2"></i></button></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      @endforeach
      <?php  // echo $userFreeAds->render(); ?>

</div>
<!-- .Content  -->
@stop

