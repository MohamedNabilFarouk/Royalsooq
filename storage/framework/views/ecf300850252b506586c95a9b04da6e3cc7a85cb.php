<?php $__env->startSection('header'); ?>

<!-- Header  -->
<nav class="navbar navbar-expand-lg bg-header">
    <div class="container-fluid justify-content-start">
        <a href="<?php echo e(url('/account')); ?>" class="btn">
            <i class="material-icons">arrow_back</i>
        </a>
        <div class="navbar-heading m-l-10">
            <h4><?php echo e(__('index.inbox')); ?></h4>
        </div>
    </div>
</nav>
<!-- .Header  -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<!-- Content  -->
<div id="content" class="noFooter" style='margin-top:50px;'>
    <!-- Content Wrap  -->
    <div class="content-wrap">
        <?php $__currentLoopData = $inbox; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('get.reply.chat', $i->id)); ?>">
        <div class="chat-section">
            <div class="chat-section-item">
                <div class="profile">
                    <a href="<?php echo e(asset('/storage/' . $i->user->image)); ?>" class="left position-relative">
                        <div class="user-image">
                            <img src="<?php echo e(asset('/storage/' . $i->user->image)); ?>" alt="profile">
                        </div>
                        <i class="material-icons lens active">lens</i>
                    </a>
                    <a href="<?php echo e(route('get.reply.chat', $i->id)); ?>" class="right p-l-10 line-h1">
                        <div class="name col-text"><?php echo e($i->user->name); ?></div>
                        <small class="col-text"><?php echo e($i->message); ?></small>
                    </a>

                    <div class="date"><span> <?php echo e($i->created_at); ?></span>
                        <form action="<?php echo e(route('delete.chat',$i->id)); ?>" method="POST" id='delForm'>
                            <?php echo e(method_field('DELETE')); ?>

                            <?php echo csrf_field(); ?>
                            <a href="#" onclick="document.getElementById('delForm').submit()"><button class="btn btn-icon" style='color:gray'><i data-feather="trash-2"></i></button></a>
                        </form>
                        </div>
                </div>
            </div>
        </div>
    </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!-- .Content  -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts_mobile.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/blades_mobile/inbox_mobile.blade.php ENDPATH**/ ?>