@extends('layouts.app')
@section('content')
<div class="container">
    <!--<script>document.addEventListener('contextmenu', event => event.preventDefault());</script>-->
	<div class="row">
        @if(App::getLocale() === 'en')
	<img src="{{asset('images/Royal-SooqTerms-of-Use-1.jpg')}}"/>
       @else
       <img src="{{asset('images/شروط-الاستخدام-لموقع-رويال-سوق-1.jpg')}}"/>

       @endif
       <br>
        </div>
        </div>
        @stop

        