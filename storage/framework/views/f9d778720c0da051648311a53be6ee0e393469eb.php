<div class="overlay"></div>
<div class="footer">
    <div class="clearfix"></div>
    <div class="row no-gutters justify-content-around" id="bg">
        <div class="col-auto">
            <a href="<?php echo e(url('/')); ?>" class="btn active">
                <i class="material-icons-outlined">home</i>
            </a>
        </div>
        <div class="col-auto">
            <a href="<?php echo e(route('favorites')); ?>" class="btn">
                <i class="material-icons">favorite_border</i>
            </a>
        </div>
        <div class="col-auto">
            <a href="<?php echo e(route('free.ads')); ?>" class="btn centerbutton">
                <i class="material-icons">أضافه أعلان</i>
            </a>
        </div>
        <div class="col-auto">
            <a href="<?php echo e(route('chat.inbox')); ?>" class="btn">
                <i class="material-icons-outlined">sms</i>
            </a>
        </div>
        <div class="col-auto">
        <a href="<?php if(auth()->guard()->guest()): ?> <?php echo e(url('login')); ?> <?php endif; ?>  <?php if(auth()->guard()->check()): ?><?php echo e(url('account')); ?><?php endif; ?>" class="btn">
                <i class="material-icons">person_outline</i>
            </a>
        </div>
    </div>
</div>
<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/layouts_mobile/inc-footer.blade.php ENDPATH**/ ?>