@extends('layouts.user')



@section('content')

<ul class="breadcrumb">

                    <li><a href="/">{{__('index.home')}}</a>

                    </li>

                    <li><a href="{{route('account.dashboard')}}">{{__('index.account')}}</a>

                    </li>

                    <li class="active">{{__('index.orders')}}</li>

</ul>



    <style>

        .list-group-item {

    height:auto;

    min-height:220px;

}

.list-group-item.active small {

    color:#fff;

}

.stars {

    margin:20px auto 1px;    

}

    </style>






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
               
                            <div class='col-md-9' style="  background-color: #f5f5f5; padding: 2%;margin-top: 0px;border: #e2e2e2 1px solid;">
                                        <a-row type="flex" class="mb-1" justify="start">
                                            <a-col>
                                                <h1>{{__('index.orders')}}</h1>
                                            </a-col>
                                        </a-row>
                                        <a-row type="flex" :gutter="15" class="mt-1">
                                            <a-col :span="24">
                                                <user-order-table inline-template>
                                                    <a-table :columns="columns" row-key="id" :data-source="{{ $userOrders }}">
                                                        <span slot="action" slot-scope="text, record">
                                                            <a :href="getShowUrl(record)">
                                                                <a-icon type="eye"></a-icon>
                                                            </a>
                                                        </span>
                                                    </a-table>
                                                </user-order-table>
                                            </a-col>
                                        </a-row>
                                   
                            </div>
    </div>
</div>                   

@endsection
