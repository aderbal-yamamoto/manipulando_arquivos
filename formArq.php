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
  <head>
    <title>Envio de arquivo</title>
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
      Selecione o arquivo: <input type="file" name="arquivo" />
      <input type="submit" value="Enviar"/>
      
    </form>
  </body>
</html>