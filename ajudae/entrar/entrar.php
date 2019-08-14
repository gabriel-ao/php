<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <link rel="icon" type="imagem/png" href="../home/imagens/iajuda.png" />
  <meta charset="UTF-8">
  <title>Entrar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="user">
    <header class="user__header">
      
        <h1 class="user__title">Entrar</h1>

    </header>
    
    <form class="form" action="../CRUD/logar.php" method="POST">

        <div class="form__group">
            <input type="email" placeholder="Email" class="form__input" name="email" />
        </div>
        
        <div class="form__group">
            <input type="password" placeholder="Senha" class="form__input" name="password" />
        </div>
        
        <button class="btn" type="submit" value="submit">Entrar</button>

        <div class="form__group">
          <a class="btn" align="center" href="../index.html">Portifolio</a>
        </div>

        <div class="form__group">
                <a class="btn" align="center" href="../cadastrar/cadastro.html">Não tem cadastro? cadastre-se aqui</a>
        </div>

            <?php
                if(isset($_SESSION['nao_autenticado'])):
            ?>
            <div>
                <p class="user__title">ERRO: Usuário ou senha inválidos.</p>
            </div>
            <?php
                endif;
                unset($_SESSION['nao_autenticado']);
            ?>

    </form>
</div>
  
  

    <script  src="js/index.js"></script>




</body>

</html>
