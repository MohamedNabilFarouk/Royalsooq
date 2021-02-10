@extends('layouts_mobile.app')
@section('header')

<!-- Header  -->
<nav class="navbar navbar-expand-lg bg-header">
    <div class="container-fluid justify-content-start">
        <a href="{{ route('chat.inbox') }}" class="btn">
            <i class="material-icons">arrow_back</i>
        </a>
        <div class="navbar-heading m-l-10">
            <h4>{{$reply->subject}}</h4>
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
        <div class="chat-wrapper">

            <div class="inlineContainer">
                <div class="otherChat other">
                    <a class="image-zoom" href="asset{{('/storage/'.$reply->product->main_image_url)}}"><img alt="chat image" src="asset{{('/storage/'.$reply->product->main_image_url)}}"></a>
                    <span>{{__('index.s_from')}} : {{$reply->user->name}}</span>
                    <span>{{__('index.email')}} : {{$reply->user->email}}</span><br>
                    <span>{{__('index.item')}} : <a href='{{url("Product-details",$reply->product->slug)}}'>{{$reply->product->name}}</a></span>

                </div>
                {{-- <span class="other">10:13</span> --}}
            </div>
            <div class="inlineContainer">
                <div class="otherChat other">
                    <span>{{__('index.message')}} :  {{$reply->message}}</span>
                </div>
                {{-- <span class="other">10:30</span> --}}
            </div>
        </div>

    </div>
</div>
<!-- .Content  -->


<!-- Bottom Panel  -->
<div class="footer footer-trans" style="margin-bottom:150px;">
    <div class="clearfix"></div>
    <div class="chat-form">
        <form role="form" action="{{ route('send.chat.message') }}" method="post" id="message-form" autocomplete="off">
            @csrf
            <input type="hidden" name="seller_id" value="{{$reply->user->id}}">
            <input type="hidden" name="item_id" value="{{$reply->product->id}}">
            <input type="hidden"  name="subject" class="form-control chat-input" value='Reply to {{$reply->message}}' >

        <div class="position-relative">
            <div class="chat-input-links p-l-10">
                {{-- <a href="#"><i class="material-icons">sentiment_satisfied_alt</i></a> --}}
            </div>
            <input type="text" name="message" class="form-control chat-input" placeholder="{{__('index.message')}}" value="">
            <div class="chat-input-links right">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        {{-- <a href="#"><i class="material-icons">attach_file</i></a> --}}
                    </li>
                    <li class="list-inline-item">
                        <a href="#" onclick="document.getElementById('message-form').submit()"><i class="material-icons col-primary">send</i></a>
                    </li>
                </ul>
            </div>
        </div>
         </form>
    </div>
</div>
<!-- Bottom Panel  -->


@stop
