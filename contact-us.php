<?php include 'include/header.php'?>

<!-- <section class="breadcrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="breadcrumb-item">
          <h1 class="breadcrumb-title">Contact Us</h1>
          <ul class="breadcrumb-ul">
            <li class="breadcrumb-li"> <a href="javascript:void(0)" class="breadcrumb-link">Home</a></li>
            <li class="breadcrumb-li"> <i class="fi fi-rr-angle-right"></i> </li>
            <li class="breadcrumb-li active">Contact Us</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section> -->

<section class="section-padding contact-us-section">
    <img src="./assets/images/icon-11.svg" alt="icon 1" class="float-icon-1">
    <img src="./assets/images/icon-9.svg" alt="icon 1" class="float-icon-2">
    <img src="./assets/images/icon-4.svg" alt="icon 1" class="float-icon-4">
    <img src="./assets/images/icon-10.svg" alt="icon 1" class="float-icon-5">
  <div class="container contact-us-container">
    <div class="conform-mess"></div>
          <div class="row contact-us-row mx-0">
              <div class="col-lg-6 contact-us-col">
                  <form action="" id="submit-contact-form" method="post" accept-charset="utf-8" novalidate="novalidate">
                      <div class="contact-us-form-main">
                          <p class="contact-us-heading mb-5">Send Us a <span> Message</span></p>
                          <p class="common-desc mb-20">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, magni.</p>
                          <div class="row form-fild-main">
                              <div class="col-sm-6 contact-form-col">
                                  <label class="form-label contact-us-label common-des">Name<span class="validation-mark">*</span></label>
                                  <input type="text" name="name" class="form-control contact-us-input" placeholder="Name">
                              </div>
                              <div class="col-sm-6 contact-form-col">
                                  <label class="form-label contact-us-label common-des">Mobile No.</label>
                                  <input type="text" name="mobile_no" class="form-control contact-us-input" onchange="onlyNumberWithSpaceAndPlusSign(this)" onkeyup="onlyNumberWithSpaceAndPlusSign(this)" minlength="8" maxlength="15" placeholder="Mobile No.">
                              </div>
                              <div class="col-sm-12 contact-form-col">
                                  <label class="form-label contact-us-label common-des">Email<span class="validation-mark">*</span></label>
                                  <input type="email" name="email" class="form-control contact-us-input" placeholder="Email">
                              </div>
                              <div class="col-sm-12 contact-form-col">
                                  <label class="form-label contact-us-label common-des">Subject</label>
                                  <input type="text" name="subject" class="form-control contact-us-input" placeholder="Subject">
                              </div>
                              <div class="col-sm-12 contact-form-col">
                                  <label class="form-label contact-us-label common-des">Message</label>
                                  <textarea type="text" name="message" class="form-control contact-us-input contact-us-textarea" placeholder="Name"></textarea>
                              </div>
                              <div class="form-group col-md-12 mb-4" style="display: none;">
                                  <label class="mb-1">Web Name</label>
                                  <input type="text" class="form-control" name="webname" placeholder="Name">
                              </div>
                              <input type="hidden" name="source_contact" value="contact us">
                              <div class="col-12 contact-btn-div">
                                  <button type="submit" class="common-btn common-btn2" title="Send">Send<span><i class="fi fi-rs-paper-plane"></i></span></button>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="col-lg-6 contact-us-info-col">
                <p class="contact-us-heading">Contact Information</p>
                <div class="contact-info-div contact-address-div">
                    <div class="contact-info-icon"> <i class="fi fi-rr-marker"></i></div>
                    <p class="contact-info-text common-des">BebySmile<br>
                        Five Greentree Centre, <br>
                        525 Route 73 North Ste 104,
                        Marlton, New Jersey 08053.
                    </p>
                </div>
                <a href="mailto:demosite@gmail.com" title="demosite@gmail.com" class="contact-info-div">
                    <div class="contact-info-icon"> <i class="fi fi-rr-envelopes"></i> </div>
                    <p class="contact-info-text common-des ">demosite@gmail.com</p>
                </a>
                <a href="tel:+919999999999" class="contact-info-div">
                    <div class="contact-info-icon"> <i class="fi fi-rr-mobile-notch"></i> </div>
                    <p class="contact-info-text common-des"> +91 99999 99999</p>
                </a>
                <a href="tel:+919999999999" class="contact-info-div">
                    <div class="contact-info-icon"> <i class="fi fi-rr-mobile-notch"></i> </div>
                    <p class="contact-info-text common-des">+91 99999 99999</p>
                </a>
                  <!-- <img src="./assets/images/icon-11.svg" alt="img5" class="contact-bg-img"> -->
              </div>
          </div>
      </div>
  </section>


<?php include 'include/footer.php' ?>
