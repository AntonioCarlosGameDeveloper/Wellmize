<?php

require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = "true";
        $mail->SMTPSecure =PHPmailer::ENCRYPTION_SMTPS;
        $mail->Port = "587";//465
        $mail->Username = "rodrigovenetillo.cefet@gmail.com";
        $mail->Password = "Rodri131956";

        $mail->SetFrom('rodrigovenetillo.cefet@gmail.com');
        $mail->AddAddress('rodrigovenetillo.cefet@gmail.com');//puxar as informações do cara que ta logado na sessão $_POST['Email']
        $mail->isHTML(true);

        $mail->Subject = 'Dashboards';
        $mail->Body = "Aqui estam os Dashboards que você pediu";
        $mail->addAttachment('./assets/v3.1.png');//criar uma pasta para salvar os dashboards 


        $mail->Send();
        echo 'email enviado';
        $mail->smtpClose();


?>