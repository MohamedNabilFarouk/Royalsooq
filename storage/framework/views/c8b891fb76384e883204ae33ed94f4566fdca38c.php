<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<?php $__env->startSection('title'); ?>
Royal Sooq E commerce Admin Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<style>
			.color{
				color:#23282c;
			}
			.counter {
				background-color:#50dd7a;
				padding: 20px 0;
				border-radius: 5px;
				width: 100%;
			margin: 50px 0 0 0;
			}

			.count-title {
				font-size: 40px;
				font-weight: normal;
				margin-top: 10px;
				margin-bottom: 0;
				text-align: center;
			}

			.count-text {
				font-size: 13px;
				font-weight: normal;
				margin-top: 10px;
				margin-bottom: 0;
				text-align: center;
			}

			.fa-2x {
				margin: 0 auto;
				float: none;
				display: table;
				color: #4ad1e5;
			}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">




<!-- Chart's container -->

    <!-- Charting library -->
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
    <!-- Your application script -->
    <script>
      const chart = new Chartisan({
        el: '#chart',
		url: "/admin",
      });
    </script>



<!-- <a-row type="flex" :gutter="20" justify="center">
    <?php echo e($orderWidget->render()); ?>

    <?php echo e($customerWidget->render()); ?>

    <?php echo e($revenueWidget->render()); ?>

</a-row> -->

<div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">


						<!-- BEGIN: General Report -->
						<div class="col-span-12 mt-8">
													<div class="intro-y flex items-center h-10">
														<h2 class="text-lg font-medium truncate mr-5">
															General Report
														</h2>
														<!-- <a href="#" class="ml-auto flex text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a> -->
													</div>
													<div class="grid grid-cols-12 gap-6 mt-5">
														<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
															<div class="report-box zoom-in">
																<div class="box p-5">
																	<div class="flex">
																		<i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i> 
																		<div class="ml-auto">
																			<div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="33% Higher than last month"> 33% <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
																		</div>
																	</div>
																	<div class="text-3xl font-bold leading-8 mt-6"><?php echo e(count($free)); ?></div>
																	<div class="text-base text-gray-600 mt-1">Free Ads</div>
																</div>
															</div>
														</div>
														<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
															<div class="report-box zoom-in">
																<div class="box p-5">
																	<div class="flex">
																		<i data-feather="credit-card" class="report-box__icon text-theme-11"></i> 
																		<div class="ml-auto">
																			<div class="report-box__indicator bg-theme-6 tooltip cursor-pointer" title="2% Lower than last month"> 2% <i data-feather="chevron-down" class="w-4 h-4"></i> </div>
																		</div>
																	</div>
																	<div class="text-3xl font-bold leading-8 mt-6"><?php echo e(count($subscribers)); ?></div>
																	<div class="text-base text-gray-600 mt-1">Subscribers</div>
																</div>
															</div>
														</div>
														<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
															<div class="report-box zoom-in">
																<div class="box p-5">
																	<div class="flex">
																		<i data-feather="monitor" class="report-box__icon text-theme-12"></i> 
																		<div class="ml-auto">
																			<div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="12% Higher than last month"> 12% <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
																		</div>
																	</div>
																	<div class="text-3xl font-bold leading-8 mt-6"><?php echo e($totalAdsVisits); ?></div>
																	<div class="text-base text-gray-600 mt-1">Total Visits</div>
																</div>
															</div>
														</div>
														<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
															<div class="report-box zoom-in">
																<div class="box p-5">
																	<div class="flex">
																		<i data-feather="user" class="report-box__icon text-theme-9"></i> 
																		<div class="ml-auto">
																			<div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="22% Higher than last month"> 22% <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
																		</div>
																	</div>
																	<div class="text-3xl font-bold leading-8 mt-6"><?php echo e(count($users)); ?></div>
																	<div class="text-base text-gray-600 mt-1">Users</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- END: General Report -->

						<!-- END: General Report -->

                        <!-- BEGIN: Sales Report -->
                        <div class="col-span-12 lg:col-span-6 mt-8">
                            <div class="intro-y block sm:flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Visits Report
                                </h2>
                                <div class="sm:ml-auto mt-3 sm:mt-0 relative text-gray-700 dark:text-gray-300">
                                    <i data-feather="calendar" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i> 
                                    <input type="text" class="datepicker input w-full sm:w-56 box pl-10">
                                </div>
                            </div>
                            <div class="intro-y box p-5 mt-12 sm:mt-5">
                                <div class="flex flex-col xl:flex-row xl:items-center">
                                    <div class="flex">
                                        <div>
                                            <div class="text-theme-20 dark:text-gray-300 text-lg xl:text-xl font-bold">1,000</div>
                                            <div class="text-gray-600 dark:text-gray-600">This Month</div>
                                        </div>
                                        <div class="w-px h-12 border border-r border-dashed border-gray-300 dark:border-dark-5 mx-4 xl:mx-6"></div>
                                        <div>
                                            <div class="text-gray-600 dark:text-gray-600 text-lg xl:text-xl font-medium">800</div>
                                            <div class="text-gray-600 dark:text-gray-600">Last Month</div>
                                        </div>
                                    </div>
                                    <!-- <div class="dropdown xl:ml-auto mt-5 xl:mt-0">
                                        <button class="dropdown-toggle button font-normal border dark:border-dark-5 text-white dark:text-gray-300 relative flex items-center text-gray-700"> Filter by Category <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i> </button>
                                        <div class="dropdown-box w-40">
                                            <div class="dropdown-box__content box dark:bg-dark-1 p-2 overflow-y-auto h-32"> <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">PC & Laptop</a> <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">Smartphone</a> <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">Electronic</a> <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">Photography</a> <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">Sport</a> </div>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="report-chart">
                                    <canvas id="report-line-chart" height="160" class="mt-6"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- END: Sales Report -->
						   <!-- BEGIN: Weekly Top Seller -->
						   <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                            <div class="intro-y flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                   Ads Report
                                </h2>
                                <!-- <a href="#" class="ml-auto text-theme-1 dark:text-theme-10 truncate">See all</a>  -->
                            </div>
                            <div class="intro-y box p-5 mt-5">
                                <canvas class="mt-3" id="report-pie-chart" height="280"></canvas>
                                <div class="mt-8">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                                        <span class="truncate">Free Ads</span> 
                                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                        <span class="font-medium xl:ml-auto">80%</span> 
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                                        <span class="truncate">Sponsored Ads</span> 
                                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                        <span class="font-medium xl:ml-auto">10%</span> 
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                                        <span class="truncate">Services</span> 
                                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                        <span class="font-medium xl:ml-auto">10%</span> 
                                    </div>
                                </div>
                            </div>
                        </div>
						<!-- END: Weekly Top Seller -->
						 <!-- BEGIN: Sales Report -->
						 <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                            <div class="intro-y flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Accounts Report
                                </h2>
                                <!-- <a href="#" class="ml-auto text-theme-1 dark:text-theme-10 truncate">See all</a>  -->
                            </div>
                            <div class="intro-y box p-5 mt-5">
                                <canvas class="mt-3" id="report-donut-chart" height="280"></canvas>
                                <div class="mt-8">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                                        <span class="truncate">Normal user</span> 
                                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                        <span class="font-medium xl:ml-auto">70%</span> 
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                                        <span class="truncate">Seller</span> 
                                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                        <span class="font-medium xl:ml-auto">30%</span> 
                                    </div>
                                    <!-- <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                                        <span class="truncate">>= 50 Years old</span> 
                                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                        <span class="font-medium xl:ml-auto">10%</span> 
                                    </div> -->
                                </div>
                            </div>
                        </div>
						<!-- END: Sales Report -->
						
						 <!-- BEGIN: Official Store -->
						 <div class="col-span-12 xl:col-span-8 mt-6">
                            <div class="intro-y block sm:flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Official Store
                                </h2>
                                <div class="sm:ml-auto mt-3 sm:mt-0 relative text-gray-700 dark:text-gray-300">
                                    <i data-feather="map-pin" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i> 
                                    <input type="text" class="input w-full sm:w-40 box pl-10" placeholder="Filter by city">
                                </div>
                            </div>
                            <div class="intro-y box p-5 mt-12 sm:mt-5">
                                <div>250 Official stores in 21 countries, click the marker to see location details.</div>
                                <div class="report-maps mt-5 bg-gray-200 rounded-md" data-center="-6.2425342, 106.8626478" data-sources="/dist/json/location.json"></div>
                            </div>
                        </div>
                        <!-- END: Official Store -->
                        <!-- BEGIN: Weekly Best Sellers -->
                        <div class="col-span-12 xl:col-span-4 mt-6">
                            <div class="intro-y flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Recently Users
                                </h2>
                            </div>
                            <div class="mt-5" style="height: 585px;overflow: scroll;">
								

								<?php $__currentLoopData = $recentlyUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="intro-y">
                                    <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
										<?php if(empty($u->image)): ?>
											<img alt="Midone Tailwind HTML Admin Template" src="<?php echo e(asset('img/user_avatar.jpg')); ?>">
											<?php else: ?>
											<img alt="Midone Tailwind HTML Admin Template" src="<?php echo e(asset('/storage/'. $u->image)); ?>">
	  									<?php endif; ?>
										</div>	
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium"><?php echo e($u->name); ?></div>
                                            <div class="text-gray-600 text-xs"><?php echo e($u->created_at->format('M-D-Y')); ?></div>
                                        </div>
                                        <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium"><?php echo e(count($u->products)); ?> Ads</div>
                                    </div>
                                </div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!-- <a href="#" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">View More</a>  -->
                            </div>
                        </div>
						<!-- END: Weekly Best Sellers -->
						
						  <!-- BEGIN: Weekly Top Products -->
						  <div class="col-span-12 mt-6">
                            <div class="intro-y block sm:flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
								Recently Ads
                                </h2>
                                
                            </div>
                            <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
							<table id="example" class="table table-report sm:mt-2">
									<thead>
										<tr>
										
											<th>Name</th>
											<th>image</th>
											<th>Category</th>
											<th>SubCategory</th>
											<th>Type</th> <!-- free or sponsored -->
											<th>Status</th>
											<!-- <th>show</th> -->
											<th> Change Status</th>
											<th>Action</th>
											
										</tr>
									</thead>
									<tbody>
									
										<?php $__currentLoopData = $recentlyAds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<?php echo csrf_field(); ?>
										
									
											<td style="width: 180px; overflow: hidden;"> <?php if($p->sponsored == 1): ?><img src="<?php echo e(asset('img/star.png')); ?>" style="width:20%;border-radius: 50%;"> <br><?php endif; ?> <?php echo e($p->name); ?></td>
											<td><img src="<?php echo e($p->main_image_url); ?>" style="width:20%;border-radius: 50%;"></td>
											<td><?php echo e($p->categories->name ?? ''); ?></td>
											<td><?php echo e($p->subcategory->name ?? ''); ?></td>
											<td>
											<?php if($p->free == 1): ?>
												Free
											<?php elseif($p->sponsored == 1 ): ?>
												Sponsored
											<?php else: ?> 
												Not defiend        
											<?php endif; ?>
											</td>
											<!-- <td><?php echo e($p->ad_position); ?></td> -->
											<td>
											<?php if($p->approved == 1): ?>
												Approved
											<?php else: ?> 
												Pending        
											<?php endif; ?>
											</td>
											<!-- <td>
											<a href="<?php echo e(route('admin.product.show',$p->id)); ?>" class="btn btn-success">Show</a>
											
											</td> -->
											<td>
											<!-- <a href="<?php echo e(route('admin.product.edit',$p->id)); ?>" class="btn btn-info">edit</a> -->
											<a href="<?php echo e(route('admin.product.approve',$p->id)); ?>" class="btn btn-info">Approve</a>
											
											</td>
											<td>
											<a href="<?php echo e(route('admin.product.show',$p->id)); ?>" class="flex items-center text-theme-6"><i data-feather="check-square" class="w-4 h-4 mr-1"></i>Show</a>
											<form action="<?php echo e(route('admin.product.destroy',$p->id)); ?>" method="POST">
											<?php echo e(method_field('DELETE')); ?>

											<?php echo csrf_field(); ?>
											<a class="flex items-center text-theme-6" href="#" onclick="this.parentNode.submit()"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
											</form> 
											</td>
										</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</tbody>
								

							</table>
                            </div>
							 

                        </div>
                        <!-- END: Weekly Top Products -->
					</div>
	</div>
	
<!-- 
<div class="row">
        <div class="col-md-6">
                    <div class="counter" style="background-color:yellowgreen;">
           
            <a href=""> <h2 class="timer count-title count-number color" data-to="<?php echo e(count($free)); ?>" data-speed="1500"></h2>
            <p class="count-text color">Free Products</p></a>
            </div>
        </div>


        <div class="col-md-6">
                    <div class="counter" style="background-color:#ff4f4f;">
          
            <a href=""> <h2 class="timer count-title count-number color" data-to="<?php echo e(count($sponsored)); ?>" data-speed="1500"></h2>
            <p class="count-text color">Sponsored Products</p></a>
            </div>
        </div>

        <div class="col-md-6">
                    <div class="counter" style="background-color:#ffd945;">
         
            <a href=""> <h2 class="timer count-title count-number color" data-to="<?php echo e(count($users)); ?>" data-speed="1500"></h2>
            <p class="count-text color">Users</p></a>
            </div>
        </div>


        <div class="col-md-6">
                    <div class="counter" style="background-color:rgb(190, 185, 255);">
           
            <a href=""> <h2 class="timer count-title count-number color" data-to="<?php echo e(count($seller)); ?>" data-speed="1500"></h2>
            <p class="count-text color">Sellers</p></a>
            </div>
		</div>
		
		<div class="col-md-6">
                    <div class="counter" style="background-color:yellowgreen;">
      
            <a href=""> <h2 class="timer count-title count-number color" data-to="<?php echo e($totalAdsVisits); ?>" data-speed="1500"></h2>
            <p class="count-text color">Total Ads Visits</p></a>
            </div>
		</div>
		<div class="col-md-6">
                    <div class="counter" style="background-color:#ffd945;">
            
            <a href=""> <h2 class="timer count-title count-number color" data-to="<?php echo e(count($subscribers)); ?>" data-speed="1500"></h2>
            <p class="count-text color">Subscribers</p></a>
            </div>
		</div>
		
		<div class="col-md-6">
                    <div class="counter" style="background-color:#f1f5f8; max-height:500px; overflow:scroll">
          
			<?php echo $chart->container(); ?>

			<p class="count-text color">Subscribers</p></a>
            </div>
		</div>
		

		
        
</div> -->
<!-- <a-row type="flex" class="mt-1" justify="center">
    <a-col :span="24">
        <a-card  title="Admin Dashboard">
            <div>
                <p>We will really appriciate if you give us any feedback about the project.
                It helps us to developed more better.</p>
                <p>You can help us in my ways like helping in our 
                    <a href="https://github.com/avored/documentation" title="AvoRed Documantation Repository">docs</a>, 
                    <a href="https://github.com/avored/framework" title="AvoRed Framework Repository">framework</a>, or create an
                    <a href="https://github.com/avored/laravel-ecommerce/issues" title="Avored laravel repository">issue</a>.
                </p>
                
            </div>
        </a-card>
    </a-col>
</a-row> -->

<?php echo $chart->script(); ?>

       
<?php $__env->stopSection(); ?>


<script>
		(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
</script>


	


<?php echo $__env->make('avored::mylayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/admin.blade.php ENDPATH**/ ?>