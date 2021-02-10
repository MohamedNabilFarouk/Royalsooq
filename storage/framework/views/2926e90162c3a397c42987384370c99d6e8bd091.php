<!DOCTYPE html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>

   <?php echo $__env->make('layouts.inc-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <style>
        .ant-layout {
    display: block !important;}
   </style>
</head>

<body>











<div class="global-wrap">



 



<!-- Top navbar -->

       



        <!-- Top navbar -->

        <?php echo $__env->make('layouts.inc-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


         





         <!-- Second Bar -->
        <!-- //////////////////////////////////
        //////////////MAIN HEADER///////////// 
        ////////////////////////////////////-->
        



       










<!-- start user.blade -->



    <div id="app">

        <avored-layout inline-template>

            <div>

                <a-layout id="components-layout-demo-top" class="layout">

                    <!-- <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->



                    <a-layout-content style="padding: 0 50px; background-color: white;">

                       

                        <a-layout style="padding: 24px 0; background-color:white; ">

                        

                            <a-layout-content :style="{ padding: '0 24px', minHeight: '280px' }">

                            <?php echo $__env->yieldContent('content'); ?>

                            </a-layout-content>

                        </a-layout>

                        </a-layout-content>

                    

                    <!-- <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->

                </a-layout>

            </div>

        </avored-layout>

    </div>

    <!-- end user.blade -->





    <?php echo $__env->make('layouts.inc-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>







        <!-- Scripts queries -->

        <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>

        <script src="<?php echo e(asset('js/boostrap.min.js')); ?>"></script>

        <script src="<?php echo e(asset('js/countdown.min.js')); ?>"></script>

        <script src="<?php echo e(asset('js/flexnav.min.js')); ?>"></script>

        <script src="<?php echo e(asset('js/magnific.js')); ?>"></script>

        <script src="<?php echo e(asset('js/tweet.min.js')); ?>"></script>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

        <script src="<?php echo e(asset('js/fitvids.min.js')); ?>"></script>

        <script src="<?php echo e(asset('js/mail.min.js')); ?>"></script>

        <script src="<?php echo e(asset('js/ionrangeslider.js')); ?>"></script>

        <script src="<?php echo e(asset('js/icheck.js')); ?>"></script>

        <script src="<?php echo e(asset('js/fotorama.js')); ?>"></script>

        <script src="<?php echo e(asset('js/card-payment.js')); ?>"></script>

        <script src="<?php echo e(asset('js/owl-carousel.js')); ?>"></script>

        <script src="<?php echo e(asset('js/masonry.js')); ?>"></script>

        <script src="<?php echo e(asset('js/nicescroll.js')); ?>"></script>



        <!-- Custom scripts -->

        <script src="<?php echo e(asset('js/custom.js')); ?>"></script>

        <script src="<?php echo e(asset('js/switcher.js')); ?>"></script>

    </div>

    <?php echo $__env->yieldContent('scripts'); ?>





</body>

</html>

<?php /**PATH /home/o12s5ul8n01l/public_html/royal2.royalsooq.com/resources/views/layouts/user.blade.php ENDPATH**/ ?>