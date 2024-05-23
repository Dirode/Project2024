<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  
    <base href="/public">

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
    <div class="container-scroller" style="background-color:white;">

      <!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
        <!-- partial -->
@include('admin.navbar')
      

    <div class="container-fluid page-body-wrapper">


    <div class="container" align="center" style="padding:100px">
    @if(session()->has('message'))

    <div class="alert alert-success">

    <button type="button" class="close" data-dismiss="alert">
        
    </button>

    {{session()->get('message')}}

    </div>

    @endif

        <form action="{{url('edithall', $data->id)}}" method="POST" enctype="multipart/form-data">
            <div style="padding:15px; color:black;">

            @csrf

                <label>Hall Name</label>
                <input type="text" style="color:black;" name="name" value="{{$data->name}}">

            </div>

            <div style="padding:15px; color:black;">
                <label>Capacity</label>
                <input type="text" style="color:black;" name="capacity" placeholder="Hall name" >
            </div>

            <div style="padding:15px; color:black;">
                <label>Location</label>
                <input type="text" style="color:black;" name="location" placeholder="Location of Hall" >
            </div>

        <div style="padding:15px; color:black;">
            <label>Description</label>
            <input type="text" style="color:black;" name="description" placeholder="Hall description" required="" >
        </div>

            <div style="padding:15px; color:black;">

                <label>Old Image</label>
                <img height="300" width="300" src="hallimage/{{$data->image}}"> <br>  

            </div>

            <div style="padding:15px; color:black;">

                <label>Change Image </label>
                <input type="file" name="file"> <br> <br>

            </div>
            <button type="submit" style="background-color:#00D9A5; border-color:#00D9A5;"
                class="btn btn-primary mt-3 wow zoomIn" onmouseover="this.style.backgroundColor='grey'; this.style.borderColor='grey'"
                onmouseout="this.style.backgroundColor='#00D9A5'; this.style.borderColor='#00D9A5'">
                Submit
            </button>

        </form>

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>