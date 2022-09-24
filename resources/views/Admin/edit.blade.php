@extends('layouts.admin')

@section('title', 'Edit Data RT/RW | Sistem Informasi')

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
          
          
          <div class="container">
            <a href="{{ route('Admin.show') }}" class="btn btn-info">Kembali</a>

            <br><br>
            @if (session('status'))
            <div class="alert alert-warning">
              {{ session('status')}}
            </div>
             @endif
            
            <form method="post" action="{{ route('Admin.edit.update', $rw->id) }}">
                @method('patch')
                @csrf
            <div class="form-group"><br>
              <label for="rw">RW</label>
              <select id="rw" name="rw" value="{{ $rw->rw }}" class="form-control custom-select">
                  <option selected disabled>Pilih RW</option>
                  <option {{  $rw->rw == 'RW 1' ? 'selected' : '' }} value="RW 1">
                  RW 1
                  </option>
                  <option {{  $rw->rw == 'RW 2' ? 'selected' : '' }} value="RW 2">
                  RW 2
                  </option>
                  <option {{  $rw->rw == 'RW 3' ? 'selected' : '' }} value="RW 3">
                  RW 3
                  </option>
                  <option {{  $rw->rw == 'RW 4' ? 'selected' : '' }} value="RW 4">
                  RW 4
                  </option>
                  <option {{  $rw->rw == 'RW 5' ? 'selected' : '' }} value="RW 5">
                  RW 5
                  </option>
                  <option {{  $rw->rw == 'RW 6' ? 'selected' : '' }} value="RW 6">
                  RW 6
                  </option>
                  <option {{  $rw->rw == 'RW 7' ? 'selected' : '' }} value="RW 7">
                  RW 7
                  </option>
                  <option {{  $rw->rw == 'RW 8' ? 'selected' : '' }} value="RW 8">
                  RW 8
                  </option>
                  <option {{  $rw->rw == 'RW 9' ? 'selected' : '' }} value="RW 9">
                  RW 9
                  </option>
                  <option {{  $rw->rw == 'RW 10' ? 'selected' : '' }} value="RW 10">
                  RW 10
                  </option>
                  <option {{  $rw->rw == 'RW 11' ? 'selected' : '' }} value="RW 11">
                  RW 11
                  </option>
              </select>
          </div>
            

            <div class="mb-3">
              <label for="rw1" class="form-label">Ketua RW</label>
              <input type="text" class="form-control" name="rw1" id="rw1" value="{{ $rw->rw1 }}">
            </div>
          
            <div class="mb-3">
              <label for="rt1" class="form-label">Ketua RT 1</label>
              <input type="text" class="form-control" name="rt1" id="rt1" value="{{ $rw->rt1 }}">
            </div>

            <div class="mb-3">
              <label for="rt2" class="form-label">Ketua RT 2</label>
              <input type="text" class="form-control" name="rt2" id="rt2" value="{{ $rw->rt2 }}">
            </div>

            <div class="mb-3">
              <label for="rt3" class="form-label">Ketua RT 3</label>
              <input type="text" class="form-control" name="rt3" id="rt3" value="{{ $rw->rt3 }}">
            </div>

            <div class="mb-">
              <label for="rt4" class="form-label">Ketua RT 4</label>
              <input type="text" class="form-control" name="rt4" id="rt4" value="{{ $rw->rt4 }}">
            </div>

            <div class="mb-3">
              <label for="rt5" class="form-label">Ketua RT 5</label>
              <input type="text" class="form-control" name="rt5" id="rt5" value="{{ $rw->rt5 }}">
            </div>

            <div class="mb-3">
              <label for="rt6" class="form-label">Ketua RT 6</label>
              <input type="text" class="form-control" name="rt6" id="rt6" value="{{ $rw->rt6 }}">
            </div>

            <div class="mb-3">
              <label for="rt7" class="form-label">Ketua RT 7</label>
              <input type="text" class="form-control" name="rt7" id="rt7" value="{{ $rw->rt7 }}">
            </div>

            <div class="mb-3">
              <label for="rt8" class="form-label">Ketua RT 8</label>
              <input type="text" class="form-control" name="rt8" id="rt8" value="{{ $rw->rt8 }}">
            </div>

            <div class="mb-3">
              <label for="rt9" class="form-label">Ketua RT 9</label>
              <input type="text" class="form-control" name="rt9" id="rt9" value="{{ $rw->rt9 }}">
            </div>
            
            <div class="mb-3">
              <label for="jlhrw" class="form-label">Jumlah RW</label>
              <input type="text" class="form-control" name="jlhrw" id="jlhrw" value="{{ $rw->jlhrw }}">
            </div>
            
            <div class="mb-3">
              <label for="jlhrt" class="form-label">Jumlah RT</label>
              <input type="text" class="form-control" name="jlhrt" id="jlhrt" value="{{ $rw->jlhrt }}">
            </div>
            
            <button type="submit" class="btn btn-info btn-lg">Update</button>

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