@extends('layouts.app')

@section('content')

<div class="container">
            <div class="row">
                <div class="col-md-3">
                    <aside class="sidebar-left">
                        <!-- <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
                            <li class="active"><a href="#"><i class="fa fa-ticket"></i>All<span>35</span></a>
                            </li>
                            <li><a href="#"><i class="fa fa-cutlery"></i>Food & Drink<span>35</span></a>
                            </li>
                            <li><a href="#"><i class="fa fa-calendar"></i>Events<span>42</span></a>
                            </li>
                            <li><a href="#"><i class="fa fa-female"></i>Beauty<span>32</span></a>
                            </li>
                            <li><a href="#"><i class="fa fa-bolt"></i>Fitness<span>42</span></a>
                            </li>
                            <li><a href="#"><i class="fa fa-headphones"></i>Electronics<span>49</span></a>
                            </li>
                            <li><a href="#"><i class="fa fa-image"></i>Furniture<span>39</span></a>
                            </li>
                            <li><a href="#"><i class="fa fa-umbrella"></i>Fashion<span>38</span></a>
                            </li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i>Shopping<span>34</span></a>
                            </li>
                            <li><a href="#"><i class="fa fa-home"></i>Home & Graden<span>36</span></a>
                            </li>
                            <li><a href="#"><i class="fa fa-plane"></i>Travel<span>39</span></a>
                            </li>
                        </ul> -->

                        <div class="sidebar-box">
                            <h5>Product Feature</h5>
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
                               
                                <input type="submit" >
                            </form>
                            </ul>
                           
                        </div>
                        <div class="sidebar-box">
                            <h5>Filter By Price</h5>
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
                                <input type="submit" >
                            </form>
                        </div>
                        <div class="sidebar-box">
                            <h5>Product Feature</h5>
                            <ul class="checkbox-list">
                            <form action="{{url('/Filter')}}" method="GET"> 
                                @csrf
                                <li class="checkbox">
                                    <label>
                                        <input type="checkbox" name="feature[]" value="new" class="i-check">New <small>(50)</small>
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
                                <input type="submit" >
                            </form>
                            </ul>
                           
                        </div>
                        <div class="sidebar-box">
                            <h5>When</h5>
                            <ul class="checkbox-list">
                                <li class="checkbox">
                                    <label>
                                        <input type="checkbox" class="i-check">This Week <small>(60)</small>
                                    </label>
                                </li>
                                <li class="checkbox">
                                    <label>
                                        <input type="checkbox" class="i-check">Next Week <small>(37)</small>
                                    </label>
                                </li>
                                <li class="checkbox">
                                    <label>
                                        <input type="checkbox" class="i-check">Later <small>(23)</small>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-box">
                            <h5>Location</h5>
                            <ul class="checkbox-list">
                                <li class="checkbox">
                                    <label>
                                        <input type="checkbox" class="i-check">All <small>(657)</small>
                                    </label>
                                </li>
                                <li class="checkbox">
                                    <label>
                                        <input type="checkbox" class="i-check">All Washington <small>(120)</small>
                                    </label>
                                </li>
                                <li class="checkbox">
                                    <label>
                                        <input type="checkbox" class="i-check">NoMa <small>(13)</small>
                                    </label>
                                </li>
                                <li class="checkbox">
                                    <label>
                                        <input type="checkbox" class="i-check">Chinatown <small>(32)</small>
                                    </label>
                                </li>
                                <li class="checkbox">
                                    <label>
                                        <input type="checkbox" class="i-check">Penn Quarter <small>(53)</small>
                                    </label>
                                </li>
                                <li class="checkbox">
                                    <label>
                                        <input type="checkbox" class="i-check">Adams Morgan <small>(21)</small>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </aside>

                </div>
                <div class="col-md-9">
                    <div class="row">
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
                    </div>

                    <!-- search reasult -->
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
                    </a>
                    @endforeach

@else 
    <h2 class="text-center">No Items</h2>
    @endif
                    <!-- end search result -->

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

        </div>


          
@stop