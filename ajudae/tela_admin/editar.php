


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Editar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="../cadastrar/css/style.css">

      <link rel="stylesheet" href="../css/util.css">


  
</head>

<body>

  <?php 
    include("../conexao/conexao_banco.php");
    $email = $_GET['email'];

    $query = "SELECT * FROM usuario WHERE email = '$email'";
    $sql = mysqli_query($link, $query);
    while ($cont = mysqli_fetch_array($sql)){

  ?>



  <div class="user">
    <header class="user__header">
      
        <h1 class="user__title">Cadastre-se</h1>
    </header>
    
    <form class = "form"  action="../CRUD/ADMatualizarUsuario.php" method="POST">

    
        <div class="form__group">
            <input type="email" placeholder="Email" class="form__input" name="email" value="<?php echo $cont['email']; ?>"  />
        </div>

        <div class="form__group">
            <input type="text" placeholder="Nome completo" class="form__input" name="NomeCompleto" value="<?php echo $cont['nome']; ?>" />
        </div>

        <div class="form__group">
            <input type="text" placeholder="Telefone" class="form__input" name="Telefone" value="<?php echo $cont['telefone']; ?>" />
        </div>

           <!-- ===============================================apenas visualizar======================================================= -->
        <div class="form__group">
            <input type="number" placeholder="R.A(Somente para alunos)" class="form__input disabled "name="RA" value="<?php echo $cont['RA']; ?>" />
        </div>
        
        <div class="form__group">
            <input type="text" placeholder="Curso" class="form__input disabled" name="curso" value="<?php echo $cont['curso']; ?>" />
        </div>
        
        <div class="form__group">
            <input type="text" placeholder="Semestre" class="form__input disabled" name="semestre" value="<?php echo $cont['semestre']; }?>" />
        </div>
        <button class="btn" type="submit" value="submit">Alterar dados</button>

        <div class="form__group">
          <a class="btn" align="center" href="../home/home.php">Inicio</a>
        </div>
    </form>
</div>
  
  

    
<script  src="js/index.js"></script>



</body>

</html>
