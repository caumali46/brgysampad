<?php

// Establishing Connection with Server by passing inputs as a parameter

//$con = mysqli_connect('localhost','root','','db_barangay') or die(mysqli_error());
//  $conn=mysql_connect("localhost","zhyiiynw_admin","p@$$w0rdYPP") or die("Could not connect");
// mysql_select_db("zhyiiynw_db_barangay",$conn) or die("could not connect database");
// 			date_default_timezone_set("Asia/Manila");

$hostname = "localhost";

// $username = "root";
// $password = '';
// $database = "db_barangay";


$username = "zhyiiynw_admin";
$password = 'p@$$w0rdYPP';
$database = "zhyiiynw_db_barangay";

$con = mysqli_connect($hostname, $username, $password, $database)
  or die(mysqli_error());
date_default_timezone_set("Asia/Manila");


// Connection Check

// if (!$con) {

//     die("Connection failed: " . $con->connect_error);
// } else {

//     echo "Connected Successfully!";

//     // $con->close();
// }
