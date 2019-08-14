



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
    $nome = $_POST['NomeCompleto'];
    $RA = $_POST['RA'];
    $telefone= $_POST['Telefone'];
    $password= $_POST['password'];
    $email = $_POST['email'];

    include("../conexao/conexao_banco.php");

    if ($RA == null){
        $RA = 0;
    }

    if ($RA == 0){
        $sqlinsert= " INSERT INTO USUARIO (email, nome, telefone, senha, RA) 
        VALUES ('$email', '$nome' , '$telefone', '$password', '$RA')";
        mysqli_query($link, $sqlinsert)or die(erro);
        echo ("doador cadastrado");
        
    }else{

        $buscar = "SELECT * FROM usuario WHERE RA ='$RA' ";
        $resultado = mysqli_query($link, $buscar)or die(erro);
        while($teste = mysqli_fetch_array($resultado)){

            if(($RA == $teste['RA']) && ($email == $teste['email']) ){
                $sqlupdate = "UPDATE USUARIO SET nome = '$nome' ,telefone='$telefone', senha='$password', email='$email' WHERE RA = '$RA' ";
                mysqli_query($link, $sqlupdate)or die(erro);
        
                echo ("aluno cadastrado");
            } else {
                echo ("não existe aluno com esses dados");
            }
        }
    }
?>


    <div class="user">
        <header class="user__header">
            <h1 class="user__title">Usuario <?php echo $email ?> Cadastrado com sucesso </h1>
        </header>
        
            </br>
            <center>
            <a class="btn btn-primary" style="width: 40%" type="submit" href="../entrar/entrar.php">voltar</a>
            </center>
    </div>
  
    <script  src="js/index.js"></script>

</body>

</html>
