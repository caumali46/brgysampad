<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once("main/partials/head.html"); ?>

<body>

  <?php require_once("main/partials/navbar.php"); ?>

  <main id="main">

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

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require_once("main/partials/footer.html"); ?>

</body>

</html>