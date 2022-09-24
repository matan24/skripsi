<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('wow/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('wow/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{ asset('wow/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('wow/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('wow/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('wow/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('wow/assets/vendor/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('wow/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('wow/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('wow/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('wow/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('wow/assets/css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

  <!-- =======================================================
  * Template Name: BizPage - v3.1.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.html">Sistem Informasi</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="{{ route('home') }}">Home</a></li>
              <li><a href="{{ route('Admin.info1') }}">Input Informasi</a></li>
              <li><a href="{{ route('Admin.info.nampil') }}">Informasi</a></li>
              <li><a href="{{ route('Admin.rw') }}">Input Data RT/RW</a></li>
              <li><a href="{{ route('Admin.dataa') }}">Data Saran Masyarakat</a></li>
              <li><a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="bi bi-person-fill">Logout</i>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form></a></a></li>
            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->



  @yield('container')

  <!-- Vendor JS Files -->
  <script src="{{ asset('wow/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('wow/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('wow/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('wow/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('wow/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('wow/assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('wow/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('wow/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('wow/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('wow/assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('wow/assets/js/main.js') }}"></script>

</body>

</html>