<?php 
require_once "classe/Edit.php";
require_once "classe/Upload.php";

$nome = isset($_POST['nome']) ? $_POST['nome'] : NULL;

//verificar se tem codigo e nome vai alterar 
if(isset($_GET['codigo'])&& isset($_GET['nome'])){
	$codigo = $_GET['codigo'];
	$nome = $_GET['nome'];
	
	if(isset($_POST['nome'])){
	
		$novoNome = $_POST['nome'];
		$editar   = new Edit();
		$editar->editar($codigo, $nome, $novoNome);
	}

} else {
	$cadastrar = new Edit();
	$cadastrar->gravar($nome);
}
if(isset($_FILES)){
    
    $fil = isset($_FILES["arquivo"]) ? $_FILES : NULL;
    if(!is_null($fil)){
    $file = $fil['arquivo'];
    $arq = new Upload();
    $arq->uploadFiles($file);
    }
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Inclusão de Alunos</title>
</head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
		Nome <input type="text" name="nome" value="<?=$nome?>" autofocus = "autofocus">
		    <input type="hidden" name="codigo" value="">
	    Selecione o arquivo: <input type="file" name="arquivo" />
      <input type="submit" value="Enviar"/>
      
    </form>
</body>
</html>