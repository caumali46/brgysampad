<?php


$_SESSION['added'] = 0;
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

  $txt_zone = $_POST['txt_zone'];

  $txt_btype = $_POST['txt_btype'];
  $txt_cstatus = $_POST['txt_cstatus'];
  $txt_occp = $_POST['txt_occp'];
  $txt_igpit = $_POST['txt_igpit'];
  $txt_phno = $_POST['txt_phno'];
  $ddl_eattain = $_POST['ddl_eattain'];
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
                                        zone,
                                        bloodtype,
                                        civilstatus,
                                        occupation,
                                        gender,
                                        igpitID,
                                        philhealthNo,
                                        highestEducationalAttainment,
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
                                        '$txt_zone',
                                        '$txt_btype',
                                        '$txt_cstatus',
                                        '$txt_occp',
                                        '$ddl_gender', 
                                        '$txt_igpit', 
                                        '$txt_phno', 
                                        '$ddl_eattain', 
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
