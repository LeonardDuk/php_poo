<?php 
require_once 'controlador.php';

class controleRemoto implements Controlador{
  private $volume;
  private $ligado;
  private $tocando;
    
  public function __construct(){
    $this->volume = 50;
    $this->ligado = false;
    $this->tocando = false;
  }
  private function setVolume($volume){
    $this->volume = $volume;
  }
  private function getVolume(){
    return $this->volume; 
  }
  private function setLigado($ligado){
    $this->ligado = $ligado;
  }
  private function getLigado(){
    return $this->ligado; 
  }
  private function setTocando($tocando){
    $this->tocando = $tocando;
  }
  private function getTocando(){
    return $this->tocando;
  }
  public function ligar(){
    $this->setLigado(true);
  }
  public function desligar(){
    $this->setLigado(false);  
  }
  public function abrirMenu(){
    echo "<p> ---------Menu---------- </p>";
    echo "<br>Está Ligado?: " . ($this->getLigado()?"SIM":"NÃO"); 
    echo "<br>Esta tocando?: " . ($this->getTocando()?"SIM":"NÃO"); 
    echo "<br>Volume: " . ($this->getVolume());
          
    for($i = 0 ; $i <= $this->getVolume() ; $i += 10){
      echo "|";
    }
    echo"<br>";
  }
  public function fecharMenu(){
  echo"<br>Fechando Menu ... " ; 
  }
  public function maisVolume(){
    if($this->getLigado()){
      $this->setVolume($this->getVolume() + 5); 
    }
  }
  public function menosVolume(){
    if($this->getLigado()){
      $this->setLigado($this->getVolume() - 5);
      }  
    }
  public function ligarMudo(){
    if($this->getLigado() && $this->getVolume() < 0){
      $this->setVolume(0);
      }
    }
  public function desligarMudo(){
    if($this->getVolume() && $this->getVolume() == 0){
      $this->setVolume(50);
    } 
  }
  public function play(){
    if($this->getLigado() && ! ($this->getTocando())){
      $this->setTocando(true);
    }
  }
  public function pause(){
    if($this->getLigado()&& ($this->getTocando())){
      $this->setTocando(false);
      }
    }
}
