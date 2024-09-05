<?php include 'include/header.php'?>

<section class="breadcrumb-section">
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
</section>

<section class="product-list-section section-padding">
  <div class="container-fluid">
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
    </div>
    <div class="product-list-mdiv sidebar-active" id="productList">
      <div class="product-list-div">
      <div class="product-list-header">
        <div class="product-list-header-left">
          <a href="javascript:void(0)" class="filter-toggle-btn" onclick="toggleSidebar()"> <span><i class="fi fi-rr-plus"></i> Filter</span></a>
          <select name="sort_by" class="form-select sort-by-select">
            <option value="">Sort By</option>
            <option value="">Sort by popularity</option>
            <option value="Sort by average rating">Sort by average rating</option>
            <option value="Sort by latest">Sort by latest</option>
            <option value="Sort by price: low to high">Sort by price: low to high</option>
            <option value="Sort by price: high to low">Sort by price: high to low</option>
          </select>
        </div>
        <div class="product-list-header-right">
          <p class="product-list-totle-items">20 item(s)</p>
        </div>
      </div>
      <div class="row row-gap20">
        <div class="col-3">
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
                <a href="javascript:void(0)" class="add-cart-link2"><i class="fi fi-rr-shopping-cart-add"></i></a>
                <a href="javascript:void(0)" class="add-cart-link2"><i class="fi fi-rr-plus"></i></a>
              </div>
            </div>
            <div class="product-item-footer">
              <p class="product-category">Baby Boy</p>
              <a href="javascript:void(0)" class="product-name">SnuggleNest Baby Blanket</a>
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
        <div class="col-3">
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
                <a href="javascript:void(0)" class="add-cart-link2"><i class="fi fi-rr-shopping-cart-add"></i></a>
                <a href="javascript:void(0)" class="add-cart-link2"><i class="fi fi-rr-plus"></i></a>
              </div>
            </div>
            <div class="product-item-footer">
              <p class="product-category">Baby Boy</p>
              <a href="javascript:void(0)" class="product-name">SnuggleNest Baby Blanket</a>
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
        <div class="col-3">
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
                <a href="javascript:void(0)" class="add-cart-link2"><i class="fi fi-rr-shopping-cart-add"></i></a>
                <a href="javascript:void(0)" class="add-cart-link2"><i class="fi fi-rr-plus"></i></a>
              </div>
            </div>
            <div class="product-item-footer">
              <p class="product-category">Baby Boy</p>
              <a href="javascript:void(0)" class="product-name">SnuggleNest Baby Blanket</a>
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
        <div class="col-3">
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
                <a href="javascript:void(0)" class="add-cart-link2"><i class="fi fi-rr-shopping-cart-add"></i></a>
                <a href="javascript:void(0)" class="add-cart-link2"><i class="fi fi-rr-plus"></i></a>
              </div>
            </div>
            <div class="product-item-footer">
              <p class="product-category">Baby Boy</p>
              <a href="javascript:void(0)" class="product-name">SnuggleNest Baby Blanket</a>
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
        <div class="col-3">
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
                <a href="javascript:void(0)" class="add-cart-link2"><i class="fi fi-rr-shopping-cart-add"></i></a>
                <a href="javascript:void(0)" class="add-cart-link2"><i class="fi fi-rr-plus"></i></a>
              </div>
            </div>
            <div class="product-item-footer">
              <p class="product-category">Baby Boy</p>
              <a href="javascript:void(0)" class="product-name">SnuggleNest Baby Blanket</a>
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
      </div>
      </div>
    </div>
  </div>
</section>

<script>
  function toggleSidebar() {
      var sidebar = document.getElementById("sidebar");
      var productList = document.getElementById("productList");

      sidebar.classList.toggle("active");
      productList.classList.toggle("sidebar-active");
    }
</script>


<?php include 'include/footer.php' ?>
