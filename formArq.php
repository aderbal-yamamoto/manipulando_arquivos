<?php
require_once "classe/Upload.php";


if(isset($_FILES)){
    
    $fil = isset($_FILES["arquivo"]) ? $_FILES : NULL;
    if(!is_null($fil)){
    $file = $fil['arquivo'];
    $arq = new Upload();
    $arq->uploadFiles($file);
    }
}
?>


<html>
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
        <a class="navbar-brand" href="#">Anexar</a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarNavAltMarkup" style="">
          <div class="navbar-nav">
           
            <a class="nav-link"  href="index.php">Home</a>
            <a class="nav-link" href="form.php">Incluir</a>
            <a class="nav-link " href="listarArquivos.php">Listar Arquivos</a>
            
          </div>
        </div>
      </div>
    </nav>

    <form class="mt-3 ml-3"action="" method="post" enctype="multipart/form-data">
      
    <div class="input-group mb-3">
        <input type="file" class="form-control"  name="arquivo" id="inputGroupFile02">
        
        <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04">Enviar</button>
    </div>  
    </form>
  </body>
</html>