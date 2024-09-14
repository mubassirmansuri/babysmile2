<?php include 'include/header.php'?>

<section class="breadcrumb-section">
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
</section>

<section class="blog-section section-padding">
  <div class="container">
    <form action="post">
      <div class="row">
        <div class="col-6">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label class="form-label">Email</label>
                <div class="position-relative input-icon-div">
                  <i class="fi fi-rr-user input-icon"></i>
                  <input type="email" name="email" placeholder="Email" class="form-control" value="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>

<?php include 'include/footer.php' ?>
