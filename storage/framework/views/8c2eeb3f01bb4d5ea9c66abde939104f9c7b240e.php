
<?php
$page_title=$products[0]->name;
    session()->put('my_country',$products[0]->country_id);
?>

<!doctype html>
<html lang="en">
<head>


 <?php echo $__env->make('layouts_mobile.inc-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <link rel="stylesheet" href="lib/Magnific-Popup-master/dist/magnific-popup.css">
 <link rel="stylesheet" href="lib/map/style.css">
 <link rel="stylesheet" href="<?php echo e(asset('css/font_awesome.css')); ?>">
 <?php echo $__env->yieldContent('social'); ?>

</head>

<body class="default">
<!-- Preloading -->
<div class="preloading">
    <div class="wrap-preload">
        <div class="cssload-loader"></div>
    </div>
</div>
<!-- .Preloading -->



<!-- Header  -->
<nav class="navbar navbar-expand-lg navbar-light bg-header detail" >
    <div class="container-fluid">
        <a href="index.html" class="btn">
            <i class="material-icons">arrow_back</i>
        </a>
        <button type="button" class="btn">
                
                
        </button>
    </div>

</nav>
<!-- .Header  -->

<?php
visits($products[0])->increment();
?>
<!-- Content  -->
<div id="content" class="detail" style='margin-top:30px;'>
    <!-- Content Wrap  -->
    <div class="content-wrap">
        <div class="subsite-banner" >

            <?php if(count($products[0]->images) == 1): ?>
            <div class="carousel-item active">
                <a class="image-zoom" href="<?php echo e($products[0]->main_image_url); ?>"><img alt="chat image" src="<?php echo e($products[0]->main_image_url); ?>" title="<?php echo e($products[0]->name); ?>" style='width:100%; height:150px; overflow:hidden'></a>
            </div>
            <?php else: ?>

                <div id="carousel-example-generic" class="carousel slide">
                    <?php $c=0;
                        $counter=0;
                    ?>
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php $__currentLoopData = $products[0]->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <li data-target="#carousel-example-generic" data-slide-to="<?php echo e($c); ?>" <?php if($c==0): ?> class="active" <?php endif; ?>></li>
                            <?php $c++;?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php $__currentLoopData = $products[0]->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="carousel-item <?php if($counter == 0): ?> active <?php endif; ?> ">
                            <a class="image-zoom" href="<?php echo e(asset('storage/'. $i->path)); ?>"><img alt="chat image" src="<?php echo e(asset('storage/'. $i->path)); ?>" style='width:100%; height:150px; overflow:hidden'></a>
                        </div>
                        <?php $counter++ ; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="subsite">
            <div class="ad-content">
                <div class="row">
                    <div class="col-12">
                        <div class="ad-title"><?php echo e($products[0]->name); ?></div>
                    </div>
                    <div class="col-6">
                        <div class="ad-location"><i class="material-icons-outlined">location_on</i><?php echo e($products[0]->city->city ?? ''); ?></div>
                    </div>
                    <div class="col-6 pl-0">
                        <div class="ad-location"><i class="material-icons">schedule</i><?php echo e(date_format($products[0]->created_at,'d M Y')); ?></div>
                    </div>
                    <div class="col-12">
                        <div class="ad-price"><i class="material-icons"></i><?php echo e($products[0]->country->currency); ?>  <?php echo e($products[0]->price); ?></div>
                    </div>
                </div>
            </div>
        </div>
        <!--Ads Detail-->
        <div class="heading-section">
            <div class="title">Ads Detail</div>
        </div>
        <div class="ad-section">
            <ul class="list-group">

            <li class="list-group-item"><?php echo e(__('index.negotiable')); ?> <span class="float-right col-text"><?php if($products[0]->negotiable == 1): ?>(<?php echo e(__('index.negotiable')); ?>)<?php else: ?> <?php echo e(__('index.no')); ?><?php endif; ?></span></li>
                <li class="list-group-item"><?php echo e(__('index.views')); ?> <span class="float-right col-text"><?php echo e($products[0]->visits()->count()); ?> </span></li>
                <li class="list-group-item"><?php echo e(__('index.category')); ?> <span class="float-right col-text"><?php echo e($products[0]->categories->name); ?></span></li>
                <li class="list-group-item"><?php echo e(__('index.phone')); ?> <span class="float-right col-text"><?php echo $products[0]->user->phone ?? null; ?></span></li>

                <li class="list-group-item"><?php echo e(__('index.safety')); ?>

                    <div class="li-features col-text">
                        <span><i class="material-icons col-primary">check</i> <?php echo e(__('index.meet')); ?></span>
                        <span><i class="material-icons col-primary">check</i><?php echo e(__('index.check')); ?></span>
                        <span><i class="material-icons col-primary">check</i> <?php echo e(__('index.pay')); ?></span>
                    </div>
                </li>
            </ul>
        </div>
        <!--Ads Detail-->
        <!--Description-->
        <div class="heading-section">
            <div class="title"><?php echo e(__('index.des')); ?></div>
        </div>
        <div class="ad-section">
            <p class="ad-section-item"><?php echo $products[0]->description; ?></p>
        </div>
        <!--Description-->
        <!--MAP Loation-->
        <div class="heading-section">
            <div class="title"><?php echo e(__('index.seller_map')); ?></div>
        </div>
        <div class="ad-section">
            <div class="ad-section-item">
                <?php echo $products[0]->map; ?>

                
            </div>

        </div>
        <!--MAP-->
        <!--Contact Info-->
        <div class="heading-section">
            <div class="title"><?php echo e(__('index.contact_info')); ?></div>
        </div>
        <div class="ad-section">
            <div class="ad-section-item">
                <div class="profile">
                    <div class="left">
                        <div class="user-image"> <img src="<?php echo e(asset('/storage/'. $products[0]->user->image)); ?>" width="60" alt="profile"></div>
                    </div>
                    <div class="right m-l-10">
                        <div class="name col-text text-uppercase"><?php echo $products[0]->user->name ?? null; ?></div>
                        <div class="acc"><?php echo e(__('index.phone')); ?> :  <span><?php echo $products[0]->user->phone ?? null; ?></span></div>
                        
                    </div>
                    <a href="<?php echo e(route('shops2', $products[0]->user->slug)); ?>" class="ml-auto">
                        <i class="material-icons">keyboard_arrow_right</i>
                    </a>
                </div>
            </div>

        </div>
        <!--Contact Info-->
        <!--Review-->
        
        <!--Review-->
        <!--Similar Ads-->
        <div class="heading-section">
            <div class="title"><?php echo e(__('index.related_products')); ?></div>
        </div>
        <div class="ad-section ad-carousel">
            <div class="default-carousel">
                <?php $__currentLoopData = $related_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- item -->
                <a href="<?php echo e(url('Product-details',$product->slug)); ?>">
                <div class="item">
                    <div class="ad-box">

                        <a href="<?php echo e(url('Product-details',$product->slug)); ?>">
                            <div class="ad-image">
                                <img src="<?php echo e($product->main_image_url); ?>">
                            </div>

                            <div class="ad-content">
                                <div class="ad-title"><?php echo e($product->name); ?></div>
                                <div class="ad-location"><i class="material-icons-outlined">location_on</i><?php echo e($product->city->city ?? ''); ?></div>
                                <div class="ad-price"><i class="material-icons"></i><?php echo e($product->price); ?> <?php echo e($products[0]->country->currency); ?></div>

                            </div>
                        </a>
                    </div>
                </div>
            </a>
                <!-- .item -->

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
        <!--Similar Ads-->


    </div>

</div>
<!-- Content  -->




        <!-- Botom Panel  -->
        <div class="footer">
            <div class="row no-gutters">
                <div class="col-6">
                    <a href="<?php echo e(route('chat.message',$products[0]->id)); ?>" class="btn btn-default rounded-0 btn-block w-100"><?php echo e(__('index.chat')); ?></a>
                </div>
                <div class="col-6">

                    <a href="tel:<?php echo e($products[0]->user->phone ?? null); ?>" class="btn btn-primary rounded-0 btn-block w-100" >  <i class="fa fa-phone"style="c"></i>   <?php echo e(__('index.call')); ?></a>

                    
                </div>
            </div>
        </div>
        <!-- Botom Panel  -->


<!-- Modal -->
<div class="modal fade" id="write-review" tabindex="-1" role="dialog" aria-labelledby="writeReviewTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close ml-0 px-0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <a href="#" class="col-primary ml-auto" type="button">POST</a>
            </div>
            <div class="modal-body">
                <span class="stars d-flex justify-content-around">
                            <i class="active material-icons">grade</i>
                            <i class="material-icons">grade</i>
                            <i class="material-icons">grade</i>
                            <i class="material-icons">grade</i>
                            <i class="material-icons">grade</i>
                </span>
                <div class="form-group mt-3">
                    <textarea class="form-control" id="" rows="3" spellcheck="false" placeholder="Describe your expreince"></textarea>
                    <div class="text-count float-right"><span>0</span>/500</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<?php echo $__env->make('layouts_mobile.inc-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>
</html>
<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/blades_mobile/productdetails_mobile.blade.php ENDPATH**/ ?>