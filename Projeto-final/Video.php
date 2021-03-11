<?php

require_once "AcoesVideo.php";

class Video implements  AcoesVideo {
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo){
        $this->titulo = $titulo;
        $this->avaliacao = 0;
        $this->views = 0;
        $this->curtidas = 0;
        $this->setReproduzindo(false);
    }

    public function play(){
        $this->setReproduzindo(true);
    }

    public function pause(){
        echo "<p>PAUSADO</p>";
        $this->setReproduzindo(false);
    }

    public function like(){
        $this->setCurtidas($this->getCurtidas()+1);
    }


    public function getTitulo(){
        return $this->titulo;
    }


    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }


    public function getAvaliacao(){
        return $this->avaliacao;
    }


    public function setAvaliacao($avaliacao){
        $media = (($this->avaliacao + $avaliacao) / $this->views);
        $this->avaliacao = $media;
    }


    public function getViews(){
        return $this->views;
    }


    public function setViews($views){
        $this->views = $views;
    }


    public function getCurtidas(){
        return $this->curtidas;
    }


    public function setCurtidas($curtidas){
        $this->curtidas = $curtidas;
    }


    public function getReproduzindo(){
        return $this->reproduzindo;
    }


    public function setReproduzindo($reproduzindo){
        $this->reproduzindo = ($reproduzindo)?"SIM":"NÃO";
    }




}