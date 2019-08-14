<!DOCTYPE HTML>
<html>
	<head>
		<title>Ajudaê</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
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
					  
					<ul class="actions special">
						<li style="color:black"><a href="#two" class="button scroll ">Saiba Mais!</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->

			<section id="two" class="main style2">
				<div class="container">
					<div class="row gtr-150">
						<div class="col-1 col-12-medium">
						
						</div>
						<div style="text-align: center" class="col-10 col-12-medium">
							<header class="major">
								<div class="container-contact100">


										<div class="limiter">
												<div class="container-table100" style="itens-align:center">
													<div class="wrap-table1000">
															<div class="table">
										
																<div class="row header">
																	<div class="cell">
																		RA
																	</div>
																	<div class="cell">
																		Nome
																	</div>
																	<div class="cell">
																		Telefone
																	</div>
																	<div class="cell">
																		E-mail
																	</div>
																	<div class="cell">
																		Curso
																	</div>
																	<div class="cell">
																		Excluir
																	</div>
																	<div class="cell">
																		Editar
																	</div>
																</div>

																<?php
																	require("conexao_banco.php");
																	$sql = "SELECT * FROM usuario WHERE RA !='null' ORDER BY nome ASC";
																	$busca = mysqli_query($link, $sql);
																	while($resultado = mysqli_fetch_array($busca)){
																		// Listando um Aluno
																		echo '	<div class="row" >
																					<div class="cell" data-title="RA">
																						'.$resultado['RA'].'
																					</div>
																					<div class="cell" data-title="nome">
																						'.$resultado['nome'].'
																					</div>
																					<div class="cell" data-title="telefone">
																						'.$resultado['telefone'].'
																					</div>
																					<div class="cell" data-title="Location">
																						'.$resultado['email'].'
																					</div>
																					<div class="cell" data-title="Location">
																						'.$resultado['curso'].'
																					</div>
																					<div class="cell" data-title="Location">
																						<a href="./CRUD/Excluir.php?RA='.$resultado['RA'].'">Excluir</a>
																					</div>
																					<div class="cell" data-title="Location">
																						<a href="editar.php?ID='.$resultado['RA'].'">Editar</a>
																					</div>
																				</div>
																		';
																	}
																?>
										
															</div>
													</div>
												</div>
											</div>
										

									
								</div>
							</header>

						</div>

						<div  class="col-1 col-12-medium">
							
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