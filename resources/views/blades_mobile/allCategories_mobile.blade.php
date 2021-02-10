@extends('layouts_mobile.app')

@section('content')
<!-- Content  -->
<div id="content">

    <!-- Content Wrap  -->
    <div class="content-wrap">
        <ul class="list-group">
            @foreach($allcat as $c)
            <li class="list-group-item col-text"  >
                <a href="{{route('category.sub', $c->id)}}" class=" d-flex align-items-center">
                    <img src="{{asset('storage/'. $c->image)}}" width="24">
                    <span class="m-l-10" >{{$c->name}}</span>
                    @if((App::getLocale() )== 'en') 
                    <i class="material-icons ml-auto">keyboard_arrow_right</i>
                    @else
                    <i class="material-icons ml-auto">keyboard_arrow_left</i>
                    @endif
                </a>
            </li>
        @endforeach
        </ul>
    </div>
</div>
<!-- .Content  -->
@stop
