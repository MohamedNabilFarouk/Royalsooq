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



                               



<table id="example" class="table table-striped table-bordered" style="width:100%">

        <thead>

            

        <tr>

        <th>{{__('index.s_from')}}</th>

            <th>{{__('index.item')}}</th>

                <th>{{__('index.subject')}}</th>

                <th>{{__('index.message')}}</th>

                <th>{{__('index.at')}}</th>

                <th>{{__('index.show')}}</th>

                <th>{{__('index.delete')}}</th>

                

            </tr>

        </thead>

        <tbody>

           

            @foreach($inbox as $i)

            <tr>

            <td>{{$i->user->name}}</td>

            <td><a href="{{route('product.details', $i->product->slug ?? '' )}}">{{$i->product->name ?? ''}}</a></td>

                

                <td>{{$i->subject}}</td>

                <td>{{$i->message}}</td>

                <td>{{$i->created_at}}</td>

                <td>

                  <a href="{{route('get.reply.chat', $i->id)}}" class="btn btn-info">{{__('index.show')}}</a>

                  </td>

                

                <td>

                <form action="{{route('delete.chat',$i->id)}}" method="POST">

                  {{ method_field('DELETE') }}

                  @csrf

                  <input class="btn btn-danger" type="submit" name="submit" value="{{__('index.delete')}}">

                  </form> 

                  </td>

                 

            </tr>

            @endforeach

        </tbody>

        <tfoot>

            <tr>

            <th>{{__('index.s_from')}}</th>

            <th>{{__('index.item')}}</th>

                <th>{{__('index.subject')}}</th>

                <th>{{__('index.message')}}</th>

                <th>{{__('index.at')}}</th>

                <th>{{__('index.show')}}</th>

                <th>{{__('index.delete')}}</th>

                

            </tr>

        </tfoot>

</table>

</div>



                              </a-card>





           </div>



















      </div></div>



@endsection

