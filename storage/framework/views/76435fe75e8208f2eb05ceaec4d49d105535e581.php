<?php $__env->startSection('title'); ?>
Messages
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                                <table id="example" class="table table-report sm:mt-2">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>Message</th>
                                            <th>At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                         <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="intro-x">
            <td><?php echo e($s->name); ?></td>
               
                <td><?php echo e($s->email); ?></td>
                
                <td ><?php echo e($s->message); ?></td>
                <td><?php echo e($s->created_at); ?> </td>
                    <!-- <td>
                  <form action="<?php echo e(route('admin.contact.delete',$s->id)); ?>" method="POST">
                  <?php echo e(method_field('DELETE')); ?>

                  <?php echo csrf_field(); ?>
                  <input class="btn btn-danger" type="submit" name="submit" value="Delete">
                  </form> 
                  </td> -->
                  <td class="table-report__action w-56">
                                                <div class="flex justify-center items-center">
                                                    <!-- <a class="flex items-center mr-3" href="#"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a> -->
                                                    <form action="<?php echo e(route('admin.contact.delete',$s->id)); ?>" method="POST">
                                                    <?php echo e(method_field('DELETE')); ?>

                                                    <?php echo csrf_field(); ?>
                                                    <a class="flex items-center text-theme-6" href="#" onclick="this.parentNode.submit()"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                    </form>
                                                </div>
                                            </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  
                                    </tbody>
                                </table>
                            </div>
                            

                            <?php $__env->stopSection(); ?>
<?php echo $__env->make('avored::mylayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/catalog/contactus/index.blade.php ENDPATH**/ ?>