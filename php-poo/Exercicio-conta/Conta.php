<?php


class Conta{
    var $numeroConta;
    var $tipoConta;
    var $donoConta;
    var $saldo;
    var $status;

    public function abrirConta($numero, $tipo, $dono){
        $this->numeroConta = $numero;
        $this->tipoConta = $tipo;
        $this->donoConta = $dono;
        $this->status = true;
        

        if($this->tipoConta == "Corrente"){
            $this->saldo = 50.00;
        }elseif($this->tipoConta == "Poupança"){
            $this->saldo = 150.00;
        }
        

    }


    public function fecharConta(){
        if($this->saldo == 0 && $this->saldo >=0){

            $this->numeroConta = "CLOSED";
            $this->tipoConta = "CLOSED";
            $this->donoConta = "CLOSED";
            $this->saldo = 0;
            $this->status = false;

        }
       

    }


    public function depositar($valor){
        if($this->status == true){
            $this->saldo = $valor;
        }
        

    }


    public function sacar($valor){
        if($valor <=  $this->saldo && $this->status == true){
            $this->saldo -= $valor;
        }
        
    }


    public function pagarMensalidade(){
        if($this->tipoConta == "Corrente"){
            $this->saldo -= 20;

        }elseif($this->tipoConta == "Poupança"){
            $this->saldo -= 10;
        }
    }


}

























?>