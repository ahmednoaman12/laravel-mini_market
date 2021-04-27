@extends('layout.layout')
@section('content')
  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Contact</h1><br>
    <p> We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact us.</p>
    <p class="w3-text-blue-grey w3-large"><b>Delivery, Alexandria , Gleem</b></p>
    <p>You can also contact us by phone 01111566827 or email Noaman@Noaman.com, or you can send us a message here:</p>
    <form action="/" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Please Enter Full Name" required name="Name"></p>
      {{-- <p><input class="w3-input w3-padding-16" type="number" placeholder="How many people" required name="People"></p> --}}
      {{-- <p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Date and time" required name="date" value="2020-11-16T20:00"></p> --}}
      <p><input class="w3-input w3-padding-16" type="email" placeholder="Please Enter Email" required name="Email" value=""></p>

      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
  @endsection