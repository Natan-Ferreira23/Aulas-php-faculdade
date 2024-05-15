<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>POO</title>
</head>
<body>
    <div class="container">
        <div class="row">
             <div class="col p-3 bg-light">
                 <h1 class="text-center">Orientação a objetos com PHP</h1>
             </div>
        </div>
        <div class="row p-3">
            <div class="col">
                <h3> Classes em PHP</h3>
                <p>
                    Para declarar uma classe em PHP utilizamos a palavra reservada class
                </p>
                <code>
                     class produto{<br>
                             <!-- Atributos da classe -->
                            public $descricao; <br>
                            public $estoque;<br>
                            public $preco;<br>
                     }
                </code>                
                <p> Crie um arquivo Produto.php</p>
                <h2> Instanciando e criando objeto</h2>
                <p>Para usar uma classe é necessário importar o arquivo.php da classe</p>
                <code>
                    $p1=new Produto;  <br>
                    $p1->descricao="Biscoito salgado";<br>
                    $p1->estoque=10;<br>
                 $p1->preco=1.5;<br>
                </code>                
                <?php 
                 require_once 'Produto.php'; // nos trás só a classe;
                 $p1= new Produto;
                 $p1->descricao="Biscoito salgado"; //Editando valor de um atributo;
                 $p1->estoque=10; // instancia estoque
                 $p1->preco=1.5; //instancia preco;
                 echo"<h5>Imprimindo Atributos</h5>";                 
                 print "Produto - descrição:{$p1->descricao} <br>";
                 print "Produto - estoque: {$p1->estoque} <br>";
                 print "Produto - preço: {$p1->preco} <br>";
                ?>
                <p> Mostrando o codigo</p> 
                <code>                                  
                    print "Produto - descrição:{$p1->descricao}"; <br>
                    print "Produto - estoque: {$p1->estoque}";<br>
                    print "Produto - preço: {$p1->preco}"; <br>
                 </code>
                 <h2> Métodos da classe</h2>
                 <p>Classes possuem métodos, para declara-los é necessário a seguinte estrutura:</p>
                 <code>
                 public function aumentarEstoque($unidades){ <br>
                    if(is_numeric($unidades) AND $unidades>0){<br>
                    $this->estoque+=$unidades;<br>
                }<br>
                }<br>
                public function deminuirEstoque($unidades){<br>
                    if(is_numeric($unidades) AND $unidades>0){<br>
                        $this->estoque-=$unidades;<br>
                    }<br>
               }<br>
                public function reajustarPreco($percentual){<br>
                    if(is_numeric($percentual) AND $percentual>0){<br>
                        $this->preco*=(1+($percentual/100));<br>
                    }<br>
                }<br>
                 </code>
                 <p>Para utilizar utilizamos objeto->metodo(parametro)</p>
                 <h3>usando o metódo</h3>
                 <code>
                  $p1->aumentarEstoque(2); <br>
                  print "Novo estoque após o metódo: {$p1->estoque}";<br>
                 </code>
                 <?php 
                  
                  $p1->aumentarEstoque(2);
                  print "Novo estoque após o metódo: {$p1->estoque} <br>";
                 ?>
                 <h2> Usando encapsulamento e getter e setter</h2>
                 <p>Os atributos privados são definidos com o operador de visibilidade private, para testar vamos criar a classe produto2.php</p>
                 <p>Assim declaramos Getters e Setters</p>
                 <code>
                    private $descricao; <br>                    
                    private $estoque;<br>   
                    private $preco;<br>   
                    public function getDescricao(){<br>   
                        return $this->descricao;<br>   
                    }<br>   
                    public function setDescricao($desc){<br>   
                    $this->descricao=$desc;<br>   
                    }<br>   
                    public function getEstoque(){<br>   
                        return $this->estoque;<br>   
                    }<br>   
                    public function setEstoque($estoque){<br>   
                    $this->estoque=$estoque;<br>   
                    }<br>   
                    public function getPreco(){<br>   
                        return $this->preco;<br>   
                    }<br>   
                    public function setPreco($preco){<br>   
                        $this->preco=$preco;<br>   
                    }<br>                     
                 </code>
                 <h3>Aqui temos o codigo da criação do objeto, os  getters e setters</h3>
                 <p>Dar Um require_once "Produto2.php"</p>
                 <code>
                    require_once "Produto2.php"; <br>
                     $p2= new Produto2;<br>
                     $p2->setDescricao("Chocolate 70% cacau");<br>
                     $p2->setEstoque(2);<br>
                     $p2->setPreco(7.9);<br>   
                     print("<p>Descrição: {$p2->getDescricao()} - Estoque: {$p2->getEstoque()} - Preço: {$p2->getPreco()}</p>");                  
                 </code>
                    <?php 
                     require_once "Produto2.php";
                     $p2= new Produto2;
                     $p2->setDescricao("Chocolate 70% cacau");
                     $p2->setEstoque(2);
                     $p2->setPreco(7.9);

                     print("<p>O objeto p2 possui os seguintes valores </p>");
                     print("<p>Descrição: {$p2->getDescricao()} - Estoque: {$p2->getEstoque()} - Preço: {$p2->getPreco()}</p>");                     
                    ?>        
                    <h2>Utilizando Construtor para iniciar o objeto</h2>
                    <code>
                        <h4>O construtor do objeto</h4>
                    public function __construct($descricao,$estoque,$preco) { //construtor
                    $this->descricao=$descricao;
                    $this->estoque=$estoque;
                    $this->preco=$preco;
                    }
                    <h6>Instanciando: </h6>
                    $p3= new Produto3("bolacha",3,2);<br>
                      print("Descrição: {$p3->getDescricao()} - Estoque: {$p3->getEstoque()} - Preço: {$p3->getPreco()}");  <br>
                    <h4>Destroi o objeto</h4>
                    public function __destruct()<br>
                    {<br>
                        
                    }<br>
                    </code>
                    <?php 
                      require_once "Produto3.php";
                      $p3= new Produto3("bolacha",3,2);
                      print("<p>Descrição: {$p3->getDescricao()} - Estoque: {$p3->getEstoque()} - Preço: {$p3->getPreco()}</p>");  
                    ?>
                    <h2>Objetos compostos</h2>
                   <?php 
                   require_once "Fabricante.php";
                   require_once "Produto4.php";
                       $fab1=new Fabricante("Refrigerantes ltda","Rua qualquer","9023923");
                       $fab1->getNome();
                       $p4= new Produto4("Fanta", 5,8.00,$fab1);
                       print("<p>Descrição {$p4->getDescricao()} - Estoque {$p4->getEstoque()} - Preço: {$p4->getPreco()} - Fabricante: {$p4->getFabricante()->getNome()}" );                  
                      
                   ?>
                   <code>
                       <br>
                       $fab1=new Fabricante("Refrigerantes ltda","Rua qualquer","9023923"); <br>
                       $fab1->getNome();<br>
                       $p4= new Produto4("Fanta", 5,8.00,$fab1);<br>
                       print("<p>Descrição {$p4->getDescricao()} - Estoque {$p4->getEstoque()} - Preço: {$p4->getPreco()} - Fabricante: {$p4->getFabricante()->getNome()}" );<br>                       
                   </code>
                   <p>Note que passamos um objeto como parametro no objeto p4, e para acessarmos o nome do objeto fabricante, acessamos o fabricante e depois seu nome</p>
                   <h2> Herança</h2>
                   <p>O operador que define herança em PHP é o <strong>extends</strong></p>
                   <?php 
                     require_once 'Eletronico.php';
                     $eletronico= new Eletronico('teclado sem fio',10,100.9,127,$fab1);
                     //$eletronico->setFabricante($fab1);
                     print("<p>Descrição:{$eletronico->getDescricao()} - Estoque: {$eletronico->getEstoque()} - Preço: {$eletronico->getPreco()} - Voltagem: {$eletronico->getVoltagem()} - Fabricante {$eletronico->getFabricante()->getNome()} </p>");
                                        
                   ?>
                   <h4>Aqui temos uma classe filha</h4>
                   <p>Classe eletronicos é a classe filha de produto, conseguimos acessar os metódos de produto e também de eletronico</p>
                   <code>                   
                        class Eletronico extends Produto4{ <br>
                            private $voltagem;<br>
                            public function __construct($descricao,$estoque,$preco,$voltagem,Fabricante $fabricante){   <br> 
                            parent::__construct($descricao,$estoque,$preco,$fabricante);<br>
                            $this->voltagem=$voltagem;<br>
                            }<br>
                            
                            public function __destruct()<br>
                            {<br>
                                
                            }<br>
                            public function getVoltagem(){<br>
                                return $this->voltagem;<br>
                            }<br>
                            public function setVoltagem($voltagem){<br>
                                $this->voltagem=$voltagem;<br>
                            }<br>

                        }  <br>                
                   </code>
                   <h2>Criando uma classe cesta de compras</h2>
                   <p>A classe recebera a lista de produtos refente  a uma venda</p>
                   <?Php 
                     require_once 'Cesta.php';
                     $cesta= new Cesta;                     
                     $cesta->adicionarItem($p4);
                     $cesta->adicionarItem($eletronico);
                     print("Total da lista: {$cesta->calculaTotal()}");
                     echo "<p>{$cesta->exibeLista()}</p>";
                   ?>
            </div>
        </div>
    </div>
    
</body>
</html>