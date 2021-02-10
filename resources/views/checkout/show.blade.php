@extends('layouts.user')

@section('breadcrumb')




<a-breadcrumb style="margin: 16px 0">
    <a-breadcrumb-item>
      <a href="{{ route('home') }}" title="home">
        {{ __('Home') }}
      </a>
    </a-breadcrumb-item>
    <a-breadcrumb-item>
        {{ __('Checkout') }}
    </a-breadcrumb-item>
</a-breadcrumb>
@endsection


@section('content')


<?php   
if (empty('item')){
  echo 'No items';
}else{
?>
  <checkout-page 
    :items="{{ Cart::toArray() }}"
    :addresses="{{ $addresses }}"
    inline-template>
    <div>
    <h1>{{ __('Checkout Page') }}</h1>
    <!-- <a-form :form="form" @submit.prevent="handleSubmit" id="checkout-form"  method="post" action="{{ route('order.place') }}"> -->
    <form action="{{ route('order.place') }}" method='post'>
      @csrf          
      <a-row :gutter="15">
        <a-col :span="12">
         
              @include('checkout.cards.personal')   
          
              @include('checkout.cards.shipping-address')
              @include('checkout.cards.billing-address')
        
        </a-col>
        <a-col :span="12">
              @include('checkout.cards.shipping-option')   
              @include('checkout.cards.payment-option')   
              @include('checkout.cards.cart-items')   
              <a-form-item class="mt-1">
              <input type='hidden' value='{{Cart::total() - Cart::discount()}}' name="total_price">
                <a-button
                    type="primary"
                    :loading="submitStatus"
                    html-type="submit">
                    PlaceOrder
                </a-button>
            </a-form-item>
           
        </a-col>
      </a-row>
</form>
      
    <!-- </a-form> -->
    </div>
  </checkout-page>
<?php } ?>
@endsection
