@extends('layouts.user')

@section('content')

<ul class="breadcrumb">

                    <li><a href="/">{{__('index.home')}}</a>

                    </li>

                    <li><a href="{{route('account.dashboard')}}">{{__('index.account')}}</a>

                    </li>

                    <li class="active">{{__('index.addresses')}}</li>

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

                    <a-row type="flex" class="mb-1">
                        <a-col :span="24">
                            <h2 class="float-left">{{__('index.addresses') }}</h2>
                            <a 
                                href="{{ route('account.address.create') }}"
                                class="ant-btn ant-btn-primary float-right">
                                <a-icon type="plus"></a-icon>
                                {{__('index.add') }}
                            </a>
                        </a-col>
                    </a-row>
                    <a-row type="flex" :gutter="15" style="margin-top: 1rem">
                            @foreach ($userAddresses as $address)
                                <a-col class="mt-1" :span="12">
                                <a-card title="{{ $address->type }}">
                                    <a-dropdown slot="extra">
                                    <a class="ant-dropdown-link"  href="">
                                    {{__('index.options') }} <a-icon type="down" />
                                    </a>
                                        <a-menu slot="overlay">
                                            <a-menu-item>
                                                <a href="{{ route('account.address.edit', $address->id) }}">{{__('index.edit') }}</a>
                                            </a-menu-item>
                                            <a-menu-item>
                                                <a onClick="event.preventDefault();document.getElementById('address-destory-{{ $address->id }}').submit()"
                                                    href="#">{{__('index.delete') }}</a>
                                            </a-menu-item>
                                        </a-menu>
                                    </a-dropdown>
                                        <form style="display:none"
                                            id="address-destory-{{ $address->id }}"
                                            method="post"
                                            action="{{ route('account.address.destroy', $address->id) }}"
                                        >
                                            @csrf
                                            @method('delete')
                                        </form>
                                    <p>{{ $address->first_name }} {{ $address->last_name }}</p>
                                    <p>{{ $address->company_name }}</p>
                                    <p>{{ $address->phone }}</p>
                                    <p>{{ $address->address1 }}, {{ $address->address2 }}</p>
                                    <p>{{ $address->city }}, {{ $address->postcode }}</p>
                                    <p>{{ $address->state }}: {{ $address->country->name ?? '' }}</p>
                                </a-card>
                                </a-col>
                            @endforeach
                    </a-row>
        </div>

    </div>
</div>                
@endsection
