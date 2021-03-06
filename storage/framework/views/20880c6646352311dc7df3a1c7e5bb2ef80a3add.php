<!DOCTYPE HTML>
<html>

<head>
    <title>royay sooq</title>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
    <!-- Bootstrap 4 styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/boostrap.min.css')); ?>">
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/boostrap.css')); ?>">
    
    <!-- Font Awesome styles (icons) -->
    <link rel="stylesheet" href="<?php echo e(asset('css/font_awesome.css')); ?>">
    <!-- Main Template styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    <!-- IE 8 Fallback -->
    <!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="css/ie.css" />
<![endif]-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  

    <link rel="stylesheet" href="css/switcher.css">
    <!-- Demo Examples -->
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/apple.css" title="apple" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/teal.css" title="teal" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/gold.css" title="gold" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/downy.css" title="downy" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/atlantis.css" title="atlantis" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/red.css" title="red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/violet.css" title="violet" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/pomegranate.css" title="pomegranate" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/violet-red.css" title="violet-red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/mexican-red.css" title="mexican-red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/victoria.css" title="victoria" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/orient.css" title="orient" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/jgger.css" title="jgger" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/de-york.css" title="de-york" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/blaze-orange.css" title="blaze-orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/hot-pink.css" title="hot-pink" media="all" />
    <!-- END Demo Examples -->



    <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.min.css')); ?>">

    
    <!-- Your custom styles (blank file) -->
    <link rel="stylesheet" href="<?php echo e(asset('css/mystyles.css')); ?>">



    <!--  -->
 <!-- Styles -->
 <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldPushContent('styles'); ?>
    <script src="https://js.stripe.com/v3/"></script>
    <!--  -->
    <style>
    
    .modal-content{
       top:70px; 
    }
    .color-fa{
        color: #1c6c91 !important;
        opacity: 1!important;
     }   
     .login-register > li > a [class^="fa fa-"] {
    font-size: 19px;}
.login-register > li > a {
    font-size: 15px;
    text-transform: uppercase;
    padding: 0 5px;}
.chande .text-formatting, a {
   /*text-transform: uppercase;*/
  /*text-decoration: none;*/
  /*text-align: center;*/
  /*letter-spacing: 2px;*/
  /*line-height: 70px;*/
  font-family: 'Squada One', cursive;
  /*font-size: 28px;*/
}
.btn-primary {
    /*background: #2a8fbd;*/
    border-radius: 16px;
    color: #fff;
    border-color: #2681aa;
    box-shadow: 2px 3px 6px 0px #065173;
}
.chande .btn-primary{
     animation: colorchange 50s; /* animation-name followed by duration in seconds*/
         /* you could also use milliseconds (ms) or something like 2.5s */
      -webkit-animation: colorchange 50s; /* Chrome and Safari */
}
 @keyframes  colorchange
    {
      0%   {background: #2681aa;}
      25%  {background: #1d5e7b;}
      50%  {background: #2681aa;}
      75%  {background: #1d5e7b;}
      100% {background: #1c6f96;}
    }

    @-webkit-keyframes colorchange /* Safari and Chrome - necessary duplicate */
    {
      0%   {background: #2681aa;}
      25%  {background: #1d5e7b;}
      50%  {background: #2681aa;}
      75%  {background: #1d5e7b;}
      100% {background: #1c6f96;}
    }
    </style>
</head>

<body>


    <div class="global-wrap">

        
        <div class="demo_changer" id="demo_changer">
            <div class="demo-icon fa fa-sliders" style="display: none;"></div>
            <div class="form_holder">
                <div class="line"></div>
                <p>Color Scheme</p>
                <div class="predefined_styles" id="styleswitch_area">
                    <a href="index-shop-layout-1c392.html?default=true" class="styleswitch" style="background:#2A8FBD"></a>
                    <a href="#" data-source="apple" class="styleswitch" style="background:#56AD48"></a>
                    <a href="#" data-source="pink" class="styleswitch" style="background:#FF0066"></a>
                    <a href="#" data-source="teal" class="styleswitch" style="background:#1693A5"></a>
                    <a href="#" data-source="gold" class="styleswitch" style="background:#FBB829"></a>
                    <a href="#" data-source="downy" class="styleswitch" style="background:#6dcda7"></a>
                    <a href="#" data-source="atlantis" class="styleswitch" style="background:#8cc732"></a>
                    <a href="#" data-source="red" class="styleswitch" style="background:#FF0000"></a>
                    <a href="#" data-source="violet" class="styleswitch" style="background:#D31996"></a>
                    <a href="#" data-source="pomegranate" class="styleswitch" style="background:#F02311"></a>
                    <a href="#" data-source="violet-red" class="styleswitch" style="background:#F23A65"></a>
                    <a href="#" data-source="mexican-red" class="styleswitch" style="background:#9b2139"></a>
                    <a href="#" data-source="victoria" class="styleswitch" style="background:#544AA1"></a>
                    <a href="#" data-source="orient" class="styleswitch" style="background:#025D8C"></a>
                    <a href="#" data-source="jgger" class="styleswitch" style="background:#420943"></a>
                    <a href="#" data-source="de-york" class="styleswitch" style="background:#8CCA91"></a>
                    <a href="#" data-source="blaze-orange" class="styleswitch" style="background:#FF6600"></a>
                    <a href="#" data-source="hot-pink" class="styleswitch" style="background:#FF5EAA"></a>
                </div>
                <div class="line"></div>
                <p>Layout</p>
                <div class="predefined_styles">
                    <a href="#" class="btn btn-sm" id="btn-wide">Wide</a>
                    <a href="#" class="btn btn-sm" id="btn-boxed">Boxed</a>
                </div>
                <div class="line"></div>
                <p>Background patterns</p>
                <div class="predefined_styles" id="patternswitch_area">
                    <a href="#" class="patternswitch" style="background-image: url('img/patterns/binding_light.png')"></a>
                    <a href="#" class="patternswitch" style="background-image: url('img/patterns/binding_dark.png')"></a>
                    <a href="#" class="patternswitch" style="background-image: url('img/patterns/dark_fish_skin.png')"></a>
                    <a href="#" class="patternswitch" style="background-image: url('img/patterns/dimension.png')"></a>
                    <a href="#" class="patternswitch" style="background-image: url('img/patterns/escheresque_ste.png')"></a>
                    <a href="#" class="patternswitch" style="background-image: url('img/patterns/food.png')"></a>
                    <a href="#" class="patternswitch" style="background-image: url('img/patterns/giftly.png')"></a>
                    <a href="#" class="patternswitch" style="background-image: url('img/patterns/grey_wash_wall.png')"></a>
                    <a href="#" class="patternswitch" style="background-image: url('img/patterns/ps_neutral.png')"></a>
                    <a href="#" class="patternswitch" style="background-image: url('img/patterns/pw_maze_black.png')"></a>
                    <a href="#" class="patternswitch" style="background-image: url('img/patterns/pw_pattern.png')"></a>
                    <a href="#" class="patternswitch" style="background-image: url('img/patterns/simple_dashed.png')"></a>
                </div>
                <div class="line"></div>
                <p>Background images</p>
                <div class="predefined_styles" id="bgimageswitch_area">
                    <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/bike.jpg')" data-source="img/backgrounds/bike.jpg"></a>
                    <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/flowers.jpg')" data-source="img/backgrounds/flowers.jpg"></a>
                    <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/wood.jpg')" data-source="img/backgrounds/wood.jpg"></a>
                    <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/taxi.jpg')" data-source="img/backgrounds/taxi.jpg"></a>
                    <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/phone.jpg')" data-source="img/backgrounds/phone.jpg"></a>
                    <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/road.jpg')" data-source="img/backgrounds/road.jpg"></a>
                    <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/keyboard.jpg')" data-source="img/backgrounds/keyboard.jpg"></a>
                    <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/beach.jpg')" data-source="img/backgrounds/beach.jpg"></a>
                    <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/street.jpg')" data-source="img/backgrounds/street.jpg"></a>
                    <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/nature.jpg')" data-source="img/backgrounds/nature.jpg"></a>
                    <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/bridge.jpg')" data-source="img/backgrounds/bridge.jpg"></a>
                    <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/cameras.jpg')" data-source="img/backgrounds/cameras.jpg"></a>
                </div>
                <div class="line"></div>
            </div>
        </div>

        <!-- Top navbar -->
       

        <header class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 d-sm-none">
                        
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <!-- MAIN NAVIGATION -->
                        <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                        <nav>
                            <ul class="nav nav-pills flexnav"  id="flexnav" data-breakpoint="800" style="padding: 5px 0px;">

                                <li><a href="shops.html" class="navBar-item">Crean An Account</a> </li>

                                <li><a href="page-my-account-settings.html" class="navBar-item">Daily Deals</a> </li>

                                <li><a href="shops.html" class="navBar-item">Customer Service</a> </li>

                                <li><a href="page-my-account-settings.html" class="navBar-item">Sell With Us</a> </li>

                                <li><a href="page-my-account-settings.html" class="navBar-item">Track Orders</a> </li>
                                
                            </ul>
                        </nav>
                        <!-- END MAIN NAVIGATION -->
                    </div>
                </div>
            </div>
        </header>

        <!-- Second Bar -->
        <!-- //////////////////////////////////
        //////////////MAIN HEADER///////////// 
        ////////////////////////////////////-->
        <div class="top-main-area">
            <div class="container">
                <div class="row flex-wrap">
                    <div class="col-md-2 col-12 text-center" style="display: flex;  justify-content: space-between; align-items: center;">
                        <div>
                            <a href="/" class="logo">
                                <img src="img/logos/logo (1).png" alt="Image Alternative text" title="Image Title" style="width:100px" />
                            </a>
                        </div>  
                       
                        <!--<div>-->
                        <!--    <h4 class="text-primary dropdown-toggle"  data-toggle="dropdown" style="margin-top: 15px;cursor: pointer;font-weight: 600;"> English </h4>-->
                        <!--    <ul class="dropdown-menu dropdown-menu-right" style="z-index: 999999999;">-->
                        <!--        <li><a href="#">اللغة العربية</a></li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                    </div>
                    <div class="col-md-2">                       
                       <img src="https://via.placeholder.com/150/FF0000/FFFFFF?Text=Down.com" style="width: 389px;height: 73px; margin-top: 7px;">
                        </div>
                    <div class="col-md-7 col-12 text-center" style="padding:15px 0px;display: flex;  justify-content: flex-end; align-items: center;">
                         <div style="padding-right: 22px;">
                            <img src="img/logos/Egypt-Flag-1-icon.png" style="width: 40px;cursor: pointer;" data-toggle="modal" data-target="#myModal">
                            <h6>Egypt </h6>
                        </div>
                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                        
                            <!-- Modal content-->
                            <div class="modal-content" style="z-index: 999999;">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Country</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_flag-of-saudi-arabia-flag-of-the-united-states-flag-of-afghanistan_E9PM0TeK.png" width="50px" height="50px">
                                            <h6>Saudia</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_state-of-palestine-flag-of-palestine-national-flag_SARiDXuW.png" width="50px" height="50px">
                                            <h6>Palestine</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_flag-of-saudi-arabia-flag-of-the-united-states-flag-of-afghanistan_E9PM0TeK.png" width="50px" height="50px">
                                            <h6>Saudia</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_state-of-palestine-flag-of-palestine-national-flag_SARiDXuW.png" width="50px" height="50px">
                                            <h6>Palestine</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_flag-of-saudi-arabia-flag-of-the-united-states-flag-of-afghanistan_E9PM0TeK.png" width="50px" height="50px">
                                            <h6>Saudia</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_state-of-palestine-flag-of-palestine-national-flag_SARiDXuW.png" width="50px" height="50px">
                                            <h6>Palestine</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_flag-of-saudi-arabia-flag-of-the-united-states-flag-of-afghanistan_E9PM0TeK.png" width="50px" height="50px">
                                            <h6>Saudia</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_state-of-palestine-flag-of-palestine-national-flag_SARiDXuW.png" width="50px" height="50px">
                                            <h6>Palestine</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_flag-of-saudi-arabia-flag-of-the-united-states-flag-of-afghanistan_E9PM0TeK.png" width="50px" height="50px">
                                            <h6>Saudia</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_state-of-palestine-flag-of-palestine-national-flag_SARiDXuW.png" width="50px" height="50px">
                                            <h6>Palestine</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_flag-of-saudi-arabia-flag-of-the-united-states-flag-of-afghanistan_E9PM0TeK.png" width="50px" height="50px">
                                            <h6>Saudia</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_state-of-palestine-flag-of-palestine-national-flag_SARiDXuW.png" width="50px" height="50px">
                                            <h6>Palestine</h6>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        
                            </div>
                        </div>
                        <div class="pull-right">
                            <ul class="header-features">
                                <li>
                                    <div class="header-feature-caption chande">
                                      
                                        <button class="btn btn-primary secondNavButtons"> Services </button>
                                    </div>
                                </li>
                                <li>
                                    <div class="header-feature-caption chande">
                                        <button class="btn btn-primary secondNavButtons"> Shops </button>
                                    </div>
                                </li>
                                <li>
                                    <div class="header-feature-caption chande">
                                    <?php if(auth()->guard()->check()): ?>    
                                    <button class="btn btn-primary secondNavButtons" ><a class=""  href="<?php echo e(route('free.ads')); ?>" style="color: white;text-decoration: none;"> <i class="fa fa-camera" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;"></i> Post Ad Now</a> </button>
                                <?php endif; ?>
                                <?php if(auth()->guard()->guest()): ?> 
                                <button class="btn btn-primary secondNavButtons" ><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top" style="color: white;text-decoration: none;"> <i class="fa fa-camera" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;"></i> Post Ad Now</a> </button>
                                <?php endif; ?>    
                                </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 <div style="background-color: #fff;">
        <!-- Search Bar -->
        <header class="main searchBar" style="background-color: whitesmoke;color: black;">
            <div class="container-fluid">
                <div class="row  align-items-center justify-content-center align-content-center">
                    <div class="col-md-8" style='padding-right:0px;'>
                    <form action="<?php echo e(url('/Search')); ?>" method="get">
                    <?php echo csrf_field(); ?>
                         <div class="row" style="margin-top: 8px;">
                       
                             <div class="col-md-12" style="display: flex;"> 
                                <select id="inputState " name="city" class="form-control"style="width: 103px;">
                                    <option selected value="null"> All Cities</option>
                                    <?php $__currentLoopData = $allcities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($c->id); ?>"><?php echo e($c->city); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </select>
                             
                                <select id="inputState " name="category" class="form-control" style="width: 153px;">
                                    <option value='null' selected>All Categories</option>
                                    <?php $__currentLoopData = $allcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option  value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </select>
                             
                                <div class="form-group" style="display: flex;     margin-bottom: 0; width: 545px;">
                                    <input id="inputState" name="search" class="form-control" placeholder="search here" >
                                     <button type="submit" name="submit" class="btn  btn-block" style="background: #2a8fbd; color:white; width: 40px;"><i class="fa fa-search" aria-hidden="true"></i></button>
                                  </div>
                                 
                             </div>

                            

                         </div>
</form>
                    </div>
                    <div class="col-md-3" style='padding:0px;'>
                        <!-- LOGIN REGISTER LINKS -->
                        <ul class="login-register">

                            <li class="shopping-cart"><a href="<?php echo e(route('cart.show')); ?>" style="color:black !important"><i class="fa fa-shopping-cart color-fa" style='margin-right:0px'></i> Cart</a>
                                <!-- <div class="shopping-cart-box">
                                    <ul class="shopping-cart-items">
                                        <li>
                                            <a href="product-shop-sidebar.html">
                                                <img src="img/amaze_70x70.jpg" alt="Image Alternative text" title="AMaze" />
                                                <h5>New Glass Collection</h5><span class="shopping-cart-item-price">$150</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product-shop-sidebar.html">
                                                <img src="img/gamer_chick_70x70.jpg" alt="Image Alternative text" title="Gamer Chick" />
                                                <h5>Playstation Accessories</h5><span class="shopping-cart-item-price">$170</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="list-inline text-center">
                                        <li><a href="<?php echo e(route('cart.show')); ?>"><i class="fa fa-shopping-cart"></i> View Cart</a>
                                        </li>
                                        <li><a href="page-checkout.html"><i class="fa fa-check-square"></i> Checkout</a>
                                        </li>
                                    </ul>
                                </div> -->
                            </li>
                            <?php if(auth()->guard()->guest()): ?>
                            <li><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top" style="color:black !important"><i class="fa fa-sign-in color-fa"></i>Sign in</a>
                            </li>


                            <li><a class="popup-text" href="#register-dialog" data-effect="mfp-move-from-top" style="color:black !important"><i class="fa fa-edit color-fa"></i>Sign up</a>
                            </li>
                            
                            <?php endif; ?>
                            <?php if(auth()->guard()->check()): ?>                          
                            <li class="shopping-cart"><a href="<?php echo e(url('/account')); ?>" style="color:black !important ;  "><i class="fa fa-shopping-user color-fa"></i>Hello <?php echo e(Auth::user()->name); ?> </a>
                        <div class="shopping-cart-box" style="z-index:2000 !important;">
                            
                            <ul class="list-inline text-center">
                                
                                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-check-square"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                            <?php endif; ?>
                   

                            
                            
                        </ul>
                    </div>
                </div>
            </div>
        </header>


        
        <!-- Category navbar -->

        <header class="main categoryBar" style="background-color: #2a8fbd;padding-top:10px;position: relative;border:2px solid #2a8fbd;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1">
                        <h6 style="font-weight: 600;color:white"> All Categories </h6>
                    </div>
                    <div class="col-md-11">
                        <div class="owl-carousel" style="cursor: pointer;">
                          <div class="category" id='1'>
                            <h6 style="font-weight: 600;"> Category 1 </h6>
                          </div>
                          <div class="category" id='2'>
                            <h6 style="font-weight: 600;"> Category 2 </h6>
                          </div>
                          <div class="category" id='3'>
                            <h6 style="font-weight: 600;"> Category 3 </h6>
                          </div>
                          <div class="category" id='4'>
                            <h6 style="font-weight: 600;"> Category 4 </h6>
                          </div>
                          <div class="category" id='5'>
                            <h6 style="font-weight: 600;"> Category 5 </h6>
                          </div>

                          <div class="category" id='6'>
                            <h6 style="font-weight: 600;"> Category 6 </h6>
                          </div>
                          <div class="category" id='7'>
                            <h6 style="font-weight: 600;"> Category 7 </h6>
                          </div>
                          <div class="category" id='8'>
                            <h6 style="font-weight: 600;"> Category 8 </h6>
                          </div>
                          <div class="category" id='9'>
                            <h6 style="font-weight: 600;"> Category 9 </h6>
                          </div>
                          <div class="category" id='10'>
                            <h6 style="font-weight: 600;"> Category 10 </h6>
                          </div>
                    </div>
                    
                     </div>
                </div>

               <!-- one Row For Every Category -->
                <div class="row category-dropMenu" id='m1'>
                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>
                </div>

                <!-- one Row For Every Category -->
                <div class="row category-dropMenu" id='m2'>
                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>
                </div>

                <!-- one Row For Every Category -->
                <div class="row category-dropMenu" id='m3'>
                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>
                </div>

                <!-- one Row For Every Category -->
                <div class="row category-dropMenu" id='m4'>
                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>
                </div>
               
                
            </div>
        </header>
</div>

        <!-- LOGIN REGISTER LINKS CONTENT -->
        <div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
            <i class="fa fa-sign-in dialog-icon"></i>
            <h3>Member Login</h3>
            <h5>Welcome back, friend. Login to get started</h5>
            <form class="dialog-form"  method="post"
                                action="<?php echo e(route('login')); ?>"
                                @submit="handleSubmit">
                                <?php echo csrf_field(); ?>

                                <?php if ($errors->has('email')){
                                        echo "error   " .  $errors->first('email');
                                     }?>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" placeholder="email@domain.com" name="email" class="form-control">
                </div>
         

                <?php if ($errors->has('password')){
                                        echo "error " .  $errors->first('password');
                                     }?>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" placeholder="My secret password" name="password" class="form-control">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Remember me
                    </label>
                </div>
                <input type="submit" value="Sign in" name="submit" class="btn btn-primary">
            </form>
            <ul class="dialog-alt-links">
                <li><a class="popup-text" href="#register-dialog" data-effect="mfp-zoom-out">Not member yet</a>
                </li>
                <!-- <li><a class="popup-text" href="#password-recover-dialog" data-effect="mfp-zoom-out">Forgot password</a>
                </li> -->
            </ul>
        </div>

        <!-- POST Ad Now  -->
        <div id="POST-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
            <i class="fa fa-sign-in dialog-icon"></i>
            <h3>Post Ad Now</h3>
            <form class="dialog-form" style="text-align: center;">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" placeholder="ex- Mahmoud Ahmed" class="form-control">
                </div>
                <div class="form-group">
                    <label>Descreption</label>
                    <input type="text" placeholder="Type Your Descreption" class="form-control">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="number" placeholder="Type Price" class="form-control">
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" placeholder="Type Your Phone Number" class="form-control">
                </div>
                <div class="form-group">
                    <label>Pick Pictures</label>
                    <input type="file"  multiple class="form-control">
                </div>
                
                <input type="submit" value="Post Now" class="btn btn-primary">
            </form>
            
        </div>


        <div id="register-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
            <i class="fa fa-edit dialog-icon"></i>
            <h3>Member Register</h3>
            <h5>Ready to get best offers? Let's get started!</h5>
            <form class="dialog-form"  method="post"
                            action="<?php echo e(route('register')); ?>"
                            @submit="handleSubmit">
            <?php echo csrf_field(); ?> 
                            <!-- name -->
            
                            <?php if ($errors->has('name')){
                                        echo "error in name" .  $errors->first('name');
                                     }?>

                            <div class="form-group">
                            <label>Name</label>
                    <input type="text" placeholder="Name"   name="name" class="form-control">
                </div>
                           
                              
                        <!-- email -->
                          
                        <?php if ($errors->has('email')){
                                        echo "error in email" .  $errors->first('email');
                                     }?>
                             
                  <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" placeholder="email@example.com" name="email" class="form-control">
                </div>

                <!-- password -->
                <?php if ($errors->has('password')){
                                        echo "error in password" .  $errors->first('password');
                                     }?>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" placeholder="My secret password" name="password" class="form-control">
                </div>

                <!-- confirm password -->
                <?php if ($errors->has('password_confirmation')){
                                        echo "error " .  $errors->first('password_confirmation');
                                     }?>
                <div class="form-group">
                    <label>Repeat Password</label>
                    <input type="password" placeholder="Type your password again" name="password_confirmation" class="form-control">
                </div>
                <!-- <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Your Area</label>
                            <input type="password" placeholder="Boston" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Postal/Zip</label>
                            <input type="password" placeholder="12345" class="form-control">
                        </div>
                    </div>
                </div> -->
                <!-- <div class="checkbox">
                    <label>
                        <input type="checkbox">Get hot offers via e-mail
                    </label>
                </div> -->
                <input type="submit" value="Sign up" name="submit" class="btn btn-primary">
            </form>
            <ul class="dialog-alt-links">
                <li><a class="popup-text" href="#login-dialog" data-effect="mfp-zoom-out">Already member</a>
                </li>
            </ul>
        </div>


        <div id="password-recover-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
            <i class="icon-retweet dialog-icon"></i>
            <h3>Password Recovery</h3>
            <h5>Fortgot your password? Don't worry we can deal with it</h5>
            <form class="dialog-form">
                <label>E-mail</label>
                <input type="text" placeholder="email@domain.com" class="span12">
                <input type="submit" value="Request new password" class="btn btn-primary">
            </form>
        </div>
        <!-- END LOGIN REGISTER LINKS CONTENT -->
<?php echo $__env->yieldContent('content'); ?>



       <!-- //////////////////////////////////
	//////////////MAIN FOOTER////////////// 
	////////////////////////////////////-->

    <footer class="main" id="main-footer">
            <div class="footer-top-area">
                <div class="container">
                    <div class="row row-wrap" style="display: flex;align-items: center;">
                        <div class="col-md-3">
                            <a href="index-2.html">
                                <img src="img/logos/logo (1).png" alt="logo" title="logo" class="logo" style="width: 215px;">
                            </a>
                            <ul class="list list-social">
                                <li>
                                    <a class="fa fa-facebook box-icon" href="#" data-toggle="tooltip" title="Facebook"></a>
                                </li>
                                <li>
                                    <a class="fa fa-twitter box-icon" href="#" data-toggle="tooltip" title="Twitter"></a>
                                </li>
                                <li>
                                    <a class="fa fa-flickr box-icon" href="#" data-toggle="tooltip" title="Flickr"></a>
                                </li>
                                <li>
                                    <a class="fa fa-linkedin box-icon" href="#" data-toggle="tooltip" title="LinkedIn"></a>
                                </li>
                                <li>
                                    <a class="fa fa-tumblr box-icon" href="#" data-toggle="tooltip" title="Tumblr"></a>
                                </li>
                            </ul>
                            <p>Enim proin pharetra interdum praesent mus eros sit ipsum potenti enim faucibus nascetur ante nostra ligula tempus turpis senectus hac</p>
                        </div>
                        <div class="col-md-3" style="text-align: center;color: white;">

                            <h3 style="background-color:#2a8fbd;border-radius: 20px; width: 75%;margin: 5px auto;"> Contact Us </h3>
                            <br>
                            <h5>Got Questetions ? Call Us 24/7 !</h5>
                            <br>
                            <h3> <i class="fa fa-phone" aria-hidden="true"></i> 800-8001-8588 </h3>
                            <br>
                            <h3> <i class="fa fa-map-marker" aria-hidden="true"></i> 800-8001-8588 </h3>
                            
                        </div>
                        <div class="col-md-3">
                                <img src='https://via.placeholder.com/150/0000FF/808080 ?Text=GoogleAds'>
                        </div>
                        <div class="col-md-3">
                            <h4>Sign Up to the Newsletter</h4>
                            <div class="box">
                                <form>
                                    <div class="form-group mb10">
                                        <label>E-mail</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <p class="mb10">Eget scelerisque adipiscing varius mollis dis sed</p>
                                    <input type="submit" class="btn btn-primary" value="Sign Up" />
                                </form>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            <div class="footer-copyright" style="position: relative;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" style="text-align: center;">
                            <p>Copyright © 2020 <span style="color: #025D8C;" > Royal Souq </span> All Rights Reserved</p> 
                        </div>
                    </div>
                    
                </div>
                <!-- Button to move Up -->
                <span  class="up" style="border-radius:50%;position: absolute;bottom: 0;right: 0;padding: 10px;margin: 10px;background-color: #025D8C;">
                    <i class="fa fa-arrow-up fa-2x" style="color: white;"></i>
                </span>
            </div>
        </footer>
        
        <!-- //////////////////////////////////
	//////////////END MAIN  FOOTER///////// 
	////////////////////////////////////-->



        <!-- Scripts queries -->
        <script src=" <?php echo e(asset('js/jquery.js')); ?>"></script>
        <script src="<?php echo e(asset('js/boostrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/countdown.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/flexnav.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/magnific.js')); ?>"></script>
        <script src="<?php echo e(asset('js/tweet.min.js')); ?>"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
        <script src="<?php echo e(asset('js/fitvids.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/mail.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/ionrangeslider.js')); ?>"></script>
        <script src="<?php echo e(asset('js/icheck.js')); ?>"></script>
        <script src="<?php echo e(asset('js/fotorama.js')); ?>"></script>
        <script src="<?php echo e(asset('js/card-payment.js')); ?>"></script>
        <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/owl-carousel.js')); ?>"></script>
        <script src="<?php echo e(asset('js/masonry.js')); ?>"></script>
        <script src="<?php echo e(asset('js/nicescroll.js')); ?>"></script>

        <!-- Custom scripts -->
        <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
        <script src="<?php echo e(asset('js/switcher.js')); ?>"></script>

        <!--  -->
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js/review.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
        <!--  -->
    </div>
     <?php echo $__env->yieldContent('scripts'); ?>

  
</body>


</html>
<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\royal_git\resources\views/layouts/app.blade.php ENDPATH**/ ?>