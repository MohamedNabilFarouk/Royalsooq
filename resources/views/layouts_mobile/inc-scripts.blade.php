<!-- JavaScript -->
<script src="{{asset('mobile/lib/jquery/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('mobile/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('mobile/lib/slick/slick/slick.min.js')}}"></script>
@if(App::getLocale()==='en')
<script src="{{asset('mobile/js/theme.js')}}"></script>
@else
<script src="{{asset('mobile/js/theme_ar.js')}}"></script>
@endif
