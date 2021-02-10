@extends('layouts_mobile.app')
@section('header')
<nav class="navbar navbar-expand-lg bg-header">
    <div class="container-fluid justify-content-start">
        <a href="{{route('allCategories')}}" class="btn">
            <i class="material-icons">arrow_back</i>
        </a>
        <div class="navbar-heading m-l-10">
            <h4>{{$products[0]->subcategory->name}}</h4>
        </div>
    </div>
</nav>
@stop


@section('content')

<!-- Content  -->

<div id="content">
    <!-- Content Wrap  -->
    <div class="content-wrap">
        {{-- <div class="section section-filter">
            <button class="btn btn-link"><i class="material-icons-outlined m-r-5">place</i> Location</button>
            <button class="btn btn-link" data-toggle="modal" data-target="#sortby"><i class="material-icons m-r-5">sort</i> Sort</button>
            <button class="btn btn-link"><i class="material-icons-outlined m-r-5">filter_alt</i> Filter</button>
        </div> --}}

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
        @foreach($products as $p)
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
      <?php  // echo $products->render(); ?>
    </div>
    

</div>
<!-- Content  -->
{{ $products->appends(Request::except('token'))->links() }}
{{ $products->appends(Request::except('token'))->links() }}
<!-- Modal -->
<div class="modal fade" id="sortby" tabindex="-1" role="dialog" aria-labelledby="sortByTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sortByTitle">Sort By</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pt-0">
                <ul class="list-group">
                    <li class="list-group-item">Best Match</li>
                    <li class="list-group-item">Latest Posted</li>
                    <li class="list-group-item">Lowest Price</li>
                    <li class="list-group-item">Higest Price</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

@stop
