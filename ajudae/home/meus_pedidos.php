
<!DOCTYPE html>


<?php
session_start();
include('..\conexao\conexao_banco.php');
?>

<head>
    <link rel="icon" type="imagem/png" href="./imagens/iajuda.png" />
  <title>Ajudaê</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <html lang="pt-br">
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
  
  <div id="site">
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

    <!--Conteudo-->
    <div id="facaSeuPedido">
      <br />
      <h2>Pendentes</h2>
      <br />
      <div class="card-deck">
       <div class="container-fluid">
        <div class="row">
          <?php 
          $ID = $_SESSION['username'];
          $sql_pedido = mysqli_query($link, "SELECT titulo, descricao, ID_pedido, status_pedido FROM pedido WHERE FK_donatario_usuario = '$ID' AND status_pedido != 'finalizado' ORDER BY ID_pedido DESC  ");
          while($resultado_pedido = mysqli_fetch_array($sql_pedido)){
            $titulos = $resultado_pedido['titulo'];
            $descricao = $resultado_pedido['descricao'];
            $pedido = $resultado_pedido['ID_pedido'];
            $status = $resultado_pedido['status_pedido'];
            // mostrar pedidos pendentes
            if ($status == "pendente" ){
            echo'
            <div class="col-sm-4">
            <div class="card">
            <div class="card-block">
            <h4 class="card-title">'.$titulos.'</h4>
            <p class="card-text">'.$descricao.'</p>
            <p class="card-text">'. $status.'</p>
            </div>
            <div class="card-footer" >
            <center>
              <a style="width: 70%" class="btn btn-primary" href="../CRUD/aceitar_pedido.php?ID_pedido='.$resultado_pedido['ID_pedido'].'" >recebi ajuda</a>
              <br/>
              <a style="width: 70%" class="btn btn-primary" href="../CRUD/recusar_pedido.php?ID_pedido='.$resultado_pedido['ID_pedido'].'" >não recebi ajuda</a>
              <br/>
              <a style="width: 70%" class="btn btn-danger" href="../CRUD/excluir_pedido.php?ID_pedido='.$resultado_pedido['ID_pedido'].'" >Excluir meu pedido</a>
            </center>
            </div>
            </div>
            </br>
            </div>
            ';
            }
            // mostrar apenas pedidos visiveis
            if ($status == "visivel" ){
              echo'
              <div class="col-sm-4">
              <div class="card">
              <div class="card-block">
              <h4 class="card-title">'.$titulos.'</h4>
              <p class="card-text">'.$descricao.'</p>
              <p class="card-text">'. $status.'</p>
              </div>
              <center>
                <div class="card-footer" >
                  <a style="width: 70%" class="btn btn-danger" href="../CRUD/excluir_pedido.php?ID_pedido='.$resultado_pedido['ID_pedido'].'" >Excluir meu pedido</a>
                </div>
              <center>
              </div>
              </br>
              </div>
              ';
              }










          }
          ?>

        </div>
      </div>
    </div>
  </div>

  <!--Rodape-->   
  <div id="rodape">
    <?php
    include("footer.php");
    ?>
  </div>	

  <script  src="js/index.js"></script>

</div>
</body>
</html>