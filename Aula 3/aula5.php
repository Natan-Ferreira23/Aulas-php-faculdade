<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Aula 4</title>
</head>

<body>

    <div class="container">
         <div class="row">
            <section class="p-4 border">
               <h3>Atividade 1- resposta</h3>
               <?php 
               if(empty($_POST['valor1'])|| empty($_POST['valor2'])){
                  echo "<section class='alert alert-danger'>Os valores não foram informados! </section> ";
               }else{
                    $valor1=$_POST["valor1"];
                    $valor2=$_POST["valor2"];                
                    echo "<p>Valor 1: $valor1 </p>";
                    echo "<p>Valor 2: $valor2 </p>";
                    
                
                    $soma=$valor1+$valor2;
                    
                    if($valor1==$valor2){
                        echo"Os valores são iguais. A soma é $soma o triplo da soma é: ".$soma*3;
                    }else{
                        echo"A soma é: $soma";
                    }
                }
                
                ?>
            </section>
            <section class="p-4 border">
               <h3>Atividade 2- resposta</h3>
               <?php
               if(empty($_POST['texto'])){
                echo "<section class='alert alert-danger'>O texto não foram informado! </section> ";
               }
                else{
                 $texto=$_POST['texto'];
                 $validacao='ba';
                 echo"<p> Texto recebido:  $texto</p>";
                  
                  if(str_starts_with($texto,$validacao)){
                    echo "<section class='alert alert-success'> Texto: $texto  </section>";
                    
                  }else{
                    echo "<section class='alert alert-success'> Texto: $validacao". $texto. " </section>";
                  }
                }
                ?>
            </section>
            <section class="p-4 border">
            <h3>Atividade 3- resposta</h3>
              <?php 
                      if(empty($_POST['inicio']) || empty($_POST['fim'])){
                        echo "<section class='alert alert-danger'>Os valores não foram informados! </section> ";
                    } else{
                     $inicio=$_POST['inicio'];
                     $fim=$_POST['fim'];
                      $i;
                      if($inicio<$fim){
                        echo "<section class='alert alert-success'>";
                         for($i=$inicio;$i<=$fim;$i++){
                            if($i==$inicio){
                                echo "$i";
                            }else{
                               echo"-$i";
                            }                        
                         }
                         echo "</section>";
                      }else{
                        echo "<section class='alert alert-danger'>O valor do inicio deve ser menor que o fim ! </section> ";
                      }
                    }
              ?>
            </section>
            <section class="p-4 border">
                <?php 
                  if(empty($_POST['linhas'])){
                    echo "<section class='alert alert-danger'>O numero de linhas não foi informado! </section> ";
                  }else{
                    $linhas=$_POST['linhas'];                    
                        echo "<section class='alert alert-success'>";
                        for($i=0;$i<$linhas;$i++){
                          
                             for($j=0;$j<=$i;$j++){
                                echo "* ";
                             }
                             echo"<br>";
                           
                        }
                        echo "</section>";
                    
                  }
                ?>
            </section>
         </div>
         <div clas="row">
            <a href="index.php" class="btn btn-primary">Voltar para a pagina</a>
         </div>
    </div>
</body>

</html>