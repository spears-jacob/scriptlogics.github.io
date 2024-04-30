<?php require_once "vendor/autoload.php"; //PHPMailer Object 
$mail = new PHPMailer; //From email address and name 
$mail->From = "scriptlogicsllc@google.com"; 
$mail->FromName = "$name"; //To address and name 
$mail->addAddress("$myEmail", "Recepient Name");//Recipient name is optional
$mail->addAddress("$myEmail"); //Address to which recipient will reply 
$mail->addReplyTo("scriptlogicsllc@google.com", "Reply"); //CC and BCC 
$mail->addCC("scriptlogicsllc@google.com"); 
$mail->addBCC("scriptlogicsllc@google.com"); //Send HTML or Plain Text email 
$mail->isHTML(true); 
$mail->Subject = "Contact From scriptlogicsllc.com Visitor"; 
$mail->Body = "$message";
$mail->AltBody = "This is the plain text version of the email content"; 
if(!$mail->send()) 
{
echo "Mailer Error: " . $mail->ErrorInfo; 
} 
else { echo "Message has been sent successfully"; 
}
if(!$mail->send()) 
{ 
echo "Mailer Error: " . $mail->ErrorInfo; 
} 
else 
{ 
echo "Message has been sent successfully"; 
}