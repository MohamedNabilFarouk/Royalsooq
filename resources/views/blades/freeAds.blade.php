@extends('layouts.app')



@section('content')



<style>
    .danger{
        color:red;
    }

#dvPreview > img {

    width:50% !important;

    /* margin:.5px; */

}
.btn-info{
    font-size: x-large;
    font-family: myFirstFont;
  background: #ffd107;
  animation: mymove 5s infinite;
}
label{
 font-family: myFirstFont;
 font-size: 22px;

}

@keyframes mymove {.imageThumb
  from {background-color:#ffd107;}
  to {background-color: #2681aa;}
}

input[type="submit"] {
    font-family: myFirstFont;
    background-color: #025D8C;
    border: 0px;
    padding: 5px 10px;
    color: white;
    border-radius: 5px;
   padding: 2%;
    font-size: x-large;
    font-family: myFirstFont;
  background: #ffd107;
  animation: mymove 5s infinite;
}

@keyframes mymove {.imageThumb
  from {background-color:#ffd107;}
  to {background-color: #2681aa;}
}
/* view image */
h1.text-center {
    background: #ffd107;
  animation: mymove 5s infinite;
}

@keyframes mymove {.imageThumb
  from {background-color:#ffd107;}
  to {background-color: #2681aa;}
}  
}
.imageThumb {
      max-height: max-content;
    border: 2px solid;
    padding: 1px;
    cursor: pointer;
    border: 2px solid #2a8fbd;
    border-radius: 6px;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
    display: block;
    background: #2a8fbd;
    border: 1px solid #fce11e;
    color: white;
    text-align: center;
    cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
h4 {
    margin-top: 0;
    margin-bottom: 0.5em;
    color: rgba(0, 0, 0, 0.85);
    font-weight: 500;
    cursor: pointer;
}

/* end view images */


        .image-upload > input



        {



            display: none;



        }







        .image-upload img



        {



            width: 80px;



            cursor: pointer;



        }









.modal-dialog.koz{
    width: 100%;}

        /* ads position */




span.pip {
    max-width: 20%;
}
.remove:hover {
    background: #e0000c;
    color: #fcfcfc;
}







        /* HIDE RADIO */



          [type=radio] {



          position: absolute;



          opacity: 0;



          width: 0;



          height: 0;



        }







        /* IMAGE STYLES */



        [type=radio] + img {



          cursor: pointer;



        }







        /* CHECKED STYLES */



        [type=radio]:checked + img {



outline: 2px solid #fce11d;
    background: #fce11d;



        }


        [type=radio]:checked + h4 {



outline: 2px solid #f00;



}


.modal-content.koz.nn {
    max-width: 100%;
}


</style>





<div class="container">



<ul class="breadcrumb">

                    <li><a href="{{url('/')}}">{{__('index.home')}}</a>

                    </li>

                    <li><a href="{{route('free.ads')}}">{{__('index.free_ad')}}</a>

                    </li>

                </ul>



	<div class="row">

  @guest
  <div class="alert alert-danger" id="" role="alert">
<h4 class="text-center"><a href="{{url('login')}}">{{__('index.log_first')}}</a></h4>
</div>
@endguest

  <h1 class="text-center" style="color:white;width:50%;margin:50px auto 20px;border-radius: 20px;padding:15px 10px;">{{__('index.free_ad_page')}}  <a>{{__('index.free')}}</a></h1>







      <div class="col-md-12 ">



        <div class="">



                                <form action="{{route('free.ads.store')}}" method="post" id="myform" enctype="multipart/form-data">



                              @csrf
                              <input type="hidden" name="lang" id='lang' value="{{App::getLocale()}}" >


                              <div class="col-md-12">



                              <div class="row row-wrap" style="display: flex;justify-content: center;">







                            <!-- <div class="col-md-2  col-12 text-center ">



                                <label>Contact me By</label>



                            </div>







                            <div class="col-md-8 col-12">



                                <input type="radio" name="contact" style="margin: 0 5px 0 0;">



                                <label>Both</label>



                                <input type="radio" name="contact" style="margin: 0 5px;">



                                <label>Phone</label>



                            </div> -->











                        </div>







                        <div class="row row-wrap" style="display: flex;justify-content: center;">



                                                    <div class="col-md-2  col-12 text-center ">



                                                        <label>{{__('index.title')}}</label>
                                                        @if($errors->has('name'))
                                                        <br>
                                                    <div class="danger">{{__('validation.required')}}</div>
                                                        @endif


                                                    </div>



                                            <div class="col-md-8 col-12 text-center ">



                                                  <input type="text" name="name" class="form-control" id='ip_name' placeholder="{{__('index.product')}} {{__('index.name')}}" required>



                                            </div>







                        </div>













                        <div class="row row-wrap" style="display: flex;justify-content: center;">



                                                      <div class="col-md-2  col-12 text-center ">
                                                   

                                                        <label>{{__('index.category')}}</label>
                                                        @if($errors->has('category_id'))
                                                        <br>
                                                    <div class="danger">{{__('validation.required')}}</div>
                                                        @endif

                                                      </div>



                                                      <div class="col-md-8 col-12 text-center ">


 <!-- Modal -->
  <div class="modal fade" id="mycat" role="dialog">
    <div class="modal-dialog koz">

      <!-- Modal content-->
      <div class="modal-content koz nn"style="
    left: 0px;
  
    top: 261px;
">
        <div class="modal-header">
          <button type="button" id='close-mycat' class="close" data-dismiss="modal">&times;</button>
          <!--<h4 class="modal-title">Modal Header</h4>-->
        </div>
        <div class="modal-body koz">
            <div class="row row-wrap" >



                @foreach($freeproduct_cat as $c)







                <div class="col-md-1 col-sm-6">



                    <div class="product-thumb category-item" style='padding: 0px;color: #025D8C;background-color: white;overflow: hidden;position: relative;'>







                    {{-- <img class="imge" src="{{asset('storage/'. $c->image)}}"  > --}}
                    <label >
                    <input class='form-group' type="radio" name="category_id" value="{{$c->id}}" id="sel_cat" checked>
                    <img class="imge" src="{{asset('storage/'. $c->image)}}"   id='cat_image_{{$c->id}}' >

                        {{-- <option value="{{$c->id}}"> <img class="imge" src="{{asset('storage/'. $c->image)}}"  > </option> --}}

                    <h5 class="kharaa" id='cat_name_{{$c->id}}' style="color: #025D8C;">{{$c->name}} </h5> 
                 
                    </label>










                    </div>











                </div>







              @endforeach







            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>


  <!-- Modal sub -->
  <div class="modal fade" id="mysubcat" role="dialog">
    <div class="modal-dialog koz">

      <!-- Modal content-->
      <div class="modal-content koz ss">
        <div class="modal-header">
          <button type="button" id='close-mysubcat' class="close" data-dismiss="modal">&times;</button>
          <!--<h4 class="modal-title">Modal Header</h4>-->
        </div>
        <div class="modal-body koz">
          
            <div class="row row-wrap" id='sub' >




            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" id='closeModal' data-dismiss="modal" style="
    background: #80b300;
    width: 100%;
    font-size: x-large;
    color: white;
">{{__('index.save')}}</button>
        </div>
      </div>

    </div>
  </div>



                                                      <div class="col-md-3 col-12 text-center ">

                                                      {{-- <select class="form-control" name='category_id'  id='sel_cat2'>



                              <option value='0' id='catego'>-- {{__('index.select')}} {{__('index.category')}} --</option>



                              @foreach($freeproduct_cat as $c)



                              <option value="{{$c->id}}">{{$c->name}}</option>



                              @endforeach



                              </select> --}}
                              </div>
                              <div class="col-md-5 col-12 text-center ">
                                <h3 id='category'></h3> <h3 id='subcategory'></h3>
                                <div id='catimg'></div>
                                
                                <a data-toggle="modal" data-target="#mycat">
                                        @if(App::getLocale() === 'en')  
                                        <img src="{{asset('img/logos/الانجليزي.png')}}" style="
    width: 50%;
">
                                      @else  
                              <img src="{{asset('img/logos/عربي.png')}}" style="
    width: 50%;
">
                                   @endif 
                              
                              </a>
                              </div>

                                                      </div>











                        </div>











                        {{-- <div class="row row-wrap" style="display: flex;justify-content: center;">



                                                      <div class="col-md-2  col-12 text-center ">
                                                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#mysubcat">{{__('index.sub')}}</button>



                                                        <label>{{__('index.sub')}}</label>

                                                        @if($errors->has('subcategory_id'))
                                                        <br>
                                                    <div class="danger">{{__('validation.required')}}</div>
                                                        @endif

                                                      </div>



                                                      <div class="col-md-8 col-12 text-center ">







                                                      <select name='subcategory_id' class="form-control"  id='sel_sub'>










                                                        </select>



                                                      </div>







                        </div> --}}









                        <div class="row row-wrap" style="display: flex;justify-content: center;">



<div class="col-md-2  col-12 text-center ">



  <label>{{__('index.city')}}</label>

  @if($errors->has('city'))
  <br>
<div class="danger">{{__('validation.required')}}</div>
  @endif

</div>



<div class="col-md-8 col-12 text-center ">



<select class="form-control" name='city_id' id='ip_city' >



<option value='0'>-- {{__('index.select')}} {{__('index.city')}} --</option>



<?php if(session()->get('my_country') == '1') {

$allcities = $egy_cities;

}else {

  $allcities = $sa_cities;



}



?>



@foreach($allcities as $c)



<option value="{{$c->id}}">{{$c->city}}</option>



@endforeach



</select>



</div>











</div>













                        <div class="row row-wrap" style="display: flex;justify-content: center;">







                                                    <div class="col-md-2  col-12 text-center ">



                                                        <label>{{__('index.price')}}</label>

                                                        @if($errors->has('price'))
                                                        <br>
                                                    <div class="danger">{{__('validation.required')}}</div>
                                                        @endif

                                                    </div>











                                                    <div class="col-md-3 col-12 text-center ">



                                                      <input  type="number" name="price" class="form-control " id='ip_price'  placeholder="{{__('index.price')}}" required>







                                                      </div>





                                                        <div class="col-md-3 col-12 text-right ">



                                                      <input type="checkbox" id="negotiable" name="negotiable" value="1">

                                                      </div>

                                                      <div class="col-md-2 col-12 text-left ">



                                                        <label for="vehicle1"> {{__('index.negotiable')}}</label>

                                                        </div>



                        </div>



















                        <div class="row row-wrap" style="display: flex;justify-content: center;">







                                                    <div class="col-md-2  col-12 text-center ">



                                                        <label>{{__('index.des')}}</label>

                                                        @if($errors->has('description'))
                                                        <br>
                                                    <div class="danger">{{__('validation.required')}}</div>
                                                        @endif

                                                    </div>



                                                    <div class="col-md-8 col-12 text-center ">



                                                    <textarea name="description" id="ip_description" class="form-control"></textarea>



                                                    </div>



                        </div>





                        <div class="row row-wrap" style="display: flex;justify-content: center;" id="div">





                        <!-- <div class="col-md-2  col-12 text-center" >

                                <label>{{__('index.ad_type')}}</label>

                            </div>

                            <div class="col-md-8 col-12 text-center ">

                                    <select name="ad_type" class="form-control">

                                      <option>-- {{__("index.ad_type")}}--</option>

                                      <option value="New"> {{__("index.employer")}}</option>

                                      <option value="Used"> {{__("index.seeker")}}</option>

                                    </select>

                            </div>







                            <div class="col-md-2  col-12 text-center" >

                                <label>{{__('index.condition')}}</label>

                            </div>

                            <div class="col-md-8 col-12 text-center ">

                                    <select name="condition_type" class="form-control">

                                      <option>-- {{__("index.condition")}}--</option> <option value="New"> {{__("index.new")}}</option>

                                      <option value="Used"> {{__("index.used")}}</option>

                                    </select>

                            </div> -->



                        </div>









                        <!-- images -->







                        <div class="row row-wrap" style="display: flex;justify-content: center;">







                            <div class="col-md-2  col-12 text-center ">



                                <label style="display: block;">{{__('index.photos')}}</label>


                                @if($errors->has('image'))
                                <br>
                            <div class="danger">{{__('validation.required')}}</div>
                                @endif




                                <small> {{__('index.more_image')}}</small>



                            </div>







                            <div class="col-md-8 col-12 text-center ">



                              <div style="width: 100%;display: flex;justify-content: center;align-items: center;flex-wrap: wrap;">



                                  {{-- <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;"> --}}



                                      <label for="files" style="
    border: 1px solid #2a8fbd;
    padding: 46px;
">



                                      <i class="fa fa-plus imageInput " aria-hidden="true" style="/* background-color: #2681aa; */border-radius: 50%;color: #2a8fbd;padding: 7px 10px; "></i>







                                      </label>


                                      <div class="field" align="left">


                                           <input type="file" id="files" name="image[]" multiple  style="display: none;"/>
                                      </div>

                                              {{-- <input type="file" name="image[]" id="file-input"  style="display: none;" multiple> --}}

                                              <!-- <input type='file' id="imgInp" /> -->

                                  {{-- </div> --}}


                                  {{-- <div class="field" align="left">

                                      <h3>Upload your images</h3>
<input type="file" id="files" name="files[]" multiple />
                                  </div> --}}




                              </div>

                              <div id="dvPreview" style="width:200px;"></div>

                          </div>































                        </div>





                        <!-- end images -->





                        <div class="row row-wrap" style="display: flex;justify-content: center;">



                                                    <div class="col-md-2  col-12 text-center ">



                                                        <label>{{__('index.vid_link')}}</label>



                                                    </div>



                                            <div class="col-md-8 col-12 text-center ">



                                                  <input type="text" name="video" class="form-control"  placeholder="{{__('index.add')}} {{__('index.vid_link')}}" >



                                            </div>







                        </div>









                        <div class="row row-wrap" style="display: flex;justify-content: center;">



<div class="col-md-2  col-12 text-center ">



    <label>{{__('index.map_view')}}</label>



</div>



<div class="col-md-8 col-12 text-center ">



<input type="text" name="map" class="form-control"  placeholder="{{__('index.map_frame')}}" >



</div>







</div>







                        <!--<div class="row row-wrap" style="display: flex;justify-content: center;">-->







                        <!--                            <div class="col-md-2  col-12 text-center ">-->



                        <!--                                <label> {{__('index.ad_position')}} </label>-->



                        <!--                            </div>-->



                            <!--                        <div class="col-md-8 col-12 text-center ">-->



                            <!--    <div class="col-md-4 mb-3">-->



                            <!--                    <label>-->



                            <!--                    <input type="radio" name="ad_position" value="Slider" checked>-->



                            <!--                    <img src="http://placehold.it/40x60/0bf/fff&text=A" style="width: 100px;">-->



                            <!--                    </label>-->











                            <!--</div>-->











                            <!--<div class="col-md-4 mb-3">-->



                            <!--    <label>-->



                            <!--    <input type="radio" name="ad_position" value="Weekly" checked>-->



                            <!--    <img src="http://placehold.it/40x60/0bf/fff&text=B" style="width: 100px;">-->



                            <!--    </label>-->











                            <!--</div>-->



























                            <!--<div class="col-md-4 mb-3">-->



                            <!--    <label>-->



                            <!--    <input type="radio" name="ad_position" value="New Arrival" checked>-->



                            <!--    <img src="http://placehold.it/40x60/0bf/fff&text=C" style="width: 100px;">-->



                            <!--    </label>-->











                            <!--</div>-->































                            <!--                        </div>-->



                        </div>

<!--

                        <div class="col-md-4 mb-3">

         <select name="car" class="form-control" id="car">

            <option>-- Car --</option>

            @foreach($car as $c)

            <option value="{{$c->make}}"> {{$c->make}} </option>

           @endforeach

         </select>

      </div>



      <div class="col-md-4 mb-3">

         <select name="model" class="form-control" id="model">

            <option>-- model --</option>

         </select>

      </div>

 -->







<hr>

<!-- attr -->





<!-- <div class="row row-wrap" style="display: flex;justify-content: center;">

   <div class="col-md-2  col-12 text-center "><label> Attribute </label></div>

   <div class="col-md-8 col-12 text-center ">

   <div class="col-md-4 mb-3">

         <select name="car" class="form-control" id="car">

            <option>-- Car --</option>

            @foreach($car as $c)

            <option value="{{$c->make}} {{$c->model}}  {{$c->year}}"> {{$c->make}}  {{$c->model}}  {{$c->year}}  </option>

           @endforeach

         </select>

      </div>







      <div class="col-md-3 mb-3">

         <select name="color" class="form-control">

            <option>-- Color --</option>

            <option value="Black"> Black  </option>

            <option value="White">  White </option>

            <option value="White">  blue </option>

            <option value="White">  begie </option>

            <option value="White">  red </option>

            <option value="White">  Silver </option>

            <option value="White">  Yellow </option>

            <option value="White">  Other </option>

         </select>

      </div>



      <div class="col-md-3 mb-3">

         <select name="transmission_type" class="form-control">

            <option>-- Manual / Automatic --</option>

            <option value="Manual"> Manual  </option>

            <option value="Automatic">  Automatic </option>

         </select>

      </div>



      <div class="col-md-2 mb-3">

         <select name="condition_type" class="form-control">

            <option>-- Condition --</option>

            <option value="New"> New  </option>

            <option value="Used">  Used </option>

         </select>

      </div>







   </div>



   <div class="col-md-3 mb-3">

      <select name="payment" class="form-control">

         <option>-- Payment Method --</option>

         <option value="cash"> Cash Only  </option>

         <option value="installments">  Installments Only </option>

         <option value="both"> Cash Or Installments </option>

      </select>

   </div>



   <div class="col-md-3 mb-3">

      <select name="kilos" class="form-control">

         <option>-- Kilometires --</option>

         <option value="cash"> 0 - 9999  </option>

         <option value="installments">  10000 - 19999 </option>

         <option value="both"> 20000 - 29999 </option>

         <option value="cash"> 3 - 39999  </option>

         <option value="installments">  40000 - 49999 </option>

         <option value="both"> 50000 - 59999 </option>

         <option value="cash"> 60000 - 69999  </option>

         <option value="installments">  70000 - 79999 </option>

         <option value="both"> 80000 - 89999 </option>

         <option value="cash"> 90000 - 99999  </option>

         <option value="installments">  100000 - 119999 </option>

         <option value="both"> 120000 - 139999 </option>

         <option value="both"> 140000 - 159999 </option>

         <option value="cash"> 160000 - 179999  </option>

         <option value="installments"> 180000 - 199999 </option>

         <option value="both">  > 200000 </option>

      </select>

   </div>



</div>      -->

<div id="more">

</div>

<!-- end attr -->

<hr>

 <!-- prview -->

 <div id='preview'>



    <div class="product-thumb product-thumb-horizontal">



            <header class="product-header">



              <img id="blah" src="#" alt="{{__('index.no_image')}}" />



            </header>



            <div class="product-inner">



                <ul class="icon-group icon-list-rating" title="3.2/5 rating">



                    <li><i class="fa fa-star"></i>



                    </li>



                    <li><i class="fa fa-star"></i>



                    </li>



                    <li><i class="fa fa-star"></i>



                    </li>



                    <li><i class="fa fa-star-half-empty"></i>



                    </li>



                    <li><i class="fa fa-star-o"></i>



                    </li>



                </ul>



                <h5 class="product-title" id="p_name">Name</h5>



                <div class="product-desciption"><span class="item-location" id='p_city'><i class="fa fa-map-marker"></i> City </span> | <span>Date</span>



                <br>



                {{-- <span ><i class="fa fa-th" aria-hidden="true" ></i><h5 id='p_cat'>  category name</h5></span> --}}



                </div>



                <div class="product-meta">



                    <ul class="product-price-list">



                        <li><span class="product-price" id='p_price'>Price</span>



                        </li>



                        <!-- <li><span class="product-old-price">$218</span>



                        </li>



                        <li><span class="product-save">Save 60%</span>



                        </li> -->



                    </ul>











                </div>







            </div>



            </div>





</div>

<!-- end preview -->





                        <div class="row row-wrap" style="display: flex;justify-content: center;">







                                                    <div class="col-md-2 col-12  text-center " style="border-top: gray 1px solid; padding-top: 10px;width: 100%;">



                                                      <input type="submit" name="submit" value="{{__('index.add')}}" style="">

                                                      
                                                    </div>

                                                    <div class="col-md-3  col-12 text-center " style="border-top: gray 1px solid; padding-top: 10px;width: 100%;">

                                                    <span  id="btn_prview" class="btn btn-success"  > {{__('index.preview')}}</span>

</div>

                                                </div>











                        </div>



              </form>





        </div>



      </div>



	</div>



</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"/>



    <!-- Optional JavaScript -->



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>















<!--  ajax Script  -->







    <script type='text/javascript'>







    $(document).ready(function(){

      var selectedcat;

      var selectedcity;

      $("#preview").hide();

      // cat Change


      $('input[type=radio][name=category_id]').change(function(){
      

        $('#close-mycat').click();
        $('#sub').empty();

       
       selectedcat = $('#sel_cat:checked').val();
       var cat_name = $('#cat_name_'+selectedcat).text();
       var cat_image = $('#cat_image_'+selectedcat).attr('src');
    
       $('#category').html(cat_name);
       $('#catimg').html('<img class="imge" src="'+cat_image+'" style="width: 30%;">');
      
        //alert(selectedcat);
        $('#mycat').modal({ show: false})
        $('#close-mycat').click()
      
      

        $('#mysubcat').modal({
    show: true
  });
 
 
         $("#more").empty();

         $('#div').empty();

        var cat = $( "#sel_cat:checked" ).val();





        if( (cat == 34) || (cat == 36 )){

          // alert('realstat');

          $("#more").append('<div class="row row-wrap" style="display: flex;justify-content: center;"> <div class="col-md-2 col-12 text-center "><label> {{__("index.attributes")}}</label></div> <div class="col-md-8 col-12 text-center "> <div class="col-md-3 mb-3"><input type="number" name="area" class="form-control" placeholder="{{__("index.area")}}" ></div> <div class="col-md-3 mb-3"><input type="number" name="room_number" class="form-control" placeholder="{{__("index.room")}}"></div> <div class="col-md-3 mb-3"><input type="number" name="bathroom_number" class="form-control" placeholder="{{__("index.bathroom")}}"></div> <div class="col-md-3 mb-3"> <select name="furnished" class="form-control"> <option value="null">-- {{__("index.unfur")}}/ {{__("index.fur")}} --</option> <option value="yes"> {{__("index.fur")}}</option> <option value="no"> {{__("index.unfur")}}</option> </select> </div> </div> <div class="col-md-3 mb-3"> <select name="payment" class="form-control"> <option value="null">-- {{__("index.payment")}} --</option> <option value="cash"> {{__("index.cash")}} </option> <option value="installments"> {{__("index.installments")}} </option> <option value="both"> {{__("index.cash")}} / {{__("index.installments")}}</option> </select> </div></div>');



        }else if(cat == 27){

          //  alert('cars');

         $("#more").append('<div class="row row-wrap" style="display: flex;justify-content: center;"> <div class="col-md-2 col-12 text-center "><label> {{__("index.attributes")}}</label></div> <div class="col-md-4 mb-3"> <select name="car" class="form-control" id="car"> <option>-- {{__("index.car")}}--</option> @foreach($car as $c) <option value="{{$c->make}}"> {{$c->make}} </option> @endforeach </select> </div> <div class="col-md-4 mb-3"> <select name="model" class="form-control" id="model"> <option>-- {{__("index.model")}}--</option> </select> </div></div><div class="col-md-2 mb-3"> <select name="year" class="form-control" id="year"> <option>-- {{__("index.year")}}--</option> </select></div></div> <div class="row row-wrap" style="display: flex;justify-content: center;"> <div class="col-md-12 col-12 text-center "> <div class="col-md-2 mb-3"> <select name="color" class="form-control"> <option>-- {{__("index.color")}}--</option> <option value="Black"> Black </option> <option value="White"> White </option> <option value="blue"> blue </option> <option value="begie"> begie </option> <option value="red"> red </option> <option value="Silver"> Silver </option> <option value="Yellow"> Yellow </option> <option value="Other"> Other </option> </select> </div> <div class="col-md-2 mb-3"> <select name="transmission_type" class="form-control"> <option>-- {{__("index.manual")}}/ {{__("index.auto")}}--</option> <option value="Manual"> {{__("index.manual")}}</option> <option value="Automatic"> {{__("index.auto")}}</option> </select> </div> <div class="col-md-2 mb-3"> <select name="condition_type" class="form-control"> <option>-- {{__("index.condition")}}--</option> <option value="New"> {{__("index.new")}}</option> <option value="Used"> {{__("index.used")}}</option> </select> </div> <div class="col-md-3 mb-3"> <select name="payment" class="form-control"> <option>-- {{__("index.payment")}} --</option> <option value="cash"> {{__("index.cash")}} </option> <option value="installments"> {{__("index.installments")}} </option> <option value="both"> {{__("index.cash")}} / {{__("index.installments")}} </option> </select> </div> <div class="col-md-3 mb-3"> <select name="kilos" class="form-control"> <option>-- {{__("index.kilos")}}--</option> <option value=" 0 - 9999 "> 0 - 9999 </option> <option value="10000 - 19999"> 10000 - 19999 </option> <option value="20000 - 29999"> 20000 - 29999 </option> <option value="3 - 39999"> 3 - 39999 </option> <option value="40000 - 49999"> 40000 - 49999 </option> <option value="50000 - 59999"> 50000 - 59999 </option> <option value="60000 - 69999"> 60000 - 69999 </option> <option value="70000 - 79999"> 70000 - 79999 </option> <option value="both"> 80000 - 89999 </option> <option value="90000 - 99999"> 90000 - 99999 </option> <option value="100000 - 119999"> 100000 - 119999 </option> <option value="both"> 120000 - 139999 </option> <option value="140000 - 159999"> 140000 - 159999 </option> <option value="160000 - 179999"> 160000 - 179999 </option> <option value="180000 - 199999"> 180000 - 199999 </option> <option value="more than 200000"> > 200000 </option> </select> </div> </div></div>');







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







        }else if (cat == 39 ){

          //job

          var jobOption = '<div class="col-md-2 col-12 text-center"><label>{{__("index.job_type")}}</label></div><div class="col-md-8 col-12 text-center "><select name="job_type" class="form-control"><option>-- {{__("index.job_type")}}--</option><option value="Employer"> {{__("index.employer")}}</option><option value="Job Seeker"> {{__("index.seeker")}}</option></select></div>';

          $("#div").append(jobOption);

        }else{

          //condition

          var conditionOption='<div class="col-md-2 col-12 text-center"><label>{{__("index.condition")}}</label></div><div class="col-md-8 col-12 text-center "><select name="condition_type" class="form-control"><option>-- {{__("index.condition")}}--</option><option value="New"> {{__("index.new")}}</option><option value="Used"> {{__("index.used")}}</option></select></div></div>'

          $("#div").append(conditionOption);

        }





         // cat id



         var id = $('#sel_cat:checked').val();







         // Empty the dropdown



         $('#sel_sub').find('option').not(':first').remove();
        
        //  $('#mysubcat').remove();
       

        //  $('#mysubcat').hide();

        // $('input[type=radio][name=subcategory_id]').change(function(){
        //     alert($('#sel_sub2:checked').val())
        // });

    



         // AJAX request



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

                var language = $('#lang').val();

               for(var i=0; i<len; i++){







                 var id = response['data'][i].id;



                 if(language === 'en'){

var name = response['data'][i].name;
}else{

var name = response['data'][i].name_ar;

}





                 var sub = '<li> <label> <input class="form-group" type="radio" name="subcategory_id" id="sel_sub2" value="'+id+'"  ><h4 id="sub_name_'+id+'" style="color: #025D8C;">'+ name+'</h4> </label> </li>';

                 var option = "<option value='"+id+"'>"+name+"</option>";



                  
                



                 $("#sel_sub").append(option);
                 $('#sub').append(sub);
                 console.log(sub);

               }
               $('input[type=radio][name=subcategory_id]').click(function(){
               var  selectedsub = $('#sel_sub2:checked').val();
              // console.log(selectedsub);
              var subcat_name = $('#sub_name_'+selectedsub).text();
              // console.log(subcat_name);
                 $('#subcategory').html(subcat_name);
               });
            
             }







           }

         
 

        }); //end ajax

      

      });

     
  



      $('#ip_city').change(function(){

          selectedcity = $('#ip_city').children("option:selected").text();

      });

        $('#btn_prview').click(function(){

         //alert(selectedcat);

          var ip_name= $('#ip_name').val();

            ip_description = $('#ip_description').val();

            ip_price = $('#ip_price').val();







                  $("#preview").show();





            $('#p_name').html(ip_name);

            $('#p_description').html(ip_description);

            $('#p_price').html(ip_price);

            $('#p_cat').html(selectedcat);

            $('#p_city').html(selectedcity)

      // alert(ip_name);

        });

       



        function readURL(input) {

  if (input.files && input.files[0]) {

    var reader = new FileReader();



    reader.onload = function(e) {

      $('#blah').attr('src', e.target.result);

    }



    reader.readAsDataURL(input.files[0]); // convert to base64 string

  }

}



$("#file-input").change(function() {

  readURL(this);

});





      });







      // view images

$(document).ready(function() {
if (window.File && window.FileList && window.FileReader) {
$("#files").on("change", function(e) {
var files = e.target.files,
  filesLength = files.length;
for (var i = 0; i < filesLength; i++) {
  var f = files[i]
  var fileReader = new FileReader();
  fileReader.onload = (function(e) {
    var file = e.target;
    $("<span class=\"pip\">" +
      "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
      "<br/><span class=\"remove\">Remove image</span>" +
      "</span>").insertAfter("#files");
    $(".remove").click(function(){
      $(this).parent(".pip").remove();
    });

    // Old code here
    /*$("<img></img>", {
      class: "imageThumb",
      src: e.target.result,
      title: file.name + " | Click to remove"
    }).insertAfter("#files").click(function(){$(this).remove();});*/

  });
  fileReader.readAsDataURL(f);
}
});
} else {
alert("Your browser doesn't support to File API")
}
});


// end view images











    </script>











@stop











