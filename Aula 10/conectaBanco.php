<?php 
// arquivo para concetar o banco de dados com o sistema
   $banco=new mysqli(
     "localhost","root","","Upet","3307"
//banco de dados,usuario,senha,nome banco, porta do banco de dados;
   
   );
//    if($banco->connect_errno){ // verifica se a conexao deu certo
//      echo "Errro ao conectar no banco de dados";
//    }else{
//     echo"Conectado com sucesso";
//    }
//   // $banco->close();// fecha o banco de dados
?>