<div class="global-wrap">

        
       

        <!-- Top navbar -->
       

        <header class="main" >
                        <div class="container-fluid">
                            <div class="row" style="border-top: solid 2px #efc718;align-items: center;justify-content: center;display: flex;">
                            
                                <div class="col-md-12 col-sm-12">
                                    <!-- MAIN NAVIGATION -->
                                    <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                                    <nav>
                                        <ul class="nav nav-pills flexnav pull-right"  id="flexnav" data-breakpoint="800" style="padding: 9px 16px;">

                                            <li><a href="shops.html" class="navBar-item">Creat An Account</a> </li>

                                            <li><a href="shops.html" class="navBar-item">Customer Service</a> </li>

                                            <li><a href="page-my-account-settings.html" class="navBar-item">Sell With Us</a> </li>

                                            <li><a href="page-my-account-settings.html" class="navBar-item">Terms of Use</a> </li>
                                            
                                            <li><a href="page-my-account-settings.html" class="navBar-item" style="
                position: inherit;
                top: -7px;border-right: 0;
            "><img src="{{asset('img/logos/Egypt-Flag-1-icon.png')}}" style="width: 17px;cursor: pointer;" data-toggle="modal" data-target="#myModal"> اللغة العربية</a> </li>
                                            
                                        </ul>
                                    </nav>
                                    <!-- END MAIN NAVIGATION -->
                                </div>
                            </div>
                        </div>
        </header>

        <!-- Second Bar -->
        <!-- //////////////////////////////////
        //////////////MAIN HEADER///////////// 
        ////////////////////////////////////-->
        <div class="top-main-area">
            <div class="container-fluid">
                <div class="row flex-wrap">
                    <div class="col-md-3 col-12 text-center" style="display: flex;  justify-content: space-between; align-items: center;">
                     <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="
   
                                            font-size: 34px;
                                            position: absolute;
                                            top: -19px;
                                            background: none;
                                            border: none;
                                            color: #2a8fbd;

                                        ">
                    	<span id="search_concept"> <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <ul class="dropdown-menu" role="menu" >
                    <li><a href="/"> <span class="fa fa-home" style="
    padding: 10px;
"></span>Home</a></li>
                      <li><a href="{{route('free.ads.all')}}"> <span class="fa fa-star" style="
    padding: 10px;
"></span>Free Ads</a></li>

<li><a href="{{route('all.acc')}}"> <span class="fa fa-bullhorn" style="
    padding: 10px;
"></span>Shop</a></li>
                    </ul>
                </div>
                  
                          
                              
        
         <div>
             <a href="/" class="logo" style=" display: inline;">
                                <img src="{{asset('img/logos/Royal Sooq.png')}}" alt="Image Alternative text" title="Image Title" style="width:160px;margin-top:5px;" />
                            </a>
                     <h6 style="text-align: right; padding-right: 7%;"><a href="/" style="color: black !important; font-weight: 600;" href="#">{{ $page_title ?? 'Egypt' }}</a></h6>
        </div>                            

    
                           
                           
        <div style="    display: initial;position: relative; right: 27px; top: 17px;">
                            <img src="{{asset('img/logos/Egypt-Flag-1-icon.png')}}" style="width: 40px;cursor: pointer;" data-toggle="modal" data-target="#myModal">
                            <h6 style="font-weight: bold;">{{ $page_title ?? 'Egypt' }}</h6>
                        </div>
                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                        
                            <!-- Modal content-->
                            <div class="modal-content" style="z-index: 999999;">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Regional Settings</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="styled-select">
  <select id="lab-country-select">
  
    <option value="" disabled="disabled" selected="selected">Select a Country</option>

    <option value="Australia" data-category-type="Australia" data-category-name="Australia" >Australia</option>
  
    <option value="Canada" data-category-type="Canada" data-category-name="Canada" >Canada</option>
  
    <option value="Germany" data-category-type="Germany" data-category-name="Germany" >Germany</option>
    
    <option value="Sweden" data-category-type="Sweden" data-category-name="Sweden" >Sweden</option>
  </select> 
  <style>
      
      .styled-select {
  border: 1px solid #ccc;
  width: 240px;
  height: 34px;
  overflow: hidden;
  background: url('http://cdn.bavotasan.com/wp-content/uploads/2011/05/down_arrow_select.jpg') no-repeat right #ddd;
  margin-bottom: 20px;
}
.styled-select select {
  background: transparent;
  width: 268px;
  padding: 5px;
  font-size: 16px;
  line-height: 1;
  border: 0;
  border-radius: 0;
  height: 34px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.styled-select option { 
  background-color: #fff;
  color: #444;
  font-size: 16px;
  padding: 6px;
}

#lab-country-select h4 { margin: 0; }
.lab-container {
  margin: 0 0 10px 0;
  background-color: #f6f6f6;
  padding: 10px;
  border: 1px solid #d1d1d1;
  max-width: 600px;
}






  </style>
  <script>
      $(function() {
  $.getJSON('https://s3-us-west-2.amazonaws.com/s.cdpn.io/101702/labs-intl_2.js', function(data) {
    var template = $('#labsCountryList').html();
    var html = Mustache.to_html(template, data);
    $('#countries').html(html);
  });
});

/* Filters Results */
$('#lab-country-select').on('change', function (e) {
    e.preventDefault();
    var cat = $(this).val();
    var nam = $(this).val();
    $('#countries > div').hide();
    $('#countries > div[data-category-type="'+cat+'"][data-category-name="'+nam+'"]').show();
});
  </script>
</div>

                                    <div class="styled-select">
  <select id="lab-country-select">
  
    <option value="" disabled="disabled" selected="selected">Select a lang</option>

    <option value="Australia" data-category-type="Australia" data-category-name="Australia" >english</option>
  
    <option value="Canada" data-category-type="Canada" data-category-name="Canada" >عربي</option>
  
  
  </select> 
  <style>
      
      .styled-select {
  border: 1px solid #ccc;
  width: 240px;
  height: 34px;
  overflow: hidden;
  background: url('http://cdn.bavotasan.com/wp-content/uploads/2011/05/down_arrow_select.jpg') no-repeat right #ddd;
  margin-bottom: 20px;
}
.styled-select select {
  background: transparent;
  width: 268px;
  padding: 5px;
  font-size: 16px;
  line-height: 1;
  border: 0;
  border-radius: 0;
  height: 34px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.styled-select option { 
  background-color: #fff;
  color: #444;
  font-size: 16px;
  padding: 6px;
}

#lab-country-select h4 { margin: 0; }
.lab-container {
  margin: 0 0 10px 0;
  background-color: #f6f6f6;
  padding: 10px;
  border: 1px solid #d1d1d1;
  max-width: 600px;
}






  </style>
  <script>
      $(function() {
  $.getJSON('https://s3-us-west-2.amazonaws.com/s.cdpn.io/101702/labs-intl_2.js', function(data) {
    var template = $('#labsCountryList').html();
    var html = Mustache.to_html(template, data);
    $('#countries').html(html);
  });
});

/* Filters Results */
$('#lab-country-select').on('change', function (e) {
    e.preventDefault();
    var cat = $(this).val();
    var nam = $(this).val();
    $('#countries > div').hide();
    $('#countries > div[data-category-type="'+cat+'"][data-category-name="'+nam+'"]').show();
});
  </script>

</div>
<a href="http://royalsooq.com/Service/3" class="btn btn-sm" style="
    background: #46c505;
    color: #fff;
    font-size: large;
    font-weight: 600;
"><i class="fa fa-floppy-o"></i> save</a>
                                </div>
                                
                            </div>
                        
                            </div>
                        </div>
                         
                       
                        <!--<div>-->
                        <!--    <h4 class="text-primary dropdown-toggle"  data-toggle="dropdown" style="margin-top: 15px;cursor: pointer;font-weight: 600;"> English </h4>-->
                        <!--    <ul class="dropdown-menu dropdown-menu-right" style="z-index: 999999999;">-->
                        <!--        <li><a href="#">اللغة العربية</a></li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                    </div>
                    <div class="col-md-5"style="
    padding: 1% 0px 0px 0px;
">           
                       
                    <div class="col-md-12" style='padding-right:0px;'>
                    <form action="{{url('/Search')}}" method="get">
                    @csrf
                         <div class="row" style="margin-top: 8px;">
                       
                             <div class="col-md-12" style="display: flex; padding: 0;"> 
                       <!--         <select id="inputState " name="city" class="form-control"style="width: 103px;">-->
                       <!--             <option selected value="null"> All Cities</option>-->
                       <!--             @foreach($allcities as $c)-->
                       <!--         <option value="{{$c->id}}">{{$c->city}}</option>-->
                       <!--       @endforeach-->
                       <!--          </select>-->
                             
                       <!--         <select id="inputState " name="category" class="form-control" style="width: 153px;">-->
                       <!--             <option value='null' selected>All Categories</option>-->
                       <!--             @foreach($allcat as $c)-->
                       <!--         <option  value="{{$c->id}}">{{$c->name}}</option>-->
                       <!--        @endforeach-->
                       <!--</select>-->
                             
                             <div class="input-group"style="
    width: 100%;
    padding: 1%;
    background: #2a8fbd;
    border-radius: 31px;
">
                <div class="input-group-btn search-panel">
                   
                
                <select  name="category" class="btn btn-default dropdown-toggle" style="
    background: #2a8fbd;
    border: none;
    color: white; 
    margin-right: -17px;" >
                                   <option value='null' selected>All Categories</option>
                                   @foreach($allcat as $c)
                               <option  value="{{$c->id}}">{{$c->name}}</option>
                              @endforeach
                       </select>
                
                
                
                
                <!-- <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="
    background: #2a8fbd;
    border: none;
    color: white;
">
                    	<span id="search_concept"> All Categories</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#contains">Contains</a></li>
                      <li><a href="#its_equal">It's equal</a></li>
                      <li><a href="#greather_than">Greather than ></a></li>
                      <li><a href="#less_than">Less than < </a></li>
                      <li class="divider"></li>
                      <li><a href="#all">Anything</a></li>
                    </ul> -->
                </div>
                <!-- <input type="hidden" name="name" value="all" id="search_param">          -->
                <input type="text" class="form-control" name="name" placeholder="Search term..." required>
                <span class="input-group-btn">
                    <button class="btn btn-default" name="submit" type="submit"style="
    background: #2a8fbd;
    border: none;
    color: white;
    font-size: 18px;
" ><span class="fa fa-search"></span></button>
                </span>
            </div>
            <style>
                $(document).ready(function(e){
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = $(this).attr("href").replace("#","");
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		$('.input-group #search_param').val(param);
	});
});
                
            </style>
<style>
    .searchBox {
 background: #2a8fbd;
    height: 40px;
    border-radius: 40px;
    padding: 10px;

}

.searchBox > .searchInput {
    width: 240px;
    padding: 0 6px;
}

.searchBox:hover > .searchButton {
  background: white;
  color : #2f3640;
}

.searchButton {
    color: white;
    float: right;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #2f3640;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.4s;
}

.searchInput {
    border:none;
    background: none;
    outline:none;
    float:left;
    padding: 0;
    color: white;
    font-size: 16px;
    transition: 0.4s;
    line-height: 40px;
    width: 0px;

}

@media screen and (max-width: 620px) {
.searchBox:hover > .searchInput {
    width: 150px;
    padding: 0 6px;
}
}
    
</style>
                                   
                                       
                                 
                             </div>

                            

                         </div>
              
                         <div style="
    display: flex;     padding-top: 5px;
    
">
                            
                             
                         <input type="checkbox" id="All" name="type" value="service">
                          <label style="font-weight: 700;" for="male"> All  <span style="padding-left: 10px">|</span></label><br>
                          <input type="checkbox" id="service" name="type" value="service">
  <label style="font-weight: 700;" for="male"> Services  <span style="padding-left: 10px">|</span></label><br>
  <input  type="checkbox" id="female" name="type" value="free">
  <label style="font-weight: 700;" for="female">Free product  <span style="padding-left: 10px">|</span> </label><br>
  <input type="checkbox" id="other" name="type" value="sponsored">
  <label style="font-weight: 700;" for="other">sponsore product  </label>
</form>
</div>
                    </div>
                       
                        </div>
                    <div class="col-md-4 col-12 text-center" style="    padding: 16px 4px;display: flex;justify-content: flex-end;align-items: center; position: sticky;
    top: 43px;">
                   
                        <div class="pull-right" style="
    width: 95%;
">
                            <ul class="header-features">
                                      <li>
                                    <div class="header-feature-caption chande">
                                    @auth    
                                    <button class="btn btn-primary secondNavButtons" ><a  href="{{route('free.ads')}}" style="color: white;text-decoration: none;"> <i class="fa fa-plus-circle" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> Add Your Ad</a> </button>
                                @endauth
                                @guest 
                                <button class="btn btn-primary secondNavButtons" ><a  href="{{url('login')}}"  style="text-decoration: none;color:black"> <i class="fa fa-plus-circle" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> Add Your Ad</a> </button>
                                @endguest    
                                </div>
                                </li>
                        <ul class="login-register">
                            <li class="shopping-cart"><a class="soo" href="{{route('cart.show')}}" style="color:black !important"><img  src="{{asset('img/logos/Shopping Cart .png')}}" style="width:40px;"> </a>
                                <!-- <div class="shopping-cart-box">
                                    <ul class="shopping-cart-items">
                                        <li>
                                            <a href="product-shop-sidebar.html">
                                                <img src="img/amaze_70x70.jpg" alt="Image Alternative text" title="AMaze" />
                                                <h5>New Glass Collection</h5><span class="shopping-cart-item-price">$150</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product-shop-sidebar.html">
                                                <img src="img/gamer_chick_70x70.jpg" alt="Image Alternative text" title="Gamer Chick" />
                                                <h5>Playstation Accessories</h5><span class="shopping-cart-item-price">$170</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="list-inline text-center">
                                        <li><a href="{{route('cart.show')}}"><i class="fa fa-shopping-cart"></i> View Cart</a>
                                        </li>
                                        <li><a href="page-checkout.html"><i class="fa fa-check-square"></i> Checkout</a>
                                        </li>
                                    </ul>
                                </div> -->
                            </li>
                            @guest
                            <li style="
    display: inline-flex;
"><a href="{{url('login')}}" data-effect="mfp-move-from-top" style="color: white!important;background: #2a8fbd;border-radius: 0;/* display: inline-block; */ border-bottom-left-radius: 7px;
    border-top-left-radius: 7px;">Login</a>
                            <a  href="{{url('register')}}" data-effect="mfp-move-from-top" style="color: white!important;background: darkgrey;border-radius: 0;/* display: inline-block; */    border-bottom-right-radius: 7px;
    border-top-right-radius: 7px;">Sign up</a>
                            </li>


                         
                            
                            @endauth
                            @auth    
                            @if((Auth::user()->seller)=='1')
                            <li class="shopping-cart"><a href="{{route('charts')}}" style="color:black !important ; text-transform: capitalize;  "><i class="fa fa-shopping-user color-fa"></i>Hello {{Auth::user()->name}} </a>
                            @else
                            <li class="shopping-cart"><a href="{{url('/account')}}" style="color:black !important ; text-transform: capitalize;  "><i class="fa fa-shopping-user color-fa"></i>Hello {{Auth::user()->name}} </a>
                            @endif
                      
                           
                        <div class="shopping-cart-box" style="z-index:2000 !important;">
                            
                        <div class="shopping-cart-box" style="z-index:2000 !important;">
                            
                            <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light">
                                <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;"><a href="{{ route('account.dashboard') }}"><span class="fa fa-home"></span>   Personal Home
           </a></li>
                                <li role="menuitem" class="ant-menu-item" style="padding-left: 24px;"><a href="{{ route('user.freeAds') }}"><span class="fa fa-star"></span>  My Ads&nbsp;<span class="badge badge-pill">30</span></a></li>
                                <li role="menuitem" class="my ant-menu-item" style="padding-left: 24px;"><a href="{{ route('favorites') }}"><span class="fa fa-heart"></span>    Favorite Ads&nbsp;<span class="badge badge-pill">33</span></a></li><li role="menuitem" class="ant-menu-item" style="padding-left: 24px;"><a href="#"><span class="fa fa-floppy-o"></span>    Saved Searches (soon)
           </a></li><li role="menuitem" class="ant-menu-item" style="padding-left: 24px;"><a href="#">
               pending approval (soon)
           </a></li><li role="menuitem" class="ant-menu-item" style="padding-left: 24px;"><a href="{{ route('account.address.index') }}"><span class="fa fa-map-marker"></span>  Addresses
           </a></li>
           <li role="menuitem" class="ant-menu-item" style="padding-left: 24px;"><a href="{{ route('account.order.index') }}"><span class="fa fa-gift"></span>  Orders &nbsp; <span class="badge badge-pill">20</span></a></li>
           <li role="menuitem" class="ant-menu-item" style="padding-left: 24px;"><a href="{{ route('complaint') }}"><span class="fa fa-envelope-o"></span>       Complaint
           </a></li>
           
           <li role="menuitem" class="ant-menu-item" style="padding-left: 24px;"><a href="{{route('logout')}}"><span class="fa fa-user"></span>  Logout &nbsp; </a></li>
           </ul>
                           </div>
    
                    </li>
                            @endauth
                   

                            
                            
                        </ul>
                               
                        
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div style="background-color: #fff; border-bottom: 3px solid #0d4f6d;">
        <!-- Search Bar -->
     


        
        <!-- Category navbar -->

        <header class="main categoryBar" style="background-color: #2a8fbd;position: relative;border:2px solid #2a8fbd;">
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-md-2 all-cats" style="font-weight: 600;color:white;font-size: 13px;padding-top: 11px;background: #efc718;">
                                        <h6 style="font-weight: 600;color:white"  ><a href="{{route('allCategories')}}"> All Categories <i class="fa fa-bars" aria-hidden="true"></i></a> </h6>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="owl-carousel" style="cursor: pointer;">
                                        <?php 
                                        $count=0;
                                        ?>
                                        @foreach($allcat as $c)
                                        
                                            <div class="category" id='{{$c->id}}'>
                                                <h6 style="font-weight: 500; text-align: center;"> <a href="{{route('category.sub', $c->id)}}"> {{$c->name}} </a>  </h6>
                                            </div>
                                    
                                        @endforeach
                                        <div class="category" id='8'>
                                            <h6 style="font-weight: 500;"> <a href="{{route('allCategories')}}"> >> </a> </h6>
                                        </div>
                                        
                                    </div>
                                    
                                    </div>
                                </div>

                            <!-- one Row For Every Category -->
                            @foreach($allcat->slice(0,7) as $c)
                                <div class="row category-dropMenu" id='m{{$c->id}}' style="border-top: 2px solid rgb(75, 81, 84) !important;">
                                @foreach($c->subcategory as $sub)
                                    <div class="col-md-3">
                                        <h4 style="color: white;"><a href="{{route('sub.products',$sub->id)}}"> {{$sub->name}}<a></h4>
                                        <!-- <ul class="subPoints">
                                            <li> Number 1</li>
                                            <li> Number 2</li>
                                            <li> Number 3</li>
                                        </ul> -->
                                    </div>
                                @endforeach
                                </div>
                @endforeach
                            

                                

                            
                            
                                
                            </div>
        </header>
    </div>

        <!-- LOGIN REGISTER LINKS CONTENT -->
        <div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
            <i class="fa fa-sign-in dialog-icon"></i>
            <h3>Member Login</h3>
            <h5>Welcome back, friend. Login to get started</h5>
            <form class="dialog-form"  method="post"
                                action="{{ route('login') }}"
                                @submit="handleSubmit">
                                @csrf

                                <?php if ($errors->has('email')){
                                        echo "error   " .  $errors->first('email');
                                     }?>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" placeholder="email@domain.com" name="email" class="form-control">
                </div>
         

                <?php if ($errors->has('password')){
                                        echo "error " .  $errors->first('password');
                                     }?>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" placeholder="My secret password" name="password" class="form-control">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Remember me
                    </label>
                </div>
                <input type="submit" value="Sign in" name="submit" class="btn btn-primary">
            </form>
            <ul class="dialog-alt-links">
                <li><a class="popup-text" href="#register-dialog" data-effect="mfp-zoom-out">Not member yet</a>
                </li>
                <!-- <li><a class="popup-text" href="#password-recover-dialog" data-effect="mfp-zoom-out">Forgot password</a>
                </li> -->
            </ul>
        </div>



        <div id="register-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
            <i class="fa fa-edit dialog-icon"></i>
            <h3>Member Register</h3>
            <h5>Ready to get best offers? Let's get started!</h5>
            <form class="dialog-form"  method="post"
                            action="{{ route('register') }}"
                            @submit="handleSubmit">
            @csrf 
                            <!-- name -->
            
                            <?php if ($errors->has('name')){
                                        echo "error in name" .  $errors->first('name');
                                     }?>

                            <div class="form-group">
                            <label>Name</label>
                    <input type="text" placeholder="Name"   name="name" class="form-control">
                </div>
                           
                              
                        <!-- email -->
                          
                        <?php if ($errors->has('email')){
                                        echo "error in email" .  $errors->first('email');
                                     }?>
                             
                  <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" placeholder="email@example.com" name="email" class="form-control">
                </div>

                <!-- password -->
                <?php if ($errors->has('password')){
                                        echo "error in password" .  $errors->first('password');
                                     }?>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" placeholder="My secret password" name="password" class="form-control">
                </div>

                <!-- confirm password -->
                <?php if ($errors->has('password_confirmation')){
                                        echo "error " .  $errors->first('password_confirmation');
                                     }?>
                <div class="form-group">
                    <label>Repeat Password</label>
                    <input type="password" placeholder="Type your password again" name="password_confirmation" class="form-control">
                </div>
                <!-- <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Your Area</label>
                            <input type="password" placeholder="Boston" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Postal/Zip</label>
                            <input type="password" placeholder="12345" class="form-control">
                        </div>
                    </div>
                </div> -->
                <!-- <div class="checkbox">
                    <label>
                        <input type="checkbox">Get hot offers via e-mail
                    </label>
                </div> -->
                <input type="submit" value="Sign up" name="submit" class="btn btn-primary">
            </form>
            <ul class="dialog-alt-links">
            <li><a class="btn btn-success" href="{{route('seller.register')}}">Register As Seller</a>
                </li>    
            <li><a class="popup-text" href="#login-dialog" data-effect="mfp-zoom-out">Already member</a>
                </li>

                
            </ul>
        </div>
        <script>
     
     $( document ).ready(function() {
       setTimeout(function() {
      $('.hide-nerest').on('click', function(e) {
     e.stopPropagation();
     $(this).parent().next('ul').slideToggle();
     });
     }, 3000);
     });
     </script>
      @stack('scripts')