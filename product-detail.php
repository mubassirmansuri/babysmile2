<?php include 'include/header.php'?>

<section class="breadcrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="breadcrumb-item">
          <h1 class="breadcrumb-title">Product List</h1>
          <ul class="breadcrumb-ul">
            <li class="breadcrumb-li"> <a href="javascript:void(0)" class="breadcrumb-link">Home</a></li>
            <li class="breadcrumb-li"> <i class="fi fi-rr-angle-right"></i> </li>
            <li class="breadcrumb-li active">Product List</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="product-page-section section-padding">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="image1.jpg" class="img-fluid" alt="Image 1">
            </div>
            <div class="swiper-slide">
              <img src="image2.jpg" class="img-fluid" alt="Image 2">
            </div>
            <div class="swiper-slide">
              <img src="image3.jpg" class="img-fluid" alt="Image 3">
            </div>
            <div class="swiper-slide">
              <img src="image4.jpg" class="img-fluid" alt="Image 4">
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>

      <div class="col-md-8">
        <h2 class="product-title">100% Pure Cotton Jumpsuit</h2>

        <div class="price">
          <span class="old-price">$100.00</span>
          <span class="new-price">$80.00</span>
        </div>

        <p class="stock-info">
          Only <span class="text-danger">14 items</span> left in stock!
        </p>

        <div class="color-options mt-3">
          <p>Color: <strong>Black</strong></p>
          <button class="color-btn black"></button>
          <button class="color-btn gray"></button>
          <button class="color-btn pink"></button>
        </div>

        <div class="cart-quantity">
          <button class="minus">-</button>
          <input type="number" value="1" min="1" id="quantity">
          <button class="plus">+</button>
        </div>


        <div class="action-buttons mt-4">
          <button class="btn btn-success">Add to Cart</button>
          <button class="btn btn-primary">Buy Now</button>
        </div>

        <div class="payment-methods mt-4">
          <img src="payment-methods.png" alt="Payment Methods" class="img-fluid">
        </div>

        <div class="shipping-info mt-3">
          <p><i class="fa fa-shipping-fast"></i> Free worldwide shipping on all orders over $100</p>
          <p><i class="fa fa-clock"></i> Delivers in: 3-7 Working Days</p>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Swiper JS Initialization -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
        $(document).ready(function() {
      $('.plus').click(function() {
        var quantity = parseInt($('#quantity').val());
        $('#quantity').val(quantity + 1);
      });

      $('.minus').click(function() {
        var quantity = parseInt($('#quantity').val());
        if (quantity > 1) {
          $('#quantity').val(quantity - 1);
        }
      });
    });
  </script>

<?php include 'include/footer.php' ?>
