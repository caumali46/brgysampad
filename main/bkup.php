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
                </div>';

        $p = mysqli_query($con, "SELECT * from tblactivityphoto where activityid = '" . $row['id'] . "' ");
        while ($row1 = mysqli_fetch_array($p)) {
          echo '<div style="
                  margin-bottom:1em;
                  width: 100%;
                  height: 20em;
                  background-size: cover;
                  background-position: center;
                  background-repeat: no-repeat;
                  background-image: url(/pages/activity/photo/' . basename($row1['filename']) . '");
                ">
                </div>
              </div>';
        }
      }
      ?>
    </div>

  </div>
</section><!-- End Why Us Section -->