<?php $__env->startSection('content'); ?>


<ul class="breadcrumb">

                    <li><a href="/"><?php echo e(__('index.home')); ?></a>

                    </li>

                    <li><a href="<?php echo e(route('account.dashboard')); ?>"><?php echo e(__('index.account')); ?></a>


                    </li>

                    <li class="active"><?php echo e(__('index.inbox')); ?></li>

</ul>



<div class="container">

      <div class="row">

            <div class="col-md-3" >

                <div id="app">



                      

                      <avored-layout inline-template>

                                     <div>



                                      <a-layout id="components-layout-demo-top" class="layout">



                                          <!-- <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->







                                          <a-layout-content style="padding: 0 10px">



                                              <?php echo $__env->make('partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



                                              <a-layout style="padding: 24px 0">



                                                <?php if(auth()->guard()->check()): ?>



                                                  <a-layout-sider width="100%">



                                                  <?php echo $__env->make('partials.account-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



                                                  </a-layout-sider>



                                                  <?php endif; ?>



                                               

                                              </a-layout>



                                              </a-layout-content>



                                          



                                          <!-- <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->



                                            </a-layout>



                                      </div>            

                      

                      </avored-layout>

                </div>

            </div>

            

            

            <div class='col-md-9' style="  background-color: #f5f5f5;

                padding: 2%;

                margin-top: 0px;

                border: #e2e2e2 1px solid;">

<a-card title="My Ads" >

<h3><?php echo e(__('index.s_from')); ?>:</h3><h4><?php echo e($reply->user->email); ?> </h4>  
<h3><?php echo e(__('index.item')); ?>:</h3><h4><?php echo e($reply->product->name); ?></h4>  
<h3><?php echo e(__('index.subject')); ?>:</h3><h4><?php echo e($reply->subject); ?></h4>  
<h3><?php echo e(__('index.message')); ?>:</h3><h4><?php echo e($reply->message); ?></h4>    

<hr>


<h1 class="text-center"><?php echo e(__('index.reply')); ?></h1>
                    <form role="form" action="<?php echo e(route('send.chat.message')); ?>" method="post" id="login-form" autocomplete="off">
                       <?php echo csrf_field(); ?>
                       <input type="hidden" name="seller_id" value="<?php echo e($reply->user->id); ?>">
                       <input type="hidden" name="item_id" value="<?php echo e($reply->product->id); ?>">
                       <div class="form-group">
                            <label for="key" class="sr-only"><?php echo e(__('index.subject')); ?></label>
                            <input type="text" name="subject" class="form-control" placeholder="<?php echo e(__('index.subject')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only"><?php echo e(__('index.message')); ?></label>
                            <textarea name="message" class="form-control" placeholder="<?php echo e(__('index.message')); ?>"></textarea>
                        </div>
                       
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="<?php echo e(__('index.send')); ?>">
                    </form>


</div>

                              </a-card>


           </div>









      </div></div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/blades/showAndReply.blade.php ENDPATH**/ ?>