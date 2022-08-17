<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurant</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
   <!-- Bootstrap CSS v5.0.2 -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+9779840284945</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Sun-Sat: 8:00 AM - 23:00 PM</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <div class="logo me-auto">
        <h1><a href="/">Restaurant</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="#hero">Menu</a></li>
          <li><a class="nav-link scrollto" href="#food">Food</a></li>
          <li><a class="nav-link scrollto" href="{{url('/contactus')}}">Contact</a></li>
          <li> 
          @if (Route::has('login'))
                <div class="navbar order-last order-lg-0">
                    @auth
                      <li> 

                      <x-app-layout>

                      </x-app-layout>

                      </li>
                    @else
                      <li>  <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                         <li>   <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif

          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(images/cancoke.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Cold</span>Drinks</h2>
                <div>
                  <a href="colddrinks" class="btn-menu animate__animated animate__fadeInUp scrollto">View</a>
                  <a href="{{url('/register')}}" class="btn-book animate__animated animate__fadeInUp scrollto">Order Now</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(images/chickenpizza.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>fast</span>food</h2>
               <div>
                  <a href="fastfood" class="btn-menu animate__animated animate__fadeInUp scrollto">View</a>
                  <a href="{{url('/register')}}" class="btn-book animate__animated animate__fadeInUp scrollto">Order Now</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(images/momo.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Our</span>Specials</h2>
                 <div>
                  <a href="special" class="btn-menu animate__animated animate__fadeInUp scrollto">View</a>
                  <a href="{{url('/register')}}"class="btn-book animate__animated animate__fadeInUp scrollto">Order Now</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
  

        <!-- fOOD list Section Starts Here -->
    <section id="food" class="food-menu">
      <div class="container">
          <h2 class="text-center">Food List</h2>

          <div class="food-menu-box">
              <div class="food-menu-img">
                  <img src="images/menu-burger.jpg" class="img-responsive img-curve">
              </div>

              <div class="food-menu-desc">
                  <h4> Veg Burger</h4>
                  <p class="food-price">Rs 180</p>
                  <br>
              </div>
          </div>

          <div class="food-menu-box">
              <div class="food-menu-img">
                  <img src="images/menu-pizza.jpg"  class="img-responsive img-curve">
              </div>

              <div class="food-menu-desc">
                  <h4> Veg Pizza</h4>
                  <p class="food-price">Rs 250</p>
                  <br>

              </div>
          </div>

          <div class="food-menu-box">
              <div class="food-menu-img">
                  <img src="images/menu-momo.jpg"  class="img-responsive img-curve">
              </div>

              <div class="food-menu-desc">
                  <h4> Veg Momo</h4>
                  <p class="food-price">Rs 110</p>
                 
                  <br>

              </div>
          </div>

          <div class="food-menu-box">
              <div class="food-menu-img">
                  <img src="images/chickenchowmin.jpg"  class="img-responsive img-curve">
              </div>

              <div class="food-menu-desc">
                  <h4>chicken Chowmin</h4>
                  <p class="food-price">RS 130</p>
                  <br>

              </div>
          </div>


          <div class="clearfix"></div>

          

      </div>
  </section>
  <!-- fOOD list Section Ends Here -->
  




    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p> You can stay with us and fell free to contact us</p>
         </div>
      </div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?q=sinamangal&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Sinamangal<br>kathmandu</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>Sunday-Saturday:<br>7:00 AM - 2300 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>roshanghimire333@gmail.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+9779840284945<br>+977987444742</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <footer id="footer">
    <div class="container">
      <h3>Resturant</h3>
      <p>You can stay with us through social media also</p>
      <div class="social-links">
        <a href="https://twitter.com/" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
        <!-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
       
       
                 
                  
               
      </div>
  </footer>
  
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>