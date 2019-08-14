
<!DOCTYPE html>
<html lang="pt-br">

<?php
session_start();
include('..\conexao\conexao_banco.php');
?>


<head>
    <link rel="icon" type="imagem/png" href="./imagens/iajuda.png" />
     <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Ajudaê</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
    


</head>

<body>
    <div id="site">


        <!--logo aqui-->
  


        <!--Header personalizado aqui-->
        <?php
        $ID = $_SESSION['username'];
        

        $sql = mysqli_query($link, "SELECT ra, acesso FROM usuario WHERE email = '".$ID."' ");
        while($resultado = mysqli_fetch_array($sql)){

            if($resultado['acesso'] == '1'){
                include("header_master.php");
            } else {
                if($resultado['ra'] == "0"){
                
                    include("header_doador.php");
                }else{
                    include("header_donatario.php");
                }
            }


        }
        ?>


        <!--Filtros de busca-->
        <div id="busca">

         <h4><p style="text-align:center;">Categorias</p></h4>
         <a class="dropdown-item active " href="home.php">Principal</a>
         <a class="dropdown-item" href="categoria_alimentacao.php">Alimentaçao</a>
         <a class="dropdown-item" href="categoria_higienePessoal.php">Higiene pessoal</a>
         <a class="dropdown-item" href="categoria_moveis.php">Móveis</a>
         <a class="dropdown-item" href="categoria_reforco.php">Reforço</a>
         <a class="dropdown-item" href="categoria_vestuario.php">Vestuários</a>
         <a class="dropdown-item" href="categoria_outros.php">Outros</a>




     </div>



     <!--doacoes-->



     <div id="conteudo">
        <br/>
         <div class="card-deck">
        <div class="container-fluid">
        <div class="row text-center">

         <?php 


         $sql_pedido = mysqli_query($link, "SELECT titulo, descricao, ID_pedido FROM pedido WHERE status_pedido = 'visivel'ORDER BY `ID_pedido` DESC");
         while($resultado_pedido = mysqli_fetch_array($sql_pedido)){
            $cont = 0;
            $titulos = utf8_decode($resultado_pedido['titulo']);
            $descricao = utf8_decode($resultado_pedido['descricao']);
            $pedido = utf8_decode ($resultado_pedido['ID_pedido']);


            
            echo'

            <div class="col-sm-4">

                 <div class="card">
            
                     <div class="card-block">
                        <h4 class="card-title">'.$titulos.'</h4>
                        <p class="card-text">'.$descricao.'</p>
                     </div>
                     <center>
                         <div class="card-footer" >
                            <a style="width: 70%" class="btn btn-primary" href="ajudar.php?ID_pedido='.$resultado_pedido['ID_pedido'].'">Ajudar</a>
                         </div>
                     </center>    
            </div>
            <br/>
            </div>
            ';
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
