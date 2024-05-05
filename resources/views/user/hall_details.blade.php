<!DOCTYPE html>
<html lang="en">
<head>

<base href="/public">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Hall Booking - hall booking HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

</head>
<body>

  <!-- Back to top button -->
  <header>
   
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Hall</span>-Booking</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" " id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" style="background-color: greenyellow; color: black; "href="{{url('mybooking')}}">My Booking</a>
            </li>
            <x-app-layout>
    
            </x-app-layout>
            </li>


           

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div align="center" class="owl-carousel wow fadeInUp" id="doctorSlideshow">

    <div class="hall-slides">
      <div>  
        <img style="height:250px  !important" src="hallimage/{{$hall->image}}" alt="">
      </div>
      <div class="body">
        <p class="text-xl mb-0">{{$hall->name}}</p>

      </div>
    </div>
</div>
<div align="center ">
<h1 class="text-xl mb-0" style="font-weight: bold; color: blue;">Hall Details:</h1> <br>

<p class="text-xl mb-0">Capacity: {{$hall->capacity}}</p> <br>

<p class="text-xl mb-0">Location: {{$hall->location}}</p> <br>
  
<p class="text-xl mb-0">Description: {{$hall->description}}</p> <br>

</div>

<div align="center">
  
    
        <p class="text-xl mb-0">Status: {{$bookings->status}} on {{$bookings->date}} from {{$bookings->start_time}} 
          to {{$bookings->end_time}} for {{$bookings->reason}}</p><br>
    
</div>
   <!-- .banner-home -->   

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>