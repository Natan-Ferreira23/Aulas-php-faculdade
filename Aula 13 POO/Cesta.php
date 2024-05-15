<?php 
 class Cesta{
   private $itens;
   public function adicionarItem(Produto4 $item){
     $this->itens[]=$item;
   }   
   public function exibeLista(){
    $lista="";
    foreach($this->itens as $item){
        $item= "{$lista}<br> {$item->toString()}";
        return $lista;
    }
   } 
   public function calculaTotal(){
     $total=0.0;
     foreach ($this->itens as $item){
           $total+=$item->getPreco();
     }
     return "R$ {$total}";
   }
 }
?>