<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php
if (!isset($_SESSION['role'])) {
    header("Location: ../../login.php");
} else {
    ob_start();
    include('../head_css.php'); ?>
    <style>
        .input-size {
            width: 418px;
        }

        a.btn.btn-default.btn-sm {
            font-weight: 700;
        }

        #table_length,
        #table_filter {
            display: none;
        }

        .residents_options {
            display: flex;
            justify-content: center;
        }

        td {
            width: 20%;
        }

        td:nth-child(1) {
            width: 5%;
        }

        td:nth-child(3) {
            width: 5%;
        }

        td:nth-child(5) {
            width: 5%;
        }

        td:nth-child(6) {
            width: 5%;
        }
    </style>

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
                        Archived Residents
                    </h1>
                </section>

                <?php
                if (!isset($_GET['resident'])) {
                ?>
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <!-- left column -->
                            <div class="box">
                                <div class="box-body table-responsive">
                                    <!-- <form method="post" enctype="multipart/form-data"> -->
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Purok</th>
                                                <th>Image</th>
                                                <th style="width: 150px !important;">Name</th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                                <th style="width: 70px !important;">Former Address</th>
                                                <th style="width: 150px !important;">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (!isset($_SESSION['staff'])) {
                                                $squery = mysqli_query($con, "SELECT zone,id,CONCAT(lname, ', ', fname, ' ', mname) as cname, age, gender, formerAddress, image FROM tblresident where is_deleted != '0' order by zone");
                                                while ($row = mysqli_fetch_array($squery)) {
                                                    echo '
                                                    <tr>
                                                        <td>' . $row['id'] . '</td>
                                                        <td>' . $row['zone'] . '</td>
                                                        <td style="width:70px;"><image src="image/' . basename($row['image']) . '" style="width:60px;height:60px;"/></td>
                                                        <td>' . $row['cname'] . '</td>
                                                        <td>' . $row['age'] . '</td>
                                                        <td>' . $row['gender'] . '</td>
                                                        <td>' . $row['formerAddress'] . '</td>
                                                        <td>
                                                            <div class="residents_options">
                                                                <form  method="post" enctype="multipart/form-data">
                                                                    <input type="hidden" name="resident_id" value="' . $row['id'] . '" />
                                                                    <button type="submit" name="restore_resident" class="btn btn-primary btn-sm" >Restore</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    ';

                                                    include "edit_modal.php";
                                                }
                                            } else {
                                                $squery = mysqli_query($con, "SELECT zone,id,CONCAT(lname, ', ', fname, ' ', mname) as cname, age, gender, formerAddress, image FROM tblresident where is_deleted != '0' order by zone");
                                                while ($row = mysqli_fetch_array($squery)) {
                                                    echo '
                                                    <tr>
                                                        <td>' . $row['zone'] . '</td>
                                                        <td style="width:70px;"><image src="image/' . basename($row['image']) . '" style="width:60px;height:60px;"/></td>
                                                        <td>' . $row['cname'] . '</td>
                                                        <td>' . $row['age'] . '</td>
                                                        <td>' . $row['gender'] . '</td>
                                                        <td>' . $row['formerAddress'] . '</td>
                                                        <td>
                                                            <div class="residents_options">
                                                                <form  method="post" enctype="multipart/form-data">
                                                                    <input type="hidden" name="resident_id" value="' . $row['id'] . '" />
                                                                    <button type="submit" name="restore_resident" class="btn btn-primary btn-sm" >Restore</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    ';

                                                    include "edit_modal.php";
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                    <!-- include "../deleteModal.php"; -->

                                    <!-- </form> -->
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <?php include "../edit_notif.php"; ?>

                            <?php include "../added_notif.php"; ?>

                            <?php include "../delete_notif.php"; ?>

                            <?php include "../duplicate_error.php"; ?>

                            <?php include "add_modal.php"; ?>

                            <?php include "function.php"; ?>


                        </div> <!-- /.row -->
                    </section><!-- /.content -->
                <?php
                } else {
                }
                ?>
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
    <?php }
include "../footer.php"; ?>
    <script type="text/javascript">
        $(function() {
            $("#table").dataTable({
                "aoColumnDefs": [{
                    "bSortable": false,
                    "aTargets": [0, 6]
                }],
                "aaSorting": []
            });
        });
    </script>
    </body>

</html>