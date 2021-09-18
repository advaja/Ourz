<div class="modal fade" id="signInModal" tabindex="-1" aria-labelledby="signInModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-5" style="background-color: rgb(1, 1, 1,0.8);">
      <form id="loginForm">
        <h1 class="text-white section-heading" style="text-align: center;margin-left: 0;">SIGN IN</h1>
        <h5 class="text-white section1-p-bold" style="text-align: center;">Dont have an account? <a id="signupModalBtn"
            style="color: #E57171;margin-left:10px;cursor :pointer;">SIGN UP</a></h5>
        <div class="my-3">
          <input type="email" id="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="mb-3">
          <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="mb-3">
          <button type="submit" class="btn custom-btn form-control text-white">SIGN IN</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="signUpModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-5" style="background-color: rgb(1, 1, 1,0.8);">
      <form id="registerForm">
        <h1 class="text-white section-heading mb-3" style="margin-left: 0;">Join us</h1>
        <div class="row">
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" placeholder="First Name" id="first_name" name="first_name">
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" placeholder="Last Name" id="last_name" name="last_name">
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" placeholder="Email" id="new_email" name="new_email">
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" placeholder="Phone Number" id="phone" name="phone">
          </div>
          <div class="col-md-6 mb-3">
            <input type="password" class="form-control" placeholder="Password" id="new_password" name="new_password">
          </div>
          <div class="col-md-6 mb-3">
            <input type="password" class="form-control" placeholder="Confirm Password" id="confirm_password" name="confirm_password">
          </div>
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input custom-checkbox" id="exampleCheck1">
          <label class="text-white form-check-label" for="exampleCheck1">I agre to Ourz Terms & Conditions</label>
        </div>

        <div class="mb-3">
          <button type="submit" class="btn custom-btn form-control text-white">CREATE ACCOUNT</button>
        </div>

        <div class="mb-3">
          <h5 class="text-white section1-p-bold" style="text-align: center;">Already one of Ourz? <a id="signInModalBtn"
              style="color: #E57171;margin-left:10px;cursor :pointer;">LOGIN</a></h5>
        </div>
      </form>

      <div class="row">
        <div class="col-6">
          <h5 class="text-white section1-p-bold" style="text-align: right;">Ourz on social</h5>
        </div>
        <div class="col-6 text-white" style="text-align: left;padding-left: 20px;border-left: 1px solid white;">
        <a href="#" class="text-white" target="_blank"> <i class="fa fa-facebook-square fa-style"></i></a>
        <a href="#" class="text-white" target="_blank"><i class="fa fa-instagram fa-style"></i></a>
        <a href="#" class="text-white" target="_blank"><i class="fa fa-linkedin-square fa-style"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>


<footer>
  <div class="container py-5">
    <div class="row">
      <div class="col-4">
        <a class="footer-text">FOLLOW US</a>
        <div style="margin-top: 20px;">
          <a href="#" class="text-dark" target="_blank"><i class="fa fa-facebook-square fa-style"></i></a>
          <a href="#" class="text-dark" target="_blank"><i class="fa fa-instagram fa-style"></i></a>
          <a href="#" class="text-dark" target="_blank"><i class="fa fa-linkedin-square fa-style"></i></a>
        </div>
      </div>
      <div class="col-8" style="text-align: right;">
        <a href="privacy-policy.php" class="footer-text footer-text-margin">PRIVACY POLICY</a>
        <a href="term-condotion.php" class="footer-text footer-text-margin">TERMS & CONDITIONS</a>
        <a href="faq.php" class="footer-text footer-text-margin">FAQ</a>
      </div>
    </div>
  </div>
</footer>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<script src="js/index.js"></script>

</body>

</html>