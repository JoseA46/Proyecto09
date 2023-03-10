<?php

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
    

}
catch

?>