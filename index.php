<?php
session_start();
ob_start();
?>
<?php require_once("pages/connection.php"); ?>

<!DOCTYPE html>
<html lang="en">

<?php require_once("main/partials/head.html"); ?>

<body>

	<?php require_once("main/partials/navbar.php"); ?>

	<!-- Program/Activities/announcments -->

	<main id="main">

		<!-- ======= About Section ======= -->
		<!-- Program/Activities/announcments -->
		<!-- End About Section -->

		<?php require_once("main/activities-programs.php"); ?>

		<!-- ======= Apply for Clearance ======= -->
		<section id="cta" class="cta">
			<div class="container" data-aos="zoom-in">
				<div class="text-center">
					<h3 class="text-uppercase">Request for Clearance</h3>
					<a class="cta-btn" href="clearance-application.php"> Register</a>
				</div>

			</div>
		</section><!-- End Apply for Clearance -->

		<section class="text-center" style="background: #f5faf0;">
			<div class="container">
				<div class="section-title" data-aos="zoom-in">
					<h2 style="font-size: 1.6em;">Barangay Sampad Officials</h2>
				</div>
			</div>
			<div class="container">
				<div class="row box box-solid">
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
							<i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">how do you get your own account? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
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
					<h2>Our Location</h2>
				</div>
				<div>
					<iframe style="border:0; width: 100%; height: 270px;" src="https://maps.google.com/maps?q=Sampad%20Barangay%20Hall&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
				</div>

			</div>
		</section><!-- End Contact Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<?php require_once("main/partials/footer.html"); ?>
</body>

</html>