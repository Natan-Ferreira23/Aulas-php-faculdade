<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Exercicio2</title>
</head>
<body>
<?php  
 $n1=2;
 $n2=1;
 $n3=5;
 if($n1>$n2 && $n1>$n3){
    if($n2>$n3){
        echo "$n3-$n2-$n1";
    }
    else if($n3>$n2){
        echo "$n2-$n3-$n1";
    }
    else{
        echo "$n3-$n2-$n1";
    }
 }
 else if($n2>$n1 && $n2>$n3){
    if($n1>$n3){
        echo "$n3-$n1-$n2";
    }
    else if($n3>$n1){
       echo"$n1-$n3-$n2";
    }
    else{
        echo"$n1-$n3-$n2"; 
     }
    }
    else if($n3>$n1 && $n3>$n2){
        if($n1>$n2){
            echo"$n2-$n1-$n3";
        }
        else if($n2>$n1){
            echo"$n1-$n2-$n3";
        }
        else{
            echo"$n1-$n2-$n3";
        }
    }
    else{
        echo "$n1-$n2-$n3"; // todos são iguais
    }
?>
    
</body>
</html>