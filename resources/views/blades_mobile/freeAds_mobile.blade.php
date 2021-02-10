@extends('layouts_mobile.app')



@section('content')
<style>
#dvPreview > img {

width:50% !important;

/* margin:.5px; */

}



    .image-upload > input



    {



        display: none;



    }







    .image-upload img



    {



        width: 80px;



        cursor: pointer;



    }
    .danger{
        color:red;
    }
</style>

<form action="{{route('free.ads.store')}}" method="post" id="myform" enctype="multipart/form-data">

<!-- Content  -->
<div id="content" class="noFooter">
    <!-- Content Wrap  -->
    <div class="content-wrap">
        <div class="heading-section mt-0">
            <div class="title col-secondary font-weight-normal">Ad Details</div>
        </div>




            @csrf
            <input type="hidden" name="lang" id='lang' value="{{App::getLocale()}}" >


        <div class="ad-section">
            <div class="ad-section-item">
                <div class="form-group">
                    <div class="form-line">
                        <label class="font-medium">{{__('index.category')}}</label>
                        @if($errors->has('category_id'))
                        <br>
                    <div class="danger">{{__('validation.required')}}</div>
                        @endif
                        <select class="form-control" size="1" name='category_id'  id='sel_cat'>
                            @foreach($freeproduct_cat as $c)

                            <option value="{{$c->id}}">{{$c->name}}</option>


                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <label class="font-medium">{{__('index.sub')}}</label>
                        @if($errors->has('subcategory_id'))
                        <br>
                    <div class="danger">{{__('validation.required')}}</div>
                        @endif
                        <select name='subcategory_id' id='sel_sub' class="form-control" size="1">
                           {{-- by ajax --}}
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <label class="font-medium">{{__('index.title')}}<span class="text-danger">*</span></label>
                        @if($errors->has('name'))
                        <br>
                    <div class="danger">{{__('validation.required')}}</div>
                        @endif
                        <input type='text' name="name" class="form-control" id='ip_name' placeholder="{{__('index.product')}} {{__('index.name')}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <label class="font-medium">{{__('index.des')}}<span class="text-danger">*</span></label>
                        @if($errors->has('description'))
                        <br>
                    <div class="danger">{{__('validation.required')}}</div>
                        @endif
                        <textarea name="description" id="ip_description" class="form-control"></textarea>
                    </div>
                </div>

                <div class="row row-wrap" style="display: flex;justify-content: center;" id="div"></div>


                      <!-- images -->




                      <label class="font-medium">{{__('index.photos')}}<span class="text-danger">*</span></label>
                      <small> {{__('index.more_image')}}</small>
                      @if($errors->has('image'))
                      <br>
                  <div class="danger">{{__('validation.required')}}</div>
                      @endif

                      <div class="row row-wrap" style="display: flex;justify-content: center;">





                            <div style="width: 50%;display: flex;justify-content: center;align-items: center;flex-wrap: wrap;">



                                <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">



                                    <label for="file-input">



                                    <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;">+</i>







                                    </label>



                                            <input type="file" name="image[]" id="file-input"  style="display: none;" multiple>

                                            <!-- <input type='file' id="imgInp" /> -->

                                </div>







                            </div>

                            <div id="dvPreview" style="width:200px;"></div>

































                    </div>





                    <!-- end images -->



                <div class="form-group">
                    <div class="form-line">
                        <label class="font-medium">{{__('index.city')}}</label>
                        @if($errors->has('city_id'))
                        <br>
                    <div class="danger">{{__('validation.required')}}</div>
                        @endif
                        <select class="form-control" size="1" name='city_id' id='ip_city'>
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



                <label class="font-medium d-block">{{__('index.price')}}</label>

                <div class="form-inline flex-nowrap">
                    <div class="form-group mb-0">
                        <label for="From" class="sr-only">{{__('index.price')}}</label>
                        @if($errors->has('price'))
                        <br>
                    <div class="danger">{{__('validation.required')}}</div>
                        @endif
                        <input type="number" name='price' class="form-control" id="ip_price" placeholder="{{__('index.price')}}" required>

                    </div>
                    <div class="form-check m-l-10">
                        <input class="form-check-input" type="checkbox" name="negotiable" value="1" id="priceCheck">
                        <label class="form-check-label" for="priceCheck">
                            {{__('index.negotiable')}}
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-line">
                        <label class="font-medium">{{__('index.map_frame')}}</label>
                        <input type="text" name="map" class="form-control"  placeholder="{{__('index.map_frame')}}" >
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-line">
                        <label class="font-medium">{{__('index.vid_link')}}</label>
                        <input type="text" name="video" class="form-control"  placeholder="{{__('index.add')}} {{__('index.vid_link')}}" >
                    </div>
                </div>

            </div>
        </div>

        <div id="more">

        </div>



        <div class="text-center" style="margin:100px;">
            <input type="submit" name="submit" value="{{__('index.add')}}" style="background-color: #025D8C;border: 0px;padding: 5px 10px;color: white;border-radius: 5px;">

        </div>

    </div>
</div>
<!-- .Content  -->
</form>





<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"/>



    // <!-- Optional JavaScript -->



    // <!-- jQuery first, then Popper.js, then Bootstrap JS -->



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>















// <!--  ajax Script  -->







    <script type='text/javascript'>







    $(document).ready(function(){

      var selectedcat;

      var selectedcity;

      $("#preview").hide();

      // cat Change



    //   $('input[type=radio][name=category_id]').change(function(){

        $('#sel_cat').change(function(){

       selectedcat = $('#sel_cat:checked').val();

        //alert(selectedcat);
        $('#mysubcat').modal({
    show: true
  });

         $("#more").empty();

         $('#div').empty();

        // var cat = $( "#sel_cat:checked" ).val();
        var cat = $( "#sel_cat" ).val();





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



        //  var id = $('#sel_cat:checked').val();
        var id = $(this).val();






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



                 var sub = '<div class="col-md-1 col-sm-6"> <div class="product-thumb category-item" style="padding: 0px;color: #025D8C;background-color: white;overflow: hidden;position: relative;"> <label> <input class="form-group" type="radio" name="subcategory_id" id="sel_sub2" value="'+id+'"  ><h4 style="color: #025D8C;">'+ name+'</h4> </label> </div> </div>';

                 var option = "<option value='"+id+"'>"+name+"</option>";







                 $("#sel_sub").append(option);
                //  $('#sub').append(sub);


               }



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





















    </script>
@stop
