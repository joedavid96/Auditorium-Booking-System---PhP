<?php
include('../session.php');
role_check($_SESSION['role'],2);
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
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>


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
                        <a href="../logout.php" ><i class="fa fa-gears"></i> Logout</a>
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
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Alexander Pierce</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>

                <li><a href="view-event.php"><i class="fa fa-check"></i> <span>Confirmed Booking</span></a></li>
                <li class="active"><a href="book-event.php"><i class="fa fa-calendar"></i> <span>Book Events</span></a></li>
                <li><a href="booking-status.php"><i class="fa fa-calendar"></i> <span>Booking Status</span></a></li>
                <li><a href="booking-records.php"><i class="fa fa-calendar"></i> <span>Booking Records</span></a></li>

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
            <form id="regis-form" action="" method="get" class="form-horizontal">
            <div class="row">
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
                 </div>
                <div class="col-md-6">
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
                                    <input type="text" class="form-control" name="staff-number" placeholder="Contact No.">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
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
                                    <label for="event-duration" class="col-sm-2 control-label">Event Duration</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" name="event-duration">
                                    </div>
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
                    </div>
                    <div class="col-md-6">
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
                                        <input type="radio" name="lcdproj" class="flat-red" value="yes" checked>Yes
                                        <input type="radio" name="lcdproj" class="flat-red" value="no">No
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
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                    </div>
                    <div class="col-md-2">
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
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                                             Review
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <script>

       var a = $("input[name='staff-name']").val();
       var b = $("input[name='staff-email']").val();
       var c = $("input[name='staff-number']").val();
       var d = $("input[name='student-name']").val();
       var e = $("input[name='student-email']").val();
       var f = $("input[name='student-number']").val();
       var g = $("input[name='event-name']").val();
       var h = $("input[name='org-dept']").val();
       var i = $("input[name='guest-particulars']").val();
       var j = $("input[name='attending-classes']").val();
       var k = $("input[name='event-topic']").val();
       var l = $("input[name='event-duration']").val();
       var m = $("input[name='wired-mic']").val();
       var n = $("input[name='cordl-mic']").val();
       var o = $("input[name='chairs-aud']").val();
       var p = $("input[name='lcdproj']").val();
       var q = $("input[name='ac']").val();
       var r = $("input[name='chairs-stg']").val();
       var s = $("input[name='podium']").val();
       var t = $("input[name='oth-req']").val();

       var ra = document.getElementById('rev-staff-name');
       ra.value = a;
       var rb = document.getElementById('rev-staff-email');
       rb.value = b;
       var rc = document.getElementById('rev-staff-number');
       rc.value = c;
       var rd = document.getElementById('rev-student-name');
       rd.value = d;
       var re = document.getElementById('rev-student-email');
       re.value = e;
       var rf = document.getElementById('rev-student-number');
       rf.value = f;
       var rg = document.getElementById('rev-event-name');
       rg.value = g;
       var rh = document.getElementById('rev-org-dept');
       rh.value = h;
       var ri = document.getElementById('rev-guest-particulars');
       ri.value = i;
       var rj = document.getElementById('rev-attending-classes');
       rj.value = j;
       var rk = document.getElementById('rev-event-topic');
       rk.value = k;
       var rl = document.getElementById('rev-event-duration');
       rl.value = l;
       var rm = document.getElementById('rev-wired-mic');
       rm.value = m;
       var rn = document.getElementById('rev-cordl-mic');
       rn.value = n;
       var ro = document.getElementById('rev-chairs-aud');
       ro.value = o;
       var rp = document.getElementById('rev-lcdproj');
       rp.value = p;
       var rq = document.getElementById('rev-ac');
       rq.value = q;
       var rr = document.getElementById('"rev-chairs-stg');
       rr.value = r;
       var rs = document.getElementById('rev-podium');
       rs.value = s;
       var rt = document.getElementById('rev-oth-req');
       rt.value = t;
       });


    </script>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
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
<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page script -->
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
        $('#daterange-btn').daterangepicker(
            {
                ranges   : {
                    'Today'       : [moment(), moment()],
                    'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                    'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
            },
            function (start, end) {
                $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )

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

