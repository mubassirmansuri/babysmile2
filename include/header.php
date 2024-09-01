<head>
  <title>BabySmile</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./assets/images/favicon.png" type="image/x-icon">

  <!-- font  -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&family=Comfortaa:wght@300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet"> -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&family=Pangolin&display=swap" rel="stylesheet">

  <!-- font  -->

  <link rel="stylesheet" href="./assets/css/uicons/uicons-regular-rounded.css">
  <link href="./assets/css/uicons/uicons-brands/uicons-brands.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css">
  <!-- <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-brands/css/uicons-brands.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-solid-rounded/css/uicons-solid-rounded.css'> -->
  <link rel="stylesheet" href="./assets/css/app.css">
  <link rel="stylesheet" href="./assets/css/font.css">
  <!-- js -->
  <script src="./assets/js/jquery-3.7.1.min.js"></script>
  <script src="./assets/js/bootstrap.min.js"></script>
  <script src="./assets/js/swiper-bundle.min.js"></script>
  <script src="./assets/js/custom.js"></script>
</head>

<body>
  <header>
    <div class="header-top-mdiv">
      <div class="container">
        <div class="row header-top-row">
          <ul class="header-menu-ul">
            <li class="header-menu-li"><a href="javascript:void(0)" class="header-menu-link">Shipping</a></li>
            <li class="header-menu-li"><a href="javascript:void(0)" class="header-menu-link">FAQ</a></li>
            <li class="header-menu-li"><a href="./contact.html" class="header-menu-link">Contact</a></li>
            <li class="header-menu-li"><a href="javascript:void(0)" class="header-menu-link">Track Order</a></li>
          </ul>
          <div class="header-social-div">
            <a href="javascript:void(0)" class="header-social-link">
              <i class="fi fi-brands-facebook"></i>
            </a>
            <a href="javascript:void(0)" class="header-social-link">
              <i class="fi fi-brands-instagram"></i>
            </a>
            <a href="javascript:void(0)" class="header-social-link">
              <i class="fi fi-brands-twitter-alt"></i>
            </a>
            <a href="javascript:void(0)" class="header-social-link">
              <i class="fi fi-brands-linkedin"></i>
            </a>
            <a href="javascript:void(0)" class="header-social-link">
              <i class="fi fi-brands-youtube"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle-mdiv">
      <div class="container">
        <div class="row header-middle-row">
          <div class="logo-div order-lg-1 order-1">
            <img src="./assets/images/logo.png" alt="logo" class="logo-img">
          </div>
          <div class="header-search-div mx-auto order-lg-2 order-3">
            <form action="./" method="GET" class="header-search search-field border-circle">
              <button class="btn header-search-btn" type="submit">
                <i class="fi fi-rr-search"></i>
              </button>
              <input class="header-search-input" type="text" name="search-keyword" placeholder="Search products...">
              <div class="search-category-div">
                <select name="category" class="form-select">
                  <option value="">Select</option>
                  <option value="men">Men</option>
                  <option value="women">Women</option>
                </select>
              </div>
            </form>
          </div>
          <div class="cart-icon-div order-lg-3 order-2">
            <a href="javascript:void(0)" class="cart-icon-link">
              <i class="fi fi-rr-user"></i>
            </a>
            <a href="javascript:void(0)" class="cart-icon-link">
              <i class="fi fi-rr-heart"></i>
            </a>
            <a href="javascript:void(0)" class="cart-icon-link">
              <i class="fi fi-rr-shopping-cart-add"></i>
              <span class="cart-badge">3</span>
            </a>
            <a href="javascript:void(0)" class="login-link" title="Login / Sing Up" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Login / Sing Up </a>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom-mdiv">
      <nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding: 0px;">
        <!-- Container wrapper -->
        <div class="container">
          <!-- Toggle button -->
          <button class="navbar-toggler px-0" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarExampleOnHover" aria-controls="navbarExampleOnHover" aria-expanded="false"
          aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <!-- Collapsible wrapper -->
          <div class="collapse navbar-collapse" id="navbarExampleOnHover">
            <!-- Left links -->
            <ul class="navbar-nav me-auto ps-lg-0" style="padding-left: 0.15rem">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Home</a>
              </li>
              <!-- Navbar dropdown -->
              <li class="nav-item dropdown position-static">
                <a class="nav-link dropdown-toggle d-flex d-lg-none" href="javascript:void(0)" id="navbarDropdown"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                <a class="nav-link dropdown-toggle d-lg-flex d-none" href="javascript:void(0)">Products</a>
                <!-- Dropdown menu -->
                <div class="dropdown-menu w-100 mt-0 megamenu-mdiv" aria-labelledby="navbarDropdown">
                  <div class="container">
                    <div class="row my-4">
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <h4 class="megamenu-title">Baby <span>Boy</span></h4>
                        <div class="megamenu-link-div">
                          <a href="javascript:void(0)" class="megamenu-link">Lorem ipsum</a>
                          <a href="javascript:void(0)" class="megamenu-link">Dolor sit</a>
                          <a href="javascript:void(0)" class="megamenu-link">Amet
                            consectetur</a>
                          <a href="javascript:void(0)" class="megamenu-link">Cras justo
                            odio</a>
                          <a href="javascript:void(0)" class="megamenu-link">Adipisicing
                            elit</a>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <h4 class="megamenu-title">Baby <span>Girl</span></h4>
                        <div class="megamenu-link-div">
                          <a href="javascript:void(0)" class="megamenu-link">Explicabo
                            voluptas</a>
                          <a href="javascript:void(0)" class="megamenu-link">Perspiciatis
                            quo</a>
                          <a href="javascript:void(0)" class="megamenu-link">Cras justo
                            odio</a>
                          <a href="javascript:void(0)" class="megamenu-link">Laudantium
                            maiores</a>
                          <a href="javascript:void(0)" class="megamenu-link">Provident
                            dolor</a>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                        <h4 class="megamenu-title">Newborn <span>Baby</span></h4>
                        <div class="megamenu-link-div">
                          <a href="javascript:void(0)" class="megamenu-link">Iste quaerato</a>
                          <a href="javascript:void(0)" class="megamenu-link">Cras justo
                            odio</a>
                          <a href="javascript:void(0)" class="megamenu-link">Est iure</a>
                          <a href="javascript:void(0)" class="megamenu-link">Praesentium</a>
                          <a href="javascript:void(0)" class="megamenu-link">Laboriosam</a>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h4 class="megamenu-title">All <span>Products</span></h4>
                        <div class="megamenu-link-div">
                          <a href="javascript:void(0)" class="megamenu-link">Cras justo
                            odio</a>
                          <a href="javascript:void(0)" class="megamenu-link">Saepe</a>
                          <a href="javascript:void(0)" class="megamenu-link">Vel alias</a>
                          <a href="javascript:void(0)" class="megamenu-link">Sunt doloribus</a>
                          <a href="javascript:void(0)" class="megamenu-link">Cum dolores</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown position-static">
                <a class="nav-link dropdown-toggle d-flex d-lg-none" href="javascript:void(0)" id="navbarDropdown"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">category</a>
                <a class="nav-link dropdown-toggle d-lg-flex d-none" href="javascript:void(0)">category</a>
                <!-- Dropdown menu -->
                <div class="dropdown-menu w-100 mt-0 megamenu-mdiv" aria-labelledby="navbarDropdown">
                  <div class="container">
                    <div class="row my-4">
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="megamenu-link-div">
                          <a href="javascript:void(0)" class="megamenu-category-link">
                            <img src="./assets/images/baby-boy.jpg" alt="" class="megamenu-category-img">
                            <p class="megamenu-category-title">Baby Boy</p>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="megamenu-link-div">
                          <a href="javascript:void(0)" class="megamenu-category-link">
                            <img src="./assets/images/baby-boy.jpg" alt="" class="megamenu-category-img">
                            <p class="megamenu-category-title">Baby Boy</p>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="megamenu-link-div">
                          <a href="javascript:void(0)" class="megamenu-category-link">
                            <img src="./assets/images/baby-boy.jpg" alt="" class="megamenu-category-img">
                            <p class="megamenu-category-title">Baby Boy</p>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="megamenu-link-div">
                          <a href="javascript:void(0)" class="megamenu-category-link">
                            <img src="./assets/images/baby-boy.jpg" alt="" class="megamenu-category-img">
                            <p class="megamenu-category-title">Baby Boy</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown position-static">
                <a class="nav-link dropdown-toggle d-flex d-lg-none" href="javascript:void(0)" id="navbarDropdown"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">Mega menu</a>
                <a class="nav-link dropdown-toggle d-lg-flex d-none" href="javascript:void(0)">Mega menu</a>
                <!-- Dropdown menu -->
                <div class="dropdown-menu w-100 mt-0 megamenu-mdiv" aria-labelledby="navbarDropdown">
                  <div class="container">
                    <div class="row my-4">
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="megamenu-link-div">
                          <a href="javascript:void(0)" class="megamenu-link">Lorem ipsum</a>
                          <a href="javascript:void(0)" class="megamenu-link">Dolor sit</a>
                          <a href="javascript:void(0)" class="megamenu-link">Amet
                            consectetur</a>
                          <a href="javascript:void(0)" class="megamenu-link">Cras justo
                            odio</a>
                          <a href="javascript:void(0)" class="megamenu-link">Adipisicing
                            elit</a>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="megamenu-link-div">
                          <a href="javascript:void(0)" class="megamenu-link">Explicabo
                            voluptas</a>
                          <a href="javascript:void(0)" class="megamenu-link">Perspiciatis
                            quo</a>
                          <a href="javascript:void(0)" class="megamenu-link">Cras justo
                            odio</a>
                          <a href="javascript:void(0)" class="megamenu-link">Laudantium
                            maiores</a>
                          <a href="javascript:void(0)" class="megamenu-link">Provident
                            dolor</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown position-static">
                <a class="nav-link dropdown-toggle d-flex d-lg-none" href="javascript:void(0)" id="navbarDropdown"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">Mega menu</a>
                <a class="nav-link dropdown-toggle d-lg-flex d-none" href="javascript:void(0)">Mega menu</a>
                <!-- Dropdown menu -->
                <div class="dropdown-menu w-100 mt-0 megamenu-mdiv" aria-labelledby="navbarDropdown">
                  <div class="container">
                    <div class="row my-4">
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="megamenu-link-div">
                          <a href="javascript:void(0)" class="megamenu-link">Lorem ipsum</a>
                          <a href="javascript:void(0)" class="megamenu-link">Dolor sit</a>
                          <a href="javascript:void(0)" class="megamenu-link">Amet
                            consectetur</a>
                          <a href="javascript:void(0)" class="megamenu-link">Cras justo
                            odio</a>
                          <a href="javascript:void(0)" class="megamenu-link">Adipisicing
                            elit</a>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="megamenu-link-div">
                          <a href="javascript:void(0)" class="megamenu-link">Explicabo
                            voluptas</a>
                          <a href="javascript:void(0)" class="megamenu-link">Perspiciatis
                            quo</a>
                          <a href="javascript:void(0)" class="megamenu-link">Cras justo
                            odio</a>
                          <a href="javascript:void(0)" class="megamenu-link">Laudantium
                            maiores</a>
                          <a href="javascript:void(0)" class="megamenu-link">Provident
                            dolor</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown position-static">
                <a class="nav-link dropdown-toggle d-flex d-lg-none" href="javascript:void(0)" id="navbarDropdown"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">Mega menu</a>
                <a class="nav-link dropdown-toggle d-lg-flex d-none" href="javascript:void(0)">Mega menu</a>
                <!-- Dropdown menu -->
                <div class="dropdown-menu w-100 mt-0 megamenu-mdiv" aria-labelledby="navbarDropdown">
                  <div class="container">
                    <div class="row my-4">
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="megamenu-link-div">
                          <a href="javascript:void(0)" class="megamenu-link">Lorem ipsum</a>
                          <a href="javascript:void(0)" class="megamenu-link">Dolor sit</a>
                          <a href="javascript:void(0)" class="megamenu-link">Amet
                            consectetur</a>
                          <a href="javascript:void(0)" class="megamenu-link">Cras justo
                            odio</a>
                          <a href="javascript:void(0)" class="megamenu-link">Adipisicing
                            elit</a>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="megamenu-link-div">
                          <a href="javascript:void(0)" class="megamenu-link">Explicabo
                            voluptas</a>
                          <a href="javascript:void(0)" class="megamenu-link">Perspiciatis
                            quo</a>
                          <a href="javascript:void(0)" class="megamenu-link">Cras justo
                            odio</a>
                          <a href="javascript:void(0)" class="megamenu-link">Laudantium
                            maiores</a>
                          <a href="javascript:void(0)" class="megamenu-link">Provident
                            dolor</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <!-- Left links -->
          </div>
          <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
      </nav>
    </div>
  </header>