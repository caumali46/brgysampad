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

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Karla&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

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

    html,
    body {
      font-family: 'Poppins', sans-serif !important;
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

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="../login.php">Login</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <style>
    body {
      background: url(../image/brgy.jpg);
      background-size: 100%;
    }

    .links nav {
      background-color: grey;
    }
  </style>

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
        "aaSorting": [],
        "dom": ' <"search"f><"top"l>rt<"bottom"ip><"clear">'
      });
    });

    $(document).ready(function() {
      $('.dataTables_filterinput[type="search"]').css({
        'width': '350px',
        'display': 'inline-block'
      });
    });
  </script>
</body>

</html>