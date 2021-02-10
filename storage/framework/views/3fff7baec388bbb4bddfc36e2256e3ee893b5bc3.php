<a-layout-header class="bg-white z-1 p-0">
    <a-menu class="float-left" mode="horizontal">
        <a-menu-item>
            <a-icon 
                class="trigger header-trigger" 
                :type="collapsed ? 'menu-unfold' : 'menu-fold'" 
                @click="()=> collapsed = !collapsed">
            </a-icon>
        </a-menu-item>
    </a-menu>
    <a-menu class="header-nav" mode="horizontal">
        <a-sub-menu key="header-account">
            <span slot="title">
                <a-avatar
                    class="header-avtar" 
                    size="small" 
                    shape="square" 
                    icon="user"></a-avatar>
                <?php echo e(Auth::guard('admin')->user()->full_name); ?>

            </span>
            <a-menu-item key="1">
                <a href="<?php echo e(route('admin.logout')); ?>"
                    onclick="event.preventDefault();
                        document.getElementById('admin-logout-form').submit();">
                <a-icon type="logout"></a-icon>
                <span><?php echo e(__('avored::system.header.logout')); ?></span>
                </a>
            </a-menu-item>
        </a-sub-menu>
    </a-menu>
     <form id="admin-logout-form" action="<?php echo e(route('admin.logout')); ?>" method="POST" style="display: none;">
        <?php echo csrf_field(); ?>
    </form>
</a-layout-header>
<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/partials/header.blade.php ENDPATH**/ ?>