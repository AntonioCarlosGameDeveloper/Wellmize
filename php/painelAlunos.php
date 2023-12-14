<?php
    include_once('config.php');


    $sql = "SELECT * FROM aluno ORDER BY Id_Aluno DESC";

    $result = $conexao->query($sql);

    //print_r($result);
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
        <div class="content">
            <nav class="navbar navbar-expand-md navbar-light bg-light"id="nav_bar">
                <div class="container-fluid">
                    <div class="dflex justify-content-between d-md-none d-block">  
                        <button class="btn px-1 py-0 open-btn me-2"><i class="fal fa-stream"></i></button>
                        <a class="navbar-brand fs-4" href="#"><span class="bg-black rounded px-2 py-0 text-white">WM</span></a>
                        
                    </div> 
                        <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fal fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav  mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Alunos da sua academia</a>
                            </li>
                            </ul>
                        </div>
                </div>
            </nav>

            <div class="dashboard-content p-5">
                <h2 class="fs-5"> Veja os alunos cadastrados na sua academia</h2>           
            </div>
            
            <div class = "m-5">
                <table class="table text-white table-bg">
                    <thead>
                        <tr>
                        <th scope="col">Id_Aluno</th>
                        <th scope="col">Altura</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Data_Nasc</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($user_data = mysqli_fetch_assoc($result))
                            {
                                echo "<tr>";
                                echo "<td>".$user_data['Id_Aluno']."</td>";
                                echo "<td>".$user_data['Altura']."</td>";
                                echo "<td>".$user_data['Peso']."</td>";
                                echo "<td>".$user_data['Nome']."</td>";
                                echo "<td>".$user_data['Email']."</td>";
                                echo "<td>".$user_data['Sexo']."</td>";
                                echo "<td>".$user_data['Telefone']."</td>";
                                echo "<td>".$user_data['Data_Nasc']."</td>";
                            }
                        ?>
                    </tbody>
                </table>
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

    <script src="../js/imprimir"></script>
    <script src="../js/charts/chart-area.js"></script>
    <script src="../js/charts/chart-pie.js"></script>
    <script src="../js/charts/chart-bar.js"></script>
        
</body>
</html>




















