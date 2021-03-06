<?php include "header.php" ?>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

<style>
  .carousel-control-prev{
    background: transparent;
    border: 0;
  }
  .carousel-control-next{
    background: transparent;
    border: 0;
  }
</style>


<div id="find_office_div">
  <!-- Banner Image  -->
  <div class="banner-image w-100 d-flex justify-content-center align-items-center"
    style="background: linear-gradient( rgb(0 0 0 / 28%), rgb(0 0 0 / 48%) ), url(../img/banner4.png);background-position: left;margin-bottom: 80px;height: 76vh;">
    <div class="container">
      <div class="card p-5" style="background-color: rgb(35, 26, 19,0.8);">
        <h1 class="text-white section-heading" style="margin-left: 0;">Let's find your office</h1>
        <form id="findPropertyForm">
          <div class="row">

            <div class="col-md-4 col-6">
              <select class="form-select" id="city" name="city">
                <option value="" disabled selected>City</option>
                <option value="Acre">Acre</option>
                <option value="Afula">Afula</option>
                <option value="Arad">Arad</option>
                <option value="Ashkelon">Ashkelon</option>
                <option value="Ashdod">Ashdod</option>
                <option value="Bat Yam">Bat Yam</option>
                <option value="Beersheba">Beersheba</option>
                <option value="Caesarea">Caesarea</option>
                <option value="Givatayim">Givatayim</option>
                <option value="Holon">Holon</option>
                <option value="Herzliya">Herzliya</option>
                <option value="Jerusalem">Jerusalem</option>
                <option value="Kfar Saba">Kfar Saba</option>
                <option value="Nazareth">Nazareth</option>
                <option value="Netanya">Netanya</option>
                <option value="Ra'anana">Raanana</option>
                <option value="Ramat Gan">Ramat Gan</option>
                <option value="Tel Aviv-Yafo">Tel Aviv-Yafo</option>
                <option value="Tel Aviv">Tel Aviv</option>
                <option value="Eilat">Eilat</option>
              </select>
            </div>

            <div class="col-md-4 col-6">
              <input type="text" class="form-control mb-3" placeholder="Street (optional)" id="street" name="street">
            </div>

            <div class="col-md-4 col-6">
              <input type="text" class="form-control mb-3" placeholder="Street Number (optional)" id="street_number" name="street_number">
            </div>

            <div class="col-md-4 col-6">
              <input type="text" id="dateRangePicker" name="dateRangePicker" class="form-control mb-3" placeholder="Date">
            </div>

            <div class="col-md-4 col-6">
              <input type="text" id="startTimePicker" name="startTimePicker" class="form-control mb-3" placeholder="08:00 AM">
            </div>

            <div class="col-md-4 col-6">
              <input type="text" id="endTimePicker" name="endTimePicker" class="form-control mb-3" placeholder="08:00 AM">
            </div>

            <div class="col-md-4 col-6">
              <select class="form-select mb-3" id="peoples" name="peoples">
                <option value="" disabled selected>How many people?(optional)</option>
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
              <input type="text" class="form-control mb-3" placeholder="Enter a budget(optional)" id="rate" name="rate">
            </div>


            <div class="col-md-4 col-6">
              <button type="submit" class="btn btn-primary form-control custom-btn mb-3">SEARCH</button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id="find_result_div" style="display: none;">
  <!-- Banner Image  -->
  <div class="banner-image w-100 d-flex justify-content-center align-items-center"
    style="background: linear-gradient( rgb(0 0 0 / 28%), rgb(0 0 0 / 48%) ), url(../img/banner6.png);background-position: left;">
    <div class="content text-center">
      <h1 class="text-white banner-h1">RESULTS</h1>
    </div>
  </div>

  <div id="map" style="width: 100%; height: 500px;"></div>

  <!-- Main Content Area -->
  <div class="container my-5 d-grid gap-5">

    <div class="row">
      <div class="col-12">

        <div class="row" id="findpropertyResult">
          

        </div>

      </div>
    </div>

  </div>
</div>

<div class="modal fade" id="showResultModal1" tabindex="-1" aria-labelledby="showResultModal1Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content p-5">
      <div class="row">
        <div class="col-6">
        <p class="section9-p-bold mb-2" id="propertyIDModal1" hidden></p>  
        <p class="section9-p-bold mb-2" id="propertyNameModal1"></p>
          <p class="section9-p mb-2" id="propertyDescriptionModal1"></p>
          <p class="section9-p-bold mb-2"><span id="propertyPeopleModal1"></span> guests</p>
           
          <input type="number" class="form-control mb-3" style="width: 80%;" min="0.5" value="0.5" step="0.5" id="room_hours_needed1" placeholder="Total Hours Needed ">
          <button id="propertyPayment1Btn" class="btn text-white custom-btn">Book for <span
              id="propertyRateModal1"></span>$/Hour</button>
        </div>
        <div class="col-6">
        <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" id="imageItem11Modal">
                <img id="imagePath11Modal" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" id="imageItem12Modal">
                <img id="imagePath12Modal" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" id="imageItem13Modal">
                <img id="imagePath13Modal" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" id="imageItem14Modal">
                <img id="imagePath14Modal" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "footer.php" ?>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyBZ5FtsN2n8WXExBpj2QKdLYmbwrLzMDLY"
  type="text/javascript"></script>
<script src="js/find_office.js"></script>