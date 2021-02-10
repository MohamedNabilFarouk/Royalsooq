<?php $__env->startSection('title'); ?>
Edit SubCategories
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="">

<form action="<?php echo e(route('admin.subcategory.update', $sub->id)); ?>" method="post" enctype="multipart/form-data">
<?php echo e(method_field('PUT')); ?>


                  <?php echo csrf_field(); ?>

    <div class="col-md-12">

                 



            <div class="row row-wrap" style="display: flex;justify-content: center;">

                                        <div class="col-md-2  col-12 text-center ">

                                            <label>Name</label>

                                        </div>

                                <div class="col-md-8 col-12 text-center ">

                                      <input type="text" name="name" class="form-control" Value="<?php echo e($sub->name); ?>"  placeholder="SubCategory name" required>

                                </div>



            </div>




            <div class="row row-wrap" style="display: flex;justify-content: center;">

                                        <div class="col-md-2  col-12 text-center ">

                                            <label>Name Ar</label>

                                        </div>

                                <div class="col-md-8 col-12 text-center ">

                                      <input type="text" name="name_ar" class="form-control" Value="<?php echo e($sub->name_ar); ?>"  placeholder="SubCategory name Arabic" >

                                </div>



            </div>



            <div class="row row-wrap" style="display: flex;justify-content: center;">

                                          <div class="col-md-2  col-12 text-center ">

                                            <label>Category</label>

                                          </div>

                                          <div class="col-md-8 col-12 text-center ">

                                          <select class="form-control" name='category'>

                                           
                                          
                                                    <?php $__currentLoopData = $allcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                    <option value='<?php echo e($c->id); ?>' <?php if( $c->id == $sub->category_id ): ?> selected="selected" <?php endif; ?>><?php echo e($c->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         </select>

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
<?php echo $__env->make('avored::mylayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/catalog/subcategory/edit.blade.php ENDPATH**/ ?>