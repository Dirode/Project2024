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
body{ 
  background-color:#fff;
}
</style>

  </head> 
  <body>
    <div class="container-scroller">

     
@include('admin.sidebar')
        <!-- partial -->
@include('admin.navbar')
        <!-- partial -->
       
    
    </div>
    
    
    @include('admin.script')

  </body>
</html>