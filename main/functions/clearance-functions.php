<?php
if (isset($_POST['btn_add_clearance'])) {
  $txt_lname = $_POST['txt_lname'];
  $txt_fname = $_POST['txt_fname'];
  $txt_mname = $_POST['txt_mname'];
  $ddl_gender = $_POST['ddl_gender'];
  $txt_bdate = $_POST['txt_bdate'];
  $txt_bplace = $_POST['txt_bplace'];

  $dateOfBirth = $txt_bdate;
  $today = date("Y-m-d");
  $diff = date_diff(date_create($dateOfBirth), date_create($today));
  $txt_age = $diff->format('%y');

  $txt_brgy = $_POST['txt_brgy'];
  $txt_dperson = $_POST['txt_dperson'];
  $txt_zone = $_POST['txt_zone'];
  $txt_householdmem = $_POST['txt_householdmem'];

  $txt_btype = $_POST['txt_btype'];
  $txt_cstatus = $_POST['txt_cstatus'];
  $txt_occp = $_POST['txt_occp'];
  $txt_income = $_POST['txt_income'];
  $txt_householdnum = $_POST['txt_householdnum'];
  $txt_length = $_POST['txt_length'];
  $txt_religion = $_POST['txt_religion'];
  $txt_igpit = $_POST['txt_igpit'];
  $txt_phno = $_POST['txt_phno'];
  $ddl_eattain = $_POST['ddl_eattain'];
  $ddl_hos = $_POST['ddl_hos'];

  $ddl_los = $_POST['ddl_los'];
  $txt_water = $_POST['txt_water'];
  $txt_lightning = $_POST['txt_lightning'];
  $txt_toilet = $_POST['txt_toilet'];
  $txt_faddress = $_POST['txt_faddress'];

  $senior_citizen = isset($_POST['senior_citizen']) ? $_POST['senior_citizen'] : 0;
  $four_ps_member = isset($_POST['four_ps_member']) ? $_POST['four_ps_member'] : 0;

  $txt_image = 'default.png';
  $query = mysqli_query(
    $con,
    "INSERT INTO tblresident (
                                        lname,
                                        fname,
                                        mname,
                                        bdate,
                                        bplace,
                                        age,
                                        barangay,
                                        zone,
                                        totalhousehold,
                                        differentlyabledperson,
                                        bloodtype,
                                        civilstatus,
                                        occupation,
                                        monthlyincome,
                                        householdnum,
                                        lengthofstay,
                                        religion,
                                        gender,
                                        igpitID,
                                        philhealthNo,
                                        highestEducationalAttainment,
                                        houseOwnershipStatus,
                                        landOwnershipStatus,
                                        waterUsage,
                                        lightningFacilities,
                                        sanitaryToilet,
                                        formerAddress,
                                        image,
                                        senior_citizen,
                                        four_ps_member
                                    ) 
                                    values (
                                      '$txt_lname', 
                                        '$txt_fname', 
                                        '$txt_mname',  
                                        '$txt_bdate', 
                                        '$txt_bplace',
                                        '$txt_age',
                                        '$txt_brgy',
                                        '$txt_zone',
                                        '$txt_householdmem',
                                        '$txt_dperson',
                                        '$txt_btype',
                                        '$txt_cstatus',
                                        '$txt_occp',
                                        '$txt_income',
                                        '$txt_householdnum',
                                        '$txt_length',
                                        '$txt_religion',
                                        '$ddl_gender', 
                                        '$txt_igpit', 
                                        '$txt_phno', 
                                        '$ddl_eattain', 
                                        '$ddl_hos',
                                        '$ddl_los', 
                                        '$txt_water', 
                                        '$txt_lightning', 
                                        '$txt_toilet', 
                                        '$txt_faddress', 
                                        '$txt_image',
                                        '$senior_citizen',
                                        '$four_ps_member'
                                    )"
  )
    or die('Error: ' . mysqli_error($con));

  if ($query == true) {

    $edit_query = mysqli_query($con, "SELECT * from tblresident where id = LAST_INSERT_ID()");
    $erow = mysqli_fetch_array($edit_query);

    $residentid = $erow['id'];
    $purpose = $_POST['purpose'];
    $clearance_type = $_POST['clearance_type'];

    $insertQuery = mysqli_query($con, "INSERT INTO tblclearance (residentid,purpose,clearance_type) values ('$residentid', '$purpose', '$clearance_type')")
      or die('Error: ' . mysqli_error($con));

    if ($insertQuery == true) {
      $_SESSION['added'] = 1;
      header("location: " . $_SERVER['REQUEST_URI']);
    }
  }
}
