<!DOCTYPE HTML>

<html>



<head>

 <?php echo $__env->make('layouts.inc-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->yieldContent('social'); ?>
 <style>

/* Center the loader */

#loader {

 position: fixed;

   

  z-index: 9999999999999999;

  width: 150px;

  height: 150px;

 background-image: url("paper.gif");

 background-color:#fff;

  width: 100%;

  height: 100%;

}



#myDiv {

  display: none;

  text-align: center;

}

</style>

<script>

var myVar;



function myFunction() {

  myVar = setTimeout(showPage, 3000);

}



function showPage() {

  document.getElementById("loader").style.display = "none";

  document.getElementById("myDiv").style.display = "block";

}

</script>

</head>



<body  onload="myFunction()" style="margin:0;">

        <!-- <div id="loader"><img src="https://www.ottawawebdesignagency.ca/wp-content/uploads/2019/04/ottawa-ecommerce-web-design.gif"style="

    width: 52%;

    position: fixed;

    left: 27%;

"></div> -->

 













 





    <?php echo $__env->make('layouts.inc-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  

        <!-- POST Ad Now  -->

        <div id="POST-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">

            <i class="fa fa-sign-in dialog-icon"></i>

            <h3>Post Ad Now</h3>

            <form class="dialog-form" style="text-align: center;">

                <div class="form-group">

                    <label>Name</label>

                    <input type="text" placeholder="ex- Mahmoud Ahmed" class="form-control">

                </div>

                <div class="form-group">

                    <label>Descreption</label>

                    <input type="text" placeholder="Type Your Descreption" class="form-control">

                </div>

                <div class="form-group">

                    <label>Price</label>

                    <input type="number" placeholder="Type Price" class="form-control">

                </div>

                <div class="form-group">

                    <label>Phone Number</label>

                    <input type="text" placeholder="Type Your Phone Number" class="form-control">

                </div>

                <div class="form-group">

                    <label>Pick Pictures</label>

                    <input type="file"  multiple class="form-control">

                </div>

                

                <input type="submit" value="Post Now" class="btn btn-primary">

            </form>

            

        </div>





        





        <div id="password-recover-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">

            <i class="icon-retweet dialog-icon"></i>

            <h3>Password Recovery</h3>

            <h5>Fortgot your password? Don't worry we can deal with it</h5>

            <form class="dialog-form">

                <label>E-mail</label>

                <input type="text" placeholder="email@domain.com" class="span12">

                <input type="submit" value="Request new password" class="btn btn-primary">

            </form>

        </div>

        <!-- END LOGIN REGISTER LINKS CONTENT -->
<?php if(Session::get('message')): ?>
        <div class="alert alert-success" id="successMessage" role="alert">
<h4 class="text-center"><?php echo e(Session::get('message')); ?></h4>
</div>
<?php endif; ?>
<?php echo $__env->yieldContent('content'); ?>







       <!-- //////////////////////////////////

	//////////////MAIN FOOTER////////////// 

	////////////////////////////////////-->



   <?php echo $__env->make('layouts.inc-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        

        <!-- //////////////////////////////////

	//////////////END MAIN  FOOTER///////// 

	////////////////////////////////////-->

  





    <?php echo $__env->make('layouts.inc-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    

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

<?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/layouts/app.blade.php ENDPATH**/ ?>