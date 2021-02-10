<?php $__env->startSection('content'); ?>

<div id="content" class="noFooter">
    <!-- Content Wrap  -->
    <div class="content-wrap">
        <div class="heading-section mt-0">
            <div class="title col-secondary font-weight-normal">Ad Details</div>
        </div>
<form class="form-horizontal" action="<?php echo e(route('add.complaint')); ?>" method="post">

    <fieldset>

      <legend class="text-center"><?php echo e(__("index.send")); ?>  <?php echo e(__("index.complaint")); ?> <?php echo e(__("index.or")); ?> <?php echo e(__("index.suggestion")); ?></legend>

<?php echo csrf_field(); ?>



      <!-- phone input-->

      <div class="form-group">

        <label class="col-md-3 control-label" for="name"><?php echo e(__("index.phone")); ?>  </label>

        <div class="col-md-9">

          <input id="name" name="phone" type="text" placeholder='<?php echo e(__("index.phone")); ?>' class="form-control">

        </div>

      </div>



      <!-- Email input-->

      <div class="form-group">

        <label class="col-md-3 control-label" for="email"><?php echo e(__("index.email")); ?>  </label>

        <div class="col-md-9">

          <input id="email" name="email" type="text" placeholder="<?php echo e(__('index.email')); ?>  " class="form-control">

        </div>

      </div>



        <!-- subject input-->

        <div class="form-group">

        <label class="col-md-3 control-label" for="name"><?php echo e(__("index.subject")); ?>  </label>

        <div class="col-md-9">

          <input id="name" name="subject" type="text" placeholder="<?php echo e(__('index.subject')); ?>" class="form-control">

        </div>

      </div>

      <!-- Message body -->

      <div class="form-group">

        <label class="col-md-3 control-label" for="message"><?php echo e(__("index.message")); ?>  </label>

        <div class="col-md-9">

          <textarea class="form-control" id="message" name="message" placeholder="<?php echo e(__('index.message')); ?>" rows="5"></textarea>

        </div>

      </div>



      <!-- Form actions -->

      <div class="form-group">

        <div class="col-md-12 text-right">

          <button type="submit" name="submit" class="btn btn-primary btn-lg"><?php echo e(__("index.send")); ?>  </button>

        </div>

      </div>

    </fieldset>

    </form>
</div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts_mobile.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/blades_mobile/complaint_mobile.blade.php ENDPATH**/ ?>