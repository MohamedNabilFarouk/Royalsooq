<!DOCTYPE HTML>
<html>

<head>
 <?php echo $__env->make('layouts.inc-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>


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
<?php echo $__env->yieldContent('content'); ?>



       <!-- //////////////////////////////////
	//////////////MAIN FOOTER////////////// 
	////////////////////////////////////-->

   <?php echo $__env->make('layouts.inc-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <!-- //////////////////////////////////
	//////////////END MAIN  FOOTER///////// 
	////////////////////////////////////-->


    <?php echo $__env->make('layouts.inc-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  
</body>


</html>
<?php /**PATH /home/o12s5ul8n01l/public_html/royal2.royalsooq.com/resources/views/layouts/app.blade.php ENDPATH**/ ?>