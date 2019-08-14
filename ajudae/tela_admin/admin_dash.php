<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ajudae admin workplace</title>
	<!--AQUI E ONDE E FEITA TODAS AS CHAMADAS DO CSS-->
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
	
	<!-- Template Styles -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<!-- CSS Reset -->
	<link rel="stylesheet" href="css/normalize.css">
	
	<!-- Milligram CSS minified -->
	<link rel="stylesheet" href="css/milligram.min.css">
	
	<!-- Main Styles -->
	<link rel="stylesheet" href="css/styles.css">
	
	<!--SE ALGUM ANIMAL AINDA USAR O IE9 HABILITAR O CAMPO ABAIXO-->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
	<div class="navbar">
		<div class="row">
			<!--NOME DO LOGO, PODEMOS COLOCAR O LOGO OU MANTER O NOME APENAS-->
			<div class="column column-30 col-site-title"><a href="#" class="site-title float-left">Ajudaê</a></div>
			
			<div class="column column-30">
				<div class="user-section"><a href="#">

					<h5><a class="nav-link" href="../logout.php">Sair</a></h5>
					   
					<div class="username">


						<!--AQUI DEVERA PEGAR O NOME DO ADM NO BANCO DE DADOS(Apenas o 1 nome)-->
						<h4>Alciomarzin </h4>
						<p>Mestre do sistema</p>
					</div>
				</a></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="sidebar" class="column">
			<!--MENU LATERAL-->
			<h5>Menu</h5>
			<ul>
				<li><a href="#"><em class="fa fa-home"></em> Inicial</a></li>
				<li><a href="#tables"><em class="fa fa-table"></em> Usuarios cadastrados</a></li>
				<li><a href="#Alunos"><em class="fa fa-table"></em> Alunos cadastrados</a></li>
				<li><a href="#doadores"><em class="fa fa-table"></em> Doadores cadastrados</a></li>
				<li><a href="#pedidos"><em class="fa fa-columns"></em> Pedidos finalizados</a></li>
				<li><a href="../home/home.php"><em class="fa fa-columns"></em>Espiar site</a></li>
			</ul>
		</div>
		<section id="main-content" class="column column-offset-20">
			<div class="row grid-responsive">
				<div class="column page-heading">
					<div class="large-card">
						<h1>Olá querido adminstrador(a)!!</h1>
						<p class="text-large">Essa seção especial do sistema irá te dar todo o controle
							em cima dos dados dos usuários lhe permitindo adicionar, modificar e excluir, 
							sejam eles individuais ou em lote! Cuide bem do sistema e do banco de
							dados já que a finalidade é ajudar pessoas, e lembre-se...
						</p>
						<p><em>“Com grandes poderes vêm grandes responsabilidades”</em></p>
						
					</div>
				</div>
			</div>

			<!--Tables-->

			<h5 class="mt-2">Ultimos usuários cadastrados</h5><a class="anchor" name="tables"></a>
			<div class="row grid-responsive">
				<div class="column ">
					<div class="card">
						<div class="card-title">
							<h3>Dados dos usuários</h3>
						</div>
						<div class="card-block">
							<table>
								<thead>
									<tr>
										<th>E-mail</th>
										<th>Nome</th>
										<th>Telefone</th>
										<th>RA</th>
										<th>Curso</th>
										<th>Semestre</th>
										<th></th>

									</tr>
								</thead>
								
								<tbody>
								<?php
									require ("../conexao/conexao_banco.php");
									$sql = "SELECT * FROM usuario ORDER BY email DESC LIMIT 20";
									$busca = mysqli_query($link, $sql) or die (mysql_error());
									while($dado = mysqli_fetch_array($busca)):
										?>
									<tr>
										<td><?php echo $dado['email']; ?></td>
										<td><?php echo $dado['nome']; ?></td>
										<td><?php echo $dado['telefone']; ?></td>
										<td><?php echo $dado['RA']; ?></td>
										<td><?php echo $dado['curso']; ?></td>
										<td><?php echo $dado['semestre']; ?></td>
										<td><a class="button button-clear" href="editar.php?email=<?php echo $dado['email'];?>" >Editar</a></td>
										<td><a class="button button-clear" href="../CRUD/excluir.php?email=<?php echo $dado['email'];?>">Excluir</a></td>

									</tr>
										
									<?php
									endwhile;
									?>

								<tr>
																			
									</tr>
									
								</tbody>
							</table>
						</div>

					</div>
				</div>
			</div>

			<h5 class="mt-2">Lista de alunos</h5><a class="anchor" name="Alunos"></a>
			<div class="row grid-responsive">
				<div class="column ">
					<div class="card">
						<div class="card-title">
							<h3>Dados dos Alunos</h3>
						</div>
						<div class="card-block">
							<table>
								<thead>
									<tr>
										<th>E-mail</th>
										<th>Nome</th>
										<th>Telefone</th>
										<th>RA</th>
										<th>Curso</th>
										<th>Semestre</th>
									</tr>
								</thead>
								
								<tbody>
								<?php
									require ("../conexao/conexao_banco.php");
									$sql = "SELECT * FROM usuario WHERE RA !='null' ORDER BY nome ASC LIMIT 10";
									$busca = mysqli_query($link, $sql) or die (mysql_error());
									while($dado = mysqli_fetch_array($busca)):
										?>
									<tr>
										<td><?php echo $dado['email']; ?></td>
										<td><?php echo $dado['nome']; ?></td>
										<td><?php echo $dado['telefone']; ?></td>
										<td><?php echo $dado['RA']; ?></td>
										<td><?php echo $dado['curso']; ?></td>
										<td><?php echo $dado['semestre']; ?></td>
									</tr>
										
									<?php
									endwhile;
									?>

								<tr>
																			
									</tr>
									
								</tbody>
							</table>
						</div>

					</div>
				</div>
			</div>



			<h5 class="mt-2">Lista de Doadores</h5><a class="anchor" name="doadores"></a>
			<div class="row grid-responsive">
				<div class="column ">
					<div class="card">
						<div class="card-title">
							<h3>Dados dos Doadores</h3>
						</div>
						<div class="card-block">
							<table>
								<thead>
									<tr>
										<th>E-mail</th>
										<th>Nome</th>
										<th>Telefone</th>
									</tr>
								</thead>
								
								<tbody>
								<?php
									require ("../conexao/conexao_banco.php");
									$sql = "SELECT * FROM usuario WHERE RA ='null' ORDER BY nome ASC LIMIT 10";
									$busca = mysqli_query($link, $sql) or die (mysql_error());
									while($dado = mysqli_fetch_array($busca)):
										?>
									<tr>
										<td><?php echo $dado['email']; ?></td>
										<td><?php echo $dado['nome']; ?></td>
										<td><?php echo $dado['telefone']; ?></td>
									</tr>
										
									<?php
									endwhile;
									?>
								<tr>									
										
									</tr>
									
								</tbody>
							</table>
						</div>


					</div>
				</div>
			</div>

			<h5 class="mt-2">Pedidos finalizados</h5><a class="anchor" name="pedidos"></a>
			<div class="row grid-responsive">
				<div class="column ">
					<div class="card">
						<div class="card-title">
							<h3>Pedidos</h3>
						</div>
						<div class="card-block">
							<table>
								<thead>
									<tr>
										<th>N. pedido</th>
										<th>Titulo</th>
										<th>Categoria</th>
										<th>Descricao</th>
									</tr>
								</thead>
																
								<tbody>
								<?php
									require ("../conexao/conexao_banco.php");
									$sql = "SELECT * FROM pedido WHERE status_pedido = 'finalizado' ORDER BY ID_pedido ASC LIMIT 10";
									$busca = mysqli_query($link, $sql) or die (mysql_error());
									while($dado = mysqli_fetch_array($busca)):
										?>
									<tr>
										<td><?php echo $dado['ID_pedido']; ?></td>
										<td><?php echo $dado['titulo']; ?></td>
										<td><?php echo $dado['categoria']; ?></td>
										<td><?php echo $dado['descricao']; ?></td>
									</tr>
										
									<?php
									endwhile;
									?>
								<tr>
											
									</tr>
									
								</tbody>
							</table>
						</div>

	
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script>
	window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
		var chart2 = document.getElementById("bar-chart").getContext("2d");
		window.myBar = new Chart(chart2).Bar(barChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
		var chart4 = document.getElementById("pie-chart").getContext("2d");
		window.myPie = new Chart(chart4).Pie(pieData, {
		responsive: true,
		segmentShowStroke: false
		});
		var chart5 = document.getElementById("radar-chart").getContext("2d");
		window.myRadarChart = new Chart(chart5).Radar(radarData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.05)",
		angleLineColor: "rgba(0,0,0,.2)"
		});
		var chart6 = document.getElementById("polar-area-chart").getContext("2d");
		window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		segmentShowStroke: false
		});
	};
	</script>			

</body>
</html> 