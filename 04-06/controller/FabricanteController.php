<?php
require_once "../dao/connectFactory.php";
require_once "../model/Fabricante.php";
require_once "../dao/FabricanteDao.php";

$fabricante= new Fabricante;
$fabricanteDao= new FabricanteDao;

$dataPost= filter_input_array(INPUT_POST); //pega todas as inputs e guardam em formato de array, só pega inputs do tipo POST
if(isset($_POST['cadastrar'])){
    $fabricante->setNome($dataPost['nome']);
    $fabricante->setEndereco($dataPost['endereco']);
    $fabricante->setDocumento($dataPost['documento']);
    $fabricanteDao->inserir($fabricante);
    header('Location: ../FabricanteForm.php');
}
?>