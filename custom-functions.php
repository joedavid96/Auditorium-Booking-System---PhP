<?php
include('config.php');

require_once('phpmailer/class.phpmailer.php');


$hod_mail = "d22005a6ac-12d968@inbox.mailtrap.io";
$principal_mail = "d22005a6ac-12d968@inbox.mailtrap.io";
$hod_mail = "d22005a6ac-12d968@inbox.mailtrap.io";
$hod_mail = "d22005a6ac-12d968@inbox.mailtrap.io";
$hod_mail = "d22005a6ac-12d968@inbox.mailtrap.io";
$hod_mail = "d22005a6ac-12d968@inbox.mailtrap.io";


function mailContent($id, $db, $approve_by){


    $body="<table><tbody>";


    $sql =" SELECT * from event_content WHERE eventid=".$id;
    $res=mysqli_query($db, $sql);
    $content=mysqli_fetch_array($res);

    $body.="<tr><td>Event Name</td><td>".$content['eventname']."</td></tr>";
    $body.="<tr><td>Staff Coordinator</td></tr>";
    $body.="<tr><td>Name</td><td>".$content['staffname']."</td></tr>";
    $body.="<tr><td>Email</td><td>".$content['staffmail']."</td></tr>";
    $body.="<tr><td>Contact</td><td>".$content['staffnumber']."</td></tr>";
    $body.="<tr><td>Student Coordinator</td></tr>";
    $body.="<tr><td>Name</td><td>".$content['studname']."</td></tr>";
    $body.="<tr><td>Email</td><td>".$content['studmail']."</td></tr>";
    $body.="<tr><td>Contact</td><td>".$content['studnumber']."</td></tr>";
    $body.="<tr><td>About the Event</td></tr>";
    $body.="<tr><td>Event Name</td><td>".$content['eventname']."</td></tr>";
    $body.="<tr><td>Organizing Dept</td><td>".$content['orgdept']."</td></tr>";
    $body.="<tr><td>Guest Details</td><td>".$content['guestdetails']."</td></tr>";
    $body.="<tr><td>Event Name</td><td>".$content['eventname']."</td></tr>";
    $body.="<tr><td>Event Name</td><td>".$content['eventname']."</td></tr>";
    $body.="<tr><td>Event Name</td><td>".$content['eventname']."</td></tr>";
    $body.="<tr><td>Event Name</td><td>".$content['eventname']."</td></tr>";
    $body.="<tr><td>Event Name</td><td>".$content['eventname']."</td></tr>";
    $body.="<tr><td>Event Name</td><td>".$content['eventname']."</td></tr>";
    $body.="<tr><td>Event Name</td><td>".$content['eventname']."</td></tr>";
    $body.="<tr><td>Event Name</td><td>".$content['eventname']."</td></tr>";
    $body.="<tr><td>Event Name</td><td>".$content['eventname']."</td></tr>";

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

    $mail->Subject  =  'New regis';
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




?>