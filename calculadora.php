<?php 

class Calculadora {
    private $total;
    private $numero1;
    private $numero2;


    public function __construct() {
        $this->total   = 0;
        $this->numero1 = 0;
        $this->numero2 = 0; 
    }
    
    public function setNumero1 ($num1){
        $this->numero1 = $num1;
    }
    public function setNumero2($num2) {
        $this->numero2 = $num2;
    }

    public function getTotal(){
        return $this->total;
    }
//operações
    public function somar() {
        $this->total = $this->numero1 + $this->numero2;
    }

    public function subtrair() {
        $this->total = $this->numero1 - $this->numero2;
    }

    public function dividir() {
        $this->total = $this->numero1 / $this->numero2;
    }

    public function multiplicar() {
        $this->total = $this->numero1 * $this->numero2;
    }
}






?>