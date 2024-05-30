<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/logo-sm.png') }}">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

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



	<div class="hero">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="intro-wrap">
						<h1 class="mb-5"><span class="d-block" style="text-align:start">Liburan & nikmati
								tempat baru di</span> di <span class="typed-words"></span></h1>

						{{-- <div class="row">
							<div class="col-12">
								<form class="form">
									<div class="row mb-2">
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
											<select name="" id="" class="form-control custom-select">
												<option value="">Bogor</option>
												<option value="">Kebun Raya Bogor</option>
												<option value="">Taman Safari</option>
												<option value="">Situ Gede</option>
												<option value="">Mekarsari</option>
												<option value="">Taman Riung Gunung</option>
												<option value="">Gunung Pancar</option>
												<option value="">Air Terjun Bidadari</option>
											</select>
										</div>
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-6">
											<input type="text" class="form-control" name="daterange">
										</div>


									</div>
									<div class="row align-items-center">
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
											<input type="submit" class="btn btn-primary btn-block" value="Cari">
										</div>
										<div class="col-lg-8">
											<label class="control control--checkbox mt-3">
												<span class="caption">Simpan pencarian ini.</span>
												<input type="checkbox" checked="checked" />
												<div class="control__indicator"></div>
											</label>
										</div>
									</div>
								</form>
							</div>
						</div> --}}
					</div>
				</div>
				<div class="col-lg-5">
					<div class="slides">
						<img src="{{ asset('assets/images/kebun-raya-bogor-3.jpg') }}" alt="Image" class="img-fluids active">
						<img src="{{ asset('assets/images/taman-safari-3.jpg') }}" alt="Image" class="img-fluids">
						<img src="{{ asset('assets/images/mekarsari-3.jpg') }}" alt="Image" class="img-fluids">
						<img src="{{ asset('assets/images/gunung-pancar-3.jpg') }}" alt="Image" class="img-fluids">
						<img src="{{ asset('assets/images/situ-gede-3.jpg') }}" alt="Image" class="img-fluids">
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="untree_co-section">
		<div class="container">
			<div class="row mb-5 justify-content-center">
				<div class="col-lg-6 text-center">
					<h2 class="section-title text-center mb-3">Layanan Kami</h2>
					<p>Menjadi penyedia wisata kota terkemuka, kami di GorTour dengan bangga menawarkan
						berbagai layanan unggulan
						untuk memastikan pengalaman wisata kota Anda menjadi tak terlupakan. Dengan komitmen kami untuk
						memberikan pelayanan
						terbaik, tim profesional kami siap membantu Anda menjelajahi keindahan dan budaya kota ini.</p>
				</div>
			</div>
			<div class="row align-items-stretch">
				<div class="col-lg-4 order-lg-1">
					<div class="h-100">
						<div class="frame h-100">
							<div class="feature-img-bg h-100" style="background-image: url('{{ asset('assets/images/situ-gede-3.jpg') }}');">
							</div>
						</div>
					</div>
				</div>

				<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1">

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-house display-4 text-primary"></span>
							<h3>Wisata Indah</h3>
							<p class="mb-0">Temukan keindahan alam yang memesona dan objek wisata menarik.</p>
						</div>
					</div>

					<div class="feature-1 ">
						<div class="align-self-center">
							<span class="flaticon-restaurant display-4 text-primary"></span>
							<h3>Mudah Dijangkau</h3>
							<p class="mb-0">Nikmati kuliner lezat dan beragam dari restoran lokal terbaik.</p>
						</div>
					</div>

				</div>

				<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3">

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-mail display-4 text-primary"></span>
							<h3>Tempat Makan</h3>
							<p class="mb-0">Lokasi mudah dijangkau dengan berbagai opsi transportasi.</p>
						</div>
					</div>

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-phone-call display-4 text-primary"></span>
							<h3>Kontak</h3>
							<p class="mb-0">Tim kami siap membantu Anda merencanakan perjalanan yang sempurna.</p>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>

	<div class="untree_co-section count-numbers py-5">
		<div class="container">
			<div class="row">
				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter">
							<span class="" data-number="9313">0</span>
						</div>
						<span class="caption">Tempat Wisata</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter">
							<span class="" data-number="8492">0</span>
						</div>
						<span class="caption">Mitra</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter">
							<span class="" data-number="100">0</span>
						</div>
						<span class="caption">Pengunjung</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter">
							<span class="" data-number="4">0</span>
						</div>
						<span class="caption">Kepuasan</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="untree_co-section">
		<div class="container">
			<div class="row text-center justify-content-center mb-5">
				<div class="col-lg-7">
					<h2 class="section-title text-center">Popular Destination</h2>
				</div>
			</div>

			<div class="owl-carousel owl-3-slider">

				<div class="item">
					<a class="media-thumb" href="{{ asset('assets/images/kebun-raya-bogor-3.jpg') }}" data-fancybox="gallery">
						<div class="media-text">
							<h3>Kebun Raya Bogor</h3>
							<span class="location">Bogor</span>

						</div>
						<img src="{{ asset('assets/images/kebun-raya-bogor-3.jpg') }}" alt="Image" class="img-fluids">
					</a>
				</div>

				<div class="item">
					<a class="media-thumb" href="{{ asset('assets/images/situ-gede-3.jpg') }}" data-fancybox="gallery">
						<div class="media-text">
							<h3>Situ Gede</h3>
							<span class="location">Bogor</span>
						</div>
						<img src="{{ asset('assets/images/situ-gede-3.jpg') }}" alt="Image" class="img-fluids">
					</a>
				</div>

				<div class="item">
					<a class="media-thumb" href="{{ asset('assets/images/taman-riung-gunung-3.jpg') }}" data-fancybox="gallery">
						<div class="media-text">
							<h3>Taman Riung Gunung</h3>
							<span class="location">Bogor</span>
						</div>
						<img src="{{ asset('assets/images/taman-riung-gunung-3.jpg') }}" alt="Image" class="img-fluids">
					</a>
				</div>


				<div class="item">
					<a class="media-thumb" href="{{ asset('assets/images/mekarsari-3.jpg') }}" data-fancybox="gallery">
						<div class="media-text">
							<h3>Mekarsari</h3>
							<span class="location">Bogor</span>
						</div>
						<img src="{{ asset('assets/images/mekarsari-3.jpg') }}" alt="Image" class="img-fluids">
					</a>
				</div>

				<div class="item">
					<a class="media-thumb" href="{{ asset('assets/images/taman-safari-3.jpg') }}" data-fancybox="gallery">
						<div class="media-text">
							<h3>Taman Safari</h3>
							<span class="location">Bogor</span>
						</div>
						<img src="{{ asset('assets/images/taman-safari-3.jpg') }}" alt="Image" class="img-fluids">
					</a>
				</div>

				<div class="item">
					<a class="media-thumb" href="{{ asset('assets/images/gunung-pancar-3.jpg') }}" data-fancybox="gallery">
						<div class="media-text">
							<h3>Gunung Pancar</h3>
							<span class="location">Bogor</span>
						</div>
						<img src="{{ asset('assets/images/gunung-pancar-3.jpg') }}" alt="Image" class="img-fluids">
					</a>
				</div>

			</div>

		</div>
	</div>


	<div class="untree_co-section testimonial-section mt-5">
		<div class="container">
			<div class="row justify-content-center-beranda">
				<div class="col-lg-7 text-center">
					<h2 class="section-title text-center mb-5">Testimoni</h2>

					<div class="owl-single owl-carousel no-nav">
						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="{{ asset('assets/images/person_2.jpg') }}" alt="Image" class="img-fluids">
							</figure>
							<h3 class="name">Adam Aderson</h3>
							<blockquote>
								<p>&ldquo;Saya sangat menikmati tur kota ini! Pemandu wisata kami sangat ramah dan
									berpengetahuan, dan saya benar-benar suka cara
									mereka menyusun tur agar sesuai dengan minat kami. Pengalaman tanpa kendaraan ini
									membuat liburan saya lebih santai dan
									tak terlupakan. Terima kasih, GorTour.&rdquo;</p>
							</blockquote>
						</div>

						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="{{ asset('assets/images/person_3.jpg') }}" alt="Image" class="img-fluids">
							</figure>
							<h3 class="name">Lukas Devlin</h3>
							<blockquote>
								<p>&ldquo;Tur petualangan senja mereka sungguh mengagumkan! Melihat matahari terbenam di
									lokasi yang dipilih dengan baik oleh tim
									GorTour adalah salah satu momen terindah dalam perjalanan saya. Aktivitas
									seru dan pemandangan luar biasa.
									Sangat direkomendasikan!&rdquo;</p>
							</blockquote>
						</div>

						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="{{ asset('assets/images/person_4.jpg') }}" alt="Image" class="img-fluids">
							</figure>
							<h3 class="name">Kayla Bryant</h3>
							<blockquote>
								<p>&ldquo;Tur kuliner GorTour sungguh memuaskan lidah saya! Dari makanan
									jalanan hingga restoran mewah, semuanya luar
									biasa. Pemandu kami memberikan informasi menarik tentang sejarah kuliner setiap
									tempat yang kami kunjungi. Saya merasa
									benar-benar merasakan jiwa kota melalui makanannya.&rdquo;</p>
							</blockquote>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>


	<div class="untree_co-section">
		<div class="container">
			<div class="row justify-content-center-beranda text-center mb-5">
				<div class="col-lg-6">
					<h2 class="section-title text-center mb-3">Penawaran &amp; Diskon</h2>
					<p>Jelajahi dunia dengan penawaran eksklusif dari situs rekomendasi wisata kami! Dapatkan diskon
						istimewa untuk paket
						perjalanan, tiket atraksi populer, dan penginapan terbaik. Jangan lewatkan kesempatan untuk
						merencanakan liburan impian
						Anda dengan harga terbaik.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
					<div class="media-1">
						<a href="#" class="d-block mb-3"><img src="{{ asset('assets/images/situ-gede-3.jpg') }}" alt="Image"
								class="img-fluids"></a>
						<span class="d-flex align-items-center loc mb-2">
							<span class="icon-room mr-3"></span>
							<span>Bogor</span>
						</span>
						<div class="d-flex align-items-center">
							<div>
								<h3><a href="#">Situ Gede</a></h3>
								<div class="price ml-auto">
									<span>Rp35.000</span>
								</div>
							</div>

						</div>

					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
					<div class="media-1">
						<a href="#" class="d-block mb-3"><img src="{{ asset('assets/images/gunung-pancar-3.jpg') }}" alt="Image"
								class="img-fluids"></a>
						<span class="d-flex align-items-center loc mb-2">
							<span class="icon-room mr-3"></span>
							<span>Bogor</span>
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
				<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
					<div class="media-1">
						<a href="#" class="d-block mb-3"><img src="{{ asset('assets/images/taman-safari-3.jpg') }}" alt="Image"
								class="img-fluids"></a>
						<span class="d-flex align-items-center loc mb-2">
							<span class="icon-room mr-3"></span>
							<span>Bogor</span>
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
				<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
					<div class="media-1">
						<a href="#" class="d-block mb-3"><img src="{{ asset('assets/images/kebun-raya-bogor-3.jpg') }}" alt="Image"
								class="img-fluids"></a>

						<span class="d-flex align-items-center loc mb-2">
							<span class="icon-room mr-3"></span>
							<span>Bogor</span>
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
			</div>
		</div>
	</div>

	<div class="untree_co-section">
		<div class="container">
			<div class="row justify-content-between align-items-center">

				<div class="col-lg-6">
					<figure class="img-play-video">
						<a id="play-video" class="video-play-button"
							href="https://youtu.be/p3iAkX5qrDE?si=JPwSnJPaHMilDb2U" data-fancybox>
							<span></span>
						</a>
						<img src="{{ asset('assets/images/situ-gede-3.jpg') }}" alt="Image" class="img-fluids rounded-20">
					</figure>
				</div>

				<div class="col-lg-5">
					<h2 class="section-title text-left mb-4">Jelajahi Lebih Jelas di Video</h2>
					<p>Situ Gede Kota Bogor merupakan destinasi wisata alam yang mengandalkan pesona situ atau telaga
						sebagai nilai jualnya.
						Tidak hanya itu, Situ Gede Kota Bogor juga menawarkan pemandangan alam yang asri dengan
						pepohonan hijau dan besar yang
						membuat suasana terasa sejuk.</p>

					<p class="mb-4">Situ Gede Kota Bogor terletak di tepi hutan Dramaga dan terhubung dalam satu sistem
						dengan sejumlah situ di dekatnya,
						yaitu Situ Leutik, Situ Panjang, dan Situ Burung.</p>

					<ul class="list-unstyled two-col clearfix">
						<li>Perahu Kayuh Romantis</li>
						<li>Piknik di Tepi Danau</li>
						<li>Selancar Angin Ekstrem</li>
						<li>Memancing Bersama Keluarga</li>
						<li>Trail Hiking Sejauh Danau</li>
						<li>Festival Perahu Hias</li>
						<li>Kelas Memasak Lokal</li>
						<li>Kawanan Burung</li>
					</ul>

					<p><a href="#" class="btn btn-primary">Kunjungi Wisata</a></p>


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
    <script>
        $(function () {
            var slides = $('.slides'),
                images = slides.find('img');

            images.each(function (i) {
                $(this).attr('data-id', i + 1);
            })

            var typed = new Typed('.typed-words', {
                strings: [" Kebun Raya Bogor.", " Taman Safari.", " Mekarsari.", " Gunung Pancar.", " Situ Gede."],
                typeSpeed: 80,
                backSpeed: 80,
                backDelay: 4000,
                startDelay: 1000,
                loop: true,
                showCursor: true,
                preStringTyped: (arrayPos, self) => {
                    arrayPos++;
                    console.log(arrayPos);
                    $('.slides img').removeClass('active');
                    $('.slides img[data-id="' + arrayPos + '"]').addClass('active');
                }

            });
        })
    </script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>