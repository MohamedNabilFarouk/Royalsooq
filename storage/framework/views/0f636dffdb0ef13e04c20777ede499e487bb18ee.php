<footer class="main" id="main-footer">

            <div class="footer-top-area">

                <div class="container">

                    <div class="row row-wrap" style="align-items: center;">

                        <div class="col-md-3">

                            <a href="index-2.html">

                                <img src="<?php echo e(asset('img/logos/Royal Sooq.png')); ?>" alt="logo" title="logo" class="logo" style="width: 100%;">

                            </a>

                            <ul class="list list-social">

                                <li>

                                    <a class="fa fa-facebook box-icon" href="#" data-toggle="tooltip" title="Facebook"></a>

                                </li>

                                <li>

                                    <a class="fa fa-twitter box-icon" href="#" data-toggle="tooltip" title="Twitter"></a>

                                </li>

                                <li>

                                    <a class="fa fa-flickr box-icon" href="#" data-toggle="tooltip" title="Flickr"></a>

                                </li>

                                <li>

                                    <a class="fa fa-linkedin box-icon" href="#" data-toggle="tooltip" title="LinkedIn"></a>

                                </li>

                                <li>

                                    <a class="fa fa-tumblr box-icon" href="#" data-toggle="tooltip" title="Tumblr"></a>

                                </li>

                            </ul>

                            <p><?php echo e($about[0]->english); ?></p>

                        </div>

                        <div class="col-md-3" style="text-align: center;color: white;">



                            <h3 style="background-color:#efc718;border-radius: 5px;width: 76%;margin: 5px auto;padding: 16px;color: black;"> <?php echo e(__('index.contact_us')); ?> </h3>

                            <br>

                            <h5><?php echo e(__('index.questetions')); ?></h5>

                            <br>

                            <h3> <i class="fa fa-phone" aria-hidden="true"></i> <?php echo e($phone1[0]->english); ?></h3>

                            <br>

                            <h3> <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo e($phone2[0]->english); ?> </h3>

                            

                        </div>

                        <div class="col-md-3">

                        <a href="<?php echo e($footer[0]->link); ?>" target="_blank"> <img src="<?php echo e(asset($footer[0]->image)); ?>"></a>

                        </div>

                        <div class="col-md-3">

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

                                    </div>

                                    <!-- <p class="mb10">Eget scelerisque adipiscing varius mollis dis sed</p> -->

                                    <input type="submit" class="btn btn-primary" value="<?php echo e(__('index.send')); ?>" />

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

                            <p>Copyright © 2020 <span style="color: #025D8C;" > Royal Sooq </span> All Rights Reserved</p> 

                        </div>

                    </div>

                    

                </div>

                <!-- Button to move Up -->

                <span  class="up" style="border-radius:50%;position: absolute;bottom: 0;right: 0;padding: 10px;margin: 10px;background-color: #025D8C;">

                    <i class="fa fa-arrow-up fa-2x" style="color: white;"></i>

                </span>

            </div>

        </footer><?php /**PATH /home/o12s5ul8n01l/public_html/royal2.royalsooq.com/resources/views/layouts/inc-footer.blade.php ENDPATH**/ ?>