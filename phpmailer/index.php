<?php 

	require_once('phpmailer/class.phpmailer.php');
	
	$mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "your_gmail@gmail.com";
    $mail->Password = "your_gmail_password";
	$mail->SMTPSecure = "ssl";  
    $mail->Host = "smtp.gmail.com";
    $mail->Port = "465";
 
    $mail->setFrom('your_gmail@gmail.com', 'your name');
    $mail->AddAddress('to_mail@anymail.com', 'receivers name');
 
    $mail->Subject  =  'using PHPMailer';
    $mail->IsHTML(true);
    $mail->Body    = 'Hi there ,
	                  <br />
					  this mail was sent using PHPMailer...
					  <br />
					  cheers... :)';
		
	if($mail->Send())
	{
		echo "Message was Successfully Send :)";
	}
	else
	{
		echo "Mail Error - >".$mail->ErrorInfo;
	}
		
?>