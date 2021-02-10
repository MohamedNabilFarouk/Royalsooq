<?php $__env->startSection('meta_title'); ?>
    Slider
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    <h3>Slider</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a-row type="flex" class="mb-1" justify="end">
    <a-col>
        <a 
            href="<?php echo e(route('admin.slider.create')); ?>"
            class="ant-btn ant-btn-primary">
            <a-icon type="plus"></a-icon>
            <?php echo e(__('avored::system.btn.create')); ?>

        </a>
    </a-col>
</a-row>



<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            <th>Title</th>
                <th>Description</th>
                <th>image</th>
               
                <th>Edit</th>
                   <th>Delete</th>
              
                
            </tr>
        </thead>
        <tbody>
           
            <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($s->title); ?></td>
                <td><?php echo e($s->des); ?></td>
                <td><img src="<?php echo e(asset($s->image)); ?>" style="width:20%"></td>
                <td>
                  <a href="<?php echo e(route('admin.slider.edit', $s->id)); ?>" class="btn btn-info">edit</a>
                  </td>
                  <td>
                  <form action="<?php echo e(route('admin.slider.delete', $s->id)); ?>" method="POST">
                  <?php echo e(method_field('DELETE')); ?>

                  <?php echo csrf_field(); ?>
                  <input class="btn btn-danger" type="submit" name="submit" value="Delete">
                  </form> 
                  </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>image</th>
               
                <th>Edit</th>
                   <th>Delete</th>
            </tr>
        </tfoot>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('avored::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/catalog/slider/index.blade.php ENDPATH**/ ?>