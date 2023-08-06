<?php
require_once "classe/Edit.php";

$codigo = $_GET['codigo'];
$nome = $_GET['nome'];

    
    $apagar = new Edit();
    $apagar->apagar($codigo, $nome);

