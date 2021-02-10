<?php $__env->startSection('title'); ?>
Create SubCategory
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-6">
                            <div class="intro-y box">
                            <div class="p-5" id="form-validation">
                            <div class="preview">
                                            <div class="">

                                                        <form action="<?php echo e(route('admin.subcategory.store')); ?>" method="post" enctype="multipart/form-data">

                                                                        <?php echo csrf_field(); ?>

                                                            

                                                                        


                                                                        <div class="input-form">
                                                                            <label class="flex flex-col sm:flex-row" >Name</label>

                                                                                             

                                                                                        

                                                                                            <input type="text" name="name" class="form-control"  placeholder="Sub-Category name" required>

                                                                        <div>           



                                                                  



                                                                  
                                                                        <div class="input-form">
                                                                    <label class="flex flex-col sm:flex-row" >Name Ar</label>

                                                       

                                                       

                                                        <input type="text" name="name_ar" class="form-control"  placeholder="Sub-Category name Arabic" >

</div>



                                                      



                                                                  

<div class="input-form">
                                                                    <label class="flex flex-col sm:flex-row" >Category</label>

                                                                                               

                                                                                             

                                                                                                <select class="form-control" name='category'>

                                                                                                    <option value='0'>Select Category </option>
                                                                                                            <?php $__currentLoopData = $allcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                            <option value='<?php echo e($c->id); ?>'><?php echo e($c->name); ?></option>
                                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                </select>

                                                                                              



<div>

                                           

                                                                     <!-- images -->

                                                            <div class="input-form">
                                                                    <label class="flex flex-col sm:flex-row" >image</label>
                                                                    <!-- <small> Upload image</small> -->

                                                            



                                                              


                                                                        <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">

                                                                            <label for="file-input">

                                                                            <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;">upload</i>



                                                                            </label>

                                                                                    <input type="file" name="image" id="file-input"  style="display: none;" >

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

                                            </div>
                                </div>       
                            </div>         
                </div> 
</div>                   

<?php $__env->stopSection(); ?>
<?php echo $__env->make('avored::mylayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/catalog/subcategory/create.blade.php ENDPATH**/ ?>