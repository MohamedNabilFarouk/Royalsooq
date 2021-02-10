<?php $__env->startSection('content'); ?>

<!-- Content  -->

<div id="content">
    <!-- Content Wrap  -->
    <div class="content-wrap">
        <div class="section section-filter">
            <button class="btn btn-link"><i class="material-icons-outlined m-r-5">place</i> Location</button>
            <button class="btn btn-link" data-toggle="modal" data-target="#sortby"><i class="material-icons m-r-5">sort</i> Sort</button>
            <button class="btn btn-link"><i class="material-icons-outlined m-r-5">filter_alt</i> Filter</button>
        </div>

        
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ad-section">
            <div class="ad-section-item">
                <div class="ad-box list">

                    <div class="ad-image">
                        <button type="button" class="btn favourite-icon">
                            <i class="material-icons">favorite_border</i>
                        </button>
                        <img src="<?php echo e($p->main_image_url); ?>" alt="<?php echo e(__('index.no_image')); ?>" title="<?php echo e($p->name); ?>">
                    </div>
                    <div class="ad-content">
                        <a href="<?php echo e(route('product.details', $p->slug)); ?>" class="ad-title"><?php echo e($p->name); ?></a>
                        <div class="ad-price"><i class="material-icons"></i><?php echo e($p->country->currency); ?>   <?php echo e($p->price); ?></div>
                        <div class="ad-location"><i class="material-icons-outlined">location_on</i><?php if($p->city): ?><?php echo e($p->city->city); ?> <?php endif; ?></div>
                        <div class="ad-location col-text"><i class="material-icons">schedule</i><?php echo e(date_format($p->created_at,'d M Y')); ?></div>
                    </div>
                </div>
            </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php   echo $products->render(); ?>
    </div>
    

</div>
<!-- Content  -->
<?php echo e($products->appends(Request::except('token'))->links()); ?>

<!-- Modal -->
<div class="modal fade" id="sortby" tabindex="-1" role="dialog" aria-labelledby="sortByTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sortByTitle">Sort By</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pt-0">
                <ul class="list-group">
                    <li class="list-group-item">Best Match</li>
                    <li class="list-group-item">Latest Posted</li>
                    <li class="list-group-item">Lowest Price</li>
                    <li class="list-group-item">Higest Price</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts_mobile.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/blades_mobile/subcategory-products_mobile.blade.php ENDPATH**/ ?>