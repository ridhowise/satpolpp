<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Desa morongge selatan satu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/LOGO_KOTA_BITUNG_SULAWESI_UTARA.png" rel="icon">
  <!-- <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

  <!-- =======================================================
  * Template Name: Mentor - v4.1.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html">Mentor</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      
      <a href="/" class="logo me-auto"><img src="/assets/img/LOGO_KOTA_BITUNG_SULAWESI_UTARA.png" alt="" class="img-fluid"> Desa morongge selatan satu</a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a  href="/">Beranda</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/sejarah">Sejarah</a></li>
              <li><a href="/arti-lambang">Arti lambang web desa</a></li>
              <li><a href="#">Geografi</a></li>
             
            </ul>
          </li> -->

          <!-- <li  class="dropdown"><a href="#"><span></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @foreach ($Kategoriz as $layanan)
              <li><a href="/layanans/{{$layanan->id}}/{{$layanan->slug}}">{{$layanan->nama}}</a></li>
              @endforeach
              


            </ul>
          </li> -->
          
          <!-- <li><a href="/contact">Contact</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <a href="courses.html" class="get-started-btn">Get Started</a> -->

    </div>
  </header><!-- End Header -->

  

  
	@yield('content')

   <!-- ======= Footer ======= -->
   <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Web Desa</h4>
        <p>

          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
        </p>
      </div>

      {{-- <div class="col-lg-2 col-md-6 footer-links">
        <h4>Beranda</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Galeri</a></li>
        </ul>
      </div> --}}

      <!-- <div class="col-lg-3 col-md-6 footer-links">
        <h4>Tentang</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Sejarah</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Arti Lambang web desa</a></li>
        </ul>
      </div> -->
    
      <!-- <div class="col-lg-3 col-md-6 footer-links">
        <h4>Fitur dan Layanan</h4>
        <ul>
          @foreach ($Kategoriz as $layanan)
            <li><i class="bx bx-chevron-right"></i> <a href="/layanans/{{$layanan->id}}/{{$layanan->slug}}">{{$layanan->nama}}</a></li>  
          @endforeach
        </ul>
      </div> -->
     

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <!-- <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div> -->
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="/assets/vendor/aos/aos.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/php-email-form/validate.js"></script>
<script src="/assets/vendor/purecounter/purecounter.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="/assets/js/main.js"></script>

</body>

</html>