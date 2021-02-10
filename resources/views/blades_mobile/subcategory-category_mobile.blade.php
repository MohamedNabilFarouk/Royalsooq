@extends('layouts_mobile.app')
@section('header')
<!-- Header  -->
<nav class="navbar navbar-expand-lg bg-header">
    <div class="container-fluid justify-content-start">
        <a href="{{route('allCategories')}}" class="btn">
            <i class="material-icons">arrow_back</i>
        </a>
        <div class="navbar-heading m-l-10">
            <h4>{{$sub[0]->category->name}}</h4>
        </div>
    </div>
</nav>
<!-- .Header  -->
@stop
@section('content')
<!-- Content  -->
<div id="content">

    <!-- Content Wrap  -->
    <div class="content-wrap">
        <ul class="list-group">
            @foreach($sub as $s)
            <li class="list-group-item col-text">
                <a href="{{route('sub.products', $s->slug)}}" class=" d-flex align-items-center">
                    {{-- <img src="{{asset('storage/'. $s->image)}}" width="24"> --}}
                    <span class="m-l-10">{{$s->name}}</span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>
        @endforeach
        </ul>
    </div>
</div>
<!-- .Content  -->
@stop
