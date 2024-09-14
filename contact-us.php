<?php include 'include/header.php'?>

<section class="breadcrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="breadcrumb-item">
          <h1 class="breadcrumb-title">Blogs</h1>
          <ul class="breadcrumb-ul">
            <li class="breadcrumb-li"> <a href="javascript:void(0)" class="breadcrumb-link">Home</a></li>
            <li class="breadcrumb-li"> <i class="fi fi-rr-angle-right"></i> </li>
            <li class="breadcrumb-li active">Blogs</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-padding contact-us-section">
  <div class="container contact-us-container">
    <div class="conform-mess"></div>
          <div class="row contact-us-row">
              <div class="col-lg-6 contact-us-col">
                  <form action="https://www.tropicalfoodingredients.com/frontend/submitContact" id="submit-contact-form" method="post" accept-charset="utf-8" novalidate="novalidate">
                      <div class="contact-us-form-main">
                          <p class="contact-us-heading">Send Us a Message</p>
                          <div class="row form-fild-main">
                              <div class="col-sm-6 contact-form-col">
                                  <label class="form-label contact-us-label common-des">Name<span class="validation-mark">*</span></label>
                                  <input type="text" name="name" class="form-control contact-us-input" autocomplete="off">
                              </div>
                              <div class="col-sm-6 contact-form-col">
                                  <label class="form-label contact-us-label common-des">Mobile No.</label>
                                  <input type="text" name="mobile_no" class="form-control contact-us-input" onchange="onlyNumberWithSpaceAndPlusSign(this)" onkeyup="onlyNumberWithSpaceAndPlusSign(this)" minlength="8" maxlength="15" autocomplete="off">
                              </div>
                              <div class="col-sm-12 contact-form-col">
                                  <label class="form-label contact-us-label common-des">Email<span class="validation-mark">*</span></label>
                                  <input type="email" name="email" class="form-control contact-us-input">
                              </div>
                              <div class="col-sm-12 contact-form-col">
                                  <label class="form-label contact-us-label common-des">Subject</label>
                                  <input type="text" name="subject" class="form-control contact-us-input" autocomplete="off">
                              </div>
                              <div class="col-sm-12 contact-form-col">
                                  <label class="form-label contact-us-label common-des">Message</label>
                                  <textarea type="text" name="message" class="form-control contact-us-input contact-us-textarea" autocomplete="off"></textarea>
                              </div>
                              <div class="form-group col-md-12 mb-4" style="display: none;">
                                  <label class="mb-1">Web Name</label>
                                  <input type="text" class="form-control" name="webname" autocomplete="off">
                              </div>
                              <input type="hidden" name="source_contact" value="contact us">
                              <div class="col-12 contact-btn-div">
                                  <button type="submit" class="common-btn" title="Send">Send<span><i class="fi fi-rs-paper-plane"></i></span></button>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="col-lg-6 contact-us-info-col">
                  <p class="contact-us-heading">Contact Information</p>
                  <div class="contact-info-div contact-address-div">
                      <div class="contact-info-icon">
                          <img src="https://www.tropicalfoodingredients.com/assets/images/location-icon.svg" alt="breadcrumb-bg">
                      </div>
                      <p class="contact-info-text common-des">Tropical Food Ingredients LLC <br>
                          Five Greentree Centre, <br>
                          525 Route 73 North Ste 104,
                          Marlton, New Jersey 08053.
                  </p></div>
                  <a href="mailto:info@tropicalfoodingredients.com" title="info@tropicalfoodingredients.com" class="contact-info-div">
                      <div class="contact-info-icon">
                          <img src="https://www.tropicalfoodingredients.com/assets/images/mail-icon.svg" alt="breadcrumb-bg">
                      </div>
                      <p class="contact-info-text common-des ">info@tropicalfoodingredients.com</p>
                  </a>
                  <a href="tel: +17326983700" class="contact-info-div" title=" +1 (732) 698-3700">
                      <div class="contact-info-icon">
                          <img src="https://www.tropicalfoodingredients.com/assets/images/calling-icon.svg" alt="breadcrumb-bg">
                      </div>
                      <p class="contact-info-text common-des"> +1 (732) 698-3700</p>
                  </a>
                  <a target="_blank" href="https://api.whatsapp.com/send?phone=19024882588" class="contact-info-div" title="+1 (902) 488-2588">
                      <div class="contact-info-icon">
                          <img src="https://www.tropicalfoodingredients.com/assets/images/whatsapp.png" alt="breadcrumb-bg">
                      </div>
                      <p class="contact-info-text common-des">+1 (902) 488-2588</p>
                  </a>
                  <div class="contact-bg-div">
                      <img src="https://www.tropicalfoodingredients.com/assets/images/img5.png" alt="img5" class="contact-bg-img">
                  </div>
              </div>
          </div>
      </div>
  </section>


<?php include 'include/footer.php' ?>
