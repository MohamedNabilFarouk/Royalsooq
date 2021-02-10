@extends('layouts.app')
@section('content')
<style>
iframe{
    width:100%; !important;
    height:250px ; !important;
}
img {
  max-width: 100%; }
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
  @media screen and (max-width: 996px) {
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

@media screen and (min-width: 997px) {
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

@keyframes opacity {
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
<div class="container">

<ul class="breadcrumb">
                    <li><a href="{{url('/')}}">Home</a>
                    </li>
                    <li><a href="#">{{$products[0]->name}}</a>
                    </li>
                </ul>
            <div class="row">
                <br>
<br>
                <div class="col-md-10 col-md-offset-1">
                    <!-- <div id="review-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
                        <h3>Add a Review</h3>
                        <form>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" placeholder="e.g. John Doe" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="text" placeholder="e.g. jogndoe@gmail.com" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Review</label>
                                <textarea class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Rating</label>
                                <ul class="icon-list icon-list-inline star-rating" id="star-rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit" />
                        </form>
                    </div> -->
                    <div class="row">
                        <div class="preview col-md-8"style="
    background: white;
">
@if(count($products[0]->images) == 1)
                        <img src="{{$products[0]->main_image_url}}" alt="Image Alternative text" style="width:100%;" title="{{$products[0]->name}}" />
  @else
                      
                        
						
						<div class="preview-pic tab-content">
                        <?php $c=0;?>
        <div class="fotorama" data-nav="thumbs" data-allowfullscreen="1" data-thumbheight="150" data-thumbwidth="150">

                        @foreach($products[0]->images as $i) 
                        <img src="{{asset('storage/'. $i->path)}}" alt="Image Alternative text" title="Gamer Chick" />

                        <!-- <div class="<?php // if($c==0){echo 'tab-pane active';}else{echo 'tab-pane';} ?>" id="pic-{{$i->id}}"><img src="{{asset('storage/'. $i->path)}}" /></div>
                        <?php //$c++;?>  -->
                        @endforeach
        </div>
						</div>
						<!-- <ul class="preview-thumbnail nav nav-tabs">
                            <?php //$counter=0;?>
                        @foreach($products[0]->images as $i) 
						  <li <?php // if($counter==0) echo 'class="active"' ?>><a data-target="#pic-{{$i->id}}" data-toggle="tab"><img src="{{asset('storage/'. $i->path)}}" /></a></li>
                          <?php // $counter++ ;?>
                          @endforeach
  
                        
                        
                        </ul> -->
						@endif
				
                           
                            <br>
                            <div style="
    margin-top: 5px;
    text-align: center;

">
                            <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<style>
    .checked {
  color: orange;
}
</style>
</div>


<div class="tabbable">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#tab-1"  data-toggle="tab"><i class="fa fa-pencil"></i>Desciption</a>
                            </li>
                            <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-info"></i>Contact Information</a>
                            </li>
                              <li><a href="#tab-8" data-toggle="tab"><i class="fa fa-play"></i>video</a>
                            </li>
                            <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-comments"></i>Reviews</a>

                            <!-- <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-truck"></i>Shipping & Payment</a>
                            </li>
                            <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-comments"></i>Reviews</a>
                            </li> -->
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab-1">
                               {!! $products[0]->description !!}
                            </div>
                               
                            <div class="tab-pane fade" id="tab-2">
                             Name:  {!! $products[0]->user->name ?? null !!} <br>
                             phone:  {!! $products[0]->user->phone ?? null !!}
                            </div>
                               <div class="tab-pane" id="tab-8">
                                   
                          <iframe width="200" height="200"
                            src="{{$products[0]->video}}">
                            </iframe>
                            </div>
                            <div class="tab-pane fade" id="tab-3">
                                <p>Dictum odio etiam phasellus eget metus blandit nam ac in vivamus nisi nisi lobortis scelerisque quis nisl ligula torquent mattis consectetur netus commodo senectus primis natoque quisque cursus molestie odio</p>
                                <p>Primis massa conubia magnis gravida faucibus nisi hendrerit libero mus montes vitae imperdiet porta arcu mi ac praesent pulvinar quam orci augue pharetra taciti cum quam ligula netus suspendisse dolor</p>
                            </div>


                            <div class="tab-pane fade" id="tab-4">
                                <ul class="comments-list">
                                    <li>
                                        <!-- REVIEW -->
                                        <article class="comment">
                                            <div class="comment-author">
                                                <img src="{{asset('img/gamer_chick_50x50.jpg')}}" alt="Image Alternative text" title="Gamer Chick" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star-o"></i>
                                                    </li>
                                                </ul><span class="comment-author-name">John Doe</span>
                                                <p class="comment-content">Adipiscing natoque mus nam luctus fringilla consectetur dui mattis torquent diam cum sociosqu nisi dis litora phasellus facilisis</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <!-- REVIEW -->
                                        <article class="comment">
                                            <div class="comment-author">
                                                <img src="{{asset('img/gamer_chick_50x50.jpg')}}" alt="Image Alternative text" title="Ana 29" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star-o"></i>
                                                    </li>
                                                </ul><span class="comment-author-name">Elizabeth Wallace</span>
                                                <p class="comment-content">Egestas fermentum sagittis ligula velit cum sagittis risus lacinia vel taciti enim porttitor venenatis tellus sollicitudin inceptos torquent</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <!-- REVIEW -->
                                        <article class="comment">
                                            <div class="comment-author">
                                                <img src="{{asset('img/gamer_chick_50x50.jpg')}}" alt="Image Alternative text" title="Afro" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="5/5 rating">
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                </ul><span class="comment-author-name">Cyndy Naquin</span>
                                                <p class="comment-content">Sollicitudin per metus nec faucibus aliquam placerat integer congue parturient pulvinar class</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <!-- REVIEW -->
                                        <article class="comment">
                                            <div class="comment-author">
                                                <img src="{{asset('img/gamer_chick_50x50.jpg')}}" alt="Image Alternative text" title="Bubbles" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star-o"></i>
                                                    </li>
                                                </ul><span class="comment-author-name">Olivia Slater</span>
                                                <p class="comment-content">Amet hac aliquam ante blandit in adipiscing metus primis sagittis vestibulum mauris at quis praesent accumsan platea adipiscing non</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <!-- REVIEW -->
                                        <article class="comment">
                                            <div class="comment-author">
                                                <img src="{{asset('img/gamer_chick_50x50.jpg')}}" alt="Image Alternative text" title="Me with the Uke" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star-o"></i>
                                                    </li>
                                                </ul><span class="comment-author-name">Ava McDonald</span>
                                                <p class="comment-content">Vestibulum massa suspendisse cursus eros ac facilisis eleifend platea rhoncus maecenas volutpat sodales mattis quam tristique sem ligula vehicula ut</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <!-- REVIEW -->
                                        <article class="comment">
                                            <div class="comment-author">
                                                <img src="{{asset('img/gamer_chick_50x50.jpg')}}" alt="Image Alternative text" title="AMaze" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star-o"></i>
                                                    </li>
                                                </ul><span class="comment-author-name">Joseph Watson</span>
                                                <p class="comment-content">Blandit cursus ac et mauris curabitur tortor feugiat nulla cursus cras odio non amet phasellus sapien donec convallis ac tortor nullam</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <!-- REVIEW -->
                                        <article class="comment">
                                            <div class="comment-author">
                                                <img src="{{asset('img/gamer_chick_50x50.jpg')}}" alt="Image Alternative text" title="Chiara" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="5/5 rating">
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                </ul><span class="comment-author-name">Frank Mills</span>
                                                <p class="comment-content">Maecenas tortor class nisl ultrices ultricies a mollis suscipit eleifend dolor nullam quis ultricies ultrices porta netus nibh tellus condimentum sociis feugiat est platea lectus pretium sociosqu scelerisque</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <!-- REVIEW -->
                                        <article class="comment">
                                            <div class="comment-author">
                                                <img src="{{asset('img/gamer_chick_50x50.jpg')}}" alt="Image Alternative text" title="Andrea" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="5/5 rating">
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                </ul><span class="comment-author-name">Oliver Ross</span>
                                                <p class="comment-content">Ullamcorper vel adipiscing aenean viverra quis pharetra class nam porttitor leo praesent eleifend malesuada per himenaeos commodo iaculis dolor adipiscing quis amet</p>
                                            </div>
                                        </article>
                                    </li>
                                </ul><a class="popup-text btn btn-primary" href="#review-dialog" data-effect="mfp-zoom-out"><i class="fa fa-pencil"></i> Add a review</a>
                            </div>
                            
                        </div>
                    </div>



                        </div>
                        <div class="col-md-4">
                             <div class="col-md-12">
                            <div class="product-info box">
                                <!-- <ul class="icon-group icon-list-rating text-color" title="4.5/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half-empty"></i>
                                    </li>
                                </ul>	<small><a href="#" class="text-muted">based on 8 reviews</a></small> -->
                                <div>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Outdoors-man-portrait_%28cropped%29.jpg" alt="Smiley face" style="
    width: 24%;
    float: right;
    border-radius: 16%;
"/>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<style>
    .checked {
  color: orange;
}
</style>
                                <h3>{{$products[0]->name}}</h3>
                                </div>
                                <p class="product-info-price">${{$products[0]->price}}</p>
                                <p class="text-smaller text-muted">{!! $products[0]->description !!}</p>
                                <ul class="icon-list list-space product-info-list">
                                    <li><i class="fa fa-check"></i>Id cubilia</li>
                                    <li><i class="fa fa-check"></i>Euismod primis</li>
                                    <li><i class="fa fa-check"></i>Amet porta</li>
                                    <li><i class="fa fa-check"></i>Facilisis cum</li>
                                    <li><i class="fa fa-check"></i>Morbi curae</li>
                                </ul>
                                <ul class="list-inline">
                                    <li><a href="#tab-2" data-toggle="tab"  class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Contact with Seller</a>
                                    
                                    </li>
                                    <!-- <li><a href="#" class="btn"><i class="fa fa-star"></i> To Wishlist</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                      
                             <div class="col-md-12">
                                 
                            <div class="product-info box"style="
    margin-top: 20px;
">
                                  <h3 style ="text-align:center">seller map</h3>
          {!!$products[0]->map!!}
           <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.164681447817!2d31.339894385316768!3d30.06081368187637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e6f289f1813%3A0x7a50519458d07a8a!2zNTIg2LnYqNin2LMg2KfZhNi52YLYp9iv2Iwg2KfZhNmF2YbYt9mC2Kkg2KfZhNij2YjZhNmJ2Iwg2YXYr9mK2YbYqSDZhti12LHYjCDZhdit2KfZgdi42Kkg2KfZhNmC2KfZh9ix2KnigKwgMTE3NjU!5e0!3m2!1sar!2seg!4v1593100676780!5m2!1sar!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>        </div></div> -->
                    </div></div>
                    <div class="gap"></div>
                    
                    <div class="gap"></div>
                    
                </div>
            </div>



<!-- carosel -->

            <h1 class="mb20 text-center">Related Products <small><a href="#"></a></small></h1>
    <div class="row row-wrap home-owlC2 animated" id='7thHomeSection'>
               
              
            @foreach($related_products as $product)

            <div>
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="{{$product->main_image_url}}" alt="Image Alternative text" title="Gamer Chick" style="height: 200px;" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.7/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">{{$product->name}}</h5>
                            <p class="product-desciption">{{$product->sku}}</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">{{$product->price}} $</span>
                                    </li>
                                </ul>
                                <p class="product-category"><i class="fa fa-headphones"></i></p>
                                <ul class="product-actions-list">
                                    <!-- <li>
                                    <form method="post" action="#">
                                    @csrf
                                    <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i>  </button>
                                    <input type="hidden" name="slug" value="{{$product->slug}}">
                                    <input type="hidden" name="qty" value="1">
                                </form>   
                                    </li>
                                    @auth
                                <li>
                                <form method="post" action="{{route('add.favorites')}}">
                                    @csrf
                                    <button class="btn" type="submit"><i class="fa fa-heart"></i> </button>
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    
                                    
                                </form>   
                                </li>
                                @endauth -->
                                    <li><a href='{{$product->slug}}' class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    <a href="{{$product->slug}}" class="btn btn-sm" style="
    background: #46c505;
    color: #fff;
"><i class="fa fa-phone"></i> call</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
             </div>




            








           


</div>




            


             <!-- end carosel -->





        </div>
        <script src="js/fotorama.js"></script>

        <script>
    $(function(){
        $ $('#phone').hide();
            $('#seller').click(function(){
                $('#phone').show();
            });
    });
</script>


@stop