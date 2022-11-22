<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
  <div class="container">

    <div class="section-title" data-aos="zoom-in">
      <h2>PROGRAMS/ ACTIVITIES</h2>
      <!-- <h3>Why you shoud <span>choose us</span>?</h3>
      <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
    </div>

    <div class="row">
      <?php
      $squery = mysqli_query($con, "select * from tblactivity ");
      while ($row = mysqli_fetch_array($squery)) {
        echo '<div class="col-lg-4 mb-3">
                <div class="box" data-aos="fade-up">
                  <span>' . $row['activity'] . '</span>
                  <p>' . $row['description'] . '</p>
                </div>
              </div>';
      }
      ?>
    </div>

  </div>
</section><!-- End Why Us Section -->