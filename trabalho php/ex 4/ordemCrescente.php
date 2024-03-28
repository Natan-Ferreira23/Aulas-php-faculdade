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
                <div class="row">
                    <?php 
                    if(empty($_POST['num1']) && empty($_POST['num2']) && empty($_POST['num3'])){                
                        echo"<div class='alert alert-danger' role='alert'>";
                        echo"Digite os dados no formulario ! ";
                        "</div>";
                    }else{
                        $num1=$_POST['num1'];
                        $num2=$_POST['num2'];
                        $num3=$_POST['num3'];
                        // variaveis
                        $maior;
                        $meio;
                        $menor;
                       if($num1>$num2 && $num1>$num3){ //caso num1 seja o maior
                         $maior=$num1;
                         if($num2>$num3){ //caso num2 seja o do meio e num3 o menor
                            $meio=$num2;
                            $menor=$num3;
                         }else if($num3>$num2){ //caso num3 seja meio e num2 o menor
                            $meio=$num3;
                            $menor=$num2;
                         }else{ // todos os dois são iguais então tanto faz
                            $meio=$num3;    
                            $menor=$num2;
                         }                       
                       }  else if($num2>$num1 && $num2>$num3){ // quando num2 é o maior de todos
                          $maior=$num2;
                          if($num1>$num3){ //quando num1 é maior que num2
                            $meio=$num1;
                            $menor=$num3;
                          }else if($num3>$num1){ // quando num2 é maior que num1
                            $meio=$num3; 
                            $menor=$num1;
                          }else{ //os dois são iguais iguais 
                            $meio=$num2; 
                            $menor=$num1;
                          }
                       }else if($num3>$num1 && $num3>$num2){// num3 é o maior de todos
                        $maior=$num3;
                        if($num1>$num2){ // num1 é do meio e num2 o menor
                            $meio=$num1;
                            $menor=$num2;
                        }else if( $num2>$num1){ //num2 é o do meio e num1 o menor 
                            $meio=$num2;
                            $menor=$num1;
                        }else{ //todos sao iguais
                            $meio=$num2;
                            $menor=$num1;
                        }
                       }else{ //Todos os numeros são iguais
                        $maior=$num1;
                        $meio=$num2;
                        $menor=$num3;
                       }
                    echo"<div class='alert alert-success' role='alert'>
                  A ordem decrescente dos numeros informados é [$maior $meio $menor ]</div>";                    
                }
                    ?>
                </div>
                <div class="row">
                    <a href="index.php" class="btn btn-primary">Voltar a pagina principal </a>
                </div>
            </div>
        </div>
</body>

</html>