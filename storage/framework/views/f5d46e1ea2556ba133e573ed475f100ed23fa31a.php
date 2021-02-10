<?php $__env->startSection('content'); ?>



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

                    <li><a href="<?php echo e(url('/')); ?>">Home</a>

                    </li>

                    <li><a href="<?php echo e(route('free.ads')); ?>">Add Free Ads</a>

                    </li>

                </ul>



	<div class="row">



  <!-- <h1 class="text-center" style="background-color:#2a8fbd;color:white;width:50%;margin:50px auto 20px;border-radius: 20px;padding:15px 10px;">Nice To Post New Ads  <a>For FREE</a></h1> -->



  <div class="col-md-3" >



        <div id="app">







            



            <avored-layout inline-template>



                            <div>







                            <a-layout id="components-layout-demo-top" class="layout">







                                <!-- <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->















                                <a-layout-content style="padding: 0 10px">







                                    <?php echo $__env->make('partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>







                                    <a-layout style="padding: 24px 0">







                                        <?php if(auth()->guard()->check()): ?>







                                        <a-layout-sider width="100%">







                                        <?php echo $__env->make('partials.account-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>







                                        </a-layout-sider>







                                        <?php endif; ?>







                                    



                                    </a-layout>







                                    </a-layout-content>







                                







                                <!-- <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->







                                    </a-layout>







                            </div>            



            



            </avored-layout>



        </div>



</div>



      <div class="col-md-9 ">



        <div class="">



                    <form action="<?php echo e(route('free.ads.update',$ad->id)); ?>" method="post" enctype="multipart/form-data">



                    <?php echo e(method_field('PUT')); ?>


                              <?php echo csrf_field(); ?>



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



                                                        <label>Category</label>



                                                      </div>



                                                      <div class="col-md-8 col-12 text-center ">



                                                      <select class="form-control" name='category_id'  id='sel_cat' readonly>



                                                        <option value='<?php echo e($ad->category_id); ?>'>-- <?php echo e($ad->categories->name); ?> --</option>



                                                        <?php $__currentLoopData = $freeproduct_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   



                                                        <option value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>



                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                                        </select>

                                                      </div>











                        </div>











                        <div class="row row-wrap" style="display: flex;justify-content: center;">



                                                      <div class="col-md-2  col-12 text-center ">



                                                        <label>Sub-Category</label>



                                                      </div>



                                                      <div class="col-md-8 col-12 text-center ">







                                                      <select name='subcategory_id' class="form-control"  id='sel_sub' readonly>

                                                        <option value='<?php echo e($ad->subcategory_id); ?>'><?php echo e($ad->subcategory->name); ?></option>

                                                        </select>



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



                                    <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">



                                        <label for="file-input">



                                        <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>







                                        </label>



                                                <input type="file" name="image[]" id="file-input"  style="display: none;" multiple>



                                    </div>



                                   



                                </div>



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











<?php $__env->stopSection(); ?>






















<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/blades/UpdateFreeAd.blade.php ENDPATH**/ ?>