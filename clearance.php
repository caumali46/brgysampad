<?php
session_start();
ob_start();
include "pages/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<?php
require_once("main/partials/head.html");
include "main/functions/clearance-functions.php";
?>

<body>

  <?php require_once("main/partials/navbar.php"); ?>

  <section class="content">
    <form method="post" enctype="multipart/form-data">
      <div class="container">
        <div class="row title" style="text-align: center;">
          <?php
          if (isset($_SESSION['added']) && $_SESSION['added'] == 1) {
            echo
            '<div class="alert alert-success" role="alert">
              Your clearance request is successfully submitted!
            </div>';
          }
          ?>
          <h1> Request for Clearance</h1>
          <h5><b> Fill up the form</h5></b>
        </div>
      </div>
      <div class="container">
        <?php include "main/partials/clearance-form-fields-v2.php"; ?>
      </div>
      <div class="container">
        <div class="row" style="text-align: center; margin-top:1em">
          <div class="offset-7 col-md-5">
            <input type="button" class="btn btn-default btn-md" value="Cancel" />
            <input type="submit" class="btn btn-primary btn-md" name="btn_add_clearance" id="btn_add" value="Submit" required />
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