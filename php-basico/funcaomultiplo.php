<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

            function soma (){

                $p = func_get_args();
                $t = func_num_args();;

                $s = 0;

                for($i=0; $i<$t; $i++){
                    $s += $p[$i];
                }

                return $s;
            }

            $resultado = soma(10,2,100, 5, 10, 30, 20, 70);

            echo "A soma dos valores é $resultado";

            ?>

        </div>
    </div>
</body>
</html>