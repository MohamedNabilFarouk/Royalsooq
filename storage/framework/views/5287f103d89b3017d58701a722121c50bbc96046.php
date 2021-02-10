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
    

    <link href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel='stylesheet'>
    <link href=" https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel='stylesheet'> 

    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<style>
.logo{
    background-image: url(/img/logos/Royal Sooq.png) !important;
}
</style>

<!-- form styles -->
<style>

        .image-upload > input

        {

            display: none;

        }



        .image-upload img

        {

            width: 80px;

            cursor: pointer;

        }

.row-wrap{
    margin-top:10px;
}



        /* ads position */





        /* HIDE RADIO */

        /* [type=radio] { 

          position: absolute;

          opacity: 0;

          width: 0;

          height: 0;

        } */



        /* IMAGE STYLES */

        [type=radio] + img {

          cursor: pointer;

        }



        /* CHECKED STYLES */

        [type=radio]:checked + img {

          outline: 2px solid #f00;

        }



</style>
<!-- /form styles -->


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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>






    <!-- / formscripts -->
</body>
</html>
<?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/layouts/app.blade.php ENDPATH**/ ?>