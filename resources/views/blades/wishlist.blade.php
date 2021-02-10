







@extends('layouts.app')







@section('content')







<ul class="breadcrumb">



                    <li><a href="/">{{__('index.home')}}</a>



                    </li>



                    <li><a href="{{route('account.dashboard')}}">{{__('index.account')}}</a>



                    </li>



                    <li class="active">{{__('index.favorite_ads')}}</li>



</ul>







    <style>



        .list-group-item {



    height:auto;



    min-height:220px;



}



.list-group-item.active small {



    color:#fff;



}



.stars {



    margin:20px auto 1px;    



}



    </style>



















<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>



<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->



<!------ Include the above in your HEAD tag ---------->



<div class="container">



<div class="row">



        <div class="col-md-3" >



                        <div id="app">







                            



                            <avored-layout inline-template>



                                            <div>







                                            <a-layout id="components-layout-demo-top" class="layout">







                                                <!-- @include('partials.nav') -->















                                                <a-layout-content style="padding: 0 10px">







                                                    @include('partials.breadcrumb')







                                                    <a-layout style="padding: 24px 0">







                                                        @auth







                                                        <a-layout-sider width="100%">







                                                        @include('partials.account-nav')







                                                        </a-layout-sider>







                                                        @endauth







                                                    



                                                    </a-layout>







                                                    </a-layout-content>







                                                







                                                <!-- @include('partials.footer') -->







                                                    </a-layout>







                                            </div>            



                            



                            </avored-layout>



                        </div>



        </div>







        <div class='col-md-9' style="  background-color: #f5f5f5;



                        padding: 2%;



                        margin-top: 0px;



                        border: #e2e2e2 1px solid;">



                   

@if(!$wishlists)

<h2>EMPTY</h2>

@else  

                        <div class="row">



                            <div class="well">



                                    <h1 class="text-center"> {{__('index.favorite_ads')}}</h1>



                                    <div class="list-group">



                                        @foreach($wishlists as $w)



                                        <form method="post" action="{{route('add.to.cart')}}">



                                                                @csrf



                                                <div  class="list-group-item ">



                                                        <div class="media col-md-3">



                                                            <figure class="pull-left">



                                                                <img class="media-object img-rounded img-responsive" style="width:50%"  src="{{$w->product->main_image_url ?? ''}}" alt="placehold.it/350x250" >



                                                            </figure>



                                                        </div>



                                                        <div class="col-md-6">



                                                            <h4 class="list-group-item-heading"> {{$w->product->name ?? ''}} </h4>



                                                            <p class="list-group-item-text">{{$w->product->description ?? ''}}



                                                            </p>



                                                        </div>



                                                        <div class="col-md-3 text-center">



                                                            <h2> {{$w->product->price ?? ''}} <small>{{$w->product->country->currency ?? ''}} </small></h2>



                                                        



                                                        



                                                                            <!-- <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i> </button> -->



                                                                            <!-- <button type="submit" class="btn btn-default btn-lg btn-block"> Add To Cart </button>



                                                                            <input type="hidden" name="slug" value="{{$w->product->slug ?? ''}} ">



                                                                            <input type="hidden" name="qty" value="1"> -->



                                                                    

</form>

<form action="{{route('delete.favorites', $w->id)}}" method="post">

{{ method_field('DELETE') }}    

@csrf



    <input class="btn btn-danger btn-lg btn-block" type="submit" value="{{__('index.delete')}}"/> 

</form>

                                                            <!-- <div class="stars">



                                                                <span class="glyphicon glyphicon-star"></span>



                                                                <span class="glyphicon glyphicon-star"></span>



                                                                <span class="glyphicon glyphicon-star"></span>



                                                                <span class="glyphicon glyphicon-star"></span>



                                                                <span class="glyphicon glyphicon-star-empty"></span>



                                                            </div> -->



                                                            <!-- <p> Average 4.5 <small> / </small> 5 </p> -->



                                                        </div>



                                                </div>



                                      



                                        @endforeach











                    



                                    </div>



                            </div>



                        </div>

@endif

                



        </div>



</div>



</div>



@stop