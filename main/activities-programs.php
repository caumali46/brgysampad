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
      $squery = mysqli_query($con, "select * from tblactivity ORDER BY dateofactivity DESC ");
      $index = 0;
      while ($row = mysqli_fetch_array($squery)) {
        echo '<div class="col-lg-6 mb-3">
                <div class="box" data-aos="fade-up">
                  <p class="title"  data-bs-toggle="collapse" data-bs-target="#collapseExample' . $index . '" data-toggle="tooltip" title="Click to read more">
                    <span >' . $row['activity'] . '</span>
                    <a>Posted on: ' . date("F j, Y", strtotime($row['created_at'])) . ' </a>
                  </p>
                  <p class="collapse mt-3" id="collapseExample' . $index . '">'
          . $row['description'] . '<br/><br/>
                    <a>Date of Activity: <b>' . date("F j, Y", strtotime($row['dateofactivity'])) . '</b></a>
                  </p> 
                </div>
              </div>';
        $index++;
      }
      ?>
    </div>

  </div>
</section><!-- End Why Us Section -->