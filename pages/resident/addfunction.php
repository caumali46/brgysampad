<?php

include "../connection.php";

if (isset($_POST['btn_add'])) {
  $txt_lname = $_POST['txt_lname'];
  $txt_fname = $_POST['txt_fname'];
  $txt_mname = $_POST['txt_mname'];
  $ddl_gender = $_POST['ddl_gender'];
  $txt_bdate = $_POST['txt_bdate'];
  $txt_bplace = $_POST['txt_bplace'];

  //$txt_age = $_POST['txt_age'];
  $dateOfBirth = $txt_bdate;
  $today = date("Y-m-d");
  $diff = date_diff(date_create($dateOfBirth), date_create($today));
  $txt_age = $diff->format('%y');

  $txt_brgy = $_POST['txt_brgy'];
  $txt_dperson = $_POST['txt_dperson'];
  // $txt_mstatus = $_POST['txt_mstatus'];
  $txt_zone = $_POST['txt_zone'];
  $txt_householdmem = $_POST['txt_householdmem'];
  // $txt_rthead = $_POST['txt_rthead'];

  $txt_btype = $_POST['txt_btype'];
  $txt_cstatus = $_POST['txt_cstatus'];
  $txt_occp = $_POST['txt_occp'];
  $txt_income = $_POST['txt_income'];
  $txt_householdnum = $_POST['txt_householdnum'];
  $txt_length = $_POST['txt_length'];
  $txt_religion = $_POST['txt_religion'];
  // $txt_national = $_POST['txt_national'];
  // $txt_skills = $_POST['txt_skills'];
  $txt_igpit = $_POST['txt_igpit'];
  $txt_phno = $_POST['txt_phno'];
  $ddl_eattain = $_POST['ddl_eattain'];
  $ddl_hos = $_POST['ddl_hos'];

  $ddl_los = $_POST['ddl_los'];
  // $ddl_dtype = $_POST['ddl_dtype'];
  $txt_water = $_POST['txt_water'];
  $txt_lightning = $_POST['txt_lightning'];
  $txt_toilet = $_POST['txt_toilet'];
  $txt_faddress = $_POST['txt_faddress'];
  // $txt_uname = $_POST['txt_uname'];
  // $txt_upass = $_POST['txt_upass'];

  $senior_citizen = isset($_POST['senior_citizen']) ? $_POST['senior_citizen'] : 0;
  $four_ps_member = isset($_POST['four_ps_member']) ? $_POST['four_ps_member'] : 0;

  // $txt_remarks = $_POST['txt_remarks'];

  $name = basename($_FILES['txt_image']['name']);
  $temp = $_FILES['txt_image']['tmp_name'];
  $imagetype = $_FILES['txt_image']['type'];
  $size = $_FILES['txt_image']['size'];

  $milliseconds = round(microtime(true) * 1000);
  $image = $milliseconds . '_' . $name;

  if (isset($_SESSION['role'])) {
    $action = 'Added Resident named ' . $txt_lname . ', ' . $txt_fname . ' ' . $txt_mname;
    $iquery = mysqli_query($con, "INSERT INTO tbllogs (user,logdate,action) values ('" . $_SESSION['role'] . "', NOW(), '" . $action . "')");
  }

  // $su = mysqli_query($con, "SELECT * from tblresident where username = '" . $txt_uname . "' ");
  $su = mysqli_query($con, "SELECT * from tblresident");
  $ct = mysqli_num_rows($su);




  if ($name != "") {
    if (($imagetype == "image/jpeg" || $imagetype == "image/png" || $imagetype == "image/bmp") && $size <= 2048000) {
      if (move_uploaded_file($temp, 'image/' . $image)) {
        $txt_image = $image;
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
      }
    } else {
      $_SESSION['filesize'] = 1;
      header("location: " . $_SERVER['REQUEST_URI']);
    }
  } else {
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
  }


  if ($query == true) {
    $_SESSION['added'] = 1;
    header("Location: /pages/resident/resident.php");
  }
}
