@extends('layouts_mobile.app')
@section('header')
<nav class="navbar navbar-expand-lg bg-header">
    <div class="container-fluid justify-content-start">
        <a href="{{route('allCategories')}}" class="btn">
            <i class="material-icons">arrow_back</i>
        </a>
        <div class="navbar-heading m-l-10">
            <h4>{{$page_title}}</h4>
        </div>
    </div>
</nav>
@stop


@section('content')

<!-- Content  -->

<div id="content">
    <!-- Content Wrap  -->
    <div class="content-wrap" style='margin-top:50px;'>
        <div class="section section-filter">
            {{-- <button class="btn btn-link"><i class="material-icons-outlined m-r-5">place</i> Location</button> --}}
            {{-- <button class="btn btn-link" data-toggle="modal" data-target="#sortby"><i class="material-icons m-r-5">sort</i> Sort</button> --}}
            <button class="btn btn-link" data-toggle="modal" data-target="#filter"> <i class="material-icons-outlined m-r-5" >filter_alt</i> Filter</button>
        </div>

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
        @foreach($product as $p)
        <div class="ad-section">

            <div class="ad-section-item">
                <div class="ad-box list">

                    <div class="ad-image">
                        <form method="post" action="{{route('add.favorites')}}">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$p->id}}">
                        <button type="submit" class="btn favourite-icon">
                            <i class="material-icons">favorite_border</i>
                        </button>
                    </form>
                    <a href="{{route('product.details', $p->slug)}}">    <img src="{{$p->main_image_url}}" alt="{{__('index.no_image')}}" title="{{$p->name}}"></a>
                    </div>
                    <div class="ad-content">
                        <a href="{{route('product.details', $p->slug)}}" class="ad-title">{{$p->name}}</a>
                        <div class="ad-price"><i class="material-icons"></i>{{$p->country->currency}}   {{$p->price}}</div>
                        <div class="ad-location"><i class="material-icons-outlined">location_on</i>@if($p->city){{$p->city->city}} @endif</div>
                        <div class="ad-location col-text"><i class="material-icons">schedule</i>{{date_format($p->created_at,'d M Y')}}</div>
                    </div>
                </div>
            </div>

        </div>
      @endforeach
      <?php  // echo $product->render(); ?>
{{ $product->appends(Request::except('token'))->links() }}

    </div>
    {{-- {{ $product->appends(Request::except('token'))->links() }} --}}

</div>
<!-- Content  -->
{{ $product->appends(Request::except('token'))->links() }}
<!-- Modal filter -->
<div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="sortByTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sortByTitle"><h5></h5> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('/Filter')}}" method="GET">
                @csrf
            <div class="modal-body pt-0">
                <h5>{{__('index.sort')}}</h5>
                <ul class="checkbox-list"> {{--  sort--}}

                    <li class="checkbox list-group-item">

                       <label>

                       <input type="radio" name="sort_price" value="ASC" class="i-check" > &nbsp;&nbsp;{{__('index.price')}} :{{__('index.sort_price_asc')}}

                       </label>

                    </li>

                    <li class="checkbox list-group-item">

                       <label>

                       <input type="radio" name="sort_price" value="DESC" class="i-check"> &nbsp;&nbsp;{{__('index.price')}} :{{__('index.sort_price_desc')}}

                       </label>

                    </li>

                    <li class="checkbox list-group-item">

                       <label>

                       <input type="radio" name="sort_latest" value="DESC" class="i-check"> &nbsp;&nbsp;{{__('index.sort_latest')}}

                       </label>

                    </li>

                    <li class="checkbox list-group-item">

                       <label>

                       <input type="radio" name="sort_latest" value="ASC" class="i-check"> &nbsp;&nbsp;{{__('index.sort_oldest')}}

                       </label>

                    </li>

                 </ul>{{--  end sort--}}

                    <hr>

                    <ul class="list-group"> {{--  price--}}
                    <h5>{{__('index.s_price')}}</h5>
                    <div class="form-group">

                        <input type="number" class="form-control" name="min" min='0' placeholder="{{__('index.s_from')}}">

                     </div>

                     <div class="form-group">

                        <input type="number"  class="form-control" name="max" min='0' placeholder="{{__('index.s_to')}}">

                     </div>
                    </ul> {{--  end price--}}

                     <hr>

                     <ul class="list-group"> {{--  categories--}}
                     <h5 style="color: #464646;" id="cat-tog"> {{__('index.s_cat')}} &nbsp; <i class="fa fa-chevron-down"  aria-hidden="true"></i> </h5>
                     <ul class="checkbox-list" id='cat'>

                        @foreach($allcat as $c)

                        <li class="checkbox list-group-item">

                           <label>

                           <input type="checkbox" name="category[]" id="myCheckbox-{{$c->id}}" value="{{$c->id}}" > &nbsp;&nbsp; {{$c->name}}

                           </label>

                        </li>
                                {{-- ajax here --}}
                        @endforeach

                     </ul>
                     </ul> {{-- end categories--}}

                     <hr>
                     <ul class="list-group" > {{--  cities--}}
                        <h5 style="color: #464646;" id="city-tog"> {{__('index.s_city')}} &nbsp; <i class="fa fa-chevron-down" aria-hidden="true"></i></h5>
                        <ul class="checkbox-list" id='city' >

                            <?php if(session()->get('my_country') == '1') {

                               $allcities = $egy_cities;

                               }else {

                               $allcities = $sa_cities;

                               }

                               ?>

                            @foreach($allcities as $c)

                            <li class="checkbox list-group-item">

                               <label>

                               <input type="checkbox" name="city[]" value="{{$c->id}}" class="i-check"> &nbsp;&nbsp; {{$c->city}}

                               </label>

                            </li>

                            @endforeach

                         </ul>
                     </ul> {{-- end cities--}}

                     <hr>
                     <button class="btn btn-primary secondNavButtons" style="width: 100%;"><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> {{__('index.search_btn')}}</a>

                     </button>
                </ul>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- Modal filter -->


<!-- Modal sort -->
<div class="modal fade" id="sortby" tabindex="-1" role="dialog" aria-labelledby="sortByTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sortByTitle">{{__('index.sort')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('/Filter')}}" method="GET">
                @csrf
            <div class="modal-body pt-0">
                <ul class="checkbox-list">

                    <li class="checkbox list-group-item">

                       <label>

                       <input type="radio" name="sort_price" value="ASC" class="i-check" > &nbsp;&nbsp;{{__('index.price')}} :{{__('index.sort_price_asc')}}

                       </label>

                    </li>

                    <li class="checkbox list-group-item">

                       <label>

                       <input type="radio" name="sort_price" value="DESC" class="i-check"> &nbsp;&nbsp;{{__('index.price')}} :{{__('index.sort_price_desc')}}

                       </label>

                    </li>

                    <li class="checkbox list-group-item">

                       <label>

                       <input type="radio" name="sort_latest" value="DESC" class="i-check"> &nbsp;&nbsp;{{__('index.sort_latest')}}

                       </label>

                    </li>

                    <li class="checkbox list-group-item">

                       <label>

                       <input type="radio" name="sort_latest" value="ASC" class="i-check"> &nbsp;&nbsp;{{__('index.sort_oldest')}}

                       </label>

                    </li>

                 </ul>
                 <button class="btn btn-primary secondNavButtons" style="width: 100%;"><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> {{__('index.search_btn')}}</a>

                 </button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- Modal -->

<script>
    $(document).ready(function(){
        $('#city').hide();
        $('#cat').hide();
        $('#city-tog').click(function(){
        $("#city").toggle();


});

$('#cat-tog').click(function(){
        $("#cat").toggle();

    });
});

    </script>


@stop
