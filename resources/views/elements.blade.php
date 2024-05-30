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
            <h1 class="mb-0">Destinasi Wisata</h1>
            <p class="text-white">Temukan keindahan alam dan udara segar di Puncak, lengkap dengan taman teh yang mempesona. Dengan sejarah dan alam yang memikat, Bogor memanjakan pengunjung dengan pengalaman wisata yang tak terlupakan. </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  
  <div class="untree_co-section">
    <div class="container my-5">
      <div class="mb-5">
        <div class="owl-single dots-absolute owl-carousel">
          <img src="{{ asset('assets/images/kebunraya.jpg') }}" alt="Free HTML Template by Untree.co" class="img-fluids">
          <img src="{{ asset('assets/images/danau-quarry.png') }}" alt="Free HTML Template by Untree.co" class="img-fluids">
          <img src="{{ asset('assets/images/Curug-Cibulao.jpg') }}" alt="Free HTML Template by Untree.co" class="img-fluids">
        </div>
      </div>


      <div class="untree_co-section">
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-6">
              <h2 class="section-title text-center mb-3">Destinasi Kota Bogor</h2>
              <!-- <p>Jelajahi dunia dengan penawaran eksklusif dari situs rekomendasi wisata kami! Dapatkan diskon
                istimewa untuk paket
                perjalanan, tiket atraksi populer, dan penginapan terbaik. Jangan lewatkan kesempatan untuk
                merencanakan liburan impian
                Anda dengan harga terbaik.</p> -->
            </div>
          </div>

          <!-- Destinasi Wisata Kota Bogor -->

          <div class="row">
            <!-- Wisata 1 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="media-1">
                <a class="media-thumb" href="{{ asset('assets/images/kebun-raya-bogor-3.jpg') }}" data-fancybox="gallery">
                  <div class="media-text">
                    <h3>Kebun Raya Bogor</h3>
                    <span class="location">Kota Bogor</span>
                    <div class="media-stars">
                      <h4 class="location pt-2" style="margin-left: 30px;">4,7</h4>
                      <span class="star ml-1">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star-setengah">&#9733;</span>
                    </div>
                  </div>
                  <img src="{{ asset('assets/images/kebun-raya-bogor-3.jpg') }}" alt="Image" class="img-fluids">
                </a>

                <span class="d-flex align-items-center loc mb-2 pt-3">
                  <span class="icon-room mr-3"></span>
                  <span>Kota Bogor</span>
                </span>
                <div class="d-flex align-items-center">
                  <div>
                    <h3><a href="{{ url('/detailwisata') }}">Kebun Raya Bogor</a></h3>
                    <div class="price ml-auto">
                      <span>Rp35.000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Wisata 2 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="media-1">
                <a class="media-thumb" href="{{ asset('assets/images/museumalam.jpg') }}" data-fancybox="gallery">
                  <div class="media-text">
                    <h3>Museum Sejarah Alam</h3>
                    <span class="location">Kota Bogor</span>
                    <div class="media-stars">
                      <h4 class="location pt-2 ml-2">4,6</h4>
                      <span class="star ml-1">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star-setengah">&#9733;</span>
                    </div>
                  </div>
                  <img src="{{ asset('assets/images/meseumalam.jpg') }}" alt="Image" class="img-fluids">
                </a>

                <span class="d-flex align-items-center loc mb-2 pt-3">
                  <span class="icon-room mr-3"></span>
                  <span>Kota Bogor</span>
                </span>
                <div class="d-flex align-items-center">
                  <div>
                    <h3><a href="#">Museum Sejarah Alam</a></h3>
                    <div class="price ml-auto">
                      <span>Rp25.000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Wisata 3 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="media-1">
                <a class="media-thumb" href="{{ asset('assets/images/kuntum-farmfield.jpg') }}" data-fancybox="gallery">
                  <div class="media-text">
                    <h3>Kuntum Farmfield</h3>
                    <span class="location">Kota Bogor</span>
                    <div class="media-stars">
                      <h4 class="location pt-2" style="margin-left: 31px;">4,5</h4>
                      <span class="star ml-1">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star-setengah">&#9733;</span>
                    </div>
                  </div>
                  <img src="{{ asset('assets/images/kuntum-farmfield.jpg') }}" alt="Image" class="img-fluids">
                </a>

                <span class="d-flex align-items-center loc mb-2 pt-3">
                  <span class="icon-room mr-3"></span>
                  <span>Kota Bogor</span>
                </span>
                <div class="d-flex align-items-center">
                  <div>
                    <h3><a href="#">Kuntum Farmfield</a></h3>
                    <div class="price ml-auto">
                      <span>Rp70.000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Wisata 4 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="media-1">
                <a class="media-thumb" href="{{ asset('assets/images/kebun-raya-bogor-3.jpg') }}" data-fancybox="gallery">
                  <div class="media-text">
                    <h3>The Jungle Waterpark</h3>
                    <span class="location">Kota Bogor</span>
                    <div class="media-stars">
                      <h4 class="location pt-2" style="margin-left: 15px;">4,5</h4>
                      <span class="star ml-1">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star-setengah">&#9733;</span>
                    </div>
                  </div>
                  <img src="{{ asset('assets/images/kebun-raya-bogor-3.jpg') }}" alt="Image" class="img-fluids">
                </a>

                <span class="d-flex align-items-center loc mb-2 pt-3">
                  <span class="icon-room mr-3"></span>
                  <span> Kota Bogor</span>
                  
                </span>
                <div class="d-flex align-items-center">
                  <div>
                    <h3><a href="#">The Jungle Waterpark</a></h3>
                    <div class="price ml-auto">
                      <span>Rp55.000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="row pt-5 mt-1">
            <!-- Wisata 5 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="media-1">
                <a class="media-thumb" href="{{ asset('assets/images/monumenpeta.jpg') }}" data-fancybox="gallery">
                  <div class="media-text">
                    <h3>Museum Peta</h3>
                    <span class="location">Kota Bogor</span>
                    <div class="media-stars">
                      <h4 class="location pt-2" style="margin-left: 54px;">4,6</h4>
                      <span class="star ml-1">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star-setengah">&#9733;</span>
                    </div>
                  </div>
                  <img src="{{ asset('assets/images/monumenpeta.jpg') }}" alt="Image" class="img-fluids">
                </a>

                <span class="d-flex align-items-center loc mb-2 pt-3">
                  <span class="icon-room mr-3"></span>
                  <span>Kota Bogor</span>
                </span>
                <div class="d-flex align-items-center">
                  <div>
                    <h3><a href="#">Meseum Peta</a></h3>
                    <div class="price ml-auto">
                      <span>Rp10.000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Wisata 6 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="media-1">
                <a class="media-thumb" href="{{ asset('assets/images/theillusion.png') }}" data-fancybox="gallery">
                  <div class="media-text">
                    <h3>The Illusion</h3>
                    <span class="location">Kota Bogor</span>
                    <div class="media-stars">
                      <h4 class="location pt-2" style="margin-left: 59px;">4,4</h4>
                      <span class="star ml-1">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star-setengah">&#9733;</span>
                    </div>
                  </div>
                  <img src="{{ asset('assets/images/theillusion.png') }}" alt="Image" class="img-fluids">
                </a>

                <span class="d-flex align-items-center loc mb-2 pt-3">
                  <span class="icon-room mr-3"></span>
                  <span>Kota Bogor</span>
                </span>
                <div class="d-flex align-items-center">
                  <div>
                    <h3><a href="#">The Illusion</a></h3>
                    <div class="price ml-auto">
                      <span>Rp60.000</span>
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <!-- Wisata 7 -->
          <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="media-1">
              <a class="media-thumb" href="{{ asset('assets/images/transtudominiyasmin.png') }}" data-fancybox="gallery">
                <div class="media-text">
                  <h3>Trans Studio Mini</h3>
                  <span class="location">Kota Bogor</span>
                  <div class="media-stars">
                    <h4 class="location pt-2" style="margin-left: 32px;">4,6</h4>
                    <span class="star ml-1">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star-setengah">&#9733;</span>
                  </div>
                </div>
                <img src="{{ asset('assets/images/transtudominiyasmin.png') }}" alt="Image" class="img-fluids">
              </a>

              <span class="d-flex align-items-center loc mb-2 pt-3">
                <span class="icon-room mr-3"></span>
                <span>Kota Bogor</span>
              </span>
              <div class="d-flex align-items-center">
                <div>
                  <h3><a href="#">Trans Studio Mini</a></h3>
                  <div class="price ml-auto">
                    <span>Rp60.000</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Wisata 8 -->
          <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="media-1">
              <a class="media-thumb" href="{{ asset('assets/images/devoyage.png') }}" data-fancybox="gallery">
                <div class="media-text">
                  <h3>Devoyage</h3>
                  <span class="location">Kota Bogor</span>
                  <div class="media-stars">
                    <h4 class="location pt-2" style="margin-left: 74px;">4,1</h4>
                    <span class="star ml-1">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star-setengah">&#9733;</span>
                  </div>
                </div>
                <img src="{{ asset('assets/images/devoyage.png') }}" alt="Image" class="img-fluids">
              </a>

              <span class="d-flex align-items-center loc mb-2 pt-3">
                <span class="icon-room mr-3"></span>
                <span>Kota Bogor</span>
              </span>
              <div class="d-flex align-items-center">
                <div>
                  <h3><a href="#">Devoyage</a></h3>
                  <div class="price ml-auto">
                    <span>Rp30.000</span>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </div>

        <p class="text-btn text-center pt-5"><a href="{{ url('/kotabogor') }}" class="btn btn-primary">Lihat Semua</a></p>
      </div>


      <div class="untree_co-section">
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-6">
              <h2 class="section-title text-center mb-3">Destinasi Kabupaten Bogor</h2>
              <!-- <p>Jelajahi dunia dengan penawaran eksklusif dari situs rekomendasi wisata kami! Dapatkan diskon
                istimewa untuk paket
                perjalanan, tiket atraksi populer, dan penginapan terbaik. Jangan lewatkan kesempatan untuk
                merencanakan liburan impian
                Anda dengan harga terbaik.</p> -->
            </div>
          </div>

          <!-- Destinasi Wisata Kota Bogor -->

          <div class="row">
            <!-- Wisata 1 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="media-1">
                <a class="media-thumb" href="{{ asset('assets/images/taman-safari-3.jpg') }}" data-fancybox="gallery">
                  <div class="media-text">
                    <h3>Taman Safari</h3>
                    <span class="location">Kabupaten Bogor</span>
                    <div class="media-stars">
                      <h4 class="location pt-2" style="margin-left: 51px;">4,7</h4>
                      <span class="star ml-1">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star-setengah">&#9733;</span>
                    </div>
                  </div>
                  <img src="{{ asset('assets/images/taman-safari-3.jpg') }}" alt="Image" class="img-fluids">
                </a>

                <span class="d-flex align-items-center loc mb-2 pt-3">
                  <span class="icon-room mr-3"></span>
                  <span>Kabupaten Bogor</span>
                </span>
                <div class="d-flex align-items-center">
                  <div>
                    <h3><a href="#">Taman Safari</a></h3>
                    <div class="price ml-auto">
                      <span>Rp100.000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Wisata 2 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="media-1">
                <a class="media-thumb" href="{{ asset('assets/images/gunung-pancar-3.jpg') }}" data-fancybox="gallery">
                  <div class="media-text">
                    <h3>Gunung Pancar</h3>
                    <span class="location">Kabupaten Bogor</span>
                    <div class="media-stars">
                      <h4 class="location pt-2" style="margin-left: 45px;">4,5</h4>
                      <span class="star ml-1">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star-setengah">&#9733;</span>
                    </div>
                  </div>
                  <img src="{{ asset('assets/images/gunung-pancar-3.jpg') }}" alt="Image" class="img-fluids">
                </a>

                <span class="d-flex align-items-center loc mb-2 pt-3">
                  <span class="icon-room mr-3"></span>
                  <span>Kabupaten Bogor</span>
                </span>
                <div class="d-flex align-items-center">
                  <div>
                    <h3><a href="#">Gunung Pancar</a></h3>
                    <div class="price ml-auto">
                      <span>Rp75.000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Wisata 3 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="media-1">
                <a class="media-thumb" href="{{ asset('assets/images/dairyland-riverside.png') }}" data-fancybox="gallery">
                  <div class="media-text">
                    <h3>Dairyland Reverside</h3>
                    <span class="location">Kabupaten Bogor</span>
                    <div class="media-stars">
                      <h4 class="location pt-2" style="margin-left: 23px;">4,6</h4>
                      <span class="star ml-1">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star-setengah">&#9733;</span>
                    </div>
                  </div>
                  <img src="{{ asset('assets/images/dairyland-riverside.png') }}" alt="Image" class="img-fluids">
                </a>

                <span class="d-flex align-items-center loc mb-2 pt-3">
                  <span class="icon-room mr-3"></span>
                  <span>Kabupaten Bogor</span>
                </span>
                <div class="d-flex align-items-center">
                  <div>
                    <h3><a href="#">Dairyland Reverside</a></h3>
                    <div class="price ml-auto">
                      <span>Rp30.000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Wisata 4 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="media-1">
                <a class="media-thumb" href="{{ asset('assets/images/goagarunggang.jpg') }}" data-fancybox="gallery">
                  <div class="media-text">
                    <h3>Goa Garunggang</h3>
                    <span class="location">Kabupaten Bogor</span>
                    <div class="media-stars">
                      <h4 class="location pt-2" style="margin-left: 41px;">4,6</h4>
                      <span class="star ml-1">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star-setengah">&#9733;</span>
                    </div>
                  </div>
                  <img src="{{ asset('assets/images/goagarunggang.jpg') }}" alt="Image" class="img-fluids">
                </a>

                <span class="d-flex align-items-center loc mb-2 pt-3">
                  <span class="icon-room mr-3"></span>
                  <span>Kabupaten Bogor</span>
                  
                </span>
                <div class="d-flex align-items-center">
                  <div>
                    <h3><a href="#">Goa Garunggang</a></h3>
                    <div class="price ml-auto">
                      <span>Rp20.000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="row pt-5 mt-1">
            <!-- Wisata 5 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="media-1">
                <a class="media-thumb" href="{{ asset('assets/images/leuwilieutik.jpg') }}" data-fancybox="gallery">
                  <div class="media-text">
                    <h3>Leuwi Lieuk</h3>
                    <span class="location">Kabupaten Bogor</span>
                    <div class="media-stars">
                      <h4 class="location pt-2" style="margin-left: 51px;">4,4</h4>
                      <span class="star ml-1">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star-setengah">&#9733;</span>
                    </div>
                  </div>
                  <img src="{{ asset('assets/images/leuwilieutik.jpg') }}" alt="Image" class="img-fluids">
                </a>

                <span class="d-flex align-items-center loc mb-2 pt-3">
                  <span class="icon-room mr-3"></span>
                  <span>Kabupaten Bogor</span>
                </span>
                <div class="d-flex align-items-center">
                  <div>
                    <h3><a href="#">Leuwi Lieuk</a></h3>
                    <div class="price ml-auto">
                      <span>Rp10.000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Wisata 6 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="media-1">
                <a class="media-thumb" href="{{ asset('assets/images/taman-matahari.png') }}" data-fancybox="gallery">
                  <div class="media-text">
                    <h3>Taman Matahari</h3>
                    <span class="location">Kabupaten Bogor</span>
                    <div class="media-stars">
                      <h4 class="location pt-2" style="margin-left: 40px;">4,1</h4>
                      <span class="star ml-1">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star">&#9733;</span>
                      <span class="star-setengah">&#9733;</span>
                    </div>
                  </div>
                  <img src="{{ asset('assets/images/taman-matahari.png') }}" alt="Image" class="img-fluids">
                </a>

                <span class="d-flex align-items-center loc mb-2 pt-3">
                  <span class="icon-room mr-3"></span>
                  <span>Kabupaten Bogor</span>
                </span>
                <div class="d-flex align-items-center">
                  <div>
                    <h3><a href="#">Taman Matahari</a></h3>
                    <div class="price ml-auto">
                      <span>Rp60.000</span>
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <!-- Wisata 7 -->
          <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="media-1">
              <a class="media-thumb" href="{{ asset('assets/images/curugnangka.jpg') }}" data-fancybox="gallery">
                <div class="media-text">
                  <h3>Curug Nangka</h3>
                  <span class="location">Kabupaten Bogor</span>
                  <div class="media-stars">
                    <h4 class="location pt-2" style="margin-left: 51px;">4,3</h4>
                    <span class="star ml-1">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star-setengah">&#9733;</span>
                  </div>
                </div>
                <img src="{{ asset('assets/images/curugnangka.jpg') }}" alt="Image" class="img-fluids">
              </a>

              <span class="d-flex align-items-center loc mb-2 pt-3">
                <span class="icon-room mr-3"></span>
                <span>Kabupaten Bogor</span>
              </span>
              <div class="d-flex align-items-center">
                <div>
                  <h3><a href="#">Curug Nangka</a></h3>
                  <div class="price ml-auto">
                    <span>Rp22.000</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Wisata 8 -->
          <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="media-1">
              <a class="media-thumb" href="{{ asset('assets/images/Lembah Tepus.jpg') }}" data-fancybox="gallery">
                <div class="media-text">
                  <h3>Lembah Tebus</h3>
                  <span class="location">Kabupaten Bogor</span>
                  <div class="media-stars">
                    <h4 class="location pt-2" style="margin-left: 50px;">4,6</h4>
                    <span class="star ml-1">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star-setengah">&#9733;</span>
                  </div>
                </div>
                <img src="{{ asset('assets/images/Lembah Tepus.jpg') }}" alt="Image" class="img-fluids">
              </a>

              <span class="d-flex align-items-center loc mb-2 pt-3">
                <span class="icon-room mr-3"></span>
                <span>Kabupaten Bogor</span>
              </span>
              <div class="d-flex align-items-center">
                <div>
                  <h3><a href="#">Lembah Tebus</a></h3>
                  <div class="price ml-auto">
                    <span>Rp10.000</span>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </div>

        <p class="text-btn text-center pt-5"><a href="{{ url('/kabupatenbogor') }}" class="btn btn-primary">Lihat Semua</a></p>
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
                <p class="mb-0"><a href="booking.html"
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
