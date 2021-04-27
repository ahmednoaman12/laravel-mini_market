@extends('layout.layout')
@section('content')
  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Add New Product</h1><br>
    <p>Welcome to Zodiac </p>
    <p class="w3-text-blue-grey w3-large"><b>Delivery, Alexandria , Gleem</b></p>
    <form action="{{route('menus.store')}}" method="POST"  >
      @csrf
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Please Enter Full Name" required name="name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Please Enter component" name="component" value=""></p>
      <p><input class="w3-input w3-padding-16" type="number" min="20"  placeholder="price $  " required name="price"></p>
        <label for="form-check" class="h3">Type of Product</label>   
       <div class="form-check">
        <input class="form-check-input" type="radio" name="type" value="food" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
         food
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="type" value="drink" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          Drink
        </label>
      </div>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">Add Producr</button></p>
    </form>
  </div>
  @endsection