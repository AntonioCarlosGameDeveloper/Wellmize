<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
$mail = new PHPMailer(true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailSend = $_POST['email-send'];

    if (!empty($emailSend)) {
        try {
            // Configurações do servidor
            $mail->isSMTP();        //Devine o uso de SMTP no envio
            $mail->SMTPAuth = true; //Habilita a autenticação SMTP
            $mail->Username = 'emailtestedojoaoconte@gmail.com';
            $mail->Password = 'mrxdfuovxibstdza';
            // Criptografia do envio SSL também é aceito
            $mail->SMTPSecure = 'tls';
            // Informações específicadas pelo Google
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            // Define o remetente
            $mail->setFrom('emailtestedojoaoconte@gmail.com', 'Wellmize');
            // Define o destinatário
            $mail->addAddress($emailSend, "Bem vindo Wellmize!");
            // Conteúdo da mensagem
            $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
            $mail->Subject = 'Boas vindas a Wellmize!';
            $mail->Body = '<b>Olá para você!</b>';
            $mail->AltBody = 'é um prazer ter você com a gente na Wellmize!';
            // Enviar
            if ($mail->send())
                echo "<script type='text/JavaScript'>alert('Dados enviados, aguarde o contato!')</script>";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "<script type='text/JavaScript'>alert('Por favor, preencha todos os campos!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/estilo.css" />
    <link rel="stylesheet" href="../styles/estiloGeral.css" />
    <link rel="stylesheet" href="../styles/estiloFooter.css" />
    <title>Wellmize</title>
</head>

<body style="overflow: hidden">
    <footer style="overflow: hidden">
        <div id="footer_content">
            <div id="footer_contacts">
                <h1>Wellmize</h1>
                <p>Transformando Academias</p>

                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"><ion-icon name="logo-instagram"></ion-icon></i>
                    </a>

                    <a href="#" class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook-f"><ion-icon name="logo-facebook"></ion-icon></i>
                    </a>

                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"><ion-icon name="logo-whatsapp"></ion-icon></i>
                    </a>
                </div>
            </div>

            <ul class="footer-list">
                <li>
                    <h3>Blog</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Tecnologias</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Novidades</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Notícias</a>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Produtos</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">App</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Desktop</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Sobre</a>
                </li>
            </ul>

            <div id="footer_subscribe">
                <h3>Se Inscreva</h3>

                <p>
                    Digite seu e-mail para ser notificado sobre quaisquer novidades
                    sobre a Wellmize
                </p>

                <form id="input_group" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="email" name="email-send" id="email" style="background: #212429" />
                    <button>
                        <i class="fa-regular fa-envelope"><ion-icon name="send"></ion-icon></i>
                    </button>
                </form>
            </div>
        </div>

        <div id="footer_copyright">© 2023 all rights reserved</div>
    </footer>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<!-- Esses dos scripts sendo puxados são o IONICicons, que usamos pra icones-->
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>