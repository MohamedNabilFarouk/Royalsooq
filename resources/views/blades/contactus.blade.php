@extends('layouts.app')

@section('content')
<style>
    iframe{
    width:100%; !important;
    height:250px ; !important;
}
</style>

<?php
if(App::getLocale() === 'en'){
   
    $con_info=$contact_info[0]->english;
    $add= $address[0]->english ;
}else{
    
    $con_info= $contact_info[0]->arabic;
    $add = $address[0]->arabic;
}

?>
<section class="contact-1">
  <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-7">
              <div class="section-title mb-2">
                <!-- <h6>Get In Touch</h6> -->
                <h2>{{__('index.contact_us')}}</h2> 
              </div>
              <div class="contact-main">
              <form name="contactForm"  class="contact-form" method="post" action="{{route('contactus.store')}}">
                    @csrf   
                  <div class="messages"></div>
                  <div class="form-group col-md-6">
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="{{__('index.name')}}" required="required" data-error="Name is required.">
                   
                  </div>
                  <div class="form-group col-md-6 .">
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="{{__('index.email')}}" required="required" data-error="Valid email is required.">
                   
                  </div>
                 
                  <div class="form-group col-md-12 .">
                    <textarea id="form_message" name="message" class="form-control" placeholder="{{__('index.message')}}" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                
                  </div>
                  <div class="col-md-12">
                  <button class="btn btn-theme btn-radius"><span>{{__('index.send')}}</span>
                  </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-5 col-md-5 ml-auto sm-mt-5">
              <ul class="contact-info list-unstyled">
                <li class="mb-4"><i class="fa fa-map-marker"style="
    position: absolute;
    right: -5%;
    /* top: 0; */
    line-height: 24px;
    font-size: 30px;
    color: #2a8fbd;
    text-align: center;
"></i><span>{{__('index.address')}}:</span>
                  <p>{!! $add !!}</p>
                </li>
                <li class="mb-4"><i class="fa fa-envelope-o"style="
    position: absolute;
    right: -8%;
    /* top: 0; */
    line-height: 24px;
    font-size: 30px;
    color: #2a8fbd;
    text-align: center;
"></i><span>{{__('index.email')}}</span><a href="mailto:themeht23@gmail.com"> <?php echo str_replace(' ','<br>', $cs_email[0]->english) ?></a>
                <!-- </li>
                <li class="mb-4"><i class="fa fa-phone"style="
    position: absolute;
    right: -8%;
    /* top: 0; */
    line-height: 24px;
    font-size: 30px;
    color: #2a8fbd;
    text-align: center;
"></i><span>Phone:</span><a href="tel:+912345678900">+91-234-567-8900</a>
                </li> -->
              
              </ul>
            </div>            
          </div>
          <div class="col-md-12">
                    {!! $map[0]->english !!}
                </div>
  </div>
</section>
<style>
    [data-bg-img] {
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
}

section {
    padding: 80px 0;
}
.form-control {
    height: 50px;
    border-radius: 5px;
    font-size: 13px;
    color: #111121;
    background: #ffffff;
    border: 1px solid transparent;
}
.form-group {
    margin-bottom: 20px;
    position: relative;
}
.contact-info li {
    padding-left: 50px;
    position: relative;
    
    padding-bottom: 23px;
}
.contact-info li span {
    font-size: 16px;
    color: #111121;
    font-weight: bold;
    text-transform: uppercase;
    display: block;
    margin-bottom: 8px;
}
.btn.btn-theme:hover {
    background: rgb(255,120,16);
  
    background: linear-gradient(90deg, rgb(42 143 189) 0%, rgb(23 91 121) 90%);

}
.btn.btn-theme {
    background: rgb(255,120,16);
   
    background: linear-gradient(90deg, rgb(42 143 189) 0%, rgb(23 91 121) 90%);
    color: #ffffff;
        padding: 12px 25px;
        border-radius: 8px;
}
button.btn.btn-theme.btn-radius:hover {
    background: #2a8fbd;
    color: #fff;
    -webkit-animation-name: jello;
    animation-name: jello;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    background-color: rgb(42 143 189);
}
.btn.btn-theme {
    background: rgb(255,120,16);

    background: linear-gradient(90deg, rgb(42 143 189) 0%, rgb(23 91 121) 90%);
    color: #ffffff;
}
.box-shadow, .boxed-view, .btn, .dropdown > .dropdown-menu, #header-wrap.fixed-header, #ht-main-nav, .search-input, #mc-form input[type="email"], .featured-item.style-2, .featured-item.style-4:hover, .featured-item.style-4 .featured-icon i, .featured-item.style-4.active, .featured-item.style-4:before, .featured-item.style-4:after, .testimonial .testimonial-img img, .testimonial .testimonial-quote, .price-table, .tab .nav-tabs .nav-link, .post, .post-author-img, .post.style-2 .post-desc, .work-process.style-2 .step-num, .cases-item:hover, .active.center .cases-item, .tab.style-2 .tab-content, .featured-item:hover, .form-control, .info-inner, .accordion .card-header, .media-holder .media, .team-member:hover .team-description, .team-member.active .team-description, .team-member:hover .team-social-icon, .team-member.active .team-social-icon {
    -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
}
.contact-info li span {
    font-size: 16px;
    color: #111121;
    font-weight: bold;
    text-transform: uppercase;
    display: block;
    margin-bottom: 8px;
}
.contact-1{
    background-image: url("http://themeht.com/loptus/html/images/pattern/02.png");"
}
</style>


// @endsection
