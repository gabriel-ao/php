
<!DOCTYPE html>


<?php
session_start();
include('..\conexao\conexao_banco.php');
?>


<head>
    <link rel="icon" type="imagem/png" href="./imagens/iajuda.png" />
  <html lang="pt-br">
  <title>Ajudaê</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
  <!--Puxar quem esta logado-->
  <?php

  $ID = $_SESSION['username'];

  $sql = mysqli_query($link, "SELECT email, ra FROM usuario WHERE email = '".$ID."' ");
  while($resultado = mysqli_fetch_array($sql)){
    $id = $resultado['email'];
}
?>


<!--Header personalizado aqui-->
<?php
$ID = $_SESSION['username'];
$sql = mysqli_query($link, "SELECT ra FROM usuario WHERE email = '".$ID."' ");
while($resultado = mysqli_fetch_array($sql)){
  if($resultado['ra'] == "0"){
    include("header_doador.php");
}else{
    include("header_donatario.php");
}
}
?>
<?php
$ID = $_SESSION['username'];
$sql = mysqli_query($link, "SELECT email, ra FROM usuario WHERE email = '".$ID."' ");
while($resultado = mysqli_fetch_array($sql)){
  $id = $resultado['email'];
}
?>

<!--doacoes-->
<div id="facaSeuPedido">
  <br />
  <h2>Que bom que resolveu ajudar!</h2>
  <br />

  <?php 
  $ID = $_SESSION['username'];
  $id_ped = $_GET['ID_pedido'];

  $sql_pedido = mysqli_query($link, "SELECT titulo, descricao FROM pedido WHERE ID_pedido = '".$id_ped."' ");
  while($resultado_pedido = mysqli_fetch_array($sql_pedido)){

    $titulos = $resultado_pedido['titulo'];
    $descricao = $resultado_pedido['descricao'];

    echo '


    <div class="card text-center">
      <div class="card-body">
          <h5 class="card-title">'.$titulos.'</h5>
          <p class="card-text">'.$descricao.'</p>
      </div>

      <div class="card-footer text-muted">
        <div class="container">
          <center>
              <a style="width: 15%" href="../CRUD/atualizar_pedido.php?ID_pedido='.$id_ped.'" class="btn btn-primary">Ajudaê</a>
              <br/>
              <a style="width: 15%" href="home.php" class="btn btn-primary">Voltar</a>
          </center>    
        </div>
      </div>
    </div>
    ';
}
?>
</div>


<!--Rodape-->   
<div id="rodape">
    <?php
    include("footer.php");
    ?>
</div>
</body>

</html>