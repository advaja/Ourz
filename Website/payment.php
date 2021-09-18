<?php include "header.php";

$propertyID = $_GET['propertyID'];
$totalHours = $_GET['totalHours'];

?>

<!-- Banner Image  -->
<div class="banner-image w-100 d-flex justify-content-center align-items-center"
  style="background: linear-gradient( rgb(0 0 0 / 28%), rgb(0 0 0 / 48%) ), url(../img/banner7.png);background-position: left;margin-bottom: 80px;height: 48vh;">
  <div class="content text-center">

  </div>
</div>

<!-- Main Content Area -->

<div class="container d-grid gap-5" style="margin-top: 80px;">

  <div class="row">
    <div class="col-md-6">

      <h1 class="section10-heading" style="margin-bottom: 0px;">PAYMENT <span id="propertyID"
          hidden><?php echo $propertyID; ?></span></h1>

    </div>

    <div class="col-md-6">

      <h1 class="section10-heading" style="margin-bottom: 0px;">YOUR TOTAL IS <span id="rateText"></span>$</h1>

    </div>

  </div>

</div>

<hr class="hr2-style" style="width: 91%;margin-left: 9%;">

<div class="container">

  <div class="row">
    <div class="col-12" style="margin-bottom: 80px;">

      <div class="row">

        <div class="col-md-6">
          <p class="section10-p-bold">
            Before you pay, make sure all details are correct:<br>
            City: <span id="cityText"></span><br>
            Street: <span id="streetText"></span><br>
            Owner info: <span id="owner_nameText"></span><br>
            Contact number: <span id="owner_phoneText"></span><br>
            Room Hours Needed: <span id="totalHours"><?php echo $totalHours; ?></span><br>
            <span id="datesText"></span>, <span id="timeText"></span>
          </p>
        </div>

        <div class="col-md-6">
          <p class="section10-p-bold mb-3">
            Pay securely with paypal</p>
          <p class="section10-p-bold mb-3">
            For Paypal click here
          </p>

          <div id="smart-button-container">
            <div style="text-align: center;">
              <div id="paypal-button-container"></div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>

</div>



<?php include "footer.php" ?>
<script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD"
  data-sdk-integration-source="button-factory"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
  integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/payment.js"></script>