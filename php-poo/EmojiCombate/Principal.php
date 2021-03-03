<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EmojiCombat</title>
</head>
<body>

<h1>Luta Emoji Combat</h1>
    <pre>

<?php
        require_once "Lutador.php";
        require_once "Luta.php";

        $l = Array(0,1,2,3,4,5);

        $l[0] = new Lutador("Goku","Japão",30, 1.85,60.2,0,0,0);

        $l[1] = new Lutador("MestreKami","Japão",80, 1.85,70.2,0,0,0);


        $UEC01 = new Luta();
        $UEC01->marcarLuta($l[0],$l[1]);
        $UEC01->lutar();

        $l[1]->status();

        $l[0]->status();









    ?>
</pre>
</body>
</html>