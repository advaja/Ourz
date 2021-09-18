<?php include "header.php" ?>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

<!-- Banner Image  -->
<div class="banner-image w-100 d-flex justify-content-center align-items-center"
  style="background: linear-gradient( rgb(0 0 0 / 28%), rgb(0 0 0 / 48%) ), url(../img/banner8.png);background-position: left;margin-bottom: 80px;height: 50vh;">
  <div class="content text-center">
    <h1 class="text-white banner-h1">User Orders</h1>
  </div>
</div>

<div class="container my-5 d-grid gap-5">

  <div class="row">
    <div class="col-12 m-auto">

      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Owner Name</th>
              <th scope="col">Owner Phone #</th>
              <th scope="col">Address</th>
              <th scope="col">Dates</th>
              <th scope="col">Times</th>
              <th scope="col">Hourly Rate</th>
              <th scope="col">Total Hours</th>
              <th scope="col">Total Payment</th>
              <th scope="col">Total Peoples</th>
              <th scope="col">Payment ID</th>
              <th scope="col">Payment Date</th>
            </tr>
          </thead>
          <tbody id="orderTableData">
            <tr>
              <th scope="row"></th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>




<?php include "footer.php" ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
  integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/user_orders.js"></script>