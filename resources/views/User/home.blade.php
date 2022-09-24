@extends('layout.user')

@section('title', 'Home | Sistem Informasi')

@section('container')

<section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url({{ asset('wow/assets/img/intro-carousel/bo.jpg') }})">
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

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Kec. Marpoyan Damai</h3>
          <p>
            Sejarah kecamatan marpoyan damai sejarah singkat dari kantor camat marpoyan damai, dimana kec. marpoyan damai
            terbentuk pada tahun 2003 atas pemekaran yang terjadi antara kecamatan tampan dan kecamatan sukajadi. terjadi
            pemekaran ini disebabkan untuk mempermudah warga atau masyarakat menyelesaikan berbagai macam administrasi seperti: 
            pembuatan surat-surat tanah, surat pengantar untuk surat nikah, dan lain sebagainya.
          </p>
        </header>

        <header class="section-header">
          <h3>Kel. Perhentian Marpoyan</h3>
          <p>
            Kelurahan perhentian marpoyan termasuk dalam wilayah kecamatan marpoyan kota pekanbaru. luas wilayah lebih
            kurang 14,265 km. penetapan kelurahan perhentian marpoyan terbentuk pada tahun 2014 yang mana pemisahan wilayah
            dari kecamatan bukit raya menjadi kecamatan marpoyan damai pada tahun 2014 lurah yang pertama kali menjabat adalah
            bapak Arizal. saat itu wilayah yang kini di sebut perhentian marpoyan belum begitu banyak dihuni oleh penduduk.
          </p>
        </header>


        <div class="row about-cols">

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="about-col">
              <div class="img">
                {{-- <img src="{{ asset('wow/assets/img/about-mission.jpg') }}" alt="" class="img-fluid"> --}}
              </div>
              <h2 class="title"><a href="#">Visi</a></h2>
              <p>
                Sejalan dengan visi dan misi kota pekanbaru yaitu "terwujudnya kota pekanbaru sebagai perdagangan dan jasa,
                pendidikan serta pusat budaya melayu". menuju masyarakat sejahtera berlandaskan iman dan takwa" untuk percepatan
                pencapaian visi kota pekanbaru 2021 di maksud, walikota dan wakil walikota pekanbaru terpilih periode 2017 dan 2022,
                menetapkan visi antara untuk lima tahun kepepimpinannya yaitu "Terwujudnya pekanbaru sebagai Smart City Madani".
              </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="about-col">
              <div class="img">
                {{-- <img src="{{ asset('wow/assets/img/about-plan.jpg') }}" alt="" class="img-fluid"> --}}
              </div>

              <h2 class="title"><a href="#">Misi</a></h2>
              <p>
                 1. Pelayanan rumah dan simpati
              </p>
              <p>
                2. Pelayanan cepat dan tepat
             </p>
             <p>
              3. Pelayanan transparan dan efisien 
           </p>
           <p>
            4. Pelayanan yang memiliki kepastian hukum
         </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="about-col">
              <div class="img">
                {{-- <img src="{{ asset('wow/assets/img/about-vision.jpg') }}" alt="" class="img-fluid"> --}}
              </div>
              <h2 class="title"><a href="#">Tujuan</a></h2>
              <p>
                "Menuju masyarakat sejahtera berlandaskan iman dan takwa untuk percepatan
                pencapaian visi kota pekanbaru 2021 di maksud"
              </p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container text-center" data-aos="zoom-in">
        <h3>Informasi akurat dan tepat</h3>
      </div>
      <p class="text-center">
        "Jadikan sistem informasi sebagai pusat layanan yang baik dalam kehidupan bermasyarakat" 
      </p>
    </section><!-- End Call To Action Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills">
      <div class="container" data-aos="fade-up">

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Kariyawan swasta<i class="val">80%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Pengusaha<i class="val">50%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Pedagang<i class="val">30%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Buruh<i class="val">20%</i></span>
            </div>
          </div>



        </div>

      </div>
    </section><!-- End Skills Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3></h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="{{ asset('wow/assets/img/ok.jpeg') }}" width="25%" class="testimonial-img" alt="">
            <h3>YANUARTI WIDYA ANGGARANI, S.STP</h3>
            <h4>Lurah Perhentian Marpoyan</h4>
          </div>
    
        </div>

      </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Kontak Resmi Kelurahan Perhentian Marpoyan</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Kel.Perhentian Marpoyan, Riau, Indonesia.</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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