

<!-- <style>

    .ant-menu-item :active {

        background: cadetblue;

    }

</style> -->



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

    <a-menu-item  data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><h3 style="color:rgb(42, 143, 189);"> <?php echo e(__('index.my_acc')); ?>  <i class="fa fa-angle-down" aria-hidden="true" ></i></h3>

  </a>

    

        </a-menu-item>

<a-menu style="padding-left: 24px;background-color: white;"  >

    <a-menu-item key="account.dashboard" <?php if(Route::currentRouteName() == 'aaccount.dashboard'): ?> class="activeb" <?php endif; ?>>

        <a  href="<?php echo e(route('account.dashboard')); ?>" >

 <?php echo e(__('index.personal')); ?>       <i class="fa fa-home" aria-hidden="true"></i>

        </a>

        

    </a-menu-item>

    </a-menu>

  

    <!-- <a-menu-item key="account.upload">

        <a href="<?php echo e(route('account.upload')); ?>">

            <?php echo e(__('Upload Photo')); ?>


        </a>

    </a-menu-item> -->

   

    <a-menu-item ><hr></a-menu-item>

    <a-menu-item  data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2" ><h3 style="color:rgb(42, 143, 189);"><?php echo e(__('index.my_ads')); ?> <i class="fa fa-angle-down" aria-hidden="true"></i></h3> </a-menu-item>



<a-menu  id="multiCollapseExample2"> 

    <a-menu-item key="account.user.freeAds" <?php if(Route::currentRouteName() == 'user.freeAds'): ?> class="activeb" <?php endif; ?>>

        <a href="<?php echo e(route('user.freeAds')); ?>">

        <span class="fa fa-star"></span>  <?php echo e(__('index.my_ads')); ?>&nbsp;<span class="badge badge-pill"><?php echo e(count(Auth::user()->products)); ?></span>

        </a>

    </a-menu-item>

   

    <?php if(((Auth::user()->seller)=='0')): ?>

    <a-menu-item key="account.Favorite.index" <?php if(Route::currentRouteName() == 'favorites'): ?> class="activeb" <?php endif; ?>>

        <a href="<?php echo e(route('favorites')); ?>">

        <span class="fa fa-heart"></span>    <?php echo e(__('index.favorite_ads')); ?>&nbsp;<span class="badge badge-pill"><?php echo e(count(Auth::user()->wish)); ?></span>

        </a>

    </a-menu-item>



    <a-menu-item key="account.shopdetails.index">

        <a href="<?php echo e(route('shops.data')); ?>" >

        <span class="fa fa-shopping-bag"></span>  <?php echo e(__('index.shop_info')); ?>


        </a>

    </a-menu-item>



    <a-menu-item key="account.shopdetails.index">

        <a href="<?php echo e(route('shops2', auth()->user()->id)); ?>" >

        <span class="fa fa-shopping-bag"></span>  <?php echo e(__('index.your_shops')); ?>


        </a>

    </a-menu-item>



<a-menu-item key="account.searches.index" <?php if(Route::currentRouteName() == 'search.saved'): ?> class="activeb" <?php endif; ?>>

        <a href="<?php echo e(route('search.saved')); ?>">

        <span class="fa fa-floppy-o"></span>    <?php echo e(__('index.saved_search')); ?>


        </a>

    </a-menu-item>

    <!-- <a-menu-item key="account.pending.index">

        <a href="#">

        <?php echo e(__('index.pending')); ?> <?php echo e(__('index.soon')); ?>


        </a>

    </a-menu-item> -->

    <?php endif; ?>

    <a-menu-item key="account.address.index" <?php if(Route::currentRouteName() == 'account.address.index'): ?> class="activeb" <?php endif; ?>>

        <a href="<?php echo e(route('account.address.index')); ?>">

        <span class="fa fa-map-marker"></span>  <?php echo e(__('index.addresses')); ?>


        </a>

    </a-menu-item>

   

    

   

    <?php if(((Auth::user()->seller)=='0')): ?>

   

   <!-- orders -->

    <!-- <a-menu-item key="account.order.index"   <?php if(Route::currentRouteName() == 'account.order.index'): ?> class="activeb" <?php endif; ?>>

        <a href="<?php echo e(route('account.order.index')); ?>">

        <span class="fa fa-gift"></span>  <?php echo e(__('index.orders')); ?> &nbsp; <span class="badge badge-pill"><?php echo e(count(Auth::user()->order)); ?></span>

        

        </a>

    </a-menu-item> -->





      <a-menu-item key="account.Complaint.index"  <?php if(Route::currentRouteName() == 'complaint'): ?> class="activeb" <?php endif; ?>>

       <a href="<?php echo e(route('complaint')); ?>">

       <span class="fa fa-envelope-o"></span>       <?php echo e(__('index.complaint')); ?>


        </a>

    </a-menu-item>



    <a-menu-item key="account.Complaint.index"  <?php if(Route::currentRouteName() == 'chat.inbox'): ?> class="activeb" <?php endif; ?>>

       <a href="<?php echo e(route('chat.inbox')); ?>">

       <span class="fa fa-envelope-o"></span>       <?php echo e(__('index.inbox')); ?>


        </a>

    </a-menu-item>



    <a-menu-item key="account.Logout.index">

       <a href="<?php echo e(route('logout')); ?>">

       <span class="fa fa-user"></span>       <?php echo e(__('index.logout')); ?>


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



<!-- Modal -->

<div class="modal fade" id="modalContactForm"  

  aria-hidden="true">

  <div class="modal-dialog" >

    <div class="modal-content">

      <div class="modal-header text-center">

        <h4 class="modal-title w-100 font-weight-bold">Your Shop Data</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body mx-3">

      



    <form action="<?php echo e(route('shops.data.add')); ?>" method="post"> 

       <?php echo csrf_field(); ?>



        <div class="md-form">

          <i class="fas fa-pencil prefix grey-text"></i>

          <textarea type="text" name="about" class="md-textarea form-control" rows="4"></textarea>

          <!-- <label data-error="wrong" data-success="right" for="form8">About Your Shop</label> -->

        </div>



      </div>

      <!-- <div class="modal-footer d-flex justify-content-center"> -->

      <input type="submit" name="submit" value="Send">

        <!-- <button class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button> -->

      <!-- </div> -->

      </form>

    </div>

  </div>

</div>



<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/partials/account-nav.blade.php ENDPATH**/ ?>