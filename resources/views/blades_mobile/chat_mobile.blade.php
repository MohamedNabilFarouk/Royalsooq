
@extends('layouts_mobile.app')
@section('header')
<nav class="navbar navbar-expand-lg bg-header">
    <div class="container-fluid justify-content-start">
        <a href="{{ url()->previous() }}" class="btn">
            <i class="material-icons">arrow_back</i>
        </a>
        <div class="navbar-heading m-l-10">
            <h4>{{__("index.chat")}}</h4>
        </div>
    </div>
</nav>

@stop

@section('content')

<div id="content" class="noFooter" style='margin-top:20px;'>
    <!-- Content Wrap  -->
    <div class="content-wrap">
        <div class="heading-section mt-0">
            <div class="title col-secondary font-weight-normal">Ad Details</div>
        </div>
<form class="form-horizontal" action="{{ route('send.chat.message') }}" method="post">

    <fieldset>

      <legend class="text-center">{{__('index.send_to_seller')}}</legend>

@csrf






<input type="hidden" name="seller_id" value="{{$product->user->id}}">
<input type="hidden" name="item_id" value="{{$product->id}}">



        <!-- subject input-->

        <div class="form-group">

        <label class="col-md-3 control-label" for="name">{{__("index.subject")}}  </label>

        <div class="col-md-9">

          <input id="name" name="subject" type="text" placeholder="{{__('index.subject')}}" class="form-control">

        </div>

      </div>

      <!-- Message body -->

      <div class="form-group">

        <label class="col-md-3 control-label" for="message">{{__("index.message")}}  </label>

        <div class="col-md-9">

          <textarea class="form-control" id="message" name="message" placeholder="{{__('index.message')}}" rows="5"></textarea>

        </div>

      </div>



      <!-- Form actions -->

      <div class="form-group">

        <div class="col-md-12 text-right">

          <button type="submit" name="submit" class="btn btn-primary btn-lg">{{__("index.send")}}  </button>

        </div>

      </div>

    </fieldset>

    </form>
</div>
    @stop
