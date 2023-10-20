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
        if($tipo == "CC"){
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
             echo" <p>Conta de " . $this->getdono() . " fechada com sucesso!</p> ";
        }
    }
    public function depositar($valor){
        if($this->getstatus()){
             // $this->saldo = $this->saldo + $valor;
            $this->setsaldo($this->getsaldo() + $valor );   
            echo"<p>Deposito de R$ $valor na conta de " . $this->getdono() . "</p>";
        }
        else{
            echo"<p>Conta fechada, Não consigo depositar!</p>";
        }
    }
    public function sacar($valor){
        if($this->getstatus()){
            if($this->getsaldo() >= $valor){
                // $this->saldo = $this->saldo - $valor;
                $this->setsaldo($this->getsaldo() - $valor);
                echo"<p>Saque de R$ $valor autorizado na conta de ". $this->getdono() . "</p>";
            }
            else{
            echo"<p>Saldo insuficiente para saque!</p>";
            }
        }
        else{
            echo"<p>Não posso sacar de uma conta fechada!</p>";
        }
    }
    public function pagarMensal(){
        if($this->gettipo() == "CC"){
        $valor = 12; 
        }
        else if($this->gettipo() == "CP"){
            $valor = 20;
        }
        if ($this->getstatus()){
            $this->setsaldo($this->getsaldo() - $valor);
            echo"<p>Pagar a mensalidade de R$ $valor debitada na conte de " . $this->getdono() ."</p>";
        }
        else{
            echo"<p>Problemas com a conta, não posso cobrar.</p>";
        }
    }

    //métodos especiais 
    public function __construct(){
        $this->setsaldo(0);
        $this->setstatus(false);
        echo"<p>Conta criada com sucesso!</p>";
    }
    public function getnumConta(){
        return $this->numConta;
    }
    public function setnumConta($numConta){
        $this->numConta = $numConta;
    }
    public function gettipo(){
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

