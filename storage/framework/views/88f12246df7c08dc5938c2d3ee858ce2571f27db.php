<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
<?php $__env->startSection('meta_title'); ?>
    <?php echo e(__('avored::catalog.product.create.title')); ?>: AvoRed E commerce Admin Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    <?php echo e(__('avored::catalog.product.create.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="">

                                <form action="<?php echo e(route('free.ads.store')); ?>" method="post" enctype="multipart/form-data">

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

                                                  <input type="text" name="name" class="form-control"  placeholder="product name" required>

                                            </div>



                        </div>



                        <div class="row row-wrap" style="display: flex;justify-content: center;">

                                                      <div class="col-md-2  col-12 text-center ">

                                                        <label>Category</label>

                                                      </div>

                                                      <div class="col-md-8 col-12 text-center ">

                                                      <select class="form-control" name='category_id'  id='sel_cat'>

                              <option value='0'>-- Select Category --</option>

                              <?php $__currentLoopData = $allcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   

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



                                                      <select name='subcategory_id' class="form-control"  id='sel_sub'>

                                                          <option value='0'>-- Select SubCategory --</option>

                            

                                                        </select>

                                                      </div>



                        </div>                              











                        <div class="row row-wrap" style="display: flex;justify-content: center;">

                            

                                                    <div class="col-md-2  col-12 text-center ">

                                                        <label>Price</label>

                                                    </div>

                            



                                                    <div class="col-md-8 col-12 text-center ">

                                                      <input type="number" name="price" class="form-control " style="width: 25%;" placeholder="Price" required>



                                                      </div>

                        </div>









                        <div class="row row-wrap" style="display: flex;justify-content: center;">

                            

                                                    <div class="col-md-2  col-12 text-center ">

                                                        <label>Description</label>

                                                    </div>

                                                    <div class="col-md-8 col-12 text-center ">

                                                    <textarea name="description" class="form-control"></textarea>

                                                    </div>

                        </div>



<!-- type -->

<div class="row row-wrap" style="display: flex;justify-content: center;">

            <div class="col-md-2  col-12 text-center ">

            <label>Type</label>

            </div>

            <div class="col-md-8 col-12 text-center ">

            <select class="form-control" name='type'>

            <option value='0'>Select Product Type</option>
            <option value='free'>Free</option>
            <option value='sponsored'>Sponsored</option>
            
            </select>

            </div>





</div>

<!-- position in home page -->

<div class="row row-wrap" style="display: flex;justify-content: center;">

            <div class="col-md-2  col-12 text-center ">

            <label>position</label>

            </div>

            <div class="col-md-8 col-12 text-center ">

            <select class="form-control" name='position'>

            <option value='0'>Select position in Homepage</option>
            <option value='latest'>Featured</option>
            <option value='latest2'>Latest Products</option>
            <option value='weakly'>Weakly Sponsored Products(sponsored)</option>

            <option value='new_arrivals'>New Arrival (sponsored)</option>
            <option value='best_rated'>Best Rated (sponsored)</option>
            <option value='on_sale'>On Sale (sponsored)</option>
            
            </select>

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

                                        <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;">Upload</i>



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

<!-- approval -->


<div class="row row-wrap" style="display: flex;justify-content: center;">

            <div class="col-md-2  col-12 text-center ">

            <label>Approval</label>

            </div>

            <div class="col-md-8 col-12 text-center ">

            <label for="yes">Yes</label><input type="radio" id="yes" name="approved" value="1">
            <label for="no">No</label><input type="radio" id="no" name="approved" value="0">
            </div>





</div>



<!-- ad position -->

                        <!-- <div class="row row-wrap" style="display: flex;justify-content: center;">

                            

                                                    <div class="col-md-2  col-12 text-center ">

                                                        <label>Choose your Ads Position </label>

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

                        </div> -->











                        <div class="row row-wrap" style="display: flex;justify-content: center;">

                            

                                                    <div class="col-md-4  col-12 text-center " style="border-top: gray 1px solid; padding-top: 10px;width: 100%;">

                                                        <input type="submit" name="submit" value="submit" style="background-color: #025D8C;border: 0px;padding: 5px 10px;color: white;border-radius: 5px;">

                                                    </div>



                                                </div>

                          

                          

                          </div>





                        

                        </form>

                


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


<?php echo $__env->make('avored::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/catalog/product/create.blade.php ENDPATH**/ ?>