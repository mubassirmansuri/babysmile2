<?php include 'include/header.php'?>

<!-- <section class="breadcrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="breadcrumb-item">
          <h1 class="breadcrumb-title">Checkout</h1>
          <ul class="breadcrumb-ul">
            <li class="breadcrumb-li"> <a href="javascript:void(0)" class="breadcrumb-link">Home</a></li>
            <li class="breadcrumb-li"> <i class="fi fi-rr-angle-right"></i> </li>
            <li class="breadcrumb-li active">Checkout</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section> -->

<section class="checkout-section section-padding pb-0">
  <div class="container">
    <form action="post">
      <div class="row row-gap20">
        <div class="col-lg-6">
          <div class="row">
            <h3 class="common-main-title mb-30">Billing details</h3>
            <div class="col-6">
              <div class="form-group">
                <label class="form-label">First name</label>
                  <input type="text" name="first_name" placeholder="First Name" class="form-control">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label class="form-label">Last Name</label>
                <input type="text" name="last_name" placeholder="Last Name" class="form-control" value="">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="form-label">Company name (optional)</label>
                <input type="text" name="company_name" placeholder="Company name (optional)" class="form-control">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="form-label">Country / Region</label>
                <select name="country_region" class="form-select">
                  <option value="">Select</option>
                  <option value="india">India</option>
                  <option value="Australia">Australia</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="form-label">Street Address</label>
                <textarea name="street_address" class="form-control" placeholder="Street Address"></textarea>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="form-label">Town / City</label>
                <input type="text" name="town_city" placeholder="Town / City" class="form-control">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="form-label">State</label>
                <select name="state" class="form-select">
                  <option value="">Select State</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Maharashtra">Maharashtra</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="form-label">PIN Code</label>
                <input type="text" name="pin_code" placeholder="PIN Code" class="form-control">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" placeholder="Phone" class="form-control">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="form-label">Email Address</label>
                <input type="email" name="email_address" placeholder="Email Address" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row">
            <div class="d-flex">
              <h3 class="common-main-title mb-30 d-inline-block">
                <input class="form-check-input different-address-checkbox common-desc" type="checkbox" name="payment_type"
                id="cash_on_delivery"> Ship to a different address?
              </h3>
            </div>
            <div class="row different-address-row">
              <div class="col-6">
                <div class="form-group">
                  <label class="form-label">First name</label>
                  <input type="text" name="first_name" placeholder="First Name" class="form-control">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label class="form-label">Last Name</label>
                  <input type="text" name="last_name" placeholder="Last Name" class="form-control" value="">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label class="form-label">Company name (optional)</label>
                  <input type="text" name="company_name" placeholder="Company name (optional)" class="form-control">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label class="form-label">Country / Region</label>
                  <select name="country_region" class="form-select">
                    <option value="">Select</option>
                    <option value="india">India</option>
                    <option value="Australia">Australia</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label class="form-label">Street Address</label>
                  <textarea name="street_address" class="form-control" placeholder="Street Address"></textarea>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label class="form-label">Town / City</label>
                  <input type="text" name="town_city" placeholder="Town / City" class="form-control">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label class="form-label">State</label>
                  <select name="state" class="form-select">
                    <option value="">Select State</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Maharashtra">Maharashtra</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label class="form-label">PIN Code</label>
                  <input type="text" name="pin_code" placeholder="PIN Code" class="form-control">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label class="form-label">Phone</label>
                  <input type="text" name="phone" placeholder="Phone" class="form-control">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label class="form-label">Email Address</label>
                  <input type="email" name="email_address" placeholder="Email Address" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="form-label">Order Notes (optional)</label>
                <textarea name="order_notes" class="form-control" placeholder="Order Notes"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <a href="javascript:void(0)" class="common-btn common-btn2 mt-0" title="Update">
            Update
          </a>
        </div>
      </div>
    </form>
  </div>
</section>

<script src="https://js.stripe.com/v3/"></script>
<script>
  const fetchClientSecret = async () => {
      const clientSecret = await createCheckoutSession();
      return clientSecret;
    };

    const checkout = await stripe.initEmbeddedCheckout({
      fetchClientSecret,
    });
</script>

<?php include 'include/footer.php' ?>
