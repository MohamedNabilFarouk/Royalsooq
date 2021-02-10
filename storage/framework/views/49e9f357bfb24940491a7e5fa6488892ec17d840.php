<?php $__env->startSection('breadcrumb'); ?>
<a-breadcrumb style="margin: 16px 0">
    <a-breadcrumb-item>
      <a href="<?php echo e(route('home')); ?>" title="home">
        <?php echo e(__('Home')); ?>

      </a>
    </a-breadcrumb-item>
    <a-breadcrumb-item>
        <?php echo e(__('User Dashboard')); ?>

    </a-breadcrumb-item>

    <a-breadcrumb-item>
        <?php echo e(__('My Ads')); ?>

    </a-breadcrumb-item>
</a-breadcrumb>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
     <a-card title="My Ads" >
      <a href="<?php echo e(route('free.ads')); ?>" slot="extra">
        <button class="btn btn-success">Add New Ad +</button>
      </a>
     
      <table class="table" >
                                <thead>
                                    <tr>
                              
                                    <th scope="col">image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $userFreeAds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                                                        
                                    <td><img src="<?php echo e($o->main_image_url); ?>" style="width:10%" alt="<?php echo e($o->name); ?>"></td>
                                    <td><?php echo e($o->name); ?></td>
                                    <td><?php echo e($o->description); ?></td>
                                    <td><?php echo e($o->price); ?></td>
                                    <td> 
                                            <form action="<?php echo e(route('user.deleteProduct',$o->id)); ?>" method="POST">
                                            <?php echo e(method_field('DELETE')); ?>

                                            <?php echo csrf_field(); ?>
                                            <input class="btn btn-danger" type="submit" name="submit" value="Delete">
                                            </form> 
                                            <a href="<?php echo e(route('free.ads.edit',$o->id)); ?>" slot="extra"> <button class="btn btn-info">Edit</button></a>
                  
                                    </td>
                                    </tr>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                        <table>            

    </a-card>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\resources\views/blades/userFreeAds.blade.php ENDPATH**/ ?>