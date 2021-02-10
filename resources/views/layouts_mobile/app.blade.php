<!DOCTYPE HTML>

<html>



<head>

 @include('layouts_mobile.inc-head')
 @yield('social')
</head>



<body class="default">

 

@yield('header')
<style>
    .footer .centerbutton {

        width: 126px;}
    #content {
        padding: 7px 4px 0px 0px;}
    .location-section {
    padding: 11px 7px;
}
    h2.font-medium.mb-0 {
    color: #ffdf07;
}
    .text-light-gray, a.text-light-gray {
    color: #2656ff !important;
}
    .search-form.search-content {
    margin: 0px 0px 0px;
    font-size: 13px;
}
    </style>




















    {{-- @include('layouts_mobile.inc-top') --}}



        <!-- POST Ad Now  -->

        {{-- <div id="POST-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">

            <i class="fa fa-sign-in dialog-icon"></i>

            <h3>Post Ad Now</h3>

            <form class="dialog-form" style="text-align: center;">

                <div class="form-group">

                    <label>Name</label>

                    <input type="text" placeholder="ex- Mahmoud Ahmed" class="form-control">

                </div>

                <div class="form-group">

                    <label>Descreption</label>

                    <input type="text" placeholder="Type Your Descreption" class="form-control">

                </div>

                <div class="form-group">

                    <label>Price</label>

                    <input type="number" placeholder="Type Price" class="form-control">

                </div>

                <div class="form-group">

                    <label>Phone Number</label>

                    <input type="text" placeholder="Type Your Phone Number" class="form-control">

                </div>

                <div class="form-group">

                    <label>Pick Pictures</label>

                    <input type="file"  multiple class="form-control">

                </div>



                <input type="submit" value="Post Now" class="btn btn-primary">

            </form>



        </div> --}}














@yield('content')







       <!-- //////////////////////////////////

	//////////////MAIN FOOTER//////////////

	////////////////////////////////////-->



   @include('layouts_mobile.inc-footer')



        <!-- //////////////////////////////////

	//////////////END MAIN  FOOTER/////////

	////////////////////////////////////-->







    @include('layouts_mobile.inc-scripts')



    <!-- Facebook Pixel Code -->

<script>

!function(f,b,e,v,n,t,s)

{if(f.fbq)return;n=f.fbq=function(){n.callMethod?

n.callMethod.apply(n,arguments):n.queue.push(arguments)};

if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

n.queue=[];t=b.createElement(e);t.async=!0;

t.src=v;s=b.getElementsByTagName(e)[0];

s.parentNode.insertBefore(t,s)}(window, document,'script',

'https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '317508739302171');

fbq('track', 'PageView');

</script>

<noscript><img height="1" width="1" style="display:none"

src="https://www.facebook.com/tr?id=317508739302171&ev=PageView&noscript=1"

/></noscript>

<!-- End Facebook Pixel Code -->
<script>
setTimeout(function() {
    $('#successMessage').fadeOut('fast');
}, 3000); // <-- time in milliseconds
</script>



</body>





</html>

