
<html >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <head>
        <title> Criptografia de AG </title>
    </head>
    <body>

        <?php

            // Variaveis de entrada de dados
            //$usuario = $_POST['usuario'];

            $dados = $_POST['dados'];

            // utilizando a criptografia de base64 para segurança
            $AG = base64_encode($dados);

            // chave utilizando caracter especial e as iniciais dos programadores e suas idades
            $chave = '[[[AG2122]]]';

            $chave = md5($chave);

            // concatenando a chave junto a criptografia de base64
            $criptografiaDeAG = $chave.$AG;

            // function do php substr retirando a posição da chave junto a base64_decode retirando a chave
            $saida = base64_decode($descriptografia= str_replace($chave, '',$criptografiaDeAG));

        ?>
        
        
        <br/>
        <p >
            <h5> Variavel de Entrada </h5>
            <br/>
            <?php 
                echo $dados;
            ?>
        </p>


        <br/><br/><br/><br/>
        <p> 
           <h5> Chave da Criptografia de AG</h5>
            <br/>
            <?php 
                echo $chave;
            ?>
        </p> 

        <br/><br/><br/><br/>
        <p> 
           <h5> Dados com a Criptografia de AG</h5>
            <br/>
            <?php 
                echo $criptografiaDeAG;
            ?>
        </p>    

        <br/><br/><br/><br/>
        <p >
            <h5> Variavel de saida </h5>
            <br/>
            <?php 
                echo $saida;
            ?>
        </p>

        <div align="center">
            <br/>
            <a href="trabalhoGregory.html" class="btn btn-primary">Consulte outro texto</a>
        </div>
    </body>
</html>