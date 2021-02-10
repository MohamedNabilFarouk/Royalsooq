
<?php $__env->startSection('content'); ?>

<div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <!-- <div id="review-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
                        <h3>Add a Review</h3>
                        <form>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" placeholder="e.g. John Doe" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="text" placeholder="e.g. jogndoe@gmail.com" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Review</label>
                                <textarea class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Rating</label>
                                <ul class="icon-list icon-list-inline star-rating" id="star-rating">
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
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit" />
                        </form>
                    </div> -->
                    <div class="row">
                        <div class="col-md-7">
                        <img src="<?php echo e($products[0]->main_image_url); ?>" alt="Image Alternative text" style="width:500px;" title="<?php echo e($products[0]->name); ?>" />
                            
                        <!-- <div class="fotorama" data-nav="thumbs" data-allowfullscreen="1" data-thumbheight="150" data-thumbwidth="150">
                                <img src="img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                                <img src="img/amaze_800x600.jpg" alt="Image Alternative text" title="AMaze" />
                                <img src="img/urbex_esch_lux_with_laney_and_laaaaag_800x600.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                                <img src="img/food_is_pride_800x600.jpg" alt="Image Alternative text" title="Food is Pride" />
                            </div> -->
                        </div>
                        <div class="col-md-5">
                            <div class="product-info box">
                                <!-- <ul class="icon-group icon-list-rating text-color" title="4.5/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half-empty"></i>
                                    </li>
                                </ul>	<small><a href="#" class="text-muted">based on 8 reviews</a></small> -->
                                <h3><?php echo e($products[0]->name); ?></h3>
                                <p class="product-info-price">$<?php echo e($products[0]->price); ?></p>
                                <p class="text-smaller text-muted"><?php echo $products[0]->description; ?></p>
                                <ul class="icon-list list-space product-info-list">
                                    <li><i class="fa fa-check"></i>Id cubilia</li>
                                    <li><i class="fa fa-check"></i>Euismod primis</li>
                                    <li><i class="fa fa-check"></i>Amet porta</li>
                                    <li><i class="fa fa-check"></i>Facilisis cum</li>
                                    <li><i class="fa fa-check"></i>Morbi curae</li>
                                </ul>
                                <ul class="list-inline">
                                <form method="post" action="<?php echo e(route('add.to.cart')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i> Add To Cart  </button>
                                    <input type="hidden" name="slug" value="<?php echo e($products[0]->slug); ?>">
                                    <input type="hidden" name="qty" value="1">
                                </form>   
                                    <!-- <li><a href="#" class="btn"><i class="fa fa-star"></i> To Wishlist</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="gap"></div>
                    <div class="tabbable">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#tab-1"  data-toggle="tab"><i class="fa fa-pencil"></i>Desciption</a>
                            </li>
                            <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-info"></i>Contact Information</a>
                            </li>
                            <!-- <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-truck"></i>Shipping & Payment</a>
                            </li>
                            <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-comments"></i>Reviews</a>
                            </li> -->
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab-1">
                               <?php echo $products[0]->description; ?>

                            </div>
                            <div class="tab-pane fade" id="tab-2">
                             Name:  <?php echo $products[0]->user->name ?? null; ?> <br>
                             phone:  <?php echo $products[0]->user->phone ?? null; ?>

                            </div>
                            <div class="tab-pane fade" id="tab-3">
                                <p>Dictum odio etiam phasellus eget metus blandit nam ac in vivamus nisi nisi lobortis scelerisque quis nisl ligula torquent mattis consectetur netus commodo senectus primis natoque quisque cursus molestie odio</p>
                                <p>Primis massa conubia magnis gravida faucibus nisi hendrerit libero mus montes vitae imperdiet porta arcu mi ac praesent pulvinar quam orci augue pharetra taciti cum quam ligula netus suspendisse dolor</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="gap"></div>
                    
                </div>
            </div>



<!-- carosel -->

            <h1 class="mb20 text-center">Related Products <small><a href="#"></a></small></h1>
    <div class="row row-wrap home-owlC2 animated" id='7thHomeSection'>
               
              
                <div>
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="<?php echo e(asset('img/gamer_chick_800x600.jpg')); ?>" alt="Image Alternative text" title="Gamer Chick" />
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
                            <h5 class="product-title">product</h5>
                            <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$2000</span>
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
                        <header class="product-header">
                            <img src="<?php echo e(asset('img/gamer_chick_800x600.jpg')); ?>" alt="Image Alternative text" title="Gamer Chick" />
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
                            <h5 class="product-title">product</h5>
                            <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$2000</span>
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
                        <header class="product-header">
                            <img src="<?php echo e(asset('img/gamer_chick_800x600.jpg')); ?>" alt="Image Alternative text" title="Gamer Chick" />
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
                            <h5 class="product-title">product</h5>
                            <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$2000</span>
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
                        <header class="product-header">
                            <img src="<?php echo e(asset('img/gamer_chick_800x600.jpg')); ?>" alt="Image Alternative text" title="Gamer Chick" />
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
                            <h5 class="product-title">product</h5>
                            <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$2000</span>
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
                        <header class="product-header">
                            <img src="<?php echo e(asset('img/gamer_chick_800x600.jpg')); ?>" alt="Image Alternative text" title="Gamer Chick" />
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
                            <h5 class="product-title">product</h5>
                            <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$2000</span>
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
              
             </div>




            








           


</div>




            


             <!-- end carosel -->





        </div>


        <script>
    $(function(){
        $ $('#phone').hide();
            $('#seller').click(function(){
                $('#phone').show();
            });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/blades/sponsoredProductDetails.blade.php ENDPATH**/ ?>