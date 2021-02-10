<?php $__env->startSection('content'); ?>
<style>
    iframe{
    width:100%; !important;
    height:250px ; !important;
}
</style>
<div class="container">
<ul class="breadcrumb">
                    <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('index.home')); ?></a>
                    </li>
                    <li><a href="#"><?php echo e(__('index.contact_us')); ?></a>
                    </li>
                </ul>
            <div class="row row-wrap">
                <div class="col-md-6">
                    <?php echo $map[0]->english; ?>

                </div>
                <div class="col-md-3">
                    <form name="contactForm"  class="contact-form" method="post" action="<?php echo e(route('contactus.store')); ?>">
                    <?php echo csrf_field(); ?>   
                        <fieldset>
                            <div class="form-group">
                                <label>Name</label>
                                <div class="bg-warning form-alert" id="form-alert-name">Please enter your name</div>
                                <input class="form-control" id="name" type="text" name="name" placeholder="Enter Your name here" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <div class="bg-warning form-alert" id="form-alert-email">Please enter your valid E-mail</div>
                                <input class="form-control" id="email" type="text" name="email" placeholder="You E-mail Address" />
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <div class="bg-warning form-alert" id="form-alert-message">Please enter message</div>
                                <textarea class="form-control" id="message" name="message" placeholder="Your message"></textarea>
                            </div>
                            <div class="bg-warning alert-success form-alert" id="form-success">Your message has been sent successfully!</div>
                            <div class="bg-warning alert-error form-alert" id="form-fail">Sorry, error occured this time sending your message</div>
                            <button  type="submit" class="btn btn-primary">Send Message</button>
                        </fieldset>
                    </form>
                </div>
                <div class="col-md-3">
                    <h5>Contact Info</h5>
                    <p><?php echo $contact_info[0]->english; ?></p>
                    <ul class="list">
                        <li><i class="icon-phone"></i> Phone 1 : <?php echo $phone1[0]->english; ?></li>
                        <li><i class="icon-phone"></i> Phone 2 : <?php echo $phone2[0]->english; ?></li>
                        <li><i class="icon-envelope"></i> E-mail: <a href="#"><?php echo $cs_email[0]->english; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="gap gap-small"></div>
        </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/royal2.royalsooq.com/resources/views/blades/contactus.blade.php ENDPATH**/ ?>