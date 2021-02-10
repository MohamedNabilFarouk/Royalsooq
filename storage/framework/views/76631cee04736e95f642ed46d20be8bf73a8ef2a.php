<a-modal
      title="<?php echo e(__('avored::order.order.index.order_status')); ?>"
      v-model="change_status_modal_visibility"
      @cancel="handleChangeStatusCancel"
      ok-text="<?php echo e(__('avored::system.btn.save')); ?>"
      @ok="handleChangeStatusOk">
      <a-row>
            <a-col :span="24">
                  <a-form-item
                  <?php if($errors->has('order_status_id')): ?>
                        validate-status="error"
                        help="<?php echo e($errors->first('order_status_id')); ?>"
                  <?php endif; ?>
                  label="<?php echo e(__('avored::order.order.index.order_status')); ?>">
                        <a-select :style="{'width':'100%'}" @change="changeStatusDropdown">
                              <?php $__currentLoopData = $orderStatuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderStatus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                
                              <a-select-option value="<?php echo e($orderStatus->id); ?>"><?php echo e($orderStatus->name); ?></a-select-option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </a-select>
                        <input type="hidden" v-model="changeStatusId" />
                  </a-form-item>
            </a-col>
      </a-row>

</a-modal>
<?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/order/order/modal/change-status.blade.php ENDPATH**/ ?>