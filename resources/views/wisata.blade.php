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

  <title>GorTour</title>
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

	{{-- HEADER --}}
    @include('layouts.header')
    {{--END HEADER --}}




  <div class="hero hero-inner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
            <h1 class="mb-0">Destinasi Wisata</h1>
            <p class="text-white">Temukan keindahan alam dan udara segar di Puncak, lengkap dengan taman teh yang mempesona. Dengan sejarah dan alam yang memikat, Bogor memanjakan pengunjung dengan pengalaman wisata yang tak terlupakan. </p>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="untree_co-section">
    <div class="container my-3">
      {{-- <div class="">
        <div class="owl-single dots-absolute owl-carousel">
          <img src="{{ asset('assets/images/kebunraya.jpg') }}" alt="Free HTML Template by Untree.co" class="img-fluids">
          <img src="{{ asset('assets/images/danau-quarry.png') }}" alt="Free HTML Template by Untree.co" class="img-fluids">
          <img src="{{ asset('assets/images/Curug-Cibulao.jpg') }}" alt="Free HTML Template by Untree.co" class="img-fluids">
        </div>
      </div> --}}


          {{-- NEW SECTION WISATA --}}
      <div class="untree_co-section pt-0">
        <div class="container">
          {{-- <div class="row justify-content-center-beranda text-center mb-5">
            <div class="col-lg-6">
              <h2 class="section-title text-center mb-3"> Destinasi Wisata</h2>
            </div>
          </div> --}}

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


                ?>
                            <!-- Wisata 1 -->
                            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-5">
                                <div class="media-1">
                                    <a class="media-thumb" href="{{ route('destinasi.wisata.detail', $value->_id) }}">

                                        <img src="{{ $value->gambar_wisata }}" alt="Image" class="img-fluids-card">
                                    </a>

                                    <span class="d-flex align-items-center loc mb-2 pt-3">
                                    <span class="icon-room mr-3"></span>
                                    <span>{{ $value->wilayah_wisata }}</span>
                                    </span>
                                    <div class="d-flex align-items-center">
                                    <div>
                                        <h3><a href="{{ route('destinasi.wisata.detail', $value->_id) }}">{{ $value->nama_wisata }}</a></h3>

                                    </div>
                                    </div>
                                </div>
                            </div>


                <?php

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

        </div>
      </div>



    </div>
  </div>



  <div class="py-5 cta-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2 class="mb-2 text-white">Berikan Wisata Terbaikmu. Hubungi Kami</h2>
                <p class="mb-4 lead text-white text-white-opacity">Punya rekomendasi wisata menarik di daerah Bogor?
                </p>
                <p class="mb-0"><a href="{{ route('contact') }}"
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
