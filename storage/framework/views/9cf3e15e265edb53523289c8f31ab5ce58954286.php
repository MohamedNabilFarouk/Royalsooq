<a-card class="mt-1 mb-1" title="<?php echo e(__('avored::catalog.product.property_card_title')); ?>">
    <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $productPropertyValue = $property->getPropertyValueByProductId($product->id);
        ?>

        <?php switch($property->field_type):
            case ('SELECT'): ?>
            
                <a-form-item label="<?php echo e($property->name); ?>">
                    <a-select
                        v-on:change="handlePropertyChange(<?php echo e($property->id); ?>, $event)"
                        v-decorator="[
                            'property[<?php echo e($property->id); ?>]',
                            <?php echo e((isset($property) && isset($productPropertyValue->value)) ? "{'initialValue': " . $productPropertyValue->value . "}," : ""); ?>

                            {rules:
                                [
                                    {   required: true, 
                                        message: '<?php echo e(__('avored::validation.required', ['attribute' => $property->name])); ?>' 
                                    }
                                ]
                            }
                        ]">
                            <?php $__currentLoopData = $property->dropdownOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dropdownOption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a-select-option :value="<?php echo e($dropdownOption->id); ?>">
                                <?php echo e($dropdownOption->display_text); ?>

                            </a-select-option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </a-select>
                </a-form-item>
                <input type="hidden" name="property[<?php echo e($property->id); ?>]" v-model="property[<?php echo e($property->id); ?>]" />
            <?php break; ?>

            <?php case ('TEXT'): ?>
                <a-form-item label="<?php echo e($property->name); ?>">
                    <a-input
                        name="property[<?php echo e($property->id); ?>]"
                        v-decorator="[
                            'property[<?php echo e($property->id); ?>]',
                            {rules:
                                [
                                    {   required: true, 
                                        message: '<?php echo e(__('avored::validation.required', ['attribute' => $property->name])); ?>' 
                                    }
                                ]
                            }
                        ]">
                           
                    </a-input>
                </a-form-item>
            <?php break; ?>

            <?php case ('TEXTAREA'): ?>
                <a-form-item label="<?php echo e($property->name); ?>">
                    <a-textarea
                        :rows="4"
                        name="property[<?php echo e($property->id); ?>]"
                        v-decorator="[
                            'property[<?php echo e($property->id); ?>]',
                            {rules:
                                [
                                    {   required: true, 
                                        message: '<?php echo e(__('avored::validation.required', ['attribute' => $property->name])); ?>' 
                                    }
                                ]
                            }
                        ]">
                           
                    </a-textarea>
                </a-form-item>
            <?php break; ?>

            <?php case ('DATETIME'): ?>
                <a-form-item label="<?php echo e($property->name); ?>">
                    <a-date-picker
                        :show-time="true"
                        format="DD-MM-YYYY HH:mm:ss"
                        v-on:change="handlePropertyChange(<?php echo e($property->id); ?>, $event)"
                        v-decorator="[
                            'property[<?php echo e($property->id); ?>]',
                            {rules:
                                [
                                    {   required: true, 
                                        message: '<?php echo e(__('avored::validation.required', ['attribute' => $property->name])); ?>' 
                                    }
                                ]
                            }
                        ]">
                    </a-date-picker>
                </a-form-item>
                <input type="hidden" name="property[<?php echo e($property->id); ?>]" v-model="property[<?php echo e($property->id); ?>]" />
            <?php break; ?>

            <?php case ('SWITCH'): ?>
                <a-form-item label="<?php echo e($property->name); ?>">
                    <a-switch
                        v-on:change="handlePropertyChange(<?php echo e($property->id); ?>, $event)"
                        v-decorator="[
                            'property[<?php echo e($property->id); ?>]',
                            {rules:
                                [
                                    {   required: true, 
                                        message: '<?php echo e(__('avored::validation.required', ['attribute' => $property->name])); ?>' 
                                    }
                                ]
                            }
                        ]">
                    </a-switch>
                </a-form-item>
                <input type="hidden" name="property[<?php echo e($property->id); ?>]" v-model="property[<?php echo e($property->id); ?>]" />
            <?php break; ?>

            <?php case ('RADIO'): ?>
                <a-form-item label="<?php echo e($property->name); ?>">
                    <a-radio-group
                        v-on:change="handlePropertyChange(<?php echo e($property->id); ?>, $event)"
                        :options="<?php echo e($property->getDropdownOptions()); ?>"
                        v-decorator="[
                            'property[<?php echo e($property->id); ?>]',
                            {'initialValue': <?php echo e($property->property_value); ?>}, 
                            {rules:
                                [
                                    {   required: true, 
                                        message: '<?php echo e(__('avored::validation.required', ['attribute' => $property->name])); ?>' 
                                    }
                                ]
                            }
                        ]">
                    </a-radio-group>
                </a-form-item>
                <input type="hidden" name="property[<?php echo e($property->id); ?>]" v-model="property[<?php echo e($property->id); ?>]" />
            <?php break; ?>
        <?php endswitch; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
</a-card>
<?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/catalog/product/cards/property.blade.php ENDPATH**/ ?>