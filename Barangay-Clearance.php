<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once("main/partials/head.html"); ?>

<body>

  <?php require_once("main/partials/navbar.php"); ?>

  <section class="content">
    <form method="post" enctype="multipart/form-data">
      <div class="container">
        <div class="row title" style="text-align: center;">
          <h1> Barangay Clearance Form</h1>
          <h5><b> Fill up the form</h5></b>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="form-group">
                <label class="control-label">Name:</label><br>
                <div class="row">
                  <div class="col-sm-4">
                     <input name="txt_fname" class="form-control input-sm col-sm-4" type="text" placeholder="Firstname" required />
                  </div>
                  <div class="col-sm-4">
                   <input name="txt_mname" class="form-control input-sm col-sm-4" type="text" placeholder="Middlename" required />
                  </div>
                  <div class="col-sm-4">
                    <input name="txt_lname" class="form-control input-sm" type="text" placeholder="Lastname" required />
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label">Birthdate:</label>
                <input name="txt_bdate" class="form-control input-sm input-size" type="date" placeholder="Birthdate" required />
              </div>

              <div class="form-group">
                <label class="control-label">Age:</label>
                <input name="txt_age" class="form-control input-sm input-size" type="number" placeholder="Age" required />
              </div>

              <div class="form-group">
                <label class="control-label">Status:</label>
                <input name="txt_cstatus" class="form-control input-sm input-size" type="text" placeholder="Status" required />
              </div>
              <div class="form-group">
                <label class="control-label" required>PURPOSE: </label>
                <select name="ddl_eattain" class="form-control input-sm input-size" type="text" placeholder="Status" required >
                  <option>Purposes</option>
                  <option>Police Clearance</option>
                  <option>Elementary</option>
                  <option>Postal ID</option>
                  <option>Meralco Application</option>
                  <option>Loan Purposes</option>
                  <option> Others</option>
                 
                </select>
              </div>
            </div>
          </div>
          <!--/.col (left) -->

          <!-- right column -->
          <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="box box-warning">
              <div class="form-group">
                <label class="control-label" required>Sex:</label>
                <select name="ddl_gender" class="form-control input-sm">
                  <option selected="" disabled="">-Select Sex-</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>

            

            </div><!-- /.box -->
          </div>
          <!--/.col (right) -->
        </div> <!-- /.row -->
      </div>
      <div class="container">
        <div class="row" style="text-align: center; margin-top:1em">
          <div class="offset-7 col-md-6">
            <input type="button" class="btn btn-default btn-md" value="Cancel" />
            <input type="submit" class="btn btn-primary btn-md" name="btn_add" id="btn_add" value="Submit" required />
          </div>
        </div>
      </div>
    </form>
  </section>

  <!-- ======= Footer ======= -->
  <?php require_once("main/partials/footer.html"); ?>

  <script type="text/javascript">
    $(document).ready(function() {

      var timeOut = null; // this used for hold few seconds to made ajax request

      var loading_html = '<img src="../../img/ajax-loader.gif" style="height: 20px; width: 20px;"/>'; // just an loading image or we can put any texts here

      //when button is clicked
      $('#username').keyup(function(e) {

        // when press the following key we need not to make any ajax request, you can customize it with your own way
        switch (e.keyCode) {
          //case 8:   //backspace
          case 9: //tab
          case 13: //enter
          case 16: //shift
          case 17: //ctrl
          case 18: //alt
          case 19: //pause/break
          case 20: //caps lock
          case 27: //escape
          case 33: //page up
          case 34: //page down
          case 35: //end
          case 36: //home
          case 37: //left arrow
          case 38: //up arrow
          case 39: //right arrow
          case 40: //down arrow
          case 45: //insert
            //case 46:  //delete
            return;
        }
        if (timeOut != null)
          clearTimeout(timeOut);
        timeOut = setTimeout(is_available, 500); // delay delay ajax request for 1000 milliseconds
        $('#user_msg').html(loading_html); // adding the loading text or image
      });
    });

    function is_available() {
      //get the username
      var username = $('#username').val();

      //make the ajax request to check is username available or not
      $.post("check_username.php", {
          username: username
        },
        function(result) {
          if (result != 0) {
            $('#user_msg').html('Not Available');
            document.getElementById("btn_add").disabled = true;
          } else {
            $('#user_msg').html('<span style="color:#006600;">Available</span>');
            document.getElementById("btn_add").disabled = false;
          }
        });
    }

    $(document).ready(function() {
      $(document).on('change', '#wizard-picture', function() {
        readURL(this);
      });

      $(document).on('change', '#senior_citizen, #four_ps_member', function() {
        this.value = this.checked ? 1 : 0;
      });
    });

    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          console.log($('#wizardPicturePreview'));
          $('.picture-container #wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>
</body>

</html>