<?php $__env->startSection('title'); ?>
Site Data
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<style>
.max-lines {
  display: block;/* or inline-block */
  text-overflow: ellipsis;
  word-wrap: break-word;
  overflow: hidden;
  max-height: 3.6em;
  line-height: 1.8em;
}

</style>



<div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                                <table id="example" class="table table-report sm:mt-2">
        <thead>
            
        <tr>
        <th>Key</th>
            <th>English</th>
                <th>Arabic</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
           
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($d->code); ?></td>
                
                <td><p class="max-lines" style="width: 180px; overflow:hidden"><?php echo e($d->english); ?></p></td>
                <td><p class="max-lines" style="width: 180px;"><?php echo e($d->arabic); ?></p></td>
                
                <td>
                <a class="flex items-center mr-3" href="<?php echo e(route('admin.statics.edit',$d->id)); ?>"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                  <!-- <a href="<?php echo e(route('admin.statics.edit',$d->id)); ?>" class="btn btn-info">edit</a> -->
                  </td>
                 
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        
</table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('avored::mylayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/catalog/statics/index.blade.php ENDPATH**/ ?>