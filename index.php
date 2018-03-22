<?php
include("config.php");
session_start();
$error = '';

if(isset($_SESSION['login_user']))

{

    $row['role'] = $_SESSION['role'] ;

    if ($row['role'] == 1) {
        header("location: /admin/");

    }

    if ($row['role'] == 2) {
        header("location: /user/");

    }




}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['userid'];
    $password = ($_POST["password"]);
    $error = "";
    $sql = "SELECT * FROM `login` WHERE userid = '$username' and password = '$password'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);


    if ($count == 1) {

        $rolesql = "SELECT role from `login` where userid='$username'";
        $result1 = mysqli_query($db, $rolesql);
        $row = mysqli_fetch_array($result1);

        $_SESSION['login_user'] = $username;

        $_SESSION['role'] = $row['role'];

        if ($row['role'] == 1) {
            header("location: /user/");

        }

        if ($row['role'] == 2) {
            header("location: /admin/");


        }



    } else {
        $error = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Password or Username Incorrect!
              </div>';
    }
}
?>
<!DOCTYPE html>
<html xmlns:https="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/favicon.png" rel="icon" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>


    <title>Nalli Booking | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
        body {

        }
    </style>


</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo" style="color: #fff;">
        <a href="/"><b>Nalli</b>Booking</a>
    </div>

    <?php if (isset($error)) {
        echo $error;
    } ?>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="" method="post">
            <div class="form-group has-feedback">
                <input type="text" name="userid" class="form-control" placeholder="User ID">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">

                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>


    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
</body>
</html>