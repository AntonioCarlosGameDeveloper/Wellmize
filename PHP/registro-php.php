<?php

    if(isset($_POST['submit']))
    {

        //Se esses prints funcionarem quer dizer que as informações estão chegando corretamente no banco de dados (OBS: Estão funcionando até o momento atual (09/12))
        //print_r('Nome: ' . $_POST['Nome_Usuario']);
        //print_r('<br>');
        //print_r('Telefone: ' . $_POST['Telefone_Usuario']);
        //print_r('<br>');
        //print_r('Data de Nascimento: ' . $_POST['Data_Nasc_Usuario']);
        //print_r('<br>');
        //print_r('Sexo: ' . $_POST['Sexo_Usuario']);
        //print_r('<br>');
        //print_r('E-mail: ' . $_POST['Email_Usuario']);
        //print_r('<br>');
        //print_r('Senha Usuario (NAO MOSTRAR PELO AMOR DE DEUS): ' . $_POST['Nome_Usuario']);
        //print_r('<br>');

        include_once('config.php');

        $nome_usuario = $_POST['Nome_Usuario'];
        $telefone_usuario = $_POST['Telefone_Usuario'];
        $data_nasc_usuario = $_POST['Data_Nasc_Usuario'];
        $sexo_usuario = $_POST['Sexo_Usuario'];
        $email_usuario = $_POST['Email_Usuario'];
        $senha_usuario = $_POST['Senha_Usuario'];

        $result = mysqli_query($conexao, "INSERT INTO usuario(Nome_Usuario, Telefone_Usuario, Data_Nasc_Usuario, Sexo_Usuario, Email_Usuario, Senha_Usuario) VALUES 
        ('$nome_usuario', '$telefone_usuario', '$data_nasc_usuario', '$sexo_usuario', '$email_usuario', '$senha_usuario')");

        header('Location: login-php.php'); //Redireciona para o login após realizar o registro
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="estiloLogin.css">
    <title>Wellmize | Registro</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #f68b27;">
                <div class="featured-image mb-3">
                <img src="assets/image_Registro1.png" class="img-fluid" style="width: 250px;">
           </div>
        <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Seja bem vindo a Wellmize!</p>
        <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Caso tenha alguma dúvida sobre o processo de registro, entre em contato conosco</small>
        
    </div> 

       <div class="col-md-6 right-box">
            <form action="registro-php.php" method="POST">
                <div class="row align-items-center">
                        <div class="header-text mb-4">
                            <h2>Bom ter ver por aqui!</h2>
                            <p>Ficamos felizes em você escolher a Wellmize</p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="Nome_Usuario" class="form-control form-control-lg bg-light fs-6" placeholder="Seu nome completo" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="Telefone_Usuario" class="form-control form-control-lg bg-light fs-6" placeholder="Seu telefone: (DD) XXXX-XXXX" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="date" name="Data_Nasc_Usuario" class="form-control form-control-lg bg-light fs-6" placeholder="Sua Data de Nascimento" required>
                        </div>
                        <div class="input-group mb-3">
                            <input class="form-control" name="Sexo_Usuario" list="datalistOptions" id="exampleDataList" placeholder="Seu sexo" required>
                            <datalist id="datalistOptions">
                                <option value="Masculino">
                                <option value="Feminino">
                                <option value="Prefiro não dizer">
                            </datalist>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="Email_Usuario" class="form-control form-control-lg bg-light fs-6" placeholder="Seu Endereço de e-mail" required>
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" name="Senha_Usuario" class="form-control form-control-lg bg-light fs-6" placeholder="Senha" required>
                        </div>
                        <!-- Mudar cor do CHECKBOX depois. -->
                        <div class="input-group mb-5 d-flex justify-content-between">
                        
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" name="submit" class="btn btn-lg btn-primary w-100 fs-6 " style="background: #f68b27; border: none;">Registrar-se</button>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-light w-100 fs-6"><img src="assets/google_icon-removebg-preview.png" style="width:20px" class="me-2"><small>Registrar com Google</small></button>
                        </div>
                        <div class="row" style="text-align: center;">
                            <small>Já possui uma conta? <a href="login-php.php">Fazer Login</a></small>
                        </div>
                </div>
            </form>
        </div> 

      </div>
    </div>

</body>
</html>