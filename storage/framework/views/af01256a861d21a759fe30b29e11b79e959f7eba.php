<style>
.image-upload > input
{
    display: none;
}

.image-upload img
{
    width: 80px;
    cursor: pointer;
}


/* ads position */


/* HIDE RADIO */
[type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
[type=radio] + img {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + img {
  outline: 2px solid #f00;
}

</style>
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
        Add Sponsored ads
    </a-breadcrumb-item>
</a-breadcrumb>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
      <div class="col-md-12 ">
        <div class="">
        <form action="<?php echo e(route('sponsored.add')); ?>" method="post" enctype="multipart/form-data">
       <?php echo csrf_field(); ?>
       <div class="col-md-12">
       <div class="row row-wrap" style="display: flex;justify-content: center;">
    
    <!-- <div class="col-md-2  col-12 text-center ">
        <label>Contact me By</label>
    </div>

    <div class="col-md-8 col-12">
        <input type="radio" name="contact" style="margin: 0 5px 0 0;">
        <label>Both</label>
        <input type="radio" name="contact" style="margin: 0 5px;">
        <label>Phone</label>
    </div> -->
  
    
</div>

<div class="row row-wrap" style="display: flex;justify-content: center;">
                            <div class="col-md-2  col-12 text-center ">
                                <label>Title</label>
                            </div>
                    <div class="col-md-8 col-12 text-center ">
                          <input type="text" name="name" class="form-control"  placeholder="product name" required>
                    </div>

</div>

<div class="row row-wrap" style="display: flex;justify-content: center;">
                              <div class="col-md-2  col-12 text-center ">
                                <label>Category</label>
                              </div>
                              <div class="col-md-8 col-12 text-center ">
                              <select class="form-control" name='category_id'  id='sel_cat'>
      <option value='0'>-- Select Category --</option>
      <?php $__currentLoopData = $sponsoredproduct_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
      <option value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
                              </div>


</div>


<div class="row row-wrap" style="display: flex;justify-content: center;">
                              <div class="col-md-2  col-12 text-center ">
                                <label>Sub-Category</label>
                              </div>
                              <div class="col-md-8 col-12 text-center ">

                               <select name='subcategory_id' class="form-control"  id='sel_sub'>
                                  <option value='0'>-- Select SubCategory --</option>
    
                                </select>
                              </div>

</div>                              





<div class="row row-wrap" style="display: flex;justify-content: center;">
    
                            <div class="col-md-2  col-12 text-center ">
                                <label>Price</label>
                            </div>
    

                            <div class="col-md-8 col-12 text-center ">
                              <input type="number" name="price" class="form-control " style="width: 25%;" placeholder="Price" required>

                              </div>
</div>




<div class="row row-wrap" style="display: flex;justify-content: center;">
    
                            <div class="col-md-2  col-12 text-center ">
                                <label>Description</label>
                            </div>
                            <div class="col-md-8 col-12 text-center ">
                            <textarea name="description" class="form-control"></textarea>
                            </div>
</div>




<!-- images -->

<div class="row row-wrap" style="display: flex;justify-content: center;">
    
    <div class="col-md-2  col-12 text-center ">
        <label style="display: block;">Photos</label>

        <small> Upload more images</small>
    </div>

    <div class="col-md-8 col-12 text-center ">
        <div style="width: 50%;display: flex;justify-content: center;align-items: center;flex-wrap: wrap;">
            <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">
                <label for="file-input">
                <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>

                </label>
                        <input type="file" name="image[]" id="file-input"  style="display: none;" multiple>
            </div>
            <!-- <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">
            <label for="file-input">
            <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>

                </label>
                <input type="file" name="image[]" id="file-input"   style="display: none;">
            </div>
            <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">
                <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>
                <input type="file"name="image[]"  style="display: none;">
            </div>
            <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">
                <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>
                <input type="file" name="image[]"  style="display: none;">
            </div>
            <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">
                <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>
                <input type="file" name="image[]"  style="display: none;">
            </div>
            <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">
                <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>
                <input type="file" name="image[]"  style="display: none;">
            </div>
            <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">
                <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>
                <input type="file" name="image[]"  style="display: none;">
            </div>
            <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">
                <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>
                <input type="file" name="image[]"  style="display: none;">
            </div> -->
        </div>
    </div>
    

    

    

    
</div>

<!-- end images -->




<div class="row row-wrap" style="display: flex;justify-content: center;">
    
                            <div class="col-md-2  col-12 text-center ">
                                <label>Choose your Ads Position </label>
                            </div>
                            <div class="col-md-8 col-12 text-center ">
        <div class="col-md-4 mb-3">
                        <label>
                        <input type="radio" name="ad_position" value="Slider" checked>
                        <img src="http://placehold.it/40x60/0bf/fff&text=A" style="width: 100px;">
                        </label>


    </div>


    <div class="col-md-4 mb-3">
        <label>
        <input type="radio" name="ad_position" value="Weekly" checked>
        <img src="http://placehold.it/40x60/0bf/fff&text=B" style="width: 100px;">
        </label>


    </div>






    <div class="col-md-4 mb-3">
        <label>
        <input type="radio" name="ad_position" value="New Arrival" checked>
        <img src="http://placehold.it/40x60/0bf/fff&text=C" style="width: 100px;">
        </label>


    </div>




  


                            </div>
</div>




<div class="row row-wrap" style="display: flex;justify-content: center;">
    
                            <div class="col-md-4  col-12 text-center " style="border-top: gray 1px solid; padding-top: 10px;width: 100%;">
                                <input type="submit" name="submit" value="submit" style="background-color: #025D8C;border: 0px;padding: 5px 10px;color: white;border-radius: 5px;">
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

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\resources\views/seller/addsponsored.blade.php ENDPATH**/ ?>