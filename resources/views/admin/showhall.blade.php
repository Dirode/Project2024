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

        <div align="center" style="padding-top:100px;">

        <table>
         <tr style="background-color:black; ">

         <th style="padding:10px">Name</th>
         <th style="padding:10px">Image</th>
         <th style="padding:10px">Delete</th>
         <th style="padding:10px">Update</th>
     
         </tr>

        @foreach($data as $hall)

         <tr align="center" style="background-color: lightblue;">

            <td>{{$hall->name}}</td>
            
            <td><img height="200" width="200" src="hallimage/{{$hall->image}}"></td>

            <td><a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{url('deletehall',$hall->id)}}" >Delete</a></td>

            <td><a class="btn btn-primary" href="{{url('updatehall', $hall->id)}}" >Update</a></td>

         </tr>

        @endforeach

       
        </div>
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>