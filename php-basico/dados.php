<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aulas de PHP</title>
</head>

<style>

    
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
   <?php

        $n = $_GET["num"];
        $o = $_GET["oper"];


        switch($o){
            case 1:
                $r = $n * 2;
                break;
            case 2: 
                $r = $n ^ 3;
                break;
            case 3:
                $r = sqrt($n);
        }

        echo "O resultado da Operação solicitada foi $r";
   ?>
    <br/>
    <a href="switch.html" class="botao">Voltar</a>
</body>
</html>