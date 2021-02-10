<?php $__env->startSection('meta_title'); ?>
    Ads Images
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
<h3>Ads Images<h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>




<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            
        <tr>
        <th>Position</th>
            <th>image</th>
                <th>Link</th>
                <th>Edit</th>
                
            </tr>
        </thead>
        <tbody>
           
            <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($s->code); ?></td>
                
                <td><img src="<?php echo e(asset( $s->image)); ?>" style="width:20%"></td>
                <td><?php echo e($s->link); ?></td>
                
                <td>
                  <a href="<?php echo e(route('admin.ads.edit',$s->id)); ?>" class="btn btn-info">edit</a>
                  </td>
                 
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
            <tr>
            <th>Position</th>
                <th>image</th>
                <th>Link</th>
                <th>Edit</th>
                  
            </tr>
        </tfoot>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('avored::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/catalog/ads/index.blade.php ENDPATH**/ ?>