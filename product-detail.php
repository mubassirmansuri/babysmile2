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
      <div class="col-md-7 common-left-div">
        <div class="row product-slider-row">
          <div class="col-3">
            <div thumbsSlider="" class="swiper product-slider-thumbs">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="./assets/images/product1.webp" />
                </div>
                <div class="swiper-slide">
                  <img src="./assets/images/product2.webp" />
                </div>
                <div class="swiper-slide">
                  <img src="./assets/images/product3.webp" />
                </div>
                <div class="swiper-slide">
                  <img src="./assets/images/product4.webp" />
                </div>
                <div class="swiper-slide">
                  <img src="./assets/images/product5.webp" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-9 position-relative float-slider-col">
            <div class="swiper product-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide" data-image="./assets/images/product1.webp" data-scale="1.5">
                  <div class="swiper-slide-photo"></div>
                </div>
                <div class="swiper-slide" data-image="./assets/images/product2.webp" data-scale="1.5">
                  <div class="swiper-slide-photo"></div>
                </div>
                <div class="swiper-slide" data-image="./assets/images/product3.webp" data-scale="1.5">
                  <div class="swiper-slide-photo"></div>
                </div>
                <div class="swiper-slide" data-image="./assets/images/product4.webp" data-scale="1.5">
                  <div class="swiper-slide-photo"></div>
                </div>
                <div class="swiper-slide" data-image="./assets/images/product5.webp" data-scale="1.5">
                  <div class="swiper-slide-photo"></div>
                </div>
              </div>
            </div>
            <div class="common-slider-arrow-div float-slider-arrow">
              <a href="javascript:void(0)" class="common-arrow product-prew-arrow"><i class="fi fi-rr-angle-left"></i></a>
              <a href="javascript:void(0)" class="common-arrow product-next-arrow"><i class="fi fi-rr-angle-right"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-5">
        <h2 class="product-title">100% Pure Cotton Jumpsuit</h2>

        <div class="product-price-mdiv">
          <span class="old-price">₹100.00</span>
          <span class="new-price">₹80.00</span>
        </div>

        <p class="product-stock-info">
          Only <span class="text-danger">14 items</span> left in stock!
        </p>

        <div class="color-options-mdiv mt-15">
          <p class="color-options-title">Color:</p>
          <div class="color-options-div">
            <input type="radio" name="color" id="green" />
            <label for="green"><span class="bg-success"></span></label>
          </div>
          <div class="color-options-div">
            <input type="radio" name="color" id="blue" />
            <label for="blue"><span class="bg-primary"></span></label>
          </div>
          <div class="color-options-div">
            <input type="radio" name="color" id="pink" />
            <label for="pink"><span class="bg-secondary"></span></label>
          </div>
        </div>
        <div class="size-options-mdiv mt-20">
          <p class="size-options-title">size:</p>
          <div class="size-options-div">
            <input type="radio" name="size" id="xs" />
            <label for="xs"><span>XS</span></label>
          </div>
          <div class="size-options-div">
            <input type="radio" name="size" id="s" />
            <label for="s"><span>S</span></label>
          </div>
          <div class="size-options-div">
            <input type="radio" name="size" id="m" />
            <label for="m"><span>M</span></label>
          </div>
        </div>
        <div class="cart-quantity-mdiv">
          <div class="cart-quantity">
            <button class="minus"><i class="fi fi-rr-minus"></i></button>
            <input type="text" value="1" min="1" id="quantity">
            <button class="plus"><i class="fi fi-rr-plus"></i></button>
          </div>
          <a href="javascript:void(0)" title="Add to Cart" class="common-btn common-btn2 mt-0">Add to Cart</a>
          <a href="javascript:void(0)" title="Lick" class="like-product"><i class="fi fi-rr-heart"></i></a>
        </div>
        <div class="action-buttons mt-4 w-100">
          <a href="javascript:void(0)" title="Buy Now" class="common-btn common-btn2 mt-0 w-100 buy-new">Buy Now</a>
        </div>

        <div class="payment-methods-mdiv mt-4">
          <img src="./assets/images/paypal.png" alt="Payment Methods" class="payment-methods-img">
          <img src="./assets/images/visa.png" alt="Payment Methods" class="payment-methods-img">
          <img src="./assets/images/mastercard.png" alt="Payment Methods" class="payment-methods-img">
        </div>

        <div class="shipping-info mt-3">
          <p><i class="fi fi-rr-shipping-fast"></i> Free shipping on all orders over $100</p>
          <p><i class="fi fi-rr-clock"></i> Delivers in: 3-7 Working Days</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 product-detail-col">
        <ul class="nav nav-pills product-detail-tabul" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-Description-tab" data-bs-toggle="pill" data-bs-target="#pills-Description" type="button"
            role="tab" aria-controls="pills-Description" aria-selected="true">Description</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
            role="tab" aria-controls="pills-profile" aria-selected="false">Lorem ipsum</button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-Description" role="tabpanel" aria-labelledby="pills-Description-tab" tabindex="0">
            <p class="common-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, repellat ratione! Non ullam nulla molestiae ducimus incidunt culpa eligendi magni.</p>
            <p class="common-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quae sit quod eaque reiciendis ad voluptate, labore nam facere eum eveniet consectetur laudantium ut incidunt est iure adipisci? Nobis, at.</p>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...
          </div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...
          </div>
          <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Swiper JS Initialization -->
  <script>
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

  <script>
    var swiper = new Swiper(".product-slider-thumbs", {
      loop: true,
      spaceBetween: 20,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
      direction: "vertical",
    });
    var swiper2 = new Swiper(".product-slider", {
      loop: true,
      zoom: true,
      direction: "vertical",
      navigation: {
        nextEl: ".product-next-arrow",
        prevEl: ".product-prew-arrow",
      },
      thumbs: {
        swiper: swiper,
      },
    });

  // document.querySelectorAll('.swiper-slide').forEach(slide => {
  //   const photo = slide.querySelector('.swiper-slide-photo');
  //   const zoomFactor = parseFloat(slide.getAttribute('data-scale')); // Retrieve zoom level from data attribute

  //   // Set background image for each photo container
  //   photo.style.backgroundImage = `url(${slide.getAttribute('data-image')})`;

  //   slide.addEventListener('mousemove', (e) => {
  //     const rect = slide.getBoundingClientRect();
  //     const x = e.clientX - rect.left;
  //     const y = e.clientY - rect.top;

  //     const xPercent = (x / rect.width) * 100;
  //     const yPercent = (y / rect.height) * 100;

  //     photo.style.transform = `scale(${zoomFactor}) translate(-${xPercent}%, -${yPercent}%)`;
  //   });

  //   slide.addEventListener('mouseleave', () => {
  //     photo.style.transform = 'scale(1)'; // Reset scale on mouse leave
  //   });
  // });


    $('.swiper-slide')
      // tile mouse actions
      .on('mouseover', function () {
        $(this).children('.swiper-slide-photo').css({ 'transform': 'scale(' + $(this).attr('data-scale') + ')' });
      })
      .on('mouseout', function () {
        $(this).children('.swiper-slide-photo').css({ 'transform': 'scale(1)' });
      })
      .on('mousemove', function (e) {
        $(this).children('.swiper-slide-photo').css({ 'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 + '%' });
      })
      // tiles set up
      .each(function () {
        $(this)
          // add a photo container
          .append('<div class="photo"></div>')
          .children('.swiper-slide-photo').css({ 'background-image': 'url(' + $(this).attr('data-image') + ')' });
      })

  </script>

<?php include 'include/footer.php' ?>
