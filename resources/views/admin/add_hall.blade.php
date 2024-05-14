<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <style type="text/css">

        label
        {
            display: inline-block;

            width: 200px;
        }

    </style>
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

    
    <div class="container" align="center" style="padding-top:40px">

        @if(session()->has('message'))

    <div class="alert alert-success">

        {{session()->get('message')}}

    </div>

        @endif

    <form action="{{url('upload_hall')}}" method="POST" enctype="multipart/form-data">
                
        @csrf

        <div style="padding:15px;">
            <label>Hall Name</label>
            <input type="text" style="color:black;" name="name" placeholder="Write hall name" required="">
        </div>

        <div style="padding:15px;">
            <label>Capacity</label>
            <input type="text" style="color:black;" name="capacity" placeholder="Write hall name" required="">
        </div>

        <div style="padding:15px;">
            <label>Location</label>
            <input type="text" style="color:black;" name="location" placeholder="Write hall name" required="">
        </div>

        <div style="padding:15px;">
            <label>Description</label>
            <input type="text" style="color:black;" name="description" placeholder="Write hall name" required="">
        </div>

        <div style="padding:15px;">

            <label>Hall Image </label>
            <input type="file" name="file" multiple required="">
        </div>
                
        <div style="padding:15px;">

            <input type="submit" class="btn btn-success">
        </div>


        </form>

        </div>
    
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>