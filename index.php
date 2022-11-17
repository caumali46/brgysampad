<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Brgy. Sampad Cardona Rizal</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="57x57" href="/image/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/image/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/image/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/image/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/image/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/image/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/image/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/image/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/image/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/image/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/image/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/image/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/image/favicons/favicon-16x16.png">
	<link rel="manifest" href="../image/favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="/landing-page/assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="/landing-page/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/landing-page/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="/landing-page/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="/landing-page/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="/landing-page/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="/landing-page/assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: Remember - v4.9.1
  * Template URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="d-flex align-items-center">
		<div class="container d-flex justify-content-between">

			<div class="logo">
				<!-- <h1 class="text-light"><a href="index.html">Remember</a></h1> -->
				<!-- Uncomment below if you prefer to use an image logo -->
				<a href="index.html"><img src="../image/Logo.png" alt="" class="img-fluid"></a>
			</div>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto active" href="#hero">Home</a></li>
					<li><a class=" nav-link scrollto" href="#about">About</a></li>
					<li><a class="nav-link scrollto " href="#portfolio">Gallery</a></li>
					<li><a class="nav-link scrollto" href="#contact">Contact</a></li>
					<?php 
						if(isset($_SESSION['username'])) {
							echo '<li><a class="nav-link scrollto" href="../pages/dashboard/dashboard.php">Dashboard</a></li>';
						}
						else {
							echo '<li><a class="nav-link scrollto" href="../login.php">Login</a></li>';
						}
					?>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero" style="background-image:url(../image/cardona.png);background-position:center;background-size:cover">
		<div class="hero-container" data-aos="fade-up">
			<h1>Welcome to</h1>
			<h1>Brgy. Sampad Cardona Rizal</h1>
		</div>
	</section><!-- End Hero -->

	<main id="main">

		<!-- ======= About Section ======= -->
		<section id="about" class="about">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="zoom-in" style="box-shadow:5px 5px 15px #47525d;border-radius: 20px;background: url(../image/brgy.jpg); background-size:cover;background-repeat:no-repeat">
						<a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
					</div>

					<div class="col-xl-6 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
						<div class="box-heading" data-aos="fade-up">
							<h4>About us</h4>
							<h3></h3>
							<p>Barangay Sampad is an area under the jurisdiction of the municipality of Cardona Rizal, it is an island in Cardona which is captain Romulo Sison, it consists of 2,205 population, 544 houses are here, and 630 families are here. and the main occupation here is fishing such as building a fishpond, net fishing, and so on. Another livelihood of the Sampad people is sewing, and cutting bamboo, and Sampad is famous for drying water lilies to make bugs and mats.</p>
						</div>
					</div>
				</div>
			</div>
		</section><!-- End About Section -->

		<section class="text-center" style="background: #f5faf0;">
			<div class="container">
				<div class="row box box-solid">
					<div class="col-sm-12 box-header">
						<h3 class="box-title text-uppercase" style="margin-bottom: 1em;color: #8fc04e;">Barangay Sampad Officials</h3>
					</div>
					<div class="col-xl-6 col-lg-6 box-body">
						<dt class="text-uppercase">Barangay Captain</dt>
						<dd>1. Romulo, jr. F. Sison</dd>
						<dt class="text-uppercase">Barangay Kagawad</dt>
						<dd>1. Federico l. Bobotioc<br>
							2. Rodolfo, jr. P. Fullantes<br>
							3. Virgilio f. Granale<br>
							4. Romeo b. Paralejas<br>
							5. Allan dl. Ferido<br>
							6. Adelio f. Flordeliza<br>
							7. Nolasco f. Paralejas</dd>
						<dt class="text-uppercase">SK Chairman</dt>
						<dd>1. EDGAR P. ALCOVENDAS</dd>
					</div>
					<div class="col-xl-6 col-lg-6">
						<dt class="text-uppercase">SK Kagawad</dt>
						<dd>1. Kim justine c. Ferido<br>
							2. Aimie f. Balingit<br>
							3. Alwin a. Paralejas<br>
							4. Hazzel a. Antazo<br>
							5. Rodel p. Bueza<br>
							6. Stewart laurente<br>
							7. King james m. Bueza</dd>
						<dt class="text-uppercase">Barangay Secretary</dt>
						<dd>clares m. Abano</dd>
						<dt>barangay&nbsp;treasurer</dt>
						<dd>froilan d. Flordeliza</dd>
					</div>
				</div>
			</div>
		</section>


		<!-- ======= Cta Section ======= -->
		<section id="cta" class="cta">
			<div class="container" data-aos="zoom-in">
				<div class="text-center">
					<h3 class="text-uppercase">Cardona</h3>
					<p>Region 4A - CALABARZON, Province of Rizal</p>
					<p> Cardona is a 3rd class Municipality in the Province of Rizal, Philippines located in the island group of Luzon and within Region 4A - CALABARZON. The Municipality covers a total area of 28.56 square kilometers.</p>
					<a class="cta-btn" href="https://cardonarizal.gov.ph/"> Visit us</a>
				</div>

			</div>
		</section><!-- End Cta Section -->

		<!-- ======= Portfolio Section ======= -->
		<section id="portfolio" class="portfolio">
			<div class="container">
				<div class="section-title" data-aos="zoom-in">
					<h2>Gallery</h2>
					<h3>Check our <span>Gallery</span></h3>
					
				</div>

				<div class="row">
					<div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
						<ul id="portfolio-flters">
							<li data-filter="*" class="filter-active">All</li>
						</ul>
					</div>
				</div>

				<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

					<div class="col-md-3 col-sm-6 portfolio-item filter-app">
						<img src="../image/gallery/a.jpeg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Purok 1</h4>
							<p>>Purok 1</p>
							<a href="../image/gallery/a.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
							<a href="../image/gallery/a.jpeg" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 portfolio-item filter-web">
						<img src="../image/gallery/b.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>>Purok 2</h4>
							<p>>Purok 2</p>
							<a href="../image/gallery/b.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							<a href="../image/gallery/b.jpg" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 portfolio-item filter-app">
						<img src="../image/gallery/c.jpeg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>>Purok 3</h4>
							<p>>Purok 3</p>
							<a href="../image/gallery/c.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
							<a href="../image/gallery/c.jpeg" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 portfolio-item filter-card">
						<img src="../image/gallery/d.png" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>>Purok 4</h4>
							<p>>Purok 4</p>
							<a href="../image/gallery/d.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
							<a href="../image/gallery/d.jpeg" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 portfolio-item filter-web">
						<img src="../image/gallery/e.jpeg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>>Purok 5</h4>
							<p>>Purok 5</p>
							<a href="../image/gallery/e.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
							<a href="../image/gallery/e.jpeg" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 portfolio-item filter-app">
						<img src="../image/gallery/f.jpeg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Purok 6</h4>
							<p>Purok 6</p>
							<a href="../image/gallery/f.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
							<a href="../image/gallery/f.jpeg" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 portfolio-item filter-card">
						<img src="../image/gallery/g.png" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Purok 7</h4>
							<p>Purok 7</p>
							<a href="../image/gallery/g.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
							<a href="../image/gallery/g.png" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 portfolio-item filter-card">
						<img src="../image/gallery/h.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Purok 8</h4>
							<p>Purok 8</p>
							<a href="../image/gallery/h.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
							<a href="../image/gallery/h.jpg" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 portfolio-item filter-web">
						<img src="../image/gallery/i.jpeg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Web 3</h4>
							<p>Web</p>
							<a href="../image/gallery/i.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

				</div>

			</div>


		</section><!-- End Portfolio Section -->

		<!-- ======= F.A.Q Section ======= -->
		<section id="faq" class="faq">
			<div class="container">

				<div class="section-title" data-aos="zoom-in">
					<h2>F.A.Q</h2>
					<h3>Frequently Asked <span>Questions</span></h3>
					
				</div>

				<div class="faq-list">
					<ul>
						<li data-aos="fade-up">
							<i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">How the system helps the Resident of Barangay Sampad ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
							<div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
								<p>
									This system will help facilitate the transaction of obtaining certificates and permits and its other features
								</p>
							</div>
						</li>

						<li data-aos="fade-up" data-aos-delay="100">
							<i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">how do you get your own account?  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
							<div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
								<p>
									
go to the barangay or contact the secretary to create your own account so that you can access this website.                   
								</p>
							</div>
						</li>

						<li data-aos="fade-up" data-aos-delay="200">
							<i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Can I request certificates? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
							<div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
								<p>
									yes by logging in to this website using the account that came from the secretary. Once you have entered this website, you can request Certificates.
								</p>
							</div>
						</li>

						<li data-aos="fade-up" data-aos-delay="300">
							<i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Can I pay for certificates using this website? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
							<div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
								<p>
									yes through Gcash, you just send your payment to the Gcash of the barangay and then you can send and receive certificates proving that you have paid.
								</p>
							</div>
						</li>

						<li data-aos="fade-up" data-aos-delay="400">
							<i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">
What can you do if you encounter a problem with the website?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
							<div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
								<p>
									
First, you contact the admin by calling their number listed below or emailing their gmail account, to explain and settle your problem.
								</p>
							</div>
						</li>

					</ul>
				</div>

			</div>
		</section><!-- End F.A.Q Section -->

		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact">
			<div class="container">

				<div class="section-title" data-aos="zoom-in">
					<h2>Contact</h2>
					<h3>Check our <span>Contact</span> Details</h3>
					
				</div>

				<div>
					<iframe style="border:0; width: 100%; height: 270px;" src="https://maps.google.com/maps?q=Sampad%20Barangay%20Hall&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
				</div>

				<div class="row mt-5">
					<div class="col-lg-4" data-aos="fade-right">
						<div class="info">
							<div class="address">
								<i class="bi bi-geo-alt"></i>
								<h4>Location:</h4>
								<p>Brarangay Sampad Cardona Rizal</p>
							</div>

							<div class="email">
								<i class="bi bi-envelope"></i>
								<h4>Email:</h4>
								<p>Barangaysampad2023@gmail.com</p>
							</div>

							<div class="phone">
								<i class="bi bi-phone"></i>
								<h4>Call:</h4>
								<p>09068398049</p>
							</div>

						</div>

					</div>

					<div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

						<form action="forms/contact.php" method="post" role="form" class="php-email-form">
							<div class="row">
								<div class="col-md-6 form-group">
									<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
								</div>
								<div class="col-md-6 form-group mt-3 mt-md-0">
									<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
								</div>
							</div>
							<div class="form-group mt-3">
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
							</div>
							<div class="form-group mt-3">
								<textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
							</div>
							<div class="my-3">
								<div class="loading">Loading</div>
								<div class="error-message"></div>
								<div class="sent-message">Your message has been sent. Thank you!</div>
							</div>
							<div class="text-center"><button type="submit">Send Message</button></div>
						</form>

					</div>

				</div>

			</div>
		</section><!-- End Contact Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer">

		<div class="footer-top">

			<div class="container">

				<div class="row  justify-content-center">
					<div class="col-lg-6">
						<h3>Barangay Sampad</h3>
						<a href="cardonarizal.gov.ph">cardonarizal.gov.ph</a>
						<p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
					</div>
				</div>

				<div class="social-links">
					<a href="facebook.com/brgy.sampad" class="facebook"><i class="bx bxl-facebook"></i></a>
				</div>

			</div>
		</div>

		<div class="container footer-bottom clearfix">
			<div class="copyright">
				&copy; Copyright <strong><span>Remember</span></strong>. All Rights Reserved
			</div>
			<div class="credits">
				<!-- All the links in the footer should remain intact. -->
				<!-- You can delete the links only if you purchased the pro version. -->
				<!-- Licensing information: https://bootstrapmade.com/license/ -->
				<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/ -->
				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
			</div>
		</div>
	</footer><!-- End Footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="/landing-page/assets/vendor/purecounter/purecounter_vanilla.js"></script>
	<script src="/landing-page/assets/vendor/aos/aos.js"></script>
	<script src="/landing-page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/landing-page/assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="/landing-page/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="/landing-page/assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="/landing-page/assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="../landing-page/assets/js/main.js"></script>

</body>

</html>
