<?php include "header.php" ?>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

<!-- Banner Image  -->
<div class="banner-image w-100 d-flex justify-content-center align-items-center"
  style="background: linear-gradient( rgb(0 0 0 / 28%), rgb(0 0 0 / 48%) ), url(../img/banner8.png);background-position: left;margin-bottom: 80px;height: 76vh;">
  <div class="content text-center">
    <h1 class="text-white banner-h1">SHARE</h1>
    <h1 class="text-white banner-h1-second">YOUR SPACE</h1>
  </div>
</div>

<div class="container my-5 d-grid gap-5">

  <div class="row">
    <div class="col-12">

      <form id="propertyForm">
        <div class="row">

          <div class="col-12">
            <input type="text" class="form-control mb-3" placeholder="Contact name - Office name" id="owner_name"
              name="owner_name">
          </div>

          <div class="col-md-4 col-6">
            <input id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text"
              class="form-control">
          </div>

          <div class="col-md-4 col-6">
            <input type="text" class="form-control mb-3" placeholder="Street" id="street" name="street">
          </div>

          <div class="col-md-4 col-6">
            <input type="text" class="form-control mb-3" placeholder="Street Number" id="street_number"
              name="street_number">
          </div>

          <div class="col-md-4 col-6">
            <input type="text" id="dateRangePicker" name="dateRangePicker" class="form-control mb-3" placeholder="Date">
          </div>

          <div class="col-md-4 col-6">
            <input type="text" id="startTimePicker" name="startTimePicker" class="form-control mb-3"
              placeholder="08:00 AM">
          </div>

          <div class="col-md-4 col-6">
            <input type="text" id="endTimePicker" name="endTimePicker" class="form-control mb-3" placeholder="08:00 AM">
          </div>

          <div class="col-md-4 col-6">
            <select class="form-select mb-3" id="peoples" name="peoples">
              <option value="" disabled selected>How many people?</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>

          <div class="col-md-4 col-6">
            <input type="text" class="form-control mb-3" placeholder="Hourly rate" id="rate" name="rate">
          </div>

          <div class="col-md-4 col-6">
          	<input type="tel" class="form-control mb-3" placeholder="Contact Phone" pattern="[0-9]{3}-[0-9]{4}-[0-9]{3}" id="owner_phone"
              name="owner_phone">
          </div>

          <div class="col-12">
            <textarea class="form-control mb-3" rows="6" placeholder="Description" id="description"
              name="description"></textarea>
          </div>

          <div class="row" style="margin: 0;">

            <div class="col-md-3" style="padding: 0;">
              <div class="card p-4" style="background: #EBEBEB;border: 1px solid #EBEBEB;text-align: center;" id="uploadImageDiv1">
                <i class="fa fa-camera" id="uploadDesign1" style="color: gray;font-size: 80px;"></i>
                <p style="color: gray;">Add a photo (required)</p>

                <input id="imageUpload1" type="file" name="imageUpload1" placeholder="Photo" capture
                  style="width: 0;" onchange="loadFile1(event)">
              </div>
              <img class="img-fluid" id="showImage1" style="display:hidden;height: 100%;">
            </div>

            <div class="col-md-3" style="padding: 0;">
              <div class="card p-4" style="background: #EBEBEB;border: 1px solid #EBEBEB;text-align: center;" id="uploadImageDiv2">
                <i class="fa fa-camera" id="uploadDesign2" style="color: gray;font-size: 80px;"></i>
                <p style="color: gray;">Add a photo(optional)</p>

                <input id="imageUpload2" type="file" name="imageUpload2" placeholder="Photo" capture
                  style="width: 0;" onchange="loadFile2(event)">
              </div>
              <img class="img-fluid" id="showImage2" style="display:hidden;height: 100%;">
            </div>

            <div class="col-md-3" style="padding: 0;">
              <div class="card p-4" style="background: #EBEBEB;border: 1px solid #EBEBEB;text-align: center;" id="uploadImageDiv3">
                <i class="fa fa-camera" id="uploadDesign3" style="color: gray;font-size: 80px;"></i>
                <p style="color: gray;">Add a photo(optional)</p>

                <input id="imageUpload3" type="file" name="imageUpload3" placeholder="Photo" capture
                  style="width: 0;" onchange="loadFile3(event)">
              </div>
              <img class="img-fluid" id="showImage3" style="display:hidden;height: 100%;">
            </div>

            <div class="col-md-3" style="padding: 0;">
              <div class="card p-4" style="background: #EBEBEB;border: 1px solid #EBEBEB;text-align: center;" id="uploadImageDiv4">
                <i class="fa fa-camera" id="uploadDesign4" style="color: gray;font-size: 80px;"></i>
                <p style="color: gray;">Add a photo(optional)</p>

                <input id="imageUpload4" type="file" name="imageUpload4" placeholder="Photo" capture
                  style="width: 0;" onchange="loadFile4(event)">
              </div>
              <img class="img-fluid" id="showImage4" style="display:hidden;height: 100%;">
            </div>

          </div>

          <div class="col-12" style="text-align: end;">
            <button class="btn btn-primary custom-btn mb-3 px-5 mt-3" type="submit">Share</button>
          </div>

        </div>
      </form>

    </div>
  </div>
</div>

<div class="modal fade" id="shareSpaceModal" tabindex="-1" aria-labelledby="shareSpaceModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-5" style="background-color: rgb(1, 1, 1,0.6);">
      <h5 class="text-white section1-p-bold mb-3" style="text-align: center;">You've just became one of Ourz!</h5>
      <div class="mb-3">
        <a href="index.php" class="btn custom-btn form-control text-white">BACK TO HOMEPAGE</a>
      </div>
    </div>
  </div>
</div>



<?php include "footer.php" ?>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZ5FtsN2n8WXExBpj2QKdLYmbwrLzMDLY&libraries=places&language=en&callback=initAutocomplete"
  async defer></script>
<script src="js/add_property.js"></script>