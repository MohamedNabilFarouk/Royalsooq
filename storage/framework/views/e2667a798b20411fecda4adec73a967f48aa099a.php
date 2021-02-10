<?php $__env->startSection('title'); ?>
Cars
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- <a-row type="flex" class="mb-1" justify="end">
    <a-col>
        <a 
            href="<?php echo e(route('admin.category.create')); ?>"
            class="ant-btn ant-btn-primary">
            <a-icon type="plus"></a-icon>
            <?php echo e(__('avored::system.btn.create')); ?>

        </a>
    </a-col>
</a-row> -->



<div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                                <table id="example" class="table table-report sm:mt-2">
        <thead>
            <tr>
                <th>Name</th>
                <th>Name Ar</th>
                <th>Model</th>
                <th>Model Ar</th>
                <th>Action</th>
                
            </tr>
            
        </thead>
        <tbody>
           
            <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($c->make); ?></td>
                <td><?php echo e($c->make_ar); ?></td>
                <td><?php echo e($c->model); ?></td>
                <td><?php echo e($c->model_ar); ?></td>               
                 
                
                <td>
                  <!-- <a href="<?php echo e(route('admin.cars.edit', $c->id)); ?>" class="btn btn-info">edit</a>
                  </td>
                  <td> -->
                <a class="flex items-center mr-3" href="<?php echo e(route('admin.cars.edit', $c->id)); ?>"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>

                  <form action="<?php echo e(route('admin.cars.delete', $c->id)); ?>" method="POST">
                  <?php echo e(method_field('DELETE')); ?>

                  <?php echo csrf_field(); ?>
                  <a class="flex items-center text-theme-6" href="#" onclick="this.parentNode.submit()"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>

                  </form> 
                  </td>
            </tr>
           
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
       
    </table>
</div>
    <?php echo e($cars->appends(Request::except('token'))->links()); ?> 

    <script>
    $(document).ready(function() {
    $('#example').DataTable( {
        searching: false, paging: false, info: false
    
    } );
} );
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('avored::mylayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/catalog/cars/index.blade.php ENDPATH**/ ?>