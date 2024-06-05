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
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap"
        rel="stylesheet">

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
                        <li class="active"><a href="{{ url('/') }}" class="text-dark">Beranda</a></li>
                        <li class="has-children">
                            <a href="#" class="text-dark">Destinasi</a>
                            <ul class="dropdown">
                                <li><a href="{{ url('/elements') }}">Destinasi Wisata</a></li>
                                <li><a href="{{ url('/kuliner') }}">Destinasi Kuliner</a></li>
                                <li><a href="{{ url('/kotabogor') }}">Kota Bogor</a></li>
                                <li><a href="{{ url('/kabupatenbogor') }}">Kabupaten Bogor</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/about') }}" class="text-dark">Tentang</a></li>
                        <li><a href="{{ url('/contact') }}" class="text-dark">Kontak</a></li>
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
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="bd-placeholder-img w-100 vh-100"
                        src="{{ asset('assets/images/gunung-pancar-2.jpg') }}">
                    <div class="container">
                        <div class="carousel-caption">
                            <h4 style="font-size: 50px" class="display-4 fw-bold">Destinasi Wisata kabupaten Bogor</h4>
                            <!-- <p class="fs-5">Some representative placeholder content for the first slide of the carousel.</p> -->
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
    </main>


    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-center-beranda text-center mb-5">
                <div class="col-lg-6">
                    <h2 class="section-title text-center mb-3">Destinasi Wisata</h2>
                    <!-- <p>Jelajahi dunia dengan penawaran eksklusif dari situs rekomendasi wisata kami! Dapatkan diskon
                istimewa untuk paket
                perjalanan, tiket atraksi populer, dan penginapan terbaik. Jangan lewatkan kesempatan untuk
                merencanakan liburan impian
                Anda dengan harga terbaik.</p> -->
                </div>
            </div>

            <!-- Destinasi Wisata Alam Kabupaten Bogor -->

            <div class="row">
                <!-- Wisata 1 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="media-1">
                        <a class="media-thumb" href="{{ asset('assets/images/Danau-Jayamix-Rumpin.jpg') }}"
                            data-fancybox="gallery">
                            <div class="media-text">
                                <h3>Danau Jayamix Rumpin</h3>
                                <span class="location">Kabupaten Bogor</span>
                                <div class="media-stars">
                                    <h4 class="location pt-2" style="margin-left: 8px;">4,1</h4>
                                    <span class="star ml-1">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star-setengah">&#9733;</span>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/Danau-Jayamix-Rumpin.jpg') }}" alt="Image"
                                class="img-fluids-card">
                        </a>

                        <span class="d-flex align-items-center loc mb-2 pt-3">
                            <span class="icon-room mr-3"></span>
                            <span>Kabupaten Bogor</span>
                        </span>
                        <div class="d-flex align-items-center">
                            <div>
                                <h3><a href="#">Danau Jayamix Rumpin</a></h3>
                                <div class="price ml-auto">
                                    <span>Rp2.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wisata 2 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="media-1">
                        <a class="media-thumb" href="{{ asset('assets/images/gunung-pancar-3.jpg') }}"
                            data-fancybox="gallery">
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
                            <img src="{{ asset('assets/images/gunung-pancar-3.jpg') }}" alt="Image"
                                class="img-fluids-card">
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
                        <a class="media-thumb" href="{{ asset('assets/images/Curug-Seribu.jpg') }}"
                            data-fancybox="gallery">
                            <div class="media-text">
                                <h3>Curug Seribu</h3>
                                <span class="location">Kabupaten Bogor</span>
                                <div class="media-stars">
                                    <h4 class="location pt-2" style="margin-left: 53px;">4,6</h4>
                                    <span class="star ml-1">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star-setengah">&#9733;</span>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/Curug-Seribu.jpg') }}" alt="Image"
                                class="img-fluids-card">
                        </a>

                        <span class="d-flex align-items-center loc mb-2 pt-3">
                            <span class="icon-room mr-3"></span>
                            <span>Kabupaten Bogor</span>
                        </span>
                        <div class="d-flex align-items-center">
                            <div>
                                <h3><a href="#">Curug Seribu</a></h3>
                                <div class="price ml-auto">
                                    <span>Rp10.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wisata 4 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="media-1">
                        <a class="media-thumb" href="{{ asset('assets/images/goagarunggang.jpg') }}"
                            data-fancybox="gallery">
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
                            <img src="{{ asset('assets/images/goagarunggang.jpg') }}" alt="Image"
                                class="img-fluids-card">
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

            <div class="row">
                <!-- Wisata 5 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="media-1">
                        <a class="media-thumb" href="{{ asset('assets/images/leuwilieutik.jpg') }}"
                            data-fancybox="gallery">
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
                            <img src="{{ asset('assets/images/leuwilieutik.jpg') }}" alt="Image"
                                class="img-fluids-card">
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
                        <a class="media-thumb" href="{{ asset('assets/images/Curug-Cibaliung.png') }}"
                            data-fancybox="gallery">
                            <div class="media-text">
                                <h3>Curug Cibaliung</h3>
                                <span class="location">Kabupaten Bogor</span>
                                <div class="media-stars">
                                    <h4 class="location pt-2" style="margin-left: 43px;">4,6</h4>
                                    <span class="star ml-1">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star-setengah">&#9733;</span>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/Curug-Cibaliung.png') }}" alt="Image"
                                class="img-fluids-card">
                        </a>

                        <span class="d-flex align-items-center loc mb-2 pt-3">
                            <span class="icon-room mr-3"></span>
                            <span>Kabupaten Bogor</span>
                        </span>
                        <div class="d-flex align-items-center">
                            <div>
                                <h3><a href="#">Curug Cibaliung</a></h3>
                                <div class="price ml-auto">
                                    <span>Rp15.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wisata 7 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="media-1">
                        <a class="media-thumb" href="{{ asset('assets/images/curugnangka.jpg') }}"
                            data-fancybox="gallery">
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
                            <img src="{{ asset('assets/images/curugnangka.jpg') }}" alt="Image"
                                class="img-fluids-card">
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
                        <a class="media-thumb" href="{{ asset('assets/images/Lembah Tepus.jpg') }}"
                            data-fancybox="gallery">
                            <div class="media-text">
                                <h3>Lembah Tepus</h3>
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
                            <img src="{{ asset('assets/images/Lembah Tepus.jpg') }}" alt="Image"
                                class="img-fluids-card">
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
        </div>

        <p>

        <div class="untree_co-section mt-5">
            <div class="container">


                <!-- <p class="text-btn text-center pt-5"><a href="#" class="btn btn-primary">Lihat Semua</a></p> -->



                <!-- Destinasi Wisata Kota Bogor -->

                <div class="row">
                    <!-- Wisata 1 -->
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="media-1">
                            <a class="media-thumb" href="{{ asset('assets/images/monumenpeta.jpg') }}"
                                data-fancybox="gallery">
                                <div class="media-text">
                                    <h3>Museum Peta</h3>
                                    <span class="location">Kota Bogor</span>
                                    <div class="media-stars">
                                        <h4 class="location pt-2" style="margin-left: 53px;">4,6</h4>
                                        <span class="star ml-1">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star-setengah">&#9733;</span>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/images/monumenpeta.jpg') }}" alt="Image"
                                    class="img-fluids-card">
                            </a>

                            <span class="d-flex align-items-center loc mb-2 pt-3">
                                <span class="icon-room mr-3"></span>
                                <span>Kota Bogor</span>
                            </span>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h3><a href="#">Museum Peta</a></h3>
                                    <div class="price ml-auto">
                                        <span>Rp10.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Wisata 2 -->
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="media-1">
                            <a class="media-thumb" href="{{ asset('assets/images/meseumalam.jpg') }}"
                                data-fancybox="gallery">
                                <div class="media-text">
                                    <h3>Museum Sejarah Alam</h3>
                                    <span class="location">Kota Bogor</span>
                                    <div class="media-stars">
                                        <h4 class="location pt-2" style="margin-left: 15px;">4,6</h4>
                                        <span class="star ml-1">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star-setengah">&#9733;</span>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/images/meseumalam.jpg') }}" alt="Image"
                                    class="img-fluids-card">
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
                            <a class="media-thumb" href="{{ asset('assets/images/Museum-Balai-Kirti.jpg') }}"
                                data-fancybox="gallery">
                                <div class="media-text">
                                    <h3>Museum Balai Kirti</h3>
                                    <span class="location">Kota Bogor</span>
                                    <div class="media-stars">
                                        <h4 class="location pt-2" style="margin-left: 31px;">4,7</h4>
                                        <span class="star ml-1">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star-setengah">&#9733;</span>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/images/Museum-Balai-Kirti.jpg') }}" alt="Image"
                                    class="img-fluids-card">
                            </a>

                            <span class="d-flex align-items-center loc mb-2 pt-3">
                                <span class="icon-room mr-3"></span>
                                <span>Kota Bogor</span>
                            </span>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h3><a href="#">Museum Balai Kirti</a></h3>
                                    <div class="price ml-auto">
                                        <span>Gratis</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Wisata 4 -->
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="media-1">
                            <a class="media-thumb" href="{{ asset('assets/images/Museum-Perjuangan.jpg') }}"
                                data-fancybox="gallery">
                                <div class="media-text">
                                    <h3>Museum Perjuangan</h3>
                                    <span class="location">Kota Bogor</span>
                                    <div class="media-stars">
                                        <h4 class="location pt-2" style="margin-left: 21px;">4,6</h4>
                                        <span class="star ml-1">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star-setengah">&#9733;</span>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/images/Museum-Perjuangan.jpg') }}" alt="Image"
                                    class="img-fluids-card">
                            </a>

                            <span class="d-flex align-items-center loc mb-2 pt-3">
                                <span class="icon-room mr-3"></span>
                                <span>Kota Bogor</span>

                            </span>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h3><a href="#">Museum Perjuangan</a></h3>
                                    <div class="price ml-auto">
                                        <span>Rp10.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <!-- Wisata 5 -->
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="media-1">
                            <a class="media-thumb" href="{{ asset('assets/images/Prasasti-Batu-Tulis..jpg') }}"
                                data-fancybox="gallery">
                                <div class="media-text">
                                    <h3>Prasasti Batu Tulis</h3>
                                    <span class="location">Kota Bogor</span>
                                    <div class="media-stars">
                                        <h4 class="location pt-2" style="margin-left: 30px;">4,6</h4>
                                        <span class="star ml-1">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star-setengah">&#9733;</span>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/images/Prasasti-Batu-Tulis..jpg') }}" alt="Image"
                                    class="img-fluids-card">
                            </a>

                            <span class="d-flex align-items-center loc mb-2 pt-3">
                                <span class="icon-room mr-3"></span>
                                <span>Kota Bogor</span>
                            </span>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h3><a href="#">Prasasti Batu Tulis</a></h3>
                                    <div class="price ml-auto">
                                        <span>Gratis</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Wisata 6 -->
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="media-1">
                            <a class="media-thumb" href="{{ asset('assets/images/Museum-Zoologi.jpg') }}"
                                data-fancybox="gallery">
                                <div class="media-text">
                                    <h3>Museum Zoologi</h3>
                                    <span class="location">Kota Bogor</span>
                                    <div class="media-stars">
                                        <h4 class="location pt-2" style="margin-left: 40px;">4,5</h4>
                                        <span class="star ml-1">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star-setengah">&#9733;</span>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/images/Museum-Zoologi.jpg') }}" alt="Image"
                                    class="img-fluids-card">
                            </a>

                            <span class="d-flex align-items-center loc mb-2 pt-3">
                                <span class="icon-room mr-3"></span>
                                <span>Kota Bogor</span>
                            </span>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h3><a href="#">Museum Zoologi</a></h3>
                                    <div class="price ml-auto">
                                        <span>Rp15.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="media-1">
                            <a class="media-thumb" href="{{ asset('assets/images/Water-Kingdom.jpg') }}"
                                data-fancybox="gallery">
                                <div class="media-text">
                                    <h3>Water Kingdom</h3>
                                    <span class="location">Kabupaten Bogor</span>
                                    <div class="media-stars">
                                        <h4 class="location pt-2" style="margin-left: 45px;">4,3</h4>
                                        <span class="star ml-1">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star-setengah">&#9733;</span>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/images/Water-Kingdom.jpg') }}" alt="Image"
                                    class="img-fluids-card">
                            </a>

                            <span class="d-flex align-items-center loc mb-2 pt-3">
                                <span class="icon-room mr-3"></span>
                                <span>Kabupaten Bogor</span>
                            </span>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h3><a href="#">Water Kingdom</a></h3>
                                    <div class="price ml-auto">
                                        <span>Rp85.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Wisata 8 -->
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="media-1">
                            <a class="media-thumb" href="{{ asset('assets/images/JungleLand-Adventure.jpg') }}"
                                data-fancybox="gallery">
                                <div class="media-text">
                                    <h3>JungLand Adventure</h3>
                                    <span class="location">Kabupaten Bogor</span>
                                    <div class="media-stars">
                                        <h4 class="location pt-2" style="margin-left: 22px;">4,4</h4>
                                        <span class="star ml-1">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star-setengah">&#9733;</span>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/images/JungleLand-Adventure.jpg') }}" alt="Image"
                                    class="img-fluids-card">
                            </a>

                            <span class="d-flex align-items-center loc mb-2 pt-3">
                                <span class="icon-room mr-3"></span>
                                <span>Kabupaten Bogor</span>
                            </span>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h3><a href="#">JungLand Adventure</a></h3>
                                    <div class="price ml-auto">
                                        <span>Rp140.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Wisata 7 -->
                    <!-- <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="media-1">
              <a class="media-thumb" href="images/curugnangka.jpg" data-fancybox="gallery">
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
                <img src="images/curugnangka.jpg" alt="Image" class="img-fluids-card">
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
          </div> -->

                    <!-- Wisata 8 -->
                    <!-- <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="media-1">
              <a class="media-thumb" href="images/Lembah Tepus.jpg" data-fancybox="gallery">
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
                <img src="images/Lembah Tepus.jpg" alt="Image" class="img-fluids-card">
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

        <p class="text-btn text-center pt-5"><a href="#" class="btn btn-primary">Lihat Semua</a></p> -->
                </div>
                <p>
                    <!-- END .custom-block -->
                <div class="untree_co-section mt-5">
                    


                        <!-- Destinasi Wisata Kota Bogor -->

                        <div class="row">
                            <!-- Wisata 1 -->
                            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <div class="media-1">
                                    <a class="media-thumb" href="{{ asset('assets/images/taman-safari-3.jpg') }}"
                                        data-fancybox="gallery">
                                        <div class="media-text">
                                            <h3>Taman Safari</h3>
                                            <span class="location">Kabupaten Bogor</span>
                                            <div class="media-stars">
                                                <h4 class="location pt-2" style="margin-left: 53px;">4,7</h4>
                                                <span class="star ml-1">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star-setengah">&#9733;</span>
                                            </div>
                                        </div>
                                        <img src="{{ asset('assets/images/taman-safari-3.jpg') }}" alt="Image"
                                            class="img-fluids-card">
                                    </a>

                                    <span class="d-flex align-items-center loc mb-2 pt-3">
                                        <span class="icon-room mr-3"></span>
                                        <span>Kota Bogor</span>
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
                                    <a class="media-thumb" href="{{ asset('assets/images/taman-matahari.png') }}"
                                        data-fancybox="gallery">
                                        <div class="media-text">
                                            <h3>Taman Matahari</h3>
                                            <span class="location">Kabupaten Bogor</span>
                                            <div class="media-stars" style="margin-left: 20px;">
                                                <h4 class="location pt-2">4,5</h4>
                                                <span class="star ml-1">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star-setengah">&#9733;</span>
                                            </div>
                                        </div>
                                        <img src="{{ asset('assets/images/taman-matahari.png') }}" alt="Image"
                                            class="img-fluids-card">
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

                            <!-- Wisata 3 -->
                            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <div class="media-1">
                                    <a class="media-thumb"
                                        href="{{ asset('assets/images/dairyland Riverside.png') }}"
                                        data-fancybox="gallery">
                                        <div class="media-text">
                                            <h3>Dairyland Reverside</h3>
                                            <span class="location">Kabupaten Bogor</span>
                                            <div class="media-stars">
                                                <h4 class="location pt-2" style="margin-left: 23px;">4,5</h4>
                                                <span class="star ml-1">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star-setengah">&#9733;</span>
                                            </div>
                                        </div>
                                        <img src="{{ asset('assets/images/dairyland Riverside.png') }}"
                                            alt="Image" class="img-fluids-card">
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
                                    <a class="media-thumb" href="{{ asset('assets/images/NICOLES_RIVER_PARK.jpg') }}"
                                        data-fancybox="gallery">
                                        <div class="media-text">
                                            <h3>Nicole's River Park</h3>
                                            <span class="location">Kabupaten Bogor</span>
                                            <div class="media-stars">
                                                <h4 class="location pt-2" style="margin-left: 31px;">4,5</h4>
                                                <span class="star ml-1">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star-setengah">&#9733;</span>
                                            </div>
                                        </div>
                                        <img src="{{ asset('assets/images/NICOLES_RIVER_PARK.jpg') }}" alt="Image"
                                            class="img-fluids-card">
                                    </a>

                                    <span class="d-flex align-items-center loc mb-2 pt-3">
                                        <span class="icon-room mr-3"></span>
                                        <span>Kabupaten Bogor</span>

                                    </span>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h3><a href="#">Nicole's River Park</a></h3>
                                            <div class="price ml-auto">
                                                <span>Rp35.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <!-- Wisata 5 -->
                            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <div class="media-1">
                                    <a class="media-thumb"
                                        href="{{ asset('assets/images/Taman-Budaya-Sentul.jpg') }}"
                                        data-fancybox="gallery">
                                        <div class="media-text">
                                            <h3>Taman Budaya Sentul</h3>
                                            <span class="location">Kabupaten Bogor</span>
                                            <div class="media-stars">
                                                <h4 class="location pt-2" style="margin-left: 16px;">4,5</h4>
                                                <span class="star ml-1">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star-setengah">&#9733;</span>
                                            </div>
                                        </div>
                                        <img src="{{ asset('assets/images/Taman-Budaya-Sentul.jpg') }}"
                                            alt="Image" class="img-fluids-card">
                                    </a>

                                    <span class="d-flex align-items-center loc mb-2 pt-3">
                                        <span class="icon-room mr-3"></span>
                                        <span>Kabupaten Bogor</span>
                                    </span>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h3><a href="#">Taman Budaya Sentul</a></h3>
                                            <div class="price ml-auto">
                                                <span>Rp30.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Wisata 6 -->
                            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <div class="media-1">
                                    <a class="media-thumb"
                                        href="{{ asset('assets/images/Nirvana-Valley-Resort.png') }}"
                                        data-fancybox="gallery">
                                        <div class="media-text">
                                            <h3>Nirvana Valley Resort</h3>
                                            <span class="location">Kabupaten Bogor</span>
                                            <div class="media-stars">
                                                <h4 class="location pt-2" style="margin-left: 16px;">4,5</h4>
                                                <span class="star ml-1">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star">&#9733;</span>
                                                <span class="star-setengah">&#9733;</span>
                                            </div>
                                        </div>
                                        <img src="{{ asset('assets/images/Nirvana-Valley-Resort.png') }}"
                                            alt="Image" class="img-fluids-card">
                                    </a>

                                    <span class="d-flex align-items-center loc mb-2 pt-3">
                                        <span class="icon-room mr-3"></span>
                                        <span>Kabupaten Bogor</span>
                                    </span>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h3><a href="#">Nirvana Valley Resort</a></h3>
                                            <div class="price ml-auto">
                                                <span>Rp35.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <!-- <p class="text-btn text-center pt-5"><a href="#" class="btn btn-primary">Lihat Semua</a></p> -->
                        </div>
                    </div>
                </div>



            </div>
        </div>

        <div class="site-footer align-items-start">
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
                                    <li class="address"><a href="#">Cilibende, Bogor Tengah, Kota
                                            Bogor</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>a
            </div>



            <div class="inner dark">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-8 mb-3 mb-md-0 mx-auto">
                            <p>Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>. All Rights Reserved. &mdash;
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
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

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
    </div>

    </div>

</body>

</html>
