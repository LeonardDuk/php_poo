<?php 
require_once 'controlador.php';
abstract class controleRemoto implements Controlador{
        private $volume;
        private $ligado;
        private $tocando;
    
        public function __construct(){
         $this->volume = 50;
         $this->ligado = false;
         $this->tocando = false;
        }
        private function setVolume($volume){
    
        }
        private function getVolume(){
          return $this->volume = $volume ; 
        }
        private function setligado(){
    
        }
        private function getligado(){
    
        }
        private function setTocando(){
    
        }
        private function getTocando(){
    
        }
        public function ligar(){
          $this->setLigado(true);
        }
        public function desligar(){
          $this->setligado(false);  
        }
        public function abrirMenu(){
          echo "<br>Está Ligado?: " . ($this->getligado()?"SIM":"NÃO"); 
          echo "<br>Esta tocando?: " . ($this->gettocando()?"SIM":"NÃO"); 
          echo "<br>Volume: " . ($this->getVolume()?"SIM":"NÃO");
          
          for ($i = 0 ; $i<=$this->getVolume() ; $i += 10){
            echo "|";
          }
          echo"<br>";
        }
        public function fecharMenu(){
         echo"<br>Fechando Menu ... " ; 
        }
        public function maisVolume(){
          if ($this->getligado()){
            $this->setvolume($this->getvolume() + 5); 
          }
        }
        public function menosVolume(){
          if ($this->getligado()){
            $this->setVolume($this->getVolume() - 5);
          }  
        }
        public function ligarMudo(){
    
        }
        public function desligarMudo(){
    
        }
        public function play(){
    
        }
        public function pause(){
    
        }
        
        
        
}
