<?php 
class quadrado{
    private $lado;

    public function setlado($l){
        $this->lado = $l;
    }
    public function calcula_area(){
        return $this-> lado ** 2;
    }
}

?>
<a href="../POO/index.html">Voltar</a>