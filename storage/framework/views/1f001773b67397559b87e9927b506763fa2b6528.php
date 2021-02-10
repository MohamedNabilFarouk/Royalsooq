<?php $__env->startSection('content'); ?>







<ul class="breadcrumb">



                    <li><a href="/"><?php echo e(__('index.home')); ?></a>



                    </li>



                    <li><a href="<?php echo e(route('account.dashboard')); ?>"><?php echo e(__('index.account')); ?></a>



                    </li>



                    <li class="active"><?php echo e(__('index.favorite_ads')); ?></li>



</ul>







    <style>



        .list-group-item {



    height:auto;



    min-height:220px;



}



.list-group-item.active small {



    color:#fff;



}



.stars {



    margin:20px auto 1px;    



}



    </style>



















<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>



<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->



<!------ Include the above in your HEAD tag ---------->



<div class="container">



<div class="row">



        <div class="col-md-3" >



                        <div id="app">







                            



                            <avored-layout inline-template>



                                            <div>







                                            <a-layout id="components-layout-demo-top" class="layout">







                                                <!-- <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->















                                                <a-layout-content style="padding: 0 10px">







                                                    <?php echo $__env->make('partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>







                                                    <a-layout style="padding: 24px 0">







                                                        <?php if(auth()->guard()->check()): ?>







                                                        <a-layout-sider width="100%">







                                                        <?php echo $__env->make('partials.account-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>







                                                        </a-layout-sider>







                                                        <?php endif; ?>







                                                    



                                                    </a-layout>







                                                    </a-layout-content>







                                                







                                                <!-- <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->







                                                    </a-layout>







                                            </div>            



                            



                            </avored-layout>



                        </div>



        </div>







        <div class='col-md-9' style="  background-color: #f5f5f5;



                        padding: 2%;



                        margin-top: 0px;



                        border: #e2e2e2 1px solid;">



                   

<?php if(!$wishlists): ?>

<h2>EMPTY</h2>

<?php else: ?>  

                        <div class="row">



                            <div class="well">



                                    <h1 class="text-center"> <?php echo e(__('index.favorite_ads')); ?></h1>



                                    <div class="list-group">



                                        <?php $__currentLoopData = $wishlists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                                        <form method="post" action="<?php echo e(route('add.to.cart')); ?>">



                                                                <?php echo csrf_field(); ?>



                                                <div  class="list-group-item ">



                                                        <div class="media col-md-3">



                                                            <figure class="pull-left">



                                                                <img class="media-object img-rounded img-responsive" style="width:50%"  src="<?php echo e($w->product->main_image_url ?? ''); ?>" alt="placehold.it/350x250" >



                                                            </figure>



                                                        </div>



                                                        <div class="col-md-6">



                                                            <h4 class="list-group-item-heading"> <?php echo e($w->product->name ?? ''); ?> </h4>



                                                            <p class="list-group-item-text"><?php echo e($w->product->description ?? ''); ?>




                                                            </p>



                                                        </div>



                                                        <div class="col-md-3 text-center">



                                                            <h2> <?php echo e($w->product->price ?? ''); ?> <small><?php echo e($w->product->country->currency ?? ''); ?> </small></h2>



                                                        



                                                        



                                                                            <!-- <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i> </button> -->



                                                                            <!-- <button type="submit" class="btn btn-default btn-lg btn-block"> Add To Cart </button>



                                                                            <input type="hidden" name="slug" value="<?php echo e($w->product->slug ?? ''); ?> ">



                                                                            <input type="hidden" name="qty" value="1"> -->



                                                                    

</form>

<form action="<?php echo e(route('delete.favorites', $w->id)); ?>" method="post">

<?php echo e(method_field('DELETE')); ?>    

<?php echo csrf_field(); ?>



    <input class="btn btn-danger btn-lg btn-block" type="submit" value="<?php echo e(__('index.delete')); ?>"/> 

</form>

                                                            <!-- <div class="stars">



                                                                <span class="glyphicon glyphicon-star"></span>



                                                                <span class="glyphicon glyphicon-star"></span>



                                                                <span class="glyphicon glyphicon-star"></span>



                                                                <span class="glyphicon glyphicon-star"></span>



                                                                <span class="glyphicon glyphicon-star-empty"></span>



                                                            </div> -->



                                                            <!-- <p> Average 4.5 <small> / </small> 5 </p> -->



                                                        </div>



                                                </div>



                                      



                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>











                    



                                    </div>



                            </div>



                        </div>

<?php endif; ?>

                



        </div>



</div>



</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/blades/wishlist.blade.php ENDPATH**/ ?>