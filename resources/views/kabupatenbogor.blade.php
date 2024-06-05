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


  <title>Gotour</title>
</head>

<body>
    <header>
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
              <li class="active"><a href="{{ url('/') }}" class="text-white">Beranda</a></li>
              <li class="has-children">
                <a href="#" class="text-white">Destinasi</a>
                <ul class="dropdown">
                  <li><a href="{{ url('/elements') }}">Destinasi Wisata</a></li>
                  <li><a href="{{ url('/kuliner') }}">Destinasi Kuliner</a></li>
                  <li><a href="{{ url('/kotabogor') }}">Kota Bogor</a></li>
                  <li><a href="{{ url('/kabupatenbogor') }}">Kabupaten Bogor</a></li>
                </ul>
              </li>
              <li><a href="{{ url('/about') }}" class="text-white">Tentang</a></li>
              <li><a href="{{ url('/contact') }}" class="text-white">Kontak</a></li>
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

    </header>
    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="bd-placeholder-img w-100 vh-100" src="{{ asset('assets/images/situ-gede-2.jpg') }}">
                    <div class="container">
                        <div class="carousel-caption">
                            <h2 class="display-4 fw-bold">Destinasi Kabupaten Bogor</h2>
                            <!-- <p class="fs-5">Some representative placeholder content for the first slide of the carousel.</p> -->
                        </div>
                    </div>
                </div>


            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </main>

    {{-- NEW SECTION WISATA --}}
      <div class="untree_co-section">
        <div class="container">
          <div class="row justify-content-center-beranda text-center mb-5">
            <div class="col-lg-6">
              <h2 class="section-title text-center mb-3"> Destinasi Wisata</h2>
            </div>
          </div>

          <!-- Destinasi Wisata Kota Bogor -->

            <div class="row d-flex">
                <?php
                    if (isset($dataWisata) && is_array($dataWisata) && !empty($dataWisata))
                        $wisataDB = $dataWisata;
                    else
                        $wisataDB = 0;

                    $counter = 0;

                    if($wisataDB>0){
                        foreach ($wisataDB as $value) {
                            if ($value->wilayah_wisata === "Kabupaten Bogor"){
                                // $counter +=1;

                ?>
                            <!-- Wisata 1 -->
                            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-5">
                                <div class="media-1">
                                    <a class="media-thumb" href="{{ route('destinasi.wisata.detail', $value->_id) }}">

                                    <img src="{{ $value->gambar_wisata }}" alt="Image" class="img-fluids-card">
                                    </a>

                                    <span class="d-flex align-items-center loc mb-2 pt-3">
                                    <span class="icon-room mr-3"></span>
                                    <span>Kabupaten Bogor</span>
                                    </span>
                                    <div class="d-flex align-items-center">
                                    <div>
                                        <h3><a href="">{{ $value->nama_wisata }}</a></h3>

                                    </div>
                                    </div>
                                </div>
                            </div>


                <?php
                    }
                        }
                    } else{
                        echo
                            "<div class='row justify-content-center'>
                                <h2>Maaf, tidak ada produk untuk saat ini...</h2>
                            </div>";
                    }
                ?>
            </div>

        </div>

        <!-- <p class="text-btn text-center pt-5"><a href="#" class="btn btn-primary">Lihat Semua</a></p> -->
      </div>

      {{-- NEW SECTION KULINER --}}
      <div class="untree_co-section pt-2">
        <div class="container">
          <div class="row justify-content-center-beranda text-center mb-5">
            <div class="col-lg-6">
              <h2 class="section-title text-center mb-3"> Destinasi Kuliner</h2>
            </div>
          </div>

          <!-- Destinasi Wisata Kota Bogor -->

            <div class="row d-flex">
                <?php
                    if (isset($dataKuliner) && is_array($dataKuliner) && !empty($dataKuliner))
                        $kulinerDB = $dataKuliner;
                    else
                        $kulinerDB = 0;

                    $counter = 0;

                    if($kulinerDB>0){
                        foreach ($kulinerDB as $value) {
                            if ($value->wilayah_kuliner=== "Kabupaten Bogor"){
                                // $counter +=1;

                ?>
                            <!-- Wisata 1 -->
                            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-5">
                                <div class="media-1">
                                    <a class="media-thumb" href="{{ route('destinasi.kuliner.detail', $value->_id) }}">

                                    <img src="{{ $value->gambar_kuliner }}" alt="Image" class="img-fluids-card">
                                    </a>

                                    <span class="d-flex align-items-center loc mb-2 pt-3">
                                    <span class="icon-room mr-3"></span>
                                    <span>Kabupaten Bogor</span>
                                    </span>
                                    <div class="d-flex align-items-center">
                                    <div>
                                        <h3><a href="">{{ $value->nama_kuliner }}</a></h3>

                                    </div>
                                    </div>
                                </div>
                            </div>


                <?php
                    }
                        }
                    } else{
                        echo
                            "<div class='row justify-content-center'>
                                <h2>Maaf, tidak ada produk untuk saat ini...</h2>
                            </div>";
                    }
                ?>
            </div>

        </div>

        <!-- <p class="text-btn text-center pt-5"><a href="#" class="btn btn-primary">Lihat Semua</a></p> -->
      </div>

      <!-- END .custom-block -->



  <div class="py-5 cta-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2 class="mb-2 text-white">Berikan Wisata Terbaikmu. Hubungi Kami</h2>
                <p class="mb-4 lead text-white text-white-opacity">Punya rekomendasi wisata menarik di daerah Bogor?
                </p>
                <p class="mb-0"><a href=""
                        class="btn btn-outline-white text-white btn-md font-weight-bold">Hubungi Kami</a></p>
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

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

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
