<?php include 'include/header.php'?>

<section class="breadcrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="breadcrumb-item">
          <h1 class="breadcrumb-title">Login</h1>
          <ul class="breadcrumb-ul">
            <li class="breadcrumb-li"> <a href="javascript:void(0)" class="breadcrumb-link">Home</a></li>
            <li class="breadcrumb-li"> <i class="fi fi-rr-angle-right"></i> </li>
            <li class="breadcrumb-li active">Home</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-padding login-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-7 col-lg-8 col-sm-10 col-12">
        <div class="login-header">
          <div class="login-header-content">
            <!-- <img src="./assets/images/login.svg" alt="login" class="login-icon">
                      <h2 class="login-title">Join Our BabySmile Store</h2> -->
            <h2 class="login-title">Login</h2>
            <p class="login-subtitle common-desc">Best Place To Buy Baby Products</p>
          </div>
        </div>
        <div class="login-mdiv">
          <div class="login-item">
            <form>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" placeholder="Username" class="form-control">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label class="form-label">Email</label>
                    <div class="position-relative">
                      <input type="email" name="email" placeholder="Email" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label class="form-label">Phone No.</label>
                    <div class="position-relative">
                      <input type="text" name="phone_no" placeholder="Phone No." class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label class="form-label">Password</label>
                    <div class="position-relative">
                      <input type="password" name="password" placeholder="Password" class="form-control input-password">
                      <i class="fi fi-rr-eye password-icon toggle-password"></i>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label class="form-label">OTP</label>
                    <div class="otp-mdiv">
                      <input class="form-control" type="text" name="otp" max="9" min="0">
                      <input class="form-control" type="text" name="otp" max="9" min="0">
                      <input class="form-control" type="text" name="otp" max="9" min="0">
                      <input class="form-control" type="text" name="otp" max="9" min="0">
                      <a href="javascript:void(0)" class="common-btn mt-0 align-self-stretch">Verify</a>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="submit-btn common-btn">Login</button>
                </div>
                <p class="forgot-password-link signup-link">Login With Your Email Id? <a href="javascript:void(0)">Click Here To Login</a></p>

                <p class="forgot-password-link signup-link">Login With Your Phone Number? <a href="javascript:void(0)">Click Here To Login</a></p>

                <p class="forgot-password-link signup-link">Forgot Your Password? <a href="javascript:void(0)">Reset It Here</a></p>

                <p class="forgot-password-link signup-link">Didn't Receive The Code? <a href="javascript:void(0)">Resend OTP</a> (1:59)</p>

                <a href="javascript:void(0)" class="backto-login-link"><i class="fi fi-rr-arrow-left"></i><span> Back To Login</span></a>
              </div>
            </form>
            <div class="login-footer">
              <div class="center-title-mdiv title-border">
                <h5 class="common-main-title">Login With</h5>
              </div>
              <div class="social-icon-div">
                <a href="javascript:void(0)" class="social-icon-link">
                  <img src="./assets/images/google.png" alt="google" class="social-icon">
                </a>
                <a href="javascript:void(0)" class="social-icon-link">
                  <img src="./assets/images/facebook.png" alt="facebook" class="social-icon">
                </a>
              </div>
              <p class="signup-link">Don't Have An Account ? <a href="javascript:void(0)">SignUp</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  $(".toggle-password").click(function () {
    $(this).toggleClass("fi-rr-eye fi-rr-eye-crossed");
    var input = $(this).siblings('.input-password');
    if (input.attr("type") === "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });
</script>

<?php include 'include/footer.php' ?>
