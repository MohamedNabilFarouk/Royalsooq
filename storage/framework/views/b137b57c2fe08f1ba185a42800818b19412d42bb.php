
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

                               

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            
        <tr>
            <th>Keyword</th>
             <th><?php echo e(__('index.at')); ?></th>
                <th><?php echo e(__('index.search')); ?></th>
                <th><?php echo e(__('index.delete')); ?></th>

                
            </tr>
        </thead>
        <tbody>
           
            <?php $__currentLoopData = $search; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
           
           
           
                <td><?php echo e($s->search); ?></td>
                <td><?php echo e($s->created_at->diffForHumans()); ?></td>
                <td>
                <form action="<?php echo e(url('/Search')); ?>" method="get">
                  
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="name" value="<?php echo e($s->search); ?>">
                  <input type="hidden" name="category" value="null">
                  <input class="btn btn-info" type="submit" name="submit" value="<?php echo e(__('index.search')); ?>">
                  </form> 
                  </td>
                 
                  <td>
                <form action="<?php echo e(route('delete.search',$s->id)); ?>" method="POST">
                  <?php echo e(method_field('DELETE')); ?>

                  <?php echo csrf_field(); ?>
                  <input class="btn btn-danger" type="submit" name="submit" value="<?php echo e(__('index.delete')); ?>">
                  </form> 
                  </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
            <tr>
            <th>Keyword</th>
                 <th><?php echo e(__('index.at')); ?></th>
                <th><?php echo e(__('index.search')); ?></th>
                <th><?php echo e(__('index.delete')); ?></th>

                
            </tr>
        </tfoot>
</table>
</div>

                              </a-card>


           </div>









      </div></div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/blades/savedSearch.blade.php ENDPATH**/ ?>