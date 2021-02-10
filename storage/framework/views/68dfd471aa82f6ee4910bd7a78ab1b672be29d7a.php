

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
        Order details
    </a-breadcrumb-item>
</a-breadcrumb>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<a-row type="flex" class="mb-1" justify="start">
    <a-col>
        <h1><?php echo e(__('Order')); ?></h1>
    </a-col>
</a-row>
<a-row type="flex" :gutter="15" class="mt-1">
    <a-col :span="24">
        <a-card title="<?php echo e(__('Order Information')); ?>">
            <a-card-content>
                <p><?php echo e(__('Shipping:')); ?> <?php echo e($order->shipping_option); ?></p>
                <p><?php echo e(__('Payment:')); ?> <?php echo e($order->payment_option); ?></p>
                <p><?php echo e(__('Order Status:')); ?> <?php echo e($order->orderStatus->name); ?></p>
            </a-card-content>
        </a-card>
        <a-card class="mt-1" title="<?php echo e(__('User Information')); ?>">
            <a-card-content>
                <a-row type="flex">
                    <a-col :span="8">
                        <?php echo e(__('Name:')); ?> <?php echo e($order->user->name); ?>

                    </a-col>
                
                    <a-col :span="8">
                        <h4><?php echo e(__('Shipping Address:')); ?></h4>
                        <p><?php echo e($order->shippingAddress->first_name); ?> <?php echo e($order->shippingAddress->last_name); ?></p>
                        <p><?php echo e($order->shippingAddress->phone); ?></p>
                        <p><?php echo e($order->shippingAddress->address1); ?>, <?php echo e($order->shippingAddress->address2); ?></p>
                        <p><?php echo e($order->shippingAddress->city); ?> <?php echo e($order->shippingAddress->postcode); ?></p>
                        <p><?php echo e($order->shippingAddress->state); ?> </p>
                        <p><?php echo e($order->shippingAddress->country->name); ?></p>
                    </a-col>
              
                    <a-col :span="8">
                        <h4><?php echo e(__('Billing Address:')); ?></h4>
                        <p><?php echo e($order->billingAddress->first_name); ?> <?php echo e($order->billingAddress->last_name); ?></p>
                        <p><?php echo e($order->billingAddress->phone); ?></p>
                        <p><?php echo e($order->billingAddress->address1); ?>, <?php echo e($order->billingAddress->address2); ?></p>
                        <p><?php echo e($order->billingAddress->city); ?> <?php echo e($order->billingAddress->postcode); ?></p>
                        <p><?php echo e($order->billingAddress->state); ?> </p>
                        <p><?php echo e($order->billingAddress->country->name); ?></p>
                    </a-col>
                </a-row>
               
                
            </a-card-content>
        </a-card>

        <a-card class="mt-1" title="<?php echo e(__('Order Products')); ?>">
            <a-card-content>
                
                
                       

                        <a-row>
                        <table class="table">
                                <thead>
                                    <tr>
                              
                                    <th scope="col">image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                                                        
                                    <td><img src='<?php echo e($o->product->main_image_url); ?>' style="width:10%"></td>
                                    <td><?php echo e($o->product->name); ?></td>
                                    <td><?php echo e($o->qty); ?></td>
                                    <td><?php echo e($o->price); ?></td>
                                    </tr>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                        <table>            
</a-row>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/royal2.royalsooq.com/resources/views/account/order/show.blade.php ENDPATH**/ ?>