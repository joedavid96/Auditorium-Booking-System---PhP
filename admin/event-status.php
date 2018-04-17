<?php
include('../session.php');
include('../custom-functions.php');
role_check($_SESSION['role'],1);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nalli | Admin Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>Nb</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Nalli </b>Booking</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <li>
                        <a href="../logout.php" ><i class="fa fa-sign-out"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/dist/img/admin.png" class="img-circle" alt="Admin Image">
                </div>
                <div class="pull-left info">
                    <p>Admin</p>
                    <a href=""><i class="fa fa-circle text-success"></i>Online</a>
                </div>
            </div>
            <!-- search form -->

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>

                <li class="active"><a href="view-booking.php"><i class="fa fa-check"></i> <span>Confirmed Booking</span></a></li>
                <li><a href="manage-booking.php"><i class="fa fa-gears"></i> <span>Manage Events</span></a></li>
                <li><a href="change-password.php"><i class="fa fa-gear"></i> <span>Change Password</span></a></li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"><b>Confirmed Bookings</b></h3>
                    </div>
                    <div class="box-body">


                        <table id="viewEvent" class="table table-bordered table-hover">

                            <thead>

                            <tr>
                                <th> Event Name </th>
                                <th> Date </th>
                                <th> View Event </th>
                                <th> View Status </th>
                            </tr>


                            </thead>
                            <tbody>


                            <?php


                            $sql="SELECT event_content.* from event_content,event_status WHERE event_content.eventid=event_status.eventid and event_status.principal=1 ";
                            $res=mysqli_query($db, $sql);
                            $sql1="SELECT * from event_status WHERE verify=1";
                            $res1=mysqli_query($db, $sql1);

                            while($row=mysqli_fetch_array($res)) {

                                echo '<tr>';
                                echo '<td>' . $row["eventname"] . '</td>';
                                echo '<td>' . $row["eventduration"] . '</td>';
                                echo '<td><button type="button" data-toggle="modal" data-target="#eventid-'.$row["eventid"].'" class="btn btn-primary">Open</button></td>';
                                echo '<td><a href="event-status.php?id=' . $row["eventid"] .'" class="btn btn-success">Track Status</a></td>';
                                echo '</tr>';
                            }
                            ?>





                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
                <div class="col-md-6">

                    <!-- The time line -->
                    <ul class="timeline">
                        <!-- timeline time label -->
                        <li class="time-label">
                            <i class="fa fa-angle-double-down bg-blue"></i>
                            <div class="timeline-item">

                                 <span class="time"><i class="fa fa-clock-o"></i>

                                     <?php
                                     $eid=$_GET['id'];
                                     $sql4="SELECT * FROM status_timestamp WHERE eventid=".$eid;
                                     $res4=mysqli_query($db,$sql4);
                                     $count=mysqli_fetch_array($res4);
                                     $time= $count['submit'];
                                     $date=datetime($time);
                                     echo $date;
                                     ?>

                                </span>

                                <h3 class="timeline-header">Booking Submission</h3>

                                <div class="timeline-body"> <h3>
                                        Your booking was successfully submitted!
                                    </h3>
                                </div>
                            </div>
                        </li>

                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>
                            <i class="fa fa-angle-double-down bg-blue"></i>

                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i>

                                    <?php
                                    $eid=$_GET['id'];
                                    $sql4="SELECT * FROM status_timestamp WHERE eventid=".$eid;
                                    $res4=mysqli_query($db,$sql4);
                                    $count=mysqli_fetch_array($res4);
                                    $time= $count['hod'];
                                    $date=datetime($time);
                                    echo $date;
                                    ?>

                                </span>

                                <h3 class="timeline-header">Head of Department</h3>

                                <div class="timeline-body"> <h3>
                                        <?php

                                        $sql = "SELECT hod from event_status where eventid=".$_GET['id'];
                                        $res = mysqli_query($db, $sql);
                                        $status = mysqli_fetch_array($res);
                                        $sts = $status ['hod'];
                                        echo status($sts);

                                        ?>
                                    </h3>
                                </div>
                            </div>
                        </li>

                        <li>
                            <i class="fa fa-angle-double-down bg-blue"></i>

                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i>

                                    <?php
                                    $eid=$_GET['id'];
                                    $sql4="SELECT * FROM status_timestamp WHERE eventid=".$eid;
                                    $res4=mysqli_query($db,$sql4);
                                    $count=mysqli_fetch_array($res4);
                                    $time= $count['principal'];
                                    $date=datetime($time);
                                    echo $date;
                                    ?>

                                </span>

                                <h3 class="timeline-header">Principal</h3>

                                <div class="timeline-body"> <h3>
                                        <?php

                                        $sql1 = "SELECT principal from event_status where eventid=".$_GET['id'];
                                        $res1 = mysqli_query($db, $sql1);
                                        $status1 = mysqli_fetch_array($res1);
                                        $sts1 = $status1 ['principal'];
                                        echo status($sts1);

                                        ?>
                                    </h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-angle-double-down bg-blue"></i>

                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i>

                                    <?php
                                    $eid=$_GET['id'];
                                    $sql4="SELECT * FROM status_timestamp WHERE eventid=".$eid;
                                    $res4=mysqli_query($db,$sql4);
                                    $count=mysqli_fetch_array($res4);
                                    $time= $count['sec'];
                                    $date=datetime($time);
                                    echo $date;
                                    ?>

                                </span>

                                <h3 class="timeline-header">Maintenance Officials</h3>

                                <div class="timeline-body"> <h3>
                                        <?php

                                        $sql2 = "SELECT sec from event_status where eventid=".$_GET['id'];
                                        $res2 = mysqli_query($db, $sql2);
                                        $status2 = mysqli_fetch_array($res2);
                                        $sts2 = $status2 ['sec'];
                                        echo status($sts2);

                                        ?>
                                    </h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-angle-double-down bg-blue"></i>

                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i>

                                    <?php
                                    $eid=$_GET['id'];
                                    $sql4="SELECT * FROM status_timestamp WHERE eventid=".$eid;
                                    $res4=mysqli_query($db,$sql4);
                                    $count=mysqli_fetch_array($res4);
                                    $time= $count['ao_team'];
                                    $date=datetime($time);
                                    echo $date;
                                    ?>

                                </span>

                                <h3 class="timeline-header">Administration Team!</h3>

                                <div class="timeline-body"> <h3>
                                        <?php

                                        $sql3 = "SELECT ao_team from event_status where eventid=".$_GET['id'];
                                        $res3 = mysqli_query($db, $sql3);
                                        $status3 = mysqli_fetch_array($res3);
                                        $sts3 = $status3 ['ao_team'];
                                        echo status($sts3);

                                        ?>
                                    </h3>
                                    <h5>Nalli Arangam is Ready for your Event!</h5>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>

            <?php


            $sql5="SELECT * from event_content WHERE verify=1";
            $res5=mysqli_query($db, $sql5);

            while($row=mysqli_fetch_array($res5))
            {

                ?>

                <div class="modal fade" id="eventid-<?php echo $row['eventid'];?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Review Your Application</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="rev-staff-name" class="control-label">Staff Name</label>

                                    <div>
                                        <input type="text" class="form-control" id="rev-staff-name" value="<?php echo $row['staffname'];?> " name="rev-staff-name" readonly="readonly" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rev-staff-email" class="control-label">Staff Email</label>

                                    <div>
                                        <input type="text" class="form-control" id="rev-staff-email"value="<?php echo $row['staffmail'];?>" name="rev-staff-email" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rev-staff-number" class="control-label">Staff Contact</label>

                                    <div>
                                        <input type="text" class="form-control" id="rev-staff-number" value="<?php echo $row['staffnumber'];?>" name="rev-staff-number" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rev-student-name" class="control-label">Student Name</label>

                                    <div>
                                        <input type="text" class="form-control" id="rev-student-name" value="<?php echo $row['studname'];?>" name="rev-student-name" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rev-student-email" class="control-label">Student Email</label>

                                    <div>
                                        <input type="text" class="form-control" id="rev-student-email" value="<?php echo $row['studmail'];?>" name="rev-student-email" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rev-student-number" class="control-label">Student Contact</label>

                                    <div>
                                        <input type="text" class="form-control" id="rev-student-number" value="<?php echo $row['studnumber'];?>" name="rev-student-number" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rev-event-name" class="control-label">Event Name</label>

                                    <div>
                                        <input type="text" class="form-control" id="rev-event-name" value="<?php echo $row['eventname'];?>" name="rev-event-name" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rev-org-dept" class="control-label">Organizing Dept</label>

                                    <div>
                                        <input type="text" class="form-control" id="rev-org-dept" value="<?php echo $row['orgdept'];?>" name="rev-org-dept" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rev-guest-particulars" class="control-label">Guest Particulars</label>

                                    <div>
                                        <input type="text" class="form-control" id="rev-guest-particulars" value="<?php echo $row['guestdetails'];?>" name="rev-guest-particulars" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rev-attending-classes" class="control-label">Attending Classes/Members</label>

                                    <div>
                                        <input type="text" class="form-control" id="rev-attending-classes" value="<?php echo $row['attclasses'];?>" name="rev-attending-classes" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rev-event-topic" class="control-label">Event Subject</label>

                                    <div>
                                        <input type="text" class="form-control" id="rev-event-topic" value="<?php echo $row['eventtopic'];?>" name="rev-event-topic" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rev-event-duration" class="control-label">Event Duration</label>

                                    <div>
                                        <input type="text" class="form-control" id="rev-event-duration" value="<?php echo $row['eventduration'];?>" name="rev-event-duration" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rev-chairs-aud" class="control-label">Chairs (Audience)</label>

                                    <div>
                                        <input type="text" class="form-control" id="rev-chairs-aud" value="<?php echo $row['chairsaud'];?>" name="rev-chairs-aud" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rev-lcdproj" class="control-label">LCD Projector</label>

                                    <div>
                                        <input type="text" class="form-control" id="rev-lcdproj" value="<?php echo $row['lcdproj'];?>" name="rev-lcdproj" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rev-ac" class="control-label">Air Conditioning</label>

                                    <div>
                                        <input type="text" class="form-control" id="rev-ac" value="<?php echo $row['ac'];?>" name="rev-ac" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rev-chairs-stg" class="control-label">Chairs (Stage)</label>

                                    <div>
                                        <input type="text" class="form-control" id="rev-chairs-stg" value="<?php echo $row['chairsstg'];?>" name="rev-chairs-stg" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rev-podium" class="control-label">Podium</label>

                                    <div>
                                        <input type="text" class="form-control" id="rev-podium" value="<?php echo $row['podium'];?>" name="rev-podium" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rev-oth-req" class="control-label">Other Requirements</label>

                                    <div>
                                        <input type="text" class="form-control" id="rev-oth-req" value="<?php echo $row['othreq'];?>" name="rev-oth-req" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rev-wired-mic" class="control-label">Wired Mic</label>

                                    <div>
                                        <input type="text" class="form-control" id="rev-wired-mic" value="<?php echo $row['wiredmic'];?>" name="rev-wired-mic" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rev-cordl-mic" class="control-label">Cordless Mic</label>

                                    <div>
                                        <input type="text" class="form-control" id="rev-cordl-mic" value="<?php echo $row['cordlmic'];?>" name="rev-cordl-mic" readonly="readonly">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

                <?php


            }

            ?>


        </section>


        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../bower_components/raphael/raphael.min.js"></script>
<script src="../bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- daterangepicker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script>
    $(function () {
        $('#viewEvent').DataTable()

    })
</script>
</body>
</html>

