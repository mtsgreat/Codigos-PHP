<!DOCTYPE html>
<html lang="utf8_decode">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos</title>
</head>
<body>

    <pre>

            <?php

                require_once 'Caneta.php';

                $c1 = new Caneta("Bic","Preta", 0.8);
               
                print_r($c1);

            ?>
    </pre>
</body>
</html>