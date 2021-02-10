<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

   @include('layouts.inc-head')
   <style>
        .ant-layout {
    display: block !important;}
   </style>
</head>

<body>











<div class="global-wrap">



 



<!-- Top navbar -->

       



        <!-- Top navbar -->

        @include('layouts.inc-top')


         





         <!-- Second Bar -->
        <!-- //////////////////////////////////
        //////////////MAIN HEADER///////////// 
        ////////////////////////////////////-->
        



       










<!-- start user.blade -->



    <div id="app">

        <avored-layout inline-template>

            <div>

                <a-layout id="components-layout-demo-top" class="layout">

                    <!-- @include('partials.nav') -->



                    <a-layout-content style="padding: 0 50px; background-color: white;">

                       

                        <a-layout style="padding: 24px 0; background-color:white; ">

                        

                            <a-layout-content :style="{ padding: '0 24px', minHeight: '280px' }">

                            @yield('content')

                            </a-layout-content>

                        </a-layout>

                        </a-layout-content>

                    

                    <!-- @include('partials.footer') -->

                </a-layout>

            </div>

        </avored-layout>

    </div>

    <!-- end user.blade -->





    @include('layouts.inc-footer')







        <!-- Scripts queries -->

        <script src="{{asset('js/jquery.js')}}"></script>

        <script src="{{asset('js/boostrap.min.js')}}"></script>

        <script src="{{asset('js/countdown.min.js')}}"></script>

        <script src="{{asset('js/flexnav.min.js')}}"></script>

        <script src="{{asset('js/magnific.js')}}"></script>

        <script src="{{asset('js/tweet.min.js')}}"></script>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

        <script src="{{asset('js/fitvids.min.js')}}"></script>

        <script src="{{asset('js/mail.min.js')}}"></script>

        <script src="{{asset('js/ionrangeslider.js')}}"></script>

        <script src="{{asset('js/icheck.js')}}"></script>

        <script src="{{asset('js/fotorama.js')}}"></script>

        <script src="{{asset('js/card-payment.js')}}"></script>

        <script src="{{asset('js/owl-carousel.js')}}"></script>

        <script src="{{asset('js/masonry.js')}}"></script>

        <script src="{{asset('js/nicescroll.js')}}"></script>



        <!-- Custom scripts -->

        <script src="{{asset('js/custom.js')}}"></script>

        <script src="{{asset('js/switcher.js')}}"></script>

    </div>

    @yield('scripts')





</body>

</html>

