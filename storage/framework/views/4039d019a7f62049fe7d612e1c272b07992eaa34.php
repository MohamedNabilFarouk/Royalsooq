<a-modal
      title="<?php echo e(__('avored::order.order.index.change_track_code')); ?>"
      v-model="track_code_modal_visibility"
      @cancel="handleTrackCodeCancel"
      ok-text="<?php echo e(__('avored::system.btn.save')); ?>"
      @ok="handleTrackCodeOk">
      
      <a-form-item
      <?php if($errors->has('track_code')): ?>
            validate-status="error"
            help="<?php echo e($errors->first('track_code')); ?>"
      <?php endif; ?>
      label="<?php echo e(__('avored::order.order.index.track_code')); ?>"
      >
      <a-input
            :auto-focus="true"
            name="track_code"
            v-model="track_code"
            v-decorator="[
            'track_code',
            {rules: 
                  [
                  {   required: true, 
                        message: '<?php echo e(__('avored::validation.required', ['attribute' => 'track code'])); ?>' 
                  }
                  ]
            }
            ]"
      ></a-input>
      </a-form-item>

</a-modal>
<?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/order/order/modal/track-code.blade.php ENDPATH**/ ?>