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
            <div class="row head" style="height: 430px; display: flex; justify-content: center;align-items: center;">

                <div class="col-12 col-md-2">
                    <div style="margin: 5px auto;width: 100%;">
                        <!-- <img src="https://via.placeholder.com/150/FF0000/FFFFFF?Text=Down.com"> -->
                       <a href="<?php echo e($left_top[0]->link); ?>" target="_blank"> <img src="<?php echo e($left_top[0]->image); ?>"></a>
                    </div>
                    
                    <div style="margin: 5px auto;width: 100%;">
                    <a href="<?php echo e($left_bottom[0]->link); ?>" target="_blank"><img src="<?php echo e($left_bottom[0]->image); ?>"></a>
                    </div>
                    
                </div>

                <div class="col-12 col-md-8" >
                    <div class="owl-carousel owl-slider" id="owl-carousel-slider" data-inner-pagination="true" data-white-pagination="true">
                        <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <div class="bg-holder">
                                <img src="<?php echo e($s->image); ?>" alt="<?php echo e($s->title); ?>" title="Branding  iPad Interactive Design" />
                                <div class="vert-center text-white text-center slider-caption">
                                    <!-- <h2 class="text-uc">New Bloke Collection</h2> -->
                                    <p class="text-bigger"><?php echo e($s->des); ?></p>
                                    <p class="text-hero"><?php echo e($s->title); ?></p><a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                      
                        
                    </div>

                </div>

                <div class="col-12 col-md-2">
                    <div style="margin: 5px auto;width: 100%;">
                    <a href="<?php echo e($right_top[0]->link); ?>" target="_blank"><img src="<?php echo e($right_top[0]->image); ?>"> </a>               </div>
                    
                    <div style="margin: 5px auto;width: 100%;">
                    <a href="<?php echo e($right_bottom[0]->link); ?>" target="_blank">  <img src="<?php echo e($right_bottom[0]->image); ?>"> </a>                   </div>
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
                    <h1 class="mb20 text-center"> <?php echo e(__('index.feature')); ?> <small><a href="#">View All</a></small></h1>
                    <div class="row row-wrap home-owlC2">
                       
                    <?php $__currentLoopData = $latest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <div>
                    <div class="product-thumb">
                        <header class="product-header">
                        <form method="post" action="<?php echo e(route('add.favorites')); ?>">
                                <?php echo csrf_field(); ?> 
                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">  

                                <button class="btn fav" type="submit"><i class="fa fa-heart"></i> </button>
                        </form>    
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
                                        <div class="product-desciption"><span class="item-location"><i class="fa fa-map-marker"></i> <?php echo e($product->city->city ?? ''); ?></span>   <i class="fa fa-clock-o"></i> <span><?php echo e(date_format($product->created_at,'d M Y')); ?></span>
                                        <br> 
                                        </div>
                            <!-- <span class="info-row">
										<span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="" data-original-title="Private">
											
										</span>&nbsp;
										<span class="date"><i class=" fa fa-clock-o"></i> <?php echo e(date_format($product->created_at,'d M Y')); ?> </span>
																					<span class="category">
												<i class="fa fa-list-alt"></i>&nbsp;
												<a href="<?php echo e(route('category.sub', $product->categories->id)); ?>" class="info-link"><?php echo e($product->categories->name); ?></a>
											</span>
																				<span class="item-location">
											<i class="fa fa-user"></i>&nbsp;
										<a href="<?php echo e(route('shops2', $product->id)); ?>" class="info-link"><?php echo e($product->user->name); ?></a> 
										</span>
									</span> -->

                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price"><?php echo e($product->price); ?> $</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <!-- <li>
                                    <form method="post" action="#">
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
                                <li><a href="Product-details/<?php echo e($product->slug); ?>" class="btn btn-sm"  style="
  color: #626262;border: solid 1px #fdeb18;"><i class="fa fa-comment" style=" color: #fdeb18;"></i> chat</a>
                                    <a href="Product-details/<?php echo e($product->slug); ?>" class="btn btn-sm" style="
   color: #626262; border: solid 1px #73b902;"><i class="fa fa-phone"style="    color: #73b902;"></i> call</a>
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
                    <h1 class="mb20 text-center"> <?php echo e(__('index.latest')); ?> <small><a href="#">View All</a></small></h1>
                    <div class="row row-wrap home-owlC2">
                       
                    <?php $__currentLoopData = $latest2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <div>
                    <div class="product-thumb">
                        <header class="product-header">
                        <form method="post" action="<?php echo e(route('add.favorites')); ?>">
                                <?php echo csrf_field(); ?> 
                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">  

                                <button class="btn fav" type="submit"><i class="fa fa-heart"></i> </button>
                        </form>
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
                            <div class="product-desciption"><span class="item-location"><i class="fa fa-map-marker"></i> <?php echo e($product->city->city ?? ''); ?> </span>   <i class="fa fa-clock-o"></i> <span><?php echo e(date_format($product->created_at,'d M Y')); ?></span>
                                        <br>
                                            
                                        </div>
										<!-- <span class="date"><i class=" fa fa-clock-o"></i> <?php echo e(date_format($product->created_at,'d M Y')); ?> </span>
																					<span class="category">
												<i class="fa fa-list-alt"></i>&nbsp;
												<a href="<?php echo e(route('category.sub', $product->categories->id)); ?>" class="info-link"><?php echo e($product->categories->name); ?></a>
											</span>
																				<span class="item-location">
											<i class="fa fa-user"></i>&nbsp;
										<a href="<?php echo e(route('shops2', $product->id)); ?>" class="info-link"><?php echo e($product->user->name); ?></a> 
										</span>
									</span> -->
                            <!-- <p class="product-desciption"><?php echo e($product->sku); ?></p> -->
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price"><?php echo e($product->price); ?> $</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <!-- <li>
                                    <form method="post" action="#">
                                    <?php echo csrf_field(); ?>
                                    <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i>  </button>
                                    <input type="hidden" name="slug" value="<?php echo e($product->slug); ?>">
                                    <input type="hidden" name="qty" value="1">
                                </form>   
                                     </li> -->
                                    <!-- <?php if(auth()->guard()->check()): ?>
                                <li> -->
                                <!-- <form method="post" action="<?php echo e(route('add.favorites')); ?>">
                                    <?php echo csrf_field(); ?> -->
                                    <!-- <button class="btn" id="fav" type="submit"><i class="fa fa-heart"></i> favorite </button>
                                     <input type="hidden" name="product_id" id="pro_id" value="<?php echo e($product->id); ?>">  -->
                                    
                                    
                                <!-- </form>    -->
                                <!-- </li>
                                <?php endif; ?>  -->


                                <li><a href="Product-details/<?php echo e($product->slug); ?>" class="btn btn-sm"  style="
  color: #626262;border: solid 1px #fdeb18;"><i class="fa fa-comment" style=" color: #fdeb18;"></i> chat</a>
                                    <a href="Product-details/<?php echo e($product->slug); ?>" class="btn btn-sm" style="
   color: #626262; border: solid 1px #73b902;"><i class="fa fa-phone"style="    color: #73b902;"></i> call</a>
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
            
            <h1 class="mb20 text-center"><?php echo e(__('index.weakly')); ?> <small><a href="#">View all</a></small></h1>
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
                        <form method="post" action="<?php echo e(route('add.favorites')); ?>">
                                <?php echo csrf_field(); ?> 
                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">  

                                <button class="btn fav" type="submit"><i class="fa fa-heart"></i> </button>
                        </form>    
                            <img src="<?php echo e($product->main_image_url); ?>" alt="Image Alternative text" title="Gamer Chick" style="max-height: 200px;" />
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
                                     <div class="product-desciption"><span class="item-location"><i class="fa fa-map-marker"></i> <?php echo e($product->city->city ?? ''); ?> </span>   <i class="fa fa-clock-o"></i> <span><?php echo e(date_format($product->created_at,'d M Y')); ?></span>
                                        <br>
                                            
                                    </div>
                            <!-- <span class="info-row">
										<span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="" data-original-title="Private">
											
										</span>&nbsp;
										<span class="date"><i class=" fa fa-clock-o"></i> <?php echo e(date_format($product->created_at,'d M Y')); ?> </span>
																					<span class="category">
												<i class="fa fa-list-alt"></i>&nbsp;
												<a href="<?php echo e(route('category.sub', $product->categories->id)); ?>" class="info-link"><?php echo e($product->categories->name); ?></a>
											</span>
																				<span class="item-location">
											<i class="fa fa-user"></i>&nbsp;
										<a href="<?php echo e(route('shops2', $product->id)); ?>" class="info-link"></a> 
										</span>
							</span> -->

                            <!-- <p class="product-desciption"><?php echo e($product->sku); ?></p> -->
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price"><?php echo e($product->price); ?> $</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                          <!-- cart -->
                                <!-- <li>
                                    <form method="post" action="<?php echo e(route('add.to.cart')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i>  </button>
                                    <input type="hidden" name="slug" value="<?php echo e($product->slug); ?>">
                                    <input type="hidden" name="qty" value="1">
                                </form>   -->
                                <!-- <a class="e-product btn" data-id="<?php echo e($product->id); ?>"  href="##"><i class="ion-android-cart"></i> add to cart</a> -->

                             <!-- </li> -->
                                    <?php if(auth()->guard()->check()): ?>
                        <!-- favorite -->
                             <!-- <li>
                                <form method="post" action="<?php echo e(route('add.favorites')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <button class="btn" type="submit"><i class="fa fa-heart"></i> </button>
                                    <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                    
                                    
                                </form>   
                             </li> -->
                                <?php endif; ?>
                                <br>
                                <li><a href="Product-details/<?php echo e($product->slug); ?>" class="btn btn-sm"  style="
  color: #626262;border: solid 1px #fdeb18;"><i class="fa fa-comment" style=" color: #fdeb18;"></i> chat</a>
                                    <a href="Product-details/<?php echo e($product->slug); ?>" class="btn btn-sm" style="
   color: #626262; border: solid 1px #73b902;"><i class="fa fa-phone"style="    color: #73b902;"></i> call</a>
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
                                    <form method="post" action="#">
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


             <!-- Here Will Be Hard Section -->             <br>         
                <div class="row row-wrap animated" id='5thHomeSection' style="padding-top: 40px;">              
                  <div class="col-md-3">                 
                         <div style="margin: 5px auto;border-radius: 20px; border:2px solid #2a8fbd;overflow: hidden;">                 
                               <a href="Product-details/<?php echo e($product->slug); ?>"> <img src="<?php echo e($single_item->main_image_url); ?>">  </a>          
                               </div>            
                                </div>          
                                      <div class="col-md-9" style="padding: 10px;">               
                                           <ul class="nav nav-tabs">                   
                                                    <li class="active"><a data-toggle="tab" href="#home" style="font-weight: 600;"><?php echo e(__('index.new_arrival')); ?></a></li>      
                                  <li><a data-toggle="tab" href="#menu1" style="font-weight: 600;"><?php echo e(__('index.on_sale')); ?></a></li>                    
                                      <li><a data-toggle="tab" href="#menu2" style="font-weight: 600;"><?php echo e(__('index.best')); ?></a></li>              
                                            </ul>                                       
                                         <div class="tab-content">                   
                                                  <div id="home" class="tab-pane fade in active" style="padding: 5px;">                            <div class="row">                            
                                                          <?php $__currentLoopData = $new_arrivals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                          
                                                                <div class="col-md-3" style="padding-top: 30px;">                  
                                                                              <a href="<?php echo e(route('sponsord.product.details', $product->slug)); ?>"> 
                                                                                  <img src="<?php echo e($product->main_image_url); ?>"></a>                               
                                                                                       <br>                                
                                                                                           <h5 class="product-title text-center"><a href="<?php echo e(route('sponsord.product.details', $product->slug)); ?>"><?php echo e($product->name); ?></a></h5> 
                                                                                           <span class="info-row">
										<span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="" data-original-title="Private">
											
										</span>&nbsp;
										<span class="date"><i class=" fa fa-clock-o"></i> <?php echo e(date_format($product->created_at,'d M Y')); ?> </span>
																					<span class="category">
												<i class="fa fa-list-alt"></i>&nbsp;
												<a href="<?php echo e(route('category.sub', $product->categories->id)); ?>" class="info-link"><?php echo e($product->categories->name); ?></a>
											</span>
																				<span class="item-location">
											<i class="fa fa-user"></i>&nbsp;
										<a href="<?php echo e(route('shops2', $product->id)); ?>" class="info-link"></a> 
										</span>
									</span>           
                                                                                                           <div class="product-meta">                            
                                         <h5 class="text-center"> $ <?php echo e($product->price); ?></h5>                             
                                           </div>       
                                                                 </div>             
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                                                           
                                                                                 </div>                       </div>                      

                                                                                   <div id="menu1" class="tab-pane fade" style="padding: 5px;">                          
                                                                                     <div class="row">                                                         
                                                                                            <?php $__currentLoopData = $on_sale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                           
                                                                                             <div class="col-md-3" style="padding-top: 30px;">                                 
                                                                                      <a href="<?php echo e(route('sponsord.product.details', $product->slug)); ?>"> <img src="<?php echo e($product->main_image_url); ?>"></a>                                    <br>                                
                                                                                          <h5 class="product-title text-center"><a href="<?php echo e(route('sponsord.product.details', $product->slug)); ?>"><?php echo e($product->name); ?></a></h5>
                                                                                          <span class="info-row">
										<span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="" data-original-title="Private">
											
										</span>&nbsp;
										<span class="date"><i class=" fa fa-clock-o"></i> <?php echo e(date_format($product->created_at,'d M Y')); ?> </span>
																					<span class="category">
												<i class="fa fa-list-alt"></i>&nbsp;
												<a href="<?php echo e(route('category.sub', $product->categories->id)); ?>" class="info-link"><?php echo e($product->categories->name); ?></a>
											</span>
																				<span class="item-location">
											<i class="fa fa-user"></i>&nbsp;
										<a href="<?php echo e(route('shops2', $product->id)); ?>" class="info-link"></a> 
										</span>
									</span> 
                                                                                                                 <div class="product-meta">                            
                                                                                                                        <h5 class="text-center"> $ <?php echo e($product->price); ?></h5>                                </div>                                </div>                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                           </div> </div>                                                                                             <div id="menu2" class="tab-pane fade" style="padding: 5px;">                            <div class="row">                            <?php $__currentLoopData = $best_rated; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                     
                                                                                                                                   <div class="col-md-3" style="padding-top: 30px;">    

                                                                                        <a href="<?php echo e(route('sponsord.product.details', $product->slug)); ?>"> <img src="<?php echo e($product->main_image_url); ?>"></a>                                    <br>                                    <h5 class="product-title text-center"><a href="<?php echo e(route('sponsord.product.details', $product->slug)); ?>"><?php echo e($product->name); ?></a></h5>  
                                                                                        <span class="info-row">
										<span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="" data-original-title="Private">
											
										</span>&nbsp;
										<span class="date"><i class=" fa fa-clock-o"></i> <?php echo e(date_format($product->created_at,'d M Y')); ?> </span>
																					<span class="category">
												<i class="fa fa-list-alt"></i>&nbsp;
												<a href="<?php echo e(route('category.sub', $product->categories->id)); ?>" class="info-link"><?php echo e($product->categories->name); ?></a>
											</span>
																				<span class="item-location">
											<i class="fa fa-user"></i>&nbsp;
										<a href="<?php echo e(route('shops2', $product->id)); ?>" class="info-link"></a> 
										</span>
									</span>
                                                                                        <div class="product-meta">                               <h5 class="text-center"> $ <?php echo e($product->price); ?></h5>                                </div>                                </div>                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                                                       </div></div>                      </div>                </div>                            </div>


    <!-- New Services -->
    <br>
             <h1 class="mb20 text-center"><?php echo e(__('index.f_service')); ?> <small><a href="#">View all</a></small></h1>
             <div class="row row-wrap home-owlC2 animated" id='7thHomeSection'>
               
               <?php $__currentLoopData = $new_servcies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="storage/<?php echo e($s->image); ?>" alt="Image Alternative text" title="Gamer Chick" style="max-height :200px;" />
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
                            <div class="product-desciption"><i class="fa fa-clock-o"></i> <span><?php echo e(date_format($s->created_at,'d M Y')); ?></span>
                                        <br>
                                            
                                    </div>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$<?php echo e($s->price); ?></span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                  
                                <li><a href="<?php echo e(route('service.details',$s->id)); ?>" class="btn btn-sm"  style="
  color: #626262;border: solid 1px #fdeb18;"><i class="fa fa-comment" style=" color: #fdeb18;"></i> chat</a>
                                    <a href="<?php echo e(route('service.details',$s->id)); ?>" class="btn btn-sm" style="
   color: #626262; border: solid 1px #73b902;"><i class="fa fa-phone"style="    color: #73b902;"></i> call</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
              
             </div>




            <!-- Featured Services -->
            <h1 class="mb20 text-center"><?php echo e(__('index.n_service')); ?><small><a href="#">View all</a></small></h1>
            <div class="row row-wrap home-owlC2 animated" id='6thtHomeSection'>
            <?php $__currentLoopData = $featured_servcies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <div>
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="storage/<?php echo e($s->image); ?>" alt="Image Alternative text" title="Gamer Chick" style="max-height :200px;" />
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
                                    <div class="product-desciption"><i class="fa fa-clock-o"></i> <span><?php echo e(date_format($s->created_at,'d M Y')); ?></span>
                                        <br>
                                            
                                    </div>
                           
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$<?php echo e($s->price); ?></span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                   <!-- cart -->
                                   
                                <!-- <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li> -->
                                    <li><a href="<?php echo e(route('service.details',$s->id)); ?>" class="btn btn-sm"  style="
  color: #626262;border: solid 1px #fdeb18;"><i class="fa fa-comment" style=" color: #fdeb18;"></i> chat</a>
                                    <a href="<?php echo e(route('service.details',$s->id)); ?>" class="btn btn-sm" style="
   color: #626262; border: solid 1px #73b902;"><i class="fa fa-phone"style="    color: #73b902;"></i> call</a>
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
                                <button class="btn btn-primary secondNavButtons" style='border-radius:5px !important;box-shadow:0px 0px 0px !important;'><a class=""  href="<?php echo e(route('shops')); ?>" style=""> <?php echo e(__('index.shops')); ?></a></button>                </div>
                        </div>

                        <div class="col-md-12" style="margin:15px 0;border: 2px solid #2a8fbd;border-radius: 10px; padding: 20px 0px;background-image: linear-gradient(#333333, #2a8fbd);">
                            <div class="header-feature-caption  text-center">
                                <h2 style='color:white;'> Buy And Sell The Services ( Work Online From Your Home )</h2>
                                <button class="btn btn-primary secondNavButtons"style='border-radius:5px !important;box-shadow:0px 0px 0px !important;'> <?php echo e(__('index.services')); ?> </button>                </div>
                        </div>
                        
                        <div class="col-md-12" style="margin:15px 0;border: 2px solid #2a8fbd;border-radius: 10px; padding: 20px 0px;background-image: linear-gradient(#333333, #2a8fbd);">
                            <div class="header-feature-caption  text-center">
                                <h2 style='color:white;'> Buy And Sell The Services ( Work Online From Your Home )</h2>
                                <!-- <button class="btn btn-primary secondNavButtons" style='border-radius:5px !important;box-shadow:0px 0px 0px !important;'><a class="popup-text" href="#POST-dialog" data-effect="mfp-move-from-top" style="color: black;text-decoration: none;"> <i class="fa fa-camera" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;"></i> Post Ad Now</a> </button> -->
                                <?php if(auth()->guard()->check()): ?>    
                                <button class="btn btn-primary secondNavButtons" style='border-radius:5px !important;box-shadow:0px 0px 0px !important;'><a class=""  href="<?php echo e(route('free.ads')); ?>" style="color: black;text-decoration: none;"> <i class="fa fa-camera" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;"></i> <?php echo e(__('index.free_ad')); ?></a> </button>
                                <?php endif; ?>
                                <?php if(auth()->guard()->guest()): ?> 
                                <button class="btn btn-primary secondNavButtons" style='border-radius:5px !important;box-shadow:0px 0px 0px !important;'><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top" style="color: black;text-decoration: none;"> <i class="fa fa-camera" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> <?php echo e(__('index.free_ad')); ?></a> </button>
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
   
    <!-- <script>
    $('.btn').click(function(){ 
        alert('hello');
$.ajax({
        url:'addFavorites',
        type:'post',
        dataType:'json',
        data:{_token:'<?php echo e(csrf_token()); ?>',id:}


});
    });
</script> -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\resources\views/home.blade.php ENDPATH**/ ?>