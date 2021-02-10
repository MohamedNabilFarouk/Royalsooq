<style>


.box {
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-80%);
}
.notifications {
    width:60px;
    height:60px;
    background:#fff;
    border-radius:30px;
    box-sizing:border-box;
    text-align:center;
    box-shadow:0 2px 5px rgba(0,0,0,.2);
}
.notifications:hover {
    width:300px;
    height:60px;
    text-align:left;
    padding:0 15px;
    background:#ff2c74;
    transform:translateY(-100%);
    border-bottom-left-radius:0;
    border-bottom-right-radius:0;
}
.notifications:hover .fa {
    color:#fff;
}
.notifications .fa {
    color:#cecece;
    line-height:60px;
    font-size:20px;
}
.notifications .num {
    position:absolute;
    top:0;
    right:-5px;
    width:25px;
    height:25px;
    border-radius:50%;
    background:#ff2c74;
    color:#fff;
    line-height:25px;
    font-family:sans-serif;
    text-align:center;
}
.notifications:hover .num {
    position:relative;
    background:transparent;
    color:#fff;
    font-size:24px;
    top:-4px;
}
.notifications:hover .num:after {
    content:' Notification';
}
ul {
    position:absolute;
    left:0;
    top:50px;
    margin:0;
    width:100%;
    background:#fff;
    box-shadow:0 5px 15px rgba(0,0,0,.5);
    padding:20px;
    box-sizing:border-box;
    border-bottom-left-radius:30px;
    border-bottom-right-radius:30px;
    display:none;
}
.notifications:hover ul {
    display:block;
}
ul li {
    list-style:none;
    border-bottom:1px solid rgba(0,0,0,.1);
    padding:8px 0;
    display:flex;
}
ul li:last-child {
    border-bottom:none;
}
ul li .icon {
    width:24px;
    height:24px; 
    background:#ccc;
    border-radius:50%;
    text-align:center;
    line-height:24px;
    margin-right:15px;
}
ul li .icon .fa {
    color:#fff;
    font-size:16px;
    line-height:24px;
}
ul li .text {
    position:relative;
    font-family:sans-serif;
    top:3px;
    cursor:pointer;
}
ul li:hover .text {
    font-weight:bold;
    color:#ff2c74;
}


h2{ color:#fff;
    text-align:center;
    
}



</style>

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
            <i class="fa fa-bell" aria-hidden="true" style="margin-top: 24px;"><span class="badge"><?php echo e(count(auth()->user()->unreadnotifications)); ?></span></i>

            </span>
           
           
            <?php $__currentLoopData = auth()->user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a-menu-item key="2">
                <a href="<?php echo e(route('admin.product.show',$note->data['product_id'])); ?>" target="_blank">
                <a-icon type="logout"></a-icon>
                <span><?php echo e($note->data['data']); ?></span>
                <span> At: <?php echo e($note->created_at); ?></span>
                <?php $note->markAsRead() ?>
                </a>
            
            </a-menu-item>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </a-sub-menu>


       

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
<?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/partials/header.blade.php ENDPATH**/ ?>