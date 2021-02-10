
<?php $__env->startSection('content'); ?>

<style>
  .center {text-align: center; margin-left: auto; margin-right: auto; margin-bottom: auto; margin-top: auto;}
 
</style>



<div class="container">
  <div class="row">
    <div class="span12">
   
        <!-- <center><h2>Recent Content :</h2></center> -->
      </div>
        <br />
        <div class="thumbnail span3 center">
          <h3><?php echo e($details[0]->name); ?></h3>
          <br>
          
          <div class="hero-unit">
            <img src='<?php echo e(asset("img/pngs/service.jpg")); ?>'>
          </div>
<br>
          <p><?php echo e($details[0]->des); ?></p>

          
        </div><!-- end sec 1-->
        <br><br>      


        <div class="thumbnail span3 center">
        <h5>Addetional properties for this Service</h5>
          <br>

          <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Property</th>
      <th scope="col">Days No. +</th>
      <th scope="col">Price + </th>
    </tr>
  </thead>
  <tbody>
  <form name="listForm">
  <?php $__currentLoopData = $details[0]->serviceproperty; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  
    <tr>
      <th scope="row"><div class="form-check">
  <input class="form-check-input position-static" type="checkbox" name="choice" onchange="checkTotal()"  value="<?php echo e($p->price); ?>" >
</div></th>
      <td><?php echo e($p->description); ?></td>
      <td><?php echo e($p->days); ?></td>
      <td><?php echo e($p->price); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
    </table>
        
        </div><!-- end sec 2-->
<br>

<div class="thumbnail span3 center">
<?php  
    $price = $details[0]->price;
 ?>
<h2 id="total">   PRICE:  <?php echo e($price); ?> $</h2>
</div>
</form>          
        <br />
        <p></p>
        <!-- By ConnerT HTML & CSS Enthusiast -->  
    </div>
  </div>
</div>






<!-- <div class="container">
    <div class="row">
        <img src='<?php echo e(asset("img/pngs/service.jpg")); ?>' style="width:50%">
    </div>

    <div class="col-md-6">

        <p><?php echo e($details[0]->des); ?></p>
    </div>

    <div class="col-md-6">
<?php $__currentLoopData = $details[0]->serviceproperty; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p><?php echo e($p->description); ?></p><br>
<p><?php echo e($p->price); ?></p>
<p><?php echo e($p->days); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div> -->


<?php $__env->stopSection(); ?>

<script type="text/javascript">
	function checkTotal() {
		document.getElementById('total').innerHTML = '';
		var sum = <?php echo e($price); ?>;
		for (i=0;i<document.listForm.choice.length;i++) {
		  if (document.listForm.choice[i].checked) {
		  	sum = sum + parseInt(document.listForm.choice[i].value);
		  }
		}
        document.getElementById('total').innerHTML='PRICE : '+ sum + ' $';
    	document.listForm.total.value = sum;
		
	}
</script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/resources/views/blades/ServiceDetails.blade.php ENDPATH**/ ?>