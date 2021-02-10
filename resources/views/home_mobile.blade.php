@extends('layouts_mobile.app')

@section('header')




<!-- Sidebar left -->
<nav id="sidebarleft" class="sidenav">
    <div class="sidebar-header">
        <div class="profile">
            <div class="left">
                <div class="user-image"> <img src="@auth{{asset('/storage/' . Auth::user()->image) }}@endauth  @guest {{asset('img/user_avatar.jpg') }} @endguest" width="40" alt="profile"></div>
            </div>
            <div class="right p-l-10 line-h1">
                <div class="name">RoyalSooq</div>
                <a href="{{url('account')}}" class="acc">@guest{{__('index.account')}}@endguest @auth {{Auth::user()->name}} @endauth</a>
            </div>
            <button id="dismiss" class="ml-auto btn" type="button">
                <i class="material-icons">keyboard_arrow_right</i>
            </button>
        </div>
    </div>

    <ul class="list-unstyled components">
        <li class="list-group-item col-text">
            <a href="{{route('allCategories')}}"><i class="material-icons">widgets</i>{{__('index.category')}}</a>
        </li>

        <li class="list-group-item col-text">
            <a href="{{ route('user.freeAds') }}" class=" d-flex align-items-center">
                <i class="material-icons-outlined">library_add</i>
                <span class="m-l-10">{{__('index.my_ads')}}</span> &nbsp;
                <i class="material-icons ml-auto">keyboard_arrow_right</i>
            </a>
        </li>
        <li class="list-group-item col-text">
            <a href="{{ route('favorites') }}" class=" d-flex align-items-center">
                <i class="material-icons">favorite_border</i>
                <span class="m-l-10">{{__('index.favorite_ads')}}&nbsp;</span> <span class="badge badge-pill">
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
            <a href="@auth{{route('shops2',  auth()->user()->slug )}}@endauth @guest {{url('login')}}  @endguest" class=" d-flex align-items-center">
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
            <a href="{{route('all.acc')}}" class=" d-flex align-items-center">
                <i class="material-icons-outlined">shop</i>
                <span class="m-l-10">{{__('index.shops')}}</span>
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
            @auth
            <a href="{{route('logout')}}"><i data-feather="log-out"></i>{{__('index.logout')}}</a>
            @endauth
            @guest
            <a href="{{url('login')}}"><i data-feather="log-out"></i>{{__('index.log_in')}}</a>
            @endguest
        </li>
    </ul>


    
</nav>
<!-- .Sidebar left -->
<!-- Header  -->
<nav class="navbar navbar-expand-lg navbar-light bg-header">
    
    <div class="container-fluid">
       
        <button type="button" id="sidebarleftbutton" class="btn">
            <i class="material-icons">menu</i>
        </button>
        {{-- <button type="button" id="sidebarrightbutton" class="btn">
            <div class="notif">
                <i class="material-icons">notifications_none</i>
                <i class="material-icons lens">lens</i>
            </div>
        </button> --}}
        

        @if(App::getLocale() === 'en')

        <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}" class="navBar-item" style="

position: inherit; border-right: 0;"><img src="{{asset('img/logos/Egypt-Flag-1-icon.png')}}" style="width:30px;cursor: pointer;  margin: 0px 20px 0 0;" data-toggle="modal" data-target="#myModal"></a>
@else

<a href="{{ LaravelLocalization::getLocalizedURL('en') }}" class="navBar-item" style="

position: inherit;border-right: 0;"><img src="{{asset('img/logos/uk.png')}}" style="width:30px;cursor: pointer;  margin: 30px 20px 0 80;" data-toggle="modal" data-target="#myModal"></a>

@endif


    </div>

    
</nav>
<!-- .Header  -->

{{-- <div class="location-section">
    <img src="{{asset('https://royalsooq.com/img/logos/Royal Sooq.png')}}" style="
width: 18%;
"/>
      <div class="lo-area ml-auto d-flex">
          <div class="area">
              @auth
              <a href="{{route('free.ads')}}" class="btn centerbutton" style="background: #2962d1;">
                  <i class="material-icons"> <i class="material-icons">add</i>أضافه أعلان</i>
              </a>
              @endauth
              @guest
              <a href="{{url('login')}}" class="btn centerbutton" style="background: #2962d1;">
                  <i class="material-icons"> <i class="material-icons"></i>{{__('index.log_in')}}</i>
              </a>
              @endguest
          </div>


      </div>
      <div class="clear"></div>
  </div> --}}


@stop
@section('content')
<!-- Content  -->
<div id="content">
    <!-- Content Wrap  -->
    <div class="content-wrap">
        <!-- section 1 -->
        <div class="location-section">
            <div class="lo-title">
                <img src="{{asset('https://royalsooq.com/img/logos/Royal Sooq.png')}}" style="
                width: 30%; margin-top: 40px;   display: block;
    margin-left: auto;
    margin-right: auto 
                "/>
            </div>
            <div class="lo-area ml-auto d-flex">
                {{-- <div class="area">
                    <span class="text-sub">You are in</span>
                    <span class="text-main">India</span>
                </div>
                <button class="btn btn-link p-0" id="locationButton"><span class="material-icons d-inline">arrow_drop_down</span></button> --}}

            </div>
           
            <div class="clear"></div>
        </div>
        <!-- section 1 -->
        <!-- section 2 -->
        <div class="search-section">
            <div class="search-form search-content">
                <form action="{{url('/Search')}}" method="get">
                    @csrf
                <div class="search-wrapper ">
                    <input  name='name' class="search" placeholder="{{__('index.search')}}">
                    <input type='hidden' name='category' value='null'>
                    <button class="ssubmit" type="submit" ><i data-feather="search"></i></button>
                </div>
            </form>
            </div>
        </div>
        <!-- section 2 -->
        <!-- section 3 -->
        <div class="home-icon">
            <div class="section-home">
                <div class="container">



                    <div class="row">
                        
                        <div class="col s-icon">
                            <a href="{{route('category.sub', $allcat[9]->id)}}" class="homepage-icon-menu">
                                <img src="{{asset('storage/'. $allcat[9]->image)}}" alt="icon" style='width:100px;'>

                                <div class="s-icon-text">
                                    {{$allcat[9]->name}}
                                </div>
                            </a>
                        </div>
                       
                        <div class="col s-icon">
                            <a href="{{route('category.sub', $allcat[11]->id)}}" class="homepage-icon-menu">
                                <img src="{{asset('storage/'.$allcat[11]->image)}}" alt="icon" style='width:100px;'>

                                <div class="s-icon-text">
                                    {{$allcat[11]->name}}
                                </div>
                            </a>
                        </div>
                        <div class="col s-icon">
                            <a href="{{route('category.sub', $allcat[13]->id)}}" class="homepage-icon-menu">
                                <img src="{{asset('storage/'. $allcat[13]->image)}}" alt="icon" style='width:100px;'>

                                <div class="s-icon-text">
                                   {{$allcat[13]->name}}
                                </div>
                            </a>
                        </div>
                        <div class="col s-icon">
                            <a href="{{route('category.sub', $allcat[12]->id)}}" class="homepage-icon-menu">
                                <img src="{{asset('storage/'.$allcat[12]->image)}}" alt="icon" style='width:100px;'>

                                <div class="s-icon-text">
                                    {{$allcat[12]->name}}
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s-icon">
                            <a href="{{route('category.sub', $allcat[0]->id)}}" class="homepage-icon-menu">
                                <img src="{{asset('storage/'. $allcat[0]->image)}}" alt="icon" style='width:100px;'>

                                <div class="s-icon-text">
                                    {{$allcat[0]->name}}
                                </div>
                            </a>
                        </div>
                        <div class="col s-icon">
                            <a href="{{route('category.sub', $allcat[1]->id)}}" class="homepage-icon-menu">
                                <img src="{{asset('storage/'. $allcat[1]->image)}}" alt="icon" style='width:100px;'>

                                <div class="s-icon-text">
                                    {{$allcat[1]->name}}
                                </div>
                            </a>
                        </div>
                        <div class="col s-icon">
                            <a href="{{route('category.sub', $allcat[14]->id)}}" class="homepage-icon-menu">
                                <img src="{{asset('storage/'. $allcat[14]->image)}}" alt="icon" style='width:100px;'>

                                <div class="s-icon-text">
                                    {{$allcat[14]->name}}
                                </div>
                            </a>
                        </div>
                        <div class="col s-icon">
                            <a href="{{route('category.sub', $allcat[16]->id)}}" class="homepage-icon-menu">
                                <img src="{{asset('storage/'. $allcat[16]->image)}}" alt="icon" style='width:100px;'>

                                <div class="s-icon-text">
                                    {{$allcat[16]->name}}
                                </div>
                            </a>
                        </div>
                        <div class="col s-icon">
                            <a href="{{route('allCategories')}}" class="homepage-icon-menu">
                                <img src="img/icons8-view-more-50.png" alt="icon" style='width:100px;'>
                                <div class="s-icon-text">
                                    {{__('index.all_cat')}}
                                </div>
                            </a>
                        </div>
                    </div>





                    {{-- @foreach($allcat->chunk(4)->slice(0,2) as $key=>$chunk)


                    <div class="row">
                        @foreach($chunk as $c)
                        <div class="col s-icon">
                            <a href="{{route('category.sub', $c->id)}}" class="homepage-icon-menu">
                                <img src="{{asset('storage/'. $c->image)}}" alt="icon">

                                <div class="s-icon-text">
                                    {{$c->name}}
                                </div>
                            </a>
                        </div>

                        @endforeach
                        @if($key == 1)
                            <div class="col s-icon">
                            <a href="{{route('allCategories')}}" class="homepage-icon-menu">
                                <img src="img/icons8-view-more-50.png" alt="icon">
                                <div class="s-icon-text">
                                    {{__('index.all_cat')}}
                                </div>
                            </a>
                        </div>

                           @endif



                    </div>

                    @endforeach --}}

                   

                </div>
            </div>
        </div>
        <!-- .section 3 -->
        <!-- section 4 -->
        <div class="heading-section">
            <div class="sa-title">{{__('index.feature')}}</div>
            <a href="{{route('AllFeaturedAds')}}" class="sa-view">{{__('index.more_ads')}}</a>
            <div class="clear"></div>
        </div>
        <div class="ad-section ad-carousel">

            <div class="default-carousel">
                @foreach($latest  as $index=>$product)
                <!-- item -->
                <a href="Product-details/{{$product->slug}}">
                <div class="item">
                    <div class="ad-box">
                        {{-- <div class="ribbon ribbon-vertical ribbon-primary">
                            <i class="material-icons">star</i>
                        </div> --}}
                        {{-- <div class="ribbon ribbon-vertical-right ribbon-danger">
                            <i class="material-icons">bolt</i>
                        </div> --}}

                            <div class="ad-image">
                                <img src="{{$product->main_image_url}}" alt="{{$product->name}}" title="{{$product->name}}">
                            </div>

                            <div class="ad-content">
                                <div class="ad-title">{{$product->name}}</div>
                                <div class="ad-location"><i class="material-icons-outlined">location_on</i>{{$product->city->city ?? ''}}</div>
                                <div class="ad-price"><i class="material-icons"></i>{{$product->price}} {{$product->country->currency}}</div>
                            </div>
                        </a>
                    </div>
                </div>
                </a>
                <!-- .item -->
               @endforeach
            </div>
        </div>
        <!-- .section 4-->

           <!-- section 4 / -->
           {{-- <div class="heading-section">
            <div class="sa-title">{{__('index.latest')}}</div>
            <a href="{{route('AllLatestAds')}}" class="sa-view">{{__('index.more_ads')}}</a>
            <div class="clear"></div>
        </div>
        <div class="ad-section ad-carousel">

            <div class="default-carousel">
                @foreach($latest2  as $index=>$product)
                <!-- item -->
                <div class="item">
                    <div class="ad-box"> --}}
                        {{-- <div class="ribbon ribbon-vertical ribbon-primary">
                            <i class="material-icons">star</i>
                        </div> --}}
                        {{-- <div class="ribbon ribbon-vertical-right ribbon-danger">
                            <i class="material-icons">bolt</i>
                        </div> --}}
                        {{-- <a href="Product-details/{{$product->slug}}">
                            <div class="ad-image">
                                <img src="{{$product->main_image_url}}" alt="{{$product->name}}" title="{{$product->name}}">
                            </div>

                            <div class="ad-content">
                                <div class="ad-title">{{$product->name}}</div>
                                <div class="ad-location"><i class="material-icons-outlined">location_on</i>{{$product->city->city ?? ''}}</div>
                                <div class="ad-price"><i class="material-icons"></i>{{$product->price}} {{$product->country->currency}}</div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- .item -->
               @endforeach
            </div>
        </div> --}}
        <!-- .section 4-->


        <!-- Section Banner -->
        {{-- <div class="section-banner">
            <img src="img/wave.svg" class="banner-img">
            <div class="banner-content">
                <div>
                    <p class="mb-0">Looking for car in budget?</p>
                    <h5 class="mb-0 font-weight-bold">We have Millions</h5>
                </div>
                <button class="btn ml-auto btn-dark">Explore Now</button>
            </div>
        </div> --}}
        <!-- Section Banner -->

        <!-- section 5 -->
        <div class="heading-section">
            <div class="sa-title">{{__('index.latest')}}</div>
            <a href="{{route('AllLatestAds')}}" class="sa-view">{{__('index.more_ads')}}</a>
            <div class="clear"></div>
        </div>
        @foreach($latest2->slice(0,10)->chunk(2)  as $chunk)
        <div class="ad-section grid-view">
            @foreach($chunk as $product)
            <div class="ad-box">

                {{-- <button type="button" class="btn favourite-icon">
                    <i class="material-icons">favorite_border</i>
                </button> --}}
                <a href="Product-details/{{$product->slug}}">
                    <div class="ad-image">
                        <img src="{{$product->main_image_url}}" alt="{{$product->name}}" title="{{$product->name}}">
                    </div>

                    <div class="ad-content">
                        <div class="ad-title">{{$product->name}}</div>
                        <div class="ad-location"><i class="material-icons-outlined">location_on</i>{{$product->city->city ?? ''}}</div>
                        <div class="ad-price"><i class="material-icons"></i>{{$product->price}} {{$product->country->currency}}</div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
        @endforeach


        <!-- .section 5 -->
    </div>
</div>
<!-- .Content  -->

<!-- Modal -->
<div class="modal fade" id="read-all" tabindex="-1" role="dialog" aria-labelledby="readAllTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="readAllTitle">Mark all as read</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to mark all notification as read?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link p-0" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-link p-0 ml-3">Yes</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<!--Location-->
<div id="locationPage" class="sidenav bottom">
    <div class="sidebar-header">
        <button type="button" id="dismiss" class="btn">
            <i class="material-icons">clear</i>
        </button>
        <div class="navbar-heading m-l-10">
            <h4>Location</h4>
        </div>
        <a href="#" id="locationCountryButton" class="ml-auto d-flex align-items-center">
            <img src="img/flag_icon/india.svg" width="20">
            <i class="material-icons">arrow_drop_down</i>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <!--Search section -->

        <div class="search-section">
            <div class="search-form search-content mt-0">
                <div class="search-wrapper ">
                    <input name="name" placeholder="{{__('index.search')}}"  class="search">

                    <button class="ssubmit" name="submit" type="submit"><i data-feather="search"></i></button>
                </div>
            </div>
        </div>
    </form>
        <!--Search section -->

        <!--Recent Location-->
        <div class="heading-section">
            <div class="title col-secondary font-weight-normal">Recent Location</div>
        </div>
        <div class="ad-section">
            <ul class="list-group">
                @foreach($allCountries as $c)
                <li class="list-group-item">
                    <a href="country?country={{$c->id}}" >{{$c->name}}</a>
                </li>
                @endforeach

            </ul>
        </div>
        <!--Recent Location-->

        <!--Popular Cities-->
        <div class="heading-section">
            <div class="title col-secondary font-weight-normal">Popular Cities</div>
        </div>
        <div class="ad-section">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="#" >Delhi</a>
                </li>
                <li class="list-group-item">
                    <a href="#" >Ahmadabad</a>
                </li>
                <li class="list-group-item">
                    <a href="#" >Jaipur</a>
                </li>
                <li class="list-group-item">
                    <a href="#" >Patna</a>
                </li>
            </ul>
        </div>
        <!--Popular Cities-->

        <!--Choose States-->
        <div class="heading-section">
            <div class="title col-secondary font-weight-normal">Choose States</div>
        </div>
        <div class="ad-section">
            <ul class="list-group">
                <li class="list-group-item col-primary">
                    <a href="#" >All In India</a>
                </li>
                <li class="list-group-item col-text">
                    <a href="#" id="locationCityButton" class=" d-flex align-items-center">
                        <span>Andaman and Nicobar</span>
                        <i class="material-icons ml-auto">keyboard_arrow_right</i>
                    </a>
                </li>
                <li class="list-group-item col-text">
                    <a href="#" id="locationCityButton" class=" d-flex align-items-center">
                        <span>Andhra Pradesh</span>
                        <i class="material-icons ml-auto">keyboard_arrow_right</i>
                    </a>
                </li>
                <li class="list-group-item col-text">
                    <a href="#" id="locationCityButton" class=" d-flex align-items-center">
                        <span>Arunachal Pradesh</span>
                        <i class="material-icons ml-auto">keyboard_arrow_right</i>
                    </a>
                </li>
                <li class="list-group-item col-text">
                    <a href="#" id="locationCityButton" class=" d-flex align-items-center">
                        <span>Assam</span>
                        <i class="material-icons ml-auto">keyboard_arrow_right</i>
                    </a>
                </li>
                <li class="list-group-item col-text">
                    <a href="#" id="locationCityButton" class=" d-flex align-items-center">
                        <span>Bihar</span>
                        <i class="material-icons ml-auto">keyboard_arrow_right</i>
                    </a>
                </li>
            </ul>
        </div>
        <!--Choose States-->
    </div>
</div>
<!--Location-->

<!--Location Country-->
<div id="locationCountry" class="sidenav bottom">
    <div class="sidebar-header">
        <button type="button" id="dismiss" class="btn">
            <i class="material-icons">clear</i>
        </button>
        <div class="navbar-heading m-l-10">
            <h4>Country</h4>
        </div>
    </div>
    <div class="sidebar-wrapper">
        <!--Search section -->
        <div class="search-section">
            <div class="search-form search-content mt-0">
                <div class="search-wrapper ">
                    <input placeholder="Where do you want to go?" class="search">
                    <button class="ssubmit" type="submit" name="search_submit"><i data-feather="search"></i></button>
                </div>
            </div>
        </div>
        <!--Search section -->

        <!--Choose Country-->
        <div class="heading-section">
            <div class="title col-secondary font-weight-normal">Choose Country</div>
        </div>
        <div class="ad-section">
            <ul class="list-group">
                <li class="list-group-item col-text">
                    <a href="#" class=" d-flex align-items-center">
                        <img src="img/flag_icon/belarus.svg" width="20">
                        <span class="m-l-10">Belarus</span>
                    </a>
                </li>
                <li class="list-group-item col-text">
                    <a href="#" class=" d-flex align-items-center">
                        <img src="img/flag_icon/brazil.svg" width="20">
                        <span class="m-l-10">Brazil</span>
                    </a>
                </li>
                <li class="list-group-item col-text">
                    <a href="#" class=" d-flex align-items-center">
                        <img src="img/flag_icon/hungary.svg" width="20">
                        <span class="m-l-10">Hungry</span>
                    </a>
                </li>
                <li class="list-group-item col-text">
                    <a href="#" class=" d-flex align-items-center">
                        <img src="img/flag_icon/iceland.svg" width="20">
                        <span class="m-l-10">Iceland</span>
                    </a>
                </li>
                <li class="list-group-item col-text">
                    <a href="#" class=" d-flex align-items-center">
                        <img src="img/flag_icon/india.svg" width="20">
                        <span class="m-l-10">India</span>
                    </a>
                </li>
            </ul>
        </div>
        <!--Choose Country-->
    </div>
</div>
<!--Location Country-->

<!--Location City-->
<div id="locationCity" class="sidenav right">
    <div class="sidebar-header">
        <button type="button" id="dismiss" class="btn">
            <i class="material-icons">clear</i>
        </button>
        <div class="navbar-heading m-l-10">
            <h4>Andaman and Nicobar</h4>
        </div>
    </div>
    <div class="sidebar-wrapper">
        <!--Search section -->
        <div class="search-section">
            <div class="search-form search-content mt-0">
                <div class="search-wrapper ">
                    <input placeholder="Where do you want to go?" class="search">
                    <button class="ssubmit" type="submit" name="search_submit"><i data-feather="search"></i></button>
                </div>
            </div>
        </div>
        <!--Search section -->

        <!--Choose City-->
        <div class="heading-section">
            <div class="title col-secondary font-weight-normal">Choose City</div>
        </div>
        <div class="ad-section">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="#" >Delhi</a>
                </li>
                <li class="list-group-item">
                    <a href="#" >Ahmadabad</a>
                </li>
                <li class="list-group-item">
                    <a href="#" >Jaipur</a>
                </li>
                <li class="list-group-item">
                    <a href="#" >Patna</a>
                </li>
            </ul>
        </div>
        <!--Choose City-->
    </div>
</div>
<!--Location City-->
@stop
