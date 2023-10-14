<?php 

class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status ;       


    public function __construct($numConta , $tipo , $dono , $saldo , $status){
       $this->numConta = $numConta;
       $this->tipo = $tipo;
       $this->dono = $dono;
       $this->saldo = $saldo;
       $this->status = $status; 
    }
}

$numConta = "292540-5";
$tipo = "Conta Corrente";
$dono = "Leonardo Duque";
$saldo = "R$ 1.500";
$status = "Aberto";