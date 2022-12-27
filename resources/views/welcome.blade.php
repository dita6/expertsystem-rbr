
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <meta name="title" content="Sistem Pakar Deteksi Dini Gangguan Kesehatan Mental Pada Mahasiswa" />
    <meta name="description" content="Sistem informasi yang berisi pengetahuan seorang pakar sehingga dapat digunakan untuk konsultasi" />
    <meta name="keywords" content="sistem, pakar, metode, forward, chaining, pendeteksi, penyakit, umum" />
    <!-- Website Title -->
    <title>Sistem Pakar</title>
    <!-- Favicon Website -->
    <link rel="icon" href="{{ asset('backend/assets/img/logo.png')}}" alt="logo" />
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/main.css')}}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Sweet Alert 2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
  </head>
  <body>
    
    <!-- Home Start -->
    <section class="home">
      <div class="container">
        <!-- Header Start -->
        <header>
          <nav class="navbar navbar-expand-lg navbar-light pt-lg-3">
            <div class="container">
              <div class="navbar-text fs-5 fw-bold">SistemPakar.</div>
              <div class="navbar-brand">
                <img src="{{ asset('backend/assets/img/logo.png')}}" alt="logo_only" loading="lazy" />
              </div>
              <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="navbar">
                <span class="iconify" data-icon="heroicons-outline:menu-alt-3" data-width="35"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbar">
                <div class="navbar-nav ms-auto">
                  <a href="#" class="nav-link me-lg-3">Home</a>
                  <a href="#about" class="nav-link me-lg-3">Tentang</a>
                  <a href="#contact" class="nav-link me-lg-3">Kontak</a>
                  <a href="#step" class="nav-link me-lg-3">Panduan</a>
                  <a href="{{ route('register') }}" class="btn btn-primary mb-0 mt-4 mt-sm-0">Daftar</a>
                </div>
              </div>
            </div>
          </nav>
        </header>
        <!-- Header End -->
        <!-- Main Start -->
        <div class="row">
          <div class="col-sm-6 ps-4 ps-lg-0">
            <h1 class="fw-bold mt-lg-5">
              Sistem Pakar Deteksi Dini<br />
              Gangguan Kesehatan Mental Mahasiswa
            </h1>
            <p class="mt-lg-4">Deteksi dini gangguan kesehatan mental anda disni</p>
            <a href="{{ route('login') }}" class="btn btn-primary mt-2">Coba Deteksi</a>
          </div>
          <div class="col-sm-6">
            <img src="{{ asset('backend/assets/img/bg1.png')}}" alt="doctor-woman" loading="lazy" />
          </div>
        </div>
        <div class="banner col-10 mx-auto position-relative p-2 mb-3 mb-lg-0">
          <div class="container">
            <div class="row text-center">
              <div class="col-4" style="border-right: 0.1em solid #f7f9fe">
                <h1>3+</h1>
                <p>Gangguan Kesehatan Mental</p>
              </div>
              <div class="col-4" style="border-right: 0.1em solid #f7f9fe">
                <h1>20+</h1>
                <p>Gejala</p>
              </div>
              <div class="col-4">
                <h1>5+</h1>
                <p>Pengguna</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Main End -->
      </div>
    </section>
    <!-- Home End -->
    <!-- About Start -->
    <section class="about" id="about">
      <div class="container pt-5 pb-5">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-sm-6">
            <img class="pb-3 pb-lg-0" src="{{ asset('backend/assets/img/bg.png')}}" alt="start" loading="lazy" />
          </div>
          <div class="col-sm-6">
            <div class="container p-3 p-lg-0 text">
              <h1 class="fw-bold mb-3">Sistem Pakar Metode Rule Based Reasoning</h1>
              <p>Sistem informasi yang berisi pengetahuan seorang pakar sehingga dapat digunakan untuk melakukan deteksi dini</p>
              <p class="mt-1">Rule Based Reasoning merupakan salah satu metode dari sistem pakar yang berarti metode ini digunakan untuk menelusuri kesimpulan berdasarkan aturan dari pakar</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About End -->
    <!-- Step Start -->
    <section class="step" id="step">
      <div class="container pt-5 pb-5">
        <h1 class="fw-bold mb-3">
          Cari Tahu Gangguan Kesehatan Mental <br />
          Berdasarkan Gejalamu
        </h1>
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-sm-4">
            <span class="iconify icon mb-2" data-icon="bi:card-list" data-width="45"></span>
            <h5 class="fw-bold">Daftar Akun</h5>
            <p>Kunjungi laman daftar, isi data anda dengan lengkap dan benar</p>
          </div>
          <div class="col-sm-4">
            <span class="iconify icon mb-2" data-icon="akar-icons:chat-question" data-width="45"></span>
            <h5 class="fw-bold">Pilih Pernyataan</h5>
            <p>Akan muncul pernyataan terkait gejala, anda tinggal jawab sesuai gejala yang sedang anda alami selama 1 minggu terakhir</p>
          </div>
          <div class="col-sm-4">
            <span class="iconify icon mb-2" data-icon="carbon:report" data-width="45"></span>
            <h5 class="fw-bold">Hasil Deteksi</h5>
            <p>Hasil dari deteksi akan tampil sesuai pernyataan yang anda jawab dan informasi solusinya</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Step End -->
    <!-- Try Start -->
    <section class="try">
      <div class="container pt-5 pb-5">
        <div class="box col-12 p-5">
          <h1>
            Silahkan Coba Deteksi <br />
            Jika Timbul Gejala
          </h1>
          <a href="{{ route('login') }}" class="btn btn-secondary mt-3">Coba Deteksi</a>
        </div>
      </div>
    </section>
    <!-- Try End -->
    <!-- Footer Start -->
    <footer class="footer">
      <div class="container pt-5 pb-5">
        <div class="row">
          <div class="col-sm-4">
            <h5>SistemPakar.</h5>
            <p>Pekanbaru, Indonesia</p>
          
            <div class="social-media mt-4 mb-3 mb-lg-0">
              <span class="iconify me-2" data-icon="akar-icons:facebook-fill" data-width="30"></span>
              <span class="iconify me-2" data-icon="ant-design:instagram-filled" data-width="30"></span>
              <span class="iconify" data-icon="akar-icons:twitter-fill" data-width="30"></span>
            </div>
          </div>
          <div class="col-sm-4">
            <h5>Link Penting</h5>
            <ul>
              <li><a href="{{ route('login') }}">Kunjungi halaman deteksi</a></li>
              <li><a href="{{ route('login') }}">Lihat hasil deteksi yang telah dilakukan</a></li>
            </ul>
          </div>
          <div class="col-sm-4" id="contact">
            <h5>Hubungi Kami</h5>
            <form action="{{ asset('backend/assets/database/config_addKontak.php')}}" method="post">
              
              <input type="hidden" value="" name="kode_kontak">
              <input type="text" class="form-control mb-2 mt-4" placeholder="Nama..." name="nama" autocomplete="off" required />
              <input type="email" class="form-control mb-2" placeholder="Email..." name="email" autocomplete="off" required />
              <textarea type="text" class="form-control mb-4" placeholder="Tulis Pesan..." name="subject" autocomplete="off" required></textarea>
              <button type="submit" class="btn btn-primary float-end" value="add">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <p class="p-2 text-center">Copyright <span class="iconify-inline" data-icon="ant-design:copyright-circle-outlined" data-width="15"></span> 2022 Sistem Pakar Deteksi Dini Gangguan Kesehatan Mental Mahasiswa</b></p>
    </footer>
    <!-- Footer End -->

    <!-- Javascript -->
    <script src="{{ asset('backend/assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Icon Iconify -->
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
  </body>
</html>
