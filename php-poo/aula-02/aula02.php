<!DOCTYPE html>
<html lang="utf8_decode">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos</title>
</head>
<body>
    <?php

        require_once 'Caneta.php';

        $c1 = new Caneta;
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = false;



        /* Criando outro objeto */

        $c2 = new Caneta;
        $c2->cor = "Preta";
        $c2->ponta = 0.8;
        $c2->carga = 50;
        $c2->tampada = true;







    ?>
</body>
</html>