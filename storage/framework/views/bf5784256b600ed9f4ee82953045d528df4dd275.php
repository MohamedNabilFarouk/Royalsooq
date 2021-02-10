<?php $__env->startSection('header'); ?>
<nav class="navbar navbar-expand-lg bg-header">
    <div class="container-fluid justify-content-start">
        <a href="<?php echo e(route('allCategories')); ?>" class="btn">
            <i class="material-icons">arrow_back</i>
        </a>
        <div class="navbar-heading m-l-10">
            <h4><?php echo e($page_title); ?></h4>
        </div>
    </div>
</nav>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<!-- Content  -->

<div id="content">
    <!-- Content Wrap  -->
    <div class="content-wrap" style='margin-top:50px;'>
        <div class="section section-filter">
            
            
            <button class="btn btn-link" data-toggle="modal" data-target="#filter"> <i class="material-icons-outlined m-r-5" >filter_alt</i> Filter</button>
        </div>

        
        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ad-section">

            <div class="ad-section-item">
                <div class="ad-box list">

                    <div class="ad-image">
                        <form method="post" action="<?php echo e(route('add.favorites')); ?>">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="product_id" value="<?php echo e($p->id); ?>">
                        <button type="submit" class="btn favourite-icon">
                            <i class="material-icons">favorite_border</i>
                        </button>
                    </form>
                    <a href="<?php echo e(route('product.details', $p->slug)); ?>">    <img src="<?php echo e($p->main_image_url); ?>" alt="<?php echo e(__('index.no_image')); ?>" title="<?php echo e($p->name); ?>"></a>
                    </div>
                    <div class="ad-content">
                        <a href="<?php echo e(route('product.details', $p->slug)); ?>" class="ad-title"><?php echo e($p->name); ?></a>
                        <div class="ad-price"><i class="material-icons"></i><?php echo e($p->country->currency); ?>   <?php echo e($p->price); ?></div>
                        <div class="ad-location"><i class="material-icons-outlined">location_on</i><?php if($p->city): ?><?php echo e($p->city->city); ?> <?php endif; ?></div>
                        <div class="ad-location col-text"><i class="material-icons">schedule</i><?php echo e(date_format($p->created_at,'d M Y')); ?></div>
                    </div>
                </div>
            </div>

        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php  // echo $product->render(); ?>
<?php echo e($product->appends(Request::except('token'))->links()); ?>


    </div>
    

</div>
<!-- Content  -->
<?php echo e($product->appends(Request::except('token'))->links()); ?>

<!-- Modal filter -->
<div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="sortByTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sortByTitle"><h5></h5> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(url('/Filter')); ?>" method="GET">
                <?php echo csrf_field(); ?>
            <div class="modal-body pt-0">
                <h5><?php echo e(__('index.sort')); ?></h5>
                <ul class="checkbox-list"> 

                    <li class="checkbox list-group-item">

                       <label>

                       <input type="radio" name="sort_price" value="ASC" class="i-check" > &nbsp;&nbsp;<?php echo e(__('index.price')); ?> :<?php echo e(__('index.sort_price_asc')); ?>


                       </label>

                    </li>

                    <li class="checkbox list-group-item">

                       <label>

                       <input type="radio" name="sort_price" value="DESC" class="i-check"> &nbsp;&nbsp;<?php echo e(__('index.price')); ?> :<?php echo e(__('index.sort_price_desc')); ?>


                       </label>

                    </li>

                    <li class="checkbox list-group-item">

                       <label>

                       <input type="radio" name="sort_latest" value="DESC" class="i-check"> &nbsp;&nbsp;<?php echo e(__('index.sort_latest')); ?>


                       </label>

                    </li>

                    <li class="checkbox list-group-item">

                       <label>

                       <input type="radio" name="sort_latest" value="ASC" class="i-check"> &nbsp;&nbsp;<?php echo e(__('index.sort_oldest')); ?>


                       </label>

                    </li>

                 </ul>

                    <hr>

                    <ul class="list-group"> 
                    <h5><?php echo e(__('index.s_price')); ?></h5>
                    <div class="form-group">

                        <input type="number" class="form-control" name="min" min='0' placeholder="<?php echo e(__('index.s_from')); ?>">

                     </div>

                     <div class="form-group">

                        <input type="number"  class="form-control" name="max" min='0' placeholder="<?php echo e(__('index.s_to')); ?>">

                     </div>
                    </ul> 

                     <hr>

                     <ul class="list-group"> 
                     <h5 style="color: #464646;" id="cat-tog"> <?php echo e(__('index.s_cat')); ?> &nbsp; <i class="fa fa-chevron-down"  aria-hidden="true"></i> </h5>
                     <ul class="checkbox-list" id='cat'>

                        <?php $__currentLoopData = $allcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <li class="checkbox list-group-item">

                           <label>

                           <input type="checkbox" name="category[]" id="myCheckbox-<?php echo e($c->id); ?>" value="<?php echo e($c->id); ?>" > &nbsp;&nbsp; <?php echo e($c->name); ?>


                           </label>

                        </li>
                                
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                     </ul>
                     </ul> 

                     <hr>
                     <ul class="list-group" > 
                        <h5 style="color: #464646;" id="city-tog"> <?php echo e(__('index.s_city')); ?> &nbsp; <i class="fa fa-chevron-down" aria-hidden="true"></i></h5>
                        <ul class="checkbox-list" id='city' >

                            <?php if(session()->get('my_country') == '1') {

                               $allcities = $egy_cities;

                               }else {

                               $allcities = $sa_cities;

                               }

                               ?>

                            <?php $__currentLoopData = $allcities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <li class="checkbox list-group-item">

                               <label>

                               <input type="checkbox" name="city[]" value="<?php echo e($c->id); ?>" class="i-check"> &nbsp;&nbsp; <?php echo e($c->city); ?>


                               </label>

                            </li>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                         </ul>
                     </ul> 

                     <hr>
                     <button class="btn btn-primary secondNavButtons" style="width: 100%;"><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> <?php echo e(__('index.search_btn')); ?></a>

                     </button>
                </ul>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- Modal filter -->


<!-- Modal sort -->
<div class="modal fade" id="sortby" tabindex="-1" role="dialog" aria-labelledby="sortByTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sortByTitle"><?php echo e(__('index.sort')); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(url('/Filter')); ?>" method="GET">
                <?php echo csrf_field(); ?>
            <div class="modal-body pt-0">
                <ul class="checkbox-list">

                    <li class="checkbox list-group-item">

                       <label>

                       <input type="radio" name="sort_price" value="ASC" class="i-check" > &nbsp;&nbsp;<?php echo e(__('index.price')); ?> :<?php echo e(__('index.sort_price_asc')); ?>


                       </label>

                    </li>

                    <li class="checkbox list-group-item">

                       <label>

                       <input type="radio" name="sort_price" value="DESC" class="i-check"> &nbsp;&nbsp;<?php echo e(__('index.price')); ?> :<?php echo e(__('index.sort_price_desc')); ?>


                       </label>

                    </li>

                    <li class="checkbox list-group-item">

                       <label>

                       <input type="radio" name="sort_latest" value="DESC" class="i-check"> &nbsp;&nbsp;<?php echo e(__('index.sort_latest')); ?>


                       </label>

                    </li>

                    <li class="checkbox list-group-item">

                       <label>

                       <input type="radio" name="sort_latest" value="ASC" class="i-check"> &nbsp;&nbsp;<?php echo e(__('index.sort_oldest')); ?>


                       </label>

                    </li>

                 </ul>
                 <button class="btn btn-primary secondNavButtons" style="width: 100%;"><a class=""  style="color: white;text-decoration: none;"> <i class="fa fa-search" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> <?php echo e(__('index.search_btn')); ?></a>

                 </button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- Modal -->

<script>
    $(document).ready(function(){
        $('#city').hide();
        $('#cat').hide();
        $('#city-tog').click(function(){
        $("#city").toggle();


});

$('#cat-tog').click(function(){
        $("#cat").toggle();

    });
});

    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts_mobile.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/blades_mobile/search_mobile.blade.php ENDPATH**/ ?>