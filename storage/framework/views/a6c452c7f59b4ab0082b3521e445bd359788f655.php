<a-card class="mt-1 mb-1" title="<?php echo e(__('a-review::review.review-list')); ?>">
    <?php 
        //$reviews = ;
    ?>
    <a-row type="flex" justify="center">
        <a-col :span="24">
        <catalog-review inline-template :reviews="<?php echo e($reviews); ?>" base-url="<?php echo e(asset(config('avored.admin_url'))); ?>">
                <a-table :columns="columns" row-key="id" :data-source="reviews" @change="handleTableChange">
                    <span slot="action" slot-scope="text, record">
                        <a-tag color="#E64448" v-if="record.status === 'PENDING'" @click.prevent="clickOnApproved(record, $event)" :href="getApprovedUrl(record)">
                            <?php echo e(__('Click to Approve')); ?>

                        </a-tag>

                        <a-tag v-if="record.status === 'APPROVED'">
                            <?php echo e(__('Approved')); ?>

                        </a-tag>
                       
                    </span>
                </a-table>
            </catalog-review>    
        </a-col>
    </a-row>

</a-card>
<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('avored-admin/js/review.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\modules\avored\review\src/../resources/views/admin/review/tab.blade.php ENDPATH**/ ?>