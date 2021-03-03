<?php


class Lutador{
    private $nome;
    private $nacionaliade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;



    function apresentar(){
        echo "<p>---------------------------</p>";
        echo "O lutador " .$this->getNome();
        echo "<br>Diretamamente do " . $this->getNacionaliade();
        echo "<br>Tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . " Kg";
        echo "<br>Ele tem " . $this->getVitorias() . " vitórias<br>";
        echo $this->getDerrotas() . " Derrotas e " . $this->getEmpates() . " empates";

    }

    function status(){
        echo "<p>---------------------------</p>";
        echo "<p>" . $this->getNome() . " é um peso " .$this->getCategoria();
        echo "<br>e já ganhou " . $this->getVitorias() . " Vezes";
        echo "<br>e perdeu " . $this->getDerrotas() . " Vezes";
        echo "<br>e empatou " . $this->getEmpates() . " Vezes";


    }

    function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);

    }

    function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);

    }


    public function __construct($nome, $nacionaliade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
    {
        $this->nome = $nome;
        $this->nacionaliade = $nacionaliade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }


    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    public function getNacionaliade()
    {
        return $this->nacionaliade;
    }


    public function setNacionaliade($nacionaliade)
    {
        $this->nacionaliade = $nacionaliade;
    }


    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }


    public function getAltura()
    {
        return $this->altura;
    }


    public function setAltura($altura)
    {
        $this->altura = $altura;
    }


    public function getPeso()
    {
        return $this->peso;
    }


    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }


    public function getCategoria()
    {
        return $this->categoria;
    }


    public function setCategoria(){
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->peso <= 70.3){
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9){
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2){
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }

    }


    public function getVitorias()
    {
        return $this->vitorias;
    }


    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }


    public function getDerrotas()
    {
        return $this->derrotas;
    }


    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }


    public function getEmpates()
    {
        return $this->empates;
    }


    public function setEmpates($empates)
    {
        $this->empates = $empates;
    }









}