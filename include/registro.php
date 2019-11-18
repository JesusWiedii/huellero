<?php include("../db.php"); ?>
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
$user = $_POST['user'];
if (!empty($user)) {
    if (isset($_POST['operacion'])) {
        $query = "SELECT * FROM usuarios u WHERE u.id=$id and u.Id_equipo=e.Id_equipo";
        $resultr = mysqli_query($conn, $query);
        $mailuser = 'jesus.becerra@wiedii.co';
        $nameuser = 'tiburoncin huhaha';
        $subjectmsg = 'Registro huellero';
        switch ($n) {
            case Entrada:
                $bodymsg = 'Entrada, entrada, entrada';
                $altbodymsg = 'Entrada, prueba';
                $alertmsg = "<script>
                    alert('Se ha registrado de forma correcta');location.href='../index.php'</script>";
                break;
            case Salida:
                $bodymsg = 'Salida, Salida, Salida';
                $altbodymsg = 'Salida, prueba';
                $alertmsg = "<script>
                    alert('Ha salido de forma correcta');location.href='../index.php'</script>";
                break;
            case Olunch:
                $bodymsg = 'Registro de salida a almorzar, registrado de forma exitosa';
                $altbodymsg = 'Salida a almorzar, prueba';
                $alertmsg = "<script>
                    alert('Registro de salida a almorzar, registrado de forma exitosa';
                    location.href='../index.php'</script>";
                break;
            case Ilunch:
                $bodymsg = 'Registro de entrada de almorzar, registrado de forma exitosa';
                $altbodymsg = 'Salida a almorzar, prueba';
                $alertmsg = "<script>
                        alert('Registro de entrada a almorzar, registrado de forma exitosa');
                        location.href='../index.php'</script>";
                break;
        }
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
            $mail->addAddress($mailuser, $nameuser);
            $mail->isHTML(true);
            $mail->Subject = $subjectmsg;
            $mail->Body    = $bodymsg;
            $mail->AltBody = $altbodymsg;
            $mail->send();
            echo $alertmsg;
        } catch (Exception $e) {
            echo "<script>alert('El mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}');
                    window.history.back()</script>";
        }
    }
}
?>