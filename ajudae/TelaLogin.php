<!DOCTYPE html>

<?php
session_start();
?>

<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AjudaE</title>

  <!-- Bootstrap WEB -->
  <link href="assets/bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/bootstrap/css/simple-sidebar.css" rel="stylesheet">


  <!-- Bootstrap TEMPLATE -->
  <link rel="stylesheet" href="assets/css/main.css" />
  <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

</head>

<body class="is-preload">

    <!-- Header -->
      <section id="header">
        <div class="inner">
          <a href="index.html">
            <img src="assets\css\images\logo2.png">
          </a>
        </div>
      </section>

    <!-- Cadastro -->

      <section id="two" class="main style2">
        <div class="container">
          <div class="row gtr-150">
            <div class="col-2 col-12-medium">
            
            </div>
            <div class="col-8 col-12-medium">
              <header class="major">
                <form action="logar.php" method="POST" >

                <div>
                  <?php
                    if(isset($_SESSION['nao_autenticado'])):
                  ?>
                  <div>
                    <p>ERRO: Usuário ou senha inválidos.</p>
                  </div>
                  <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                  ?>
                </div>

          E-mail:<br>
          <div>
            <input class="form-control p-3 mb-2 bg-white text-dark" type="text" name="email" size="40"> <br>
          </div>

          Senha:<br>
          <div>
            <input class="form-control p-3 mb-2 bg-white text-dark" type="password" name="password" size="20"> <br>
          </div>


          <br>
          <div align="center">
            <button class="button wide" type="submit" value="submit">Ajudaê</button>
          </div>



        </form>
            </div>

            <div  class="col-2 col-12-medium">
              
            </div>

          </div>
        </div>
      </section>

      <!-- Footer -->
      <section id="footer">
        <ul class="icons">
          <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
          <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
          <li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
          <li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
          <li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
          <li>&copy; Ajudaê</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
      </section>

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>

  </body>

</html>