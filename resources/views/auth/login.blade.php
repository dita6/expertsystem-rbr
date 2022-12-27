<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <meta name="title" content="Sistem Pakar Pendeteksi Penyakit Menggunakan Metode Rule Based Reasoning" />
    <meta name="description" content="Sistem informasi yang berisi pengetahuan seorang pakar sehingga dapat digunakan untuk konsultasi" />
    <meta name="keywords" content="sistem, pakar, metode, rule, based, reasoning pendeteksi, gangguan, mental" />
    <!-- Website Title -->
    <title>Masuk | Sistem Pakar Rule Based Reasoning</title>
    <!-- Favicon Website -->
    <link rel="icon" href="{{asset('backend/assets/img/logo.png')}}" alt="logo" />
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('backend/assets/css/main.css')}}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Sweet Alert 2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
  </head>
  <body>
  <?php
      if (isset ($_GET['message'])) {
        $message = $_GET['message'];
        if ($message == 'failed') {
          ?>
          <script language="Javascript">
              swal({
                title: 'Gagal!',
                text: 'Cek kembali username atau password anda',
                type: 'error',
                showConfirmButton: true
              });
          </script>
          <?php
        }
      }
    ?>

    
    <!-- Signin Start -->
    <section class="signin">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-5 order-2 order-lg-first" id="signin">
            <div class="container p-3">
              
              <button value="Go Back" onclick="history.back(-1)" class="iconify icon mb-4" data-icon="eva:arrow-back-outline" data-width="45">
              <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
              </button>
                
              <h1 class="fw-bold mb-4">Masuk</h1>
              <form action="{{ route('login') }}" method="post">
                


                @csrf
                <input type="email" id="email" class="form-control fs-4 mb-3 @error('email') is-invalid @enderror" placeholder="Email" autocomplete="off" autofocus required name="email"/>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror

                <div class="input-group mb-3">
                  <input type="password" id="password" class="form-control fs-4 border-end-0 @error('password') is-invalid @enderror" placeholder="Password" name="password" autocomplete="off" required />
                  <div class="input-group-text border-start-0 bg-transparent">
                    <span id ="mybutton" onclick="change()" class="iconify" data-icon="akar-icons:eye-closed" data-width="25"></span>
                  </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="icheck-primary">
                  
                  <input type="checkbox" id="remember" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label for="remember">
                    Remember Me
                  </label>
                </div>

                 @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                  <p class="mb-5">Lupa Kata Sandi?</p>
                </a>
                @endif

                <button type="submit" class="btn btn-primary mb-2" style="width: 100%">Masuk</button>
                <p>Belum Punya Akun? <a href="{{route('register')}}">Daftar</a></p>
              </form>
            </div>
          </div>
          <div class="col-sm-7 col-bg">
            <div class="container text-center p-3">
              <h1>Selamat Datang!</h1>
              <p>Silahkan masuk menggunakan akun yang sudah terdaftar</p>
              <a href="#signin">
                <span class="iconify icon m-3 btn-down mx-auto" data-icon="bi:chevron-double-down" data-width="40"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Signin End -->

    <!-- Javascript -->
    <script src="{{asset('backend/assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Icon Iconify -->
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>

    <script>
            // membuat fungsi change
            function change() {
    
                // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password 
                var x = document.getElementById('password').type;
    
                //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
                if (x == 'password') {
    
                    //ubah form input password menjadi text
                    document.getElementById('password').type = 'text';
                    
                    //ubah icon mata terbuka menjadi tertutup
                    document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                                    <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                                    <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                                    </svg>`;
                }
                else {
    
                    //ubah form input password menjadi text
                    document.getElementById('password').type = 'password';
    
                    //ubah icon mata terbuka menjadi tertutup
                    document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                                    </svg>`;
                }
            }
        </script>



  </body>
</html>
