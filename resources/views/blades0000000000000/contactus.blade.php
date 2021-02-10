@extends('layouts.app')

@section('content')
<style>
    iframe{
    width:100%; !important;
    height:250px ; !important;
}
</style>
<div class="container">
<ul class="breadcrumb">
                    <li><a href="{{url('/')}}">{{__('index.home')}}</a>
                    </li>
                    <li><a href="#">{{__('index.contact_us')}}</a>
                    </li>
                </ul>
            <div class="row row-wrap">
                <div class="col-md-6">
                    {!! $map[0]->english !!}
                </div>
                <div class="col-md-3">
                    <form name="contactForm"  class="contact-form" method="post" action="{{route('contactus.store')}}">
                    @csrf   
                        <fieldset>
                            <div class="form-group">
                                <label>Name</label>
                                <div class="bg-warning form-alert" id="form-alert-name">Please enter your name</div>
                                <input class="form-control" id="name" type="text" name="name" placeholder="Enter Your name here" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <div class="bg-warning form-alert" id="form-alert-email">Please enter your valid E-mail</div>
                                <input class="form-control" id="email" type="text" name="email" placeholder="You E-mail Address" />
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <div class="bg-warning form-alert" id="form-alert-message">Please enter message</div>
                                <textarea class="form-control" id="message" name="message" placeholder="Your message"></textarea>
                            </div>
                            <div class="bg-warning alert-success form-alert" id="form-success">Your message has been sent successfully!</div>
                            <div class="bg-warning alert-error form-alert" id="form-fail">Sorry, error occured this time sending your message</div>
                            <button  type="submit" class="btn btn-primary">Send Message</button>
                        </fieldset>
                    </form>
                </div>
                <div class="col-md-3">
                    <h5>Contact Info</h5>
                    <p>{!! $contact_info[0]->english !!}</p>
                    <ul class="list">
                        <li><i class="icon-phone"></i> Phone 1 : {!! $phone1[0]->english !!}</li>
                        <li><i class="icon-phone"></i> Phone 2 : {!! $phone2[0]->english !!}</li>
                        <li><i class="icon-envelope"></i> E-mail: <a href="#">{!! $cs_email[0]->english !!}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="gap gap-small"></div>
        </div>


@endsection