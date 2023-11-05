<?php 
#a)
class aluno{}

#b)

class livro{
    public $titulo;    
    public $autor;    
    public $numpag;    
} 

#c)

class carro{
    protected $porta;
    public $cor;
    protected $motorista;
}

#d)

class conta{
    private $numero;
    private $banco;
    private $saldo;

    public function depositar(){}
    public function sacar(){}
}

?>