<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Order Invoice</title>
</head>

<body>
    <div  style="padding: 30px;border: 1px solid #eee; font-size: 16px;line-height: 24px;width:100%">
        <table cellpadding="0" cellspacing="0" style="width:100%">
            <tr class="top">
                <td colspan="5">
                    <table>
                        <tr>
                            <td style="font-size: 45px;line-height: 45px;color: #333;padding-bottom: 20px;">
                                AvoRed Shopping Cart
                            </td>
                            
                            <td style="padding-bottom: 20px;text-align:right">
                                <?php echo e(__('avored::order.order.invoice.invoice')); ?> #: <?php echo e($order->id); ?><br>
                                <?php echo e(__('avored::order.order.invoice.created_at')); ?>: <?php echo e($order->created_at->format('d-M-Y')); ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="5">
                    <table style="width: 100%">
                        <tr>
                            <td style="padding: 5px;">
                                <?php echo e($order->shippingAddress->company_name); ?><br>
                                <?php echo e($order->shippingAddress->first_name); ?> <?php echo e($order->shippingAddress->last_name); ?><br>
                                <?php echo e($order->shippingAddress->address1); ?>, <?php echo e($order->shippingAddress->address2); ?><br/>
                                <?php echo e($order->shippingAddress->city); ?> <?php echo e($order->shippingAddress->country->name); ?>

                                <?php echo e($order->shippingAddress->postcode); ?>

                            </td>
                            
                            <td style="padding: 5px;text-align:right">
                                <?php echo e($order->billingAddress->company_name); ?><br>
                                <?php echo e($order->billingAddress->first_name); ?> <?php echo e($order->billingAddress->last_name); ?><br>
                                <?php echo e($order->user->email); ?>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td style="background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;padding:5px">
                    <?php echo e(__('avored::order.order.invoice.payment_method')); ?>

                    </td>
                
                <td colspan="4" style="background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;padding:5px;text-align:right">
                    <?php echo e($order->payment_option); ?>

                </td>
            </tr>
            
            <tr class="heading">
                <td style="background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;padding:5px">
                <?php echo e(__('avored::order.order.invoice.name')); ?>

                </td>
                <td style="background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;padding:5px">
                    <?php echo e(__('avored::order.order.invoice.qty')); ?>

                </td>
                <td style="background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;padding:5px;text-align:right">
                    <?php echo e(__('avored::order.order.invoice.price')); ?>

                </td>
                <td style="background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;padding:5px;text-align:right">
                    <?php echo e(__('avored::order.order.invoice.tax_amount')); ?>

                </td>
                <td style="background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;padding:5px;text-align:right">
                    <?php echo e(__('avored::order.order.invoice.line_total')); ?>

                </td>
            </tr>
            <?php
                $total = 0;
            ?>
            <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
                <tr class="item">
                    <td style="padding:5px"><?php echo e($product->product->name); ?></td>
                    <td>
                        <?php echo e(number_format($product->qty, 2)); ?>

                    </td>
                    <td style="padding:5px;text-align:right">
                        <?php echo e($order->currency->symbol); ?> <?php echo e(number_format($product->product->price, 2)); ?>

                    </td>
                    
                    <td style="padding:5px;text-align:right">
                        <?php echo e($order->currency->symbol); ?> <?php echo e(number_format($product->tax_amount, 2)); ?>

                    </td>
                    
                    <td style="padding:5px; text-align:right">
                        <?php echo e($order->currency->symbol); ?> <?php echo e(number_format($product->price * $product->qty, 2)); ?>

                    </td>
                </tr>
                <?php
                $total += $product->price * $product->qty;
            ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <tr >
                <td style="padding: 5px"></td>
                
                <td colspan="4" style="text-align:right;padding 5px;border-top: 1px solid #eee;">
                   <?php echo e(__('avored::order.order.invoice.total')); ?>: <?php echo e($order->currency->symbol); ?> <?php echo e(number_format($total, 2)); ?>

                </td>
            </tr>
        </table>
    </div>
</body>
</html>
<?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/order/order/invoice.blade.php ENDPATH**/ ?>