<div class="row">
  <!-- left column -->
  <div class="col-md-6">
    <!-- general form elements -->
    <div class="box box-primary">

      <div class="form-group">
        <label class="control-label" required>PURPOSE: </label>
        <select name="purpose" class="form-control input-sm input-size" type="text" placeholder="Status" required>
          <option>Purposes</option>
          <option>Police Clearance</option>
          <option>Elementary</option>
          <option>Postal ID</option>
          <option>Meralco Application</option>
          <option>Loan Purposes</option>
          <option> Others</option>

        </select>
      </div>
      <div class="form-group">
        <label class="control-label">Name:</label><br>
        <div class="row">
          <div class="col-sm-4">
            <input type="hidden" name="clearance_type" value="brgy_clearance">
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

    </div><!-- /.box -->
  </div>
  <!--/.col (right) -->
</div> <!-- /.row -->