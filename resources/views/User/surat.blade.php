@extends('layout.user')

@section('title', 'Persyaratan Surat | Sistem Informasi')

@section('container')

<section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url({{ asset('wow/assets/img/intro-carousel/i.jpg') }})">
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

      <!-- ======= About Us Section ======= -->
      <section id="about">
        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h3>Syarat Pengurusan Surat Menyurat</h3>
            <p>Pastikan anda melengkapi persyaratan dalam mengurus surat menyurat</p>
          </header>
  
          <div class="row about-cols">
  
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="about-col">
                <div class="img">
                  <img src="assets/img/about-mission.jpg" alt="" class="img-fluid">
                </div>
                <h2 class="title"><a href="#">Kartu Tanda Penduduk ( KTP )</a></h2>
                <p>
                  1. Telah berusia 17 tahun
                </p>
                <p>
                  2. Surat pengantar dari pihak Rukun Tetangga (RT) dan Rukun Warga (RW)
                </p>
                <p>
                  3. Fotokopi Kartu Keluarga (KK)
                </p>
                <p>
                  4. Fotokopi Akta Kelahiran
                </p>
                <p>
                  5. Surat Keterangan Pindah yang diterbitkan oleh pemerintah Kabupaten/Kota dari daerah asal
                </p>
                <p>
                  6. Surat Keterangan Datang dari Luar Negeri yang diterbitkan oleh Instansi Pelaksana bagi WNI yang datang dari Luar Negeri karena pindah.
                </p>
                <p>
                  7. Datang langsung untuk di foto (E-KTP) atau melampirkan pas foto terbaru ukuran 3×4 sebanyak 2 lembar (KTP Lama)
                </p>
              </div>
            </div>
  
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="about-col">
                <div class="img">
                  <img src="assets/img/about-plan.jpg" alt="" class="img-fluid">
                </div>
                <h2 class="title"><a href="#">Kartu Keluarga ( KK )</a></h2>
                <p>
                  1. Meminta surat pengantar pembuatan kartu keluarga baru di Ketua RT setempat
                </p>
                <p>
                  2. Membawa surat pengantar tersebut ke Ketua RW dan meminta stempel RW
                </p>
                <p>
                  3. Membawa surat pengantar tersebut dan persyaratan lainnya ke kantor kelurahan, lalu mengisi formulir permohonan pembuatan KK baru yang tersedia di kantor kelurahan
                </p>
                <p>
                  4. Petugas kelurahan akan mengecek kelengkapan berkas-berkas yang menjadi syarat pembuatan KK baru
                </p>
                <p>
                  5. Jika sudah lengkap, Lurah akan menandatangani formulir permohonan pembuatan KK baru tersebut
                </p>
                <p>
                  6. Berkas yang sudah ditandatangan Lurah kemudian kamu teruskan ke Kecamatan
                </p>
              </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="about-col">
                <div class="img">
                  <img src="assets/img/about-plan.jpg" alt="" class="img-fluid">
                </div>
                <h2 class="title"><a href="#">Penambahan Anggota Keluarga (Kelahiran)</a></h2>
                <p>
                  1. Surat pengantar dari RT atau RW
                </p>
                <p>
                  2. Kartu keluarga (KK) yang lama
                </p>
                <p>
                  3. Surat keterangan kelahiran anggota keluarga baru yang akan ditambahkan ke dalam kartu keluarga nanti
                </p>
              </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="about-col">
                <div class="img">
                  <img src="assets/img/about-plan.jpg" alt="" class="img-fluid">
                </div>
                <h2 class="title"><a href="#">Pengurangan Anggota Keluarga (Kematian)</a></h2>
                <p>
                  1. Surat pengantar dari RT atau RW daerah setempat
                </p>
                <p>
                  2. Kartu keluarga (KK) yang lama
                </p>
                <p>
                  3. Surat keterangan kematian (untuk yang meninggal dunia)
                </p>
                <p>
                  4. Jika pengurangan terjadi karena adanya anggota keluarga yang pindah, maka surat keterangan kematian diganti dengan surat keterangan pindah (untuk anggota keluarga yang pindah)
                </p>
              </div>
            </div>
  
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="about-col">
                <div class="img">
                  <img src="assets/img/about-vision.jpg" alt="" class="img-fluid">
                </div>
                <h2 class="title"><a href="#">Akte Kelahiran</a></h2>
                <p>
                  1. Surat Keterangan Kelahiran dari Kelurahan
                </p>
                <p>
                  2. Asli dan Fotokopi Surat Keterangan Kelahiran dari dokter/bidan/penolong kelahiran/Nakhoda Kapal Laut atau Pilot Pesawat Terbang dengan memperlihatkan aslinya Surat Nikah/Akta Perkawinan orang tua
                </p>
                <p>
                  3. Fotokopi KK dan KTP orang tua
                </p>
                <p>
                  4. Nama dan identitas saksi pelaporan kelahiran
                </p>
                <p>
                  5. Persetujuan Kepala Dinas/Suku Dinas. dalam hal pelaporannya melebihi 60 (enam puluh) hari sejak tanggal kelahirannya
                </p>
              </div>
            </div>


            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="about-col">
                <div class="img">
                  <img src="assets/img/about-vision.jpg" alt="" class="img-fluid">
                </div>
                <h2 class="title"><a href="#">Akte Kematian</a></h2>
                <p>
                  1. Surat Keterangan Kematian dari kelurahan
                </p>
                <p>
                  2. Surat Keterangan Kematian dari rumah sakit, puskesmas atau visum dokter
                </p>
                <p>
                  3. Asli dan Fotokopi KK dan KTP almarhum dan pemohon
                </p>
                <p>
                  4. Asli dan Fotokopi Kutipan Akta Perkawinan/akta nikah, dalam hal yang meninggal sudah kawin
                </p>
                <p>
                  5. Asli dan Fotokopi Kutipan Akta Kelahiran yang meninggal
                </p>
              </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="about-col">
                <div class="img">
                  <img src="assets/img/about-plan.jpg" alt="" class="img-fluid">
                </div>
                <h2 class="title"><a href="#">Pindah RT/RW/Kelurahan</a></h2>
                <p>
                  1. Harus mempunyai surat pengantar. Surat pengantar merupakan surat yang berisi pengantar pindah domisili ke tempat tertentu. Seseorang yang hendak pindah harus mendapatkan surat pengantar yang ditandangani oleh ketua RT/ RW bersangkutan.
                </p>
                <p>
                  2. Setelah itu, seseorang tersebut harus pergi ke kantor kelurahan/ desa. Dengan membawa surat pengantar pindah domisili, KK, KTP serta pas foto.
                </p>
                <p>
                  3. Setelah itu, minta pihak Kelurahan/ Desa untuk membuat surat pindah domisili ke tempat tertentu. Surat pindah ini harus ditandangani oleh kepala desa/ lurah.
                </p>
                <p>
                  4. Tahap terakhir adalah ke kantor kecamatan. Disini akan ada proses penghapusan domisili dari KK lama menjadi KK baru. Setelah proses ini selesai, maka surat pindah dapat digunakan untuk membuat KK baru dengan domisili baru.
                </p>
              </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="about-col">
                <div class="img">
                  <img src="assets/img/about-plan.jpg" alt="" class="img-fluid">
                </div>
                <h2 class="title"><a href="#">Pindah Domisili Satu Kecamatan</a></h2>
                <p>
                  1. Harus membuat surat pengantar pindah domisili. Surat ini harus dibuat dan ditandatangani oleh kepala RT/ RW bersangkutan
                </p>
                <p>
                  2. Setelah itu, lanjut ke kantor desa/ lurah. Di kelurahan/ desa mintalah untuk dibuat surat pengantar pindah domisili yang ditandatangani oleh kepala desa/ lurah. Hal ini sebagai pengantar di kecamatan.
                </p>
                <p>
                  3. Kemudian, bawa surat pengantar dari desa/ lurah beserta dokumen seperti KK, KTP dan pas foto ke kecamatan. Mintalah pihak kecamatan untuk membuat surat pindah domisili ke tempat tertentu.
                </p>
                <p>
                  4. Dan tahap terakhir, mintalah pihak kecamatan untuk melakukan perbaikan alamat/ pencoretan dari alamat lama menjadi alamat baru di Kartu Keluarga. Hal ini dilakukan untuk membuat KK baru dan alamat baru sesuai surat pindah domisili.
                </p>
              </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="about-col">
                <div class="img">
                  <img src="assets/img/about-plan.jpg" alt="" class="img-fluid">
                </div>
                <h2 class="title"><a href="#">SKCK Baru</a></h2>
                <p>
                  1. Fotokopi KTP (Kartu Tanda Penduduk)  atau Surat Izin Mengemudi (SIM). Bawa KTP/SIM asli sebagai bukti
                </p>
                <p>
                  2. Fotokopi KK (Kartu Keluarga) 
                </p>
                <p>
                  3. Fotokopi Akta Kelahiran / Surat Kenal Lahir / Ijazah Terakhir
                </p>
                <p>
                  4. Fotokopi Paspor (Bagi yang punya paspor)
                </p>
                <p>
                  5. Pas foto 4x6 berlatar/background merah sebanyak 6 lembar. Berpakaian sopan, tampak muka dan bagi yang mengenakan jilbab, pas foto harus tampak muka secara utuh
                </p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End About Us Section -->

      

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