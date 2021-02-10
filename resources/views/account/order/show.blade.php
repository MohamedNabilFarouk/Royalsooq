@extends('layouts.user')





@section('breadcrumb')


<a-breadcrumb style="margin: 16px 0">


    <a-breadcrumb-item>


      <a href="{{ route('home') }}" title="home">


        Home


      </a>


    </a-breadcrumb-item>


    <a-breadcrumb-item>


      <a href="{{ route('account.dashboard') }}" title="user dashboard">


        User Dashboard


      </a>


    </a-breadcrumb-item>





    <a-breadcrumb-item>


        Order details


    </a-breadcrumb-item>


</a-breadcrumb>


@endsection








@section('content')


<a-row type="flex" class="mb-1" justify="start">


    <a-col>


        <h1>{{  __('Order') }}</h1>


    </a-col>


</a-row>


<a-row type="flex" :gutter="15" class="mt-1">


    <a-col :span="24">


        <a-card title="{{ __('Order Information')}}">


            <a-card-content>


                <p>{{ __('Shipping:') }} {{ $order->shipping_option }}</p>


                <p>{{ __('Payment:') }} {{ $order->payment_option }}</p>


                <p>{{ __('Order Status:') }} {{ $order->orderStatus->name }}</p>


            </a-card-content>


        </a-card>


        <a-card class="mt-1" title="{{ __('User Information')}}">


            <a-card-content>


                <a-row type="flex">


                    <a-col :span="8">


                        {{ __('Name:') }} {{ $order->user->name }}


                    </a-col>


                


                    <a-col :span="8">


                        <h4>{{ __('Shipping Address:') }}</h4>


                        <p>{{ $order->shippingAddress->first_name }} {{ $order->shippingAddress->last_name }}</p>


                        <p>{{ $order->shippingAddress->phone }}</p>


                        <p>{{ $order->shippingAddress->address1 }}, {{ $order->shippingAddress->address2 }}</p>


                        <p>{{ $order->shippingAddress->city }} {{ $order->shippingAddress->postcode }}</p>


                        <p>{{ $order->shippingAddress->state }} </p>


                        <p>{{ $order->shippingAddress->country->name }}</p>


                    </a-col>


              


                    <a-col :span="8">


                        <h4>{{ __('Billing Address:') }}</h4>


                        <p>{{ $order->billingAddress->first_name }} {{ $order->billingAddress->last_name }}</p>


                        <p>{{ $order->billingAddress->phone }}</p>


                        <p>{{ $order->billingAddress->address1 }}, {{ $order->billingAddress->address2 }}</p>


                        <p>{{ $order->billingAddress->city }} {{ $order->billingAddress->postcode }}</p>


                        <p>{{ $order->billingAddress->state }} </p>


                        <p>{{ $order->billingAddress->country->name }}</p>


                    </a-col>


                </a-row>


               


                


            </a-card-content>


        </a-card>





        <a-card class="mt-1" title="{{ __('Order Products')}}">


            <a-card-content>


                


                


                       





                        <a-row>


                        <table class="table">


                                <thead>


                                    <tr>


                              


                                    <th scope="col">image</th>


                                    <th scope="col">Name</th>


                                    <th scope="col">Qty</th>


                                    <th scope="col">Price</th>


                                    </tr>


                                </thead>


                                <tbody>


                                @foreach($products as $o)


                                    <tr>


                                                                        


                                    <td><img src='{{$o->product->main_image_url ?? ""}}' style="width:10%"></td>


                                    <td>{{$o->product->name ?? ""}}</td>


                                    <td>{{$o->qty}}</td>


                                    <td>{{$o->price}}</td>


                                    </tr>


                                   @endforeach


                                </tbody>


                        <table>            


</a-row>





@endsection


