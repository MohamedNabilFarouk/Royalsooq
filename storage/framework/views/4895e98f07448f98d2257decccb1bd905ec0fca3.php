<a-card title="<?php echo e(__('avored::catalog.product.basic_card_title')); ?>">
 <a-row :gutter="15" type="flex">
    <a-col :span="12">
    
        <a-form-item
            <?php if($errors->has('name')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('name')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('avored::catalog.product.name')); ?>">
            <a-input
                :auto-focus="true"
                name="name"
                v-decorator="[
                'name',
                <?php echo e(($product->name !== '') ? "{'initialValue': '" . $product->name . "'}," : ""); ?>

                {rules: 
                    [
                        {   required: true, 
                            message: '<?php echo e(__('avored::validation.required', ['attribute' => 'name'])); ?>' 
                        }
                    ]
                }
                ]"
            ></a-input>
        </a-form-item>
    </a-col>


    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('slug')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('slug')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('avored::catalog.product.slug')); ?>">
            <a-input
                name="slug"
                v-decorator="[
                'slug',
                <?php echo e(($product->slug !== '') ? "{'initialValue': '" . $product->slug . "'}," : ""); ?>

                {rules: 
                    [
                        {   required: true, 
                            message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Slug'])); ?>' 
                        }
                    ]
                }
                ]"
            ></a-input>

        </a-form-item>
    </a-col>

</a-row>
<?php
//dd();
?>
<a-row type="flex" :gutter="15">
    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('category')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('category')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('avored::catalog.product.category')); ?>">

            <a-select
                mode="multiple"
                @change="handleCategoryChange"
                v-decorator="[
                'category',
                <?php echo e(($product->categories !== null) ? "{'initialValue': [\"". implode('","', $product->categories->pluck('id')->toArray()) . "\"]}," : ""); ?>

                {rules:
                    [
                        {   required: true, 
                            message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Categories'])); ?>' 
                        }
                    ]
                }
                ]">
                <?php $__currentLoopData = $categoryOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catVal => $catLabel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a-select-option
                      value="<?php echo e($catVal); ?>"><?php echo e($catLabel); ?></a-select-option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </a-select>
        </a-form-item>
        <span v-for="(category, index) in categories">
            <input name="category[]" :value="category" type="hidden" />
        </span>
    </a-col>
     <a-col :span="12">
        <a-form-item
            <?php if($errors->has('type')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('type')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('avored::catalog.product.type')); ?>">

            <a-select
                @change="handleTypeChange"
                disabled
                v-decorator="[
                'type',
                <?php echo e(($product->type !== '') ? "{'initialValue': '" . $product->type . "'}," : ""); ?>

                {rules:
                    [
                        {   required: true, 
                            message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Type'])); ?>' 
                        }
                    ]
                }
                ]">
                <?php $__currentLoopData = $typeOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typeVal => $typeLabel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a-select-option
                      value="<?php echo e($typeVal); ?>"><?php echo e($typeLabel); ?></a-select-option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </a-select>
        </a-form-item>
        <input name="type" v-model="type" type="hidden" />
    
    </a-col>
</a-row>


<a-row :gutter="15" type="flex">
    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('sku')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('sku')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('avored::catalog.product.sku')); ?>">
            <a-input
                name="sku"
                v-decorator="[
                'sku',
                <?php echo e(($product->sku !== '') ? "{'initialValue': '" . $product->sku . "'}," : ""); ?>

                {rules: 
                    [
                        {   required: true, 
                            message: '<?php echo e(__('avored::validation.required', ['attribute' => 'SKU'])); ?>' 
                        }
                    ]
                }
                ]"
            ></a-input>
        </a-form-item>
    </a-col>

    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('barcode')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('barcode')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('avored::catalog.product.barcode')); ?>">
            <a-input
            
                name="barcode"
                v-decorator="[
                'barcode',
                <?php echo e(($product->barcode !== '') ? "{'initialValue': '" . $product->barcode . "'}," : ""); ?>

                {rules: 
                    [
                        {   required: true, 
                            message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Barcode'])); ?>' 
                        }
                    ]
                }
                ]"
            ></a-input>

        </a-form-item>
    </a-col>
</a-row>

<div class="ant-row ant-form-item">
    <div class="ant-form-item-label">
        <label for="product-description" title="<?php echo e(__('avored::cms.product.description')); ?>">
            <?php echo e(__('avored::catalog.product.description')); ?>

        </label>
    </div>
    
    <div class="ant-form-item-control-wrapper">
        <div class="ant-form-item-control">
            <quil-editor id="product-description" v-model="description"></quil-editor>
            <input type="hidden" name="description" v-model="description" />
        </div>
    </div>
</div>


<a-row :gutter="15" type="flex">
    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('qty')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('qty')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('avored::catalog.product.qty')); ?>">
            <a-input
                name="qty"
                v-decorator="[
                'qty',
                <?php echo e(($product->qty !== '') ? "{'initialValue': '" . $product->qty . "'}," : ""); ?>

                {rules: 
                    [
                        {   required: true, 
                            message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Qty'])); ?>' 
                        }
                    ]
                }
                ]"
            ></a-input>
        </a-form-item>
    </a-col>

    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('status')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('status')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('avored::catalog.product.status')); ?>">
            
            <a-switch 
                <?php if($product->status): ?>
                    default-checked
                <?php endif; ?>
                @change="handleStatusChange"></a-switch>
        </a-form-item>
        <input type="hidden" name="status" v-model="status" />
    </a-col>
</a-row>

<a-row :gutter="15" type="flex">
    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('track_stock')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('track_stock')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('avored::catalog.product.track_stock')); ?>">
            
            <a-switch
                <?php if($product->track_stock): ?>
                    default-checked
                <?php endif; ?>
                @change="handleTrackStockChange"></a-switch>
        </a-form-item>
        <input type="hidden" name="track_stock" v-model="track_stock" />
    </a-col>

    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('is_taxable')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('is_taxable')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('avored::catalog.product.is_taxable')); ?>">
            
            <a-switch
                <?php if($product->is_taxable): ?>
                    default-checked
                <?php endif; ?>
                @change="handleIsTaxableChange"></a-switch>
        </a-form-item>
        <input type="hidden" name="is_taxable" v-model="is_taxable" />
    </a-col>
</a-row>

<a-row :gutter="15" type="flex">
    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('price')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('price')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('avored::catalog.product.price')); ?>">
            <a-input
                name="price"
                v-decorator="[
                    'price',
                    <?php echo e(($product->price !== '') ? "{'initialValue': '" . $product->price . "'}," : ""); ?>

                    {rules: 
                        [
                            {   required: true, 
                                message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Price'])); ?>' 
                            }
                        ]
                    }
                ]"
            ></a-input>
        </a-form-item>
    </a-col>


    <a-col :span="12">
        <a-form-item
            <?php if($errors->has('cost_price')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('cost_price')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('avored::catalog.product.cost_price')); ?>">
            <a-input
                name="cost_price"
                v-decorator="[
                    'cost_price',
                    <?php echo e(($product->cost_price !== '') ? "{'initialValue': '" . $product->cost_price . "'}," : ""); ?>

                    {rules: 
                        [
                            {   required: true, 
                                message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Cost Price'])); ?>' 
                            }
                        ]
                    }
                ]"
            ></a-input>

        </a-form-item>
    </a-col>

</a-row>


<a-row :gutter="15" type="flex">
    <a-col :span="6">
        <a-form-item
            <?php if($errors->has('length')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('length')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('avored::catalog.product.length')); ?>">
            <a-input
                name="length"
                v-decorator="[
                    'length',
                    <?php echo e(($product->length !== '') ? "{'initialValue': '" . $product->length . "'}," : ""); ?>

                    {rules: 
                        [
                            {   required: true, 
                                message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Length'])); ?>' 
                            }
                        ]
                    }
                ]"
            ></a-input>
        </a-form-item>
    </a-col>


    <a-col :span="6">
        <a-form-item
            <?php if($errors->has('width')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('width')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('avored::catalog.product.width')); ?>">
            <a-input
                name="width"
                v-decorator="[
                    'width',
                    <?php echo e(($product->width !== '') ? "{'initialValue': '" . $product->width . "'}," : ""); ?>

                    {rules: 
                        [
                            {   required: true, 
                                message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Width'])); ?>' 
                            }
                        ]
                    }
                ]"
            ></a-input>

        </a-form-item>
    </a-col>
    <a-col :span="6">
        <a-form-item
            <?php if($errors->has('height')): ?>
                validate-status="error"
                help="<?php echo e($errors->first('height')); ?>"
            <?php endif; ?>
            label="<?php echo e(__('avored::catalog.product.height')); ?>">
            <a-input
                name="height"
                v-decorator="[
                    'height',
                    <?php echo e(($product->height !== '') ? "{'initialValue': '" . $product->height . "'}," : ""); ?>

                    {rules: 
                        [
                            {   required: true, 
                                message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Height'])); ?>' 
                            }
                        ]
                    }
                ]"
            ></a-input>

        </a-form-item>
    </a-col>
    <a-col :span="6">
        <a-form-item
        <?php if($errors->has('weight')): ?>
            validate-status="error"
            help="<?php echo e($errors->first('weight')); ?>"
        <?php endif; ?>
        label="<?php echo e(__('avored::catalog.product.weight')); ?>">
        <a-input
            name="weight"
            v-decorator="[
                'weight',
                <?php echo e(($product->weight !== '') ? "{'initialValue': '" . $product->weight . "'}," : ""); ?>

                {rules: 
                    [
                        {   required: true, 
                            message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Weight'])); ?>' 
                        }
                    ]
                }
            ]"
        ></a-input>
    </a-col>
</a-form-item>

</a-row>


<a-form-item
    <?php if($errors->has('meta_title')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('meta_title')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::catalog.product.meta_title')); ?>">
    <a-input
        name="meta_title"
        v-decorator="[
            'meta_title',
            {'initialValue': '<?php echo e($product->meta_title ?? ''); ?>'},
            {rules: 
                [
                    {   required: false, 
                        message: '<?php echo e(__('avored::validation.required', ['attribute' => 'Meta Title'])); ?>' 
                    }
                ]
            }
        ]"
    ></a-input>
</a-form-item>

<a-form-item
    <?php if($errors->has('meta_description')): ?>
        validate-status="error"
        help="<?php echo e($errors->first('meta_description')); ?>"
    <?php endif; ?>
    label="<?php echo e(__('avored::catalog.product.meta_description')); ?>">
    <a-input
        name="meta_description"
        v-decorator="[
            'meta_description',
            {'initialValue': '<?php echo e($product->meta_description ?? ''); ?>'},
            {rules: 
                [
                    {   required: false, 
                        message: '<?php echo e(__('avored::validation.required', ['attribute' => 'meta_description'])); ?>' 
                    }
                ]
            }
        ]"
    ></a-input>
</a-form-item>
</a-card>
<?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/catalog/product/_fields.blade.php ENDPATH**/ ?>