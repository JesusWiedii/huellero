<?phpinclude ("../db.php");?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = 0;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'huellero.wiedii@gmail.com';                     // SMTP username
            $mail->Password   = 'huella2019wiedii';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to
        
            //Recipients
            $mail->setFrom('huellero.wiedii@gmail.com', 'Hjesus');
            $mail->addAddress('becerra.jesusantonio@.com', 'Jesus Becerra');     // Add a recipient
           
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'prueba de mensaje :v';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
        
?>