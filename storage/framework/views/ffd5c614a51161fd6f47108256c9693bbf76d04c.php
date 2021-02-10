
<a-menu
    mode="inline"
    theme="light"
    :default-selected-keys="['<?php echo e(Route::currentRouteName()); ?>']"
    style="height: 100%"
>

    <a-menu-item style="min-height:120px;text-align:center">
        <?php if(empty(Auth::user()->image)): ?>
            <a-avatar 
                shape="square"
                style="background-color:#2A8FBD;width:100%;height:100px">
                <?php echo e(Auth::user()->name); ?></a-avatar>
        <?php else: ?>
            <a-avatar 
                shape="square"
                style="width:100%; height: auto"
                src="<?php echo e('/storage/' . Auth::user()->image); ?>">
            </a-avatar>
        <?php endif; ?>
    </a-menu-item>
    <a-menu-item key="account.dashboard">
        <a href="<?php echo e(route('account.dashboard')); ?>">
            <?php echo e(__('Profile')); ?>

        </a>
    </a-menu-item>
    <a-menu-item key="account.upload">
        <a href="<?php echo e(route('account.upload')); ?>">
            <?php echo e(__('Upload Photo')); ?>

        </a>
    </a-menu-item>
    <!-- <a-menu-item key="account.address.index">
        <a href="<?php echo e(route('account.address.index')); ?>">
            <?php echo e(__('Addresses')); ?>

        </a>
    </a-menu-item> -->
    <a-menu-item key="account.order.index">
        <a href="<?php echo e(route('account.order.index')); ?>">
            <?php echo e(__('Orders')); ?>

        </a>
    </a-menu-item>
    <a-menu-item key="account.Favorite.index">
        <a href="<?php echo e(route('favorites')); ?>">
            <?php echo e(__('Favorites')); ?>

        </a>
    </a-menu-item>

    <a-menu-item key="account.Complaint.index">
        <a href="<?php echo e(route('complaint')); ?>">
            <?php echo e(__('Complaint')); ?>

        </a>
    </a-menu-item>

    
</a-menu>
<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\royal_git\resources\views/partials/account-nav.blade.php ENDPATH**/ ?>