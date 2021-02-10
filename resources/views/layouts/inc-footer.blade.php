
<?php
if(App::getLocale() === 'en'){
   
   $about= $about[0]->english;
  
}else{
    
    $about= $about[0]->arabic;

}

?>

<footer class="main" id="main-footer">



            <div class="footer-top-area">



                <div class="container">



                    <div class="row row-wrap" style="align-items: center;">



                        <div class="col-md-3 fot">



                            <a href="index-2.html">



                                <img src="{{asset('img/logos/Royal Sooq.png')}}" alt="logo" title="logo" class="logo footer" >



                            </a>



                            <ul class="list list-social">



                                   <li>



                                    <a class="" href="#" data-toggle="tooltip" title="instgram"> <img  src="{{asset('images/I.png')}}"style="

    max-width: 17%;

"></a>



                                </li>



                                <li>



                                    <a class="" href="#" data-toggle="tooltip" title="youtube"> <img  src="{{asset('images/Y.png')}}"style="

    max-width: 17%;

"></a>



                                </li>



                                <li>



                                    <a class="" href="#" data-toggle="tooltip" title="Twitter"><img  src="{{asset('images/T.png')}}"style="

    max-width: 17%;

"></a>



                                </li>



                                <li>



                                    <a class="" target="_blank" href="https://www.facebook.com/ROYALSOOQ" data-toggle="tooltip" title="facebook"><img  src="{{asset('images/F.png')}}"style="

    max-width: 17%;

"></a>



                                </li>



                              



                            </ul>



                            <p>{{$about}}</p>



                        </div>



                        <div class="col-md-3" style="text-align: center;color: white;">







                            <h3 style="background-color:#efc718;border-radius: 5px;padding: 16px;color: black;"> {{__('index.contact_us')}} </h3>



                            <br>



                            <!--<h5>{{__('index.questetions')}}</h5>-->



                            <br>



                             <i class="fa fa-envelope-o" style="display:flex;color: #2a8fbd;font-weight: 600;font-weight: 600;

    font-size: 28px;"> <h4 class="text-left">  {{$cs_email[0]->english}}</h4></i>



                            <br>



                                 <i class="fa fa-envelope-o" style="display: flex;color: #2a8fbd;font-weight: 600;font-weight: 600;

    font-size: 28px;">  <h4 class="text-left" >  {{$sales_email[0]->english}} </h4></i>



                            
<br>



<i class="fa fa-envelope-o" style="display: flex;color: #2a8fbd;font-weight: 600;font-weight: 600;

font-size: 28px;">  <h4 class="text-left" >  {{$info_email[0]->english}} </h4></i>





                        </div>



                        <div class="col-md-3">



                        <a href="{{$footer[0]->link}}" target="_blank"> <img class="adsfoot" src="{{asset($footer[0]->image)}}" ></a>



                        </div>



                        <div class="col-md-3" style="padding: 10px;">



                     <h4>{{__('index.news')}}</h4>



                            <div class="box">



                            <form action="{{route('newsletter')}}" method="post">

                                @csrf



                                    <div class="form-group mb10">

                                    @if($errors->all())

                            @foreach($errors->all() as $err)

                            <h6 style="color:red">*{{$err}}</h6>

                            @endforeach

                            @endif

                                        <label>{{__('index.email')}}</label>



                                        <input type="email" name="email" class="form-control" />

                                        <label>{{__('index.phone')}}</label>
                                        <input type="text" name="phone" placeholder='{{__("index.phone_placeholder")}}' class="form-control" />


                                    </div>



                                    <!-- <p class="mb10">Eget scelerisque adipiscing varius mollis dis sed</p> -->



                                    <input type="submit" class="btn btn-primary ende" value="{{__('index.send')}}" />



                                </form>



                            </div>



                        </div>



                        



                        



                    </div>



                </div>



            </div>



            <div class="footer-copyright" style="position: relative;">



                <div class="container">



                    <div class="row">



                        <div class="col-md-12" style="text-align: center;">

                                 <p>جميع الحقوق محفوظه  <span style="color: #025D8C;" > رويال سوق  </span> </p> 



                            <p>Copyright © 2020 <span style="color: #025D8C;" > Royal Sooq </span> All Rights Reserved</p> 



                        </div>



                    </div>



                    



                </div>



                <!-- Button to move Up -->



                <span  class="up" id="upp" style="border-radius:50%;position: absolute;bottom: 0;right: 0;padding: 15px;;margin: 10px;background-color: #025D8C;">



                    <i class="fa fa-arrow-up fa-2x" style="color: white;"></i>



                </span>

<script>

  var scrolled = false;

function updateScroll(){

    if(!scrolled){

        var element = document.getElementById("#upp");

        element.scrollTop = element.scrollHeight;

    }

}



$("#upp").on('scroll', function(){

    scrolled=true;

});

</script>

            </div>



        </footer>