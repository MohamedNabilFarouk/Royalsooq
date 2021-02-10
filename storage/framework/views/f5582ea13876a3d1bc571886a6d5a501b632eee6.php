<?php $__env->startSection('breadcrumb'); ?>
<a-breadcrumb style="margin: 16px 0">
    <a-breadcrumb-item>
      <a href="<?php echo e(route('home')); ?>" title="home">
        Home
      </a>
    </a-breadcrumb-item>
    <a-breadcrumb-item>
      <a href="<?php echo e(route('account.dashboard')); ?>" title="user dashboard">
        Seller Dashboard
      </a>
    </a-breadcrumb-item>

    <a-breadcrumb-item>
        Add Service
    </a-breadcrumb-item>
</a-breadcrumb>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
      <div class="col-md-12 ">
        <div class="">
        <form action="<?php echo e(route('services.add')); ?>" method="post" enctype="multipart/form-data">
       <?php echo csrf_field(); ?>
    <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationServer013">Title</label>
      <input type="text" name="name" class="form-control is-valid" id="validationServer013" placeholder="Service Title" required>
    </div>


    <div class="col-md-3 mb-3">
      <label for="validationServer043">Category</label>
      <select class="form-control" name='category_id'  id='sel_cat'>
      <option value='0'>-- Select Category --</option>
      <?php $__currentLoopData = $services_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
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
      <div class="input-group" style='margin:0 auto;'>
        <input type="number" name="price" class="form-control is-invalid" id="validationServerUsername33" placeholder="Price" required>
      </div>
    </div>
   
  
  </div>


  <div class="form-row" >
    <!-- <div class="col-md-6 mb-3">
      <label for="validationServer033">City</label>
      <input type="text" class="form-control is-invalid" id="validationServer033" placeholder="City"
        required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div> -->

    <div class="col-md-6 mb-3" style='margin-top:15px'>
      <label for="validationServer043">image</label>
      <input type="file" name="image"  class="form-control is-invalid" id="validationServer043" required style='padding:3px;' multiple>
    </div>

    <div class="col-md-6 mb-3" style='margin-top:15px'>
      <label for="validationServer023">Description</label>
      <textarea name="des" class="form-control is-valid" id="validationServer023" required></textarea>
    </div>
    <hr> 
    <h5 class="text-center">Add additional Properties to this service</h5>

    <div class="input_fields_wrap">
    
    <div class="form-group"><textarea name="des_pro[]" class="form-control is-valid" id="validationServer023" >Description</textarea></div>
    <div class="form-group"><input type="number" name="price_pro[]" class="form-control is-invalid" id="validationServerUsername33" placeholder="Price" ></div>
    <div class="form-group"><input type="number" name="days_pro[]" class="form-control is-invalid" id="validationServerUsername33" placeholder="days" ></div>
    <button class="add_field_button">Add More Fields</button>

</div>



    <div class='col-md-12' style='margin-top:15px'>
         <button name="submit" class="btn btn-primary" type="submit" style='width:50%;box-shadow:0px 0px 0px;border-radius:10px;'>Send</button>
     </div>
  
  </div>
 
 
  
</div>
</form>
        </div>
      </div>
	</div>
</div>


<!--  ajax Script  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"/>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


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

// add more fileds

$(document).ready(function() {
	var max_fields      = 10; //maximum input boxes allowed
	var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
	var add_button      = $(".add_field_button"); //Add button ID
	
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append('<div> <div class="form-group"> <textarea name="des_pro[]" class="form-control is-valid" id="validationServer023" >Description</textarea></div> <div class="form-group"><input type="number" name="price_pro[]" class="form-control is-invalid" id="validationServerUsername33" placeholder="Price" > </div> <div class="form-group"><input type="number" name="days_pro[]"  class="form-control is-invalid" id="validationServerUsername33" placeholder="days" ></div></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});

</script>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\resources\views/seller/addservice.blade.php ENDPATH**/ ?>