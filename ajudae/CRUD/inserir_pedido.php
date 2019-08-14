
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
		$titulo = utf8_decode($_POST['titulo']);
		$categoria = utf8_decode($_POST['categoria']);
		$descricao = utf8_decode($_POST['descricao']);
		$FK_donatario_usuario = utf8_decode($_POST['id']);
		$status_pedido = utf8_decode('visivel');

		include("../conexao/conexao_banco.php");

		$sqlinsert= " INSERT INTO PEDIDO (categoria, status_pedido, descricao, FK_donatario_usuario, titulo) 
						VALUES ('$categoria' , '$status_pedido', '$descricao', '$FK_donatario_usuario', '$titulo')";

		mysqli_query($link, $sqlinsert) or die(erro);

	?>



	<?php
	session_start();
	?>



	<div class="user">
		<header class="user__header">
			<h1 class="user__title">Pedido realizado com sucesso</h1>
		</header>
		
			</br>
			<center>
			<a class="btn btn-primary" style="width: 40%" type="submit" href="../home/home.php">voltar</a>
			</center>
	</div>
  
  

    <script  src="js/index.js"></script>




</body>

</html>
