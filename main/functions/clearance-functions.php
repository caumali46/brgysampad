<?php


$_SESSION['added'] = 0;
if (isset($_POST['btn_add_clearance'])) {

  $txt_lname = $_POST['txt_lname'];
  $txt_fname = $_POST['txt_fname'];
  $txt_mname = $_POST['txt_mname'];

  $txt_zone = $_POST['txt_zone'];
  $txt_contact = $_POST['txt_contact'];
  $txt_email = $_POST['txt_email'];

  $txt_image = 'default.png';
  $query = mysqli_query(
    $con,
    "INSERT INTO tblresident (
          lname,
          fname,
          mname, 
          zone,
          image,
          contact,
          email
        ) 
        values (
          '$txt_lname', 
          '$txt_fname', 
          '$txt_mname',   
          '$txt_zone',
          '$txt_image', 
          '$txt_contact',
          '$txt_email'
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
