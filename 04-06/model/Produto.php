<?php
class Produto{
    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;

   
    public function __construct($descricao, $estoque, $preco){
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;    
    }    

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getEstoque(){
        return $this->estoque;
    }

    public function setEstoque($estoque){
        $this->estoque = $estoque;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }
    public function getFabricante(){
        return $this->fabricante;
    }

    public function setFabricante(Fabricante $fabricante){
        $this->fabricante = $fabricante;
    }
    public function aumentarEstoque($unidades){
        if(is_numeric($unidades) AND $unidades > 0){
            $this->estoque += $unidades;
        }
    }

    // public function toString(){
    //     return "Produto: {$this->descricao} - 
    //     Estoque: {$this->estoque} - 
    //     Preço: {$this->preco} - ";
    // }
    public function toString(){
        return "Produto: {$this->descricao} - 
        Estoque: {$this->estoque} - 
        Preço: {$this->preco} - {$this->fabricante->__toString()}";
    }
}
?>