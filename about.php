<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once("main/partials/head.html"); ?>

<body>

  <?php require_once("main/partials/navbar.php"); ?>

  <?php require_once("main/partials/hero-section.html"); ?>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="zoom-in" style="box-shadow:5px 5px 15px #47525d;border-radius: 20px;background: url(../image/brgy.jpg); background-size:cover;background-repeat:no-repeat">
            <a href="https://www.facebook.com/100075847886371/videos/630992391387833/" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
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
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require_once("main/partials/footer.html"); ?>

</body>

</html>