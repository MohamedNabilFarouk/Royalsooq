

<?php $__env->startSection('content'); ?>









                <ul class="breadcrumb">
                    <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('index.home')); ?></a>
                    </li>
                    
                    <li><a href="<?php echo e(route('category.sub', $ad_attr[0]->product->categories->id ?? '')); ?>"><?php echo e($ad_attr[0]->product->categories->name ?? ''); ?></a>
                    </li>
                    <li><a href="#"><?php echo e($ad_attr[0]->product->subcategory->name ?? ''); ?></a>
                    </li>
                </ul>





<div class="container" style=" margin-top:50px;">

<?php if($ad_attr != '[]'): ?>   






           

           

            <div class="row">

            <div class="col-md-3">



             

                    
               
<div>
<div class="layout ant-layout" id="components-layout-demo-top">
<div class="ant-layout-content" style="padding: 0px 10px;">
<div class="ant-layout ant-layout-has-sider" style="padding: 24px 0px;">
<div class="ant-layout-sider ant-layout-sider-dark" style="flex: 0 0 100%; max-width: 100%; min-width: 100%; width: 100%;">
<div class="ant-layout-sider-children">
<ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">
<!-- <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 10px;" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
<h5 style="color: #464646;"> <?php echo e(__('index.s_product_feature')); ?></h5>  -->

<!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->
</li>
<ul  class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="display: block;">
            <!-- <div class="sidebar-box"id="multiCollapseExample1">  
                    <ul class="checkbox-list">
                                <form action="<?php echo e(route('sub.products', $products[0]->subcategory->id ?? '' )); ?>" method="GET"> 
                                    <?php echo csrf_field(); ?>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" name="feature[]" value="new" class="i-check" ><?php echo e(__('index.s_new')); ?> <small>(50)</small>
                                        </label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" name="feature[]" value="on_sale" class="i-check"><?php echo e(__('index.s_onsale')); ?> <small>(70)</small>
                                        </label>
                                    </li>
                                    <li class="checkbox">
                                        <label>
                                            <input type="checkbox" name="feature[]" value="best_rated" class="i-check"><?php echo e(__('index.s_rated')); ?> <small>(32)</small>
                                        </label>
                                    </li>
                                    

                              
                    </ul>
            </div>                                -->
                 <!-- by price -->
                    <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">
                                <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">
                                <h5 style="color: #464646;"> <?php echo e(__('index.s_price')); ?></h5> 
                            
                                <!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->
                                </li>

                                <div class="sidebar-box"id="multiCollapseExample2">

                                
                                    <div class="form-group">    
                                    
                                    <input type="number" class="form-control" name="min" min='0' placeholder="<?php echo e(__('index.s_from')); ?>">
                                    </div>
                                        <div class="form-group">                               
                                        <input type="number"  class="form-control" name="max" min='0' placeholder="<?php echo e(__('index.s_to')); ?>">
                                        </div>
                                                                  
                                     
                                </div>
                    </ul>

               
               
                <!-- by city -->
                 <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">
                                        <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;" data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                        <h5 style="color: #464646;"> <?php echo e(__('index.s_city')); ?></h5> 
                                    
                                        <!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->
                                        </li>
                                        <div class="sidebar-box"id="multiCollapseExample4">
                                        
                                            <ul class="checkbox-list">
                                           
                                                <?php $__currentLoopData = $allcities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="city[]" value="<?php echo e($c->id); ?>" class="i-check"><?php echo e($c->city); ?> <small></small>
                                                    </label>
                                                </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                               
                                            </ul>
                                            
                                        </div>
                                        <button class="btn btn-primary secondNavButtons" style="width: 100%;"><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> <?php echo e(__('index.search_btn')); ?></a> 
                                                            </button>                
                                            </form>
                </ul>



   
    
    </ul>
        <!-- button search -->
     <!-- <button class="btn btn-primary secondNavButtons" style="

                width: 100%;

            "><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> search</a> 
    </button> -->

             </ul>    </div></div> </div></div></div></div>





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

    






                      

                    <?php $__currentLoopData = $ad_attr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4">
                      
                      <a href="<?php echo e(route('product.details', $p->product->slug)); ?>">
                      <div class="product-thumb">
                      <header class="product-header">
                      <form method="post" action="<?php echo e(route('add.favorites')); ?>">
                              <?php echo csrf_field(); ?> 
                              <input type="hidden" name="product_id" value="<?php echo e($p->id); ?>">  

                              <button class="btn fav" type="submit"><i class="fa fa-heart"></i> </button>
                      </form>    
                      <img src="<?php echo e($p->product->main_image_url); ?>" alt="Image Alternative text" title="<?php echo e($p->product->name); ?>" style="height: 200px;" />
                      </header>
                      <div class="product-inner">
                      <ul class="icon-group icon-list-rating" title="<?php echo e(number_format($p->product->averageRating)); ?>/5 rating">
                          
                          <?php echo str_repeat('<li><i class="fa fa-star "></i></li>', number_format($p->product->averageRating)) ?> 
                          <?php echo str_repeat('<span class="fa fa-star unchecked"></span>', 5 - number_format($p->product->averageRating)) ?> 
  
                      </ul>
                          <h5 class="product-title"><?php echo e($p->product->name); ?></h5>
                                      <div class="product-desciption"><span class="item-location"><i class="fa fa-map-marker"></i> <?php echo e($p->product->city->city ?? ''); ?></span>   <i class="fa fa-clock-o"></i> <span><?php echo e(date_format($p->product->created_at,'d M Y')); ?></span>
                                      <br> 
                                      </div>
                        

                          <div class="product-meta">
                              <ul class="product-price-list">
                                  <li><span class="product-price"><?php echo e($p->product->price); ?> <?php echo e($p->product->country->currency); ?></span>
                                  </li>
                              </ul>
                              <ul class="product-actions-list">
                                  <!-- <li>
                                  <form method="post" action="#">
                                  <?php echo csrf_field(); ?>
                                  <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i>  </button>
                                  <input type="hidden" name="slug" value="<?php echo e($p->slug); ?>">
                                  <input type="hidden" name="qty" value="1">
                              </form>   
                                  </li>
                                  <?php if(auth()->guard()->check()): ?>
                              <li>
                              <form method="post" action="<?php echo e(route('add.favorites')); ?>">
                                  <?php echo csrf_field(); ?>
                                  <button class="btn" type="submit"><i class="fa fa-heart"></i> </button>
                                  <input type="hidden" name="product_id" value="<?php echo e($p->id); ?>">
                                  
                                  
                              </form>   
                              </li>
                              <?php endif; ?> -->
                              <li><a href="Product-details/<?php echo e($p->slug); ?>" class="btn btn-sm chat"  style="
                              color: #626262;border: solid 1px #fdeb18;"><i class="fa fa-comment" style=" color: #fdeb18;"></i> <?php echo e(__('index.chat')); ?></a>
                                  <a href="tel:<?php echo e($p->user->phone ?? null); ?>" class="btn btn-sm call" style="
                              color: #626262; border: solid 1px #73b902;"><i class="fa fa-phone"style="    color: #73b902;"></i> <?php echo e(__('index.call')); ?></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div></a>                        </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





                    </div>



                    <?php   //echo $products->render(); ?>

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

          
            <?php else: ?>
    <h2 class="text-center">No Items</h2>
 <?php endif; ?>

        </div>





<?php $__env->stopSection(); ?>
























<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/blades/products-sub-filter-result.blade.php ENDPATH**/ ?>