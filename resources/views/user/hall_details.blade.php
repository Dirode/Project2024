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
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <x-app-layout>
    
            </x-app-layout>
            </li>


           

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>

    <style>
      table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
          color: black;
      }
    </style>
    
  </header>
  
  <div class="hall-container" style="height: 100vh; background-image: url('hallimage/{{$hall->image}}'); background-size: cover; background-position: center; display: flex; justify-content: center; align-items: center;">
    <div class="content" style="color: white; text-align: left; font-size: 2rem; display: flex; flex-direction: column; gap: 1rem;">
        <p class="text-xl">{{$hall->name}}</p>
        <p class="text-xl">Capacity: {{$hall->capacity}}</p> 
        <p class="text-xl">Location: {{$hall->location}}</p>
        <p class="text-xl">Description: {{$hall->description}}</p> 
    </div>
</div>
<br><br>


<table align="center" >
<h1 class="text-xl mb-0" style="font-weight: bold; color: darkblack;" align="center">Booking Schedules</h1> <br>
  <tr align="center" style="background-color:aquamarine;">
      <th style="padding:10px; font-size: 20px;">Name</th>
      <th style="padding:10px; font-size: 20px;">Date</th>
      <th style="padding:10px; font-size: 20px;">Start Time</th>
      <th style="padding:10px; font-size: 20px;">End Time</th>
      <th style="padding:10px; font-size: 20px;">Reason</th>
     
  </tr>

  @if(count($bookings) > 0)
    @foreach($bookings as $booking)

      <tr style="border: 1px solid black;">
      <td style="padding:10px; font-size: 20px;">{{$booking->name}}</td>
        <td style="padding:10px; font-size: 20px;">{{$booking->date}}</td>
        <td style="padding:10px; font-size: 20px;">{{$booking->start_time}}</td>
        <td style="padding:10px; font-size: 20px;">{{$booking->end_time}}</td>
        <td style="padding:10px; font-size: 20px;">{{$booking->reason}}</td>
        
      </tr>
    @endforeach

    @else

    <tr>
      <td colspan="5" style="text-align: center;">Available for booking </td>
    </tr>
     @endif
</table> <br> <br> <br>
@if (session('message'))
    <div class="alert {{ session('alert-class', 'alert-info') }}" style="text-align: center;">
      <button type="button" class="close" data-dismiss="alert">
        x
      </button>
        {{ session('message') }}
    </div>
@endif

 

@include('user.booking')

   <!-- .banner-home -->   

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>