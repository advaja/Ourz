<?php include "header.php" ?>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

<!-- Banner Image  -->
<div class="banner-image w-100 d-flex justify-content-center align-items-center"
  style="background: linear-gradient( rgb(0 0 0 / 28%), rgb(0 0 0 / 48%) ), url(../img/banner8.png);background-position: left;margin-bottom: 80px;height: 30vh;">
  <div class="content text-center">
    <h1 class="text-white banner-h1">Profile</h1>
  </div>
</div>

<div class="container my-5 d-grid gap-5">

  <div class="row">
    <div class="col-lg-6 col-md-8 m-auto">

      <form id="profileForm">
        <div class="mb-3">
          <label for="first_name" class="form-label">First Name</label>
          <input type="text" class="form-control" id="first_name3" name="first_name3">
        </div>

        <div class="mb-3">
          <label for="last_name" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="last_name3" name="last_name3">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" id="email3" name="email3" readonly>
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">Phone #</label>
          <input type="text" class="form-control" id="phone3" name="phone3">
        </div>

        <div class="mb-3">
          <button type="submit" class="btn btn-primary custom-btn mb-3 px-5 mt-3">Update</button>
        </div>

      </form>

    </div>
  </div>
</div>




<?php include "footer.php" ?>

<script src="js/profile.js"></script>
