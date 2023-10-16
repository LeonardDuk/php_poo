<?php 

class ContaBanco{
    //atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status ;       
   //métodos
    public function abrirConta(){
      
    }
    public function fecharConta(){
        
    }
    public function depositar(){

    }
    public function sacar(){

    }
    public function pagarMensal(){

    }
    //métodos especiais 
    public function __construct(){
        
    }
    public function getnumConta(){
        return $this->numConta;
    }
    public function setnumConta($numConta){
        $this->numConta = $numConta;
    }
    public function getipo(){
        return $this->tipo;
    }
    public function settipo($tipo){
        $this->tipo = $tipo;
    }
    public function getdono(){
        return $this->dono;
    }
    public function setdono($dono){
        $this->dono = $dono;
    }
    public function getsaldo(){
        return $this->saldo;
    }
    public function setsaldo($saldo){
        $this->saldo = $saldo;
    }
    public function getstatus(){
        return $this->status;
    }
    public function setstatus($status){
        $this->status = $status;
    }
}

