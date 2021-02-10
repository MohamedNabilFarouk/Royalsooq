<!DOCTYPE HTML>
<html>

<head>
    <title>royalsooq|رويال سوق</title>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
    <!-- Bootstrap 4 styles -->
    <link rel="stylesheet" href="{{asset('css/boostrap.min.css')}}">
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="{{asset('css/boostrap.css')}}">
    
    <!-- Font Awesome styles (icons) -->
    <link rel="stylesheet" href="{{asset('css/font_awesome.css')}}">
    <!-- Main Template styles -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <!-- IE 8 Fallback -->
    <!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="css/ie.css" />
<![endif]-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  

   



    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">

    
    <!-- Your custom styles (blank file) -->
    <link rel="stylesheet" href="{{asset('css/mystyles.css')}}">



    <!--  -->
 <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
    <script src="https://js.stripe.com/v3/"></script>
    <!--  -->
    <style>
    form input[type='radio'], form input[type='checkbox'] {
  
    margin: 6px 3px;
}
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
    padding-right: 10px;
}
.btn-primary {
background: #efc718;
    background-image: linear-gradient(to bottom,#ffeb43 0,#fcde11 100%);
    border-color: #f6d80f;
    padding: 12px;
    border-radius: 3px;
    color: red;
    border-color: #efc718;
    /* box-shadow: 2px 3px 6px 0px #efc718; */
    font-weight: 600;
}
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
 /*@keyframes colorchange
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

.dropdown-menu li a {
  color:#000;
  padding: 5px 0;
  text-align: center;
}

.dropdown-menu li a:hover {
background-color: #2a8fbd;
    color: #fff;
}






    </style>
</head>

<body>


    <div class="global-wrap">

        
       

        <!-- Top navbar -->
       

        <header class="main" >
            <div class="container-fluid">
                <div class="row" style="border-top: solid 2px #efc718;align-items: center;justify-content: center;display: flex;">
                  
                    <div class="col-md-6 col-sm-12">
                        <!-- MAIN NAVIGATION -->
                        <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                        <nav>
                            <ul class="nav nav-pills flexnav"  id="flexnav" data-breakpoint="800" style="padding: 5px 0px;">

                                <li><a href="shops.html" class="navBar-item">Crean An Account</a> </li>

                                <li><a href="page-my-account-settings.html" class="navBar-item">Daily Deals</a> </li>

                                <li><a href="shops.html" class="navBar-item">Customer Service</a> </li>

                                <li><a href="page-my-account-settings.html" class="navBar-item">Sell With Us</a> </li>

                                <li><a href="page-my-account-settings.html" class="navBar-item">Track Orders</a> </li>
                                
                                <li><a href="page-my-account-settings.html" class="navBar-item">اللغة العربية</a> </li>
                                
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
                    <div class="col-md-2 col-12 text-center" style="display: flex;  justify-content: space-between; align-items: center;">
                     <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="
   
    font-size: 34px;
    background: #fff;
    border: none;
    color: #2a8fbd;

">
                    	<span id="search_concept"> <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="{{route('free.ads.all')}}">Free Ads</a></li>
                      <li><a href="#its_equal">It's equal</a></li>
                      <li><a href="#greather_than">Greather than ></a></li>
                      <li><a href="#less_than">Less than < </a></li>
                      <li class="divider"></li>
                      <li><a href="#all">Anything</a></li>
                    </ul>
                </div>
                        <div>
                          
                              
        

    
                            <a href="/" class="logo" style="
    display: inline;
">
                                <img src="{{asset('img/logos/Royal Sooq.png')}}" alt="Image Alternative text" title="Image Title" style="width:122px;margin-top:5px;" />
                            </a>
                                        <div style="display: inline;">
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
                                <h4 class="modal-title">Country</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_flag-of-saudi-arabia-flag-of-the-united-states-flag-of-afghanistan_E9PM0TeK.png" width="50px" height="50px">
                                            <h6>Saudia</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_state-of-palestine-flag-of-palestine-national-flag_SARiDXuW.png" width="50px" height="50px">
                                            <h6>Palestine</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_flag-of-saudi-arabia-flag-of-the-united-states-flag-of-afghanistan_E9PM0TeK.png" width="50px" height="50px">
                                            <h6>Saudia</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_state-of-palestine-flag-of-palestine-national-flag_SARiDXuW.png" width="50px" height="50px">
                                            <h6>Palestine</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_flag-of-saudi-arabia-flag-of-the-united-states-flag-of-afghanistan_E9PM0TeK.png" width="50px" height="50px">
                                            <h6>Saudia</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_state-of-palestine-flag-of-palestine-national-flag_SARiDXuW.png" width="50px" height="50px">
                                            <h6>Palestine</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_flag-of-saudi-arabia-flag-of-the-united-states-flag-of-afghanistan_E9PM0TeK.png" width="50px" height="50px">
                                            <h6>Saudia</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_state-of-palestine-flag-of-palestine-national-flag_SARiDXuW.png" width="50px" height="50px">
                                            <h6>Palestine</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_flag-of-saudi-arabia-flag-of-the-united-states-flag-of-afghanistan_E9PM0TeK.png" width="50px" height="50px">
                                            <h6>Saudia</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_state-of-palestine-flag-of-palestine-national-flag_SARiDXuW.png" width="50px" height="50px">
                                            <h6>Palestine</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_flag-of-saudi-arabia-flag-of-the-united-states-flag-of-afghanistan_E9PM0TeK.png" width="50px" height="50px">
                                            <h6>Saudia</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="img/logos/FAVPNG_state-of-palestine-flag-of-palestine-national-flag_SARiDXuW.png" width="50px" height="50px">
                                            <h6>Palestine</h6>
                                        </div>
                                        
                                    </div>
                                </div>
                                
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
                    <div class="col-md-6"style="
    padding-top: 5px;
">           
                       
                    <div class="col-md-12" style='padding-right:0px;'>
                    <form action="{{url('/Search')}}" method="get">
                    @csrf
                         <div class="row" style="margin-top: 8px;">
                       
                             <div class="col-md-12" style="display: flex;"> 
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
    display: flex;
    
">
                         <input type="radio" id="service" name="type" value="service">
  <label for="male"> Services.</label><br>
  <input type="radio" id="female" name="type" value="free">
  <label for="female">Free product. </label><br>
  <input type="radio" id="other" name="type" value="sponsored">
  <label for="other">sponsore product.</label>
</form>
</div>
                    </div>
                       
                        </div>
                    <div class="col-md-4 col-12 text-center" style="padding: 15px 6px;display: flex;justify-content: flex-end;align-items: center;">
                   
                        <div class="pull-right" style="
    width: 100%;
">
                            <ul class="header-features">
                                      <li>
                                    <div class="header-feature-caption chande">
                                    @auth    
                                    <button class="btn btn-primary secondNavButtons" ><a class=""  href="{{route('free.ads')}}" style="color: white;text-decoration: none;"> <i class="fa fa-plus-circle" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> Add Your Ad</a> </button>
                                @endauth
                                @guest 
                                <button class="btn btn-primary secondNavButtons" ><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top" style="text-decoration: none;color:black"> <i class="fa fa-plus-circle" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;"></i> Add Your Ad</a> </button>
                                @endguest    
                                </div>
                                </li>
                        <ul class="login-register">
                            <li class="shopping-cart"><a class="soo" href="{{route('cart.show')}}" style="color:black !important"><img  src="{{asset('img/logos/Shopping Cart .png')}}" style="width:50px;"> </a>
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
"><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top" style="color: white!important;background: #2a8fbd;border-radius: 0;/* display: inline-block; */ border-bottom-left-radius: 7px;
    border-top-left-radius: 7px;">Login</a>
                            <a class="popup-text" href="#register-dialog" data-effect="mfp-move-from-top" style="color: white!important;background: darkgrey;border-radius: 0;/* display: inline-block; */    border-bottom-right-radius: 7px;
    border-top-right-radius: 7px;">Sign up</a>
                            </li>


                         
                            
                            @endauth
                            @auth    
                            @if((Auth::user()->seller)=='1')
                            <li class="shopping-cart"><a href="{{route('charts')}}" style="color:black !important ;  "><i class="fa fa-shopping-user color-fa"></i>Hello {{Auth::user()->name}} </a>
                            @else
                            <li class="shopping-cart"><a href="{{url('/account')}}" style="color:black !important ;  "><i class="fa fa-shopping-user color-fa"></i>Hello {{Auth::user()->name}} </a>
                            @endif
                      
                           
                        <div class="shopping-cart-box" style="z-index:2000 !important;">
                            
                            <ul class="list-inline text-center">
                            <li><a href="{{url('/account')}}"> Profile</a>
                                </li>
                                <li><a href="{{url('/logout')}}"> Logout</a>
                                </li>
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

    <div style="background-color: #fff;">
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
                          <div class="category" id='1'>
                            <h6 style="font-weight: 600;"> Category 1 </h6>
                          </div>
                          <div class="category" id='2'>
                            <h6 style="font-weight: 600;"> Category 2 </h6>
                          </div>
                          <div class="category" id='3'>
                            <h6 style="font-weight: 600;"> Category 3 </h6>
                          </div>
                          <div class="category" id='4'>
                            <h6 style="font-weight: 600;"> Category 4 </h6>
                          </div>
                          <div class="category" id='5'>
                            <h6 style="font-weight: 600;"> Category 5 </h6>
                          </div>

                          <div class="category" id='6'>
                            <h6 style="font-weight: 600;"> Category 6 </h6>
                          </div>
                          <div class="category" id='7'>
                            <h6 style="font-weight: 600;"> Category 7 </h6>
                          </div>
                          <div class="category" id='8'>
                            <h6 style="font-weight: 600;"> Category 8 </h6>
                          </div>
                          <div class="category" id='9'>
                            <h6 style="font-weight: 600;"> Category 9 </h6>
                          </div>
                          <div class="category" id='10'>
                            <h6 style="font-weight: 600;"> Category 10 </h6>
                          </div>
                    </div>
                    
                     </div>
                </div>

               <!-- one Row For Every Category -->
                <div class="row category-dropMenu" id='m1'>
                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>
                </div>

                <!-- one Row For Every Category -->
                <div class="row category-dropMenu" id='m2'>
                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>
                </div>

                <!-- one Row For Every Category -->
                <div class="row category-dropMenu" id='m3'>
                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>
                </div>

                <!-- one Row For Every Category -->
                <div class="row category-dropMenu" id='m4'>
                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4 style="color: white;"> Sub Category 1</h4>
                        <ul class="subPoints">
                            <li> Number 1</li>
                            <li> Number 2</li>
                            <li> Number 3</li>
                        </ul>
                    </div>
                </div>
               
                
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

        <!-- POST Ad Now  -->
        <div id="POST-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
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


        <div id="password-recover-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
            <i class="icon-retweet dialog-icon"></i>
            <h3>Password Recovery</h3>
            <h5>Fortgot your password? Don't worry we can deal with it</h5>
            <form class="dialog-form">
                <label>E-mail</label>
                <input type="text" placeholder="email@domain.com" class="span12">
                <input type="submit" value="Request new password" class="btn btn-primary">
            </form>
        </div>
        <!-- END LOGIN REGISTER LINKS CONTENT -->
@yield('content')



       <!-- //////////////////////////////////
	//////////////MAIN FOOTER////////////// 
	////////////////////////////////////-->

    <footer class="main" id="main-footer">
            <div class="footer-top-area">
                <div class="container">
                    <div class="row row-wrap" style="display: flex;align-items: center;">
                        <div class="col-md-3">
                            <a href="index-2.html">
                                <img src="img/logos/Royal Sooq.png" alt="logo" title="logo" class="logo" style="width: 100%;">
                            </a>
                            <ul class="list list-social">
                                <li>
                                    <a class="fa fa-facebook box-icon" href="#" data-toggle="tooltip" title="Facebook"></a>
                                </li>
                                <li>
                                    <a class="fa fa-twitter box-icon" href="#" data-toggle="tooltip" title="Twitter"></a>
                                </li>
                                <li>
                                    <a class="fa fa-flickr box-icon" href="#" data-toggle="tooltip" title="Flickr"></a>
                                </li>
                                <li>
                                    <a class="fa fa-linkedin box-icon" href="#" data-toggle="tooltip" title="LinkedIn"></a>
                                </li>
                                <li>
                                    <a class="fa fa-tumblr box-icon" href="#" data-toggle="tooltip" title="Tumblr"></a>
                                </li>
                            </ul>
                            <p>Enim proin pharetra interdum praesent mus eros sit ipsum potenti enim faucibus nascetur ante nostra ligula tempus turpis senectus hac</p>
                        </div>
                        <div class="col-md-3" style="text-align: center;color: white;">

                            <h3 style="background-color:#efc718;border-radius: 20px; width: 75%;margin: 5px auto;"> Contact Us </h3>
                            <br>
                            <h5>Got Questetions ? Call Us 24/7 !</h5>
                            <br>
                            <h3> <i class="fa fa-phone" aria-hidden="true"></i> 800-8001-8588 </h3>
                            <br>
                            <h3> <i class="fa fa-map-marker" aria-hidden="true"></i> 800-8001-8588 </h3>
                            
                        </div>
                        <div class="col-md-3">
                                <img src='https://via.placeholder.com/150/0000FF/808080 ?Text=GoogleAds'>
                        </div>
                        <div class="col-md-3">
                            <h4>Sign Up to the Newsletter</h4>
                            <div class="box">
                                <form>
                                    <div class="form-group mb10">
                                        <label>E-mail</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <p class="mb10">Eget scelerisque adipiscing varius mollis dis sed</p>
                                    <input type="submit" class="btn btn-primary" value="Sign Up" />
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
                            <p>Copyright © 2020 <span style="color: #025D8C;" > Royal Sooq </span> All Rights Reserved</p> 
                        </div>
                    </div>
                    
                </div>
                <!-- Button to move Up -->
                <span  class="up" style="border-radius:50%;position: absolute;bottom: 0;right: 0;padding: 10px;margin: 10px;background-color: #025D8C;">
                    <i class="fa fa-arrow-up fa-2x" style="color: white;"></i>
                </span>
            </div>
        </footer>
        
        <!-- //////////////////////////////////
	//////////////END MAIN  FOOTER///////// 
	////////////////////////////////////-->



        <!-- Scripts queries -->
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
        <script src="{{ asset('js/app.js') }}"></script>
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

  



  
</body>


</html>
