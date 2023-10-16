<?php 

class ContaBanco{
    //atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status ;       
   //métodos
    public function abrirConta($tipo){
        $this->settipo($tipo);
        $this->setstatus(true);
        if($tipo == "cc"){
            $this->setsaldo(50);
        }
        else if($tipo == "CP"){
            $this->setsaldo(150);
        }
    }
    public function fecharConta(){
        if($this->getsaldo() > 0){
            echo "<p>Conta ainda tem dinheiro,não posso fecha-lá!</p>";
        }
        else if ($this->getsaldo() < 0){
            echo"<p>Conta está em débito. Impossivel encerrar!</p>";
        }
        else{
             $this->setstatus(false);
        }
    }
    public function depositar($valor){
        if($this->getstatus()){
            $this->setsaldo($this->getsaldo() + $valor );
        }
        else{
            echo"<p>Conta fechada, Não consigo depositar!</p>";
        }
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

