<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];

  if (empty($nome) && empty($email) && empty($mensagem)) {
    echo "<script type='text/JavaScript'>alert('Por favor, preencha todos os campos!')</script>";
  } else {
    include_once('./PHP/config.php');

    $result = mysqli_query($conexao, "INSERT INTO contatos(Id_user, Nome, Email, Mensagem) VALUES (NULL, '$nome', '$email', '$mensagem')");
    echo "<script type='text/JavaScript'>alert('Dados enviados, aguarde o contato!')</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wellmize - Tela de Contato</title>
  <link rel="stylesheet" href="./styles/estilocontato.css" />
</head>

<body>
  <section class="contato">
    <div class="container">
      <div class="contatoInfo">
        <div class="box">
          <div class="icon"><ion-icon name="location"></ion-icon></div>
          <div class="text">
            <h2>Endereço</h2>
            <p>Rua José Peres, 558 - Centro, Leopoldina - MG, 36700-000</p>
          </div>
        </div>
        <div class="box">
          <div class="icon"><ion-icon name="call"></ion-icon></div>
          <div class="text">
            <h2>Telefone</h2>
            <p>(32)3449-2300</p>
          </div>
        </div>
        <div class="box">
          <div class="icon"><ion-icon name="mail"></ion-icon></div>
          <div class="text">
            <h2>E-mail</h2>
            <p>contatowellmize@gmail.com</p>
          </div>
        </div>
      </div>
      <div class="contatoformulario">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <h3>Tem alguma dúvida? Mande-nos uma mensagem!</h3>
          <div class="inputBox">
            <input placeholder="Nome completo" type="text" name="nome" required />
          </div>
          <div class="inputBox">
            <input placeholder="E-mail" type="text" name="email" required />
          </div>
          <div class="inputBox">
            <textarea placeholder="Digite sua mensagem" name="mensagem" required></textarea>
          </div>
          <div class="inputBox">
            <button class="buttonInput" type="submit">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>