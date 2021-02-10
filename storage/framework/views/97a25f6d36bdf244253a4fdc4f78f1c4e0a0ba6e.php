<?php $__env->startSection('meta_title'); ?>
    <?php echo e(__('avored::catalog.product.index.title')); ?>: AvoRed E commerce Admin Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    <?php echo e(__('avored::catalog.product.index.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a-row type="flex" class="mb-1" justify="end">
    <!-- <a-col>
        <a 
            href="<?php echo e(route('admin.product.create')); ?>"
            class="ant-btn ant-btn-primary">
            <a-icon type="plus"></a-icon>
            <?php echo e(__('avored::system.btn.create')); ?>

        </a>
    </a-col> -->
</a-row>
<!-- <a-row type="flex" justify="center">
    <a-col :span="24">        
        <product-table inline-template base-url="<?php echo e(asset(config('avored.admin_url'))); ?>">
            <a-table :columns="columns" row-key="id" :data-source="<?php echo e($products); ?>">
                <span slot="action" slot-scope="text, record">
                    
                    <a :href="getEditUrl(record)">
                        <a-icon type="edit"></a-icon>
                    </a>
                    <a :href="getDeleteUrl(record)" v-on:click.prevent="deleteProduct(record)">
                        <a-icon type="delete"></a-icon>
                    </a>
                </span>
            </a-table>
        </product-table>
    </a-col>
</a-row> -->


<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>image</th>
                <th>Category</th>
                <th>SubCategory</th>
                <th>Type</th> <!-- free or sponsored -->
                <th>Position</th><!-- position in homepage -->
                <th>Approved</th>
                <th>show</th>
                <th> Change Status</th>
                <th>Delete</th>
                
            </tr>
        </thead>
        <tbody>
           
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td> <?php if($p->sponsored == 1): ?><img src="<?php echo e(asset('img/star.png')); ?>" style="width:30%"> <br><?php endif; ?> <?php echo e($p->name); ?></td>
                <td><img src="<?php echo e($p->main_image_url); ?>" style="width:100%"></td>
                <td><?php echo e($p->categories->name); ?></td>
                <td><?php echo e($p->subcategory->name); ?></td>
                <td>
                <?php if($p->free == 1): ?>
                    Free
                <?php elseif($p->sponsored == 1 ): ?>
                    Sponsored
                <?php else: ?> 
                    Not defiend        
                <?php endif; ?>
                </td>
                <td><?php echo e($p->ad_position); ?></td>
                <td>
                <?php if($p->approved == 1): ?>
                    Approved
                <?php else: ?> 
                    Pending        
                <?php endif; ?>
                </td>
                <td>
                  <a href="<?php echo e(route('admin.product.show',$p->id)); ?>" class="btn btn-success">Show</a>
                
                  </td>
                <td>
                  <!-- <a href="<?php echo e(route('admin.product.edit',$p->id)); ?>" class="btn btn-info">edit</a> -->
                  <a href="<?php echo e(route('admin.product.approve',$p->id)); ?>" class="btn btn-info">Approve</a>
                
                  </td>
                  <td>
                  <form action="<?php echo e(route('admin.product.destroy',$p->id)); ?>" method="POST">
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
                <th>SubCategory</th>
                <th>Type</th> <!-- free or sponsored -->
                <th>Position</th><!-- position in homepage -->
                <th>Approved</th>
                <th>show</th>

                <th>Change Status</th>
                   <th>Delete</th>
            </tr>
        </tfoot>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('avored::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/royal2.royalsooq.com/vendor/avored/framework/src/../resources/views/catalog/product/index.blade.php ENDPATH**/ ?>