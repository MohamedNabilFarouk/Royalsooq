
<?php
if(App::getLocale() === 'en'){
   
   $about= $about[0]->english;
  
}else{
    
    $about= $about[0]->arabic;

}

?>

<footer class="main" id="main-footer">



            <div class="footer-top-area">



                <div class="container">



                    <div class="row row-wrap" style="align-items: center;">



                        <div class="col-md-3 fot">



                            <a href="index-2.html">



                                <img src="<?php echo e(asset('img/logos/Royal Sooq.png')); ?>" alt="logo" title="logo" class="logo footer" >



                            </a>



                            <ul class="list list-social">



                                   <li>



                                    <a class="" href="#" data-toggle="tooltip" title="instgram"> <img  src="<?php echo e(asset('images/I.png')); ?>"style="

    max-width: 17%;

"></a>



                                </li>



                                <li>



                                    <a class="" href="#" data-toggle="tooltip" title="youtube"> <img  src="<?php echo e(asset('images/Y.png')); ?>"style="

    max-width: 17%;

"></a>



                                </li>



                                <li>



                                    <a class="" href="#" data-toggle="tooltip" title="Twitter"><img  src="<?php echo e(asset('images/T.png')); ?>"style="

    max-width: 17%;

"></a>



                                </li>



                                <li>



                                    <a class="" target="_blank" href="https://www.facebook.com/ROYALSOOQ" data-toggle="tooltip" title="facebook"><img  src="<?php echo e(asset('images/F.png')); ?>"style="

    max-width: 17%;

"></a>



                                </li>



                              



                            </ul>



                            <p><?php echo e($about); ?></p>



                        </div>



                        <div class="col-md-3" style="text-align: center;color: white;">







                            <h3 style="background-color:#efc718;border-radius: 5px;padding: 16px;color: black;"> <?php echo e(__('index.contact_us')); ?> </h3>



                            <br>



                            <!--<h5><?php echo e(__('index.questetions')); ?></h5>-->



                            <br>



                             <i class="fa fa-envelope-o" style="display:flex;color: #2a8fbd;font-weight: 600;font-weight: 600;

    font-size: 28px;"> <h4 class="text-left">  <?php echo e($cs_email[0]->english); ?></h4></i>



                            <br>



                                 <i class="fa fa-envelope-o" style="display: flex;color: #2a8fbd;font-weight: 600;font-weight: 600;

    font-size: 28px;">  <h4 class="text-left" >  <?php echo e($sales_email[0]->english); ?> </h4></i>



                            
<br>



<i class="fa fa-envelope-o" style="display: flex;color: #2a8fbd;font-weight: 600;font-weight: 600;

font-size: 28px;">  <h4 class="text-left" >  <?php echo e($info_email[0]->english); ?> </h4></i>





                        </div>



                        <div class="col-md-3">



                        <a href="<?php echo e($footer[0]->link); ?>" target="_blank"> <img class="adsfoot" src="<?php echo e(asset($footer[0]->image)); ?>" ></a>



                        </div>



                        <div class="col-md-3" style="padding: 10px;">



                     <h4><?php echo e(__('index.news')); ?></h4>



                            <div class="box">



                            <form action="<?php echo e(route('newsletter')); ?>" method="post">

                                <?php echo csrf_field(); ?>



                                    <div class="form-group mb10">

                                    <?php if($errors->all()): ?>

                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <h6 style="color:red">*<?php echo e($err); ?></h6>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php endif; ?>

                                        <label><?php echo e(__('index.email')); ?></label>



                                        <input type="email" name="email" class="form-control" />

                                        <label><?php echo e(__('index.phone')); ?></label>
                                        <input type="text" name="phone" placeholder='<?php echo e(__("index.phone_placeholder")); ?>' class="form-control" />


                                    </div>



                                    <!-- <p class="mb10">Eget scelerisque adipiscing varius mollis dis sed</p> -->



                                    <input type="submit" class="btn btn-primary ende" value="<?php echo e(__('index.send')); ?>" />



                                </form>



                            </div>



                        </div>



                        



                        



                    </div>



                </div>



            </div>



            <div class="footer-copyright" style="position: relative;">



                <div class="container">



                    <div class="row">



                        <div class="col-md-12" style="text-align: center;">

                                 <p>جميع الحقوق محفوظه  <span style="color: #025D8C;" > رويال سوق  </span> </p> 



                            <p>Copyright © 2020 <span style="color: #025D8C;" > Royal Sooq </span> All Rights Reserved</p> 



                        </div>



                    </div>



                    



                </div>



                <!-- Button to move Up -->



                <span  class="up" id="upp" style="border-radius:50%;position: absolute;bottom: 0;right: 0;padding: 15px;;margin: 10px;background-color: #025D8C;">



                    <i class="fa fa-arrow-up fa-2x" style="color: white;"></i>



                </span>

<script>

  var scrolled = false;

function updateScroll(){

    if(!scrolled){

        var element = document.getElementById("#upp");

        element.scrollTop = element.scrollHeight;

    }

}



$("#upp").on('scroll', function(){

    scrolled=true;

});

</script>

            </div>



        </footer><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/layouts/inc-footer.blade.php ENDPATH**/ ?>