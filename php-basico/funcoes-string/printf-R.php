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

            $v[0] = 2;
            $v[1] = 5;
            $v[2] = 10;
            $v[3] = 100;

            print_r($v);


            /*A função print_r é bastante usado no desenvolvimento, para testar array_arrays 
            existem tbm mais duas funções parecidas, são elas: var_dump e var_export, fazem
            a mesma coisa, algumas mostrando mais detalhes dos arrays, posições e valores.*/

            ?>
            


            
        </div>
    </div>
</body>
</html>