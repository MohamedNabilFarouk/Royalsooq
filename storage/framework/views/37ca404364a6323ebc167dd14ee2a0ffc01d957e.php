<?php $__env->startSection('content'); ?>

<ul class="breadcrumb">

   <style>

      li.ant-menu-item.ant-menu-item-selected {

      background: #f0f2f5;

      }

      .btn-primary {

      margin-top: 6px;

      /*background: #fff;*/

      }

      button.btn.btn-primary.hov1:hover {

      background: red;

      }

   </style>

   <li><a href="/"> <i aria-hidden="true" class="fa fa-home"></i><?php echo e(__("index.home")); ?></a>

                    </li>

   <li><a href="#"><?php echo e(__('index.search')); ?></a>

   </li>

   <!-- <li class="active">billy</li> -->

</ul>

<div class="container">

         <div class="row">

           <!-- change design -->
           <div class="col-md-2 col-md-offset-9">

<div class="product-view pull-right">

    <button class="fa fa-th-large active" id="btn-large" ></button>

    <button class="fa fa-list" id="btn-list" ></button>

</div>  

</div>

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

                                    <form action="<?php echo e(url('/Filter')); ?>" method="GET">

                                       <ul  class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="display: block;">

                                          <!-- <div class="sidebar-box"id="multiCollapseExample1">  

                                             <?php echo csrf_field(); ?>

                                             <ul class="checkbox-list">

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

                                             </div>    

                                                                        -->

                                          <!-- SORT -->

                                          <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">

                                             <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">

                                                <h5 style="color: #464646;"> <?php echo e(__('index.sort')); ?></h5>

                                                <!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->

                                             </li>

                                             <div class="sidebar-box"id="multiCollapseExample1">

                                                <?php echo csrf_field(); ?>

                                                <ul class="checkbox-list">

                                                   <li class="checkbox">

                                                      <label>

                                                      <input type="radio" name="sort_price" value="ASC" class="i-check" ><?php echo e(__('index.price')); ?> :<?php echo e(__('index.sort_price_asc')); ?>


                                                      </label>

                                                   </li>

                                                   <li class="checkbox">

                                                      <label>

                                                      <input type="radio" name="sort_price" value="DESC" class="i-check"><?php echo e(__('index.price')); ?> :<?php echo e(__('index.sort_price_desc')); ?>


                                                      </label>

                                                   </li>

                                                   <li class="checkbox">

                                                      <label>

                                                      <input type="radio" name="sort_latest" value="DESC" class="i-check"><?php echo e(__('index.sort_latest')); ?> 

                                                      </label>

                                                   </li>

                                                   <li class="checkbox">

                                                      <label>

                                                      <input type="radio" name="sort_latest" value="ASC" class="i-check"><?php echo e(__('index.sort_oldest')); ?>


                                                      </label>

                                                   </li>

                                                </ul>

                                             </div>

                                          </ul>

                                          <!-- by price -->

                                          <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">

                                             <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">

                                                <h5 style="color: #464646;"> <?php echo e(__('index.s_price')); ?></h5>

                                                <!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->

                                             </li>

                                             <div class="sidebar-box"id="multiCollapseExample2">

                                                <!-- <h5>Filter By Price</h5> -->

                                                <!-- <input type="text" id="price-slider"> -->

                                                <!-- <input type="hidden" name='search_request[]' value="<?php echo e($product); ?>">  -->

                                                <div class="form-group">    

                                                   <input type="number" class="form-control" name="min" min='0' placeholder="<?php echo e(__('index.s_from')); ?>">

                                                </div>

                                                <div class="form-group">                               

                                                   <input type="number"  class="form-control" name="max" min='0' placeholder="<?php echo e(__('index.s_to')); ?>">

                                                </div>

                                             </div>

                                          </ul>

                                          <label>

                                                      <!-- <input type="checkbox" name="category[]" id="myCheckbox" value="10000" class="i-check">click<small></small> -->

                                                      </label>

                                          <!-- by category -->

                                          <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">

                                             <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">

                                                <h5 style="color: #464646;"> <?php echo e(__('index.s_cat')); ?></h5>

                                                <!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->

                                             </li>

                                             <div class="sidebar-box" >

                                                <ul class="checkbox-list">

                                                   <?php $__currentLoopData = $allcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                   <li class="checkbox">

                                                      <label>

                                                      <input type="checkbox" name="category[]" id="myCheckbox-<?php echo e($c->id); ?>" value="<?php echo e($c->id); ?>" ><?php echo e($c->name); ?> <small></small>

                                                      </label>

                                                   </li>



                                                   <script>



                                                               $('#myCheckbox-<?php echo e($c->id); ?>').click(function() {

                                                                  //alert('checked');

                                                                  var id = $(this).val();

                                                               //alert(id);

                                                               $.ajax({



                                                               url: 'getSubCategories/'+id,



                                                               type: 'get',



                                                               dataType: 'json',



                                                               success: function(response){





                                                               var len = 0;



                                                               if(response['data'] != null){



                                                                  len = response['data'].length;



                                                               }







                                                               if(len > 0){



                                                                  // Read data and create <option >



                                                                  for(var i=0; i<len; i++){







                                                                     var id = response['data'][i].id;



                                                                     var name = response['data'][i].name;



                                                                  var option= '<li class="checkbox"><label><input type="checkbox" name="subcategory[]"  value="'+id+'">'+name+' <small></small></label></li>';

                                                                  // var option = "<option value='"+id+"'>"+name+"</option>"; 







                                                                     $("#sub_ip").append(option); 



                                                                  }



                                                               }







                                                               }



                                                               }); //end ajax

                                                               });







                                                   </script>



                                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </ul>

                                             </div>

                                          </ul>





                                          <!-- by sub-cat -->

                                          <!-- <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">

                                                                                       <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">

                                                                                          <h5 style="color: #464646;"> sub category</h5>

                                                                                          

                                                                                       </li>

                                                                                       <div class="sidebar-box" >

                                                                                          <ul class="checkbox-list" id='sub_ip'>

                                                                                       

                                                                                            

                                                         

                                                                                          </ul>

                                                                                       </div>

                                          </ul> -->







                                          <!-- by city -->

                                          <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">

                                             <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;" data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">

                                                <h5 style="color: #464646;"> <?php echo e(__('index.s_city')); ?></h5>

                                                <!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->

                                             </li>

                                             <div class="sidebar-box"id="multiCollapseExample4">

                                                <ul class="checkbox-list">

                                                   <?php if(session()->get('my_country') == '1') {

                                                      $allcities = $egy_cities;

                                                      }else {

                                                      $allcities = $sa_cities;

                                                      

                                                      } 

                                                      

                                                      ?>

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

                                 </ul>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

            <div class="col-md-9">

                   

               <!-- search reasult -->
                   <?php if($product == ''): ?>

                  <?php if($product != '[]'): ?>

                



                                                        
                  <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="product-thumb product-thumb-horizontal">

                

                  <?php if($p->categories->service == '1'): ?>

                  <a  href="<?php echo e(route('service.details',$p->id)); ?>">

                  <?php else: ?>

                  <a  href="<?php echo e(route('product.details',$p->slug ?? $p)); ?>">

                     <?php endif; ?> 

                     <header class="product-header">

                        <img src=" <?php if($p->des): ?><?php echo e(asset('/storage/'.$p->image)); ?><?php else: ?> <?php echo e($p->main_image_url); ?><?php endif; ?>" alt="<?php echo e($p->name); ?>" title="Hot mixer" style="

                           max-height: 206px;

                           " />

                     </header>

                  </a>

                  <div class="product-inner">

                     <a  href="<?php echo e(route('product.details',$p->slug ?? $p)); ?>">

                        <h2 class="product-title"><?php echo e($p->name); ?></h2>

                     </a>

                     <div class="product-desciption"><span class="item-location"><i class="fa fa-map-marker"></i> <?php if($p->city): ?><?php echo e($p->city->city); ?> <?php endif; ?> </span> <span><?php echo e($p->city->country->name ??''); ?></span> | <span><?php echo e(date_format($p->created_at,'d M Y')); ?></span>

                        <br>

                        <span><i class="fa fa-th" aria-hidden="true"></i> <a href="#"><?php echo e($p->categories->name); ?></a></span>

                     </div>

                     <!-- <div class="product-desciption"><?php echo e($p->description); ?></div> -->

                     <div class="product-meta">
                                 <?php if($p->user): ?>
                     <?php if(empty($p->user->image)): ?>

                    <a href="<?php echo e(route('shops2', $p->user->id ?? '')); ?>"> <img id="userImg" class="userImg" src="<?php echo e(asset('img/user_avatar.jpg')); ?>" alt="user">&nbsp;

                     <?php else: ?>

                      <img src="<?php echo e(asset('/storage/'. $p->user->image)); ?>" class="seller-img" >

                     <?php endif; ?>

                     <h5 class="us"><?php echo e($p->user->name); ?></h5></a>
                     <?php endif; ?> 

                        <ul class="product-price-list">

                           <li><span class="product-price"><?php echo e($p->country->currency); ?> <?php echo e($p->price); ?></span></li>

                           <!-- <li><span class="product-old-price">$221</span>

                              </li>

                              

                              <li><span class="product-save">Save 68%</span>

                              

                              </li> -->

                        </ul>

                              
                     </div>

                     <!-- <p class="product-location"><i class="fa fa-map-marker"></i> <?php echo e($p->city->city ?? ''); ?></p> -->

                  </div>

                  <div class="product-inner" style="

                     display: inline-flex;">

                     <button type="Add favorate" class="btn btn-primary hov1 favorite" style="padding-right: 34px;padding-left: 23px;margin: 11px;border: 1px solid #e23838;border-color: #eb7474 !important;"  ><i class="fa fa-heart-o" style="c" aria-hidden='true' ></i> <?php echo e(__('index.add_favorite')); ?></button>

                     <button type="Add favorate" class="btn btn-primary hov2 call" style="padding-right: 55px;padding-left: 55px;margin: 11px;border: 1px solid red;border-color: #73b902 !important; "  ><i class="fa fa-phone" style="c" aria-hidden='true' ></i> <?php echo e(__('index.call')); ?></button>

                     <button  class="btn btn-primary hov3 chat" style="padding-right:39px;padding-left: 34px;margin: 11px;border: 1px solid red;border-color: #efc718 !important;color: red;"  ><i class="fa fa-comments" style="c" aria-hidden='true' ></i> <?php echo e(__('index.chat')); ?> <?php echo e(__('index.soon')); ?></button>               

                  </div>

               </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <a href="<?php echo e(route('store.search')); ?>" class='btn btn-success'>Save Search</a>

            </div>
                                                  
            <!-- </a> -->

          

            <?php else: ?> 

            <h2 class="text-center">No Items</h2>

            <?php endif; ?> 

            <!-- end if for product -->

            <?php else: ?>


                        <div class="row row-wrap" id="large">
                                    

                                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($p->approved == 1): ?>
                                        <div class="col-md-4">
                                    
                                        <a href="<?php echo e(route('product.details', $p->slug)); ?>">
                                        <div class="product-thumb">
                                        <header class="product-header">
                                        <form method="post" action="<?php echo e(route('add.favorites')); ?>">
                                                <?php echo csrf_field(); ?> 
                                                <input type="hidden" name="product_id" value="<?php echo e($p->id); ?>">  

                                                <button class="btn fav" type="submit"><i class="fa fa-heart"></i> </button>
                                        </form>    
                                        <img src="<?php echo e($p->main_image_url); ?>" alt="Image Alternative text" title="<?php echo e($p->name); ?>" style="height: 200px;" />
                                        </header>
                                        <div class="product-inner">
                                        <ul class="icon-group icon-list-rating" title="<?php echo e(number_format($p->averageRating)); ?>/5 rating">
                                            
                                            <?php echo str_repeat('<li><i class="fa fa-star "></i></li>', number_format($p->averageRating)) ?> 
                                            <?php echo str_repeat('<span class="fa fa-star unchecked"></span>', 5 - number_format($p->averageRating)) ?> 
                    
                                        </ul>
                                            <h5 class="product-title" style='height: 35px; overflow:hidden'><?php echo e($p->name); ?></h5>
                                                        <div class="product-desciption"><span class="item-location"><i class="fa fa-map-marker"></i> <?php echo e($p->city->city ?? ''); ?></span>   <i class="fa fa-clock-o"></i> <span><?php echo e(date_format($p->created_at,'d M Y')); ?></span>
                                                        <br> 
                                                        </div>
                                            <!-- <span class="info-row">
                                                        <span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="" data-original-title="Private">
                                                            
                                                        </span>&nbsp;
                                                        <span class="date"><i class=" fa fa-clock-o"></i> <?php echo e(date_format($p->created_at,'d M Y')); ?> </span>
                                                                                                    <span class="category">
                                                                <i class="fa fa-list-alt"></i>&nbsp;
                                                                <a href="<?php echo e(route('category.sub', $p->categories->id)); ?>" class="info-link"><?php echo e($p->categories->name); ?></a>
                                                            </span>
                                                                                                <span class="item-location">
                                                            <i class="fa fa-user"></i>&nbsp;
                                                        <a href="<?php echo e(route('shops2', $p->id)); ?>" class="info-link"><?php echo e($p->user->name); ?></a> 
                                                        </span>
                                                    </span> -->

                                            <div class="product-meta">
                                                <ul class="product-price-list">
                                                    <li><span class="product-price"><?php echo e($p->price); ?> <?php echo e($p->country->currency); ?></span>
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
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                       



                        </div>


            <div class="row row-wrap" id="list">  
            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

            <div class="product-thumb product-thumb-horizontal">

               <a  href="<?php echo e(route('product.details',$p->slug ?? $p)); ?>">

                  <header class="product-header">

                     <img src="<?php echo e(asset($p->main_image_url)); ?>" alt="<?php echo e($p->name); ?>" alt="<?php echo e(__('index.no_image')); ?>"  style="

                        max-height: 206px;

                        "/>

                  </header>

               </a>

               <div class="product-inner">

                  <a  href="<?php echo e(route('product.details',$p->slug ?? $p)); ?>">

                     <h2 class="product-title"><?php echo e($p->name); ?></h2>

                  </a>

                  <div class="product-desciption"><a href="<?php echo e(route('productsByCity', $p->city->id ?? '1')); ?>"><span class="item-location"><i class="fa fa-map-marker"></i> <?php if($p->city): ?><?php echo e($p->city->city); ?> <?php endif; ?> </span></a> <span><?php echo e($p->city->country->name ??''); ?></span> | <span><?php echo e(date_format($p->created_at,'d M Y')); ?></span>

                     <br>

                     <a href="<?php echo e(route('sub.products', $p->subcategory->id ?? '' )); ?>"> <span><i class="fa fa-th" aria-hidden="true"></i> <?php echo e($p->categories->name); ?></span></a>

                  </div>

                  <!-- <div class="product-desciption"><?php echo e($p->description); ?></div> -->

                  <div class="product-meta">

                     <ul class="product-price-list">

                        <li><span class="product-price"><?php echo e($p->country->currency); ?>  <?php echo e($p->price); ?></span></li>

                        <!-- <li><span class="product-old-price">$221</span>

                           </li>

                           

                           <li><span class="product-save">Save 68%</span>

                           

                           </li> -->

                     </ul>
                          
                     <?php if($p->user): ?>
                     <?php if(empty($p->user->image)): ?>

                    <a href="<?php echo e(route('shops2', $p->user->id ?? '')); ?>"> <img id="userImg" class="userImg" src="<?php echo e(asset('img/user_avatar.jpg')); ?>" alt="user">&nbsp;

                     <?php else: ?>

                      <img src="<?php echo e(asset('/storage/'. $p->user->image)); ?>" class="seller-img" >

                     <?php endif; ?>

                     <h5><?php echo e($p->user->name); ?></h5></a>
                     <?php endif; ?>
                  </div>

                  <!-- <p class="product-location"><i class="fa fa-map-marker"></i> <?php echo e($p->city->city ?? ''); ?></p> -->

               </div>

               <div class="product-inner" style="

                  display: inline-flex;

                  ">

                  <button type="Add favorate" class="btn btn-primary hov1 favorite" style="background: white;background: white;/* padding-right: 12px; *//* padding-left: 55px; */margin: 11px;border: 1px solid red;border-color: #fd0101 !important; "  ><i class="fa fa-heart-o" style="c" aria-hidden='true' ></i> <?php echo e(__('index.add_favorite')); ?></button>

                  <button type="Add favorate" class="btn btn-primary hov2 call" style="background: white;padding-right: 55px;padding-left: 55px;margin: 11px;border: 1px solid red;border-color: #73b902 !important; "  ><i class="fa fa-phone" style="c" aria-hidden='true' ></i> <?php echo e(__('index.call')); ?></button>

                  <button  class="btn btn-primary hov3 chat" style="background: white;background: white;padding-right: 52px;padding-left: 40px;margin: 11px;border: 1px solid red;border-color: #efc718 !important;color: red;"  ><i class="fa fa-comments" style="c" aria-hidden='true' ></i> <?php echo e(__('index.chat')); ?> <?php echo e(__('index.soon')); ?></button>

               </div>

            </div>
                                                  
            <!-- </a> -->

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a href="<?php echo e(route('store.search')); ?>" class='btn btn-success' style="margin-bottom:50px;">Save Search</a>
            <?php endif; ?>

            <!-- end -- if for product only -->

            <!-- end search result -->

            <?php echo e($product->appends(Request::except('token'))->links()); ?> 

            <?php   //echo $product->render(); ?>

            

            <div class="gap"></div>

            

         </div>

</div>

</div>

<script>

$(document).ready(function(){
// change design
$("#large").hide();
$("#btn-large").click(function(){
  $("#list").hide();
  $("#large").show();

});

$("#btn-list").click(function(){
  $("#large").hide();
  $("#list").show();

});

});

</script>



<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/blades/search.blade.php ENDPATH**/ ?>