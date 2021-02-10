<?php $__env->startSection('content'); ?>


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
                
                <div class="col-md-12">
                    <h1 class="mb20 text-center">latest Featured <small><a href="#">View All</a></small></h1>
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
            <div class="row row-wrap home-owlC2 animated" id='3rdHomeSection'>
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
            <div class="row">
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
            <h1 class="mb20 text-center">Sponsored Ads <small><a href="#">View all</a></small></h1>
            <div class="row row-wrap home-owlC2 animated" id='4thtHomeSection'>
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
                <?php $__currentLoopData = $sponsored; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
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


             <!-- Here Will Be Hard Section -->
            <div class="row row-wrap bg-white animated" id='5thHomeSection' style="padding-top: 25px;">
                <div class="col-md-3">
                    <div style="margin: 5px auto;border-radius: 20px; border:2px solid #2a8fbd;overflow: hidden;">
                        <img src="https://via.placeholder.com/150x250.png">
                    </div>
                </div>

                <div class="col-md-9" style="padding: 10px;">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home" style="font-weight: 600;">New Arrivals</a></li>
                        <li><a data-toggle="tab" href="#menu1" style="font-weight: 600;">On Sale</a></li>
                        <li><a data-toggle="tab" href="#menu2" style="font-weight: 600;">Best Rated</a></li>
                      </ul>
                    
                      <div class="tab-content">
                        <div id="home" class="tab-pane fade in active" style="padding: 5px;">
                            <div class="row">
                                <div class="col-md-3" style="padding-top: 30px;">
                                    <img src="https://via.placeholder.com/100/0000FF/808080">
                                </div>
                                
                                <div class="col-md-3">
                                    <img src="https://via.placeholder.com/100/0000FF/808080">
                                </div>
                                <div class="col-md-3">
                                    <img src="https://via.placeholder.com/100/0000FF/808080">
                                </div>
                                <div class="col-md-3">
                                    <img src="https://via.placeholder.com/100/0000FF/808080">
                                </div>
                                <div class="col-md-3">
                                    <img src="https://via.placeholder.com/100/0000FF/808080">
                                </div>
                                <div class="col-md-3">
                                    <img src="https://via.placeholder.com/100/0000FF/808080">
                                </div>
                            </div>
                       </div>
                        <div id="menu1" class="tab-pane fade" style="padding: 5px;">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="https://via.placeholder.com/100/0000FF/808080">
                                </div>
                                
                                <div class="col-md-3">
                                    <img src="https://via.placeholder.com/100/0000FF/808080">
                                </div>
                                <div class="col-md-3">
                                    <img src="https://via.placeholder.com/100/0000FF/808080">
                                </div>
                                <div class="col-md-3">
                                    <img src="https://via.placeholder.com/100/0000FF/808080">
                                </div>
                                <div class="col-md-3">
                                    <img src="https://via.placeholder.com/100/0000FF/808080">
                                </div>
                                <div class="col-md-3">
                                    <img src="https://via.placeholder.com/100/0000FF/808080">
                                </div>
                            </div> </div>
                        <div id="menu2" class="tab-pane fade" style="padding: 5px;">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="https://via.placeholder.com/100/0000FF/808080">
                                </div>
                                
                                <div class="col-md-3">
                                    <img src="https://via.placeholder.com/100/0000FF/808080">
                                </div>
                                <div class="col-md-3">
                                    <img src="https://via.placeholder.com/100/0000FF/808080">
                                </div>
                                <div class="col-md-3">
                                    <img src="https://via.placeholder.com/100/0000FF/808080">
                                </div>
                                <div class="col-md-3">
                                    <img src="https://via.placeholder.com/100/0000FF/808080">
                                </div>
                                <div class="col-md-3">
                                    <img src="https://via.placeholder.com/100/0000FF/808080">
                                </div>
                            </div></div>
                      </div>
                </div>
                
            </div>

            <!-- Featured Products -->
            <h1 class="mb20 text-center">Featured Products <small><a href="#">View all</a></small></h1>
            <div class="row row-wrap home-owlC2 animated" id='6thtHomeSection'>
            <?php $__currentLoopData = $featuered; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
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

            <!-- New Products -->
            <h1 class="mb20 text-center">New Services <small><a href="#">View all</a></small></h1>
            <div class="row row-wrap home-owlC2 animated" id='7thHomeSection'>
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
                            <h5 class="product-title">Playstation Accessories</h5>
                            <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$119</span>
                                    </li>
                                </ul>
                                <p class="product-category"><i class="fa fa-headphones"></i>electronics</p>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-thumb">
                        <header class="product-header"><span class="product-label label label-success">New</span>
                            <img src="img/food_is_pride_800x600.jpg" alt="Image Alternative text" title="Food is Pride" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
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
                            <h5 class="product-title">Best Pasta</h5>
                            <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$264</span>
                                    </li>
                                </ul>
                                <p class="product-category"><i class="fa fa-cutlery"></i>food & drink</p>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="img/the_violin_800x600.jpg" alt="Image Alternative text" title="The Violin" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="3.9/5 rating">
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
                            <h5 class="product-title">Violin Lessons</h5>
                            <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$167</span>
                                    </li>
                                </ul>
                                <p class="product-category"><i class="fa fa-calendar"></i>events</p>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="img/waipio_valley_800x600.jpg" alt="Image Alternative text" title="waipio valley" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.8/5 rating">
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
                            <h5 class="product-title">Awesome Vacation</h5>
                            <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$166</span>
                                    </li>
                                </ul>
                                <p class="product-category"><i class="fa fa-plane"></i>travel</p>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <h5 class="product-title">Playstation Accessories</h5>
                            <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$119</span>
                                    </li>
                                </ul>
                                <p class="product-category"><i class="fa fa-headphones"></i>electronics</p>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-thumb">
                        <header class="product-header"><span class="product-label label label-success">New</span>
                            <img src="img/food_is_pride_800x600.jpg" alt="Image Alternative text" title="Food is Pride" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
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
                            <h5 class="product-title">Best Pasta</h5>
                            <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$264</span>
                                    </li>
                                </ul>
                                <p class="product-category"><i class="fa fa-cutlery"></i>food & drink</p>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="img/the_violin_800x600.jpg" alt="Image Alternative text" title="The Violin" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="3.9/5 rating">
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
                            <h5 class="product-title">Violin Lessons</h5>
                            <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$167</span>
                                    </li>
                                </ul>
                                <p class="product-category"><i class="fa fa-calendar"></i>events</p>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="img/waipio_valley_800x600.jpg" alt="Image Alternative text" title="waipio valley" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.8/5 rating">
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
                            <h5 class="product-title">Awesome Vacation</h5>
                            <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$166</span>
                                    </li>
                                </ul>
                                <p class="product-category"><i class="fa fa-plane"></i>travel</p>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- sell -->


            <section class="services-area pt-100 pb-70" id="services">
                
                    <div class="row">
                        <div class="col-xl-8 mx-auto text-center">
                            <div class="section-title">
                                <h4>Seller</h4>
                                <p>Sell Anything On RoyalSooq Free</p>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin:15px 0;display: flex;justify-content: center;">
                        <div class="col-lg-2 col-md-2">
                            <div class="single-service">
                                <i class="fa fa-home"></i>
                                <h4>Buildings</h4>
                            
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
                                <i class="fa fa-gamepad"></i>
                                <h4>Games</h4>
                            
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

                    <div class="row" >
                        <div class="col-md-12">
                            <div class="header-feature-caption  text-center">
                                <button class="btn btn-primary secondNavButtons" ><a class="popup-text" href="#POST-dialog" data-effect="mfp-move-from-top" style="color: white;text-decoration: none;"> <i class="fa fa-camera" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;"></i> Post Ad Now</a> </button>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin: 10px auto ;width: 75%;"> 

                        <div class="col-md-12" style="margin:15px 0;border: 2px solid #2a8fbd;border-radius: 20px; padding: 20px 0px;">
                            <div class="header-feature-caption  text-center">
                                <h2> Make Your Online Market On RoyalSooq</h2>
                                <button class="btn btn-primary secondNavButtons"> Shops </button>                </div>
                        </div>

                        <div class="col-md-12" style="margin:15px 0;border: 2px solid #2a8fbd;border-radius: 20px; padding: 20px 0px;">
                            <div class="header-feature-caption  text-center">
                                <h2> Buy And Sell The Services ( Work Online From Your Home )</h2>
                                <button class="btn btn-primary secondNavButtons"> Services </button>                </div>
                        </div>

                    </div>
                
            </section>

        
            
        </div>


        <!-- //////////////////////////////////
	//////////////END PAGE CONTENT///////// 
	////////////////////////////////////-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\royal_git\resources\views/home.blade.php ENDPATH**/ ?>