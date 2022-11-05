<?php ob_start();
session_start(); ?>

 <?php
  //   include "pages/connection.php";

  $hostname = "localhost";
  // $username = "zhyiiynw_admin";
  // $password = 'p@$$w0rdYPP';
  // $database = "zhyiiynw_db_barangay";
  
  $username = "root";
  $password = '';
  $database = "db_barangay";

  $con = mysqli_connect($hostname, $username, $password, $database)
    or die(mysqli_error());
  date_default_timezone_set("Asia/Manila");


  // Connection Check

  if (!$con) {

    die("Connection failed: " . $con->connect_error);
  } else {

    if (isset($_POST['btn_login'])) {

      $username = $_POST['txt_username'];

      $password = $_POST['txt_password'];


      $admin = mysqli_query($con, "SELECT * from tbluser where username = '$username' and password = '$password' and type = 'administrator' ");

      $numrow_admin = mysqli_num_rows($admin);



      $zone = mysqli_query($con, "SELECT * from tblzone where username = '$username' and password = '$password'");

      $numrow_zone = mysqli_num_rows($zone);



      if ($numrow_admin > 0) {

        $_SESSION['logged_in'] = TRUE;

        while ($row = mysqli_fetch_array($admin)) {


          $_SESSION['role'] = "Administrator";

          $_SESSION['userid'] = $row['id'];

          $_SESSION['username'] = $row['username'];
        }

        header("Location: pages/officials/officials.php");
        exit;
      } elseif ($numrow_zone > 0) {

        $_SESSION['logged_in'] = TRUE;

        while ($row = mysqli_fetch_array($zone)) {

          $_SESSION['role'] = "Zone Leader";

          $_SESSION['userid'] = $row['id'];

          $_SESSION['username'] = $row['username'];
        }

        header("Location: pages/permit/permit.php");
        exit;
      } else {
        echo '<script type="text/javascript">document.getElementById("error").innerHTML = "Invalid Account";</script>';
      }
    }
  }


  ?>