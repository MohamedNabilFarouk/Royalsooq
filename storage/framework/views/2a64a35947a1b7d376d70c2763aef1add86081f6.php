<?php $__env->startSection('content'); ?>



<ul class="breadcrumb">

                    <li><a href="/">Home</a>

                    </li>

                    <li><a href="<?php echo e(route('account.dashboard')); ?>">account</a>


                    </li>

                    <li class="active">My Ads</li>

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

                                <a href="<?php echo e(route('free.ads')); ?>" slot="extra">

                                  <button class="btn btn-success">Add New Ad +</button>

                                </a>

                              

                                <table class="table" >

                                                          <thead>

                                                              <tr>

                                                        

                                                              <th scope="col">image</th>

                                                              <th scope="col">Name</th>

                                                              <th scope="col">Description</th>

                                                              <th scope="col">Price</th>

                                                              <th scope="col">Action</th>

                                                              </tr>

                                                          </thead>

                                                          <tbody>

                                                          <?php $__currentLoopData = $userFreeAds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                              <tr>

                                                                                                  

                                                              <td><img src="<?php echo e($o->main_image_url); ?>" style="width:10%" alt="<?php echo e($o->name); ?>"></td>

                                                              <td><?php echo e($o->name); ?></td>

                                                              <td><?php echo e($o->description); ?></td>

                                                              <td><?php echo e($o->price); ?></td>

                                                              <td> 

                                                                      <form action="<?php echo e(route('user.deleteProduct',$o->id)); ?>" method="POST">

                                                                      <?php echo e(method_field('DELETE')); ?>


                                                                      <?php echo csrf_field(); ?>

                                                                      <input class="btn btn-danger" type="submit" name="submit" value="Delete">

                                                                      </form> 

                                                                      <a href="<?php echo e(route('free.ads.edit',$o->id)); ?>" slot="extra"> <button class="btn btn-info">Edit</button></a>

                                            

                                                              </td>

                                                              </tr>

                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                          </tbody>

                                                  <table>            



                              </a-card>

           </div>









      </div>

</div>









<?php $__env->stopSection(); ?>








<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\resources\views/blades/userFreeAds.blade.php ENDPATH**/ ?>