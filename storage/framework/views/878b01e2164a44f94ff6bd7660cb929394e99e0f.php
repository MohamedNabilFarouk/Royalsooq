<?php $__env->startSection('meta_title'); ?>
    Ads
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
<h2>Site Data</h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="">

<form action="<?php echo e(route('admin.statics.update' ,$data->id)); ?>" method="post" enctype="multipart/form-data">
<?php echo e(method_field('PUT')); ?>


                  <?php echo csrf_field(); ?>

    <div class="col-md-12">

                 



            <div class="row row-wrap" style="display: flex;justify-content: center;">

                                        <div class="col-md-2  col-12 text-center ">

                                            <label>Code</label>

                                        </div>

                                <div class="col-md-8 col-12 text-center ">

                                      <input type="text" name="code" class="form-control" value="<?php echo e($data->code); ?>" placeholder="Title" readonly>

                                </div>



            </div>



            <div class="row row-wrap" style="display: flex;justify-content: center;">

                                          <div class="col-md-2  col-12 text-center ">

                                            <label>English</label>

                                          </div>

                                          <div class="col-md-8 col-12 text-center ">

                                         <textarea name="english"  class="form-control"><?php echo e($data->english); ?></textarea>

                                        </div>





            </div>


            <!-- images -->



            <div class="row row-wrap" style="display: flex;justify-content: center;">

                                          <div class="col-md-2  col-12 text-center ">

                                            <label>Arabic</label>

                                          </div>

                                          <div class="col-md-8 col-12 text-center ">

                                         <textarea name="arabic"  class="form-control"><?php echo e($data->arabic); ?></textarea>

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
<?php echo $__env->make('avored::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/catalog/statics/edit.blade.php ENDPATH**/ ?>