
<a-menu
    mode="inline"
    theme="light"
    :default-selected-keys="['<?php echo e(Route::currentRouteName()); ?>']"
    style="height: 100%"
>

    <!-- <a-menu-item style="min-height:120px;text-align:center"> -->
        <!-- <?php if(empty(Auth::user()->image)): ?>
            <a-avatar 
                shape="square"
                style="background-color:#2A8FBD;width:100%;height:100px">
                <?php echo e(Auth::user()->name); ?></a-avatar>
        <?php else: ?>
            
        <img src="<?php echo e(asset('/storage/' . Auth::user()->image)); ?>"> -->
        <!-- <a-avatar 
                shape="square"
                style="width:100%; height: auto"
                src="<?php echo e(asset('/storage/' . Auth::user()->image)); ?>">
            </a-avatar> -->
        <!-- <?php endif; ?>
    </a-menu-item>
  -->
    <a-menu-item><h3 style="color:rgb(42, 143, 189);">MY Account</h3>
    <a href="javascript:void(0)" class="hide-nerest" style="
 
"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
    
        </a-menu-item>
<a-menu>
    <a-menu-item key="account.dashboard">
        <a  href="<?php echo e(route('account.dashboard')); ?>">
            <?php echo e(__('Personal Home')); ?>

        </a>
       
    </a-menu-item>
    </a-menu>
  
    <!-- <a-menu-item key="account.upload">
        <a href="<?php echo e(route('account.upload')); ?>">
            <?php echo e(__('Upload Photo')); ?>

        </a>
    </a-menu-item> -->
   
    <a-menu-item ><hr></a-menu-item>
    <a-menu-item ><h3 style="color:rgb(42, 143, 189);">MY ADS</h3> <a href="javascript:void(0)" class="hide-nerest" style="

"><i class="fa fa-angle-down" aria-hidden="true"></i></a></a-menu-item>

<a-menu> 
    <a-menu-item key="account.user.freeAds">
        <a href="<?php echo e(route('user.freeAds')); ?>">
        <span class="fa fa-star"></span>  <?php echo e(__('My Ads')); ?>&nbsp;<span class="badge badge-pill">30</span>
        </a>
    </a-menu-item>
   
    <?php if(((Auth::user()->seller)=='0')): ?>
    <a-menu-item key="account.Favorite.index">
        <a href="<?php echo e(route('favorites')); ?>">
        <span class="fa fa-heart"></span>    <?php echo e(__('Favorite Ads')); ?>&nbsp;<span class="badge badge-pill">33</span>
        </a>
    </a-menu-item>

<a-menu-item key="account.searches.index">
        <a href="#">
        <span class="fa fa-floppy-o"></span>    <?php echo e(__('Saved Searches (soon)')); ?>

        </a>
    </a-menu-item>
    <a-menu-item key="account.pending.index">
        <a href="#">
            <?php echo e(__('pending approval (soon)')); ?>

        </a>
    </a-menu-item>
    <?php endif; ?>
    <a-menu-item key="account.address.index">
        <a href="<?php echo e(route('account.address.index')); ?>">
        <span class="fa fa-map-marker"></span>  <?php echo e(__('Addresses')); ?>

        </a>
    </a-menu-item>
   
    
   
    <?php if(((Auth::user()->seller)=='0')): ?>
   
   
    <a-menu-item key="account.order.index">
        <a href="<?php echo e(route('account.order.index')); ?>">
        <span class="fa fa-gift"></span>  <?php echo e(__('Orders')); ?> &nbsp; <span class="badge badge-pill">20</span>
        
        </a>
    </a-menu-item>


      <a-menu-item key="account.Complaint.index">
       <a href="<?php echo e(route('complaint')); ?>">
       <span class="fa fa-envelope-o"></span>       <?php echo e(__('Complaint')); ?>

        </a>
    </a-menu-item>

    <a-menu-item key="account.Logout.index">
       <a href="<?php echo e(route('logout')); ?>">
       <span class="fa fa-user"></span>       <?php echo e(__('Logout')); ?>

        </a>
    </a-menu-item>
    <?php else: ?>
       
    <a-menu-item key="account.charts.index">
        <a href="<?php echo e(route('charts')); ?>">
            <?php echo e(__('Charts')); ?>

        </a>
    </a-menu-item>
       
        <a-menu-item key="account.addservice.index">
        <a href="<?php echo e(route('service.page')); ?>">
            <?php echo e(__('Add New Service')); ?>

        </a>
    </a-menu-item>

    <a-menu-item key="account.addsponsered.index">
        <a href="<?php echo e(route('sponsored.page')); ?>">
            <?php echo e(__('Add New Sponsored Ads')); ?>

        </a>
    </a-menu-item>

    <a-menu-item key="account.bank.index">
        <a href="<?php echo e(route('bank')); ?>">
            <?php echo e(__('Bank Informations')); ?>

        </a>
    </a-menu-item>


    <a-menu-item key="account.copons.index">
        <a href="<?php echo e(route('copons.page')); ?>">
            <?php echo e(__('Create Copons')); ?>

        </a>
    </a-menu-item>


    <a-menu-item key="account.adsposition.index">
        <a href="<?php echo e(route('ads.position.page')); ?>">
            <?php echo e(__('Ads')); ?>

        </a>
    </a-menu-item>


    <?php endif; ?>
</a-menu>
    
</a-menu>

<?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\resources\views/partials/account-nav.blade.php ENDPATH**/ ?>