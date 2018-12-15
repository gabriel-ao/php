<!DOCTYPE html lang ="pt-br">

<html>
<head>
     <meta charset="UTF-8"/>
     <title>grau ocular</title>
	 <link rel="stylesheet" type="text/css" href="hatsu.css">
	 <link rel="icon" href="hatsu_icon.jpg" type="image" sizes="16x16">
 </head>
	<body class="body">
	
		<a href="hatsu.html"> <img src="hatsu_logo.png" class="imagem"> </a>
		
		<h2 class="h2"> Resultado prescrição de lentes</h2>
		
		<?php
		// inicio php

			// Grau esferico esquerdo
			$GEE = isset($_GET ["grauEE"])?$_GET["grauEE"]:0;
			
			// Grau cilindrico esquerdo
			$GCE = isset($_GET ["grauCE"])?$_GET["grauCE"]:0;
			
			// Grau esferico direito
			$GED = isset($_GET ["grauED"])?$_GET["grauED"]:0;
			
			// Grau cilindrico direito
			$GCD = isset($_GET ["grauCD"])?$_GET["grauCD"]:0;

			//Verificação de lentes prime e vision para o olho DIREITO
			if($GCD == 0){
				if (($GED <=-3 )&&($GED >=-12)){
					$lenteDireita = "A lente para seu olho direito é PRIME";
				} else {
					$lenteDireita = "A lente para seu olho direito é VISION ";
				}
			} else if (($GCD < 0)&&($GCD >= -2)){
				if (($GED <=-3 )&&($GED >=-10)){
					$lenteDireita = "A lente para seu olho direito é PRIME ";
				} else {
					$lenteDireita = "A lente para seu olho direito é VISION ";
				}
			} else if (($GCD < -2)&&($GCD >= -5)){
				if (($GED <=0 )&&($GED >=-15)){
					$lenteDireita = "A lente para seu olho direito é VISION";
				}
			} else {
				$lenteDireita = "Erro de calculo da lente direita, tente novamente ou consulte seu medico";
			}
			// fim verificação para olho DIREITO
			
			//Verificação de lentes prime e vision para o olho ESQUERDO

			if($GCE == 0){
				if (($GEE <=-3 )&&($GEE >=-12)){
					$lenteEsquerda = "A lente para seu olho esquerdo é PRIME";
				} else {
					$lenteEsquerda = "A lente para seu olho esquerdo é VISION";
				}
			} else if (($GCE < 0)&&($GCE >= -2)){
				if (($GEE <=-3 )&&($GEE >=-10)){
					$lenteEsquerda = "A lente para seu olho esquerdo é PRIME";
				} else {
					$lenteEsquerda = "A lente para seu olho esquerdo é VISION";
				}
			} else if (($GCE < -2)&&($GCE >= -5)){
				if (($GEE <=0 )&&($GEE >=-15)){
					$lenteEsquerda = "A lente para seu olho esquerdo é VISION";
				}
			} else {
				$lenteEsquerda = "Erro de calculo da lente esquerda, tente novamente ou consulte seu medico";
			}
			// fim verificação para olho ESQUERDO
		// fim php
		?>
		
		<!-- Exibição para cliente-->
		<p class="centro">
			<?php
				echo " $lenteDireita, com grau esferico $GED e grau cilíndrico $GCD";
				echo "<br><br>";
				echo " $lenteEsquerda, com grau esferico $GEE e grau cilíndrico $GCE";
			?>
		</p>
		
		<form class="centro">
			<br><br>
			<a href="hatsu.html"> <input type="button" class="button" value="Fazer nova consulta"/> </a>
		</form>
	</body>
 </html>	
	
<!--
 Em uma compra online, o usuário insere informações de sua receita oftálmica, e nosso sistema deve exibir uma 
lente que atende a sua necessidade. Precisamos captar 4 parâmetros numéricos do usuário. São eles: grau esférico 
do olho esquerdo, grau esférico do olho direito, grau cilíndrico do olho esquerdo e grau cilíndrico do olho direito. 

A lente Prime só pode ser uma opção para o usuário que tiver grau esférico, seja do olho esquerdo ou do olho direito, 
entre -3 e -12. Além disso, ela só atende até grau cilíndrico -2, porém, se o usuário apresentar grau cilíndrico, ela 
passa a atender grau esférico entre -3 e -10. 

Já a lente Vision é uma opção para quem tem de 0 a -15 de esférico e até -5 de cilíndrico. Quando a lente Prime está 
disponível, ela deve ser a única exibida para o usuário. OBS: O grau limite que o usuário pode inserir é de 0 a -15 
para esférico e -6 para cilíndrico e são números iterados de 0,25 em 0,25 (ex: -0,25; 0; +0,25; etc) *

-->