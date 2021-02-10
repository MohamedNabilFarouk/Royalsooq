<?php $__env->startSection('title'); ?>
Cars Edit
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="">

            <form action="<?php echo e(route('admin.cars.update', $cars->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(method_field('PUT')); ?>


                              <?php echo csrf_field(); ?>

                <div class="col-md-12">

                             



                        <div class="row row-wrap" style="display: flex;justify-content: center;">

                                                    <div class="col-md-2  col-12 text-center ">

                                                        <label>Name</label>

                                                    </div>

                                            <div class="col-md-8 col-12 text-center ">

                                                  <input type="text" name="make" class="form-control" Value="<?php echo e($cars->make); ?>"  placeholder="car name" required>

                                            </div>



                        </div>


                        <div class="row row-wrap" style="display: flex;justify-content: center;">

                        <div class="col-md-2  col-12 text-center ">

                            <label>Name Ar</label>

                        </div>

                        <div class="col-md-8 col-12 text-center ">

                        <input type="text" name="make_ar" class="form-control" Value="<?php echo e($cars->make_ar); ?>"  placeholder="Car Arabic name" >

                        </div>



                        </div>


                        <div class="row row-wrap" style="display: flex;justify-content: center;">

<div class="col-md-2  col-12 text-center ">

    <label>Model</label>

</div>

<div class="col-md-8 col-12 text-center ">

<input type="text" name="model" class="form-control" Value="<?php echo e($cars->model); ?>"  placeholder="car model" required>

</div>



</div>
                   



       <div class="row row-wrap" style="display: flex;justify-content: center;">

<div class="col-md-2  col-12 text-center ">

    <label>Model Ar</label>

</div>

<div class="col-md-8 col-12 text-center ">

<input type="text" name="model_ar" class="form-control" Value="<?php echo e($cars->model_ar); ?>"  placeholder="car model ar" required>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('avored::mylayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/catalog/cars/edit.blade.php ENDPATH**/ ?>