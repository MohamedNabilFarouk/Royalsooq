

@extends('layouts.app')



@section('content')


<ul class="breadcrumb">

                    <li><a href="/">{{__('index.home')}}</a>

                    </li>

                    <li><a href="{{route('account.dashboard')}}">{{__('index.account')}}</a>


                    </li>

                    <li class="active">{{__('index.my_ads')}}</li>

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

                                <a href="{{ route('free.ads') }}" slot="extra">

                                  <button class="btn btn-success">{{__('index.add')}} +</button>

                                </a>

                              

                                <table class="table" >

                                                          <thead>

                                                              <tr>

                                                        

                                                              <th scope="col">{{__('index.image')}}</th>

                                                              <th scope="col">{{__('index.name')}}</th>

                                                              <th scope="col">{{__('index.des')}}</th>

                                                              <th scope="col">{{__('index.price')}}</th>
                                                              <th scope="col">{{__('index.approval')}}</th>

                                                              <th scope="col">{{__('index.action')}}</th>

                                                              </tr>

                                                          </thead>

                                                          <tbody>

                                                          @foreach($userFreeAds as $o)

                                                              <tr>

                                                                                                  

                                                              <td><img src="{{$o->main_image_url}}" style="    max-width: 198px;" alt="{{$o->name}}"></td>

                                                              <td>{{$o->name}}</td>

                                                              <td>{{$o->description}}</td>

                                                              <td>{{$o->price}}</td>

                                                              <td>@if($o->approved== 1) {{__('index.approved')}} @else {{__('index.pending')}} @endif</td>

                                                              <td> 

                                                                      <form action="{{route('user.deleteProduct',$o->id)}}" method="POST">

                                                                      {{ method_field('DELETE') }}

                                                                      @csrf

                                                                      <input class="btn btn-danger" type="submit" name="submit" value="{{__('index.delete')}}">

                                                                      </form> 

                                                                      <a href="{{ route('free.ads.edit',$o->id) }}" slot="extra"> <button class="btn btn-info">{{__('index.edit')}}</button></a>

                                            

                                                              </td>

                                                              </tr>

                                                            @endforeach

                                                          </tbody>

                                                  </table>            

</div>

                              </a-card>


           </div>









      </div></div>

@endsection















