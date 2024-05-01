<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Listagem Login</title>
</head>
<body>
    <div class="container-fluid">
      <?php 
       include 'menu.php';
      ?>
      <div class="row">
         <div class="col m-3 p-3 text-center">
             <h1>Listagem de login</h1>
             <?php 
               require 'conectaBanco.php'; 
               $sql='SELECT * FROM login;'; // executando o select e guardando o comando na variavel;
               $resultado=mysqli_query($banco,$sql); // conexão com o banco, consulta que você deseja, o mysqli retorna uma matriz de elementos;

               $banco->close();
             ?>
             <table class="table table-hover">
                <thead>
                     <th scope="col">ID</th>
                     <th scope="col">Email</th>
                     <th scope="col">Senha</th>
                </thead>
                <tbody>
                   <?php 
                     if($resultado){
                        while($linha=mysqli_fetch_assoc($resultado)){
                            $id=$linha['id'];
                            $email=$linha['email'];
                            $senha=$linha['senha'];
                            echo "<tr>
                            <th scope='row'> $id</th>
                            <td> $email</td>
                            <td> $senha </td>
                            <th> Açôes </th>   
                            </tr>";
                        }
                     }                     
                    ?>
                </tbody>
             </table>               
         </div>
      </div>
    </div>
</body>
</html>