<?php

//CODIGO DE BARRAS

//EMAIL
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);

try{
    //CUENTA DESDE DONDE SE ENVIAN LOS CORREOS Y CONFIGURACION DE EL SERVIDOR SMTP
    
    $mail->SMTPDebug = 0; //metodo de seguridad "2 activo" "0 desactivado"
    $mail->isSMTP(); //Señalar el metodo que se esta usando
    $mail->Host="smtp.gmail.com"; //host para gmail
    $mail->SMTPAuth = true;
    $mail->Username = "diego.teran@ugc.edu.co";
    $mail->Password = "091705Datm@";
    $mail->SMTPSecure =PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    //ENVIO 
    $mail->setFrom('diego.andres@ucg.edu.co'); //Correo del remitente
    $mail->addAddress('dmartinezteran560@gmail.com'); //Correo del destintario
    
    //MENSAJE
    $mail->isHtml(true);
    $mail->Subject = '';
    $mail->Body = "
    ";
    $mail->send();

    echo'Correo enviado';
}catch(Exception $e){
    echo 'Mensaje ' . $mail->ErrorInfo;
}
?>


