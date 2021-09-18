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

      <h1 class="section-heading">Productive environments</h1>

      <div class="row" id="latest3property">

      </div>

    </div>
  </div>

  <div class="row">
    <div class="col-12">

      <h1 class="section-heading">Become one of Ourz</h1>
      <div class="section2-visitor-margin">
        <a class="btn text-white visitor-btn" id="visitor-btn">Visitor</a>
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
              <p class="section1-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed leo diam, porta a
                tellus quis, porttitor </p>
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
              <p class="section1-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed leo diam, porta a
                tellus quis, porttitor </p>
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
              <p class="section1-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed leo diam, porta a
                tellus quis, porttitor </p>
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
              <h5 class="section1-p-bold">Find your space 1</h5>
              <p class="section1-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed leo diam, porta a
                tellus quis, porttitor </p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="row">
            <div class="col-lg-2 col-md-3 col-2">
              <img class="img-fluid section2-img" src="img/eclipse 2.PNG" alt="">
            </div>
            <div class="col-lg-10 col-md-9 col-10 section2-text">
              <h5 class="section1-p-bold">Book it 1</h5>
              <p class="section1-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed leo diam, porta a
                tellus quis, porttitor </p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="row">
            <div class="col-lg-2 col-md-3 col-2">
              <img class="img-fluid section2-img" src="img/eclipse 3.PNG" alt="">
            </div>
            <div class="col-lg-10 col-md-9 col-10 section2-text">
              <h5 class="section1-p-bold">Have fun at work 1</h5>
              <p class="section1-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed leo diam, porta a
                tellus quis, porttitor </p>
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
          <p class="section3-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed leo diam, porta a
            tellus quis, porttitor malesuada erat. Praesent eleifend nisl lorem, ut pharetra lacus hendrerit et. Sed
            lacinia finibus eros egestas eleifend. Curabitur sed dolor justo. Nullam facilisis tristique nisi, a
            euismod risus lacinia quis. Nunc malesuada nisl sed</p>
        </div>
      </div>

      <div class="col-6 section-col">
        <div class="section3-padding">
          <h2 class="section3-heading">Sharing economy</h2>
          <p class="section3-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed leo diam, porta a
            tellus quis, porttitor malesuada erat. Praesent eleifend nisl lorem, ut pharetra lacus hendrerit et. Sed
            lacinia finibus eros egestas eleifend. Curabitur sed dolor justo. Nullam facilisis tristique nisi, a
            euismod risus lacinia quis. Nunc malesuada nisl sed</p>
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
          <p class="section9-p-bold mb-2"><span id="propertyPeopleModal"></span> guests</p>
          <input type="number" class="form-control mb-3" style="width: 80%;" id="room_hours_needed"
            placeholder="Total Hours Needed ">
          <button id="propertyPaymentBtn" class="btn text-white custom-btn">Book for <span
              id="propertyRateModal"></span>$/Hour</button>
        </div>
        <div class="col-6">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img id="imagePath1Modal" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img id="imagePath2Modal" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img id="imagePath3Modal" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
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
      $("#visitor-section").hide();
      $("#host-section").show();
      $("#visitor-btn").removeClass("visitor-btn")
      $("#visitor-btn").addClass("host-btn")

      $("#host-btn").addClass("visitor-btn")
      $("#host-btn").removeClass("host-btn")
    })
  })
</script>