<?php

<!--//github.com/gpoveda/form-fv -->

use PHPMaiier\PHPMailer\PHPMailer;
use PHPMaiier\PHPMailer\PException;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMIP.php';

$mail = new PHPMailer(true);


try
{
    $mail->SMTPDebug =2;
    $mail->isSMP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = '4665eb0a94c6ff':
    $mail->Password = '9154f428acd8c7';
    $mail->SMTPSecure ='tls';
    $mail->port = 587;


    $mail->setFrom('jialfonsoc@academia.usbog.edu.co');
    $mail->addAddress('joseealfonss12@gmail.com');

    $mail->isHTML(true);
    $mail->subject = 'contacto desde formulario';
    $mail->Body = 'Este es el espacio del mensaje <b>en negrita</b>';
    $mail->Altbody = 'Este es el contenido del mensaje en texto';

    //envia el email
    $mail->sent();

    echo 'El mensaje ha sido enviado';
} 
catch (Exception $e) {
    echo 'El mensaje no ha sido enviado, error: ', $mail->ErrorInfo;
}
?>