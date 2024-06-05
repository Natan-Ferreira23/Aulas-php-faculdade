<?php 
 include './html/produto.html';
require './classes/Fabricante.php';
 require_once './classes/Produto.php'; //estrutura da classe produto

 //Crie Fabricante.php na pasta classe 
 //receba os dados e instancie um objeto Produto
 // imprima o objeto com o metódo toString

if(isset($_POST['descricao']) &&  isset($_POST['estoque']) && isset($_POST['preco']) ){ // verificam se estao preenchidos, se sim guarda na varivavel e instancia o objeto
    $descricao=$_POST['descricao'];
    $estoque=$_POST['estoque'];
    $preco=$_POST['preco'];
    $p1 = new Produto($descricao,$estoque,$preco);
    $fab1= new Fabricante;
    $fab1->setNome($_POST['fabricante']);
    $p1->setFabricante($fab1);
    print" {$p1->toString()}"; //imprimi
    echo'<h2>Banco de dados</h2>';
    require_once 'banco/connectFactory.php';
    $bd= new connectionFactory;
}

 ?>