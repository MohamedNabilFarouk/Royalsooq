 <a-layout-header :style="{ background: '#fff'}">
    <a-row :gutter="15" type="flex">
        <a-col  :span="6">
            <a href="<?php echo e(route('home')); ?>">
                <div class="logo"></div>
            </a>
        </a-col>
        <a-col :span="18">
            <avored-nav
                :menus="<?php echo e($menus); ?>"
                >
            
            </avored-nav>
        </a-col>
    </a-row>
</a-layout-header>
<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/partials/nav.blade.php ENDPATH**/ ?>