@extends('layout.user')

@section('title', 'Ubah Data Masyarakat | Sistem Informasi')

@section('container')

<section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url({{ asset('wow/assets/img/intro-carousel/woke.jpg') }})">
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

       <!-- ======= Contact Section ======= -->
       <section id="contact" class="section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h3>Layanan Saran</h3>
            <p>"Layanan saran ini sangat berguna untuk seluruh masyarakat Kelurahan Perhentian Marpoyan dimana 
              masyarakat dapat menyampaikan sarannya ke Kelurahan tentang bagaimana kondisi dan situasi yang 
              di alami masyarakat".
            </p>
          </div>
  
    
          <div class="form">
              <a href="{{ route('User.infosaran.detail') }}" class="btn btn-secondary btn-lg">Kembali</a>
              <br><br>
            <form method="post" action="{{ route('User.infosaran.ubah.update', $saran->id) }}">
              @method('patch')
              @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" value="{{ $saran->nama }}" class="form-control" id="nama"/>
                  <div class="validate"></div>
                </div>

                <div class="form-group col-md-6">
                  <label for="rt">RT/RW</label>
                  <input type="text" name="rt"  value="{{ $saran->rt }}" class="form-control" id="rt"/>
                  <div class="validate"></div>
                </div>

                
                <div class="form-group col-md-6">
                  <label for="alamat">Alamat</label>
                  <input type="text" name="alamat" value="{{ $saran->alamat }}" class="form-control" id="alamat"/>
                  <div class="validate"></div>
                </div>


                <div class="form-group col-md-6">
                  <label for="no">No HP/WA</label>
                  <input type="text" class="form-control" name="no" id="no"  value="{{ $saran->no }}"/>
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-group">
                <label for="saran">Saran</label>
                <textarea type="text" class="form-control" name="saran" id="saran" rows="5" >{{ $saran->saran }}</textarea>
                <div class="validate"></div>
              </div>

              @if (session('status'))
              <div class="alert alert-success">
                {{ session('status')}}
              </div>
               @endif
                <div class="text-center"><button type="submit" class="btn btn-info btn-lg">Update Saran</button></div>
                
            </form>
          </div>
  
        </div>
      </section><!-- End Contact Section -->

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