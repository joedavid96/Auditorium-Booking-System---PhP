<?php
include('../session.php');
include ('../custom-functions.php');
role_check($_SESSION['role'],2);

$msg="";

if(isset($_POST['submit'])) {





    $staff_name = $_POST['staff-name'];
    $staff_mail = $_POST['staff-email'];
    $staff_number = $_POST['staff-number'];
    $stud_name = $_POST['student-name'];
    $stud_mail = $_POST['student-email'];
    $stud_number = $_POST['student-number'];
    $event_name = $_POST['event-name'];
    $org_dept = $_POST['org-dept'];
    $guest_particulars = $_POST['guest-particulars'];
    $attending_classes = $_POST['attending-classes'];
    $event_topic = $_POST['event-topic'];
    $event_duration = $_POST['event-duration'];
    $wired_mic = $_POST['wired-mic'];
    $cordl_mic = $_POST['cordl-mic'];
    $chairs_aud = $_POST['chairs-aud'];
    $lcd_proj = $_POST['lcdproj'];
    $ac = $_POST['ac'];
    $chairs_stg = $_POST['chairs-stg'];
    $podium = $_POST['podium'];
    $oth_req = $_POST['oth-req'];


    $sql1 = "SELECT eventid from event_content ORDER BY eventid desc LIMIT 1";
    $res1 = mysqli_query($db, $sql1);
    $count = mysqli_fetch_array($res1);
    $eventid = $count[0]+1;
    $sql3="insert into event_status(eventid, userid, hod, principal, fo, smc_main, sec_main, sec, ao_team) VALUES ('$eventid', 'sdf',0,0,0,0,0,0,0 )";
    $res3=mysqli_query($db, $sql3);

    $sql4 = "INSERT into event_content (eventid, staffname, staffmail, staffnumber, studname, studmail, studnumber, eventname, orgdept, guestdetails, attclasses,
 eventtopic, eventduration, wiredmic, cordlmic, chairsaud, lcdproj, ac, chairsstg, podium, othreq, verify) values ('$eventid', '$staff_name','$staff_mail',
 '$staff_number','$stud_name','$stud_mail','$stud_number','$event_name','$org_dept','$guest_particulars','$attending_classes','$event_topic','$event_duration',
 '$wired_mic','$cordl_mic','$chairs_aud','$lcd_proj','$ac','$chairs_stg','$podium','$oth_req',0)";
    $res4=mysqli_query($db, $sql4);



    if($res4)
    {

        $msg='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
                soul, like these sweet mornings of spring which I enjoy with my whole heart.
              </div>';

    }else{

        $msg='<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
                soul, like these sweet mornings of spring which I enjoy with my whole heart.
              </div>';


    }


}







?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nalli | User Dashboard</title>
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
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../plugins/iCheck/all.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../bower_components/select2/dist/css/select2.min.css">
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
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>U</b>Nb</span>
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
                    <img src="/dist/img/user.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Department</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> User</a>
                </div>
            </div>
            <!-- search form -->

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>

                <li><a href="view-event.php"><i class="fa fa-check"></i> <span>Confirmed Booking</span></a></li>
                <li class="active"><a href="book-event.php"><i class="fa fa-calendar"></i> <span>Book Events</span></a></li>
                <li><a href="booking-status.php"><i class="fa fa-circle-o-notch"></i> <span>Booking Status</span></a></li>
                <li><a href="booking-records.php"><i class="fa fa-folder"></i> <span>Booking Records</span></a></li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Registration
                <small>Bookings to be done 48 Hours prior to the Event</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="" method="post" class="form-horizontal">
            <div class="row">

                <?php if(isset($msg)){ echo $msg;} ?>

                 <div class="col-md-6">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Staff Coordinator Credentials</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="staff-name" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="staff-name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="staff-email" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="staff-email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="staff-number" class="col-sm-2 control-label">Contact No.</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="staff-number" placeholder="Contact No." required>
                                    </div>
                                </div>
                            </div>
                    </div>



                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Student Coordinator Credentials</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <div class="box-body">
                            <div class="form-group">
                                <label for="student-name" class="col-sm-2 control-label">Name</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="student-name" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="student-email" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="student-email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="student-number" class="col-sm-2 control-label">Contact No.</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="student-number" placeholder="Contact No.">
                                </div>
                            </div>
                        </div>
                    </div>


                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">About The Event</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="event-name" class="col-sm-2 control-label">Event Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="event-name" placeholder="Name of the Event" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="org-dept" class="col-sm-2 control-label">Organized By</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="org-dept" placeholder="Organized by (Department, Placement, Ecell, NEST etc.)"required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="guest-particulars" class="col-sm-2 control-label">Guest Particulars</label>
                                    <div class="col-sm-10">
                                    <textarea name="guest-particulars" class="form-control" rows="2" placeholder="Information about the Attending Guests ( if any )" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="attending-classes" class="col-sm-2 control-label">Attending Classes or Members</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="attending-classes" placeholder="Attending Classes ( eg: IV CSE A, Ecell Members, EWB members etc. )">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="event-topic" class="col-sm-2 control-label">Subject of the Event</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="event-topic" placeholder="Subject or Topic of the Event">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Date and time range:</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <input type="text" name="event-duration" class="form-control pull-right" id="reservationtime">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                        </div>
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">PA System Specifications</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="mic" class="col-sm-3 control-label">Wired Mic</label>
                                    <div class="col-sm-2">
                                        <label>
                                            <input name="wired-mic" type="checkbox" value="yes" class="flat-red">
                                        </label>
                                    </div>
                                    <label for="mic" class="col-sm-3 control-label">Cordless Mic</label>
                                    <div class="col-sm-2">
                                        <label>
                                            <input name="cordl-mic" type="checkbox" value="yes" class="flat-red">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Event Specifications</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="chairs-aud" class="col-sm-2 control-label">Chairs Required for the Audience<br>(Max = 500)</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="chairs-aud" placeholder="No. of chairs required in numbers" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lcdproj" class="col-sm-2 control-label">LCD Projector</label>
                                    <div class="col-sm-10">
                                    <label>
                                        <input type="radio" name="lcdproj" class="flat-red" value="1" checked>Yes
                                        <input type="radio" name="lcdproj" class="flat-red" value="0">No
                                    </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ac" class="col-sm-2 control-label">Air Conditioning</label>
                                    <div class="col-sm-10">
                                        <label>
                                            <input type="radio" name="ac" class="flat-red" value="yes" checked>Yes
                                            <input type="radio" name="ac" class="flat-red" value="no">No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Stage Specifications</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="chairs-stg" class="col-sm-2 control-label">Chairs Required on Stage</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="chairs-stg" placeholder="No. of chairs required in numbers">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="podium" class="col-sm-2 control-label">Podium Required</label>
                                    <div class="col-sm-10">
                                        <label>
                                            <input type="radio" name="podium" class="flat-red" value="yes" checked>Yes
                                            <input type="radio" name="podium" class="flat-red" value="no">No
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="oth-req" class="col-sm-2 control-label">Other Requirements</label>
                                    <div class="col-sm-10">
                                        <textarea name="oth-req" class="form-control" rows="5" placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Confirm and Submit</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="col-sm-5">
                                        <button class="btn btn-danger" type="reset">Reset</button>
                                    </div>
                                    <div class="col-sm-1">
                                        <button class="btn btn-primary" type="submit" name="submit" value="submit">
                                             Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                 </div>
                <div class="col-md-6">



                </div>


            </div>




            </form>









            <div class="modal fade" id="modal-default">
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
                                    <input type="text" class="form-control" id="rev-staff-name" name="rev-staff-name" readonly="readonly" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rev-staff-email" class="control-label">Staff Email</label>

                                <div>
                                    <input type="text" class="form-control" id="rev-staff-email" name="rev-staff-email" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rev-staff-number" class="control-label">Staff Contact</label>

                                <div>
                                    <input type="text" class="form-control" id="rev-staff-number" name="rev-staff-number" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rev-student-name" class="control-label">Student Name</label>

                                <div>
                                    <input type="text" class="form-control" id="rev-student-name" name="rev-student-name" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rev-student-email" class="control-label">Student Email</label>

                                <div>
                                    <input type="text" class="form-control" id="rev-student-email" name="rev-student-email" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rev-student-number" class="control-label">Student Contact</label>

                                <div>
                                    <input type="text" class="form-control" id="rev-student-number" name="rev-student-number" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rev-event-name" class="control-label">Event Name</label>

                                <div>
                                    <input type="text" class="form-control" id="rev-event-name" name="rev-event-name" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rev-org-dept" class="control-label">Organizing Dept</label>

                                <div>
                                    <input type="text" class="form-control" id="rev-org-dept" name="rev-org-dept" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rev-guest-particulars" class="control-label">Guest Particulars</label>

                                <div>
                                    <input type="text" class="form-control" id="rev-guest-particulars" name="rev-guest-particulars" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rev-attending-classes" class="control-label">Attending Classes/Members</label>

                                <div>
                                    <input type="text" class="form-control" id="rev-attending-classes" name="rev-attending-classes" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rev-event-topic" class="control-label">Event Subject</label>

                                <div>
                                    <input type="text" class="form-control" id="rev-event-topic" name="rev-event-topic" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rev-event-duration" class="control-label">Event Duration</label>

                                <div>
                                    <input type="text" class="form-control" id="rev-event-duration" name="rev-event-duration" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rev-chairs-aud" class="control-label">Chairs (Audience)</label>

                                <div>
                                    <input type="text" class="form-control" id="rev-chairs-aud" name="rev-chairs-aud" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rev-lcdproj" class="control-label">LCD Projector</label>

                                <div>
                                    <input type="text" class="form-control" id="rev-lcdproj" name="rev-lcdproj" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rev-ac" class="control-label">Air Conditioning</label>

                                <div>
                                    <input type="text" class="form-control" id="rev-ac" name="rev-ac" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rev-chairs-stg" class="control-label">Chairs (Stage)</label>

                                <div>
                                    <input type="text" class="form-control" id="rev-chairs-stg" name="rev-chairs-stg" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rev-podium" class="control-label">Podium</label>

                                <div>
                                    <input type="text" class="form-control" id="rev-podium" name="rev-podium" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rev-oth-req" class="control-label">Other Requirements</label>

                                <div>
                                    <input type="text" class="form-control" id="rev-oth-req" name="rev-oth-req" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rev-wired-mic" class="control-label">Wired Mic</label>

                                <div>
                                    <input type="text" class="form-control" id="rev-wired-mic" name="rev-wired-mic" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rev-cordl-mic" class="control-label">Cordless Mic</label>

                                <div>
                                    <input type="text" class="form-control" id="rev-cordl-mic" name="rev-cordl-mic" readonly="readonly">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" data-dismiss="modal" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

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
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
        //Date range as a button

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass   : 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass   : 'iradio_flat-green'
        })

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        //Timepicker
        $('.timepicker').timepicker({
            showInputs: false
        })
    })
</script>
</body>
</html>

