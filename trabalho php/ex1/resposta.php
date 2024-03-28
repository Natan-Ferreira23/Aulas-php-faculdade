<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Exercicio 1</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Página Resposta</h1>
            <div class="row">
                <?php 
              if(isset($_POST['nome']) && isset($_POST['idade']) && isset($_POST['genero'])){
                $nome=$_POST['nome'];
                $idade=$_POST['idade'];
                $genero=$_POST['genero'];
                if($idade>25){
                echo"<div class='alert alert-success' role='alert'>";
                 echo"Nome:$nome, Idade:$idade, Genero:$genero, Você pode se cadastrar!";
                echo"</div>";
                }else{
                    echo"<div class='alert alert-danger' role='alert'>";
                    echo"Nome:$nome, Idade:$idade, Genero:$genero, Você não pode se cadastrar !";
                    echo"</div>";
                }
              }else{
                echo"<div class='alert alert-danger' role='alert'>";
                 echo"Digite os dados no formulario ! ";
                echo"</div>";
              }
             ?>
                <a href="index.php" class="btn btn-primary">Voltar a pagina</a>
            </div>
        </div>
    </div>
</body>

</html>