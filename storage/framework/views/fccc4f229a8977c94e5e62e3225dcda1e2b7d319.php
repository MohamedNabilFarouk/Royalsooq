<?php $__env->startSection('meta_title'); ?>
Static Data
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
<h3>Static Data<h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>




<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            
        <tr>
        <th>Key</th>
            <th>English</th>
                <th>Arabic</th>
                <th>Edit</th>
                
            </tr>
        </thead>
        <tbody>
           
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($d->code); ?></td>
                
                <td><?php echo e($d->english); ?></td>
                <td><?php echo e($d->arabic); ?></td>
                
                <td>
                  <a href="<?php echo e(route('admin.statics.edit',$d->id)); ?>" class="btn btn-info">edit</a>
                  </td>
                 
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
            <tr>
            <th>Key</th>
            <th>English</th>
                <th>Arabic</th>
                <th>Edit</th>
                
                  
            </tr>
        </tfoot>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('avored::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/catalog/statics/index.blade.php ENDPATH**/ ?>