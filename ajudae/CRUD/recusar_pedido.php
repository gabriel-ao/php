
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
	
	session_start();
	include('..\conexao\conexao_banco.php');
	
	$id_pedido = $_GET['ID_pedido'];
	$status_pedido = 'visivel';
	$FK_doador_usuario = 'semDoador' ;

	$sqlinsert= " UPDATE PEDIDO SET status_pedido='$status_pedido', FK_doador_usuario ='$FK_doador_usuario' WHERE ID_pedido='$id_pedido' ";


	mysqli_query($link, $sqlinsert) or die(erro);


?>



	<div class="user">
		<header class="user__header">
			<h1 class="user__title"> Infelizmente não foi dessa vez, mais sorte na proxima! </h1>
		</header>
		
			</br>
			<center>
			<a class="btn btn-primary" style="width: 40%" type="submit" href="../home/meus_pedidos.php">voltar</a>
			</center>
	</div>
  
    <script  src="js/index.js"></script>

</body>

</html>