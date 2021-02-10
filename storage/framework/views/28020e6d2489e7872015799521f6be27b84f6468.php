<?php $__env->startSection('content'); ?>



<div class="container">



<ul class="breadcrumb">

                    <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('index.home')); ?></a>

                    </li>

                    <li><a href="#"><?php echo e(__('index.all_cat')); ?></a>

                    </li>

                </ul>

        

            <div class="row">







                







                



                



                 <!-- free Section -->



                 <div class="col-md-12">



                    <h2 class="text-center" style="padding:15px"><?php echo e(__('index.freead_cat')); ?></h2>



                    <div class="row row-wrap">



                        <?php $__currentLoopData = $freeproduct_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>







                        <div class="col-md-3 col-sm-2">



                            <div class="product-thumb category-item" style='padding: 0px;color: #025D8C;background-color: white;overflow: hidden;position: relative;'>







                            <img class="imge" src="<?php echo e(asset('storage/'. $c->image)); ?>"  >



                                <a href="<?php echo e(route('cat.products', $c->slug)); ?>">  <h5 style="color: #025D8C;"><?php echo e($c->name); ?> </h5></a>



                                <div class="sidebar-box" style="display:none;position: absolute;top: 0;right: 0;left: 0;bottom: 0;margin-bottom: 0px;padding: 15px 10px;">



                                    <div style="display: flex;justify-content: space-between;">



                                        <div>



                                        <a href="<?php echo e(route('cat.products', $c->slug)); ?>"> <h5> <i class="fa fa-tablet text-primary" aria-hidden="true"></i> <?php echo e($c->name); ?></h5></a>



                                        </div>



                                        <div>



                                        <a href="<?php echo e(route('cat.products', $c->slug)); ?>"><h6 style="cursor: pointer;"><?php echo e(__('index.view_all')); ?></h6></a>



                                        </div>



                                    </div>



                                    



                                    <hr style="margin-top: 0px;">



                                    <ul class="tags-list">



                                    <?php $__currentLoopData = $c->subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                                        <li><a href="<?php echo e(route('sub.products',$s->slug)); ?>"><?php echo e($s->name); ?></a>



                                        </li>



                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                               



                                    </ul>



                                </div>







                            </div>



                            



                            



                        </div>







                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                        



                    </div>



                    



                </div>



 



                













                  <!-- services Section -->

















                



            </div>







        </div>











        <script>







$('.category-item').hover(function(){



    



    $(this).find('.sidebar-box').slideDown();



    



});







$('.category-item').mouseleave(function(){



    $('.sidebar-box').slideUp();



})











</script>











<?php $__env->stopSection(); ?>








<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/blades/allCategories.blade.php ENDPATH**/ ?>