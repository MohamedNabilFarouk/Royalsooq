<?php $__env->startSection('breadcrumb'); ?>
<a-breadcrumb style="margin: 16px 0">
    <a-breadcrumb-item>
      <a href="<?php echo e(route('home')); ?>" title="home">
        <?php echo e(__('Home')); ?>

      </a>
    </a-breadcrumb-item>
    <a-breadcrumb-item>
        <?php echo e($product->name); ?>

    </a-breadcrumb-item>
</a-breadcrumb>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<product-page :product="<?php echo e($product); ?>" :variations="<?php echo e($product->getVariations()); ?>" inline-template>
<div>
  <a-row :gutter="15">
    <a-col :span="8">
      <a-card>
          <img class="product-main-image" :src="productMainImage" /> 
      </a-card>
    </a-col>
    <a-col :span="16">
      <h2 class="name"><?php echo e($product->name); ?></h2>

        <?php if($product->type === 'BASIC'): ?> 
          <?php echo $__env->make('product.type.basic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php if($product->type === 'VARIABLE_PRODUCT'): ?> 
          <?php echo $__env->make('product.type.variable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </a-col>
  </a-row>
  <a-row>
    <a-col>
      <div class="description">
          <div class="title"><?php echo e(__('Description')); ?></div>
          <p><?php echo $product->description; ?></p>
      </div>
    </a-col>
    <a-col>
      <div class="description">
          <div class="title"><?php echo e(__('Properties')); ?></div>
          <?php
            $properties = $product->getProperties();
          ?>

          <?php if($properties !== null && $properties->count() > 0): ?>
            <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($property->name); ?>: <?php echo e($property->getPropertyDisplayTextByProductId($product->id)); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
      </div>
    </a-col>
  </a-row>
  <a-row>
    <a-col :span="24">
      <a-review
        product-id="<?php echo e($product->id); ?>"
        :reviews="<?php echo e($reviews); ?>"
        save-review-url="<?php echo e(route('review.save')); ?>">
      </a-review>
    </a-col>
  </a-row>
</div>
</product-page>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\resources\views/product/show.blade.php ENDPATH**/ ?>