







<?php $__env->startSection('content'); ?>



<ul class="breadcrumb">

                    <li><a href="/"><?php echo e(__("index.home")); ?></a>

                    </li>

                    <li><a href="<?php echo e(route('account.dashboard')); ?>"><?php echo e(__("index.account")); ?></a>

                    </li>

                    <li class="active"><?php echo e(__("index.complaint")); ?></li>

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

      <div class="row">

          <div class="col-md-12 ">

            <div class="well well-sm">

              <form class="form-horizontal" action="<?php echo e(route('add.complaint')); ?>" method="post">

              <fieldset>

                <legend class="text-center"><?php echo e(__("index.send")); ?>  <?php echo e(__("index.complaint")); ?> <?php echo e(__("index.or")); ?> <?php echo e(__("index.suggestion")); ?></legend>

        <?php echo csrf_field(); ?>



                <!-- phone input-->

                <div class="form-group">

                  <label class="col-md-3 control-label" for="name"><?php echo e(__("index.phone")); ?>  </label>

                  <div class="col-md-9">

                    <input id="name" name="phone" type="text" placeholder='<?php echo e(__("index.phone")); ?>' class="form-control">

                  </div>

                </div>

        

                <!-- Email input-->

                <div class="form-group">

                  <label class="col-md-3 control-label" for="email"><?php echo e(__("index.email")); ?>  </label>

                  <div class="col-md-9">

                    <input id="email" name="email" type="text" placeholder="<?php echo e(__('index.email')); ?>  " class="form-control">

                  </div>

                </div>

                

                  <!-- subject input-->

                  <div class="form-group">

                  <label class="col-md-3 control-label" for="name"><?php echo e(__("index.subject")); ?>  </label>

                  <div class="col-md-9">

                    <input id="name" name="subject" type="text" placeholder="<?php echo e(__('index.subject')); ?>" class="form-control">

                  </div>

                </div>

                <!-- Message body -->

                <div class="form-group">

                  <label class="col-md-3 control-label" for="message"><?php echo e(__("index.message")); ?>  </label>

                  <div class="col-md-9">

                    <textarea class="form-control" id="message" name="message" placeholder="<?php echo e(__('index.message')); ?>" rows="5"></textarea>

                  </div>

                </div>

        

                <!-- Form actions -->

                <div class="form-group">

                  <div class="col-md-12 text-right">

                    <button type="submit" name="submit" class="btn btn-primary btn-lg"><?php echo e(__("index.send")); ?>  </button>

                  </div>

                </div>

              </fieldset>

              </form>

            </div>

          </div>

      </div>

    </div>

  </div>

</div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/blades/complaint.blade.php ENDPATH**/ ?>