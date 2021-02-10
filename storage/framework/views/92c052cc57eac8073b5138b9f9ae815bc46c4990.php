<?php $__env->startSection('title'); ?>
Create Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-6">
                            <div class="intro-y box">
                            <div class="p-5" id="form-validation">
                            <div class="preview">

                                        <div class="">

                                                            <form action="<?php echo e(route('admin.admin-user.store')); ?>" method="post" enctype="multipart/form-data">

                                                                        <?php echo csrf_field(); ?>

                                                           

                                                                        <div class="input-form">
                                                                                            <label class="flex flex-col sm:flex-row">First Name</label>

                                                                                              

                                                                                            <input type="text" name="first_name" class="form-control"   required>

</div>


<div class="input-form">
                                                                                            <label class="flex flex-col sm:flex-row">Last Name</label>

                                                    
                                                        <input type="text" name="last_name" class="form-control" >
</div>
                                                      
<div class="input-form">
                                                                                            <label class="flex flex-col sm:flex-row">Email</label>

                                                   
                                                        <input type="email" name="email" class="form-control" >

</div>          

<div class="input-form">
                                                                                            <label class="flex flex-col sm:flex-row">Is Super Admin ?</label>

                                                      
                                                                            <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="is_super_admin" id="exampleRadios1" value="1" >
                                                                            <label class="form-check-label" for="exampleRadios1">
                                                                                Yes
                                                                            </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="is_super_admin" id="exampleRadios2" value="0" checked>
                                                                            <label class="form-check-label" for="exampleRadios2">
                                                                                No
                                                                            </label>
                                                                            </div>
</div>

                                                       
<div class="input-form">
                                                                                            <label class="flex flex-col sm:flex-row">password</label>

                                                       
                                                        <input type="password" name="password" class="form-control" >
</div>
                                                      
<div class="input-form">
                                                                                            <label class="flex flex-col sm:flex-row">Confirm Password</label>

                                                       

                                                        <input type="password" name="password_confirmation" class="form-control" >


</div>               

<div class="input-form">
                                                                                            <label class="flex flex-col sm:flex-row">Role</label>

                                                                                              
                                                                                                <select class="form-control" name='role_id'>

                                                                                                    <option value='0'>Role </option>
                                                                                                        <?php $__currentLoopData = $roleOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $roleId => $roleName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                            <option value='<?php echo e($roleId); ?>'><?php echo e($roleName); ?></option>
                                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                </select>

</div>                        

                                                                    <!-- images -->



                                                                    



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
<?php echo $__env->make('avored::mylayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/user/admin-user/create.blade.php ENDPATH**/ ?>