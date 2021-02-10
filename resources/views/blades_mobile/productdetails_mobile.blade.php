
<?php
$page_title=$products[0]->name;
    session()->put('my_country',$products[0]->country_id);
?>

<!doctype html>
<html lang="en">
<head>


 @include('layouts_mobile.inc-head')
 <link rel="stylesheet" href="lib/Magnific-Popup-master/dist/magnific-popup.css">
 <link rel="stylesheet" href="lib/map/style.css">
 <link rel="stylesheet" href="{{asset('css/font_awesome.css')}}">
 <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

 @yield('social')

</head>

<body class="default">
<!-- Preloading -->
{{-- <div class="preloading">
    <div class="wrap-preload">
        <div class="cssload-loader"></div>
    </div>
</div> --}}
<!-- .Preloading -->



<!-- Header  -->
<nav class="navbar navbar-expand-lg navbar-light bg-header detail" >
    <div class="container-fluid">
        <a href="{{ url()->previous() }}" class="btn">
            <i class="material-icons">arrow_back</i>
        </a>
        <button type="button" class="btn">
                {{-- <i class="material-icons">favorite_border</i> --}}
                {{-- <i class="material-icons ml-2">share</i> --}}
        </button>
    </div>

</nav>
<!-- .Header  -->

<?php
visits($products[0])->increment();
?>
<!-- Content  -->
<div id="content" class="detail" style='margin-top:-70px;'>
    <!-- Content Wrap  -->
    <div class="content-wrap">

        @if(count($products[0]->images) == 1)
        <div class="subsite-banner" style='margin-bottom:200px;' >
            <div class="carousel-item active" style=''>
                <a class="image-zoom" href="{{$products[0]->main_image_url}}"><img alt="chat image" src="{{$products[0]->main_image_url}}" title="{{$products[0]->name}}" style=' width:100%;height: 207px;overflow:hidden; '></a>
            </div>
        </div>
        @else


        <div class="subsite-banner"  >    

                <div id="carousel-example-generic" class="carousel slide">
                    <?php $c=0;
                        $counter=0;
                    ?>
                    <!-- Indicators -->
                    <ol class="sli">
                        @foreach($products[0]->images as $i)

                        <li data-target="#carousel-example-generic" data-slide-to="{{$c}}" @if($c==0) class="active" @endif></li>
                            <?php $c++;?>
                        @endforeach


                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="sli" role="listbox">
                        @foreach($products[0]->images as $i)
                        <div class="carousel-item @if($counter == 0) active @endif ">
                            <a class="image-zoom" href="{{asset('storage/'. $i->path)}}"><img alt="chat image" src="{{asset('storage/'. $i->path)}}" style='width:397px; height: 300px;overflow:hidden;'></a>
                        </div>
                        <?php $counter++ ; ?>
                        @endforeach

                    </div>
                </div>
            @endif
        </div>
        <div class="subsite" >
            <div class="ad-content">
                <div class="row">
                    <div class="col-12">
                        <div class="ad-title">{{$products[0]->name}}</div>
                    </div>
                    <div class="col-6">
                        <div class="ad-location"><i class="material-icons-outlined">location_on</i>{{$products[0]->city->city ?? ''}}</div>
                    </div>
                    <div class="col-6 pl-0">
                        <div class="ad-location"><i class="material-icons">schedule</i>{{date_format($products[0]->created_at,'d M Y')}}</div>
                    </div>
                    <div class="col-12">
                        <div class="ad-price"><i class="material-icons"></i>{{$products[0]->country->currency}}  {{$products[0]->price}}</div>
                    </div>
                </div>
            </div>
        </div>
        <!--Ads Detail-->
        <div class="heading-section">
            {{-- <div class="title">Ads Detail</div> --}}
        </div>
        <div class="ad-section">
            <ul class="list-group">

            <li class="list-group-item">{{__('index.negotiable')}} <span class="float-right col-text">@if($products[0]->negotiable == 1)({{__('index.negotiable')}})@else {{__('index.no')}}@endif</span></li>
                <li class="list-group-item">{{__('index.views')}} <span class="float-right col-text">{{$products[0]->visits()->count()}} </span></li>
                <li class="list-group-item">{{__('index.category')}} <span class="float-right col-text">{{$products[0]->categories->name}}</span></li>
                <li class="list-group-item">{{__('index.phone')}} <span class="float-right col-text">{!! $products[0]->user->phone ?? null !!}</span></li>

                <li class="list-group-item">{{__('index.safety')}}
                    <div class="li-features col-text">
                        <span><i class="material-icons col-primary">check</i> {{__('index.meet')}}</span>
                        <span><i class="material-icons col-primary">check</i>{{__('index.check')}}</span>
                        <span><i class="material-icons col-primary">check</i> {{__('index.pay')}}</span>
                    </div>
                </li>
            </ul>
        </div>
        <!--Ads Detail-->
        <!--Description-->
        <div class="heading-section">
            <div class="title">{{__('index.des')}}</div>
        </div>
        <div class="ad-section">
            <p class="ad-section-item">{!! $products[0]->description !!}</p>
        </div>
        <!--Description-->
        <!--MAP Loation-->
        <div class="heading-section">
            <div class="title">{{__('index.seller_map')}}</div>
        </div>
        <div class="ad-section">
            <div class="ad-section-item">
                {!!$products[0]->map!!}
                {{-- <div># AD ID<span> 5555</span> <span class="col-primary float-right">REPORT THIS AD</span></div> --}}
            </div>

        </div>
        <!--MAP-->
        <!--Contact Info-->
        <div class="heading-section">
            <div class="title">{{__('index.contact_info')}}</div>
        </div>
        <div class="ad-section">
            <div class="ad-section-item">
                <div class="profile">
                    <div class="left">
                        <div class="user-image"> <img src="{{asset('/storage/'. $products[0]->user->image)}}" width="60" alt="profile"></div>
                    </div>
                    <div class="right m-l-10">
                        <div class="name col-text text-uppercase">{!! $products[0]->user->name ?? null !!}</div>
                        <div class="acc">{{__('index.phone')}} :  <span>{!! $products[0]->user->phone ?? null !!}</span></div>
                        {{-- <a href="profile.html" class="vi-profile">see profile</a> --}}
                    </div>
                    <a href="{{route('shops2', $products[0]->user->slug)}}" class="ml-auto">
                        <i class="material-icons">keyboard_arrow_right</i>
                    </a>
                </div>
            </div>

        </div>
        <!--Contact Info-->
        <!--Review-->
        {{-- <div class="heading-section">
            <div class="title">Contact Information</div>
        </div>
        <div class="ad-section">
            <div class="ad-section-item">
                <div class="review">
                    <div class="rating">
                        <div class="average-rating">4.5 <i class="material-icons">grade</i></div>
                        <div class="review-count">Based on <span>3</span> review</div>
                        <a href="#" class="col-primary ml-auto" data-target="#write-review" data-toggle="modal">Write a review</a>
                    </div>
                    <div class="user">
                        <div class="user-image">
                            <img src="img/user/person_outline.svg" width="14">
                        </div>
                        <span class="user-name">Vimla Madam</span>
                    </div>
                    <div class="star-rates">
                        <span class="stars mr-3">
                            <i class="active material-icons">grade</i>
                            <i class="active material-icons">grade</i>
                            <i class="active material-icons">grade</i>
                            <i class="active material-icons">grade</i>
                            <i class="material-icons">grade</i>
                        </span>
                        <span class="date">21 June 2020</span>
                   </div>
                    <div class="description m-b-20">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                    </div>
                    <a href="all-review.html" class="col-primary">See all review</a>
                </div>
            </div>

        </div> --}}
        <!--Review-->
        <!--Similar Ads-->
        <div class="heading-section">
            <div class="title">{{__('index.related_products')}}</div>
        </div>
        <div class="ad-section ad-carousel">
            <div class="default-carousel">
                @foreach($related_products as $product)
                <!-- item -->
                <a href="{{url('Product-details',$product->slug)}}">
                <div class="item">
                    <div class="ad-box">

                        <a href="{{url('Product-details',$product->slug)}}">
                            <div class="ad-image">
                                <img src="{{$product->main_image_url}}">
                            </div>

                            <div class="ad-content">
                                <div class="ad-title">{{$product->name}}</div>
                                <div class="ad-location"><i class="material-icons-outlined">location_on</i>{{$product->city->city ?? ''}}</div>
                                <div class="ad-price"><i class="material-icons"></i>{{$product->price}} {{$products[0]->country->currency}}</div>

                            </div>
                        </a>
                    </div>
                </div>
            </a>
                <!-- .item -->

                @endforeach

            </div>
        </div>
        <!--Similar Ads-->


    </div>

</div>
<!-- Content  -->




        <!-- Botom Panel  -->
        <div class="footer">
            <div class="row no-gutters">
                <div class="col-6">
                    <a href="{{route('chat.message',$products[0]->id)}}" class="btn btn-default rounded-0 btn-block w-100">{{__('index.chat')}}</a>
                </div>
                <div class="col-6">

                    <a href="tel:{{$products[0]->user->phone ?? null}}" class="btn btn-primary rounded-0 btn-block w-100" >  <i class="fa fa-phone"style="c"></i>   {{__('index.call')}}</a>

                    {{-- <button type="button" class="btn btn-primary rounded-0 btn-block w-100">Save & Apply</button> --}}
                </div>
            </div>
        </div>
        <!-- Botom Panel  -->


<!-- Modal -->
<div class="modal fade" id="write-review" tabindex="-1" role="dialog" aria-labelledby="writeReviewTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close ml-0 px-0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <a href="#" class="col-primary ml-auto" type="button">POST</a>
            </div>
            <div class="modal-body">
                <span class="stars d-flex justify-content-around">
                            <i class="active material-icons">grade</i>
                            <i class="material-icons">grade</i>
                            <i class="material-icons">grade</i>
                            <i class="material-icons">grade</i>
                            <i class="material-icons">grade</i>
                </span>
                <div class="form-group mt-3">
                    <textarea class="form-control" id="" rows="3" spellcheck="false" placeholder="Describe your expreince"></textarea>
                    <div class="text-count float-right"><span>0</span>/500</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

@include('layouts_mobile.inc-scripts')
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>


 <!-- slick slider -->
 <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

 <script>
     $(document).ready(function(){
         $('.sli').slick({
   slidesToShow: 1,
   slidesToScroll:1,
   autoplay: true,
   autoplaySpeed: 2000,
 });
     });
   </script>
</body>
</html>
