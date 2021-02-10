<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  




<?php $__env->startSection('title'); ?>
Show Advertisment
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<style>

img {
  max-width: 100%; 
  display: inline-block;

  }
.tab-content > .active {
    display: block;
    display: flex;
    align-items: center;
    justify-content: center;
}
.fluid-width-video-wrapper {
    padding: 29% !important;
}
.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media  screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  background: #eee;
  padding: 3em;
  line-height: 1.5em; }

@media  screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes  opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

/*# sourceMappingURL=style.css.map */

</style>
<div class="">


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

                                                  <h4><?php echo e($p->name); ?> </h4>

                                            </div>



                        </div>



                        <div class="row row-wrap" style="display: flex;justify-content: center;">

                                                      <div class="col-md-2  col-12 text-center ">

                                                        <label>Category</label>

                                                      </div>

                                                      <div class="col-md-8 col-12 text-center ">

                                                      <h4><?php echo e($p->categories->name); ?> </h4>

                                                      </div>





                        </div>





                        <div class="row row-wrap" style="display: flex;justify-content: center;">

                                                      <div class="col-md-2  col-12 text-center ">

                                                        <label>Sub-Category</label>

                                                      </div>

                                                      <div class="col-md-8 col-12 text-center ">


                                                      <h4><?php echo e($p->subcategory->name); ?> </h4>

                                                      </div>



                        </div>                              











                        <div class="row row-wrap" style="display: flex;justify-content: center;">

                            

                                                    <div class="col-md-2  col-12 text-center ">

                                                        <label>Price</label>

                                                    </div>

                            



                                                    <div class="col-md-8 col-12 text-center ">

                                                    <h4><?php echo e($p->price); ?> </h4>


                                                      </div>

                        </div>









                        <div class="row row-wrap" style="display: flex;justify-content: center;">

                            

                                                    <div class="col-md-2  col-12 text-center ">

                                                        <label>Description</label>

                                                    </div>

                                                    <div class="col-md-8 col-12 text-center ">

                                                    <h5><?php echo e($p->description); ?> </h5>
                                                    </div>

                        </div>



<!-- type -->

<div class="row row-wrap" style="display: flex;justify-content: center;">

            <div class="col-md-2  col-12 text-center ">

            <label>Type</label>

            </div>

            <div class="col-md-8 col-12 text-center ">

            <?php if($p->free == 1): ?>
            <h4>Free</h4>
            <?php elseif($p->sponsored == 1): ?>
            <h4>sponsored</h4>
            <?php endif; ?>
            </div>





</div>

<!-- position in home page -->

<div class="row row-wrap" style="display: flex;justify-content: center;">

            <div class="col-md-2  col-12 text-center ">

            <label>position</label>

            </div>

            <div class="col-md-8 col-12 text-center ">

            <h4><?php echo e($p->position); ?> </h4>

            </div>





</div>



                        <!-- images -->



                        <div class="row row-wrap" style="display: flex;justify-content: center;">

                            

                            <div class="col-md-2  col-12 text-center ">

                                <label style="display: block;">Photos</label>

                            </div>



                            <div class="col-md-8 col-12 text-center ">

                            <?php if(count($p->images) == 1): ?>
                        <img src="<?php echo e($p->main_image_url); ?>" alt="Image Alternative text" style="width:30%;" title="<?php echo e($p->name); ?>" />
  <?php else: ?>
                      
                        
						
						
                        <?php $__currentLoopData = $p->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                       
                        <img src="<?php echo e(asset('storage/'. $i->path)); ?>" alt="Image Alternative text" style="width:20%;" title="<?php echo e($p->name); ?>" />

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						

						<?php endif; ?>
				
    

                        </div>

  </div>

                        <!-- end images -->


                        <div class="row row-wrap" style="display: flex;justify-content: center;">

                                                    <div class="col-md-2  col-12 text-center ">

                                                        <label>Video Link</label>

                                                    </div>

                                            <div class="col-md-8 col-12 text-center ">

                                            <iframe width="200" height="200"
src="<?php echo e($p->video); ?>">
</iframe>

                                            </div>



                        </div>



<form action="<?php echo e(route('admin.product.approve.home',$p->id)); ?>" method="post">
<?php echo csrf_field(); ?>
<!-- home position -->


<!-- approval -->


<div class="row row-wrap" style="display: flex;justify-content: center;">

            <div class="col-md-2  col-12 text-center ">

            <label>Approval</label>

            </div>

            <div class="col-md-4 col-12 text-center ">
                  <?php if($p->approved==1): ?>
                  Yes
                  <?php else: ?>
                  No
                  <?php endif; ?>
            </div>
            <div class="col-md-4 col-12 text-center ">
            <label><input type="checkbox" value='1' name="pending" > pending this ad</label>
            </div>


</div>




<div class="row row-wrap" style="display: flex;justify-content: center;">

            <div class="col-md-2  col-12 text-center ">

            <label>Home Position</label>

            </div>

            <div class="col-md-8 col-12 text-center ">

                            <div class="radio">
                  
                  <!-- <label><input type="radio" value='latest' name="home_position" <?php if($p->latest2 == 1): ?> checked  <?php endif; ?>> Latest Ads</label> -->
                  <label><input type="checkbox" value='featured' name="home_position" <?php if($p->latest == 1): ?> checked  <?php endif; ?>> Featured Ads</label>

                  <!-- <label><input type="radio" value='weekly' name="home_position"> Weekly Sponsored</label> -->
                </div>
              

            </div>






</div>


<div class="row row-wrap" style="display: flex;justify-content: center;">

            <div class="col-md-2  col-12 text-center ">

            <label>Hide from Home</label>

            </div>

            <div class="col-md-8 col-12 text-center ">

                            
                  
                                <label><input type="checkbox" value='1' name="home_hide" > Hide</label>

                          
              

            </div>






</div>
















                                                <div class="row row-wrap" style="display: flex;justify-content: center;">

                            

                                                    <div class="col-md-4  col-12 text-center " style="border-top: gray 1px solid; padding-top: 10px;width: 100%;">
                                                    <input class="btn btn-info" type='submit' name='submit' value='Edit'>
                                                    <!-- <a href="<?php echo e(route('admin.product.approve',$p->id)); ?>" class="btn btn-info">Approve</a> -->
                                                    </div>



                                                </div>

  </form>

                          

                          </div>





                        

                       

                


        </div>


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
    <script src="js/fotorama.js"></script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('avored::mylayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/o12s5ul8n01l/public_html/vendor/avored/framework/src/../resources/views/catalog/product/show.blade.php ENDPATH**/ ?>