<!DOCTYPE html>
<html lang="en" >

<?php
include("../conexao/conexao_banco.php");
session_start();
?>


<head>
  <meta charset="UTF-8">
  <title>Simple and light sign up form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
  <link rel="stylesheet" type="text/css" href="css/estilo.css">



  <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  -->
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>


    <?php
   
        $ID = $_SESSION['username'];

        $sql = mysqli_query($link, "SELECT email, ra FROM usuario WHERE email = '".$ID."' ");
        while($resultado = mysqli_fetch_array($sql)){


        $id = $resultado['email'];


        }


    ?>

    <div id="facaSeuPedido">
      <br />
      <h2>Em que podemos te ajudar?</h2>
      <br />
      <br />
      <br />
      <div id = "formulario">

       <form class = "form"  action="../CRUD/inserir_pedido.php" method="POST">
         <div class="invisible">
            <input type="text" value="<?php echo $id; ?>" class="form__input" name="id" />
        </div>
         

          <div class="form-group row">
            <label for="O que você precisa?" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="Titulo" placeholder="Eu preciso de..." name="titulo">
            </div>
          </div>

          <div class="form-group">
            <label for="O que você precisa?"></label>
            <div class="col-sm-12">
              <textarea class="form-control" id="Titulo" rows="3"placeholder="Descriçao do que eu preciso..." name="descricao"></textarea>
            </div>
          </div>

          <div class="col-sm-12">

            <select class="form-control" id="exampleFormControlSelect1"name="categoria">
              <option>Higiene pessoal</option>
              <option>Vestimenta</option>
              <option>Alimentação</option>
              <option>Reforço</option>
              <option>Móveis</option>
            </select>

          </div>
          <br />
          <br />
          <br />
          <br />

          
          <div class="col-sm-5">

            <button type="submit" class="btn btn-primary">Fazer pedido</button>
          </div>

        </form>

        
      </div>

      
    </div>



  <div class="user">
    <header class="user__header">
      
        <h1 class="user__title">Realize seu pedido animal</h1>
    </header>
    
    <form class = "form"  action="../CRUD/inserir_pedido.php" method="POST">

        <div class="form__group">
            <input type="text" value="<?php echo $id; ?>" class="form__input" name="id" />
        </div>

        <div class="form__group">
            <input type="text" placeholder="Titulo do pedido" class="form__input" name="titulo" />
        </div>
       
        <div class="form__group">
            <input type="text" placeholder="Categorias" class="form__input" name="categoria" />
        </div>
        
        <div class="form__group">
            <input type="text" placeholder="Descrição sobre meu pedido" class="form__input" name="descricao" />
        </div>

        <button class="button wide" type="submit" value="submit">Cadastrar Aluno</button>
           
    </form>
</div>
  
  

    
<script  src="js/index.js"></script>



</body>

</html>