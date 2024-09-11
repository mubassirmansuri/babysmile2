<?php include 'include/header.php'?>

<section class="breadcrumb-section">
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
</section>

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
              <td class="cart-remove-td"><i class="fi fi-rr-cross"></i></td>
              <td class="cart-product-detail-td">
                <div class="cart-product-div">
                  <div class="cart-product-img-div">
                    <img src="./assets/images/product1.webp" alt="" class="cart-product-img">
                  </div>
                  <h3 class="cart-product-name">100% Pure Cotton Jumpsuit</h3>
                </div>
              </td>
              <td class="cart-price-td">₹100</td>
              <td class="cart-quantity-td">
                <div class="cart-quantity">
                  <button class="minus"><i class="fi fi-rr-minus"></i></button>
                  <input type="text" value="1" min="1" id="quantity">
                  <button class="plus"><i class="fi fi-rr-plus"></i></button>
                </div>
              </td>
              <td class="cart-subtotal-td">₹100</td>
            </tr>
            <tr>
              <td class="cart-remove-td"><i class="fi fi-rr-cross"></i></td>
              <td class="cart-product-detail-td">
                <div class="cart-product-div">
                  <div class="cart-product-img-div">
                    <img src="./assets/images/product1.webp" alt="" class="cart-product-img">
                  </div>
                  <h3 class="cart-product-name">100% Pure Cotton Jumpsuit</h3>
                </div>
              </td>
              <td class="cart-price-td">₹100</td>
              <td class="cart-quantity-td">
                <div class="cart-quantity">
                  <button class="minus"><i class="fi fi-rr-minus"></i></button>
                  <input type="text" value="1" min="1" id="quantity">
                  <button class="plus"><i class="fi fi-rr-plus"></i></button>
                </div>
              </td>
              <td class="cart-subtotal-td">₹100</td>
            </tr>
        </table>
      </div>
      <div class="col-12">
        <div class="cart-btn-mdiv">
          <input type="text" class="form-control">
          <a href="javascript:void(0)" class="common-btn common-btn2 mt-0" title="Apply Coupon">Apply Coupon</a>
          <a href="javascript:void(0)" class="common-btn common-btn2 ms-auto mt-0" title="Update Cart">Update Cart</a>
        </div>
      </div>
      <div class="col-12 cart-detail-div">
        <h4 class="common-main-title">Cart totals</h4>
        <table class="cart-table">
          <tr>
            <td class="cart-title">Subtotal</td>
            <td>₹174</td>
          </tr>
          <tr>
            <td class="cart-title">Shipping</td>
            <td></td>
          </tr>
          <tr>
            <td class="cart-title">Delivery Charges</td>
            <td>₹6</td>
          </tr>
          <tr>
            <td class="cart-title">Total</td>
            <td>₹180</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</section>



<?php include 'include/footer.php' ?>
