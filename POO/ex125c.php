<?php 
class aeroporto{
    private $nome;
    private $cidade;

    public function setnome($n){
        $this->nome = $n;  
    }
    public function getnome(){
        return $this->nome;
    }
    public function setcidade($c){
        $this->cidade=$c;
    }
    public function getcidade(){
        return $this->cidade;
    }   
}
?>
<a href="../POO/index.html">Voltar</a>