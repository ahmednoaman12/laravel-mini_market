@extends('layout.layout')
@section('content')
 <!-- Menu Section -->
 <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Our Menu</h1><br>

      
       
          <h4>
              {{$posts["title"]}}
          </h4> 
          <p class="w3-text-grey mb-5">
              {{$posts["body"]}}
          </p> 

       
 
     
    </div>

    
    <div class="w3-col l6 w3-padding-large">
      <img src="/w3images/tablesetting.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>
  @endsection