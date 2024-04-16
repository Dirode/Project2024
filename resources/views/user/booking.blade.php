<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Booking Details</h1>

      <form class="main-form" action="{{url('booking')}}" method="POST">

      @csrf

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="hall" id="departement" class="custom-select">

            <option> Select Hall </option>

              @foreach($hall as $halls)

              <option value="{{$halls->name}}">{{$halls->name}}</option>
              
              @endforeach

            </select>
          </div>
          
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <label for="start_time" class="mr-2">Start Time</label>
            <input type="time" id="start_time" name="start_time" class="form-control mr-2">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
          <label for="end_time" class="mr-2">End Time</label>
            <input type="time" id="end_time" name="end_time" class="form-control">
        </div>
           
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="reason" class="form-control" placeholder="Reason for booking..">
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit</button>

        <button type="cancel" class="btn btn-primary mt-3 wow zoomIn">Cancel</button>
    </form>
    </div>
  </div> <!-- .page-section -->