@extends('layouts.app')

@section('content')

<div class="container">

            <div class="row">



                



                

                

                 <!-- sub_category Section -->

                 <div class="col-md-12">

                    <h2 class="text-center" style="padding:5%">{{$sub[0]->category->name}} {{__('index.category')}} </h2>

                    <div class="row row-wrap">

                        @foreach($sub as $s)



                        <div class="col-md-3">

                            <div class="product-thumb category-item" style='padding: 40px;border: 2px solid #025D8C;color: #025D8C;background-color: white;overflow: hidden;position: relative;'>



                            <a href="{{route('sub.products',$s->id)}}" style="color:#025d8c">  <img class="imge" src="{{asset('storage/'. $s->image)}}"  ></a>

                                <a href="{{route('sub.products',$s->id)}}"><h5 style="color: #025D8C;"> {{$s->name}} </h5></a>

                            </div>

                            

                            

                        </div>



                      @endforeach

                        

                    </div>

                    

                </div>

 

                

            </div>



        </div>











@endsection



