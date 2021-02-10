@extends('layouts.app')
@section('content')

<style>
  .center {text-align: center; margin-left: auto; margin-right: auto; margin-bottom: auto; margin-top: auto;}
 
</style>



<div class="container">
  <div class="row">
    <div class="span12">
   
        <!-- <center><h2>Recent Content :</h2></center> -->
      </div>
        <br />
        <div class="thumbnail span3 center">
          <h3>{{$details[0]->name}}</h3>
          <br>
          
          <div class="hero-unit">
            <img src='{{asset("img/pngs/service.jpg")}}'>
          </div>
<br>
          <p>{{$details[0]->des}}</p>

          
        </div><!-- end sec 1-->
        <br><br>      


        <div class="thumbnail span3 center">
        <h5>Addetional properties for this Service</h5>
          <br>

          <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Property</th>
      <th scope="col">Days No. +</th>
      <th scope="col">Price + </th>
    </tr>
  </thead>
  <tbody>
  <form name="listForm">
  @foreach($details[0]->serviceproperty as $p)
  
    <tr>
      <th scope="row"><div class="form-check">
  <input class="form-check-input position-static" type="checkbox" name="choice" onchange="checkTotal()"  value="{{$p->price}}" >
</div></th>
      <td>{{$p->description}}</td>
      <td>{{$p->days}}</td>
      <td>{{$p->price}}</td>
    </tr>
    @endforeach

    </tbody>
    </table>
        
        </div><!-- end sec 2-->
<br>

<div class="thumbnail span3 center">
<?php  
    $price = $details[0]->price;
 ?>
<h2 id="total">   PRICE:  {{$price}} $</h2>
</div>
</form>          
        <br />
        <p></p>
        <!-- By ConnerT HTML & CSS Enthusiast -->  
    </div>
  </div>
</div>






<!-- <div class="container">
    <div class="row">
        <img src='{{asset("img/pngs/service.jpg")}}' style="width:50%">
    </div>

    <div class="col-md-6">

        <p>{{$details[0]->des}}</p>
    </div>

    <div class="col-md-6">
@foreach($details[0]->serviceproperty as $p)
<p>{{$p->description}}</p><br>
<p>{{$p->price}}</p>
<p>{{$p->days}}</p>
@endforeach
</div>
</div> -->


@endsection

<script type="text/javascript">
	function checkTotal() {
		document.getElementById('total').innerHTML = '';
		var sum = {{$price}};
		for (i=0;i<document.listForm.choice.length;i++) {
		  if (document.listForm.choice[i].checked) {
		  	sum = sum + parseInt(document.listForm.choice[i].value);
		  }
		}
        document.getElementById('total').innerHTML='PRICE : '+ sum + ' $';
    	document.listForm.total.value = sum;
		
	}
</script>