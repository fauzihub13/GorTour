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
            <h1 class="mb-0">Tentang Kami</h1>
            <p class="text-white">GorTour adalah platform wisata yang menghadirkan pengalaman unik dan tak terlupakan di kawasan Bogor.</p>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-single dots-absolute owl-carousel">
            <img src="{{ asset('assets/images/kebun-raya-bogor-2.jpg') }}" alt="Free HTML Template by Untree.co" class="img-fluidss rounded-20">
            <img src="{{ asset('assets/images/situ-gede-2.jpg') }}" alt="Free HTML Template by Untree.co" class="img-fluids rounded-20">
            <img src="{{ asset('assets/images/gunung-pancar-2.jpg') }}" alt="Free HTML Template by Untree.co" class="img-fluids rounded-20">
            <img src="{{ asset('assets/images/mekarsari-2.jpg') }}" alt="Free HTML Template by Untree.co" class="img-fluids rounded-20">
            <img src="{{ asset('assets/images/taman-safari-2.jpg') }}" alt="Free HTML Template by Untree.co" class="img-fluids rounded-20">
          </div>
        </div>
        <div class="col-lg-5 pl-lg-5 ml-auto ">
          <h2 class="section-title mb-4 mt-4">Tentang Tour Kami</h2>
          <p>GorTour adalah platform wisata yang menghadirkan pengalaman unik dan tak terlupakan di kawasan Bogor. Kami memadukan keindahan alam, kekayaan budaya, dan aktivitas rekreasi outdoor untuk memberikan pengalaman liburan yang istimewa bagi setiap pengunjung. Dengan panduan dari para ahli lokal, GorTour memastikan setiap perjalanan memberikan wawasan mendalam tentang sejarah, budaya, dan kehidupan sehari-hari masyarakat setempat. Nikmati keindahan alam yang menakjubkan, jelajahi destinasi wisata tersembunyi, dan dapatkan pengalaman tak terlupakan di kawasan Bogor bersama GorTour.</p>
          <ul class="list-unstyled two-col clearfix">
            <li>Pemandu lokal</li>
            <li>Paket lengkap</li>
            <li>Akomodasi nyaman</li>
            <li>Kuliner lokal</li>
            <li>Transportasi</li>
            <li>Panduan informasi</li>
            <li>Asuransi perjalanan</li>
            <li>Rekreasi outdoor</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-center-beranda mb-5">
        <div class="col-md-6 text-center">
          <h2 class="section-title mb-3 text-center">Team</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="{{ asset('assets/images/gortour/tim_fauzi.jpeg') }}" alt="Image" class="img-fluids mb-4 rounded-20">
            <div class="px-3">
              <h3 style="text-align: center" class="mb-0">Fauzi Adi Saputra</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="{{ asset('assets/images/gortour/tim_farhan.jpeg') }}" alt="Image" class="img-fluids mb-4 rounded-20">
            <div class="px-3">
              <h3 style="text-align: center" class="mb-0">Muhammad Farhan Fahrezy</h3>

            </div>
          </div>
        </div>

        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="{{ asset('assets/images/gortour/tim_budi.jpg') }}" alt="Image" class="img-fluids mb-4 rounded-20">
            <div class="px-3">
              <h3 style="text-align: center" class="mb-0">Budy Santoso</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="{{ asset('assets/images/gortour/tim_siti.jpeg') }}" alt="Image" class="img-fluids mb-4 rounded-20">
            <div class="px-3">
              <h3 style="text-align: center" class="mb-0">Siti Farah Fakhirah</h3>

            </div>
          </div>
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
