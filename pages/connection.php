<?php

    // Establishing Connection with Server by passing inputs as a parameter
    
    $hostname = "localhost";
    $username = "zhyiiynw_admin";
    $password = 'p@$$w0rdYPP';
    $database = "zhyiiynw_db_barangay";

    // $username = "root";
    // $password = '';
    // $database = "db_barangay";

    $con = mysqli_connect($hostname, $username, $password, $database) 
    or die(mysqli_error());
    date_default_timezone_set("Asia/Manila");
    
    
    // Connection Check
    
    if (!$con) {
    
        die("Connection failed: " . $con->connect_error);
    } else {
    
        // echo "Connected Successfully!";
    
        // $con->close();
    }

?>
 