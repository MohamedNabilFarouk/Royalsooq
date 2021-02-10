

      <div class="location-section">
          <img src="<?php echo e(asset('https://royalsooq.com/img/logos/Royal Sooq.png')); ?>" style="
    width: 18%;
"/>
            <div class="lo-area ml-auto d-flex">
                <div class="area">
                    <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(route('free.ads')); ?>" class="btn centerbutton" style="background: #2962d1;">
                        <i class="material-icons"> <i class="material-icons">add</i>أضافه أعلان</i>
                    </a>
                    <?php endif; ?>
                    <?php if(auth()->guard()->guest()): ?>
                    <a href="<?php echo e(url('login')); ?>" class="btn centerbutton" style="background: #2962d1;">
                        <i class="material-icons"> <i class="material-icons"></i><?php echo e(__('index.log_in')); ?></i>
                    </a>
                    <?php endif; ?>
                </div>


            </div>
            <div class="clear"></div>
        </div>

<!-- .Header  -->
      
<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/layouts_mobile/inc-top.blade.php ENDPATH**/ ?>