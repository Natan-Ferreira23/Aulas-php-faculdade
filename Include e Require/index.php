<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include e Require</title>
</head>
<body>
    <h1>Include</h1>
    <!--Utilizando include para importar dados e variaveis do arquivo.php-->
    <?php 
       include 'arquivo.php';
       echo "Variavel do include:$nome"."<br>"; //a variavel é de outro arquivo
      
       echo "Resultado da FUNÇÃO soma numeros: ".somaNumeros(4,5); //a função vem do arquivo do include;
    ?>  
      <h1>Require</h1>
      <!--Utilizando require para importar dados e variaveis do arquivo.php-->
      <p>Teste paragrafo</p>
    <?php
      require "arquivo2.php"; // se der erro o restante do arquivo nao executa
      echo"** $nome2 Soma: ".somaNumeros2(2,8);
    ?>
    <p>Testa paragrafo após require</p>
</body>
</html>