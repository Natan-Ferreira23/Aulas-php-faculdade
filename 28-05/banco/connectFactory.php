<?php 
 class ConnectionFactory{
    static $conn; //varivael static uma variavel com um valor é igual em todos os objetos
    public function __construct() {
        $database ="mysql";//coloque o nome do seu banco
        $user="root";
        $senha="";
        $host="localhost";
        $porta="3307";
        try{
           $conn= new PDO("mysql:host=$host;port=$porta;dbname=$database",$user,$senha); // conecta com qualquer banco de dados
            echo"Conectado";
        }catch(PDOException $ex){
           echo "Erro!" . $ex->getMessage();
        }
    }
 }
?>