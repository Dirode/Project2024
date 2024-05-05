<!DOCTYPE html>
<html lang="en">
<head>
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
  <div class="back-to-top"></div>

  <header>
   
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Hall</span>-Booking</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="head" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
           

            <li class="nav-item">
              <a class="nav-link" href="{{url('mybooking')}}">My Booking</a>
            </li>
            <x-app-layout>
    
            </x-app-layout>
            </li>


           

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  @if(session()->has('message'))

  <div class="alert alert-success">

  <button type="button" class="close" data-dismiss="alert">
    x
  </button>

    {{session()->get('message')}}

  </div>

    @endif


  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/college.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make booking easier</span>
        <h1 class="display-4">Hall Booking</h1>
        
      </div>
    </div>
  </div>

  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
            <div class="circle-shape bg-accent text-white">
              <span>J</span>
            </div>
            <div class="circle-shape bg-primary text-white">
              <span>N</span>
          </div>
            <div class="circle-shape bg-secondary text-white">
              <span>E</span>
            </div>
            <div class="circle-shape bg-accent text-white">
              <span>C</span>
            </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to Hall Booking</h1>
            <p class="text-grey mb-4"> Implementing an online booking platform allows us to check hall availability, select their desired date and time, and make reservations conveniently from anywhere. </p>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/JNEC_1.jpeg" alt="jnec">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->
@include('user.hall')
 <!-- .page-section -->

@include('user.booking')

   <!-- .banner-home -->   

   <footer class="page-footer">
  <div class="container">
    <div class="row px-md-3">
      <div class="col-sm-6 col-lg-3 py-3">
        <a class="nav-link" href="{{url('aboutus')}}">About Us</a>
      </div>
      
      <div class="col-sm-6 col-lg-3 py-3">
        <h5>Jigme Namgyel Engineering College, Dewathang</h5>
        <h5>IT Building</h5>
      </div>

      <div class="col-sm-6 col-lg-3 py-3">
        <h5>+975-17753587</h5>
        <h5>+975-17309535</h5>
      </div>
    </div>
  </div>
</footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>