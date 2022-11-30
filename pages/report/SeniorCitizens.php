<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="box">
      <div class="box-body table-responsive">
        <form method="post" enctype="multipart/form-data">
          <table id="table" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Former Address</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $squery = mysqli_query($con, "SELECT id,CONCAT(lname, ', ', fname, ' ', mname) as cname, age, gender, formerAddress, image FROM tblresident where senior_citizen = 1");
              while ($row = mysqli_fetch_array($squery)) {
                echo '
                    <tr>
                        <td style="width:70px;"><image src="../resident/image/' . basename($row['image']) . '" style="width:60px;height:60px;"/></td>
                        <td>' . $row['cname'] . '</td>
                        <td>' . $row['age'] . '</td>
                        <td>' . $row['gender'] . '</td>
                        <td>' . $row['formerAddress'] . '</td>
                    </tr>
                    ';
              }
              ?>
            </tbody>
          </table>

        </form>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div> <!-- /.row -->
</section><!-- /.content -->