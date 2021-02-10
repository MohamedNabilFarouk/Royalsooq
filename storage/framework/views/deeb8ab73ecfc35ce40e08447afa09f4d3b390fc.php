<?php $__env->startSection('content'); ?>

<ul class="breadcrumb">

                    <li><a href="/">Home</a>

                    </li>

                    <li><a href="#">serach</a>

                    </li>

                    <!-- <li class="active">billy</li> -->

                </ul>

<div class="container">

            <div class="row">

                <div class="col-md-3">



             

                    
               
                        <div>
                        <div class="layout ant-layout" id="components-layout-demo-top">
                        <div class="ant-layout-content" style="padding: 0px 10px;">
                        <div class="ant-layout ant-layout-has-sider" style="padding: 24px 0px;">
                        <div class="ant-layout-sider ant-layout-sider-dark" style="flex: 0 0 100%; max-width: 100%; min-width: 100%; width: 100%;">
                        <div class="ant-layout-sider-children">
                        <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">
                        <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;">
                        <h5 style="color: #fff;"> Search By Product Feature</h5> 
                    
                        <!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->
                        </li>
                        <ul  class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="display: block;">
                                    <div class="sidebar-box">  
                                            <ul class="checkbox-list">
                                                        <form action="<?php echo e(url('/Filter')); ?>" method="GET"> 
                                                            <?php echo csrf_field(); ?>
                                                            <li class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="feature[]" value="new" class="i-check" required>New <small>(50)</small>
                                                                </label>
                                                            </li>
                                                            <li class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="feature[]" value="on_sale" class="i-check">On Sale <small>(70)</small>
                                                                </label>
                                                            </li>
                                                            <li class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="feature[]" value="best_rated" class="i-check">Best Rated <small>(32)</small>
                                                                </label>
                                                            </li>
                                                            <button class="btn btn-primary secondNavButtons" style="

                                                                    width: 100%;

                                                                "><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> search</a> </button>

                                                        </form>
                                            </ul>
                                    </div>                               
                                         <!-- by price -->
                                            <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">
                                                        <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;">
                                                        <h5 style="color: #fff;"> Search By Price</h5> 
                                                    
                                                        <!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->
                                                        </li>

                                                        <div class="sidebar-box">
                                                            <!-- <h5>Filter By Price</h5> -->
                                                            <!-- <input type="text" id="price-slider"> -->
                                                            <form action="<?php echo e(url('/Filter')); ?>" method="GET"> 
                                                                <?php echo csrf_field(); ?>
                                                                <!-- <input type="hidden" name='search_request[]' value="<?php echo e($product); ?>">  -->
                                                        
                                                            <div class="form-group">    
                                                            
                                                            <input type="number" class="form-control" name="min" min='0' placeholder="From">
                                                            </div>
                                                                <div class="form-group">                               
                                                                <input type="number"  class="form-control" name="max" min='0' placeholder="To">
                                                                </div>
                                                                <button class="btn btn-primary secondNavButtons" style="width: 100%;"><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> search</a> 
                                                                </button>                            
                                                                </form>
                                                        </div>
                                            </ul>

                                        <!-- by category -->
                                        <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">
                                                                <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;">
                                                                <h5 style="color: #fff;"> Search By Category</h5> 
                                                            
                                                                <!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->
                                                                </li>
                                                                <div class="sidebar-box">
                                                                
                                                                    <ul class="checkbox-list">
                                                                    <form action="<?php echo e(url('/Filter')); ?>" method="GET"> 
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php $__currentLoopData = $allcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox" name="category[]" value="<?php echo e($c->id); ?>" class="i-check"><?php echo e($c->name); ?> <small></small>
                                                                            </label>
                                                                        </li>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    
                                                                        <button class="btn btn-primary secondNavButtons" style="width: 100%;"><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> search</a> 
                                                                                    </button>                
                                                                    </form>
                                                                    </ul>
                                                                
                                                                </div>
                                        </ul>
                                        <!-- by city -->
                                         <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light" style="height: 100%;">
                                                                <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;">
                                                                <h5 style="color: #fff;"> Search By City</h5> 
                                                            
                                                                <!-- <a href="" class="hide-nerest"><i aria-hidden="true" class="fa fa-angle-down"></i></a> -->
                                                                </li>
                                                                <div class="sidebar-box">
                                                                
                                                                    <ul class="checkbox-list">
                                                                    <form action="<?php echo e(url('/Filter')); ?>" method="GET"> 
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php $__currentLoopData = $allcities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox" name="city[]" value="<?php echo e($c->id); ?>" class="i-check"><?php echo e($c->city); ?> <small></small>
                                                                            </label>
                                                                        </li>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    
                                                                        <button class="btn btn-primary secondNavButtons" style="width: 100%;"><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> search</a> 
                                                                                    </button>                
                                                                    </form>
                                                                    </ul>
                                                                
                                                                </div>
                                        </ul>



                           
                            
                            </ul>
                                <!-- button search -->
                             <!-- <button class="btn btn-primary secondNavButtons" style="

                                        width: 100%;

                                    "><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> search</a> 
                            </button> -->

                                     </ul>    </div></div> <div class="ant-layout-content" style="padding: 0px 24px; min-height: 280px;"></div></div></div></div></div>





                </div>

                <div class="col-md-9">

                    <div class="row">

                        <div class="col-md-3">

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

                        </div>

                        <div class="col-md-2 col-md-offset-7">

                            <div class="product-view pull-right">

                                <a class="fa fa-th-large" href="category-page-coupon.html"></a>

                                <a class="fa fa-list active" href="#"></a>

                            </div>

                        </div>

                    </div>



                    <!-- search reasult -->
<?php if($productonly == ''): ?>
        
        <?php if($product != '[]'): ?>



    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php if($p->categories->service == '1'): ?>

                    <a class="product-thumb product-thumb-horizontal" href="<?php echo e(route('service.details',$p->id)); ?>">

                    <?php else: ?>

                    <a class="product-thumb product-thumb-horizontal" href="<?php echo e(route('product.details',$p->slug)); ?>">

                    <?php endif; ?>    

                        <header class="product-header">

                            <img src=" <?php if($p->des): ?><?php echo e(asset('/storage/'.$p->image)); ?><?php else: ?> <?php echo e($p->main_image_url); ?><?php endif; ?>" alt="<?php echo e($p->name); ?>" title="Hot mixer" />

                        </header>

                        <div class="product-inner">

                            <h5 class="product-title"><?php echo e($p->name); ?></h5>

                            

                            <div class="product-desciption"><?php echo e($p->des ?? $p->description); ?></div>

                            <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i></span>

                                <ul class="product-price-list">

                                    <li><span class="product-price">$<?php echo e($p->price); ?></span>

                                    </li>

                                    <li><span class="product-old-price">$221</span>

                                    </li>

                                    <li><span class="product-save">Save 68%</span>

                                    </li>

                                </ul>

                            </div>

                            <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>

                        </div>

                        

                         <div class="product-inner" style="

    display: inline-flex;

">

                            <input type="Call" class="btn btn-primary" value="Add favorate" style="

    background: white;    border-color: RED !important;

">

                            <input type="Chat soon" class="btn btn-primary" value="Call" style="

    margin-left: 8px;

    background: white;

    border-color: #6cc709 !important;

">

                            

                        

                            <div class="product-meta">

                             <input type="Add favorate" class="btn btn-primary" value="Chat soon" style="

    background: white; margin-left: 32px;

">

                            </div>

                          

                              

                          

                        </div>

                        

                        

                    </a>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php else: ?> 

    <h2 class="text-center">No Items</h2>

    <?php endif; ?> 
    <!-- end if for product -->
    
    
    <?php else: ?>

    <?php $__currentLoopData = $productonly; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <a class="product-thumb product-thumb-horizontal" href="<?php echo e(route('product.details',$p->slug)); ?>">  

    <header class="product-header">
        <img src="<?php echo e(asset('/storage/'.$p->path)); ?>" alt="<?php echo e($p->name); ?>" title="Hot mixer" />


    </header>

    <div class="product-inner">

        <h5 class="product-title"><?php echo e($p->name); ?></h5>

        

        <div class="product-desciption"><?php echo e($p->description); ?></div>

        <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i></span>

            <ul class="product-price-list">

                <li><span class="product-price">$<?php echo e($p->price); ?></span>

                </li>

                <li><span class="product-old-price">$221</span>

                </li>

                <li><span class="product-save">Save 68%</span>

                </li>

            </ul>

        </div>

        <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>

    </div>

    

     <div class="product-inner" style="

display: inline-flex;

">

        <input type="Call" class="btn btn-primary" value="Add favorate" style="

background: white;    border-color: RED !important;

">

        <input type="Chat soon" class="btn btn-primary" value="Call" style="

margin-left: 8px;

background: white;

border-color: #6cc709 !important;

">

        

    

        <div class="product-meta">

         <input type="Add favorate" class="btn btn-primary" value="Chat soon" style="

background: white; margin-left: 32px;

">

        </div>

      

          

      

    </div>

    

    

</a>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php endif; ?>
<!-- end if for product only -->
                    <!-- end search result -->



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



        </div>





          

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\resources\views/blades/search.blade.php ENDPATH**/ ?>