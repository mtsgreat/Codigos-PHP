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
<?php
    require_once "Pessoa.php";
    require_once "Livro.php";

    $pessoa1 = new Pessoa("Duda",24, "F");
    $pessoa2 = new Pessoa("Mateus",26, "M");


    $livro1 = new Livro("Ataque dos Titãs", "um Japa", 100, 0, false, $pessoa2);
    $livro2 = new Livro("PHP e POO","Um programador",200,0,false,$pessoa1);

    $livro2->folhear(50);
    $livro2->voltaPag();
    $livro2->detalhes();





?>

</body>
</html>

