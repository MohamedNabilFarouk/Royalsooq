@extends('layouts.app')







@section('content')



<ul class="breadcrumb">

                    <li><a href="/">{{__("index.home")}}</a>

                    </li>

                    <li><a href="{{route('account.dashboard')}}">{{__("index.account")}}</a>

                    </li>

                    <li class="active">{{__("index.complaint")}}</li>

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

      <div class="row">

          <div class="col-md-12 ">

            <div class="well well-sm">

              <form class="form-horizontal" action="{{route('add.complaint')}}" method="post">

              <fieldset>

                <legend class="text-center">{{__("index.send")}}  {{__("index.complaint")}} {{__("index.or")}} {{__("index.suggestion")}}</legend>

        @csrf



                <!-- phone input-->

                <div class="form-group">

                  <label class="col-md-3 control-label" for="name">{{__("index.phone")}}  </label>

                  <div class="col-md-9">

                    <input id="name" name="phone" type="text" placeholder='{{__("index.phone")}}' class="form-control">

                  </div>

                </div>

        

                <!-- Email input-->

                <div class="form-group">

                  <label class="col-md-3 control-label" for="email">{{__("index.email")}}  </label>

                  <div class="col-md-9">

                    <input id="email" name="email" type="text" placeholder="{{__('index.email')}}  " class="form-control">

                  </div>

                </div>

                

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

          </div>

      </div>

    </div>

  </div>

</div>



@endsection

