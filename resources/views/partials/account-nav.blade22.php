
<!-- <style>
    .ant-menu-item :active {
        background: cadetblue;
    }
</style> -->

<a-menu
    mode="inline"
    theme="light"
    :default-selected-keys="['{{  Route::currentRouteName() }}']"
    style="height: 100%"
>

    <!-- <a-menu-item style="min-height:120px;text-align:center"> -->
        <!-- @if(empty(Auth::user()->image))
            <a-avatar 
                shape="square"
                style="background-color:#2A8FBD;width:100%;height:100px">
                {{ Auth::user()->name }}</a-avatar>
        @else
            
        <img src="{{asset('/storage/' . Auth::user()->image) }}"> -->
        <!-- <a-avatar 
                shape="square"
                style="width:100%; height: auto"
                src="{{asset('/storage/' . Auth::user()->image) }}">
            </a-avatar> -->
        <!-- @endif
    </a-menu-item>
  -->
    <a-menu-item  data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><h3 style="color:rgb(42, 143, 189);"> {{__('index.my_acc')}}  <i class="fa fa-angle-down" aria-hidden="true" ></i></h3>
  </a>
    
        </a-menu-item>
<a-menu style="padding-left: 24px;background-color: white;"  >
    <a-menu-item key="account.dashboard" @if(Route::currentRouteName() == 'aaccount.dashboard') class="activeb" @endif>
        <a  href="{{ route('account.dashboard') }}" >
 {{__('index.personal')}}       <i class="fa fa-home" aria-hidden="true"></i>
        </a>
        
    </a-menu-item>
    </a-menu>
  
    <!-- <a-menu-item key="account.upload">
        <a href="{{ route('account.upload') }}">
            {{ __('Upload Photo') }}
        </a>
    </a-menu-item> -->
   
    <a-menu-item ><hr></a-menu-item>
    <a-menu-item  data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2" ><h3 style="color:rgb(42, 143, 189);">{{__('index.my_ads')}} <i class="fa fa-angle-down" aria-hidden="true"></i></h3> </a-menu-item>

<a-menu  id="multiCollapseExample2"> 
    <a-menu-item key="account.user.freeAds" @if(Route::currentRouteName() == 'user.freeAds') class="activeb" @endif>
        <a href="{{ route('user.freeAds') }}">
        <span class="fa fa-star"></span>  {{__('index.my_ads')}}&nbsp;<span class="badge badge-pill">{{count(Auth::user()->products)}}</span>
        </a>
    </a-menu-item>
   
    @if(((Auth::user()->seller)=='0'))
    <a-menu-item key="account.Favorite.index" @if(Route::currentRouteName() == 'favorites') class="activeb" @endif>
        <a href="{{ route('favorites') }}">
        <span class="fa fa-heart"></span>    {{__('index.favorite_ads')}}&nbsp;<span class="badge badge-pill">{{count(Auth::user()->wish)}}</span>
        </a>
    </a-menu-item>

    <a-menu-item key="account.shopdetails.index">
        <a href="{{route('shops.data')}}" >
        <span class="fa fa-shopping-bag"></span>  {{__('index.shops')}}
        </a>
    </a-menu-item>

<a-menu-item key="account.searches.index">
        <a href="#">
        <span class="fa fa-floppy-o"></span>    {{__('index.saved_search')}} ( {{__('index.soon')}})
        </a>
    </a-menu-item>
    <a-menu-item key="account.pending.index">
        <a href="#">
        {{__('index.pending')}} {{__('index.soon')}}
        </a>
    </a-menu-item>
    @endif
    <a-menu-item key="account.address.index" @if(Route::currentRouteName() == 'account.address.index') class="activeb" @endif>
        <a href="{{ route('account.address.index') }}">
        <span class="fa fa-map-marker"></span>  {{__('index.addresses')}}
        </a>
    </a-menu-item>
   
    
   
    @if(((Auth::user()->seller)=='0'))
   
   
    <a-menu-item key="account.order.index"   @if(Route::currentRouteName() == 'account.order.index') class="activeb" @endif>
        <a href="{{ route('account.order.index') }}">
        <span class="fa fa-gift"></span>  {{__('index.orders')}} &nbsp; <span class="badge badge-pill">{{count(Auth::user()->order)}}</span>
        
        </a>
    </a-menu-item>


      <a-menu-item key="account.Complaint.index"  @if(Route::currentRouteName() == 'complaint') class="activeb" @endif>
       <a href="{{ route('complaint') }}">
       <span class="fa fa-envelope-o"></span>       {{__('index.complaint')}}
        </a>
    </a-menu-item>

    <a-menu-item key="account.Complaint.index"  @if(Route::currentRouteName() == 'chat.inbox') class="activeb" @endif>
       <a href="{{ route('chat.inbox') }}">
       <span class="fa fa-envelope-o"></span>       {{__('index.inbox')}}
        </a>
    </a-menu-item>

    <a-menu-item key="account.Logout.index">
       <a href="{{ route('logout') }}">
       <span class="fa fa-user"></span>       {{__('index.logout')}}
        </a>
    </a-menu-item>
    @else
       
    <a-menu-item key="account.charts.index">
        <a href="{{ route('charts') }}">
            {{ __('Charts') }}
        </a>
    </a-menu-item>
       
        <a-menu-item key="account.addservice.index">
        <a href="{{ route('service.page') }}">
            {{ __('Add New Service') }}
        </a>
    </a-menu-item>

    <a-menu-item key="account.addsponsered.index">
        <a href="{{ route('sponsored.page') }}">
            {{ __('Add New Sponsored Ads') }}
        </a>
    </a-menu-item>

    <a-menu-item key="account.bank.index">
        <a href="{{ route('bank') }}">
            {{ __('Bank Informations') }}
        </a>
    </a-menu-item>


    <a-menu-item key="account.copons.index">
        <a href="{{ route('copons.page') }}">
            {{ __('Create Copons') }}
        </a>
    </a-menu-item>


    <a-menu-item key="account.adsposition.index">
        <a href="{{ route('ads.position.page') }}">
            {{ __('Ads') }}
        </a>
    </a-menu-item>


    @endif
</a-menu>
    
</a-menu>

<!-- Modal -->
<div class="modal fade" id="modalContactForm"  
  aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Your Shop Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      

    <form action="{{route('shops.data.add')}}" method="post"> 
       @csrf

        <div class="md-form">
          <i class="fas fa-pencil prefix grey-text"></i>
          <textarea type="text" name="about" class="md-textarea form-control" rows="4"></textarea>
          <!-- <label data-error="wrong" data-success="right" for="form8">About Your Shop</label> -->
        </div>

      </div>
      <!-- <div class="modal-footer d-flex justify-content-center"> -->
      <input type="submit" name="submit" value="Send">
        <!-- <button class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button> -->
      <!-- </div> -->
      </form>
    </div>
  </div>
</div>

