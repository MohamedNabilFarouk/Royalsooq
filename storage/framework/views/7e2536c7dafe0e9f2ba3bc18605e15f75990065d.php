<?php $__env->startSection('title'); ?>
Advertisments
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-3" style="margin-bottom:30px;">
        <a 
            href="<?php echo e(route('admin.product.create')); ?>"
            class="btn btn-primary">
            <a-icon type="plus"></a-icon>
            <?php echo e(__('avored::system.btn.create')); ?>

        </a>
    </div>
</div>

<form class="form-inline" action="<?php echo e(route('admin.product.filter')); ?>" method="get">
    <?php echo csrf_field(); ?>
  <div class="form-group col-md-3">
    <input type="text" name ="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="search">
    
  </div>
  <div class="form-group col-md-2">
      <button type="submit" class="btn btn-success">Search</button>
  </div>
</form>
<form method="post" action="<?php echo e(route('admin.product.approve.all')); ?>">
            <button tybe="submit" class="btn btn-info">Approve selected</button>
            <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                                <table id="example" class="table table-report sm:mt-2">
        <thead>
        <tr>
            <th>
                    Select to Approve
            </th>
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
          
            <td>
           
            <?php echo csrf_field(); ?>
            <input type="checkbox" id="approve" name="product_id[]" value="<?php echo e($p->id); ?>">
            </td>
            </form>
                <td style="width: 180px; overflow: hidden;"> <?php if($p->sponsored == 1): ?><img src="<?php echo e(asset('img/star.png')); ?>" style="width:30%"> <br><?php endif; ?> <?php echo e($p->name); ?></td>
                <td><img src="<?php echo e($p->main_image_url); ?>" style="width:100%"></td>
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
                  <a href="<?php echo e(route('admin.product.approve',$p->id)); ?>" class="btn btn-info">Approve</a>
                
                  </td>
                  <td>
                  <a href="<?php echo e(route('admin.product.show',$p->id)); ?>" class="flex items-center text-theme-6"><i data-feather="check-square" class="w-4 h-4 mr-1"></i>Show</a>
                  <form action="<?php echo e(route('admin.product.destroy',$p->id)); ?>" method="POST">
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
<?php echo e($products->appends(Request::except('token'))->links()); ?> 
<script>
    $(document).ready(function() {
    $('#example').DataTable( {
        searching: false, paging: false, info: false
    
    } );
} );
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('avored::mylayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/catalog/product/filter.blade.php ENDPATH**/ ?>