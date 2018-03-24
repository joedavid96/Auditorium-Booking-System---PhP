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
            echo "rejected";
            if($pos=="hod")
            {
                $sql = "UPDATE event_status SET hod=3 WHERE eventid=".$eventid;
                $res=mysqli_query($db, $sql);
                if($res){
                    echo "hod operation success";

                }
                else{
                    echo "hod operation failed";
                }
            }elseif ($pos=="principal"){
                $sql = "UPDATE event_status SET principal=3 WHERE eventid=".$eventid;
                $res=mysqli_query($db, $sql);
                if($res){



                    echo "principal operation success";

                }
                else{
                    echo "principal operation failed";
                }
            }
        }
        if($res=="accept" && $res!="reject")
        {

            echo "accepted";
            if($pos=="hod")
            {
                $sql = "UPDATE event_status SET hod=2 WHERE eventid=".$eventid;
                $res=mysqli_query($db, $sql);
                if($res){
                    eventMail($principal_mail, 12, $db, "hod" );
                    echo "hod operation success";

                }
                else{
                    echo "hod operation failed";
                }
            }elseif ($pos=="principal"){
                $sql = "UPDATE event_status SET principal=2 WHERE eventid=".$eventid;
                $res=mysqli_query($db, $sql);
                if($res){
                    echo "principal operation success";

                }
                else{
                    echo "principal operation failed";
                }
            }elseif ($pos=="fo"){
                $sql = "UPDATE event_status SET fo=2 WHERE eventid=".$eventid;
                $res=mysqli_query($db, $sql);
                if($res){
                    echo "fo operation success";

                }
                else{
                    echo "fo operation failed";
                }
            }elseif($pos=="smc_main"){
                $sql = "UPDATE event_status SET smc_main=2 WHERE eventid=".$eventid;
                $res=mysqli_query($db, $sql);
                if($res){
                    echo "smc_main operation success";

                }
                else{
                    echo "smc_main operation failed";
                }
            }elseif($pos=="sec_main"){
                $sql = "UPDATE event_status SET sec_main=2 WHERE eventid=".$eventid;
                $res=mysqli_query($db, $sql);
                if($res){
                    echo "sec_main operation success";

                }
                else{
                    echo "sec_main operation failed";
                }
            }elseif($pos=="sec"){
                $sql = "UPDATE event_status SET sec=2 WHERE eventid=".$eventid;
                $res=mysqli_query($db, $sql);
                if($res){
                    echo "sec operation success";

                }
                else{
                    echo "sec operation failed";
                }
            }elseif($pos=="ao_team"){
                $sql = "UPDATE event_status SET ao_team=2 WHERE eventid=".$eventid;
                $res=mysqli_query($db, $sql);
                if($res){
                    echo "ao_team operation success";

                }
                else{
                    echo "ao_team operation failed";
                }
            }

        }





        echo "success";


    }else{

        echo "wrong key or eventid";
    }














}else{

    echo "no parameters or key found";
}





?>