<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1> <?php echo "Olá mundo";?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <p> (O operador de soma do PHP é + )
                    <?php $soma=5+5;
                       echo " A soma de 5 + 5 é igual a: $soma";
                    ?>
                </p>
                <p> (O operador de potência é **)
                    <?php 
                      $potencia=5**2;
                      echo" A potencia de 5 elevado ao quadrado é: $potencia";
                    ?>
                </p>
                <p>(O operador de resto de divisão é %)
                    <?php 
                      $resto=15%4;
                      echo"O resto de  15%4 é: $resto";
                    ?>
                </p>
                <h3> Utilidades</h3>
                <p>Como verificar o tipo da variavel?</p>
                <p>Utilizamos a função gettype, exemplo a variável soma é do tipo:
                    <?php
                      echo gettype($soma);
                    ?>
                </p>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row ">
           <div class="m-2">
           <a href="exercicio1.php" class="btn btn-primary w-50">Exercicio 1</a>
           </div>
           <div class="m-2">
           <a href="exercicio2.php" class="btn btn-primary w-50">Exercicio 2</a>
           </div>
           <div class="m-2">
           <a href="exercicio3.php" class="btn btn-primary w-50">Exercicio 3</a>
           </div>
           <div class="m-2">
           <a href="exercicio4.php" class="btn btn-primary w-50">Exercicio 4</a>
           </div>          
        </div>            
    </div>
</body>
</html>