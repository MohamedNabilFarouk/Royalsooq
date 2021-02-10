<?php $__env->startSection('content'); ?>
<style>
    .owl-carousel {
    display: none;
    position: relative;
    -ms-touch-action: pan-y;
    margin: 0;
    padding: 0;
}
.owl-carousel .owl-item {
    min-height: 1px;
    float: left;
    padding: 2px;
    -webkit-backface-visibility: hidden;
    -webkit-touch-callout: none;
}
.owl-carousel .product-thumb {
    margin: 5px 0;
    padding: 16px;
}
.owl-carousel .product-thumb {
    margin: 5px 0;
    padding: 1px;
}
[data-inner-pagination="true"] .owl-controls .owl-pagination {
    margin: 0;
    position: absolute;
    bottom: 0px;
    width: 100%;
}
    
</style>

             <!-- TOP AREA -->
        <div class="top-area container-fluid" style="background-image: linear-gradient(#333333, #2a8fbd);">
            <div class="row" style="height: 430px; display: flex; justify-content: center;align-items: center;">

                <div class="col-12 col-md-2">
                    <div style="margin: 5px auto;width: 100%;">
                        <img src="https://via.placeholder.com/150/FF0000/FFFFFF?Text=Down.com">
                    </div>
                    
                    <div style="margin: 5px auto;width: 100%;">
                        <img src="https://via.placeholder.com/150/FF0000/FFFFFF?Text=Down.com">
                    </div>
                    
                </div>

                <div class="col-12 col-md-8" >
                    <div class="owl-carousel owl-slider" id="owl-carousel-slider" data-inner-pagination="true" data-white-pagination="true">
                        
                        <div>
                            <div class="bg-holder">
                                <img src="img/branding__ipad_interactive_design_1200x480.jpg" alt="Image Alternative text" title="Branding  iPad Interactive Design" />
                                <div class="vert-center text-white text-center slider-caption">
                                    <h2 class="text-uc">New Bloke Collection</h2>
                                    <p class="text-bigger">Enim gravida tempus tincidunt posuere consequat vehicula</p>
                                    <p class="text-hero">Save up to 40%</p><a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="bg-holder">
                                <img src="img/hot_mixer_1200x480.jpg" alt="Image Alternative text" title="Hot mixer" />
                                <div class="vert-center text-white text-center slider-caption">
                                    <h2 class="text-uc">Modern DJ Sets</h2>
                                    <p class="text-bigger">Lorem curae sociis volutpat facilisis varius vehicula</p>
                                    <p class="text-hero">Save up to 50%</p><a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="bg-holder">
                                <img src="img/iphone_5_ipad_mini_ipad_3_1200x480.jpg" alt="Image Alternative text" title="iPhone 5 iPad mini iPad 3" />
                                <div class="vert-center text-white text-center slider-caption">
                                    <h2 class="text-uc">Gatgets Giveaway</h2>
                                    <p class="text-bigger">Commodo natoque tristique laoreet tellus ad id</p>
                                    <p class="text-hero">Save up to 70%</p><a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>

                <div class="col-12 col-md-2">
                    <div style="margin: 5px auto;width: 100%;">
                        <img src="https://via.placeholder.com/150/FF0000/FFFFFF?Text=Down.com">
                    </div>
                    
                    <div style="margin: 5px auto;width: 100%;">
                        <img src="https://via.placeholder.com/150/FF0000/FFFFFF?Text=Down.com">
                    </div>
                </div>


            </div>
        </div>
        <!-- END TOP AREA -->

        

        <div class="gap"></div>


        <!-- //////////////////////////////////
	//////////////END MAIN HEADER////////// 
	////////////////////////////////////-->


        <!-- //////////////////////////////////
	//////////////PAGE CONTENT///////////// 
	////////////////////////////////////-->



        <div class="container">
            <div class="row animated" id='firstHomeSection'>
                
                <div class="">
                    <h1 class="mb20 text-center"> Featured <small><a href="#">View All</a></small></h1>
                    <div class="row row-wrap home-owlC2">
                       
                    <?php $__currentLoopData = $latest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <div>
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="<?php echo e($product->main_image_url); ?>" alt="Image Alternative text" title="Gamer Chick" style="height: 200px;" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.7/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-title"><?php echo e($product->name); ?></h5>
                            <p class="product-desciption"><?php echo e($product->sku); ?></p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price"><?php echo e($product->price); ?> $</span>
                                    </li>
                                </ul>
                                <p class="product-category"><i class="fa fa-headphones"></i></p>
                                <ul class="product-actions-list">
                                    <!-- <li>
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
                                <?php endif; ?> -->
                                    <li><a href='Product-details/<?php echo e($product->slug); ?>' class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </div>
<br>

   <div class="">
                    <h1 class="mb20 text-center"> latest <small><a href="#">View All</a></small></h1>
                    <div class="row row-wrap home-owlC2">
                       
                    <?php $__currentLoopData = $latest2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <div>
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="<?php echo e($product->main_image_url); ?>" alt="Image Alternative text" title="Gamer Chick" style="height: 200px;" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.7/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-title"><?php echo e($product->name); ?></h5>
                            <p class="product-desciption"><?php echo e($product->sku); ?></p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price"><?php echo e($product->price); ?> $</span>
                                    </li>
                                </ul>
                                <p class="product-category"><i class="fa fa-headphones"></i></p>
                                <ul class="product-actions-list">
                                    <!-- <li>
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
                                <?php endif; ?> -->
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>
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

            <!-- Latest Ads -->
            
            <h1 class="mb20 text-center">Weakly Sponsered <small><a href="#">View all</a></small></h1>
            <div class="row row-wrap home-owlC2">
                <!-- <div>
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.7/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Playstation Accessories</h5>
                            <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                            
                        </div>
                    </div>
                </div> -->
                <?php $__currentLoopData = $weekly; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <div class="row5">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.7/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-title"><?php echo e($product->name); ?></h5>
                            <p class="product-desciption"><?php echo e($product->sku); ?></p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price"><?php echo e($product->price); ?> $</span>
                                    </li>
                                </ul>
                                <p class="product-category"><i class="fa fa-headphones"></i></p>
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

            
            <!-- Sponsored Ads -->
            <!-- <h1 class="mb20 text-center">Sponsored Ads <small><a href="#">View all</a></small></h1>
            <div class="row row-wrap home-owlC2 animated" id='4thtHomeSection'> -->
                <!-- <div>
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.7/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Playstation Accessories</h5>
                            <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                            
                        </div>
                    </div>
                </div> -->
                <!-- <?php $__currentLoopData = $sponsored; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   -->
            <!-- <div>
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.7/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-title"><?php echo e($product->name); ?></h5>
                            <p class="product-desciption"><?php echo e($product->sku); ?></p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price"><?php echo e($product->price); ?> $</span>
                                    </li>
                                </ul>
                                <p class="product-category"><i class="fa fa-headphones"></i></p>
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
                </div> -->
                <!-- <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
            <!-- </div> -->


             <!-- Here Will Be Hard Section -->             <br>            <div class="row row-wrap animated" id='5thHomeSection' style="padding-top: 40px;">                <div class="col-md-3">                    <div style="margin: 5px auto;border-radius: 20px; border:2px solid #2a8fbd;overflow: hidden;">                        <img src="https://via.placeholder.com/150x250.png">                    </div>                </div>                <div class="col-md-9" style="padding: 10px;">                    <ul class="nav nav-tabs">                        <li class="active"><a data-toggle="tab" href="#home" style="font-weight: 600;">New Arrivals</a></li>                        <li><a data-toggle="tab" href="#menu1" style="font-weight: 600;">On Sale</a></li>                        <li><a data-toggle="tab" href="#menu2" style="font-weight: 600;">Best Rated</a></li>                      </ul>                                          <div class="tab-content">                        <div id="home" class="tab-pane fade in active" style="padding: 5px;">                            <div class="row">                                <?php $__currentLoopData = $new_arrivals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                <div class="col-md-3" style="padding-top: 30px;">                                <a href="<?php echo e(route('sponsord.product.details', $product->slug)); ?>"> <img src="<?php echo e(asset('img/pngs/product.png')); ?>"></a>                                    <br>                                    <h5 class="product-title text-center"><a href="<?php echo e(route('sponsord.product.details', $product->slug)); ?>"><?php echo e($product->name); ?></a></h5>                            <div class="product-meta">                               <h5 class="text-center"> $ <?php echo e($product->price); ?></h5>                                </div>                                </div>                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                                                            </div>                       </div>                        <div id="menu1" class="tab-pane fade" style="padding: 5px;">                            <div class="row">                                                            <?php $__currentLoopData = $on_sale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                            <div class="col-md-3" style="padding-top: 30px;">                                   <a href="<?php echo e(route('sponsord.product.details', $product->slug)); ?>"> <img src="<?php echo e(asset('img/pngs/product.png')); ?>"></a>                                    <br>                                    <h5 class="product-title text-center"><a href="<?php echo e(route('sponsord.product.details', $product->slug)); ?>"><?php echo e($product->name); ?></a></h5>                            <div class="product-meta">                               <h5 class="text-center"> $ <?php echo e($product->price); ?></h5>                                </div>                                </div>                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                           </div> </div>                                                                                             <div id="menu2" class="tab-pane fade" style="padding: 5px;">                            <div class="row">                            <?php $__currentLoopData = $best_rated; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                            <div class="col-md-3" style="padding-top: 30px;">                            <a href="<?php echo e(route('sponsord.product.details', $product->slug)); ?>"> <img src="<?php echo e(asset('img/pngs/product.png')); ?>"></a>                                    <br>                                    <h5 class="product-title text-center"><a href="<?php echo e(route('sponsord.product.details', $product->slug)); ?>"><?php echo e($product->name); ?></a></h5>                            <div class="product-meta">                               <h5 class="text-center"> $ <?php echo e($product->price); ?></h5>                                </div>                                </div>                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                                                       </div></div>                      </div>                </div>                            </div>


    <!-- New Services -->
    <br>
             <h1 class="mb20 text-center">Featured Services <small><a href="#">View all</a></small></h1>
             <div class="row row-wrap home-owlC2 animated" id='7thHomeSection'>
               
               <?php $__currentLoopData = $new_servcies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.7/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-title"><?php echo e($s->name); ?></h5>
                            <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$<?php echo e($s->price); ?></span>
                                    </li>
                                </ul>
                                <p class="product-category"><i class="fa fa-headphones"></i>electronics</p>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a href="<?php echo e(route('service.details',$s->id)); ?>" class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
              
             </div>




            <!-- Featured Services -->
            <h1 class="mb20 text-center">New Services<small><a href="#">View all</a></small></h1>
            <div class="row row-wrap home-owlC2 animated" id='6thtHomeSection'>
            <?php $__currentLoopData = $featured_servcies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <div>
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.7/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-title"><?php echo e($s->name); ?></h5>
                            <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$<?php echo e($s->price); ?></span>
                                    </li>
                                </ul>
                                <p class="product-category"><i class="fa fa-headphones"></i>electronics</p>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a href="<?php echo e(route('service.details',$s->id)); ?>" class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </div>

        
            <!-- sell -->


            <section class="services-area " id="services">
                
                 
                    

                    

                    <div class="row" style="margin: 10px auto ;width: 75%;"> 

                        <div class="col-md-12" style="margin:15px 0;border: 2px solid #2a8fbd;border-radius: 10px; padding: 20px 0px;background-image: linear-gradient(#333333, #2a8fbd);">
                            <div class="header-feature-caption  text-center">
                                <h2 style='color:white;'> Make Your Online Market On RoyalSooq</h2>
                                <button class="btn btn-primary secondNavButtons" style='border-radius:5px !important;box-shadow:0px 0px 0px !important;'><a class=""  href="<?php echo e(route('shops')); ?>" style=""> Shops</a></button>                </div>
                        </div>

                        <div class="col-md-12" style="margin:15px 0;border: 2px solid #2a8fbd;border-radius: 10px; padding: 20px 0px;background-image: linear-gradient(#333333, #2a8fbd);">
                            <div class="header-feature-caption  text-center">
                                <h2 style='color:white;'> Buy And Sell The Services ( Work Online From Your Home )</h2>
                                <button class="btn btn-primary secondNavButtons"style='border-radius:5px !important;box-shadow:0px 0px 0px !important;'> Services </button>                </div>
                        </div>
                        
                        <div class="col-md-12" style="margin:15px 0;border: 2px solid #2a8fbd;border-radius: 10px; padding: 20px 0px;background-image: linear-gradient(#333333, #2a8fbd);">
                            <div class="header-feature-caption  text-center">
                                <h2 style='color:white;'> Buy And Sell The Services ( Work Online From Your Home )</h2>
                                <!-- <button class="btn btn-primary secondNavButtons" style='border-radius:5px !important;box-shadow:0px 0px 0px !important;'><a class="popup-text" href="#POST-dialog" data-effect="mfp-move-from-top" style="color: black;text-decoration: none;"> <i class="fa fa-camera" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;"></i> Post Ad Now</a> </button> -->
                                <?php if(auth()->guard()->check()): ?>    
                                <button class="btn btn-primary secondNavButtons" style='border-radius:5px !important;box-shadow:0px 0px 0px !important;'><a class=""  href="<?php echo e(route('free.ads')); ?>" style="color: black;text-decoration: none;"> <i class="fa fa-camera" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;"></i> Post Ad Now</a> </button>
                                <?php endif; ?>
                                <?php if(auth()->guard()->guest()): ?> 
                                <button class="btn btn-primary secondNavButtons" style='border-radius:5px !important;box-shadow:0px 0px 0px !important;'><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top" style="color: black;text-decoration: none;"> <i class="fa fa-camera" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> Post Ad Now</a> </button>
                                <?php endif; ?>    
                            </div>
                        </div>

                    </div>
                    
                    <div class="row" style="margin:15px 0;display: flex;justify-content: center;">
                        <div class="col-lg-2 col-md-2">
                            <div class="single-service">
                                <i class="fa fa-couch"></i>
                                <h4>furniture</h4>
                            
                            </div>
                        </div>

                        

                        <div class="col-lg-2 col-md-2">
                            <div class="single-service">
                                <i class="fa fa-mobile"></i>
                                <h4>Mobiles</h4>
                            
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-2 col-md-2">
                            <div class="single-service">
                                <i class="fa fa-camera"></i>
                                <h4>Cameras</h4>
                            
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-2 col-md-2">
                            <div class="single-service">
                                <i class="fa fa-city"></i>
                                <h4>Real estates</h4>
                            
                            </div>
                        </div>
                        
                        
                        
                        <div class="col-lg-2 col-md-2">
                            <div class="single-service">
                                <i class="fa fa-desktop"></i>
                                <h4>Televisions</h4>
                            
                            </div>
                        </div>
                        
                        
                        
                        
                        <div class="col-lg-2 col-md-2">
                            <div class="single-service">
                                <i class="fa fa-laptop"></i>
                                <h4>Laptops</h4>
                            
                            </div>
                        </div>
                        
                        
                        
                        
                        <div class="col-lg-2 col-md-2">
                            <div class="single-service">
                                <i class="fa fa-suitcase"></i>
                                <h4>Bags</h4>
                            
                            </div>
                        </div>


                        

            
                        
                        
                        
                    </div>
                
            </section>

        </div>
            
        </div>


        <!-- //////////////////////////////////
	//////////////END PAGE CONTENT///////// 
	////////////////////////////////////-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\resources\views/home.blade.php ENDPATH**/ ?>