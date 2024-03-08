<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Booking Details</h1>

      <form class="main-form">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="departement" id="departement" class="custom-select">
              <option value="general">Select</option>
              <option value="conference hall">Conference Room</option>
              <option value="Lecture Theater">Lecture Theater</option>
              <option value="alpha hall">Alpha Hall</option>
              <option value="beta hall">Beta Hall</option>
              <option value="mph hall">MPH Hall</option>
              <option value="new">new</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Reason for booking..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Feedback.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit</button>

        <button type="cancel" class="btn btn-primary mt-3 wow zoomIn">Cancel</button>
    </form>
    </div>
  </div> <!-- .page-section -->