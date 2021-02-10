@extends('layouts.app')
@section('content')


<ul class="breadcrumb">

                    <li><a href="/">{{__('index.home')}}</a>

                    </li>

                    <li><a href="{{route('account.dashboard')}}">{{__('index.account')}}</a>


                    </li>

                    <li class="active">{{__('index.inbox')}}</li>

</ul>



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

<a-card title="My Ads" >

<h3>{{__('index.s_from')}}:</h3><h4>{{$reply->user->email}} </h4>  
<h3>{{__('index.item')}}:</h3><h4>{{$reply->product->name}}</h4>  
<h3>{{__('index.subject')}}:</h3><h4>{{$reply->subject}}</h4>  
<h3>{{__('index.message')}}:</h3><h4>{{$reply->message}}</h4>    

<hr>


<h1 class="text-center">{{__('index.reply')}}</h1>
                    <form role="form" action="{{ route('send.chat.message') }}" method="post" id="login-form" autocomplete="off">
                       @csrf
                       <input type="hidden" name="seller_id" value="{{$reply->user->id}}">
                       <input type="hidden" name="item_id" value="{{$reply->product->id}}">
                       <div class="form-group">
                            <label for="key" class="sr-only">{{__('index.subject')}}</label>
                            <input type="text" name="subject" class="form-control" placeholder="{{__('index.subject')}}">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">{{__('index.message')}}</label>
                            <textarea name="message" class="form-control" placeholder="{{__('index.message')}}"></textarea>
                        </div>
                       
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="{{__('index.send')}}">
                    </form>


</div>

                              </a-card>


           </div>









      </div></div>



@stop