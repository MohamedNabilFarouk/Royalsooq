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



                                <?php if(empty($userFreeAds[0]->user->image)): ?>

                <img id="userImg" class="userImg" src="<?php echo e(asset('img/user_avatar.jpg')); ?>" alt="user">&nbsp;

        <?php else: ?>

            

        <img src="<?php echo e(asset('/storage/'. $userFreeAds[0]->user->image)); ?>" alt="<?php echo e($userFreeAds[0]->user->name); ?>" style="width: 87%; border-radius: 16%; ">

        <?php endif; ?>

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



                                <?php $__currentLoopData = $userFreeAds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <a href="<?php echo e(route('product.details', $p->slug)); ?>">

                                <div class="product-thumb product-thumb-horizontal">



                                    <header class="product-header">



                                        <img src="<?php echo e($p->main_image_url); ?>" alt="<?php echo e(__('index.no_image')); ?>" title="<?php echo e($p->name); ?>">



                                    </header>



                                    <div class="product-inner">



                                        <ul class="icon-group icon-list-rating" title="3.2/5 rating">



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



                                        <h5 class="product-title"><?php echo e($p->name); ?></h5>



                                        <div class="product-desciption"><span class="item-location"><i class="fa fa-map-marker"></i> <?php if($p->city): ?><?php echo e($p->city->city); ?> <?php endif; ?> </span> <span><?php echo e($p->city->country->name ??''); ?></span> | <span><?php echo e(date_format($p->created_at,'d M Y')); ?></span>



                                        <br>



                                        <span><i class="fa fa-th" aria-hidden="true"></i> <?php echo e($p->categories->name); ?></span>



                                        </div>



                                        <div class="product-meta">



                                            <ul class="product-price-list">



                                                <li><span class="product-price"><?php echo e($p->country->currency); ?> <?php echo e($p->price); ?></span>



                                                </li>



                                                <!-- <li><span class="product-old-price">$218</span>



                                                </li>



                                                <li><span class="product-save">Save 60%</span>



                                                </li> -->



                                            </ul>



                                            <?php if(empty( $p->user->image)): ?>

                <img id="userImg" class="userImg" src="<?php echo e(asset('img/user_avatar.jpg')); ?>" alt="user">&nbsp;

        <?php else: ?>

            

        <img src="<?php echo e(asset('/storage/'. $p->user->image)); ?>" class="seller-img">

        <?php endif; ?>







                                        </div>



                                    



                                    </div>

                                    <form method="post" action="<?php echo e(route('add.favorites')); ?>" id="myform-<?php echo e($p->id); ?>">

                                                <?php echo csrf_field(); ?> 

                                        <ul class="product-actions-list style2">

                                       

                                                <input type="hidden" name="product_id" value="<?php echo e($p->id); ?>">  

                                                <li><a class="btn btn-sm favorite" id='favlink-<?php echo e($p->id); ?>'><i class="fa fa-heart-o" aria-hidden="true"></i> <?php echo e(__('index.add_favorite')); ?></a>



                                                </li>

                                                <script>

        document.getElementById("favlink-<?php echo e($p->id); ?>").onclick = function() {

    document.getElementById("myform-<?php echo e($p->id); ?>").submit();

}

</script>

                                                <li><a href="tel:<?php echo e($p->user->phone ?? null); ?>" class="btn btn-sm call"><i class="fa fa-phone" style="color: #428bca;" aria-hidden="true"></i> <?php echo e(__('index.call')); ?></a>



                                                </li>



                                                     <li><a href="<?php echo e(route('chat.message',$p->id)); ?>" class="btn btn-sm chat"><i class="fa fa-comments" style="color: #428bca;" aria-hidden="true"></i> <?php echo e(__('index.chat')); ?></a>



                                                </li>



                                            </ul>

                                            </form>

                                </div>

</a>

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/blades/shops2.blade.php ENDPATH**/ ?>