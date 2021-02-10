<?php $__env->startSection('title'); ?>
SubCategories
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-3" style="margin-bottom:30px;">
        <a 
            href="<?php echo e(route('admin.subcategory.create')); ?>"
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
                <th>Category</th>
                
                   <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <tr class="bg-warning"><th><?php echo e($c->name); ?></th></tr>
            <?php $__currentLoopData = $c->subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <tr>
                <td><?php echo e($s->name); ?></td>
                <td><?php echo e($s->name_ar); ?></td>
                <td><img src="<?php echo e(asset('storage/'. $s->image)); ?>" style="width:20%;border-radius: 50%;"></td>
                <td><?php echo e($s->category->name ?? ''); ?></td>
                
                <td>
                  <!-- <a href="<?php echo e(route('admin.subcategory.edit',$s->id)); ?>" class="btn btn-info">edit</a> -->
                <a class="flex items-center mr-3" href="<?php echo e(route('admin.subcategory.edit',$s->id)); ?>"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                  
                  <!-- <form action="<?php echo e(route('admin.subcategory.delete',$s->id)); ?>" method="POST">
                  <?php echo e(method_field('DELETE')); ?>

                  <?php echo csrf_field(); ?>
                  <a class="flex items-center text-theme-6" href="#" onclick="this.parentNode.submit()"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>

                  </form>  -->
                  </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    
        
</table>

</div>

<!-- <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>image</th>
                <th>Category</th>
                <th>Edit</th>
                   <th>Delete</th>
                
            </tr>
        </thead>
        <tbody>
           
            <?php $__currentLoopData = $sub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($s->name); ?></td>
                <td><img src="<?php echo e(asset('storage/'. $s->image)); ?>" style="width:20%"></td>
                <td><?php echo e($s->category->name ?? ""); ?></td>
                
                <td>
                  <a href="<?php echo e(route('admin.subcategory.edit',$s->id)); ?>" class="btn btn-info">edit</a>
                  </td>
                  <td>
                  <form action="<?php echo e(route('admin.subcategory.delete',$s->id)); ?>" method="POST">
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
            <th>Name</th>
                <th>image</th>
                <th>Category</th>
                <th>Edit</th>
                   <th>Delete</th>
            </tr>
        </tfoot>
</table> -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('avored::mylayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/catalog/subcategory/index.blade.php ENDPATH**/ ?>