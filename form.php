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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Cadastro</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">

   
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Incluir</a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarNavAltMarkup" style="">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        
        <a class="nav-link"  href="formArq.php">Anexar</a>
        <a class="nav-link " href="listarArquivos.php">Listar Arquivos</a>
        
      </div>
    </div>
  </div>
</nav>

<div class="card mt-3">
    <h1 class="text-center ml-2"> Registros </h1>
</div>   
    
	<form class="mt-3" method="post" action="" enctype="multipart/form-data">
		Nome <input type="text" name="nome" value="<?=$nome?>" autofocus = "autofocus">
		    <input type="hidden" name="codigo" value="">
	    Selecione o arquivo: <input type="file" name="arquivo" />
      <input type="submit" value="Enviar"/>
      
    </form>
</body>
</html>