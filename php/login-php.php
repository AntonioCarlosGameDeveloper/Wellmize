<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/estiloLogin.css">
    <title>Wellmize | Login</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #f68b27;">
                <a href="../index.html" class="buttonVoltar" id="botaoVoltar" target="_top">
                    <img src="../assets/seta-esquerda-removebg-preview-modified.png" alt="Seta Voltar" style="height: 40px; width: 40px; position: relative; left: -180px; top: -15px;">
                </a>
                <div class="featured-image mb-3">
                <img src="../assets/login_image1.png" class="img-fluid" style="width: 250px;">
           </div>
        <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Verifique sua conta!</p>
        <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Caso tenha algum problema com seu login, entre em contato conosco.</small>
    </div> 

       <div class="col-md-6 right-box">
            <form action="testeLogin.php" method="POST">
                <div class="row align-items-center">
                        <div class="header-text mb-4" style="margin-left: 0px;">
                            <h2>Bem vindo de volta!</h2>
                            <p>Estamos felizes em ter você novamente na equipe</p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="Email" class="form-control form-control-lg bg-light fs-6" placeholder="Endereço de e-mail">
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" name="Senha" class="form-control form-control-lg bg-light fs-6" placeholder="Senha">
                        </div>
                        <!-- Mudar cor do CHECKBOX depois. -->
                        <div class="input-group mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Lembre-se de mim</small></label>
                            </div>
                            <div class="forgot">
                                <small><a href="#">Esqueceu sua senha?</a></small>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" name="submit" class="btn btn-lg btn-primary w-100 fs-6 " style="background: #f68b27; border: none;">Login</button>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-light w-100 fs-6"><img src="../assets/google_icon-removebg-preview.png" style="width:20px" class="me-2"><small>Entrar com Google</small></button>
                        </div>
                        <div class="row" style="text-align: center;">
                            <small>Não possui uma conta? <a href="registro-php.php">Registrar-se</a></small>
                        </div>
                </div>
            </form>
       </div> 

      </div>
    </div>

    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <!-- Esses dos scripts sendo puxados são o IONICicons, que usamos pra icones-->
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
</body>
</html>
