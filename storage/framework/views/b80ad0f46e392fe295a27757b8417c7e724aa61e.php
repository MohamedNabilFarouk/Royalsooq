<?php $__env->startSection('content'); ?>
<div class="container">
            <div class="row">

                

                
                
                 <!-- sub_category Section -->
                 <div class="col-md-12">
                    <h2 class="text-center" style="padding:5%"><?php echo e($sub[0]->category->name); ?> Category </h2>
                    <div class="row row-wrap">
                        <?php $__currentLoopData = $sub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-md-3">
                            <div class="product-thumb category-item" style='padding: 40px;border: 2px solid #025D8C;color: #025D8C;background-color: white;overflow: hidden;position: relative;'>

                            <a href="<?php echo e(route('sub.products',$s->id)); ?>" style="color:#025d8c"> <i class="fa fa-mobile fa-4x" aria-hidden="true"></i></a>
                                <a href="<?php echo e(route('sub.products',$s->id)); ?>"><h5 style="color: #025D8C;"> <?php echo e($s->name); ?> </h5></a>
                            </div>
                            
                            
                        </div>

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </div>
                    
                </div>
 
                
            </div>

        </div>





<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\resources\views/blades/subcategory-category.blade.php ENDPATH**/ ?>