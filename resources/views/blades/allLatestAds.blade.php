



@extends('layouts.app')

@section('content')

<ul class="breadcrumb">

   <style>

      li.ant-menu-item.ant-menu-item-selected {

      background: #f0f2f5;

      }

      .btn-primary {

      margin-top: 6px;

      /*background: #fff;*/

      }

      button.btn.btn-primary.hov1:hover {

      background: red;

      }

   </style>

   <li><a href="/"> <i aria-hidden="true" class="fa fa-home"></i>{{__("index.home")}}</a>

                    </li>

   <li><a href="#"></a>

   </li>

   <!-- <li class="active">billy</li> -->

</ul>

<div class="container">

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

                                    <form action="{{route('latestAdsFilter')}}" method="GET">
                             

                                       <ul  class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="display: block;">

                                          <!-- <div class="sidebar-box"id="multiCollapseExample1">  

                                             @csrf

                                             <ul class="checkbox-list">

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

                                             </div>    

                                                                        -->

                                          <!-- SORT -->

                                          <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">

                                             <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">

                                                <h5 style="color: #464646;"> {{__('index.sort')}}</h5>

                                                <!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->

                                             </li>

                                             <div class="sidebar-box"id="multiCollapseExample1">

                                                @csrf

                                                <ul class="checkbox-list">

                                                   <li class="checkbox">

                                                      <label>

                                                      <input type="radio" name="sort_price" value="ASC" class="i-check" >{{__('index.price')}} :{{__('index.sort_price_asc')}}

                                                      </label>

                                                   </li>

                                                   <li class="checkbox">

                                                      <label>

                                                      <input type="radio" name="sort_price" value="DESC" class="i-check">{{__('index.price')}} :{{__('index.sort_price_desc')}}

                                                      </label>

                                                   </li>

                                                   <li class="checkbox">

                                                      <label>

                                                      <input type="radio" name="sort_latest" value="DESC" class="i-check">{{__('index.sort_latest')}} 

                                                      </label>

                                                   </li>

                                                   <li class="checkbox">

                                                      <label>

                                                      <input type="radio" name="sort_latest" value="ASC" class="i-check">{{__('index.sort_oldest')}}

                                                      </label>

                                                   </li>

                                                </ul>

                                             </div>

                                          </ul>

                                          <!-- by price -->

                                          <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">

                                             <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">

                                                <h5 style="color: #464646;"> {{__('index.s_price')}}</h5>

                                                <!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->

                                             </li>

                                             <div class="sidebar-box"id="multiCollapseExample2">

                                                <!-- <h5>Filter By Price</h5> -->

                                                <!-- <input type="text" id="price-slider"> -->

                                                <!-- <input type="hidden" name='search_request[]' value="{{$product}}">  -->

                                                <div class="form-group">    

                                                   <input type="number" class="form-control" name="min" min='0' placeholder="{{__('index.s_from')}}">

                                                </div>

                                                <div class="form-group">                               

                                                   <input type="number"  class="form-control" name="max" min='0' placeholder="{{__('index.s_to')}}">

                                                </div>

                                             </div>

                                          </ul>

                                          <label>

                                                      <!-- <input type="checkbox" name="category[]" id="myCheckbox" value="10000" class="i-check">click<small></small> -->

                                                      </label>

                                          <!-- by category -->

                                          <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">

                                             <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">

                                                <h5 style="color: #464646;"> {{__('index.s_cat')}}</h5>

                                                <!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->

                                             </li>

                                             <div class="sidebar-box" >

                                                <ul class="checkbox-list">

                                                   @foreach($allcat as $c)

                                                   <li class="checkbox">

                                                      <label>

                                                      <input type="checkbox" name="category[]" id="myCheckbox-{{$c->id}}" value="{{$c->id}}" >{{$c->name}} <small></small>

                                                      </label>

                                                   </li>



                                                   <script>



                                                               $('#myCheckbox-{{$c->id}}').click(function() {

                                                                  //alert('checked');

                                                                  var id = $(this).val();

                                                               //alert(id);

                                                               $.ajax({



                                                               url: 'getSubCategories/'+id,



                                                               type: 'get',



                                                               dataType: 'json',



                                                               success: function(response){





                                                               var len = 0;



                                                               if(response['data'] != null){



                                                                  len = response['data'].length;



                                                               }







                                                               if(len > 0){



                                                                  // Read data and create <option >



                                                                  for(var i=0; i<len; i++){







                                                                     var id = response['data'][i].id;



                                                                     var name = response['data'][i].name;



                                                                  var option= '<li class="checkbox"><label><input type="checkbox" name="subcategory[]"  value="'+id+'">'+name+' <small></small></label></li>';

                                                                  // var option = "<option value='"+id+"'>"+name+"</option>"; 







                                                                     $("#sub_ip").append(option); 



                                                                  }



                                                               }







                                                               }



                                                               }); //end ajax

                                                               });







                                                   </script>



                                                   @endforeach

                                                </ul>

                                             </div>

                                          </ul>





                                          <!-- by sub-cat -->

                                          <!-- <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">

                                                                                       <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">

                                                                                          <h5 style="color: #464646;"> sub category</h5>

                                                                                          

                                                                                       </li>

                                                                                       <div class="sidebar-box" >

                                                                                          <ul class="checkbox-list" id='sub_ip'>

                                                                                       

                                                                                            

                                                         

                                                                                          </ul>

                                                                                       </div>

                                          </ul> -->







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

                                             <button class="btn btn-primary secondNavButtons" style="width: 100%;"><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> {{__('index.search_btn')}}</a> 

                                             </button>                

                                    </form>

                                    </ul>

                                    </ul>

                                    <!-- button search -->

                                    <!-- <button class="btn btn-primary secondNavButtons" style="

                                       width: 100%;

                                       

                                       "><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> search</a> 

                                       </button> -->

                                 </ul>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

            <div class="col-md-9">

               

               <!-- search reasult -->
                   @if($product == '')

                  @if($product != '[]')

                  @foreach($product as $p)
               <div class="product-thumb product-thumb-horizontal">

                

                  @if($p->categories->service == '1')

                  <a  href="{{route('service.details',$p->id)}}">

                  @else

                  <a  href="{{route('product.details',$p->slug ?? $p)}}">

                     @endif 

                     <header class="product-header">

                        <img src=" @if($p->des){{asset('/storage/'.$p->image)}}@else {{$p->main_image_url}}@endif" alt="{{$p->name}}" title="Hot mixer" style="

                           max-height: 206px;

                           " />

                     </header>

                  </a>

                  <div class="product-inner">

                     <a  href="{{route('product.details',$p->slug ?? $p)}}">

                        <h2 class="product-title">{{$p->name}}</h2>

                     </a>

                     <div class="product-desciption"><span class="item-location"><i class="fa fa-map-marker"></i> @if($p->city){{$p->city->city}} @endif </span> <span>{{$p->city->country->name ??''}}</span> | <span>{{date_format($p->created_at,'d M Y')}}</span>

                        <br>

                        <span><i class="fa fa-th" aria-hidden="true"></i> <a href="#">{{$p->categories->name}}</a></span>

                     </div>

                     <!-- <div class="product-desciption">{{$p->description}}</div> -->

                     <div class="product-meta">
                                 @if($p->user)
                     @if(empty($p->user->image))

                    <a href="{{route('shops2', $p->user->id ?? '')}}"> <img id="userImg" class="userImg" src="{{asset('img/user_avatar.jpg') }}" alt="user">&nbsp;

                     @else

                      <img src="{{asset('/storage/'. $p->user->image)}}" class="seller-img" >

                     @endif

                     <h5 class="us">{{ $p->user->name}}</h5></a>
                     @endif 

                        <ul class="product-price-list">

                           <li><span class="product-price">{{$p->country->currency}} {{$p->price}}</span></li>

                           <!-- <li><span class="product-old-price">$221</span>

                              </li>

                              

                              <li><span class="product-save">Save 68%</span>

                              

                              </li> -->

                        </ul>

                              
                     </div>

                     <!-- <p class="product-location"><i class="fa fa-map-marker"></i> {{$p->city->city ?? ''}}</p> -->

                  </div>

                  <div class="product-inner" style="

                     display: inline-flex;">

                     <button type="Add favorate" class="btn btn-primary hov1 favorite" style="padding-right: 34px;padding-left: 23px;margin: 11px;border: 1px solid #e23838;border-color: #eb7474 !important;"  ><i class="fa fa-heart-o" style="c" aria-hidden='true' ></i> {{__('index.add_favorite')}}</button>

                     <button type="Add favorate" class="btn btn-primary hov2 call" style="padding-right: 55px;padding-left: 55px;margin: 11px;border: 1px solid red;border-color: #73b902 !important; "  ><i class="fa fa-phone" style="c" aria-hidden='true' ></i> {{__('index.call')}}</button>

                     <button  class="btn btn-primary hov3 chat" style="padding-right:39px;padding-left: 34px;margin: 11px;border: 1px solid red;border-color: #efc718 !important;color: red;"  ><i class="fa fa-comments" style="c" aria-hidden='true' ></i> {{__('index.chat')}} {{__('index.soon')}}</button>               

                  </div>

               </div>
               @endforeach
               <!-- <a href="{{route('store.search')}}" class='btn btn-success'>Save Search</a> -->

            </div>

            <!-- </a> -->

          

            @else 

            <h2 class="text-center">No Items</h2>

            @endif 

            <!-- end if for product -->

            @else

            @foreach($product as $p) 

            <div class="product-thumb product-thumb-horizontal">

               <a  href="{{route('product.details',$p->slug ?? $p)}}">

                  <header class="product-header">

                     <img src="{{asset($p->main_image_url)}}" alt="{{$p->name}}" alt="{{__('index.no_image')}}"  style="

                        max-height: 206px;

                        "/>

                  </header>

               </a>

               <div class="product-inner">

                  <a  href="{{route('product.details',$p->slug ?? $p)}}">

                     <h2 class="product-title">{{$p->name}}</h2>

                  </a>

                  <div class="product-desciption"><a href="{{route('productsByCity', $p->city->id ?? '1')}}"><span class="item-location"><i class="fa fa-map-marker"></i> @if($p->city){{$p->city->city}} @endif </span></a> <span>{{$p->city->country->name ??''}}</span> | <span>{{date_format($p->created_at,'d M Y')}}</span>

                     <br>

                     <a href="{{route('sub.products', $p->subcategory->id ?? '' )}}"> <span><i class="fa fa-th" aria-hidden="true"></i> {{$p->categories->name}}</span></a>

                  </div>

                  <!-- <div class="product-desciption">{{$p->description}}</div> -->

                  <div class="product-meta">

                     <ul class="product-price-list">

                        <li><span class="product-price">{{$p->country->currency}}  {{$p->price}}</span></li>

                        <!-- <li><span class="product-old-price">$221</span>

                           </li>

                           

                           <li><span class="product-save">Save 68%</span>

                           

                           </li> -->

                     </ul>
                          
                     @if($p->user)
                     @if(empty($p->user->image))

                    <a href="{{route('shops2', $p->user->id ?? '')}}"> <img id="userImg" class="userImg" src="{{asset('img/user_avatar.jpg') }}" alt="user">&nbsp;

                     @else

                      <img src="{{asset('/storage/'. $p->user->image)}}" class="seller-img" >

                     @endif

                     <h5>{{ $p->user->name}}</h5></a>
                     @endif
                  </div>

                  <!-- <p class="product-location"><i class="fa fa-map-marker"></i> {{$p->city->city ?? ''}}</p> -->

               </div>

               <div class="product-inner" style="

                  display: inline-flex;

                  ">

                  <button type="Add favorate" class="btn btn-primary hov1 favorite" style="background: white;background: white;/* padding-right: 12px; *//* padding-left: 55px; */margin: 11px;border: 1px solid red;border-color: #fd0101 !important; "  ><i class="fa fa-heart-o" style="c" aria-hidden='true' ></i> {{__('index.add_favorite')}}</button>

                  <button type="Add favorate" class="btn btn-primary hov2 call" style="background: white;padding-right: 55px;padding-left: 55px;margin: 11px;border: 1px solid red;border-color: #73b902 !important; "  ><i class="fa fa-phone" style="c" aria-hidden='true' ></i> {{__('index.call')}}</button>

                  <button  class="btn btn-primary hov3 chat" style="background: white;background: white;padding-right: 52px;padding-left: 40px;margin: 11px;border: 1px solid red;border-color: #efc718 !important;color: red;"  ><i class="fa fa-comments" style="c" aria-hidden='true' ></i> {{__('index.chat')}} {{__('index.soon')}}</button>

               </div>

            </div>

            <!-- </a> -->

            @endforeach
            <!-- <a href="{{route('store.search')}}" class='btn btn-success' style="margin-bottom:50px;">Save Search</a> -->
            @endif

            <!-- end -- if for product only -->

            <!-- end search result -->

            {{ $product->appends(Request::except('token'))->links() }} 

            <?php   //echo $product->render(); ?>

            

            <div class="gap"></div>

            

         </div>

</div>

</div>





@stop



