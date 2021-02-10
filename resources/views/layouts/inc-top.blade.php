<div class="global-wrap">



        

       



        <!-- Top navbar -->

       



        <header class="main" >

                        <div class="container-fluid">

                            <div class="row" style="border-top: solid 2px #efc718;align-items: center;justify-content: center;display: flex;">

                            

                                <div class="col-md-12 col-sm-12">

                                    <!-- MAIN NAVIGATION -->

                                    <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>

                                    <nav class="mob-nav">

                                        <ul class="nav nav-pills flexnav pull-right"  id="flexnav" data-breakpoint="800" style="padding: 10px 16px;">

                                        <li><a href="{{route('contactus')}}" class="navBar-item">{{__('index.contact_us')}}</a> </li>
                                        <li><a href="{{url('login')}}" class="navBar-item">{{__('index.log_in')}}</a> </li>

                                            <li><a href="{{url('register')}}" class="navBar-item">{{__('index.sign_up')}}</a> </li>



                                            <li><a href="{{route('privacy')}}" class="navBar-item">{{__('index.privacy')}}</a> </li>



            <li><a href="{{url('register')}}" class="navBar-item">{{__('index.register_seller')}}</a> </li>



            <li><a href="{{route('terms')}}" class="navBar-item">{{__('index.term_of_use')}}</a> </li>

                                            @if(App::getLocale() === 'en')             

                                            <li class="lang"><a href="{{ LaravelLocalization::getLocalizedURL('ar') }}" class="navBar-item" style="

                position: inherit; border-right: 0;"><img src="{{asset('img/logos/Egypt-Flag-1-icon.png')}}" style="width: 17px;cursor: pointer;" data-toggle="modal" data-target="#myModal"> اللغة العربية</a> </li>

                         @else    

                         <li class="lang"><a href="{{ LaravelLocalization::getLocalizedURL('en') }}" class="navBar-item" style="

                position: inherit;border-right: 0;"><img src="{{asset('img/logos/uk.png')}}" style="width: 17px;cursor: pointer;" data-toggle="modal" data-target="#myModal">  English</a> </li>    

                @endif           

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

                    <div class="col-lg-2 col-12 text-center" style="display: flex;  justify-content: space-between; align-items: center;display: flex;justify-content: space-between;align-items: center;">

                     <div class="input-group-btn search-panel">

                    <button type="button" class="btn btn-default dropdown-toggle eee" data-toggle="dropdown" style="

   

                                            font-size: 34px;

                                            position: relative;

                                          

                                            background: none;

                                            border: none;

                                            color: #2a8fbd;



                                        ">

    <div class="col-lg-4 col-xs-4">
                    	<span id="search_concept"> <i class="fa fa-bars" aria-hidden="true"></i>

                    </span></button>

                    <ul class="dropdown-menu" role="menu">

                      <li><a href="/"> <span class="fa fa-home" style="

                                padding: 10px;

                            "></span>{{__('index.home')}}</a></li>

                                                <li><a href="{{route('free.ads.all')}}"> <span class="fa fa-star" style="

                                padding: 10px;

                            "></span>{{__('index.freeAds')}}</a></li>



                            <li><a href="{{route('all.acc')}}"> <span class="fa fa-bullhorn" style="

                                padding: 10px;

                            "></span>{{__('index.shops')}}</a></li>

                      <!--<li><a href="#its_equal">Servies</a></li>-->

                      <!--<li><a href="#greather_than">shop</a></li>-->

                    </ul>
</div>
<div class="col-lg-4 col-xs-4">
                      <a href="/" class="logo g" style=" display: inline;">

                                <img src="{{asset('img/logos/Royal Sooq.png')}}" alt="Royal Sooq رويال سوق" title="Royal Sooq رويال سوق" style="width:85px;;margin-top:11px;">

                                 <!-- <h6 class="royal" style=""><a href="/" style="color: black !important; font-weight: 600;">{{$page_title ?? 'RoyalSooq'}}</a></h6> -->

                            </a>

                    

                </div>

                
<div class="col-lg-4 col-xs-4">
                <div class="flag">

                  @if(session()->get('my_country')== '1')

                            <img src="{{asset('img/logos/Egypt-Flag-1-icon.png')}}" style="width: 40px;cursor: pointer;" data-toggle="modal" data-target="#myModal">

                            @else

                            <img src="https://cdn.countryflags.com/thumbs/saudi-arabia/flag-400.png" style="width: 40px;cursor: pointer;" data-toggle="modal" data-target="#myModal">

                            @endif

                            <h6 style="font-weight: bold;">{{$country->name ?? ''}}</h6>

                        </div>  
</div>
                          

                              

        

         <div>

           

        </div>

    

                           

                           

                        <!-- Modal -->

                        <div id="myModal" class="modal fade" role="dialog">

                            <div class="modal-dialog">

                        

                            <!-- Modal content-->

                            <div class="modal-content" style="z-index: 999999;">

                                <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal">×</button>

                               <h4 class="modal-title">{{__('index.Regional Settings')}}</h4>

                                </div>

                                <form action='{{url("country")}}' method="get">

                                  @csrf

                                <div class="modal-body">

                                <h4 class="modal-title">{{__('index.choose country')}}</h4>

                                    <select class="selectpicker" name="country">

                                   

                                    @foreach($allCountries as $c)

                                        @if(($c->id)== 1)

                                        <option value="1" data-thumbnail="https://cdn4.iconfinder.com/data/icons/africa-flags-1/1000/egypt-512.png"> {{$c->name}}</option>

                                        @else

                                        <option value="2" data-thumbnail="https://cdn.countryflags.com/thumbs/saudi-arabia/flag-400.png" >  {{$c->name}}</option>

                                        @endif

                                    @endforeach

                                     <!-- <option value="1" data-thumbnail="https://cdn4.iconfinder.com/data/icons/africa-flags-1/1000/egypt-512.png"> Egypt</option>

                              <option value="2" data-thumbnail="https://cdn.countryflags.com/thumbs/saudi-arabia/flag-400.png" >  Saudi</option> -->

 

 

</select>



  <style>

      

      /*!

 * Bootstrap-select v1.6.4 (http://silviomoreto.github.io/bootstrap-select)

 *

 * Copyright 2013-2015 bootstrap-select

 * Licensed under MIT (https://github.com/silviomoreto/bootstrap-select/blob/master/LICENSE)

 */

.media-object {

    display: inherit;

    max-width: 28px;

}

.bootstrap-select {

  width: 220px \0;

  /* IE9 and below */

}

.bootstrap-select > .btn {

  width: 100%;

  padding-right: 25px;

}

.has-error .bootstrap-select .dropdown-toggle,

.error .bootstrap-select .dropdown-toggle {

  border-color: #b94a48;

}

.bootstrap-select.fit-width {

  width: auto !important;

}

.bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {

  width: 220px;

}

.bootstrap-select .btn:focus {

  outline: thin dotted #333333 !important;

  outline: 5px auto -webkit-focus-ring-color !important;

  outline-offset: -2px;

}

.bootstrap-select.form-control {

  margin-bottom: 0;

  padding: 0;

  border: none;

}

.bootstrap-select.form-control:not([class*="col-"]) {

  width: 100%;

}

.bootstrap-select.form-control.input-group-btn {

  z-index: auto;

}

.bootstrap-select.btn-group:not(.input-group-btn),

.bootstrap-select.btn-group[class*="col-"] {

  float: none;

  display: inline-block;

  margin-left: 0;

}

.bootstrap-select.btn-group.dropdown-menu-right,

.bootstrap-select.btn-group[class*="col-"].dropdown-menu-right,

.row .bootstrap-select.btn-group[class*="col-"].dropdown-menu-right {

  float: right;

}

.form-inline .bootstrap-select.btn-group,

.form-horizontal .bootstrap-select.btn-group,

.form-group .bootstrap-select.btn-group {

  margin-bottom: 0;

}

.form-group-lg .bootstrap-select.btn-group.form-control,

.form-group-sm .bootstrap-select.btn-group.form-control {

  padding: 0;

}

.form-inline .bootstrap-select.btn-group .form-control {

  width: 100%;

}

.bootstrap-select.btn-group > .disabled {

  cursor: not-allowed;

}

.bootstrap-select.btn-group > .disabled:focus {

  outline: none !important;

}

.bootstrap-select.btn-group .btn .filter-option {

  display: inline-block;

  overflow: hidden;

  width: 100%;

  text-align: left;

}

.bootstrap-select.btn-group .btn .caret {

  position: absolute;

  top: 50%;

  right: 12px;

  margin-top: -2px;

  vertical-align: middle;

}

.bootstrap-select.btn-group[class*="col-"] .btn {

  width: 100%;

}

.bootstrap-select.btn-group .dropdown-menu {

  min-width: 100%;

  z-index: 1035;

  -webkit-box-sizing: border-box;

     -moz-box-sizing: border-box;

          box-sizing: border-box;

}

.bootstrap-select.btn-group .dropdown-menu.inner {

  position: static;

  float: none;

  border: 0;

  padding: 0;

  margin: 0;

  border-radius: 0;

  -webkit-box-shadow: none;

          box-shadow: none;

}

.bootstrap-select.btn-group .dropdown-menu li {

  position: relative;

}

.bootstrap-select.btn-group .dropdown-menu li.dropdown-header {

  cursor: default;

}

.bootstrap-select.btn-group .dropdown-menu li.active small {

  color: #fff;

}

.bootstrap-select.btn-group .dropdown-menu li.disabled a {

  cursor: not-allowed;

}

.bootstrap-select.btn-group .dropdown-menu li a {

  cursor: pointer;

}

.bootstrap-select.btn-group .dropdown-menu li a.opt {

  position: relative;

  padding-left: 2.25em;

}

.bootstrap-select.btn-group .dropdown-menu li a span.check-mark {

  display: none;

}

.bootstrap-select.btn-group .dropdown-menu li a span.text {

  display: inline-block;

}

.bootstrap-select.btn-group .dropdown-menu li small {

  padding-left: 0.5em;

}

.bootstrap-select.btn-group .dropdown-menu li .media {

  display: inline-block;

}

.bootstrap-select.btn-group .dropdown-menu li .media-body {

  vertical-align: middle;

  white-space: normal;

}

.bootstrap-select.btn-group .dropdown-menu .notify {

  position: absolute;

  bottom: 5px;

  width: 96%;

  margin: 0 2%;

  min-height: 26px;

  padding: 3px 5px;

  background: #f5f5f5;

  border: 1px solid #e3e3e3;

  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);

          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);

  pointer-events: none;

  opacity: 0.9;

  -webkit-box-sizing: border-box;

     -moz-box-sizing: border-box;

          box-sizing: border-box;

}

.bootstrap-select.btn-group .no-results {

  padding: 3px;

  background: #f5f5f5;

  margin: 0 5px;

}

.bootstrap-select.btn-group.fit-width .btn .filter-option {

  position: static;

}

.bootstrap-select.btn-group.fit-width .btn .caret {

  position: static;

  top: auto;

  margin-top: -1px;

}

.bootstrap-select.btn-group.show-tick .dropdown-menu li.selected a span.check-mark {

  position: absolute;

  display: inline-block;

  right: 15px;

  margin-top: 5px;

}

.bootstrap-select.btn-group.show-tick .dropdown-menu li a span.text {

  margin-right: 34px;

}

.bootstrap-select.show-menu-arrow.open > .btn {

  z-index: 1036;

}

.bootstrap-select.show-menu-arrow .dropdown-toggle:before {

  content: '';

  border-left: 7px solid transparent;

  border-right: 7px solid transparent;

  border-bottom: 7px solid rgba(204, 204, 204, 0.2);

  position: absolute;

  bottom: -4px;

  left: 9px;

  display: none;

}

.bootstrap-select.show-menu-arrow .dropdown-toggle:after {

  content: '';

  border-left: 6px solid transparent;

  border-right: 6px solid transparent;

  border-bottom: 6px solid white;

  position: absolute;

  bottom: -4px;

  left: 10px;

  display: none;

}

.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:before {

  bottom: auto;

  top: -3px;

  border-top: 7px solid rgba(204, 204, 204, 0.2);

  border-bottom: 0;

}

.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:after {

  bottom: auto;

  top: -3px;

  border-top: 6px solid white;

  border-bottom: 0;

}

.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:before {

  right: 12px;

  left: auto;

}

.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:after {

  right: 13px;

  left: auto;

}

.bootstrap-select.show-menu-arrow.open > .dropdown-toggle:before,

.bootstrap-select.show-menu-arrow.open > .dropdown-toggle:after {

  display: block;

}

.bs-searchbox,

.bs-actionsbox,

.bs-donebutton {

  padding: 4px 8px;

}

.bs-actionsbox {

  float: left;

  width: 100%;

  -webkit-box-sizing: border-box;

     -moz-box-sizing: border-box;

          box-sizing: border-box;

}

.bs-actionsbox .btn-group button {

  width: 50%;

}

.bs-donebutton {

  float: left;

  width: 100%;

  -webkit-box-sizing: border-box;

     -moz-box-sizing: border-box;

          box-sizing: border-box;

}

.bs-donebutton .btn-group button {

  width: 100%;

}

.bs-searchbox + .bs-actionsbox {

  padding: 0 8px 4px;

}

.bs-searchbox input.form-control {

  margin-bottom: 0;

  width: 100%;

}

.mobile-device {

  position: absolute !important;

  top: 0;

  left: 0;

  display: block !important;

  width: 100%;

  height: 100% !important;

  opacity: 0;

}

span.media-left {

    display: inherit;

}

input[type="email"], input[type="password"] {

    width: 100%;

    padding: 10px;

    margin-bottom: 30px;

    border: 1px solid #cccccc;

    background-color: #ffffff;

}

span.input-group-btn:focus {

    background: #ff000000;

    border: none;

}

  </style>

  <script>

      (function($) {

  'use strict';



  //<editor-fold desc="Shims">

  if (!String.prototype.includes) {

    (function() {

      'use strict'; // needed to support `apply`/`call` with `undefined`/`null`

      var toString = {}.toString,

          defineProperty = (function() {

            // IE8 only supports `Object.defineProperty` on DOM elements

            try {

              var object = {},

                  $defineProperty = Object.defineProperty,

                  result = $defineProperty(object, object, object) && $defineProperty;

            } catch (error) {}

            return result;

          }());

      var indexOf = ''.indexOf,

          includes = function(search) {

            if (this===null) {

              throw TypeError();

            }

            var string = String(this);

            if (search && toString.call(search)==='[object RegExp]') {

              throw TypeError();

            }

            var stringLength = string.length,

                searchString = String(search),

                searchLength = searchString.length,

                position = arguments.length > 1 ? arguments[1] : undefined;

            // `ToInteger`

            var pos = position ? Number(position) : 0;

            if (pos!==pos) { // better `isNaN`

              pos = 0;

            }

            var start = Math.min(Math.max(pos, 0), stringLength);

            // Avoid the `indexOf` call if no match is possible

            if (searchLength + start > stringLength) {

              return false;

            }

            return indexOf.call(string, searchString, pos)!==-1;

          };

      if (defineProperty) {

        defineProperty(String.prototype, 'includes', {

          'value': includes,

          'configurable': true,

          'writable': true

        });

      } else {

        String.prototype.includes = includes;

      }

    }());

  }



  if (!String.prototype.startsWith) {

    (function() {

      'use strict'; // needed to support `apply`/`call` with `undefined`/`null`

      var defineProperty = (function() {

        // IE8 only supports `Object.defineProperty` on DOM elements

        try {

          var object = {},

              $defineProperty = Object.defineProperty,

              result = $defineProperty(object, object, object) && $defineProperty;

        } catch (error) {}

        return result;

      }());

      var toString = {}.toString,

          startsWith = function(search) {

            if (this===null) {

              throw TypeError();

            }

            var string = String(this);

            if (search && toString.call(search)==='[object RegExp]') {

              throw TypeError();

            }

            var stringLength = string.length,

                searchString = String(search),

                searchLength = searchString.length,

                position = arguments.length > 1 ? arguments[1] : undefined;

            // `ToInteger`

            var pos = position ? Number(position) : 0;

            if (pos!==pos) { // better `isNaN`

              pos = 0;

            }

            var start = Math.min(Math.max(pos, 0), stringLength);

            // Avoid the `indexOf` call if no match is possible

            if (searchLength + start > stringLength) {

              return false;

            }

            var index = -1;

            while (++index < searchLength) {

              if (string.charCodeAt(start + index)!==searchString.charCodeAt(index)) {

                return false;

              }

            }

            return true;

          };

      if (defineProperty) {

        defineProperty(String.prototype, 'startsWith', {

          'value': startsWith,

          'configurable': true,

          'writable': true

        });

      } else {

        String.prototype.startsWith = startsWith;

      }

    }());

  }

  //</editor-fold>



  // Case insensitive contains search

  $.expr[':'].icontains = function(obj, index, meta) {

    var $obj = $(obj),

        haystack = ($obj.data('tokens') || $obj.text()).toUpperCase();

    return haystack.includes(meta[3].toUpperCase());

  };



  // Case insensitive begins search

  $.expr[':'].ibegins = function(obj, index, meta) {

    var $obj = $(obj),

        haystack = ($obj.data('tokens') || $obj.text()).toUpperCase();

    return haystack.startsWith(meta[3].toUpperCase());

  };



  // Case and accent insensitive contains search

  $.expr[':'].aicontains = function(obj, index, meta) {

    var $obj = $(obj),

        haystack = ($obj.data('tokens') || $obj.data('normalizedText') || $obj.text()).toUpperCase();

    return haystack.includes(haystack, meta[3]);

  };



  // Case and accent insensitive begins search

  $.expr[':'].aibegins = function(obj, index, meta) {

    var $obj = $(obj),

        haystack = ($obj.data('tokens') || $obj.data('normalizedText') || $obj.text()).toUpperCase();

    return haystack.startsWith(meta[3].toUpperCase());

  };



  /**

   * Remove all diatrics from the given text.

   * @access private

   * @param {String} text

   * @returns {String}

   */

  function normalizeToBase(text) {

    var rExps = [

      {re: /[\xC0-\xC6]/g, ch: 'A'},

      {re: /[\xE0-\xE6]/g, ch: 'a'},

      {re: /[\xC8-\xCB]/g, ch: 'E'},

      {re: /[\xE8-\xEB]/g, ch: 'e'},

      {re: /[\xCC-\xCF]/g, ch: 'I'},

      {re: /[\xEC-\xEF]/g, ch: 'i'},

      {re: /[\xD2-\xD6]/g, ch: 'O'},

      {re: /[\xF2-\xF6]/g, ch: 'o'},

      {re: /[\xD9-\xDC]/g, ch: 'U'},

      {re: /[\xF9-\xFC]/g, ch: 'u'},

      {re: /[\xC7-\xE7]/g, ch: 'c'},

      {re: /[\xD1]/g, ch: 'N'},

      {re: /[\xF1]/g, ch: 'n'}

    ];

    $.each(rExps, function() {

      text = text.replace(this.re, this.ch);

    });

    return text;

  }





  function htmlEscape(html) {

    var escapeMap = {

      '&': '&amp;',

      '<': '&lt;',

      '>': '&gt;',

      '"': '&quot;',

      "'": '&#x27;',

      '`': '&#x60;'

    };

    var source = '(?:' + Object.keys(escapeMap).join('|') + ')',

        testRegexp = new RegExp(source),

        replaceRegexp = new RegExp(source, 'g'),

        string = html===null ? '' : '' + html;

    return testRegexp.test(string) ? string.replace(replaceRegexp, function(match) {

      return escapeMap[match];

    }) : string;

  }



  var Selectpicker = function(element, options, e) {

    if (e) {

      e.stopPropagation();

      e.preventDefault();

    }



    this.$element = $(element);

    this.$newElement = null;

    this.$button = null;

    this.$menu = null;

    this.$lis = null;

    this.options = options;



    // If we have no title yet, try to pull it from the HTML title attribute

    // (jQuery doesn't pick it up as it's not a data-attribute)

    if (this.options.title===null) {

      this.options.title = this.$element.attr('title');

    }



    // Expose public methods

    this.val = Selectpicker.prototype.val;

    this.render = Selectpicker.prototype.render;

    this.refresh = Selectpicker.prototype.refresh;

    this.setStyle = Selectpicker.prototype.setStyle;

    this.selectAll = Selectpicker.prototype.selectAll;

    this.deselectAll = Selectpicker.prototype.deselectAll;

    this.destroy = Selectpicker.prototype.remove;

    this.remove = Selectpicker.prototype.remove;

    this.show = Selectpicker.prototype.show;

    this.hide = Selectpicker.prototype.hide;



    this.init();

  };



  Selectpicker.VERSION = '1.6.4';



  // Part of this is duplicated in i18n/defaults-en_US.js (make sure to update both)

  Selectpicker.DEFAULTS = {

    noneSelectedText: 'Nothing selected',

    noneResultsText: 'No results matched {0}',

    countSelectedText: function(numSelected, numTotal) {

      return (numSelected===1) ? '{0} item selected' : '{0} items selected';

    },

    maxOptionsText: function(numAll, numGroup) {

      return [

        (numAll===1) ? 'Limit reached ({n} item max)' : 'Limit reached ({n} items max)',

        (numGroup===1) ? 'Group limit reached ({n} item max)' : 'Group limit reached ({n} items max)'

      ];

    },

    selectAllText: 'Select All',

    deselectAllText: 'Deselect All',

    doneButton: false,

    doneButtonText: 'Close',

    multipleSeparator: ', ',

    style: 'btn-default',

    size: 'auto',

    title: null,

    selectedTextFormat: 'values',

    width: false,

    container: false,

    hideDisabled: false,

    dropupAuto: true,

    header: false,

    liveSearch: false,

    liveSearchPlaceholder: null,

    liveSearchNormalize: false,

    liveSearchStyle: 'contains',

    actionsBox: false,

    tickIcon: 'glyphicon glyphicon-ok',

    caretIcon: 'caret',

    maxOptions: false,

    mobile: false,

    selectOnTab: false,

    dropdownAlignRight: false

  };



  Selectpicker.prototype = {



    constructor: Selectpicker,



    init: function() {

      var that = this,

          id = this.$element.attr('id');



      this.$element.hide();

      this.multiple = this.$element.prop('multiple');

      this.autofocus = this.$element.prop('autofocus');

      this.$newElement = this.createView();

      this.$element.after(this.$newElement);

      this.$button = this.$newElement.children('button');

      this.$menu = this.$newElement.children('.dropdown-menu');

      this.$searchbox = this.$menu.find('input');



      if (this.options.dropdownAlignRight)

        this.$menu.addClass('dropdown-menu-right');



      if (id) {

        this.$button.attr('data-id', id);

        $('label[for="' + id + '"]').click(function(e) {

          e.preventDefault();

          that.$button.focus();

        });

      }



      this.checkDisabled();

      this.clickListener();

      if (this.options.liveSearch) this.liveSearchListener();

      this.render();

      this.liHeight();

      this.setStyle();

      this.setWidth();

      if (this.options.container) this.selectPosition();

      this.$menu.data('this', this);

      this.$newElement.data('this', this);

      if (this.options.mobile) this.mobile();

    },



    createDropdown: function() {

      // Options

      // If we are multiple, then add the show-tick class by default

      var multiple = this.multiple ? ' show-tick' : '',

          inputGroup = this.$element.parent().hasClass('input-group') ? ' input-group-btn' : '',

          autofocus = this.autofocus ? ' autofocus' : '';

      // Elements

      var header = this.options.header ?

            '<div class="popover-title">' +

              '<button type="button" class="close" aria-hidden="true">&times;</button>' + this.options.header +

            '</div>' : '',

          searchbox = this.options.liveSearch ?

            '<div class="bs-searchbox">' +

              '<input type="text" class="form-control" autocomplete="off"' + (null===this.options.liveSearchPlaceholder ? '' : ' placeholder="' + htmlEscape(this.options.liveSearchPlaceholder) + '"') + '>' +

            '</div>' : '',

          actionsbox = this.multiple && this.options.actionsBox ?

            '<div class="bs-actionsbox">' +

              '<div class="btn-group btn-group-sm btn-block">' +

                '<button class="actions-btn bs-select-all btn btn-default">' + this.options.selectAllText + '</button>' +

                '<button class="actions-btn bs-deselect-all btn btn-default">' + this.options.deselectAllText + '</button>' +

              '</div>' +

            '</div>' : '',

          donebutton = this.multiple && this.options.doneButton ?

            '<div class="bs-donebutton">' +

              '<div class="btn-group btn-block">' +

                '<button class="btn btn-sm btn-default">' + this.options.doneButtonText + '</button>' +

              '</div>' +

            '</div>' : '',

          drop =

            '<div class="btn-group bootstrap-select' + multiple + inputGroup + '">' +

              '<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"' + autofocus + '>' +

                '<span class="filter-option pull-left"></span>&nbsp;' +

                '<span class="' + this.options.caretIcon + '" aria-hidden="true"></span>' +

              '</button>' +

              '<div class="dropdown-menu open">' +

                header +

                searchbox +

                actionsbox +

                '<ul class="dropdown-menu inner" role="menu"></ul>' +

                donebutton +

              '</div>' +

            '</div>';



      return $(drop);

    },



    createView: function() {

      var $drop = this.createDropdown(),

          $li = this.createLi();

      $drop.find('ul').append($li);

      return $drop;

    },



    reloadLi: function() {

      // Remove all children

      this.destroyLi();

      // Re-build

      var $li = this.createLi();

      this.$menu.find('ul').append($li);

    },



    destroyLi: function() {

      this.$menu.find('li').remove();

    },



    createLi: function() {

      var that = this,

          _li = [],

          optID = 0;



      // Helper functions

      /**

       * @param content

       * @param [index]

       * @param [classes]

       * @param [optgroup]

       * @returns {string}

       */

      var generateLI = function(content, index, classes, optgroup) {

        return '<li' +

            ((typeof classes!=='undefined' & classes!=='') ? ' class="' + classes + '"' : '') +

            ((typeof index!=='undefined' & index!==null) ? ' data-original-index="' + index + '"' : '') +

            ((typeof optgroup!=='undefined' & optgroup!==null) ? ' data-optgroup="' + optgroup + '"' : '') +

            '>' + content + '</li>';

      };



      /**

       * @param text

       * @param [classes]

       * @param [inline]

       * @param [title]

       * @param [tokens]

       * @param [multiple]

       * @returns {string}

       */

      var generateA = function(text, classes, inline, title, tokens, multiple) {

        return '<a tabindex="0"' +

            (typeof title!=='undefined' ? ' title="' + title + '"' : '') +

            (typeof classes!=='undefined' ? ' class="' + classes + '"' : '') +

            (typeof inline!=='undefined' ? ' style="' + inline + '"' : '') +

            ' data-normalized-text="' + normalizeToBase(htmlEscape(text)) + '"' +

            (typeof tokens!=='undefined' || tokens!==null ? ' data-tokens="' + tokens + '"' : '') +

            '>' + text +

            (multiple ? '<span class="' + that.options.tickIcon + ' check-mark" aria-hidden="true"></span>' : '') +

            '</a>';

      };



      this.$element.find('option').each(function(index) {

        var $this = $(this);



        // Get the class and text for the option

        var optionClass = $this.attr('class') || '',

            inline = $this.attr('style'),

            title = $this.attr('title'),

            text = $this.data('content') ? $this.data('content') : $this.html(),

            tokens = $this.data('tokens') ? $this.data('tokens') : null,

            subtext = $this.data('subtext') ? '<small class="text-muted">' + $this.data('subtext') + '</small>' : '',

            icon = $this.data('icon') ? '<span class="' + $this.data('icon') + '" aria-hidden="true"></span> ' : '',

            isDisabled = $this.is(':disabled') || $this.parent().is(':disabled');

        if (icon!=='' && isDisabled) {

          icon = '<span>' + icon + '</span>';

        }



        if ($this.data('thumbnail')) {

          // Prepare thumbnail

          text =

            '<span class="media">' +

              '<span class="media-left"><img src="' + $this.data('thumbnail') + '" class="media-object" onerror="src=\'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\'"></span>' +

              '<span class="media-body">' + text + '</span>' +

            '</span>';

        } else if (!$this.data('content')) {

          // Prepend any icon and append any subtext to the main text

          text = icon + '<span class="text">' + text + subtext + '</span>';

        }



        if (that.options.hideDisabled && isDisabled) {

          return;

        }



        if ($this.parent().is('optgroup') && $this.data('divider')!==true) {

          if ($this.index()===0) { // Is it the first option of the optgroup?

            optID += 1;



            // Get the opt group label

            var label = $this.parent().attr('label'),

                labelSubtext = $this.parent().data('subtext') ? '<small class="text-muted">' + $this.parent().data('subtext') + '</small>' : '',

                labelIcon = $this.parent().data('icon') ? '<span class="' + $this.parent().data('icon') + '" aria-hidden="true"></span> ' : '';

            label = labelIcon + '<span class="text">' + label + labelSubtext + '</span>';



            if (index!==0 && _li.length > 0) { // Is it NOT the first option of the select && are there elements in the dropdown?

              _li.push(generateLI('', null, 'divider', optID + 'div'));

            }



            _li.push(generateLI(label, null, 'dropdown-header', optID));

          }

          _li.push(generateLI(generateA(text, 'opt ' + optionClass, inline, title, tokens, that.multiple), index, '', optID));

        } else if ($this.data('divider')===true) {

          _li.push(generateLI('', index, 'divider'));

        } else if ($this.data('hidden')===true) {

          _li.push(generateLI(generateA(text, optionClass, inline, title, tokens, that.multiple), index, 'hidden is-hidden'));

        } else {

          if ($this.prev().is('optgroup')) _li.push(generateLI('', null, 'divider', optID + 'div'));

          _li.push(generateLI(generateA(text, optionClass, inline, title, tokens, that.multiple), index));

        }

      });



      // If we are not multiple, we don't have a selected item, and we don't have

      // a title, select the first element so something is set in the button

      if (!this.multiple && this.$element.find('option:selected').length===0 && !this.options.title) {

        this.$element.find('option').eq(0).prop('selected', true).attr('selected', 'selected');

      }



      return $(_li.join(''));

    },



    findLis: function() {

      if (this.$lis===null) this.$lis = this.$menu.find('li');

      return this.$lis;

    },



    /**

     * @param [updateLi] defaults to true

     */

    render: function(updateLi) {

      var that = this;



      // Update the LI to match the SELECT

      if (updateLi!==false) {

        this.$element.find('option').each(function(index) {

          that.setDisabled(index, $(this).is(':disabled') || $(this).parent().is(':disabled'));

          that.setSelected(index, $(this).is(':selected'));

        });

      }



      this.tabIndex();

      var notDisabled = this.options.hideDisabled ? ':enabled' : '',

          selectedItems = this.$element.find('option:selected' + notDisabled).map(function() {

            var $this = $(this),

                icon = $this.data('icon') ? '<i class="' + $this.data('icon') + '" aria-hidden="true"></i> ' : '',

                subtext;

            if ($this.data('subtext') && !that.multiple) {

              subtext = ' <small class="text-muted">' + $this.data('subtext') + '</small>';

            } else {

              subtext = '';

            }

            if ($this.attr('title')) {

              return $this.attr('title');

            } else if ($this.data('content')) {

              return $this.data('content');

            } else {

              return icon + $this.html() + subtext;

            }

          }).toArray();



      // Fixes issue in IE10 occurring when no default option is selected and at least one option is disabled

      // Convert all the values into a comma delimited string

      var title = !this.multiple ? selectedItems[0] : selectedItems.join(this.options.multipleSeparator);



      // If this is multi-select, and the selectText type is count, then show 1 of 2 selected, etc.

      if (this.multiple && this.options.selectedTextFormat.indexOf('count') > -1) {

        var max = this.options.selectedTextFormat.split('>');

        if ((max.length > 1 && selectedItems.length > max[1]) || (max.length===1 && selectedItems.length >= 2)) {

          notDisabled = this.options.hideDisabled ? ', [disabled]' : '';

          var totalCount = this.$element.find('option').not('[data-divider="true"], [data-hidden="true"]' + notDisabled).length,

              tr8nText = (typeof this.options.countSelectedText==='function') ? this.options.countSelectedText(selectedItems.length, totalCount) : this.options.countSelectedText;

          title = tr8nText.replace('{0}', selectedItems.length.toString()).replace('{1}', totalCount.toString());

        }

      }



      // If we dont have a title, then use the default; or if nothing is set at all, use the not selected text

      if (!title) {

        title = this.options.title || this.options.noneSelectedText;

      }



      // Strip all HTML tags and trim the result

      this.$button.children('.filter-option').html((!this.multiple || this.options.selectedTextFormat==='values') ? title : this.options.title);

      this.$button.attr('title', this.options.title);

    },



    /**

     * @param [style]

     * @param [status]

     */

    setStyle: function(style, status) {

      if (this.$element.attr('class')) {

        this.$newElement.addClass(this.$element.attr('class').replace(/selectpicker|mobile-device|validate\[.*\]/gi, ''));

      }



      var buttonClass = style ? style : this.options.style;



      if (status==='add') {

        this.$button.addClass(buttonClass);

      } else if (status==='remove') {

        this.$button.removeClass(buttonClass);

      } else {

        this.$button.removeClass(this.options.style);

        this.$button.addClass(buttonClass);

      }

    },



    liHeight: function() {

      if (this.options.size===false) return;



      var $selectClone = this.$menu.parent().clone().children('.dropdown-toggle').prop('autofocus', false).end().appendTo('body'),

          $menuClone = $selectClone.addClass('open').children('.dropdown-menu'),

          liHeight = $menuClone.find('li').not('.divider, .dropdown-header').filter(':visible').children('a').outerHeight(),

          headerHeight = this.options.header ? $menuClone.find('.popover-title').outerHeight() : 0,

          searchHeight = this.options.liveSearch ? $menuClone.find('.bs-searchbox').outerHeight() : 0,

          actionsHeight = this.options.actionsBox ? $menuClone.find('.bs-actionsbox').outerHeight() : 0,

          doneButtonHeight = this.multiple ? $menuClone.find('.bs-donebutton').outerHeight() : 0;



      $selectClone.remove();



      this.$newElement

          .data('liHeight', liHeight)

          .data('headerHeight', headerHeight)

          .data('searchHeight', searchHeight)

          .data('actionsHeight', actionsHeight)

          .data('doneButtonHeight', doneButtonHeight);

    },



    setSize: function() {

      this.findLis();

      var that = this,

          $menu = this.$menu,

          $menuInner = $menu.children('.inner'),

          selectHeight = this.$newElement.outerHeight(),

          liHeight = this.$newElement.data('liHeight'),

          headerHeight = this.$newElement.data('headerHeight'),

          searchHeight = this.$newElement.data('searchHeight'),

          actionsHeight = this.$newElement.data('actionsHeight'),

          doneButtonHeight = this.$newElement.data('doneButtonHeight'),

          divHeight = this.$lis.filter('.divider').outerHeight(true),

          menuPadding = parseInt($menu.css('padding-top')) +

              parseInt($menu.css('padding-bottom')) +

              parseInt($menu.css('border-top-width')) +

              parseInt($menu.css('border-bottom-width')),

          notDisabled = this.options.hideDisabled ? '.disabled' : '',

          $window = $(window),

          menuExtras = menuPadding + parseInt($menu.css('margin-top')) + parseInt($menu.css('margin-bottom')) + 2,

          menuHeight,

          selectOffsetTop,

          selectOffsetBot,

          posVert = function() {

            // jQuery defines a scrollTop function, but in pure JS it's a property

            //noinspection JSValidateTypes

            selectOffsetTop = that.$newElement.offset().top - $window.scrollTop();

            selectOffsetBot = $window.height() - selectOffsetTop - selectHeight;

          };

      posVert();

      if (this.options.header) $menu.css('padding-top', 0);



      if (this.options.size==='auto') {

        var getSize = function() {

          var minHeight,

              lisVis = that.$lis.not('.hidden');



          posVert();

          menuHeight = selectOffsetBot - menuExtras;



          if (that.options.dropupAuto) {

            that.$newElement.toggleClass('dropup', selectOffsetTop > selectOffsetBot && (menuHeight - menuExtras) < $menu.height());

          }

          if (that.$newElement.hasClass('dropup')) {

            menuHeight = selectOffsetTop - menuExtras;

          }



          if ((lisVis.length + lisVis.filter('.dropdown-header').length) > 3) {

            minHeight = liHeight * 3 + menuExtras - 2;

          } else {

            minHeight = 0;

          }



          $menu.css({

            'max-height': menuHeight + 'px',

            'overflow': 'hidden',

            'min-height': minHeight + headerHeight + searchHeight + actionsHeight + doneButtonHeight + 'px'

          });

          $menuInner.css({

            'max-height': menuHeight - headerHeight - searchHeight - actionsHeight - doneButtonHeight - menuPadding + 'px',

            'overflow-y': 'auto',

            'min-height': Math.max(minHeight - menuPadding, 0) + 'px'

          });

        };

        getSize();

        this.$searchbox.off('input.getSize propertychange.getSize').on('input.getSize propertychange.getSize', getSize);

        $window.off('resize.getSize scroll.getSize').on('resize.getSize scroll.getSize', getSize);

      } else if (this.options.size && this.options.size!=='auto' && $menu.find('li').not(notDisabled).length > this.options.size) {

        var optIndex = this.$lis.not('.divider').not(notDisabled).children().slice(0, this.options.size).last().parent().index(),

            divLength = this.$lis.slice(0, optIndex + 1).filter('.divider').length;

        menuHeight = liHeight * this.options.size + divLength * divHeight + menuPadding;

        if (that.options.dropupAuto) {

          //noinspection JSUnusedAssignment

          this.$newElement.toggleClass('dropup', selectOffsetTop > selectOffsetBot && menuHeight < $menu.height());

        }

        $menu.css({

          'max-height': menuHeight + headerHeight + searchHeight + actionsHeight + doneButtonHeight + 'px',

          'overflow': 'hidden'

        });

        $menuInner.css({

          'max-height': menuHeight - menuPadding + 'px',

          'overflow-y': 'auto'

        });

      }

    },



    setWidth: function() {

      if (this.options.width==='auto') {

        this.$menu.css('min-width', '0');



        // Get correct width if element hidden

        var selectClone = this.$newElement.clone().appendTo('body'),

            ulWidth = selectClone.children('.dropdown-menu').css('width'),

            btnWidth = selectClone.css('width', 'auto').children('button').css('width');

        selectClone.remove();



        // Set width to whatever's larger, button title or longest option

        this.$newElement.css('width', Math.max(parseInt(ulWidth), parseInt(btnWidth)) + 'px');

      } else if (this.options.width==='fit') {

        // Remove inline min-width so width can be changed from 'auto'

        this.$menu.css('min-width', '');

        this.$newElement.css('width', '').addClass('fit-width');

      } else if (this.options.width) {

        // Remove inline min-width so width can be changed from 'auto'

        this.$menu.css('min-width', '');

        this.$newElement.css('width', this.options.width);

      } else {

        // Remove inline min-width/width so width can be changed

        this.$menu.css('min-width', '');

        this.$newElement.css('width', '');

      }

      // Remove fit-width class if width is changed programmatically

      if (this.$newElement.hasClass('fit-width') && this.options.width!=='fit') {

        this.$newElement.removeClass('fit-width');

      }

    },



    selectPosition: function() {

      var that = this,

          drop = '<div />',

          $drop = $(drop),

          pos,

          actualHeight,

          getPlacement = function($element) {

            $drop.addClass($element.attr('class').replace(/form-control/gi, '')).toggleClass('dropup', $element.hasClass('dropup'));

            pos = $element.offset();

            actualHeight = $element.hasClass('dropup') ? 0 : $element[0].offsetHeight;

            $drop.css({

              'top': pos.top + actualHeight,

              'left': pos.left,

              'width': $element[0].offsetWidth,

              'position': 'absolute'

            });

          };

      this.$newElement.on('click', function() {

        if (that.isDisabled()) {

          return;

        }

        getPlacement($(this));

        $drop.appendTo(that.options.container);

        $drop.toggleClass('open', !$(this).hasClass('open'));

        $drop.append(that.$menu);

      });

      $(window).on('resize scroll', function() {

        getPlacement(that.$newElement);

      });

      $('html').on('click', function(e) {

        if ($(e.target).closest(that.$newElement).length < 1) {

          $drop.removeClass('open');

        }

      });

    },



    setSelected: function(index, selected) {

      this.findLis();

      this.$lis.filter('[data-original-index="' + index + '"]').toggleClass('selected', selected);

    },



    setDisabled: function(index, disabled) {

      this.findLis();

      if (disabled) {

        this.$lis.filter('[data-original-index="' + index + '"]').addClass('disabled').children('a').attr('href', '#').attr('tabindex', -1);

      } else {

        this.$lis.filter('[data-original-index="' + index + '"]').removeClass('disabled').children('a').removeAttr('href').attr('tabindex', 0);

      }

    },



    isDisabled: function() {

      return this.$element.is(':disabled');

    },



    checkDisabled: function() {

      var that = this;



      if (this.isDisabled()) {

        this.$button.addClass('disabled').attr('tabindex', -1);

      } else {

        if (this.$button.hasClass('disabled')) {

          // Also sync <li> disabled state with <select> disabled state

          this.$button.add(this.$menu.find('li')).removeClass('disabled');

        }

        if (this.$button.attr('tabindex')===-1 && !this.$element.data('tabindex')) {

          this.$button.removeAttr('tabindex');

        }

      }



      this.$button.click(function() {

        return !that.isDisabled();

      });

    },



    tabIndex: function() {

      if (this.$element.is('[tabindex]')) {

        this.$element.data('tabindex', this.$element.attr('tabindex'));

        this.$button.attr('tabindex', this.$element.data('tabindex'));

      }

    },



    clickListener: function() {

      var that = this;



      this.$newElement.on('touchstart.dropdown', '.dropdown-menu', function(e) {

        e.stopPropagation();

      });



      this.$newElement.on('click', function() {

        that.setSize();

        if (!that.options.liveSearch && !that.multiple) {

          setTimeout(function() {

            that.$menu.find('.selected a').focus();

          }, 10);

        }

      });



      this.$menu.on('click', 'li a', function(e) {

        var $this = $(this),

            clickedIndex = $this.parent().data('originalIndex'),

            prevValue = that.$element.val(),

            prevIndex = that.$element.prop('selectedIndex');



        // Don't close on multi-select menu

        if (that.multiple) {

          e.stopPropagation();

        }



        e.preventDefault();



        // Don't run if we have been disabled

        if (!that.isDisabled() && !$this.parent().hasClass('disabled')) {

          var $options = that.$element.find('option'),

              $option = $options.eq(clickedIndex),

              state = $option.prop('selected'),

              $optgroup = $option.parent('optgroup'),

              maxOptions = that.options.maxOptions,

              maxOptionsGrp = $optgroup.data('maxOptions') || false;



         if (!that.multiple) { // Deselect all others if not multi-select box

            $options.prop('selected', false);

            $option.prop('selected', true);

            that.$menu.find('.selected').removeClass('selected');

            that.setSelected(clickedIndex, true);

          } else { // Toggle the one we have chosen if we are multi-select

            $option.prop('selected', !state);

            that.setSelected(clickedIndex, !state);

            $this.blur();



            if (maxOptions!==false || maxOptionsGrp!==false) {

              var maxReached = maxOptions < $options.filter(':selected').length,

                  maxReachedGrp = maxOptionsGrp < $optgroup.find('option:selected').length;



              if ((maxOptions && maxReached) || (maxOptionsGrp && maxReachedGrp)) {

                if (maxOptions && maxOptions===1) {

                  $options.prop('selected', false);

                  $option.prop('selected', true);

                  that.$menu.find('.selected').removeClass('selected');

                  that.setSelected(clickedIndex, true);

                } else if (maxOptionsGrp && maxOptionsGrp===1) {

                  $optgroup.find('option:selected').prop('selected', false);

                  $option.prop('selected', true);

                  var optgroupID = $this.data('optgroup');



                  that.$menu.find('.selected').has('a[data-optgroup="' + optgroupID + '"]').removeClass('selected');



                  that.setSelected(clickedIndex, true);

                } else {

                  var maxOptionsArr = (typeof that.options.maxOptionsText==='function') ? that.options.maxOptionsText(maxOptions, maxOptionsGrp) : that.options.maxOptionsText,

                      maxTxt = maxOptionsArr[0].replace('{n}', maxOptions),

                      maxTxtGrp = maxOptionsArr[1].replace('{n}', maxOptionsGrp),

                      $notify = $('<div class="notify"></div>');

                  // If {var} is set in array, replace it

                  /** @deprecated */

                  if (maxOptionsArr[2]) {

                    maxTxt = maxTxt.replace('{var}', maxOptionsArr[2][maxOptions > 1 ? 0 : 1]);

                    maxTxtGrp = maxTxtGrp.replace('{var}', maxOptionsArr[2][maxOptionsGrp > 1 ? 0 : 1]);

                  }



                  $option.prop('selected', false);



                  that.$menu.append($notify);



                  if (maxOptions && maxReached) {

                    $notify.append($('<div>' + maxTxt + '</div>'));

                    that.$element.trigger('maxReached.bs.select');

                  }



                  if (maxOptionsGrp && maxReachedGrp) {

                    $notify.append($('<div>' + maxTxtGrp + '</div>'));

                    that.$element.trigger('maxReachedGrp.bs.select');

                  }



                  setTimeout(function() {

                    that.setSelected(clickedIndex, false);

                  }, 10);



                  $notify.delay(750).fadeOut(300, function() {

                    $(this).remove();

                  });

                }

              }

            }

          }



          if (!that.multiple) {

            that.$button.focus();

          } else if (that.options.liveSearch) {

            that.$searchbox.focus();

          }



          // Trigger select 'change'

          if ((prevValue!==that.$element.val() && that.multiple) || (prevIndex!==that.$element.prop('selectedIndex') && !that.multiple)) {

            // Support both native addEventListener() and jQuery change()

            var event;

            if (typeof Event==='function') {

              // For modern browsers

              event = new Event('change', {

                'bubbles': true

              });

            } else {

              // For IE since it doesn't support Event constructor

              event = document.createEvent('Event');

              event.initEvent('change', true, false);

            }

            that.$element[0].dispatchEvent(event);

          }

        }

      });



      this.$menu.on('click', 'li.disabled a, .popover-title, .popover-title :not(.close)', function(e) {

        if (e.currentTarget===this) {

          e.preventDefault();

          e.stopPropagation();

          if (that.options.liveSearch) {

            that.$searchbox.focus();

          } else {

            that.$button.focus();

          }

        }

      });



      this.$menu.on('click', 'li.divider, li.dropdown-header', function(e) {

        e.preventDefault();

        e.stopPropagation();

        if (that.options.liveSearch) {

          that.$searchbox.focus();

        } else {

          that.$button.focus();

        }

      });



      this.$menu.on('click', '.popover-title .close', function() {

        that.$button.focus();

      });



      this.$searchbox.on('click', function(e) {

        e.stopPropagation();

      });



      this.$menu.on('click', '.actions-btn', function(e) {

        if (that.options.liveSearch) {

          that.$searchbox.focus();

        } else {

          that.$button.focus();

        }



        e.preventDefault();

        e.stopPropagation();



        if ($(this).hasClass('bs-select-all')) {

          that.selectAll();

        } else {

          that.deselectAll();

        }

        that.$element.change();

      });



      this.$element.change(function() {

        that.checkDisabled();

        that.render(false);

      });

    },



    liveSearchListener: function() {

      var that = this,

          $no_results = $('<li class="no-results"></li>');



      this.$newElement.on('click.dropdown.data-api touchstart.dropdown.data-api', function() {

        that.$menu.find('.active').removeClass('active');

        if (!!that.$searchbox.val()) {

          that.$searchbox.val('');

          that.$lis.not('.is-hidden').removeClass('hidden');

          if (!!$no_results.parent().length) $no_results.remove();

        }

        if (!that.multiple) that.$menu.find('.selected').addClass('active');

        setTimeout(function() {

          that.$searchbox.focus();

        }, 10);

      });



      this.$searchbox.on('click.dropdown.data-api focus.dropdown.data-api touchend.dropdown.data-api', function(e) {

        e.stopPropagation();

      });



      this.$searchbox.on('input propertychange', function() {

        if (that.$searchbox.val()) {

          var $searchBase = that.$lis.not('.is-hidden').removeClass('hidden').children('a');

          if (that.options.liveSearchNormalize) {

            $searchBase = $searchBase.not(':a' + that._searchStyle() + '(' + normalizeToBase(that.$searchbox.val()) + ')');

          } else {

            $searchBase = $searchBase.not(':' + that._searchStyle() + '(' + that.$searchbox.val() + ')');

          }

          $searchBase.parent().addClass('hidden');



          that.$lis.filter('.dropdown-header').each(function() {

            var $this = $(this),

                optgroup = $this.data('optgroup');



            if (that.$lis.filter('[data-optgroup=' + optgroup + ']').not($this).not('.hidden').length===0) {

              $this.addClass('hidden');

              that.$lis.filter('[data-optgroup=' + optgroup + 'div]').addClass('hidden');

            }

          });



          var $lisVisible = that.$lis.not('.hidden');



          // Hide divider if first or last visible, or if followed by another divider

          $lisVisible.each(function(index) {

            var $this = $(this);



            if ($this.hasClass('divider') && (

              $this.index()===$lisVisible.eq(0).index() ||

              $this.index()===$lisVisible.last().index() ||

              $lisVisible.eq(index + 1).hasClass('divider'))) {

              $this.addClass('hidden');

            }

          });



          if (!that.$lis.not('.hidden, .no-results').length) {

            if (!!$no_results.parent().length) {

              $no_results.remove();

            }

            $no_results.html(that.options.noneResultsText.replace('{0}', '"' + htmlEscape(that.$searchbox.val()) + '"')).show();

            that.$menu.append($no_results);

          } else if (!!$no_results.parent().length) {

            $no_results.remove();

          }



        } else {

          that.$lis.not('.is-hidden').removeClass('hidden');

          if (!!$no_results.parent().length) {

            $no_results.remove();

          }

        }



        that.$lis.filter('.active').removeClass('active');

        that.$lis.not('.hidden, .divider, .dropdown-header').eq(0).addClass('active').children('a').focus();

        $(this).focus();

      });

    },



    _searchStyle: function() {

      var style = 'icontains';

      switch (this.options.liveSearchStyle) {

        case 'begins':

          break;

        case 'startsWith':

          style = 'ibegins';

          break;

        case 'contains':

          break;

        default:

          // No need to change the default

      }



      return style;

    },



    val: function(value) {

      if (value) {

        this.$element.val(value);

        this.render();



        return this.$element;

      } else {

        return this.$element.val();

      }

    },



    selectAll: function() {

      this.findLis();

      this.$element.find('option:enabled').not('[data-divider], [data-hidden]').prop('selected', true);

      this.$lis.not('.divider, .dropdown-header, .disabled, .hidden').addClass('selected');

      this.render(false);

    },



    deselectAll: function() {

      this.findLis();

      this.$element.find('option:enabled').not('[data-divider], [data-hidden]').prop('selected', false);

      this.$lis.not('.divider, .dropdown-header, .disabled, .hidden').removeClass('selected');

      this.render(false);

    },



    keydown: function(e) {

      var $this = $(this),

          $parent = $this.is('input') ? $this.parent().parent() : $this.parent(),

          $items,

          that = $parent.data('this'),

          index,

          next,

          first,

          last,

          prev,

          nextPrev,

          prevIndex,

          isActive,

          keyCodeMap = {

            32: ' ',

            48: '0',

            49: '1',

            50: '2',

            51: '3',

            52: '4',

            53: '5',

            54: '6',

            55: '7',

            56: '8',

            57: '9',

            59: ';',

            65: 'a',

            66: 'b',

            67: 'c',

            68: 'd',

            69: 'e',

            70: 'f',

            71: 'g',

            72: 'h',

            73: 'i',

            74: 'j',

            75: 'k',

            76: 'l',

            77: 'm',

            78: 'n',

            79: 'o',

            80: 'p',

            81: 'q',

            82: 'r',

            83: 's',

            84: 't',

            85: 'u',

            86: 'v',

            87: 'w',

            88: 'x',

            89: 'y',

            90: 'z',

            96: '0',

            97: '1',

            98: '2',

            99: '3',

            100: '4',

            101: '5',

            102: '6',

            103: '7',

            104: '8',

            105: '9'

          };



      if (that.options.liveSearch) $parent = $this.parent().parent();



      if (that.options.container) $parent = that.$menu;



      $items = $('[role=menu] li a', $parent);



      isActive = that.$menu.parent().hasClass('open');



      if (!isActive && /([0-9]|[A-z])/.test(String.fromCharCode(e.keyCode))) {

        if (!that.options.container) {

          that.setSize();

          that.$menu.parent().addClass('open');

          isActive = true;

        } else {

          that.$newElement.trigger('click');

        }

        that.$searchbox.focus();

      }



      if (that.options.liveSearch) {

        if (/(^9$|27)/.test(e.keyCode.toString(10)) && isActive && that.$menu.find('.active').length===0) {

          e.preventDefault();

          that.$menu.parent().removeClass('open');

          that.$button.focus();

        }

        $items = $('[role=menu] li:not(.divider):not(.dropdown-header):visible a', $parent);

        if (!$this.val() && !/(38|40)/.test(e.keyCode.toString(10))) {

          if ($items.filter('.active').length===0) {

            $items = that.$newElement.find('li a');

            if (that.options.liveSearchNormalize) {

              $items = $items.filter(':a' + that._searchStyle() + '(' + normalizeToBase(keyCodeMap[e.keyCode]) + ')');

            } else {

              $items = $items.filter(':' + that._searchStyle() + '(' + keyCodeMap[e.keyCode] + ')');

            }

          }

        }

      }



      if (!$items.length) return;



      if (/(38|40)/.test(e.keyCode.toString(10))) {

        index = $items.index($items.filter(':focus'));

        first = $items.parent(':not(.disabled):visible').first().index();

        last = $items.parent(':not(.disabled):visible').last().index();

        next = $items.eq(index).parent().nextAll(':not(.disabled):visible').eq(0).index();

        prev = $items.eq(index).parent().prevAll(':not(.disabled):visible').eq(0).index();

        nextPrev = $items.eq(next).parent().prevAll(':not(.disabled):visible').eq(0).index();



        if (that.options.liveSearch) {

          $items.each(function(i) {

            if (!$(this).hasClass('disabled')) {

              $(this).data('index', i);

            }

          });

          index = $items.index($items.filter('.active'));

          first = $items.filter(':not(.disabled):visible').first().data('index');

          last = $items.filter(':not(.disabled):visible').last().data('index');

          next = $items.eq(index).nextAll(':not(.disabled):visible').eq(0).data('index');

          prev = $items.eq(index).prevAll(':not(.disabled):visible').eq(0).data('index');

          nextPrev = $items.eq(next).prevAll(':not(.disabled):visible').eq(0).data('index');

        }



        prevIndex = $this.data('prevIndex');



        if (e.keyCode===38) {

          if (that.options.liveSearch) index -= 1;

          if (index!==nextPrev && index > prev) index = prev;

          if (index < first) index = first;

          if (index===prevIndex) index = last;

        } else if (e.keyCode===40) {

          if (that.options.liveSearch) index += 1;

          if (index===-1) index = 0;

          if (index!==nextPrev && index < next) index = next;

          if (index > last) index = last;

          if (index===prevIndex) index = first;

        }



        $this.data('prevIndex', index);



        if (!that.options.liveSearch) {

          $items.eq(index).focus();

        } else {

          e.preventDefault();

          if (!$this.hasClass('dropdown-toggle')) {

            $items.removeClass('active');

            $items.eq(index).addClass('active').children('a').focus();

            $this.focus();

          }

        }



      } else if (!$this.is('input')) {

        var keyIndex = [],

            count = $(document).data('keycount') + 1,

            prevKey;



        $items.each(function() {

          if (!$(this).parent().hasClass('disabled')) {

            if ($.trim($(this).text().toLowerCase()).substring(0, 1)===keyCodeMap[e.keyCode]) {

              keyIndex.push($(this).parent().index());

            }

          }

        });



        $(document).data('keycount', count);

        prevKey = $.trim($(':focus').text().toLowerCase()).substring(0, 1);



        if (prevKey!==keyCodeMap[e.keyCode]) {

          count = 1;

          $(document).data('keycount', count);

        } else if (count >= keyIndex.length) {

          $(document).data('keycount', 0);

          if (count > keyIndex.length) count = 1;

        }



        $items.eq(keyIndex[count - 1]).focus();

      }



      // Select focused option if "Enter", "Spacebar" or "Tab" (when selectOnTab is true) is pressed inside the menu

      if ((/(13|32)/.test(e.keyCode.toString(10)) || (/(^9$)/.test(e.keyCode.toString(10)) && that.options.selectOnTab)) && isActive) {

        if (!/(32)/.test(e.keyCode.toString(10))) e.preventDefault();

        if (!that.options.liveSearch) {

          var elem = $(':focus');

          elem.click();

          // Bring back focus for multiselects

          elem.focus();

          // Prevent screen from scrolling if the user hit the spacebar

          e.preventDefault();

        } else if (!/(32)/.test(e.keyCode.toString(10))) {

          that.$menu.find('.active a').click();

          $this.focus();

        }

        $(document).data('keycount', 0);

      }



      if ((/(^9$|27)/.test(e.keyCode.toString(10)) && isActive && (that.multiple || that.options.liveSearch)) || (/(27)/.test(e.keyCode.toString(10)) && !isActive)) {

        that.$menu.parent().removeClass('open');

        that.$button.focus();

      }

    },



    mobile: function() {

      this.$element.addClass('mobile-device').appendTo(this.$newElement);

      if (this.options.container) this.$menu.hide();

    },



    refresh: function() {

      this.$lis = null;

      this.reloadLi();

      this.render();

      this.setWidth();

      this.setStyle();

      this.checkDisabled();

      this.liHeight();

    },



    hide: function() {

      this.$newElement.hide();

    },



    show: function() {

      this.$newElement.show();

    },



    remove: function() {

      this.$newElement.remove();

      this.$element.remove();

    }

  };



  // SELECTPICKER PLUGIN DEFINITION

  // ==============================

  function Plugin(option, event) {

    // Get the args of the outer function

    var args = arguments;

    // The arguments of the function are explicitly re-defined from the argument list,

    // because the shift causes them to get lost/corrupted in android 2.3 and IE9 #715 #775

    var _option = option,

        _event = event;

    [].shift.apply(args);



    var value,

        chain = this.each(function() {

          var $this = $(this);

          if ($this.is('select')) {

            var data = $this.data('selectpicker'),

                options = typeof _option==='object' && _option;



            if (!data) {

              var config = $.extend({}, Selectpicker.DEFAULTS, $.fn.selectpicker.defaults || {}, $this.data(), options);

              $this.data('selectpicker', (data = new Selectpicker(this, config, _event)));

            } else if (options) {

              for (var i in options) {

                if (options.hasOwnProperty(i)) {

                  data.options[i] = options[i];

                }

              }

            }



            if (typeof _option==='string') {

              if (data[_option] instanceof Function) {

                value = data[_option].apply(data, args);

              } else {

                value = data.options[_option];

              }

            }

          }

        });



    if (value) {

      //noinspection JSUnusedAssignment

      return value;

    } else {

      return chain;

    }

  }



  var old = $.fn.selectpicker;

  $.fn.selectpicker = Plugin;

  $.fn.selectpicker.Constructor = Selectpicker;



  // SELECTPICKER NO CONFLICT

  // ========================

  $.fn.selectpicker.noConflict = function() {

    $.fn.selectpicker = old;

    return this;

  };



  $(document)

      .data('keycount', 0)

      .on('keydown', '.bootstrap-select [data-toggle=dropdown], .bootstrap-select [role=menu], .bs-searchbox input', Selectpicker.prototype.keydown)

      .on('focusin.modal', '.bootstrap-select [data-toggle=dropdown], .bootstrap-select [role=menu], .bs-searchbox input', function(e) {

        e.stopPropagation();

      });



  // SELECTPICKER DATA-API

  // =====================

  $(window).on('load.bs.select.data-api', function() {

    $('.selectpicker').each(function() {

      var $selectpicker = $(this);

      Plugin.call($selectpicker, $selectpicker.data());

    })

  });

})(jQuery);

  </script>

<hr />

   <h4 class="modal-title">{{__('index.Choose language')}}</h4>

 <select class="selectpicker" onchange="location = this.value;">

 @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

  <option value="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" @if($properties["native"]== 'العربية') data-thumbnail="https://cdn.countryflags.com/thumbs/saudi-arabia/flag-400.png

" 

    @else data-thumbnail="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Flag_of_the_United_Kingdom.svg/640px-Flag_of_the_United_Kingdom.svg.png" @endif >  {{ $properties['native'] }}</option>

  <!-- <option value="ar" data-thumbnail="https://cdn.countryflags.com/thumbs/saudi-arabia/flag-400.png"> عربي</option> -->

 @endforeach

</select>





<br>



<button type="submit" class="btn btn-sm" style="

    background: #46c505;

    color: #fff;

    font-size: large;

    font-weight: 600;

        margin-top: 14px;

    width: 100%;

"><i class="fa fa-floppy-o"></i> {{__('index.save')}}</button>

                                </div>

                              

                            </div>

                        

                            </div>

                        </div>

</form>     

                       

                        <!--<div>-->

                        <!--    <h4 class="text-primary dropdown-toggle"  data-toggle="dropdown" style="margin-top: 15px;cursor: pointer;font-weight: 600;"> English </h4>-->

                        <!--    <ul class="dropdown-menu dropdown-menu-right" style="z-index: 999999999;">-->

                        <!--        <li><a href="#">اللغة العربية</a></li>-->

                        <!--    </ul>-->

                        <!--</div>-->

                    </div>

                    <div class="col-lg-6 col-sm-12 head" style="

    padding: 1% 0px 0px 0px;

">           

                       

                    <div class="col-md-12" style="padding-right:0px;">

                    <form action="{{url('/Search')}}" method="get">

                    @csrf

                                             <div class="row" style="margin-top: 8px;">

                       

                             <div class="col-md-12" style="display: flex; padding: 0;

    width: 106%;

"> 

                       <!--         <select id="inputState " name="city" class="form-control"style="width: 103px;">-->

                       <!--             <option selected value="null"> All Cities</option>-->

                       <!--             -->

                       <!--         <option value="1">cairo</option>-->

                       <!--       -->

                       <!--         <option value="2">Giza</option>-->

                       <!--       -->

                       <!--         <option value="3">Mansora</option>-->

                       <!--       -->

                       <!--          </select>-->

                             

                       <!--         <select id="inputState " name="category" class="form-control" style="width: 153px;">-->

                       <!--             <option value='null' selected>All Categories</option>-->

                       <!--             -->

                       <!--         <option  value="1">Electronics</option>-->

                       <!--        -->

                       <!--         <option  value="2">Cars</option>-->

                       <!--        -->

                       <!--         <option  value="4">Mobiles</option>-->

                       <!--        -->

                       <!--         <option  value="5">Real estate</option>-->

                       <!--        -->

                       <!--         <option  value="7">Home&amp;Garden</option>-->

                       <!--        -->

                       <!--         <option  value="8">Women Fashion</option>-->

                       <!--        -->

                       <!--         <option  value="9">Men Fashion</option>-->

                       <!--        -->

                       <!--         <option  value="10">Kids &amp; Toys</option>-->

                       <!--        -->

                       <!--         <option  value="11">Food</option>-->

                       <!--        -->

                       <!--         <option  value="12">Education</option>-->

                       <!--        -->

                       <!--         <option  value="13">service cat Services</option>-->

                       <!--        -->

                       <!--         <option  value="14">Jobs</option>-->

                       <!--        -->

                       <!--         <option  value="15">Job Seekers</option>-->

                       <!--        -->

                       <!--         <option  value="16">service cat Other Services</option>-->

                       <!--        -->

                       <!--         <option  value="18">Animals</option>-->

                       <!--        -->

                       <!--         <option  value="19">Books</option>-->

                       <!--        -->

                       <!--         <option  value="20">Companies &amp; Industry</option>-->

                       <!--        -->

                       <!--         <option  value="21">test billy</option>-->

                       <!--        -->

                       <!--         <option  value="22">test billy22222</option>-->

                       <!--        -->

                       <!--         <option  value="23">asdada</option>-->

                       <!--        -->

                       <!--</select>-->

                             

                             <div class="input-group" style="

   

    padding: 1%;

    background: #2a8fbd;

    border-radius: 31px;

    position: absolute;

    z-index: 9;

">

                <div class="input-group-btn search-panel">

                   

                

                <select name="category" class="btn btn-default dropdown-toggle" style="

    background: #2a8fbd;

    border: none;

    color: white; 

    margin-right: 0px;

    width: 112px;

    font-weight: 700;">

                                  <option value='null' selected>{{__('index.all_cat')}}</option>

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

                <input type="text" class="form-control" name="name" placeholder="{{__('index.search')}}" >

                <span class="input-group-btn  d-inline-block" tabindex="0" data-toggle="tooltip" title="{{__('index.allAds')}}">

                    <button class="btn btn-default" name="submit" type="submit" style="

    background: #2a8fbd00;

    border: none;

    color: white;

    font-size: 18px;

"><span class="fa fa-search"></span></button>

                </span>
                <!-- <a href='Search?category=null&name=' class="btn btn-default">كل الاعلانات</a> -->
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



@media  screen and (max-width: 620px) {

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

  <input type="checkbox" id="female" name="type" value="free">

  <label style="font-weight: 700;" for="female">Free product  <span style="padding-left: 10px">|</span> </label><br>

  <input type="checkbox" id="other" name="type" value="sponsored">

  <label style="font-weight: 700;" for="other">sponsore product  </label>



</div></form>

                    </div>

                       

                        </div>


                    
                    <div class="hidden-xs col-lg-4 col-sm-12 text-center kos" style="    padding: 16px 4px;display: flex;justify-content: flex-end;align-items: center; position: sticky;

    top: 43px;  ">

                   

                        <div class="pull-right s">

                            <ul class="header-features">

                                      <li>

                                    <div class="header-feature-caption chande" style="

    padding-left: 1px;

"> 

   

                                        

                                    <button class="btn btn-primary secondNavButtons"><a href="{{route('free.ads')}}" style="color: white;text-decoration: none;    text-decoration: none;

    color: black;

    font-size:larger;"> <i class="fa fa-plus-circle" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;font-size: large; "></i> {{__('index.free_ad')}}</a> </button>

                      

                        

                        <!-- <button class="btn btn-primary secondNavButtons"><a href="{{url('login')}}" style="color: white;text-decoration: none;    text-decoration: none;

    color: black;

    font-size:larger;"> <i class="fa fa-plus-circle" aria-hidden="true" style="background-color: transparent;height: 0;line-height: 0;padding-top: 10px;color:black;font-size: large; "></i> {{__('index.free_ad')}}</a> </button>    -->



                                </div>

                                </li>

                        <ul class="login-register">

                            <li class="shopping-cart"><a class="soo" href="{{route('cart.show')}}" style="color:black !important"><img src="{{asset('img/logos/Shopping Cart .png')}}" style="width:40px;"> </a>

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

                                        <li><a href="http://royalsooq.com/cart"><i class="fa fa-shopping-cart"></i> View Cart</a>

                                        </li>

                                        <li><a href="page-checkout.html"><i class="fa fa-check-square"></i> Checkout</a>

                                        </li>

                                    </ul>

                                </div> -->

                            </li>



                            @guest

                            <li class="log" style="

    display: inline-flex;

"><a href="{{url('login')}}" data-effect="mfp-move-from-top">{{__('index.log_in')}}</a>

                            <a class="rig" href="{{url('register')}}" data-effect="mfp-move-from-top">{{__('index.sign_up')}}</a>

                            </li>





                         

                            

                            @endguest

                           

                            @auth    

                            @if((Auth::user()->seller)=='1')

                            <li class="shopping-cart"><a href="{{route('charts')}}" style="color:black !important ; text-transform: capitalize;  "><i class="fa fa-shopping-user color-fa"></i><span style="font-size:15px;">{{__('index.welcome')}} {{Auth::user()->name}}</span> </a>

                            @else

                            <li class="shopping-cart"><a href="{{url('/account')}}" style="color:black !important ; text-transform: capitalize;  "><i class="fa fa-shopping-user color-fa"></i><span style="font-size:15px;">{{__('index.welcome')}} {{Auth::user()->name}} </span></a>

                            @endif
                           
                      

                           

                        <div class="shopping-cart-box" style="z-index:2000 !important;">

                            

                        <div class="shopping-cart-box" style="z-index:2000 !important;">

                            

                            <ul role="menu" class="ant-menu ant-menu-inline ant-menu-root ant-menu-light">

                                <li role="menuitem" class="ant-menu-item ant-menu-item-selected" style="padding-left: 24px;"><a href="{{ route('account.dashboard') }}"><span class="fa fa-home"></span>   {{__("index.personal")}}

           </a></li>

                                <li role="menuitem" class="ant-menu-item" style="padding-left: 24px;"><a href="{{ route('user.freeAds') }}"><span class="fa fa-star"></span>  {{__("index.my_ads")}}&nbsp;<span class="badge badge-pill">{{count(Auth::user()->products)}}</span></a></li>

                                <li role="menuitem" class="my ant-menu-item" style="padding-left: 24px;"><a href="{{ route('favorites') }}"><span class="fa fa-heart"></span>   {{__("index.favorite_ads")}}&nbsp; <span class="badge badge-pill">{{count(Auth::user()->wish)}}</span></a></li><li role="menuitem" class="ant-menu-item" style="padding-left: 24px;"><a href="{{ route('search.saved') }}"><span class="fa fa-floppy-o"></span>   {{__("index.saved_search")}} </a></li>
          
                                <li role="menuitem" class="ant-menu-item" style="padding-left: 24px;"><a href="{{route('shops.data')}}"><span class="fa fa-shopping-bag"></span>   {{__('index.shop_info')}}&nbsp;</a></li>

                                <li role="menuitem" class="ant-menu-item" style="padding-left: 24px;"><a href="{{route('shops2', auth()->user()->id)}}"><span class="fa fa-shopping-bag"></span>   {{__('index.your_shops')}}&nbsp;</a></li>
                               
                                
           
                                <!-- <li role="menuitem" class="ant-menu-item" style="padding-left: 24px;"><a href="#">

           {{__("index.pending")}} ({{__("index.soon")}})

           </a></li><li role="menuitem" class="ant-menu-item" style="padding-left: 24px;"><a href="{{ route('account.address.index') }}"><span class="fa fa-map-marker"></span>  {{__("index.addresses")}}

           </a></li> -->

<!-- orders -->
           <!-- <li role="menuitem" class="ant-menu-item" style="padding-left: 24px;"><a href="{{ route('account.order.index') }}"><span class="fa fa-gift"></span> {{__("index.orders")}} &nbsp; <span class="badge badge-pill">20</span></a></li> -->

           <li role="menuitem" class="ant-menu-item" style="padding-left: 24px;"><a href="{{ route('complaint') }}"><span class="fa fa-envelope-o"></span>       {{__("index.complaint")}}

           </a></li>

           

           <li role="menuitem" class="ant-menu-item" style="padding-left: 24px;"><a href="{{route('logout')}}"><span class="fa fa-user"></span>  {{__("index.logout")}} &nbsp; </a></li>

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

    <div style="background-color: #fff; border-bottom: 3px solid #0d4f6d; margin-top: 5px;">

        <!-- Search Bar -->

     





        

        <!-- Category navbar -->



        <header class="main categoryBar" style="background-color: #2a8fbd;position: relative;border:2px solid #2a8fbd;">

                            <div class="container-fluid">

                                <div class="row beda">

                                <div class="col-md-2 all-cats" style="font-weight: 600;color:white;font-size: 13px;padding-top: 11px;background: #efc718;">

                                        <h6 style="font-weight: 600;color:white"  ><a href="{{route('allCategories')}}"> {{__('index.all_cat')}} <i class="fa fa-bars" aria-hidden="true"></i></a> </h6>

                                    </div>

                                    <div class="col-md-10 cat2">

                                        <div class="owl-carousel" style="cursor: pointer;">

                                        <?php 

                                        $count=0;

                                        ?>

                                        @foreach($allcat as $c)

                                        

                                            <div class="category" id='{{$c->id}}'>

                                                <h6 style="font-weight: 500; text-align: center;"> <a href="{{route('cat.products', $c->slug)}}"> {{$c->name}} </a>  </h6>

                                            </div>

                                    

                                        @endforeach

                                        <!-- <div class="category" id='8'>

                                            <h6 style="font-weight: 500;"> <a href="{{route('allCategories')}}"> >> </a> </h6>

                                        </div> -->

                                        

                                    </div>

                                    

                                    </div>

                                </div>



                            <!-- one Row For Every Category -->

                            @foreach($allcat as $c)

                                <div class="row category-dropMenu" id='m{{$c->id}}' style="border-top: 2px solid rgb(75, 81, 84) !important;">

                                @foreach($c->subcategory as $sub)

                                    <div class="col-md-3">

                                        <h4 style="color: white;"><a href="{{route('sub.products',$sub->slug)}}"> {{$sub->name}}<a></h4>

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