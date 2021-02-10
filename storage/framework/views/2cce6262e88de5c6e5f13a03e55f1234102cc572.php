<?php $__env->startSection('content'); ?>
<?php
// if(session()->get('my_country')== 2){
//     $currency = 'SAR';
// }else{
//     $currency = 'EGP';
    
// }
?>
<style>
  
    .unchecked {
  color: gray;
}

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
    padding: 9px;
    -webkit-backface-visibility: hidden;
    -webkit-touch-callout: none;
}
.owl-carousel .product-thumb {
    margin: 5px 0;
    padding: 16px;
}
.owl-carousel .product-thumb {
    margin: 5px 0;
    padding: 0px;
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
            <div class="row head" style="">

                <div class="col-lg-2 col-md-2 hidden-s">
                    <div style="margin: 5px auto;width: 100%;">
                        <!-- <img src="https://via.placeholder.com/150/FF0000/FFFFFF?Text=Down.com"> -->
                       <a href="<?php echo e($left_top[0]->link); ?>" target="_blank"> <img src="<?php echo e(asset($left_top[0]->image)); ?>"></a>
                    </div>
                    
                    <div style="margin: 5px auto;width: 100%;">
                    <a href="<?php echo e($left_bottom[0]->link); ?>" target="_blank"><img src="<?php echo e(asset($left_bottom[0]->image)); ?>"></a>
                    </div>
                    
                </div>

                <div class="col-12 col-md-8" >
                    <div class="owl-carousel owl-slider" id="owl-carousel-slider" data-inner-pagination="true" data-white-pagination="true">
                        <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <div class="bg-holder">
                                <img src="<?php echo e(asset($s->image)); ?>" alt="<?php echo e($s->title); ?>" title="<?php echo e($s->title); ?>" />
                                <!--<div class="vert-center text-white text-center slider-caption">-->
                                    <!-- <h2 class="text-uc">New Bloke Collection</h2> -->
                                <!--    <p class="text-bigger"><?php echo e($s->des); ?></p>-->
                                <!--    <p class="text-hero"><?php echo e($s->title); ?></p><a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>-->
                                <!--</div>-->
                            </div>
                        </div>
                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                      
                        
                    </div>

                </div>

                <div class="col-lg-2 col-md-2 hidden-s">
                    <div style="margin: 5px auto;width: 100%;">
                    <a href="<?php echo e($right_top[0]->link); ?>" target="_blank"><img src="<?php echo e(asset($right_top[0]->image)); ?>"> </a>               </div>
                    
                    <div style="margin: 5px auto;width: 100%;">
                    <a href="<?php echo e($right_bottom[0]->link); ?>" target="_blank">  <img src="<?php echo e(asset($right_bottom[0]->image)); ?>"> </a>                   </div>
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
        
      <h1 class="mb20 text-center"> <?php echo e(__('index.feature')); ?> <small><a href="<?php echo e(route('AllFeaturedAds')); ?>"><?php echo e(__('index.more_ads')); ?></a></small> </h1>
                    <div class="row row-wrap home-owlC2">
                       
                    <?php $__currentLoopData = $latest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <div>
    
            <a href="Product-details/<?php echo e($product->slug); ?>">
                 <div class="product-thumb">
                        <header class="product-header">
                        <form method="post" action="<?php echo e(route('add.favorites')); ?>">
                                <?php echo csrf_field(); ?> 
                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">  

                                <button class="btn fav" type="submit"><i class="fa fa-heart"></i> </button>
                        </form>    
                        <img src="<?php echo e($product->main_image_url); ?>" alt="<?php echo e($product->name); ?>" title="<?php echo e($product->name); ?>" style="height: 200px;" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="<?php echo e(number_format($product->averageRating)); ?>/5 rating">
                            
                        <?php echo str_repeat('<li><i class="fa fa-star "></i></li>', number_format($product->averageRating)) ?> 
                        <?php echo str_repeat('<span class="fa fa-star unchecked"></span>', 5 - number_format($product->averageRating)) ?> 

                            </ul>
                            <h5 class="product-title" style="height: 37px;overflow: hidden;"><?php echo e($product->name); ?></h5>
                                        <div class="product-desciption"><span class="item-location"><i class="fa fa-map-marker"></i> <?php echo e($product->city->city ?? ''); ?></span>   <i class="fa fa-clock-o"></i> <span><?php echo e(date_format($product->created_at,'d M Y')); ?></span>
                                        <br> 
                                        </div>
                           

                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price"><?php echo e($product->price); ?> <?php echo e($product->country->currency); ?></span>
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
                                <li><a href="<?php echo e(route('chat.message',$product->id)); ?>" class="btn btn-sm chat"  style="
  color: c;border: solid 1px #fdeb18;"><i class="fa fa-comment" style=" c"></i> <?php echo e(__('index.chat')); ?></a>
                                    <a href="tel:<?php echo e($product->user->phone ?? null); ?>" class="btn btn-sm call" style="
   color: c; border: solid 1px #73b902;"><i class="fa fa-phone"style="c"></i> <?php echo e(__('index.call')); ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div></a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </div>


        <div class="gap"></div>

   <div class="">
                    <h1 class="mb20 text-center"> <?php echo e(__('index.latest')); ?> <small><a href="<?php echo e(route('AllLatestAds')); ?>"><?php echo e(__('index.more_ads')); ?></a></small></h1>
                    <div class="row row-wrap home-owlC2">
                       
                    <?php $__currentLoopData = $latest2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <div>
            <a href="Product-details/<?php echo e($product->slug); ?>">
                    <div class="product-thumb">
                        <header class="product-header">
                        <form method="post" action="<?php echo e(route('add.favorites')); ?>">
                                <?php echo csrf_field(); ?> 
                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">  

                                <button class="btn fav" type="submit"><i class="fa fa-heart"></i> </button>
                        </form>
                            <img src="<?php echo e($product->main_image_url); ?>" alt="<?php echo e($product->name); ?>" title="<?php echo e($product->name); ?>" style="height: 200px;" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="<?php echo e(number_format($product->averageRating)); ?>/5 rating">
                                <?php echo str_repeat('<li><i class="fa fa-star "></i></li>', number_format($product->averageRating)) ?> 
                                <?php echo str_repeat('<span class="fa fa-star unchecked"></span>', 5 - number_format($product->averageRating)) ?> 
                            </ul>
                            <h5 class="product-title" style="height: 37px;overflow: hidden;"><?php echo e($product->name); ?></h5>
                            <div class="product-desciption"><span class="item-location"><i class="fa fa-map-marker"></i> <?php echo e($product->city->city ?? ''); ?> </span>   <i class="fa fa-clock-o"></i> <span><?php echo e(date_format($product->created_at,'d M Y')); ?></span>
                                        <br>
                                            
                                        </div>
										
                            <!-- <p class="product-desciption"><?php echo e($product->sku); ?></p> -->
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price"><?php echo e($product->price); ?> <?php echo e($product->country->currency); ?></span>
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


                                <li><a href="<?php echo e(route('chat.message',$product->id)); ?>" class="btn btn-sm chat"  style="
  color: c;border: solid 1px #fdeb18;"><i class="fa fa-comment" style=" c"></i> <?php echo e(__('index.chat')); ?></a>
                                    <a href="tel:<?php echo e($product->user->phone ?? null); ?>" class="btn btn-sm call" style="
   color: c; border: solid 1px #73b902;"><i class="fa fa-phone"style="c"></i> <?php echo e(__('index.call')); ?></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div></a>
                </div>
                 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </div>
                </div>
            </div>
          
            <!-- E3lnat -->
            
            <!--<div class="gap gap-small"></div>-->

            <!-- Latest Ads -->
            
            <!--<h1 class="mb20 text-center"><?php echo e(__('index.weakly')); ?> <small><a href="#"></a></small></h1>-->
            <br>
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
                <br>
                <?php $__currentLoopData = $weekly; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <div class="row5">
                    <div class="product-thumb">
                        <header class="product-header">
                        <form method="post" action="<?php echo e(route('add.favorites')); ?>">
                                <?php echo csrf_field(); ?> 
                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">  

                                <button class="btn fav" type="submit"><i class="fa fa-heart"></i> </button>
                        </form>    
                            <img src="<?php echo e($product->main_image_url); ?>" alt="<?php echo e($product->name); ?>" title="<?php echo e($product->name); ?>" style="max-height: 200px;" />
                        </header>
                        <div class="product-inner">
                                 <ul class="icon-group icon-list-rating" title="<?php echo e(number_format($product->averageRating)); ?>/5 rating">
                            
                                     <?php echo str_repeat('<li><i class="fa fa-star "></i></li>', number_format($product->averageRating)) ?> 
                                    <?php echo str_repeat('<span class="fa fa-star unchecked"></span>', 5 - number_format($product->averageRating)) ?>                                   
                                </ul>
                            <h5 class="product-title" style="height: 37px;overflow: hidden;"><?php echo e($product->name); ?></h5>
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
                                    <li><span class="product-price"><?php echo e($product->price); ?> <?php echo e($product->country->currency); ?></span>
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
                                <li><a href="<?php echo e(route('chat.message',$product->id)); ?>" class="btn btn-sm chat"  style="
  color: c;border: solid 1px #fdeb18;"><i class="fa fa-comment" style=" c"></i> <?php echo e(__('index.chat')); ?></a>
                                    <a href="tel:<?php echo e($product->user->phone ?? null); ?>" class="btn btn-sm call" style="
   color: c; border: solid 1px #73b902;"><i class="fa fa-phone"style="c"></i> <?php echo e(__('index.call')); ?></a>
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


            
                <div class="row " id='5thHomeSection' style="">              
                  <div class="col-md-3">                 
                         <!--<div style="margin: 5px auto;border-radius: 20px; border:2px solid #2a8fbd;overflow: hidden;">                 -->
                               <!-- <a href="Product-details/<?php echo e($single_item->slug ?? ''); ?>"> <img src="<?php echo e($single_item->main_image_url ?? ''); ?>">  </a>           -->
                         <!--      </div>            -->
                                </div>          
                                                   
                                  <!--         <ul class="nav nav-tabs">                   -->
                                  <!--                  <li class="active"><a data-toggle="tab" href="#home" style="font-weight: 600;"><?php echo e(__('index.new_arrival')); ?></a></li>      -->
                                  <!--<li><a data-toggle="tab" href="#menu1" style="font-weight: 600;"><?php echo e(__('index.on_sale')); ?></a></li>                    -->
                                  <!--    <li><a data-toggle="tab" href="#menu2" style="font-weight: 600;"><?php echo e(__('index.best')); ?></a></li>              -->
                                  <!--          </ul>                                       -->
                                         <div class="tab-content">                   
                                                  <div id="home" class="tab-pane fade in active">                            <div class="row">                            
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
                                         <h5 class="text-center"><?php echo e($product->country->currency); ?> <?php echo e($product->price); ?></h5>                             
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
                                                                                                                        <h5 class="text-center"> <?php echo e($product->country->currency); ?> <?php echo e($product->price); ?></h5>                                </div>                                </div>                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                           </div> </div>                                                                                             <div id="menu2" class="tab-pane fade" style="padding: 5px;">                            <div class="row">                            <?php $__currentLoopData = $best_rated; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                     
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
                                                                                        <div class="product-meta">                               <h5 class="text-center"> <?php echo e($product->country->currency); ?> <?php echo e($product->price); ?></h5>                                </div>                                </div>                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                                                       </div></div>                      </div>          


    <!-- New Services -->

             <!-- <h1 class="text-center"><?php echo e(__('index.f_service')); ?></h1>
             <div class="row row-wrap home-owlC2 animated" id='7thHomeSection'>
               
               <?php $__currentLoopData = $new_servcies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="<?php echo e(asset('storage/'.$s->image)); ?>" alt="<?php echo e($s->name); ?>" title="<?php echo e($s->name); ?>" style="max-height :200px;" />
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
                                  
                                <li><a href="<?php echo e(route('service.details',$s->id)); ?>" class="btn btn-sm chat"  style="
  color: c;border: solid 1px #fdeb18;"><i class="fa fa-comment" style=" c"></i> <?php echo e(__('index.chat')); ?></a>
                                    <a href="<?php echo e(route('service.details',$s->id)); ?>" class="btn btn-sm call" style="
   color: c; border: solid 1px #73b902;"><i class="fa fa-phone"style="c"></i> <?php echo e(__('index.call')); ?></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
              
             </div> -->


            <!-- Featured Services -->
                 <!-- <div class="gap"></div>
            <h1 class="text-center"><?php echo e(__('index.n_service')); ?></h1>
            <div class="row row-wrap home-owlC2 animated" id='6thtHomeSection'>
            <?php $__currentLoopData = $featured_servcies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <div>
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="<?php echo e(asset('storage/'.$s->image)); ?>" alt="<?php echo e($s->name); ?>" title="<?php echo e($s->name); ?>" style="max-height :200px;" />
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
                                <ul class="product-actions-list"> -->
                                   <!-- cart -->
                                   
                                <!-- <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li> -->
                                    <!-- <li><a href="<?php echo e(route('service.details',$s->id)); ?>" class="btn btn-sm chat"  style="
                                    color: c;border: solid 1px #fdeb18;"><i class="fa fa-comment" style=" c"></i> <?php echo e(__('index.chat')); ?></a>
                                    <a href="<?php echo e(route('service.details',$s->id)); ?>" class="btn btn-sm call" style="
                                color: c; border: solid 1px #73b902;"><i class="fa fa-phone"style="c"></i> <?php echo e(__('index.call')); ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </div> -->

        
            <!-- sell -->


            <section class="services-area " id="services">
                
                 
                    

                    

                    <div class="row" style="margin: 10px auto ;width: 75%;"> 

                      

                        <div class="col-md-12" style="margin:15px 0;border: 2px solid #2a8fbd;border-radius: 10px; padding: 20px 0px;background-image: linear-gradient(#333333, #2a8fbd);">
                            <div class="header-feature-caption  text-center">
                                  <?php if(App::getLocale() === 'en'): ?>
                                <h2 style='color:white;'> Make your shop page in royal sooq and put your ads for free</h2>
                                  <?php else: ?>>
                                   <h2 style='color:white;'>  افتح متجرك على رويال سوق وأضف اعلاناتك ومنتجاتك مجانا</h2>
                                   <?php endif; ?> 
                                <button class="btn btn-primary secondNavButtons"style='border-radius:5px !important;box-shadow:0px 0px 0px !important;'> <?php echo e(__('index.shops')); ?> </button>                </div>
                        </div>
                        
                        <div class="col-md-12" style="margin:15px 0;border: 2px solid #2a8fbd;border-radius: 10px; padding: 20px 0px;background-image: linear-gradient(#333333, #2a8fbd);">
                            <div class="header-feature-caption  text-center">
                                <?php if(App::getLocale() === 'en'): ?>
                                <h2 style='color:white;'> Buy And Sell The Sell New and Used on Royal sooq free</h2>
                                  <?php else: ?>
                                     <h2 style='color:white;'> بيع واشتري جديد ومستعمل على رويال سوق مجانا </h2>
                                   <?php endif; ?>
                                     <?php if(App::getLocale() === 'en'): ?>
                                 <button class="btn btn-primary secondNavButtons" style='border-radius:5px !important;box-shadow:0px 0px 0px !important;'><a class="popup-text" href="#POST-dialog" data-effect="mfp-move-from-top" style="color: black;text-decoration: none;">  Post Ad Now</a>
                                   </button> 
                                  <?php else: ?>
                                   <button class="btn btn-primary secondNavButtons" style='border-radius:5px !important;box-shadow:0px 0px 0px !important;'>
                                 <a class="popup-text" href="#POST-dialog" data-effect="mfp-move-from-top" style="color: black;text-decoration: none;">  أضف أعلانك</a>
                                
                                 </button> 
                                  <?php endif; ?>
                                <?php if(auth()->guard()->check()): ?>    
                                <button class="btn btn-primary secondNavButtons" style='border-radius:5px !important;box-shadow:0px 0px 0px !important;'><a class=""  href="<?php echo e(route('free.ads')); ?>" style="color: black;text-decoration: none;"> <i class="fa fa-camera" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;"></i> <?php echo e(__('index.free_ad')); ?></a> </button>
                                <?php endif; ?>
                                <?php if(auth()->guard()->guest()): ?> 
                              
                                <?php endif; ?>    
                            </div>
                        </div>

                    </div>
                    
                    <!-- <div class="row" style="margin:15px 0;justify-content: center;">
                       <?php $__currentLoopData = $allcat->slice(0,6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-2 col-md-12">
                            <div class="single-service">
                                <a href="<?php echo e(route('category.sub', $c->id)); ?>">
                                <img class="imge" src="<?php echo e(asset('storage/'. $c->image)); ?>"  >
                               <h4><?php echo e($c->name); ?></h4> </a>
                               
                            
                            </div>
                        </div> 

                
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </div> -->


                    <div class="row row-wrap home-owlC2 animated" id='6thtHomeSection'>

                    <?php $__currentLoopData = $allcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                    
                    <a href="<?php echo e(route('cat.products', $c->slug)); ?>">
                        <img class="imge" src="<?php echo e(asset('storage/'. $c->image)); ?>"  >
                        <h4 style="text-align:center"><?php echo e($c->name); ?></h4> </a>
                    </a> 
                   
                </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>              
                
            </section>

        </div>
            
        </div>


        <div class="gap"></div>

<!-- chat modal -->


        <!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<img class="img-circle" id="img_logo" src="http://bootsnipp.com/img/logo.jpg">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form">
		                <div class="modal-body">
				    		<div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Type your username and password.</span>
                            </div>
				    		<input id="login_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
				    		<input id="login_password" class="form-control" type="password" placeholder="Password" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
				    	    <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                                <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
				        </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;">
    	    		    <div class="modal-body">
		    				<div id="div-lost-msg">
                                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-lost-msg">Type your e-mail.</span>
                            </div>
		    				<input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                            </div>
                            <div>
                                <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->
                    <form id="register-form" style="display:none;">
            		    <div class="modal-body">
		    				<div id="div-register-msg">
                                <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-register-msg">Register an account.</span>
                            </div>
		    				<input id="register_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                            <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                            <input id="register_password" class="form-control" type="password" placeholder="Password" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                            </div>
                            <div>
                                <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Register Form -->
                    
                </div>
                <!-- End # DIV Form -->
                
			</div>
		</div>
	</div>
    <!-- END # MODAL LOGIN -->


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
</div>



<!-- category carosel -->

<!-- end categorycarosel -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/home.blade.php ENDPATH**/ ?>