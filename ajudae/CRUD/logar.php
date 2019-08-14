<?php

include("../conexao/conexao_banco.php");

session_start();

if(empty($_POST['email']) || empty($_POST['password']) ){
    header('Location base.html');
    exit();
}


$email = mysqli_real_escape_string($link, $_POST['email']);
$password = mysqli_real_escape_string($link, $_POST['password']);

$query = mysqli_query ($link, "SELECT * FROM usuario WHERE email = '{$email}' AND senha = '{$password}'") or die(mysqli_error($link));

$row = mysqli_num_rows($query);

$sql = " SELECT * FROM usuario WHERE acesso = 1 and email = '$email' ";

$busca = mysqli_query($link, $sql);

while($resultado = mysqli_fetch_array($busca)){
	$acesso= $resultado['acesso'];
}



if(($acesso['acesso'] == 1) && ($row == 1)){
	$_SESSION['username'] = $email;
	header('Location: ../tela_admin/admin_dash.php');
	exit();
} else if ($row == 1){
	$_SESSION['username'] = $email;
	header('Location: ../home/home.php');
	exit();
}else{
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../entrar/entrar.php');
	exit();
}
?>
