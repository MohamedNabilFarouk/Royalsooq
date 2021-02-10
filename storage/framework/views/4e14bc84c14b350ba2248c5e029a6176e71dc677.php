<?php $__env->startSection('content'); ?>







<div class="container" style=" margin-top:50px;">
           
<!-- E3lnat -->
<div class="row row-wrap home-owlC2 animated" id='2ndHomeSection'>
                <div>
                    <div class="product-banner">
                        <img src="img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                        <div class="product-banner-inner">
                            <h5>Playstation Accsories</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-banner">
                        <img src="img/urbex_esch_lux_with_laney_and_laaaaag_800x600.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                        <div class="product-banner-inner">
                            <h5>Canon Cameras</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-banner">
                        <img src="img/amaze_800x600.jpg" alt="Image Alternative text" title="AMaze" />
                        <div class="product-banner-inner">
                            <h5>New Glass Collections</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-banner">
                        <img src="img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                        <div class="product-banner-inner">
                            <h5>Playstation Accsories</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-banner">
                        <img src="img/urbex_esch_lux_with_laney_and_laaaaag_800x600.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                        <div class="product-banner-inner">
                            <h5>Canon Cameras</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-banner">
                        <img src="img/amaze_800x600.jpg" alt="Image Alternative text" title="AMaze" />
                        <div class="product-banner-inner">
                            <h5>New Glass Collections</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>




           
           
            <div class="row">
                <div class="col-md-3">
                    <aside class="sidebar-left">
                     <form class="js-focus-state" action="<?php echo e(url('/Shops')); ?>" method="get">
                            <?php echo csrf_field(); ?>    
                            <!-- <input type="hidden" id="search-type" name="category" value="0"> -->
                            <!-- <ul class="nav nav-tabs nav-stacked nav-coupon-category" id="selType">
                            <li id="0" value="0" class="active"><a href="#"><i class="fa fa-ticket"></i>All</a>
                            </li> -->
                            <select name="category" class="form-control">
                        <option value="0">categories</option>
                           <?php $__currentLoopData = $allcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
                             <!-- <li id="<?php echo e($c->id); ?>" value="<?php echo e($c->id); ?>"><a><i class="fa fa-cutlery"></i><?php echo e($c->name); ?></a>
                            </li> -->
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select> 
                        <!-- </ul> -->
                        <div class="sidebar-box">
                            <h5>Filter By Price</h5>
                           
                           
                            <div class="form-group">    
                            
                            <input type="number" value='0' class="form-control" name="min" min='0' placeholder="From">
                            </div>
                                <div class="form-group">                               
                                <input type="number" value='0' class="form-control" name="max" min='0' placeholder="To">
                                </div>

                                <!-- End Range Slider -->
                                

                        </div>
                        <button type="submit" style="background-color:#2a8fbd; color:white" class="btn px-4 btn-primary-dark-w py-2 rounded-lg">filter</button>
</form>
                        <!-- <div class="sidebar-box">
                            <h5>Product Feature</h5>
                            <ul class="checkbox-list">
                                <li class="checkbox">
                                    <label>
                                        <input type="checkbox" class="i-check">On Sale</label>
                                </li>
                                <li class="checkbox">
                                    <label>
                                        <input type="checkbox" class="i-check">New</label>
                                </li>
                                <li class="checkbox">
                                    <label>
                                        <input type="checkbox" class="i-check">Ending Soon</label>
                                </li>
                                <li class="checkbox">
                                    <label>
                                        <input type="checkbox" class="i-check">High Rating</label>
                                </li>
                                <li class="checkbox">
                                    <label>
                                        <input type="checkbox" class="i-check">Free Shipping</label>
                                </li>
                            </ul>
                        </div> -->
                        
                    </aside>
                </div>
                <div class="col-md-9">
                    <!-- <div class="row">
                        <div class="col-md-3">
                            <div class="product-sort">
                                <span class="product-sort-selected">sort by <b>Price</b></span>
                                <a href="#" class="product-sort-order fa fa-angle-down"></a>
                                <ul>
                                    <li><a href="#">sort by Name</a>
                                    </li>
                                    <li><a href="#">sort by Date</a>
                                    </li>
                                    <li><a href="#">sort by Popularity</a>
                                    </li>
                                    <li><a href="#">sort by Rating</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                    </div> -->
                    <div class="row row-wrap">
                        
                        
                        
                       
                        
                        
                        
                      
                       
                       
                       
                       
                       
                      
                      
                      
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="<?php echo e($product->main_image_url); ?>" alt="Image Alternative text" title="Green Furniture" style="height: 200px;" />
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating" title="3.8/5 rating">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star-o"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title"><?php echo e($product->name); ?></h5>
                                    <p class="product-desciption"><?php echo e($product->sku); ?></p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$<?php echo e($product->price); ?></span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                    <li>
                                    <form method="post" action="<?php echo e(route('add.to.cart')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i>  </button>
                                    <input type="hidden" name="slug" value="<?php echo e($product->slug); ?>">
                                    <input type="hidden" name="qty" value="1">
                                </form>   
                                    </li>
                                    <?php if(auth()->guard()->check()): ?>
                                <li>
                                <form method="post" action="<?php echo e(route('add.favorites')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <button class="btn" type="submit"><i class="fa fa-heart"></i> </button>
                                    <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                    
                                    
                                </form>   
                                </li>
                                <?php endif; ?>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <?php   echo $products->render(); ?>
                    <!-- <ul class="pagination">
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
                    </ul> -->
                    <div class="gap"></div>
                </div>
            </div>

        </div>
<script>
   $(document).ready(function(){
    $("#selType li").click(function(){
    $("#search-type").val($(this).attr("value"));
   });
   });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\resources\views/blades/shop.blade.php ENDPATH**/ ?>