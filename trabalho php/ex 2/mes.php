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
            <div>
                <h1 class="text-center p-3">Resposta do mês</h1>
            </div>
            <div class="row row bg-dark text-white p-2">
                <?php 
              if(empty($_POST["num"])){
                echo"<div class='alert alert-danger' role='alert'>";
                echo"Digite os dados no formulario ! ";
                "</div>";
              }else{
                $num=$_POST['num'];
               
                if($num>=1 && $num<=12){
                $num=$num-1;
                $meses=array('janeiro','fevereiro','março','abril','maio','junho','julho','agosto','setembro','outubro','novembro','dezembro'); 
                echo"<div class='alert alert-info' role='alert'>
                O mês do ano correspondente é $meses[$num]</div>";
                }else{
                    echo"<div class='alert alert-danger' role='alert'>
                    Não existe nenhum numero nesse intervalo</div>"; 
                }   
              }

              ?>
            </div>
        </div>
    </div>
</body>

</html>