<?php include ("../db.php"); ?>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$HOST = 'smtp.gmail.com';
$USERNAMECORREO = 'huellero.wiedii@gmail.com';
$PASSWORDC = 'huella2019wiedii';
$NAMEC = 'Huellero Wiedii';
$PORTC = 587;
$n = $_POST['operacion'];
$user=$_POST['user'];
if (!empty($user)) {
    if (isset($_POST['operacion'])) {
        switch ($n) {
            case Entrada:
                $mail = new PHPMailer(true);
                try {

                    $mail->SMTPDebug = 0;
                    $mail->isSMTP();
                    $mail->Host       = $HOST;
                    $mail->SMTPAuth   = true;
                    $mail->Username   = $USERNAMECORREO;
                    $mail->Password   = $PASSWORDC;
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = $PORTC;
                    $mail->setFrom($USERNAMECORREO, $NAMEC);
                    $mail->addAddress('jesus.becerra@wiedii.co', 'Jesus Becerra');
                    $mail->isHTML(true);
                    $mail->Subject = 'Se ha registrado la entrada de forma correcta';
                    $mail->Body    = 'Entrada, entrada,entrada ';
                    $mail->AltBody = 'Prueba de envio de mensajes';
                    $mail->send();
                    echo "<script>
                    alert('Ha ingresado de forma correcta');location.href='../index.php'</script>";
                } catch (Exception $e) {
                    echo "<script>alert('El mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}');
                    window.history.back()</script>";
                }
                break;
            case Salida:
                $mail = new PHPMailer(true);
                try {

                    $mail->SMTPDebug = 0;
                    $mail->isSMTP();
                    $mail->Host       = $HOST;
                    $mail->SMTPAuth   = true;
                    $mail->Username   = $USERNAMECORREO;
                    $mail->Password   = $PASSWORDC;
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = $PORTC;
                    $mail->setFrom($USERNAMECORREO, $NAMEC);
                    $mail->addAddress('jesus.becerra@wiedii.co', 'Jesus Becerra');
                    $mail->isHTML(true);
                    $mail->Subject = 'Se ha registrado la entrada de forma correcta';
                    $mail->Body    = 'Salida, salida, salida';
                    $mail->AltBody = 'Prueba de envio de mensajes';
                    $mail->send();
                    echo "<script>
                    alert('Ha salido de forma correcta');location.href='../index.php'</script>";
                } catch (Exception $e) {
                    echo "<script>alert('El mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}');
                    window.history.back()</script>";
                }
                break;
            case Salmorzar:

                break;
        }
    }
}
?>