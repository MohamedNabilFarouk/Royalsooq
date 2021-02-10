@extends('layouts.app')

@section('content')

<div class="container">

<ul class="breadcrumb">
                    <li><a href="{{url('/')}}">{{__('index.home')}}</a>
                    </li>
                    <li><a href="#">{{__('index.all_cat')}}</a>
                    </li>
                </ul>
        
            <div class="row">



                



                

                

                 <!-- free Section -->

                 <div class="col-md-12">

                    <h2 class="text-center" style="padding:5%">{{__('index.freead_cat')}}</h2>

                    <div class="row row-wrap">

                        @foreach($freeproduct_cat as $c)



                        <div class="col-md-3">

                            <div class="product-thumb category-item" style='padding: 40px;border: 2px solid #025D8C;color: #025D8C;background-color: white;overflow: hidden;position: relative;'>



                                <i class="fa fa-mobile fa-4x" aria-hidden="true"></i>

                                <a href="{{route('category.sub', $c->id)}}">  <h5 style="color: #025D8C;">{{$c->name}} </h5></a>

                                <div class="sidebar-box" style="display:none;position: absolute;top: 0;right: 0;left: 0;bottom: 0;margin-bottom: 0px;padding: 15px 10px;">

                                    <div style="display: flex;justify-content: space-between;">

                                        <div>

                                        <a href="{{route('category.sub', $c->id)}}"> <h5> <i class="fa fa-tablet text-primary" aria-hidden="true"></i> {{$c->name}}</h5></a>

                                        </div>

                                        <div>

                                        <a href="{{route('category.sub', $c->id)}}"><h6 style="cursor: pointer;">{{__('index.view_all')}}</h6></a>

                                        </div>

                                    </div>

                                    

                                    <hr style="margin-top: 0px;">

                                    <ul class="tags-list">

                                    @foreach($c->subcategory as $s)

                                        <li><a href="#">{{$s->name}}</a>

                                        </li>

                                        @endforeach                               

                                    </ul>

                                </div>



                            </div>

                            

                            

                        </div>



                      @endforeach

                        

                    </div>

                    

                </div>

 

                

                  <!-- sponsored Section -->



                   <div class="col-md-12">

                    <h2 class="text-center" style="padding:5%">{{__('index.sponsored_cat')}} </h2>

                    <div class="row row-wrap">

                        @foreach($sponsoredproduct_cat as $c)



                        <div class="col-md-3">

                            <div class="product-thumb category-item" style='padding: 40px;border: 2px solid #025D8C;color: #025D8C;background-color: white;overflow: hidden;position: relative;'>



                                <i class="fa fa-mobile fa-4x" aria-hidden="true"></i>

                                <a href="{{route('category.sub', $c->id)}}">  <h5 style="color: #025D8C;">{{$c->name}} </h5></a>

                                <div class="sidebar-box" style="display:none;position: absolute;top: 0;right: 0;left: 0;bottom: 0;margin-bottom: 0px;padding: 15px 10px;">

                                    <div style="display: flex;justify-content: space-between;">

                                        <div>

                                        <a href="{{route('category.sub', $c->id)}}"> <h5> <i class="fa fa-tablet text-primary" aria-hidden="true"></i> {{$c->name}}</h5></a>

                                        </div>

                                        <div>

                                        <a href="{{route('category.sub', $c->id)}}"><h6 style="cursor: pointer;">{{__('index.view_all')}}</h6></a>

                                        </div>

                                    </div>

                                    

                                    <hr style="margin-top: 0px;">

                                    <ul class="tags-list">

                                    @foreach($c->subcategory as $s)

                                        <li><a href="#">{{$s->name}}</a>

                                        </li>

                                        @endforeach                               

                                    </ul>

                                </div>



                            </div>

                            

                            

                        </div>



                      @endforeach

                        

                    </div>

                    

                </div>





                  <!-- services Section -->



                   <div class="col-md-12">

                    <h2 class="text-center" style="padding:5%">{{__('index.services_cat')}}</h2>

                    <div class="row row-wrap">

                        @foreach($services_cat as $c)



                        <div class="col-md-3">

                            <div class="product-thumb category-item" style='padding: 40px;border: 2px solid #025D8C;color: #025D8C;background-color: white;overflow: hidden;position: relative;'>



                                <i class="fa fa-mobile fa-4x" aria-hidden="true"></i>

                                <h5 style="color: #025D8C;"> {{$c->name}} </h5>

                                <div class="sidebar-box" style="display:none;position: absolute;top: 0;right: 0;left: 0;bottom: 0;margin-bottom: 0px;padding: 15px 10px;">

                                    <div style="display: flex;justify-content: space-between;">

                                        <div>

                                            <h5> <i class="fa fa-tablet text-primary" aria-hidden="true"></i> {{$c->name}}</h5>

                                        </div>

                                        <div>

                                            <h6 style="cursor: pointer;">{{__('index.view_all')}}</h6>

                                        </div>

                                    </div>

                                    

                                    <hr style="margin-top: 0px;">

                                    <ul class="tags-list">

                                    @foreach($c->subcategory as $s)

                                        <li><a href="#">{{$s->name}}</a>

                                        </li>

                                        @endforeach                               

                                    </ul>

                                </div>



                            </div>

                            

                            

                        </div>



                      @endforeach

                        

                    </div>

                    

                </div>





                

            </div>



        </div>





        <script>



$('.category-item').hover(function(){

    

    $(this).find('.sidebar-box').slideDown();

    

});



$('.category-item').mouseleave(function(){

    $('.sidebar-box').slideUp();

})





</script>





@endsection



