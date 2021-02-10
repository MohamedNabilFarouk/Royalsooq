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


<?php $__env->startSection('meta_title'); ?>
    Royal Sooq E commerce Admin Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_title'); ?>
    Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- <a-row type="flex" :gutter="20" justify="center">
    <?php echo e($orderWidget->render()); ?>

    <?php echo e($customerWidget->render()); ?>

    <?php echo e($revenueWidget->render()); ?>

</a-row> -->

<div class="row">
        <div class="col-md-6">
                    <div class="counter" style="background-color:yellowgreen;">
            <!-- <i class="fa fa-code fa-2x"></i> -->
            <a href=""> <h2 class="timer count-title count-number color" data-to="<?php echo e(count($free)); ?>" data-speed="1500"></h2>
            <p class="count-text color">Free Products</p></a>
            </div>
        </div>


        <div class="col-md-6">
                    <div class="counter" style="background-color:#ff4f4f;">
            <!-- <i class="fa fa-code fa-2x"></i> -->
            <a href=""> <h2 class="timer count-title count-number color" data-to="<?php echo e(count($sponsored)); ?>" data-speed="1500"></h2>
            <p class="count-text color">Sponsored Products</p></a>
            </div>
        </div>

        <div class="col-md-6">
                    <div class="counter" style="background-color:#ffd945;">
            <!-- <i class="fa fa-code fa-2x"></i> -->
            <a href=""> <h2 class="timer count-title count-number color" data-to="<?php echo e(count($users)); ?>" data-speed="1500"></h2>
            <p class="count-text color">Users</p></a>
            </div>
        </div>


        <div class="col-md-6">
                    <div class="counter" style="background-color:rgb(190, 185, 255);">
            <!-- <i class="fa fa-code fa-2x"></i> -->
            <a href=""> <h2 class="timer count-title count-number color" data-to="<?php echo e(count($seller)); ?>" data-speed="1500"></h2>
            <p class="count-text color">Sellers</p></a>
            </div>
        </div>
        
</div>
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
<?php echo $__env->make('avored::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/admin.blade.php ENDPATH**/ ?>