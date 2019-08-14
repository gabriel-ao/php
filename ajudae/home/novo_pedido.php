
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

    <!--doacoes-->
    <div id="facaSeuPedido">
      <br />
      <h2>Em que podemos te ajudar?</h2>
      <br />
      <div id = "formulario">
       <form class = "form"  action="../CRUD/inserir_pedido.php" method="POST">
        <div class="form-group">
          <label for="" class="col-sm-2 col-form-label"></label>
          <div class="col-sm-12">
            <input type="text" class="form-control" id="Titulo" placeholder="Eu preciso de..." name="titulo">
          </div>
        </div>
        <div class="form-group">
          <label for=""></label>
          <div class="col-sm-12">
            <textarea class="form-control" id="Titulo" rows="3"placeholder="Descriçao do que eu preciso..." name="descricao" maxlength="400"></textarea>
          </div>
        </div>
        <div class="col-sm-12">
          <select class="form-control" id="exampleFormControlSelect1"name="categoria">
            <option>Alimentação</option>
            <option>Higiene pessoal</option>
            <option>Móveis</option>
            <option>Reforço</option>
            <option>Vestuário</option>
            <option>Outros</option>

          </select>
        </div>
        <div class="invisible">
          <input type="text" value="<?php echo $id; ?>" class="form__input" name="id" />
        </div>
        <center>
          <div class="col-sm-5">
            <button style="width: 30%" type="submit" class="btn btn-primary">Fazer pedido</button>
          </div>
        </center>  
      </form>
    </div>
  </div>

  <!--Rodape-->   
  <div id="rodape">
    <?php
    include("footer.php");
    ?>
  </div>
</body>

</html>