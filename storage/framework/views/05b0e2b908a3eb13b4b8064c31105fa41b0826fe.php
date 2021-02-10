<?php
$page_title=$products[0]->categories->name ?? '';
?>


<?php $__env->startSection('content'); ?>








                <ul class="breadcrumb">
                    <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('index.home')); ?></a>
                    </li>
                    
                    <li><a href="<?php echo e(route('category.sub', $products[0]->categories->id ?? '')); ?>"><?php echo e($products[0]->categories->name ?? ''); ?></a>
                    </li>
                   
                </ul>





<div class="container" style=" margin-top:50px;">

<?php if($products != ''): ?>   





           

           

            <div class="row">
                <!-- change design -->
                <div class="col-md-2 col-md-offset-9">

                            <div class="product-view pull-right">

                                <button class="fa fa-th-large active" id="btn-large" ></button>

                                <button class="fa fa-list" id="btn-list" ></button>

                            </div>  

                </div>
                <!-- filter -->
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
                        <form action="<?php echo e(route('cat.products', $products[0]->categories->slug)); ?>" method="GET">
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
                                                            
                                        </ul>


                                        <!--by subcategory  -->

                                        <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">
                                                                <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;" data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                                                <h5 style="color: #464646;"> <?php echo e(__('index.sub')); ?></h5> 
                                                            
                                                                <!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->
                                                                </li>
                                                                <div class="sidebar-box"id="multiCollapseExample4">
                                                                
                                                                <ul class="checkbox-list">
                                                                       
                                                                        <?php $__currentLoopData = $subcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" name="subcategory[]" value="<?php echo e($s->id); ?>" class="i-check"><?php echo e($s->name); ?> <small></small>
                                                                            </label>
                                                                        </li>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </ul>
                                                                    
                                                                </div>
                                                            
                                        </ul>

                                        <button class="btn btn-primary secondNavButtons" style="width: 100%;"><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> <?php echo e(__('index.search_btn')); ?></a> 
                                                                                    </button>                
                                                                    </form>

                        
                            
                            </ul>
                                <!-- button search -->
                            <!-- <button class="btn btn-primary secondNavButtons" style="

                                        width: 100%;

                                    "><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> search</a> 
                            </button> -->

                                    </ul>    </div></div> </div></div></div></div>





                </div>

                <!-- ads large -->
        <div class="col-md-9">

                    

                                <div class="row row-wrap" id="large">
                                    

                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($product->approved == 1): ?>
                                        <div class="col-md-4">
                                    
                                        <a href="<?php echo e(route('product.details', $product->slug)); ?>">
                                        <div class="product-thumb">
                                        <header class="product-header">
                                        <form method="post" action="<?php echo e(route('add.favorites')); ?>">
                                                <?php echo csrf_field(); ?> 
                                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">  

                                                <button class="btn fav" type="submit"><i class="fa fa-heart"></i> </button>
                                        </form>    
                                        <img src="<?php echo e($product->main_image_url); ?>" alt="Image Alternative text" title="<?php echo e($product->name); ?>" style="height: 200px;" />
                                        </header>
                                        <div class="product-inner">
                                        <ul class="icon-group icon-list-rating" title="<?php echo e(number_format($product->averageRating)); ?>/5 rating">
                                            
                                            <?php echo str_repeat('<li><i class="fa fa-star "></i></li>', number_format($product->averageRating)) ?> 
                                            <?php echo str_repeat('<span class="fa fa-star unchecked"></span>', 5 - number_format($product->averageRating)) ?> 
                    
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
                                                <li><a href="Product-details/<?php echo e($product->slug); ?>" class="btn btn-sm chat"  style="
                                                color: #626262;border: solid 1px #fdeb18;"><i class="fa fa-comment" style=" color: #fdeb18;"></i> <?php echo e(__('index.chat')); ?></a>
                                                    <a href="tel:<?php echo e($product->user->phone ?? null); ?>" class="btn btn-sm call" style="
                                                color: #626262; border: solid 1px #73b902;"><i class="fa fa-phone"style="    color: #73b902;"></i> <?php echo e(__('index.call')); ?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div></a>                        </div>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





                                </div>



                                <!-- list -->
                                <div class="row row-wrap" id="list">
                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($p->approved == 1): ?>
                                                                <a href="<?php echo e(route('product.details', $p->slug)); ?>">
                                                                <div class="product-thumb product-thumb-horizontal">

                                                                    <header class="product-header">

                                                                        <img src="<?php echo e($p->main_image_url); ?>" alt="<?php echo e(__('index.no_image')); ?>" title="<?php echo e($p->name); ?>" style="max-height: 248px;">

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
                                                                          <?php endif; ?>  
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <!-- endlist -->





                                    <?php echo e($products->appends(Request::except('token'))->links()); ?> 
                                    <?php   //echo $products->render(); ?>

                                

                                    <div class="gap"></div>

                                </div>

                            </div>
                    
                        
                            <?php else: ?>
                    <h2 class="text-center">No Items</h2>
                <?php endif; ?>

        </div>







<script>

$(document).ready(function(){
 $('#car').change(function(){
  $("#model").empty();
  var car = $( "#car" ).find(":selected").text();
//alert(car);
       	$.ajax({
		type: "get",
		url: "/getModel",
		data:{ _token:'<?php echo csrf_token() ?>', 
		      car: car,
		},
    success: function(response){



var len = 0;

if(response['data'] != null){

  len = response['data'].length;

}



if(len > 0){

  // Read data and create <option >

  for(var i=0; i<len; i++){



    var id = response['data'][i].id;

    var model = response['data'][i].model;
    var year = response['data'][i].year;


    var option = "<option value='"+model+"'>"+model +"</option>"; 
    var yearOption= "<option value='"+year+"'>"+ year +"</option>"; 

  



    $("#model").append(option); 
   $("#year").append(yearOption);

  }

}



}
		});
});

// change design
$("#list").hide();
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/blades/category-products.blade.php ENDPATH**/ ?>