<a-layout-sider :style="{background: '#fff'}" :trigger="null" collapsible v-model="collapsed">
    <a href="<?php echo e(route('admin.dashboard')); ?>">
        <div class="logo">AvoRed</div>
    </a>
    <a-menu 
        theme="light"
        :default-selected-keys="['<?php echo e($currentMenuItemKey); ?>']"
        :default-open-keys="['<?php echo e($currentOpenKey); ?>']"
        mode="inline">
    <?php $__currentLoopData = $adminMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $adminMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($adminMenu->hasSubmenu()): ?>
            <a-sub-menu key="<?php echo e($key); ?>">
                <span slot="title">
                    <?php if($adminMenu->icon() !== null): ?>
                        <a-icon type="<?php echo e($adminMenu->icon()); ?>"></a-icon>
                    <?php endif; ?>
                    <span><?php echo e($adminMenu->label()); ?></span>
                </span>
                <?php $__currentLoopData = $adminMenu->subMenu($key); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a-menu-item key="<?php echo e($subMenu->key()); ?>">
                        <a href="<?php echo e(route($subMenu->route())); ?>">
                            <?php echo e($subMenu->label()); ?>

                        </a>
                    </a-menu-item>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </a-sub-menu>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </a-menu>

        
    </a-menu>
</a-layout-sider>
<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/partials/sidebar.blade.php ENDPATH**/ ?>