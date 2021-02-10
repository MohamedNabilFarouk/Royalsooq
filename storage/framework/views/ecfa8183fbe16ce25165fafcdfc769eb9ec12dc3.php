<?php $__env->startSection('content'); ?>















<div class="container">



<ul class="breadcrumb">



                    <li><a href="<?php echo e(url('/')); ?>"><span class="fa fa-home" style="padding: 10px;"></span><?php echo e(__('index.home')); ?></a></li>



                    <li><a href="<?php echo e(route('all.acc')); ?>"><?php echo e(__('index.shops')); ?></a>



                    </li>



                   



                </ul>



            <div class="row">



                <!-- <div class="col-md-3">



                    <aside class="sidebar-left">



                        <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">



                            <li class="active"><a href="#"><i class="fa fa-ticket"></i>All<span>36</span></a>



                            </li>



                            <li><a href="#"><i class="fa fa-cutlery"></i>Food & Drink<span>36</span></a>



                            </li>



                            <li><a href="#"><i class="fa fa-calendar"></i>Events<span>40</span></a>



                            </li>



                            <li><a href="#"><i class="fa fa-female"></i>Beauty<span>38</span></a>



                            </li>



                            <li><a href="#"><i class="fa fa-bolt"></i>Fitness<span>43</span></a>



                            </li>



                            <li><a href="#"><i class="fa fa-headphones"></i>Electronics<span>37</span></a>



                            </li>



                            <li><a href="#"><i class="fa fa-image"></i>Furniture<span>32</span></a>



                            </li>



                            <li><a href="#"><i class="fa fa-umbrella"></i>Fashion<span>48</span></a>



                            </li>



                            <li><a href="#"><i class="fa fa-shopping-cart"></i>Shopping<span>45</span></a>



                            </li>



                            <li><a href="#"><i class="fa fa-home"></i>Home & Graden<span>31</span></a>



                            </li>



                            <li><a href="#"><i class="fa fa-plane"></i>Travel<span>49</span></a>



                            </li>



                        </ul>



                        <div class="sidebar-box">



                            <h5>Filter By Price</h5>



                            <input type="text" id="price-slider">



                        </div>



                        <div class="sidebar-box">



                            <h5>Product Feature</h5>



                            <ul class="checkbox-list">



                                <li class="checkbox">



                                    <label>



                                        <input type="checkbox" class="i-check">New <small>(50)</small>



                                    </label>



                                </li>



                                <li class="checkbox">



                                    <label>



                                        <input type="checkbox" class="i-check">Ending Soon <small>(70)</small>



                                    </label>



                                </li>



                                <li class="checkbox">



                                    <label>



                                        <input type="checkbox" class="i-check">Popular <small>(32)</small>



                                    </label>



                                </li>



                                <li class="checkbox">



                                    <label>



                                        <input type="checkbox" class="i-check">Featured <small>(27)</small>



                                    </label>



                                </li>



                            </ul>



                        </div>



                        <div class="sidebar-box">



                            <h5>When</h5>



                            <ul class="checkbox-list">



                                <li class="checkbox">



                                    <label>



                                        <input type="checkbox" class="i-check">This Week <small>(60)</small>



                                    </label>



                                </li>



                                <li class="checkbox">



                                    <label>



                                        <input type="checkbox" class="i-check">Next Week <small>(37)</small>



                                    </label>



                                </li>



                                <li class="checkbox">



                                    <label>



                                        <input type="checkbox" class="i-check">Later <small>(23)</small>



                                    </label>



                                </li>



                            </ul>



                        </div>



                        <div class="sidebar-box">



                            <h5>Location</h5>



                            <ul class="checkbox-list">



                                <li class="checkbox">



                                    <label>



                                        <input type="checkbox" class="i-check">All <small>(657)</small>



                                    </label>



                                </li>



                                <li class="checkbox">



                                    <label>



                                        <input type="checkbox" class="i-check">All Washington <small>(120)</small>



                                    </label>



                                </li>



                                <li class="checkbox">



                                    <label>



                                        <input type="checkbox" class="i-check">NoMa <small>(13)</small>



                                    </label>



                                </li>



                                <li class="checkbox">



                                    <label>



                                        <input type="checkbox" class="i-check">Chinatown <small>(32)</small>



                                    </label>



                                </li>



                                <li class="checkbox">



                                    <label>



                                        <input type="checkbox" class="i-check">Penn Quarter <small>(53)</small>



                                    </label>



                                </li>



                                <li class="checkbox">



                                    <label>



                                        <input type="checkbox" class="i-check">Adams Morgan <small>(21)</small>



                                    </label>



                                </li>



                            </ul>



                        </div>



                    </aside>







                </div> -->



                <div class="col-md-12">



                    <div class="row">



                        



                    </div>



                    <div class="row row-wrap">



                     <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                        <?php if(count($u->products) > 0): ?>



                        <a class="col-md-3" href="<?php echo e(route('shops2', $u->slug)); ?>">



                            <div class="product-thumb">



                                <header class="product-header">



                                <?php if(empty($u->image)): ?>

                <img id="userImg" class="userImg" src="<?php echo e(asset('img/user_avatar.jpg')); ?>" alt="user">&nbsp;

        <?php else: ?>

            

        <img src="<?php echo e(asset('/storage/'. $u->image)); ?>" alt="<?php echo e($u->name); ?>" title="<?php echo e($u->name); ?>" style="height: 189px;" />





        <?php endif; ?>





                                 



                                </header>



                                <div class="product-inner">



                                    <h5 class="product-title"><?php echo e($u->name); ?></h5>



                                    <!-- <p class="product-desciption">Amet bibendum class pharetra mus nibh dignissim taciti</p> -->



                                    <!-- <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 9 days 35 h remaining</span>



                                        <ul class="product-price-list">



                                            <li><span class="product-price">$106</span>



                                            </li>



                                            <li><span class="product-old-price">$211</span>



                                            </li>



                                            <li><span class="product-save">Save 50%</span>



                                            </li>



                                        </ul>



                                    </div> -->



                                    <!-- <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p> -->



                                </div>



                            </div>



                        </a>



                        <?php endif; ?>



                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    </div>



                    <!-- <ul class="pagination">



                        <li class="prev disabled">



                            <a href="#"></a>



                        </li>



                        <li class="active"><a href="#">1</a>



                        </li>



                        <li><a href="#">2</a>



                        </li>



                        <li><a href="#">3</a>



                        </li>



                        <li><a href="#">4</a>



                        </li>



                        <li><a href="#">5</a>



                        </li>



                        <li class="next">



                            <a href="#"></a>



                        </li>



                    </ul> -->



                    <div class="gap"></div>



                </div>



            </div>







        </div>















<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/blades/allSellerAcc.blade.php ENDPATH**/ ?>