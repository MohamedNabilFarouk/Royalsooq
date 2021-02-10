<?php $__env->startSection('meta_title'); ?>
    Sub-Categories
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
<h2>Create Sub-Categories</h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="">

<form action="<?php echo e(route('admin.slider.store')); ?>" method="post" enctype="multipart/form-data">

                  <?php echo csrf_field(); ?>

    <div class="col-md-12">

                 



            <div class="row row-wrap" style="display: flex;justify-content: center;">

                                        <div class="col-md-2  col-12 text-center ">

                                            <label>Title</label>

                                        </div>

                                <div class="col-md-8 col-12 text-center ">

                                      <input type="text" name="title" class="form-control"  placeholder="Title" required>

                                </div>



            </div>



            <div class="row row-wrap" style="display: flex;justify-content: center;">

                                          <div class="col-md-2  col-12 text-center ">

                                            <label>Description</label>

                                          </div>

                                          <div class="col-md-8 col-12 text-center ">

                                         <textarea name="des" class="form-control"></textarea>

                                        </div>





            </div>


            <!-- images -->



            <div class="row row-wrap" style="display: flex;justify-content: center;">

                

                <div class="col-md-2  col-12 text-center ">

                    <label style="display: block;">image</label>
                    <!-- <small> Upload image</small> -->

                </div>



                <div class="col-md-8 col-12 text-center ">

                    <div style="width: 50%;display: flex;justify-content: center;align-items: center;flex-wrap: wrap;">

                        <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">

                            <label for="file-input">

                            <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;">upload</i>



                            </label>

                                    <input type="file" name="image" id="file-input"  style="display: none;" >

                        </div>

                       

                    </div>

                </div>

        

            </div>



            <!-- end images -->


           







         







            <div class="row row-wrap" style="display: flex;justify-content: center;">

                

                                        <div class="col-md-4  col-12 text-center " style="border-top: gray 1px solid; padding-top: 10px;width: 100%;">

                                            <input type="submit" name="submit" value="submit" style="background-color: #025D8C;border: 0px;padding: 5px 10px;color: white;border-radius: 5px;">

                                        </div>



                                    </div>

              

              

              </div>





            

            </form>

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('avored::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/catalog/slider/create.blade.php ENDPATH**/ ?>