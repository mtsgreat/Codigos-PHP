<?php

require_once "Pessoa.php";
require_once "Publicacao.php";

class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function detalhes(){
        echo "----DETALHES DO LIVRO----";
        echo "<p>Titulo: ". $this->getTitulo();
        echo "<p>Autor: ". $this->getAutor();
        echo "<p>Total de Páginas: ". $this->getTotPaginas();
        echo "<p>Página atual: ". $this->getPagAtual();
        echo  "<p>Está aberto: ".$this->getAberto();
        echo "<p>Quem está lendo? ".$this->leitor->getNome();

    }

    public function __construct($titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = $pagAtual;
        $this->setAberto($aberto);
        $this->leitor = $leitor;
    }

    public function abrir(){
        $this->setAberto(true);
    }

    public function fechar(){
        $this->setAberto(false);
    }

    public function folhear($p){
        if ($p <= $this->getTotPaginas()){
            $this->setPagAtual($p);

        }
    }

    public function avanPag(){
        $this->setPagAtual($this->getPagAtual() + 1);
    }

    public function voltaPag(){
        if ($this->getPagAtual() >=0){
            $this->setPagAtual($this->getPagAtual() - 1);
        }
    }


    public function getTitulo(){
        return $this->titulo;
    }


    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }


    public function getAutor(){
        return $this->autor;
    }


    public function setAutor($autor){
        $this->autor = $autor;
    }


    public function getTotPaginas(){
        return $this->totPaginas;
    }


    public function setTotPaginas($totPaginas){
        $this->totPaginas = $totPaginas;
    }


    public function getPagAtual(){
        return $this->pagAtual;
    }


    public function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }


    public function getAberto(){
        return $this->aberto;
    }


    public function setAberto($aberto){
        $this->aberto = ($aberto)?'SIM':'NÃO';
    }


    public function getLeitor(){
        return $this->leitor;
    }


    public function setLeitor($leitor){
        $this->leitor = $leitor;
    }






}