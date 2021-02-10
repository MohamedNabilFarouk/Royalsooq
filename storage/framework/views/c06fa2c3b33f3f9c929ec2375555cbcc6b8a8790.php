<?php $__env->startSection('header'); ?>




<!-- Sidebar left -->
<nav id="sidebarleft" class="sidenav">
    <div class="sidebar-header">
        <div class="profile">
            <div class="left">
                <div class="user-image"> <img src="<?php if(auth()->guard()->check()): ?><?php echo e(asset('/storage/' . Auth::user()->image)); ?><?php endif; ?>  <?php if(auth()->guard()->guest()): ?> <?php echo e(asset('img/user_avatar.jpg')); ?> <?php endif; ?>" width="40" alt="profile"></div>
            </div>
            <div class="right p-l-10 line-h1">
                <div class="name">RoyalSooq</div>
                <a href="<?php echo e(url('account')); ?>" class="acc"><?php if(auth()->guard()->guest()): ?><?php echo e(__('index.account')); ?><?php endif; ?> <?php if(auth()->guard()->check()): ?> <?php echo e(Auth::user()->name); ?> <?php endif; ?></a>
            </div>
            <button id="dismiss" class="ml-auto btn" type="button">
                <i class="material-icons">keyboard_arrow_right</i>
            </button>
        </div>
    </div>

    <ul class="list-unstyled components">
        <li class="list-group-item col-text">
            <a href="<?php echo e(route('allCategories')); ?>"><i class="material-icons">widgets</i><?php echo e(__('index.category')); ?></a>
        </li>

        <li class="list-group-item col-text">
            <a href="<?php echo e(route('user.freeAds')); ?>" class=" d-flex align-items-center">
                <i class="material-icons-outlined">library_add</i>
                <span class="m-l-10"><?php echo e(__('index.my_ads')); ?></span> &nbsp;
                <i class="material-icons ml-auto">keyboard_arrow_right</i>
            </a>
        </li>
        <li class="list-group-item col-text">
            <a href="<?php echo e(route('favorites')); ?>" class=" d-flex align-items-center">
                <i class="material-icons">favorite_border</i>
                <span class="m-l-10"><?php echo e(__('index.favorite_ads')); ?>&nbsp;</span> <span class="badge badge-pill">
                <i class="material-icons ml-auto">keyboard_arrow_right</i>
            </a>
        </li>
        <li class="list-group-item col-text">
            <a href="<?php echo e(route('shops.data')); ?>" class=" d-flex align-items-center">
                <i class="material-icons-outlined">shop</i>
                <span class="m-l-10"><?php echo e(__('index.shop_info')); ?></span>
                <i class="material-icons ml-auto">keyboard_arrow_right</i>
            </a>
        </li>
        <li class="list-group-item col-text">
            <a href="<?php if(auth()->guard()->check()): ?><?php echo e(route('shops2',  auth()->user()->slug )); ?><?php endif; ?> <?php if(auth()->guard()->guest()): ?> <?php echo e(url('login')); ?>  <?php endif; ?>" class=" d-flex align-items-center">
                <i class="material-icons-outlined">shop</i>
                <span class="m-l-10"> <?php echo e(__('index.your_shops')); ?></span>
                <i class="material-icons ml-auto">keyboard_arrow_right</i>
            </a>
        </li>
        <li class="list-group-item col-text">
            <a href="<?php echo e(route('search.saved')); ?>" class=" d-flex align-items-center">
                <i class="material-icons-outlined">search</i>
                <span class="m-l-10"><?php echo e(__('index.saved_search')); ?></span>
                <i class="material-icons ml-auto">keyboard_arrow_right</i>
            </a>
        </li>
        


        <li class="list-group-item col-text">
            <a href=" <?php echo e(route('chat.inbox')); ?>" class=" d-flex align-items-center">
                <i class="material-icons-outlined">message</i>
                <span class="m-l-10"> <?php echo e(__('index.inbox')); ?></span>
                <i class="material-icons ml-auto">keyboard_arrow_right</i>
            </a>
        </li>
        <li class="list-group-item col-text">
            <a href="<?php echo e(route('complaint')); ?>" class=" d-flex align-items-center">
                <i class="material-icons-outlined">message</i>
                <span class="m-l-10"><?php echo e(__('index.complaint')); ?></span>
                <i class="material-icons ml-auto">keyboard_arrow_right</i>
            </a>
        </li>

        <li class="list-group-item col-text">
            <a href="<?php echo e(route('settings')); ?>" class=" d-flex align-items-center">
                <i class="material-icons-outlined">settings</i>
                <span class="m-l-10"><?php echo e(__('index.setting')); ?></span>
                <i class="material-icons ml-auto">keyboard_arrow_right</i>
            </a>
        </li>


        <li class="list-group-item col-text">
            <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('logout')); ?>"><i data-feather="log-out"></i><?php echo e(__('index.logout')); ?></a>
            <?php endif; ?>
            <?php if(auth()->guard()->guest()): ?>
            <a href="<?php echo e(url('login')); ?>"><i data-feather="log-out"></i><?php echo e(__('index.log_in')); ?></a>
            <?php endif; ?>
        </li>
    </ul>
</nav>
<!-- .Sidebar left -->
<!-- Header  -->
<nav class="navbar navbar-expand-lg navbar-light bg-header">
    <div class="container-fluid">
        <button type="button" id="sidebarleftbutton" class="btn">
            <i class="material-icons">menu</i>
        </button>
        
    </div>
</nav>
<!-- .Header  -->




<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Content  -->
<div id="content">
    <!-- Content Wrap  -->
    <div class="content-wrap">
        <!-- section 1 -->
        <div class="location-section">
            <div class="lo-title">
                <img src="<?php echo e(asset('https://royalsooq.com/img/logos/Royal Sooq.png')); ?>" style="
                width: 18%; margin-top: 40px;
                "/>
            </div>
            <div class="lo-area ml-auto d-flex">
                

            </div>
            <?php if(App::getLocale() === 'en'): ?>

            <a href="<?php echo e(LaravelLocalization::getLocalizedURL('ar')); ?>" class="navBar-item" style="

position: inherit; border-right: 0;"><img src="<?php echo e(asset('img/logos/Egypt-Flag-1-icon.png')); ?>" style="width:30px;cursor: pointer; margin: 30px 20px 0 0;" data-toggle="modal" data-target="#myModal"></a>
<?php else: ?>

<a href="<?php echo e(LaravelLocalization::getLocalizedURL('en')); ?>" class="navBar-item" style="

position: inherit;border-right: 0;"><img src="<?php echo e(asset('img/logos/uk.png')); ?>" style="width:30px;cursor: pointer; margin: 30px 20px 0 0;" data-toggle="modal" data-target="#myModal"></a>

<?php endif; ?>
            <div class="clear"></div>
        </div>
        <!-- section 1 -->
        <!-- section 2 -->
        <div class="search-section">
            <div class="search-form search-content">
                <form action="<?php echo e(url('/Search')); ?>" method="get">
                    <?php echo csrf_field(); ?>
                <div class="search-wrapper ">
                    <input  name='name' class="search" placeholder="<?php echo e(__('index.search')); ?>">
                    <input type='hidden' name='category' value='null'>
                    <button class="ssubmit" type="submit" ><i data-feather="search"></i></button>
                </div>
            </form>
            </div>
        </div>
        <!-- section 2 -->
        <!-- section 3 -->
        <div class="home-icon">
            <div class="section-home">
                <div class="container">


                    <?php $__currentLoopData = $allcat->chunk(4)->slice(0,2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                    <div class="row">
                        <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col s-icon">
                            <a href="<?php echo e(route('category.sub', $c->id)); ?>" class="homepage-icon-menu">
                                <img src="<?php echo e(asset('storage/'. $c->image)); ?>" alt="icon">

                                <div class="s-icon-text">
                                    <?php echo e($c->name); ?>

                                </div>
                            </a>
                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key == 1): ?>
                            <div class="col s-icon">
                            <a href="<?php echo e(route('allCategories')); ?>" class="homepage-icon-menu">
                                <img src="img/icons8-view-more-50.png" alt="icon">
                                <div class="s-icon-text">
                                    <?php echo e(__('index.all_cat')); ?>

                                </div>
                            </a>
                        </div>

                           <?php endif; ?>



                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    

                </div>
            </div>
        </div>
        <!-- .section 3 -->
        <!-- section 4 -->
        <div class="heading-section">
            <div class="sa-title"><?php echo e(__('index.feature')); ?></div>
            <a href="<?php echo e(route('AllFeaturedAds')); ?>" class="sa-view"><?php echo e(__('index.more_ads')); ?></a>
            <div class="clear"></div>
        </div>
        <div class="ad-section ad-carousel">

            <div class="default-carousel">
                <?php $__currentLoopData = $latest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- item -->
                <a href="Product-details/<?php echo e($product->slug); ?>">
                <div class="item">
                    <div class="ad-box">
                        
                        

                            <div class="ad-image">
                                <img src="<?php echo e($product->main_image_url); ?>" alt="<?php echo e($product->name); ?>" title="<?php echo e($product->name); ?>">
                            </div>

                            <div class="ad-content">
                                <div class="ad-title"><?php echo e($product->name); ?></div>
                                <div class="ad-location"><i class="material-icons-outlined">location_on</i><?php echo e($product->city->city ?? ''); ?></div>
                                <div class="ad-price"><i class="material-icons"></i><?php echo e($product->price); ?> <?php echo e($product->country->currency); ?></div>
                            </div>
                        </a>
                    </div>
                </div>
                </a>
                <!-- .item -->
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <!-- .section 4-->

           <!-- section 4 / -->
           <div class="heading-section">
            <div class="sa-title"><?php echo e(__('index.latest')); ?></div>
            <a href="<?php echo e(route('AllLatestAds')); ?>" class="sa-view"><?php echo e(__('index.more_ads')); ?></a>
            <div class="clear"></div>
        </div>
        <div class="ad-section ad-carousel">

            <div class="default-carousel">
                <?php $__currentLoopData = $latest2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- item -->
                <div class="item">
                    <div class="ad-box">
                        
                        
                        <a href="Product-details/<?php echo e($product->slug); ?>">
                            <div class="ad-image">
                                <img src="<?php echo e($product->main_image_url); ?>" alt="<?php echo e($product->name); ?>" title="<?php echo e($product->name); ?>">
                            </div>

                            <div class="ad-content">
                                <div class="ad-title"><?php echo e($product->name); ?></div>
                                <div class="ad-location"><i class="material-icons-outlined">location_on</i><?php echo e($product->city->city ?? ''); ?></div>
                                <div class="ad-price"><i class="material-icons"></i><?php echo e($product->price); ?> <?php echo e($product->country->currency); ?></div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- .item -->
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <!-- .section 4-->


        <!-- Section Banner -->
        
        <!-- Section Banner -->

        <!-- section 5 -->
        <div class="heading-section">
            <div class="sa-title">Trending Ads</div>
            <a href="<?php echo e(route('AllFeaturedAds')); ?>" class="sa-view"><?php echo e(__('index.more_ads')); ?></a>
            <div class="clear"></div>
        </div>
        <?php $__currentLoopData = $latest2->slice(0,10)->chunk(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ad-section grid-view">
            <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="ad-box">

                
                <a href="Product-details/<?php echo e($product->slug); ?>">
                    <div class="ad-image">
                        <img src="<?php echo e($product->main_image_url); ?>" alt="<?php echo e($product->name); ?>" title="<?php echo e($product->name); ?>">
                    </div>

                    <div class="ad-content">
                        <div class="ad-title"><?php echo e($product->name); ?></div>
                        <div class="ad-location"><i class="material-icons-outlined">location_on</i><?php echo e($product->city->city ?? ''); ?></div>
                        <div class="ad-price"><i class="material-icons"></i><?php echo e($product->price); ?> <?php echo e($product->country->currency); ?></div>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <!-- .section 5 -->
    </div>
</div>
<!-- .Content  -->

<!-- Modal -->
<div class="modal fade" id="read-all" tabindex="-1" role="dialog" aria-labelledby="readAllTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="readAllTitle">Mark all as read</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to mark all notification as read?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link p-0" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-link p-0 ml-3">Yes</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<!--Location-->
<div id="locationPage" class="sidenav bottom">
    <div class="sidebar-header">
        <button type="button" id="dismiss" class="btn">
            <i class="material-icons">clear</i>
        </button>
        <div class="navbar-heading m-l-10">
            <h4>Location</h4>
        </div>
        <a href="#" id="locationCountryButton" class="ml-auto d-flex align-items-center">
            <img src="img/flag_icon/india.svg" width="20">
            <i class="material-icons">arrow_drop_down</i>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <!--Search section -->

        <div class="search-section">
            <div class="search-form search-content mt-0">
                <div class="search-wrapper ">
                    <input name="name" placeholder="<?php echo e(__('index.search')); ?>"  class="search">

                    <button class="ssubmit" name="submit" type="submit"><i data-feather="search"></i></button>
                </div>
            </div>
        </div>
    </form>
        <!--Search section -->

        <!--Recent Location-->
        <div class="heading-section">
            <div class="title col-secondary font-weight-normal">Recent Location</div>
        </div>
        <div class="ad-section">
            <ul class="list-group">
                <?php $__currentLoopData = $allCountries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item">
                    <a href="country?country=<?php echo e($c->id); ?>" ><?php echo e($c->name); ?></a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>
        </div>
        <!--Recent Location-->

        <!--Popular Cities-->
        <div class="heading-section">
            <div class="title col-secondary font-weight-normal">Popular Cities</div>
        </div>
        <div class="ad-section">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="#" >Delhi</a>
                </li>
                <li class="list-group-item">
                    <a href="#" >Ahmadabad</a>
                </li>
                <li class="list-group-item">
                    <a href="#" >Jaipur</a>
                </li>
                <li class="list-group-item">
                    <a href="#" >Patna</a>
                </li>
            </ul>
        </div>
        <!--Popular Cities-->

        <!--Choose States-->
        <div class="heading-section">
            <div class="title col-secondary font-weight-normal">Choose States</div>
        </div>
        <div class="ad-section">
            <ul class="list-group">
                <li class="list-group-item col-primary">
                    <a href="#" >All In India</a>
                </li>
                <li class="list-group-item col-text">
                    <a href="#" id="locationCityButton" class=" d-flex align-items-center">
                        <span>Andaman and Nicobar</span>
                        <i class="material-icons ml-auto">keyboard_arrow_right</i>
                    </a>
                </li>
                <li class="list-group-item col-text">
                    <a href="#" id="locationCityButton" class=" d-flex align-items-center">
                        <span>Andhra Pradesh</span>
                        <i class="material-icons ml-auto">keyboard_arrow_right</i>
                    </a>
                </li>
                <li class="list-group-item col-text">
                    <a href="#" id="locationCityButton" class=" d-flex align-items-center">
                        <span>Arunachal Pradesh</span>
                        <i class="material-icons ml-auto">keyboard_arrow_right</i>
                    </a>
                </li>
                <li class="list-group-item col-text">
                    <a href="#" id="locationCityButton" class=" d-flex align-items-center">
                        <span>Assam</span>
                        <i class="material-icons ml-auto">keyboard_arrow_right</i>
                    </a>
                </li>
                <li class="list-group-item col-text">
                    <a href="#" id="locationCityButton" class=" d-flex align-items-center">
                        <span>Bihar</span>
                        <i class="material-icons ml-auto">keyboard_arrow_right</i>
                    </a>
                </li>
            </ul>
        </div>
        <!--Choose States-->
    </div>
</div>
<!--Location-->

<!--Location Country-->
<div id="locationCountry" class="sidenav bottom">
    <div class="sidebar-header">
        <button type="button" id="dismiss" class="btn">
            <i class="material-icons">clear</i>
        </button>
        <div class="navbar-heading m-l-10">
            <h4>Country</h4>
        </div>
    </div>
    <div class="sidebar-wrapper">
        <!--Search section -->
        <div class="search-section">
            <div class="search-form search-content mt-0">
                <div class="search-wrapper ">
                    <input placeholder="Where do you want to go?" class="search">
                    <button class="ssubmit" type="submit" name="search_submit"><i data-feather="search"></i></button>
                </div>
            </div>
        </div>
        <!--Search section -->

        <!--Choose Country-->
        <div class="heading-section">
            <div class="title col-secondary font-weight-normal">Choose Country</div>
        </div>
        <div class="ad-section">
            <ul class="list-group">
                <li class="list-group-item col-text">
                    <a href="#" class=" d-flex align-items-center">
                        <img src="img/flag_icon/belarus.svg" width="20">
                        <span class="m-l-10">Belarus</span>
                    </a>
                </li>
                <li class="list-group-item col-text">
                    <a href="#" class=" d-flex align-items-center">
                        <img src="img/flag_icon/brazil.svg" width="20">
                        <span class="m-l-10">Brazil</span>
                    </a>
                </li>
                <li class="list-group-item col-text">
                    <a href="#" class=" d-flex align-items-center">
                        <img src="img/flag_icon/hungary.svg" width="20">
                        <span class="m-l-10">Hungry</span>
                    </a>
                </li>
                <li class="list-group-item col-text">
                    <a href="#" class=" d-flex align-items-center">
                        <img src="img/flag_icon/iceland.svg" width="20">
                        <span class="m-l-10">Iceland</span>
                    </a>
                </li>
                <li class="list-group-item col-text">
                    <a href="#" class=" d-flex align-items-center">
                        <img src="img/flag_icon/india.svg" width="20">
                        <span class="m-l-10">India</span>
                    </a>
                </li>
            </ul>
        </div>
        <!--Choose Country-->
    </div>
</div>
<!--Location Country-->

<!--Location City-->
<div id="locationCity" class="sidenav right">
    <div class="sidebar-header">
        <button type="button" id="dismiss" class="btn">
            <i class="material-icons">clear</i>
        </button>
        <div class="navbar-heading m-l-10">
            <h4>Andaman and Nicobar</h4>
        </div>
    </div>
    <div class="sidebar-wrapper">
        <!--Search section -->
        <div class="search-section">
            <div class="search-form search-content mt-0">
                <div class="search-wrapper ">
                    <input placeholder="Where do you want to go?" class="search">
                    <button class="ssubmit" type="submit" name="search_submit"><i data-feather="search"></i></button>
                </div>
            </div>
        </div>
        <!--Search section -->

        <!--Choose City-->
        <div class="heading-section">
            <div class="title col-secondary font-weight-normal">Choose City</div>
        </div>
        <div class="ad-section">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="#" >Delhi</a>
                </li>
                <li class="list-group-item">
                    <a href="#" >Ahmadabad</a>
                </li>
                <li class="list-group-item">
                    <a href="#" >Jaipur</a>
                </li>
                <li class="list-group-item">
                    <a href="#" >Patna</a>
                </li>
            </ul>
        </div>
        <!--Choose City-->
    </div>
</div>
<!--Location City-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts_mobile.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/home_mobile.blade.php ENDPATH**/ ?>