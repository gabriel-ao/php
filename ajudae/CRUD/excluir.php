
<!DOCTYPE html>
<html lang="en" >

<head>
	<meta charset="UTF-8">
	<title>Entrar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

	
		<link rel="stylesheet" href="../entrar/css/style.css">

</head>

<body>

<?php
    $email = $_GET['email'];

    include("../conexao/conexao_banco.php");
    $sql = "DELETE FROM usuario WHERE email = '$email'";

    mysqli_query($link, $sql) or die(mysql_error());
?>



	<div class="user">
		<header class="user__header">
			<h1 class="user__title">Usuario <?php echo $email ?> excluido com sucesso </h1>
		</header>
		
			</br>
			<center>
			<a class="btn btn-primary" style="width: 40%" type="submit" href="../tela_admin/admin_dash.php">voltar</a>
			</center>
	</div>
  
    <script  src="js/index.js"></script>

</body>

</html>
