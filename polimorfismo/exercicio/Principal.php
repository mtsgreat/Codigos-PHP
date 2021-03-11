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
        require_once "Mamifero.php";
        require_once "Cachorro.php";
        require_once "Lobo.php";

        $m = new Mamifero();
        $c = new Cachorro();
        $l = new Lobo();


       $c->reagirHora(11,45);
       $c->reagirHora(21,00);






    ?>

</body>
</html>