<?php


use PHPMailer\PHPMailer\{PHPMailer,SMTP,Exception};



require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
require '../phpmailer/src/PHPmailer.php';



$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; //SMTP::DEBUG_OFF                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'shopzyplace@gmail.com';                     //SMTP username
    $mail->Password   = 'shopzyplace123';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;         //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('shopzyplace@gmail.com', 'Tienda CDP');
    $mail->addAddress('shopzyplace@gmail.com', 'Joe User'); 

    //Content
    $mail->isHTML(true);    
    $mail->Subject = 'Detalle de su compra';

    $cuerpo = '<h4>Gracias por su compra</h4>';
    $cuerpo .= '<p>El ID de su compra es <b>'. $id_transaccion . '</b></p>';

    $mail->Body    = utf8_decode($cuerpo);
    $mail->AltBody = 'Le enviamos los detalles de su compra.';

    $mail->setLanguage('es','../phpmailer/language/phpmailer.lang-es.php');

    $mail->send();
} catch (Exception $e) {
    echo "Erros al enviar el correo electronico no de la compra: {$mail->ErrorInfo}";
}