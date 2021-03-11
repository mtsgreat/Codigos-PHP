<?php

require_once "Animal.php";

class Mamifero extends Animal {
    private $cordoPelo;

    function locomover(){
    echo "Correndo..";
    }

    function alimentar(){
        echo "<p>Mamando</p>";
    }

    function emitirSom(){
        echo "<p>Som de mamífero</p>";
    }


    public function getCordoPelo()
    {
        return $this->cordoPelo;
    }


    public function setCordoPelo($cordoPelo)
    {
        $this->cordoPelo = $cordoPelo;
    }




}