<?php $__env->startSection('content'); ?>
<Style>

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

      <h1 class="text-center" style="background-color:#2a8fbd;color:white;width:50%;margin:50px auto 20px;border-radius: 20px;padding:15px 10px;">Nice To Post New Ads  <a>For FREE</a></h1>
      <div class="container" style="margin-top:70px; margin-bottom:70px;padding:20px;background-image: linear-gradient(#333333, #2a8fbd);color: white;border-radius: 20px;">
           <form action="<?php echo e(route('free.ads.store')); ?>" method="post" enctype="multipart/form-data">
       <?php echo csrf_field(); ?>
    <div class="form-row" style='text-align:center;'>
    <div class="col-md-3 mb-3">
      <label for="validationServer013">Product name</label>
      <input type="text" name="name" value='<?php echo e($ad->name); ?>' class="form-control is-valid" id="validationServer013" placeholder="product name" required>
    </div>


    <div class="col-md-3 mb-3">
      <label for="validationServer043">Category</label>
      <select class="form-control" name='category_id'  id='sel_cat'>
      <option value='0'>-- Select Category --</option>
      <?php $__currentLoopData = $freeproduct_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
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
        <input type="number" name="price" value='<?php echo e($ad->price); ?>' class="form-control is-invalid" id="validationServerUsername33" placeholder="Price" required>
      </div>
    </div>
   
  
  </div>


  <div class="form-row" style='text-align:center;'>
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
      <input type="file" name="image[]"  class="form-control is-invalid" id="validationServer043" required style='padding:3px;' multiple>
    </div>

    <div class="col-md-6 mb-3" style='margin-top:15px'>
      <label for="validationServer023">Description</label>
      <textarea name="description" class="form-control is-valid" id="validationServer023"required><?php echo e($ad->description); ?></textarea>
    </div>
    

  
  </div>
  <hr>
 <br><br>

<h2 class="text-center text-white">Choose your ads position</h2>
  <div class="col-md-4 mb-3">
  <label>
  <input type="radio" name="ad_position" value="Slider" checked>
  <img src="http://placehold.it/40x60/0bf/fff&text=A" style="width: 100px;">
</label>


    </div>


    <div class="col-md-4 mb-3">
    <label>
  <input type="radio" name="ad_position" value="Latest 1" checked>
  <img src="http://placehold.it/40x60/0bf/fff&text=B" style="width: 100px;">
</label>
    </div>


    <div class="col-md-4 mb-3">
    <label>
  <input type="radio" name="ad_position" value="Latest 2" checked>
  <img src="http://placehold.it/40x60/0bf/fff&text=C" style="width: 100px;">
</label>
    </div>
  

    <div class='col-md-12' style='margin-top:15px'>
         <button name="submit" class="btn btn-primary" type="submit" style='width:100%;box-shadow:0px 0px 0px;border-radius:10px;'>Send</button>
     </div>

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



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\royal_git\resources\views/blades/UpdateFreeAd.blade.php ENDPATH**/ ?>