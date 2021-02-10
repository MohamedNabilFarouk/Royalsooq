<?php $__env->startSection('breadcrumb'); ?>
<a-breadcrumb style="margin: 16px 0">
    <a-breadcrumb-item>
      <a href="<?php echo e(route('home')); ?>" title="home">
        Home
      </a>
    </a-breadcrumb-item>
    <a-breadcrumb-item>
      <a href="<?php echo e(route('account.dashboard')); ?>" title="user dashboard">
        User Dashboard
      </a>
    </a-breadcrumb-item>

    <a-breadcrumb-item>
        Complaint
    </a-breadcrumb-item>
</a-breadcrumb>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
      <div class="col-md-12 ">
        <div class="well well-sm">
          <form class="form-horizontal" action="<?php echo e(route('add.complaint')); ?>" method="post">
          <fieldset>
            <legend class="text-center">Send Your Complaint Or Suggestion</legend>
    <?php echo csrf_field(); ?>

             <!-- phone input-->
             <div class="form-group">
              <label class="col-md-3 control-label" for="name">Phone</label>
              <div class="col-md-9">
                <input id="name" name="phone" type="text" placeholder="Your Phone" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
            
              <!-- subject input-->
              <div class="form-group">
              <label class="col-md-3 control-label" for="name">Subject</label>
              <div class="col-md-9">
                <input id="name" name="subject" type="text" placeholder="Subject" class="form-control">
              </div>
            </div>
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" name="submit" class="btn btn-primary btn-lg">Send</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\royal_git\resources\views/blades/complaint.blade.php ENDPATH**/ ?>