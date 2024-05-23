
<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp" style="font-size: 1.8rem;">Available Halls</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

  @foreach($hall as $halls)

    <div class="hall-slides">
      <div >
        <img style="height:250px !important" src="hallimage/{{$halls->image}}" alt="">
      </div>
      <div class="body">
        <p class="text-xl mb-0">{{$halls->name}}</p>
        <div class="details-wrapper" style="display: none;">
        <a href="{{url('hall_details', $halls->id)}}" class="btn btn-primary">Hall Details</a> 
        </div>
      </div>
    </div>

  @endforeach

</div>

<style>
.hall-slides {
  position: relative;
  overflow: hidden;
  /* Other styles */
}

.details-wrapper {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  /* Other styles */
}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $('.hall-slides').hover(function() {
    $(this).find('.details-wrapper').show();
  }, function() {
    $(this).find('.details-wrapper').hide();
  });
});
</script>