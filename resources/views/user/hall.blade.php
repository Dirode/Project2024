
  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Available Halls</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

      @foreach($hall as $halls)

        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height="250px" src="hallimage/{{$halls->image}}" alt="">
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$halls->name}}</p>
            </div>
          </div>
        </div>

      @endforeach
     
      </div>
    </div>
  </div>