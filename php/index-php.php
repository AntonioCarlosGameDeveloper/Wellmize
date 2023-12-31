<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles/estilo.css" />
    <link rel="stylesheet" href="./styles/estiloGeral.css" />
    <link rel="stylesheet" href="./styles/estiloFooter.css" />
    <title>Wellmize | Home</title>
  </head>
  <body>
    <header id="header-page">
      <img class="logo" src="./assets/v1.1.1_WellmizeLogo.png" alt="logo" />
      <nav class="navigation" id="navigation-menu">
        <a onclick="onOpenPage('home.html')">Inicio</a>
        <a onclick="onOpenPage('sobre.html')">Sobre</a>
        <a onclick="onOpenPage('servicos.html')">Serviços</a>
        <a onclick="onOpenPage('contato.php')">Contato</a>
        <a onclick="onOpenPage('dashboard.html')">Dashboard</a>
        <a class="login" href="login-php.php" target="_blank">Login</a>
        <a class="register" href="registro-php.php" target="_blank">Registrar-se</a>
      </nav>
      <button onclick="handleOpenMenu()" class="buttonOpenMenu">
        <img id="menu-icon" src="./assets/menu.svg" alt="menu" />
      </button>
    </header>

    <iframe id="main"></iframe>
    <footer>
      <div id="footer_content">
        <div id="footer_contacts">
          <h1>Wellmize</h1>
          <p>Transformando Academias</p>

          <div id="footer_social_media">
            <a href="#" class="footer-link" id="instagram">
              <i class="fa-brands fa-instagram"
                ><ion-icon name="logo-instagram"></ion-icon
              ></i>
            </a>

            <a href="#" class="footer-link" id="facebook">
              <i class="fa-brands fa-facebook-f"
                ><ion-icon name="logo-facebook"></ion-icon
              ></i>
            </a>

            <a href="#" class="footer-link" id="whatsapp">
              <i class="fa-brands fa-whatsapp"
                ><ion-icon name="logo-whatsapp"></ion-icon
              ></i>
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

          <div id="input_group">
            <input type="email" id="email" style="background: #212429;"/>
            <button>
              <i class="fa-regular fa-envelope"
                ><ion-icon name="send"></ion-icon
              ></i>
            </button>
          </div>
        </div>
      </div>

      <div id="footer_copyright">© 2023 all rights reserved</div>
    </footer>
  </body>

  <script src="./js/control.js"></script>

  <script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
  ></script>
  <!-- Esses dos scripts sendo puxados são o IONICicons, que usamos pra icones-->
  <script
    nomodule
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
  ></script>
</html>
