@extends('layouts_mobile.app')
@section('header')

<!-- Header  -->
<nav class="navbar navbar-expand-lg bg-header">
    <div class="container-fluid justify-content-start">
        <a href="{{ url('/account') }}" class="btn">
            <i class="material-icons">arrow_back</i>
        </a>
        <div class="navbar-heading m-l-10">
            <h4>{{__('index.inbox')}}</h4>
        </div>
    </div>
</nav>
<!-- .Header  -->

@stop
@section('content')


<!-- Content  -->
<div id="content" class="noFooter" style='margin-top:50px;'>
    <!-- Content Wrap  -->
    <div class="content-wrap">
        @foreach($inbox as $i)
        <a href="{{route('get.reply.chat', $i->id)}}">
        <div class="chat-section">
            <div class="chat-section-item">
                <div class="profile">
                    <a href="{{asset('/storage/' . $i->user->image) }}" class="left position-relative">
                        <div class="user-image">
                            <img src="{{asset('/storage/' . $i->user->image) }}" alt="profile">
                        </div>
                        <i class="material-icons lens active">lens</i>
                    </a>
                    <a href="{{route('get.reply.chat', $i->id)}}" class="right p-l-10 line-h1">
                        <div class="name col-text">{{$i->user->name}}</div>
                        <small class="col-text">{{$i->message}}</small>
                    </a>

                    <div class="date"><span> {{$i->created_at}}</span>
                        <form action="{{route('delete.chat',$i->id)}}" method="POST" id='delForm'>
                            {{ method_field('DELETE') }}
                            @csrf
                            <a href="#" onclick="document.getElementById('delForm').submit()"><button class="btn btn-icon" style='color:gray'><i data-feather="trash-2"></i></button></a>
                        </form>
                        </div>
                </div>
            </div>
        </div>
    </a>
        @endforeach
    </div>
</div>
<!-- .Content  -->


@stop
