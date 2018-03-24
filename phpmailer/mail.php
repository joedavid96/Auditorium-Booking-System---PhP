<?php

 require_once('class.phpmailer.php');
    $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "f16738ea6ceb0e";
    $mail->Password = "85d3edab74396a";
    $mail->SMTPSecure = "tls";
    $mail->Host = "smtp.mailtrap.io";
    $mail->Port = "465";

    $mail->setFrom('xyz@gmail.com', 'xyz');
    $mail->AddAddress('d22005a6ac-12d968@inbox.mailtrap.io', 'mailtrap');

    $mail->Subject  =  'Test mail';
    $mail->IsHTML(true);
    $mail->Body    = "<table>
          <tbody>
            <tr>
              <td><b><u>Coordinator</u></b></td>
            </tr>
            <tr>
              <td><b><u>Staff Coordinator</u></b></td>
            </tr>
            <tr>
              <td>Name:</td>
              <td><div>$name</div></td>
            </tr>
            </table>";

     if($mail->Send())
     {
        echo "Message was Successfully Sent :)";
     }
     else
     {
        echo "Mail Error - >".$mail->ErrorInfo;
     }

?>
