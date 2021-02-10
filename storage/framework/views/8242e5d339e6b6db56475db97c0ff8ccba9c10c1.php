<a-layout-sider :style="{background: '#fff'}" :trigger="null" collapsible v-model="collapsed">
    <a href="<?php echo e(route('admin.dashboard')); ?>">
        <div class="logo"> <img src="<?php echo e(asset('img/logos/Royal Sooq.png')); ?>" alt="Image Alternative text" title="Image Title" style="width:107px;margin-top:5px;" /></div>
    </a>
    <a-menu 
        theme="light"
        :default-selected-keys="['<?php echo e($currentMenuItemKey); ?>']"
        :default-open-keys="['<?php echo e($currentOpenKey); ?>']"
        mode="inline">
    
    
            <!-- <a-sub-menu key="">
                <span slot="title">
                  
                <span class="fa fa-star"></span>
                
                    <span>Data</span>
                </span> -->
              
                    <a-menu-item key="categories">
                        <a href="<?php echo e(route('admin.category.index')); ?>">
                      Categories
                        </a>
                    </a-menu-item>

                    <a-menu-item key="subcategories">
                        <a href="<?php echo e(route('admin.subcategory.index')); ?>">
                      Sub-Categories
                        </a>
                    </a-menu-item>

                    <a-menu-item key="Products">
                        <a href="<?php echo e(route('admin.product.index')); ?>">
                        Products                        
                        </a>
                    </a-menu-item>
                    <a-menu-item key="slider">
                        <a href="<?php echo e(route('admin.slider.index')); ?>">
                        Slider                        
                        </a>
                    </a-menu-item>

                    <a-menu-item key="ads_images">
                        <a href="<?php echo e(route('admin.ads.index')); ?>">
                        Ads Images                        
                        </a>
                    </a-menu-item>
              

                    <a-menu-item key="statics">
                        <a href="<?php echo e(route('admin.statics.index')); ?>">
                        Site Data                        
                        </a>
                    </a-menu-item>

            <!-- </a-sub-menu> -->
      
    
    </a-menu>

        
    </a-menu>
</a-layout-sider>
<?php /**PATH /home/o12s5ul8n01l/public_html/royal2.royalsooq.com/vendor/avored/framework/src/../resources/views/partials/sidebar.blade.php ENDPATH**/ ?>