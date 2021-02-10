@extends('layouts.app')

@section('content')



<ul class="breadcrumb">



                    <li><a href="/">{{__('index.home')}}</a>



                    </li>



                    <li><a href="{{route('account.dashboard')}}">{{__('index.account')}}</a>





                    </li>



                    <li class="active">{{__('index.orders')}}</li>



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

            <th>كود الطلب</th>

             <th>طريقة الاستلام</th>
             <th>الوقت</th>

                <th>تفاصيل</th>

            



                

            </tr>

        </thead>

        <tbody>

           

            @foreach($seller_order as $s)

            <tr>

           

           

           

                <td>{{$s->id}}</td>
                <td>{{$s->order->shipping_option}}</td>

                <td>{{$s->created_at->diffForHumans()}}</td>

                <td>
                <a href="{{url('account/order',$s->order_id)}}">تفاصيل</a>
                </td>

                 

                 

            </tr>

            @endforeach

        </tbody>

        <tfoot>

            <tr>

            <th>كود الطلب</th>

<th>طريقة الاستلام</th>
<th>الوقت</th>

   <th>تفاصيل</th>


                

            </tr>

        </tfoot>

</table>

</div>



                              </a-card>





           </div>



















      </div></div>



@endsection

