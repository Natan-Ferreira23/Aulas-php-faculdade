<?php 
require_once "dao/connectFactory.php";
require_once "model/Fabricante.php";
require_once "dao/FabricanteDao.php";
$fabricanteDao= new FabricanteDao();
include "view/Fabricante.php";
?>