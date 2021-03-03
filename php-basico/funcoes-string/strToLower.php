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
        color: white;
        text-align: center;}

</style>
<body>
    <h1>Aulas PHP</h1>
    <div class="container">
        <div class="quadro">
            

            <?php

                /* A funcão strtolower coloca tudo em minusculo */

                /* Para colocarmos tudo em maisculas usamos a função, strtoupper */

                /* para colocar as primeiras letras como maisculas, usamos a função "ucfirts" */

                /* para colocar a primeira letra de todas a palavras maisculuas, usamos a função ucwords */

                $nome = "Mateus Silva do Nascimento";

                printf("Seu nome é ".strtoupper($nome));
          

            ?>
            


            
        </div>
    </div>
</body>
</html>