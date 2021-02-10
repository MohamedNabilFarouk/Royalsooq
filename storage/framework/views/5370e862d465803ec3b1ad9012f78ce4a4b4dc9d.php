<?php $__env->startSection('meta_title'); ?>
    <?php echo e(__('avored::order.order.index.title')); ?>: AvoRed E commerce Admin Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    <?php echo e(__('avored::order.order.index.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a-row type="flex" justify="center">
    <a-col :span="24">        
        <order-table inline-template :order-status="<?php echo e($orderStatuses); ?>" base-url="<?php echo e(asset(config('avored.admin_url'))); ?>">
            <div>
            <a-table :columns="columns" row-key="id" :data-source="<?php echo e($orders); ?>">
                <span slot="order_status" slot-scope="text, record">
                    {{ getOrderStatus(text) }}
                </span>
                <span slot="action" slot-scope="text, record">
                    
                    <a-dropdown>
                        <a class="ant-dropdown-link" href="#">
                        <?php echo e(__('avored::order.order.index.action')); ?> <a-icon type="down"></a-icon>
                        </a>
                        <a-menu slot="overlay">
                            <a-menu-item>
                                <a :href="orderShowAction(record)">
                                <?php echo e(__('avored::order.order.index.show')); ?>

                                </a>
                            </a-menu-item>
                            
                            
                            <a-menu-item>
                                <a @click.prevent="changeStatusMenuClick(record, $event)">
                                <?php echo e(__('avored::order.order.index.change_status')); ?>

                                </a>
                            </a-menu-item>
                            <a-menu-item>
                                <a @click.prevent="addTrackingCodeMenuClick(record, $event)">
                                <?php echo e(__('avored::order.order.index.add_tracking')); ?>

                                </a>
                            </a-menu-item>
                            <a-menu-item>
                                <a :href="downloadOrderAction(record)">
                                <?php echo e(__('avored::order.order.index.download_invoice')); ?>

                                </a>
                            </a-menu-item>
                            <a-menu-item>
                                <a :href="emailInvoiceOrderAction(record)">
                                <?php echo e(__('avored::order.order.index.email_invoice')); ?>

                                </a>
                            </a-menu-item>
                            <a-menu-item>
                                <a :href="shippingLabelOrderAction(record)">
                                <?php echo e(__('avored::order.order.index.download_shipping_label')); ?>

                                </a>
                            </a-menu-item>
                        </a-menu>
                    </a-dropdown>

                </span>
            </a-table>
            <?php echo $__env->make('avored::order.order.modal.track-code', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('avored::order.order.modal.change-status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </order-table>
    </a-col>
</a-row>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('avored::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/order/order/index.blade.php ENDPATH**/ ?>