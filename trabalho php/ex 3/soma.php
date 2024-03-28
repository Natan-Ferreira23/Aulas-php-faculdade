<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Soma</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div>
                <h1 class="text-center p-3">Resposta </h1>
            </div>
            <div class="row bg-dark text-white p-4">
                <?php 
               if(empty($_POST['num1']) && empty($_POST['num2'])){                
                echo"<div class='alert alert-danger' role='alert'>";
                echo"Digite os dados no formulario ! ";
                "</div>";
               }else{
                $num1=$_POST['num1'];
                $num2=$_POST['num2'];
                $soma=$num1+$num2;
                if($soma>10){
                    $soma+=8;
                    echo"<h6>Soma maior que 10 ou seja soma-se 8 ao valor </h6>";
                    echo"<div class='alert alert-success' role='alert'>
                    O resultado da soma é $soma</div>"; 
                }else{
                    $soma-=5;
                    echo"<h6>Soma menor ou igual a 10 subtrai 5 do valor </h6>";
                    echo"<div class='alert alert-success' role='alert'>
                    O resultado da soma é $soma</div>";                    
                }
               }
              ?>
            </div>
        </div>
    </div>
</body>

</html>