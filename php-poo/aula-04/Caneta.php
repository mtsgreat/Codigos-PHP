<?php


class Caneta {
  public $modelo;
  private $cor;
  private $ponta;
  private $tampada;

  /* metodo construtor 
  tbm pode ter o mesmo nome da classe*/

 /*  public function __construct(){
    $this->cor = "Azul";
    $this->tampar();
  }
 */

 /* Construtor recebendo parametros */
  public function Caneta($modelo, $cor, $ponta){
    $this->modelo = $modelo;
    $this->cor = $cor;
    $this->ponta = $ponta;
    $this->tampar();
  }

  public function tampar(){
      $this->tampada = true;
  }

  public function getModelo(){
      return $this->modelo;
  }

  public function setModelo($m){
      $this->modelo = $m;
  }

  public function getPonta(){
      return $this->ponta;
  }

  public function setPonta($p){
      $this->ponta = $p;
  }

}





?>