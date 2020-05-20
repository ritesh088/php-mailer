<?php
//Make sure you import it correctly.
require "phpmailer/PHPMailerAutoload.php";
//Setup   
$mail=new PHPMailer;
   $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'ritesh.srivastava08@gmail.com';                     // SMTP username
    $mail->Password   = 'ritesh_iirs_isro@08';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                  
                  
//FROM email
$mail->setFrom("ritesh.srivastava08@gmail.com");
//Change to from eamil
$mail->addAddress("shikharitesh1104@gmail.com");//TOMAIL
$mail->addAddress("kunwarkishor22@gmail.com"); 
$mail->addAddress("ritesh.kumar@akalinfosys.com"); 
//Change to whom you want to send.
$mail->addReplyTo("ritesh.srivastava08@gmail.com");
//Change reply email, whom the reciever can reply.
//addCC
//addBCC 
// Attachments
//Add your attachement here.
$mail->addAttachment('JD_PHP_CMS_DEVELOPER.pdf',"Jd Cms Php DEVELOPER");    
$mail->addAttachment('J.pdf',"JD");      // Add attachments
$mail->addAttachment('image.jpg', 'new.jpg');    // Optional name

// Content
$mail->isHTML(true);  // Set email format to HTML
//Change the subject.
$mail->Subject = 'Email Test';
//Change the content as per your wish.
$mail->Body    = '<h1>Test mail with attachment from Xampp localhost without any settings.</h1>';
//For client not supporting HTML rendering.
$mail->AltBody = 'This is for non-html content';
if($mail->send())
{
    echo "Success";
}
else
echo "Failure";

?>