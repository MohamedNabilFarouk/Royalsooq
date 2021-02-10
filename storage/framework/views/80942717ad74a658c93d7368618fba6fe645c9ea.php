<?php $__env->startSection('title'); ?>
Ads Images
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>




<div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                                <table id="example" class="table table-report sm:mt-2">
        <thead>
            
        <tr>
        <th>Position</th>
            <th>image</th>
                <th>Link</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
           
            <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="intro-x">
            <td><?php echo e($s->code); ?></td>
                
                <td><img src="<?php echo e(asset( $s->image)); ?>" style="width:20%;border-radius: 50%;"></td>
                <td><?php echo e($s->link); ?></td>
                
                <td class="table-report__action w-56">
                <a class="flex items-center mr-3" href="<?php echo e(route('admin.ads.edit',$s->id)); ?>"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                  <!-- <a href="<?php echo e(route('admin.ads.edit',$s->id)); ?>" class="btn btn-info">edit</a> -->
                  </td>
                 
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
       
</table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('avored::mylayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/catalog/ads/index.blade.php ENDPATH**/ ?>