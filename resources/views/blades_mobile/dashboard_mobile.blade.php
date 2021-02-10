
@extends('layouts_mobile.app')
@section('header')

<!-- Header  -->
{{-- <nav class="navbar navbar-expand-lg bg-header dark">
    <div class="container-fluid justify-content-start">
        <a href="{{route('allCategories')}}" class="btn">
            <i class="material-icons">arrow_back</i>
        </a>
        <div class="navbar-heading m-l-10 line-h1">
            <h4>{{Auth::user()->name}}</h4>
        </div>
        <a href="profile.html" class="ml-auto line-h0">
            <i class="material-icons">person_outline</i>
        </a>

    </div>
</nav> --}}
<!-- .Header  -->

<div class="section profile">
    <div class="left">
        <div class="user-image"> <img src="{{asset('/storage/' . Auth::user()->image) }}" alt="profile" width="50"></div>
     </div>
    <div class="right p-l-10 line-h1">
        <div class="user-name">{{Auth::user()->name}}</div>
        <small>Active since : <span>Oct '16</span></small>
    </div>
</div>
@stop

@section('content')
<!-- Content  -->
<div id="content">
    <!-- Content Wrap  -->
    <div class="content-wrap">
        {{-- <div class="section profile">
            <div class="left">
                <div class="user-image"> <img src="{{asset('/storage/' . Auth::user()->image) }}" alt="profile" width="50"></div>
             </div>
            <div class="right p-l-10 line-h1">
                <div class="user-name">{{Auth::user()->name}}</div>
                <small>Active since : <span>Oct '16</span></small>
            </div>
        </div> --}}

        <ul class="list-group">
            <li class="list-group-item col-text">
                <a href="{{ route('user.freeAds') }}" class=" d-flex align-items-center">
                    <i class="material-icons-outlined">library_add</i>
                    <span class="m-l-10">{{__('index.my_ads')}}</span> &nbsp;<span class="badge badge-pill">{{count(Auth::user()->products)}}</span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>
            <li class="list-group-item col-text">
                <a href="{{ route('favorites') }}" class=" d-flex align-items-center">
                    <i class="material-icons">favorite_border</i>
                    <span class="m-l-10">{{__('index.favorite_ads')}}&nbsp;</span> <span class="badge badge-pill">{{count(Auth::user()->wish)}}</span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>
            <li class="list-group-item col-text">
                <a href="{{route('shops.data')}}" class=" d-flex align-items-center">
                    <i class="material-icons-outlined">shop</i>
                    <span class="m-l-10">{{__('index.shop_info')}}</span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>
            <li class="list-group-item col-text">
                <a href="{{route('shops2', auth()->user()->slug)}}" class=" d-flex align-items-center">
                    <i class="material-icons-outlined">shop</i>
                    <span class="m-l-10"> {{__('index.your_shops')}}</span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>
            <li class="list-group-item col-text">
                <a href="{{ route('search.saved') }}" class=" d-flex align-items-center">
                    <i class="material-icons-outlined">search</i>
                    <span class="m-l-10">{{__('index.saved_search')}}</span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>
            {{-- <li class="list-group-item col-text">
                <a href="{{ route('account.address.index') }}" class=" d-flex align-items-center">
                    <i class="material-icons-outlined">arrow_back_ios</i>
                    <span class="m-l-10">{{__('index.addresses')}}</span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li> --}}


            <li class="list-group-item col-text">
                <a href=" {{ route('chat.inbox') }}" class=" d-flex align-items-center">
                    <i class="material-icons-outlined">message</i>
                    <span class="m-l-10"> {{__('index.inbox')}}</span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>
            <li class="list-group-item col-text">
                <a href="{{ route('complaint') }}" class=" d-flex align-items-center">
                    <i class="material-icons-outlined">message</i>
                    <span class="m-l-10">{{__('index.complaint')}}</span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>

            <li class="list-group-item col-text">
                <a href="{{ route('settings') }}" class=" d-flex align-items-center">
                    <i class="material-icons-outlined">settings</i>
                    <span class="m-l-10">{{__('index.setting')}}</span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>
            <li class="list-group-item col-text">
                <a href="{{route('logout')}}" class=" d-flex align-items-center">
                    <i data-feather="log-out"></i>
                    <span class="m-l-10">{{__('index.logout')}}</span>
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- .Content  -->
@stop
