<?php $__env->startSection('title'); ?>
Featured Advertisments
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- <div class="row">
    <div class="col-md-3" style="margin-bottom:30px;">
        <a 
            href="<?php echo e(route('admin.product.create')); ?>"
            class="btn btn-primary">
            <a-icon type="plus"></a-icon>
            <?php echo e(__('avored::system.btn.create')); ?>

        </a>
    </div>
</div> -->



            
            <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                                <table id="example" class="table table-report sm:mt-2">
        <thead>
            <tr>
            
                <th>Name</th>
                <th>image</th>
                <th>Category</th>
                <th>SubCategory</th>
                <th>Type</th> <!-- free or sponsored -->
                <th>Status</th>
                <!-- <th>show</th> -->
                <th> Change Status</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
           
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <?php echo csrf_field(); ?>
            
           
                <td style="width: 180px; overflow: hidden;"> <?php if($p->sponsored == 1): ?><img src="<?php echo e(asset('img/star.png')); ?>" style="width:30%"> <br><?php endif; ?> <?php echo e($p->name); ?></td>
                <td><img src="<?php echo e($p->main_image_url); ?>" style="width:20%;border-radius: 50%;"></td>
                <td><?php echo e($p->categories->name ?? ''); ?></td>
                <td><?php echo e($p->subcategory->name ?? ''); ?></td>
                <td>
                <?php if($p->free == 1): ?>
                    Free
                <?php elseif($p->sponsored == 1 ): ?>
                    Sponsored
                <?php else: ?> 
                    Not defiend        
                <?php endif; ?>
                </td>
                <!-- <td><?php echo e($p->ad_position); ?></td> -->
                <td>
                <?php if($p->approved == 1): ?>
                    Approved
                <?php else: ?> 
                    Pending        
                <?php endif; ?>
                </td>
                <!-- <td>
                  <a href="<?php echo e(route('admin.product.show',$p->id)); ?>" class="btn btn-success">Show</a>
                
                  </td> -->
                <td>
                  <!-- <a href="<?php echo e(route('admin.product.edit',$p->id)); ?>" class="btn btn-info">edit</a> -->
                  <a href="<?php echo e(route('admin.product.featured.delete',$p->id)); ?>" class="flex items-center text-theme-6"><i data-feather="check-square" class="w-4 h-4 mr-1"></i>Delete from Featured</a>
                
                  </td>
                  <td>
                  <a href="<?php echo e(route('admin.product.show',$p->id)); ?>" class="flex items-center text-theme-6"><i data-feather="check-square" class="w-4 h-4 mr-1"></i>Show</a>
                  
                  
                  </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
       

</table>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('avored::mylayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/catalog/product/featured.blade.php ENDPATH**/ ?>