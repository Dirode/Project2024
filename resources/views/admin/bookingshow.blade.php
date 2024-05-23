<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  
@include('admin.css')
    <style>
      table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
          color: black;
          width: 1%;
      }
    </style>

  </head>
  <body>
    <div class="container-scroller" style="background-color:white">

      <!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
        <!-- partial -->
@include('admin.navbar')
        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
    <div align="center" text-align="center"> <br>
    <table>

    <tr style="color:black;  border:1px solid black; background-color:aquamarine;" align="center">
        <th style="padding:10px ">User Name</th>
        <th style="padding:10px">Email</th>
        <th style="padding:10px">Hall Name</th>
        <th style="padding:10px">Date</th>
        <th style="padding:10px">Start_Time</th>
        <th style="padding:10px">End_Time</th>
        <th style="padding:10px">Reason</th>

    </tr>

    @foreach($data as $book)

    <tr align="center" style="border:1px solid black;">

        <td style="padding:10px;">{{$book->name}}</td>
        <td style="padding:10px;">{{$book->email}}</td>
        <td style="padding:10px;">{{$book->hall->name}}</td>
        <td style="padding:10px;">{{$book->date}}</td>
        <td style="padding:10px;">{{$book->start_time}}</td>
        <td style="padding:10px;">{{$book->end_time}}</td>
        <td style="padding:10px;">{{$book->reason}}</td>

    </tr>

    @endforeach

    </table> <br>
    </div>

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>