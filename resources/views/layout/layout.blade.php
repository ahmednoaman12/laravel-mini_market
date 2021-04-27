
<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
 
}
</style>
<body>

<!-- Navbar (sit on top) -->
<nav class="bg-info" style="z-index: 1; width: 100%; background-color:red !important">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="/" class="w3-bar-item w3-button">Mini Restaurant</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="/" class="w3-bar-item w3-button">Home</a>

      <a href="{{route('menus.index')}}" class="w3-bar-item w3-button">Menu</a>
      {{-- <a href="/menu" class="w3-bar-item w3-button dropdown-toggle">Menu</a> --}}
        {{-- <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Link 1</a>
          <a class="dropdown-item" href="#">Link 2</a>
          <a class="dropdown-item" href="#">Link 3</a>
        </div> --}}
      <a href="/about-us" class="w3-bar-item w3-button">About</a>
      <a href="/contact-us" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</nav>


{{-- page content --}}
<div class="w3-content" style="min-height:80vh">

    @yield('content')

<!-- End page content -->
</div>
<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
    <p>Powered by Ahmed Noaman</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  
  </body>
  </html>