<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <link href="<?php echo e(asset('dist/images/logo.svg')); ?>" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Dashboard - Midone - Tailwind HTML Admin Template</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="<?php echo e(asset('dist/css/app.css')); ?>" />
        <!-- END: CSS Assets-->

<style>
    body{
        BACKGROUND: #1c3faa !important;
    }
    input,textarea{
        margin-bottom:20px !important;
    }
    .bbg-white ,.ant-layout-content{
        background: #f1f5f8 !important;
    }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <link href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel='stylesheet'>
    <link href=" https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel='stylesheet'> 

    
     
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    </head>
    <!-- END: Head -->
    <body class="app">
    <div class="flex">
            <?php echo $__env->make('avored::mylayouts.inc-side', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="content">
            <?php echo $__env->make('avored::mylayouts.inc-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
                            <div class="col-span-12 mt-8">
                                    <div class="intro-y flex items-center h-10">
                                        <h2 class="text-lg font-medium truncate mr-5">
                                        <?php echo $__env->yieldContent('title'); ?>
                                        </h2>
                                    </div>
                                     
                                     <?php echo $__env->yieldContent('content'); ?>
                                
            </div>
            </div>
        </div>
    </div>
    </div>
    <!-- BEGIN: JS Assets-->
    <script src="../developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG7gNHAhDzgYmq4-EHvM4bqW1DNj2UCuk&amp;libraries=places"></script>
        <script src="<?php echo e(asset('dist/js/app.js')); ?>"></script>
        <!-- END: JS Assets-->




         <!-- datatable -->
    <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
    <!-- /datatable -->


    <!-- form scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"/>

<!-- Optional JavaScript -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    </body>
</html><?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/mylayouts/master.blade.php ENDPATH**/ ?>