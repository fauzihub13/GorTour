<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/logo-sm.png') }}">
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Gotour</title>
    <style>
        .rounded {
            border-radius: 20px;
        }
        .footer-full-width {
            width: 100%;
            background-color: ; 
            
        }
    </style>
</head>

<body>
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <nav class="site-nav">
    <div class="container">
        <div class="site-navigation">
            <a href="{{ url('/') }}" class="logo m-0">GorTour <span class="text-primary">.</span></a>

            <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
                <li class="active"><a href="{{ url('/') }}">Beranda</a></li>
                <li class="has-children">
                    <a href="#">Destinasi</a>
                    <ul class="dropdown">
                      <li><a href="{{ url('/elements') }}">Destinasi Wisata</a></li>
                      <li><a href="{{ url('/kuliner') }}">Destinasi Kuliner</a></li>
                      <li><a href="{{ url('/kotabogor') }}">Kota Bogor</a></li>
                      <li><a href="{{ url('/kabupatenbogor') }}">Kabupaten Bogor</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/about') }}">Tentang</a></li>
                <li><a href="{{ url('/contact') }}">Kontak</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>

            <a href="#"
               class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
               data-toggle="collapse" data-target="#main-navbar">
               <span></span>
            </a>
        </div>
    </div>
</nav>

  <div class="hero hero-inner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
            <h1 class="mb-0">Soto Mie Bogor</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="untree_co-sectionsssssss">
    <div class="container my-5 lg-8">
      <div class="mb-4">
        <div class="owl-single dots-absolute owl-carousel">
          <img class="rounded" src="{{ asset('assets/images/soto-kuning-bgr.jpg') }}" class="img-fluids">
          <img class="rounded" src="{{ asset('assets/images/soto-kuning-bgr.jpg') }}" class="img-fluids">
          <img class="rounded" src="{{ asset('assets/images/soto-kuning-bgr.jpg') }}" class="img-fluids">          <img src="{{ asset('assets/images/kebun-raya-bogor-4.png') }}" class="img-fluids">
        </div>
        <div class="mt-4">
          <h4><b>Soto Mie Bogor</b></h4>
        </div>
        <div>
          <div class="accordion-body lg-8">
            Kebun Raya Bogor adalah taman botani yang terletak di Bogor, Jawa Barat, Indonesia. Didirikan pada tahun
            1817, kebun raya ini merupakan salah satu kebun raya tertua di dunia. Kebun Raya Bogor memiliki luas sekitar
            87 hektar dan dikenal karena keanekaragaman koleksi tanamannya, termasuk pohon-pohon tua yang indah, kolam,
            dan taman-taman tematik. Tempat ini juga menjadi pusat penelitian dan konservasi tumbuhan, serta merupakan
            destinasi wisata populer bagi pengunjung yang ingin menikmati keindahan alam dan belajar tentang
            keanekaragaman hayati.
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="custom-block" data-aos="fade-up">
            <h2 class="section-title">Informasi lainnya</h2>
            <div class="custom-accordion" id="accordion_1">
              <div class="accordion-item">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">Lokasi</button>
                </h2>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_1">
                  <div class="accordion-body">
                    Kebun Raya Bogor (Bogor Botanical Gardens), Jl. Ir. H. Juanda No.13, Paledang, Kecamatan Bogor
                    Tengah, Kota Bogor, Jawa Barat 16122, Indonesia
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12312.315117412625!2d106.79525297719881!3d-6.59962405580465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5c412a67abb%3A0x75f23c6b45a37ee5!2sKebun%20Raya%20Bogor!5e0!3m2!1sid!2sid!4v1710215392179!5m2!1sid!2sid"
                      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div>
              </div>
              <!-- .accordion-item -->
              <div class="accordion-item">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Jam Buka</button>
                </h2>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_1">
                  <div class="accordion-body">
                    <b></b>Jam waktu setempat (WIB) <br><br>
                    Weekday: 08:00-16:00 | WeekEnd: 07:00-16:00 <p>
                  </div>
                </div>
              </div>
              <!-- .accordion-item -->
            </div>
          </div>
          <!-- END .custom-block -->
          <div class="custom-block" data-aos="fade-up">
            <h2 class="section-title">Galleri</h2>
            <div class="row gutter-v2 gallery">
              <div class="col-4">
                <a href="{{ asset('assets/images/krb-c-1.webp') }}" class="gal-item" data-fancybox="gal"><img
                    src="{{ asset('assets/images/krb-c-1.webp') }}" alt="Image" class="img-fluids"></a>
              </div>
              <div class="col-4">
                <a href="{{ asset('assets/images/krb-c-2.jpg') }}" class="gal-item" data-fancybox="gal"><img
                    src="{{ asset('assets/images/krb-c-2.jpg') }}" alt="Image" class="img-fluids"></a>
              </div>
              <div class="col-4">
                <a href="{{ asset('assets/images/krb-c-3.jpg') }}" class="gal-item" data-fancybox="gal"><img
                    src="{{ asset('assets/images/krb-c-3.jpg') }}" alt="Image" class="img-fluids"></a>
              </div>
              <div class="col-4">
                <a href="{{ asset('assets/images/krb-c-4.jpeg') }}" class="gal-item" data-fancybox="gal"><img
                    src="{{ asset('assets/images/krb-c-4.jpeg') }}" alt="Image" class="img-fluids"></a>
              </div>
              <div class="col-4">
                <a href="{{ asset('assets/images/gal_5.jpg') }}" class="gal-item" data-fancybox="gal"><img
                    src="{{ asset('assets/images/gal_5.jpg') }}" alt="Image" class="img-fluids"></a>
              </div>
              <div class="col-4">
                <a href="{{ asset('assets/images/gal_6.jpg') }}" class="gal-item" data-fancybox="gal"><img
                    src="{{ asset('assets/images/gal_6.jpg') }}" alt="Image" class="img-fluids"></a>
              </div>
            </div>
          </div>
        
          <!-- END .custom-block -->
        </div>
      </div>
    </div>
  </div>

  <div class="site-footer">
    <div class="inner first">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="widget">
                        <h3 class="heading">Tentang GorTour</h3>
                        <p>GorTour adalah sumber terpercaya untuk inspirasi wisata. Temukan destinasi
                            menakjubkan, dapatkan tips perjalanan,
                            dan rencanakan petualangan Anda. Jelajahi dunia dengan GorTour - Temukan,
                            Rasakan, Nikmati!
                        </p>
                    </div>
                    <div class="widget">
                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 pl-lg-5">
                    <div class="widget">
                        <h3 class="heading">Halaman</h3>
                        <ul class="links list-unstyled">
                          <li><a href="{{ url('/') }}">Beranda</a></li>
								<li><a href="{{ url('/about') }}">Tentang</a></li>
								<li><a href="{{ url('/contact') }}">Kontak</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="widget">
                
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="widget">
                        <h3 class="heading">Contact</h3>
                        <ul class="list-unstyled quick-info links">
                            <li class="email"><a href="#">gourtour.id@gmail.com</a></li>
                            <li class="phone"><a href="#">+62 896 1234567</a></li>
                            <li class="address"><a href="#">Cilibende, Bogor Tengah, Kota Bogor</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="inner dark">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 mb-3 mb-md-0 mx-auto">
                    <p>Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash;
                        Designed with love by <b>GorTour</b></a>
                </div>

            </div>
        </div>
    </div>
</div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('assets/js/aos.js') }}"></script>
  <script src="{{ asset('assets/js/moment.min.js') }}"></script>
  <script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
  <script src="{{ asset('assets/js/typed.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>