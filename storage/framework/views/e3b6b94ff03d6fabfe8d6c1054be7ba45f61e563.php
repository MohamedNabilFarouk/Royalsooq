      <script src=" <?php echo e(asset('js/jquery.js')); ?>"></script>

     



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

        <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>

        <script src="<?php echo e(asset('js/owl-carousel.js')); ?>"></script>

        <script src="<?php echo e(asset('js/masonry.js')); ?>"></script>

        <script src="<?php echo e(asset('js/nicescroll.js')); ?>"></script>



        <!-- Custom scripts -->

        <script src="<?php echo e(asset('js/custom.js')); ?>"></script>

        <script src="<?php echo e(asset('js/switcher.js')); ?>"></script>



        <!--  -->

               <!-- <script src="<?php echo e(asset('js/app.js')); ?>"></script> -->

                <script src="<?php echo e(asset('js/review.js')); ?>"></script>

       <script>

        

 $( document ).ready(function() {

     setTimeout(function() {

    $('.hide-nerest').on('click', function(e) {

  e.stopPropagation();

  $(this).parent().next('ul').slideToggle();

});

  }, 3000);

});

</script>









    <?php echo $__env->yieldPushContent('scripts'); ?>

        <!--  -->

    </div>

     <?php echo $__env->yieldContent('scripts'); ?>

<!-- image preview -->

<script language="javascript" type="text/javascript">
window.onload = function () {
    var fileUpload = document.getElementById("file-input");
    fileUpload.onchange = function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreview = document.getElementById("dvPreview");
            dvPreview.innerHTML = "";
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            for (var i = 0; i < fileUpload.files.length; i++) {
                var file = fileUpload.files[i];
                if (regex.test(file.name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = document.createElement("IMG");
                        img.height = "100";
                        img.width = "100";
                        img.src = e.target.result;
                        dvPreview.appendChild(img);
                    }
                    reader.readAsDataURL(file);
                } else {
                    alert(file.name + " is not a valid image file.");
                    dvPreview.innerHTML = "";
                    return false;
                }
            }
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    }
};
</script>

<!-- end preview --><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/layouts/inc-scripts.blade.php ENDPATH**/ ?>