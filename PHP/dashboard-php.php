<?php

    session_start();

    //print_r($_SESSION);

    if((!isset($_SESSION['Email']) == true) and (!isset($_SESSION['Senha']) == true))//Caso não exista vai pro login e deleta as variaveis de sessão
    {
        unset($_SESSION['Email']);
        unset($_SESSION['Senha']);
        header('Location: login-php.php');
    }
    $logado = $_SESSION['Email'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/estiloDashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
    <div class="main-conteiner d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-3 pt-2 pb-4 d-flex justify-content-between">
                <h1 class="fs-4" ><span class="bg-white text-dark rounded shadow px-2 me-2">WM</span><span class="text-white"> WellMize</span></h1>
                <button class="btn d-md-none d-block close-btn px-1 py-0 text-white "><i class="fal fa-stream"></i></button>
            </div>
            <ul class="list-unstyled px-2">
                <li class=""><a href="index-php.php" class=" text-decoration-none px-3 py-2 d-block"><i class="fal fa-home"></i> Menu</a></li>
                <li class=""><a href="sobre.html" class=" text-decoration-none px-3 py-2 d-block"><i class="fal fa-list"></i> Projetos</a></li>
                <li class=""><a href="contato.html" class=" text-decoration-none px-3 py-2 d-block"><i class="fal fa-comment"></i> Mensagens</a></li>
                <li class=""><a href="servicos.html" class=" text-decoration-none px-3 py-2 d-block"><i class="fal fa-envelope-open-text"></i> Serviços</a></li>
                <li class=""><a href="login-php.php" class=" text-decoration-none px-3 py-2 d-block"><i class="fal fa-users"></i> Usuários</a></li>
                <li class=""><a href="sair.php" class="btn btn-danger">Sair</a>
            </ul>
            <hr class="h-color mx-2">
            <ul class="list-unstyled px-2">
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-bars"></i> Configurações</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-bell"></i> Notificações</a></li>
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
                                <a class="nav-link active" aria-current="page" href="#">Profile</a>
                            </li>


                            </ul>
                   
                  </div>
                </div>
              </nav>

              <div class="dashboard-content p-5">
                <h2 class="fs-5"> DashBoard</h2>
                <p class="p-2">Veja mais alguns dados que mostram o quanto a WellMize revoluciona academias!</p>            
            </div>

            <div class="row p-5">

                <div class="col-xl-8 col-lg-7">

                    <!-- Area Chart -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Gráfico de área</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas height="350px" id="myAreaChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Bar Chart -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-bar">
                                <canvas height="350px" id="myBarChart"></canvas>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Donut Chart -->
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4">
                                <canvas height="300px" id="myPieChart"></canvas>
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