<?php $__env->startSection('content'); ?>


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

@keyframes  mymove {.imageThumb
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

@keyframes  mymove {.imageThumb
  from {background-color:#ffd107;}
  to {background-color: #2681aa;}
}
/* view image */
h1.text-center {
    background: #ffd107;
  animation: mymove 5s infinite;
}

@keyframes  mymove {.imageThumb
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

                    <li><a href="<?php echo e(url('/')); ?>">Home</a>

                    </li>

                    <li><a href="<?php echo e(route('free.ads')); ?>">Update Ads</a>

                    </li>

                </ul>



	<div class="row">



  <!-- <h1 class="text-center" style="background-color:#2a8fbd;color:white;width:50%;margin:50px auto 20px;border-radius: 20px;padding:15px 10px;">Nice To Post New Ads  <a>For FREE</a></h1> -->







      <div class="col-md-12 ">



        <div class="">



                    <form action="<?php echo e(route('free.ads.update',$ad->id)); ?>" method="post" enctype="multipart/form-data">



                    <?php echo e(method_field('PUT')); ?>


                              <?php echo csrf_field(); ?>


                              <input type="hidden" name="lang" id='lang' value="<?php echo e(App::getLocale()); ?>" >
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



                                                        <label>Title</label>



                                                    </div>



                                            <div class="col-md-8 col-12 text-center ">



                                                  <input type="text" name="name" class="form-control"   value="<?php echo e($ad->name); ?>"  >



                                            </div>







                        </div>





















                        <div class="row row-wrap" style="display: flex;justify-content: center;">



                            <div class="col-md-2  col-12 text-center ">


                              <label><?php echo e(__('index.category')); ?></label>
                              <?php if($errors->has('category_id')): ?>
                              <br>
                          <div class="danger"><?php echo e(__('validation.required')); ?></div>
                              <?php endif; ?>

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



<?php $__currentLoopData = $freeproduct_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>







<div class="col-md-1 col-sm-6">



<div class="product-thumb category-item" style='padding: 0px;color: #025D8C;background-color: white;overflow: hidden;position: relative;'>








<label >
<input class='form-group' type="radio" name="category_id" value="<?php echo e($c->id); ?>" id="sel_cat" checked>
<img class="imge" src="<?php echo e(asset('storage/'. $c->image)); ?>"   id='cat_image_<?php echo e($c->id); ?>' >



<h5 class="kharaa" id='cat_name_<?php echo e($c->id); ?>' style="color: #025D8C;"><?php echo e($c->name); ?> </h5>

</label>










</div>











</div>







<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>







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
"><?php echo e(__('index.save')); ?></button>
</div>
</div>

</div>
</div>



                            <div class="col-md-3 col-12 text-center ">

                            
    </div>
    <div class="col-md-5 col-12 text-center ">
      <h3 id='category'></h3> <h3 id='subcategory'></h3>
      <div id='catimg'></div>

      <a data-toggle="modal" data-target="#mycat">
              <?php if(App::getLocale() === 'en'): ?>
              <img src="<?php echo e(asset('img/logos/الانجليزي.png')); ?>" style="
width: 50%;
">
            <?php else: ?>
    <img src="<?php echo e(asset('img/logos/عربي.png')); ?>" style="
width: 50%;
">
         <?php endif; ?>

    </a>
    </div>

                            </div>











</div>






















                        <div class="row row-wrap" style="display: flex;justify-content: center;">



<div class="col-md-2  col-12 text-center ">



  <label>City</label>



</div>



<div class="col-md-8 col-12 text-center ">
<?php if(session()->get('my_country') == '1') {

$allcities = $egy_cities;

}else {

  $allcities = $sa_cities;



}



?>


<select class="form-control" name='city_id' >



<option value='<?php echo e($ad->city->id ?? ""); ?>'>-- <?php echo e($ad->city->city ?? ''); ?> --</option>



<?php $__currentLoopData = $allcities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



<option value="<?php echo e($c->id); ?>"><?php echo e($c->city); ?></option>



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



</select>



</div>











</div>

















                        <div class="row row-wrap" style="display: flex;justify-content: center;">







                                                    <div class="col-md-2  col-12 text-center ">



                                                        <label>Price</label>



                                                    </div>











                                                    <div class="col-md-8 col-12 text-center ">



                                                    <input type="number" name="price" value='<?php echo e($ad->price); ?>' class="form-control is-invalid" id="validationServerUsername33" placeholder="Price" >







                                                      </div>



                        </div>



















                        <div class="row row-wrap" style="display: flex;justify-content: center;">







                                                    <div class="col-md-2  col-12 text-center ">



                                                        <label>Description</label>



                                                    </div>



                                                    <div class="col-md-8 col-12 text-center ">



                                                    <textarea name="description" class="form-control is-valid" id="validationServer023"required><?php echo e($ad->description); ?></textarea>



                                                    </div>



                        </div>





                        <!-- images -->







                        <div class="row row-wrap" style="display: flex;justify-content: center;">







                            <div class="col-md-2  col-12 text-center ">



                                <label style="display: block;">Photos</label>







                                <small> Upload more images</small>



                            </div>







                            <div class="col-md-8 col-12 text-center ">






                                <div style="width: 50%;display: flex;justify-content: center;align-items: center;flex-wrap: wrap;">



                                    



                                        <label for="files">



                                        <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>







                                        </label>


                                        <div class="field" align="left">

                                          <input type="file" id="files" name="image[]" multiple  style="display: none;"/>
                                     </div>


                                                



                                    







                                </div>



<div class="col-md-8 col-12 text-center ">

  <?php if(count($ad->images) == 1): ?>
<img src="<?php echo e($ad->main_image_url); ?>" alt="Image Alternative text" id='image-<?php echo e($ad->images[0]->id); ?>' style="width:30%;" title="<?php echo e($ad->name); ?>" />

<a class="btn btn-default btn-close deleteProduct" onclick="event.preventDefault()" data-id="<?php echo e($ad->images[0]->id); ?>" id='btn-<?php echo e($ad->images[0]->id); ?>' data-token="<?php echo e(csrf_token()); ?>" style='border-radius: 50%;' >x</a>
<?php else: ?>




<?php $__currentLoopData = $ad->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<img src="<?php echo e(asset('storage/'. $i->path)); ?>" alt="Image Alternative text" id='image-<?php echo e($i->id); ?>' style="width:20%;" title="<?php echo e($ad->name); ?>" />
<a class="btn btn-default btn-close deleteProduct" onclick="event.preventDefault()" data-id="<?php echo e($i->id); ?>" id='btn-<?php echo e($i->id); ?>'  data-token="<?php echo e(csrf_token()); ?>" style='border-radius: 50%;' >x</a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php endif; ?>



</div>

<script>

$(".deleteProduct").click(function(){

var id = $(this).data("id");
$('#image-'+id).hide();
$('#btn-'+id).hide();
var token = $(this).data("token");
$.ajax(
{
url: "/deleteImage/"+id,
type: 'delete',
dataType: "JSON",
data: {
"id": id,
"_method": 'DELETE',
"_token": token,
},
success: function ()
{
console.log("it Work");
}
});

console.log("It failed");
});
</script>
                                

                                <div id="dvPreview" style="width:200px;"></div>

                            </div>































                        </div>







                        <!-- end images -->





                        <div class="row row-wrap" style="display: flex;justify-content: center;">



                                                    <div class="col-md-2  col-12 text-center ">



                                                        <label>Video Link</label>



                                                    </div>



                                            <div class="col-md-8 col-12 text-center ">



                                                  <input type="text" name="video" class="form-control"  placeholder="Add Video Link" >



                                            </div>







                        </div>











                        <div class="row row-wrap" style="display: flex;justify-content: center;">



<div class="col-md-2  col-12 text-center ">



    <label>Map View</label>



</div>



<div class="col-md-8 col-12 text-center ">



<input type="text" name="map" class="form-control" value="<?php echo e($ad->map); ?>"  placeholder="Add your map frame" >



</div>







</div>











                        <div class="row row-wrap" style="display: flex;justify-content: center;">







                                                    <div class="col-md-2  col-12 text-center ">



                                                        <label>Choose your Ads Position </label>



                                                    </div>



                                                    <div class="col-md-8 col-12 text-center ">



                                <div class="col-md-4 mb-3">



                                                <label>



                                                <input type="radio" name="ad_position" value="Slider" <?php if($ad->ad_position == 'Slider') echo 'checked="checked"'?>>



                                                <img src="http://placehold.it/40x60/0bf/fff&text=A" style="width: 100px;">



                                                </label>











                            </div>











                            <div class="col-md-4 mb-3">



                                <label>



                                <input type="radio" name="ad_position" value="Weekly" <?php if($ad->ad_position == 'Weekly') echo 'checked="checked'?>>



                                <img src="http://placehold.it/40x60/0bf/fff&text=B" style="width: 100px;">



                                </label>











                            </div>



























                            <div class="col-md-4 mb-3">



                                <label>



                                <input type="radio" name="ad_position" value="New Arrival" <?php if($ad->ad_position == 'New Arrival') echo 'checked="checked'?>>



                                <img src="http://placehold.it/40x60/0bf/fff&text=C" style="width: 100px;">



                                </label>











                            </div>































                                                    </div>



                        </div>



















                        <div class="row row-wrap" style="display: flex;justify-content: center;">







                                                    <div class="col-md-4  col-12 text-center " style="border-top: gray 1px solid; padding-top: 10px;width: 100%;">



                                                        <input type="submit" name="submit" value="submit" style="background-color: #025D8C;border: 0px;padding: 5px 10px;color: white;border-radius: 5px;">



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

          $("#more").append('<div class="row row-wrap" style="display: flex;justify-content: center;"> <div class="col-md-2 col-12 text-center "><label> <?php echo e(__("index.attributes")); ?></label></div> <div class="col-md-8 col-12 text-center "> <div class="col-md-3 mb-3"><input type="number" name="area" class="form-control" placeholder="<?php echo e(__("index.area")); ?>" ></div> <div class="col-md-3 mb-3"><input type="number" name="room_number" class="form-control" placeholder="<?php echo e(__("index.room")); ?>"></div> <div class="col-md-3 mb-3"><input type="number" name="bathroom_number" class="form-control" placeholder="<?php echo e(__("index.bathroom")); ?>"></div> <div class="col-md-3 mb-3"> <select name="furnished" class="form-control"> <option value="null">-- <?php echo e(__("index.unfur")); ?>/ <?php echo e(__("index.fur")); ?> --</option> <option value="yes"> <?php echo e(__("index.fur")); ?></option> <option value="no"> <?php echo e(__("index.unfur")); ?></option> </select> </div> </div> <div class="col-md-3 mb-3"> <select name="payment" class="form-control"> <option value="null">-- <?php echo e(__("index.payment")); ?> --</option> <option value="cash"> <?php echo e(__("index.cash")); ?> </option> <option value="installments"> <?php echo e(__("index.installments")); ?> </option> <option value="both"> <?php echo e(__("index.cash")); ?> / <?php echo e(__("index.installments")); ?></option> </select> </div></div>');



        }else if(cat == 27){

          //  alert('cars');

         $("#more").append('<div class="row row-wrap" style="display: flex;justify-content: center;"> <div class="col-md-2 col-12 text-center "><label> <?php echo e(__("index.attributes")); ?></label></div> <div class="col-md-4 mb-3"> <select name="car" class="form-control" id="car"> <option>-- <?php echo e(__("index.car")); ?>--</option> <?php $__currentLoopData = $car; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <option value="<?php echo e($c->make); ?>"> <?php echo e($c->make); ?> </option> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </select> </div> <div class="col-md-4 mb-3"> <select name="model" class="form-control" id="model"> <option>-- <?php echo e(__("index.model")); ?>--</option> </select> </div></div><div class="col-md-2 mb-3"> <select name="year" class="form-control" id="year"> <option>-- <?php echo e(__("index.year")); ?>--</option> </select></div></div> <div class="row row-wrap" style="display: flex;justify-content: center;"> <div class="col-md-12 col-12 text-center "> <div class="col-md-2 mb-3"> <select name="color" class="form-control"> <option>-- <?php echo e(__("index.color")); ?>--</option> <option value="Black"> Black </option> <option value="White"> White </option> <option value="blue"> blue </option> <option value="begie"> begie </option> <option value="red"> red </option> <option value="Silver"> Silver </option> <option value="Yellow"> Yellow </option> <option value="Other"> Other </option> </select> </div> <div class="col-md-2 mb-3"> <select name="transmission_type" class="form-control"> <option>-- <?php echo e(__("index.manual")); ?>/ <?php echo e(__("index.auto")); ?>--</option> <option value="Manual"> <?php echo e(__("index.manual")); ?></option> <option value="Automatic"> <?php echo e(__("index.auto")); ?></option> </select> </div> <div class="col-md-2 mb-3"> <select name="condition_type" class="form-control"> <option>-- <?php echo e(__("index.condition")); ?>--</option> <option value="New"> <?php echo e(__("index.new")); ?></option> <option value="Used"> <?php echo e(__("index.used")); ?></option> </select> </div> <div class="col-md-3 mb-3"> <select name="payment" class="form-control"> <option>-- <?php echo e(__("index.payment")); ?> --</option> <option value="cash"> <?php echo e(__("index.cash")); ?> </option> <option value="installments"> <?php echo e(__("index.installments")); ?> </option> <option value="both"> <?php echo e(__("index.cash")); ?> / <?php echo e(__("index.installments")); ?> </option> </select> </div> <div class="col-md-3 mb-3"> <select name="kilos" class="form-control"> <option>-- <?php echo e(__("index.kilos")); ?>--</option> <option value=" 0 - 9999 "> 0 - 9999 </option> <option value="10000 - 19999"> 10000 - 19999 </option> <option value="20000 - 29999"> 20000 - 29999 </option> <option value="3 - 39999"> 3 - 39999 </option> <option value="40000 - 49999"> 40000 - 49999 </option> <option value="50000 - 59999"> 50000 - 59999 </option> <option value="60000 - 69999"> 60000 - 69999 </option> <option value="70000 - 79999"> 70000 - 79999 </option> <option value="both"> 80000 - 89999 </option> <option value="90000 - 99999"> 90000 - 99999 </option> <option value="100000 - 119999"> 100000 - 119999 </option> <option value="both"> 120000 - 139999 </option> <option value="140000 - 159999"> 140000 - 159999 </option> <option value="160000 - 179999"> 160000 - 179999 </option> <option value="180000 - 199999"> 180000 - 199999 </option> <option value="more than 200000"> > 200000 </option> </select> </div> </div></div>');







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

          var jobOption = '<div class="col-md-2 col-12 text-center"><label><?php echo e(__("index.job_type")); ?></label></div><div class="col-md-8 col-12 text-center "><select name="job_type" class="form-control"><option>-- <?php echo e(__("index.job_type")); ?>--</option><option value="Employer"> <?php echo e(__("index.employer")); ?></option><option value="Job Seeker"> <?php echo e(__("index.seeker")); ?></option></select></div>';

          $("#div").append(jobOption);

        }else{

          //condition

          var conditionOption='<div class="col-md-2 col-12 text-center"><label><?php echo e(__("index.condition")); ?></label></div><div class="col-md-8 col-12 text-center "><select name="condition_type" class="form-control"><option>-- <?php echo e(__("index.condition")); ?>--</option><option value="New"> <?php echo e(__("index.new")); ?></option><option value="Used"> <?php echo e(__("index.used")); ?></option></select></div></div>'

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









<?php $__env->stopSection(); ?>
































<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/blades/UpdateFreeAd.blade.php ENDPATH**/ ?>