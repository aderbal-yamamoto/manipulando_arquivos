<?php 
require_once "classe/Edit.php";
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
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inclusão de Alunos</title>
</head>
<body>
	<form method="post" action="">
		Nome <input type="text" name="nome" value="<?=$nome?>" autofocus = "autofocus">
		    <input type="hidden" name="codigo" value="">
			<input type="submit" value="gravar">

    </form>
</body>
</html>