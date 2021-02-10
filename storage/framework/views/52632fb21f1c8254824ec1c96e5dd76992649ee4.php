<?php $__env->startSection('title'); ?>
Advertisers
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>




<div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                                <table id="example" class="table table-report sm:mt-2">
                                            <thead>
            
        <tr>
                
                <th>Name</th>
                 <th>email</th>
                <th>image</th>
                <th>phone</th>
                <th>Account Type</th>
                <th>ADs</th>
                <th>Date</th>

                <!-- <th>Action</th> -->

                
            </tr>
        </thead>
        <tbody>
           
            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($s->name); ?></td>
               
                <td><?php echo e($s->email); ?></td>
                <td><img src="<?php echo e(asset('/storage/' . $s->image)); ?>" style="width:20%"></td> 
                <td><?php echo e($s->phone); ?></td>
                <td><?php if($s->seller==1): ?>Seller <?php else: ?> Personal <?php endif; ?> </td>
                <td><?php echo e(count($s->products)); ?></td>
                <td><?php echo e($s->created_at); ?></td>
                <!-- <td>
                  <form action="<?php echo e(route('admin.users.delete',$s->id)); ?>" method="POST">
                  <?php echo e(method_field('DELETE')); ?>

                  <?php echo csrf_field(); ?>
                  <a class="flex items-center text-theme-6" href="#" onclick="this.parentNode.submit()"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                  </form> 
                  </td> -->
                  
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
       
</table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('avored::mylayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/catalog/users/index.blade.php ENDPATH**/ ?>