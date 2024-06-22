<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  <meta charset="UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

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
    <div class="container-scroller" style="background-color:white">

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
        <h1 style="padding:15px; color:black; font-size: 25px;"> Add Hall </h1>
        <div style="padding:15px; color:black">
            <label>Hall Name</label>
            <input type="text" style="color:black;" name="name" placeholder="Hall name" required="">
        </div>

        <div style="padding:15px; color:black">
            <label>Capacity</label>
            <input type="text" style="color:black;" name="capacity" placeholder="Capacity of hall" required="">
        </div>

        <div style="padding:15px; color:black">
            <label>Location</label>
            <input type="text" style="color:black;" name="location" placeholder="Location of hall" required="">
        </div>

        <div style="padding:15px; color:black">
            <label>Description</label>
            <input type="text" style="color:black;" name="description" placeholder="Hall description" required="">
        </div>

        <div style="padding:15px; color:black">

            <label>Hall Image </label>
            <input type="file" name="file" multiple required="">
        </div>

        <button type="submit" style="background-color:#00D9A5; border-color:#00D9A5;"
            class="btn btn-primary mt-3 wow zoomIn" onmouseover="this.style.backgroundColor='grey'; this.style.borderColor='grey'"
            onmouseout="this.style.backgroundColor='#00D9A5'; this.style.borderColor='#00D9A5'">
            Submit
        </button>

        </form>

        </div>
    
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>