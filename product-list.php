<?php include 'include/header.php'?>

<!-- <section class="breadcrumb-section">
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
</section> -->

<section class="product-list-section section-padding">
  <div class="container overflow-x-hidden">
    <a href="javascript:void(0)" class="filter-toggle-btn mobile" onclick="toggleSidebar()"><i class="fi fi-rr-cross-small"></i></a>
    <div class="product-filter-mdiv active" id="sidebar">
      <div class="product-filter-items">
        <h5 class="product-filter-title">Category</h5>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="newborn_baby">
          <label class="form-check-label" for="newborn_baby"> Newborn Baby </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="baby_boy">
          <label class="form-check-label" for="baby_boy"> Baby Boy </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="baby_girl">
          <label class="form-check-label" for="baby_girl"> Baby Girl </label>
        </div>
      </div>
      <hr class="product-filter-hr">
      <div class="product-filter-items">
        <h5 class="product-filter-title">Price</h5>
        <div class="range-slider">
          <div class="range-slider-mdiv">
            <input type="range" min="0" max="1000" value="100" id="minPrice" class="range-slider-input range-slider-input1">
            <input type="range" min="0" max="1000" value="900" id="maxPrice" class="range-slider-input">
          </div>
          <div class="price-display">
            <span id="minPriceValue">$100</span><span id="maxPriceValue">$900</span>
          </div>
        </div>
      </div>
      <hr class="product-filter-hr">
      <div class="product-filter-items">
        <h5 class="product-filter-title">Age</h5>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="0_6_months">
          <label class="form-check-label" for="0_6_months">0 - 6 Months</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="6_24_months">
          <label class="form-check-label" for="6_24_months">6 - 24 Months</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="2_4_years">
          <label class="form-check-label" for="2_4_years">2 - 4 Years</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="4_6_years">
          <label class="form-check-label" for="4_6_years">4 - 6 Years</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="8_10_years">
          <label class="form-check-label" for="8_10_years">8 - 10 Years</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="10_plus_years">
          <label class="form-check-label" for="10_plus_years">10+ Years</label>
        </div>
      </div>
      <hr class="product-filter-hr">
      <div class="product-filter-items">
        <h5 class="product-filter-title">Brands</h5>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="bebysmile">
          <label class="form-check-label" for="bebysmile">BebySmile</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="bebysmile">
          <label class="form-check-label" for="bebysmile">BebySmile</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="bebysmile">
          <label class="form-check-label" for="bebysmile">BebySmile</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="bebysmile">
          <label class="form-check-label" for="bebysmile">BebySmile</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="bebysmile">
          <label class="form-check-label" for="bebysmile">BebySmile</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="bebysmile">
          <label class="form-check-label" for="bebysmile">BebySmile</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="bebysmile">
          <label class="form-check-label" for="bebysmile">BebySmile</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="bebysmile">
          <label class="form-check-label" for="bebysmile">BebySmile</label>
        </div>
      </div>

    </div>
    <div class="product-list-mdiv sidebar-active" id="productList">
      <div class="product-list-div">
        <div class="product-list-header">
          <div class="product-list-header-left">
            <a href="javascript:void(0)" class="filter-toggle-btn" onclick="toggleSidebar()"> <span><i class="fi fi-rr-plus"></i> Filter</span></a>
            <select name="sort_by" class="form-select sort-by-select">
              <option value="">Sort By</option>
              <option value="">popularity</option>
              <option value="average rating">average rating</option>
              <option value="latest">latest</option>
              <option value="price: low to high">price: low to high</option>
              <option value="price: high to low">price: high to low</option>
            </select>
          </div>
          <div class="product-list-header-right">
            <p class="product-list-totle-items">Showing 1-9 of 55 results Sort by latest</p>
          </div>
        </div>
        <div class="row row-gap20">
          <div class="col-lg-4 col-6">
            <div class="product-item">
              <div class="product-floatleft-div">
                <div class="product-badges discount">10%</div>
                <!-- <div class="product-badges">New</div> -->
              </div>
              <div class="product-floatright-div">
                <a href="javascript:void(0)" class="like-product-icon">
                  <i class="fi fi-rr-heart"></i>
                </a>
              </div>
              <div class="product-img-div">
                <a href="javascript:void(0)" class="product-img-link">
                  <img src="./assets/images/product1.webp" alt="demo" class="product-img">
                </a>
                <div class="add-cart-div">
                  <a href="javascript:void(0)" class="add-cart-link2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="left" title="Buy Now"><i class="fi fi-rr-shopping-cart-add"></i></a>
                  <a href="javascript:void(0)" class="add-cart-link2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" title="Add To Cart"><i class="fi fi-rr-plus"></i></a>
                </div>
              </div>
              <div class="product-item-footer">
                <p class="product-category">Baby Boy</p>
                <a href="./product-detail" class="product-name">SnuggleNest Baby Blanket</a>
                <p class="product-price"> <span class="discount-price">₹30</span><del>₹40</del></p>
                <div class="product-rating-mdiv">
                  <i class="fi fi-rr-star product-rating-icon rated"></i>
                  <i class="fi fi-rr-star product-rating-icon rated"></i>
                  <i class="fi fi-rr-star product-rating-icon rated"></i>
                  <i class="fi fi-rr-star product-rating-icon rated"></i>
                  <i class="fi fi-rr-star product-rating-icon"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="product-item">
              <div class="product-floatleft-div">
                <div class="product-badges discount">10%</div>
                <!-- <div class="product-badges">New</div> -->
              </div>
              <div class="product-floatright-div">
                <a href="javascript:void(0)" class="like-product-icon">
                  <i class="fi fi-rr-heart"></i>
                </a>
              </div>
              <div class="product-img-div">
                <a href="javascript:void(0)" class="product-img-link">
                  <img src="./assets/images/product1.webp" alt="demo" class="product-img">
                </a>
                <div class="add-cart-div">
                  <a href="javascript:void(0)" class="add-cart-link2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="left" title="Buy Now"><i class="fi fi-rr-shopping-cart-add"></i></a>
                  <a href="javascript:void(0)" class="add-cart-link2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" title="Add To Cart"><i class="fi fi-rr-plus"></i></a>
                </div>
              </div>
              <div class="product-item-footer">
                <p class="product-category">Baby Boy</p>
                <a href="./product-detail" class="product-name">SnuggleNest Baby Blanket</a>
                <p class="product-price"> <span class="discount-price">₹30</span><del>₹40</del></p>
                <div class="product-rating-mdiv">
                  <i class="fi fi-rr-star product-rating-icon rated"></i>
                  <i class="fi fi-rr-star product-rating-icon rated"></i>
                  <i class="fi fi-rr-star product-rating-icon rated"></i>
                  <i class="fi fi-rr-star product-rating-icon rated"></i>
                  <i class="fi fi-rr-star product-rating-icon"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="product-item">
              <div class="product-floatleft-div">
                <div class="product-badges discount">10%</div>
                <!-- <div class="product-badges">New</div> -->
              </div>
              <div class="product-floatright-div">
                <a href="javascript:void(0)" class="like-product-icon">
                  <i class="fi fi-rr-heart"></i>
                </a>
              </div>
              <div class="product-img-div">
                <a href="javascript:void(0)" class="product-img-link">
                  <img src="./assets/images/product1.webp" alt="demo" class="product-img">
                </a>
                <div class="add-cart-div">
                  <a href="javascript:void(0)" class="add-cart-link2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="left" title="Buy Now"><i class="fi fi-rr-shopping-cart-add"></i></a>
                  <a href="javascript:void(0)" class="add-cart-link2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" title="Add To Cart"><i class="fi fi-rr-plus"></i></a>
                </div>
              </div>
              <div class="product-item-footer">
                <p class="product-category">Baby Boy</p>
                <a href="./product-detail" class="product-name">SnuggleNest Baby Blanket</a>
                <p class="product-price"> <span class="discount-price">₹30</span><del>₹40</del></p>
                <div class="product-rating-mdiv">
                  <i class="fi fi-rr-star product-rating-icon rated"></i>
                  <i class="fi fi-rr-star product-rating-icon rated"></i>
                  <i class="fi fi-rr-star product-rating-icon rated"></i>
                  <i class="fi fi-rr-star product-rating-icon rated"></i>
                  <i class="fi fi-rr-star product-rating-icon"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="product-item">
              <div class="product-floatleft-div">
                <div class="product-badges discount">10%</div>
                <!-- <div class="product-badges">New</div> -->
              </div>
              <div class="product-floatright-div">
                <a href="javascript:void(0)" class="like-product-icon">
                  <i class="fi fi-rr-heart"></i>
                </a>
              </div>
              <div class="product-img-div">
                <a href="javascript:void(0)" class="product-img-link">
                  <img src="./assets/images/product1.webp" alt="demo" class="product-img">
                </a>
                <div class="add-cart-div">
                  <a href="javascript:void(0)" class="add-cart-link2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="left" title="Buy Now"><i class="fi fi-rr-shopping-cart-add"></i></a>
                  <a href="javascript:void(0)" class="add-cart-link2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" title="Add To Cart"><i class="fi fi-rr-plus"></i></a>
                </div>
              </div>
              <div class="product-item-footer">
                <p class="product-category">Baby Boy</p>
                <a href="./product-detail" class="product-name">SnuggleNest Baby Blanket</a>
                <p class="product-price"> <span class="discount-price">₹30</span><del>₹40</del></p>
                <div class="product-rating-mdiv">
                  <i class="fi fi-rr-star product-rating-icon rated"></i>
                  <i class="fi fi-rr-star product-rating-icon rated"></i>
                  <i class="fi fi-rr-star product-rating-icon rated"></i>
                  <i class="fi fi-rr-star product-rating-icon rated"></i>
                  <i class="fi fi-rr-star product-rating-icon"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="product-item">
              <div class="product-floatleft-div">
                <div class="product-badges discount">10%</div>
                <!-- <div class="product-badges">New</div> -->
              </div>
              <div class="product-floatright-div">
                <a href="javascript:void(0)" class="like-product-icon">
                  <i class="fi fi-rr-heart"></i>
                </a>
              </div>
              <div class="product-img-div">
                <a href="javascript:void(0)" class="product-img-link">
                  <img src="./assets/images/product1.webp" alt="demo" class="product-img">
                </a>
                <div class="add-cart-div">
                  <a href="javascript:void(0)" class="add-cart-link2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="left" title="Buy Now"><i class="fi fi-rr-shopping-cart-add"></i></a>
                  <a href="javascript:void(0)" class="add-cart-link2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" title="Add To Cart"><i class="fi fi-rr-plus"></i></a>
                </div>
              </div>
              <div class="product-item-footer">
                <p class="product-category">Baby Boy</p>
                <a href="./product-detail" class="product-name">SnuggleNest Baby Blanket</a>
                <p class="product-price"> <span class="discount-price">₹30</span><del>₹40</del></p>
                <div class="product-rating-mdiv">
                  <i class="fi fi-rr-star product-rating-icon rated"></i>
                  <i class="fi fi-rr-star product-rating-icon rated"></i>
                  <i class="fi fi-rr-star product-rating-icon rated"></i>
                  <i class="fi fi-rr-star product-rating-icon rated"></i>
                  <i class="fi fi-rr-star product-rating-icon"></i>
                </div>
              </div>
            </div>
          </div>
          <!-- ----- no-record-found html  ----- -->
          <!-- <div class="no-record-found-div">
            <img src="./assets/images/icon-6.svg" alt="no-record-found" class="no-record-found-img">
            <h5 class="no-record-found-content">No Record <span>Found</span></h5>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  var sidebar = document.getElementById("sidebar");
  var productList = document.getElementById("productList");

  function toggleSidebar() {
    sidebar.classList.toggle("active");
    productList.classList.toggle("sidebar-active");
  }

  // Check the window width and remove classes if needed
  function checkWindowSize() {
    if (window.innerWidth < 1200) {
      sidebar.classList.remove("active");
      productList.classList.remove("sidebar-active");
    }
  }

  // Call the function on load and on resize
  window.addEventListener("resize", checkWindowSize);
  checkWindowSize(); // Initial check on page load

</script>

<script>
  const minPrice = document.getElementById("minPrice");
  const maxPrice = document.getElementById("maxPrice");
  const minPriceValue = document.getElementById("minPriceValue");
  const maxPriceValue = document.getElementById("maxPriceValue");

  function updatePriceDisplay() {
    let minVal = parseInt(minPrice.value);
    let maxVal = parseInt(maxPrice.value);

    // Prevent sliders from crossing each other
    if (minVal >= maxVal) {
      minPrice.value = maxVal - 1; // Ensures the min slider doesn't exceed max
      minVal = parseInt(minPrice.value);
    }

    if (maxVal <= minVal) {
      maxPrice.value = minVal + 1; // Ensures the max slider doesn't go below min
      maxVal = parseInt(maxPrice.value);
    }

    // Update displayed values
    minPriceValue.textContent = `$${minVal}`;
    maxPriceValue.textContent = `$${maxVal}`;
  }

  minPrice.addEventListener('input', updatePriceDisplay);
  maxPrice.addEventListener('input', updatePriceDisplay);

  // Initial update on load
  updatePriceDisplay();
</script>


<?php include 'include/footer.php' ?>
