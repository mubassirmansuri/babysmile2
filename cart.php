<?php include 'include/header.php'?>

<!-- <section class="breadcrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="breadcrumb-item">
          <h1 class="breadcrumb-title">Cart</h1>
          <ul class="breadcrumb-ul">
            <li class="breadcrumb-li"> <a href="javascript:void(0)" class="breadcrumb-link">Home</a></li>
            <li class="breadcrumb-li"> <i class="fi fi-rr-angle-right"></i> </li>
            <li class="breadcrumb-li active">Cart</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section> -->

<section class="cart-section section-padding">
  <div class="container">
    <div class="row row-gap20">
      <div class="col-12">
        <table class="cart-table">
          <tr>
            <th class="cart-remove-th"></th>
            <th class="cart-product-detail-th">Product</th>
            <th class="cart-price-th">Price</th>
            <th class="cart-quantity-th">Quantity</th>
            <th class="cart-subtotal-th">Subtotal</th>
          </tr>
          <tr>
            <td class="cart-remove-td"><a href="javascript:void(0)"><i class="fi fi-rr-cross"></i></a></td>
            <td class="cart-product-detail-td">
              <div class="cart-product-div">
                <div class="cart-product-img-div">
                  <img src="./assets/images/product1.webp" alt="" class="cart-product-img">
                </div>
                <div class="cart-product-detail-div">
                  <h3 class="cart-product-name">100% Pure Cotton Jumpsuit</h3>
                  <div class="cart-price-div d-lg-none d-flex"><span class="old-price">₹120</span><span class="new-price">₹100</span></div>
                  <div class="cart-quantity d-md-none d-flex">
                    <button class="minus"><i class="fi fi-rr-minus"></i></button>
                    <input type="text" value="1" min="1" id="quantity">
                    <button class="plus"><i class="fi fi-rr-plus"></i></button>
                  </div>
                  <span class="cart-subtotal-price d-sm-none d-block"><span class="cart-subtotal-price-title">Total:</span> ₹100</span>
                </div>
              </div>
            </td>
            <td class="cart-price-td"><div class="cart-price-div"><span class="old-price">₹120</span><span class="new-price">₹100</span></div></td>
            <td class="cart-quantity-td">
              <div class="cart-quantity">
                <button class="minus"><i class="fi fi-rr-minus"></i></button>
                <input type="text" value="1" min="1" id="quantity">
                <button class="plus"><i class="fi fi-rr-plus"></i></button>
              </div>
            </td>
            <td class="cart-subtotal-td"><span class="cart-subtotal-price">₹100</span></td>
          </tr>
          <tr>
            <td class="cart-remove-td"><a href="javascript:void(0)"><i class="fi fi-rr-cross"></i></a></td>
            <td class="cart-product-detail-td">
              <div class="cart-product-div">
                <div class="cart-product-img-div">
                  <img src="./assets/images/product1.webp" alt="" class="cart-product-img">
                </div>
                <div class="cart-product-detail-div">
                  <h3 class="cart-product-name">100% Pure Cotton Jumpsuit</h3>
                  <div class="cart-price-div d-lg-none d-flex"><span class="old-price">₹120</span><span
                    class="new-price">₹100</span></div>
                  <div class="cart-quantity d-md-none d-flex">
                    <button class="minus"><i class="fi fi-rr-minus"></i></button>
                    <input type="text" value="1" min="1" id="quantity">
                    <button class="plus"><i class="fi fi-rr-plus"></i></button>
                  </div>
                  <span class="cart-subtotal-price d-sm-none d-block"><span class="cart-subtotal-price-title">Total:</span>
                    ₹100</span>
                </div>
              </div>
            </td>
            <td class="cart-price-td">
              <div class="cart-price-div"><span class="old-price">₹120</span><span class="new-price">₹100</span></div>
            </td>
            <td class="cart-quantity-td">
              <div class="cart-quantity">
                <button class="minus"><i class="fi fi-rr-minus"></i></button>
                <input type="text" value="1" min="1" id="quantity">
                <button class="plus"><i class="fi fi-rr-plus"></i></button>
              </div>
            </td>
            <td class="cart-subtotal-td"><span class="cart-subtotal-price">₹100</span></td>
          </tr>
        </table>
      </div>
      <div class="col-12">
        <div class="cart-btn-mdiv">
          <input type="text" class="form-control">
          <a href="javascript:void(0)" class="common-btn common-btn2 mt-0" title="Apply Coupon">Apply Coupon</a>
          <a href="javascript:void(0)" class="common-btn common-btn2 ms-md-auto mt-0" title="Update Cart">Update Cart</a>
        </div>
      </div>
      <div class="col-12 cart-detail-div">
        <h4 class="common-main-title">Cart totals</h4>
        <div class="cart-table-div">
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
            <div>
                No shipping options were found for <span class="text-secondary">954545, India.</span>
                <div class="mt-15">
                  <form action="post">
                    <div class="mb-15">
                      <select name="country" class="form-select">
                        <option value="">Select Country</option>
                        <option value="India">India</option>
                        <option value="Australia">Australia</option>
                      </select>
                    </div>
                    <div class="mb-15">
                      <select name="state" class="form-select">
                        <option value="">Select State</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Maharashtra">Maharashtra</option>
                      </select>
                    </div>
                    <div class="mb-15">
                      <input type="text" name="city" placeholder="city" class="form-control">
                    </div>
                    <div>
                      <input type="text" name="pincode" placeholder="Pincode" class="form-control">
                    </div>
                    <button type="submit" class="common-btn common-btn2">Update</button>
                  </form>
                </div>
            </div>
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
      <div class="col-12">
        <a href="javascript:void(0)" title="Proceed to checkout" class="common-btn common-btn2">Proceed to checkout</a>
      </div>
    </div>
  </div>
</section>



<?php include 'include/footer.php' ?>
