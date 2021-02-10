<?php $__env->startSection('content'); ?>


<div class="container" style="margin-top:50px;">
            <div class="row">
                
                <div class="col-md-12">
                    
                    <div class="row row-wrap">
                       
                      
                   <?php  
                   if(count($result)== 0){
                            echo '<h2 class="text-center">No Result</h2>';
                   }else{
                       ?>
                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="<?php echo e($product->main_image_url); ?>" alt="Image Alternative text" title="The Violin" />
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating" title="3.1/5 rating">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star-half-empty"></i>
                                        </li>
                                        <li><i class="fa fa-star-o"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title"><?php echo e($product->name); ?></h5>
                                    <p class="product-desciption"><?php echo e($product->sku); ?></p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">Visit</span>
                                            </li>
                                            
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                 <?php  } ?>
                    </div>
                    
                </div>

                <!-- <div class="col-md-12" style="text-align: center;">
                    <ul class="pagination">
                        <li class="prev disabled">
                            <a href="#"></a>
                        </li>
                        <li class="active"><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li class="next">
                            <a href="#"></a>
                        </li>
                    </ul>
                    
                </div> -->
            </div>

        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\resources\views/blades/search.blade.php ENDPATH**/ ?>