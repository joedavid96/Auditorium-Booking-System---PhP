<?php
include('config.php');
session_start();
$user_check = $_SESSION['login_user'];
$ses_sql = mysqli_query($db, "select userid from `login` where userid = '$user_check' ");
$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
$login_session = $row['userid'];
if (!($_SESSION['login_user'])) {
    header("location:/");
}
//functions
function role_check($userrole, $role)
{
    if($userrole!=$role){
        if ($userrole == 1) {
            header("location: /admin");
        }
        if ($userrole == 2) {
            header("location: /user");
        }

    }
}
?>