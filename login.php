<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Barangay Information Management System</title>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="../image/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../image/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../image/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../image/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../image/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../image/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../image/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../image/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../image/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../image/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../image/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../image/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../image/favicons/favicon-16x16.png">
    <link rel="manifest" href="../image/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="skin-black">
    <div class="container" style="margin-top:30px">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading" style="text-align:center;">
            <img src="image/Logo.png" style="height:100px;" />
            <h3 class="panel-title">
              <strong> Welcome to Barangay Sampad! </strong>
            </h3>
          </div>
          <div class="panel-body">
            <form action="loginconnect.php" role="form" method="POST">
              <div class="form-group">
                <label for="txt_username">Username</label>
                <input type="text" class="form-control" style="border-radius:0px" name="txt_username" placeholder="Enter Username">
              </div>
              <div class="form-group">
                <label for="txt_password">Password</label>
                <input type="password" class="form-control" style="border-radius:0px" name="txt_password" placeholder="Enter Password">
                <span>
                  <i class="fa fa-eye" id="font" onclick="togglePW()" arial-hidden="true"></i>
                </span>
              </div>
              <button type="submit" class="btn btn-sm btn-primary" name="btn_login">Log in</button>
              <label id="error" class="label label-danger pull-right"></label>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
