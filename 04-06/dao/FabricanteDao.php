<?php
 class FabricanteDao{
    public function inserir(Fabricante $fab){
      try{
        $sql="INSERT INTO fabricante(nome,endereco,documento) VALUES(:nome, :endereco, :documento);";
        $conn=ConnectionFactory::getConnection()->prepare($sql); //os dois pontos sao para chamar o metodo do objt sem instanciar o obj]
        $conn->bindValue(":nome",$fab->getNome());
        $conn->bindValue(":endereco",$fab->getEndereco());
        $conn->bindValue(":documento",$fab->getDocumento());
        return $conn->execute();
      }catch(Exception $e){
        print "<p> Erro ao inserir Fabricante  $e</p>";       
      }
  
    }
    public function listar(){
      try{
        $sql= "SELECT * FROM fabricante";
        $result=ConnectionFactory::getConnection()->query($sql);
        $lista=$result->fetchAll(PDO::FETCH_ASSOC); 
        $fab_lista= array();
        foreach($lista  as $l){
          $fab_lista[]= $this->listarFabricante($l);
        }
        return $fab_lista;
      }catch(Exception $e){
        echo"Erro ao listar fabricantes {$e->getMessage()}";
      }
    }
    public function listarFabricante($row){
        $fabricante= new Fabricante();
        $fabricante->setCodigo($row['codigo']);
        $fabricante->setNome($row['nome']);
        $fabricante->setEndereco($row['endereco']);
        $fabricante->setDocumento($row['documento']);

        return $fabricante;
    }
 }

?>