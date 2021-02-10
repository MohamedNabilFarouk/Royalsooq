<!DOCTYPE HTML>

<html>



<head>

 <?php echo $__env->make('layouts_mobile.inc-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->yieldContent('social'); ?>
</head>



<body class="default">

      <!-- Preloading -->
<div class="preloading">
    <div class="wrap-preload">
        <div class="cssload-loader"></div>
    </div>
</div>
<!-- .Preloading -->

<?php echo $__env->yieldContent('header'); ?>
<style>
    .footer .centerbutton {

        width: 126px;}
    #content {
        padding: 7px 4px 0px 0px;}
    .location-section {
    padding: 11px 7px;
}
    h2.font-medium.mb-0 {
    color: #ffdf07;
}
    .text-light-gray, a.text-light-gray {
    color: #2656ff !important;
}
    .search-form.search-content {
    margin: 0px 0px 0px;
    font-size: 13px;
}
    </style>




















    



        <!-- POST Ad Now  -->

        














<?php echo $__env->yieldContent('content'); ?>







       <!-- //////////////////////////////////

	//////////////MAIN FOOTER//////////////

	////////////////////////////////////-->



   <?php echo $__env->make('layouts_mobile.inc-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



        <!-- //////////////////////////////////

	//////////////END MAIN  FOOTER/////////

	////////////////////////////////////-->







    <?php echo $__env->make('layouts_mobile.inc-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <!-- Facebook Pixel Code -->

<script>

!function(f,b,e,v,n,t,s)

{if(f.fbq)return;n=f.fbq=function(){n.callMethod?

n.callMethod.apply(n,arguments):n.queue.push(arguments)};

if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

n.queue=[];t=b.createElement(e);t.async=!0;

t.src=v;s=b.getElementsByTagName(e)[0];

s.parentNode.insertBefore(t,s)}(window, document,'script',

'https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '317508739302171');

fbq('track', 'PageView');

</script>

<noscript><img height="1" width="1" style="display:none"

src="https://www.facebook.com/tr?id=317508739302171&ev=PageView&noscript=1"

/></noscript>

<!-- End Facebook Pixel Code -->
<script>
setTimeout(function() {
    $('#successMessage').fadeOut('fast');
}, 3000); // <-- time in milliseconds
</script>



</body>





</html>

<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/layouts_mobile/app.blade.php ENDPATH**/ ?>