<?php
require('phpmailer/PHPMailer.php');
require('phpmailer/SMTP.php');
require('phpmailer/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';  
    $mail->SMTPAuth   = true;                  
    $mail->Username   = 'usuario@gmail.com';    
    $mail->Password   = 'password';              
    $mail->SMTPSecure = 'tls';                 
    $mail->Port       = 587;                   

    $mail->setFrom('origen@gmail.com', 'Nombre origen');
    $mail->addAddress('destinatario@nn.com', 'Nombre destinatario');



    $mail->isHTML(true);                                
    $mail->Subject = 'Aca el subject';
    $mail->Body    = 'Aca el cuerpo del mensaje que puede contener html <strong>resaltado</strong>';

    $mail->send();
    echo 'Mensaje Enviado';
} catch (Exception $e) {
    echo "Erro al enviar el mensaje: {$mail->ErrorInfo}";
}


?>