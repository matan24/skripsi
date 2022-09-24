@extends('layout.user')

@section('title', 'Galeri | Sistem Informasi')

@section('container')

<section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url({{ asset('wow/assets/img/intro-carousel/po.jpg') }})">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Kelurahan Perhentian Marpoyan</h2>
                <p class="animate__animated animate__fadeInUp"> </p>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Intro Section -->

     <!-- ======= Portfolio Section ======= -->
     <section id="portfolio" class="section-bg">
        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h3 class="section-title">Galeri Kegiatan Masyarakat</h3>
          </header>
  
          <div class="row" data-aos="fade-up" data-aos-delay="100"">
        <div class=" col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
            </ul>
          </div>
        </div>
  
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
  
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('wow/assets/img/portfolio/abb.jpeg') }}" class="img-fluid" alt="">
                <a href="{{ asset('wow/assets/img/portfolio/abb.jpeg') }}" data-lightbox="portfolio" data-title="App 1" class="link-preview"><i class="ion ion-eye"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
  
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kegiatan Vaksinasi Masal  </a></h4>
                <p>Di RT 007 RW 01 kelurahan perhentian marpoyan</p>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('wow/assets/img/portfolio/as.jpeg') }}" class="img-fluid" alt="">
                <a href="{{ asset('wow/assets/img/portfolio/as.jpeg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Web 3"><i class="ion ion-eye"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
  
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penyuluhan Tanaman Pangan</a></h4>
                <p>Bersama Mahasiswa KKN 18A Umri dan Anggota KWT BERTUAH</p>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('wow/assets/img/portfolio/bb.jpg') }}" class="img-fluid" alt="">
                <a href="{{ asset('wow/assets/img/portfolio/bb.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="App 2"><i class="ion ion-eye"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
  
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Bank Sampah RW 007</a></h4>
                <p>Bersama KKN 18A Umri</p>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('wow/assets/img/portfolio/ad.jpeg') }}" class="img-fluid" alt="">
                <a href="{{ asset('wow/assets/img/portfolio/ad.jpeg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Card 2"><i class="ion ion-eye"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
  
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Kegiatan Vaksinasi Masal </a></h4>
                <p>di pesantren al mujahadah RW 11 kelurahan perhentian marpoyan</p>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('wow/assets/img/portfolio/a.jpeg') }}" class="img-fluid" alt="">
                <a href="{{ asset('wow/assets/img/portfolio/a.jpeg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Web 2"><i class="ion ion-eye"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
  
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Rumah Bibit</a></h4>
                <p>Di RW 007</p>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('wow/assets/img/portfolio/aer.jpg') }}" class="img-fluid" alt="">
                <a href="{{ asset('wow/assets/img/portfolio/aer.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="App 3"><i class="ion ion-eye"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
  
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Hidroponik</a></h4>
                <p>Di RW 007</p>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('wow/assets/img/portfolio/lurah.jpg') }}" class="img-fluid" alt="">
                <a href="{{ asset('wow/assets/img/portfolio/lurah.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Card 1"><i class="ion ion-eye"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
  
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penyerahan Aplikasi</a></h4>
                <h4><a href="portfolio-details.html">Sistem Informasi Kel. Perhentian</a></h4>
                <p>Oleh KKN 18A UMRI</p>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('wow/assets/img/portfolio/hh33.jpeg') }}" class="img-fluid" alt="">
                <a href="{{ asset('wow/assets/img/portfolio/hh33.jpeg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Card 3"><i class="ion ion-eye"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
  
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Pengecatan Tong Sampah</a></h4>
                <p>KKN 17A UMRI</p>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('wow/assets/img/portfolio/hh4.jpeg') }}" class="img-fluid" alt="">
                <a href="{{ asset('wow/assets/img/portfolio/hh4.jpeg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Web 1"><i class="ion ion-eye"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
  
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Penanaman Tanaman Obat</a></h4>
                <h4><a href="portfolio-details.html">Di RW 009</a></h4>
                <p>Bersama Warga Dan KKN 17A UMRI </p>
              </div>
            </div>
          </div>
  
        </div>
  
        </div>
      </section><!-- End Portfolio Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
  
            <div class="col-lg-3 col-md-6 footer-info">
              <h3>Sistem Informasi</h3>
              <h4>Kelurahan Perhentian Marpoyan</h4>
              <p></p>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
                <li><i class="ion-ios-arrow-right"></i> <a href="#">Galeri</a></li>
                <li><i class="ion-ios-arrow-right"></i> <a href="#">Persyaratan Surat Menyurat</a></li>
                <li><i class="ion-ios-arrow-right"></i> <a href="#">Data RT/RW</a></li>
                <li><i class="ion-ios-arrow-right"></i> <a href="#">Saran Masyarakat</a></li>
              </ul>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-contact">
              <h4>Contact Us</h4>
              <p>
                Kelurahan<br>
                Perhentian Marpoyan<br>
                Riau, Indonesia<br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
  
              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
  
            </div>
  
            <div class="col-lg-3 col-md-6 footer-newsletter">
              <h4>Hyperlink</h4>
              <a href="https://umri.ac.id/home/lang/id">> Universitas Muhammadiyah Riau</a> <br>
              <a href="http://informatika.umri.ac.id/">> Informatika Umri</a> <br>
              <a href="#">> KKN Umri Kel.18 A</a> <br>
              <a href="https://www.pekanbaru.go.id/">> Portal Resmi Kota Pekanbaru</a> <br>
              <a href="http://diskominfotiksan.pekanbaru.go.id/Home">> Dinas Kominfo Kota Pekanbaru</a> <br>
              <a href="https://www.pekanbaru.go.id/p/opd/dinas-komunikasi-informatika-statistik-dan-persandian">> Dinas Komunikasi Informatika Statistik dan Persandian</a>
              <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Kunjungi">
              </form>
            </div>
  
          </div>
        </div>
      </div>
  
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>Sistem Informasi Kelurahan Perhentian Marpoyan</strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer><!-- End Footer -->
  
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

  

@endsection