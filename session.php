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
            header("location: /student");
        }
        if ($userrole == 2) {
            header("location: /faculty");
        }
        if ($userrole == 3) {
            header("location: /warden");
        }
        if ($userrole == 4) {
            header("location: /hod");
        }
        if ($userrole == 5) {
            header("location: /principal");
        }
        if ($userrole == 6) {
            header("location: /admin");
        }
    }
}
?>