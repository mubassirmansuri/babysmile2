<?php include 'include/header.php'?>

<!-- <section class="breadcrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="breadcrumb-item">
          <h1 class="breadcrumb-title">Login</h1>
          <ul class="breadcrumb-ul">
            <li class="breadcrumb-li"> <a href="javascript:void(0)" class="breadcrumb-link">Home</a></li>
            <li class="breadcrumb-li"> <i class="fi fi-rr-angle-right"></i> </li>
            <li class="breadcrumb-li active">Login</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section> -->

<section class="section-padding login-section">
  <!-- <img src="./assets/images/icon-10.svg" alt="icon-10" class="login-float-icon-1">
  <img src="./assets/images/icon-11.svg" alt="icon-10" class="login-float-icon-2">
  <img src="./assets/images/icon-12.svg" alt="icon-10" class="login-float-icon-3">
  <img src="./assets/images/icon-9.svg" alt="icon-10" class="login-float-icon-4">
  <img src="./assets/images/icon-8.svg" alt="icon-10" class="login-float-icon-5">
  <img src="./assets/images/icon-6.svg" alt="icon-10" class="login-float-icon-6"> -->
  <div class="container">
    <div class="row justify-content-center">
      <!-- <div class="col-5 login-slider-col common-left-div">
        <div class="swiper login-slider mx-0">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="slider-item">
                <div class="login-slider-item">
                  <img src="./assets/images/login-slider-1.svg" alt="" class="login-slider-img">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-item">
                <div class="login-slider-item">
                  <img src="./assets/images/login-slider-2.svg" alt="" class="login-slider-img">
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slider-item">
                <div class="login-slider-item">
                  <img src="./assets/images/login-slider-3.svg" alt="" class="login-slider-img">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <div class="col-lg-6 col-sm-10 col-7  common-right-div login-slider-col">
        <?php /* <div class="login-header">
          <div class="login-header-content">
            <!-- <img src="./assets/images/login.svg" alt="login" class="login-icon">
                      <h2 class="login-title">Join Our BabySmile Store</h2> -->
            <h2 class="login-title">Login</h2>
            <p class="login-subtitle common-desc">Best Place To Buy Baby Products</p>
          </div>
        </div> */ ?>
         <div class="login-mdiv">
          <div class="login-banner">
                    <img src="./assets/images/login-slider-1.png" alt="">
                  </div>
                  <div class="login-item">
                    <!-- <img src="./assets/images/icon-6.svg" alt="" class="login-item-float-img">
                    <img src="./assets/images/22314005_6589549-ai.svg" alt="" class="login-item-float-img2"> -->
                    <div class="login-header">
                      <div class="login-header-content">
                        <!-- <h2 class="login-title">Login</h2> -->
                        <p class="login-subtitle common-desc">Lorem ipsum dolor sit amet.</p>
                      </div>
                    </div>
                    <form autocomplete="off">
                      <div class="row">
                        <!-- <div class="col-12">
                          <div class="form-group">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" placeholder="Username" class="form-control">
                          </div>
                        </div> -->
                        <!-- <div class="col-12 mb-15">
                          <div class="form-group">
                            <label class="form-label">Email</label>
                            <div class="position-relative input-icon-div">
                              <i class="fi fi-rr-user input-icon"></i>
                              <input type="email" name="email" placeholder="Email" class="form-control" value="">
                            </div>
                          </div>
                        </div> -->
                        <div class="col-12">
                          <div class="form-group">
                            <!-- <label class="form-label">Phone No.</label> -->
                             <div class="position-relative input-icon-div">
                              <i class="fi fi-rr-mobile-button input-icon"></i>
                              <input type="text" name="phone_no" placeholder="Phone No." class="form-control">
                            </div>
                          </div>
                        </div>
                        <!-- <div class="col-12">
                          <div class="form-group">
                            <label class="form-label">Password</label>
                            <div class="position-relative input-icon-div">
                              <i class="fi fi-rr-link input-icon"></i>
                              <input type="password" name="password" placeholder="Password"
                              class="form-control input-password" value="" >
                              <i class="fi fi-rr-eye password-icon toggle-password"></i>
                            </div>
                          </div>
                        </div> -->
                        <div class="col-12">
                          <div class="form-group">
                            <!-- <label class="form-label">OTP</label> -->
                            <div class="otp-mdiv">
                              <input class="form-control" type="text" name="otp" max="9" min="0">
                              <input class="form-control" type="text" name="otp" max="9" min="0">
                              <input class="form-control" type="text" name="otp" max="9" min="0">
                              <input class="form-control" type="text" name="otp" max="9" min="0">
                              <input class="form-control" type="text" name="otp" max="9" min="0">
                              <input class="form-control" type="text" name="otp" max="9" min="0">
                              <!-- <a href="javascript:void(0)" class="common-btn mt-0 align-self-stretch">Verify</a> -->
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <button type="submit" class="submit-btn common-btn common-btn2" title="Login">Login</button>
                          <button type="submit" class="submit-btn common-btn common-btn2" title="Verify">Verify</button>
                        </div>
                        <p class="forgot-password-link signup-link">Login With Your Email Id? <a href="javascript:void(0)">Click Here To Login</a></p>
                        <!-- <p class="forgot-password-link signup-link">Login With Your Phone Number? <a href="javascript:void(0)">Click Here To Login</a></p> -->
                        <p class="forgot-password-link signup-link">Forgot Your Password? <a href="javascript:void(0)">Reset It Here</a>
                        </p>
                        <!-- <p class="forgot-password-link signup-link">Didn't Receive The Code? <a href="javascript:void(0)">Resend OTP</a> (1:59)</p> -->
                        <!-- <a href="javascript:void(0)" class="backto-login-link"><i class="fi fi-rr-arrow-left"></i><span> Back To Login</span></a> -->
                      </div>
                    </form>
                    <div class="login-footer">
                      <div class="center-title-mdiv">
                        <h5 class="common-main-title">Login <span>With</span></h5>
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

  <script>
    var swiper = new Swiper(".login-slider", {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      autoplay: {
        delay: 4000,
      },
    });
  </script>

<?php include 'include/footer.php' ?>
