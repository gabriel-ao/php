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
	$email = $_POST['email'];
	$nome = $_POST['NomeCompleto'];
	$RA = $_POST['RA'];
	$telefone= $_POST['Telefone'];
	$curso = $_POST['curso'];
	$semestre = $_POST['semestre'];


	include("../conexao/conexao_banco.php");

	$sqlupdate = "UPDATE USUARIO SET nome = '$nome' ,telefone='$telefone', RA='$RA', curso='$curso', semestre='$semestre' WHERE email = '$email' ";

	mysqli_query($link, $sqlupdate);

?>



	<div class="user">
		<header class="user__header">
			<h1 class="user__title">Dados alterados com sucesso </h1>
		</header>
		<?php 
		
		?>
			</br>
			<center>
			<a class="btn btn-primary" style="width: 40%" type="submit" href="../tela_admin/admin_dash.php">Inicio</a>
			</center>
	</div>
  
    <script  src="js/index.js"></script>

</body>

</html>