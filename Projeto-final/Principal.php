<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto Final</title>
</head>
<body>
<pre>
    <?php
        require_once "Video.php";
        require_once "Gafanhoto.php";
        require_once "Vizualizacao.php";

        $v[0] = new Video("Aula de Php");
        $v[1] = new Video("Aula de Php Avançada");


        print_r($v);

        $g[0] = new Gafanhoto("Mateus",26,"M","mtsgreat");
        $g[1] = new Gafanhoto("Duda",19,"F","eduarda@123");

        print_r($g);

        $vi[0] = new Vizualizacao($g[0],$v[0]);

        $vi[0]->avaliar();

        print_r($vi);





    ?>

    </pre>

</body>
</html>