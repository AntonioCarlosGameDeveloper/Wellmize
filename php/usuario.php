<?php

    include_once('config.php');

    session_start();


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

        $id_usuario = $_POST['Id_Usuario'];
        $nome_usuario = $_POST['Nome_Usuario'];
        $telefone_usuario = $_POST['Telefone_Usuario'];
        $data_nasc_usuario = $_POST['Data_Nasc_Usuario'];
        $sexo_usuario = $_POST['Sexo_Usuario'];
        $email_usuario = $_POST['Email_Usuario'];
        $senha_usuario = md5($_POST['Senha_Usuario']);

        $result = mysqli_query($conexao, "UPDATE usuario SET Nome_Usuario = '{$nome_usuario}', Telefone_Usuario = '{$telefone_usuario}',
         Data_Nasc_Usuario = '{$data_nasc_usuario}', Sexo_Usuario = '{$sexo_usuario}', Email_Usuario = '{$email_usuario}', Senha_Usuario = '{$senha_usuario}' WHERE Id_Usuario = $id_usuario");

        
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Usuários</title>
    <link rel="stylesheet" href="../styles/estiloDashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/estiloLogin.css">
</head>

<body>
    <div class="main-conteiner d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-3 pt-2 pb-4 d-flex justify-content-between">
            <h1 class="fs-4" ><img class="logo" src="../assets/v3.1.png" alt="logo" style="height: 95px; width: 55px" /><span class="text-white"> WellMize</span></h1><button class="btn d-md-none d-block close-btn px-1 py-0 text-white "><i class="fal fa-stream"></i></button>
            </div>
            <ul class="list-unstyled px-2">
                <li class=""><a href="../index.html" class=" text-decoration-none px-3 py-2 d-block"><i class="fal fa-home"></i> Menu</a></li>
                <li class=""><a href="dashboard-php.php" class=" text-decoration-none px-3 py-2 d-block"><i class="fal fa-list"></i> Projetos</a></li>
                <li class=""><a href="contato.php" class=" text-decoration-none px-3 py-2 d-block"><i class="fal fa-comment"></i> Mensagens</a></li>
                <li class=""><a href="../servicos.html" class=" text-decoration-none px-3 py-2 d-block"><i class="fal fa-envelope-open-text"></i> Serviços</a></li>
                <li class=""><a href="painelAlunos.php" class=" text-decoration-none px-3 py-2 d-block"><i class="fal fa-users"></i> Alunos Cadastrados</a></li>
                <li class=""><a href="cadastroAcademia.php" class=" text-decoration-none px-3 py-2 d-block"><i class="fal fa-users"></i> Cadastro de Academias</a></li>
            </ul>
            <hr class="h-color mx-2">
            <ul class="list-unstyled px-2">
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-bars"></i> Configurações</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-bell"></i> Notificações</a></li>
                <li class=""><a href='usuario.php?Id_Usuario=$user_data[Id_usuario]' class="text-decoration-none px-3 py-2 d-block"><i class="fa fa-pencil" aria-hidden="false"></i> Editar Usuario</a></li>
                <li class=""><a href="deletarConta.php" class="btn btn-danger" style="margin: 10px 15px">Deletar Conta</a>
                <li class=""><a href="sair.php" class="btn btn-danger" style="margin: 10px 15px">Sair</a>
            </ul>
        </div>
        <div class="justify-content-center">
        
        <br><br><br>
    </div> 

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #f68b27;">
                <div class="featured-image mb-3">
                
           </div>
        <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600; text-align:center;;">Bem vindo a área do usuário!</p>
        <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace; text-align:center;">Aqui você pode alterar seus dados pessoais, como nome, senha, email, telefone de contato entre outros. Quaisquer dúvidas mande um email para nossa equipe pela aba de contato!</small>
        
    </div> 

       <div class="col-md-6 right-box">
            <form action="usuario.php" method="POST">
                <div class="row align-items-center">
                        <div class="header-text mb-4">
                            <h2>Edição de informações pessoais</h2>
                            <p>Utilize o formulário abaixo para alterar suas informações pessoais de perfil</p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="Id_Usuario" class="form-control form-control-lg bg-light fs-6" placeholder="Informe o Id do Usuario a ser alterado" required>
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
                            <button type="submit" name="submit" class="btn btn-lg btn-primary w-100 fs-6 " style="background: #f68b27; border: none;">Confirmar alterações</button>
                        </div>
                        
                </div>
            </form>
        </div> 

      </div>
    </div>


      </div>
    </div>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bunle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(".sidebar ul li").on('click', function(){
            $(".sidebar ul li.active").removeClass('active');
            $(this).addClass('active');
        });

        $('.open-btn').on('click', function(){
            $('.sidebar').addClass('active');
        });

        $('.close-btn').on('click', function(){
            $('.sidebar').removeClass('active');
        });

    </script>

    <script src="./js/imprimir"></script>
    <script src="./js/charts/chart-area.js"></script>
    <script src="./js/charts/chart-pie.js"></script>
    <script src="./js/charts/chart-bar.js"></script>
        
</body>
</html>




















