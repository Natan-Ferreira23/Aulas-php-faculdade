<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <title>Exercico 1</title>
</head>
<body>

<div class="text-bg-dark p-3">
<div class="container">
       <h1>Exercicio1</h1>
       <?php 
         $num1=5;
         $num2=10;
         $soma=$num1+$num2;
         if($soma>10){
            $resultado=$soma+8;
         }else{
            $resultado=$soma-5;
         }
         echo "Resultado: $resultado";
?>    
</div>
   </div>
   
</body>
</html>