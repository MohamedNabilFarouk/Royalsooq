<?php $__env->startSection('social'); ?>
<meta property="og:title" content="<?php echo e($userFreeAds[0]->user->name); ?>" />
<meta property="og:type" content="Ad" />
<meta property="og:image" content="<?php echo e(asset('/storage/'. $userFreeAds[0]->user->image)); ?>" />
<meta property="og:description" content="<?php echo e($userFreeAds[0]->user->about); ?>" /> 
<meta property="og:type" content="website" />
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>







<div class="container">



<ul class="breadcrumb">



                    <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('index.home')); ?></a>



                    </li>



                    <li><a href="<?php echo e(route('all.acc')); ?>"><?php echo e(__('index.shops')); ?></a>



                    </li>



                    <li><a href=""><?php echo e($userFreeAds[0]->user->name); ?> <?php echo e(__('index.shops')); ?></a>



                    </li>



                </ul>







<div class="row">



    <div class="col-md-3">



        <div class="product-page-meta box">



        <img src="<?php echo e(asset('/storage/'. $userFreeAds[0]->user->image)); ?>" alt="Smiley face" style="



width: 87%;







border-radius: 16%;



">



            <ul class="list product-page-meta-info">



                <li>



                <?php echo e($userFreeAds[0]->user->name); ?>




                </li>



                <li><i class="fa fa-check-square-o" aria-hidden="true"></i> <?php echo e(__('index.verfied')); ?>




                <li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo e(__('index.member_since')); ?> <strong><?php echo e(date_format($userFreeAds[0]->user->created_at,'d M Y')); ?></strong>



                </li>



                <li><div class="sharethis-inline-share-buttons"></div></li>



                <!-- <li><i class="fa fa-eye" aria-hidden="true"></i> 3123 views</li>



                <li><i class="fa fa-flag" aria-hidden="true"></i> Rebort member</li> -->



            </ul>



        </div>



    </div>



    <div class="col-md-9">



        <div class="fotorama">



        <?php $__currentLoopData = $userFreeAds[0]->user->shop_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <img src="<?php echo e(asset('storage/'. $i->image)); ?>" alt="Image Alternative text" title="cascada" />



         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                       

        </div>



















    </div>



    <div class="row">



    <div class="col-md-8">



        <div class="tabbable">







            <div class="tab-content">



                <div class="tab-pane fade in active" id="tab-1">



                    <div class="row text-smaller">



                        <div class="col-md-12">



                            <h4>About</h4>



                            <p><?php echo e($userFreeAds[0]->user->about ?? ''); ?></p>





                        </div>



         



                    </div>



                </div>



            



            </div>



        </div></div>



                  <div class="col-md-4">



        <div class="tabbable">







            <div class="tab-content">



                <div class="tab-pane fade in active" id="tab-1">



                    <div class="row text-smaller">



                        <div class="col-md-12">



                            <!-- <span class="locaiton-style1"><i class="fa fa-map-marker"></i> <stron>Loctian</stron> Cairo, Egypt</span> -->



      <a href="#" class="btn btn-sucess phone-number"><i class="fa fa-phone"  aria-hidden="true"></i> <span><?php echo e($userFreeAds[0]->user->phone); ?></span></a>



         



                    </div>



                </div>



            



            </div>



        </div></div>



        </div>



        </div>



                        <div class="gap gap-small"></div>



    <div class="col-md-12">



    <div class="row">



                        <!-- <div class="col-md-3">



                            <div class="product-sort">



                                <span class="product-sort-selected">sort by <b>Price</b></span>



                                <a href="#" class="product-sort-order fa fa-angle-down"></a>



                                <ul>



                                    <li><a href="#">sort by Name</a>



                                    </li>



                                    <li><a href="#">sort by Ended Soon</a>



                                    </li>



                                    <li><a href="#">sort by Popularity</a>



                                    </li>



                                    <li><a href="#">sort by Location</a>



                                    </li>



                                </ul>



                            </div>



                        </div> -->



                        <div class="col-md-2 col-md-offset-9">



                            <div class="product-view pull-right">



                                <a class="fa fa-th-large active" href="<?php echo e(route('shops2H', $userFreeAds[0]->user->slug)); ?>"></a>



                                <a class="fa fa-list" href="<?php echo e(route('shops2', $userFreeAds[0]->user->slug)); ?>"></a>



                            </div>



                        </div>



                    </div>



        <?php $__currentLoopData = $userFreeAds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



        <div class="col-md-3">







                    <div class="product-thumb" style="max-height: 410px; margin: 20px 0 20px 0;">



                        <header class="product-header">



                        <form method="post" action="<?php echo e(route('add.favorites')); ?>">



                                <?php echo csrf_field(); ?> 



                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">  







                                <button class="btn fav" type="submit"><i class="fa fa-heart"></i> </button>



                        </form>       



                        <img src="<?php echo e($product->main_image_url); ?>" alt="Image Alternative text" title="Gamer Chick" style="height: 200px;" />



                        </header>



                        <div class="product-inner">



                        <ul class="icon-group icon-list-rating" title="<?php echo e(number_format($product->averageRating)); ?>/5 rating">

                            

                            <?php echo str_repeat('<li><i class="fa fa-star "></i></li>', number_format($product->averageRating)) ?> 

                            <?php echo str_repeat('<span class="fa fa-star unchecked"></span>', 5 - number_format($product->averageRating)) ?> 

    

                                </ul>



                            <h5 class="product-title"><?php echo e($product->name); ?></h5>



                                     <span class="info-row">



										<span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="" data-original-title="Private">



											



										</span>&nbsp;



										<span class="date"><i class=" fa fa-clock-o"></i> <?php echo e(date_format($product->created_at,'d M Y')); ?> </span>



																					<span class="category">



												<i class="fa fa-list-alt"></i>&nbsp;



												<a href="<?php echo e(route('cat.products', $product->categories->slug)); ?>" class="info-link"><?php echo e($product->categories->name); ?></a>
                                                


											</span>



																				<span class="item-location">



											<i class="fa fa-user"></i>&nbsp;



										<a href="<?php echo e(route('shops2', $product->user->slug)); ?>" class="info-link"><?php echo e($product->user->name); ?></a> 



										</span>



									</span>



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



  color: #626262;border: solid 1px #fdeb18;"><i class="fa fa-comment" style=" color: #fdeb18;"></i> <?php echo e(__('index.chat')); ?></a>

 

                                    <a href="tel:<?php echo e($product->user->phone ?? null); ?>" class="btn btn-sm call" style="



   color: #626262; border: solid 1px #73b902;"><i class="fa fa-phone"style="    color: #73b902;"></i> <?php echo e(__('index.call')); ?></a>



                                    </li>



                                </ul>



                            </div>



                        </div>



                    </div>



            







</div>



        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    



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



        <div class="gap gap-small"></div>



</div>







</div>











<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/blades/shops2H.blade.php ENDPATH**/ ?>