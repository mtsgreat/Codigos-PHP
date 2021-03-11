<?php

require_once "Pessoa.php";

class Gafanhoto extends Pessoa {
    private $login;
    private $totAssistindo;


    public function __construct($nome, $idade, $sexo, $login){
        parent::__construct($nome,$idade,$sexo);
        $this->login = $login;
        $this->totAssistindo = 0;
    }


    public function viuMaisum(){
        $this->setTotAssistindo($this->getTotAssistindo()+1);
    }


    public function getLogin(){
        return $this->login;
    }


    public function setLogin($login){
        $this->login = $login;
    }


    public function getTotAssistindo(){
        return $this->totAssistindo;
    }


    public function setTotAssistindo($totAssistindo){
        $this->totAssistindo = $totAssistindo;
    }



}