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
            <h1 class="mb-0">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <form class="contact-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label class="text-black" for="fname">First name</label>
                  <input type="text" class="form-control" id="fname">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label class="text-black" for="lname">Last name</label>
                  <input type="text" class="form-control" id="lname">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="text-black" for="email">Email address</label>
              <input type="email" class="form-control" id="email">
            </div>

            <div class="form-group">
              <label class="text-black" for="message">Message</label>
              <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Send Message</button>
          </form>
        </div>
        <div class="col-lg-5 ml-auto">
          <div class="quick-contact-item d-flex align-items-center mb-4">
            <span class="flaticon-house"></span>
            <address class="text">
              Cilibende, Bogor Tengah, Kota Bogor
            </address>
          </div>
          <div class="quick-contact-item d-flex align-items-center mb-4">
            <span class="flaticon-phone-call"></span>
            <address class="text">
              +62 8961234567
            </address>
          </div>
          <div class="quick-contact-item d-flex align-items-center mb-4">
            <span class="flaticon-mail"></span>
            <address class="text">
              GorTour.id@gmail.com
            </address>
          </div>
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
              <h3 class="heading">Kontak</h3>
              <ul class="list-unstyled quick-info links">
                <li class="email"><a href="#">gortour.id@gmail.com</a></li>
                <li class="phone"><a href="#">+62 8961234567</a></li>
                <li class="address"><a href="#">Cilibende, Bogor Tengah, Kota Bogor
                </a></li>
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
