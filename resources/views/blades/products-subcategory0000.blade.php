@extends('layouts.app')

@section('content')








                <ul class="breadcrumb">
                    <li><a href="{{url('/')}}">{{__('index.home')}}</a>
                    </li>
                    
                    <li><a href="{{route('category.sub', $products[0]->categories->id ?? '')}}">{{$products[0]->categories->name ?? ''}}</a>
                    </li>
                    <li><a href="#">{{$products[0]->subcategory->name ?? ''}}</a>
                    </li>
                </ul>





<div class="container" style=" margin-top:50px;">

@if($products != '')   



@if(($products[0]->categories->id == 34 ) || ($products[0]->categories->id == 36 ) )
<div class="row">
        <div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form" action="{{route('realestat.filter')}}" method="get" role="form">
                            @csrf
                    <div class="form-group col-xs-2 col-md-2">
                            <label class="control-label" for="pref-perpage">{{__('index.area')}}  {{__('index.s_from')}}</label>
                            <input type="number" name="area_from" class="form-control input-sm" id="pref-perpage" min="0">
                        </div> <!-- form group [rows] -->

                        <div class="form-group col-xs-2 col-md-2">
                            <label class="control-label" for="pref-perpage">{{__('index.area')}}  {{__('index.s_to')}}</label>
                            <input type="number" name="area_to" class="form-control input-sm" id="pref-perpage" min='0'>
                        </div> <!-- form group [rows] -->

                        <div class="form-group col-xs-2 col-md-2">
                            <label class="control-label" for="pref-perpage">{{__('index.room')}}</label>
                            <input type="number" name="room_number" class="form-control input-sm" id="pref-perpage" min='0'>
                        </div> <!-- form group [rows] -->

                        <div class="form-group col-xs-2 col-md-2">
                            <label class="control-label" for="pref-perpage">{{__('index.bathroom')}}</label>
                            <input type="number" name="bathroom_number" class="form-control input-sm" id="pref-perpage" min='0'>
                        </div> <!-- form group [rows] -->



                        <div class="form-group col-xs-2 col-md-2">
                            <label class="control-label" for="pref-perpage">{{__('index.fur')}}/{{__('index.unfur')}}</label>
                            <select id="pref-perpage" name="furnished" class="form-control">
                            <option value="null"> {{__('index.fur')}}/{{__('index.unfur')}} </option>
                            <option value="yes"> {{__('index.fur')}}  </option>
                            <option value="no"> {{__('index.unfur')}}</option>
                            </select>                                
                        </div> <!-- form group [rows] -->
                        <div class="form-group col-xs-2 col-md-2">
                            <label class="control-label" for="pref-search">{{__('index.payment')}}</label>
                            <select id="pref-search" name="payment" class="form-control">
                            <option value="cash"> {{__('index.cash')}}  </option>
                            <option value="installments"> {{__('index.installments')}} </option>
                            <option value="both"> {{__("index.cash")}} / {{__("index.installments")}} </option>
                            </select> 
                        </div><!-- form group [search] -->
                      
                     <button class="btn btn-info">{{__("index.search_btn")}}</button>
                        
                    </form>
                 
                </div>
            </div>
        </div>    
        <!-- <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel">
            <span class="glyphicon glyphicon-cog"></span> Options
        </button> -->
	</div>


    <!-- end filter -->

@elseif($products[0]->categories->id == 27)
<div class="row">
        <div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form" action="{{route('realestat.filter')}}" method="get" role="form">
                            @csrf
                    <div class="form-group col-xs-2 col-md-2">
                            <label class="control-label" for="pref-perpage">{{__("index.car")}}</label>
                            <select name="car" class="form-control" id="car">
                                <option value="null">-- {{__("index.car")}} --</option>
                                @foreach($car as $c)
                                
                                <option value="{{$c->make}}"> {{$c->make}} </option>
                                @endforeach
                            </select>                        
                    </div> <!-- form group [rows] -->

                        <div class="form-group col-xs-2 col-md-2">
                            <label class="control-label" for="pref-perpage">{{__("index.model")}}</label>
                            <select name="model" class="form-control" id="model">
                             <option value="null">-- {{__("index.model")}} --</option>
                             </select>
                        </div> <!-- form group [rows] -->

                        <div class="form-group col-xs-2 col-md-2">
                            <label class="control-label" for="pref-perpage">{{__("index.year")}}</label>
                            <select name="year" class="form-control" id="year">
                             <option value="null">-- {{__("index.year")}} --</option>
                             </select>
                        </div> <!-- form group [rows] -->

                        <div class="form-group col-xs-2 col-md-2">
                            <label class="control-label" for="pref-perpage">{{__("index.color")}}</label>
                            <select name="color" class="form-control">
                                <option value="null">-- {{__("index.color")}} --</option>
                                <option value="Black"> Black </option>
                                <option value="White"> White </option>
                                <option value="blue"> blue </option>
                                <option value="begie"> begie </option>
                                <option value="red"> red </option>
                                <option value="Silver"> Silver </option>
                                <option value="Yellow"> Yellow </option>
                                <option value="Other"> Other </option>
                            </select>
                        </div> <!-- form group [rows] -->

                        <div class="form-group col-xs-2 col-md-2">
                            <label class="control-label" for="pref-perpage">{{__('index.transmission')}}</label>
                            <select name="transmission_type" class="form-control">
                                        <option value="null">-- {{__('index.transmission')}} --</option>
                                        <option value="Manual"> {{__("index.manual")}} </option>
                                        <option value="Automatic"> {{__("index.auto")}} </option>
                            </select>
                        </div> <!-- form group [rows] -->



                        <div class="form-group col-xs-2 col-md-2">
                            <label class="control-label" for="pref-perpage">{{__("index.condition")}}</label>
                            <select name="condition_type" class="form-control">
                                <option value="null">-- {{__("index.condition")}} --</option>
                                <option value="New"> {{__("index.new")}} </option>
                                <option value="Used"> {{__("index.used")}} </option>
                            </select>           
                        </div> <!-- form group [rows] -->
                        <div class="form-group col-xs-2 col-md-2">
                        <label class="control-label" for="pref-perpage">{{__("index.kilos")}}</label>

                        <select name="kilos" class="form-control">
                            <option value="null">-- {{__("index.kilos")}} --</option>
                            <option value=" 0 - 9999 "> 0 - 9999 </option>
                            <option value="10000 - 19999"> 10000 - 19999 </option>
                            <option value="20000 - 29999"> 20000 - 29999 </option>
                            <option value="3 - 39999"> 3 - 39999 </option>
                            <option value="40000 - 49999"> 40000 - 49999 </option>
                            <option value="50000 - 59999"> 50000 - 59999 </option>
                            <option value="60000 - 69999"> 60000 - 69999 </option>
                            <option value="70000 - 79999"> 70000 - 79999 </option>
                            <option value="both"> 80000 - 89999 </option>
                            <option value="90000 - 99999"> 90000 - 99999 </option>
                            <option value="100000 - 119999"> 100000 - 119999 </option>
                            <option value="both"> 120000 - 139999 </option>
                            <option value="140000 - 159999"> 140000 - 159999 </option>
                            <option value="160000 - 179999"> 160000 - 179999 </option>
                            <option value="180000 - 199999"> 180000 - 199999 </option>
                            <option value="more than 200000"> > 200000 </option>
                        </select>
                        </div> <!-- form group [rows] -->


                        <div class="form-group col-xs-2 col-md-2">
                            <label class="control-label" for="pref-search">{{__("index.payment")}}</label>
                            <select id="pref-search" name="payment" class="form-control">
                            <option value="null">{{__("index.payment")}} </option>
                            <option value="cash"> {{__("index.cash")}}  </option>
                            <option value="installments">  {{__("index.cash")}} </option>
                            <option value="both"> {{__("index.cash")}} / {{__("index.installments")}} </option>
                            </select> 
                        </div><!-- form group [search] -->
                        <div class="form-group col-xs-12 col-md-12">
                        <button class="btn btn-info">Filter</button>
                        
                        </form>
                     </div>
                 
                </div>
                
            </div>
          
        </div>    
        <!-- <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel">
            <span class="glyphicon glyphicon-cog"></span> Options
        </button> -->
      
	</div>


    <!-- end filter -->
@elseif($products[0]->categories->id == 4)
<div class="row">
        <div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form" action="{{route('realestat.filter')}}" method="get" role="form">
                            @csrf
                    

                       

                        <div class="form-group col-xs-4 col-md-4">
                            <label class="control-label" for="pref-perpage">{{__('index.warranty')}}</label>
                            <select name="warranty" class="form-control">
                                        <option value="null">-- {{__('index.warranty')}} --</option>
                                        <option value="Yes"> {{__("index.yes")}} </option>
                                        <option value="No"> {{__("index.no")}} </option>
                            </select>
                        </div> <!-- form group [rows] -->



                        <div class="form-group col-xs-4 col-md-4">
                            <label class="control-label" for="pref-perpage">{{__("index.condition")}}</label>
                            <select name="condition_type" class="form-control">
                                <option value="null">-- {{__("index.condition")}} --</option>
                                <option value="New"> {{__("index.new")}} </option>
                                <option value="Used"> {{__("index.used")}} </option>
                            </select>           
                        </div> <!-- form group [rows] -->
                        


                        <div class="form-group col-xs-4 col-md-4">
                            <label class="control-label" for="pref-search">{{__("index.payment")}}</label>
                            <select id="pref-search" name="payment" class="form-control">
                            <option value="null">{{__("index.payment")}} </option>
                            <option value="cash"> {{__("index.cash")}}  </option>
                            <option value="installments">  {{__("index.installments")}} </option>
                            <option value="both"> {{__("index.cash")}} / {{__("index.installments")}} </option>
                            </select> 
                        </div><!-- form group [search] -->
                        <div class="form-group col-xs-12 col-md-12">
                        <button class="btn btn-info">{{__("index.search_btn")}}</button>
                        
                        </form>
                     </div>
                 
                </div>
                
            </div>
          
        </div>    
        <!-- <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel">
            <span class="glyphicon glyphicon-cog"></span> Options
        </button> -->
      
	</div>


    <!-- end filter -->
@endif

           

           

            <div class="row">

            <div class="col-md-3">



             

                    
               
<div>
<div class="layout ant-layout" id="components-layout-demo-top">
<div class="ant-layout-content" style="padding: 0px 10px;">
<div class="ant-layout ant-layout-has-sider" style="padding: 24px 0px;">
<div class="ant-layout-sider ant-layout-sider-dark" style="flex: 0 0 100%; max-width: 100%; min-width: 100%; width: 100%;">
<div class="ant-layout-sider-children">
<ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">
<!-- <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 10px;" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
<h5 style="color: #464646;"> {{__('index.s_product_feature')}}</h5>  -->

<!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->
</li>
<form action="{{route('sub.products', $products[0]->subcategory_id)}}" method="GET">
<ul  class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="display: block;">
            <!-- <div class="sidebar-box"id="multiCollapseExample1">  
                    <ul class="checkbox-list">
                                <form action="{{route('sub.products', $products[0]->subcategory->id ?? '' )}}" method="GET"> 
                                    @csrf
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" name="feature[]" value="new" class="i-check" >{{__('index.s_new')}} <small>(50)</small>
                                        </label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" name="feature[]" value="on_sale" class="i-check">{{__('index.s_onsale')}} <small>(70)</small>
                                        </label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" name="feature[]" value="best_rated" class="i-check">{{__('index.s_rated')}} <small>(32)</small>
                                        </label>
                                    </li>
                                    

                              
                    </ul>
            </div>                                -->
                 <!-- by price -->
                    <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">
                                <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">
                                <h5 style="color: #464646;"> {{__('index.s_price')}}</h5> 
                            
                                <!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->
                                </li>

                                <div class="sidebar-box"id="multiCollapseExample2">

                                
                                    <div class="form-group">    
                                    
                                    <input type="number" class="form-control" name="min" min='0' placeholder="{{__('index.s_from')}}">
                                    </div>
                                        <div class="form-group">                               
                                        <input type="number"  class="form-control" name="max" min='0' placeholder="{{__('index.s_to')}}">
                                        </div>
                                                                  
                                     
                                </div>
                    </ul>

               
               
                <!-- by city -->
                 <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">
                                        <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;" data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                        <h5 style="color: #464646;"> {{__('index.s_city')}}</h5> 
                                    
                                        <!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->
                                        </li>
                                        <div class="sidebar-box"id="multiCollapseExample4">
                                        
                                        <ul class="checkbox-list">
                                                   <?php if(session()->get('my_country') == '1') {
                                                      $allcities = $egy_cities;
                                                      }else {
                                                      $allcities = $sa_cities;
                                                      
                                                      } 
                                                      
                                                      ?>
                                                   @foreach($allcities as $c)
                                                   <li class="checkbox">
                                                      <label>
                                                      <input type="checkbox" name="city[]" value="{{$c->id}}" class="i-check">{{$c->city}} <small></small>
                                                      </label>
                                                   </li>
                                                   @endforeach
                                                </ul>
                                            
                                        </div>
                                       
                </ul>

                <button class="btn btn-primary secondNavButtons" style="width: 100%;"><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> {{__('index.search_btn')}}</a> 
                                                            </button>                
                                            </form>

   
    
    </ul>
        <!-- button search -->
     <!-- <button class="btn btn-primary secondNavButtons" style="

                width: 100%;

            "><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> search</a> 
    </button> -->

             </ul>    </div></div> </div></div></div></div>





</div>


                <div class="col-md-9">

                    <!-- <div class="row">

                        <div class="col-md-3">

                            <div class="product-sort">

                                <span class="product-sort-selected">sort by <b>Price</b></span>

                                <a href="#" class="product-sort-order fa fa-angle-down"></a>

                                <ul>

                                    <li><a href="#">sort by Name</a>

                                    </li>

                                    <li><a href="#">sort by Date</a>

                                    </li>

                                    <li><a href="#">sort by Popularity</a>

                                    </li>

                                    <li><a href="#">sort by Rating</a>

                                    </li>

                                </ul>

                            </div>

                        </div>

                        

                    </div> -->

                    <div class="row row-wrap">

    






                      

                    @foreach($products as $product)
@if($product->approved == 1)
                        <div class="col-md-4">
                      
                        <a href="{{route('product.details', $product->slug)}}">
                        <div class="product-thumb">
                        <header class="product-header">
                        <form method="post" action="{{route('add.favorites')}}">
                                @csrf 
                                <input type="hidden" name="product_id" value="{{$product->id}}">  

                                <button class="btn fav" type="submit"><i class="fa fa-heart"></i> </button>
                        </form>    
                        <img src="{{$product->main_image_url}}" alt="Image Alternative text" title="{{$product->name}}" style="height: 200px;" />
                        </header>
                        <div class="product-inner">
                        <ul class="icon-group icon-list-rating" title="{{ number_format($product->averageRating)}}/5 rating">
                            
                            <?php echo str_repeat('<li><i class="fa fa-star "></i></li>', number_format($product->averageRating)) ?> 
                            <?php echo str_repeat('<span class="fa fa-star unchecked"></span>', 5 - number_format($product->averageRating)) ?> 
    
                        </ul>
                            <h5 class="product-title">{{$product->name}}</h5>
                                        <div class="product-desciption"><span class="item-location"><i class="fa fa-map-marker"></i> {{$product->city->city ?? ''}}</span>   <i class="fa fa-clock-o"></i> <span>{{date_format($product->created_at,'d M Y')}}</span>
                                        <br> 
                                        </div>
                            <!-- <span class="info-row">
										<span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="" data-original-title="Private">
											
										</span>&nbsp;
										<span class="date"><i class=" fa fa-clock-o"></i> {{date_format($product->created_at,'d M Y')}} </span>
																					<span class="category">
												<i class="fa fa-list-alt"></i>&nbsp;
												<a href="{{route('category.sub', $product->categories->id)}}" class="info-link">{{$product->categories->name}}</a>
											</span>
																				<span class="item-location">
											<i class="fa fa-user"></i>&nbsp;
										<a href="{{route('shops2', $product->id)}}" class="info-link">{{$product->user->name}}</a> 
										</span>
									</span> -->

                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">{{$product->price}} {{$product->country->currency}}</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <!-- <li>
                                    <form method="post" action="#">
                                    @csrf
                                    <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i>  </button>
                                    <input type="hidden" name="slug" value="{{$product->slug}}">
                                    <input type="hidden" name="qty" value="1">
                                </form>   
                                    </li>
                                    @auth
                                <li>
                                <form method="post" action="{{route('add.favorites')}}">
                                    @csrf
                                    <button class="btn" type="submit"><i class="fa fa-heart"></i> </button>
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    
                                    
                                </form>   
                                </li>
                                @endauth -->
                                <li><a href="Product-details/{{$product->slug}}" class="btn btn-sm chat"  style="
                                color: #626262;border: solid 1px #fdeb18;"><i class="fa fa-comment" style=" color: #fdeb18;"></i> {{__('index.chat')}}</a>
                                    <a href="tel:{{$product->user->phone ?? null}}" class="btn btn-sm call" style="
                                color: #626262; border: solid 1px #73b902;"><i class="fa fa-phone"style="    color: #73b902;"></i> {{__('index.call')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div></a>                        </div>
@endif
                        @endforeach





                    </div>


                    {{ $products->appends(Request::except('token'))->links() }} 
                    <?php   //echo $products->render(); ?>

                    <!-- <ul class="pagination">

                        <li class="prev disabled">

                            <a href="#"></a>

                        </li>

                        <li class="active"><a href="#">1</a>

                        </li>

                        <li><a href="#">2</a>

                        </li>

                        <li><a href="#">3</a>

                        </li>

                        <li><a href="#">4</a>

                        </li>

                        <li><a href="#">5</a>

                        </li>

                        <li class="next">

                            <a href="#"></a>

                        </li>

                    </ul> -->

                    <div class="gap"></div>

                </div>

            </div>

          
            @else
    <h2 class="text-center">No Items</h2>
 @endif

        </div>

<script>

$(document).ready(function(){
 $('#car').change(function(){
  $("#model").empty();
  var car = $( "#car" ).find(":selected").text();
//alert(car);
       	$.ajax({
		type: "get",
		url: "/getModel",
		data:{ _token:'<?php echo csrf_token() ?>', 
		      car: car,
		},
    success: function(response){



var len = 0;

if(response['data'] != null){

  len = response['data'].length;

}



if(len > 0){

  // Read data and create <option >

  for(var i=0; i<len; i++){



    var id = response['data'][i].id;

    var model = response['data'][i].model;
    var year = response['data'][i].year;


    var option = "<option value='"+model+"'>"+model +"</option>"; 
    var yearOption= "<option value='"+year+"'>"+ year +"</option>"; 

  



    $("#model").append(option); 
   $("#year").append(yearOption);

  }

}



}
		});
});
});

</script>



@stop