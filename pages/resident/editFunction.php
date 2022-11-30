<?php
include "../connection.php";

if (isset($_POST['btn_save'])) {
  $txt_id = $_POST['hidden_id'];
  $txt_edit_lname = $_POST['txt_edit_lname'];
  $txt_edit_fname = $_POST['txt_edit_fname'];
  $txt_edit_mname = $_POST['txt_edit_mname'];
  $txt_edit_bdate = $_POST['txt_edit_bdate'];
  $txt_edit_bplace = $_POST['txt_edit_bplace'];

  $dateOfBirth = $txt_edit_bdate;
  $today = date("Y-m-d");
  $diff = date_diff(date_create($dateOfBirth), date_create($today));
  $txt_edit_age = $diff->format('%y');

  $txt_edit_brgy = $_POST['txt_edit_brgy'];
  $txt_edit_dperson = $_POST['txt_edit_dperson'];
  $txt_edit_zone = $_POST['txt_edit_zone']; // purok number
  $txt_edit_householdmem = $_POST['txt_edit_householdmem'];

  $txt_edit_btype = $_POST['txt_edit_btype'];
  $txt_edit_cstatus = $_POST['txt_edit_cstatus'];
  $txt_edit_occp = $_POST['txt_edit_occp'];
  $txt_edit_income = $_POST['txt_edit_income'];

  $txt_edit_householdnum = $_POST['txt_edit_householdnum'];
  $txt_edit_religion = $_POST['txt_edit_religion'];
  $ddl_edit_gender = $_POST['ddl_edit_gender'];
  $txt_edit_igpit = $_POST['txt_edit_igpit'];
  $txt_edit_phno = $_POST['txt_edit_phno'];
  $ddl_edit_eattain = $_POST['ddl_edit_eattain'];
  $ddl_edit_hos = $_POST['ddl_edit_hos'];

  $ddl_edit_los = $_POST['ddl_edit_los'];
  $txt_edit_water = $_POST['txt_edit_water'];
  $txt_edit_lightning = $_POST['txt_edit_lightning'];
  $txt_edit_toilet = $_POST['txt_edit_toilet'];

  $name = basename($_FILES['txt_edit_image']['name']);
  $temp = $_FILES['txt_edit_image']['tmp_name'];
  $imagetype = $_FILES['txt_edit_image']['type'];
  $size = $_FILES['txt_edit_image']['size'];

  $milliseconds = round(microtime(true) * 1000);
  $image = $milliseconds . '_' . $name;

  if (isset($_SESSION['role'])) {
    $action = 'Update Resident named ' . $txt_edit_lname . ', ' . $txt_edit_fname . ' ' . $txt_edit_mname;
    $iquery = mysqli_query($con, "INSERT INTO tbllogs (user,logdate,action) values ('" . $_SESSION['role'] . "', NOW(), '" . $action . "')");
  }

  // $su = mysqli_query($con, "SELECT * from tblresident");
  $su = mysqli_query($con, "SELECT * from tblresident where id not in (" . $txt_id . ") ");
  $ct = mysqli_num_rows($su);
  // var_dump($ct);
  // exit;
  // if ($ct == 0) {

  if ($name != "") {
    if (($imagetype == "image/jpeg" || $imagetype == "image/png" || $imagetype == "image/bmp") && $size <= 2048000) {
      if (move_uploaded_file($temp, 'image/' . $image)) {

        $txt_edit_image = $image;
        $update_query = mysqli_query($con, "UPDATE tblresident set 
                  lname = ' $txt_edit_lname ',
                  fname = ' $txt_edit_fname ',
                  mname = ' $txt_edit_mname ',
                  bdate = ' $txt_edit_bdate ',
                  bplace = ' $txt_edit_bplace ',
                  age = ' $txt_edit_age ',
                  barangay = ' $txt_edit_brgy ',
                  zone = ' $txt_edit_zone ',
                  totalhousehold = ' $txt_edit_householdmem ',
                  differentlyabledperson = ' $txt_edit_dperson ',
                  civilstatus = ' $txt_edit_cstatus ',
                  occupation = ' $txt_edit_occp ',
                  monthlyincome = ' $txt_edit_income ',
                  householdnum = ' $txt_edit_householdnum ',
                  religion = ' $txt_edit_religion ',
                  gender = ' $ddl_edit_gender ', 
                  igpitID = ' $txt_edit_igpit ',
                  philhealthNo = ' $txt_edit_phno ',
                  highestEducationalAttainment = ' $ddl_edit_eattain ',
                  houseOwnershipStatus = ' $ddl_edit_hos ',
                  landOwnershipStatus = ' $ddl_edit_los ',
                  waterUsage = ' $txt_edit_water ',
                  lightningFacilities = ' $txt_edit_lightning ',
                  sanitaryToilet = ' $txt_edit_toilet ',
                  image = ' $txt_edit_image ',
                  where id = ' $txt_id '
          ") or die('Error: ' . mysqli_error($con));
        // $update_query = mysqli_query($con, "UPDATE tblresident set 
        //           lname = '" . $txt_edit_lname . "',
        //           fname = '" . $txt_edit_fname . "',
        //           mname = '" . $txt_edit_mname . "',
        //           bdate = '" . $txt_edit_bdate . "',
        //           bplace = '" . $txt_edit_bplace . "',
        //           age = '" . $txt_edit_age . "',
        //           barangay = '" . $txt_edit_brgy . "',
        //           zone = '" . $txt_edit_zone . "',
        //           totalhousehold = '" . $txt_edit_householdmem . "',
        //           differentlyabledperson = '" . $txt_edit_dperson . "',
        //           civilstatus = '" . $txt_edit_cstatus . "',
        //           occupation = '" . $txt_edit_occp . "',
        //           monthlyincome = '" . $txt_edit_income . "',
        //           householdnum = '" . $txt_edit_householdnum . "',
        //           religion = '" . $txt_edit_religion . "',
        //           gender = '" . $ddl_edit_gender . "', 
        //           igpitID = '" . $txt_edit_igpit . "',
        //           philhealthNo = '" . $txt_edit_phno . "',
        //           highestEducationalAttainment = '" . $ddl_edit_eattain . "',
        //           houseOwnershipStatus = '" . $ddl_edit_hos . "',
        //           landOwnershipStatus = '" . $ddl_edit_los . "',
        //           waterUsage = '" . $txt_edit_water . "',
        //           lightningFacilities = '" . $txt_edit_lightning . "',
        //           sanitaryToilet = '" . $txt_edit_toilet . "',
        //           image = '" . $txt_edit_image . "',
        //           where id = ' $txt_id '
        //   ") or die('Error: ' . mysqli_error($con));
      }
    } else {
      $_SESSION['filesize'] = 1;
      header("location: " . $_SERVER['REQUEST_URI']);
    }
  } else {

    $chk_image = mysqli_query($con, "SELECT * from tblresident where id = '" . $_POST['hidden_id'] . "' ");
    $rowimg = mysqli_fetch_array($chk_image);

    $txt_edit_image = $rowimg['image'];
    // $update_query = mysqli_query($con, "UPDATE tblresident set 
    //       lname = '" . $txt_edit_lname . "',
    //       fname = '" . $txt_edit_fname . "',
    //       mname = '" . $txt_edit_mname . "',
    //       bdate = '" . $txt_edit_bdate . "',
    //       bplace = '" . $txt_edit_bplace . "',
    //       age = '" . $txt_edit_age . "',
    //       barangay = '" . $txt_edit_brgy . "',
    //       zone = '" . $txt_edit_zone . "',
    //       totalhousehold = '" . $txt_edit_householdmem . "',
    //       differentlyabledperson = '" . $txt_edit_dperson . "',
    //       civilstatus = '" . $txt_edit_cstatus . "',
    //       occupation = '" . $txt_edit_occp . "',
    //       monthlyincome = '" . $txt_edit_income . "',
    //       householdnum = '" . $txt_edit_householdnum . "',
    //       religion = '" . $txt_edit_religion . "',
    //       gender = '" . $ddl_edit_gender . "',
    //       igpitID = '" . $txt_edit_igpit . "',
    //       philhealthNo = '" . $txt_edit_phno . "',
    //       highestEducationalAttainment = '" . $ddl_edit_eattain . "',
    //       houseOwnershipStatus = '" . $ddl_edit_hos . "',
    //       landOwnershipStatus = '" . $ddl_edit_los . "',
    //       waterUsage = '" . $txt_edit_water . "',
    //       lightningFacilities = '" . $txt_edit_lightning . "',
    //       sanitaryToilet = '" . $txt_edit_toilet . "',
    //       image = '" . $txt_edit_image . "',
    //       where id = '" . $txt_id . "'
    // ") or die('Error: ' . mysqli_error($con));

    $update_query = mysqli_query($con, "UPDATE tblresident set 
      lname = ' $txt_edit_lname ',
      fname = ' $txt_edit_fname ',
      mname = ' $txt_edit_mname ',
      bdate = ' $txt_edit_bdate ',
      bplace = ' $txt_edit_bplace ',
      age = ' $txt_edit_age ',
      barangay = ' $txt_edit_brgy ',
      totalhousehold = ' $txt_edit_householdmem ',
      differentlyabledperson = ' $txt_edit_dperson ',
      civilstatus = ' $txt_edit_cstatus ',
      occupation = ' $txt_edit_occp ',
      monthlyincome = ' $txt_edit_income ',
      householdnum = ' $txt_edit_householdnum ',
      religion = ' $txt_edit_religion ',
      gender = ' $ddl_edit_gender ',
      igpitID = ' $txt_edit_igpit ',
      philhealthNo = ' $txt_edit_phno ',
      highestEducationalAttainment = ' $ddl_edit_eattain ',
      houseOwnershipStatus = ' $ddl_edit_hos ',
      landOwnershipStatus = ' $ddl_edit_los ',
      waterUsage = ' $txt_edit_water ',
      lightningFacilities = ' $txt_edit_lightning ',
      sanitaryToilet = ' $txt_edit_toilet ',
      zone = ' $txt_edit_zone ',
      image = ' $txt_edit_image ',
      where id = ' $txt_id '
      
  ") or die('Error: ' . mysqli_error($con));
  }

  if ($update_query == true) {
    $_SESSION['edited'] = 1;
    // header("location: " . $_SERVER['REQUEST_URI']);
    header("Location: /pages/resident/resident.php");
  }
} else {
  $_SESSION['duplicateuser'] = 1;
  // header("location: " . $_SERVER['REQUEST_URI']);
  header("Location: /pages/resident/resident.php");
}
// }
