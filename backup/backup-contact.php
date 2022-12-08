<div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">
  <form method="post" role="form" class="php-email-form_">
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
      <?php
      if (isset($_SESSION['email_sent'])) {
        echo `<div class="sent-message">Your message has been sent. Thank you!</div>`;
      }
      include 'email-setup-function.php';
      ?>
    </div>
    <div class="text-center"><button type="submit" name="submit-message">Send Message</button></div>
  </form>

</div>

<?php
// require_once("main/partials/footer.html");
?>