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

<section class="checkout-section section-padding">
  <div class="container">
    <form action="post">
      <div class="row">
        <div class="col-6">
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
            <div class="col-12">
              <div class="form-group">
                <label class="form-label">Email</label>
                <input type="text" name="email" placeholder="Email" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
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
              <div class="col-12">
                <div class="form-group">
                  <label class="form-label">Email</label>
                  <input type="text" name="email" placeholder="Email" class="form-control">
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
      </div>
      <div class="row">
        <div class="col-12 cart-detail-div">
          <h4 class="common-main-title">Cart totals</h4>
          <div class="cart-table-div">
            <div class="cart-table-item">
              <div class="cart-title">Subtotal</div>
              <div>Subtotal</div>
            </div>
            <div class="cart-table-item">
              <div class="cart-title cart-product-title">Blue Shorts x 1</div>
              <div class="cart-product-title">₹174</div>
            </div>
            <div class="cart-table-item">
              <div class="cart-title cart-product-title">Pink Ponny x 4</div>
              <div class="cart-product-title">₹174</div>
            </div>
            <div class="cart-table-item">
              <div class="cart-title cart-product-title">Striped T-shirt x 1</div>
              <div class="cart-product-title">₹174</div>
            </div>
            <div class="cart-table-item">
              <div class="cart-title">Subtotal</div>
              <div>₹174</div>
            </div>
            <div class="cart-table-item">
              <div class="cart-title">Discount</div>
              <div>₹174</div>
            </div>
            <div class="cart-table-item align-items-md-center align-items-start flex-md-row flex-column">
              <div class="cart-title">Shipping</div>
              <div> No shipping options were found for <span class="text-secondary">954545, India.</span></div>
            </div>
            <div class="cart-table-item">
              <div class="cart-title">Delivery Charges</div>
              <div>₹6</div>
            </div>
            <div class="cart-table-item">
              <div class="cart-title">Total</div>
              <div>₹180</div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-50">
        <div class="col-12 py-10 border-bottom">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="payment_type" id="direct_bank_transfer">
            <label class="form-check-label" for="direct_bank_transfer">Direct Bank Transfer</label>
          </div>
        </div>
        <div class="col-12 py-10 border-bottom">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="payment_type" id="check_payments">
            <label class="form-check-label" for="check_payments">Check Payments</label>
          </div>
        </div>
        <div class="col-12 py-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="payment_type" id="cash_on_delivery">
            <label class="form-check-label" for="cash_on_delivery">Cash On Delivery</label>
          </div>
        </div>
        <div class="col-12">
          <a href="javascript:void(0)" class="common-btn common-btn2" title="Place Order">
            Place Order
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
