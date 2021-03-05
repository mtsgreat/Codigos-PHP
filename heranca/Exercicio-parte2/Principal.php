<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<pre>



    <?php

    require_once "Visitante.php";

    /*$v1 = new Visitante();
    $v1->setNome("Mateus");
    $v1->setIdade(26);
    $v1->setSexo("M");

    print_r($v1);*/

    /*require_once "Aluno.php";

    $a1 = new Aluno();
    $a1->setNome("Mateus");
    $a1->setMatricula(123);
    $a1->setIdade(26);
    $a1->setSexo("M");
    $a1->setCurso("Programação");

    $a1->pagarMensalidade();

    print_r($a1);*/

    require_once "Bolsista.php";

    $b1 = new Bolsista();

    $b1->setMatricula(1122);
    $b1->setNome("Julia");
    $b1->setBolsa("12.5%");
    $b1->setCurso("Java");
    $b1->pagarMensalidade();

    print_r($b1);





    ?>

    </pre>
</body>
</html>