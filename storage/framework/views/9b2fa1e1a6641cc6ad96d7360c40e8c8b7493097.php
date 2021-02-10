
   <title><?php if(isset($page_title)): ?><?php echo e($page_title . '| Royal Sooq رويال سوق '); ?> <?php else: ?> <?php echo e('Royal Sooq رويال سوق'); ?><?php endif; ?></title>



    <!-- meta info -->



    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">



    <meta name="keywords" content="" />



    <meta name="description" content="">



    <meta name="author" content="Volcano Agency">



    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="icon"  href="<?php echo e(asset('img/logos/vv.png')); ?>" type="image/gif" sizes="16x16">

    <!-- Google fonts -->



    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>



    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>



    <!-- Bootstrap 4 styles -->



    <link rel="stylesheet" href="<?php echo e(asset('css/boostrap.min.css')); ?>">



    <!-- Bootstrap styles -->



    <link rel="stylesheet" href="<?php echo e(asset('css/boostrap.css')); ?>">



    



    <!-- Font Awesome styles (icons) -->



    <link rel="stylesheet" href="<?php echo e(asset('css/font_awesome.css')); ?>">



    <!-- Main Template styles -->

    <?php if(App::getLocale() === 'en'): ?>

    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">

   <?php else: ?>

   <link rel="stylesheet" href="<?php echo e(asset('css/Arabic/styles.css')); ?>">

   <?php endif; ?>





    <!-- IE 8 Fallback -->



    <!--[if lt IE 9]>



	<link rel="stylesheet" type="text/css" href="css/ie.css" />



<![endif]-->











<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  







   



<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5ef4b1a6f29ba900123dd65e&product=inline-share-buttons" async="async"></script>











    <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>">



    <link rel="stylesheet" href="<?php echo e(asset('css/owl.theme.default.min.css')); ?>">



    <link rel="stylesheet" href="<?php echo e(asset('css/animate.min.css')); ?>">







    



    <!-- Your custom styles (blank file) -->

   





<!-- user.blade --> <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>











    <!--  -->



  <!-- Styles -->



  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

  <?php if(App::getLocale() === 'en'): ?>

    <link rel="stylesheet" href="<?php echo e(asset('css/mystyles.css')); ?>">

<?php else: ?>

<link rel="stylesheet" href="<?php echo e(asset('css/Arabic/mystyles.css')); ?>">



<?php endif; ?>



    <?php echo $__env->yieldPushContent('styles'); ?>



    <script src="https://js.stripe.com/v3/"></script>



    <!--  -->



    <style>



  



    .form-control {



    border: 1px solid #d9d9d9;



    -webkit-border-radius: 3px;



    border-radius: 3px;



    -webkit-box-shadow: none;



    box-shadow: none;



    font-weight: 800;



    outline: none;



    margin-right: 2px;



}


.st-logo , .st-disclaimer{
  display:none;
}








.soo:hover {



     background: #ffffff; 



    filter: invert(100%);



    -webkit-filter: invert(144%);}



  



form-control {



    border: 1px solid #d9d9d9;



    -webkit-border-radius: 3px;



    border-radius: 3px;



    -webkit-box-shadow: none;



    box-shadow: none;



    font-weight: 800;



    outline: none;



    margin-right: 6px;



}



.pull-center {



    padding-right: 15px;



}



    



    .modal-content{



       top:70px; 



    }



    .color-fa{



        color: #1c6c91 !important;



        opacity: 1!important;



     }   



     .login-register > li > a [class^="fa fa-"] {



    font-size: 19px;}



.login-register > li > a {



    font-size: 15px;



    text-transform: uppercase;



    padding: 0 5px;}



    .logo {



    display: block;



    padding-left: 0px;}



.chande .text-formatting, a {



   /*text-transform: uppercase;*/



  /*text-decoration: none;*/



  /*text-align: center;*/



  /*letter-spacing: 2px;*/



  /*line-height: 70px;*/



  /*font-family: 'Squada One', cursive;*/



  /*font-size: 28px;*/



}



ul.header-features {



    padding-right: 10px;



}



ul.login-register {



    padding-right: 0px;



}



/*.btn-primary {*/



/*    width: 163px;*/



/*background: #efc718;*/



/*    background-image: linear-gradient(to bottom,#ffeb43 0,#fcde11 100%);*/



/*    border-color: #f6d80f;*/



/*    padding: 9px;*/



/*    border-radius: 3px;*/



/*    color: red;*/



/*    border-color: #efc718;*/



    /* box-shadow: 2px 3px 6px 0px #efc718; */



/*    font-weight: 600;*/



/*}*/



.btn-primary a {



    color:black;



    font-weight: 600;



}



.header-features > li {



    display: inline-block;



     margin-right: 0px;



}



.btn-primary:hover .btn-primary a  {



    color:white;



}



.chande .btn-primary{



     animation: colorchange 50s; /* animation-name followed by duration in seconds*/



         /* you could also use milliseconds (ms) or something like 2.5s */



      -webkit-animation: colorchange 50s; /* Chrome and Safari */



}



 /*@keyframes  colorchange



    {



      0%   {background: #efc718;}



      25%  {background: #1d5e7b;}



      50%  {background: #2681aa;}



      75%  {background: #1d5e7b;}



      100% {background: #1c6f96;}



    }







    @-webkit-keyframes colorchange 



    {



      0%   {background: #efc718;}



      25%  {background: #1d5e7b;}



      50%  {background: #2681aa;}



      75%  {background: #1d5e7b;}



      100% {background: #1c6f96;}



    }*/



    .login-register > li > a:hover {



       background: rgba(255, 255, 255, 0);}



       button,



input,



optgroup,



select,



textarea {



  font-family: sans-serif;



  /* 1 */



  font-size: 100%;



  /* 1 */



  line-height: 1.15;



  /* 1 */



  margin: 0;



  /* 2 */



}







/**



 * Show the overflow in IE.



 * 1. Show the overflow in Edge.



 */



button,



input {



  /* 1 */



  overflow: visible;



}







/**



 * Remove the inheritance of text transform in Edge, Firefox, and IE.



 * 1. Remove the inheritance of text transform in Firefox.



 */



button,



select {



  /* 1 */



  text-transform: none;



}







/**



 * 1. Prevent a WebKit bug where (2) destroys native `audio` and `video`



 *    controls in Android 4.



 * 2. Correct the inability to style clickable types in iOS and Safari.



 */



button,



html [type="button"],



[type="reset"],



[type="submit"] {



  -webkit-appearance: button;



  /* 2 */



}







/**



 * Remove the inner border and padding in Firefox.



 */



button::-moz-focus-inner,



[type="button"]::-moz-focus-inner,



[type="reset"]::-moz-focus-inner,



[type="submit"]::-moz-focus-inner {



  border-style: none;



  padding: 0;



}







/**



 * Restore the focus styles unset by the previous rule.



 */



button:-moz-focusring,



[type="button"]:-moz-focusring,



[type="reset"]:-moz-focusring,



[type="submit"]:-moz-focusring {



  outline: 1px dotted ButtonText;



}







/**



 * Correct the padding in Firefox.



 */



fieldset {



  padding: 0.35em 0.75em 0.625em;



}







/**



 * 1. Correct the text wrapping in Edge and IE.



 * 2. Correct the color inheritance from `fieldset` elements in IE.



 * 3. Remove the padding so developers are not caught out when they zero out



 *    `fieldset` elements in all browsers.



 */



legend {



  box-sizing: border-box;



  /* 1 */



  color: inherit;



  /* 2 */



  display: table;



  /* 1 */



  max-width: 100%;



  /* 1 */



  padding: 0;



  /* 3 */



  white-space: normal;



  /* 1 */



}







/**



 * 1. Add the correct display in IE 9-.



 * 2. Add the correct vertical alignment in Chrome, Firefox, and Opera.



 */



progress {



  display: inline-block;



  /* 1 */



  vertical-align: baseline;



  /* 2 */



}







/**



 * Remove the default vertical scrollbar in IE.



 */



textarea {



  overflow: auto;



}







/**



 * 1. Add the correct box sizing in IE 10-.



 * 2. Remove the padding in IE 10-.



 */



[type="checkbox"],



[type="radio"] {



  box-sizing: border-box;



  /* 1 */



  padding: 0;



  /* 2 */



}







/**



 * Correct the cursor style of increment and decrement buttons in Chrome.



 */



[type="number"]::-webkit-inner-spin-button,



[type="number"]::-webkit-outer-spin-button {



  height: auto;



}







/**



 * 1. Correct the odd appearance in Chrome and Safari.



 * 2. Correct the outline style in Safari.



 */



[type="search"] {



  -webkit-appearance: textfield;



  /* 1 */



  outline-offset: -2px;



  /* 2 */



}







/**



 * Remove the inner padding and cancel buttons in Chrome and Safari on macOS.



 */



[type="search"]::-webkit-search-cancel-button,



[type="search"]::-webkit-search-decoration {



  -webkit-appearance: none;



}







/**



 * 1. Correct the inability to style clickable types in iOS and Safari.



 * 2. Change font properties to `inherit` in Safari.



 */



::-webkit-file-upload-button {



  -webkit-appearance: button;



  /* 1 */



  font: inherit;



  /* 2 */



}







/* Interactive



   ========================================================================== */



/*



 * Add the correct display in IE 9-.



 * 1. Add the correct display in Edge, IE, and Firefox.



 */



details,



menu {



  display: block;



}







/*



 * Add the correct display in all browsers.



 */



summary {



  display: list-item;



}







/* Scripting



   ========================================================================== */



/**



 * Add the correct display in IE 9-.



 */



canvas {



  display: inline-block;



}







/**



 * Add the correct display in IE.



 */



template {



  display: none;



}







/* Hidden



   ========================================================================== */



/**



 * Add the correct display in IE 10-.



 */



[hidden] {



  display: none;



}







html {



  height: 100%;



}







fieldset {



  margin: 0;



  padding: 0;



  -webkit-margin-start: 0;



  -webkit-margin-end: 0;



  -webkit-padding-before: 0;



  -webkit-padding-start: 0;



  -webkit-padding-end: 0;



  -webkit-padding-after: 0;



  border: 0;



}







legend {



  margin: 0;



  padding: 0;



  display: block;



  -webkit-padding-start: 0;



  -webkit-padding-end: 0;



}







/*===============================



=            Choices            =



===============================*/



.choices {



  position: relative;



  margin-bottom: 24px;



  font-size: 16px;



}







.choices:focus {



  outline: none;



}







.choices:last-child {



  margin-bottom: 0;



}







.choices.is-disabled .choices__inner, .choices.is-disabled .choices__input {



  background-color: #EAEAEA;



  cursor: not-allowed;



  -webkit-user-select: none;



     -moz-user-select: none;



      -ms-user-select: none;



          user-select: none;



}







.choices.is-disabled .choices__item {



  cursor: not-allowed;



}







.choices[data-type*="select-one"] {



  cursor: pointer;



}







.choices[data-type*="select-one"] .choices__inner {



  padding-bottom: 7.5px;



}







.choices[data-type*="select-one"] .choices__input {



  display: block;



  width: 100%;



  padding: 10px;



  border-bottom: 1px solid #DDDDDD;



  background-color: #FFFFFF;



  margin: 0;



}







.choices[data-type*="select-one"] .choices__button {



  background-image: url("../../icons/cross-inverse.svg");



  padding: 0;



  background-size: 8px;



  height: 100%;



  position: absolute;



  top: 50%;



  right: 0;



  margin-top: -10px;



  margin-right: 25px;



  height: 20px;



  width: 20px;



  border-radius: 10em;



  opacity: .5;



}







.choices[data-type*="select-one"] .choices__button:hover, .choices[data-type*="select-one"] .choices__button:focus {



  opacity: 1;



}







.choices[data-type*="select-one"] .choices__button:focus {



  box-shadow: 0px 0px 0px 2px #00BCD4;



}







.choices[data-type*="select-one"]:after {



  content: "";



  height: 0;



  width: 0;



  border-style: solid;



  border-color: #333333 transparent transparent transparent;



  border-width: 5px;



  position: absolute;



  right: 11.5px;



  top: 50%;



  margin-top: -2.5px;



  pointer-events: none;



}







.choices[data-type*="select-one"].is-open:after {



  border-color: transparent transparent #333333 transparent;



  margin-top: -7.5px;



}







.choices[data-type*="select-one"][dir="rtl"]:after {



  left: 11.5px;



  right: auto;



}







.choices[data-type*="select-one"][dir="rtl"] .choices__button {



  right: auto;



  left: 0;



  margin-left: 25px;



  margin-right: 0;



}







.choices[data-type*="select-multiple"] .choices__inner, .choices[data-type*="text"] .choices__inner {



  cursor: text;



}







.choices[data-type*="select-multiple"] .choices__button, .choices[data-type*="text"] .choices__button {



  position: relative;



  display: inline-block;



  margin-top: 0;



  margin-right: -4px;



  margin-bottom: 0;



  margin-left: 8px;



  padding-left: 16px;



  border-left: 1px solid #008fa1;



  background-image: url("../../icons/cross.svg");



  background-size: 8px;



  width: 8px;



  line-height: 1;



  opacity: .75;



}







.choices[data-type*="select-multiple"] .choices__button:hover, .choices[data-type*="select-multiple"] .choices__button:focus, .choices[data-type*="text"] .choices__button:hover, .choices[data-type*="text"] .choices__button:focus {



  opacity: 1;



}







.choices__inner {



  display: inline-block;



  vertical-align: top;



  width: 100%;



  background-color: #f9f9f9;



  padding: 7.5px 7.5px 3.75px;



  border: 1px solid #DDDDDD;



  border-radius: 2.5px;



  font-size: 14px;



  min-height: 44px;



  overflow: hidden;



}







.is-focused .choices__inner, .is-open .choices__inner {



  border-color: #b7b7b7;



}







.is-open .choices__inner {



  border-radius: 2.5px 2.5px 0 0;



}







.is-flipped.is-open .choices__inner {



  border-radius: 0 0 2.5px 2.5px;



}







.choices__list {



  margin: 0;



  padding-left: 0;



  list-style: none;



}







.choices__list--single {



  display: inline-block;



  padding: 4px 16px 4px 4px;



  width: 100%;



}







[dir="rtl"] .choices__list--single {



  padding-right: 4px;



  padding-left: 16px;



}







.choices__list--single .choices__item {



  width: 100%;



}







.choices__list--multiple {



  display: inline;



}







.choices__list--multiple .choices__item {



  display: inline-block;



  vertical-align: middle;



  border-radius: 20px;



  padding: 4px 10px;



  font-size: 12px;



  font-weight: 500;



  margin-right: 3.75px;



  margin-bottom: 3.75px;



  background-color: #00BCD4;



  border: 1px solid #00a5bb;



  color: #FFFFFF;



  word-break: break-all;



}







.choices__list--multiple .choices__item[data-deletable] {



  padding-right: 5px;



}







[dir="rtl"] .choices__list--multiple .choices__item {



  margin-right: 0;



  margin-left: 3.75px;



}







.choices__list--multiple .choices__item.is-highlighted {



  background-color: #00a5bb;



  border: 1px solid #008fa1;



}







.is-disabled .choices__list--multiple .choices__item {



  background-color: #aaaaaa;



  border: 1px solid #919191;



}







.choices__list--dropdown {



  display: none;



  z-index: 1;



  position: absolute;



  width: 100%;



  background-color: #FFFFFF;



  border: 1px solid #DDDDDD;



  top: 100%;



  margin-top: -1px;



  border-bottom-left-radius: 2.5px;



  border-bottom-right-radius: 2.5px;



  overflow: hidden;



  word-break: break-all;



}







.category{



        padding-top: 7px;



}



.choices__list--dropdown.is-active {



  display: block;



}







.is-open .choices__list--dropdown {



  border-color: #b7b7b7;



}







.is-flipped .choices__list--dropdown {



  top: auto;



  bottom: 100%;



  margin-top: 0;



  margin-bottom: -1px;



  border-radius: .25rem .25rem 0 0;



}







.choices__list--dropdown .choices__list {



  position: relative;



  max-height: 300px;



  overflow: auto;



  -webkit-overflow-scrolling: touch;



  will-change: scroll-position;



}







.choices__list--dropdown .choices__item {



  position: relative;



  padding: 10px;



  font-size: 14px;



}







[dir="rtl"] .choices__list--dropdown .choices__item {



  text-align: right;



}







@media (min-width: 640px) {



  .choices__list--dropdown .choices__item--selectable {



    padding-right: 100px;



  }



  .choices__list--dropdown .choices__item--selectable:after {



    content: attr(data-select-text);



    font-size: 12px;



    opacity: 0;



    position: absolute;



    right: 10px;



    top: 50%;



    transform: translateY(-50%);



  }



  [dir="rtl"] .choices__list--dropdown .choices__item--selectable {



    text-align: right;



    padding-left: 100px;



    padding-right: 10px;



  }



  [dir="rtl"] .choices__list--dropdown .choices__item--selectable:after {



    right: auto;



    left: 10px;



  }



}







.choices__list--dropdown .choices__item--selectable.is-highlighted {



  background-color: #f2f2f2;



}







.choices__list--dropdown .choices__item--selectable.is-highlighted:after {



  opacity: .5;



}







.choices__item {



  cursor: default;



}







.choices__item--selectable {



  cursor: pointer;



}







.choices__item--disabled {



  cursor: not-allowed;



  -webkit-user-select: none;



     -moz-user-select: none;



      -ms-user-select: none;



          user-select: none;



  opacity: .5;



}







.choices__heading {



  font-weight: 600;



  font-size: 12px;



  padding: 10px;



  border-bottom: 1px solid #f7f7f7;



  color: gray;



}







.choices__button {



  text-indent: -9999px;



  -webkit-appearance: none;



  -moz-appearance: none;



       appearance: none;



  border: 0;



  background-color: transparent;



  background-repeat: no-repeat;



  background-position: center;



  cursor: pointer;



}







.choices__button:focus {



  outline: none;



}







.choices__input {



  display: inline-block;



  vertical-align: baseline;



  background-color: #f9f9f9;



  font-size: 14px;



  margin-bottom: 5px;



  border: 0;



  border-radius: 0;



  max-width: 100%;



  padding: 4px 0 4px 2px;



}







.choices__input:focus {



  outline: 0;



}







[dir="rtl"] .choices__input {



  padding-right: 2px;



  padding-left: 0;



}







.choices__placeholder {



  opacity: .5;



}







/*=====  End of Choices  ======*/



* {



  box-sizing: border-box;



}







.s003 {



  min-height: 100vh;



  display: -ms-flexbox;



  display: flex;



  -ms-flex-pack: center;



      justify-content: center;



  -ms-flex-align: center;



      align-items: center;



  font-family: 'Poppins', sans-serif;



  background-color: #a598ee;



  background-size: cover;



  background-position: center center;



  padding: 15px;



}







.s003 form {



  width: 100%;



  max-width: 790px;



  margin-bottom: 0;



}







.s003 form .inner-form {



  background: #fff;



  display: -ms-flexbox;



  display: flex;



  width: 100%;



  -ms-flex-pack: justify;



      justify-content: space-between;



  -ms-flex-align: center;



      align-items: center;



  box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);



  border-radius: 3px;



}







.s003 form .inner-form .input-field {



  height: 68px;



}







.s003 form .inner-form .input-field input {



  height: 100%;



  background: transparent;



  border: 0;



  display: block;



  width: 100%;



  padding: 10px 32px;



  font-size: 16px;



  color: #555;



}







.s003 form .inner-form .input-field input.placeholder {



  color: #888;



  font-size: 16px;



}







.s003 form .inner-form .input-field input:-moz-placeholder {



  color: #888;



  font-size: 16px;



}







.s003 form .inner-form .input-field input::-webkit-input-placeholder {



  color: #888;



  font-size: 16px;



}







.s003 form .inner-form .input-field input:hover, .s003 form .inner-form .input-field input:focus {



  box-shadow: none;



  outline: 0;



  border-color: #fff;



}







.s003 form .inner-form .input-field.first-wrap {



  width: 200px;



  border-right: 1px solid rgba(0, 0, 0, 0.1);



}







.s003 form .inner-form .input-field.first-wrap .choices__inner {



  background: transparent;



  border-radius: 0;



  border: 0;



  height: 100%;



  color: #fff;



  display: -ms-flexbox;



  display: flex;



  -ms-flex-align: center;



      align-items: center;



  padding: 10px 30px;



}







.s003 form .inner-form .input-field.first-wrap .choices__inner .choices__list.choices__list--single {



  display: -ms-flexbox;



  display: flex;



  padding: 0;



  -ms-flex-align: center;



      align-items: center;



  height: 100%;



}







































.dropdown {



  position: relative;



}







.dropdown-menu {



  border-radius:0px;



  box-shadow:none;



  border:none;



  min-width: 200px;



  top: 28px;



  background-color: #fff;



}







.dropdown-menu li {



  margin-left: 0;



  float:none;



}















.dropdown-menu li a:hover {



background-color: #2a8fbd;



    color: #fff;



}













input[type="email"], input[type="password"] {

    width: 100%;

    padding: 10px;

    margin-bottom: 30px;

    border: 1px solid #cccccc;

    background-color: #ffffff;

}













    </style><?php /**PATH E:\Billy\laravel_volcano_projects\Royal-details\new_royal\resources\views/layouts/inc-head.blade.php ENDPATH**/ ?>