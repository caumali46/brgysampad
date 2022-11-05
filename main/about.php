<html>

<head>
  <meta charset="UTF-8">
  <title>Barangay Sampad Information Management System</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- bootstrap 3.0.2 -->
  <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- font Awesome -->
  <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Ionicons -->
  <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <link href="../js/morris/morris-0.4.3.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />

  <link href="../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="../css/select2.css" rel="stylesheet" type="text/css" />
  <script src="../js/jquery-1.12.3.js" type="text/javascript"></script>

  <style>
    .no-print {
      display: none;
    }

    .dataTables_filter input {
      padding-top: 20px;
      padding-bottom: 20px;
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-inverse" style="border-radius:0px;">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img alt="Brand" src="../image/Logo.png" style="width:50px; margin-top:-15px; "></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="../login.php">Login</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="about">

    <h1>About Barangay System</h1>
    <img src="../image/system.png">

    <style>
      body {
        background: url(../image/brgy.jpg);
        background-size: 100%;

      }

      h1 {
        font-size: 55px;
        margin-left: 30%;
        background-color: blue;
        width: 40%;
        color: white;
        border-radius: 20px;
        text-align: center;
      }

      .about img {
        height: 50%;
        width: 30%;
        margin-left: 10%;
        margin-top: 5%;
        background-color: white;
        border-radius: 50px;
      }
    </style>

  </div>

  <script src="../js/alert.js" type="text/javascript"></script>
  <script src="../js/bootstrap.min.js" type="text/javascript"></script>


  <script src="../js/morris/raphael-2.1.0.min.js" type="text/javascript"></script>
  <script src="../js/morris/morris.js" type="text/javascript"></script>
  <script src="../js/select2.full.js" type="text/javascript"></script>

  <script src="../js/jquery.dataTables.min.js" type="text/javascript"></script>
  <script src="../js/dataTables.buttons.min.js" type="text/javascript"></script>
  <script src="../js/buttons.print.min.js" type="text/javascript"></script>

  <script src="../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
  <!-- AdminLTE App -->
  <script src="../js/AdminLTE/app.js" type="text/javascript"></script>

  <script type="text/javascript">
    $(function() {
      $("#table").dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0, 5]
        }],
        "aaSorting": []
      });
    });
  </script>
</body>

</html>