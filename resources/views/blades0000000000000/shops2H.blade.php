@extends('layouts.app')

@section('content')



<div class="container">

<ul class="breadcrumb">

                    <li><a href="{{url('/')}}">{{__('index.home')}}</a>

                    </li>

                    <li><a href="{{route('all.acc')}}">{{__('index.shops')}}</a>

                    </li>

                    <li><a href="">{{$userFreeAds[0]->user->name}} {{__('index.shops')}}</a>

                    </li>

                </ul>



<div class="row">

    <div class="col-md-3">

        <div class="product-page-meta box">

        <img src="{{asset('/storage/'. $userFreeAds[0]->user->image)}}" alt="Smiley face" style="

width: 87%;



border-radius: 16%;

">

            <ul class="list product-page-meta-info">

                <li>

                {{$userFreeAds[0]->user->name}}

                </li>

                <li><i class="fa fa-check-square-o" aria-hidden="true"></i> {{__('index.verfied')}}

                <li><i class="fa fa-calendar" aria-hidden="true"></i> {{__('index.member_since')}} <strong>{{date_format($userFreeAds[0]->user->created_at,'d M Y')}}</strong>

                </li>

                <li><div class="sharethis-inline-share-buttons"></div></li>

                <!-- <li><i class="fa fa-eye" aria-hidden="true"></i> 3123 views</li>

                <li><i class="fa fa-flag" aria-hidden="true"></i> Rebort member</li> -->

            </ul>

        </div>

    </div>

    <div class="col-md-9">

        <div class="fotorama">

            <img src="{{asset('img/cascada_960x540.jpg')}}" alt="Image Alternative text" title="cascada" />

            <img src="{{asset('img/waipio_valley_960x540.jpg')}}" alt="Image Alternative text" title="waipio valley" />

            <img src="{{asset('img/the_best_mode_of_transport_here_in_maldives_960x540.jpg')}}" alt="Image Alternative text" title="the best mode of transport here in maldives" />

        </div>









    </div>

    <div class="row">

    <div class="col-md-8">

        <div class="tabbable">



            <div class="tab-content">

                <div class="tab-pane fade in active" id="tab-1">

                    <div class="row text-smaller">

                        <div class="col-md-12">

                            <h4>About</h4>

                            <p>Mus pulvinar hendrerit sollicitudin mus per lacus sociis inceptos dolor posuere nisi dignissim nam aliquam congue mauris lobortis quis sociosqu</p>

                            <p>Lorem cras pretium quam parturient euismod et fermentum curabitur cubilia elit mattis nascetur ipsum vulputate sapien viverra fermentum habitasse cras</p>

                        </div>

         

                    </div>

                </div>

            

            </div>

        </div></div>

                  <div class="col-md-4">

        <div class="tabbable">



            <div class="tab-content">

                <div class="tab-pane fade in active" id="tab-1">

                    <div class="row text-smaller">

                        <div class="col-md-12">

                            <!-- <span class="locaiton-style1"><i class="fa fa-map-marker"></i> <stron>Loctian</stron> Cairo, Egypt</span> -->

      <a href="#" class="btn btn-sucess phone-number"><i class="fa fa-phone"  aria-hidden="true"></i> <span>{{$userFreeAds[0]->user->phone}}</span></a>

         

                    </div>

                </div>

            

            </div>

        </div></div>

        </div>

        </div>

                        <div class="gap gap-small"></div>

    <div class="col-md-12">

    <div class="row">

                        <!-- <div class="col-md-3">

                            <div class="product-sort">

                                <span class="product-sort-selected">sort by <b>Price</b></span>

                                <a href="#" class="product-sort-order fa fa-angle-down"></a>

                                <ul>

                                    <li><a href="#">sort by Name</a>

                                    </li>

                                    <li><a href="#">sort by Ended Soon</a>

                                    </li>

                                    <li><a href="#">sort by Popularity</a>

                                    </li>

                                    <li><a href="#">sort by Location</a>

                                    </li>

                                </ul>

                            </div>

                        </div> -->

                        <div class="col-md-2 col-md-offset-9">

                            <div class="product-view pull-right">

                                <a class="fa fa-th-large active" href="{{route('shops2H', $userFreeAds[0]->user->id)}}"></a>

                                <a class="fa fa-list" href="{{route('shops2', $userFreeAds[0]->user->id)}}"></a>

                            </div>

                        </div>

                    </div>

        @foreach($userFreeAds as $product)

        <div class="col-md-3">



                    <div class="product-thumb" style="max-height: 410px; margin: 20px 0 20px 0;">

                        <header class="product-header">

                        <form method="post" action="{{route('add.favorites')}}">

                                @csrf 

                                <input type="hidden" name="product_id" value="{{$product->id}}">  



                                <button class="btn fav" type="submit"><i class="fa fa-heart"></i> </button>

                        </form>       

                        <img src="{{$product->main_image_url}}" alt="Image Alternative text" title="Gamer Chick" style="height: 200px;" />

                        </header>

                        <div class="product-inner">

                            <ul class="icon-group icon-list-rating" title="4.7/5 rating">

                                <li><i class="fa fa-star"></i>

                                </li>

                                <li><i class="fa fa-star"></i>

                                </li>

                                <li><i class="fa fa-star"></i>

                                </li>

                                <li><i class="fa fa-star"></i>

                                </li>

                                <li><i class="fa fa-star"></i>

                                </li>

                            </ul>

                            <h5 class="product-title">{{$product->name}}</h5>

                                     <span class="info-row">

										<span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="" data-original-title="Private">

											

										</span>&nbsp;

										<span class="date"><i class=" fa fa-clock-o"></i> {{date_format($product->created_at,'d M Y')}} </span>

																					<span class="category">

												<i class="fa fa-list-alt"></i>&nbsp;

												<a href="{{route('category.sub', $product->categories->id)}}" class="info-link">{{$product->categories->name}}</a>

											</span>

																				<span class="item-location">

											<i class="fa fa-user"></i>&nbsp;

										<a href="{{route('shops2', $product->id)}}" class="info-link">{{$product->user->name}}</a> 

										</span>

									</span>

                            <!-- <p class="product-desciption">{{$product->sku}}</p> -->

                            <div class="product-meta">

                                <ul class="product-price-list">

                                    <li><span class="product-price">{{$product->price}} $</span>

                                    </li>

                                </ul>

                                <ul class="product-actions-list">

                                    <!-- <li>

                                    <form method="post" action="#">

                                    @csrf

                                    <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i>  </button>

                                    <input type="hidden" name="slug" value="{{$product->slug}}">

                                    <input type="hidden" name="qty" value="1">

                                </form>   

                                    </li>

                                    @auth

                                <li>

                                <form method="post" action="{{route('add.favorites')}}">

                                    @csrf

                                    <button class="btn" type="submit"><i class="fa fa-heart"></i> </button>

                                    <input type="hidden" name="product_id" value="{{$product->id}}">

                                    

                                    

                                </form>   

                                </li>

                                @endauth -->

                                <li><a href="Product-details/{{$product->slug}}" class="btn btn-sm"  style="

  color: #626262;border: solid 1px #fdeb18;"><i class="fa fa-comment" style=" color: #fdeb18;"></i> {{__('index.chat')}}</a>

                                    <a href="Product-details/{{$product->slug}}" class="btn btn-sm" style="

   color: #626262; border: solid 1px #73b902;"><i class="fa fa-phone"style="    color: #73b902;"></i> {{__('index.call')}}</a>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

            



</div>

        @endforeach

    

        <!-- <ul class="pagination">

            <li class="prev disabled">

                <a href="#"></a>

            </li>

            <li class="active"><a href="#">1</a>

            </li>

            <li><a href="#">2</a>

            </li>

            <li><a href="#">3</a>

            </li>

            <li><a href="#">4</a>

            </li>

            <li><a href="#">5</a>

            </li>

            <li class="next">

                <a href="#"></a>

            </li>

        </ul> -->

        <div class="gap"></div>

    </div>

        <div class="gap gap-small"></div>

</div>



</div>





@stop