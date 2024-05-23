<div class="page-section" style="box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.2);">
    <div class="container">
      <h1 class="text-center wow fadeInUp" style="font-size: 1.8rem;">Booking Details</h1>

      <form class="main-form" action="{{url('booking')}}" method="POST">

      @csrf

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" id="date" name="date" class="form-control" min="{{ now()->format('Y-m-d') }}" required="">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="hall_id" id="hall_id" class="custom-select">

            <option> Select Hall </option>

              @foreach($hall as $hall)

              <option value="{{$hall->id}}">{{$hall->name}}</option>
              
              @endforeach

            </select>
          </div>
          
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
  <label for="start_time" class="mr-2">Start Time</label>
  <input type="time" id="start_time" name="start_time" class="form-control mr-2" required="">
</div>
<div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
  <label for="end_time" class="mr-2">End Time</label>
  <input type="time" id="end_time" name="end_time" class="form-control" min="{{ old('start_time', now()->format('H:i')) }}" required="">
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var startTimeInput = document.getElementById('start_time');
      var endTimeInput = document.getElementById('end_time');

      startTimeInput.addEventListener('change', function() {
        endTimeInput.min = this.value;
      });
    });
  </script>
</div>
           
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="reason" class="form-control" placeholder="Reason for booking.." required="">
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit</button>
    </form>
    </div>
  </div> <!-- .page-section -->