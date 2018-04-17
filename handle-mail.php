<?php

include('config.php');
include('custom-functions.php');

function verifykey($key, $db){

    $sql="SELECT * from mail_keys WHERE mailkey='".$key."'";
    $res=mysqli_query($db, $sql);
    $check = mysqli_num_rows($res);
    if($check) {
        return 1;
    }else{

        return 0;
    }
}
function verifyevent($id, $db){

    $sql = "SELECT * from event_content WHERE eventid='".$id."'";
    $res=mysqli_query($db, $sql);
    $check = mysqli_num_rows($res);
    if($check) {
        return 1;
    }else{

        return 0;
    }
}

if(isset($_GET['id']) && isset($_GET['key']) ){
    $eventid = $_GET['id'];
    if(isset($_GET['pos']))
    {
        $pos=$_GET['pos'];


    }
    if(isset($_GET['res']))
    {
        $res=$_GET['res'];


    }
    $key=$_GET['key'];

    if(verifykey($key, $db) && verifyevent($eventid, $db))
    {

        if($res=="reject")
        {

            if($pos=="hod")
            {
                $sql = "UPDATE event_status SET hod=2 WHERE eventid=".$eventid;
                $res=mysqli_query($db, $sql);
                if($res){
                    $url="reject.php";
                redirect($url);

                }
                else{
                    $error="error.php";
                    redirect($error);
                }
            }elseif ($pos=="principal"){
                $sql = "UPDATE event_status SET principal=2 WHERE eventid=".$eventid;
                $res=mysqli_query($db, $sql);
                if($res){

                    $url="reject.php";
                    redirect($url);

                }
                else{
                    $error="error.php";
                    redirect($error);
                }
            }
        }
        if($res=="accept" && $res!="reject")
        {

            if($pos=="hod")
            {
                $sql = "UPDATE event_status SET hod=1 WHERE eventid=".$eventid;
                $res=mysqli_query($db, $sql);
                if($res){
                    eventMail($principal_mail, $eventid, $db, "principal" );
                    $sql1="UPDATE status_timestamp SET hod = CURRENT_TIMESTAMP WHERE eventid=".$eventid;
                    $res1=mysqli_query($db,$sql1);
                    if($res1){
                        $url="approve.php";
                        redirect($url);
                    }
                    else{
                        $error="error.php";
                        redirect($error);
                    }

                }
                else{
                    $error="error.php";
                    redirect($error);
                }
            }elseif ($pos=="principal"){
                $sql = "UPDATE event_status SET principal=1 WHERE eventid=".$eventid;
                $res=mysqli_query($db, $sql);
                if($res){
                    eventMail($fo_mail, $eventid, $db, "fo" );
                    $sql1="UPDATE status_timestamp SET principal = CURRENT_TIMESTAMP WHERE eventid=".$eventid;
                    $res1=mysqli_query($db,$sql1);
                    $sql2="INSERT into supervisor_assign (eventid, supervisor, seen) values ('$eventid',0,0)";
                    $res2=mysqli_query($db,$sql2);
                    if($res1){
                        $url="approve.php";
                        redirect($url);
                    }
                    else{
                        $error="error.php";
                        redirect($error);
                    }

                }
                else{
                    $error="error.php";
                    redirect($error);
                }
            }elseif ($pos=="fo"){
                $sql = "UPDATE event_status SET fo=1 WHERE eventid=".$eventid;
                $res=mysqli_query($db, $sql);
                if($res){
                    eventMail($smc_main_mail, $eventid, $db, "smc_main" );
                    $sql1="UPDATE status_timestamp SET fo = CURRENT_TIMESTAMP WHERE eventid=".$eventid;
                    $res1=mysqli_query($db,$sql1);
                    if($res1){
                        $url="approve.php";
                        redirect($url);
                    }
                    else{
                        $error="error.php";
                        redirect($error);
                    }

                }
                else{
                    $error="error.php";
                    redirect($error);
                }
            }elseif($pos=="smc_main"){
                $sql = "UPDATE event_status SET smc_main=1 WHERE eventid=".$eventid;
                $res=mysqli_query($db, $sql);
                if($res){
                    eventMail($sec_main_mail, $eventid, $db, "sec_main" );
                    $sql1="UPDATE status_timestamp SET smc_main = CURRENT_TIMESTAMP WHERE eventid=".$eventid;
                    $res1=mysqli_query($db,$sql1);
                    if($res1){
                        $url="acknowledge.php";
                        redirect($url);
                    }
                    else{
                        $error="error.php";
                        redirect($error);
                    }

                }
                else{
                    $error="error.php";
                    redirect($error);
                }
            }elseif($pos=="sec_main"){
                $sql = "UPDATE event_status SET sec_main=1 WHERE eventid=".$eventid;
                $res=mysqli_query($db, $sql);
                if($res){
                    eventMail($sec_mail, $eventid, $db, "sec" );
                    $sql1="UPDATE status_timestamp SET sec_main = CURRENT_TIMESTAMP WHERE eventid=".$eventid;
                    $res1=mysqli_query($db,$sql1);
                    if($res1){
                        $url="acknowledge.php";
                        redirect($url);
                    }
                    else{
                        $error="error.php";
                        redirect($error);
                    }

                }
                else{
                    $error="error.php";
                    redirect($error);
                }
            }elseif($pos=="sec"){
                $sql = "UPDATE event_status SET sec=1 WHERE eventid=".$eventid;
                $res=mysqli_query($db, $sql);
                if($res){
                    eventMail($ao_team_mail, $eventid, $db, "ao_team" );
                    $sql1="UPDATE status_timestamp SET sec = CURRENT_TIMESTAMP WHERE eventid=".$eventid;
                    $res1=mysqli_query($db,$sql1);
                    if($res1){
                        $url="acknowledge.php";
                        redirect($url);
                    }
                    else{
                        $error="error.php";
                        redirect($error);
                    }

                }
                else{
                    $error="error.php";
                    redirect($error);
                }
            }elseif($pos=="ao_team"){
                $sql = "UPDATE event_status SET ao_team=1 WHERE eventid=".$eventid;
                $res=mysqli_query($db, $sql);
                if($res){
                    $sql1="UPDATE status_timestamp SET ao_team = CURRENT_TIMESTAMP WHERE eventid=".$eventid;
                    $res1=mysqli_query($db,$sql1);
                    if($res1){
                        $url="acknowledge.php";
                        redirect($url);
                    }
                    else{
                        $error="error.php";
                        redirect($error);
                    }

                }
                else{
                    $error="error.php";
                    redirect($error);
                }
            }
            elseif($pos=="supervisor"){
                $sql = "UPDATE supervisor_assign SET seen=1 WHERE eventid=".$eventid;
                $res=mysqli_query($db, $sql);
                if($res){
                    $url="acknowledge.php";
                    redirect($url);
                }
                else{
                    $error="error.php";
                    redirect($error);
                }
            }

        }

    }else{

        $error="error.php";
        redirect($error);
    }

}else{

    $error="error.php";
    redirect($error);
}
?>