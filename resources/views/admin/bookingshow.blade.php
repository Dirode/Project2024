<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
@include('admin.css')

  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
        <!-- partial -->
@include('admin.navbar')
        <!-- partial -->
    <div class="container-fluid page-body-wrapper">

    <div align="center" style="padding:100px;">
    <table>

    <tr style="background-color:black;">
        <th style="padding:10px">Hall Booker Name</th>
        <th style="padding:10px">Email</th>
        <th style="padding:10px">Hall Name</th>
        <th style="padding:10px">Date</th>
        <th style="padding:10px">Start_Time</th>
        <th style="padding:10px">End_Time</th>
        <th style="padding:10px">Reason</th>
        <th style="padding:10px">Status</th>
<<<<<<< HEAD
=======
        <th style="padding:10px">Send Mail</th>
>>>>>>> bbcafb2d0b96512e7f096eb72ccd2579f5c4cf1e
    </tr>

   
    @foreach($data as $book)

<<<<<<< HEAD
    <tr align="center" style="background-color: grey;  border: 1px solid black;">

        <td style="padding:10px;  color:white;">{{$book->name}}</td>
        <td style="padding:10px;  color:white;">{{$book->email}}</td>
        <td style="padding:10px;  color:white;">{{$book->hall->name}}</td>
=======
    <tr align="center" style="background-color:grey;  border:1px solid black;">

        <td style="padding:10px;  color:white;">{{$book->name}}</td>
        <td style="padding:10px;  color:white;">{{$book->email}}</td>
        <td style="padding:10px;  color:white;">{{$book->hall}}</td>
>>>>>>> bbcafb2d0b96512e7f096eb72ccd2579f5c4cf1e
        <td style="padding:10px;  color:white;">{{$book->date}}</td>
        <td style="padding:10px;  color:white;">{{$book->start_time}}</td>
        <td style="padding:10px;  color:white;">{{$book->end_time}}</td>
        <td style="padding:10px;  color:white;">{{$book->reason}}</td>
        <td style="padding:10px;  color:white;">{{$book->status}}</td>
<<<<<<< HEAD

       
=======
        
>>>>>>> bbcafb2d0b96512e7f096eb72ccd2579f5c4cf1e
    </tr>

    @endforeach

    </table>
    </div>

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>