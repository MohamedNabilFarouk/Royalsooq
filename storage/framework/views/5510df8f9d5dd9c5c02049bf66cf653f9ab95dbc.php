<?php $__env->startSection('title'); ?>
Categories
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-3" style="margin-bottom:30px;">
        <a 
            href="<?php echo e(route('admin.category.create')); ?>"
            class="btn btn-primary">
            <a-icon type="plus"></a-icon>
            <?php echo e(__('avored::system.btn.create')); ?>

        </a>
    </div>
</div>



<div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                                <table id="example" class="table table-report sm:mt-2">
        <thead>
            <tr>
                <th>Name</th>
                <th>Name Ar</th>
                <th>image</th>
                <th>Type</th>
                <th>Action</th>
                  
                
            </tr>
            
        </thead>
        <tbody>
           
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($c->name); ?></td>
                <td><?php echo e($c->name_ar); ?></td>
                <td><img src="<?php echo e(asset('storage/'. $c->image)); ?>" style="width:50%;border-radius: 50%;"></td>
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
                <a class="flex items-center mr-3" href="<?php echo e(route('admin.category.edit', $c->id)); ?>"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                  <!-- <a href="<?php echo e(route('admin.category.edit', $c->id)); ?>" class="btn btn-info">edit</a> -->
                  <!-- <form action="<?php echo e(route('admin.category.destroy', $c->id)); ?>" method="POST">
                  <?php echo e(method_field('DELETE')); ?>

                  <?php echo csrf_field(); ?>
                  <a class="flex items-center text-theme-6" href="#" onclick="this.parentNode.submit()"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                  </form>  -->
                  </td>
            </tr>
            <?php $__currentLoopData = $c->subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="display: inline;">
                <td><?php echo e($s->name); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
       
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('avored::mylayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/catalog/category/index.blade.php ENDPATH**/ ?>