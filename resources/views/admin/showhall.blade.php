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

      <div align="center">

        <table>
         <tr style="color:black; background-color:aquamarine;" align="center">

         <th style="padding:10px">Name</th>
         <th style="padding:10px">Image</th>
         <th style="padding:10px">Delete</th>
         <th style="padding:10px">Update</th> <br>
     
         </tr>

          @foreach($data as $hall)

         <tr align="center">

            <td style="padding:10px">{{$hall->name}}</td>
            
            <td style="padding:10px"><img height="200" width="200" src="hallimage/{{$hall->image}}"></td>

            <td style="padding:10px"><a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{url('deletehall',$hall->id)}}" >Delete</a></td>

            <td style="padding:10px"><a class="btn btn-primary" href="{{url('updatehall', $hall->id)}}" >Update</a></td>

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