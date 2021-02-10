<!DOCTYPE html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>

   <?php echo $__env->make('layouts.inc-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>











<div class="global-wrap">



 



<!-- Top navbar -->

       



        <!-- Top navbar -->

       



        <header class="main" >
                        <div class="container-fluid">
                            <div class="row" style="border-top: solid 2px #efc718;align-items: center;justify-content: center;display: flex;">
                            
                                <div class="col-md-12 col-sm-12">
                                    <!-- MAIN NAVIGATION -->
                                    <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                                    <nav>
                                        <ul class="nav nav-pills flexnav pull-right"  id="flexnav" data-breakpoint="800" style="padding: 5px 16px;">

                                            <li><a href="shops.html" class="navBar-item">Crean An Account</a> </li>

                                            <li><a href="shops.html" class="navBar-item">Customer Service</a> </li>

                                            <li><a href="page-my-account-settings.html" class="navBar-item">Sell With Us</a> </li>

                                            <li><a href="page-my-account-settings.html" class="navBar-item">Terms of Use</a> </li>
                                            
                                            <li><a href="page-my-account-settings.html" class="navBar-item" style="
                position: inherit;
                top: -7px;border-right: 0;
            "><img src="<?php echo e(asset('img/logos/Egypt-Flag-1-icon.png')); ?>" style="width: 17px;cursor: pointer;" data-toggle="modal" data-target="#myModal"> اللغة العربية</a> </li>
                                            
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
            <div class="container-fluid">
                <div class="row flex-wrap">
                    <div class="col-md-3 col-12 text-center" style="display: flex;  justify-content: space-between; align-items: center;">
                     <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="
   
                                            font-size: 34px;
                                            position: absolute;
                                            top: -19px;
                                            background: none;
                                            border: none;
                                            color: #2a8fbd;

                                        ">
                    	<span id="search_concept"> <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <ul class="dropdown-menu" role="menu" >
                      <li><a href="<?php echo e(route('free.ads.all')); ?>">Free Ads</a></li>
                      <li><a href="#its_equal">Servies</a></li>
                      <li><a href="#greather_than">shop</a></li>
                    </ul>
                </div>
                  
                          
                              
        
         <div>
             <a href="/" class="logo" style=" display: inline;">
                                <img src="<?php echo e(asset('img/logos/Royal Sooq.png')); ?>" alt="Image Alternative text" title="Image Title" style="width:179px;margin-top:5px;" />
                            </a>
                     <h6 style="text-align: right; padding-right: 7%;"><a href="/" style="color: black !important; font-weight: 600;" href="#">Home</a></h6>
        </div>
    
                           
                           
                                        <div style="    display: initial;position: relative; right: 27px; top: 17px;">
                            <img src="<?php echo e(asset('img/logos/Egypt-Flag-1-icon.png')); ?>" style="width: 40px;cursor: pointer;" data-toggle="modal" data-target="#myModal">
                            <h6 style="font-weight: bold;"><?php echo e($page_title ?? 'Egypt'); ?></h6>
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
                         
                       
                        <!--<div>-->
                        <!--    <h4 class="text-primary dropdown-toggle"  data-toggle="dropdown" style="margin-top: 15px;cursor: pointer;font-weight: 600;"> English </h4>-->
                        <!--    <ul class="dropdown-menu dropdown-menu-right" style="z-index: 999999999;">-->
                        <!--        <li><a href="#">اللغة العربية</a></li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                    </div>
                    <div class="col-md-5"style="
    padding: 2% 0px 0px 0px;
">           
                       
                    <div class="col-md-12" style='padding-right:0px;'>
                    <form action="<?php echo e(url('/Search')); ?>" method="get">
                    <?php echo csrf_field(); ?>
                         <div class="row" style="margin-top: 8px;">
                       
                             <div class="col-md-12" style="display: flex; padding: 0;"> 
                       <!--         <select id="inputState " name="city" class="form-control"style="width: 103px;">-->
                       <!--             <option selected value="null"> All Cities</option>-->
                       <!--             <?php $__currentLoopData = $allcities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
                       <!--         <option value="<?php echo e($c->id); ?>"><?php echo e($c->city); ?></option>-->
                       <!--       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
                       <!--          </select>-->
                             
                       <!--         <select id="inputState " name="category" class="form-control" style="width: 153px;">-->
                       <!--             <option value='null' selected>All Categories</option>-->
                       <!--             <?php $__currentLoopData = $allcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
                       <!--         <option  value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>-->
                       <!--        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
                       <!--</select>-->
                             
                             <div class="input-group"style="
    width: 100%;
    padding: 1%;
    background: #2a8fbd;
    border-radius: 31px;
">
                <div class="input-group-btn search-panel">
                   
                
                <select  name="category" class="btn btn-default dropdown-toggle" style="
    background: #2a8fbd;
    border: none;
    color: white; 
    margin-right: -17px;" >
                                   <option value='null' selected>All Categories</option>
                                   <?php $__currentLoopData = $allcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <option  value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </select>
                
                
                
                
                <!-- <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="
    background: #2a8fbd;
    border: none;
    color: white;
">
                    	<span id="search_concept"> All Categories</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#contains">Contains</a></li>
                      <li><a href="#its_equal">It's equal</a></li>
                      <li><a href="#greather_than">Greather than ></a></li>
                      <li><a href="#less_than">Less than < </a></li>
                      <li class="divider"></li>
                      <li><a href="#all">Anything</a></li>
                    </ul> -->
                </div>
                <!-- <input type="hidden" name="name" value="all" id="search_param">          -->
                <input type="text" class="form-control" name="name" placeholder="Search term..." required>
                <span class="input-group-btn">
                    <button class="btn btn-default" name="submit" type="submit"style="
    background: #2a8fbd;
    border: none;
    color: white;
    font-size: 18px;
" ><span class="fa fa-search"></span></button>
                </span>
            </div>
            <style>
                $(document).ready(function(e){
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = $(this).attr("href").replace("#","");
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		$('.input-group #search_param').val(param);
	});
});
                
            </style>
<style>
    .searchBox {
 background: #2a8fbd;
    height: 40px;
    border-radius: 40px;
    padding: 10px;

}

.searchBox > .searchInput {
    width: 240px;
    padding: 0 6px;
}

.searchBox:hover > .searchButton {
  background: white;
  color : #2f3640;
}

.searchButton {
    color: white;
    float: right;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #2f3640;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.4s;
}

.searchInput {
    border:none;
    background: none;
    outline:none;
    float:left;
    padding: 0;
    color: white;
    font-size: 16px;
    transition: 0.4s;
    line-height: 40px;
    width: 0px;

}

@media  screen and (max-width: 620px) {
.searchBox:hover > .searchInput {
    width: 150px;
    padding: 0 6px;
}
}
    
</style>
                                   
                                       
                                 
                             </div>

                            

                         </div>
              
                         <div style="
    display: flex;     padding-top: 5px;
    
">
                            
                             
                         <input type="checkbox" id="All" name="type" value="service">
                          <label style="font-weight: 700;" for="male"> All  <span style="padding-left: 10px">|</span></label><br>
                          <input type="checkbox" id="service" name="type" value="service">
  <label style="font-weight: 700;" for="male"> Services  <span style="padding-left: 10px">|</span></label><br>
  <input  type="checkbox" id="female" name="type" value="free">
  <label style="font-weight: 700;" for="female">Free product  <span style="padding-left: 10px">|</span> </label><br>
  <input type="checkbox" id="other" name="type" value="sponsored">
  <label style="font-weight: 700;" for="other">sponsore product  </label>
</form>
</div>
                    </div>
                       
                        </div>
                    <div class="col-md-4 col-12 text-center" style="    padding: 16px 4px;display: flex;justify-content: flex-end;align-items: center; position: sticky;
    top: 43px;">
                   
                        <div class="pull-right" style="
    width: 95%;
">
                            <ul class="header-features">
                                      <li>
                                    <div class="header-feature-caption chande">
                                    <?php if(auth()->guard()->check()): ?>    
                                    <button class="btn btn-primary secondNavButtons" ><a class=""  href="<?php echo e(route('free.ads')); ?>" style="color: white;text-decoration: none;"> <i class="fa fa-plus-circle" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> Add Your Ad</a> </button>
                                <?php endif; ?>
                                <?php if(auth()->guard()->guest()): ?> 
                                <button class="btn btn-primary secondNavButtons" ><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top" style="text-decoration: none;color:black"> <i class="fa fa-plus-circle" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> Add Your Ad</a> </button>
                                <?php endif; ?>    
                                </div>
                                </li>
                        <ul class="login-register">
                            <li class="shopping-cart"><a class="soo" href="<?php echo e(route('cart.show')); ?>" style="color:black !important"><img  src="<?php echo e(asset('img/logos/Shopping Cart .png')); ?>" style="width:40px;"> </a>
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
                            <li style="
    display: inline-flex;
"><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top" style="color: white!important;background: #2a8fbd;border-radius: 0;/* display: inline-block; */ border-bottom-left-radius: 7px;
    border-top-left-radius: 7px;">Login</a>
                            <a class="popup-text" href="#register-dialog" data-effect="mfp-move-from-top" style="color: white!important;background: darkgrey;border-radius: 0;/* display: inline-block; */    border-bottom-right-radius: 7px;
    border-top-right-radius: 7px;">Sign up</a>
                            </li>


                         
                            
                            <?php endif; ?>
                            <?php if(auth()->guard()->check()): ?>    
                            <?php if((Auth::user()->seller)=='1'): ?>
                            <li class="shopping-cart"><a href="<?php echo e(route('charts')); ?>" style="color:black !important ; text-transform: capitalize;  "><i class="fa fa-shopping-user color-fa"></i>Hello <?php echo e(Auth::user()->name); ?> </a>
                            <?php else: ?>
                            <li class="shopping-cart"><a href="<?php echo e(url('/account')); ?>" style="color:black !important ; text-transform: capitalize;  "><i class="fa fa-shopping-user color-fa"></i>Hello <?php echo e(Auth::user()->name); ?> </a>
                            <?php endif; ?>
                      
                           
                        <div class="shopping-cart-box" style="z-index:2000 !important;">
                            
                            <ul class="list-inline text-center">
                            <li><a href="<?php echo e(url('/account')); ?>"> Profile</a>
                                </li>
                                <li><a href="<?php echo e(url('/logout')); ?>"> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                            <?php endif; ?>
                   

                            
                            
                        </ul>
                               
                        
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <div style="background-color: #fff;">

        <!-- Search Bar -->

       




        

        <!-- Category navbar -->


        <header class="main categoryBar" style="background-color: #2a8fbd;position: relative;border:2px solid #2a8fbd;">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-2 all-cats" style="font-weight: 600;color:white;font-size: 13px;padding-top: 11px;background: #efc718;">
                                        <h6 style="font-weight: 600;color:white"  ><a href="<?php echo e(route('allCategories')); ?>"> All Categories <i class="fa fa-bars" aria-hidden="true"></i></a> </h6>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="owl-carousel" style="cursor: pointer;">
                                        <?php 
                                        $count=0;
                                        ?>
                                        <?php $__currentLoopData = $allcat->slice(0, 5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                            <div class="category" id='<?php echo e($c->id); ?>'>
                                                <h6 style="font-weight: 500;text-align: center;"> <a href="<?php echo e(route('category.sub', $c->id)); ?>"> <?php echo e($c->name); ?> </a>  </h6>
                                            </div>
                                    
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <div class="category" id='8'>
                                            <h6 style="font-weight: 500;"> <a href="<?php echo e(route('allCategories')); ?>"> >> </a> </h6>
                                        </div>
                                        
                                    </div>
                                    
                                    </div>
                                </div>

                            <!-- one Row For Every Category -->
                            <?php $__currentLoopData = $allcat->slice(0,4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row category-dropMenu" id='m<?php echo e($c->id); ?>' style="border-top: 2px solid rgb(75, 81, 84) !important;">
                                <?php $__currentLoopData = $c->subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-3">
                                        <h4 style="color: white;"><a href="<?php echo e(route('sub.products',$sub->id)); ?>"> <?php echo e($sub->name); ?><a></h4>
                                        <!-- <ul class="subPoints">
                                            <li> Number 1</li>
                                            <li> Number 2</li>
                                            <li> Number 3</li>
                                        </ul> -->
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            

                                

                            
                            
                                
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





  <!-- //////////////////////////////////

	//////////////MAIN FOOTER////////////// 

	////////////////////////////////////-->



    <footer class="main" id="main-footer">

            <div class="footer-top-area">

                <div class="container">

                    <div class="row row-wrap" style="display: flex;align-items: center;">

                        <div class="col-md-3">

                            <a href="index-2.html">

                                <img src="img/logos/Royal Sooq.png" alt="logo" title="logo" class="logo" style="width: 100%;">

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



                            <h3 style="background-color:#efc718;border-radius: 20px; width: 75%;margin: 5px auto;"> Contact Us </h3>

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

                            <p>Copyright © 2020 <span style="color: #025D8C;" > Royal Sooq </span> All Rights Reserved</p> 

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

<?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\resources\views/layouts/user.blade.php ENDPATH**/ ?>