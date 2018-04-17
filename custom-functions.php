<?php
include('config.php');

require_once('phpmailer/class.phpmailer.php');


$hod_mail = "d22005a6ac-12d968@inbox.mailtrap.io";
$principal_mail = "d22005a6ac-12d968@inbox.mailtrap.io";
$fo_mail = "d22005a6ac-12d968@inbox.mailtrap.io";
$smc_main_mail = "d22005a6ac-12d968@inbox.mailtrap.io";
$sec_main_mail = "d22005a6ac-12d968@inbox.mailtrap.io";
$sec_mail = "d22005a6ac-12d968@inbox.mailtrap.io";
$ao_team_mail = "d22005a6ac-12d968@inbox.mailtrap.io";
$sv1_mail= "d22005a6ac-12d968@inbox.mailtrap.io";
$sv2_mail= "d22005a6ac-12d968@inbox.mailtrap.io";
$sv3_mail= "d22005a6ac-12d968@inbox.mailtrap.io";
$sv4_mail= "d22005a6ac-12d968@inbox.mailtrap.io";
$sv5_mail= "d22005a6ac-12d968@inbox.mailtrap.io";
$sv6_mail= "d22005a6ac-12d968@inbox.mailtrap.io";


function mailContent($id, $db, $approve_by){


    $body="<table><tbody>";


    $sql =" SELECT * from event_content WHERE eventid=".$id;
    $res=mysqli_query($db, $sql);
    $content=mysqli_fetch_array($res);

    $body.="<tr><td><b>Event Name</b></td><td>".$content['eventname']."</td></tr>";
    $body.="<tr><td><b>Staff Coordinator</b></td></tr>";
    $body.="<tr><td>Name</td><td>".$content['staffname']."</td></tr>";
    $body.="<tr><td>Email</td><td>".$content['staffmail']."</td></tr>";
    $body.="<tr><td>Contact</td><td>".$content['staffnumber']."</td></tr>";
    $body.="<tr><td><b>Student Coordinator</b></td></tr>";
    $body.="<tr><td>Name</td><td>".$content['studname']."</td></tr>";
    $body.="<tr><td>Email</td><td>".$content['studmail']."</td></tr>";
    $body.="<tr><td>Contact</td><td>".$content['studnumber']."</td></tr>";
    $body.="<tr><td><b>About the Event</b></td></tr>";
    $body.="<tr><td>Event Name</td><td>".$content['eventname']."</td></tr>";
    $body.="<tr><td>Organizing Dept</td><td>".$content['orgdept']."</td></tr>";
    $body.="<tr><td>Guest Details</td><td>".$content['guestdetails']."</td></tr>";
    $body.="<tr><td>Attending Classes</td><td>".$content['attclasses']."</td></tr>";
    $body.="<tr><td>Event Topic</td><td>".$content['eventtopic']."</td></tr>";
    $body.="<tr><td>Event Duration</td><td>".$content['eventduration']."</td></tr>";
    $body.="<tr><td><b>Event Specifications</b></td></tr>";
    $body.="<tr><td>Chairs (Audience)</td><td>".$content['chairsaud']."</td></tr>";
    $body.="<tr><td>LCD Projector</td><td>".$content['lcdproj']."</td></tr>";
    $body.="<tr><td>Air Conditioning</td><td>".$content['ac']."</td></tr>";
    $body.="<tr><td>Chairs (Stage)</td><td>".$content['chairsstg']."</td></tr>";
    $body.="<tr><td>Podium</td><td>".$content['podium']."</td></tr>";
    $body.="<tr><td>Other Requirements</td><td>".$content['othreq']."</td></tr>";
    $body.="<tr><td>Wired Mic</td><td>".$content['wiredmic']."</td></tr>";
    $body.="<tr><td>Cordless Mic</td><td>".$content['cordlmic']."</td></tr>";

    $body.="</tbody></table>";

    if($approve_by=="hod")
    {


        $body.= '<a href="http://localhost/handle-mail.php?id='.$id.'&pos=hod&res=accept&key=abcd"> Approve </a><br>';
        $body.= '<a href="http://localhost/handle-mail.php?id='.$id.'&pos=hod&res=reject&key=abcd" > Reject </a>';

    }
    if($approve_by=="principal")
    {

        $body.= '<a href="http://localhost/handle-mail.php?id='.$id.'&pos=principal&res=accept&key=abcd"> Approve </a><br>';
        $body.= '<a href="http://localhost/handle-mail.php?id='.$id.'&pos=principal&res=reject&key=abcd" > Reject </a>';


    }

    if($approve_by=="fo")
    {

        $body.= '<a href="http://localhost/handle-mail.php?id='.$id.'&pos=fo&res=accept&key=abcd"> Approve </a><br>';



    }

    if($approve_by=="smc_main")
    {

        $body.= '<a href="http://localhost/handle-mail.php?id='.$id.'&pos=smc_main&res=accept&key=abcd"> Acknowledge </a><br>';



    }

    if($approve_by=="sec_main")
    {

        $body.= '<a href="http://localhost/handle-mail.php?id='.$id.'&pos=sec_main&res=accept&key=abcd"> Acknowledge </a><br>';


    }

    if($approve_by=="sec")
    {

        $body.= '<a href="http://localhost/handle-mail.php?id='.$id.'&pos=sec&res=accept&key=abcd"> Acknowledge </a><br>';



    }


    if($approve_by=="ao_team")
    {

        $body.= '<a href="http://localhost/handle-mail.php?id='.$id.'&pos=ao_team&res=accept&key=abcd"> Acknowledge </a><br>';



    }
    if($approve_by=="supervisor")
    {

        $body.= '<a href="http://localhost/handle-mail.php?id='.$id.'&pos=supervisor&res=accept&key=abcd"> Acknowledge </a><br>';



    }




    return $body;



}

function smsContent($id, $db, $approve_by){
    $body="<table><tbody>";


    $sql =" SELECT * from event_content WHERE eventid=".$id;
    $res=mysqli_query($db, $sql);
    $content=mysqli_fetch_array($res);

    $body.="<tr><td><b>Event Name</b></td><td>".$content['eventname']."</td></tr>";
    $body.="<tr><td><b>Staff Coordinator</b></td></tr>";
    $body.="<tr><td>Name</td><td>".$content['staffname']."</td></tr>";
    $body.="<tr><td>Email</td><td>".$content['staffmail']."</td></tr>";
    $body.="<tr><td>Contact</td><td>".$content['staffnumber']."</td></tr>";
    $body.="<tr><td><b>Student Coordinator</b></td></tr>";
    $body.="<tr><td>Name</td><td>".$content['studname']."</td></tr>";
    $body.="<tr><td>Email</td><td>".$content['studmail']."</td></tr>";
    $body.="<tr><td>Contact</td><td>".$content['studnumber']."</td></tr>";
    $body.="<tr><td><b>About the Event</b></td></tr>";
    $body.="<tr><td>Event Name</td><td>".$content['eventname']."</td></tr>";
    $body.="<tr><td>Organizing Dept</td><td>".$content['orgdept']."</td></tr>";
    $body.="<tr><td>Guest Details</td><td>".$content['guestdetails']."</td></tr>";
    $body.="<tr><td>Attending Classes</td><td>".$content['attclasses']."</td></tr>";
    $body.="<tr><td>Event Topic</td><td>".$content['eventtopic']."</td></tr>";
    $body.="<tr><td>Event Duration</td><td>".$content['eventduration']."</td></tr>";
    $body.="<tr><td><b>Event Specifications</b></td></tr>";
    $body.="<tr><td>Chairs (Audience)</td><td>".$content['chairsaud']."</td></tr>";
    $body.="<tr><td>LCD Projector</td><td>".$content['lcdproj']."</td></tr>";
    $body.="<tr><td>Air Conditioning</td><td>".$content['ac']."</td></tr>";
    $body.="<tr><td>Chairs (Stage)</td><td>".$content['chairsstg']."</td></tr>";
    $body.="<tr><td>Podium</td><td>".$content['podium']."</td></tr>";
    $body.="<tr><td>Other Requirements</td><td>".$content['othreq']."</td></tr>";
    $body.="<tr><td>Wired Mic</td><td>".$content['wiredmic']."</td></tr>";
    $body.="<tr><td>Cordless Mic</td><td>".$content['cordlmic']."</td></tr>";

    $body.="</tbody></table>";

    return $body;
}



function eventMail($to, $eventid, $db, $approve_by){





    $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "f16738ea6ceb0e";
    $mail->Password = "85d3edab74396a";
    $mail->SMTPSecure = "tls";
    $mail->Host = "smtp.mailtrap.io";
    $mail->Port = "465";

    $mail->setFrom('xyz@gmail.com', 'Nalli  Booking');
    $mail->AddAddress($to , 'mailtrap');


    $sql = "SELECT * from nalli_demo.event_content where eventid=".$eventid;
    $res=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($res);
    $event_name=$row['eventname'];
    $event_date=$row['eventduration'];


    $mail->Subject  =  "Nalli Booking"." : ".$event_name." : ".$event_date;
    $mail->IsHTML(true);
    $mail->Body    = mailContent($eventid, $db, $approve_by);

    if($mail->Send())
    {
        echo "";
    }
    else
    {
        echo "Mail Error - >".$mail->ErrorInfo;
    }


}
;

function statusSet( $id,$db)
{
    $sql="SELECT * from event_status WHERE eventid=".$id;
    $res=mysqli_query($db, $sql);


}

function status($sts){
    if($sts==0)
    {
        return '<span class="label label-warning">Pending</span>';
    }
    if($sts==1)
    {
        return '<span class="label label-success">Approved</span>';
    }
    if($sts==2)
    {
        return '<span class="label label-danger">Rejected</span>';
    }
}
function displaydate($date)
{
    $date= new DateTime($date) ;
    return $date->format('d-m-Y');
}
function datetime($date)
{
    $date= new DateTime($date) ;
    return $date->format('d-m-Y g:i A');
}
function displaytime($time)
{
    $time= new DateTime($time) ;
    return $time->format( 'g:i A');
}
function displayStatus($sts)
{

}
function redirect($url)
{
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}
?>