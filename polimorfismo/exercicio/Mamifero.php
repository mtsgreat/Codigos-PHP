<?php

require_once "Animal.php";

class Mamifero extends Animal {
    protected $cordoPelo;
    public function emitirSom(){
        echo "<p>Som de Mamífero</p>";
    }


}