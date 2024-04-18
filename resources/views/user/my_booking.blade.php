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

        <div class=" " id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Halls</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">

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

  <div align="center" style="padding:70px;">

  <table>

    <tr style="background-color:black;" align="center">
        <th style="padding:10px; font-size: 20px; color:white;">Hall Name</th>
        <th style="padding:10px; font-size: 20px; color:white;">Date</th>
        <th style="padding:10px; font-size: 20px; color:white;">Start_Time</th>
        <th style="padding:10px; font-size: 20px; color:white;">End_Time</th>
        <th style="padding:10px; font-size: 20px; color:white;">Reason</th>
        <th style="padding:10px; font-size: 20px; color:white;">Status</th>
        <th style="padding:10px; font-size: 20px; color:white;">Cancel Booking</th>
    </tr>

    @foreach($book as $books)

    <tr style="background-color: grey;  border: 1px solid black;">

        <td style="padding:10px;  color:white;">{{$books->hall}}</td>
        <td style="padding:10px;  color:white;">{{$books->date}}</td>
        <td style="padding:10px;  color:white;">{{$books->start_time}}</td>
        <td style="padding:10px;  color:white;">{{$books->end_time}}</td>
        <td style="padding:10px;  color:white;">{{$books->reason}}</td>
        <td style="padding:10px;  color:white;">{{$books->status}}</td>

      @if($books->status == 'Booked')
        <td><a class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')"
        href="{{url('cancel_book', $books->id)}}">Cancel</a></td>
    </tr>

    @endif

    @endforeach

  </table>
  </div>



<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>