<?php include "header.php";

$paymentID = $_GET['paymentID'];
$propertyID = $_GET['propertyID'];

?>

<!-- Banner Image  -->
<div class="banner-image w-100 d-flex justify-content-center align-items-center"
  style="background: linear-gradient( rgb(0 0 0 / 28%), rgb(0 0 0 / 48%) ), url(../img/banner7.png);background-position: left;margin-bottom: 80px;height: 36vh;">
  <div class="content text-center">

  </div>
</div>

<!-- Main Content Area -->

<div class="container d-grid gap-5" style="margin-top: 80px;">

  <div class="row">
    <div class="col-12">

      <h1 class="section10-heading" style="margin-bottom: 0px;">You've just booked an<br> office from Ourz! <span id="propertyID"
          hidden><?php echo $propertyID; ?></span></h1>

    </div>

  </div>

</div>

<hr class="hr2-style" style="width: 91%;margin-left: 9%;">

<div class="container">

  <div class="row">
    <div class="col-12" style="margin-bottom: 80px;">

      <div class="row">

        <div class="col-12">
          <p class="section10-p-bold">
            Payment ID:  <span id="paymentID"><?php echo $paymentID; ?></span>
          </p>
          <p class="section10-p">
          <span id="datesText"></span>, <span id="timeText"></span>
          </p>

          <h1 class="section10-heading" style="margin-bottom: 20px;">Office Details:</h1>

          <div class="row">
            <div class="col-lg-4 col-md-6">
              <p class="section10-p">
              City: <span id="cityText"></span><br>
            Street: <span id="streetText"></span><br>
            Owner info: <span id="owner_nameText"></span><br>
            Contact number: <span id="owner_phoneText"></span> <a id="whatsappLink" href='https://api.whatsapp.com/send?phone=923201288956' target="_blank"><img src="img/whatsapp-logo-png-2259.png" style="width: 30px;" alt=""></a>
            </div>

            <div class="col-lg-8 col-md-6">
              <p class="section10-p-bold mb-3">
                Google map to office: <a id="googleMapLink" target="_blank"><i class="fa fa-map-marker" style="margin-left: 10px;font-size: 20px;"></i></a>
              </p>

              <p class="section10-p-bold">
              Add to calendar: <a id="calendarLink" target="_blank"><i class="fa fa-calendar" style="margin-left: 10px"></i></a>
              </p>
            </div>
          </div>
          </p>
        </div>

      </div>

    </div>
  </div>

</div>



<?php include "footer.php" ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
  integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/thanku.js"></script>