<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Visit Bali’s Mangrove Forest</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?= base_url() ?>assets/img/logo-mg.png" rel="icon">
	<link href="<?= base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url() ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

	<!-- CSS Tabel -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

	<!-- CSS Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

	<!-- JS Leaflet -->
	<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
	
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top d-flex align-items-center header-transparent">
		<div class="container-fluid">
			<div class="row justify-content-center align-items-center">
				<div class="col-xl-11 d-flex align-items-center justify-content-between">
					<h1 class="logo"><img src="<?= base_url() ?>assets/img/lg-mv-gr.png" alt=""></h1>
					<!-- .navbar -->
					<nav id="navbar" class="navbar">
						<ul>
						<li><a class="nav-link scrollto active" href="#hero">Home</a></li>
						<li><a class="nav-link scrollto" href="#about">About</a></li>
						<li><a class="nav-link scrollto" href="#services">Maps</a></li>
						<li><a class="nav-link scrollto " href="#portfolio">Documentation</a></li>
						<li><a class="nav-link scrollto" href="#team">Team</a></li>
						<li><a class="nav-link scrollto" href="#contact">Contact</a></li>
						<li><a class="nav-link scrollto" href="<?= site_url('auth')?>" target="_blank">Login</a></li>
						</ul>
						<i class="bi bi-list mobile-nav-toggle"></i>
					</nav>
				</div>
			</div>
	
		</div>
	</header>
	<!-- End Header -->

	<!-- ======= hero Section ======= -->
	<section id="hero">
		<div class="hero-container">
			<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
				<ol id="hero-carousel-indicators" class="carousel-indicators"></ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active" style="background-image: url(<?= base_url() ?>assets/img/hero-carousel/sun.jpg)">
						<div class="carousel-container">
							<div class="container">
								<h2 class="animate__animated animate__fadeInDown">Visit Bali’s <b style="color: #18d36e;">Mangrove</b> Forest</h2>
								<p class="animate__animated animate__fadeInUp">
									Visit Bali’s Mangrove Forest merupakan Sistem Informasi Geografis (GIS) 
									yang digunakan untuk pemetaan tempat ekowisata Mangrove di Pulau Bali.
								</p>
							</div>
						</div>
					</div>
					<div class="carousel-item" style="background-image: url(<?= base_url() ?>assets/img/hero-carousel/sunset.jpg)">
						<div class="carousel-container">
							<div class="container">
								<h2 class="animate__animated animate__fadeInDown">Visit Bali’s <b style="color: #18d36e;">Mangrove</b> Forest</h2>
								<p class="animate__animated animate__fadeInUp">
									Visit Bali’s Mangrove Forest merupakan Sistem Informasi Geografis (GIS) 
									yang digunakan untuk pemetaan tempat ekowisata Mangrove di Pulau Bali.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Hero Section -->

	<main id="main">

		<!-- ======= About Us Section ======= -->
		<section id="about">
			<div class="container" data-aos="fade-up">
				<header class="section-header">
					<h3>About Bali’s <b style="color: #18d36e;">Mangrove</b></h3>
					<p>Hutan Mangrove atau hutan bakau bermanfaat dalam menahan gelombang air laut 
						yang masuk ke daratan sehingga dapat mengurangi abrasi atau pengikisan tanah 
						pinggir pantai. Pulau Bali dikelilingi oleh laut dengan ombak yang besar. 
						Oleh karena itu untuk melindungi pantai di Bali dari abrasi, maka pemerintah 
						provinsi Bali bekerja sama dengan Jepang untuk membuat hutan mangrove.
					</p>
				</header>

				<div class="row about-cols justify-content-center">
					<div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="100">
						<div class="about-col">
							<div class="img">
								<img src="<?= base_url() ?>assets/img/about-mission.jpg" alt="" class="img-fluid">
									<div class="icon"><i class="bi bi-bar-chart"></i></div>
							</div>
							<h2 class="title"><a href="#">Our Mission</a></h2>
							<p>
								Menciptakan kepedulian masyarakat melalui program yang kami kembangkan 
								dengan upaya memperkenalkan kawasan Mangrove lewat pemetaan ekowisata 
								Mangrove di Pulau Bali. Serta memberdayakan masyarakat untuk berperan 
								aktif dalam pelestarian Mangrove.
							</p>
						</div>
					</div>
					<div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
						<div class="about-col">
							<div class="img">
								<img src="<?= base_url() ?>assets/img/about-plan.jpg" alt="" class="img-fluid">
								<div class="icon"><i class="bi bi-brightness-high"></i></div>
							</div>
							<h2 class="title"><a href="#">Our Plan</a></h2>
							<p>
								Mengembangkan program Visit Bali’s Mangrove Forest menjadi sistem informasi 
								yang lebih profesional sehingga dapat bermanfaat untuk masyarakat yang akan 
								berkuncung ke kawasan Ekowisata Mangrove di Pulau Bali.
								<br>
								<br>
							</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="300">
						<div class="about-col">
							<div class="img">
								<img src="<?= base_url() ?>assets/img/about-vision.jpg" alt="" class="img-fluid">
								<div class="icon"><i class="bi bi-calendar4-week"></i></div>
							</div>
							<h2 class="title"><a href="#">Our Vision</a></h2>
							<p>
								Merevitalisasi area Mangrove di Bali untuk menciptakan lingkungan yang 
								seimbang dalam mendukung program Pemerintah untuk menghadapi perubahan 
								iklim serta pemanasan global.
								<br>
								<br>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Us Section -->

		<!-- ======= Services Maps Section ======= -->
		<section id="services">
			<div class="container" data-aos="fade-up">

				<header class="section-header wow fadeInUp">
					<h3>Maps</h3>
					<p>Pemetaan Bali's <b style="color: #18d36e;">Mangrove</b> Forest</p>
				</header>

				<!-- Leaflet -->
				<div class="row mx-auto">
					<div id="map" class="card" style="width: 1100px; height: 550px;">
						<script>
							const map = L.map('map').setView([-8.409518, 115.188919], 10);

							const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
								maxZoom: 19,
								attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
							}).addTo(map);
							
							<?php
							foreach ($tabelbali as $row => $value) { ?>
								L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>])
								.bindPopup("<b><?= $value->nama ?></b>").addTo(map)
							<?php } ?>

						</script>
					</div>
				</div>
				<div class="card-body pt-5">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Tempat</th>
                                    <th>Alamat Tempat</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; foreach ($tbbali as $bali) :  $i++; ?>
                                <tr>
                                    <td><strong><?php echo $i ?></strong></td>
                                    <td><?php echo $bali['nama']; ?></td>
                                    <td><?php echo $bali['alamat']; ?></td>
                                    <td><?php echo $bali['latitude']; ?></td>
                                    <td><?php echo $bali['longitude']; ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
		</section>
		<!-- End Services Maps Section -->

		<!-- ======= Call To Action Section ======= -->
		<section id="call-to-action">
			<div class="container text-center" data-aos="zoom-in">
				<h3>Hello Administrator</h3>
				<p> Apabila Anda ingin mengelola data pemetaan 
					<b>Visit Bali’s Mangrove Forest</b> 
					dapat masuk ke halaman <b>Dashboard Admin</b></p>
				<a class="cta-btn" href="<?= site_url('auth')?>" target="_blank">Login</a>
			</div>
		</section>
		<!-- End Call To Action Section -->

		<!-- ======= Documentation ======= -->
		<section id="portfolio" class="section-bg">
			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h3 class="section-title">Documentation</h3>
				</header>

				<div class="row" data-aos="fade-up" data-aos-delay="100"">
					<div class=" col-lg-12">
						<ul id="portfolio-flters">
							<li data-filter="*" class="filter-active">All</li>
							<li data-filter=".filter-buleleng">Kab. Buleleng</li>
							<li data-filter=".filter-jembrana">Kab. Jembrana</li>
							<li data-filter=".filter-badung">Kab. Badung</li>
							<li data-filter=".filter-denpasar">Kota Denpasar</li>
						</ul>
					</div>
				</div>

				<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

					<div class="col-lg-4 col-md-6 portfolio-item filter-buleleng">
						<div class="portfolio-wrap">
							<figure>
								<img src="<?= base_url() ?>assets/img/bulelang/gm_3.JPG" class="img-fluid" alt="">
								<a href="<?= base_url() ?>assets/img/bulelang/gm_3.JPG" class="link-preview portfolio-lightbox" 
								data-gallery="portfolioGallery" data-lightbox="portfolio" data-title="Green Mangrove" 
								class="link-preview" style="margin-left: 25px;"><i class="bi bi-plus"></i></a>
							</figure>

							<div class="portfolio-info">
								<h4><a href="">Green Mangrove</a></h4>
								<p>Kab. Buleleng</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-jembrana">
						<div class="portfolio-wrap">
							<figure>
								<img src="<?= base_url() ?>assets/img/jembrana/mp_3.jpg" class="img-fluid" alt="">
								<a href="<?= base_url() ?>assets/img/jembrana/mp_3.jpg" class="link-preview portfolio-lightbox" 
								data-gallery="portfolioGallery" title="Mangrove Perancak" style="margin-left: 25px;">
								<i class="bi bi-plus"></i></a>
							</figure>

							<div class="portfolio-info">
								<h4><a href="">Mangrove Perancak</a></h4>
								<p>Kab. Jembrana</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-buleleng">
						<div class="portfolio-wrap">
							<figure>
								<img src="<?= base_url() ?>assets/img/bulelang/gm_5.JPG" class="img-fluid" alt="">
								<a href="<?= base_url() ?>assets/img/bulelang/gm_5.JPG" class="link-preview portfolio-lightbox" 
								data-gallery="portfolioGallery" title="Green Mangrove" style="margin-left: 25px;">
								<i class="bi bi-plus"></i></a>
							</figure>

							<div class="portfolio-info">
								<h4><a href="">Green Mangrove</a></h4>
								<p>Kab. Buleleng</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-badung">
						<div class="portfolio-wrap">
							<figure>
								<img src="<?= base_url() ?>assets/img/badung/mn_1.JPG" class="img-fluid" alt="">
								<a href="<?= base_url() ?>assets/img/badung/mn_1.JPG" class="link-preview portfolio-lightbox" 
								data-gallery="portfolioGallery" title="Mangrove Nusantara" style="margin-left: 25px;">
								<i class="bi bi-plus"></i></a>
							</figure>

							<div class="portfolio-info">
								<h4><a href="">Mangrove Nusantara</a></h4>
								<p>Kab. Badung</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-denpasar">
						<div class="portfolio-wrap">
							<figure>
								<img src="<?= base_url() ?>assets/img/denpasar/mcf_00.jpeg" class="img-fluid" alt="">
								<a href="<?= base_url() ?>assets/img/denpasar/mcf_00.jpeg" class="link-preview portfolio-lightbox" 
								data-gallery="portfolioGallery" title="Mangrove Conservation Forest" style="margin-left: 25px;">
								<i class="bi bi-plus"></i></a>
							</figure>

							<div class="portfolio-info">
								<h4><a href="">Mangrove Conservation Forest</a></h4>
								<p>Kota Denpasar</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-jembrana">
						<div class="portfolio-wrap">
							<figure>
								<img src="<?= base_url() ?>assets/img/jembrana/mv_22.jpg" class="img-fluid" alt="">
								<a href="<?= base_url() ?>assets/img/jembrana/mv_22.jpg" class="link-preview portfolio-lightbox" 
								data-gallery="portfolioGallery" title="Mangrove Village" style="margin-left: 25px;">
								<i class="bi bi-plus"></i></a>
							</figure>

							<div class="portfolio-info">
								<h4><a href="">Mangrove Village</a></h4>
								<p>Kab. Jembrana</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-badung">
						<div class="portfolio-wrap">
							<figure>
								<img src="<?= base_url() ?>assets/img/badung/mt_4.jpg" class="img-fluid" alt="">
								<a href="<?= base_url() ?>assets/img/badung/mt_4.jpg" class="link-preview portfolio-lightbox" 
								data-gallery="portfolioGallery" title="Mangrove Tuban" style="margin-left: 25px;">
								<i class="bi bi-plus"></i></a>
							</figure>

							<div class="portfolio-info">
								<h4><a href="">Mangrove Tuban</a></h4>
								<p>Kab. Badung</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-buleleng">
						<div class="portfolio-wrap">
							<figure>
								<img src="<?= base_url() ?>assets/img/bulelang/gm_1.JPG" class="img-fluid" alt="">
								<a href="<?= base_url() ?>assets/img/bulelang/gm_1.JPG" class="link-preview portfolio-lightbox" 
								data-gallery="portfolioGallery" title="Green Mangrove" style="margin-left: 25px;">
								<i class="bi bi-plus"></i></a>
							</figure>

							<div class="portfolio-info">
								<h4><a href="">Green Mangrove</a></h4>
								<p>Kab. Buleleng</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-badung">
						<div class="portfolio-wrap">
							<figure>
								<img src="<?= base_url() ?>assets/img/badung/mk_1.jpg" class="img-fluid" alt="">
								<a href="<?= base_url() ?>assets/img/badung/mk_1.jpg" class="link-preview portfolio-lightbox" 
								data-gallery="portfolioGallery" title="Mangrove Kelan" style="margin-left: 25px;">
								<i class="bi bi-plus"></i></a>
							</figure>

							<div class="portfolio-info">
								<h4><a href="">Mangrove Kelan</a></h4>
								<p>Kab. Badung</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-jembrana">
						<div class="portfolio-wrap">
							<figure>
								<img src="<?= base_url() ?>assets/img/jembrana/mp_5.jpg" class="img-fluid" alt="">
								<a href="<?= base_url() ?>assets/img/jembrana/mp_5.jpg" class="link-preview portfolio-lightbox" 
								data-gallery="portfolioGallery" title="Mangrove Perancak" style="margin-left: 25px;">
								<i class="bi bi-plus"></i></a>
							</figure>

							<div class="portfolio-info">
								<h4><a href="">Mangrove Perancak</a></h4>
								<p>Kab. Jembrana</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-denpasar">
						<div class="portfolio-wrap">
							<figure>
								<img src="<?= base_url() ?>assets/img/denpasar/tnr_2.jpg" class="img-fluid" alt="">
								<a href="<?= base_url() ?>assets/img/denpasar/tnr_2.jpg" class="link-preview portfolio-lightbox" 
								data-gallery="portfolioGallery" title="Tahura Ngurah Rai" style="margin-left: 25px;">
								<i class="bi bi-plus"></i></a>
							</figure>

							<div class="portfolio-info">
								<h4><a href="">Tahura Ngurah Rai</a></h4>
								<p>Kota Denpasar</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-badung">
					<div class="portfolio-wrap">
						<figure>
							<img src="<?= base_url() ?>assets/img/badung/emk_11.jpg" class="img-fluid" alt="">
							<a href="<?= base_url() ?>assets/img/badung/emk_11.jpg" class="link-preview portfolio-lightbox" 
							data-gallery="portfolioGallery" title="Eco Mangrove Kedonganan" style="margin-left: 25px;">
							<i class="bi bi-plus"></i></aigure>

						<div class="portfolio-info">
							<h4><a href="">Eco Mangrove Kedonganan</a></h4>
							<p>Kab. Badung</p>
						</div>
					</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-badung">
						<div class="portfolio-wrap">
							<figure>
								<img src="<?= base_url() ?>assets/img/badung/mts_3.jpg" class="img-fluid" alt="">
								<a href="<?= base_url() ?>assets/img/badung/mts_3.jpg" class="link-preview portfolio-lightbox" 
								data-gallery="portfolioGallery" title="Mangrove Taman Sari" style="margin-left: 25px;">
								<i class="bi bi-plus"></i></a>
							</figure>

							<div class="portfolio-info">
								<h4><a href="">Mangrove Taman Sari</a></h4>
								<p>Kab. Badung</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-denpasar">
						<div class="portfolio-wrap">
							<figure>
								<img src="<?= base_url() ?>assets/img/denpasar/mcf_11.jpg" class="img-fluid" alt="">
								<a href="<?= base_url() ?>assets/img/denpasar/mcf_11.jpg" class="link-preview portfolio-lightbox" 
								data-gallery="portfolioGallery" title="Mangrove Conservation Forest" style="margin-left: 25px;">
								<i class="bi bi-plus"></i></a>
							</figure>

							<div class="portfolio-info">
								<h4><a href="">Mangrove Conservation Forest</a></h4>
								<p>Kota Denpasar</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-badung">
						<div class="portfolio-wrap">
							<figure>
								<img src="<?= base_url() ?>assets/img/badung/mt_3.jpg" class="img-fluid" alt="">
								<a href="<?= base_url() ?>assets/img/badung/mt_3.jpg" class="link-preview portfolio-lightbox" 
								data-gallery="portfolioGallery" title="Mangrove Tuban" style="margin-left: 25px;">
								<i class="bi bi-plus"></i></a>
							</figure>

							<div class="portfolio-info">
								<h4><a href="">Mangrove Tuban</a></h4>
								<p>Kab. Badung</p>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section>
		<!-- End Documentation -->

		<!-- ======= Team Section ======= -->
		<section id="team">
			<div class="container" data-aos="fade-up">
				<div class="section-header">
					<h3>Team</h3>
					<p>Program Sistem Informasi Geografis (GIS) <b>Visit Bali’s</b> 
					<b style="color: #18d36e;">Mangrove</b> <b>Forest</b> dirancang dan  dikembangkan oleh</p>
				</div>

				<div class="row" style="padding-bottom: 10px;">

					<div class="col-md-4">
						<div class="member" data-aos="fade-up" data-aos-delay="100">
							<img src="<?= base_url() ?>assets/img/19650005.png" class="img-fluid" alt="">
							<div class="member-info">
								<div class="member-info-content">
									<h4>Wulan Prima S.</h4>
									<h6>19650005</h6>
									<span>Informatics Engineering Student</span>
									<span>State Islamic University of Malang</span>
									<div class="social">
										<a href="mailto:19650005@student.uin-malang.ac.id"><i class="bi bi-envelope-fill"></i></a>
										<a href="https://instagram.com/wulanprima_?igshid=YmMyMTA2M2Y">
											<i class="bi bi-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="member" data-aos="fade-up" data-aos-delay="200">
							<img src="<?= base_url() ?>assets/img/19650013.png" class="img-fluid" alt="">
							<div class="member-info">
								<div class="member-info-content">
									<h4>Zuyinatin Khofifah</h4>
									<h6>19650013</h6>
									<span>Informatics Engineering Student</span>
									<span>State Islamic University of Malang</span>
									<div class="social">
										<a href="mailto:19650013@student.uin-malang.ac.id"><i class="bi bi-envelope-fill"></i></a>
										<a href="https://instagram.com/zuyinatink?igshid=YmMyMTA2M2Y=">
											<i class="bi bi-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="member" data-aos="fade-up" data-aos-delay="300">
							<img src="<?= base_url() ?>assets/img/19650016.png" class="img-fluid" alt="">
							<div class="member-info">
								<div class="member-info-content">
									<h4>Puan Maharani K.</h4>
									<h6>19650016</h6>
									<span>Informatics Engineering Student</span>
									<span>State Islamic University of Malang</span>
									<div class="social">
										<a href="mailto:19650016@student.uin-malang.ac.id"><i class="bi bi-envelope-fill"></i></a>
										<a href="https://instagram.com/puan.mhrn?igshid=YmMyMTA2M2Y">
											<i class="bi bi-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section>
		<!-- End Team Section -->

		<!-- ======= Contact Section ======= -->
		<section id="contact" class="section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-header">
					<h3>Contact Us</h3>
				</div>

				<div class="row contact-info">

					<div class="col-md-4">
						<div class="contact-address">
							<i class="bi bi-geo-alt"></i>
							<h3>Address</h3>
							<address>Jl. Gajayana No.50, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144</address>
						</div>
					</div>

					<div class="col-md-4">
						<div class="contact-phone">
							<i class="bi bi-phone"></i>
							<h3>Phone Number</h3>
							<p><a href="tel:(0341) 551354">(0341) 551354</a></p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="contact-email">
							<i class="bi bi-envelope"></i>
							<h3>Email</h3>
							<p><a href="mailto:info@uin-malang.ac.id">info@uin-malang.ac.id</a></p>
						</div>
					</div>

				</div>

			</div>
		</section>
		<!-- End Contact Section -->

	</main>
	<!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6 footer-info">
						<h3><img src="<?= base_url() ?>assets/img/lg-mv-gr.png" 
						style="width: 200px;" alt=""></h3>
						<p>Visit Bali’s Mangrove Forest merupakan Sistem Informasi Geografis (GIS) 
							yang digunakan untuk pemetaan tempat ekowisata Mangrove di Pulau Bali.</p>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="#about">About</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="#services">Maps</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="#portfolio">Documentation</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="#team">Team</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="#contact">Contact</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="#">Login</a></li>
						</ul>
					</div>

				<div class="col-lg-3 col-md-6 footer-contact">
					<h4>Contact Us</h4>
					<p>
						Jl. Gajayana No.50, <br>
						Dinoyo, Kec. Lowokwaru, <br>
						Kota Malang, Jawa Timur 65144 <br>
						<br>
						<strong>Phone:</strong> (0341) 551354<br>
						<strong>Email:</strong> info@uin-malang.ac.id<br>
					</p>

				</div>

				<div class="col-lg-3 col-md-6 footer-newsletter">
					<img src="<?= base_url() ?>assets/img/mang.png" style="width: 325px;" alt="">
				</div>

				</div>
			</div>
		</div>

		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong><b style="color: #18d36e;">Vis</b>Rove</strong>. All Rights Reserved
			</div>
			<div class="credits">
			</div>
		</div>
	</footer><!-- End Footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?= base_url() ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
	<script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
	<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
	<script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
		
	<script>
		$(document).ready(function() {
    $('#example').DataTable();
} ); 
	</script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>

	

</body>

</html>