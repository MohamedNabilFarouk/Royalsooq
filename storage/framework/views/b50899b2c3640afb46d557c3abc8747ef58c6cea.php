<?php $__env->startSection('meta_title'); ?>
    <?php echo e(__('avored::catalog.category.create.title')); ?>: AvoRed E commerce Admin Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    <?php echo e(__('avored::catalog.category.create.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<!-- <a-row type="flex" justify="center">
    <a-col :span="24">
        <category-save base-url="<?php echo e(asset(config('avored.admin_url'))); ?>" inline-template>
        <div>
            <a-form 
                :form="categoryForm"
                method="post"
                action="<?php echo e(route('admin.category.store')); ?>"                    
                @submit="handleSubmit"
            >
                <?php echo csrf_field(); ?>
                <a-tabs tabbar-gutter="15" tab-position="left" default-active-key="catalog.category.basic">
                    <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a-tab-pane :force-render="true" tab="<?php echo e($tab->label()); ?>" key="<?php echo e($tab->key()); ?>">
                            <?php
                                $path = $tab->view();
                            ?>
                            <?php echo $__env->make($path, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </a-tab-pane>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </a-tabs>
                
                <a-form-item>
                    <a-button
                        type="primary"
                        html-type="submit"
                    >
                        <?php echo e(__('avored::system.btn.save')); ?>

                    </a-button>
                    
                    <a-button
                        class="ml-1"
                        type="default"
                        v-on:click.prevent="cancelCategory"
                    >
                        <?php echo e(__('avored::system.btn.cancel')); ?>

                    </a-button>
                </a-form-item>
            </a-form>
            </div>
        </category-save>
    </a-col>
</a-row> -->

<div class="">

            <form action="<?php echo e(route('admin.category.store')); ?>" method="post" enctype="multipart/form-data">

                              <?php echo csrf_field(); ?>

                <div class="col-md-12">

                             



                        <div class="row row-wrap" style="display: flex;justify-content: center;">

                                                    <div class="col-md-2  col-12 text-center ">

                                                        <label>Name</label>

                                                    </div>

                                            <div class="col-md-8 col-12 text-center ">

                                                  <input type="text" name="name" class="form-control"  placeholder="Category name" required>

                                            </div>



                        </div>



                        <div class="row row-wrap" style="display: flex;justify-content: center;">

                                                      <div class="col-md-2  col-12 text-center ">

                                                        <label>Type</label>

                                                      </div>

                                                      <div class="col-md-8 col-12 text-center ">

                                                      <select class="form-control" name='type'>

                                                        <option value='0'>Select Category Type</option>
                                                        <option value='free'>Free</option>
                                                        <option value='sponsored'>Sponsored</option>
                                                        <option value='services'>Services</option>
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

<?php echo $__env->make('avored::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/catalog/category/create.blade.php ENDPATH**/ ?>