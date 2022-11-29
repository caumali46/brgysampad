<!-- ========================= MODAL ======================= -->
<div id="addCourseModal" class="modal fade">
  <form class="form-horizontal" method="post" action="addfunction.php" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Add Resident</h4>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="container-fluid">
              <div class="picture-container">
                <div class="picture">
                  <img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no" class="picture-src" id="wizardPicturePreview" title="">
                  <input name="txt_image" id="wizard-picture" class="form-control input-sm" type="file" required />
                </div>
                <h6 class="">Choose Picture</h6>

              </div>
              <div class="col-md-6 col-sm-12">

                <div class="form-group">
                  <label class="control-label">Name:</label><br>
                  <div class="col-sm-4">
                    <input name="txt_lname" class="form-control input-sm" type="text" placeholder="Lastname" required />
                  </div>
                  <div class="col-sm-4">
                    <input name="txt_fname" class="form-control input-sm col-sm-4" type="text" placeholder="Firstname" required />
                  </div>
                  <div class="col-sm-4">
                    <input name="txt_mname" class="form-control input-sm col-sm-4" type="text" placeholder="Middlename" required />
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
                  <label class="control-label">Barangay:</label>
                  <input name="txt_brgy" class="form-control input-sm input-size" type="text" placeholder="Barangay" required />
                </div>

                <div class="form-group">
                  <label class="control-label">Household #:</label>
                  <input name="txt_householdnum" class="form-control input-sm input-size" type="number" min="1" placeholder="Household #" required />
                </div>

                <div class="form-group">
                  <label class="control-label">Differently-abled Person:</label>
                  <input name="txt_dperson" class="form-control input-sm input-size" type="text" placeholder="Differently-abled Person" required />
                </div>

                <div class="form-group">
                  <label class="control-label">Blood Type:</label>
                  <input name="txt_btype" class="form-control input-sm input-size" type="text" placeholder="Blood Type" required />
                </div>

                <div class="form-group">
                  <label class="control-label">Civil Status:</label>
                  <input name="txt_cstatus" class="form-control input-sm input-size" type="text" placeholder="Civil Status" required />
                </div>

                <div class="form-group">
                  <label class="control-label">Year of Residency</label><br>
                  <input name="txt_length" class="form-control input-sm input-size" type="number" min="0" placeholder="Year of Residency" required />
                </div>

                <div class="form-group">
                  <label class="control-label">Religion:</label>
                  <input name="txt_religion" class="form-control input-sm input-size" type="text" placeholder="Religion" required />
                </div>

                <div class="form-group">
                  <label class="control-label">Postal ID:</label>
                  <input name="txt_igpit" class="form-control input-sm input-size" type="number" placeholder="e.g #1950" min="1" required />
                </div>

                <div class="form-group">
                  <label class="control-label" required>Educational Attainment:</label>
                  <select name="ddl_eattain" class="form-control input-sm input-size">
                    <option>No schooling completed</option>
                    <option>Elementary</option>
                    <option>High school, undergrad</option>
                    <option>High school graduate</option>
                    <option>College, undergrad</option>
                    <option>Vocational</option>
                    <option>Bachelor’s degree</option>
                    <option>Master’s degree</option>
                    <option>Doctorate degree</option>
                  </select>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="senior_citizen" value="0" id="senior_citizen">
                    <label class="form-check-label" for="senior_citizen">
                      Senior Citizen
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="four_ps_member" value="0" id="four_ps_member">
                    <label class="form-check-label" for="four_ps_member">
                      4Ps member
                    </label>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-12">
                <div class="form-group">
                  <label class="control-label" required>Sex:</label>
                  <select name="ddl_gender" class="form-control input-sm">
                    <option selected="" disabled="">-Select Sex-</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>

                <div class="form-group">
                  <label class="control-label">Birthplace:</label>
                  <input name="txt_bplace" class="form-control input-sm" type="text" placeholder="Birthplace" required />
                </div>

                <div class="form-group">
                  <label class="control-label">Purok #:</label>
                  <input name="txt_zone" class="form-control input-sm" type="text" placeholder="Purok #" required />
                </div>

                <div class="form-group">
                  <label class="control-label">Total Household Member:</label>
                  <input name="txt_householdmem" class="form-control input-sm" type="number" min="1" placeholder="Total Household Member" required />
                </div>

                <div class="form-group">
                  <label class="control-label">Occupation:</label>
                  <input name="txt_occp" class="form-control input-sm" type="text" placeholder="Occupation" required />
                </div>

                <div class="form-group">
                  <label class="control-label">Monthly Income:</label>
                  <input name="txt_income" class="form-control input-sm" type="number" min="1" placeholder="Monthly Income" required />
                </div>

                <div class="form-group">
                  <label class="control-label">PhilHealth #:</label>
                  <input name="txt_phno" class="form-control input-sm" type="number" max="999999999999" min="1" placeholder="eg. 010000000001" required />
                </div>

                <div class="form-group">
                  <label class="control-label" required>House Ownership Status:</label>
                  <select name="ddl_hos" class="form-control input-sm">
                    <option value="Own Home">Own Home</option>
                    <option value="Rent">Rent</option>
                    <option value="Live with Parents/Relatives">Live with Parents/Relatives</option>
                  </select>
                </div>

                <div class="form-group">
                  <label class="control-label" required>Lightning Facilities:</label>
                  <select name="txt_lightning" class="form-control input-sm input-size">
                    <option>Electric</option>
                    <option>Lamp</option>
                  </select>
                </div>

                <div class="form-group">
                  <label class="control-label">Current Address:</label>
                  <input name="txt_faddress" class="form-control input-sm" type="text" placeholder="Current Address" required />
                </div>


                <div class="form-group">
                  <label class="control-label" required>Land Ownership Status:</label>
                  <select name="ddl_los" class="form-control input-sm input-size">
                    <option>Owned</option>
                    <option>Landless</option>
                    <option>Tenant</option>
                    <option>Care Taker</option>
                  </select>
                </div>

                <div class="form-group">
                  <label class="control-label" required>Water Usage:</label>
                  <select name="txt_water" class="form-control input-sm input-size">
                    <option>Faucet</option>
                    <option>Deep Well</option>
                  </select>
                </div>

                <div class="form-group">
                  <label class="control-label" required>Sanitary Toilet:</label>
                  <select name="txt_toilet" class="form-control input-sm input-size">
                    <option>Water-sealed</option>
                    <option>Antipolo</option>
                    <option>None</option>
                  </select>
                </div>

              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel" />
          <input type="submit" class="btn btn-primary btn-sm" name="btn_add" id="btn_add" value="Add Resident" required />
        </div>
      </div>
    </div>
  </form>
</div>

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