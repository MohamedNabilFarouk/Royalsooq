<?php $__env->startSection('meta_title'); ?>
    <?php echo e(__('avored::catalog.category.index.title')); ?>: AvoRed E commerce Admin Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    <?php echo e(__('avored::catalog.category.index.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a-row type="flex" class="mb-1" justify="end">
    <a-col>
        <a 
            href="<?php echo e(route('admin.category.create')); ?>"
            class="ant-btn ant-btn-primary">
            <a-icon type="plus"></a-icon>
            <?php echo e(__('avored::system.btn.create')); ?>

        </a>
    </a-col>
</a-row>



<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Name Ar</th>
                <th>image</th>
                <th>Type</th>
                <th>Edit</th>
                   <th>Delete</th>
                
            </tr>
            
        </thead>
        <tbody>
           
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($c->name); ?></td>
                <td><?php echo e($c->name_ar); ?></td>
                <td><img src="<?php echo e(asset('storage/'. $c->image)); ?>" style="width:20%"></td>
                <td>
                <?php if($c->free == 1): ?>
                    Free
                <?php elseif($c->sponsored == 1 ): ?>
                    Sponsored
                <?php else: ?> 
                    Services        
                <?php endif; ?>
                </td>
                
                <td>
                  <a href="<?php echo e(route('admin.category.edit', $c->id)); ?>" class="btn btn-info">edit</a>
                  </td>
                  <td>
                  <form action="<?php echo e(route('admin.category.destroy', $c->id)); ?>" method="POST">
                  <?php echo e(method_field('DELETE')); ?>

                  <?php echo csrf_field(); ?>
                  <input class="btn btn-danger" type="submit" name="submit" value="Delete">
                  </form> 
                  </td>
            </tr>
            <?php $__currentLoopData = $c->subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($s->name); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Name Ar</th>
                <th>image</th>
                <th>Service</th>
                <th>Free</th>
                <th>Sponsored</th>
                <th>Edit</th>
                   <th>Delete</th>
            </tr>
        </tfoot>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('avored::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/royal2.royalsooq.com/vendor/avored/framework/src/../resources/views/catalog/category/index.blade.php ENDPATH**/ ?>