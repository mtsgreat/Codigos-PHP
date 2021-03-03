<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Conta</title>
</head>
<body>
    
    <pre>
    
        <?php

            require_once 'Conta.php';

            $c = new Conta();

            //Abrindo conta
            $c->abrirConta(123,"Poupança","Mateus");

            

            //Fazendo um deposito
           // $c->depositar(200);


            //Sacando um valor
            //$c->sacar(170);


            //Fechando Conta
            //$c->fecharConta();


            //pagando Mensalidade da Conta
            //$c->pagarMensalidade();

            print_r ($c);



        ?>
    </pre>
</body>
</html>