<?php 
 class Eletronico extends Produto4{
    private $voltagem;
    public function __construct($descricao,$estoque,$preco,$voltagem,Fabricante $fabricante){    
       parent::__construct($descricao,$estoque,$preco,$fabricante);
       $this->voltagem=$voltagem;
    }
    
    public function __destruct()
    {
        
    }
    public function getVoltagem(){
        return $this->voltagem;
    }
    public function setVoltagem($voltagem){
        $this->voltagem=$voltagem;
    }

 }
?>