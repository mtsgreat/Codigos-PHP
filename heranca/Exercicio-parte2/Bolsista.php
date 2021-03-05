<?php

require_once "Aluno.php";

class Bolsista extends Aluno {

    private $bolsa;

    public function renovarBolsa(){
        echo "Bolsa Renovada<p>";
    }


    public function pagarMensalidade(){
        echo $this->getNome(). " É bolsista, então paga com desconto de ".  $this->getBolsa();
    }


    public function getBolsa(){
        return $this->bolsa;
    }


    public function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }



}