<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('meta_title', 'AvoRed E commerce'); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('avored-admin/css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <avored-layout inline-template>
            <a-layout id="avored-admin-layout" style="min-height: 100vh">
                <?php echo $__env->make('avored::partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <a-layout>

                    <?php echo $__env->make('avored::partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo $__env->make('avored::partials.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('avored::partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    
                    
                    <h1 class="mt-1 ml-1 mb-0"><?php echo $__env->yieldContent('page_title'); ?></h1>
                    
                    <a-layout-content class="mh-1 ph-1 pt-1 bg-white">
                        <?php echo $__env->yieldContent('content'); ?>
                    </a-layout-content>

                    <?php echo $__env->make('avored::partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </a-layout>
           
            </a-layout>
        </avored-layout>
    </div>
    <script src="<?php echo e(asset('avored-admin/js/app.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/layouts/app.blade.php ENDPATH**/ ?>