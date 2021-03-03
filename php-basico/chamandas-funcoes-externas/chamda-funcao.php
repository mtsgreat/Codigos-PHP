<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aulas de PHP</title>
</head>

<style>

    body {
        background-color: rgba(0, 0, 0, 0.658); 
    }
    .container{
        display: flex;
        justify-content: center;
        
    }

    .quadro {
        width: 800px;
        height: 500px;
        border: solid 1px black;
        background-color: white;

        border-radius: 8px;
        padding: 10px;
    }

    h1 {
        /* color: white; */
        text-align: center;}

</style>
<body>
    <h1>Aulas PHP</h1>
    <div class="container">
        <div class="quadro">
            

            <?php

              /* comando para chamar funcões externas de outro arquivo PHP */  
              include "funcoes.php";

              /* obs: o comando "require" tbm pode ser usado para fazer chamadas de funções ou 
              arquivos exernos,  a unica diferença, é que o Include continua tentando executar
              o script mesmo depois de não encontar o arquivos externo, já o require para tudo */


              echo "<h1>Testando funçoes sendo chamadas de outro arquivo<h1/>";


              ola();
              mostraValor(10);




            ?>
            


            
        </div>
    </div>
</body>
</html>