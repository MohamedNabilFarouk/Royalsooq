<a-col :span="4" :xs="24" :sm="12" :md="6">
    <a-card title="<?php echo e(__('avored::system.total-revenue')); ?>" class="dashboard-widget mt-1 info">
        <p class="amount"><?php echo e(session()->get('default_currency')->symbol); ?><?php echo e($value); ?></p>
    </a-card>
</a-col>
<?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/widget/total-revenue.blade.php ENDPATH**/ ?>