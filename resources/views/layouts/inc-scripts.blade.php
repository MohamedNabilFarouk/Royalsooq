      <script src=" {{asset('js/jquery.js')}}"></script>

     



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

        <script src="{{asset('js/owl.carousel.min.js')}}"></script>

        <script src="{{asset('js/owl-carousel.js')}}"></script>

        <script src="{{asset('js/masonry.js')}}"></script>

        <script src="{{asset('js/nicescroll.js')}}"></script>



        <!-- Custom scripts -->

        <script src="{{asset('js/custom.js')}}"></script>

        <script src="{{asset('js/switcher.js')}}"></script>



        <!--  -->

               <!-- <script src="{{ asset('js/app.js') }}"></script> -->

                <script src="{{ asset('js/review.js') }}"></script>

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

        <!--  -->

    </div>

     @yield('scripts')

<!-- image preview -->

<script language="javascript" type="text/javascript">
window.onload = function () {
    var fileUpload = document.getElementById("file-input");
    fileUpload.onchange = function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreview = document.getElementById("dvPreview");
            dvPreview.innerHTML = "";
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            for (var i = 0; i < fileUpload.files.length; i++) {
                var file = fileUpload.files[i];
                if (regex.test(file.name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = document.createElement("IMG");
                        img.height = "100";
                        img.width = "100";
                        img.src = e.target.result;
                        dvPreview.appendChild(img);
                    }
                    reader.readAsDataURL(file);
                } else {
                    alert(file.name + " is not a valid image file.");
                    dvPreview.innerHTML = "";
                    return false;
                }
            }
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    }
};
</script>

<!-- end preview -->