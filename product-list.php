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
    <div class="product-filter-mdiv" id="sidebar">
      <!-- Sidebar content --> filter
    </div>
    <div class="product-list-mdiv" id="productList">
      <div class="product-list-div">
      <a href="javascript:void(0)" class="closebtn" onclick="toggleSidebar()">&times;</a>
      <!-- Other content -->
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
