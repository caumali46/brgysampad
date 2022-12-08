<div class="row">
  <!-- left column -->
  <div class="col-md-8 offset-2">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="form-group">
        <label class="control-label" required>PURPOSE:</label>
        <select name="purpose" class="form-control input-sm input-size" required>
          <option>Barangay Clearance</option>
          <option>Barangay Residency</option>
          <option>Barangay Indigency</option>
          <option>Cedula</option>
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
        <label class="control-label">Contact:</label>
        <input name="txt_contact" class="form-control input-sm input-size" type="number" placeholder="Contact" required />
      </div>

      <div class="form-group">
        <label class="control-label">Email:</label>
        <input name="txt_email" class="form-control input-sm input-size" type="email" placeholder="Email" required />
      </div>

      <div class="form-group">
        <label class="control-label">Purok #:</label>
        <input name="txt_zone" class="form-control input-sm" type="text" placeholder="Purok #" required />
      </div>
    </div>
  </div>
</div> <!-- /.row -->