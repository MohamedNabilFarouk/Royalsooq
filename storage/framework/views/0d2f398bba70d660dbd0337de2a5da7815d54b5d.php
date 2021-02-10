<?php $__env->startSection('content'); ?>


      <h1 class="text-center" style="margin-top:70px;">Nice To Post New Ads  <a>For FREE</a></h1>
      <div class="container" style="margin-top:70px; margin-bottom:70px;">
   <form action="<?php echo e(route('free.ads.store')); ?>" method="post" enctype="multipart/form-data">
       <?php echo csrf_field(); ?>
    <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationServer013">Product name</label>
      <input type="text" name="name" class="form-control is-valid" id="validationServer013" placeholder="product name" required>
    </div>


    <div class="col-md-3 mb-3">
      <label for="validationServer043">Category</label>
      <select class="form-control" name='category_id'  id='sel_cat'>
      <option value='0'>-- Select Category --</option>
      <?php $__currentLoopData = $allcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
      <option value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>



    <div class="col-md-3 mb-3">
      <label for="validationServer043">Sub-Category</label>
      <select name='subcategory_id' class="form-control"  id='sel_sub'>
      <option value='0'>-- Select SubCategory --</option>
    
      </select>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationServerUsername33">Price</label>
      <div class="input-group">
        <input type="number" name="price" class="form-control is-invalid" id="validationServerUsername33" placeholder="Price" required>
      </div>
    </div>
   
  
  </div>


  <div class="form-row">
    <!-- <div class="col-md-6 mb-3">
      <label for="validationServer033">City</label>
      <input type="text" class="form-control is-invalid" id="validationServer033" placeholder="City"
        required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div> -->

    <div class="col-md-3 mb-3">
      <label for="validationServer043">image</label>
      <input type="file" name="image" class="form-control is-invalid" id="validationServer043" required>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationServer023">Description</label>
      <textarea name="description" class="form-control is-valid" id="validationServer023"required></textarea>
    </div>
  
  </div>
 <div class='row col-md-12'>
  <button name="submit" class="btn btn-primary" type="submit">Send</button>
</div>
</form></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"/>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



<!--  ajax Script  -->

    <script type='text/javascript'>

    $(document).ready(function(){

      // cat Change
      $('#sel_cat').change(function(){

         // cat id
         var id = $(this).val();

         // Empty the dropdown
         $('#sel_sub').find('option').not(':first').remove();

         // AJAX request 
         $.ajax({
           url: 'getSubCategories/'+id,
           type: 'get',
           dataType: 'json',
           success: function(response){

             var len = 0;
             if(response['data'] != null){
               len = response['data'].length;
             }

             if(len > 0){
               // Read data and create <option >
               for(var i=0; i<len; i++){

                 var id = response['data'][i].id;
                 var name = response['data'][i].name;

                 var option = "<option value='"+id+"'>"+name+"</option>"; 

                 $("#sel_sub").append(option); 
               }
             }

           }
        });
      });

    });

    </script>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\royal_git\resources\views/blades/freeAds.blade.php ENDPATH**/ ?>