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
    require_once "Pessoa.php";
    require_once "Aluno.php";
    require_once "Professor.php";
    require_once "Funcionario.php";


    $novaPessoa = new Pessoa();
    $novoAluno = new Aluno();
    $novoProfessor = new Professor();
    $novoFuncionario = new Funcionario();

    $novaPessoa->setNome("Mateus");
    $novoAluno->setNome("Duda");
    $novoProfessor->setNome("Guanabara");
    $novoFuncionario->setNome("João");

    $novoAluno->setCurso("Informatica");
    $novoProfessor->setSalario(2000.90);
    $novoFuncionario->setSetor("Estoque");

    print_r($novaPessoa);
    print_r($novoAluno);
    print_r($novoProfessor);
    print_r($novoFuncionario);






    ?>

    </pre>
</body>
</html>