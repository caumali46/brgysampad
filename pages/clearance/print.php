<?php session_start(); ?>
<!DOCTYPE html>
<html>

<?php
if (!isset($_SESSION['role'])) {
  header("Location: ../../login.php");
} else {
  ob_start();
  // include('../head_css.php');
  // require_once("main/partials/head.html");
}
?>

<?php
include "../../pages/connection.php";
?>

<head>
  <link href="/landing-page/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/landing-page/assets/css/style.css" rel="stylesheet" />
  <style>
    h1 {
      font-weight: 700;
      margin-top: 2em;
    }

    .to-whom {
      font-weight: 600;
      margin-top: 4em;
    }

    .footer {
      display: flex;
      justify-content: end;
    }
  </style>
</head>

<body>


  <div class="container">
    <?php
    $id = $_GET["id"];
    // $edit_query = mysqli_query($con, "SELECT * from tblclearance where clearanceNo = $id");
    $squery = mysqli_query($con, "SELECT *,CONCAT(r.lname, ', ' ,r.fname, ' ' ,r.mname) as residentname,p.id as pid FROM tblclearance p left join tblresident r on r.id = p.residentid 
     where clearanceNo = $id") or die('Error: ' . mysqli_error($con));

    while ($row = mysqli_fetch_array($squery)) {
      // print_r($row);
      if ($row['purpose'] == 'Barangay Indigency') {
        echo '<div class="row">
            <div class="col-sm-10 offset-md-2 mt-5">
              <h1 class="text-center text-uppercase">Certificate of Indigency</h1>

              <p class="to-whom">TO WHOM IT MAY CONCERN</p>
              <p>This is to ceritfy that Mr/Ms. ' . $row['fname'] . ' ' . $row['mname'] . ' ' . $row['lname'] . ' of legal age, is a bonffied resident of purok ' . $row['zone'] . ' Brangay Sampad , Cardona Rizal.
                The said person is of good moral character and an active member of the community.
                He/She is one of those how belong to a low-income family.
              </p>
              <p>
                This certification is being issued upon request of the above-named person for whatever legal purpose it may serve him/her best.
              </p>
              <p>
                Given this ' . date('m/d/Y h:i:s a', time())  . ' at Bragany Sampad Cardona Rizal.
              </p>

            </div>
            <div class="col-sm-10 offset-md-2 mt-5 footer">
              <div>
                <h6>Hon. ROMULO F. SISON JR.</h6>
                <span>Brngay Captain</span><br>
                <span>Brngay Sampad</span><br>
                <span>Cardona Rizal</span>
              </div>
            </div>
          </div>';
      }
      if ($row['purpose'] == 'Barangay Clearance') {
        echo '<div class="row">
            <div class="col-sm-10 offset-md-2 mt-5">
              <h1 class="text-center text-uppercase">CLEARANCE CERTIFICATE</h1>

              <p class="to-whom">TO WHOM IT MAY CONCERN</p>
              <p>This is to ceritfy that Mr/Ms. ' . $row['fname'] . ' ' . $row['mname'] . ' ' . $row['lname'] . ' of legal age, is a bonafied resident of purok ' . $row['zone'] . ' Brangay Sampad , Cardona Rizal.
                The said person is of good moral character and an active member of the community.
                He/She is one of those how belong to a low-income family.
              </p>
              <p>
                This certification is hereby issued upon request of the above-named person for whatever legal purpose it may serve him/her best.
              </p>
              <p>
              Given this ' . date('m/d/Y h:i:s a', time())  . ' at Bragany Sampad Cardona Rizal.
              </p>

            </div>
            <div class="col-sm-10 offset-md-2 mt-5 footer">
              <div>
                <h6>Hon. ROMULO F. SISON JR.</h6>
                <span>Brngay Captain</span><br>
                <span>Brngay Sampad</span><br>
                <span>Cardona Rizal</span>
              </div>
            </div>
          </div>';
      }
      if ($row['purpose'] == 'Barangay Residency') {
        echo '<div class="row">
              <div class="col-sm-10 offset-md-2 mt-5">
                <h1 class="text-center text-uppercase">Certificate of Residency</h1>
  
                <p class="to-whom">TO WHOM IT MAY CONCERN</p>
                <p>This is to certify that ' . $row['fname'] . ' ' . $row['mname'] . ' ' . $row['lname'] . ' Filipino Citizen is a bonafide resident of purok ' . $row['zone'] . ' Brangay Sampad , Cardona Rizal, he/she is known to me with a Good Moral
                character, law abiding citizen in the community. He/she has NO CRIMINAL RECORD found in our Barangay Records.
                This certification is hereby issued upon request of the above-named person for whatever legal purpose it may serve him/her best.
                </p>
                <p>
                This certification is issued in accordance to the implementation of the provision of the NEW LOCAL GOVERNMENT
                CODE of 1991 and for whatever legal purpose it may serve best.
                Signed this ' . date('m/d/Y h:i:s a', time())  . ', Cardona Rizal, Philippines.
                Prepared by:
                Authorized Persons with office position and signatures. 
                </p>
                <p>
                  This certification is being issued upon request of the above-named person for whatever legal purpose it may serve him/her best.
                </p>
                <p>
                  Given this 4th day of June, 2019 at Bragany Sampad Cardona Rizal.
                </p>
  
              </div>
              <div class="col-sm-10 offset-md-2 mt-5 footer">
                <div>
                  <h6>Hon. ROMULO F. SISON JR.</h6>
                  <span>Brngay Captain</span><br>
                  <span>Brngay Sampad</span><br>
                  <span>Cardona Rizal</span>
                </div>
              </div>
            </div>';
      }
      if ($row['purpose'] == 'Barangay Cedula') {
        echo '<div class="row">
                <div class="col-sm-10 offset-md-2 mt-5">
                  <h2 class="text-center text-uppercase">Please go to the brarangay office to claim your cedula.</h2>
                </div>
              </div>
            </div>';
      }
    }
    ?>



  </div>
</body>

</html>