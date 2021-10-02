<?php include "header.php" ?>

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

<!-- Banner Image  -->
<div class="banner-image w-100 d-flex justify-content-center align-items-center"
  style="background-image: url(../img/banner.png);">
  <div class="content text-center">
    <h1 class="text-white banner-h1">work</h1>
    <h1 class="text-white banner-h1-second">wherever</h1>
    <a href="find_office.php" class="btn btn-light let-go-btn">Let's go</a>
  </div>
</div>

<!-- Main Content Area -->
<div class="container my-5 d-grid gap-5">

  <div class="row">
    <div class="col-12">

      <h1 class="section-heading">Productive Environments</h1>

      <div class="row" id="latest3property">

      </div>

    </div>
  </div>

  <div class="row">
    <div class="col-12">

      <h1 class="section-heading">Become one of Ourz</h1>
      <div class="section2-visitor-margin">
        <a class="btn text-white visitor-btn" id="visitor-btn">Tenant</a>
        <a class="btn text-white host-btn" id="host-btn">Host</a>
        <hr class="hr-style" style="    margin-left: 20px;">
      </div>

      <div class="row" id="visitor-section">

        <div class="col-md-4">
          <div class="row">
            <div class="col-lg-2 col-md-3 col-2">
              <img class="img-fluid section2-img" src="img/eclipse 1.PNG" alt="">
            </div>
            <div class="col-lg-10 col-md-9 col-10 section2-text">
              <h5 class="section1-p-bold">Find your space</h5>
              <p class="section1-p">choose a day, time, place, and your budget and scroll through thousands of workspaces </p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="row">
            <div class="col-lg-2 col-md-3 col-2">
              <img class="img-fluid section2-img" src="img/eclipse 2.PNG" alt="">
            </div>
            <div class="col-lg-10 col-md-9 col-10 section2-text">
              <h5 class="section1-p-bold">Book it</h5>
              <p class="section1-p">It has never been so simple. All you have to do is pay via PayPal and the office is waiting for you </p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="row">
            <div class="col-lg-2 col-md-3 col-2">
              <img class="img-fluid section2-img" src="img/eclipse 3.PNG" alt="">
            </div>
            <div class="col-lg-10 col-md-9 col-10 section2-text">
              <h5 class="section1-p-bold">Have fun at work</h5>
              <p class="section1-p">Enjoy working in a place & time that fits exactly for your needs. You don’t pay when you're not there, and when your there its really cheap and convenient ! </p>
            </div>
          </div>
        </div>

      </div>

      <div class="row" style="display: none;" id="host-section">

        <div class="col-md-4">
          <div class="row">
            <div class="col-lg-2 col-md-3 col-2">
              <img class="img-fluid section2-img" src="img/eclipse 1.PNG" alt="">
            </div>
            <div class="col-lg-10 col-md-9 col-10 section2-text">
              <h5 class="section1-p-bold">List your space</h5>
              <p class="section1-p">Add the workspace you own to the platform and gain tremendous exposure from casual office tenants  </p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="row">
            <div class="col-lg-2 col-md-3 col-2">
              <img class="img-fluid section2-img" src="img/eclipse 2.PNG" alt="">
            </div>
            <div class="col-lg-10 col-md-9 col-10 section2-text">
              <h5 class="section1-p-bold">Wait for intrested tenants to contact</h5>
              <p class="section1-p">provide some extra information about your office like where you plan to leave the key or parking arrangements in the area </p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="row">
            <div class="col-lg-2 col-md-3 col-2">
              <img class="img-fluid section2-img" src="img/eclipse 3.PNG" alt="">
            </div>
            <div class="col-lg-10 col-md-9 col-10 section2-text">
              <h5 class="section1-p-bold">Enjoy extra income</h5>
              <p class="section1-p">Sit back, watch your extra space rented and enjoy extra income from a space you already own. Thank us later :)</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>

</div>

<div class="row" style="margin: 0;">
  <div class="col-12 section3-banner">

    <div class="row">
      <div class="col-6 section-col">
        <div class="section3-padding">
          <h2 class="section3-heading">Revolution.</h2>
          <p class="section3-text">No more long-term and unaffordable rentals. There is no more geographical limitation. No more noisy cafes. No more working in the same place every day. The is no more money wasting. No more parking problems. No more crowded workspaces. There are no more unnecessary commitments. No more unproductive environments. No more bad coffee. No more office buildings.</p>
        </div>
      </div>

      <div class="col-6 section-col">
        <div class="section3-padding">
          <h2 class="section3-heading">Sharing economy.</h2>
          <p class="section3-text">Ourz established as a part of the cooperative economy model. Collaborative driving platforms, shared workspaces companies are just part of a new way of life. If its yours already, why not make other people feel for a while that it's their too ?
This is our moto, and with it we run forward. Its hers, his, yours and theirs.
Join us on this amazing journey, because it belongs to each and every one of us. its Ourz.
</p>
        </div>
      </div>

    </div>

  </div>
</div>

<div class="modal fade" id="showResultModal" tabindex="-1" aria-labelledby="showResultModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content p-5">
      <div class="row">
        <div class="col-6">
          <p class="section9-p-bold mb-2" id="propertyIDModal" hidden></p>
          <p class="section9-p-bold mb-2" id="propertyNameModal"></p>
          <p class="section9-p mb-2" id="propertyDescriptionModal"></p>
             <p class="section9-p-bold mb-2" id="propertyDateModal"></p>
             <p class="section9-p-bold mb-2" id="propertyTimeModal"></p>
          <p class="section9-p-bold mb-2"><span id="propertyPeopleModal"></span> guests</p>
         
          <!--<input type="number" class="form-control mb-3" style="width: 80%;" min="0.5" value="0.5" step="0.5" id="room_hours_needed" placeholder="Total Hours Needed ">
          <button id="propertyPaymentBtn" class="btn text-white custom-btn">Book for <span
              id="propertyRateModal"></span>$/Hour</button>-->
          
          
        </div>
        <div class="col-6">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" id="imageItem1Modal">
                <img id="imagePath1Modal" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" id="imageItem2Modal">
                <img id="imagePath2Modal" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" id="imageItem3Modal">
                <img id="imagePath3Modal" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" id="imageItem4Modal">
                <img id="imagePath4Modal" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
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
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>


<?php include "footer.php" ?>

<script>
  $(document).ready(function () {
    $("#visitor-btn").click(function () {
      $("#visitor-section").show();
      $("#host-section").hide();
      $("#visitor-btn").addClass("visitor-btn")
      $("#visitor-btn").removeClass("host-btn")

      $("#host-btn").removeClass("visitor-btn")
      $("#host-btn").addClass("host-btn")
    })

    $("#host-btn").click(function () {
      $("#host-section").show();
      $("#visitor-section").hide();

      
      $("#visitor-btn").removeClass("visitor-btn")
      $("#visitor-btn").addClass("host-btn")

      $("#host-btn").addClass("visitor-btn")
      $("#host-btn").removeClass("host-btn")
    })
  })
</script>