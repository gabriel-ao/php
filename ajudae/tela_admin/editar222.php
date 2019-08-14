<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AjudaE</title>

  <!-- Bootstrap WEB -->
  <link href="../assets/bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../assets/bootstrap/css/simple-sidebar.css" rel="stylesheet">


  <!-- Bootstrap TEMPLATE -->
  <link rel="stylesheet" href="../assets/css/main.css" />
  <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>

</head>

<body class="is-preload">

<?php 
  include("../conexao/conexao_banco.php");
  $email = $_GET['email'];

  $query = "SELECT * FROM usuario WHERE email = '$email'";
  $sql = mysqli_query($link, $query);
  while ($cont = mysqli_fetch_array($sql)){

?>


    <!-- Header -->
      <section id="header">
        <div class="inner">
          <a href="index.html">
            <img src="../assets\css\images\logo2.png">
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
                <form  action="../CRUD/atualizarUsuario.php" method="POST">

                <input type="hidden" name="email" value="<?php echo $email; ?>"/>
                
                  Nome Completo:<br>
                  <div>
                    <input class="form-control p-3 mb-2 bg-white text-dark" type="text" name="NomeCompleto"  value="<?php echo $cont['nome']; ?>"><br>
                  </div>

                  Telefone:<br>
                  <div>
                    <input class="form-control p-3 mb-2 bg-white text-dark"  type="text" name="Telefone"   value="<?php echo $cont['telefone']; ?>"  > <br>
                  </div>



                  R.A Aluno (somente para alunos):<br>
                  <div>
                    <input class="form-control p-3 mb-2 bg-white text-dark" type="text" name="RA"  value="<?php echo $cont['RA']; ?>"  > <br>
                  </div>

                  Curso:<br>
                  <div>
                    <input class="form-control p-3 mb-2 bg-white text-dark" type="text" name="curso"  value="<?php echo $cont['curso']; ?>"  > <br>
                  </div>

                  Semestre:<br>
                  <div>
                    <input class="form-control p-3 mb-2 bg-white text-dark" type="text" name="semestre"  value="<?php echo $cont['semestre']; }?>"  > <br>
                  </div>

                  <br>
                  <div align="center">
                    <button class="button wide" type="submit" value="submit">Atualizar</button>
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
      <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/js/jquery.scrolly.min.js"></script>
      <script src="../assets/js/browser.min.js"></script>
      <script src="../assets/js/breakpoints.min.js"></script>
      <script src="../assets/js/util.js"></script>
      <script src="../assets/js/main.js"></script>

  </body>

</html>