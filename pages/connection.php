<?php
// Establishing Connection with Server by passing inputs as a parameter
// $con = mysqli_connect('localhost', 'zhyiiynw_admin', '', 'zhyiiynw_db_barangay') or die(mysqli_error());
$con = mysqli_connect('localhost', 'zhyiiynw_admin', 'p@$$w0rdYPP', 'zhyiiynw_db_barangay') or die(mysqli_error()); // -production
date_default_timezone_set("Asia/Manila");
