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

                                @foreach($userFreeAds as $p)

                                <div class="product-thumb product-thumb-horizontal">

                                    <header class="product-header">

                                        <img src="{{$p->main_image_url}}" alt="{{$p->name}}" title="{{$p->name}}">

                                    </header>

                                    <div class="product-inner">

                                        <ul class="icon-group icon-list-rating" title="3.2/5 rating">

                                            <li><i class="fa fa-star"></i>

                                            </li>

                                            <li><i class="fa fa-star"></i>

                                            </li>

                                            <li><i class="fa fa-star"></i>

                                            </li>

                                            <li><i class="fa fa-star-half-empty"></i>

                                            </li>

                                            <li><i class="fa fa-star-o"></i>

                                            </li>

                                        </ul>

                                        <h5 class="product-title">{{$p->name}}</h5>

                                        <div class="product-desciption"><span class="item-location"><i class="fa fa-map-marker"></i> @if($p->city){{$p->city->city}} @endif </span> <span>{{$p->city->country->name ??''}}</span> | <span>{{date_format($p->created_at,'d M Y')}}</span>

                                        <br>

                                        <span><i class="fa fa-th" aria-hidden="true"></i> {{$p->categories->name}}</span>

                                        </div>

                                        <div class="product-meta">

                                            <ul class="product-price-list">

                                                <li><span class="product-price">${{$p->price}}</span>

                                                </li>

                                                <!-- <li><span class="product-old-price">$218</span>

                                                </li>

                                                <li><span class="product-save">Save 60%</span>

                                                </li> -->

                                            </ul>

                                         <img src="{{asset('/storage/'. $p->user->image)}}" class="seller-img">

                                        </div>

                                    

                                    </div>

                                        <ul class="product-actions-list style2">

                                                <li><a class="btn btn-sm" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> {{__('index.add_favorite')}}</a>

                                                </li>

                                                <li><a class="btn btn-sm"><i class="fa fa-phone" style="color: #428bca;" aria-hidden="true"></i> {{__('index.call')}}</a>

                                                </li>

                                                     <li><a class="btn btn-sm"><i class="fa fa-comments" style="color: #428bca;" aria-hidden="true"></i> {{__('index.chat')}}</a>

                                                </li>

                                            </ul>

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