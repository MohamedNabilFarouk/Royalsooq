@extends('layouts.app')



@section('content')

<ul class="breadcrumb">

                    <li><a href="/">Home</a>

                    </li>

                    <li><a href="#">serach</a>

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
                        <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;">
                        <h5 style="color: #fff;"> Search By Product Feature</h5> 
                    
                        <!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->
                        </li>
                        <ul  class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="display: block;">
                                    <div class="sidebar-box">  
                                            <ul class="checkbox-list">
                                                        <form action="{{url('/Filter')}}" method="GET"> 
                                                            @csrf
                                                            <li class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="feature[]" value="new" class="i-check" required>New <small>(50)</small>
                                                                </label>
                                                            </li>
                                                            <li class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="feature[]" value="on_sale" class="i-check">On Sale <small>(70)</small>
                                                                </label>
                                                            </li>
                                                            <li class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="feature[]" value="best_rated" class="i-check">Best Rated <small>(32)</small>
                                                                </label>
                                                            </li>
                                                            <button class="btn btn-primary secondNavButtons" style="

                                                                    width: 100%;

                                                                "><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> search</a> </button>

                                                        </form>
                                            </ul>
                                    </div>                               
                                         <!-- by price -->
                                            <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">
                                                        <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;">
                                                        <h5 style="color: #fff;"> Search By Price</h5> 
                                                    
                                                        <!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->
                                                        </li>

                                                        <div class="sidebar-box">
                                                            <!-- <h5>Filter By Price</h5> -->
                                                            <!-- <input type="text" id="price-slider"> -->
                                                            <form action="{{url('/Filter')}}" method="GET"> 
                                                                @csrf
                                                                <!-- <input type="hidden" name='search_request[]' value="{{$product}}">  -->
                                                        
                                                            <div class="form-group">    
                                                            
                                                            <input type="number" class="form-control" name="min" min='0' placeholder="From">
                                                            </div>
                                                                <div class="form-group">                               
                                                                <input type="number"  class="form-control" name="max" min='0' placeholder="To">
                                                                </div>
                                                                <button class="btn btn-primary secondNavButtons" style="width: 100%;"><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> search</a> 
                                                                </button>                            
                                                                </form>
                                                        </div>
                                            </ul>

                                        <!-- by category -->
                                        <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">
                                                                <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;">
                                                                <h5 style="color: #fff;"> Search By Category</h5> 
                                                            
                                                                <!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->
                                                                </li>
                                                                <div class="sidebar-box">
                                                                
                                                                    <ul class="checkbox-list">
                                                                    <form action="{{url('/Filter')}}" method="GET"> 
                                                                        @csrf
                                                                        @foreach($allcat as $c)
                                                                        <li class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox" name="category[]" value="{{$c->id}}" class="i-check">{{$c->name}} <small></small>
                                                                            </label>
                                                                        </li>
                                                                        @endforeach
                                                                    
                                                                        <button class="btn btn-primary secondNavButtons" style="width: 100%;"><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> search</a> 
                                                                                    </button>                
                                                                    </form>
                                                                    </ul>
                                                                
                                                                </div>
                                        </ul>
                                        <!-- by city -->
                                         <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">
                                                                <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;">
                                                                <h5 style="color: #fff;"> Search By City</h5> 
                                                            
                                                                <!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->
                                                                </li>
                                                                <div class="sidebar-box">
                                                                
                                                                    <ul class="checkbox-list">
                                                                    <form action="{{url('/Filter')}}" method="GET"> 
                                                                        @csrf
                                                                        @foreach($allcities as $c)
                                                                        <li class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox" name="city[]" value="{{$c->id}}" class="i-check">{{$c->city}} <small></small>
                                                                            </label>
                                                                        </li>
                                                                        @endforeach
                                                                    
                                                                        <button class="btn btn-primary secondNavButtons" style="width: 100%;"><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> search</a> 
                                                                                    </button>                
                                                                    </form>
                                                                    </ul>
                                                                
                                                                </div>
                                        </ul>



                           
                            
                            </ul>
                                <!-- button search -->
                             <!-- <button class="btn btn-primary secondNavButtons" style="

                                        width: 100%;

                                    "><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> search</a> 
                            </button> -->

                                     </ul>    </div></div> <div class="ant-layout-content" style="padding: 0px 24px; min-height: 280px;"></div></div></div></div></div>





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

                                    <li><a href="#">sort by Ended Soon</a>

                                    </li>

                                    <li><a href="#">sort by Popularity</a>

                                    </li>

                                    <li><a href="#">sort by Location</a>

                                    </li>

                                </ul>

                            </div>

                        </div>

                        <div class="col-md-2 col-md-offset-7">

                            <div class="product-view pull-right">

                                <a class="fa fa-th-large" href="category-page-coupon.html"></a>

                                <a class="fa fa-list active" href="#"></a>

                            </div>

                        </div>

                    </div> -->



                    <!-- search reasult -->
@if($productonly == '')
        
        @if($product != '[]')



    @foreach($product as $p)

    @if($p->categories->service == '1')

                    <a class="product-thumb product-thumb-horizontal" href="{{route('service.details',$p->id)}}">

                    @else

                    <a class="product-thumb product-thumb-horizontal" href="{{route('product.details',$p->slug)}}">

                    @endif    

                        <header class="product-header">

                            <img src=" @if($p->des){{asset('/storage/'.$p->image)}}@else {{$p->main_image_url}}@endif" alt="{{$p->name}}" title="Hot mixer" />

                        </header>

                        <div class="product-inner">

                            <h5 class="product-title">{{$p->name}}</h5>

                            

                            <div class="product-desciption">{{$p->des ?? $p->description}}</div>

                            <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i></span>

                                <ul class="product-price-list">

                                    <li><span class="product-price">${{$p->price}}</span>

                                    </li>

                                    <li><span class="product-old-price">$221</span>

                                    </li>

                                    <li><span class="product-save">Save 68%</span>

                                    </li>

                                </ul>

                            </div>

                            <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>

                        </div>

                        

                         <div class="product-inner" style="

    display: inline-flex;

">

                            <input type="Call" class="btn btn-primary" value="Add favorate" style="

    background: white;    border-color: RED !important;

">

                            <input type="Chat soon" class="btn btn-primary" value="Call" style="

    margin-left: 8px;

    background: white;

    border-color: #6cc709 !important;

">

                            

                        

                            <div class="product-meta">

                             <input type="Add favorate" class="btn btn-primary" value="Chat soon" style="

    background: white; margin-left: 32px;

">

                            </div>

                          

                              

                          

                        </div>

                        

                        

                    </a>

                    @endforeach
                    
                     

@else 

    <h2 class="text-center">No Items</h2>

    @endif 
    <!-- end if for product -->
    
    
    @else

    @foreach($productonly as $p) 
    <a class="product-thumb product-thumb-horizontal" href="{{route('product.details',$p->slug)}}">  

    <header class="product-header">
        <img src="{{asset('/storage/'.$p->path)}}" alt="{{$p->name}}" title="Hot mixer" />


    </header>

    <div class="product-inner">

        <h5 class="product-title">{{$p->name}}</h5>

        

        <div class="product-desciption">{{$p->description}}</div>

        <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i></span>

            <ul class="product-price-list">

                <li><span class="product-price">${{$p->price}}</span>

                </li>

                <li><span class="product-old-price">$221</span>

                </li>

                <li><span class="product-save">Save 68%</span>

                </li>

            </ul>

        </div>

        <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>

    </div>

    

     <div class="product-inner" style="

display: inline-flex;

">

        <input type="Call" class="btn btn-primary" value="Add favorate" style="

background: white;    border-color: RED !important;

">

        <input type="Chat soon" class="btn btn-primary" value="Call" style="

margin-left: 8px;

background: white;

border-color: #6cc709 !important;

">

        

    

        <div class="product-meta">

         <input type="Add favorate" class="btn btn-primary" value="Chat soon" style="

background: white; margin-left: 32px;

">

        </div>

      

          

      

    </div>

    

    

</a>

@endforeach

    @endif
<!-- end -- if for product only -->
                    <!-- end search result -->


                    <?php  // echo $productonly->render(); ?>

                    <ul class="pagination">

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

                    </ul>

                    <div class="gap"></div>

                </div>

            </div>



        </div>





          

@stop