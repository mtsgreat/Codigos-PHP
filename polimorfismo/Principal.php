<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Polimorfismo</title>
</head>
<body>
    <pre>
    <?php
        require_once "Mamifero.php";
        require_once "Peixe.php";
        $m = new Mamifero();
        $p = new Peixe();

        $p->emitirSom();
        $m->emitirSom();








    ?>

        </pre>
</body>
</html>