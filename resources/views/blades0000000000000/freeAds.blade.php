@extends('layouts.app')

@section('content')

<style>

        .image-upload > input

        {

            display: none;

        }



        .image-upload img

        {

            width: 80px;

            cursor: pointer;

        }





        /* ads position */





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

          outline: 2px solid #f00;

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

  <h1 class="text-center" style="background-color:#2a8fbd;color:white;width:50%;margin:50px auto 20px;border-radius: 20px;padding:15px 10px;">{{__('index.free_ad_page')}}  <a>{{__('index.free')}}</a></h1>



      <div class="col-md-12 ">

        <div class="">

                                <form action="{{route('free.ads.store')}}" method="post" enctype="multipart/form-data">

                              @csrf

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

                                                    </div>

                                            <div class="col-md-8 col-12 text-center ">

                                                  <input type="text" name="name" class="form-control"  placeholder="{{__('index.product')}} {{__('index.name')}}" required>

                                            </div>



                        </div>



                        


                        <div class="row row-wrap" style="display: flex;justify-content: center;">

                                                      <div class="col-md-2  col-12 text-center ">

                                                        <label>{{__('index.category')}}</label>

                                                      </div>

                                                      <div class="col-md-8 col-12 text-center ">

                                                      <select class="form-control" name='category_id'  id='sel_cat'>

                              <option value='0'>-- {{__('index.select')}} {{__('index.category')}} --</option>

                              @foreach($freeproduct_cat as $c)   

                              <option value="{{$c->id}}">{{$c->name}}</option>

                              @endforeach

                              </select>

                                                      </div>





                        </div>





                        <div class="row row-wrap" style="display: flex;justify-content: center;">

                                                      <div class="col-md-2  col-12 text-center ">

                                                        <label>{{__('index.sub')}}</label>

                                                      </div>

                                                      <div class="col-md-8 col-12 text-center ">



                                                      <select name='subcategory_id' class="form-control"  id='sel_sub'>

                                                          <option value='0'>-- {{__('index.select')}} {{__('index.sub')}} --</option>

                            

                                                        </select>

                                                      </div>



                        </div>                              




                        <div class="row row-wrap" style="display: flex;justify-content: center;">

<div class="col-md-2  col-12 text-center ">

  <label>{{__('index.city')}}</label>

</div>

<div class="col-md-8 col-12 text-center ">

<select class="form-control" name='city_id' >

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

                                                    </div>

                            



                                                    <div class="col-md-8 col-12 text-center ">

                                                      <input type="number" name="price" class="form-control " style="width: 25%;" placeholder="{{__('index.price')}}" required>



                                                      </div>

                        </div>









                        <div class="row row-wrap" style="display: flex;justify-content: center;">

                            

                                                    <div class="col-md-2  col-12 text-center ">

                                                        <label>{{__('index.des')}}</label>

                                                    </div>

                                                    <div class="col-md-8 col-12 text-center ">

                                                    <textarea name="description" class="form-control"></textarea>

                                                    </div>

                        </div>










                        <!-- images -->



                        <div class="row row-wrap" style="display: flex;justify-content: center;">

                            

                            <div class="col-md-2  col-12 text-center ">

                                <label style="display: block;">{{__('index.photos')}}</label>



                                <small> {{__('index.more_image')}}</small>

                            </div>



                            <div class="col-md-8 col-12 text-center ">

                                <div style="width: 50%;display: flex;justify-content: center;align-items: center;flex-wrap: wrap;">

                                    <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">

                                        <label for="file-input">

                                        <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>



                                        </label>

                                                <input type="file" name="image[]" id="file-input"  style="display: none;" multiple>

                                    </div>

                                    <!-- <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">

                                    <label for="file-input">

                                    <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>



                                        </label>

                                        <input type="file" name="image[]" id="file-input"   style="display: none;">

                                    </div>

                                    <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">

                                        <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>

                                        <input type="file"name="image[]"  style="display: none;">

                                    </div>

                                    <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">

                                        <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>

                                        <input type="file" name="image[]"  style="display: none;">

                                    </div>

                                    <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">

                                        <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>

                                        <input type="file" name="image[]"  style="display: none;">

                                    </div>

                                    <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">

                                        <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>

                                        <input type="file" name="image[]"  style="display: none;">

                                    </div>

                                    <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">

                                        <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>

                                        <input type="file" name="image[]"  style="display: none;">

                                    </div>

                                    <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">

                                        <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>

                                        <input type="file" name="image[]"  style="display: none;">

                                    </div> -->

                                </div>

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



                        <div class="row row-wrap" style="display: flex;justify-content: center;">

                            

                                                    <div class="col-md-2  col-12 text-center ">

                                                        <label> {{__('index.ad_position')}} </label>

                                                    </div>

                                                    <div class="col-md-8 col-12 text-center ">

                                <div class="col-md-4 mb-3">

                                                <label>

                                                <input type="radio" name="ad_position" value="Slider" checked>

                                                <img src="http://placehold.it/40x60/0bf/fff&text=A" style="width: 100px;">

                                                </label>





                            </div>





                            <div class="col-md-4 mb-3">

                                <label>

                                <input type="radio" name="ad_position" value="Weekly" checked>

                                <img src="http://placehold.it/40x60/0bf/fff&text=B" style="width: 100px;">

                                </label>





                            </div>













                            <div class="col-md-4 mb-3">

                                <label>

                                <input type="radio" name="ad_position" value="New Arrival" checked>

                                <img src="http://placehold.it/40x60/0bf/fff&text=C" style="width: 100px;">

                                </label>





                            </div>









                          





                                                    </div>

                        </div>









                        <div class="row row-wrap" style="display: flex;justify-content: center;">

                            

                                                    <div class="col-md-4  col-12 text-center " style="border-top: gray 1px solid; padding-top: 10px;width: 100%;">

                                                        <input type="submit" name="submit" value="{{__('index.add')}}" style="background-color: #025D8C;border: 0px;padding: 5px 10px;color: white;border-radius: 5px;">

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



      // cat Change

      $('#sel_cat').change(function(){



         // cat id

         var id = $(this).val();



         // Empty the dropdown

         $('#sel_sub').find('option').not(':first').remove();



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

               for(var i=0; i<len; i++){



                 var id = response['data'][i].id;

                 var name = response['data'][i].name;



                 var option = "<option value='"+id+"'>"+name+"</option>"; 



                 $("#sel_sub").append(option); 

               }

             }



           }

        });

      });



    });



    </script>





@stop





