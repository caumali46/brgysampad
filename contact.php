<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once("main/partials/head.html"); ?>

<style>
  .contact .php-email-form_ {
    width: 100%;
    background: #fff;
  }

  .contact .php-email-form_ .form-group {
    padding-bottom: 8px;
  }

  .contact .php-email-form_ .error-message {
    display: none;
    color: #fff;
    background: #ed3c0d;
    text-align: left;
    padding: 15px;
    font-weight: 600;
  }

  .contact .php-email-form_ .error-message br+br {
    margin-top: 25px;
  }

  .contact .php-email-form_ .sent-message {
    display: none;
    color: #fff;
    background: #18d26e;
    text-align: center;
    padding: 15px;
    font-weight: 600;
  }

  .contact .php-email-form_ .loading {
    display: none;
    background: #fff;
    text-align: center;
    padding: 15px;
  }

  .contact .php-email-form_ .loading:before {
    content: "";
    display: inline-block;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    margin: 0 10px -6px 0;
    border: 3px solid #18d26e;
    border-top-color: #eee;
    -webkit-animation: animate-loading 1s linear infinite;
    animation: animate-loading 1s linear infinite;
  }

  .contact .php-email-form_ input,
  .contact .php-email-form_ textarea {
    border-radius: 0;
    box-shadow: none;
    font-size: 14px;
  }

  .contact .php-email-form_ input {
    height: 44px;
  }

  .contact .php-email-form_ textarea {
    padding: 10px 12px;
  }

  .contact .php-email-form_ button[type=submit] {
    background: #8fc04e;
    border: 0;
    padding: 10px 24px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;
  }

  .contact .php-email-form_ button[type=submit]:hover {
    background: #7aa93c;
  }
</style>

<body>

  <?php require_once("main/partials/navbar.php"); ?>

  <main id="main">
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
          <div class="col-lg-4 offset-md-2" data-aos="fade-right">
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
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-left">
            <div class="info">
              <div class="email">
                <i class="bi bi-facebook"></i>
                <h4>Facebook page:</h4>
                <p>https://www.facebook.com/brgy.sampad</p>
              </div>
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>09068398049</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require_once("main/partials/footer.html"); ?>

</body>

</html>