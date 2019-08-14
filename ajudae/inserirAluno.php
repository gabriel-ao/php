<?php
	$Nome=$_POST['Nome'];
	$RA=$_POST['RA'];
	$Curso=$_POST['Curso'];
	$Semestre=$_POST['Semestre'];

    include("conexao_banco.php");

    $sqlinsert= " INSERT INTO USUARIO (ID_usuario, nome, email, telefone, senha, RA, curso, semestre) 
                    VALUES ('', '$Nome', '', '', '', '$RA', '$Curso', '$Semestre')";

    mysqli_query($link, $sqlinsert);
 
    include("./resposta_usuario/resposta_positiva.html");
?>

