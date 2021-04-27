@extends('layout.layout')
@section('content')

<div class="w3-container w3-padding-64" id="contact">
    <h1>Edit Product</h1><br>
    
    <form method="POST" action="{{ route('menus.update', $data->id) }}">
      @csrf
      @method('PUT')
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Please Enter Full Name" value="{{$data->name}}" required name="name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Please Enter component" value="{{$data->component}}" name="component"></p>
      <p><input class="w3-input w3-padding-16" type="number" min="20"  placeholder="price $  " required value="{{$data->price}}" name="price"></p>
        <label for="form-check" class="h3">Type of Product</label>   
    
        <div class="form-check">

        <input class="form-check-input" type="radio" name="type"  value="food" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
         food
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="type"  value="Drink" id="flexRadioDefault2"  >
        <label class="form-check-label" for="flexRadioDefault2">
          Drink
        </label>
      </div>
    
      <p><button class="w3-button w3-light-grey w3-section" type="submit">Update Product</button></p>
    </form>
  </div>

@endsection