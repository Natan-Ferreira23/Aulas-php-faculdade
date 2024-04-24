<?php  
  require "conectaBanco.php"; //conexao fecha;
  $usuario= $_POST['usuario'];
  $senha=$_POST['senha'];
  // monta o comando de inserir
  $sql="INSERT INTO login(email, senha) VALUES ('$usuario','$senha')";
  //executando o codigo sql;
  $banco->query($sql);
  //Verifica quantas linhas foram afetadas;
  if($banco->affected_rows>=1){
    echo "<p>O usuario: $usuario cadastrado com sucesso</p>";
  }
  $banco->close();
  
?>