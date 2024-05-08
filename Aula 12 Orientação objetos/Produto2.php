<?php 
 class Produto2{
     //Atributos privados
    private $descricao;
    private $estoque;
    private $preco;
    
    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($desc){
       $this->descricao=$desc;
    }
    public function getEstoque(){
        return $this->estoque;
    }
    public function setEstoque($estoque){
       $this->estoque=$estoque;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($preco){
        $this->preco=$preco;
    }
    public function aumentarEstoque($unidades){
        if(is_numeric($unidades) AND $unidades>0){
         $this->estoque+=$unidades;
        }
      }
    public function deminuirEstoque($unidades){
        if(is_numeric($unidades) AND $unidades>0){
            $this->estoque-=$unidades;
        }
    }
    public function reajustarPreco($percentual){
     if(is_numeric($percentual) AND $percentual>0){
           $this->preco*=(1+($percentual/100));
     }
    }
 }
 
?>