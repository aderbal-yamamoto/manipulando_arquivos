<?php 
require_once "classe/Upload.php";

$nome = $_GET['nome'];

$apre = new Upload();
$apre->mostrarPdf("imagens/".$nome.".pdf");

?>