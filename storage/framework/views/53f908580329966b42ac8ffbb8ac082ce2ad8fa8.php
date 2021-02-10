
<?php $__env->startSection('content'); ?>
<div class="container">
    <script>document.addEventListener('contextmenu', event => event.preventDefault());</script>
	<div class="row">
    <?php if(App::getLocale() === 'en'): ?>
	<img src="<?php echo e(asset('images/Royal-Sooq-privacy-Policy--1.jpg')); ?>"/>
    <?php else: ?>
    <img src="<?php echo e(asset('images/سياسة-الخصوصية-لموقع-رويال-سوق--1.jpg')); ?>"/>
    <?php endif; ?>
       <br>
        </div>
        </div>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/blades/privacy.blade.php ENDPATH**/ ?>