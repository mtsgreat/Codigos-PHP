<?php

require_once "Animal.php";

class Peixe extends Animal{
    private $corEscamas;

    function soltarBolha(){
        echo "<p>SOltou bolha</p>";
    }

    function locomover(){
        echo "<p>Nadando</p>";
    }

    function alimentar(){
        echo "<p>Comendo Substâncias</p>";
    }

    function emitirSom(){
        echo "<p>Peixe não faz som</p>";
    }


    public function getCorEscamas(){
        return $this->corEscamas;
    }


    public function setCorEscamas($corEscamas)
    {
        $this->corEscamas = $corEscamas;
    }





}