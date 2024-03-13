<?php  
 $num=12;
 $meses=array("janeiro","fevereiro","março","abril","maio","junho","julho","agosto","setembro","outubro","novembro","dezembro");
 if($num>=1 && $num<=12){
    $num= $num-1;
   echo"<p>O mês do ano é: $meses[$num]  </p>";
 }else{
    echo"<p>Não existe o mês</p>";
 }
?>