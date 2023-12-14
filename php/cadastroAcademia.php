<?php

    if(isset($_POST['submit']))
    {

        //Se esses prints funcionarem quer dizer que as informações estão chegando corretamente no banco de dados (OBS: Estão funcionando até o momento atual (09/12))
        //print_r('Nome: ' . $_POST['CNPJ']);
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

        $cnpj = $_POST['CNPJ'];
        $telefone_academia = $_POST['Telefone_Academia'];
        $end_logradouro = $_POST['End_Logradouro'];
        $end_cidade = $_POST['End_Cidade'];
        $end_bairro = $_POST['End_Bairro'];
        $end_numero = $_POST['End_Numero'];
        $nome_academia = $_POST['Nome_Academia'];
        $foto_academia = $_POST['Foto_Academia'];

        $foto_academia = base64_encode($foto_academia); 

        
        $result = mysqli_query($conexao, "INSERT INTO academia(CNPJ, Telefone_Academia, End_Logradouro, End_Cidade, End_Bairro, End_Numero, Nome_Academia, Foto_Academia) VALUES 
        ('$cnpj', '$telefone_academia', '$end_logradouro', '$end_cidade', '$end_bairro', '$end_numero', '$nome_academia', '$foto_academia')");

        
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
        <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600; text-align:center">Cadastre a sua academia!</p>
        <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Aqui você pode cadastras as academias que possui</small>
        
    </div> 

       <div class="col-md-6 right-box">
            <form action="cadastroAcademia.php" method="POST">
                <div class="row align-items-center">
                        <div class="header-text mb-4">
                            <h2>Cadastro de Academia</h2>
                            <p>Utilize o formulário abaixo para cadastrar uma academia</p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="CNPJ" class="form-control form-control-lg bg-light fs-6" placeholder="CNPJ da sua academia" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="Telefone_Academia" class="form-control form-control-lg bg-light fs-6" placeholder="Telefone da Academia: (DD) XXXX-XXXX" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="End_Logradouro" class="form-control form-control-lg bg-light fs-6" placeholder="O endereço de logradouro da academia" required>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" name="End_Cidade" class="form-control form-control-lg bg-light fs-6" placeholder="A cidade em que fica sua academia" required>
                        </div>
                        
                        <div class="input-group mb-3">
                            <input type="text" name="End_Bairro" class="form-control form-control-lg bg-light fs-6" placeholder="O bairro em que fica sua academia" required>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" name="End_Numero" class="form-control form-control-lg bg-light fs-6" placeholder="O número do prédio da sua academia" required>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" name="Nome_Academia" class="form-control form-control-lg bg-light fs-6" placeholder="O nome da sua academia" required>
                        </div>
                        
                        <!-- Mudar cor do CHECKBOX depois. -->
                        <div class="input-group mb-5 d-flex justify-content-between">

                        <div class="input-group mb-3">
                            <input type="file" name="Foto_Academia" class="form-control form-control-lg bg-light fs-6" placeholder="Foto da academia">
                        </div>
                        
                        
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" name="submit" class="btn btn-lg btn-primary w-100 fs-6 " style="background: #f68b27; border: none;">Cadastrar Academia</button>
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

    <script src="./js/charts/chart-area.js"></script>
    <script src="./js/charts/chart-pie.js"></script>
    <script src="./js/charts/chart-bar.js"></script>
        
</body>
</html>




















