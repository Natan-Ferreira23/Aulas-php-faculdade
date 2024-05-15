<?php 
 class Produto4{
     //Atributos privados
    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante; // do tipo fabricante
    public function __construct($descricao,$estoque,$preco,Fabricante $fabricante) { //construtor
        $this->descricao=$descricao;
        $this->estoque=$estoque;
        $this->preco=$preco;
        $this->fabricante=$fabricante;
    }
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
    /**
     * Get the value of fabricante
     */
    public function getFabricante()
    {
        return $this->fabricante;
    }

    /**
     * Set the value of fabricante
     */
    public function setFabricante(Fabricante $fabricante)
    {
        $this->fabricante = $fabricante;

        return $this;
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
    public function toString(){
        return "Descrição: {$this->descricao}, Estoque:{$this->estoque}, Preço:{$this->preco},Fornecedor:{$this->fabricante}";
    }
    
 }
 
?>