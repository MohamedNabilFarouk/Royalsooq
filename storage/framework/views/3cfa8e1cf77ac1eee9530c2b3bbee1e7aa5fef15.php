<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

<!-- app.blade -->

  <!-- Bootstrap styles -->
  <link rel="stylesheet" href="<?php echo e(asset('css/boostrap.css')); ?>">

<!-- Font Awesome styles (icons) -->
<link rel="stylesheet" href="<?php echo e(asset('css/font_awesome.css')); ?>">
<!-- Main Template styles -->
<link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
<!-- IE 8 Fallback -->
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/ie.css')); ?>" />
<![endif]-->

<!-- Your custom styles (blank file) -->
<link rel="stylesheet" href="<?php echo e(asset('css/mystyles.css')); ?>">

<link rel="stylesheet" href="<?php echo e(asset('css/switcher.css')); ?>">
<!-- end app.blade -->

</head>
<body>

<div class="global-wrap">




        <!-- //////////////////////////////////
	//////////////MAIN HEADER/////////////
	////////////////////////////////////-->
    <div class="top-main-area">
        <div class="container">
            <div class="row flex-wrap">
                <div class="col-md-4 col-12 text-center" style="display: flex;  justify-content: space-between; align-items: center;">
                    <div>
                        <a href="index-2.html" class="logo">
                            <img src="<?php echo e(asset('img/logos/logo (1).png')); ?>" alt="Image Alternative text" title="Image Title" style="width:100px" />
                        </a>
                    </div>
                    <div>
                        <img src="<?php echo e(asset('img/logos/Egypt-Flag-1-icon.png')); ?>" style="width: 40px;cursor: pointer;" data-toggle="modal" data-target="#myModal">
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
                    <div>
                        <h4 class="text-primary dropdown-toggle"  data-toggle="dropdown" style="margin-top: 15px;cursor: pointer;font-weight: 600;"> English </h4>
                        <ul class="dropdown-menu dropdown-menu-right" style="z-index: 999999999;">
                            <li><a href="#">اللغة العربية</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 col-12 text-center" style="padding:15px 0px;display: flex;  justify-content: flex-end; align-items: center;">
                    <div class="pull-right">
                        <ul class="header-features">
                            <li>
                                <div class="header-feature-caption">
                                    <button class="btn btn-warning-e" style="padding: 5px 10px !important;"> Services </button>
                                </div>
                            </li>
                            <li>
                                <div class="header-feature-caption">
                                    <button class="btn btn-warning-e" style="padding: 5px 10px !important;"> Shops </button>
                                </div>
                            </li>
                            <li>
                                <div class="header-feature-caption">
                                    <button class="btn btn-warning-e" style="padding: 5px 10px !important;" ><a class="popup-text" href="#POST-dialog" data-effect="mfp-move-from-top" style="color: white;text-decoration: none;">Post Ad Now</a> </button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- filter -->

<div class="container-fluid bg-light " style="margin: 30px 0 30px 0;">
	<div class="row align-items-center justify-content-center">
     
    
    
    
    <form action="<?php echo e(url('/Search')); ?>" method="get">
       <?php echo csrf_field(); ?>
    <div class="col-md-1 pt-3">
                           <div class="form-group ">
                              <select id="inputState " name="city" class="form-control">
                                <option selected value="null">All Cities</option>
                                <?php $__currentLoopData = $allcities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($c->id); ?>"><?php echo e($c->city); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-2 pt-3">
                           <div class="form-group ">
                              <select id="inputState " name="category" class="form-control">
                                <option value='null' selected>All Categories</option>
                               <?php $__currentLoopData = $allcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option  value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                           </div>
                        </div>
                	
                      
                        <div class="col-md-3 pt-6">
                            <div class="form-group">
                              <input id="inputState" name="search" class="form-control" placeholder="search here" >
                               
                            </div>
                        </div>
                        <div class="col-md-2">
            	           <button type="submit" name="submit" class="btn  btn-block" style="background: #2a8fbd; color:white">Search</button>
            	        </div>
                      
                      <!-- login and register and cart -->
                        <div class="col-md-4">
                        <!-- LOGIN REGISTER LINKS -->
                        <ul class="login-register">
                            <li class="shopping-cart"><a href="<?php echo e(route('cart.show')); ?>"><i class="fa fa-shopping-cart"></i>My Cart</a>
                                <div class="shopping-cart-box">
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
                                        <li><a href="page-cart.html"><i class="fa fa-shopping-cart"></i> View Cart</a>
                                        </li>
                                        <li><a href="page-checkout.html"><i class="fa fa-check-square"></i> Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <?php if(auth()->guard()->guest()): ?>
                            <li><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top"><i class="fa fa-sign-in"></i>Sign in</a>
                            </li>
                            <li><a class="popup-text" href="#register-dialog" data-effect="mfp-move-from-top"><i class="fa fa-edit"></i>Sign up</a>
                            <!-- <li><a class="" href="<?php echo e(url('/register')); ?>" ><i class="fa fa-edit"></i>Sign up</a> -->
                            </li>
                            <?php endif; ?>
                            <?php if(auth()->guard()->check()): ?>                          
                            <li class="dropdown-submenu">
                                           <a tabindex="-1" href="<?php echo e(url('/account')); ?>" class="dropdown-submenu-toggle">Hello <?php echo e(Auth::user()->name); ?> <b class="caret"></b></a>
                                           <ul class="dropdown-menu">
                                               <li><a href="category.html">logout </a></li>
                                               <li><a href="<?php echo e(url('/account')); ?>">Profile </a></li>
                                    </ul> 
                                    </li>
                            <?php endif; ?>
                        </ul>
                    </div>
<!-- endlogin and cart -->
                    </div>
                
                </div>
</form>







<!--end filter -->
        <header class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <!-- MAIN NAVIGATION -->
                        <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                        <nav>
                            <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">

                                <li class="active"><a href="index.html">Home</a> </li>
                                 <li class=""><a href="index.html">All Categories </a> </li>
           <?php $__currentLoopData = $allcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class=""><a href="index.html"><?php echo e($c->name); ?></a> </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                <!--<li class="dropdown">-->
                                <!--    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category<span class="caret"></span></a>-->
                                <!--    <ul class="dropdown-menu">-->

                                        <!-- <li class="dropdown-submenu">-->
                                <!--             <a tabindex="-1" href="#" class="dropdown-submenu-toggle">Category 1 <b class="caret"></b></a>-->
                                <!--             <ul class="dropdown-menu">-->
                                <!--                 <li><a href="category.html">Sub-Category 1 </a></li>-->
                                <!--                 <li><a href="category.html">Sub-Category 1 </a></li>-->
                                <!--                 <li><a href="category.html">Sub-Category 1 </a></li>-->
                                <!--             </ul>-->
                                <!--         </li> -->

                                <!--         <li class="dropdown-submenu">-->
                                <!--            <a tabindex="-1" href="#" class="dropdown-submenu-toggle">Category 2 <b class="caret"></b></a>-->
                                <!--            <ul class="dropdown-menu">-->
                                <!--                <li><a href="category.html">Sub-Category 2 </a></li>-->
                                <!--                <li><a href="category.html">Sub-Category 2 </a></li>-->
                                <!--                <li><a href="category.html">Sub-Category 2 </a></li>-->
                                <!--            </ul>-->
                                <!--        </li>-->

                                <!--        <li class="dropdown-submenu">-->
                                <!--            <a tabindex="-1" href="#" class="dropdown-submenu-toggle">Category 3 <b class="caret"></b></a>-->
                                <!--            <ul class="dropdown-menu">-->
                                <!--                <li><a href="category.html">Sub-Category 3 </a></li>-->
                                <!--                <li><a href="category.html">Sub-Category 3 </a></li>-->
                                <!--                <li><a href="category.html">Sub-Category 3 </a></li>-->
                                <!--            </ul>-->
                                <!--        </li>-->




                                <!--     </ul>-->
                                <!-- </li>-->

                                <!--<li><a href="shops.html">Shops</a> </li>-->

                                <li><a href="page-my-account-settings.html">My Account</a> </li>

                            </ul>
                        </nav>
                        <!-- END MAIN NAVIGATION -->
                    </div>
               
                    <!-- this place old cart and login  -->
               
                </div>
            </div>
        </header>

        <!-- LOGIN REGISTER LINKS CONTENT -->
        <div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
            <i class="fa fa-sign-in dialog-icon"></i>
            <h3>Member Login</h3>
            <h5>Welcome back, friend. Login to get started</h5>
            <form class="dialog-form"  method="post"
                                action="<?php echo e(route('login')); ?>"
                                @submit="handleSubmit">
                                <?php echo csrf_field(); ?>

                                <?php if($errors->has('email')): ?>
                                        validate-status="error"
                                        help="<?php echo e($errors->first('email')); ?>"
                                    <?php endif; ?>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" placeholder="email@domain.com" name="email" class="form-control">
                </div>
         

                                    <?php if($errors->has('password')): ?>
                                        validate-status="error"
                                        help="<?php echo e($errors->first('password')); ?>"
                                    <?php endif; ?>
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
                <li><a class="popup-text" href="#password-recover-dialog" data-effect="mfp-zoom-out">Forgot password</a>
                </li>
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
            
                            <?php if($errors->has('name')): ?>
                                    validate-status="error"
                                    help="<?php echo e($errors->first('name')); ?>"
                                <?php endif; ?>

                            <div class="form-group">
                            <label>Name</label>
                    <input type="text" placeholder="Name"   name="name" class="form-control">
                </div>
                           
                              
                        <!-- email -->
                          
                        <?php if($errors->has('email')): ?>
                                    validate-status="error"
                                    help="<?php echo e($errors->first('email')); ?>"
                                <?php endif; ?>
                             
                  <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" placeholder="email@domain.com" name="email" class="form-control">
                </div>

                <!-- password -->
                <?php if($errors->has('password')): ?>
                                    validate-status="error"
                                    help="<?php echo e($errors->first('password')); ?>"
                                <?php endif; ?>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" placeholder="My secret password" name="password" class="form-control">
                </div>

                <!-- confirm password -->
                <?php if($errors->has('password_confirmation')): ?>
                                    validate-status="error"
                                    help="<?php echo e($errors->first('password_confirmation')); ?>"
                                <?php endif; ?>
                <div class="form-group">
                    <label>Repeat Password</label>
                    <input type="password" placeholder="Type your password again" name="password_confirmation" class="form-control">
                </div>
                <div class="row">
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
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Get hot offers via e-mail
                    </label>
                </div>
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





<!-- start user.blade -->

    <div id="app">
        <avored-layout inline-template>
            <div>
                <a-layout id="components-layout-demo-top" class="layout">
                    <!-- <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->

                    <a-layout-content style="padding: 0 50px">
                        <?php echo $__env->make('partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <a-layout style="padding: 24px 0">
                           <?php if(auth()->guard()->check()): ?>
                            <a-layout-sider width="200">
                            <?php echo $__env->make('partials.account-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </a-layout-sider>
                            <?php endif; ?>
                            <a-layout-content :style="{ padding: '0 24px', minHeight: '280px' }">
                            <?php echo $__env->yieldContent('content'); ?>
                            </a-layout-content>
                        </a-layout>
                        </a-layout-content>
                    
                    <!-- <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
                </a-layout>
            </div>
        </avored-layout>
    </div>
    <!-- end user.blade -->


<!-- footer app.blade -->
  <!-- //////////////////////////////////
	//////////////MAIN FOOTER//////////////
	////////////////////////////////////-->

    <footer class="main" id="main-footer">
            <div class="footer-top-area">
                <div class="container">
                    <div class="row row-wrap" style="display: flex;align-items: center;">
                        <div class="col-md-4">
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
                        <div class="col-md-4">
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

                        <div class="col-md-4">
                            <h4>Recent News</h4>
                            <ul class="thumb-list">
                                <li>
                                    <a href="#">
                                        <img src="img/urbex_esch_lux_with_laney_and_laaaaag_70x70.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                        <h5 class="thumb-list-item-title"><a href="#">Tortor leo</a></h5>
                                        <p class="thumb-list-item-desciption">Risus est tellus odio dignissim</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/amaze_70x70.jpg" alt="Image Alternative text" title="AMaze" />
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                        <h5 class="thumb-list-item-title"><a href="#">Mollis nulla</a></h5>
                                        <p class="thumb-list-item-desciption">Ultrices non leo vivamus eros</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/the_hidden_power_of_the_heart_70x70.jpg" alt="Image Alternative text" title="The Hidden Power of the Heart" />
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                        <h5 class="thumb-list-item-title"><a href="#">Nunc praesent</a></h5>
                                        <p class="thumb-list-item-desciption">Fames cras gravida nam lacinia</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright" style="position: relative;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" style="text-align: center;">
                            <p>Copyright © 2020 <span style="color: #025D8C;" > VOLCANO AGENCY </span> All Rights Reserved</p>
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
        <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
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
        <script src="<?php echo e(asset('js/owl-carousel.js')); ?>"></script>
        <script src="<?php echo e(asset('js/masonry.js')); ?>"></script>
        <script src="<?php echo e(asset('js/nicescroll.js')); ?>"></script>

        <!-- Custom scripts -->
        <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
        <script src="<?php echo e(asset('js/switcher.js')); ?>"></script>
    </div>
    <?php echo $__env->yieldContent('scripts'); ?>


</body>
</html>
<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\resources\views/layouts/user00.blade.php ENDPATH**/ ?>