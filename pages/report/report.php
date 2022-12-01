<?php session_start(); ?>
<!DOCTYPE html>
<html>

<?php
if (!isset($_SESSION['role'])) {
    header("Location: ../../login.php");
} else {
    ob_start();
    include('../head_css.php'); ?>

    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php

        include "../connection.php";
        ?>
        <?php include('../header.php'); ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include('../sidebar-left.php'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Reports
                    </h1>

                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="box">
                            <div class="box-header">
                                <div style="padding:10px; display:flex;gap:1em;">
                                    <!-- <form action="export.php" method="post">
                                        <button class="btn btn-primary btn-sm" type="submit" name="export">
                                            <i class="fa fa-file-excel-o" aria-hidden="true"></i> Export
                                        </button>
                                    </form> -->
                                    <button class="btn btn-default btn-sm" type="button" name="print" id="print_report">
                                        <i class="fa fa-file-excel-o" aria-hidden="true"></i> Print
                                    </button>
                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body table-responsive" id="content">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Total Residents
                                            </div>
                                            <div class="panel-body">
                                                <div id="morris-donut-chart"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                All Senior Citizens Residents
                                            </div>
                                            <div class="panel-body">
                                                <?php include "./SeniorCitizens.php"; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                All 4P's member Residents
                                            </div>
                                            <div class="panel-body">
                                                <?php include "./ForPsResidents.php"; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                All Residents
                                            </div>
                                            <div class="panel-body">
                                                <?php include "./AllResidents.php"; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div> <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
    <?php }
include "../footer.php";

include "donut-chart.php";
// include "bar-chart.php";
    ?>

    <script>
        $(document).ready(function() {
            $('#print_report').click(function() {
                window.print();
            });
        });
    </script>

    </body>

</html>