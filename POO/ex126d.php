<?php 
class triangulo{
    private $base;
    private $altura;

    public function setbase($b){
        $this->base = $b;
    }
    public function setaltura($a){
        $this->altura = $a;
    }
    public function calcula_area(){
        return $this->base * $this-> altura /2;
    }
}



?>